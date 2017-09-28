<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_tag', function (Blueprint $table) {
            $table->unsignedInteger('page_id');
            $table->unsignedInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('pages')->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['page_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_tag');
    }
}
