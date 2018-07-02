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
    $tranSteamId=(int)$steamId+1197960265728;
    $tranSteamId="7656".(string)$tranSteamId;
    $steamApiKey="19BCC7F939D1C3AEF039146BC4A9D0D1";
    $url="http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamApiKey."&steamids=".$tranSteamId."";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $url);
    $json =  curl_exec($ch);
    curl_close($ch);
    $arr=json_decode($json,1);
    $returnMsg['personaname']=$arr['response']['players'][0]['personaname'];
    $returnMsg['avatar']=$arr['response']['players'][0]['avatar'];
    $returnMsg['avatarmedium']=$arr['response']['players'][0]['avatarmedium'];
    $returnMsg['avatarfull']=$arr['response']['players'][0]['avatarfull'];
    $returnMsg['realname']=$arr['response']['players'][0]['realname'];
    return $returnMsg;
}
