<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::select("select * from user");
        // echo "<pre>";
        // var_dump($data);
        // return view("Admin.DB.index",['data'=>$data]);
        // 基本数据库练习
        // 查询数据
        // $data1 = DB::select("select * from user");
        //插入数据
        // $res = DB::insert("insert into user (id,name,age) values (null,'李想',32)");
        // 删除数据
        // $res = DB::delete("delete from user where id=4");
        // 修改
        // $res = DB::update("update user set name='渣渣' where id=5");
        //一般语句(删除表和创建表)
        // $res = DB::statement("create table stu ...");//建表
        // 删除表
        // $res = DB::statement("drop table stu");
        //连贯方法
        //插入单条数据
        // $res = DB::table("user")->insert(['name'=>'曾小贤','age'=>30]);
        //插入多条数据
        // $res = DB::table("user")->insert(['name'=>'曾小贤','age'=>30],['name'=>'胡一菲','age'=>20],['name'=>'关谷神奇','age'=>30]);
        // 获取插入数据ID
        // $res = DB::table("user")->insertGetID(['name'=>'小姨妈','age'=>30]);
        // 构造器修改数据
        // $res=DB::table("user")->where("id","=",8)->update(["name"=>"唐悠悠"]);
        // 构造器删除数据
        // $res=DB::table("user")->where("id","=",10)->delete();
        // 构造器查询数据
        // 查询所有数据
        // $res = DB::table("user")->get();
        // 查询单条数据
        // $res = DB::table("user")->where("id","=",1)->first();
        // 查询单条数据的某个字段值
        // $res = DB::table("user")->where("id","=",2)->value("name");
        // 获取一列数据
        // $res = DB::table("user")->pluck("name");
        
        // 获取指定的字段值
        // $res=DB::table("user")->select("name","age")->get();
        // 获取user表里面name字段含有x的数据
        // $res = DB::table("user")->where("name","like","%想%")->get();
        // 排序 获取数据的同时按照id 降序排序
        // $res = DB::table("user")->orderBy("id","desc")->get();
        //分页操作 2 每页显示2条数据
        // $page = DB::table("user")->paginate(2);
        // return view("Admin.DB.index",['page'=>$page]);
        // 两表关联 user 与 stu
        // select * from user,stu where user.id=stu.stu_id;
        // $res=DB::table("user")->join("stu","user.id","=","stu.stu_id")->get();
        // 三表关联 user 与 stu 与 address
        // $res = DB::table("user")->join("stu","user.id","=","stu.stu_id")->join("address","stu.id","=","address.stus_id")->get();
        // 计算总数
        // $res = DB::table("user")->count();
        // 获取最大值
        // $res = DB::table("user")->max("age");
        // 获取最小值
        // $res = DB::table("user")->min("age");
        // 获取平均值
        // $res = DB::table("user")->avg("age");
        // dd($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
