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
<body class="showpage">
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
					<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
						<tr>
							<td width="16%"><div align="center">[ӰƬ����]</div></td>
							<td width="45%"><strong><?=$ecms_gr[title]?></strong></td>
							<td width="39%" rowspan="10" align="center" valign="top" bgcolor="#F4F9FD" class="photo"><a href="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" title="�鿴ԭͼ" target="_blank"><img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" width="205" height="278" border="0" align="top" /></a></td>
						</tr>
						<tr>
							<td bgcolor="#F4F9FD"><div align="center">[��������]</div></td>
							<td bgcolor="#F4F9FD"><?=$ecms_gr[player]?></td>
						</tr>
						<tr>
							<td><div align="center">[ӰƬ����]</div></td>
							<td><?=$ecms_gr[movietype]?></td>
						</tr>
						<tr>
							<td bgcolor="#F4F9FD"><div align="center">[����Ҫ��]</div></td>
							<td bgcolor="#F4F9FD"><?=$ecms_gr[playdk]?></td>
						</tr>
						<tr>
							<td><div align="center">
									<p>[ӰƬ����]</p>
							</div></td>
							<td><?=$ecms_gr[playtime]?></td>
						</tr>
						<tr>
							<td bgcolor="#F4F9FD"><div align="center">[�ļ���С]</div></td>
							<td bgcolor="#F4F9FD"><?=$ecms_gr[filesize]?></td>
						</tr>
						<tr>
							<td><div align="center">[�Ƽ�����]</div></td>
							<td><img src="/e/data/images/<?=$ecms_gr[star]?>star.gif" border="0" /></td>
						</tr>
						<tr>
							<td bgcolor="#F4F9FD"><div align="center">[�ϴ�ʱ��]</div></td>
							<td bgcolor="#F4F9FD"><?=$ecms_gr[movietime]?></td>
						</tr>
						<tr>
							<td><div align="center">[���ش���]</div></td>
							<td><script src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>&amp;down=1"></script></td>
						</tr>
						<tr>
							<td bgcolor="#F4F9FD"><div align="center">[�ļ���ʽ]</div></td>
							<td bgcolor="#F4F9FD"><?=$ecms_gr[filetype]?></td>
						</tr>
						<tr>
							<td><div align="center">[���߹ۿ�]</div></td>
							<td colspan="2"><?=ReturnOnlinepathHtml($ecms_gr)?></td>
						</tr>
						<tr>
							<td bgcolor="#F4F9FD"><div align="center">[����ӰƬ]</div></td>
							<td colspan="2" bgcolor="#F4F9FD"><?=ReturnDownSoftHtml($ecms_gr)?></td>
						</tr>
						<tr>
							<td><div align="center">[���ذ���]</div></td>
							<td colspan="2"><img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">��������</a> <img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">�����ղؼ�</a> <img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/public/report/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">���󱨸�</a></td>
						</tr>
						<tr>
							<td bgcolor="#F4F9FD"><div align="center">[ӰƬ����]</div></td>
							<td colspan="2" bgcolor="#F4F9FD">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="4" style="table-layout:  fixed;  word-wrap:  break-word">
									<tr>
										<td><?=nl2br($ecms_gr[moviesay])?></td>
									</tr>
							</table></td>
						</tr>
					</table></td>
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
					<td><strong>Ӱ���Ƽ�</strong></td>
				</tr>
			</table>
				<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
					<tr>
						<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?> </td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
					<tr>
						<td><strong>������</strong></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
					<tr>
						<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script></ul></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
					<tr>
						<td><strong>���ŵ��</strong></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
					<tr>
						<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
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