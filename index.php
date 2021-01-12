<?php error_reporting (E_ALL ^ E_NOTICE);
/*****************************************************************
Created :12/01/2021
Author : Worapot pilabut (Ake)
E-mail : worapot@outlook.com
Website : http://www.networkinception.com
Copyright (C) 2021, VPSLive Digital together  all right and Reserved.
*****************************************************************/
session_start();
//include_once("include/config.inc.php");
//include_once("include/function.inc.php");
//include_once("include/class.inc.php");
include_once("include/class.TemplatePower.inc.php");
$strDate = date("Y-m-d H:i:s");

$tpl = new TemplatePower("template/_tp_main.html");
$tpl->assignInclude("body", "template/_tp_index.html");
$tpl->prepare();
////////////////////////////////////////////////////////////////////
/*
 if($_POST['lag']!=""){
     $_SESSION['lag'] = $_POST['lag'];
 }

 if($_GET['lag']!="" && $_SESSION['lag']!=""){$_SESSION['lag']=$_GET['lag'];}
 if($_GET['lag']=="" && $_SESSION['lag']==""){$_SESSION['lag']=1;}else{$lag=$_GET['lag'];}
 if(!isset($_GET['lag'])  && !isset($_SESSION['lag']) || $_GET['lag']=="" && !isset($_SESSION['lag']))  {$lag=$lagdf;}
 if(!isset($_GET['lag'])  && isset($_SESSION['lag']) || $_GET['lag']=="" && isset($_SESSION['lag']))  {$lag=$_SESSION['lag'];}

 if($lag=='1'){
	$tpl->assign("_ROOT.lag","2");
 	$tpl->assign("_ROOT.lagList",'<li class="active">TH</li>
           <li onclick="changLangauge();">EN</li>');
 }else{
 	$tpl->assign("_ROOT.lag","1");
 	$tpl->assign("_ROOT.lagList",'<li onclick="changLangauge();">TH</li>
           <li class="active">EN</li>');
 }
 */
////////////////////////////////////////////////////////////////////

/*
FRONTSETTING($lag);
FRONTSLIDE($lag);
FRONTPAGESEO("9",$lag);
*/
$tpl->printToScreen();

?>