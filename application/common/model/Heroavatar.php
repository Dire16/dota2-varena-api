<?php
/**
 * Created by PhpStorm.
 * User: 27057
 * Date: 2018/7/16
 * Time: 22:05
 */
namespace app\common\model;
use app\common\K;
use think\db\Query;
use think\Model;
class Heroavatar extends Model{
    public $table='dota_hero_info';
    public  function getAvatar($id){
        $result=$this->where(K::k_id,$id)->select();
        return $result;
    }
}