<?php if (!defined('THINK_PATH')) exit();?><head>
<meta charset="utf-8">
<meta name="description" content="xxxxx">
<meta name="author" content="xxxxx">
<meta name="keyword" content="xxxxx">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>新闻详情</title>
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
            <li><a href="<?php echo U('Home/User/logout');?>"><p value="<%=username%>" id="backli" onclick="back()"><span class="fa fa-power-off"></span> 退出登录</p></a></li>
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
          <h3 class="animated fadeInLeft">新闻详情</h3>
          <p class="animated fadeInDown"> 业务 <span class="fa-angle-right fa"></span> 查看新闻 </p>
        </div>
      </div>
    </div>
    <div class="form-element">
      <div class="col-md-12 padding-0">
        <div class="col-md-12">
          <div class="panel form-element-padding">
            <div class="panel-heading" style="text-align: center;">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><h3>新闻标题：<?php echo ($vol["news_title"]); ?></h3>
                <p>作者：<?php echo ($vol["news_auth"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;发表日期：<?php echo ($vol["news_time"]); ?></p>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
              <div class="panel-body-main">
                  <?php echo ($vol["news_content"]); ?>
                  <img src="/news release sysstem created by wzx/Application/Uploads/<?php echo ($vol["news_smlimg"]); ?>">
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end: content --> 
  
</div>
<style>
    .panel-body-main{
        width: 60%;
        height: 100%;
        margin-left: 20%;
        /*background-color: red;*/
    }
</style>
<!-- start: Javascript --> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/jquery.min.js"></script> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/jquery.ui.min.js"></script> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/bootstrap.min.js"></script> 
<!-- plugins --> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/plugins/jquery.nicescroll.js"></script> 
<!-- custom --> 
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/main.js"></script>
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/moment.js"></script>
<script src="/news release sysstem created by wzx/Public/Admin/js/Confim.js"></script>
<!-- end: Javascript -->
<script>
$("#left-menu-2").click() ;
</script>
</body>
</html>