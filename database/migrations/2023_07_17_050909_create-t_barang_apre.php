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
        Schema::create('t_barang_apre', function (Blueprint $table) {
            $table->id('barang_id');
            $table->string('nama_barang')->nullable();
            $table->string('satuan')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barang_apre');
    }
};
