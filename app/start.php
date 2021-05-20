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

$tpl->assign("_ROOT.Header","FuFu Dev");
$tpl->assign("_ROOT.Description","วันที่ ".$strDate.
"<br>พัฒนาขึ้นเพื่อใช้ในการทำงานภายใต้ VPS Live เท่านั้น อัพเดทล่าสุด<br>");


// DATA from API //////////////////////////
$Confirmed        = $covid19_th->Confirmed;
$Recovered        = $covid19_th->Recovered;
$Hospitalized     = $covid19_th->Hospitalized;
$Deaths           = $covid19_th->Deaths;
$NewConfirmed     = $covid19_th->NewConfirmed;
$NewRecovered     = $covid19_th->NewRecovered;
$NewHospitalized  = $covid19_th->NewHospitalized;
$NewDeaths        = $covid19_th->NewDeaths;
$UpdateDate        = $covid19_th->UpdateDate;


///////////////////////////////////////////
$tpl->newBlock("DAYLIREPORT_COVID19TH");
$tpl->assign("Covid19th_Confirmed", number_format($Confirmed));
$tpl->assign("Covid19th_Recovered", number_format($Recovered));
$tpl->assign("Covid19th_NewRecovered", number_format($NewRecovered));
$tpl->assign("Covid19th_Hospitalized", number_format($Hospitalized));
$tpl->assign("Covid19th_Deaths", number_format($Deaths));
$tpl->assign("Covid19th_NewDeaths", number_format($NewDeaths));
$tpl->assign("Covid19th_NewConfirmed", number_format($NewConfirmed));
$tpl->assign("Covid19th_UpdateDate", $UpdateDate);



//FRONTPAGESEO("1",$lag);
$tpl->printToScreen();
?>
