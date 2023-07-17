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
        Schema::create('t_petugas_apre', function (Blueprint $table) {
            $table->id('petugas_id');
            $table->string('nama_petugas')->nullable();
            $table->string('alamat')->nullable();
            $table->string('handphone')->nullable();
            $table->string('password')->nullable();
            $table->string('level')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_petugas_apre');
    }
};
