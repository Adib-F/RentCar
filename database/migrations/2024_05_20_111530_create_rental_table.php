<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Rental', function (Blueprint $table) {
            $table->increments('Id_Rental');
            $table->unsignedInteger('Id_Pengguna')->notNullable();
            $table->unsignedInteger('Id_Kendaraan')->notNullable();
            $table->unsignedInteger('Id_Promo')->nullable();
            $table->string('Alamat', 100)->notNullable();
            $table->string('SIM')->notNullable();
            $table->date('Tanggal_Sewa')->notNullable();
            $table->date('Tanggal_Selesai')->notNullable();
            $table->integer('Total_Harga')->notNullable();
            $table->string('Bukti_Pembayaran')->notNullable();
            $table->enum('Pengajuan', ['Disetujui', 'Ditolak'])->notNullable();
            $table->timestamps();

            $table->foreign('Id_Pengguna')->references('Id_Pengguna')->on('Pengguna')->onDelete('cascade');
            $table->foreign('Id_Kendaraan')->references('Id_Kendaraan')->on('Kendaraan');
            $table->foreign('Id_Promo')->references('Id_Promo')->on('Promo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Rental');
    }
}
