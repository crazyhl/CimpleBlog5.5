<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    /**
     * 该模型是否被自动维护时间戳.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * 限制查询页面。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePages($query)
    {
        return $query->where('type', 2)->orderBy('order', 'desc')->orderBy('id', 'desc');
    }

    /**
     * 限制查询文章。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeArticles($query)
    {
        return $query->where('type', 1)->orderBy('isTop', 'desc')->orderBy('order', 'desc')->orderBy('created_at', 'desc');
    }

    /**
     * 获得此文章的分类。
     */
    public function categories()
    {
        return $this->belongsToMany(
            'App\Models\Categories',
            'category_page',
            'page_id',
            'category_id'
        );
    }

    /**
     * 获得此文章的 标签。
     */
    public function tags()
    {
        return $this->belongsToMany(
            'App\Models\Tags',
            'page_tag',
            'page_id',
            'tag_id'
        );
    }

    /**
     * 设置文章的 description.
     *
     * @param string $value
     *
     * @return string
     */
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = $value;
        $descArr = explode('<!--more-->', $value);
        $this->attributes['description'] = '';
        if (count($descArr) > 1) {
            $this->attributes['description'] = $descArr[0];
        }
    }
}
