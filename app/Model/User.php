<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //与模型关联的数据表
    protected $table = 'users';
    //是否开启自动维护时间戳 false 不开启 true 开启
    public $timestamps = false;
    //可以被批量赋值的属性(数据表的字段)
    protected $fileable = ['username','password','emial','status','token','phone'];
}
