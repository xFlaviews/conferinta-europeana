@extends('backend.layouts.vertical', [
    'title' => __('Dashboard').' '.group()->name,
    'sub_title' => __('Group'),
    'sub_url' => route('backend.group.index'),
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
            Test 
        </div>
    </div>
@endsection

@section('script-bottom')


@endsection
