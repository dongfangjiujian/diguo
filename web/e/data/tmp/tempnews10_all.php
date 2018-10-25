<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />

	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/skin/default/bootstrap/css/custom.css">

<script type="text/javascript" src="/skin/default/js/tabs.js"></script>

	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body><div class="nav-just">
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
            <div class="col-md-6">
<ol class="breadcrumb">
  <li><?=$grurl?></li>

</ol>
<div class="article">
    <h2 class="text-center"><?=$grpagetitle?></h2>
    <span class="text-left"><?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?>1111</span><span class="pull-right"><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?> </span>
<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
</div>
</div>

<div class="col-md-4"><? @sys_GetEcmsInfo(0,10,0,0,0,13);?></div>
</div>
</div>
</body>
</html>