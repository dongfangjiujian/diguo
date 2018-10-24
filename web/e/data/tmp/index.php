<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>帝国网站管理系统 - Powered by EmpireCMS</title>
<meta name="keywords" content="帝国网站管理系统,EmpireCMS" />
<meta name="description" content="　　帝国软件是一家专注于网络软件开发的科技公司，其主营产品“帝国网站管理系统(EmpireCMS)”是目前国内应用超高广泛的CMS程序。通过十多年的不断创新与完善，使系统集安全、稳定、强大、灵活于一身。目前EmpireCMS程序已经广泛应用在国内上百万家网站，覆盖国内数千万上网人群，并经过上千家知名网站的严格检测，被称为国内超高安全、超高稳定的开源CMS系统。" />

	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/skin/default/bootstrap/css/custom.css">

<script type="text/javascript" src="/skin/default/js/tabs.js"></script>

	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="nav-just">
<nav class="nav navbar-default" role="navigation">
	<div class="container"> 
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#example-navbar-collapse">
			<span class="sr-only">切换导航</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">香水百合</a>
	</div>
	<div class="collapse navbar-collapse" id="example-navbar-collapse">
		<ul class="nav navbar-nav">
			
			  <? @sys_ShowClassByTemp('0',12,1,0);?>
			
		</ul>
	</div>
	</div>
</nav>
</div>
<div class="container">
<div class="row">
            <div class="col-md-7"><div class="flash_pic"><? @sys_FlashPixpic( 0,5,640,480,1,0,3,3);?></div><? @sys_GetEcmsInfo(34,20,0,1,1,14,0);?></div>
            <div class="col-md-5"><? @sys_GetEcmsInfo(0,10,0,1,4,13,0);?>

</div>

        </div>
</div>
</body>
</html>