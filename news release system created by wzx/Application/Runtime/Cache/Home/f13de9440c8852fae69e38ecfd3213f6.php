<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>添加一则新闻</h1>
<form enctype="multipart/form-data" method="POST" action="<?php echo U('Home/Add/add');?>">
<div>
         新闻标题：
    <input size="60" type="text" name="title"/>
</div>
<div>
          新闻类别:
    <select name="type">
    <option value = "要闻">要闻</option>
    <option value = "体育">体育</option>
    <option value = "娱乐">娱乐</option>
    <option value = "科技">科技</option>
    </select>
</div>
<div>
           新闻内容：
    <textarea rows="10" cols="60" name="content"></textarea>
</div>
<div>
         图片：
<input type="file" name="image"/>
</div>
<div>
           验证码：
    <input type="text" class="" name="yzm" size="10">
    <img src="<?php echo U('Home/User/yzm');?>" style="cursor:pointer;" onclick="this.src='<?=U('Home/User/yzm')?>';"alt="" width="200" height="40" />
</div>
<div>
     <input type="submit" name="添加">
     <input type="reset" name="重填">
</div>
</form>
</body>
</html>