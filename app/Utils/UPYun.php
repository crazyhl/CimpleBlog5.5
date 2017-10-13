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
    /**
     * 获取又拍云的相关信息.
     * @param int $imgContentLength
     * @return array
     */
    public static function getUploadImageParams($imgContentLength = 0)
    {
        $operator = config('upyun.opeator');
        $password = md5(config('upyun.password'));
        $method = 'POST';
        $date = gmdate(DATE_RFC7231);
        $bucket = config('upyun.bucket');
        $requestUri = '/'.$bucket;
        $saveKey = config('upyun.imgSaveKey');
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
            'requestUri' => config('upyun.uri').$requestUri,
            'policy' => $policy,
            'authorization' => $authorization,
        ];
    }
}
