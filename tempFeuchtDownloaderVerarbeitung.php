<?php
$urlTempVerarbeitung = "http://172.31.93.52/rpc/Temperature.GetStatus?id=100";
$urlFeuchtVerarbeitung = "http://172.31.93.52/rpc/Humidity.GetStatus?id=100";

$jsonStringTemp = file_get_contents($urlTempVerarbeitung);
$jsonStringFeucht = file_get_contents($urlFeuchtVerarbeitung);

$jsonTemp = json_decode($jsonStringTemp);
$jsonFeucht = json_decode($jsonStringFeucht);

$ret = array();
$ret["tmp"] = $jsonTemp->tC;
$ret["feucht"] = $jsonFeucht->rh;

$jsonReturn = json_encode($ret);

echo($jsonReturn);
?>


