<?php
/**
 * Created by Administrator on 2020/7/19.
 * User: Administrator
 * Date: 2020/7/19
 * Time: 7:28
 */

namespace app\controller;


use app\model\Book;
use think\facade\Config;
use think\facade\View;

class Form extends \app\BaseController
{
    public function add()
    {
        $data['name'] = $_POST['name'];
        $data['tel'] = $_POST['tel'];

        $v = validate('\app\validate\Book')->failException(false);
        $v->check($data);

        if (!$v->check($data)) {
            View::assign('error', $v->getError());
            return View::fetch('error');
        }

        Book::create($data);

        return View::fetch('ok');
    }
}