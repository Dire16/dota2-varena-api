<?php
/**
 * Created by PhpStorm.
 * User: 27057
 * Date: 2018/7/14
 * Time: 22:53
 */
namespace app\record\controller;
class index{
    public function getSteamMessage(){
        $data=input('get.');
        $steamId=$data['steamid'];
        if(empty($steamId)){
            return show("0","没有steamId返回","");
        }
        return show("1","返回成功",VarenaTool::getSteamNameAndAvatar($steamId));
    }

    public function getPlayerMatchId(){
        $data=input('get.');
        $steamId=$data['steamid'];
        $page=$data['page'];
        if(empty($steamId)){
            return show("0","没有steamId返回","");
        }
        if(empty($page)){
            return show("0","没有page返回","");
        }
        $url="/data-service/dota2/public/player/".$steamId."/match_ids";
        $response=initVarenaApi($url);
        rsort($response);
        $pageInt=($page-1)*10;
        $response=array_slice($response, $pageInt, 10);
        return show("1","返回比赛数据成功",$response);
    }

    public function getPalyerMatchMessage(){
        $url="/data-service/dota2/public/match/4004994187/players";
        $response=initVarenaApi($url);
        for($i=0;$i<10;$i++){
            if($response[$i]['player_id']=="136358412"){
                $message=$response[$i];
            }
        }

//        echo $message['hero_id'];exit;
        $heroUrl="/data-service/dota2/public/raw/heroes";
        $heroMessage=initVarenaApi($heroUrl);
        //echo json_encode($heroMessage);
        $data=Model('Heroavatar')->showDataBase();
        echo json_encode($data);
    }
}