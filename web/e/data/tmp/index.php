<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�۹���վ����ϵͳ - Powered by EmpireCMS</title>
<meta name="keywords" content="�۹���վ����ϵͳ,EmpireCMS" />
<meta name="description" content="�����۹������һ��רע��������������ĿƼ���˾������Ӫ��Ʒ���۹���վ����ϵͳ(EmpireCMS)����Ŀǰ����Ӧ�ó��߹㷺��CMS����ͨ��ʮ����Ĳ��ϴ��������ƣ�ʹϵͳ����ȫ���ȶ���ǿ�������һ��ĿǰEmpireCMS�����Ѿ��㷺Ӧ���ڹ����ϰ������վ�����ǹ�����ǧ��������Ⱥ����������ǧ��֪����վ���ϸ��⣬����Ϊ���ڳ��߰�ȫ�������ȶ��Ŀ�ԴCMSϵͳ��" />

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
			<span class="sr-only">�л�����</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">��ˮ�ٺ�</a>
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