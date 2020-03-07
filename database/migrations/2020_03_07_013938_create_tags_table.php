<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag');
            $table->timestamps();
        });
        Schema::create('berita_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_berita');
            $table->unsignedBigInteger('id_tag');

            $table->foreign('id_berita')->references('id')
            ->on('beritas');
            $table->foreign('id_tag')->references('id')
            ->on('tags');
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
        Schema::dropIfExists('tags');
    }
}
