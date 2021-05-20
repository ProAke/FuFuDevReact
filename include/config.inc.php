<?php
// Class
$strDate = date("Y-m-d H:i:s");


// Connect Database  Mysql 

// Connect Database MsSql

// API Base Master




// COVID19
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://covid19.th-stat.com/api/open/today");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
$covid19_th = json_decode($output);
curl_close($curl);



// Bank Connection

?>