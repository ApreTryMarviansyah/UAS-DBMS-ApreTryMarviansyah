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
        Schema::create('t_bagian_apre', function (Blueprint $table) {
            $table->id('bagian_id');
            $table->string('nama_bagian')->nullable();
            $table->string('kepala_bagian')->nullable();
            $table->string('telp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bagian_apre');
    }
};
