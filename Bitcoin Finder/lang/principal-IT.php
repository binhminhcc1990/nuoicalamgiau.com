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
			<h1> Benvenuti a Bitcoin Finder </h1><br>
			<h3> Dove si può guadagnare bitcoin rapidamente e facilmente con i nostri 3 annunci </h3>
			'.$html_ads1.'
			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads3.'</td> <!-- AD LATERAL N° 1 -->

			<td colspan="1" rowspan="6" style="vertical-align: top;text-align: left;"> <!-- CELDA PRINCIPAL -->
			<h2> Questo è BTCF? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">

Bitcoin Finder su un robusto ma potente Rotator / Elenco dei bitcoin faucet. Scegli il tuo tipo di portafoglio nella barra laterale e fare clic sul suo tipo <i>portafoglio</i> 
			per la lista di implementazione rubinetti disponibili. Posizionando il puntatore del mouse su uno di essi automaticamente a un determinato ogni dettaglio con il 
			quale è possibile scegliere quali sono i più adatti per voi viene visualizzato il menu.</p>

			<br>

			<h2> BTCF4 serie di altri siti? </h2>
			<p style="text-align: justify; margin-left: 40px;margin-right: 40px;">
BTFC4 ha un sacco di rubinetti che vengono controllati automaticamente per garantire che gli utenti non perdono tempo
in rubinetti siti che non hanno i fondi o, in aggiunta a timer che indicano quando sei andato di nuovo
visitare ogni del faucet. Un altra caratteristica è che è possibile rimuovere dalla lista rubinetti che non sono di vostro interesse e un efficace sistema di reclami,
in modo che i nostri utenti possono segnalare errori in qualche faucet.</p><br>

			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			<font size="4">Guida per i dettagli di ogni faucet: </font> <br>			
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reco_ico.png"> Faucet raccomandato <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> Ricompensa minima (in satoshis) <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> Tempo tra i premi di reclamo attesa <br>
			<img height="20" width="20" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> faucet è pronta all accesso <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png"> rimuovere Faucet. Se il faucet non è di vostro gradimento, è possibile rimuovere dalla lista<br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png"> rapporto Faucet. Utilizzare questa funzione in caso di ritrovamento di colpa </p><br>

			<h2> Che è un Faucet? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;"> 
Rubinetti sono le pagine che compongono le micro-pagamenti a coloro che vengono a loro di volta in volta;
a seconda del rubinetto
questa volta può comportare alcuni minuti, ore o anche un giorno. Essi esistono come un incentivo per incoraggiare
i nuovi utilizzatori di BTC, e generalmente danno molto piccole quantità in modo da poter raccogliere per raggiungere
un prelievo minimo, e conseguire così spendere i soldi guadagnati il nostro portafoglio Bitcoin, che è laccount
dove conserviamo i nostri soldi.
			</p><br>


			<h2> Per iniziare a guadagnare bitcoin? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Il primo passo è quello di creare un portafoglio virtuale per memorizzare i bitcoin,  <br>è possibile creare uno gratuitamente allindirizzo
			<a href="http://xapo.com/r/5PDKS3W" target="_blank"><b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a> <br>			
			E prendendo il portafoglio, fare un clic su uno qualsiasi dei rubinetti lista che avete alla vostra sinistra,
Una volta terminato il caricamento del rubinetto, trovare il campo di testo "Your address:" ó "Enter your Bitcoin address" e inserire lindirizzo del vostro portafoglio<br>
			Infine, completa il captcha e fare clic sul pulsante "Reward" per rivendicare i satoshis. (Se lo trovate, cliccate di nuovo sul campo di testo
			 "Your address:"e premete Enter). Ora è possibile inserire il vostro portafoglio 
			<a href="https://account.xapo.com/" target="_blank"><b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a>
			<a href="https://faucetbox.com/en/check" target="_blank"><b><span class="label label-xapo">Faucetbox</b></a>
			<a href="http://epay.info/login/" target="_blank"><b><span class="label label-xapo">ePay</b></a> e vedere come i profitti sono in aumento.</p><br>

			'.$html_ads2.'

			<div style="background-color: rgba(60, 60, 60, 0.5); -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"><br>
			<table border="0" cellpadding="1" cellspacing="1" style="height:150px; width:700px">
				<tbody>
					<tr>
						<td style="vertical-align: top;">
						<p style="text-align: justify; margin-left: 40px;"><strong><span style="font-size:24px">Tu sei il proprietario di un faucet?</span></strong></p>

						<p style="text-align: justify; margin-left: 40px;">Completare i dati del modulo si trovano sulla vostra destra</p>
						di far parte di BTCF4.</p>

						</td>
						<td>

						<form action="sitios/add_faucet.php" method="post" name="newfaucet" target="_self">

						<p><input maxlength="20" name="nombre" required="required" size="25" type="text" placeholder="Nome del faucet" /></p>

						<p><input maxlength="50" name="url" required="required" size="25" type="text" placeholder="URL" /></p>

						<p><input maxlength="50" name="mail" required="required" size="25" type="email" placeholder="E-Mail" /></p>

						<p <p style="text-align: right; margin-right: 16px;"><input class="btn btn-primary" name="enviar" type="submit" size="15" value="inviare" /></p><br><br>

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