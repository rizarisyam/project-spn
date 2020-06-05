<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['nopol','merek','model','tahun'];

    public function rent()
    {
        return $this->hasOne(Rent::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}

