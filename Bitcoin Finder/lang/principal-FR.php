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
			<h1> Bienvenue à Bitcoin Finder </h1><br>
			<h3> Où vous pouvez gagner bitcoins rapidement et facilement avec nos 3 annonces </h3>
			'.$html_ads1.'
			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads3.'</td> <!-- AD LATERAL N° 1 -->

			<td colspan="1" rowspan="6" style="vertical-align: top;text-align: left;"> <!-- CELDA PRINCIPAL -->
			<h2> Voilà BTCF? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
Bitcoin Finder sur un robuste mais puissant Rotator / Liste des bitcoins robinet.
Choisissez votre type de portefeuille dans la barre latérale et cliquez sur votre type <i>portefeuille</i> 
pour la liste des robinets disponibles déploiement. En posant le pointeur de la souris sur lun deux, un menu est automatiquement déployé
étant donné tous les détails de ce qui vous permet de choisir celles qui sont le plus commode pour vous.</p>

			<br>

			<h2> Ensembles BTCF4 des autres sites? </h2>
			<p style="text-align: justify; margin-left: 40px;margin-right: 40px;">
			BTFC4 a beaucoup de robinets qui sont automatiquement vérifié pour sassurer que les utilisateurs ne perdent pas de temps
dans les robinets des sites qui ne dispose pas de fonds ou, en plus de minuteries qui indiquent quand vous êtes allé à nouveau
visiter chacun de robinet. Une autre caractéristique est que vous pouvez supprimer de la liste des robinets qui ne sont pas de votre intérêt et un système efficace de plaintes,
afin que nos utilisateurs puissent signaler des erreurs dans certains robinet.</p><br>

			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			<font size="4">Guide pour les détails de chaque faucet: </font> <br>			
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reco_ico.png"> Faucet recommandé <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> Récompensez minimale (en satoshis)<br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> Le temps dattente entre les revendications <br>
			<img height="20" width="20" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> faucet prêt à être consulté <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png"> supprimer Faucet. Si le robinet est pas à votre goût, vous pouvez la retirer de la liste <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png"> rapport Faucet. Utilisez cette fonction en cas de trouver toute faute </p><br>

			<h2> Qui est un Faucet? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Robinets sont les pages qui font des micro-paiements à ceux qui viennent à eux de temps à autre; Robinet selon la
ce temps peut conduire à quelques minutes, heures ou même un jour. Ils existent comme une incitation pour encourager
les nouveaux utilisateurs de la CTB, et généralement donnent de très petites quantités de sorte que vous pouvez recueillir pour atteindre
un retrait minimal, et de réaliser ainsi dépenser largent gagné notre portefeuille Bitcoin, qui est le compte
où nous stockons notre argent. </p><br>


			<h2> Comme point de départ pour gagner bitcoins? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			La première étape est de créer un portefeuille virtuel pour stocker vos bitcoins, <br> pouvez en créer un gratuitement sur
			<a href="http://xapo.com/r/5PDKS3W" target="_blank"><b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a> <br>			
			Et de prendre votre portefeuille, faire un clic sur lun des robinets liste que vous avez sur votre gauche,
Lorsque vous avez terminé le chargement du robinet, trouver le champ de texte "Your address:" ó "Enter your Bitcoin address"et entrez ladresse de votre portefeuille <br>
Enfin, emplissez le captcha et cliquez sur le bouton "Reward" pour réclamer les satoshis. (Dans le cas où vous
trouver, sil vous plaît cliquez à nouveau sur le champ de texte "Your address:"et appuyez sur la touche Entrée / Entrée). Maintenant, vous pouvez entrer votre portefeuille
			<a href="https://account.xapo.com/" target="_blank"><b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a>
			<a href="https://faucetbox.com/en/check" target="_blank"><b><span class="label label-xapo">Faucetbox</b></a>
			<a href="http://epay.info/login/" target="_blank"><b><span class="label label-xapo">ePay</b></a> et regardez vos profits augmentent.</p><br>

			'.$html_ads2.'

			<div style="background-color: rgba(60, 60, 60, 0.5); -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"><br>
			<table border="0" cellpadding="1" cellspacing="1" style="height:150px; width:700px">
				<tbody>
					<tr>
						<td style="vertical-align: top;">
						<p style="text-align: justify; margin-left: 40px;"><strong><span style="font-size:24px">Vous êtes le propriétaire dun faucet?</span></strong></p>

						<p style="text-align: justify; margin-left: 40px;">Remplissez les données du formulaire situé sur votre droite </p> de faire partie de BTCF4.</p>

						</td>
						<td>

						<form action="sitios/add_faucet.php" method="post" name="newfaucet" target="_self">

						<p><input maxlength="20" name="nombre" required="required" size="25" type="text" placeholder="Nom du faucet" /></p>

						<p><input maxlength="50" name="url" required="required" size="25" type="text" placeholder="URL" /></p>

						<p><input maxlength="50" name="mail" required="required" size="25" type="email" placeholder="E-Mail" /></p>

						<p <p style="text-align: right; margin-right: 16px;"><input class="btn btn-primary" name="enviar" type="submit" size="15" value="Envoyer" /></p><br><br>

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