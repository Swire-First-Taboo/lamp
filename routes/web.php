<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //输出字符串
    // echo '只需0.11,zzj带回家';
    // echo date('Y-m-d H:i:s');
    // return view('welcome');
    // 获取配置信息 Config 底层的配置类  get 静态方法 获取配置信息
    // echo Config::get('app.timezone');
    // 设置配置信息
    // Config::set('app.locale','cn');
    // 获取
    // echo Config::get('app.locale');
    // echo env('DB_HOST');
});

//基本的get路由 Route 底层的路由类 get 请求方式 /index路由规则 function(){
    //echo "xxx";
//}匿名函数
//原理:只要url地址和路由规则匹配到的话,就自动调用
Route::get('/index',function(){
    echo "zzj是最快的男银";
});
Route::get('/index1',function(){
    echo "君可见黄河之水天上来";
});

//post路由
//MethodNotAllowedHttpException 没有匹配到以post请求的路由
Route::post('/insert',function(){
    echo "明天锋哥就要被安排了";
});

//路由参数
Route::get('/delete/{id}',function($id){
    echo "删除的商品id为".$id;
});

//参数限制 where 添加条件 name参数 [a-z]+限制条件
Route::get('/add/{name}',function($name){
    echo "添加的商品名为".$name;
})->where('name','[a-z]*');

//路由传递多个参数
Route::get("/doadd/{name}-{id}",function($name,$id){
    echo "zzq不行,一次".$id.$name;
});

//路由别名 as 给路由别名
Route::get("/home/index",['as'=>'b',function(){
    echo "锄禾日当午";
}]);

//通过路由别名获取原有路由
Route::get("/a",function(){
    //route laravel框架里的内置函数 可以通过路由别名获取原有的路由规则
    echo route('b');
});

//模拟二期项目
//后台管理员模块
// Route::get("/adminuser",function(){
//     echo "这是后台管理员模块";
// });

// //后台广告模块
// Route::get("/ads",function(){
//     echo "这是后台广告模块";
// });

// //后台版块模块
// Route::get("/cates",function(){
//     echo "这是后台版块模块";
// });

//路由组(路由推荐用法)
//模拟二期项目后台版块
// Route::group([],function(){
//     //后台管理员模块
//     Route::get("/adminuser",function(){
//         echo "这是后台管理员模块";
//     });

//     //后台广告模块
//     Route::get("/ads",function(){
//         echo "这是后台广告模块";
//     });

//     //后台版块模块
//     Route::get("/cates",function(){
//         echo "这是后台版块模块";
//     });
// });

//csrf
//加载form表单
Route::get("/abc",function(){
    //加载form视图
    return view("form");
});

//419 页面已过期 表单提交的时候缺乏csrf的保护
Route::post("/doinsert",function(){
    echo "这是执行添加操作";
});

//Ajax的get请求
Route::get("/ajaxget",function(){
    return view("ajaxget");
});
Route::get("/doajaxget",function(){
    // 返回响应数据
    return "这是响应数据";
});

//Ajax的post请求
Route::get("/ajaxpost",function(){
    return view("ajaxpost");
});

Route::post("/doajaxpost",function(){
    //返回响应数据
    echo "这是post响应数据";
});

//中间件
//二期项目后台的友情链接模块
Route::get("/lists",function(){
    echo "这是友情链接模块";
})->middleware("login");

//后台登录界面
Route::get("/adminlogin",function(){
    return view("login");
});

//中间件结合路由组
Route::group(["middleware"=>"login"],function(){
    //后台管理员模块
    Route::get("/adminuser",function(){
        echo "这是后台管理员模块";
    });

    //后台广告模块
    Route::get("/ads",function(){
        echo "这是后台广告模块";
    });

    //后台版块模块
    Route::get("/cates",function(){
        echo "这是后台版块模块";
    });
});

// *****************************  laravel03  ***************************************
//普通控制器使用 Admin\UserController@index 要访问的控制器@方法
// Route::get("/admin/index","Admin\UserController@index");
// Route::get("/adminadd","Admin\UserController@add");

//普通控制器参数使用
Route::get("/admindelete/{id}","Admin\UserController@delete");

//中间件结合普通控制器使用 用法一
Route::get("/adminshow","Admin\UserController@show")->middleware('login');

//中间件结合路由组普通控制器使用 用法二
Route::group(["middleware"=>"login"],function(){
    //普通控制器使用 Admin\UserController@index 要访问的控制器@方法
    Route::get("/admin/index","Admin\UserController@index");
    Route::get("/adminadd","Admin\UserController@add");
});

//资源控制器访问操作
//把控制器里的所有方法统统交给/ads 路由去处理
// Route::resource("/ads","Admin\AdsController");

//把控制器里的所有方法统统交给/ads 路由去处理 结合中间件1
Route::resource("/ads","Admin\AdsController")->middleware("login");
Route::get("/aa","Admin\AdsController@aa");

//资源控制器(二期项目推荐)可以以结合路由组
Route::group(["middleware"=>"login"],function(){
    //类别路由
    Route::resource("/cates","Admin\CateController");
    //商品路由
    Route::resource("/shops","Admin\ShopController");
});

//请求 cookie session
Route::resource("/brands","Admin\BrandController");

//文件上传
Route::resource("/files","Admin\FileController");

//响应
Route::resource("/res","Admin\ResController");

//视图
Route::resource("/views","Admin\ViewController");
// tp3.2.3分配数据到模版里
// $this->assign();
// $this->display();

//模板继承的练习 搭建后台
Route::resource("/admin","Admin\AdminController");

//后台用户模块
Route::resource("/adminuser","Admin\UserController");

//数据库的练习
Route::resource("/db","Admin\DBController");

//后台的用户模块
// Route::resource("/adminusers","Admin\UsersController");
//后台的会员模块(使用模型类)
Route::resource("/adminusers","Admin\UsersController");
//获取收货地址
Route::get("/adminaddress/{id}","Admin\UsersController@address");

//自定义函数
Route::get("/a","Admin\UsersController@a");

//自定义类
Route::get("/b","Admin\UsersController@b");

//云之讯调用短信类接口
Route::get("/c","Admin\UsersController@c");
//支付宝接口调用
Route::get("/d","Admin\UsersController@d");
//通知给客户端的界面 (即最后返回的页面)
Route::get("/returnurl","Home\PayController@returnurl");