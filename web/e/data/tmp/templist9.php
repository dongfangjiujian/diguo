<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

	<title>Bootstrap 实例 - 模态框（Modal）插件</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#example-navbar-collapse">
			<span class="sr-only">切换导航</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">香水百合</a>
	</div>
	<div class="collapse navbar-collapse" id="example-navbar-collapse">
		<ul class="nav navbar-nav">
			
			  <? @sys_ShowClassByTemp('0',12,1,0);?>
			
		</ul>
	</div>
	</div>
</nav>
<div>
</div>
<div class="row">
            <div class="col-md-7">
<ol class="breadcrumb">
  <li>[!--newsnav--]</li>

</ol>
[!--empirenews.listtemp--]
        <div class="list-group">
<!--list.var1-->
<!--list.var2-->	
									
</div>
[!--empirenews.listtemp--]<div>

  
 [!--show.page--]

</div>
</div>
            <div class="col-md-5"></div>

</div>
</div>



</body>
</html>