<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Promo', function (Blueprint $table) {
            $table->increments('Id_Promo');
            $table->string('Nama_Promo', 40)->notNullable();
            $table->string('Deskripsi', 100)->notNullable();
            $table->string('Diskon', 16)->notNullable();
            $table->string('Gambar')->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Promo');
    }
}
