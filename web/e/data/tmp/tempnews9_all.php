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
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="showpage info">
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
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">�����ղ�</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">��Ϊ��ҳ</a> | <a href="/e/member/cp/">��Ա����</a> | <a href="/e/DoInfo/">��ҪͶ��</a> | <a href="/e/web/?type=rss2&classid=<?=$ecms_gr[classid]?>" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="/"><img src="/skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="/skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- ����tabѡ� -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global"><ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="/">��ҳ</a></li>
        <? @sys_ShowClassByTemp('0',12,1,0);?> </ul></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>����ǰ��λ�ã�<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title_info">
							<tr>
								<td colspan="2"><h1><?=$ecms_gr[title]?></h1></td>
							</tr>
							<tr>
								<td class="info_text">���ڵ�����<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&amp;ph=1&amp;myarea=<?=$ecms_gr[myarea]?>"><?=$ecms_gr[myarea]?></a>&nbsp;&nbsp;</td>
								<td align="right" class="info_text">ʱ�䣺<?=date('Y��m��d�� H:i:s',$ecms_gr[newstime])?>&nbsp;&nbsp;��<a 
href="/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">�����ղؼ�</a>����<a href="/e/public/report/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">�ٱ�</a>����<a href="javascript:window.close()">�ر�</a>��</td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td id="text"><p><a href="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" title="����鿴ԭͼ" target="_blank"><img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" hspace="6" border="0" align="left" /></a><?=nl2br($ecms_gr[smalltext])?></p></td>
							</tr>
						</table>
						<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
							<tr>
								<td bgcolor="#F4F9FD">&nbsp;&nbsp;<strong>��ϵ��ʽ</strong></td>
							</tr>
						</table>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#F4F9FD">
							<tr>
								<td width="13%" bgcolor="#FFFFFF"><div align="right">�� �� �ߣ�</div></td>
								
                <td width="88%" bgcolor="#FFFFFF"><?=$ecms_gr[ismember]==1&&$ecms_gr[userid]?'<a href="'.$public_r[newsurl].'e/space/?userid='.$ecms_gr[userid].'" target=_blank>'.$ecms_gr[username].'</a>':$ecms_gr[username]?>&nbsp;(<a href="/e/member/msg/AddMsg/?enews=AddMsg&amp;re=1&amp;username=<?=$ecms_gr[username]?>" target="_blank">����վ����Ϣ</a>)</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><div align="right">��ϵ���䣺</div></td>
								<td bgcolor="#FFFFFF"><a href="mailto:<?=$ecms_gr[email]?>"><?=$ecms_gr[email]?></a></td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><div align="right">��ϵ��ʽ��</div></td>
								<td bgcolor="#FFFFFF"><?=$ecms_gr[mycontact]?></td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><div align="right">��ϵ��ַ��</div></td>
								<td bgcolor="#FFFFFF"><?=$ecms_gr[address]?></td>
							</tr>
						</table>
						<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td bgcolor="#F8F8F8">&nbsp;&nbsp;<strong>�Ƽ�������</strong></td>
							</tr>
							<tr>
								<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td width="2%">&nbsp;</td>
											<td><script>
function sendtof(url)
{
window.clipboardData.setData('Text',url);
alert('���Ƶ�ַ�ɹ���ճ���������һ�������');
}
  			</script>
												<input name="textfield" type="text" value="http://����<?=$grtitleurl?>" size="60" onclick="sendtof(this.value);" /></td>
										</tr>
									</table></td>
							</tr>
						</table>
						
          </td>
				</tr>
			</table>
			<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("��ûʲô��Ҫ˵��");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>��������</strong></td>
<td align="right"><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">����<span><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>������</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">�û���:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">����:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">��֤��:
<input name="key" type="text" class="inputText" size="10" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="�������,���ˢ��" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
��������</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form></td>
		<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr>
					<td><strong>��������</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	<tr>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=������">������</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=������">������</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=ͨ����">ͨ����</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=������">������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=������">������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=������">������</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" /><a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=������">&nbsp;������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=������">������</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=��ƽ��">��ƽ��</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=��̨��">��̨��</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=ʯ��ɽ��">ʯ��ɽ��</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=<?=$ecms_gr[classid]?>&ph=1&myarea=����">����</a></td>
	</tr>
</table></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>���ർ��</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor="#EEF1F4">&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=10"><strong>������Ϣ</strong></a></td>
  </tr> 
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=11">��������</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=12">���ݳ���</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=15">�칫�÷�</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=13">������</a></td>
    <td><a href="/e/action/ListInfo/?classid=14">���ݳ���</a></td>
  		<td><a href="/e/action/ListInfo/?classid=16">��������</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=17"><strong>�����г�</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=18">�������</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=19">��������</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=21">�Ӽ���Ʒ</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=20">ͨѶ��Ʒ</a></td>
    <td><a href="/e/action/ListInfo/?classid=21"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=22"><strong>ͬ������</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=23">��������</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=24">�������</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=26">�����ʾ</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=25">���λ</a></td>
    <td>&nbsp;</td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=27"><strong>��ְ��Ƹ</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=28">���̼���</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=29">������</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=31">��Ӫ����</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=30">������ҵ</a></td>
    <td><a href="/e/action/ListInfo/?classid=31"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>�Ƽ���Ϣ</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
							<script src='/d/js/class/class<?=$ecms_gr[classid]?>_goodnews.js'></script>
						</ul></td>
				</tr>
			</table></td>
	</tr>
</table>
<!-- ҳ�� -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" class="search">
<form action="/e/search/index.php" method="post" name="searchform" id="searchform">
<table border="0" cellspacing="6" cellpadding="0">
<tr>
<td><strong>վ��������</strong>
<input name="keyboard" type="text" size="32" id="keyboard" class="inputText" />
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<select name="tbname">
<option value="news">����</option>
<option value="download">����</option>
<option value="photo">ͼ��</option>
<option value="flash">FLASH</option>
<option value="movie">��Ӱ</option>
<option value="shop">��Ʒ</option>
<option value="article">����</option>
<option value="info">������Ϣ</option>
</select>
</td>
<td><input type="image" class="inputSub" src="/skin/default/images/search.gif" />
</td>
<td><a href="/search/" target="_blank">�߼�����</a></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<td>
	<table width="100%" border="0" cellpadding="0" cellspacing="4" class="copyright">
        <tr> 
          <td align="center"><a href="/">��վ��ҳ</a> | <a href="#">��������</a> 
            | <a href="#">��������</a> | <a href="#">������</a> | <a href="#">��ϵ����</a> 
            | <a href="#">��վ��ͼ</a> | <a href="#">��������</a> | <a href="/e/wap/" target="_blank">WAP</a></td>
        </tr>
        <tr> 
          <td align="center">Powered by <strong><a href="http://www.phome.net" target="_blank">EmpireCMS</a></strong> 
            <strong><font color="#FF9900">7.5</font></strong>&nbsp; &copy; 2002-2018 
            <a href="http://www.digod.com" target="_blank">EmpireSoft Inc.</a></td>
        </tr>
	</table>
</td>
</tr>
</table> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>