<?php
//�޸����԰�ģ��
function EditGbooktemp($temptext,$userid,$username){
	global $empire,$public_r,$dbtbpre;
	if(!$temptext)
	{printerror("EmptyTemptext","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$temptext=RepPhpAspJspcode($temptext);
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set gbooktemp='".eaddslashes2($temptext)."' limit 1");
	//����ģ��
	AddEBakTemp('pubgbooktemp',$gid,1,'',$temptext,0,0,'',0,0,'',0,0,0,$userid,$username);
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		ReGbooktemp();
	}
	if($sql)
	{
		//������־
		insert_dolog("gid=$gid");
		printerror("EditGbooktempSuccess","template/EditPublicTemp.php?tname=gbooktemp&gid=$gid".hReturnEcmsHashStrHref2(0)."#gbooktemp");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸Ŀ������ģ��
function EditCptemp($temptext,$userid,$username){
	global $empire,$public_r,$dbtbpre;
	if(!$temptext)
	{printerror("EmptyTemptext","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$temptext=RepPhpAspJspcode($temptext);
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set cptemp='".eaddslashes2($temptext)."' limit 1");
	//����ģ��
	AddEBakTemp('pubcptemp',$gid,1,'',$temptext,0,0,'',0,0,'',0,0,0,$userid,$username);
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		ReCptemp();
	}
	if($sql)
	{
		//������־
		insert_dolog("gid=$gid");
		printerror("EditCptempSuccess","template/EditPublicTemp.php?tname=cptemp&gid=$gid".hReturnEcmsHashStrHref2(0)."#cptemp");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸ĵ�½״̬ģ��
function EditLoginIframe($temptext,$userid,$username){
	global $empire,$public_r,$dbtbpre;
	if(!$temptext)
	{printerror("EmptyTemptext","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$temptext=RepPhpAspJspcode($temptext);
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set loginiframe='".eaddslashes2($temptext)."' limit 1");
	//����ģ��
	AddEBakTemp('publoginiframe',$gid,1,'',$temptext,0,0,'',0,0,'',0,0,0,$userid,$username);
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		ReLoginIframe();
	}
	if($sql)
	{
		//������־
		insert_dolog("gid=$gid");
		printerror("EditLoginIframeSuccess","template/EditPublicTemp.php?tname=loginiframe&gid=$gid".hReturnEcmsHashStrHref2(0)."#loginiframe");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸�JS���õ�½״̬ģ��
function EditLoginJstemp($temptext,$userid,$username){
	global $empire,$public_r,$dbtbpre;
	if(!$temptext)
	{printerror("EmptyTemptext","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$temptext=RepPhpAspJspcode($temptext);
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set loginjstemp='".eaddslashes2($temptext)."' limit 1");
	//����ģ��
	AddEBakTemp('publoginjstemp',$gid,1,'',$temptext,0,0,'',0,0,'',0,0,0,$userid,$username);
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		ReLoginIframe();
	}
	if($sql)
	{
		//������־
		insert_dolog("gid=$gid");
		printerror("EditLoginJstempSuccess","template/EditPublicTemp.php?tname=loginjstemp&gid=$gid".hReturnEcmsHashStrHref2(0)."#loginjstemp");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸�ȫվ����ģ��
function EditSchallTemp($temptext,$sub,$formatdate,$userid,$username){
	global $empire,$public_r,$dbtbpre;
	if(!$temptext)
	{printerror("EmptyTemptext","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$temptext=RepPhpAspJspcode($temptext);
	$gid=(int)$_POST['gid'];
	$sub=(int)$sub;
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set schalltemp='".eaddslashes2($temptext)."',schallsubnum='$sub',schalldate='".eaddslashes($formatdate)."' limit 1");
	//����ģ��
	AddEBakTemp('pubschalltemp',$gid,1,'',$temptext,$sub,0,'',0,0,$formatdate,0,0,0,$userid,$username);
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		ReSchAlltemp();
	}
	if($sql)
	{
		//������־
		insert_dolog("gid=$gid");
		printerror("EditSchallTempSuccess","template/EditPublicTemp.php?tname=schalltemp&gid=$gid".hReturnEcmsHashStrHref2(0)."#schalltemp");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//���ӱ�ǩ
function AddBq($add,$bqsay,$userid,$username){
	global $empire,$dbtbpre;
	if(!$add[bqname]||!$add[funname]||!$add[bq])
	{printerror("EmptyBqname","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"bq");
	//��ǩ�ظ�
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsbq where bq='$add[bq]' limit 1");
	if($num)
	{printerror("ReBq","history.go(-1)");}
	//�����Ƿ����
	if(!function_exists($add[funname]))
	{
		printerror("NotFun","history.go(-1)");
    }
	$classid=(int)$add['classid'];
	$add[isclose]=(int)$add[isclose];
	$myorder=(int)$add[myorder];
	$bqsay=RepPhpAspJspcodeText($bqsay);
	$sql=$empire->query("insert into {$dbtbpre}enewsbq(bqname,bqsay,funname,bq,issys,bqgs,isclose,classid,myorder) values('".$add[bqname]."','".eaddslashes2($bqsay)."','$add[funname]','$add[bq]',0,'".eaddslashes2($add[bqgs])."',$add[isclose],$classid,'$myorder');");
	$bqid=$empire->lastid();
	if($sql)
	{
		//������־
		insert_dolog("bqid=".$bqid."<br>bqname=".$add[bqname]);
		printerror("AddBqSuccess","template/AddBq.php?enews=AddBq".hReturnEcmsHashStrHref2(0));
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸ı�ǩ
function EditBq($add,$bqsay,$userid,$username){
	global $empire,$dbtbpre;
	$add[bqid]=(int)$add[bqid];
	if(!$add[bqname]||!$add[funname]||!$add[bq]||!$add[bqid])
	{printerror("EmptyBqname","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"bq");
	//��ǩ�ظ�
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsbq where bq='$add[bq]' and bqid<>'$add[bqid]' limit 1");
	if($num)
	{printerror("ReBq","history.go(-1)");}
	//�����Ƿ����
	if(!function_exists($add[funname]))
	{
		printerror("NotFun","history.go(-1)");
    }
	$bqsay=RepPhpAspJspcodeText($bqsay);
	$classid=(int)$add['classid'];
	$add[isclose]=(int)$add[isclose];
	$myorder=(int)$add[myorder];
	$sql=$empire->query("update {$dbtbpre}enewsbq set bqname='$add[bqname]',bqsay='".eaddslashes2($bqsay)."',funname='$add[funname]',bq='$add[bq]',bqgs='".eaddslashes2($add[bqgs])."',isclose=$add[isclose],classid=$classid,myorder='$myorder' where bqid='$add[bqid]'");
	if($sql)
	{
		//������־
	    insert_dolog("bqid=".$add[bqid]."<br>bqname=".$add[bqname]);
		printerror("EditBqSuccess","template/ListBq.php?classid=$add[cid]".hReturnEcmsHashStrHref2(0));
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//ɾ����ǩ
function DelBq($bqid,$cid,$userid,$username){
	global $empire,$dbtbpre;
	$bqid=(int)$bqid;
	if(empty($bqid))
	{printerror("NotDelBqid","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"bq");
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsbq where bqid='$bqid' and issys=0");
	if(empty($num))
	{printerror("NotDelSysBq","history.go(-1)");}
	$r=$empire->fetch1("select bqname from {$dbtbpre}enewsbq where bqid='$bqid'");
	$sql=$empire->query("delete from {$dbtbpre}enewsbq where bqid='$bqid'");
	if($sql)
	{
		//������־
	    insert_dolog("bqid=".$bqid."<br>bqname=".$r[bqname]);
		printerror("DelBqSuccess","template/ListBq.php?classid=$cid".hReturnEcmsHashStrHref2(0));
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸�����ҳ��
function EditSearchTemp($tempname,$temptext,$userid,$username){
	global $empire,$dbtbpre,$public_r;
	if(empty($temptext)||empty($tempname))
	{printerror("EmptySearchTemp","history.go(-1)");}
	//����Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$temptext=RepPhpAspJspcode($temptext);
	$tempname=RepPostVar($tempname);
	if($tempname=="searchtemp")//��������ģ��
	{
		$f="searchtemp";
		$tname="searchformtemp";
		$temptype='pubsearchtemp';
	}
	elseif($tempname=="searchjstemp")//����JSģ�壨����)
	{
		$temptext=str_replace("\r\n","",$temptext);
		$f="searchjstemp";
		$tname="searchformjs";
		$temptype='pubsearchjstemp';
	}
	else//����JSģ�壨����)
	{
		$temptext=str_replace("\r\n","",$temptext);
		$f="searchjstemp1";
		$tname="searchformjs1";
		$temptype='pubsearchjstemp1';
    }
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set ".$f."='".eaddslashes2($temptext)."'");
	//����ģ��
	AddEBakTemp($temptype,$gid,1,'',$temptext,0,0,'',0,0,'',0,0,0,$userid,$username);
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		GetSearch();
	}
	if($sql)
	{
		//������־
		insert_dolog("temp=$f&gid=$gid");
		printerror("EditSearchTempSuccess","template/EditPublicTemp.php?tname=$tname&gid=$gid".hReturnEcmsHashStrHref2(0)."#$tempname");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸��������ģ��
function EditOtherLinkTemp($tempname,$temptext,$userid,$username){
	global $empire,$dbtbpre;
	if(empty($temptext)||empty($tempname))
	{printerror("EmptyOtherLinkTemp","history.go(-1)");}
	//����Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$tempname=RepPostVar($tempname);
	$temptext=RepPhpAspJspcode($temptext);
	$f="otherlinktemp";
	$tname="otherlinktemp";
	$otherlinktempsub=(int)$_POST['otherlinktempsub'];
	$otherlinktempdate=$_POST['otherlinktempdate'];
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set ".$f."='".eaddslashes2($temptext)."',otherlinktempsub=$otherlinktempsub,otherlinktempdate='".eaddslashes($otherlinktempdate)."'");
	//����ģ��
	AddEBakTemp('pubotherlinktemp',$gid,1,'',$temptext,0,0,'',0,0,$otherlinktempdate,$otherlinktempsub,0,0,$userid,$username);
	if($sql)
	{
		//������־
		insert_dolog("temp=$f&gid=$gid");
		printerror("EditOtherLinkTempSuccess","template/EditPublicTemp.php?tname=$tname&gid=$gid".hReturnEcmsHashStrHref2(0)."#$tempname");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸���������ģ��
function EditOtherPubTemp($tempname,$temptext,$userid,$username){
	global $empire,$dbtbpre,$public_r;
	if(empty($temptext)||empty($tempname))
	{printerror("EmptyEditDownTemp","history.go(-1)");}
	//����Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$edittemplist=',pljstemp,downpagetemp,downsofttemp,onlinemovietemp,listpagetemp,';
	$temptext=RepPhpAspJspcode($temptext);
	$tempname=RepPostVar($tempname);
	if(!strstr($edittemplist,','.$tempname.','))
	{
		printerror("EmptyEditDownTemp","history.go(-1)");
	}
	if($tempname=='downsofttemp')
	{
		$temptype='pubdownsofttemp';
	}
	elseif($tempname=='onlinemovietemp')
	{
		$temptype='pubonlinemovietemp';
	}
	elseif($tempname=='listpagetemp')
	{
		$temptype='publistpagetemp';
	}
	elseif($tempname=='pljstemp')
	{
		$temptype='pubpljstemp';
	}
	elseif($tempname=='downpagetemp')
	{
		$temptype='pubdownpagetemp';
	}
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set ".$tempname."='".eaddslashes2($temptext)."'");
	//����ģ��
	AddEBakTemp($temptype,$gid,1,'',$temptext,0,0,'',0,0,'',0,0,0,$userid,$username);
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		if($tempname=="downsofttemp"||$tempname=="onlinemovietemp"||$tempname=="listpagetemp")
		{
			GetConfig();
		}
		elseif($tempname=="downpagetemp")
		{
			GetDownloadPage();
		}
		elseif($tempname=="pljstemp")
		{
			GetPlJsPage();
		}
		else
		{
		}
	}
	if($sql)
	{
		//������־
		insert_dolog("temp=$tempname&gid=$gid");
		printerror("EditDownTempSuccess","template/EditPublicTemp.php?tname=$tempname&gid=$gid".hReturnEcmsHashStrHref2(0)."#$tempname");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//�޸���ҳģ��
function EditIndextemp($temptext,$userid,$username){
	global $empire,$dbtbpre,$public_r;
	if(!$temptext)
	{
		printerror("EmptyIndexTemp","history.go(-1)");
	}
	CheckLevel($userid,$username,$classid,"template");//����Ȩ��
	$temptext=RepPhpAspJspcode($temptext);
	$gid=(int)$_POST['gid'];
	$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set indextemp='".eaddslashes2($temptext)."'");
	//����ģ��
	AddEBakTemp('pubindextemp',$gid,1,'',$temptext,0,0,'',0,0,'',0,0,0,$userid,$username);
	//ˢ����ҳ
	if($gid==$public_r['deftempid']||(!$public_r['deftempid']&&($gid==1||$gid==0)))
	{
		NewsBq($classid,eaddslashes($temptext),1,0);
		//ɾ����̬ģ�建���ļ�
		DelOneTempTmpfile('indexpage');
		//���¶�̬ҳ�滺��
		$ecms_fclast=time();
		$empire->query("update {$dbtbpre}enewspublic_fc set fclastindex='$ecms_fclast' limit 1");
	}
	if($sql)
	{
	    insert_dolog("gid=$gid");//������־
		printerror("EditPublicTempSuccess","template/EditPublicTemp.php?tname=indextemp&gid=$gid".hReturnEcmsHashStrHref2(0));
	}
	else
	{
		printerror("DbError","history.go(-1)");
	}
}

//Ԥ����ҳ����
function PreviewIndexpage($tempid,$userid,$username){
	global $empire,$dbtbpre,$public_r,$emod_r,$class_r,$class_zr,$fun_r,$navclassid,$navinfor,$class_tr,$level_r,$etable_r;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$tempid=(int)$tempid;
	if(!$tempid)
	{
		printerror('ErrorUrl','');
	}
	$tempr=$empire->fetch1("select tempid,temptext from {$dbtbpre}enewsindexpage where tempid='$tempid'");
	if(!$tempr['tempid'])
	{
		printerror('ErrorUrl','');
	}
	$indextext=stripSlashes($tempr['temptext']);
	$indextext=ReplaceTempvar($indextext);//�滻ȫ��ģ�����
	$pr=$empire->fetch1("select sitekey,siteintro from {$dbtbpre}enewspublic limit 1");
	//ҳ��
	$pagetitle=ehtmlspecialchars($public_r['sitename']);
	$pagekey=ehtmlspecialchars($pr['sitekey']);
	$pagedes=ehtmlspecialchars($pr['siteintro']);
	$url="<a href=\"".ReturnSiteIndexUrl()."\">".$fun_r['index']."</a>";//��Ŀ����
	$onclick='';
	$file=ECMS_PATH.'e/data/tmp/indexpage'.$tempid.'.php';
	$indextext=ReplaceSvars($indextext,$url,0,$pagetitle,$pagekey,$pagedes,$add,0);
	$indextext=str_replace("[!--page.stats--]",$onclick,$indextext);
	//�滻��ǩ
	$indextext=DoRepEcmsLoopBq($indextext);
	$indextext=RepBq($indextext);
	//д�ļ�
	WriteFiletext($file,AddCheckViewTempCode().$indextext);
	//��ȡ�ļ�����
	ob_start();
	include($file);
	$string=ob_get_contents();
	ob_end_clean();
	$string=RepExeCode($string);//��������
	echo stripSlashes($string);
	exit();
}

//����������Ŀģ��
function LoadTempInClass($path,$start,$userid,$username){
	global $empire,$public_r,$dbtbpre;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$start=(int)$start;
	if(empty($public_r[loadtempnum]))
	{$public_r[loadtempnum]=50;}
	$b=0;
	$sql=$empire->query("select classid,classtempid,islist from {$dbtbpre}enewsclass where islast=0 and islist<>1 and classid>$start order by classid limit ".$public_r[loadtempnum]);
	while($r=$empire->fetch($sql))
	{
		$b=1;
		$newstart=$r[classid];
		if($r[islist]==3)
		{
			continue;
		}
		$file="../data/LoadTemp/".$r[classid].".htm";
		if(file_exists($file))
		{
			$data=addslashes(addslashes(ReadFiletext($file)));
			$data=RepPhpAspJspcode($data);
			if($r[islist]==2)
			{
				$usql=$empire->query("update {$dbtbpre}enewsclassadd set classtext='".$data."' where classid='$r[classid]'");
			}
			else
			{
				$usql=$empire->query("update {$dbtbpre}enewsclasstemp set temptext='".$data."' where tempid='$r[classtempid]'");
			}
			NewsBq($r[classid],$data,0,0);
	    }
    }
	if(empty($b))
	{
		//������־
	    insert_dolog("");
		printerror("LoadClassTempSuccess","template/LoadTemp.php".hReturnEcmsHashStrHref2(1));
	}
	echo $fun_r['LoadOneTempSuccess']."(ID:<font color=red><b>".$newstart."</b></font>)<script>self.location.href='ecmstemp.php?enews=LoadTempInClass&start=$newstart".hReturnEcmsHashStrHref(0)."';</script>";
	exit();
}

//����������Ŀ�б�ģ��
function ChangeClassListtemp($classid,$listtempid,$userid,$username){
	global $empire,$class_r,$dbtbpre;
	if(empty($listtempid))
	{printerror("EmptChangeListtempid","history.go(-1)");}
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$listtempid=(int)$listtempid;
	$classid=(int)$classid;
	if(empty($classid))
	{$where="classid<>0";}
	else
	{
		//�м���Ŀ
		if(empty($class_r[$classid][islast]))
		{
			$where=ReturnClass($class_r[$classid][sonclass]);
		}
		//�ռ���Ŀ
		else
		{
			$where="classid='$classid'";
		}
	}
	$sql=$empire->query("update {$dbtbpre}enewsclass set listtempid=$listtempid where ".$where);
	GetClass();
	if($sql)
	{
		//������־
		insert_dolog("classid=$classid&listtempid=$listtempid");
		printerror("ChangeClassListtempSuccess","history.go(-1)");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//������ǩ
function LoadOutBq($add,$userid,$username){
	global $empire,$dbtbpre;
	$bqid=(int)$add['bqid'];
	if(!$bqid||!$add['funvalue'])
	{
		printerror("EmptyLoadBqid","history.go(-1)");
	}
	//��֤Ȩ��
    CheckLevel($userid,$username,$classid,"bq");
	$r=$empire->fetch1("select bqid,bqname,bqsay,funname,bq,bqgs from {$dbtbpre}enewsbq where bqid=$bqid");
	if(!$r[bqid])
	{
		printerror("NotThisBqid","history.go(-1)");
	}
	$add['funvalue']=ClearAddsData($add['funvalue']);
	$field="<!--#empirecms.bq-phome.net#--!>";
	$str=$r['bqname'].$field.stripSlashes($r['bqsay']).$field.$r['funname'].$field.$r['bq'].$field.stripSlashes($r['bqgs']).$field.$add['funvalue'];
	$filename=$r['bq'].time().".bq";
	$filepath=ECMS_PATH.'e/data/tmp/temp/'.$filename;
	WriteFiletext_n($filepath,$str);
	DownLoadFile($filename,$filepath,1);
	//������־
	insert_dolog("bqid=".$bqid."<br>bqname=".$r[bqname]);
	exit();
}

//�����ǩ
function LoadInBq($add,$file,$file_name,$file_type,$file_size,$userid,$username){
	global $empire,$dbtbpre;
	//��֤Ȩ��
    CheckLevel($userid,$username,$classid,"bq");
	$classid=(int)$add['classid'];
	if(!$file_name||!$file_size)
	{
		printerror("EmptyLoadInBqFile","history.go(-1)");
	}
	//��չ��
	$filetype=GetFiletype($file_name);
	if($filetype!=".bq")
	{
		printerror("LoadInBqMustBq","history.go(-1)");
	}
	$field="<!--#empirecms.bq-phome.net#--!>";
	$path=ECMS_PATH.'e/data/tmp/temp/uploadbq'.time().'.bq';
	//�ϴ��ļ�
	$cp=@move_uploaded_file($file,$path);
	DoChmodFile($path);
	$data=ReadFiletext($path);
	DelFiletext($path);
	$r=explode($field,$data);
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsbq where bq='$r[3]' or funname='$r[2]' limit 1");
	if($num)
	{
		printerror("ReLoadInBq","history.go(-1)");
	}
	$sql=$empire->query("insert into {$dbtbpre}enewsbq(bqname,bqsay,funname,bq,issys,bqgs,isclose,classid,myorder) values('".addslashes($r[0])."','".addslashes(addslashes($r[1]))."','".addslashes($r[2])."','".addslashes($r[3])."',0,'".addslashes(addslashes($r[4]))."',0,$classid,0);");
	$bqid=$empire->lastid();
	//������־
	insert_dolog("bqid=".$bqid."<br>bqname=".$r[0]);
	return $r;
}

//-----------------------�����滻ģ���ַ�
function DoRepTemp($add,$userid,$username){
	global $empire,$dbtbpre;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"template");
	$oldword=RepPhpAspJspcode(eaddslashes2($add['oldword']));
	$newword=RepPhpAspJspcode(eaddslashes2($add['newword']));
	if(!$oldword)
	{
		printerror("EmptyRepTemp","history.go(-1)");
    }
	$gid=(int)$add['gid'];
	//������
	if($add['indextemp']||$add['cptemp']||$add['sformtemp']||$add['otherlinktemp']||$add['gbooktemp']||$add['loginiframe']||$add['pljstemp']||$add['schalltemp']||$add['loginjstemp']||$add['downpagetemp'])
	{
		$set='';
		//��ҳģ��
		if($add['indextemp'])
		{
			
			$set.=",indextemp=REPLACE(indextemp,'".$oldword."','".$newword."')";
		}
		//�������ģ��
		if($add['cptemp'])
		{
			$set.=",cptemp=REPLACE(cptemp,'".$oldword."','".$newword."')";
		}
		//��������ģ��
		if($add['sformtemp'])
		{
			$set.=",searchtemp=REPLACE(searchtemp,'".$oldword."','".$newword."')";
		}
		//�����Ϣģ��
		if($add['otherlinktemp'])
		{
			$set.=",otherlinktemp=REPLACE(otherlinktemp,'".$oldword."','".$newword."')";
		}
		//���԰�ģ��
		if($add['gbooktemp'])
		{
			$set.=",gbooktemp=REPLACE(gbooktemp,'".$oldword."','".$newword."')";
		}
		//��½״̬ģ��
		if($add['loginiframe'])
		{
			$set.=",loginiframe=REPLACE(loginiframe,'".$oldword."','".$newword."')";
		}
		//����JSģ��
		if($add['pljstemp'])
		{
			$set.=",pljstemp=REPLACE(pljstemp,'".$oldword."','".$newword."')";
		}
		//ȫվ����ģ��
		if($add['schalltemp'])
		{
			$set.=",schalltemp=REPLACE(schalltemp,'".$oldword."','".$newword."')";
		}
		//JS���õ�½״̬ģ��
		if($add['loginjstemp'])
		{
			$set.=",loginjstemp=REPLACE(loginjstemp,'".$oldword."','".$newword."')";
		}
		//��������ҳģ��
		if($add['downpagetemp'])
		{
			$set.=",downpagetemp=REPLACE(downpagetemp,'".$oldword."','".$newword."')";
		}
		$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set id=1".$set." limit 1");
	}
	//�޸���Ŀ����ģ��
	if($add['classtemp'])
	{
		$empire->query("update ".GetDoTemptb("enewsclasstemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."')");
    }
	//�޸ı�ǩģ��
	if($add['bqtemp'])
	{
		$empire->query("update ".GetDoTemptb("enewsbqtemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."'),listvar=REPLACE(listvar,'".$oldword."','".$newword."')");
    }
	//�޸��б�ģ��
	if($add['listtemp'])
	{
		$empire->query("update ".GetDoTemptb("enewslisttemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."'),listvar=REPLACE(listvar,'".$oldword."','".$newword."')");
    }
	//�޸�����ģ��
	if($add['newstemp'])
	{
		$empire->query("update ".GetDoTemptb("enewsnewstemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."')");
	}
	//�޸�����ģ��
	if($add['searchtemp'])
	{
		$empire->query("update ".GetDoTemptb("enewssearchtemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."'),listvar=REPLACE(listvar,'".$oldword."','".$newword."')");
	}
	//�޸��Զ���ҳ��
	if($add['userpage'])
	{
		$empire->query("update {$dbtbpre}enewspage set pagetext=REPLACE(pagetext,'".$oldword."','".$newword."')");
	}
	//�޸��Զ���ҳ��ģ��
	if($add['pagetemp'])
	{
		$empire->query("update ".GetDoTemptb("enewspagetemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."')");
    }
	//�����б�ģ��
	if($add['pltemp'])
	{
		$empire->query("update ".GetDoTemptb("enewspltemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."')");
    }
	//��ӡģ��
	if($add['printtemp'])
	{
		$empire->query("update ".GetDoTemptb("enewsprinttemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."')");
    }
	//ģ�����
	if($add['tempvar'])
	{
		$empire->query("update ".GetDoTemptb("enewstempvar",$gid)." set varvalue=REPLACE(varvalue,'".$oldword."','".$newword."')");
	}
	//�޸�JSģ��
	if($add['jstemp'])
	{
		$empire->query("update ".GetDoTemptb("enewsjstemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."')");
    }
	//�޸�ͶƱģ��
	if($add['votetemp'])
	{
		$empire->query("update ".GetDoTemptb("enewsvotetemp",$gid)." set temptext=REPLACE(temptext,'".$oldword."','".$newword."')");
    }
	//��������ģ��
	if($add['feedbackbtemp'])
	{
		$empire->query("update {$dbtbpre}enewsfeedbackclass set btemp=REPLACE(btemp,'".$oldword."','".$newword."')");
	}
	//������־
	insert_dolog("gid=$gid");
	printerror("RepTempSuccess","history.go(-1)");
}

//�޸�ģ����
function EditTempGroup($add,$userid,$username){
	global $empire,$dbtbpre;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"tempgroup");
	$gid=$add['gid'];
	$gname=$add['gname'];
	$count=count($gid);
	for($i=0;$i<$count;$i++)
	{
		$usql=$empire->query("update {$dbtbpre}enewstempgroup set gname='".$gname[$i]."' where gid='".$gid[$i]."'");
	}
	//������־
	insert_dolog("");
	printerror("EditTempGroupSuccess","TempGroup.php".hReturnEcmsHashStrHref2(1));
}

//Ĭ��ģ����
function DefTtempGroup($add,$userid,$username){
	global $empire,$dbtbpre;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"tempgroup");
	$gid=(int)$add['changegid'];
	if(!$gid)
	{
		printerror("EmptyTempGroup","");
	}
	$r=$empire->fetch1("select gid,gname from {$dbtbpre}enewstempgroup where gid=$gid");
	if(!$r['gid'])
	{
		printerror("EmptyTempGroup","");
	}
	$usql=$empire->query("update {$dbtbpre}enewstempgroup set isdefault=0");
	$sql=$empire->query("update {$dbtbpre}enewstempgroup set isdefault=1 where gid=$gid");
	$upsql=$empire->query("update {$dbtbpre}enewspublic set deftempid=$gid limit 1");
	if($usql&&$sql&&$upsql)
	{
		GetConfig();
		//������־
		insert_dolog("gid=$gid&gname=$r[gname]");
		printerror("DefTempGroupSuccess","TempGroup.php".hReturnEcmsHashStrHref2(1));
	}
	else
	{
		printerror("DbError","");
	}
}

//����ģ���
function ReturnTemptbList(){
	$templist="enewsbqtemp,enewsjstemp,enewslisttemp,enewsnewstemp,enewspubtemp,enewssearchtemp,enewstempvar,enewsvotetemp,enewsclasstemp,enewspltemp,enewsprinttemp,enewspagetemp";
	return $templist;
}

//ɾ��ģ�����ݱ�
function DelTempTb($gid){
	global $empire,$dbtbpre;
	if($gid==1)
	{
		return "";
	}
	$templist=ReturnTemptbList();
	$r=explode(",",$templist);
	$count=count($r);
	$droptb="";
	for($i=0;$i<$count;$i++)
	{
		$dh=",";
		if($i==0)
		{
			$dh="";
		}
		$droptb.=$dh.$dbtbpre.$r[$i]."_".$gid;
	}
	$sql=$empire->query("DROP TABLE IF EXISTS ".$droptb.";");
	return $sql;
}

//���ģ�����ݱ�
function ClearTempTb($gid,$en){
	global $empire,$dbtbpre;
	$templist=ReturnTemptbList();
	$r=explode(",",$templist);
	$count=count($r);
	for($i=0;$i<$count;$i++)
	{
		$tb=$dbtbpre.$r[$i].$en;
		$empire->query("TRUNCATE `".$tb."`;");
	}
}

//�½�ģ�����ݱ�
function CreateTempTb($gid,$en){
	global $empire,$dbtbpre;
	if($gid==1)
	{
		return "";
	}
	$templist=ReturnTemptbList();
	$r=explode(",",$templist);
	$count=count($r);
	for($i=0;$i<$count;$i++)
	{
		$otb=$dbtbpre.$r[$i];
		$tb=$dbtbpre.$r[$i].$en;
		CopyEcmsTb($otb,$tb);
	}
}

//ɾ��ģ����
function DelTempGroup($add,$userid,$username){
	global $empire,$dbtbpre;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"tempgroup");
	$gid=(int)$add['changegid'];
	if(!$gid)
	{
		printerror("EmptyDelTempGroup","");
	}
	if($gid==1)
	{
		printerror("NotDelDefTempGroup","");
	}
	$r=$empire->fetch1("select gid,gname,isdefault from {$dbtbpre}enewstempgroup where gid=$gid");
	if(!$r['gid'])
	{
		printerror("EmptyDelTempGroup","");
	}
	$sql=$empire->query("delete from {$dbtbpre}enewstempgroup where gid=$gid");
	if($r['isdefault'])
	{
		$upsql=$empire->query("update {$dbtbpre}enewspublic set deftempid=0 limit 1");
		GetConfig();
	}
	DelTempTb($gid);
	//ɾ�����ݼ�¼
	$empire->query("delete from {$dbtbpre}enewstempbak where gid='$gid'");
	if($sql)
	{
		//������־
		insert_dolog("gid=$gid&gname=$r[gname]");
		printerror("DelTempGroupSuccess","TempGroup.php".hReturnEcmsHashStrHref2(1));
	}
	else
	{
		printerror("DbError","");
	}
}

//����ģ����
function LoadTempGroup($add,$userid,$username){
	global $empire,$dbtbpre;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"tempgroup");
	$gid=(int)$add['changegid'];
	if(!$gid)
	{
		printerror("EmptyLoadTempGroup","");
	}
	$r=$empire->fetch1("select gid,gname from {$dbtbpre}enewstempgroup where gid=$gid");
	if(!$r['gid'])
	{
		printerror("EmptyLoadTempGroup","");
	}
	//�汾
	$thistempver=LoadTGAddVer();
	$pageexp="<!---ecms.temp--->";
	$record="<!---ecms.record--->";
	$field="<!---ecms.field--->";
	if($gid==1)
	{
		$en="";
	}
	else
	{
		$en="_".$gid;
	}
	$bqtemp=LoadTGBqtemp($gid,$en,$pageexp,$record,$field);//��ǩģ��
	$jstemp=LoadTGJstemp($gid,$en,$pageexp,$record,$field);//JSģ��
	$listtemp=LoadTGListtemp($gid,$en,$pageexp,$record,$field);//�б�ģ��
	$newstemp=LoadTGNewstemp($gid,$en,$pageexp,$record,$field);//����ģ��
	$pubtemp=LoadTGPubtemp($gid,$en,$pageexp,$record,$field);//����ģ��
	$searchtemp=LoadTGSearchtemp($gid,$en,$pageexp,$record,$field);//����ģ��
	$tempvar=LoadTGTempvar($gid,$en,$pageexp,$record,$field);//ģ�����
	$votetemp=LoadTGVotetemp($gid,$en,$pageexp,$record,$field);//ͶƱģ��
	$classtemp=LoadTGClasstemp($gid,$en,$pageexp,$record,$field);//��Ŀģ��
	$pltemp=LoadTGPltemp($gid,$en,$pageexp,$record,$field);//����ģ��
	$printtemp=LoadTGPrinttemp($gid,$en,$pageexp,$record,$field);//��ӡģ��
	$pagetemp=LoadTGPagetemp($gid,$en,$pageexp,$record,$field);//�Զ���ҳ��ģ��
	$loadtemptext=$r['gname'].$thistempver.$pageexp.$bqtemp.$pageexp.$jstemp.$pageexp.$listtemp.$pageexp.$newstemp.$pageexp.$pubtemp.$pageexp.$searchtemp.$pageexp.$tempvar.$pageexp.$votetemp.$pageexp.$classtemp.$pageexp.$pltemp.$pageexp.$printtemp.$pageexp.$pagetemp;
	$loadtemptext=stripSlashes($loadtemptext);
	$file="e".time().".temp";
	$filepath=ECMS_PATH.'e/data/tmp/temp/'.$file;
	WriteFiletext_n($filepath,$loadtemptext);
	DownLoadFile($file,$filepath,1);
	//������־
	insert_dolog("gid=$gid&gname=$r[gname]");
	exit();
}

//ģ��ת����
function LoadInTempChangeChar($tempchar,$text){
	global $ecms_config;
	@include_once(ECMS_PATH.'e/class/EmpireCMS_version.php');
	if($tempchar=='GB2312')//����GB2312
	{
		if($ecms_config['sets']['pagechar']=='gb2312')
		{
			return $text;
		}
		if($ecms_config['sets']['pagechar']=='utf-8')
		{
			if(EmpireCMS_CHARVER=='TC-UTF-8')//����
			{
				$text=DoIconvVal("GB2312","BIG5",$text,1);
				$text=DoIconvVal("BIG5","UTF8",$text);
			}
			else//����
			{
				$text=DoIconvVal("GB2312","UTF8",$text,1);
			}
			$text=preg_replace(array('/charset=gbk/i','/charset=gb2312/i'),array('charset=utf-8','charset=utf-8'),$text);
		}
		elseif($ecms_config['sets']['pagechar']=='big5')
		{
			$text=DoIconvVal("GB2312","BIG5",$text,1);
			$text=preg_replace(array('/charset=gbk/i','/charset=gb2312/i'),array('charset=big5','charset=big5'),$text);
		}
	}
	elseif($tempchar=='UTF8')//����UTF-8
	{
		if($ecms_config['sets']['pagechar']=='utf-8'&&EmpireCMS_CHARVER=='UTF-8')
		{
			return $text;
		}
		if($ecms_config['sets']['pagechar']=='gb2312')
		{
			$text=DoIconvVal("UTF8","GB2312",$text,1);
			$text=preg_replace('/charset=utf-8/i','charset=gb2312',$text);
		}
		elseif($ecms_config['sets']['pagechar']=='big5')
		{
			$text=DoIconvVal("UTF8","GB2312",$text,1);
			$text=DoIconvVal("GB2312","BIG5",$text);
			$text=preg_replace('/charset=utf-8/i','charset=big5',$text);
		}
		elseif($ecms_config['sets']['pagechar']=='utf-8')//����
		{
			$text=DoIconvVal("UTF8","GB2312",$text,1);
			$text=DoIconvVal("GB2312","BIG5",$text);
			$text=DoIconvVal("BIG5","UTF8",$text);
		}
	}
	elseif($tempchar=='BIG5')//����BIG5
	{
		if($ecms_config['sets']['pagechar']=='big5')
		{
			return $text;
		}
		if($ecms_config['sets']['pagechar']=='gb2312')
		{
			$text=DoIconvVal("BIG5","GB2312",$text,1);
			$text=preg_replace('/charset=big5/i','charset=gb2312',$text);
		}
		elseif($ecms_config['sets']['pagechar']=='utf-8')
		{
			if(EmpireCMS_CHARVER=='UTF-8')//����
			{
				$text=DoIconvVal("BIG5","GB2312",$text,1);
				$text=DoIconvVal("GB2312","UTF8",$text);
			}
			else//����
			{
				$text=DoIconvVal("BIG5","UTF8",$text,1);
			}
			$text=preg_replace('/charset=big5/i','charset=utf-8',$text);
		}
	}
	elseif($tempchar=='TCUTF8')//����UTF-8
	{
		if($ecms_config['sets']['pagechar']=='utf-8'&&EmpireCMS_CHARVER=='TC-UTF-8')
		{
			return $text;
		}
		if($ecms_config['sets']['pagechar']=='gb2312')
		{
			$text=DoIconvVal("UTF8","BIG5",$text,1);
			$text=DoIconvVal("BIG5","GB2312",$text);
			$text=preg_replace('/charset=utf-8/i','charset=gb2312',$text);
		}
		elseif($ecms_config['sets']['pagechar']=='big5')
		{
			$text=DoIconvVal("UTF8","BIG5",$text,1);
			$text=preg_replace('/charset=utf-8/i','charset=big5',$text);
		}
		elseif($ecms_config['sets']['pagechar']=='utf-8')//����
		{
			$text=DoIconvVal("UTF8","BIG5",$text,1);
			$text=DoIconvVal("BIG5","GB2312",$text);
			$text=DoIconvVal("GB2312","UTF8",$text);
		}
	}
	return $text;
}

//�滻�����汾��ַ
function LoadInTGReptext_pubvar($text){
	//shop
	$text=str_replace('/enews/?enews=AddBuycar','/ShopSys/doaction.php?enews=AddBuycar',$text);
	$text=str_replace('/enews?enews=AddBuycar','/ShopSys/doaction.php?enews=AddBuycar',$text);
	//pl
	$text=str_replace('/enews/?enews=DoForPl','/pl/doaction.php?enews=DoForPl',$text);
	$text=str_replace('/enews?enews=DoForPl','/pl/doaction.php?enews=DoForPl',$text);
	//member
	$text=str_replace('/enews/?enews=exit','/member/doaction.php?enews=exit',$text);
	$text=str_replace('/enews?enews=exit','/member/doaction.php?enews=exit',$text);
	//report
	$text=str_replace('/DownSys/report','/public/report',$text);
	return $text;
}

//�滻�����汾��ַ
function LoadInTGReptext_othervar($text,$type='pl'){
	if($type=='pl')
	{
		$text=str_replace('/enews/index.php','/pl/doaction.php',$text);
	}
	elseif($type=='member')
	{
		$text=str_replace('/enews/index.php','/member/doaction.php',$text);
	}
	elseif($type=='shop')
	{
		$text=str_replace('/enews/index.php','/ShopSys/doaction.php',$text);
	}
	return $text;
}

//�Ӱ汾��
function LoadTGAddVer(){
	@include_once(ECMS_PATH.'e/class/EmpireCMS_version.php');
	$ver=' ,-- '.EmpireCMS_VERSION.','.EmpireCMS_CHARVER;
	return $ver;
}

//�滻�汾��
function LoadInTGReturnVer($gname){
	$exp=' ,-- ';
	$r=explode($exp,$gname);
	$returnr['gname']=$r[0];
	$returnr['ver']='';
	$returnr['tempchar']='';
	if($r[1])
	{
		$vr=explode(',',$r[1]);
		$returnr['ver']=$vr[0];
		$returnr['tempchar']=$vr[1];
	}
	return $returnr;
}

//����ģ����
function LoadInTempGroup($add,$file,$file_name,$file_type,$file_size,$userid,$username){
	global $empire,$dbtbpre;
	//��֤Ȩ��
	CheckLevel($userid,$username,$classid,"tempgroup");
	if(!$file_name||!$file_size)
	{
		printerror("EmptyLoadInTempGroup","");
	}
	$gid=(int)$add['gid'];
	//��չ��
	$filetype=GetFiletype($file_name);
	if($filetype!=".temp")
	{
		printerror("LoadInTempGroupMusttemp","");
	}
	//�ϴ��ļ�
	$path=ECMS_PATH.'e/data/tmp/temp/uploadtg'.time().make_password(10).'.temp';
	$cp=@move_uploaded_file($file,$path);
	DoChmodFile($path);
	$data=ReadFiletext($path);
	DelFiletext($path);
	//ת��
	if($add['ChangeChar'])
	{
		$data=LoadInTempChangeChar($add['tempchar'],$data);
	}
	if(empty($data))
	{
		printerror("EmptyLoadInTempGroup","");
	}
	//���ذ汾
	$pageexp="<!---ecms.temp--->";
	$checkpr=explode($pageexp,$data);
	$tempverr=LoadInTGReturnVer($checkpr[0]);
	$gname=$tempverr['gname'];
	$thistempver=$tempverr['ver'];
	$thistempchar=$tempverr['tempchar'];
	//�滻�ɵ�ַ
	$GLOBALS['loadtempver']=$thistempver;
	if(empty($thistempver))
	{
		$data=LoadInTGReptext_pubvar($data);
	}
	//���
	$pageexp="<!---ecms.temp--->";
	$record="<!---ecms.record--->";
	$field="<!---ecms.field--->";
	$pr=explode($pageexp,$data);
	if(empty($gid))//�½�ģ����
	{
		$sql=$empire->query("insert into {$dbtbpre}enewstempgroup(gname,isdefault) values('".addslashes($gname)."',0);");
		$gid=$empire->lastid();
		$gname=$pr[0];
		$en="_".$gid;
		CreateTempTb($gid,$en);//���Ʊ�
	}
	else//����ģ����
	{
		$r=$empire->fetch1("select gid,gname from {$dbtbpre}enewstempgroup where gid=$gid");
		if(!$r['gid'])
		{
			printerror("LoadInTempGroupMusttemp","");
		}
		if($gid==1)
		{
			$en="";
		}
		else
		{
			$en="_".$gid;
		}
		$gname=$r['gname'];
		ClearTempTb($gid,$en);//��ձ�
	}
	//�汾
	$isold=0;
	$ckcount=count($pr);
	if($ckcount<=10)//5.1
	{
		$isold=1;
	}
	elseif($ckcount<=11)//6.0
	{
		$isold=2;
	}
	LoadInTGBqtemp($gid,$en,$record,$field,$pr[1]);//��ǩģ��
	LoadInTGJstemp($gid,$en,$record,$field,$pr[2]);//JSģ��
	LoadInTGListtemp($gid,$en,$record,$field,$pr[3]);//�б�ģ��
	LoadInTGNewstemp($gid,$en,$record,$field,$pr[4]);//����ģ��
	LoadInTGPubtemp($gid,$en,$record,$field,$pr[5],$isold);//����ģ��
	LoadInTGSearchtemp($gid,$en,$record,$field,$pr[6]);//����ģ��
	LoadInTGTempvar($gid,$en,$record,$field,$pr[7]);//ģ�����
	LoadInTGVotetemp($gid,$en,$record,$field,$pr[8]);//ͶƱģ��
	LoadInTGClasstemp($gid,$en,$record,$field,$pr[9]);//��Ŀģ��
	if($isold!=1)
	{
		LoadInTGPltemp($gid,$en,$record,$field,$pr[10]);//����ģ��
	}
	if($isold==0)
	{
		LoadInTGPrinttemp($gid,$en,$record,$field,$pr[11]);//��ӡģ��
	}
	LoadInTGPagetemp($gid,$en,$record,$field,$pr[12]);//�Զ���ҳ��ģ��
	//������־
	insert_dolog("gid=$gid&gname=$gname");
	printerror("LoadInTempGroupSuccess","TempGroup.php".hReturnEcmsHashStrHref2(1));
}

//�滻ģ�����Ÿ�ʽ
function ReplaceLoadTGTemp($pageexp,$record,$field,$text){
	$text=str_replace($pageexp,"",$text);
	$text=str_replace($record,"",$text);
	$text=str_replace($field,"",$text);
	return $text;
}

//��ǩģ��
function LoadTGBqtemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewsbqtemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$r['listvar']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['listvar']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['modid'].$field.$r['temptext'].$field.$r['showdate'].$field.$r['listvar'].$field.$r['subnews'].$field.$r['rownum'].$field.$classid.$field.$r['docode'].$record;
	}
	return $text;
}

function LoadInTGBqtemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewsbqtemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,modid,temptext,showdate,listvar,subnews,rownum,classid,docode) values('$r[0]','".addslashes($r[1])."','$r[2]','".addslashes(addslashes($r[3]))."','".addslashes($r[4])."','".addslashes(addslashes($r[5]))."','$r[6]','$r[7]','$r[8]','$r[9]');");
	}
}

//JSģ��
function LoadTGJstemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewsjstemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$field.$classid.$field.$r['isdefault'].$field.$r['showdate'].$field.$r['modid'].$field.$r['subnews'].$field.$r['subtitle'].$record;
	}
	return $text;
}

function LoadInTGJstemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewsjstemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		if(empty($r[6]))
		{
			$r[6]=1;
		}
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext,classid,isdefault,showdate,modid,subnews,subtitle) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."','$r[3]','$r[4]','".addslashes($r[5])."','$r[6]','$r[7]','$r[8]');");
	}
}

//�б�ģ��
function LoadTGListtemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewslisttemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$r['listvar']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['listvar']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$field.$r['subnews'].$field.$r['isdefault'].$field.$r['listvar'].$field.$r['rownum'].$field.$r['modid'].$field.$r['showdate'].$field.$r['subtitle'].$field.$classid.$field.$r['docode'].$record;
	}
	return $text;
}

function LoadInTGListtemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewslisttemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext,subnews,isdefault,listvar,rownum,modid,showdate,subtitle,classid,docode) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."','$r[3]','$r[4]','".addslashes(addslashes($r[5]))."','$r[6]','$r[7]','".addslashes($r[8])."','$r[9]','$r[10]','$r[11]');");
	}
}

//����ģ��
function LoadTGNewstemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewsnewstemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['isdefault'].$field.$r['temptext'].$field.$r['showdate'].$field.$r['modid'].$field.$classid.$record;
	}
	return $text;
}

function LoadInTGNewstemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$text=RepTemplateJsUrl($text,1,0);//�滻JS��ַ
	$tb=$dbtbpre."enewsnewstemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,isdefault,temptext,showdate,modid,classid) values('$r[0]','".addslashes($r[1])."','$r[2]','".addslashes(addslashes($r[3]))."','".addslashes($r[4])."','$r[5]','$r[6]');");
	}
}

//����ģ��
function LoadTGPubtemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewspubtemp".$en;
	$r=$empire->fetch1("select * from ".$tb." limit 1");
	$r['indextemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['indextemp']);
	$r['cptemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['cptemp']);
	$r['searchtemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['searchtemp']);
	$r['searchjstemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['searchjstemp']);
	$r['searchjstemp1']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['searchjstemp1']);
	$r['otherlinktemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['otherlinktemp']);
	$r['downsofttemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['downsofttemp']);
	$r['onlinemovietemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['onlinemovietemp']);
	$r['listpagetemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['listpagetemp']);
	$r['gbooktemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['gbooktemp']);
	$r['loginiframe']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['loginiframe']);
	$r['loginjstemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['loginjstemp']);
	$r['downpagetemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['downpagetemp']);
	$r['pljstemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['pljstemp']);
	$r['schalltemp']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['schalltemp']);
	$text.=$r['id'].$field.$r['indextemp'].$field.''.$field.$r['cptemp'].$field.$r['searchtemp'].$field.$r['searchjstemp'].$field.$r['searchjstemp1'].$field.$r['otherlinktemp'].$field.''.$field.$r['downsofttemp'].$field.$r['onlinemovietemp'].$field.$r['listpagetemp'].$field.$r['gbooktemp'].$field.$r['loginiframe'].$field.$r['otherlinktempsub'].$field.$r['otherlinktempdate'].$field.$r['loginjstemp'].$field.$r['downpagetemp'].$field.$r['pljstemp'].$field.$r['schalltemp'].$field.$r['schallsubnum'].$field.$r['schalldate'].$record;
	return $text;
}

function LoadInTGPubtemp($gid,$en,$record,$field,$text,$isold=0){
	global $empire,$dbtbpre,$fun_r;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewspubtemp".$en;
	$rr=explode($record,$text);
	$r=explode($field,$rr[0]);
	//�����������
	if(empty($r[14]))
	{
		$r[14]=30;
	}
	if(empty($r[15]))
	{
		$r[15]='Y-m-d H:i:s';
	}
	if(empty($r[21]))
	{
		$r[21]='Y-m-d H:i:s';
	}
	//�滻�ɵ�ַ
	if(empty($GLOBALS['loadtempver']))
	{
		//��¼״̬ģ��
		$r[13]=LoadInTGReptext_othervar($r[13],'member');
		$r[16]=LoadInTGReptext_othervar($r[16],'member');
		//����
		$r[18]=LoadInTGReptext_othervar($r[18],'pl');
	}
	$sql=$empire->query("insert into ".$tb."(id,indextemp,cptemp,searchtemp,searchjstemp,searchjstemp1,otherlinktemp,downsofttemp,onlinemovietemp,listpagetemp,gbooktemp,loginiframe,otherlinktempsub,otherlinktempdate,loginjstemp,downpagetemp,pljstemp,schalltemp,schallsubnum,schalldate) values('$r[0]','".addslashes(addslashes($r[1]))."','".addslashes(addslashes($r[3]))."','".addslashes(addslashes($r[4]))."','".addslashes(addslashes($r[5]))."','".addslashes(addslashes($r[6]))."','".addslashes(addslashes($r[7]))."','".addslashes(addslashes($r[9]))."','".addslashes(addslashes($r[10]))."','".addslashes(addslashes($r[11]))."','".addslashes(addslashes($r[12]))."','".addslashes(addslashes($r[13]))."','$r[14]','$r[15]','".addslashes(addslashes($r[16]))."','".addslashes(addslashes($r[17]))."','".addslashes(addslashes($r[18]))."','".addslashes(addslashes($r[19]))."','$r[20]','$r[21]');");
	//5.1���°汾
	if($isold==1&&$r[2])
	{
		$pltb=$dbtbpre."enewspltemp".$en;
		$pltempname=$fun_r['PlListTempname'];
		//�滻�ɵ�ַ
		if(empty($GLOBALS['loadtempver']))
		{
			$r[2]=LoadInTGReptext_othervar($r[2],'pl');
		}
		$empire->query("insert into ".$pltb."(tempid,tempname,temptext,isdefault) values(NULL,'".addslashes($pltempname)."','".addslashes(addslashes($r[2]))."',1);");
	}
	//6.0���°汾
	if(($isold==1||$isold==2)&&$r[8])
	{
		$printtb=$dbtbpre."enewsprinttemp".$en;
		$printtempname=$fun_r['PrintTempname'];
		$empire->query("insert into ".$printtb."(tempid,tempname,temptext,isdefault,showdate,modid) values(NULL,'".addslashes($printtempname)."','".addslashes(addslashes($r[8]))."',1,'Y-m-d H:i:s',1);");
	}
}

//����ģ��
function LoadTGSearchtemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewssearchtemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$r['listvar']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['listvar']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$field.$r['subnews'].$field.$r['isdefault'].$field.$r['listvar'].$field.$r['rownum'].$field.$r['modid'].$field.$r['showdate'].$field.$r['subtitle'].$field.$classid.$field.$r['docode'].$record;
	}
	return $text;
}

function LoadInTGSearchtemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewssearchtemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext,subnews,isdefault,listvar,rownum,modid,showdate,subtitle,classid,docode) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."','$r[3]','$r[4]','".addslashes(addslashes($r[5]))."','$r[6]','$r[7]','".addslashes($r[8])."','$r[9]','$r[10]','$r[11]');");
	}
}

//ģ�����
function LoadTGTempvar($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewstempvar".$en;
	$sql=$empire->query("select * from ".$tb." order by varid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['varvalue']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['varvalue']);
		$text.=$r['varid'].$field.$r['myvar'].$field.$r['varname'].$field.$r['varvalue'].$field.$classid.$field.$r['isclose'].$field.$r['myorder'].$record;
	}
	return $text;
}

function LoadInTGTempvar($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewstempvar".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		//���۱���
		if(!$GLOBALS['loadtempver']&&$r[1]=='pl')
		{
			$r[3]=LoadInTGReptext_othervar($r[3],'pl');
		}
		$sql=$empire->query("insert into ".$tb."(varid,myvar,varname,varvalue,classid,isclose,myorder) values('$r[0]','".addslashes($r[1])."','".addslashes($r[2])."','".addslashes(addslashes($r[3]))."','$r[4]','$r[5]','$r[6]');");
	}
}

//ͶƱģ��
function LoadTGVotetemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewsvotetemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$record;
	}
	return $text;
}

function LoadInTGVotetemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewsvotetemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."');");
	}
}

//��Ŀ����ģ��
function LoadTGClasstemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewsclasstemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$field.$classid.$record;
	}
	return $text;
}

function LoadInTGClasstemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewsclasstemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext,classid) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."','$r[3]');");
	}
}

//�����б�ģ��
function LoadTGPltemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewspltemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$field.$r['isdefault'].$record;
	}
	return $text;
}

function LoadInTGPltemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewspltemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		//�滻�ɵ�ַ
		if(empty($GLOBALS['loadtempver']))
		{
			$r[2]=LoadInTGReptext_othervar($r[2],'pl');
		}
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext,isdefault) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."','$r[3]');");
	}
}

//��ӡģ��
function LoadTGPrinttemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewsprinttemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$field.$r['isdefault'].$field.$r['showdate'].$field.$r['modid'].$record;
	}
	return $text;
}

function LoadInTGPrinttemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewsprinttemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext,isdefault,showdate,modid) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."','$r[3]','".addslashes($r[4])."','$r[5]');");
	}
}

//�Զ���ҳ��ģ��
function LoadTGPagetemp($gid,$en,$pageexp,$record,$field){
	global $empire,$dbtbpre;
	$tb=$dbtbpre."enewspagetemp".$en;
	$sql=$empire->query("select * from ".$tb." order by tempid");
	$classid=0;
	while($r=$empire->fetch($sql))
	{
		$r['temptext']=ReplaceLoadTGTemp($pageexp,$record,$field,$r['temptext']);
		$text.=$r['tempid'].$field.$r['tempname'].$field.$r['temptext'].$record;
	}
	return $text;
}

function LoadInTGPagetemp($gid,$en,$record,$field,$text){
	global $empire,$dbtbpre;
	if(empty($text))
	{
		return "";
	}
	$tb=$dbtbpre."enewspagetemp".$en;
	$rr=explode($record,$text);
	$count=count($rr);
	for($i=0;$i<$count-1;$i++)
	{
		$r=explode($field,$rr[$i]);
		$sql=$empire->query("insert into ".$tb."(tempid,tempname,temptext) values('$r[0]','".addslashes($r[1])."','".addslashes(addslashes($r[2]))."');");
	}
}

//----------------------����ģ��-------------------

//ɾ�����౸�ݼ�¼
function DelEBakTemp($temptype,$gid,$tempid){
	global $empire,$dbtbpre;
	$pr=$empire->fetch1("select baktempnum from {$dbtbpre}enewspublic limit 1");
	if(!$pr['baktempnum'])
	{
		return $pr;
	}
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstempbak where temptype='$temptype' and gid='$gid' and tempid='$tempid'");
	if($num+1>$pr['baktempnum'])
	{
		$limitnum=$num+1-$pr['baktempnum'];
		$ids='';
		$dh='';
		$sql=$empire->query("select bid from {$dbtbpre}enewstempbak where temptype='$temptype' and gid='$gid' and tempid='$tempid' order by bid limit ".$limitnum);
		while($r=$empire->fetch($sql))
		{
			$ids.=$dh.$r['bid'];
			$dh=',';
		}
		$empire->query("delete from {$dbtbpre}enewstempbak where bid in ($ids)");
	}
	return $pr;
}

//ɾ�����б��ݼ�¼
function DelEbakTempAll($temptype,$gid,$tempid){
	global $empire,$dbtbpre;
	$tempid=(int)$tempid;
	$gid=(int)$gid;
	if(!$gid)
	{
		$gid=GetDoTempGid();
	}
	if($temptype=='indexpage')
	{
		$gid=1;
	}
	$empire->query("delete from {$dbtbpre}enewstempbak where temptype='$temptype' and gid='$gid' and tempid='$tempid'");
}

//ģ�屸�ݼ�¼
function AddEBakTemp($temptype,$gid,$tempid,$tempname,$temptext,$subnews,$isdefault,$listvar,$rownum,$modid,$showdate,$subtitle,$classid,$docode,$userid,$username){
	global $empire,$dbtbpre;
	$tempid=(int)$tempid;
	$gid=(int)$gid;
	if(!$gid)
	{
		$gid=GetDoTempGid();
	}
	if($temptype=='indexpage')
	{
		$gid=1;
	}
	$pr=DelEBakTemp($temptype,$gid,$tempid);
	if(!$pr['baktempnum'])
	{
		return '';
	}
	$subnews=(int)$subnews;
	$isdefault=(int)$isdefault;
	$rownum=(int)$rownum;
	$modid=(int)$modid;
	$subtitle=(int)$subtitle;
	$classid=(int)$classid;
	$docode=(int)$docode;
	$baktime=time();
	$empire->query("insert into {$dbtbpre}enewstempbak(tempid,tempname,temptext,subnews,isdefault,listvar,rownum,modid,showdate,subtitle,classid,docode,baktime,temptype,gid,lastuser) values('$tempid','".eaddslashes($tempname)."','".eaddslashes2($temptext)."','$subnews','$isdefault','".eaddslashes2($listvar)."','$rownum','$modid','".eaddslashes($showdate)."','$subtitle','$classid','$docode','$baktime','$temptype','$gid','$username');");
}

//��ԭģ�屸��
function ReEBakTemp($add,$userid,$username){
	global $empire,$dbtbpre;
	$bid=(int)$add['bid'];
	if(!$bid)
	{
		printerror("NotBakTemp","history.go(-1)");
	}
	$r=$empire->fetch1("select * from {$dbtbpre}enewstempbak where bid='$bid'");
	if(!$r['bid'])
	{
		printerror("NotBakTemp","history.go(-1)");
	}
	//����Ȩ��
	if($r['temptype']=='tempvar')
	{
		CheckLevel($userid,$username,$classid,"tempvar");
	}
	else
	{
		CheckLevel($userid,$username,$classid,"template");
	}
	$gid=(int)$r['gid'];
	if(!$gid)
	{
		$gid=GetDoTempGid();
	}
	if($temptype=='indexpage')
	{
		$gid=1;
	}
	if($r['temptype']=='bqtemp')//��ǩģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewsbqtemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."',modid='$r[modid]',showdate='".StripAddsData($r[showdate])."',listvar='".addslashes($r[listvar])."',subnews='$r[subnews]',rownum='$r[rownum]',classid='$r[classid]',docode='$r[docode]' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='classtemp')//����ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewsclasstemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."',classid='$r[classid]' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='jstemp')//JSģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewsjstemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."',classid='$r[classid]',showdate='".StripAddsData($r[showdate])."',modid='$r[modid]',subnews='$r[subnews]',subtitle='$r[subtitle]' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='listtemp')//�б�ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewslisttemp",$gid)." set subnews='$r[subnews]',tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."',listvar='".addslashes($r[listvar])."',rownum='$r[rownum]',modid='$r[modid]',showdate='".StripAddsData($r[showdate])."',subtitle='$r[subtitle]',classid='$r[classid]',docode='$r[docode]' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='newstemp')//����ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewsnewstemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."',showdate='".StripAddsData($r[showdate])."',modid='$r[modid]',classid='$r[classid]' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='pltemp')//����ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspltemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='printtemp')//��ӡģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewsprinttemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."',showdate='".StripAddsData($r[showdate])."',modid='$r[modid]' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='searchtemp')//����ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewssearchtemp",$gid)." set subnews='$r[subnews]',tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."',listvar='".addslashes($r[listvar])."',rownum='$r[rownum]',modid='$r[modid]',showdate='".StripAddsData($r[showdate])."',subtitle='$r[subtitle]',classid='$r[classid]',docode='$r[docode]' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='tempvar')//����ģ�����
	{
		$sql=$empire->query("update ".GetDoTemptb("enewstempvar",$gid)." set myvar='".StripAddsData($r[tempname])."',varname='".StripAddsData($r[listvar])."',varvalue='".addslashes($r[temptext])."',classid='$r[classid]',isclose='$r[docode]',myorder='$r[subnews]' where varid='$r[tempid]'");
	}
	elseif($r['temptype']=='votetemp')//ͶƱģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewsvotetemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='pagetemp')//�Զ���ҳ��ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspagetemp",$gid)." set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."' where tempid='$r[tempid]'");
	}
	elseif($r['temptype']=='indexpage')//��ҳ����ģ��
	{
		$sql=$empire->query("update {$dbtbpre}enewsindexpage set tempname='".StripAddsData($r[tempname])."',temptext='".addslashes($r[temptext])."' where tempid='$r[tempid]'");
	}
	//����ģ��
	elseif($r['temptype']=='pubindextemp')//��ҳģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set indextemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubcptemp')//�������ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set cptemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubsearchtemp')//�߼���������ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set searchtemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubsearchjstemp')//����JSģ��[����]
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set searchjstemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubsearchjstemp1')//����JSģ��[����]
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set searchjstemp1='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubotherlinktemp')//�������ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set otherlinktemp='".addslashes($r[temptext])."',otherlinktempsub='$r[subtitle]',otherlinktempdate='".StripAddsData($r[showdate])."' limit 1");
	}
	elseif($r['temptype']=='pubdownsofttemp')//���ص�ַģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set downsofttemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubonlinemovietemp')//���߲��ŵ�ַģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set onlinemovietemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='publistpagetemp')//�б���ҳģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set listpagetemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubpljstemp')//����JS����ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set pljstemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubdownpagetemp')//��������ҳģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set downpagetemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubgbooktemp')//���԰�ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set gbooktemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='publoginiframe')//��½״̬ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set loginiframe='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='publoginjstemp')//JS���õ�½״̬ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set loginjstemp='".addslashes($r[temptext])."' limit 1");
	}
	elseif($r['temptype']=='pubschalltemp')//ȫվ����ģ��
	{
		$sql=$empire->query("update ".GetDoTemptb("enewspubtemp",$gid)." set schalltemp='".addslashes($r[temptext])."',schallsubnum='$r[subnews]',schalldate='".StripAddsData($r[showdate])."' limit 1");
	}
	if($sql)
	{
		//������־
		insert_dolog("bid=$bid&temptype=$r[temptype]<br>tempid=$r[tempid]&tempname=$r[tempname]&gid=$r[gid]");
		echo"<script>opener.ReTempBak();window.close();</script>";
		exit();
	}
	else
	{printerror("DbError","history.go(-1)");}
}
?>