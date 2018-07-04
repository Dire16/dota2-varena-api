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
use GuzzleHttp\Client;
// 应用公共文件
/**
 * varena通用请求方法
 * @return array
 */
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

/**
 * 通用化头像昵称返回接口
 * @param $steamId
 * @return mixed
 */

function getSteamNameAndAvatar($steamId){
    $tranSteamId=Verena::getTranSteamId($steamId);
    $json = requestByCurl(config('varena.steamApiKey'),[
        K::k_key=>config('varena.steamApiKey'),
        K::k_steamids=>$tranSteamId
    ],HttpMethod::GET);
    $arr = json_decode($json,1);
    $returnMsg[K::k_username] = $arr[K::k_response][K::k_players][0]['personaname'];
    $returnMsg[K::k_avatar] = $arr[K::k_response][K::k_players][0]['avatar'];
    $returnMsg[K::k_avatar_medium] = $arr[K::k_response][K::k_players][0]['avatarmedium'];
    $returnMsg[K::k_avatar_full] = $arr[K::k_response][K::k_players][0]['avatarfull'];
    $returnMsg[K::k_realname] = $arr[K::k_response][K::k_players][0]['realname'];
    return $returnMsg;
}



function requestByCurl($url, $data, $method = 'POST')
{
    $ch = curl_init();   //1.初始化
    //========== $url = $url.'?'.http_bulid_query($data);
    if ($method == "GET") {//5.post方式的时候添加数据
        $url=$url."?".http_build_query($data);
    }
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