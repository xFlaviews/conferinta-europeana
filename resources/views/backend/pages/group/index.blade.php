@extends('backend.layouts.vertical', [
    'title' => __('Group'),
    'sub_title' => 'Menu',
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('modals')
    <div id="modal" class="hidden z-10 items-center justify-center h-screen w-screen fixed top-0 bg-black bg-opacity-60">
        <!--Modal Dialog -->
        <div class="bg-white max-w-4xl w-full rounded-md"> <!--Modal Content -->
            <div class="border-b border-b-gray-300 p-6"> <!--Modal Body -->
                <form method="POST" id="modal-form-generic" action="{{ route('backend.group.save') }}">
                    @csrf
                    <div class="grid lg:grid-cols-3 gap-6 mb-3">
                        <div>
                            <label for="group-name" class="text-gray-800 text-sm font-medium inline-block mb-2">{{ __('Group Name') }}</label>
                            <input type="text" id="group-name" class="form-input" name="name">
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
            @can('group.create')
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <button onclick="showModal('create')"
                        class="btn bg-primary/20 text-sm font-medium text-primary hover:text-white hover:bg-primary">
                        <i class="mgc_add_circle_line me-3"></i>
                        {{ __('Group') }}
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
                        @foreach ($groups as $group)
                            @php
                                $group->editUrl = route('backend.group.update', $group);    
                            @endphp
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    <b>#{{ $group->id }}</b>
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $group->name }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $group->created_at }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                    {{ $group->updated_at }}
                                </td>
                                <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">

                                    @can('group.update')
                                        <button id="modal-button" class="ms-0.5 me-0.5" onclick="showModal('edit',{{ json_encode($group->toArray()) }})">
                                            <i class="mgc_edit_line text-lg text-warning"></i>
                                        </button>
                                    @endcan
                                    {{-- x
                                    @can('group.delete')
                                        <form method="POST"
                                            id="form-delete-group"
                                            action="{{ route('backend.group.delete', $group->id) }}"
                                            class="inline"
                                        >
                                            @csrf
                                            <button class="ms-0.5" title="{{ __('Delete') }}">
                                                <i class="mgc_delete_line text-xl text-danger"></i>
                                            </button>
                                        </form>
                                    @endcan
                                    --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($groups->hasMorePages())
                <div class="py-1 px-4 border-t">
                    {{ $groups->links() }}
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
        {{-- 
        const formsDelete = document.querySelectorAll('#form-delete-group');
            
        formsDelete.forEach(function(form) {
            form.addEventListener('submit', function(group) {
                const confirmed = confirm('Sei sicuro di voler eliminare questo groupo?');
                if (!confirmed) {
                    group.prgroupDefault();
                }
            });
        });
        --}}

        function showModal(modalType, content = null) {
            
            if (modalType == 'edit') {
                modal.style.display = "flex"; // Show modal
                x.style.overflow = "hidden"; //Disable scroll on body
                modalForm.action = content.editUrl
                document.getElementById('group-name').value = content.name
            }
            if (modalType == 'create') {
                modal.style.display = "flex"; // Show modal
                x.style.overflow = "hidden"; //Disable scroll on body
                modalForm.action = '{{ route('backend.group.save') }}';
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
        window.onclick = function(group) {
            if (group.target == modal) {
                modal.style.display = "none"; // Hide modal
                x.style.overflow = "auto"; // Active scroll on body
            }
        }

        document.addEventListener('keydown', function(group) {
            if (group.key === 'Escape') {
                modal.style.display = "none"; // Hide modal
                x.style.overflow = "auto"; // Active scroll on body
            }
        });
    </script>
@endsection
