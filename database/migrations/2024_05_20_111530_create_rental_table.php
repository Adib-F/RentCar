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
            $table->string('order_id')->notNullable();
            $table->string('Alamat', 100)->notNullable();
            $table->string('SIM')->notNullable();
            $table->date('Tanggal_Sewa')->notNullable();
            $table->date('Tanggal_Selesai')->notNullable();
            $table->integer('Total_Harga')->notNullable();
            $table->string('snap_token')->notNullable();
            $table->enum('Pengajuan', ['Disetujui', 'Ditolak', 'Menunggu Konfirmasi Admin', 'Pending'])->default('Pending')->nullable();
            $table->timestamps();

            $table->foreign('Id_Pengguna')->references('Id_Pengguna')->on('Pengguna')->onDelete('cascade');
            $table->foreign('Id_Kendaraan')->references('Id_Kendaraan')->on('Kendaraan')->onDelete('cascade');
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
