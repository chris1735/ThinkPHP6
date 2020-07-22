<?php
/**
 * Created by Administrator on 2020/7/22.
 * User: Administrator
 * Date: 2020/7/22
 * Time: 12:02
 */

namespace app\controller;


use app\model\User;
use think\facade\Session;
use think\facade\View;

class Test extends \app\BaseController
{

    public function adminModify()
    {

        echo time();

//        $user = User::where('name', 'admin')->find();
//        $user->update_time = time();
//        $user->save();



        return '';
    }

}