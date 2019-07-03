<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //显示列表
    public function index()
    {
        // echo "这是广告列表";
        return view("Admin.Ads.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //加载添加模版
    public function create()
    {
        return view("Admin.Ads.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //执行添加操作
    public function store(Request $request)
    {
        echo "这是广告的添加";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //显示单条数据
    public function show($id)
    {
        echo "显示单条数据,id为".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //加载修改模版
    public function edit($id)
    {
        // echo "这是修改的模版,修改的id为".$id;
        //加载修改模版
        return view("Admin.Ads.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //执行修改操作
    public function update(Request $request, $id)
    {
        echo "这是执行修改操作,id为".$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //删除数据操作
    public function destroy($id)
    {
        echo '这是广告的删除,删除的id为'.$id;
    }

    public function aa(){
        echo "233";
    }
}
