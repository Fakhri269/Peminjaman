<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('peminjamen', function (Blueprint $table) {
            // Kolom status: 'belum' = belum dikembalikan, 'sudah' = sudah dikembalikan
            $table->enum('status', ['belum', 'sudah'])->default('belum')->after('tanggal_kembali');
        });
    }

    public function down()
    {
        Schema::table('peminjamen', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
