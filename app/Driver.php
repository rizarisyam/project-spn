<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['nik','nama','agama','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','no_tlp', 'status'];

    public function rent()
    {
        return $this->hasOne(Rent::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
