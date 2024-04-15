<html>
<head>
<title>PV Status Viewer</title>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/chart.min.js"></script>
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<table>

<div id="nachtPauseDiv" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background: #666666;font-size: 100px; font-weight: bold;margin:auto;text-align: center;padding-top:10%">
	Nachtpause
</div>


<table style="height:100%; width:100%;table-layout: fixed;">
	<tr style="height:45%">
		<td style="width:15%;height:40%;border: 1px solid #000" colspan="1">
            <div id="OverviewBarInfoDiv" style="text-align: center; font-family:khand, Helvetica, Arial, sans-serif; color: rgb(0,150,190); font-size: 28px"></div>
            <div style="height:80%">
			  <canvas id="chartBarCanvas"></canvas>
			</div>
		</td>
        <td style="width:12%;height:40%;border: 1px solid #000;" colspan="1">
            <div style="height:90%">
                <canvas id="chartPieCanvas"></canvas>
            </div>
        </td>
		<td style="width:33%;height:40%;border: 1px solid #000;" colspan="3">
            <div id="smallHistoryInfoDiv" style="text-align: center; font-family:khand, Helvetica, Arial, sans-serif; color: rgb(0,150,190); font-size: 28px"></div>
            <div style="height:95%">
			  <canvas id="chartSmallHistoryCanvas"></canvas>
			</div>
		</td>
		<td style="width:40%;height:40%;border: 1px solid #000;text-align: center;">
			<div style="height:8%;"><img src="img/td_sz.svg" style="height:80%;width:80%"></div>
			<div style="height:80px"><img src="img/token_gelb.svg" style="height:100%;width:20% "></div>
			<!-- <div style="height:11%"><img src="img/PLEXIGLAS-in-jeder-Form.svg" style="height:100%;width:30%"></div> -->

            <div style="margin-bottom: 10px">
                <!-- <div style="text-align: center;font-family:khand, Helvetica, Arial, sans-serif; font-size: 20px; font-weight: bold;">Umgebungsdaten</div> -->
                <table>
                    <tr>
                        <td style="vertical-align: top;">
                            <div id="homeAssistantStatusFenster"> </div>
                        </td>
                        <td style="vertical-align: top;">
                            <table style="margin: 40px auto;  border-collapse: collapse; font-family:khand, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: bold;">
                                <tr style="border-bottom: 1px solid gray;">
                                    <th style="border-right: 1px solid gray; padding-right: 10px"></th>
                                    <th style="padding-left: 10px;border-right: 1px solid gray; padding-right: 10px">°C</th>
                                    <th style="padding-left: 10px;">% rF </th>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;padding-right: 10px">Verarbeitung</td>
                                    <td id="tdVerarbeitungGrad" style="padding-left: 10px; border-right: 1px solid gray;;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td id="tdVerarbeitungProzent" style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Zuschnitt Mitte</td>
                                    <td id="tdZuschnittMitteGrad" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Zuschnitt Decke</td>
                                    <td id="tdZuschnittDeckeGrad" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Kino</td>
                                    <td id="tdKinoGrad" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Draußen</td>
                                    <td id="tdDrauszenGrad" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Halle Rolltor</td>
                                    <td id="tdHalleRolltorGrad" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td id="tdHalleRolltorProzent" style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Halle Laser</td>
                                    <td id="tdHalleLaserGrad" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Halle Laser Decke</td>
                                    <td id="tdHalleLaserDeckeGrad" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td style="padding-left: 20px; "></td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid gray;; padding-right: 10px">Kleberaum</td>
                                    <td id="tdKleberaum" style="padding-left: 10px; ;border-right: 1px solid gray; padding-right: 10px""></td>
                                    <td style="padding-left: 20px; "></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <!--
                <div id="TempFeuchtVerarbeitung" style="text-align: left; padding-left: 10px; font-family:khand, Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; "></div>
                <div id="TempZuschnitt" style="text-align: left; padding-left: 10px; font-family:khand, Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; "></div>
                <div id="TempFeuchtHalleDurchgang" style="text-align: left; padding-left: 10px; font-family:khand, Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; "></div>
                <div id="TempHalleLaserKleberaum" style="text-align: left; padding-left: 10px; font-family:khand, Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; "></div>
                -->
            </div>

			<div style="height:1%" id="lastrefresh"></div>
		</td>
	</tr>
	<tr style="height:50%">
		<td style="width:50%;height:50%;text-align: center;border: 1px solid #000" colspan="4">
            <div id="largeHistoryInfoDiv" style="text-align: center; font-family:khand, Helvetica, Arial, sans-serif; color: rgb(0,150,190); font-size: 28px">
            </div>
			<div style="height:85%">
			  <canvas id="chartLargeHistoryCanvas"></canvas>
			</div>
		</td>
		<td style="width:50%;height:50%;border: 1px solid #000;position: relative" colspan="2">
            <div id="Datum" style="right: 20px; top:20px;font-family:khand, Helvetica, Arial, sans-serif; font-size: 30px; text-align: right;font-weight: bolder; position:absolute">aaaaaa</div>
            <div id="Uhrzeit" style="text-align: center;font-family:khand, Helvetica, Arial, sans-serif; font-size: 240px; font-weight: bolder; top: -30px; position: absolute;left: 50px;"></div>
			<div style="margin-top: 160px;padding-left:10px; padding-right:10px;font-family:khand, Helvetica, Arial, sans-serif;">
				<table style="width:100%;height:100%;">
					<tr>
						<td style="width:25%;height:20%;text-align: center; padding-top:30px;">
							<div id="pvValueDiv" style="font-size: 30px; font-weight: bold;line-height:5px"></div>
						</td>
						<td style="width:12.5%;height:20%;text-align: center">
							
						</td>
						<td style="width:25%;height:20%;text-align: center; padding-top:30px">
							<div id="loadValueDiv" style="font-size: 30px; font-weight: bold; line-height:5px"></div>
						</td>
						<td style="width:12.5%;height:20%;text-align: center">
							
						</td>
						<td style="width:25%;height:20%;text-align: center; padding-top:30px">
							<div id="gridValueDiv" style="font-size: 30px; font-weight: bold;line-height:5px"></div>
						</td>
					</tr>
					
					<tr>
						<td style="width:25%;height:20%;text-align: center">
							<img id="ActivePVImg" src="img/PvActive.svg" style="height:100%;width:100%">
							<img id="InactivePV" src="img/PvInactive.svg" style="height:100%;width:100%">
						</td>
						<td style="width:12.5%;height:20%;text-align: center">
							<img id="pvArrowImg" src="img/GreenArrowRight.svg" style="height:100%;width:100%">
						</td>
						<td style="width:25%;height:20%;text-align: center">
							<img id="ProductionActiveImg" src="img/ProductionActive.svg" style="height:100%;width:100%">
							<img id="ProductionInActiveImg" src="img/ProductionInActive.svg" style="height:100%;width:100%">
						</td>
						<td style="width:12.5%;height:20%;text-align: center">
							<img id="gridArrowLeftImg" src="img/OrangeArrowLeft.svg" style="height:100%;width:100%">
							<img id="gridArrowRightImg" src="img/GreenArrowRight.svg" style="height:100%;width:100%">
						</td>
						<td style="width:25%;height:20%;text-align: center">
							<img id="ActiveNetImg" src="img/GridNetActiveNet.svg" style="height:100%;width:100%">
							<img id="InactiveNetImg" src="img/GridNetInactiveNet.svg" style="height:100%;width:100%">
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>
<div>

<script>
	const currentPowerFlowDownloaderUrl = "currentPowerFlowDownloader.php";
	const powerDetailsDownloaderUrl = "powerDetailsDownloader.php";
	const timeDownloaderUrl = "timeDownloader.php";
    const verarbeitungTempFeuchtDownloaderUrl = "tempFeuchtDownloaderVerarbeitung.php"
    const zuschnittTempDownloaderUrl = "tempDownloaderZuschnitt.php"
    const halleDurchgangTempFeuchtDownloaderUrl = "tempFeuchtDownloaderHalleDurchgang.php"
    const halleLaserKleberaumTempDownloaderUrl = "tempDownloaderHalleLaserKleberaum.php"
    const homeAssistantStatusFensterDownloaderUrl = "homeAssistantStates.php";

	var currentPowerUnit;
	var gridStatus;
	var gridPowerGlobal;
	var loadStatus;
	var loadPower;
	var pvStatus;
	var pvPower;
	var overageVar;
	var countCurrentPowerFlow = 0;
	var countPowerDetails = 0;
	var countTime = 0;
	var timeStampCurrentPowerFlow = "";
	
	var timeUnitPowerDetails;
	var powerUnitPowerDetails;
	var historyLastTimeUpdateView;
	
	var chartPie = null;
	var chartBar = null;
	var chartLargeHistory = null;
	var chartSmallHistory = null;
		
	var largeHistoryDataStructure = [];
	var smallHistoryDataStructure = [];

    var lastSuccessfullPowerDetailsDownload = new Date().getTime();
    var lastSuccessfulCurrentPowerFlowDownload = new Date().getTime();
	
	currentPowerFlowDownloader();
	setInterval(currentPowerFlowDownloader, 11000);

	powerDetailsDownloader();
	setInterval(powerDetailsDownloader, 1000 * 60 * 20); // 15 Minuten

    setTimeout(reloadPage, 3720000); // reload complete page every 62 minutes...

    let currentdate = new Date();
    let timeStampLastReload = getHours(currentdate) + ":" + getMinutes(currentdate) + ":" + getSeconds(currentdate);

    jQuery("#lastrefresh").html("Last Reload:" + timeStampLastReload);

    function reloadPage() {
        let nowMillis = new Date().getTime();

        if (((lastSuccessfullPowerDetailsDownload - nowMillis) > (1000 * 60 * 32)) // falls der letzte erfolgreiche long History call länger als 32 min her ist
           || (((lastSuccessfulCurrentPowerFlowDownload - nowMillis) > (1000 * 60 * 10)))) // ODER falls der letzte erfolgreiche current value call länger als 10 min her ist
        {
            let url = window.location.href;
            window.location.href = url;
        }
    }

    function powerDetailsDownloader() {
		if (isTimeOK()) {
			document.getElementById('nachtPauseDiv').style.display = "none";
		} else {
			document.getElementById('nachtPauseDiv').style.display = "block";
			return;
		}

        let currentdate = new Date();
        var $start = getYears(currentdate) + "-" + getMonths(currentdate) + "-" + getDays(currentdate) + "%2005:44:00";
        var $end = getYears(currentdate) + "-" + getMonths(currentdate) + "-" + getDays(currentdate) + "%20" + getHours(currentdate) + ":" + getMinutes(currentdate) + ":" + getSeconds(currentdate);
        historyLastTimeUpdateView = getHours(currentdate) + ":" + getMinutes(currentdate) + " " + getDays(currentdate) + "." + getMonths(currentdate) + "." + getYears(currentdate);

        var powerDetailsDownloaderUrlWithTime = powerDetailsDownloaderUrl + "?start=" + $start + "&end=" + $end;
        jQuery.getJSON(powerDetailsDownloaderUrlWithTime, function(json) {
            if (Object.hasOwn(json, "error")) {
                return;
            }

            lastSuccessfullPowerDetailsDownload = new Date().getTime();
            //console.log("Number of calls PowerDetails: " + ++countPowerDetails);
            timeUnitPowerDetails = json.powerDetails.timeUnit;
            powerUnitPowerDetails = json.powerDetails.unit

            for (const meter of json.powerDetails.meters) {
                var metertype = meter.type.toLowerCase();
                for (const value of meter.values) {
                    if ((typeof value !== 'undefined' && value)
                        && (typeof value.date !== 'undefined' && value.date)
                        && (typeof value.value !== 'undefined')) {

                            let time = value.date.substring(11, 16);
                            let valueLocal = (!(value.value)) ? 0 : value.value;

                            if (!(time in largeHistoryDataStructure)) {
                                var lineValues = [];
                                lineValues["production"] = 0;
                                lineValues["consumption"] = 0;
                                lineValues["purchased"] = 0;
                                lineValues["selfconsumption"] = 0;
                                lineValues["feedin"] = 0;
                                largeHistoryDataStructure[time] = lineValues;
                            }

                            largeHistoryDataStructure[time][metertype] = valueLocal;
                    }
                }
            }

            // PV == Production: 36894.0
            // Exportieren == FeedIn: 0.0
            // Verbrauch == Load == Consumption: 49430.676
            // Importieren == Purchased: 12536.675
            // Verbraucht von PV == SelfConsumption: 36894.0

            drawLargeHistory();

        }).fail(function(a, b, c) {
             console.log("error " + a + b + c + "   used Url:" + powerDetailsDownloaderUrlWithTime);
        });
	}

	function currentPowerFlowDownloader() {
		if (isTimeOK()) {
			document.getElementById('nachtPauseDiv').style.display = "none";
		} else {
			document.getElementById('nachtPauseDiv').style.display = "block";
			return;
		}
		
		jQuery.getJSON(currentPowerFlowDownloaderUrl, function(json) {
            if (Object.hasOwn(json, "error")) {
                return;
            }

            lastSuccessfulCurrentPowerFlowDownload  = new Date().getTime();

			currentPowerUnit = json.siteCurrentPowerFlow.unit;
			gridStatus = json.siteCurrentPowerFlow.GRID.status;
			gridPowerGlobal = json.siteCurrentPowerFlow.GRID.currentPower;
			loadStatus = json.siteCurrentPowerFlow.LOAD.status;
			loadPower = json.siteCurrentPowerFlow.LOAD.currentPower;
			pvStatus = json.siteCurrentPowerFlow.PV.status;;
			pvPower = json.siteCurrentPowerFlow.PV.currentPower;

			overageVar = null;
			for (const connection of json.siteCurrentPowerFlow.connections) {
				if (connection.from.toLowerCase() == "load" && connection.to.toLowerCase() == "grid") {
					overageVar = true;
				}
				
				if (connection.from.toLowerCase() == "grid" && connection.to.toLowerCase() == "load") {
					overageVar = false;
				}
			}
			
			var currentdate = new Date();
            timeStampCurrentPowerFlow = getHours(currentdate) + ":" + getMinutes(currentdate) + ":" + getSeconds(currentdate) + " " + getDays(currentdate) + "." + getMonths(currentdate) + "." + getYears(currentdate);

            let timeStampSmallHistory = getHours(currentdate) + ":" + getMinutes(currentdate) + ":" + getSeconds(currentdate);

            var lineValues = [];
            lineValues["gridPower"] = gridPowerGlobal;
            lineValues["loadPower"] = loadPower;
            lineValues["pvPower"] = pvPower;
            lineValues["overage"] = overage();
            smallHistoryDataStructure[timeStampSmallHistory] = lineValues;

            if (Object.keys(smallHistoryDataStructure).length > 60) {
                var keys = Object.keys(smallHistoryDataStructure);
                keys.sort;
                firstKey = keys[0];
                delete smallHistoryDataStructure[firstKey];
            }

			drawCurrrentViews();
			
		}).fail(function(a, b, c) {
			console.log("error " + a + b + c + "    used Url: " + currentPowerFlowDownloaderUrl);
		});

        jQuery.getJSON(verarbeitungTempFeuchtDownloaderUrl, function(json) {
            if (Object.hasOwn(json, "error")) {
                return;
            }

            let temp = json.tmp;
            let feucht = json.feucht;

            jQuery("#tdVerarbeitungGrad").html(temp);
            jQuery("#tdVerarbeitungProzent").html(feucht);

            //jQuery("#TempFeuchtVerarbeitung").html("Verarbeitung: Temperatur: " + temp + "°C" + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rel. Luftfeuchtigkeit: " + feucht + "%");
        }).fail(function(a, b, c) {
            console.log("error " + a + b + c + "    used Url: " + verarbeitungTempFeuchtDownloaderUrl);
        });

        jQuery.getJSON(zuschnittTempDownloaderUrl, function(json) {
            if (Object.hasOwn(json, "error")) {
                return;
            }

            let tempMitte = json.tmpMitte;
            let tempDecke = json.tmpDecke;
            let tempKino = json.tmpKino;
            let tempAussen = json.tmpAussen;


            jQuery("#tdZuschnittMitteGrad").html(tempMitte);
            jQuery("#tdZuschnittDeckeGrad").html(tempDecke);
            jQuery("#tdKinoGrad").html(tempKino);
            jQuery("#tdDrauszenGrad").html(tempAussen);


            //jQuery("#TempZuschnitt").html("Zuschnitt: Temperatur Mitte = " + tempMitte + "°C&nbsp;&nbsp;&nbsp;&nbsp;Decke = " + tempDecke + "°C<br>Temperatur Kino = " + tempKino + "°C<br>Temperatur Aussen = " + tempAussen + "°C   ");
        }).fail(function(a, b, c) {
            console.log("error " + a + b + c + "    used Url: " + zuschnittTempDownloaderUrl);
        });


        jQuery.getJSON(halleDurchgangTempFeuchtDownloaderUrl, function(json) {
            if (Object.hasOwn(json, "error")) {
                return;
            }

            let temp = json.tmp;
            let feucht = json.feucht;

            jQuery("#tdHalleRolltorGrad").html(temp);
            jQuery("#tdHalleRolltorProzent").html(feucht);

            //jQuery("#TempFeuchtHalleDurchgang").html("Halle Rolltor: Temperatur: " + temp + "°C" + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rel. Luftfeuchtigkeit: " + feucht + "%");
        }).fail(function(a, b, c) {
            console.log("error " + a + b + c + "    used Url: " + verarbeitungTempFeuchtDownloaderUrl);
        });

        jQuery.getJSON(halleLaserKleberaumTempDownloaderUrl, function(json) {
            if (Object.hasOwn(json, "error")) {
                return;
            }

            let tmpHalleLaser = json.tmpHalleLaser;
            let tmpKleberaum = json.tmpKleberaum;
            let tmpHalleDecke = json.tmpHalleDecke;

            jQuery("#tdHalleLaserGrad").html(tmpHalleLaser);
            jQuery("#tdHalleLaserDeckeGrad").html(tmpHalleDecke);
            jQuery("#tdKleberaum").html(tmpKleberaum);

            //jQuery("#TempHalleLaserKleberaum").html("Halle Laser Temperatur = " + tmpHalleLaser + "°C<br>Halle Laser Decke = " + tmpHalleDecke + "°C<br>Kleberaum = " + tmpKleberaum + "°C");
        }).fail(function(a, b, c) {
            console.log("error " + a + b + c + "    used Url: " + zuschnittTempDownloaderUrl);
        });

        jQuery.getJSON(homeAssistantStatusFensterDownloaderUrl, function(json) {
            if (Object.hasOwn(json, "error")) {
                return;
            }

            let html = "<table style='margin-right: 30px; margin-left: 30px; font-family:khand, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: bold;border-collapse: collapse;'>";
            html += "<tr style='margin-right=10px;border-bottom: 1px solid gray;'>";
            html += "<td style='border-right: 1px solid gray;padding-right: 10px;'>Fenster</td>";
            html += "<td style='border-right: 1px solid gray;padding-left: 10px;padding-right: 10px;'>Status</td>";
            html += "<td style='padding-left: 10px;'>schließt auto-<br>matisch in</td>";
            html += "</tr>";
            for (const shutterId in json) {
                let shutter = json[shutterId];
                let name = shutter["name"];
                let state = shutter["state"];
                let timerActive = shutter["timerActive"];
                let timeToClose = shutter["timeToClose"];

                html += "<tr>";
                html += "<td style='border-right: 1px solid gray;padding-right: 10px;'>" + name + "</td>";
                html += "<td style='border-right: 1px solid gray;padding-left: 10px;padding-right: 10px;'>" + state + "</td>";
                if (timerActive) {
                    html += "<td style='padding-left: 10px;'>" + timeToClose + "</td>";
                } else {
                    html += "<td style='padding-left: 10px;'></td>";
                }
                html += "</tr>";
            }
            html += "</table>";

            jQuery("#homeAssistantStatusFenster").html(html);
        }).fail(function(a, b, c) {
            console.log("error " + a + b + c + "    used Url: " + zuschnittTempDownloaderUrl);
        });

        let currentdate = new Date();
        let zeit = getHours(currentdate) + ":" + getMinutes(currentdate);
        let datum = getDays(currentdate) + "." + getMonths(currentdate) + "." +getYears(currentdate) + "<br>" +
            getDays(currentdate) + "." + getMonthName(currentdate) + "." +getYears(currentdate);

        jQuery("#Uhrzeit").html(zeit);
        jQuery("#Datum").html(datum);

	}
	
	function drawCurrrentViews() {
		drawBar();
		drawPie();
        drawSmallHistory();
		adaptOverview();
	}
	
	function overage() {
		const overageViaPower = parseFloat(pvPower) > parseFloat(loadPower);
		if (overageVar != null && overageViaPower != overageVar) {
			console.log("Error 1\r\noverageViaPower: " + overageViaPower + "\r\noverageVar: " + overageVar);
		}
		return overageVar;
	}
	
	function drawBar() {
		  const data = {
			labels: [
				'PV',
				'Verbrauch',
				'Stromnetz',
			  ],
			/*borderWidth: 1,*/
			datasets: [{
			  label: "",
			  backgroundColor: [
				  'rgba(144, 238, 144, 0.5)',
				  'rgba(255, 255, 224, 0.5)',
				  'rgba(205, 92, 92, 0.5)'],
			  borderColor: [
				  'rgb(0, 238, 0)',
				  'rgb(255, 255, 0, 64)',
				  'rgb(255, 0, 0)'],
			  borderWidth: 1,
			  data: [pvPower, loadPower, overage() ? ("-" + gridPowerGlobal) : gridPowerGlobal],
			  fill: 'none',
			}]
		  };


		  const config = {
			  type: 'bar',
			  data: data,
			  /*borderWidth: 1,*/
			  options: {
				maintainAspectRatio: false,
				scales: {
				  y: {
					beginAtZero: true,
				  }
				},
				animation: {
				   duration: false,
				}
			  },
			};
		
		if (chartBar != null) {
			chartBar.destroy();
		}
		
		chartBar = new Chart(document.getElementById('chartBarCanvas').getContext('2d'), config);
        document.getElementById('OverviewBarInfoDiv').innerHTML = "Übersicht - Einheit = [" + currentPowerUnit + "]" + " - last Update= " + timeStampCurrentPowerFlow;
	}
	
	function drawPie() {
		var labels;
		if (overage()) {
			labels = [
				'PV',
			  ];
		} else {
			labels = [
				'PV',
				'Stromnetz',
            ];
		}

		var datadata;
		if (overage()) {
			datadata = [loadPower];
		} else {
			datadata = [pvPower, gridPowerGlobal];
		}
		

		  const data = {
			labels: labels,
			datasets: [{
			  label: 'Verbrauchsanteile',
			  backgroundColor: [
				  'rgba(144, 238, 144, 0.5)',
				  'rgba(205, 92, 92, 0.5)'],
			  borderColor: [
				  'rgb(0, 238, 0)',
				  'rgb(255, 0, 0)'],
			  data: datadata,
			  fill: 'none',
			}]
		  };

		  const config = {
			  type: 'pie',
			  data: data,
			  options: {
				maintainAspectRatio: false,
				animation: {
					duration: false
				}
			  },
			};
		
		if (chartPie != null) {
			chartPie.destroy();
		}
		
		chartPie = new Chart(document.getElementById('chartPieCanvas').getContext('2d'), config);
	}

    function drawSmallHistory() {
        var times = Object.keys(smallHistoryDataStructure);
        times.sort;

        var historyProductionValues = [];
        var historyVerbrauchValues = [];
        var historyImportValues = [];

        for (const time of times){
            var timeEntry = smallHistoryDataStructure[time];
            let overage = timeEntry["overage"];
            let gridPwr = timeEntry["gridPower"];
            historyImportValues.push(overage ? (-1 * gridPwr) : gridPwr);
            historyVerbrauchValues.push(timeEntry["loadPower"]);
            historyProductionValues.push(timeEntry["pvPower"]);
        }

        const data = {
            labels: times,
            datasets: [{
                label: 'PV Produktion',
                backgroundColor: 'rgb(144, 238, 144)',
                borderColor: 'rgb(0, 255, 0)',
                data: historyProductionValues,
                fill: 'none',
            },{
                label: 'Verbrauch gesamt',
                backgroundColor: 'rgb(255, 255, 224)',
                borderColor: 'rgb(255, 255, 0)',
                data: historyVerbrauchValues,
                fill: 'none',
            },{
                label: 'Netz Import/Export',
                backgroundColor: 'rgb(205, 92, 92)',
                borderColor: 'rgb(255, 0, 0)',
                data: historyImportValues,
                fill: 'none',
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options : {
                maintainAspectRatio: false,
                animation: {
                    duration: false,
                }
            }
        };

        if (chartSmallHistory != null) {
            chartSmallHistory.destroy();
        }

        chartSmallHistory = new Chart(document.getElementById('chartSmallHistoryCanvas').getContext('2d'), config);
        document.getElementById('smallHistoryInfoDiv').innerHTML = "Kurze genaue History - Einheit = [" + currentPowerUnit + "] ";
    }

	function drawLargeHistory() {
		  var times = Object.keys(largeHistoryDataStructure);
		  times.sort;
		  
		  var historyProductionValues = [];
		  var historyVerbrauchValues = [];
		  var historyImportValues = [];
		  var historyVerwendetenPVStromValues = [];
		  var historyExportiertenPVStromValues = [];
		  
		  for (const time of times){
			  var timeEntry = largeHistoryDataStructure[time];
		      historyProductionValues.push(timeEntry["production"]);
			  historyVerbrauchValues.push(timeEntry["consumption"]);
			  historyImportValues.push(timeEntry["purchased"]);
			  historyVerwendetenPVStromValues.push(timeEntry["selfconsumption"]);
			  historyExportiertenPVStromValues.push(timeEntry["feedin"]);
		  }
		  
		  const data = {
			labels: times, /*historyProductionLabels, */
			datasets: [{
			  label: 'PV Produktion',
			  backgroundColor: 'rgb(144, 238, 144)',
			  borderColor: 'rgb(0, 255, 0)',
			  data: historyProductionValues,
			  fill: 'none',
			},{
			  label: 'Verbrauch gesamt',
			  backgroundColor: 'rgb(255, 255, 224)',
			  borderColor: 'rgb(255, 255, 0)',
			  data: historyVerbrauchValues,
			  fill: 'none',
			},{
			  label: 'import vom Netz',
			  backgroundColor: 'rgb(205, 92, 92)',
			  borderColor: 'rgb(255, 0, 0)',
			  data: historyImportValues,
			  fill: 'none',
			},{
			  label: 'Verbrauchten PV Strom',
			  backgroundColor: 'rgb(64,224,208)',
			  borderColor: 'rgb(0,206,209)',
			  data: historyVerwendetenPVStromValues,
			  fill: 'none',
			},{
			  label: 'Exportierten PV Strom',
			  backgroundColor: 'rgb(173,216,230)',
			  borderColor: 'rgb(0, 0, 255)',
			  data: historyExportiertenPVStromValues,
			  fill: 'none',
			}]
		  };

		  const config = {
			type: 'line',
			data: data,
			options : {
				maintainAspectRatio: false,
				animation: {
					duration: false,
				}
			}
		  };
		
		if (chartLargeHistory != null) {
			chartLargeHistory.destroy();
		}
		
		chartLargeHistory = new Chart(document.getElementById('chartLargeHistoryCanvas').getContext('2d'), config);
		document.getElementById('largeHistoryInfoDiv').innerHTML = "Tages History - Einheit = [" + powerUnitPowerDetails + "] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Letztes Update: " + historyLastTimeUpdateView;
	}
	
	function adaptOverview() {
		document.getElementById('pvValueDiv').innerHTML = pvPower + " " + currentPowerUnit;
		document.getElementById('loadValueDiv').innerHTML = loadPower + " " + currentPowerUnit;
		document.getElementById('gridValueDiv').innerHTML = gridPowerGlobal + " " + currentPowerUnit;
		
		if (pvStatus == "Active") {
			document.getElementById('ActivePVImg').style.display = "inline";
			document.getElementById('InactivePV').style.display = "none";
			document.getElementById('pvArrowImg').style.display = "inline";
		} else {
			document.getElementById('ActivePVImg').style.display = "none";
			document.getElementById('InactivePV').style.display = "inline";
			document.getElementById('pvArrowImg').style.display = "none";
		}
		
		if (gridStatus == "Active") {
			document.getElementById('ActiveNetImg').style.display = "inline";
			document.getElementById('InactiveNetImg').style.display = "none";
			
			if (overage()) {
				document.getElementById('gridArrowLeftImg').style.display = "none";
				document.getElementById('gridArrowRightImg').style.display = "inline";
			} else {
				document.getElementById('gridArrowLeftImg').style.display = "inline";
				document.getElementById('gridArrowRightImg').style.display = "none";
			}
			
			
		} else {
			document.getElementById('ActiveNetImg').style.display = "none";
			document.getElementById('InactiveNetImg').style.display = "inline";
			document.getElementById('gridArrowLeftImg').style.display = "none";
			document.getElementById('gridArrowRightImg').style.display = "none";
		}
		
		if (loadStatus == "Active") {
			document.getElementById('ProductionActiveImg').style.display = "inline";
			document.getElementById('ProductionInActiveImg').style.display = "none";
		} else {
			document.getElementById('ProductionActiveImg').style.display = "none";
			document.getElementById('ProductionInActiveImg').style.display = "inline";
			document.getElementById('pvArrowImg').style.display = "none";
			document.getElementById('gridArrowLeftImg').style.display = "none";
			document.getElementById('gridArrowRightImg').style.display = "none";
		}
	}
	
	function isTimeOK() {
		let startTime = '05:49:00';
		let endTime = '20:00:00';

		let currentDate = new Date()   

		startDate = new Date(currentDate.getTime());
		startDate.setHours(startTime.split(":")[0]);
		startDate.setMinutes(startTime.split(":")[1]);
		startDate.setSeconds(startTime.split(":")[2]);

		endDate = new Date(currentDate.getTime());
		endDate.setHours(endTime.split(":")[0]);
		endDate.setMinutes(endTime.split(":")[1]);
		endDate.setSeconds(endTime.split(":")[2]);

		var valid = startDate < currentDate && endDate > currentDate;
		
		return valid;
	}

    function getYears(date) {
        return date.getFullYear();
    }

    function getMonths(date) {
        return (((date.getMonth()+1) < 10) ? "0" : "") + (date.getMonth()+1);
    }

    function getMonthName(date) {
        return date.toLocaleString('default', { month: 'long' });
    }

    function getDays(date) {
        return ((date.getDate() < 10) ? "0" : "") + date.getDate();
    }

    function getHours(date) {
        return ((date.getHours() < 10) ? "0" : "") + date.getHours();
    }

    function getMinutes(date) {
        return ((date.getMinutes() < 10) ? "0" : "") + date.getMinutes();
    }

    function getSeconds(date) {
        return ((date.getSeconds() < 10) ? "0" : "") + date.getSeconds();
    }
	
</script>

</body>
<html>