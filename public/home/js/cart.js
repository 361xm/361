/**
 * js 2015/5/28 @Ljp
 */
 $(document).ready(function(){
	 //js-check
	 var cleng = $("table.order_listdh").find("td#olist-zero").length;
	var sleng = $("table.order_listdh").find("td#olist-zero>span.on").length;
	if( cleng == sleng  ) $("th#allCheck,div.delall").find("span").addClass("on");
	 $("td#olist-second").find("a.f6").live("click",function(){
		var tid = $(this).attr("data-tid");
		artDialog.confirm("鎮ㄧ‘瀹炶鎶婅瀹濊礉绉诲嚭璐墿杞﹀悧锛�",function(){
			$.post(delCart,{tid:tid},function( result ){
				if( result.status=='1' ){
					artDialog.tips(result.msg,2,"error"); return false;
				} else {
					$("#del-"+tid).parent().parent("tr").remove();
					$("span#needpayprice>em").html(result.msg);
					var cleng = $("table.order_listdh").find("td#olist-zero").length;
					if( !cleng ) $("div.nullcart").css({"display":"block"});
					getCartDelete();
					return true;
				}
			},"json");
		},function(){ return false; })
	});
	//cart  add or less 
	$("a#cart_less").live("click",function(){
		var cartid = $(this).parent("span").attr("data-tid");
		var hyjg = $("td#hyjg>span#cart_allprice_"+cartid).find("em").html();
		var num = $(this).siblings("input").val();
		num --;
		if( num<=0 ) return false;
		$.post(lessCart,{cartid:cartid,num:num,type:"less"},function( result ){
			if( result.status == '1' ){ artDialog.tips(result.msg,2,"error"); return false; }
			else {
				var nowp = parseFloat(hyjg*num).toFixed(2);
				$("td#xiaoji").find("span#cart_allprice_"+cartid).html("楼"+nowp);
				$("input#cart_count_"+cartid).val(num);
				$("span#needpayprice").find("em").html(result.msg);
				return true;
			}
		},"json");
	});
	$("a#cart_add").live("click",function(){
		var cartid = $(this).parent("span").attr("data-tid");
		var hyjg = $("td#hyjg>span#cart_allprice_"+cartid).find("em").html();
		var num = $(this).siblings("input").val();
		num ++;
		$.post(lessCart,{cartid:cartid,num:num,type:"add"},function( result ){
			if( result.status == '1' ){ artDialog.tips(result.msg,2,"error"); return false; }
			else if( result.status == '2' ) { artDialog.tips("鍟嗗搧鏁伴噺瓒呰繃搴撳瓨",2,"error"); return false; }
			else {
				var nowp = parseFloat(hyjg*num).toFixed(2);
				$("td#xiaoji").find("span#cart_allprice_"+cartid).html("楼"+nowp);
				$("input#cart_count_"+cartid).val(num); 
				$("span#needpayprice").find("em").html(result.msg);
				return true;
			}
		},"json");
	});
	//deleteall
	$("a#deleall").live("click",function(){
		$.post(delCartAll,{},function( result ){
			if( $("td#olist-zero>span").hasClass("on") ){
				$("td#olist-zero>span.on").parent().parent("tr#olist").remove();
				$("span#needpayprice>em").html( "0.00" );
				$("div.nullcart").css({"display":"block"});
				getCartDelete(); return true; 
			}
		});
	});
	//selected
	$("td#olist-zero>span").live("click",function(){
		var isSelect = "";
		var carid = $(this).attr("data-cartid");
		$(this).toggleClass("on");
		var alllen = $("table.order_listdh").find("td#olist-zero").length;
		var sellen = $("table.order_listdh").find("td#olist-zero>span.on").length;
		if( alllen == sellen  ) $("th#allCheck,div.delall").find("span").addClass("on");  
		else $("th#allCheck,div.delall").find("span").removeClass("on");
		if( $(this).hasClass("on") ) isSelect="buy";
		isThatBuy(carid,isSelect); return true;
	});
	$("th#allCheck>span,div.delall>span").live("click",function(){
		var isall = "";
		$(this).toggleClass("on");
		if( $(this).hasClass("on") ){
			$("table.order_listdh").find("td#olist-zero>span").removeClass("on").addClass("on");
			if( !$("div.delall>span").hasClass("on") ) $("div.delall>span").addClass("on");
			if( !$("th#allCheck>span").hasClass("on") ) $("th#allCheck>span").addClass("on");
			isall = "all";
		} else {
			$("table.order_listdh").find("td#olist-zero>span").removeClass("on");
			if( $("div.delall>span").hasClass("on") ) $("div.delall>span").removeClass("on");
			if( $("th#allCheck>span").hasClass("on") ) $("th#allCheck>span").removeClass("on");
		}
		isBuyAll(isall);
		return true;
	});
	//jiesuan
	$("input.jiesuan").live("click",function(){
		var leng = $("table.order_listdh").find("td#olist-zero>span.on").length;
		if( !leng ){ artDialog.tips("璇烽€夋嫨鎮ㄨ璐拱鐨勫疂璐�",2,"warning"); return false; }
		$.post(balanceCart,{},function( result ){
			if( result.statue == '2' ){
				artDialog.tips("璇烽€夋嫨鎮ㄨ璐拱鐨勫疂璐�",2,"warning"); return false;
			} else if( result.status == '1' ){
				artDialog.login("璐︽埛鐧婚檰"); return false;
			}else{
				window.location.href=result.msg; return true;
			}
		});
	});
	//addcart
	$("a#forbuy").live("click",function( result ){
		var cid = $(this).attr("data-cid");
		$.post(addCart,{cid:cid},function( result ){
			if( result.status == '0' ){ window.location.reload(); return true; } else { artDialog.tips(result.msg,2,"error"); return false; }
		},"json");
	},"json");
	//js collect
	$("a.tostore").live("click",function(){
		var proId = $(this).parent().siblings().find("input[name=goodsId]").val();
		if( !proId ) { return false; }
		$.post(collectUrl,{proid:proId},function( result ){
			if( result.status == '1' ){
				artDialog.tips(result.msg,2,"error"); return false;
			}else if( result.status == '2' ){
				artDialog.login("璐︽埛鐧婚檰"); return false;
			} else{
				artDialog.tips(result.msg,2,"succeed"); return true;
			}
		},"json");
	});
	setTimeout("getCartDelete()",1000);
	$("div.order_history_dh").find("a.f_r").live("click",function( result ){
		$.post(cartAllCart,{},function( result ){
			if( result.status == '0' ){
				$("ul#deletecart").html( result.msg ); return true;
			}
		},"json");
	});
 });
function isBuyAll( allbuy ){
	$.post(ajaxCart,{allbuy:allbuy},function( result ){
		if( result.status == '0' ) { $("span#needpayprice>em").html( result.msg ); return true; }
	});
}
function isThatBuy( cartId,isselected ){
	$.post(chUrl,{cartid:cartId,isselected:isselected},function( result ){
		if( result.status == '0' ) { 
			$("span#needpayprice>em").html( result.msg ); return true; 
		} else{
			artDialog.tips(result.msg,2,"error");
		}
	});
}
function getCartDelete(){
	$.post(cartDelete,{},function( result ){
		if( result.status == '0' ){ $("div.order_history>ul#deletecart").html( result.msg ); return true; }
	},"json");
}