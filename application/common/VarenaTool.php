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
        if ($arr){
            $play = current(current(current($arr)));
            $returnMsg[K::k_username] = isset($play['personaname'])?$play['personaname']:0;
            $returnMsg[K::k_avatar_medium] =isset($play['avatarmedium'])?$play['avatarmedium']:0;
            $returnMsg[K::k_avatar_full] = isset($play['avatarfull'])?$play['avatarfull']:0;
            $returnMsg[K::k_realname] = isset($play['realname'])?$play['realname']:0;
        }
        return isset($returnMsg)?$returnMsg:[];
    }
}

