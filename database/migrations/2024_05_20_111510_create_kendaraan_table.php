<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Kendaraan', function (Blueprint $table) {
            $table->increments('Id_Kendaraan');
            $table->string('Nama_Kendaraan', 40)->notNullable();
            $table->enum('Jenis_Kendaraan', ['Mobil', 'Motor'])->notNullable();
            $table->string('Merk', 10)->notNullable();
            $table->string('Harga', 20)->notNullable();
            $table->integer('Stok')->notNullable();
            $table->string('Deskripsi')->notNullable();
            $table->string('Gambar')->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Kendaraan');
    }
}
