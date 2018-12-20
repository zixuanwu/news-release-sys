<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action="<?php echo U('Home/user/reg');?>" method="POST" name="formUser" >
<div>用户名：
<input type="text"  name="username" size="15">        
</div>
<div>电子邮箱：
<input type="text" name="email" size="20">
</div>
<div>
&nbsp&nbsp&nbsp密码:
<input type="password" name="password" size="15">
</div>
<div>
&nbsp&nbsp&nbsp再次输入密码:
<input type="password" name="repwd" size="15">
</div>
<div> 请输入验证码:
<input type="text"  name="yzm" size="10">
<img src="<?php echo U('Home/User/yzm');?>" style="cursor:pointer;" onclick="this.src='<?=U('Home/User/yzm')?>';"alt="" width="200" height="40" />
</div>
<div>
<input type="submit" value="注册" name="reg">
</div>
<div>
<a href="<?php echo U('Home/User/login');?>">返回登录</a>
</div>    
</form>  
</body>
</html>