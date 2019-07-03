<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    //与模型关联的数据表
    protected $table = 'userss';
    //主键
    protected $primaryKey = "id";
    //是否开启自动维护时间戳 false 不开启 true 开启
    public $timestamps = true;
    //可以被批量赋值的属性(数据表的字段)属性必须要写,否则无法插入数据
    protected $fillable = ['username','password','email','created_at','updated_at','phone','status'];
    //修改器 对数据做自动处理 status 字段名
    public function getStatusAttribute($value){
        $status = ["0"=>"禁用","1"=>"启用"];
        return $status[$value];
    }

    //关联方法 关联userss和userinfo模型类=>获取关联数据
    //App\Model\Userinfo 要关联的模型类  users_id 关联字段
    public function info(){
        return $this->hasOne("App\Model\Userinfo","users_id");
    }

    //关联方法 关联userss和useraddress模型类=>获取会员的所有地址
    //App\Model\Useraddress 要关联的模型类  user_id 关联字段
    public function address(){
        return $this->hasMany("App\Model\Useraddress","user_id");
    }
}
