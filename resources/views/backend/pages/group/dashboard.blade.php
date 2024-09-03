@extends('backend.layouts.vertical', [
    'title' => __('Dashboard').' '.group()->name,
    'sub_title' => __('Group'),
    'sub_url' => route('backend.group.index'),
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('modals')
    <div id="modal" class="hidden z-50 items-center justify-center h-screen w-screen fixed top-0 bg-black bg-opacity-60">
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

    <div class="flex flex-auto flex-col">
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex justify-between items-center">
                        <h5 class="card-title">{{ __('Events') }}</h5>
                        {{-- <div class="bg-success text-xs text-white rounded-md py-1 px-1.5 font-medium" role="alert">
                            <span>Complated</span>
                        </div> --}}
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="py-3 px-6">
                        {{-- <h5 class="my-2">
                            <a href="apps-project-detail.html" class="text-slate-900 dark:text-slate-200">Landing page Design</a>
                        </h5> --}}
                        <p class="text-gray-500 text-sm mb-9">
                            {{ __('In this section you can associate this group with other events') }}
                        </p>

                        <div class="flex -space-x-2">
                            <button class="btn bg-primary text-white" data-fc-type="modal" type="button">
                                {{ __('Add Event') }}
                            </button>
                            
                            <div class="w-full h-full mt-5 fixed top-0 left-0 z-50 transition-all duration-500 fc-modal hidden">
                                <div class="sm:max-w-7xl fc-modal-open:opacity-100 duration-500 opacity-0 ease-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-white border shadow-sm rounded-md dark:bg-slate-800 dark:border-gray-700">
                                    <form method="POST" action="{{ route('backend.group.associate_event', group()) }}">
                                        <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                            <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                                {{ __('Add Event') }}
                                            </h3>
                                            <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                                                <span class="material-symbols-rounded">close</span>
                                            </button>
                                        </div>
                                        <div class="px-4 py-8 overflow-y-auto">
                                            
                                            @csrf
                                            <label for="event-select" class="text-gray-800 text-sm font-medium inline-block mb-2">
                                                {{ __('Select Event') }}
                                            </label>
                                            <select class="form-select" id="event-select" name="event">
                                                    <option></option>
                                                @foreach ($events as $event)
                                                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="flex justify-end items-center gap-4 p-4 border-t dark:border-slate-700">
                                            <button class="btn dark:text-gray-200 border border-slate-200 dark:border-slate-700 hover:bg-slate-100 hover:dark:bg-slate-700 transition-all" data-fc-dismiss type="button">{{ __('Cancel') }}</button>
                                            <button type="submit" class="btn bg-primary text-white">{{ __('Add') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="border-t p-5 border-gray-300 dark:border-gray-700">
                        <div class="grid lg:grid-cols-2 gap-4">
                            <div class="flex items-center justify-between gap-2">
                                <a href="#" class="text-sm">
                                    <i class="mgc_calendar_line text-lg me-2"></i>
                                    <span class="align-text-bottom">15 Dec</span>
                                </a>

                                <a href="#" class="text-sm">
                                    <i class="mgc_align_justify_line text-lg me-2"></i>
                                    <span class="align-text-bottom">56</span>
                                </a>

                                <a href="#" class="text-sm">
                                    <i class="mgc_comment_line text-lg me-2"></i>
                                    <span class="align-text-bottom">224</span>
                                </a>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                    <div class="bg-success h-1.5 rounded-full dark:bg-success w-2/3"></div>
                                </div>
                                <span>66%</span>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-auto flex-col mt-5">
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($groupEvents as $groupEvent)
            <div class="card">
                <div class="card-header">
                    <div class="flex justify-between items-center">
                        <h5 class="card-title">{{ __('Event') .' : '. $groupEvent->name }}</h5>
                        {{-- <div class="bg-success text-xs text-white rounded-md py-1 px-1.5 font-medium" role="alert">
                            <span>Complated</span>
                        </div> --}}
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="py-3 px-6">
                        {{-- <h5 class="my-2">
                            <a href="apps-project-detail.html" class="text-slate-900 dark:text-slate-200">Landing page Design</a>
                        </h5> --}}
                        <p class="text-gray-500 text-sm mb-9">
                            {{ __('In this section you can associate this group with other events') }}
                        </p>

                        <div class="flex -space-x-2">
                            <button class="btn bg-primary text-white" data-fc-type="modal" type="button">
                                {{ __('Add Rooms') }}
                            </button>
                            
                            <div class="w-full h-full mt-5 fixed top-0 left-0 z-50 transition-all duration-500 fc-modal hidden">
                                <div class="sm:max-w-7xl fc-modal-open:opacity-100 duration-500 opacity-0 ease-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-white border shadow-sm rounded-md dark:bg-slate-800 dark:border-gray-700">
                                    <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                        <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                            Modal Title
                                        </h3>
                                        <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                                            <span class="material-symbols-rounded">close</span>
                                        </button>
                                    </div>
                                    <div class="px-4 py-8 overflow-y-auto">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            This is a wider card with supporting text below as a natural lead-in
                                            to additional
                                            content.
                                        </p>
                                    </div>
                                    <div class="flex justify-end items-center gap-4 p-4 border-t dark:border-slate-700">
                                        <button class="btn dark:text-gray-200 border border-slate-200 dark:border-slate-700 hover:bg-slate-100 hover:dark:bg-slate-700 transition-all" data-fc-dismiss type="button">Close</button>
                                        <a class="btn bg-primary text-white" href="javascript:void(0)">Save</a>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn bg-primary text-white" data-fc-type="modal" type="button">
                                {{ __('Mange Guests') }}
                            </button>
                            
                        </div>
                    </div>
                    
                    {{-- <div class="border-t p-5 border-gray-300 dark:border-gray-700">
                        <div class="grid lg:grid-cols-2 gap-4">
                            <div class="flex items-center justify-between gap-2">
                                <a href="#" class="text-sm">
                                    <i class="mgc_calendar_line text-lg me-2"></i>
                                    <span class="align-text-bottom">{{ $groupEvent->from_date }}</span>
                                </a>

                                <a href="#" class="text-sm">
                                    <i class="mgc_align_justify_line text-lg me-2"></i>
                                    <span class="align-text-bottom">56</span>
                                </a>

                                <a href="#" class="text-sm">
                                    <i class="mgc_comment_line text-lg me-2"></i>
                                    <span class="align-text-bottom">224</span>
                                </a>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                    <div class="bg-success h-1.5 rounded-full dark:bg-success w-2/3"></div>
                                </div>
                                <span>66%</span>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script-bottom')


@endsection
