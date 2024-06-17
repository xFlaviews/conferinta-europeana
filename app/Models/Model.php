<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Spatie\Activitylog\Traits\LogsActivity;

class Model extends BaseModel
{
    use LogsActivity;

    public function getActivitylogOptions()
    {
        return LogOptions::defaults()
        ->logAll()
        ->logOnlyDirty();
    }
}
