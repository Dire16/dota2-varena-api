<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use Varena\SDK\Request\VarenaRequest;

// 应用公共文件
/**
 * varena通用请求方法
 * @return array
 */
function initVarenaApi($url){
    $guzzleHttp = new VarenaRequest(config('varena.API-KEY'),config('varena.API-Secret'));
    $response = $guzzleHttp->getData($url,[]);
    return $response;
}

/**
 * 通用化数据返回接口
 * @param $status
 * @param $message
 * @param $data
 * @param $httpCode
 * @return array
 */
function show($status,$message,$data,$httpCode=200){
    $data= [
        'status'=>$status,
        'message'=>$message,
        'data'=>$data
    ];
    return json($data,$httpCode);
}

function requestByCurl($url, $data, $method = 'POST')
{
    $ch = curl_init();   //1.初始化
    //========== $url = $url.'?'.http_bulid_query($data);
    if ($method == "GET") {//5.post方式的时候添加数据
        $url=$url."?".http_build_query($data);
    }
   // echo $url;exit(0);
    curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式
    //4.参数如下
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//https
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);

    if ($method == "POST") {//5.post方式的时候添加数据
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $tmpInfo = curl_exec($ch);//6.执行

    if (curl_errno($ch)) {//7.如果出错
        return curl_error($ch);
    }
    curl_close($ch);//8.关闭
    return $tmpInfo;
}