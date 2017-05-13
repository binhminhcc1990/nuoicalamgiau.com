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
			<h1> Bienvenido a Bitcoin Finder </h1><br>
			<h3> En donde podrás ganar bitcoins de forma rápida y sencilla con nuestros 3 listados </h3>
			'.$html_ads1.'
			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads3.'</td> <!-- AD LATERAL N° 1 -->

			<td colspan="1" rowspan="6" style="vertical-align: top;text-align: left;"> <!-- CELDA PRINCIPAL -->
			<h2> Que es BTCF? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Bitcoin Finder en un robusto pero potente Rotador/Listado de faucet bitcoins.
			Selecciona tu tipo de cartera en la barra lateral y pulsa sobre tu tipo de <i>catera</i> 
			para que se despliegue el listado de faucets disponibles. Al posar el puntero del mouse sobre una de ellas, automáticamente se desplegara un menú
			indicado todos los detalles de la misma con los cuales podrás elegir cuales son las más convenientes para ti.</p>

			<br>

			<h2> Que diferencia a BTCF4 de los demás sitios? </h2>
			<p style="text-align: justify; margin-left: 40px;margin-right: 40px;">
			BTFC4 cuenta con una gran cantidad de faucets que son comprobadas automáticamente para asegurarle a los usuarios que no perderán tiempo 
			en sitios faucets que no tengan fondos o que fallen, además de contar con temporizadores que te indicarán cuando puedes volver a
			visitar cada una de las faucet. Otra de las características es que puedes remover del listado faucets que no sean de tu interes y un efectivo sistema de denuncias, 
			para que nuestros usuarios puedan reportar errores en alguna faucet.</p><br>

			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			<font size="4">Guía para conocer los detalles de cada faucet: </font> <br>			
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reco_ico.png"> Faucet recomendada <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> Recompensa mínima (en satoshis) <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> Tiempo de espera entre reclamo de recompensas <br>
			<img height="20" width="20" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> La faucet está lista para ser visitada <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png"> Eliminar Faucet. Si una faucet no es de tu agrado, puede removerla del listado <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png"> Reportar Faucet. Utiliza esta función en caso de encontrar alguna falla </p><br>

			<h2> Que es una Faucet? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">Las Faucets son paginas que hacen micro-pagos a quienes entran cada cierto tiempo a ellas; 
			dependiendo de cada Faucet 
			este tiempo puede traducirse en unos minutos, unas horas o incluso un dia. Ellas existen como un incentivo para animar 
			a los nuevos usuarios de BTC, y generalmente dan cantidades muy pequeñas con el fin de que se pueda reunir hasta llegar 
			a una cantidad minima de retiro, y asi lograr pasar el dinero obtenido a nuestra billetera de Bitcoin, que es la cuenta 
			donde almacenamos nuestro dinero. </p><br>


			<h2> Como comienzo a ganar bitcoins? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			El primer paso es el de crear una billetera virtual para guardar tus bitcoins,  <br>puedes crear una gratuitamente en
			<a href="http://xapo.com/r/5PDKS3W" target="_blank"><b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a> <br>			
			Teniendo ya tu cartera, haz un click sobre cualquiera de las faucets del listado que tienes a tu izquierda, 
			cuando termine de cargarse la faucet, busca el campo de texto "Your address:" ó "Enter your Bitcoin address" e ingresa la dirección de tu cartera<br>
			Por último, ompleta el captcha y haz click sobre el botón "Reward" para reclamar los satoshis. (En caso de que lo 
			encuentres, haz nuevamente click en el campo de texto "Your address:" y presiona la tecla Intro / Enter). Ahora ya puedes entrar en tu cartera 
			<a href="https://account.xapo.com/" target="_blank"><b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a>
			<a href="https://faucetbox.com/en/check" target="_blank"><b><span class="label label-xapo">Faucetbox</b></a>
			<a href="http://epay.info/login/" target="_blank"><b><span class="label label-xapo">ePay</b></a> y
			ver como se van incrementando tus ganancias.</p><br>

			'.$html_ads2.'

			<div style="background-color: rgba(60, 60, 60, 0.5); -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"><br>
			<table border="0" cellpadding="1" cellspacing="1" style="height:150px; width:700px">
				<tbody>
					<tr>
						<td style="vertical-align: top;">
						<p style="text-align: justify; margin-left: 40px;"><strong><span style="font-size:24px">Eres propietario de una faucet?</span></strong></p>

						<p style="text-align: justify; margin-left: 40px;">Completa los datos del formulario ubicado a tu derecha</p>
						para que forme parte de BTCF4.</p>

						</td>
						<td>

						<form action="sitios/add_faucet.php" method="post" name="newfaucet" target="_self">

						<p><input maxlength="20" name="nombre" required="required" size="25" type="text" placeholder="Nombre de la faucet" /></p>

						<p><input maxlength="50" name="url" required="required" size="25" type="text" placeholder="Dirección web" /></p>

						<p><input maxlength="50" name="mail" required="required" size="25" type="email" placeholder="E-Mail de contacto" /></p>

						<p <p style="text-align: right; margin-right: 16px;"><input class="btn btn-primary" name="enviar" type="submit" size="15" value="Enviar/Send" /></p><br><br>

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