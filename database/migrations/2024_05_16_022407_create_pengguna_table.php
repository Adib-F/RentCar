<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Pengguna', function (Blueprint $table) {
            $table->increments('Id_Pengguna');
            $table->string('Nama_Lengkap', 40)->notNullable();
            $table->string('Username', 15)->notNullable();
            $table->string('No_Handphone', 15)->notNullable();
            $table->string('NIK', 16)->notNullable();
            $table->enum('Roles', ['Admin', 'Pengguna'])->default('Pengguna')->notNullable();
            $table->string('Email', 255)->unique()->notNullable();
            $table->string('Password', 255)->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pengguna');
    }
}
