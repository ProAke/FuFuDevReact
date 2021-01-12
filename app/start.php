<?php error_reporting (E_ALL ^ E_NOTICE);
/*****************************************************************
Created :12/01/2021
Author : Worapot pilabut (Ake)
E-mail : worapot@outlook.com
Website : https://www.vpslive.com
Copyright (C) 2021, VPSLive Digital together  all right and Reserved.
*****************************************************************/
session_start();
include_once("../include/config.inc.php");
include_once("../include/function.inc.php");
include_once("../include/class.inc.php");
include_once("../include/class.TemplatePower.inc.php");


$tpl = new TemplatePower("../template/_tp_main.html");
$tpl->assignInclude("body", "../template/_tp_index.html");
$tpl->prepare();






//FRONTPAGESEO("1",$lag);
$tpl->printToScreen();
?>