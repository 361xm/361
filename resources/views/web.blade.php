@extends('home.base.base')
@section('content')
<body style="background-color:#EEE;">
<link rel="stylesheet" type="text/css" href="../../home/css/simple-calendar.css">
<!--图片轮播-->

	<div class="banana">
		<div class="innterwrap">
			<ul class="focusList">
				<ul class="slides">		
					<li> <a href="#" target="_blank" ><img src="../../home/images/gc160902_01.jpg"/></a> </li>			
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp160913.jpg"/></a> </li>
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp160826.jpg"/></a> </li>
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp20160726.jpg"/></a> </li>
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp160617.jpg"/></a> </li>
				</ul>
			</ul>
			<ol class="btnlist">			
				<li class="btn">敢超自己——敢超10K</li>
				<li>漫游全球——国庆出游季</li>
				<li>运动焕新——秋装上市</li>	
				<li>热爱是金——铸就光芒</li>
				<li>耀夜而出——幻彩跑鞋</li>
			</ol>
		</div>
	</div>
	<div id="container">
		<div class="center-pic">
			<ul>
				<li style="width:385px;"><a href="{{ URL('/newlink') }}" target="_blank" ><img  src="../../home/images/109.jpg"/></a></li>
				<li style="width:383px;"><a href="{{ URL('/link') }}" target="_blank" ><img  src="../../home/images/home01.jpg"/></a></li>
				<li style="margin-right:0px;width:394px;"> 
					<a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6160"  target="_blank"  class="pico"><img  src="../../home/images/homeg_11.jpg"/></a>
					<a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6159" target="_blank" class="pico"><img  src="../../home/images/homeg_14.jpg"/></a>
				</li>
			</ul>
		</div>
			<div class="center-du" style="padding-bottom:30px;">
				<div id="content-wrapper">
	  				<div class="inner clearfix">
	      				<div id = 'calendar' style="width:100%;">

	      				</div>
	    			</div>
			<!-- <div class="f_l" style="width:511px;"><img  src="../../home/images/homeg_18.jpg"/></div> -->
			<!-- <div class="f_l" style="width:404px;margin-left:13px;"><img  src="../../home/images/homeg_20.jpg" usemap="#Maphylxzsqy"/>
				<map name="Maphylxzsqy" id="Maphylxzsqy">
					<area shape="rect" coords="37,63,121,155" href="/index.php?m=Info&a=show&id=1" target="_blank"/>
					<area shape="rect" coords="159,61,241,154" href="/index.php?m=Info&a=show&id=15" target="_blank"/>
					<area shape="rect" coords="275,64,366,161" href="/index.php?m=Info&a=show&id=21" target="_blank"/>
				</map>
			</div> -->
			<!-- <div class="right_u"> <a href="{{ URL('/login') }}" target="_blank" class="cd_reg">注册</a><br />
				<a href="{{ URL('/login') }}" target="_blank" class="cd_login">登录</a> </div> -->
			</div>
                       </div>
		<div class="hkjd">
			<div class="piclist" style="margin-top:140px;">
				<ul>
					<li><a href="{{ URL('/lk1')}}" target="_blank"><img  src="../../home/images/homeg_28.jpg"/><span>跑步系列</span></a></li>
					<li><a href="{{ URL('/lk2')}}" target="_blank"><img  src="../../home/images/homeg_32.jpg"/><span>综训系列</span></a></li>
					<li><a href="{{ URL('/lk3')}}" target="_blank"><img  src="../../home/images/homeg_30.jpg"/><span>休闲系列</span></a></li>
					<li><a href="{{ URL('/lk4')}}" target="_blank"><img  src="../../home/images/homeg_34.jpg"/><span>篮球系列</span></a></li>
					<li><a href="{{ URL('/lk5')}}" target="_blank"><img  src="../../home/images/homeg_38.jpg"/><span>足球系列</span></a></li>
					<li style="margin-right:0px;"><a href="{{ URL('/lk6')}}" target="_blank"><img  src="../../home/images/homeg_36.jpg"/><span>户外系列</span></a></li>
				</ul>
			</div>
			<div class="hkjdlist">
				<div class="innterwrap">
					<ul class="focusList">
						<ul class="slides">
							<li> <a href="" ><img src="../../home/images/homeg_46.jpg"/></a> </li>
							<li> <a href=""><img src="../../home/images/homeg_48.jpg"/></a> </li>
							<li> <a href=""><img src="../../home/images/homeg_51.jpg"/></a> </li>
							<li> <a href=""><img src="../../home/images/homeg_54.jpg"/></a> </li>
							<li> <a href=""><img src="../../home/images/homeg_57.jpg"/></a> </li>
							<li> <a href=""><img src="../../home/images/homeg_59.jpg"/></a> </li>
						</ul>
					</ul>
				</div>
			</div>
		</div>
	</div>
	@foreach($list as $type)
	
		<!--1F   遍历这一块-->
			<div class="hprolist" style="padding-bottom:10px;">
				<?php
					if($type->pid==0){
				?>
				<div class="hprolist_c">
				<div class="hptitle" style="background-image:url(cssimg/homeg_123.jpg);">
					<strong><span style="color:#ddd;font-size:20px;float:left;padding-top:10px;padding-left:10px;" >{{ $type->classname }}</span></strong>
				</div>
				<div class="clearfix">
				<div class="hpleft">
					
						<dl class="clearfix">
							<dt>{{ $type->decipt }}</dt>
								<dd><a href="#"><img  src="../../home/images/homeg_93.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_95.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_100.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_113.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_111.jpg"></a></dd>
								<dd></dd>
						</dl>
							<dl class="clearfix">
							<dt>精品系列</dt>
								<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5447" target="_blank"><img  src="../../home/images/homeg0415_26.jpg"></a></dd>
								<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5512" target="_blank"><img  src="../../home/images/homeg0415_28.jpg"></a></dd>
							</dl>
					</div>
						<div class="hpright">
							<dl style="display:block;">
							<dt>
							<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=12&pclass=4" target="_blank"><img src="admins/upload/{{ $type->goodsimage }}" width="285" height="470" style="float:left;"/></a>
							</dt>
							
							<?php
						}
							?>
							@foreach($data as $good)
							<dd><a href="" target="_blank"><img src="admins/upload/{{$good->goodsImage}}" width="174" height="174"/><span>{{ $good->goodsname}}<br /><strong>RMB{{ $good->goodsprice}}</strong></span></a></dd></dl>
							@endforeach
						</div>
					</div>	
		
	</div>
	@endforeach
			<script type="text/javascript" src="../../home/js/simple-calendar.js"></script>
	    	<script>
	    		 var myCalendar = new SimpleCalendar('#calendar');
	    	</script>
	    		
</body>
@endsection
