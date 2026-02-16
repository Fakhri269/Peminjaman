<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'siswas'; 

    protected $fillable = [
        'nisn',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'kelas',
        'jurusan',
        'angkatan',
        'no_hp',
        'added_by',
        'is_active',
    ];
}
