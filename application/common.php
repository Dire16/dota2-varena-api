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
function initVarenaApi(){
    $guzzleHttp = new VarenaRequest(config('varena.API-KEY'),config('varena.API-Secret'));
    $response = $guzzleHttp->getData('/data-service/dota2/analysis/player/92423451/basic_stats',[]);
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