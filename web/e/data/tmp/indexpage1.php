<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap ʵ�� - ģ̬��Modal�����</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<!-- ҳͷ -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%"> 
<!-- ��¼ -->
<script>
document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
</script>
</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">�����ղ�</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">��Ϊ��ҳ</a> | <a href="/e/member/cp/">��Ա����</a> | <a href="/e/DoInfo/">��ҪͶ��</a> | <a href="/e/web/?type=rss2&classid=0" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table>
</td>
</tr>
</table>


<!-- ����tabѡ� -->

    	<div class="container">
	<ul class="nav nav-pills">
	<li  role="presentation" class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="/">��ҳ</a></li>
        <? @sys_ShowClassByTemp('0',12,1,0);?> </ul></td>

		
	</ul>
	
	</div>

<? @sys_GetEcmsInfo(1,10,10,0,13,2,0);?>
</div>
</body>
</html>