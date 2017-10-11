<?php
/**
 * Created by PhpStorm.
 * User: haoliang
 * Date: 2017/10/7
 * Time: 上午3:39.
 */

namespace App\Utils;

/**
 * markdown 工具类
 * Class Markdown.
 */
class Markdown
{
    /**
     * 获取又拍云的相关信息.
     * @param int $imgContentLength
     * @return array
     */
    public static function parse($content)
    {
        $parseDown = new \Parsedown();

        return $parseDown->text($content);
    }
}
