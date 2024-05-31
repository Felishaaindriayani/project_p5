<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_lokasi','provinsi','kabupaten'];
    public $timestamps = true;

    public function lokasi()
    {
        return $this->hasMany(Lokasi::class);
    }
    
}
