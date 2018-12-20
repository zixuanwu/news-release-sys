<?php if (!defined('THINK_PATH')) exit();?><head>
<meta charset="utf-8">
<meta name="description" content="xxxxx">
<meta name="author" content="xxxxx">
<meta name="keyword" content="xxxxx">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>用户编辑</title>
<!-- start: Css -->
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/bootstrap.min.css">
<!-- plugins -->
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/simple-line-icons.css"/>
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/animate.min.css"/>
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/fullcalendar.min.css"/>
<link href="/news release sysstem created by wzx/Public/Admin/asset/css/style.css" rel="stylesheet">

</head>

<body id="mimin" class="dashboard">
<!-- start: Header -->
<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open"> <span class="top"></span> <span class="middle"></span> <span class="bottom"></span> </div>
      <a href="<?php echo U('Admin/News/index');?>" class="navbar-brand"> <b>返回首页</b> </a>
      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="user-name"><span><?php if (S('username')!=''){echo (S('username'));} else {echo('unknow');} ?></span></li>
        <li class="dropdown avatar-dropdown"> <img src="/news release sysstem created by wzx/Public/Admin/asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
          <ul class="dropdown-menu user-dropdown">
            <li><a href="#"><p value="<%=username%>" id="backli" onclick="back()"><span class="fa fa-power-off"></span> 退出登录</p></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end: Header -->
  <div id="left-menu">
    <div class="sub-left-menu scroll">
      <ul class="nav nav-list">
        <li>
          <div class="left-bg"></div>
        </li>
        <span class="fa-home fa"></span><a href="<?php echo U('Admin/News/index');?>">首页</a>
        <li> 
          <a class="tree-toggle nav-header">
          <span class="fa-diamond fa"></span> 用户管理
           <span class="fa-angle-right fa right-arrow text-right"></span> 
          </a> 
          <ul class="nav nav-list tree">
            <li><a href="<?php echo U('Admin/News/userlist');?>">用户列表</a></li>
            <li><a href="<?php echo U('Admin/News/useredit');?>">信息编辑</a></li>
          </ul>
        </li>
        <li class=" ripple"> 
          <a class="tree-toggle nav-header"  id="left-menu-3">
          <span class="fa fa-check-square-o"></span> 新闻管理 
            <span class="fa-angle-right fa right-arrow text-right"></span> 
          </a> 
        <ul class="nav nav-list tree">
            <li><a href="<?php echo U('Admin/News/newslist');?>">新闻列表</a></li>
            <li><a href="<?php echo U('Admin/News/newsitem');?>">新闻详情</a></li>
            <li><a href="<?php echo U('Admin/News/newsupload');?>">发表新闻</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>

  <div id="content">
    <div class="panel">
      <div class="panel-body">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">编辑页面</h3>
          <p class="animated fadeInDown"> 业务 <span class="fa-angle-right fa"></span> 编辑页面 </p>
        </div>
      </div>
    </div>
      <form action="{U:('Admin/News/useredit')}" method="post">
    <div class="form-element">
      <div class="col-md-12 padding-0">
        <div class="col-md-12">
          <div class="panel form-element-padding">
            <div class="panel-heading">
              <h4>基本表单</h4>
            </div>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right" style="display: none;">用户名</label>
                  <div class="col-sm-3">
                    <input id="button1" type="text" class="form-control" style="display: none;">
                  </div>
                  <label class="col-sm-1 control-label text-right" >用户名</label>
                  <div class="col-sm-3">
                    <input id="button2" type="text" name="username" class="form-control" value="<?php echo ($vol["username"]); ?>">
                  </div>
                </div>                
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right" style="display: none;">用户名</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" style="display: none;">
                  </div>
                  <label class="col-sm-1 control-label text-right">密码</label>
                  <div class="col-sm-3">
                    <input id="button3" type="text" name="userpwd" class="form-control" value="<?php echo ($vol["password"]); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label text-right" style="display: none;">用户名</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" style="display: none;">
                  </div>
                  <label class="col-sm-1 control-label text-right">身份权限</label>
                  <div class="col-sm-3">
                    <input id="button5" type="text" name="userlevel" class="form-control" value="<?php echo ($vol["root"]); ?>">
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="col-md-12 text-center" style="margin:20px; margin-left: -70px;">
              <input class="submit btn btn-danger" type="button" value="修改" onclick="edit()">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="submit btn btn-danger" type="button" value="删除" onclick="del()">
          </div>
        </div>
      </div>
    </div>
      </form>
  </div>
  <!-- end: content --> 
  
</div>

<!-- start: Javascript --> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/jquery.min.js"></script> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/jquery.ui.min.js"></script> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/bootstrap.min.js"></script> 
<!-- plugins --> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/plugins/jquery.nicescroll.js"></script> 
<!-- custom --> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/main.js"></script>
<script src="/news release sysstem created by wzx/Public/Admin/js/login.js"></script>
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/moment.js"></script>
<script src="/news release sysstem created by wzx/Public/Admin/js/Confim.js"></script>
<!-- end: Javascript -->
<script>
$("#left-menu-2").click() ;
</script>
<script src="js/Confim.js"></script>
</body>
</html>