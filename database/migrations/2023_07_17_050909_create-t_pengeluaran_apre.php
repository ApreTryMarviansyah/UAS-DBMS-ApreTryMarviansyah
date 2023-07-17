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
        Schema::create('t_pengeluaran_apre', function (Blueprint $table) {
            $table->id('nobk');
            $table->date('tanggal')->nullable();
            $table->string('noreff')->nullable();
            $table->bigInteger('bagian_id')->nullable();
            $table->bigInteger('petugas_id')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaran_apre');
    }
};
