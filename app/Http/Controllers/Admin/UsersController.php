<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use DB;
//导入hash加密类
use Hash;
//导入校验请求类
use App\Http\Requests\UsersInsertRequest;
//导入模型类 userss
use App\Model\Userss;
//导入自定义类
use Phone;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 使用DB
        //获取搜索的参数
        // $k=$request->input("keyword");
        // $kk=$request->input("keywords");
        // echo $k;
        //获取列表数据
        // $data = DB::table("users")->where("username","like","%".$k."%")->where("emial","like","%".$kk."%")->paginate(2);
        //sql语句:select * from users where name like "%input框传过来的值%" limit 2,2;
        // var_dump($data);
        // 加载模版
        // return view("Admin.Users.index",['data'=>$data,'request'=>$request->all()]);
        
        // 使用模型类
        // echo "1111";
        // 通过模型类获取列表信息
        $k=$request->input("keyword");
        $kk=$request->input("keywords");
        $data = Userss::where("username","like","%".$k."%")->where("email","like","%".$kk."%")->paginate(2);
        return view("Admin.Users.index",['data'=>$data,'request'=>$request->all()]);
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加模块
        return view("Admin.Users.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data=$request->except(['repassword','_token']);
        //加密密码
        $data['password']=Hash::make($data['password']);
        // $data['status']=1;
        // $data['token']=str_random(50);
        // dd($data);
        //执行数据库插入操作
        // if(DB::table("users")->insert($data)){
        //     //跳转的同时可以添加session信息,rederict("路由")->("session名字","session值")
        //     return redirect("/adminusers")->with("success","添加成功");
        // }else{
        //     return back()->with("error","添加失败");
        // }
        //换为模型类的写法 create 模型的添加方法
        $data['status']=0;
        if(userss::create($data)){
            //跳转的同时可以添加session信息,rederict("路由")->("session名字","session值")
            return redirect("/adminusers")->with("success","添加成功");
        }else{
            return back()->with("error","添加失败");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //获取会员详情数据
    public function show($id)
    {
        //echo $id;
        //调用关联数据
        $info = Userss::find($id)->info;
        // var_dump($info);
        // 加载模版
        return view("Admin.Users.info",['info'=>$info]);
    }

    //获取会员的收货地址
    public function address($id){
        $address = Userss::find($id)->address;
        // dd($address);
        // 加载模版 分配数据
        return view("Admin.Users.address",["address"=>$address]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo $id;
        //获取需要修改的id
        // $data = DB::table("users")->where("id","=",$id)->first();
        //模型类写法
        $data = Userss::find($id);
        // dd($data);
        //加载模版
        return view("Admin.Users.edit",["data"=>$data]);
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
        // echo "1";
        // 获取修改的数据
        // dd($request->all());
        $data = $request->except(["_token","_method"]);
        //执行修改
        // if(DB::table("users")->where("id","=",$id)->update($data)){
        //     return redirect("/adminusers")->with("success","修改成功");
        // }else{
        //     return back()->with("error","修改失败");
        // }
        
        //模型类写法
        if(Userss::where("id","=",$id)->update($data)){
            return redirect("/adminusers")->with("success","修改成功");
        }else{
            return back()->with("error","修改失败");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        // 直接删除
        // if(DB::table("users")->where("id","=",$id)->delete()){
        //     return redirect("/adminusers")->with("success","删除成功");
        // }else{
        //     return back()->with("error","删除失败");
        // }
        
        //模型类写法
        if(Userss::where("id","=",$id)->delete()){
            return redirect("/adminusers")->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }

    //调用自定义函数
    public function a(){
        pay();
    }
    //调用自定义类
    public function b(){
        //实例化类
        $a = new Phone;
        $a->sends();
    }

    //调用云之讯
    public function c(){
        sendphone(18312406066);
    }

    //调用支付宝
    public function d(){
        pays(time(),"商品支付","0.01","商品支付");
    }
    public function returnurl(){
        echo "支付成功";
    }

}
