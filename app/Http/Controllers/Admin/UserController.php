<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function adminUser (Request $request)
    {
    	$db = \DB::table('admin');
        $where = [];
        if($request->has('adminname')){
            $name = $request->input('adminname');
            $db->where('adminname', 'like', "%{$name}%");//实现过滤控制器
            $where['name'] = $name;
         // 模板显示
        } 
        // dd($where);
        $list = $db->paginate(3);
        return view("admin.adminUser.user")->with(['list'=>$list,"where"=>$where]);
    }
    public function index2 (Request $request)
    {
    	// 获得一个连接对象
    	// return 111;
    	$db = \DB::table('user');
    	$where = [];
    	if($request->has('name')){
            $name = $request->input('name');
            $db->where('username', 'like', "%{$name}%");//实现过滤控制器
            $where['name'] = $name;
         // 模板显示
        } 
        $list = $db->paginate(10);
        $num = 1;
        return view("admin.user.user")->with(["list"=>$list,"where"=>$where,"num"=>$num]);
        // 数据分页
        
    }
    public function doAdminAdd(Request $request)
    {
        $data = $request->only('adminname','password','repassword');
        $db = \DB::table('admin')->first();
        // dd($ob);
        if($request->input('adminname')){
           $id = \DB::table('admin')->insertGetId($data);
            if($id>0){
                return redirect("/adminUser");
            } 
        }else{
                return redirect('/adminAdd');
        }
    }
}
