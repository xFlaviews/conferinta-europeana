@extends('backend.layouts.vertical', [
    'title' => __('Edit'),
    'sub_title' => 'Newsletter',
    'sub_url' => route('backend.newsletter.index'),
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('css')
    @vite('resources/sass/backend/plugins/grapesjs.scss')
@endsection

@section('content')
    @php
        $allLocales = getAllLocales();
    @endphp

    <form method="POST" id="form-submit-newsletter" action="{{ route('backend.newsletter.update', $newsletterContent->id) }}"
        class="form-submit-newsletter">
        @csrf
        <div class="flex flex-col gap-6">
            <div class="card">
                <div class="card-header card-header-to-blocked">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center mauto">
                            <input type="checkbox" id="to_be_sent" class="form-switch text-success" name="to_be_sent"
                                {{ $newsletterContent->to_be_sent ? 'checked' : null }}>
                            <label for="to_be_sent" class="ms-1.5">
                                {{ __('Disable') }} / {{ __('Enable') }}
                            </label>
                        </div>
                        <div>
                            <button type="submit"
                                class="btn border-primary text-primary hover:bg-primary hover:text-white">
                                <i class="mgc_save_2_line text-base me-4"></i>
                                {{ __('Save') }}
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
                                <option value="guests" {{ $newsletterContent->for == 'guests' ? 'selected' : 'selected' }}>
                                    {{ __('Only guests') }}</option>
                                <option value="users" {{ $newsletterContent->for == 'users' ? 'selected' : null }}>
                                    {{ __('Only users') }}</option>
                                <option value="all" {{ $newsletterContent->for == 'all' ? 'selected' : null }}>
                                    {{ __('All') }}</option>
                            </select>
                        </div>
                        <div>
                            <label for="start_sending_at" class="text-gray-800 text-sm font-medium inline-block mb-2">
                                {{ __('To be sent from date') }}
                            </label>
                            <input type="datetime-local" class="form-input" id="start_sending_at" name="start_sending_at"
                                value="{{ $newsletterContent->start_sending_at }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="p-6">
                    <div data-fc-type="tab" class="">
                        <nav class="flex space-x-2 border-b border-gray-200 dark:border-gray-700 @if (count($errors) > 0) border-red-500 focus:border-red-500 @endif"
                            aria-label="Tabs" role="tablist">
                            @foreach ($allLocales as $locale)
                                <button data-fc-target="#tab-locale-{{ $locale }}" type="button"
                                    class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 @error("subject.'$locale'") border-red-500 focus:border-red-500 text-red-700 @enderror {{ app()->getLocale() == $locale ? 'active' : '' }}"
                                    id="#tab-locale-item-{{ $locale }}"
                                    aria-controls="tab-locale-{{ $locale }}" role="tab">
                                    <img src="{{ Vite::asset('resources/images/backend/flags/' . $locale . '.jpg') }}"
                                        alt="{{ __('language') . ' ' . __($locale) }}" class="h-4 w-6">
                                    {{ __($locale) }}
                                </button>
                            @endforeach

                        </nav>
                        @foreach ($allLocales as $locale)
                            <div class="mt-3">
                                <div id="tab-locale-{{ $locale }}"
                                    class="{{ app()->getLocale() != $locale ? 'hidden' : '' }}" role="tabpanel"
                                    aria-labelledby="tab-locale-item-{{ $locale }}">
                                    <div class="mb-3 relative">
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2"
                                            for="subject_{{ $locale }}">
                                            {{ __('Subject') }}
                                        </label>
                                        <input type="text" placeholder="{{ __('Subject') }}"
                                            name="subject[{{ $locale }}]" id="subject_{{ $locale }}"
                                            class="form-input @error("subject.$locale") border-red-500 focus:border-red-500 text-red-700 @enderror"
                                            value="{{ $newsletterContent->getTranslation('subject', $locale) }}">
                                        @error("subject.$locale")
                                            <p class="text-xs text-red-600 mt-2">
                                                {{ str_replace("subject.$locale", __('Subject'), $message) }}</p>
                                        @enderror
                                    </div>
                                    <input type="hidden" id="formatted_content_{{ $locale }}"
                                        name="formatted_content[{{ $locale }}]">
                                    <input type="hidden" id="unformatted_content_{{ $locale }}"
                                        name="unformatted_content[{{ $locale }}]">
                                    <div id="gjs-{{ $locale }}-editor" class="border">
                                        {!! $newsletterContent->getTranslation('unformatted_content', $locale) !!}
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
    <script type="text/javascript">
        let editors = [];

        document.getElementById('form-submit-newsletter').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Impedisce l'invio del modulo
            }
        });

        document.getElementById('form-submit-newsletter').addEventListener('submit', function(event) {
            event.preventDefault(); // Previene l'invio del form
            Block.hourglass('.form-submit-newsletter');

            @foreach ($allLocales as $locale)

                let locale{{ $locale }} = '{{ $locale }}';
                let formattedContent{{ $locale }} = editors.{{ $locale }}.runCommand(
                    'mjml-code-to-html')?.html;
                let unformattedContent{{ $locale }} = editors.{{ $locale }}.getWrapper()
                .getInnerHTML();
                insertValue(locale{{ $locale }}, unformattedContent{{ $locale }},
                    formattedContent{{ $locale }});
            @endforeach
            
            this.submit();
        });

        function insertValue(locale, unformattedContent, formattedContent) {
            let inputFormattedContent = document.getElementById('formatted_content_' + locale);
            let inputUnformattedContent = document.getElementById('unformatted_content_' + locale);
            inputFormattedContent.value = formattedContent;
            inputUnformattedContent.value = unformattedContent;
        }

        document.addEventListener('DOMContentLoaded', function() {
            Block.hourglass('.form-submit-newsletter');
            @foreach ($allLocales as $locale)
                const editor{{ $locale }} = grapesJS.init({
                    fromElement: true,
                    container: '#gjs-{{ $locale }}-editor',
                    plugins: [grapesJSMJML],
                    pluginsOpts: {
                        [grapesJSMJML]: {
                            /* ...options */
                        }
                    },
                    storageManager: false,
                });

                editors['{{ $locale }}'] = editor{{ $locale }};
            @endforeach
            Block.remove('.form-submit-newsletter');
        });
    </script>
@endsection
