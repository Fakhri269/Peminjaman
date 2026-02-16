<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'nisn'          => '1234567890',
            'nama_lengkap'  => 'Budi Santoso',
            'tempat_lahir'  => 'Bogor',
            'tanggal_lahir' => '2005-04-21',
            'alamat'        => 'Jl. Raya Ciomas No. 15',
            'jurusan'       => 'RPL',
            'angkatan'      => '2025',
            'no_hp'         => '081234567890',
            'added_by'      => 1,
            'is_active'     => true,
        ]);

        Student::create([
            'nisn'          => '9876543210',
            'nama_lengkap'  => 'Siti Aminah',
            'tempat_lahir'  => 'Jakarta',
            'tanggal_lahir' => '2006-08-15',
            'alamat'        => 'Jl. Merdeka No. 7',
            'jurusan'       => 'TKJ',
            'angkatan'      => '2024',
            'no_hp'         => '082233445566',
            'added_by'      => 1,
            'is_active'     => true,
        ]);
    }
}
