<?php
	//===== HEADER
	include_once(__DIR__.'/_headerfunc.php');
	echo getHeader(
		"Einkaufsportal für Autohändler | Wuda CarTrade",
		"Mit dem integrierten Marktplatz von Wuda CarTrade finden Sie die besten Fahrzeug-Angebote aus ganz Europa",
		"./img/bgdark.jpg");
?>
	<!-- Article Image -->
	<div class="article-image">
		<img src="https://cartrade.wuda.io/img/bgdark.jpg" alt="Dunkles Bild eines modernen BMWs der ausgestellt wird"/>
	</div>

		<!-- Text-Image -->
		<div class="print-page">
			<div class="container">
				<div class="row">
					<div class="col s12 m10 offset-m1 l8 offset-l2">
						<h1 class="section">Das Einkaufsportal für Autohändler</h1>
          </div>
          <div class="col s12 m10 offset-m1 l8 offset-l2">
            <p class="flow-text">
							Wuda CarTrade hat jetzt das Einkaufsportal für Autohändler als Feature dabei. Damit sehen Sie als Händler verschiedene Angebote
							die für Sie in Frage kommen - und das Europa weit. Damit lohnt sich die Suche für Sie umso mehr, da sie nicht auf länderspezifischen
							Plattformen umständlich suchen müssen oder gar die Angebote übersetzen müssen. Filtern Sie einfach die besten Angebote raus.
						</p>
						<h2>Insider-Tipp: Warum Sie Wuda CarTrade nutzen sollten</h2>
						<p>
							Mit Wuda CarTrade, der besten Autohaus Software, steigern Sie ihren Erfolg mit ausgefeilter Experten-Technologie, die
							innerhalb von Minuten einsatzbereit ist und sich ihren individuellen Wünschen anpassen lässt.
							Profitieren Sie noch heute von CarTrade und sichern Sie sich die Vorteile der smarten Lösung für Autohäuser, Gebrauchtwagenhändler und Importeure.
						</p>
          </div>
				</div>
			</div>
    </div>
    
		<!-- Social Sharing -->
		<div  class="section grey lighten-3 share-social">
      <form class="center-align no-print">
				<p>Diesen Artikel teilen via</p>
				<p>
				<a href="https://api.whatsapp.com/send?text=<?php echo $gTitle."*".$gURL; ?>" target="_blank">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
					<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
				</svg>
				</a>
				<a href="http://www.facebook.com/share.php?u=<?php echo $gURL; ?>&t=<?php echo $gTitle; ?>" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
					</svg>
				</a>
				<a href="http://twitter.com/share?url=<?php echo $gURL; ?>" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
						<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
					</svg>
				</a>
				<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $gURL; ?>" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212h-2.4s.03-6.547 0-7.225h2.4v1.023a5.54 5.54 0 0 0-.016.025h.016v-.025c.32-.493.89-1.193 2.165-1.193 1.58 0 2.764 1.033 2.764 3.252v4.143h-2.4V9.529c0-.972-.348-1.634-1.217-1.634-.664 0-1.059.447-1.233.878-.063.154-.079.37-.079.586v4.035z"/>
					</svg>
				</a>
				<a href="mailto:?subject=<?php echo $gTitle; ?>&body=<?php echo $gURL; ?>" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
						<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
					</svg>
				</a>
				</p>
			</form>
		</div>

    <!-- Text -->
		<div class="section print-page">
			<div class="container">
				<div class="row">
          <div class="col s12 m10 offset-m1 l8 offset-l2">
						<h3>Einkauf für Autohändler mit System</h3>
						<p>B2B-Zugangsoptionen für Händler haben einen Vertrauensimpuls zum Kauf von Einkaufswagen.
						Der Markt hat sich in diesem Segment jedoch diversifiziert, so dass sich für viele Einzelhändler die Frage gestellt haben,
						ob sie ihr Geschäftsmodell am besten im neuen Portal umsetzen können und ob ein Plattformwechsel ratsam ist,
						um die Einkäufe zu steigern.
						<br>
						<br>
						Mit den Hinweisen und Tipps von Wuda CarTrade wollen wir Auto-Händlern helfen,
						den Ankauf von Gebrauchtwagen optimal abzuwickeln und so eine bessere Rendite zu erzielen.
						</p>
          </div>
				</div>
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