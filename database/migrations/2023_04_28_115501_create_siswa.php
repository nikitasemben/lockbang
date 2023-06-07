<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('no_induk', 30);
            $table->string('nis', 30)->nullable();
            $table->string('nisn', 30)->nullable();
            $table->string('nama_siswa');
            $table->enum('jk', ['Laki-Laki', 'Perempuan']);
            $table->string('telp', 15)->nullable();
            $table->string('tempat_lahir');
            $table->string('agama');
            $table->date('tgl_lahir')->nullable();
            $table->string('img');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
