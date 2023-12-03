<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;

    protected $table = 'administrasi'; // Replace with the actual table name in your database

    protected $fillable = [
        'form','ktp', 'kk', 'ktp2', 'kode_tiket','status'
    ];

    public $timestamps = false;
}
