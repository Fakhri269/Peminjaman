<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kelas')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('added_by')->nullable();
            $table->timestamps(); // otomatis buat 'created_at' & 'updated_at'
        });
    }

    /**
     * Hapus tabel ketika rollback.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas'); // harus sama dengan nama tabel di atas
    }
};
