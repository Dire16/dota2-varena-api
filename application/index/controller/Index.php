<?php
namespace app\index\controller;
use Varena\SDK\Request\VarenaRequest;
//聪明来过 这么巧
class Index
{
    public function index()
    {
        $response=initVarenaApi();
        return show(1,1,$response,201);
    }

    public function test(){
        return getSteamNameAndAvatar();
    }
}
