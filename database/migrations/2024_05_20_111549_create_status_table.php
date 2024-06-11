<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Status', function (Blueprint $table) {
            $table->increments('Id_Status');
            $table->unsignedInteger('Id_Rental')->notNullable();
            $table->enum('Status_Pengiriman', ['Pengajuan rental ditolak','Kendaraan sedang dikirim','Kendaraaan dalam perjalanan', 'Kendaraan telah sampai'])->default('Kendaraan sedang dikirim')->notNullable();
            $table->timestamps();

            $table->foreign('Id_Rental')->references('Id_Rental')->on('Rental')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Status');
    }
}
