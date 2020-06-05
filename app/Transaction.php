<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'driver_id',
        'vehicle_id',
        'jenis_material',
        'asal',
        'tujuan',
        'muatan',
        'trip'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }


}
