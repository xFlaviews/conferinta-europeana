@extends('backend.layouts.vertical', [
    'title' => 'Newsletter',
    'sub_title' => 'Menu',
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('modals')
    <div id="modal" class="hidden z-10 items-center justify-center h-screen w-screen fixed top-0 bg-black bg-opacity-60">
        <!--Modal Dialog -->
        <div class="bg-white max-w-4xl w-full rounded-md"> <!--Modal Content -->
            <div class="border-b border-b-gray-300"> <!--Modal Body -->
                <iframe id="preview-newsletter-iframe" width="100%" style="height: 70vh;">
                </iframe>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="mt-6">
        <div class="card">
            @can('newsletter.create')
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <a href="{{ route('backend.newsletter.create') }}"
                        class="btn bg-primary/20 text-sm font-medium text-primary hover:text-white hover:bg-primary">
                        <i class="mgc_add_circle_line me-3"></i>
                        {{ __('Newsletter') }}
                    </a>
                </div>
            @endcan
            <div class="relative overflow-x-auto">
                <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                    <thead
                        class="bg-slate-300 bg-opacity-20 border-t dark:bg-slate-800 divide-gray-300 dark:border-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                ID
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('Subject') }}
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('Send to') }}
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('To be sent from date') }}
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('Created at') }}
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('Updated at') }}
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('Action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
                        @foreach ($newsletters as $newsletter)
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    <b>#{{ $newsletter->id }}</b>
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $newsletter->subject }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ __($newsletter->for) }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $newsletter->start_sending_at }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $newsletter->created_at }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $newsletter->updated_at }}
                                </td>
                                <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">

                                    <button id="modal-button" class="me-0.5"
                                        onclick="showModal('{{ route('backend.newsletter.show', $newsletter->id) }}')">
                                        <i class="mgc_eye_2_line text-xl text-info"></i>
                                    </button> <!--Open Modal -->

                                    @can('newsletter.update')
                                        <a href="{{ route('backend.newsletter.edit', $newsletter->id) }}" class="ms-0.5 me-0.5">
                                            <i class="mgc_edit_line text-lg text-warning"></i>
                                        </a>
                                    @endcan
                                    @can('newsletter.delete')
                                        <form 
                                            method="POST"
                                            id="form-delete-newsletter"
                                            action="{{ route('backend.newsletter.delete', $newsletter->id) }}"
                                            class="inline"
                                        >
                                            @csrf
                                            <button class="ms-0.5" title="{{ __('Delete') }}">
                                                <i class="mgc_delete_line text-xl text-danger"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($newsletters->hasMorePages())
                <div class="py-1 px-4 border-t">
                    {{ $newsletters->links() }}
                </div>
            @endif
        </div>
    </div>

@endsection

@section('script-bottom')
<script type="text/javascript">
    const x = document.getElementsByTagName('BODY')[0] // Select body tag because of disable scroll when modal is active
    const modal = document.getElementById('modal') // modal
    const iframe = document.getElementById('preview-newsletter-iframe')

    const modalClose = document.getElementsByClassName('modal-close') // close modal button
    //TODO fix this
    document.getElementById('form-delete-newsletter').addEventListener('submit', function(event) {

        this.preventDefault(); // Impedisce l'invio del modulo
        let userResponse = confirm("Vuoi procedere con l'operazione?");
        // Controlla la risposta dell'utente
        if (userResponse) {
            // L'utente ha cliccato su "OK"
            this.submit(); // Impedisce l'invio del modulo
        } else {
            // L'utente ha cliccato su "Annulla"
            
        }
        
    });

    function showModal(url) {
        modal.style.display = "flex"; // Show modal
        x.style.overflow = "hidden"; //Disable scroll on body
        iframe.src = url;
    }


    // Select and trigger all close buttons
    for (var i = 0; i < modalClose.length; i++) {
        modalClose[i].addEventListener('click', function() {
            modal.style.display = "none"; // Hide modal
            x.style.overflow = "auto"; // Active scroll on body
        })
    }

    // Close modal when click away from modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none"; // Hide modal
            x.style.overflow = "auto"; // Active scroll on body
        }
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            modal.style.display = "none"; // Hide modal
            x.style.overflow = "auto"; // Active scroll on body
        }
    });
</script>
@endsection