<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\RoomType;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelsWithRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $numberOfHotels = 10;
        $numberOfRooms = [
            'doppie' => [
                'number' => 10,
                'max_guests' => 2,
                'price' => 150
            ],
            'triple' => [
                'number' => 5,
                'max_guests' => 3,
                'price' => 145
            ],
            'quadruple' => [
                'number' => 15,
                'max_guests' => 4,
                'price' => 135
            ],
            'quintuple' => [
                'number' => 7,
                'max_guests' => 5,
                'price' => 130
            ],
            'sestuple' => [
                'number' => 5,
                'max_guests' => 6,
                'price' => 125
            ]
        ];

        $faker = new Generator();
        for ($i=0; $i < $numberOfHotels; $i++) { 
            $currentHotel = Hotel::create([
                'name' => "Hotel $i",
                'custom_id' => "h0tel_$i"
            ]);

            foreach ($numberOfRooms as $key => $numberOfRoom) {
                $roomType = RoomType::create([
                    'custom_id' => $currentHotel->id.'_'.$i.'_'.$key,
                    'hotel_id' => $currentHotel->id,
                    'name' => $key,
                    'max_guests' => $numberOfRoom['max_guests'],
                    'price' => $numberOfRoom['price'],
                ]);
                $number = random_int(1, $numberOfRoom['number']);
                $roomType->generateRooms($number);
            }

        }
        
    }
}
