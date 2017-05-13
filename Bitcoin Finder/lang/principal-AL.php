<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/sitios/config.php');
include_once($_SERVER['DOCUMENT_ROOT'].$lang);

echo'
<!DOCTYPE html>
<html>
      <head>
<link rel="stylesheet" href="'.$url_base.'css/default.css">
<link rel="stylesheet" href="'. $url_base .'css/bootstrap.css">
<script type="text/javascript">
window.onload = function() {
  document.onmousemove = function(e) {
    var x = -(e.clientX/10);
    var y = -(e.clientY/10);
    this.body.style.backgroundPosition = x + "px " + y + "px";
  };
};
</script>
<style>
body {background:url('.$background_img.');
	  color:white; }
#texto {margin-left:100px;}
/* #ads {float:left; margin-top:50px; width:210px;} */

input {overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;}

</style>

      <!-- SCRIPTS PARA DONACIONES EN COINBASE -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://blockchain.info/Resources/wallet/pay-now-button.js"></script>

</head>
<body>

<table border="0" cellpadding="2" cellspacing="1" style="height:768px; width:auto">
	<tbody>
		<tr>
			<td colspan="2" style="text-align: center;">
			<h1> Willkommen bei Bitcoin Finder </h1><br>
			<h3> Wo Sie Bitcoins schnell und einfach mit unserem 3 Inserate verdienen </h3>
			'.$html_ads1.'
			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads3.'</td> <!-- AD LATERAL N° 1 -->

			<td colspan="1" rowspan="6" style="vertical-align: top;text-align: left;"> <!-- CELDA PRINCIPAL -->
			<h2> Das ist BTCF? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Bitcoin Finder auf einem robusten, aber leistungsstarke Rotator / Liste der Bitcoins Wasserhahn.
Wählen Sie Ihre Art von Portfolio in der Seitenleiste und klicken Sie auf Ihre Art von <i> Catera </ i>
für die Liste der verfügbaren Armaturen Bereitstellung. Durch Anlage mit der Maus über einen von ihnen, wird ein Menü automatisch bereitgestellt
gegeben alle Details mit denen Sie wählen können, die für Sie am bequemsten sind. </ p>
			<br>

			<h2> BTCF4 Gruppen von den anderen Websites? </h2>
			<p style="text-align: justify; margin-left: 40px;margin-right: 40px;">
BTFC4 hat viele Wasserhähne, die automatisch überprüft, um sicherzustellen, dass Benutzer keine Zeit
Armaturen in Websites, die nicht über Fonds oder neben Timer, wenn Sie wieder weg zeigen,
besuchen jedes der Wasserhahn. Ein weiteres Merkmal ist, dass Sie aus den Listen Armaturen, die nicht von Ihrem Interesse und einer wirksamen Beschwerdeverfahrens, sind zu entfernen,
so dass unsere Nutzer können Fehler in einem gewissen Wasserhahn zu melden.</p><br>

			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			<font size="4">Leitfaden für die Details der einzelnen faucet: </font> <br>			
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reco_ico.png"> Faucet empfohlen <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> Belohnen minimal (in satoshis) <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> Wartezeit zwischen Anspruch Belohnungen <br>
			<img height="20" width="20" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> Faucet ist bereit, auf die zugegriffen werden kann <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png"> entfernen Faucet. Wenn ein faucet ist nicht nach Ihren Wünschen, können Sie es aus der Liste entfernen <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png"> melden Faucet. Verwenden Sie diese Funktion bei Feststellung einer Schuld </p><br>

			<h2> Welches ist ein Faucet? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Armaturen sind die Seiten, die Mikro-Zahlungen an diejenigen, die sie von Zeit zu Zeit kommen, zu machen;
in Abhängigkeit von der Wasserhahn
dieses Mal in ein paar Minuten, Stunden oder sogar einen Tag führen. Es gibt sie als Anreiz für die Förderung
neue Benutzer von BTC und ergeben im allgemeinen sehr kleinen Mengen, so dass Sie zu sammeln, um zu erreichen
mindestens Rückzug und damit erreichen das Geld verdient unsere Bitcoin Geldbörse, die das Konto
wo wir unser Geld zu speichern. </p><br>


			<h2> Als Start in Bitcoins zu verdienen? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Der erste Schritt ist, um eine virtuelle Brieftasche, um Ihre Bitcoins zu speichern erstellt haben, können <br> einfach kostenlos an erstellen
<a href = "http://xapo.com/r/5PDKS3W" target="_blank"> <b> <b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a>
Und nehmen Sie Ihre Brieftasche, machen Sie einen Klick auf eine der Armaturen Angebot, die Sie auf der linken Seite haben,
Beim Laden der Wasserhahn beendet ist, finden Sie die Textfeld "Ihre Adresse" oder "Geben Sie Ihre Bitcoin-Adresse" und geben Sie die Adresse Ihres Portfolios szmtag
Schließlich omplete das Captcha ein und klicken Sie auf die Schaltfläche "Belohnung", um die satoshis erreichen. (Falls Sie
zu finden, klicken Sie erneut auf das Textfeld "Ihre Adresse" und drücken Sie die Enter / Eingabe-Taste). Jetzt können Sie Ihren Geldbeutel geben
<a href = "https://account.xapo.com/" target="_blank"> <b> <span class="label label-xapo"> <span style="color:red">X</span>apo</span> </ b> </a>
<a href = "https://faucetbox.com/en/check" target="_blank"> <b> <span class="label label-xapo"> Faucetbox </ b> </a>
<a href = "http://epay.info/login/" target="_blank"> <b> <span class="label label-xapo"> ePay </ b>  </a> und
sehen, wie es Ihre Gewinne zu erhöhen.</p><br>

			'.$html_ads2.'

			<div style="background-color: rgba(60, 60, 60, 0.5); -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"><br>
			<table border="0" cellpadding="1" cellspacing="1" style="height:150px; width:700px">
				<tbody>
					<tr>
						<td style="vertical-align: top;">
						<p style="text-align: justify; margin-left: 40px;"><strong><span style="font-size:24px">Sie sind der Besitzer einer faucet?</span></strong></p>

						<p style="text-align: justify; margin-left: 40px;">Füllen Sie die Formulardaten auf der rechten Seite befindet</p>
						para que forme parte de BTCF4.</p>

						</td>
						<td>

						<form action="sitios/add_faucet.php" method="post" name="newfaucet" target="_self">

						<p><input maxlength="20" name="nombre" required="required" size="25" type="text" placeholder="Name faucet" /></p>

						<p><input maxlength="50" name="url" required="required" size="25" type="text" placeholder="URL" /></p>

						<p><input maxlength="50" name="mail" required="required" size="25" type="email" placeholder="E-Mail" /></p>

						<p <p style="text-align: right; margin-right: 16px;"><input class="btn btn-primary" name="enviar" type="submit" size="15" value="Senden" /></p><br><br>

						</form>

						</td>
					</tr>
				</tbody>
			</table> </div>

			 <br>

			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;"> '.$html_ads5.' </td> <!-- AD LATERAL N° 3 -->
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads4.'</td> <!-- AD LATERAL N° 2 -->
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;"> <br> </td> <!-- celda vacia LATERAL -->
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;"></td> <!-- celda vacia LATERAL -->
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;"> <br> </td> <!-- celda vacia LATERAL -->
		</tr>
		<tr>
			<td colspan="2">

							<div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
							     data-address="3JuwvthEVgkBAEsLXysWr5qCvJRMU8wLVd"
							     data-shared="false">
							    <div class="blockchain stage-begin">
							        <img src="https://blockchain.info/Resources/buttons/donate_64.png"/>
							    </div>
							    <div class="blockchain stage-loading" style="text-align:center">
							        <img src="https://blockchain.info/Resources/loading-large.gif"/>
							    </div>
							    <div class="blockchain stage-ready">
							         <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
							         <p align="center" class="qr-code"></p>
							    </div>
							    <div class="blockchain stage-paid">
							         Donation of <b>[[value]] BTC</b> Received. Thank You.
							    </div>
							    <div class="blockchain stage-error">
							        <font color="red">[[error]]</font>
							    </div>
							</div>

			</td>
		</tr>
	</tbody>
</table>




</body>
</html>';
?>