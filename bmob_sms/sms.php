<?php
require 'BmobPush.class.php';
require 'BmobSms.class.php';
require 'BmobConfig.class.php';
try {
//$res = $bmobSms->sendSmsVerifyCode("131xxxxxxxx", "注册模板");  //发送短信验证码
 $res = $bmobSms->sendSms("18888668554", "您的验证码是：222222, 有效期是10分钟。"); //发送短信
var_dump($res)}
} catch (Exception $e) {
    echo $e;
}
?>