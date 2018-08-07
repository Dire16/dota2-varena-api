<?php
namespace app\index\controller;
//聪明来过 这么巧

use app\common\model\Heroavatar;

class Index
{
    public function index()
    {
        print_r( (new Heroavatar())->showDataBase());
    }

    public function test(){
     //   return VarenaTool::getSteamNameAndAvatar()
    }
}
