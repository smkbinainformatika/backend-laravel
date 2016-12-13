<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 20)->nullable('false')->index();
            $table->string('nama_guru', 70)->nullable(false);
            $table->string('alamat', 100);
            $table->string('jenis_kelamin', 20);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->text('keterangan');
            $table->integer('agama_id')->unsigned();
            $table->integer('mapel_id')->unsigned();
            $table->foreign('agama_id')->references('id')->on('agama')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('mapel_id')->references('id')->on('mapel')
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
        Schema::dropIfExists('guru');
    }
}
