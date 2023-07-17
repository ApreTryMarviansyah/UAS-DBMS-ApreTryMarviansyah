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
        Schema::create('t_pengeluaranitem_apre', function (Blueprint $table) {
            $table->id('pengeluaran_id');
            $table->bigInteger('nobk')->nullable();
            $table->bigInteger('barang_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaranitem_apre');
    }
};
