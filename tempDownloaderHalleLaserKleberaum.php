<?php
$urlTempHalleLaser = "http://172.31.93.58/rpc/Temperature.GetStatus?id=100";
$urlTempKleberaum = "http://172.31.93.58/rpc/Temperature.GetStatus?id=101";
$urlTempHalleDecke = "http://172.31.93.58/rpc/Temperature.GetStatus?id=102";

$jsonStringTempHalleLaser = file_get_contents($urlTempHalleLaser);
$jsonStringTempKleberaum = file_get_contents($urlTempKleberaum);
$jsonStringHalleDecke = file_get_contents($urlTempHalleDecke);



$jsonTempHalleLaser = json_decode($jsonStringTempHalleLaser);
$jsonTempKleberaum = json_decode($jsonStringTempKleberaum);
$jsonTempHalleDecke = json_decode($jsonStringHalleDecke);



$ret = array();
$ret["tmpHalleLaser"] = $jsonTempHalleLaser->tC;
$ret["tmpKleberaum"] = $jsonTempKleberaum->tC;
$ret["tmpHalleDecke"] = $jsonTempHalleDecke->tC;

$jsonReturn = json_encode($ret);

echo($jsonReturn);
?>


