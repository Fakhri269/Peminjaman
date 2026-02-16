<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamen';    

    protected $fillable = [
        'peminjam_id',
        'role',
        'barang_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'keterangan',
        'added_by',
    ];
}
