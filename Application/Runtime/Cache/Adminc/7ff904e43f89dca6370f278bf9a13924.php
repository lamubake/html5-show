<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>移动场景系统后台管理登陆</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/Public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Public/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    
    
     
       <link href="/Public/media/css/search.css" rel="stylesheet" type="text/css"/>
     <link href="/Public/media/css/error.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/media/css/invoice.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/media/css/inbox.css" rel="stylesheet" type="text/css"/>
 <link href="/Public/media/css/bootstrap-fileupload.css" rel="stylesheet" type="text/css"/>
 
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="shortcut icon" href="/favicon.ico" />
      <script type="text/javascript">
	    function unselectall(thisform){
        if(thisform.chkAll.checked){
            thisform.chkAll.checked = thisform.chkAll.checked&0;
        }   
    }
    function CheckAll(thisform){
        for (var i=0;i<thisform.elements.length;i++){
            var e = thisform.elements[i];
			debugger;
            if (e.name != "chkAll"&&e.disabled!=true){
                e.checked = thisform.chkAll.checked; 
			   if(i==0)alert(e.value);
			}
        }
    }
	 function changeSceneType(type_int){
	   var biztypeId=$('#scenetypeB').val();
	   $.get('?c=scene&a=getSceneTag',{type_int:type_int,biztypeId:biztypeId},function(data){
		    if(data.status==1){
			  $('#scenetypeS').html(data.info);	
			}
		 },'json');
	}
	  </script>      
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="/adminc.php">
				<img src="/Public/media/image/logo.png" alt="logo" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN HORIZANTAL MENU -->

			  <div class="navbar hor-menu hidden-phone hidden-tablet">
					<div class="navbar-inner">
						<ul class="nav">
							<li class="visible-phone visible-tablet">
								<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
								<form class="sidebar-search">

									<div class="input-box">

										<a href="javascript:;" class="remove"></a>

										<input type="text" placeholder="Search..." />            

										<input type="button" class="submit" value=" " />

									</div>

								</form>

								<!-- END RESPONSIVE QUICK SEARCH FORM -->

							</li>

							<li class="<?php echo ($ui["index"]); ?>">
								<a href="<?php echo U('/index');?>">
								管理首页
								<span class="selected"></span>
								</a>
							</li>
							<li class="<?php echo ($ui["sys_set"]); echo ($ui["sys"]); ?>  <?php echo ($ui["sys_setmail"]); echo ($ui["sys_wxapi"]); ?> <?php echo ($ui["Update"]); ?> <?php echo ($ui["Database"]); echo ($ui["sys_pay"]); ?>">
								<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
								站点设置
								<span class="arrow"></span>     
								</a>
								<ul class="dropdown-menu">
									     	<li class="<?php echo ($ui["sys_set"]); ?>"><a href="<?php echo U('sys/set');?>">网站信息设置</a></li>
    	<li class="<?php echo ($ui["sys_homeset"]); ?>"><a href="<?php echo U('sys/homeset');?>">首页配置</a></li>
    	 <?php if(C('sys_link_arr')): ?> <li class="<?php echo ($ui["sys_scenelink"]); ?>"><a href="<?php echo U('sys/scenelink');?>">相关状态场景</a></li> <?php endif; ?> 
                	<li class="<?php echo ($ui["sys_pay"]); ?>"><a href="<?php echo U('sys/pay');?>">支付配置</a></li>
                    	<li class="<?php echo ($ui["otherlogin"]); ?>"><a href="<?php echo U('sys/otherlogin');?>">第三方登录</a></li>
				<li class="<?php echo ($ui["sys_setmail"]); ?>"><a href="<?php echo U('sys/setmail');?>">邮件服务器</a></li>
				<li class="<?php echo ($ui["sys_wxapi"]); ?>"><a href="<?php echo U('sys/wxapi');?>">SDK分享</a></li>
               
		        <li class="<?php echo ($ui["Update"]); ?>"> <a href="<?php echo U('/Update');?>"> 在线更新</a> </li>
                <li class="<?php echo ($ui["Database"]); ?>"> <a href="<?php echo U('/Database/index/type/export');?>"> 数据备份</a> </li>                  
                   
								</ul>

								<b class="caret-out"></b>                        

							</li>

							<li  class="<?php echo ($ui["useranli"]); ?>">
								<a data-toggle="dropdown" class="dropdown-toggle" href="">案例管理<span class="arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="<?php if(($flag) == "useranli"): echo ($ui["anli_index"]); endif; ?>"> <a  href="<?php echo U('/Scene/index/flag/useranli');?>"> 用户案例管理</a> </li>
                        <li class="<?php if(($flag) == "template"): echo ($ui["anli_index"]); endif; ?>"> <a href="/adminc.php?c=scene&flag=template"> 申请模板案例</a> </li>
                         <li class="<?php if(($flag) == "promotion"): echo ($ui["anli_index"]); endif; ?>"> <a href="/adminc.php?c=scene&flag=promotion"> 申请推荐案例</a> </li>
								</ul>
								<b class="caret-out"></b>         
							</li>

							<li class="<?php echo ($ui["users"]); ?> <?php echo ($ui["users_add"]); ?> <?php echo ($ui["user_group"]); ?>">
								<a data-toggle="dropdown" class="dropdown-toggle" href="">用户管理
								<span class="arrow"></span>
								</a>

								<ul class="dropdown-menu">
               <li class="<?php echo ($ui["users"]); ?>"> <a href="<?php echo U('user/index');?>"> 前台用户管理</a> </li>
		       <li class="<?php echo ($ui["users_add"]); ?>"> <a href="<?php echo U('user/add');?>"> 添加新用户</a> </li>
               <li class="<?php echo ($ui["user_group"]); ?>"> <a href=adminc.php?c=group> 用户组管理</a> </li>
								</ul>
								<b class="caret-out"></b>                        
							</li>
							<li>
								<a href="/adminc.php?c=sys&a=clearcache">清理缓存</a>
							</li>
					<li>
								<a href="/" target="_blank">网站首页</a>
							</li>
							<li>
								<span class="hor-menu-search-form-toggler">&nbsp;</span>
								<div class="search-form hidden-phone hidden-tablet">
									<form class="form-search">
										<div class="input-append">

											<input type="text" placeholder="Search..." class="m-wrap">

											<button type="button" class="btn"></button>

										</div>

									</form>

								</div>

							</li>

						</ul>

					</div>

				</div>

				<!-- END HORIZANTAL MENU -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/Public/media/image/menu-toggler.png" alt=""/>

				</a>          

	       

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="assets/images/defaultuser.jpg " style="width:30px;"/>

						<span class="username"><?php echo ($Adminusername); ?></span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">
                        
                         
                    <li> <a href="<?php echo U('sys/admin');?>"> <i class="icon-user"></i>  管理员管理</a> </li>
                 <li> <a href="/adminc.php?c=sys&a=edit&id=<?php echo ($Adminuserid); ?>"><i class="icon-calendar"></i> 修改密码</a> </li>
		        <li > <a href="/adminc.php?c=auth&a=logout"><i class=" icon-share"></i>  退出</a> </li>

						

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

			  </ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->   

	<div class="page-container row-fluid" >

		<!-- BEGIN HORIZONTAL MENU PAGE SIDEBAR1 -->
		<div class="page-sidebar nav-collapse collapse">
		  <!-- BEGIN SIDEBAR MENU -->
		  <ul class="page-sidebar-menu">
		    <li>
		      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		      <div class="sidebar-toggler hidden-phone"></div>
		      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	        </li>
		    <li>
		      <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		      <form class="sidebar-search">
		        <div class="input-box"> <a href="javascript:;" class="remove"></a>
		          <input type="text" placeholder="Search..." />
		          <input type="button" class="submit" value=" " />
	            </div>
	          </form>
		      <!-- END RESPONSIVE QUICK SEARCH FORM -->
	        </li>
		    <li class="<?php echo ($ui["index"]); ?>"> <a href="<?php echo U('/index');?>"> <i class="icon-home"></i> 
            <span class="title">管理首页</span> <span class="selected"></span> </a> </li>
  
		    <li class="<?php echo ($ui["sys_set"]); echo ($ui["sys"]); echo ($ui["sys_setmail"]); echo ($ui["sys_wxapi"]); echo ($ui["Update"]); echo ($ui["sys_pay"]); ?>"> 
            <a href="javascript:;"> <i class="icon-cogs"></i> <span class="title">站点设置</span> 
             <span class="selected "></span> </a>
		      <ul class="sub-menu">
              	   	<li class="<?php echo ($ui["sys_set"]); ?>"><a href="<?php echo U('sys/set');?>">网站信息设置</a></li>
    	<li class="<?php echo ($ui["sys_homeset"]); ?>"><a href="<?php echo U('sys/homeset');?>">首页配置</a></li>
    	 <?php if(C('sys_link_arr')): ?> <li class="<?php echo ($ui["sys_scenelink"]); ?>"><a href="<?php echo U('sys/scenelink');?>">相关状态场景</a></li> <?php endif; ?> 
                	<li class="<?php echo ($ui["sys_pay"]); ?>"><a href="<?php echo U('sys/pay');?>">支付配置</a></li>
                    	<li class="<?php echo ($ui["otherlogin"]); ?>"><a href="<?php echo U('sys/otherlogin');?>">第三方登录</a></li>
				<li class="<?php echo ($ui["sys_setmail"]); ?>"><a href="<?php echo U('sys/setmail');?>">邮件服务器</a></li>
				<li class="<?php echo ($ui["sys_wxapi"]); ?>"><a href="<?php echo U('sys/wxapi');?>">SDK分享</a></li>
               
		        <li class="<?php echo ($ui["Update"]); ?>"> <a href="<?php echo U('/Update');?>"> 在线更新</a> </li>
                <li class="<?php echo ($ui["Database"]); ?>"> <a href="<?php echo U('/Database/index/type/export');?>"> 数据备份</a> </li>                   
	          </ul>
			  </li>
    
             <li class="<?php echo ($ui["sys_admin"]); echo ($ui["sys_edit"]); echo ($ui["sys_add"]); ?>"> <a href="javascript:;"> 
             <i class="icon-user"></i> <span class="title">管理员管理</span> 
             <span class="selected "></span> </a>
		      <ul class="sub-menu">
                <li class="<?php echo ($ui["sys_admin"]); ?>"> <a href="<?php echo U('sys/admin');?>"> 管理员管理</a> </li>
                 <li class="<?php echo ($ui["sys_edit"]); ?>"> <a href="/adminc.php?c=sys&a=edit&id=<?php echo ($Adminuserid); ?>"> 修改密码</a> </li>
		        <li class="<?php echo ($ui["sys_add"]); ?>"> <a href="<?php echo U('sys/add');?>"> 添加管理员</a> </li>
		        
		    
	          </ul>
	        </li>
            
		    <li class="<?php echo ($ui["users"]); echo ($ui["users_e"]); echo ($ui["users_add"]); echo ($ui["user_group"]); ?>"> <a href="javascript:;"> 
            <i class="icon-user"></i> <span class="title">用户管理</span> 
            <span class="selected "></span> </a>
		      <ul class="sub-menu">
               <li class="<?php echo ($ui["users"]); ?>"> <a href="<?php echo U('user/index');?>"> 前台用户管理</a> </li>
		       <li class="<?php echo ($ui["users_add"]); ?>"> <a href="<?php echo U('user/add');?>"> 添加新用户</a> </li>
               <li class="<?php echo ($ui["user_group"]); ?>"> <a href=adminc.php?c=group> 用户组管理</a> </li>
			   
			   
	          </ul>
	        </li>
			
			
		    <li class="<?php echo ($ui["scene_anli"]); ?>"> <a href="javascript:;"> 
            <i class="icon-table"></i> <span class="title">用户案例管理</span> 
            <span class="selected "></span> </a>
		      <ul class="sub-menu">
		              <li class="<?php if(($flag) == "useranli"): echo ($ui["anli_index"]); endif; ?>"> <a  href="<?php echo U('/Scene/index/flag/useranli');?>"> 用户案例管理</a> </li>
                        <li class="<?php if(($flag) == "template"): echo ($ui["anli_index"]); endif; ?>"> <a href="/adminc.php?c=scene&flag=template"> 申请模板案例</a> </li>
                         <li class="<?php if(($flag) == "promotion"): echo ($ui["anli_index"]); endif; ?>"> <a href="/adminc.php?c=scene&flag=promotion"> 申请推荐案例</a> </li>
					 
	          </ul>
	        </li>
		    <li class="<?php if(($flag) == "useranli"): else: ?> <?php echo ($ui["scene_index"]); echo ($ui["Reptile"]); echo ($ui["yxcj"]); endif; ?> "> <a href="javascript:;"> 
            <i class="icon-briefcase"></i> 
            <span class="title">系统模板管理</span> <span class="selected "></span> </a>
		      <ul class="sub-menu">
              	<li class="<?php echo ($ui["scene_index"]); ?>"><a href="<?php echo U('/scene/index');?>" >模板列表</a></li>
                 <li class="<?php if($_GET['from']=='0'): ?>active <?php else: endif; ?>"><a href="/adminc.php?c=reptile&from=0" ><i class="fa "></i>采集官方</a></li>
				 <li class="<?php if($_GET['from']=='70'): ?>active <?php else: endif; ?>"><a href="/adminc.php?c=reptile&from=70" ><i class="fa "></i>采集70c</a></li>
                  <li class="<?php echo ($ui["yxcj"]); ?>"><a href="/adminc.php?c=Cjsys" ><i class="fa "></i>采集组件</a></li>
	          </ul>
	        </li>
            
            
             <li class="<?php echo ($ui["goods"]); ?>"> <a href="javascript:;"> 
            <i class="icon-collapse"></i> <span class="title">商品管理</span> 
            <span class="selected "></span> </a>
		      <ul class="sub-menu">
		        <li  class="<?php echo ($ui["goods_index"]); ?>"> <a href="<?php echo U('/goods');?>"> 商品管理</a> </li>
		        <li class="<?php echo ($ui["goods_add"]); ?>" > <a href="?c=goods&a=add"> 添加商品</a> </li>
		    
		     
	          </ul>
	        </li>
             <li class=" <?php echo ($ui["order_info"]); ?>"> <a href="javascript:;"> 
            <i class="icon-yen"></i> <span class="title">订单管理</span> 
            <span class="selected "></span> </a>
		      <ul class="sub-menu">
		        <li class="<?php echo ($ui["order_info_index"]); ?>"> <a href="<?php echo U('/order');?>"> 订单管理</a> </li>
		    
		     
	          </ul>
	        </li>
            <li class=" <?php echo ($ui["article"]); ?>"> <a href="javascript:;"> 
            <i class="icon-collapse"></i> <span class="title">文章管理</span> 
            <span class="selected "></span> </a>
		      <ul class="sub-menu">
		        <li class="<?php echo ($ui["article_index"]); ?>"> <a href="<?php echo U('/article');?>"> 文章管理</a> </li> 
	          </ul>
	        </li>
		    <li class="<?php echo ($ui["File_index"]); ?>"> <a href="javascript:;"> <i class="icon-gift"></i> 
            <span class="title">系统素材管理</span> <span class="selected "></span> </a>
		      <ul class="sub-menu">
		    <!--<li class="<?php if(($filetype) == "0"): echo ($ui["File_index"]); endif; ?>"><a href="/adminc.php?c=File&a=index&filetype=0" ><i class="fa "></i>背景素材</a></li>-->
		    <li class="<?php if(($filetype) == "1"): echo ($ui["File_index"]); endif; ?>"><a href="/adminc.php?c=File&a=index&filetype=1" ><i class="fa "></i>图片素材</a></li>
		    <li class="<?php if(($filetype) == "2"): echo ($ui["File_index"]); endif; ?>"><a href="/adminc.php?c=File&a=index&filetype=2" ><i class="fa "></i>音乐素材</a></li>
	   
	          </ul>
	        </li>
            
            
            
            <li class="<?php echo ($ui["userancs"]); ?>"> <a href="javascript:;"> <i class="icon-gift"></i> 
            <span class="title">用户素材管理</span> <span class="selected "></span> </a>
		      <ul class="sub-menu">
		    <li class="<?php if(($filetype) == "0"): echo ($ui["File_index"]); endif; ?>"><a href="/adminc.php?c=File&a=userancs&filetype=0" ><i class="fa "></i>背景素材</a></li>
		    <li class="<?php if(($filetype) == "1"): echo ($ui["File_index"]); endif; ?>"><a href="/adminc.php?c=File&a=userancs&filetype=1" ><i class="fa "></i>图片素材</a></li>
		    <li class="<?php if(($filetype) == "2"): echo ($ui["File_index"]); endif; ?>"><a href="/adminc.php?c=File&a=userancs&filetype=2" ><i class="fa "></i>音乐素材</a></li>
	   
	          </ul>
	        </li>
            
            
              <li class="<?php echo ($ui["cate"]); echo ($ui["tag_index"]); ?>"> <a href="javascript:;"> 
            <i class="icon-briefcase"></i> 
            <span class="title">系统分类管理</span> <span class="selected "></span> </a>
		      <ul class="sub-menu">          
              
                 <li  class="<?php if(($type) == "tpType"): echo ($ui["cate_index"]); endif; ?>"><a href="/adminc.php?c=cate&filetype=tpType" >图片分类</a></li>
					 <!-- <li class="<?php if(($type) == "bgType"): echo ($ui["cate_index"]); endif; ?>"><a href="/adminc.php?c=cate&filetype=bgType"  >背景分类</a></li> -->
					 <li class="<?php if(($type) == "musType"): echo ($ui["cate_index"]); endif; ?>"><a href="/adminc.php?c=cate&filetype=musType" >音乐分类</a></li>
				 <li class="<?php if(($type) == "scene_type"): echo ($ui["cate_index"]); endif; ?>"><a href="/adminc.php?c=cate&filetype=scene_type">场景分类</a></li> 
                 <?php if(C('VI_SCENECODE')): ?>
                 <li class="<?php if(($type) == "mytpl_type"): echo ($ui["cate_index"]); endif; ?>"><a href="/adminc.php?c=cate&filetype=mytpl_type">我的模板分类</a></li>     <?php endif; ?>
	          </ul>
	        </li>
            
            
              <li class="<?php echo ($ui["Database"]); ?>"> 
            <a href="javascript:;"> <i class="icon-cogs"></i> <span class="title">数据库备份</span> 
             <span class="selected "></span> </a>
		      <ul class="sub-menu">
               <li class=""> <a href="<?php echo U('/Database/index/type/export');?>"> 数据库备份</a> </li>
                <li class=""> <a href="<?php echo U('/Database/index/type/import');?>"> 数据库还原</a> </li>

	          </ul>
	        </li>
            
            
                     <li class="<?php echo ($ui["Ad_msgList"]); echo ($ui["Ad_msgadd"]); echo ($ui["ad_friendlinks"]); ?>"> <a href="javascript:;"> 
             <i class="icon-bookmark-empty"></i>  <span class="title">公告&友情链接</span> 
             <span class="selected "></span> </a>
		      <ul class="sub-menu">
               <li class="<?php echo ($ui["Ad_msgList"]); ?>"> <a href="<?php echo U('/Ad/msglist');?>"> 公告管理</a> </li>
                <li class="<?php echo ($ui["Ad_msgadd"]); ?>"> <a href="<?php echo U('/Ad/msgadd');?>"> 新增公告</a> </li>
     		   <li class="<?php echo ($ui["ad_friendlinks"]); ?>"> <a href="<?php echo U('Ad/friendlinks');?>"> 友情链接管理</a> </li>

		    
	          </ul>
	        </li>
            <li class="<?php echo ($ui["Ad_index"]); echo ($ui["Ad_d"]); ?>"> <a href="javascript:;"> 
             <i class="icon-bookmark-empty"></i>  <span class="title">Logo图片管理</span> 
             <span class="selected "></span> </a>
		      <ul class="sub-menu">
              
                <li class="<?php echo ($ui["Ad_index"]); ?>"> <a href="<?php echo U('/Ad/index');?>"> 广告图片管理</a> </li>
 <li class="<?php echo ($ui["Ad_d"]); ?>"> <a href="<?php echo U('/Ad/add');?>"> 新增广告</a> </li>
		    
	          </ul>
	        </li>
            
	
		    
		
		  
	      </ul>
		  <!-- END SIDEBAR MENU -->
</div>
		<!-- END BEGIN HORIZONTAL MENU PAGE SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM--><!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
  
    
            	<script src="/Public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
                <style>
                  div.radio input {
opacity: 11;}
.radio input[type="radio"], .checkbox input[type="checkbox"] {
	margin-left: 0 !important;}</style>
<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							<?php if(($flag) == "useranli"): ?>用户案例列表<?php else: ?> 场景模板列表<?php endif; ?> <small> <?php if(($flag) == "useranli"): ?>用户案例列表<?php else: ?> 场景模板列表<?php endif; ?> </small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">首页</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#"><?php if(($flag) == "useranli"): ?>用户案例管理<?php else: ?> 模板管理<?php endif; ?></a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#"><?php if(($flag) == "useranli"): ?>用户案例列表<?php else: ?> 场景模板列表<?php endif; ?></a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
                        
                        <?php if(($flag) == "useranli"): ?><li class="<?php if(($fnid) == ""): ?>active<?php endif; ?>"><a  href="<?php echo U('/Scene/index/flag/useranli');?>" >全部</a></li>
							<?php if(is_array($scene_type_list)): foreach($scene_type_list as $key=>$item): ?><li class="<?php if(($item['value']) == $fnid): ?>active<?php endif; ?>"><a href="?c=scene&a=index&flag=useranli&fnid=<?php echo ($item["value"]); ?>"><?php echo ($item["title"]); ?></a></li><?php endforeach; endif; ?> 
                            <?php else: ?> 
                            <li class="<?php if(($fnid) == ""): ?>active<?php endif; ?>"><a  href="<?php echo U('/scene/index');?>" >全部</a></li>
                           <?php if(is_array($scene_type_list)): foreach($scene_type_list as $key=>$item): ?><li class="<?php if(($item['value']) == $fnid): ?>active<?php endif; ?>"><a href="?c=scene&a=index&fnid=<?php echo ($item["value"]); ?>"><?php echo ($item["title"]); ?></a></li><?php endforeach; endif; endif; ?>
						</ul>
                        </div>
                        
                        
						<div class="tab-content">
                            <div class="row-fluid search-forms search-default">
									<form class="form-search" action="#" method="post">
										<div class="chat-form">
											<div class="input-cont">   
                                            <select name="field" style="width:120px">
             <option value="scenename_varchar"  <?php if(($field) == "scenename_varchar"): ?>selected="selected"<?php endif; ?>>名称</option>
              <option value="scenecode_varchar"  <?php if(($field) == "scenecode_varchar"): ?>selected="selected"<?php endif; ?>>编码</option>
            </select>
<input type="text"  name="keyword"  placeholder="请输入关键词..." class="m-wrap" style="width:200px">
<select id="scenetypeB" name="fnid" onChange="changeSceneType()" style="width:120px" >
<option value="">请选择</option>
                        <?php if(is_array($scene_type_list)): foreach($scene_type_list as $key=>$item): ?><option value="<?php echo ($item["value"]); ?>" <?php if(($item[value]) == $user['scenetype_int']): ?>selected="selected"<?php endif; ?>><?php echo ($item["title"]); ?></option><?php endforeach; endif; ?>                     
                       
                       </select>- 
                       <select  id="scenetypeS" name="tagId" style="width:120px" >
                        <option value="">请选择</option>
                        <?php if(is_array($scene_type_list2)): foreach($scene_type_list2 as $key=>$item): ?><option value="<?php echo ($item["tagid_int"]); ?>" <?php if(($item[tagid_int]) == $user['tagid_int']): ?>selected="selected"<?php endif; ?>><?php echo ($item["name_varchar"]); ?></option><?php endforeach; endif; ?>     
                       </select>
           <?php if( in_array($flag,array("template","promotion","useranli"))): ?>             
             <select name="applyPromotion" style="width:120px" >
              <option value="">选择案例审核状态</option>
                         <option <?php if(($applyPromotion) == "1"): ?>selected="selected"<?php endif; ?> value="1">待审核</option>
              <option <?php if(($applyPromotion) == "2"): ?>selected="selected"<?php endif; ?> value="2">审核通过</option>
              <option <?php if(($applyPromotion) == "-1"): ?>selected="selected"<?php endif; ?> value="-1">审核未通过</option> 
             </select>   
             <select name="applyTemplate" style="width:120px" >
              <option value="">选择模板审核状态</option>
              <option <?php if(($applyTemplate) == "1"): ?>selected="selected"<?php endif; ?> value="1">待审核</option>
              <option <?php if(($applyTemplate) == "2"): ?>selected="selected"<?php endif; ?> value="2">审核通过</option>
              <option <?php if(($applyTemplate) == "-1"): ?>selected="selected"<?php endif; ?> value="-1">审核未通过</option> 
             </select>         
           <?php endif; ?>            
     

<button type="submit" class="btn green" style=" ">搜 索 &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
											</div>


										</div>
									</form>
								</div>
                                
                                
                    
                       
                  
                        <?php if(is_array($select)): foreach($select as $key=>$item): ?><div class="row-fluid portfolio-block">
									<div class="span6 portfolio-text">
										<img src="/Uploads/<?php echo ($item["thumbnail_varchar"]); ?>" class="" style="width:112px; height:112px">
                                        
                <img src="http://qr.liantu.com/api.php?bg=f3f3f3&fg=333333&gc=222222&el=l&w=112&m=5&text=http://<?php echo ($_SERVER['HTTP_HOST']); ?>/v-<?php echo ($item["scenecode_varchar"]); ?>"/>                        

										<div class="portfolio-text-info">

										  <h4> <?php echo ($item["scenename_varchar"]); ?></h4>

											<p>添加时间：<span> <?php echo ($item["createtime_time"]); ?></span></p>
<p>
类别： 
<code>  <?php echo (getSceneType("scene_type",$item["scenetype_int"])); ?>- <?php echo (getSceneTag($item["tagid_int"])); ?></code>&nbsp;
								</p>
                                <p>    翻页方式: <code><?php echo (getPageMode($item["movietype_int"])); ?></code>		</p>
									  </div>

						  </div>

									<div class="span4">
                                    
                                    
 <?php if( in_array($flag,array("template","promotion","useranli"))): ?>
        <div class="portfolio-info">
											审核推荐(案例中是否显示)
										<p>  <a title="点击更改审核状态"  href="javascript:;"  onclick="shenheApply(<?php echo ($item["sceneid_bigint"]); ?>,'<?php echo ($flag); ?>',this)" class="btn purple-stripe">
                                        <?php if($item["applypromotion"] == 2): ?>已推荐
               <?php elseif($item["applypromotion"] == 1): ?>
                              待审核    
                 <?php elseif($item["applypromotion"] == -1): ?> 
                        审核未通过   
                        <?php else: ?> 未申请推荐<?php endif; ?></a>
                                       
                          
                                        </p>
                                      <?php if(($flag) != "useranli"): ?><code>使用<?php echo ($item["usecount_int"]); ?>次</code><?php endif; ?>
										</div>
                                        
          <div class="portfolio-info">
											审核内容
										<p> <?php if(($item['shenhe']) == "1"): ?><a title="点击取消通过审核"  href="/adminc.php?c=scene&a=shenhe&id=<?php echo ($item["sceneid_bigint"]); ?>&no=1" class="btn purple-stripe">已审核</a><?php else: ?>
                                        <a title="点击通过审核" href="/adminc.php?c=scene&a=shenhe&id=<?php echo ($item["sceneid_bigint"]); ?>" class="btn purple-stripe"> 未审核</a><?php endif; ?>
                          
                                        </p>
                                      
					 	</div>                              
                                        
                                        
<?php endif; ?>
                                        
                                        
										<div class="portfolio-info">
											场景关闭情况
<p>
 <?php if(($item['showstatus_int']) == "1"): ?><a href="/adminc.php?c=scene&a=is_showstatus&id=<?php echo ($item["sceneid_bigint"]); ?>&no=1" title="点击关闭" class="btn purple-stripe"style="color:#0af005;"><i class="icon-play"></i> 开启</a>
 <?php else: ?>
 
 <a href="/adminc.php?c=scene&a=is_showstatus&id=<?php echo ($item["sceneid_bigint"]); ?>" title="点击开启" class="btn purple-stripe" style="color:#000;"><i class="icon-pause"></i>  关闭</a><?php endif; ?> 
 
</p><code>权重：<?php echo ($item["rank"]); ?></code>
										</div>

									
                                    
                             
									</div>
                                    <!--  <?php if(($flag) == "useranli"): ?><div class="portfolio-info">
											有无广告
										<p> <?php if(($item['shenhe']) == "1"): ?><a title="点击取消通过审核"  href="/adminc.php?c=scene&a=shenhe&id=<?php echo ($item["sceneid_bigint"]); ?>&no=1" class="btn purple-stripe">已审核</a><?php else: ?>
                                        <a title="点击通过审核" href="/adminc.php?c=scene&a=shenhe&id=<?php echo ($item["sceneid_bigint"]); ?>" class="btn purple-stripe"> 未审核</a><?php endif; ?>
                          
                                        </p>
                                      <?php if(($flag) != "useranli"): ?><code>使用<?php echo ($item["usecount_int"]); ?>次</code><?php endif; ?>
										</div>
									</div><?php endif; ?>-->
                                    
                                    
                                    
                                    
                                

		<div class="span2 portfolio-btn" style="float: right;">
        
    <a href="javascript:;" onclick="ajaxpreview('<?php echo ($item["scenecode_varchar"]); ?>');return false;" class="btn blue " style="width:47%"><i class="icon-eye-open"></i> 预览</a> 
 
 <?php if($flag=="useranli"): ?>
 <a href="?c=scene&a=usercpsystem&id=<?php echo ($item["sceneid_bigint"]); ?>" class="btn blue " style="width:47%"><i class=" icon-bookmark"></i>  设为模板</a> 
  <?php elseif($flag=="promotion" ||$flag=="template"): ?>
    <a href="javascript:;" onclick="shenheApply(<?php echo ($item["sceneid_bigint"]); ?>,'<?php echo ($flag); ?>',this)" applypromotion="<?php echo ($item["applypromotion"]); ?>" applytemplate="<?php echo ($item["applytemplate"]); ?>" class="btn blue " style="width:47%"><i class=" icon-bookmark"></i> 审核案例</a>
   <?php endif; ?>

<a href="?c=scene&a=e&<?php if(($flag) == "useranli"): ?>&flag=useranli<?php endif; ?>&id=<?php echo ($item["sceneid_bigint"]); ?>" class="btn blue " style="width:47%" >
<span><i class="icon-pencil"></i>  修改</span></a>

 <a href="javascript:;" onClick="javascript:if(confirm('你确信要删除[<?php echo ($item["scenename_varchar"]); ?>]吗？')) window.location='?c=scene&a=del&id=<?php echo ($item["sceneid_bigint"]); if(($flag) == "useranli"): ?>&flag=useranli<?php endif; ?>'" class="btn blue " style="width:47%">    
<span><i class="icon-remove"></i>   删除</span></a>  


									</div>

						  </div><?php endforeach; endif; ?>  
                                   <div class="space5"></div>
                                   <div class="pagination pagination-right">

									 <div class="pages">

									  <?php echo ($page); ?>

									</div>

								</div>
                                </div>
                                </div>
                                 </div>
                                 </div>
                                <style>
                                .center{ text-align:center}
								.center .p{ line-height:30px}
                                </style>
       

</div></div>
<div class="footer">

		<div class="footer-inner">

			2015 (c) 锦尚中国源码论坛 版权所有

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>



	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->

	<script src="/Public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/Public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="/Public/media/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="/Public/media/js/excanvas.min.js"></script>
	<script src="/Public/media/js/respond.min.js"></script>  
	<![endif]-->   
    	<script src="/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="/Public/media/js/ckeditor.js"></script>  
	<script type="text/javascript" src="/Public/media/js/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="/Public/media/js/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/select2.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="/Public/media/js/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.toggle.buttons.js"></script>
	<script type="text/javascript" src="/Public/media/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="/Public/media/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="/Public/media/js/clockface.js"></script>
	<script type="text/javascript" src="/Public/media/js/date.js"></script>
	<script type="text/javascript" src="/Public/media/js/daterangepicker.js"></script> 
	<script type="text/javascript" src="/Public/media/js/bootstrap-colorpicker.js"></script>  
	<script type="text/javascript" src="/Public/media/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="/Public/media/js/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.multi-select.js"></script>   
	<script src="/Public/media/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="/Public/media/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
	<!-- END PAGE LEVEL PLUGINS -->
	<script src="/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="/Public/media/js/app.js"></script>      
    

<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
 
</body>

<!-- END BODY -->

</html>                                                
 <script type="text/javascript">
<!--
  function shenheApply(id,flag,obj){
	  var modalobj = $('#modal-preview');
		if(modalobj.length == 0) {
			$(document.body).append('<div id="modal-preview" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" style="position:absolute;top:40%;padding-top: 30px;"></div>');
			var modalobj = $('#modal-preview');
		}
		var title='审核申请模板案例';
		var status=$(obj).attr("applytemplate");
		if(flag=='promotion'){
			var title='审核申请推荐案例';
			var stauts=$(obj).attr("applypromotion");
		}
		var isselctOk=status==2? ' selected="selected" ' : '';
		var isselctNo=status<0? ' selected="selected" ' : '';
		
		html = ' <div class="modal-body center">'+
		  ' <p> <h3>'+title+'</h3> </p>'+
		   ' <p>  <select id="applystatus"> <option value="2" '+isselctOk+'>审核通过</option> <option value="-1" '+isselctNo+'>审核未通过</option></select> </p>'+
		     ' <p>  <a href="javascript:;" onclick="ajax_shenheApply('+id+')" class="btn blue " style="width:47%"> 提交</a>  </p>'+
		 ' </div>  <div class="modal-footer"><a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a></div>';
		modalobj.html(html);
		modalobj.css({'width' :  330, 'marginLeft' : 0 - 330 / 2});
		modalobj.css({'height' : 450});
		modalobj.on('hidden', function(){modalobj.remove();});
		return modalobj.modal({'show' : true});
	 }
	 function ajax_shenheApply(id){
		 $.post('/adminc.php?c=scene&a=shenheOk', { id:id,applystatus:$('#applystatus').val()},
		  function(data){
			   
			   if(data.status==1){
				   alert('审核已处理');
			      $('#modal-preview').remove();
				  parent.location.reload();
			   }
		},'json');
  }
	 
	function ajaxpreview(styleid) {
		var modalobj = $('#modal-preview');
		if(modalobj.length == 0) {
			$(document.body).append('<div id="modal-preview" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" style="position:absolute;top:40%;padding-top: 30px;background-image:url(/Public/media/image/bg/4.jpg);"></div>');
			var modalobj = $('#modal-preview');
		}
		html = '<iframe width="330px" scrolling="no" height="100%" frameborder="0" src="/v/'+styleid+'" id="preview" name="preview" style="width: 330px; overflow: visible; height: 700px; margin-left: 120px;"></iframe><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a></div>';
		modalobj.html(html);
		modalobj.css({'width' :  330, 'marginLeft' : 0 - 330 / 2});
		modalobj.css({'height' : 700});
		modalobj.on('hidden', function(){modalobj.remove();});
		return modalobj.modal({'show' : true});
	}
//-->
</script>  

<script type="text/javascript">
    $(document).ready(function(){
  $("#dtagid").change(function(){ 
//  var url = $("#text").val();
  var biztype = $("#dtagid").val();
  $("#tagid").empty();
   $.get("adminc.php?c=Scene&a=Type",{biztype:biztype}, function(data){
if(data != null){
   $("#tagid ").append(data);
    }else{$('#tagid').after();
        }
   });
    }); 
	});
</script>