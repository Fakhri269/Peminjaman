<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventories', function (Blueprint $table) {
           $table->id();
    $table->string('kode_barang')->unique();  // Tambahkan kolom baru
    $table->string('nama_barang');
    $table->integer('stok')->default(0);
    $table->string('kategori')->nullable();
    $table->decimal('harga', 12, 2)->default(0);
    $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
