<?php
$urlTempHalleDurchgang = "http://172.31.31.59/rpc/Temperature.GetStatus?id=100";
$urlFeuchtHalleDurchgang = "http://172.31.31.59/rpc/Humidity.GetStatus?id=100";

$jsonStringTemp = file_get_contents($urlTempHalleDurchgang);
$jsonStringFeucht = file_get_contents($urlFeuchtHalleDurchgang);

$jsonTemp = json_decode($jsonStringTemp);
$jsonFeucht = json_decode($jsonStringFeucht);

$ret = array();
$ret["tmp"] = $jsonTemp->tC;
$ret["feucht"] = $jsonFeucht->rh;

$jsonReturn = json_encode($ret);

echo($jsonReturn);
?>


