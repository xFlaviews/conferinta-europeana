<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'custom_id',
        'hotel_id',
        'name',
        'max_guests',
        'price'
    ];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }

    public function generateRooms ($numberOfRooms = 0) {
      
        for ($i=0; $i < $numberOfRooms; $i++) { 
            Room::create([
                'hotel_id' => $this->hotel_id,
                'room_type_id' => $this->id
            ]);
        }
        
        
    }

    public function generateRoomsFromArray ($rooms = []) {
        foreach ($rooms as $room) {
            Room::updateOrCreate(
                [
                    'custom_id' => $room['custom_id']
                ],
                [
                    'hotel_id' => $this->hotel_id,
                    'room_type_id' => $this->id
                ]
            );
        }
    }

}
