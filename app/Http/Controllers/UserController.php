<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //后台用户的列表
    public function index(){
        echo "这是后台用户的列表页面";
    }

    //后台用户的添加
    public function add(){
        echo "这是后台用户的添加操作";
    }

    //用户的删除
    public function delete($id){
        echo "这是后台用户的删除操作,删除id为".$id;
    }

    //查看用户的某一条数据
    public function show(){
        echo "这个是xxx的数据";
    }
}
