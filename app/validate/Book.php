<?php
/**
 * Created by Administrator on 2020/7/19.
 * User: Administrator
 * Date: 2020/7/19
 * Time: 9:47
 */

namespace app\validate;


class Book extends \think\Validate
{
    protected $rule = [
        'tel' =>  'require|regex:\d{11}',
    ];

    protected $message = [
        'tel.require' =>  '请留下您的手机号码，我们将尽快与您联系！',
        'tel.regex' =>  '您输入的手机号码不正确，请核对您的手机号码！',
    ];


}