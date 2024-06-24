@extends('backend.layouts.vertical', [
    'title' => __('Create'),
    'sub_title' => 'Newsletter',
    'sub_url' => route('backend.newsletter.index'),
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('css')
    @vite('resources/sass/backend/plugins/grapesjs.scss')
@endsection

@section('content')
<form method="POST" action="{{ route('backend.newsletter.save') }}">
    @csrf
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="flex justify-between items-center">
                    <div class="flex items-center mauto">
                        <input type="checkbox" id="to_be_sent" class="form-switch text-success" name="to_be_sent">
                        <label for="to_be_sent" class="ms-1.5">
                            {{ __('Disable') }} / {{ __('Enable') }}
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="create-button-submi btn border-primary text-primary hover:bg-primary hover:text-white">
                            <i class="mgc_save_2_line text-base me-4"></i>
                            {{ __('Create') }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label for="inputState" class="text-gray-800 text-sm font-medium inline-block mb-2">
                            {{ __('Send to') }}
                        </label>
                        <select id="inputState" class="form-input" name="for" required>
                            <option value="all">{{ __('All') }}</option>
                            <option value="guests" selected>{{ __('Only guests') }}</option>
                            <option value="all">{{ __('Only users') }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="start_sending_at" class="text-gray-800 text-sm font-medium inline-block mb-2">
                            {{ __('To be sent from date') }}
                        </label>
                        <input type="datetime-local" class="form-input" id="start_sending_at" name="start_sending_at"
                            value="{{ now()->add('2d') }}" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <div data-fc-type="tab" class="">
                    <nav class="flex space-x-2 border-b border-gray-200 dark:border-gray-700" aria-label="Tabs"
                        role="tablist">
                        @foreach (getAllLocales() as $locale)
                            <button data-fc-target="#tab-locale-{{ $locale }}" type="button"
                                class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 {{ app()->getLocale() == $locale ? 'active' : '' }}"
                                id="#tab-locale-item-{{ $locale }}" aria-controls="tab-locale-{{ $locale }}"
                                role="tab">
                                <img src="{{ Vite::asset('resources/images/backend/flags/' . $locale . '.jpg') }}"
                                    alt="{{ __('language') . ' ' . __($locale) }}" class="h-4 w-6">
                                {{ __($locale) }}
                            </button>
                        @endforeach
                        
                    </nav>
                    @foreach (getAllLocales() as $locale)
                        <div class="mt-3">
                            <div id="tab-locale-{{ $locale }}"
                                class="{{ app()->getLocale() != $locale ? 'hidden' : '' }}" 
                                role="tabpanel"
                                aria-labelledby="tab-locale-item-{{ $locale }}"
                            >
                                <div class="mb-3 relative">
                                    <label class="text-gray-800 text-sm font-medium inline-block mb-2" for="subject_{{$locale}}">
                                        {{ __('Subject') }}
                                    </label>
                                    <input type="text" placeholder="{{ __('Subject') }}" name="jubject['{{$locale}}']" id="subject_{{$locale}}" class="form-input @error("jubject.'$locale'") border-red-500 focus:border-red-500 text-red-700 @enderror">
                                    @error("jubject.'$locale'")
                                        <p class="text-xs text-red-600 mt-2"> {{ str_replace("jubject.'$locale'",__('Subject'),$message) }}</p>
                                    @enderror
                                </div>
                                <input type="hidden" id="formatted_content_{{$locale}}" name="formatted_content['{{$locale}}']">
                                <input type="hidden" id="unformatted_content_{{$locale}}" name="unformatted_content['{{$locale}}']">
                                <div id="gjs-{{ $locale }}-editor" class="border">
                                    <mjml>
                                        <mj-body>
                                            <mj-section>
                                                <mj-column>
                                                    <mj-text>My Company</mj-text>
                                                </mj-column>
                                            </mj-section>
                                        </mj-body>
                                    </mjml>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('script')
    @vite('resources/js/backend/plugins/grapesjs.js')
@endsection

@section('script-bottom')
    <script type="text/javascript" defer>
        // Funzione debounce
        function debounce(func, wait) {
            let timeout;
            return function(...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, args), wait);
            };
        }

        function insertValue(locale, unformattedContent, formattedContent) {
            let inputFormattedContent = document.getElementById('formatted_content_' + locale);
            let inputUnformattedContent = document.getElementById('unformatted_content_' + locale);
            inputFormattedContent.value = formattedContent;
            inputUnformattedContent.value = unformattedContent;
        }

        document.addEventListener('DOMContentLoaded', function() {
            @foreach (getAllLocales() as $locale)
                const editor{{ $locale }} = grapesJS.init({
                    fromElement: true,
                    container: '#gjs-{{ $locale }}-editor',
                    plugins: [grapesJSMJML],
                    pluginsOpts: {
                        [grapesJSMJML]: {
                            /* ...options */
                        }
                    }
                });

                // Aggiungi un listener per l'evento component:update con debounce
                const debouncedLog{{ $locale }} = debounce(function(locale,unformattedContent,formattedContent) {
                    insertValue(locale,unformattedContent,formattedContent);
                    Block.remove('.create-button-submi');
                }, 5000); // 300 millisecondi di debounce

                editor{{ $locale }}.on('load',function(model) {
                    //console.log(`{{ $locale }} :`, model);
                    let locale = '{{ $locale }}';
                    let formattedContent = editor{{ $locale }}.runCommand('mjml-code-to-html')?.html
                    let unformattedContent = model.toHTML();
                    debouncedLog{{ $locale }}(locale,unformattedContent,formattedContent);
                    Block.pulse('.create-button-submi',{svgSize: '19px',});
                });

                // Aggiungi un listener per l'evento component:update
                editor{{ $locale }}.on('component:update', function(model) {
                    //console.log(`{{ $locale }} :`, model);
                    let locale = '{{ $locale }}';
                    let formattedContent = editor{{ $locale }}.runCommand('mjml-code-to-html')?.html
                    let unformattedContent = model.toHTML();
                    debouncedLog{{ $locale }}(locale,unformattedContent,formattedContent);
                    Block.pulse('.create-button-submi',{svgSize: '19px',});
                });


            @endforeach
        });
    
    </script>
@endsection
