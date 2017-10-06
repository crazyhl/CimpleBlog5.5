<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    /**
     * 该模型是否被自动维护时间戳.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * 主键.
     * @var string
     */
    protected $primaryKey = 'name';
    /**
     * 批量赋值的字段.
     * @var array
     */
    protected $fillable = ['name', 'value'];
    /**
     * 主键不自增.
     * @var bool
     */
    public $incrementing = false;
}
