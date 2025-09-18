<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors'; // pastikan ini sesuai dengan nama tabel di database

    protected $fillable = ['name', 'specialist', 'experience', 'photo'];
}
