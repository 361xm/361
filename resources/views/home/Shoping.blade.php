@extends("home.base.base1")
@section('content')
<link href="http://361img.361sport.com.cn/shop/css/order.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.divA{ width:320px; margin-left:500px; padding-top:4px;	height:200px;}
.divA a{padding: 13px 50px;margin-left:55px; display:inline-block;}
.tishi1{width:350px;margin-bottom: 10px;float:right;color:#000;background:#F79646;height:15px;padding:3px 5px;letter-spacing:1px;}
.order_l_r1 { margin-bottom: 30px; }
</style>
<div class="ordercon clearfix">
    <div class="order_l_right order_l_r1 f_r"></div>
    <div class="nullcart" style="display:none;"><div class="divA"><a href="/index.php?m=Index&a=index"></a><a href="/index.php?m=User&a=collect"></a></div></div>
</div>
<div class="clear"></div>
<div class="ordercon">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="order_listdh" height="32">
		<tr>
			<th width="5%" align="center" id="allCheck"><span style="margin-top:0px;"></span></th>
			<th colspan="5">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<th width="15%">&nbsp;</th>
						<th width="20%"><strong>商品</strong></th>
						<th width="20%" align="center"><strong>单价</strong></th>
						<th width="15%" align="center"><strong>数量</strong></th>
						<th width="15%" align="center"><strong>会员价</strong></th>
						<th align="center"><strong>小计</strong></th>
					</tr>
				</table>
			</th>
			<th width="8%" align="center"><strong>操作</strong></th>
		</tr>
					<tr id="olist">
				<td  id="olist-zero"><span data-value="1" data-cartid="75670" class="on"></span></td>
				<td id="olist-first" colspan="5">
					<table cellpadding="0" cellspacing="0" class="order_list">
						<tr >
							<td  width="15%"><a href="/index.php?m=Product&a=show&proid=6705" target="_blank"><img src="http://361img.361sport.com.cn/product/2016/10/14/m_58009f5e6f641.jpg" width="80" height="80" /></a></td>
							<td  width="20%" style="text-align:left;"><span class="title">篮球鞋</span><br />
							颜色：黑色/F1红&nbsp;&nbsp;&nbsp;尺码：42							 <br />
							</td>
							<td  width="20%"> ￥499.00<br/><em style="font-style:normal;text-decoration: line-through; color:#999999;">￥499.00</em></td>
							<td  width="15%">
								<div>
																<span class="order_num" data-tid="75670"><a class="down" id="cart_less"></a><input type="text" name="textfield" id="cart_count_75670" value="1" readonly="readonly"/><a class="up"  id="cart_add"></a></span>								</div>
															</td>
							<td id="hyjg"  width="15%"><span id="cart_allprice_75670">￥<em style="font-style:normal;">499.00</em></span></td>
							<td id="xiaoji"><span id="cart_allprice_75670">￥499.00</span></td>
						</tr>
						<input type="hidden" name="goodsId" value="6705" />					</table>
				</td>
				<td id="olist-second">
					<a class="tostore pointer">收藏</a>					<a class="f6" id="del-75670" href="javascript:void(0);" data-tid="75670">删除</a>
				</td>
			</tr>	</table>
	<div class="order_buyinfo clearfix">
		<div class="obi_left f_l">
			<div class="delall f_l"><span style="margin-top:0px;"></span><div style="float:left;">&nbsp;全选 <a href="javascript:void(0);" id="deleall">批量删除</a></div><div style="clear:both;"></div></div>
			<div class="clear"></div>
		</div>
		<div class="obi_right f_l">
			<div class="bottombo" style="border-bottom:none;">
				商品总计(不含邮费)：<span class="font14 allprice"  id="needpayprice" style="color:#F99302; font-weight:bold; font-size:16px;"> ￥<em style="font-style:normal;">499.00</em></span> <br />
			</div>
			<!--应付总额：<span class="price allprice" id="needpayprice">￥<em style="font-style:normal;">499.00</em></span> -->
			<div class="button">
				<a href="/index.php?m=Product&a=index" class="gouwu f_l"></a>
				<input name="" type="submit" class="jiesuan f_r"/>
			</div>
		</div>
	</div>
</div>
<div class="ordercon">
  <div class="order_history_dh"><span>商品删除记录</span><a href="javascript:void(0);"  class="f_r" style="padding-right:10px; display:inline-block;">清空记录</a></div>
    <div class="order_history">
    	<ul id="deletecart">
			<li class="cartloadding" style="border-top:none;"></li>
        </ul>
    </div>
  <div class="order_historybot"></div>
</div>
<!--内容-->
<div class="clear"></div>
<!--底部-->
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/cart.js"></script>
<script type="text/javascript">
var delCart = "/index.php?m=Cart&a=delcart";
var lessCart = "/index.php?m=Cart&a=changecart";
var chUrl = "/index.php?m=Cart&a=changeprice";
var ajaxCart = "/index.php?m=Cart&a=ajaxcart";
var delCartAll = "/index.php?m=Cart&a=deleall";
var balanceCart = "/index.php?m=Cart&a=balance";
var addCart = "/index.php?m=Cart&a=addcart";
var collectUrl = "/index.php?m=Product&a=collect";
var cartDelete = "/index.php?m=Cart&a=getCartDelete";
var cartAllCart = "/index.php?m=Cart&a=delAllCart";
var loginUrl = "/index.php?m=Member&a=checkLogin";
</script>
<link rel='stylesheet' type='text/css' property='stylesheet' href='http://lamp153.com/_debugbar/assets/stylesheets?v=1476149102'><script type='text/javascript' src='http://lamp153.com/_debugbar/assets/javascript?v=1476149103'></script><script type="text/javascript">jQuery.noConflict(true);</script>
<script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Queries", "widget": new PhpDebugBar.Widgets.SQLQueriesWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.setDataMap({
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"emails": ["swiftmailer_mails.mails", []],
"emails:badge": ["swiftmailer_mails.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar);
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/lamp153.com\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"0304e3a643cd2b301dba7f945da16713","datetime":"2016-10-16 08:17:13","utime":1476605833.7637,"method":"GET","uri":"\/Shoping","ip":"192.168.153.24"},"php":{"version":"5.6.8","interface":"apache2handler"},"messages":{"count":0,"messages":[]},"time":{"start":1476605833.495,"end":1476605833.7637,"duration":0.26869821548462,"duration_str":"268.7ms","measures":[{"label":"Booting","start":1476605833.495,"relative_start":0,"end":1476605833.6927,"relative_end":1476605833.6927,"duration":0.19769406318665,"duration_str":"197.69ms","params":[],"collector":null},{"label":"Application","start":1476605833.6307,"relative_start":0.13569116592407,"end":1476605833.7637,"relative_end":0,"duration":0.13300704956055,"duration_str":"133.01ms","params":[],"collector":null}]},"memory":{"peak_usage":8650752,"peak_usage_str":"8.25MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":1,"templates":[{"name":"home.Shoping (\\resources\\views\\home\\Shoping.blade.php)","param_count":0,"params":[],"type":"blade"}]},"route":{"uri":"GET Shoping","middleware":"web","controller":"App\\Http\\Controllers\\NewlinkController@Shoping","namespace":"App\\Http\\Controllers","prefix":null,"where":[],"file":"\\app\\Http\\Controllers\\NewlinkController.php:40-43"},"queries":{"nb_statements":0,"nb_failed_statements":0,"accumulated_duration":0,"accumulated_duration_str":"0\u03bcs","statements":[]},"swiftmailer_mails":{"count":0,"mails":[]},"session":{"_token":"54ZOhWEvPk4jT084Mw9RTNf7538qq0bkxxbJh61z","_previous":"array:1 [\n  \"url\" => \"http:\/\/lamp153.com\/Shoping\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","adminuser":"{#335\n  +\"id\": 24\n  +\"adminname\": \"wangjie\"\n  +\"password\": \"123\"\n  +\"status\": \"1\"\n  +\"repassword\": \"123\"\n}","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"format":"html","content_type":"text\/html; charset=UTF-8","status_text":"OK","status_code":"200","request_query":"[]","request_request":"[]","request_headers":"array:10 [\n  \"host\" => array:1 [\n    0 => \"lamp153.com\"\n  ]\n  \"connection\" => array:1 [\n    0 => \"keep-alive\"\n  ]\n  \"cache-control\" => array:1 [\n    0 => \"max-age=0\"\n  ]\n  \"accept\" => array:1 [\n    0 => \"text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/webp,*\/*;q=0.8\"\n  ]\n  \"upgrade-insecure-requests\" => array:1 [\n    0 => \"1\"\n  ]\n  \"user-agent\" => array:1 [\n    0 => \"Mozilla\/5.0 (Windows NT 6.1) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/44.0.2403.130 Safari\/537.36\"\n  ]\n  \"referer\" => array:1 [\n    0 => \"http:\/\/lamp153.com\/\"\n  ]\n  \"accept-encoding\" => array:1 [\n    0 => \"gzip, deflate, sdch\"\n  ]\n  \"accept-language\" => array:1 [\n    0 => \"zh-CN,zh;q=0.8\"\n  ]\n  \"cookie\" => array:1 [\n    0 => \"laravel_session=eyJpdiI6InRSYmdGTWZ3OFNSUXZcLzQxM1o4MEV3PT0iLCJ2YWx1ZSI6IlJYR0xqSXQrZUM5cVBcL2hsN3Yram1vREZHYkRmcU9NdEEwNE9QT3NKMHo3Y3hsU09zV2lyYlV3VGxTQXBnXC9BQXVtcjg5cTdcLzYreDd2NDA2YVJGUGJnPT0iLCJtYWMiOiIyNmQ5MDFmMWU1MTVkOWU3NGJhZjNiNmQ5NjhiOTAwOTE1MWVhYjViMjQ3YTA0MTFkNjBmODg0ZDlkZjVmZDVmIn0%3D; Hm_lvt_30e32478a250ebe4ba15f477df282ae7=1476597933,1476599054,1476601693,1476604724; Hm_lpvt_30e32478a250ebe4ba15f477df282ae7=1476605793\"\n  ]\n]","request_server":"array:51 [\n  \"REDIRECT_MIBDIRS\" => \"C:\/xampp\/php\/extras\/mibs\"\n  \"REDIRECT_MYSQL_HOME\" => \"\\xampp\\mysql\\bin\"\n  \"REDIRECT_OPENSSL_CONF\" => \"C:\/xampp\/apache\/bin\/openssl.cnf\"\n  \"REDIRECT_PHP_PEAR_SYSCONF_DIR\" => \"\\xampp\\php\"\n  \"REDIRECT_PHPRC\" => \"\\xampp\\php\"\n  \"REDIRECT_TMP\" => \"\\xampp\\tmp\"\n  \"REDIRECT_STATUS\" => \"200\"\n  \"MIBDIRS\" => \"C:\/xampp\/php\/extras\/mibs\"\n  \"MYSQL_HOME\" => \"\\xampp\\mysql\\bin\"\n  \"OPENSSL_CONF\" => \"C:\/xampp\/apache\/bin\/openssl.cnf\"\n  \"PHP_PEAR_SYSCONF_DIR\" => \"\\xampp\\php\"\n  \"PHPRC\" => \"\\xampp\\php\"\n  \"TMP\" => \"\\xampp\\tmp\"\n  \"HTTP_HOST\" => \"lamp153.com\"\n  \"HTTP_CONNECTION\" => \"keep-alive\"\n  \"HTTP_CACHE_CONTROL\" => \"max-age=0\"\n  \"HTTP_ACCEPT\" => \"text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/webp,*\/*;q=0.8\"\n  \"HTTP_UPGRADE_INSECURE_REQUESTS\" => \"1\"\n  \"HTTP_USER_AGENT\" => \"Mozilla\/5.0 (Windows NT 6.1) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/44.0.2403.130 Safari\/537.36\"\n  \"HTTP_REFERER\" => \"http:\/\/lamp153.com\/\"\n  \"HTTP_ACCEPT_ENCODING\" => \"gzip, deflate, sdch\"\n  \"HTTP_ACCEPT_LANGUAGE\" => \"zh-CN,zh;q=0.8\"\n  \"HTTP_COOKIE\" => \"laravel_session=eyJpdiI6InRSYmdGTWZ3OFNSUXZcLzQxM1o4MEV3PT0iLCJ2YWx1ZSI6IlJYR0xqSXQrZUM5cVBcL2hsN3Yram1vREZHYkRmcU9NdEEwNE9QT3NKMHo3Y3hsU09zV2lyYlV3VGxTQXBnXC9BQXVtcjg5cTdcLzYreDd2NDA2YVJGUGJnPT0iLCJtYWMiOiIyNmQ5MDFmMWU1MTVkOWU3NGJhZjNiNmQ5NjhiOTAwOTE1MWVhYjViMjQ3YTA0MTFkNjBmODg0ZDlkZjVmZDVmIn0%3D; Hm_lvt_30e32478a250ebe4ba15f477df282ae7=1476597933,1476599054,1476601693,1476604724; Hm_lpvt_30e32478a250ebe4ba15f477df282ae7=1476605793\"\n  \"PATH\" => \"C:\\Windows\\system32;C:\\Windows;C:\\Windows\\System32\\Wbem;C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\mysql\\bin\\;C:\\xampp\\php;C:\\Program Files\\TortoiseGit\\bin\"\n  \"SystemRoot\" => \"C:\\Windows\"\n  \"COMSPEC\" => \"C:\\Windows\\system32\\cmd.exe\"\n  \"PATHEXT\" => \".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\"\n  \"WINDIR\" => \"C:\\Windows\"\n  \"SERVER_SIGNATURE\" => \"<address>Apache\/2.4.12 (Win32) OpenSSL\/1.0.1l PHP\/5.6.8 Server at lamp153.com Port 80<\/address>\\n\"\n  \"SERVER_SOFTWARE\" => \"Apache\/2.4.12 (Win32) OpenSSL\/1.0.1l PHP\/5.6.8\"\n  \"SERVER_NAME\" => \"lamp153.com\"\n  \"SERVER_ADDR\" => \"192.168.153.24\"\n  \"SERVER_PORT\" => \"80\"\n  \"REMOTE_ADDR\" => \"192.168.153.24\"\n  \"DOCUMENT_ROOT\" => \"C:\/xampp\/htdocs\/laravelxm\/public\"\n  \"REQUEST_SCHEME\" => \"http\"\n  \"CONTEXT_PREFIX\" => \"\"\n  \"CONTEXT_DOCUMENT_ROOT\" => \"C:\/xampp\/htdocs\/laravelxm\/public\"\n  \"SERVER_ADMIN\" => \"webmaster@dummy-host2.example.com\"\n  \"SCRIPT_FILENAME\" => \"C:\/xampp\/htdocs\/laravelxm\/public\/index.php\"\n  \"REMOTE_PORT\" => \"51373\"\n  \"REDIRECT_URL\" => \"\/Shoping\"\n  \"GATEWAY_INTERFACE\" => \"CGI\/1.1\"\n  \"SERVER_PROTOCOL\" => \"HTTP\/1.1\"\n  \"REQUEST_METHOD\" => \"GET\"\n  \"QUERY_STRING\" => \"\"\n  \"REQUEST_URI\" => \"\/Shoping\"\n  \"SCRIPT_NAME\" => \"\/index.php\"\n  \"PHP_SELF\" => \"\/index.php\"\n  \"REQUEST_TIME_FLOAT\" => 1476605833.495\n  \"REQUEST_TIME\" => 1476605833\n]","request_cookies":"array:3 [\n  \"laravel_session\" => \"9mwF3uoU1I39mGbAmUkwVNZYyD41OBhqkS1LPrTl\"\n  \"Hm_lvt_30e32478a250ebe4ba15f477df282ae7\" => null\n  \"Hm_lpvt_30e32478a250ebe4ba15f477df282ae7\" => null\n]","response_headers":"array:3 [\n  \"cache-control\" => array:1 [\n    0 => \"no-cache\"\n  ]\n  \"content-type\" => array:1 [\n    0 => \"text\/html; charset=UTF-8\"\n  ]\n  \"Set-Cookie\" => array:1 [\n    0 => \"laravel_session=eyJpdiI6InQ4OXZLQlFRYzNtTUJuRkdyQUZORmc9PSIsInZhbHVlIjoiZFwvVXlpZUhNWnVqTGl2ZVBwdDJOMkY5eSt6dStMelZwRlJYZzR2c3BoQWI2T1hPcnlUOGEzdVhOVk90ZmlmSXJzWFwvbGIyZ0tObmNhc0ZtRkd1ZldSdz09IiwibWFjIjoiMTIxZTIxYjIzZmUyODE3YTE3NTQ5MTc3NzVkNzc4MDRlYjE5YTk0NGVmOTVlYTlkY2IwYmYyOGY3NTFiMzFkMiJ9; expires=Sun, 16-Oct-2016 10:17:13 GMT; path=\/; httponly\"\n  ]\n]","path_info":"\/Shoping","session_attributes":"array:5 [\n  \"_token\" => \"54ZOhWEvPk4jT084Mw9RTNf7538qq0bkxxbJh61z\"\n  \"_previous\" => array:1 [\n    \"url\" => \"http:\/\/lamp153.com\/Shoping\"\n  ]\n  \"_flash\" => array:2 [\n    \"old\" => []\n    \"new\" => []\n  ]\n  \"adminuser\" => {#335\n    +\"id\": 24\n    +\"adminname\": \"wangjie\"\n    +\"password\": \"123\"\n    +\"status\": \"1\"\n    +\"repassword\": \"123\"\n  }\n  \"PHPDEBUGBAR_STACK_DATA\" => []\n]"}}, "0304e3a643cd2b301dba7f945da16713");

</script>
@endsection