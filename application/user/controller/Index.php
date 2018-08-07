<?php
namespace app\user\controller;
use app\common\K;
use app\common\model\Heroavatar;
//聪明来过 这么巧
class Index
{
    public function index()
    {
        $hero = new Heroavatar();
        $info = $hero->getAvatar(1);
        if (!empty($info)){
            $info_array=$info[0]->toArray();
            $img_name=$info_array['img'];
            return 'http://118.89.114.33'.config('server.image_url').$img_name;
        }
        return '';
    }


}
