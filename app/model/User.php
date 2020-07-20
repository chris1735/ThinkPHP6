<?php
/**
 * Created by Administrator on 2020/7/21.
 * User: Administrator
 * Date: 2020/7/21
 * Time: 5:21
 */

namespace app\model;


class User extends \think\Model
{
    protected  $schema = [
        'id' => 'int',
        'name' => 'string',
        'password' => 'string',
        'add_time' => 'datetime',
        'update_time' => 'datetime',
    ];
}