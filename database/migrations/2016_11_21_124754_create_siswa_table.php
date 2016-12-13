<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis', 20)->nullable('false')->index();
            $table->string('nama_siswa', 70)->nullable(false);
            $table->string('alamat', 100);
            $table->string('jenis_kelamin', 20);
            $table->string('tempat_lahir', 100);
            $table->string('nama_ortu', 100);
            $table->string('pekerjaan_ortu', 50);
            $table->date('tanggal_lahir');
            $table->integer('agama_id')->unsigned();
            $table->integer('kelas_id')->unsigned();
            $table->integer('jurusan_id')->unsigned();
            $table->foreign('agama_id')->references('id')->on('agama')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jurusan_id')->references('id')->on('jurusan')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB';
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
