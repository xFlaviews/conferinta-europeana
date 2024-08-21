<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    # todo check if this work...
    public function groups() {
        return $this->hasManyThrough(Group::class, 'group_rooms');
    }
}
