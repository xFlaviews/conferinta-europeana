@extends('backend.layouts.vertical', [
    'title' => __('Event'),
    'sub_title' => 'Menu',
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('modals')
    <div id="modal" class="hidden z-50 items-center justify-center h-screen w-screen fixed top-0 bg-black bg-opacity-60">
        <!--Modal Dialog -->
        <div class="bg-white max-w-4xl w-full rounded-md"> <!--Modal Content -->
            <div class="border-b border-b-gray-300 p-6"> <!--Modal Body -->
                <form method="POST" id="modal-form-generic" action="{{ route('backend.event.save') }}">
                    @csrf
                    <div class="grid lg:grid-cols-3 gap-6 mb-3">
                        <div>
                            <label for="event-name" class="text-gray-800 text-sm font-medium inline-block mb-2">{{ __('Event Name') }}</label>
                            <input type="text" id="event-name" class="form-input" name="name" required>
                        </div>
                        <div>
                            <label for="from-date" class="text-gray-800 text-sm font-medium inline-block mb-2">{{ __('From Date') }}</label>
                            <input class="form-input" id="from-date" type="date" name="from_date" required>
                        </div>
                        <div>
                            <label for="to-date" class="text-gray-800 text-sm font-medium inline-block mb-2">{{ __('To Date') }}</label>
                            <input class="form-input" id="to-date" type="date" name="to_date" required>
                        </div>
                    </div>
                    <button type="submit" class="btn border-primary text-primary hover:bg-primary hover:text-white">
                        <i class="mgc_save_2_line text-base me-4"></i>
                        {{ __('Save') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="mt-6">
        <div class="card">
            @can('event.create')
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <button onclick="showModal('create')"
                        class="btn bg-primary/20 text-sm font-medium text-primary hover:text-white hover:bg-primary">
                        <i class="mgc_add_circle_line me-3"></i>
                        {{ __('Event') }}
                </button>
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
                                {{ __('Name') }}
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('From Date') }}
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                {{ __('To Date') }}
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
                        @foreach ($events as $event)
                            @php
                                $event->editUrl = route('backend.event.update', $event);    
                            @endphp
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    <b>#{{ $event->id }}</b>
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $event->name }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $event->from_date }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $event->to_date }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $event->created_at }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $event->updated_at }}
                                </td>
                                <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">

                                    @can('event.update')
                                        <button id="modal-button" class="ms-0.5 me-0.5" onclick="showModal('edit',{{ json_encode($event->toArray()) }})">
                                            <i class="mgc_edit_line text-lg text-warning"></i>
                                        </button>
                                    @endcan
                                    @can('event.delete')
                                        <form method="POST"
                                            id="form-delete-event"
                                            action="{{ route('backend.event.delete', $event->id) }}"
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
            @if ($events->hasMorePages())
                <div class="py-1 px-4 border-t">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection

@section('script-bottom')
    <script type="text/javascript">
        const x = document.getElementsByTagName('BODY')[0] // Select body tag because of disable scroll when modal is active
        const modal = document.getElementById('modal') // modal
        let modalForm = document.getElementById('modal-form-generic');

        const modalClose = document.getElementsByClassName('modal-close') // close modal button
        //TODO fix this

        const formsDelete = document.querySelectorAll('#form-delete-event');
            
        formsDelete.forEach(function(form) {
            form.addEventListener('submit', function(event) {
                const confirmed = confirm('Sei sicuro di voler eliminare questo evento?');
                if (!confirmed) {
                    event.preventDefault();
                }
            });
        });

        function showModal(modalType, content = null) {
            
            if (modalType == 'edit') {
                modal.style.display = "flex"; // Show modal
                x.style.overflow = "hidden"; //Disable scroll on body
                modalForm.action = content.editUrl
                document.getElementById('event-name').value = content.name
                document.getElementById('from-date').value = content.from_date
                document.getElementById('to-date').value = content.to_date
            }
            if (modalType == 'create') {
                modal.style.display = "flex"; // Show modal
                x.style.overflow = "hidden"; //Disable scroll on body
                modalForm.action = '{{ route('backend.event.save') }}';
            }
            
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
