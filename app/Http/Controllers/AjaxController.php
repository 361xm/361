<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxController extends Controller
{
     public function index(){
      $msg = "这是一条简单的消息.";
      return response()->json(array('msg'=> $msg), 200);
   }

   // http://lamp135.com/Ajax/Sendmessage/手机号/base64_encode("短息内容")
   public function sendMessage($id,$phone){
   	//dd(base64_decode($phone));
   	const APPID = '9bb0e8a60213fd6ac39d6c4a70c0f457';  //后台"应用密钥"中的Application ID
     const RESTKEY = '97a49fe00e363605ae785e1616276335';  //后台"应用密钥"中的REST API Key
     const BMOBURL = 'https://api.bmob.cn/1/';  //请勿修改
     const BMOBURLTWO = 'https://api.bmob.cn/2/';  //请勿修改
    dd($this->sendSMS($id,base64_decode($phone),true));
   }


   //创蓝发送短信接口URL, 如无必要，该参数可不用修改
	const API_SEND_URL='http://sms.253.com/msg/HttpBatchSendSM';

	const API_ACCOUNT='123123123';//创蓝账号 替换成你自己的账号

	const API_PASSWORD='qweasdzxc';//创蓝密码 替换成你自己的密码

	/**
	 * 发送短信
	 *
	 * @param string $mobile 		手机号码
	 * @param string $msg 			短信内容
	 * @param string $needstatus 	是否需要状态报告
	 */
	private function sendSMS( $mobile, $msg, $needstatus = 'false') {
		
		//创蓝接口参数
		$postArr = array (
				          'account' => self::API_ACCOUNT,
				          'pswd' => self::API_PASSWORD,
				          'msg' => $msg,
				          'mobile' => $mobile,
				          'needstatus' => $needstatus
                     );
		
		$result = $this->curlPost( self::API_SEND_URL , $postArr);
		return $result;
	}

	/**
	 * 通过CURL发送HTTP请求
	 * @param string $url  //请求URL
	 * @param array $postFields //请求参数 
	 * @return mixed
	 */
	private function curlPost($url,$postFields){
		$postFields = http_build_query($postFields);
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_POST, 1 );
		curl_setopt ( $ch, CURLOPT_HEADER, 0 );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $postFields );
		$result = curl_exec ( $ch );
		curl_close ( $ch );
		return $result;
	}
}
