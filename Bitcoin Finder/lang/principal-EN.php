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
			<h1> Welcome to Bitcoin Finder </h1><br>
			<h3> Where you can earn bitcoins quickly and easily with our 3 listings/rotators </h3>
			'.$html_ads1.'
			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads3.'</td> <!-- AD LATERAL N° 1 -->

			<td colspan="1" rowspan="6" style="vertical-align: top;text-align: left;"> <!-- CELDA PRINCIPAL -->
			<h2> What is BTCF? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
Bitcoin Finder on a robust but powerful Rotator / List of bitcoins faucet.
Choose your type of wallet in the sidebar and click on your type of <i> Catera </ i>
for the list of available faucets deployment. By resting the pointer
Mouse over one of them, a menu will be displayed automatically
given all the details of it with which you can choose which
They are the most convenient for you. </ p>

			<br>

			<h2> BTCF4 sets of the other sites? </h2>
			<p style="text-align: justify; margin-left: 40px;margin-right: 40px;">
BTFC4 has a lot of faucets that are automatically checked to ensure that users do not waste time
in faucets sites that do not have funds or, in addition to timers that indicate when you are gone again
visit each of the faucet. Another feature is that you can remove from the list faucets that are not of your interest and an effective complaints system,
so that our users can report errors in some faucet.</p><br>

			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			<font size="4">Guía para conocer los detalles de cada faucet: </font> <br>			
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reco_ico.png"> Recommended Faucet <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> Reward minimal (in satoshis) <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> Waiting time between claim rewards <br>
			<img height="20" width="20" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> The faucet is ready to be accessed <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png"> Remove Faucet. If the faucet is not to your liking, you can remove it from the list <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png">Faucet report. Use this function in case of finding any fault </p><br>

			<h2> What is a Faucet? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
Faucets are the pages that make micro-payments to those who come to them from time to time;
depending on the Faucet this time can result in a few minutes, hours or even a day. They exist as an incentive to encourage
new users of BTC, and generally give very small amounts so that you can gather to reach
a minimum withdrawal, and thus achieve spend the money earned our Bitcoin wallet, which is the account
where we store our money. </p><br>


			<h2> As a start to earn bitcoins? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
The first step is to create a virtual wallet to store your bitcoins, <br> can create one for free at
<a href="http://xapo.com/r/5PDKS3W" target="_blank"> <b> <span class = "label label-xapo"> <span style = "color: red">X</span>apo</span> </b> </a> 
And taking your wallet, make a click on any of the faucets listing that you have on your left,
When finished loading the faucet, find the text field "Your address" or "Enter your Bitcoin address" and enter the address of your wallet. 
Finally, omplete the captcha and click on the "Reward" button to claim the satoshis. (In case you
find, please click again on the text field "Your address" and press the Enter key). Now you can enter your wallet
<a href="https://account.xapo.com/" target="_blank"> <b> <span class = "label label-xapo"> <span style = "color: red"> X</span>apo</span> </b> </a>
<a href="https://faucetbox.com/en/check" target="_blank"> <b> <span class = "label label-xapo"> Faucetbox </b> </a>
<a href="http://epay.info/login/" target="_blank"> <b> <span class = "label label-xapo"> ePay </b>  </a> and
see how it will increase your profits.</p><br>

			'.$html_ads2.'

			<div style="background-color: rgba(60, 60, 60, 0.5); -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"><br>
			<table border="0" cellpadding="1" cellspacing="1" style="height:150px; width:700px">
				<tbody>
					<tr>
						<td style="vertical-align: top;">
						<p style="text-align: justify; margin-left: 40px;"><strong><span style="font-size:24px">You are the owner of a faucet?</span></strong></p>

						<p style="text-align: justify; margin-left: 40px;">Complete the form data located on your right</p>
						to be part of BTCF4.</p>

						</td>
						<td>

						<form action="sitios/add_faucet.php" method="post" name="newfaucet" target="_self">

						<p><input maxlength="20" name="nombre" required="required" size="25" type="text" placeholder="Faucet name" /></p>

						<p><input maxlength="50" name="url" required="required" size="25" type="text" placeholder="URL" /></p>

						<p><input maxlength="50" name="mail" required="required" size="25" type="email" placeholder="Your E-Mail" /></p>

						<p <p style="text-align: right; margin-right: 16px;"><input class="btn btn-primary" name="enviar" type="submit" size="15" value="Submit" /></p><br><br>

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