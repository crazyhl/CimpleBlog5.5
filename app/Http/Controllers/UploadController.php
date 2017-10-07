<?php

namespace App\Http\Controllers;

use App\Utils\Qiniu;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * 获取
     * @param int $imgContentLength
     */
    public function qiniuImageParams($imgContentLength = 0)
    {
        $parameters = Qiniu::getUploadImageParams($imgContentLength);
//        dd($parameters);
        return response()->view('test')->header('Access-Control-Allow-Origin', '*');
    }
}
