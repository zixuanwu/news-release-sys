<?php if (!defined('THINK_PATH')) exit();?><head>
<meta charset="utf-8">
<meta name="description" content="xxxxx">
<meta name="author" content="xxxxx">
<meta name="keyword" content="xxxxx">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>新闻列表</title>
<!-- start: Css -->
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/bootstrap.min.css">
<!-- plugins -->
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/simple-line-icons.css"/>
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/animate.min.css"/>
<link rel="stylesheet" type="text/css" href="/news release sysstem created by wzx/Public/Admin/asset/css/plugins/fullcalendar.min.css"/>
<link href="/news release sysstem created by wzx/Public/Admin/asset/css/style.css" rel="stylesheet">
<!-- end: Css -->

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
<div class="container-fluid mimin-wrapper"> 
  <!-- start:Left Menu -->
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

  <!-- end: Left Menu --> 
  
  <!-- start: content -->
  <div id="content">
    <div class="panel">
      <div class="panel-body">
        <div class="col-md-12">
          <h3 class="animated fadeInLeft">新闻列表</h3>
          <p class="animated fadeInDown"> 业务 <span class="fa-angle-right fa"></span> 新闻列表 </p>
        </div>
      </div>
    </div>
    <div class="col-md-12 padding-0 form-element">
      <div class="col-md-12">
       <div class="panel form-element-padding">
            
        <div class="panel">
          <div class="panel-heading">
            <h3>列表名称</h3>
          </div>
          <div class="panel-body">
            <div class="responsive-table">
              <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0"  style="width: 100%;">
                      <thead>
                        <tr role="row">
                            <th class="sorting_asc" style="width: 60px;">标题</th>
                            <th class="sorting" style="width: 60px;">作者</th>
                            <th class="sorting" style="width: 60px;">发表时间</th>
                            <th class="sorting" style="width: 60px;">新闻类型</th>
                            <th class="sorting" style="width: 60px;">阅览数</th>
                            <th class="sorting"  style="width: 61px;">点击查看</th>
                            <th class="sorting"  style="width: 61px;">点击删除</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($data as $v):?>
                      <tr role="row" class="odd">
                          <td><?=$v['news_title']?></td>
                          <td><?=$v['news_auth']?></td>
                          <td><?=$v['news_time']?></td>
                          <td><?=$v['news_type']?></td>
                          <td><?=$v['news_click']?></td>
                          <td><a href="<?php echo U('Admin/News/newsitem',array('newsid'=>$v['news_id']));?>">查看</a></td>                   
                          <td><a onclick="return confirm('确定要删除吗?');"href="<?php echo U('Admin/News/delnews',array('newsid'=>$v['news_id']));?>">删除</a>
                      </tr>
                      <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
<script src="/news release sysstem created by wzx/Public/Admin/asset/js/moment.js"></script>
<script src="/news release sysstem created by wzx/Public/Admin/js/Confim.js"></script>
<!-- end: Javascript -->
<script>
$("#left-menu-2").click() ;
</script>
</body>
</html>