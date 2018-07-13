<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/5
 * Time: 12:49
 */
namespace app\common;


class VarenaTool
{
    public static function getTranSteamId($steamId)
    {
        $tranSteamId = (int)$steamId + 1197960265728;
        $tranSteamId = "7656" . (string)$tranSteamId;
        return $tranSteamId;
    }

    /**
     * 通用化头像昵称返回接口
     * @param $steamId
     * @return mixed
     */

    public static function getSteamNameAndAvatar($steamId)
    {
        $tranSteamId = self::getTranSteamId($steamId);
        $json = requestByCurl(config('varena.steamApiurl'), [
            K::k_key => config('varena.steamApiKey'),
            K::k_steamids => $tranSteamId
        ], HttpMethod::GET);
        $arr = json_decode($json, 1);
        // print_r($arr);exit;
        $returnMsg[K::k_username] = $arr[K::k_response][K::k_players][0]['personaname'];
        $returnMsg[K::k_avatar] = $arr[K::k_response][K::k_players][0]['avatar'];
        $returnMsg[K::k_avatar_medium] = $arr[K::k_response][K::k_players][0]['avatarmedium'];
        $returnMsg[K::k_avatar_full] = $arr[K::k_response][K::k_players][0]['avatarfull'];
        $returnMsg[K::k_realname] = $arr[K::k_response][K::k_players][0]['realname'];
        return $returnMsg;
    }
}

