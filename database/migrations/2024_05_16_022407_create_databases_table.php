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
        // Create Pengguna table
        Schema::create('Pengguna', function (Blueprint $table) {
            $table->id('Id_Pengguna');
            $table->string('Nama_Lengkap', 40);
            $table->string('Username', 15);
            $table->string('No_Handphone', 15);
            $table->string('NIK', 16);
            $table->enum('Roles', ['Admin', 'Pengguna'])->default('Pengguna');
            $table->string('Email', 255)->unique();
            $table->string('Password', 255);
            $table->timestamps();
        });

        // Create Kendaraan table
        Schema::create('Kendaraan', function (Blueprint $table) {
            $table->id('Id_Kendaraan');
            $table->string('Nama_Kendaraan', 40);
            $table->enum('Jenis_Kendaraan', ['Mobil', 'Motor']);
            $table->string('Merk', 10);
            $table->string('Harga', 20);
            $table->integer('Stok');
            $table->string('Gambar');
            $table->timestamps();
        });

        // Create Promo table
        Schema::create('Promo', function (Blueprint $table) {
            $table->id('Id_Promo');
            $table->string('Nama_Promo', 40);
            $table->integer('Kode_Promo');
            $table->string('Deskripsi', 100);
            $table->string('Diskon', 16);
            $table->string('Gambar');
            $table->timestamps();
        });

        // Create Rental table
        Schema::create('Rental', function (Blueprint $table) {
            $table->id('Id_Rental');
            $table->unsignedBigInteger('Id_Pengguna');
            $table->unsignedBigInteger('Id_Kendaraan');
            $table->unsignedBigInteger('Id_Promo')->nullable();
            $table->string('Alamat', 100);
            $table->integer('No_Hp');
            $table->integer('SIM');
            $table->date('Tanggal_Sewa');
            $table->date('Tanggal_Selesai');
            $table->integer('Total_Harga');
            $table->string('Bukti_Pembayaran');
            $table->timestamps();

            $table->foreign('Id_Pengguna')->references('Id_Pengguna')->on('Pengguna');
            $table->foreign('Id_Kendaraan')->references('Id_Kendaraan')->on('Kendaraan');
            $table->foreign('Id_Promo')->references('Id_Promo')->on('Promo');
        });

        // Create Konfirmasi table
        Schema::create('Konfirmasi', function (Blueprint $table) {
            $table->id('Id_Konfirmasi');
            $table->unsignedBigInteger('Id_Rental');
            $table->enum('Pengajuan', ['Disetujui', 'Ditolak']);
            $table->timestamps();

            $table->foreign('Id_Rental')->references('Id_Rental')->on('Rental');
        });

        // Create Status table
        Schema::create('Status', function (Blueprint $table) {
            $table->id('Id_Status');
            $table->unsignedBigInteger('Id_Rental');
            $table->unsignedBigInteger('Id_Konfirmasi');
            $table->enum('Status_Pengiriman', ['Sedang Diantar', 'Sudah diterima']);
            $table->date('Tanggal_Pengiriman');
            $table->timestamps();

            $table->foreign('Id_Rental')->references('Id_Rental')->on('Rental');
            $table->foreign('Id_Konfirmasi')->references('Id_Konfirmasi')->on('Konfirmasi');
        });

        // Create Riwayat table
        Schema::create('Riwayat', function (Blueprint $table) {
            $table->id('Id_Riwayat');
            $table->unsignedBigInteger('Id_Rental');
            $table->unsignedBigInteger('Id_Status');
            $table->date('Tanggal_Pengembalian');
            $table->string('No_Pesanan', 10);
            $table->timestamps();

            $table->foreign('Id_Rental')->references('Id_Rental')->on('Rental');
            $table->foreign('Id_Status')->references('Id_Status')->on('Status');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pengguna');
        Schema::dropIfExists('Kendaraan');
        Schema::dropIfExists('Promo');
        Schema::dropIfExists('Rental');
        Schema::dropIfExists('Konfirmasi');
        Schema::dropIfExists('Status');
        Schema::dropIfExists('Riwayat');
    }
};
