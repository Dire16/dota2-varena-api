<?php
/**
 * Created by PhpStorm.
 * User: 27057
 * Date: 2018/7/16
 * Time: 22:05
 */
namespace app\common\model;
use think\Model;
class Heroavatar extends Model{
    public function showDataBase(){
        $result=$this->select();
        return $result;
    }
}