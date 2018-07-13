<?php
namespace app\index\controller;
//聪明来过 这么巧

class Index
{
    public function index()
    {
        $response=initVarenaApi();
        return show(1,1,$response,201);
    }

    public function test(){
     //   return VarenaTool::getSteamNameAndAvatar()
    }
}
