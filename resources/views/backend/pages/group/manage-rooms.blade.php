@extends('backend.layouts.vertical', [
    'title' => __('Manage Rooms').' '.group()->name,
    'sub_title' => __('Dashboard'),
    'sub_url' => route('backend.group.dashboard'),
    'mode' => $mode ?? '',
    'demo' => $demo ?? '',
])

@section('content')

<div class="grid 2xl:grid-cols-4 gap-6 mb-6">
    @foreach ($hotels as $hotel)
        @php
            $hotelTotalRooms = 0;
            $hotelTotalBeds = 0;
            foreach ($hotel->typesOfRoom as $typeOfRoom) {
                $hotelTotalRooms += $typeOfRoom->rooms->count();
                $hotelTotalBeds += $typeOfRoom->max_guests * $typeOfRoom->rooms->count();
            }
        @endphp
        <div class="col-span-1">
            <div class="card mb-6">
                <div class="px-6 py-5 flex justify-between items-center">
                    <h4 class="header-title">
                        {{ $hotel->name }}
                    </h4>
                </div>
                <div class="px-4 py-2 bg-primary/20 text-primary" role="alert">
                    <i class="mgc_bed_line me-1 text-lg align-baseline"></i>
                    <b>{{ $hotelTotalRooms }}</b> 
                    {{ __('Total') }} {{ __('Rooms') }}
                    <i class="mgc_user_3_line me-1 text-lg align-baseline"></i>
                    <b>{{ $hotelTotalBeds }}</b>
                    {{ __('Total') }} {{ __('Guests') }}
                </div>

                <div class="p-6 space-y-3">
                    @foreach ($hotel->typesOfRoom as $typeOfRoom)
                        <div class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2">
                            <div class="flex-grow">
                                <h5 class="font-semibold mb-1">{{ $typeOfRoom->name }}</h5>
                                <p class="text-gray-400">{{ $typeOfRoom->max_guests }} {{ __('Persons') }}</p>
                            </div>
                            <div>
                                <label for="{{ $hotel->id."_".$typeOfRoom->id }}" class="text-gray-800 text-sm font-medium inline-block mb-2">Number</label>
                                <input class="form-input" id="{{ $hotel->id."_".$typeOfRoom->id }}" type="number" name="number">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>           
    @endforeach       
</div>

<div>
    tabella camere associate            
</div>
    
@endsection

@section('script-bottom')


@endsection
