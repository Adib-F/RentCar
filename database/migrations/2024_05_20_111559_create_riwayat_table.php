<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Riwayat', function (Blueprint $table) {
            $table->increments('Id_Riwayat');
            $table->unsignedInteger('Id_Rental')->notNullable();
            $table->unsignedInteger('Id_Status')->notNullable();
            $table->date('Tanggal_Pengembalian')->notNullable();
            $table->string('No_Pesanan', 10)->notNullable();
            $table->timestamps();

            $table->foreign('Id_Rental')->references('Id_Rental')->on('Rental')->onDelete('cascade');
            $table->foreign('Id_Status')->references('Id_Status')->on('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Riwayat');
    }
}
