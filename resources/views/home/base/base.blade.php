<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>361官方商城</title>
    <meta name="keywords" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在"多一度热爱"品牌精神的指引下，361°积极践行"热爱"文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。" />
    <meta name="description" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在"多一度热爱"品牌精神的指引下，361°积极践行"热爱"文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。" />
    <meta property="qc:admins" content="15426722676361307246375" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link href="../../home/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../home/css/home1.css" rel="stylesheet" type="text/css" />
    <link href="../../home/css/css0520.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../../home/css/jquery.fancybox-1.3.4.css" media="screen" />
    <link href="../../home/css/default.css" rel="stylesheet" type="text/css" />
    <link href="../../home/css/product-new.css" rel="stylesheet" type="text/css" />
    <link href="../../home/css/user.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="newheader361" style="margin-top:-17px"> 
       <!--登陆/注册-->
        <div class="toplogin">

            <div class="logincont"> <a href="#" class="area"  target="_blank"></a>

                    <?php 
                        if(isset(session('adminuser')->username)){
                          ?>  
                            &nbsp;<a href="{{ URL('/center')}}" style="margin-left:8px;font-size:16px;"><em style="margin-left:8px;margin-right:8px;font-size:16px;" >{{ session('adminuser')->username }}</em></a>&nbsp;&nbsp;
                            <span><a href="{{ URL('/logout') }}" style="font-size:16px;">退出</a></span>

                        <?php

                        }else{
                        ?>
                            <a href="{{ URL('/login') }}" style="font-size:16px;" class="in">注册登录</a>
                        <?php
                        }
                    ?>

                <em style="margin-left:8px;font-size:16px;">欢迎您：</em>
            </div>
                        
        </div>
        <!--导航-->
        <div class="top_nav">
            <div class="navcon"> <a class="logo" ></a>
                <div class="newshop_menu" style="width:684px;">
                    <ul>
                        <li><a href="/" style="background:none;" class="dd" >首页</a></li>
                        <li class="mainlevel"><a href="{{ URL('/product') }}" target="_blank" class="dd"><em></em>所有产品</a>
                        </li>
                        <li class="pointer"><a href="{{ URL('/info') }}" target="_blank" class="dd">品牌新闻</a></li>
                        <!--<li class="pointer"><a href="http://rio2016.361sport.com.br/" target="_blank" class="dd" style="color:red;">里约奥运</a></li>-->
                        <li class="pointer"><a href="{{ URL('/pages') }}" target="_blank" class="dd" style="color:red;">敢超10K</a></li>
                        <li class="pointer"><a href="{{ URL('/Shoping') }}" target="_blank" class="dd">购物车</a></li>
                </div>
                <div class="serch">
                    <div class="clearfix">
                        <form id="search" name="search" method="get" action="/index.php?m=Product&a=index">
                            <input type="text" name="keyword" id="keyword" class="input" onblur="if(value ==''){value='跑鞋'}" onfocus="if(value =='跑鞋'){value =''}" value="跑鞋"/>
                            <input type="hidden" value="Product" name="m"/>
                            <input type="hidden" value="index" name="a"/>
                            <input type="submit" class="submit pointer" />
                        </form>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="search-hots-keywords"> 热门搜索：
                        <a href="http://www.361sport.com/index.php?m=Product&a=index&sports=12&pclass=4&sex=1">跑步鞋</a>
                        <a href="http://www.361sport.com/index.php?m=Product&a=index&keyword=短T">短T恤</a>
                        <a href="http://www.361sport.com/index.php?m=Pages&a=keji160323">科技助跑</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newheaderno"></div>
    <script>
    var zhm_Url="/index.php?m=Exchange&a=checkdhm";
    </script>
    <style type="text/css">
        .autumn .iframetab{width:100%; height:100%; position:fixed; background:#000; z-index:1000; filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5; top:0px; left:0px;}
        .autumn .iframeinfo{width:552px; background:#ffffff; z-index:1001; height:303px; left:50%; top:50%; margin-left:-310px; margin-top:-180px; position:fixed;}
        .autumn .iframeinfo2{width:300px; background:#ffffff; z-index:1001; height:200px; left:50%; top:50%; margin-left:-150px; margin-top:-100px; position:fixed;}
        .autumn .iframeinfo3{width:1038px; background:#ffffff; z-index:1001; height:590px; left:50%; top:50%; margin-left:-519px; margin-top:-295px; position:fixed;}
        .autumn .iframebody{ background:#F5F5F5; position:relative; padding-left: 0px;}
        #zntxdhan .zhm1_tit{font-size:18px; padding:32px 0px 16px;}
        #zntxdhan .zntxinput{border: 1px solid #9aa4ad;border-radius: 5px; padding:5px; width:205px;}
        #zntxdhan .zhm_submit{ background:#fb9306;border-radius: 5px; color:#fff; width:215px; margin-top:16px; height:36px; line-height:36px;}
        .autumn .iframeclose{position:absolute; top:0px;right:0px; background:#F39800; width:34px; height:34px; color:#ffffff; font-weight:bolder; font-size:34px; line-height:34px; text-align:center;}
        .autumn a.iframeclose:hover{text-decoration:none;}
        .axtdlink{ width:974px;margin:auto; padding-top:52px;}
        .axtdlink a{ display:inline-block; float:left; width:194px; height:70px; font-size:20px; color:#f99205; padding-top:185px; text-decoration:none; text-align:center}
    </style>
    <!--商标-->
    @yield('content')
        <div class="trademark">
            <div class="trademark-content" style="width:1180px;">
                <div class="trademark-tip">
                    <img src="../../home/images/foot2016.png" />
                </div> 
            </div>
          <div class="promis">
                    <div class="promis-content">
                        <div class="promise-con">
                            <ul>
                               <li>
                                    <div class="promise-left"><img src="../../home/images/guanfang-pic.png" width="91" height="34" /></div>
                                    <div class="promise-right" style="width:77px;">所售商品 均为官方正品</div>
                                    <div class="promise-bot"></div>
                              </li>
                                <li>
                                    <div class="promise-left"><img src="../../home/images/sever.png" width="134" height="34" /></div>
                                  <div class="promise-right">7天无理由退换货 贴心售后服务</div>
                                  <div class="promise-bot"></div>
                              </li>
                                <li>
                                    <div class="promise-left"><img src="../../home/images/shiwu.png" width="136" height="34" /></div>
                                  <div class="promise-right">100%实物拍摄 如实详情描述</div>
                                  <div class="promise-bot"></div>
                              </li>
                              <li>
                                    <div class="promise-left"><img src="../../home/images/baoyou.png" width="136" height="34" /></div>
                                <div class="promise-right" >满179元包邮 <br />包邮服务轻松购</div>
                                <div class="promise-bot"></div>
                              </li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="communite">
                      <div class="communite-content">
                        <div class="newfoot_cl">
                <dl>
                    <dt>关于361°</dt>
                    <dd><a href="http://ir.361sport.com/s/index.php" target="_blank"></a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=10">集团简介</a></dd>
                    <dd><a href="http://cn.361sport.com/shop.asp" target="_blank">店铺查询</a></dd>
                    <dd><a href="http://361bift.361sport.com" target="_blank">361°BIFT</a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=14">联系我们</a></dd>
                </dl>
                <dl>
                    <dt>如何购物</dt>
                    <dd><a href="/index.php?m=Info&a=show&id=1&cate_id=7">购物流程</a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=2&cate_id=7">订单查询</a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=15&cate_id=7">会员及积分体系</a></dd>
                    <!--<dd><a href="#">常见问题</a></dd>
                    <dd><a href="#">帮助中心</a></dd>-->
                </dl>
                <dl>
                    <dt>支付方式</dt>
                    <dd><a href="/index.php?m=Info&a=show&id=3&cate_id=7">支付方式</a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=4&cate_id=7">发票说明</a></dd>
                </dl>
                <dl>
                    <dt>物流配送</dt>
                    <dd><a href="/index.php?m=Info&a=show&id=5&cate_id=7">配送时间和范围</a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=6&cate_id=7">配送费用</a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=7&cate_id=7">商品验收</a></dd>
                </dl>
                <dl style="width:95px;">
                    <dt>售后服务</dt>
                    <dd><a href="/index.php?m=Info&a=show&id=9&cate_id=7">退换货流程</a></dd>
                    <dd><a href="/index.php?m=Info&a=show&id=8&cate_id=7">售后服务政策</a></dd>
                </dl>
            </div>
                        <div class="newfoot_cr">
                            <dl>
                                <dt>联系361°官方商城</dt>
                                <dd class="tel">
                                    <div class="phone-left"><img src="../../home/images/phone.png" width="42" height="42" /></div>
                                    <div class="phone-right">
                                        <span class="p1">0592-3790038</span>
                                        <span class="p2">&nbsp;&nbsp;在线时间：周一至周五<br>(9:00-12:00   13:00-18:00)<br></span>
                                    </div>
                                </dd>
                                <dd style="margin-bottom:0px;">
                                    <div class="phone-left"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes"><img src="../../home/images/qq.png" width="45" height="43" /></a></div>
                                    <div class="phone-right">
                                        <div class="fourtime"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">== 361在线客服 ==</a></div>
                                    </div>
                                </dd>
                                <dd style="padding-left:78px;">
                                    <div class="phone-right">
                                        <div class="fourtime5"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">QQ:476849964</a></div>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="clear"></div>

                      </div>
                    </div>
                    
          </div>
          <div class="Certificate">中国 闽ICP备05003868号 ©2013 三六一度(中国)有限公司 All Rights Reserved</div>
        </div>
    <div style="display:none;">
        <div id="inline6" style="width:820px;height:600px;overflow:auto; margin:auto;">
            <img src="../../home/images/qureai-tanchuang.jpg"/>
        </div>
    </div>
    <script type="text/html" id="iframeLogin">
    <div class="iframeLogin">
        <div class="iframeform">
            <label>登录名：<a href="/index.php?m=Member&a=login">免费注册&nbsp;&nbsp;</a></label>
            <input type="text" id="input" name="Laccount" value="" placeholder="手机号/会员名/邮箱">
            <label>登录密码：<a href="/index.php?m=Member&a=getpwd">忘记密码?</a></label>
            <input type="password" id="input" name="Lpassword" value="">
            <div class="formlist" id="profile_error" style="display:none; margin-top:10px; ">
                <dl style="padding:0px;">
                    <dd class="profile_error" style="width:85%;"></dd>
                </dl>
            </div>
            <input type="button" id="button" class="iframebutton" value="登&nbsp;&nbsp;&nbsp;陆" style="margin-top:10px;"/>
            <label class="otherlogin">第三方登陆</label>
            <label style="width:100%; text-align:center;"><a class="loginbyqq" href="/index.php?m=Loginby&a=index&ltype=qq" target="_blank"></a><a href="/index.php?m=Loginby&a=index&ltype=sina" class="loginbysina"  target="_blank"></a></label>
            <div style="clear:both;"></div>
        </div>
    </div>
    </script>
    <script type="text/javascript" src="../../home/js/jquery.js"></script>
    <script type="text/javascript" src="../../home/js/artdialog.js"></script>
    <script type="text/javascript" src="../../home/js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript" src="../../home/js/common.js"></script>
    <script type="text/javascript">
    var signUrl = "/index.php?m=User&a=signIn";
    </script>
    <!--双十一领优惠券-->
    <script type="text/javascript">
    $(document).ready(function(){
        $("map#Mapjtr").find("area").live("click",function(){
            var type = $(this).attr("data-type");
            var linkurl = "/index.php?m=Pages&a=getcoupon3";
            $.post(linkurl,{type:type},function( result ){
                if( result.status == '1' ){
                    artDialog.login("账户登陆"); return false;
                } else if( result.status == '2' ){
                    artDialog.tips(result.msg,2,"error"); return false;
                } else {
                    artDialog.tips(result.msg,2,"succeed"); return true;
                }
            },"json")
        });
        $("map#Mapschl").find("area").live("click",function(){
            var type = $(this).attr("data-type");
            var linkurl = "/index.php?m=Pages&a=getcoupon3";
            $.post(linkurl,{type:type},function( result ){
                if( result.status == '1' ){
                    artDialog.login("账户登陆"); return false;
                } else if( result.status == '2' ){
                    artDialog.tips(result.msg,2,"error"); return false;
                } else {
                    artDialog.tips(result.msg,2,"succeed"); return true;
                }
            },"json")
        });
    });
    </script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?30e32478a250ebe4ba15f477df282ae7";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script type="text/javascript">
    var  loginUrl="/index.php?m=Member&a=checkLogin";
    $(document).ready(function() {
        $(".variousv").fancybox({
            'padding'           : 0,
            'autoScale'         : false,
            'transitionIn'      : 'none',
            'transitionOut'     : 'none',
            'width'    : 860,
            'height'   : 600,
            'overlayColor' : '#000'
        });
            // 中秋博饼兑换窗口开始 2015/9/19 @txx
        $("a.btn_exchange").live("click",function(){
            $(".autumn").fadeIn("fast");
        });
        $("a.iframeclose").live("click",function(){
            $(".autumn").hide("fast");
        });
        //中秋博饼兑换窗口结束  2015/9/19 @txx
    });
    </script> 
    <script type="text/javascript" src="../../home/js/yzw.js"></script> 
    <script type="text/javascript" src="../../home/js/jquery.superslide.js"></script> 
    <script type="text/javascript" src="../../home/js/superslide.2.1.js"></script> 
    <script type="text/javascript" src="../../home/js/jquery.scrollLoading-min.js"></script> 
    <script type="text/javascript">
    $(function(){
        /**---------2016/5/20 add By @Ljp Begin------------**/
        jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true,trigger:"click",interTime:"4000"});
        $("div.bd,div.flash-list>ul").find("li.hdp1607182").click(function(){
            var tid = $(this).attr("data-tid");
            $("div.viedo01").css({"display":"none"});
            $("#fl"+tid).css({"display":"block"});
            $("#iframetab").css({"display":"block"});
            return true;
        });
        $("a.close").click(function(){
            $("div#iframetab").css({"display":"none"}); return true;
        });
        /**---------2016/5/20 add By @Ljp Begin------------**/
        $(".banana").yzw({
            auto:true,
            autotime:5000
        });
        $(".hkjdlist").yzw({
            auto:false,
            gdlinum:6
        }); 
        $(".hptitle a").hover(function(){
            var n=$(this).index();
            var thisindex=$(this);
            var cid = $(this).attr("data-id");
            var datahas=thisindex.attr("data-has");
            $(this).addClass("on").siblings().removeClass("on");
            if(datahas=="1"){
                thisindex.parent().parent().find(".hpright dl").eq(n).show().siblings().hide();
            }
            else{
                $.post("?m=Index&a=ajax_homepro",{cid:cid},function( result ){
                    if(result.status=='1'){
                        thisindex.attr("data-has","1");
                        thisindex.parent().parent().find(".hpright dl").eq(n).append(result.msg);
                        thisindex.parent().parent().find(".hpright dl").eq(n).show().siblings().hide();
                    }
                },"json");
            }
        });
        $("img#djbfsp").click(function(){
            $(this).css({"display":"none"});
            $("div.viedo01").css({"display":"block"});
            return true;
        });
    });
    </script> 
    <script type="text/javascript">
    var sssTime = "",ddd=0;
    var ssliW = $("div.ssul").width();
    var ssliL = $("div.ssul01>ul>li").length;
    $(document).ready(function(){
        sssTime = setInterval("show_sss()","2500");
        $("div.ssul01>ul").css({"width":ssliW*ssliL});
        $("div.sssul>ul>li").hover(function(){
            ddd = $(this).index();
            $("div.ssul01>ul").animate({"left":-ssliW*ddd});
            clearInterval(sssTime);
            return true;
        },function(){ sssTime = setInterval("show_sss()","2500"); return true; });
    });
    function show_sss(){
        ddd++;
        if( ddd >= ssliL ) ddd = 0;
        $("div.ssul01>ul").animate({"left":-ssliW*ddd});
    }
    </script>
</body>
</html>
