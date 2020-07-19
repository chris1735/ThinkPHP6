<?php
/**
 * Created by Administrator on 2020/7/19.
 * User: Administrator
 * Date: 2020/7/19
 * Time: 8:34
 */

namespace app\model;

use think\Model;

class Book extends Model
{
    protected  $schema = [
        'id' => 'int',
        'name' => 'string',
        'tel' => 'string',
        'ip' => 'string',
        'device' => 'string',
        'time' => 'datetime',
    ];

}