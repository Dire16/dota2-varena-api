<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 10:07
 */

class Verena
{
    public static function getTranSteamId($steamId){
        $tranSteamId=(int)$steamId+1197960265728;
        $tranSteamId="7656".(string)$tranSteamId;
        return $tranSteamId;
    }
}