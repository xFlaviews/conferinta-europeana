<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $fillable = [
        'name', 'from_date', 'to_date'
    ];
    # todo check if this work...
    public function groups() {
        return $this->belongsToMany(Group::class, 'group_events', 'event_id', 'group_id');
    }
}
