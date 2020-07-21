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
use think\facade\Request;
use think\facade\View;
use think\facade\Session;

class Admin extends \app\BaseController
{

    public function index()
    {
        if(!Session::has('user')) return redirect('/Admin/login');

        $list = Book::order('id', 'desc')->select();

        View::assign('list', $list);
        return View::fetch();
    }

    public function modify()
    {
        if(!Session::has('user')) return redirect('/Admin/login');
        return View::fetch();
    }


    public function adminModify()
    {
        if(!Session::has('user')) return redirect('/Admin/login');

        $data['name'] = 'admin';
        $data['password'] = $_POST['password'];
        $data['update_time'] = time();

        $user = User::where('name', 'admin')->find();
        $user->password = MD5($data['password']);
        $user->update_time = $data['update_time'];
        $user->save();

        return View::fetch();
    }


    public function login()
    {
        return View::fetch();
    }

    public function loginVerify()
    {

        if(!Request::has('userName', 'post')) return redirect('/Admin/login');

        $user = User::where('name', Request::post('userName'))
            ->where('password', MD5(Request::post('userPassword')))
            ->findOrEmpty();

        if ($user->isEmpty()) {
            View::assign('error', '用户名或密码错误');
            return View::fetch('error');
        }


        if(!Session::has('user')) Session::set('user', Request::post('userName'));


        $list = Book::order('id', 'desc')->select();
        View::assign('list', $list);
        return View::fetch('index');
    }


    public function loginout()
    {
        if (Session::has('user')) {
            Session::delete('user');
        }
        return redirect('/Admin/login');
    }



}