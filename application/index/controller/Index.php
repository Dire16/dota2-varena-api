<?php
namespace app\index\controller;
use Varena\SDK\Request\VarenaRequest;
//聪明来过
class Index
{
    public function index()
    {
        $response=initVarenaApi();
        echo json_encode($response);

    }
}
