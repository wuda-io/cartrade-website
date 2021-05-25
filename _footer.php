		<!-- Footer -->
		<footer class="footer no-print">
			<div class="section">
				<div style="color: #aaa;" class="container">
					<div class="row">
						<div class="col s12 m5">
							<p class="footer-title">Weiterführende Links</p>
							<ul class="footer-link-list">
								<li>> <a href="./beste-autohaus-software.php">Die beste Autohaus-Software</a></li>
								<li>> <a href="./nova-bei-differenzbesteuerung.php">NoVA bei Differenzbesteuerung</a></li>
								<li>> <a href="./autohaendler_einkaufsportal.php">Einkaufsportal für Autohändler</a></li>
								<!--<li>> <a href="./fahrzeug-importieren-oesterreich.php">Fahrzeug nach Österreich importieren</a></li>-->
							</ul>
							<p class="footer-title">Funktionen</p>
							<ul class="footer-link-list">
								<li>> Einfache Fahrzeugverwaltung</li>
								<li>> Eingebaute NoVA-Berechnung</li>
								<li>> Zulassungsüberprüfung via FIN</li>
								<li>> Kundendatenbank</li>
								<li>> 1-Klick Kaufvertrag</li>
								<li>> Dokumenten-Management</li>
								<li>> Modular und individuell anpassbar</li>
							</ul>
						</div>
						<div class="col s12 m4">
							<p class="footer-title">Kontakt</p>
							<p class="footer-text-1">
								<a href=".">CarTrade</a> ist ein Produkt von<br>
								Wuda Software<br>
								Jakob-Haringer-Straße 6<br>
								5020 Salzburg<br>
								<br>
								E-Mail: <a href="https://wuda.io/contact-via-mail.php">info@wuda.io</a><br>
								Tel.: +43 664 37 69 013<br>
								<!--<a target="_blank" href="https://www.facebook.com/wudacartrade/">CarTrade auf Facebook</a>-->
							</p>
						</div>
						<div class="col s12 m3 right-align">
							<p class="footer-title">Informationen</p>
							<ul class="footer-link-list">
								<li><a href="./faq.php">Häufig gestellte Fragen (FAQ)</a></li>
								<!--
								<li>FIN abfragen</li>
								<li>NoVA-Rechner</li>
								-->
							</ul>
							<p class="footer-title">Socialmedia</p>
							<ul class="footer-link-list">
								<!--<li><a target="_blank" href="https://www.facebook.com/wudacartrade/">Facebook</a></li>-->
								<li><a target="_blank" href="https://www.instagram.com/wuda.io/">Instagram</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="section grey darken-4">
				<div class="container">
					<div class="footer-subfooter">
						<span>&copy; Copyright by <a href="https://www.wuda.io" target="_blank">Wuda Software</a></span>						
						<span style="float: right;">
							<a style="margin-right: 3em;" href="https://www.wuda.io/impressum.php">Impressum</a>
							<a style="margin-right: 3em;" href="https://www.wuda.io/datenschutz.php">Datenschutz</a>
							<a href="agb.php">AGB</a>
						</span>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</footer>
	</main>
	<!-- Structured Data 
	<script type='application/ld+json'>
		{
			"@context":"http://schema.org",
			"@type":"Review",
			"datePublished":"2020-05-01T20:00",
			"author": {
				"@type":"Person",
				"name":"Daniel Wurzer"
			},
			"publisher": {
				"@type":"Organization",
				"name":"Wuda Software",
				"sameAs":"https://www.wuda.io/"
			},			
			"inLanguage":"de",
			"itemReviewed": {
				"@type":"Product",
				"name": "CarTrade",
				"image": "https://cartrade.wuda.io/img/opengraph-CarTrade.png",
				"description":"Autohandel und Import leicht gemacht",
				"brand": "Wuda",
				"aggregateRating": {
					"@type": "AggregateRating",
					"ratingValue": "5",
					"bestRating": "5",
					"ratingCount": "2"
				}
			}
		}
	</script>
	-->
	<?php
		//----------------------- Google Analytics
		if (in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
			echo "<!-- Google Analytics disabled on Localhost -->\n";
		}
		else {
			echo '
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38777141-6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag(\'js\', new Date());
		gtag(\'config\', \'UA-38777141-6\');
	</script>';
			echo "\n";
		}
	?>
	<!-- JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		M.AutoInit();
		AOS.init();
	</script>
</body>
</html>