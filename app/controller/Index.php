<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;


class Index extends BaseController
{
    public function index()
    {
        return '';
    }

    public function hello($name)
    {
        return $name;
    }

}
