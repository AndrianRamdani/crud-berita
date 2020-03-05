<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nama_id');
            $table->foreign('nama_id')->references('id')
            ->on('akuns')->onDelete('cascade');
            $table->string('tgl_lahir');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiels');
    }
}
