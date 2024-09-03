<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['custom_id', 'name', 'phone'];

    public function typesOfRoom() {
        return $this->hasMany(RoomType::class);
    }
} 
