<?php
	//===== HEADER
	include_once(__DIR__.'/_headerfunc.php');
	echo getHeader("Features von Wuda CarTrade im Überblick", "Hier erfahren Sie mehr über die Funktionen von Wuda CarTrade.", "./img/bgdark.jpg");

	$ftText = file_get_contents(__DIR__.'/README.md');
	$featLines = explode("\n", $ftText);
	$cntStep1 = 0;
	$cntStep2 = 0;
	$cntStep3 = 0;
	$tblRowsHTML = "";
	foreach ($featLines as $line) {
		if (strpos($line, "-") !== false) {
			$parts = explode('-', $line, 2);
			$feaTextRaw = substr($parts[1], 5);
			$feaStatus = substr($parts[1], 1, 4);
			// Class
			$feaClass = "";
			if ($feaStatus == "📗") {
				$feaClass = "green";
				$cntStep1++;
			}
			else if ($feaStatus == "📒") {
				$feaClass = "yellow";
				$cntStep2++;
			}
			else if ($feaStatus == "📙") {
				$feaClass = "red";
				$cntStep3++;
			}							
			// Tabs
			$layer = strlen($parts[0]);
			$tblRowsHTML .= "<tr class=\"".$feaClass." lighten-3\"><td><p style=\"margin:0;padding:0;margin-left:".$layer."em;".($layer == 0 ? "font-weight:bold;" : "")."\">$feaTextRaw</p></td><td>".$feaStatus."</td></tr>";
		}
	}
	$totalCount = $cntStep1 + $cntStep2 + $cntStep3;
?>

    <!-- Text -->
		<div class="section print-page">
			<div class="container">
				<div class="row center-align">
					<div class="col s4 red lighten-3"><h5><?php echo number_format(100 * $cntStep3 / $totalCount, 1)."%"; ?></h5><small>geplant</small><br><br></div>
					<div class="col s4 yellow lighten-3"><h5><?php echo number_format(100 * $cntStep2 / $totalCount, 1)."%"; ?></h5><small>In Arbeit</small><br><br></div>
					<div class="col s4 green lighten-3"><h5><?php echo number_format(100 * $cntStep1 / $totalCount, 1)."%"; ?></h5><small>getestet</small><br><br></div>
				</div>
				<table class="feature-table">
					<tr><th>Name</th><th>Status</th></tr>
					<?php echo $tblRowsHTML; ?>
				</table>
			</div>
    </div>
    
		<!-- CTA -->
		<div class="section grey lighten-3 call-to-action">
			<form class="center-align no-print">
				<h4>Sie wollen Kompetenz und Sicherheit?<br>Jetzt überzeugen und probefahren.</h4>
				<a href="cta.php" class="btn-flat btn-cta" target="_blank" title="Hier klicken um mehr zu erfahren">CarTrade Kostenlos testen</a>
			</form>
		</div>

<?php
	include_once(__DIR__.'/_footer.php');
?>