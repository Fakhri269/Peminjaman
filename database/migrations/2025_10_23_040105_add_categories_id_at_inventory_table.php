<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('inventories', function (Blueprint $table) {
            // Tambah kolom category_id jika belum ada
            if (!Schema::hasColumn('inventories', 'category_id')) {
                $table->unsignedBigInteger('category_id')->after('id');
                $table->foreign('category_id')
                      ->references('id')
                      ->on('categories')
                      ->onDelete('cascade');
            }

            // Hapus kolom kategori jika masih ada
            if (Schema::hasColumn('inventories', 'kategori')) {
                $table->dropColumn('kategori');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventories', function (Blueprint $table) {
            if (Schema::hasColumn('inventories', 'category_id')) {
                $table->dropForeign(['category_id']);
                $table->dropColumn('category_id');
            }
        });
    }
};
