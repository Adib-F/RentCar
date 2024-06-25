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
        Schema::create('Klaim_Promo', function (Blueprint $table) {
            $table->increments('Id_Klaim');
            $table->unsignedInteger('Id_Pengguna');
            $table->unsignedInteger('Id_Promo');
            $table->enum('Status' , ['Belum_digunakan', 'Sudah_digunakan'])->default('Belum_digunakan');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('Id_Pengguna')->references('Id_Pengguna')->on('Pengguna')->onDelete('cascade');
            $table->foreign('Id_Promo')->references('Id_Promo')->on('Promo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klaim');
    }
};
