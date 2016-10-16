<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;

	class LoginController extends Controller
	{
		public function login()
		{
			return view('home/login');
		
		}

		//2 执行登录 
    public function dologin(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        // dd($username);
        $ob = \DB::table('user')->where("username",$username)->first();
        // dd($ob);
        if($ob){
            //3 密码
            if($ob->password==$password){
                //31写入session
                $a = session()->set("adminuser",$ob);
                // dd($a);
                //32跳转到后台首页
          
                return redirect('/');
            }
            return back()->with("mag","用户或密码错误");
        }
        return back()->with("mag","用户或密码错误");
    }
        //4 执行退出
    public function logout()
    {
        //忘记session
        session()->forget("adminuser");
        //重定向
        return view("home/login");
    }

    //忘记密码
    public function forgetPasswd()
    {
        return view('home/forgetPasswd');
    }
    //忘记密码的原始信息
    public function doForgetPasswd(Request $request)
    {
        $mycode = Session()->get('code');
        // dd($mycode);
       if($mycode!=$request->input('code')){
                return back()->with("msg","验证码错误");//后退
                // session()->flash("msg","验证码错误");//写入错误信息
                // return redirect("admin/login");//重定向

            }
        $username = $request->input('name');
        $phone = $request->input('phone');
        // dd($phone);
        $db = \DB::table('user')->where("username",$username)->first();
         

        if($db){
            if($db->phone==$phone){ 
                session()->flash('username',$db->id);
                $ob = $db->id; 
                    return view('home/editPasswd')->with(['ob'=>$ob]);
                }
                return back()->with("msg","手机号或者用户名不存在");
            }
            return back()->with("msg","手机号或者用户名不存在");
        }

    //执行修改密码
     public function doEditPasswd(Request $request,$id)
    {   
        $id = session()->get('username');
        // dd($id);
        $data = $request->only('password','repassword');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        // dd($repasswd);
        if($password===$repassword){
            $ob = \DB::table('user')->where('id',$id)->update($data);
            
            return view('/home/login');
        }else{
             return back()->with("mvg","密码不一致");
        }
    }
}
