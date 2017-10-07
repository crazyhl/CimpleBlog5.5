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
class Qiniu
{
    public static function getUploadImageParams($imgContentLength)
    {
        $operator = env('QINIU_OPERATOR');
        $password = md5(env('QINIU_PASSWORD'));
        $method = 'POST';
        $date = gmdate(DATE_RFC7231);
        $bucket = env('QINIU_BUCKET');
        $requestUri = '/'.$bucket;
        $saveKey = env('QINIU_IMG_SAVE_KEY');
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
            'requestUri' => $requestUri,
            'policy' => $policy,
            'authorization' => $authorization,
        ];
    }
}
