<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />

	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="[!--news.url--]skin/default/bootstrap/css/custom.css">

<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>

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
			<span class="sr-only">�л�����</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="[!--news.url--]">��ˮ�ٺ�</a>
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
            <div class="col-md-5"><? @sys_GetEcmsInfo(0,10,0,0,0,13);?>
</div>

</div>
</div>



</body>
</html>