<?php
$apiKey = file_get_contents("api-key.txt");
$siteId = file_get_contents("site-id.txt");
$url = "https://monitoringapi.solaredge.com/site/" . $siteId . "/currentPowerFlow?api_key=" . $apiKey;
$content = file_get_contents($url);
echo($content);
?>