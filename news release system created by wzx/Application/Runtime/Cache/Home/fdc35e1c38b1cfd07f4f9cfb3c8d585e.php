<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>欢迎浏览XX新闻</title>
	<link href="/news release sysstem created by wzx/Public/User/css/style.css" rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Discount Form Widget Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script src="/news release sysstem created by wzx/Public/User/js/jquery.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				</script>
</head>
<body>
	<h1>用户登录注册</h1>
	<div class="main-content">
		
        <div class="right-w3">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>登录</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>注册</span></li>
				    </ul>
				    <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
						<form action="<?php echo U('Home/User/login');?>" method="post">						
							<input placeholder="用户名" name="username"  type="text" required="">
							<input placeholder="密码" name="password" class="lock" type="password" required="">
							<input placeholder="输入验证码"   name="yzm" type="text" size="10">
                            <img src="<?php echo U('Home/User/yzm');?>" style="cursor:pointer;" onclick="this.src='<?=U('Home/User/yzm')?>';"alt="" width="200" height="40" />		
							<span class="checkbox1">
								<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>记住密码</label>
							</span>
							
							<input type="submit" name="login" value="登录用户"/>
						</form>
					 </div>		
		            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<form action="<?php echo U('Home/User/reg');?>" method="post">				
							<input placeholder="用户名" name="username" type="text" required="">
							<input placeholder="电子邮箱"name="email" type="text" required="">						
							<input placeholder="密码" name="password" type="password" required="">	
							<input placeholder="再次输入密码" name="repwd" type="password" required="">
                            <input placeholder="输入验证码"   name="yzm" type="text" size="10">
                            <img src="<?php echo U('Home/User/yzm');?>" style="cursor:pointer;" onclick="this.src='<?=U('Home/User/yzm')?>';"alt="" width="200" height="40" />
							<span class="checkbox1">
								<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>已同意相关条款</label>
							</span>

							<input type="submit" name="reg" value="完成注册"/>
						</form>
			        </div>
				</div> 
			</div> 			        					            	      
		</div>	
		<div class="left-agile">
			<div class="left-text">
				<h2>XX新闻</h2>
				<h3>smart news</h3>
				<h4>更懂你的新闻平台</h4>
			</div>
        </div>
		<div class="clear"></div>
	</div>
	<script src="/news release sysstem created by wzx/Public/User/js/easyResponsiveTabs.js" type="text/javascript"></script>
</body>
</html>