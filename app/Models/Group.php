<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function events() {
        return $this->hasManyThrough(Event::class,'group_rooms');
    }
}
