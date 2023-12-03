<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = "file";
    protected $primaryKey = "id";   
    protected $fillable = [
        "id", "nomor_file", "nik", "nama", "file", "deskripsi", "pesan"
    ];
}