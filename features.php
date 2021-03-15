<?php
	//===== HEADER
	include_once(__DIR__.'/_headerfunc.php');
	echo getHeader("Features von Wuda CarTrade im Überblick", "Hier erfahren Sie mehr über die Funktionen von Wuda CarTrade.", "./img/bgdark.jpg");
?>

    <!-- Text -->
		<div class="section print-page">
			<div class="container">
				<table class="feature-table">
					<tr><th>Name</th><th>Status</th></tr>
					<?php
						$ftText = file_get_contents(__DIR__.'/README.md');
						$featLines = explode("\n", $ftText);
						foreach ($featLines as $line) {
							if (strpos($line, "-") !== false) {
								$parts = explode('-', $line, 2);
								$feaTextRaw = substr($parts[1], 5);
								$feaStatus = substr($parts[1], 1, 4);
								// Class
								$feaClass = "";
								$feaClass = $feaStatus == "📗" ? "green" : $feaClass;
								$feaClass = $feaStatus == "📒" ? "yellow" : $feaClass;
								$feaClass = $feaStatus == "📙" ? "red" : $feaClass;
								// Tabs
								$layer = strlen($parts[0]);
								echo "<tr class=\"".$feaClass." lighten-3\"><td><p style=\"margin:0;padding:0;margin-left:".$layer."em;".($layer == 0 ? "font-weight:bold;" : "")."\">$feaTextRaw</p></td><td>".$feaStatus."</td></tr>";
							}
						}
					?>
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