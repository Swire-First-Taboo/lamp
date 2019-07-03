<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Request 请求类  $request 请求对象
    public function index(Request $request)
    {
        //声明请求对象
        // print_r($request);
        // 获取请求路径
        // $url=$request->path();
        // dd() 输出数据的同事,终止其他的脚本
        // dd($url);
        // echo "666";
        // 获取完整的url地址
        // $allurl=$request->url();
        // 获取请求方式
        // $method=$request->method();
        // 检查请求方式
        // $data=$request->isMethod('GET');
        // var_dump($data);
        
        //参数的提取
        // $para=$_GET;
        //获取所有的参数
        // $param=$request->all();
        // 获取单个参数
        // $name = $request->input('name');
        //获取固定的参数
        // $onlyparam=$request->only(['name','age']);
        //获取除了某个参数之外的参数
        // $exceptparam=$request->except('name');
        // 设置默认参数
        // $class = $request->input("class","php48");
        // 检测参数是否存在
        // $res=$request->has("name");
        // dd($res);
        
        // 设置cookie 一
        // return response("php48well")->withCookie('n','666',1);
        //获取cookie
        // $n = $request->cookie('n');
        // echo $n;
        
        //session练习
        // session存储
        // session(['mm'=>'php48']);
        //获取session
        $res=session('mm');
        echo $res;
        //删除session
        $request->session()->pull('mm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模版
        return view("Admin.Brand.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "1";
        // 检查下用户名不能为空
        $name = $request->input('name');
        //将所有的参数写入闪存中
        // $request->flash();
        //将部分参数写入闪存中
        // $request->flashOnly('email');
        // 将除某些参数外的参数写入闪存中
        // $request->flashExcept('email');
        // dd($name);
        if($name==null){
            //阻止表单提交 back()阻止表单提交
            // return back();
            // 闪存的简便写法,阻止页面提交的同时,把所有参数写入闪存中
            return back()->withinput();
        }
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
