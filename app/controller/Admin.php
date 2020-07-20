<?php
/**
 * Created by Administrator on 2020/7/19.
 * User: Administrator
 * Date: 2020/7/19
 * Time: 12:31
 */

namespace app\controller;


use app\model\Book;
use app\model\User;
use think\facade\View;
use think\model\concern\TimeStamp;

class Admin extends \app\BaseController
{

    public function index()
    {
        return View::fetch('main');
    }

    public function show()
    {
        $list = Book::order('id', 'desc')->select();

        View::assign('list', $list);
        return View::fetch('show');
    }

    public function modify()
    {
        return View::fetch();
    }


    public function AdminModify()
    {
        $data['name'] = 'admin';
        $data['password'] = $_POST['password'];
        $data['update_time'] = time();

//        var_dump($data);

        $user = User::where('name', 'admin')->find();
//        var_dump($user);


        return View::fetch();
    }

}