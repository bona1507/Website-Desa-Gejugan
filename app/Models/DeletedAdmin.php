<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedAdmin extends Model
{
    use HasFactory;

    protected $table = 'deleted_admins';

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
