<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) { // 文章和页面表
            $table->increments('id');
            $table->string('title'); //标题
            $table->text('description'); //描述
            $table->text('content'); // 内容
            $table->unsignedTinyInteger('type')->default(1); // 1 文章 2 页面
            $table->unsignedTinyInteger('status'); // 1 正常 0 草稿
            $table->unsignedInteger('order')->default(0); // 排序
            $table->unsignedTinyInteger('isTop')->default(0); // 是否置顶 0 否 1 是
            $table->unsignedTinyInteger('isAllowComment')->default(1); // 是否支持评论 0 否 1是
            $table->index('type');
            $table->unique('title');
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
        Schema::dropIfExists('pages');
    }
}
