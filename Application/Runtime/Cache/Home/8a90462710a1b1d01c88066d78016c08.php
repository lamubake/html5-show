<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title>用户中心_充值</title>

<link rel="shortcut icon" href="/favicon.ico" />

<link href="/assets/aaaaaa.css" rel="stylesheet" type="text/css" />
 

    <script src="/Public/css/waiwan/jquery.min.js"></script>

</head>

<body  style="background: url(/assets/images/create/bg.jpg) center center;">


<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
 
 
<div class=" clearfix">
		
	<div class="AreaR">
		<div class="box">
			<div class="box_1">
				<div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
					
					 
					 
					<h5><span>购买秀点</span></h5>
					<div class="blank"></div>
					<!--<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
						<tr>
							<td align="right" bgcolor="#ffffff"><a href="user.php?act=account_deposit" class="f6">充值</a> |   <a href="user.php?act=account_detail" class="f6">查看充值记录</a>   </td>
						</tr>
					</table>
				 -->
					<?php if(($action) == "return_msg"): ?><div style="text-align:center; font-size:14px;padding-top: 50px;line-height: 30px;">  <?php echo ($msg); ?>  <br><a href="/#/usercenter/userinfo">返回会员中心</a>，或 <a href="/#/usercenter/xd">查看秀点日志</a></div>
                    <?php else: ?>												<form name="formSurplus" method="post" action="/?c=pay&a=userspay" onSubmit="return submitSurplus()">
					  
						
						
						<div class="payment">
							<h4 class="tit">选择商品：</h4>
							<ul class="chongzhinav">
                              <?php if(is_array($goods_list)): foreach($goods_list as $key=>$item): ?><li>
									<label for="wangying">
									<input type="radio" name="gid" value="<?php echo ($item["id"]); ?>" price="<?php echo ($item["price"]); ?>" xd_value="<?php echo ($item["xd_value"]); ?>"/>
									<?php echo ($item["goods_name"]); ?>(金额:<b><?php echo ($item["price"]); ?>￥</b>)  </label>
								</li><?php endforeach; endif; ?>			 
															</ul>
							<br clear="all">
							<div class="balance">
								<p class="cz"> <span>我的账户：<strong><?php echo ($user_info["email_varchar"]); ?></strong> <br />
									我当前秀点 <b><?php echo ($user_info["xd"]); ?></b>个 <br />
                                    购买的秀点 <b id="bugxd">0</b>个 <br />
									所需支付金额：
									 <font color="red" size="+2" id="order_amount">0.00</font>
									元 <br />
									订单备注：<br />
									<textarea name="user_note" cols="55" rows="3"  placeholder="捎一句话给卖家！"></textarea>
									</span> </p>
								<div class="paytype_btn">
									<input type="hidden" name="surplus_type" value="0" />
									<input type="hidden" name="rec_id" value="" />
									<input type="hidden" name="act" value="act_account" />
									<input type="submit" class="pay_submit" name="submit" value="提交申请" />
								</div>
							</div>
							 
							 
						</div>
						
					</form><?php endif; ?>
										
					
										
				</div>
			</div>
		</div>
	</div>
	

<div class="blank"></div>
<script type="text/javascript">
 function submitSurplus(){
	 var val=$('input:radio[name="gid"]:checked').val();
        if(val==null){
		 alert('请选择商品！');
	   return false;
	 } 
 }
 $(function(){
    $('input[name="gid"]').on('click',function(){
	   $('#order_amount').html($(this).attr('price'));
	    $('#bugxd').html($(this).attr('xd_value'));
	  
	   
	})	 
 });
</script>
</div>
</body>
</html>