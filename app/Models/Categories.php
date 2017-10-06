<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
     * 该模型是否被自动维护时间戳.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * 获得此分类的文章。
     */
    public function pages()
    {
        return $this->belongsToMany(
            'App\Models\Pages',
            'category_page',
            'category_id',
            'page_id'
        );
    }
}
