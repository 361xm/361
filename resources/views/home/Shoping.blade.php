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
    <div class="nullcart" style="display:block;"><div class="divA"><a href="/index.php?m=Index&a=index"></a><a href="/index.php?m=User&a=collect"></a></div></div>
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
						</table>
	<div class="order_buyinfo clearfix">
		<div class="obi_left f_l">
			<div class="delall f_l"><span style="margin-top:0px;"></span><div style="float:left;">&nbsp;全选 <a href="javascript:void(0);" id="deleall">批量删除</a></div><div style="clear:both;"></div></div>
			<div class="clear"></div>
		</div>
		<div class="obi_right f_l">
			<div class="bottombo" style="border-bottom:none;">
				商品总计(不含邮费)：<span class="font14 allprice"  id="needpayprice" style="color:#F99302; font-weight:bold; font-size:16px;"> ￥<em style="font-style:normal;">0.00</em></span> <br />
			</div>
			<!--应付总额：<span class="price allprice" id="needpayprice">￥<em style="font-style:normal;">0.00</em></span> -->
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

@endsection