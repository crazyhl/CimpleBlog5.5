<?php
/**
 * Created by PhpStorm.
 * User: haoliang
 * Date: 2017/10/7
 * Time: 上午3:39.
 */

namespace App\Utils;

/**
 * 七牛相关的工具类
 * Class Qiniu.
 */
class UPYun
{
    public static function getUploadImageParams($imgContentLength)
    {
        $operator = env('UPYUN_OPERATOR');
        $password = md5(env('UPYUN_PASSWORD'));
        $method = 'POST';
        $date = gmdate(DATE_RFC7231);
        $bucket = env('UPYUN_BUCKET');
        $requestUri = '/' . $bucket;
        $saveKey = env('UPYUN_IMG_SAVE_KEY');
        $expiration = time() + 1800;

        $policyArr = [
            'bucket' => $bucket,
            'save-key' => $saveKey,
            'expiration' => $expiration,
            'date' => $date,
        ];
        if ($imgContentLength) {
            $policyArr['content-length'] = $imgContentLength;
        }

        $policy = base64_encode(json_encode($policyArr));

        $signature = base64_encode(hash_hmac('sha1', $method.'&'.$requestUri.'&'.$date.'&'.$policy,
            $password, true));
        $authorization = 'UPYUN '.$operator.':'.$signature;

        return [
            'requestUri' => env('UPYUN_URI') . $requestUri,
            'policy' => $policy,
            'authorization' => $authorization,
        ];
    }
}