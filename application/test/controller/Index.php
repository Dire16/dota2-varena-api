<?php
namespace app\test\controller;
use Varena\SDK\Request\VarenaRequest;
//聪明来过 这么巧
class Index
{
    public function index()
    {
        $data=input('get.');
        $steamId=$data['steamid'];
        return show("1","返回成功",getSteamNameAndAvatar($steamId));
    }

    public function test(){
        echo "hello world";
    }

}
