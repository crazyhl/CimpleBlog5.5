<?php

namespace App\Http\Controllers;

use App\Utils\Qiniu;
use App\Utils\UPYun;

class UploadController extends Controller
{
    /**
     * 获取.
     * @param int $imgContentLength
     */
    public function qiniuImageParams($imgContentLength = 0)
    {
        $parameters = UPYun::getUploadImageParams($imgContentLength);
        return response()->view('test', compact('parameters'))->header('Access-Control-Allow-Origin', '*');
    }
}
