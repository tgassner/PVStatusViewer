<?php
$urlTempVerarbeitungMitte = "http://172.31.31.53/rpc/Temperature.GetStatus?id=100";
$urlTempVerarbeitungDecke = "http://172.31.31.53/rpc/Temperature.GetStatus?id=101";
$urlTempVerarbeitungKino = "http://172.31.31.53/rpc/Temperature.GetStatus?id=102";
$urlTempVerarbeitungAussen = "http://172.31.31.53/rpc/Temperature.GetStatus?id=103";

$jsonStringTempMitte = file_get_contents($urlTempVerarbeitungMitte);
$jsonStringTempDecke = file_get_contents($urlTempVerarbeitungDecke);
$jsonStringTempKino = file_get_contents($urlTempVerarbeitungKino);
$jsonStringTempAussen = file_get_contents($urlTempVerarbeitungAussen);


$jsonTempMitte = json_decode($jsonStringTempMitte);
$jsonTempDecke = json_decode($jsonStringTempDecke);
$jsonTempKino = json_decode($jsonStringTempKino);
$jsonTempAussen = json_decode($jsonStringTempAussen);


$ret = array();
$ret["tmpMitte"] = $jsonTempMitte->tC;
$ret["tmpDecke"] = $jsonTempDecke->tC;
$ret["tmpKino"] = $jsonTempKino->tC;
$ret["tmpAussen"] = $jsonTempAussen->tC;

$jsonReturn = json_encode($ret);

echo($jsonReturn);
?>


