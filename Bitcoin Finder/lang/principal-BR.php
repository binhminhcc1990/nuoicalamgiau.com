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
			<h1>Bem-vindo ao Bitcoin Finder 4</h1><br>
			<h3> Onde você pode ganhar bitcoins forma rápida e fácil com os nossos 3 listagem torneiras </h3>
			'.$html_ads1.'
			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads3.'</td> <!-- AD LATERAL N° 1 -->

			<td colspan="1" rowspan="6" style="vertical-align: top;text-align: left;"> <!-- CELDA PRINCIPAL -->
			<h2>Isso é BTCF4?</h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Bitcoin Finder é um robusto, mas poderosa Rotator / Lista de bitcoins torneira.
			Escolha o tipo de portfólio na barra lateral e clique no seu tipo de <i> Catera </ i>
			para a lista de disponíveis implantação torneiras. Colocando o ponteiro do mouse sobre um deles, um menu é automaticamente implantado
			dado todos os detalhes do mesmo com o qual você pode escolher o que é mais conveniente para você.</p>

			<br>

			<h2> Conjuntos BTCF4 dos outros sites? </h2>
			<p style="text-align: justify; margin-left: 40px;margin-right: 40px;">
			BTFC4 tem um monte de torneiras que são automaticamente verificados para garantir que os usuários não perder tempo
			torneiras em sites que não têm fundos ou, para além de temporizadores que indicam quando você vai embora de novo
			visitar cada um dos "torneira". Outra característica é que você pode remover das torneiras da lista que não são de seu interesse e de um sistema de queixas eficaz,
			para que nossos usuários podem reportar erros em uma faucet.</p><br>

			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			<font size="4">Guia para detalhes de cada faucet: </font> <br>			
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reco_ico.png"> Faucet recomendado <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> Recompense mínima (em satoshis) <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> Tempo entre recompensas reivindicação espera<br>
			<img height="20" width="20" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> faucet pronto para ser acessado <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png"> Remover perfil Faucet <br>
			<img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png"> Reportar um erro. </p><br>

			<h2> Que é uma Faucet? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			Os Faucets são páginas que fazem micro-pagamentos para aqueles que vêm a eles de vez em quando;
			dependendo de cada Faucets
			este tempo pode resultar em poucos minutos, horas ou mesmo um dia. Eles existem como um incentivo para encorajar
			novos usuários do BTC, e geralmente dão quantidades muito pequenas de modo que você pode reunir para chegar a
			uma retirada mínima, e, assim, conseguir gastar o dinheiro ganho a nossa carteira Bitcoin, que é a conta
			onde armazenamos o nosso dinheiro. </p><br>


			<h2> Como ponto de partida para ganhar bitcoins? </h2>
			<p style="text-align: justify; margin-left: 40px; margin-right: 40px;">
			O primeiro passo é criar uma carteira virtual para armazenar suas bitcoins, <br> pode criar uma gratuitamente no
			<a href="http://xapo.com/r/5PDKS3W" target="_blank"><b><span class="label label-xapo"><span style="color:red">X</span>apo</span></b></a> <br>	
			E levando sua carteira, fazer um clique em qualquer uma das faucets da listagem que você tem à sua esquerda,
			Quando terminar o carregamento da torneira, encontrar o campo de texto "Your address:" ou "Enter your Bitcoin address" e digite o endereço do seu portfólio <br>
			Finalmente, omplete o captcha e clique no botão "recompensa" para reivindicar os satoshis. (No caso de você
			encontrar, por favor, clique novamente no campo de texto "O seu endereço de" e pressione a tecla Enter / Enter). Agora você pode entrar em sua carteira e
			ver como ele irá aumentar seus lucros.</p><br>

			'.$html_ads2.'

			<div style="background-color: rgba(60, 60, 60, 0.5); -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"><br>
			<table border="0" cellpadding="1" cellspacing="1" style="height:150px; width:700px">
				<tbody>
					<tr>
						<td style="vertical-align: top;">
						<p style="text-align: justify; margin-left: 40px;"><strong><span style="font-size:24px">Você é o proprietário de uma faucet?</span></strong></p>

						<p style="text-align: justify; margin-left: 40px;">
						Completar os dados do formulário localizado à sua direita</p>
						para fazer parte do BTCF4.</p>

						</td>
						<td>

						<form action="sitios/add_faucet.php" method="post" name="newfaucet" target="_self">

						<p><input maxlength="20" name="nombre" required="required" size="25" type="text" placeholder="Nome da faucet" /></p>

						<p><input maxlength="50" name="url" required="required" size="25" type="text" placeholder="endereço web" /></p>

						<p><input maxlength="50" name="mail" required="required" size="25" type="email" placeholder="E-Mail de Contato" /></p>

						<p <p style="text-align: right; margin-right: 16px;"><input class="btn btn-primary" name="enviar" type="submit" size="15" value="mandar" /></p>
						</form>

						</td>
					</tr>
				</tbody>
			</table> </div>

			 <br>

			</td>
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;"> '.$html_ads5.' </td> <!-- celda vacia LATERAL -->
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads4.'</td> <!-- AD LATERAL N° 2 -->
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;"> <br> </td> <!-- celda vacia LATERAL -->
		</tr>
		<tr>
			<td style="width: 230px; text-align: center; vertical-align: middle;">'.$html_ads5.'</td> <!-- AD LATERAL N° 3 -->
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