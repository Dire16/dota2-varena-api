<?php
namespace app\index\controller;
use Varena\SDK\Request\VarenaRequest;

class Index
{
    public function index()
    {
        $response=initVarenaApi();
        echo json_encode($response);

    }
}
