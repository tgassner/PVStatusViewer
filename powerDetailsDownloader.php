<?php
$apiKey = file_get_contents("api-key.txt");
$siteId = file_get_contents("site-id.txt");
$meters = "PRODUCTION,CONSUMPTION,SELFCONSUMPTION,FEEDIN,PURCHASED";
if (isset($_GET) && array_key_exists("start", $_GET)) {
	$start =  urlencode($_GET["start"]);
} else {
	$start = date('Y-m-d') . "%2005:44:00";
}

if (isset($_GET) && array_key_exists("end", $_GET)) {
	$end = urlencode($_GET["end"]);
} else {
	$end = date('Y-m-d') . "%20" . date('H:i:s');
}

$url = "https://monitoringapi.solaredge.com/site/" . $siteId . "/powerDetails?meters=" . $meters . "&startTime=" . $start . "&endTime=" . $end . "&api_key=" . $apiKey;
$content = file_get_contents($url);
echo($content);
?>