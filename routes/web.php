<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// //配置请求的路由器 
// //以下两种为路由传值方式 
// 	//接收方式 在方法中传递变量就可以了
// // Route::get("/demo1/{id}","DemoController@request");
// // Route::get("/demo2/{id}",function ($did){
// // 	return $did;
// // });

// //以下为url方式传值 url地址?id=100
// Route::get("/demo1","DemoController@request");

// //配置响应的路由
// 	//1 直接走路由响应
// // Route::get("/demo3",function (){
// // 	return "hello laravel";
// // });
// 	//2 直接控制器自定义响应
// Route::get("/demo3","DemoController@response");

// //配置视图的路由
// Route::get("/demo4","DemoController@view");





// //1 基础路由 
// // Route::get[请求方式]("url请求地址",方法);

// Route::get("/aa",function (){
// 	return "aaa";
// });
// //get请求的意思 是我要想服务器要东西 

// Route::post("/",function (){
// 	return "hello POST";
// });
// //post请求的意思 是我们向服务器提交数据 

// Route::put("/",function (){
// 	return "hello PUT";
// });


// Route::delete("/",function (){
// 	return "hello Delete";
// });

// //3 多种路由方式请求 
// // Route::match(['get', 'post'], '/aa', function () {
// //     return 'Hello AA 可接收get和post请求';
// // });

// // Route::any("","");

// //4 路由传参数 
// //必须要传递参数 
// // Route::get('/test/{id}', function ($did) {
// //     return "Hello Test! ".$did;
// // });

// //参数可有可无 
// // Route::get('/test/{id?}', function ($did=null) {
// //     return "Hello Test! ".$did;
// // });


// // function demo($a=20)
// // {

// // }

// // demo(10);


// //路由参数带约束条件 必须是数字
// // Route::get('/test/{id?}', function ($did=null) {
// //     return "Hello Test! ".$did;
// // })->where("id","[0-9]+");

// //路由取别名 
// Route::get('/aa/bb',['as'=>'cc',function(){
// 	return 123;
    
// }]);
// // //http://local.ak153.com/aa/bb

// 	//取别名作用 实现路由重定向 
// Route::get("/dd",function (){
// 	// echo route('cc');//查看当前路由url地址 
// 	// return 234;
// 	return redirect()->route('cc');

// });

// //抛出404页面没找到 
// // Route::get("/aa",function (){
// // 	// abort(404);
// // 	return 123;

// // });
//前台页面首页
Route::get('/', function () {
    return view('web');
});
Route::get('/link',function () {
    return view('web');
});
// Route::get('/admin',"AdminController@admin");
//跳转登录 注册页面
Route::get('/login',"LoginController@login");
Route::post('/dologin',"LoginController@dologin");
//退出登录
Route::get('/logout',"LoginController@logout");

//忘记密码
Route::get('/forgetPasswd',"LoginController@forgetPasswd");
//录入原始账号信息
Route::any('/doForgetPasswd',"LoginController@doForgetPasswd");
//执行修改密码
Route::post("/doEditPasswd/{ob}","LoginController@doEditPasswd");



//注册页面
Route::post('/register',"RegisterController@register");
// 后台添加用户页面
Route::get('/addUser','RegisterController@addUser');
//跳转到商品结算
Route::get('/count',"CountController@count");
//第一张图片链接
Route::get('/newlink',"NewlinkController@newlink");
//第二张图片链接
Route::get('/lk1',"Lk1Controller@lk1");
//第三张图片链接
Route::get('/lk2',"Lk2Controller@lk2");
//第四张图片链接
Route::get('/lk3',"Lk3Controller@lk3");
//第五张图片链接
Route::get('/lk4',"Lk4Controller@lk4");
//第六张图片链接
Route::get('/lk5',"Lk5Controller@lk5");
//第七张图片链接
Route::get('/lk6',"Lk6Controller@lk6");
//跳转到新闻
Route::get('/info',"NewlinkController@info");
//跳转到10k
Route::get('/pages',"NewlinkController@page");
//跳转到所有产品
Route::get('/product',"NewlinkController@product");
Route::get('/ShopList',"NewlinkController@ShopList");

//跳转到购物车
Route::get('/Shoping',"NewlinkController@Shoping");
//个人中心
Route::get('/center',"NewlinkController@center");
Route::get('/edit',"NewlinkController@edit");
//后台登录界面
// Route::get('/login', function () {
//     return view('admin.login.login');
// });

//后台登录验证
// 后台登录路由的配置 
Route::get("/admin/login","Admin\LoginController@login");//加载登录表单
Route::post("/admin/dologin","Admin\LoginController@dologin");//提交登录表单
Route::get("admin/captcha/{tmp}","Admin\LoginController@captcha");//验证码
Route::get("/admin/logout","Admin\LoginController@logout");//提交退出请求


//显示普通用户管理信息表
// 搜索用户
//普通添加用户信息表
Route::get('/add', function () {
    return view('admin.user.add');
});
//查看管理员
Route::get('/adminUser',"Admin\AdminuserController@index");
// 修改管理员
Route::put('/update/{id}','Admin\AdminuserController@update');
//删除管理员
Route::resource('/Admin',"Admin\AdminuserController");


//管理员添加用户信息表
Route::get('/adminAdd', function () {
    return view('admin.adminuser.add');
});
Route::any('/doAdminAdd', 'Admin\UserController@doAdminAdd');

// 查看商品列表 
Route::any('/types','Admin\ListController@shop');

// 查看指定商品类别里面的商品
Route::any('/typelist/{bar}','Admin\ListController@index2');

// 删除单个商品
Route::any('/del/{id}','Admin\TypeListController@delgood');

Route::resource("/addgoods",'Admin\TypeListController');

// 添加商品
Route::post('/addgds/{bar}',"Admin\TypeListController@create");

//修改商品
Route::post('/update/{bar}','Admin\TypeListController@update');

//显示商品类别
Route::get('/addType','Admin\UploadController@put');

//执行添加商品类别
Route::resource('/file','Admin\UploadController');

//显示商品类别分类详情表
Route::any('/type','Admin\shopController@index');

//显示评论中心
Route::get('type/comment',function () {
	return view('admin.type.comment');
});

//显示订单详情表
Route::get('type/order',function () {
	return view('admin.type.order');
});

//显示添加订单表
Route::get('type/addorder',function () {
	return view('admin.type.addorder');
});

//显示新闻详情表
Route::any('xinwen/press',"Admin\xinwenController@line");

//显示新闻添加
Route::any('xinwen/addWen',"Admin\xinwenController@title");

//显示新闻执行添加
Route::any('/addhead',"Admin\xinwenController@addtitle");

//新闻删除,修改
Route::resource('/Del',"Admin\xinwenController");

//后台管理首页(需要登录才可以访问)
Route::group(["prefix"=>"admin","middleware"=>"myauth"],function(){
		Route::get("index","Admin\IndexController@index");//网站后台首页

		Route::get("logout","Admin\LoginController@logout");//执行退出 

		// Route::resource("stu","Admin\StuController");//学生信息管理
		// Route::get('uplode',"Admin\StuController@doUplode");

	});
 Route::resource("/stu","Admin\StuController");//用户信息管理
// 搜索
Route::any('/user',"Admin\UserController@index2");
// Route::get('/admin/index','Admin\IndexController@index');

 


//前台首页遍历
Route::get('/',"StageController@desk");

Route::get('/Ajax/Sendmessage/{phone}/{content}','AjaxController@sendMessage');
