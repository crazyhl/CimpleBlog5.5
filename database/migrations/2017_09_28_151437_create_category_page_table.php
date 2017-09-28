<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_page', function (Blueprint $table) {
            $table->unsignedInteger('category_id'); // 分类 id
            $table->unsignedInteger('page_id'); // 文章 id
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade'); // 设置外键
            $table->foreign('page_id')->references('id')->on('pages')->onUpdate('cascade')->onDelete('cascade'); // 设置外键
            $table->primary(['category_id', 'page_id']); // 设置主键
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_page');
    }
}
