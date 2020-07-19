<?php
/**
 * Created by Administrator on 2020/7/19.
 * User: Administrator
 * Date: 2020/7/19
 * Time: 12:31
 */

namespace app\controller;


use app\model\Book;
use think\facade\View;

class Admin extends \app\BaseController
{

    public function index()
    {
        return View::fetch('main');
    }

    public function show()
    {
        $list = Book::order('id', 'desc')->select();
        foreach($list as $key=>$book){
            echo $book->name. ' - ' . $book->tel . '<br>';
        }

        View::assign('list', $list);
        return View::fetch('show');
    }
}