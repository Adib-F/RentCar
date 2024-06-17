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
        Schema::create('Notifikasi', function (Blueprint $table) {
            $table->increments('Id_Notifikasi');  
            $table->unsignedInteger('Id_Pengguna')->notNullable();
            $table->unsignedInteger('Id_Rental')->notNullable();
            $table->string('Pesan')->notNullable();    
            $table->timestamps();

            $table->foreign('Id_Pengguna')->references('Id_Pengguna')->on('Pengguna')->onDelete('cascade');
            $table->foreign('Id_Rental')->references('Id_Rental')->on('Rental')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Notifikasi');
    }
};
