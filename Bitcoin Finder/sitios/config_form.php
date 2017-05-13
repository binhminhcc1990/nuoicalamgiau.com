<?php
require('_login.php');


// ARCHIVO DE CONFIGURACIONES
include_once('config.php');
include_once('..'.$lang);
// MENU SUPERIOR
include_once('header_panel.php');

echo '

<html>

<head>
<link rel="stylesheet" href="'.$url_base.'css/style.css">
<link rel="stylesheet" href="'.$url_base.'css/default.css">

</head>
<body>
<div class="container">
<table border="0"  cellpadding="3" cellspacing="5" style="height:603px; width:1146px">
	<tbody>
		<tr>
			<td colspan="3" style="background:#F2A138;font-size:20px">'.$gen_conf.'</td>
		</tr>
		<tr>
			<td style="text-align: left;"><p style="margin-left: 40px;">
			<form name="formulario" method="post" action="edit_conf.php">
			<b>'.$idioma_sitio.' </b>  <br>
			<img height="24" width="24" border=0 hspace=1 vspace=1 src="../img/fr.png"> <input type="radio" name="lang" value="/lang/fr.php"> &nbsp; Frances <br> <br>
			<img height="24" width="24" border=0 hspace=1 vspace=1 src="../img/al.png"> <input type="radio" name="lang" value="/lang/al.php"> &nbsp; Alemán  <br> <br>
			<img height="24" width="24" border=0 hspace=1 vspace=1 src="../img/en.png"> <input type="radio" name="lang" value="/lang/en.php"> &nbsp; Ingles  <br> <br>
			<img height="24" width="24" border=0 hspace=1 vspace=1 src="../img/it.png"> <input type="radio" name="lang" value="/lang/it.php"> &nbsp; Italiano<br> <br>
			<img height="24" width="24" border=0 hspace=1 vspace=1 src="../img/es.png"> <input type="radio" name="lang" checked="checked" value="/lang/es.php"> &nbsp;Español <br> <br>
			<img height="24" width="24" border=0 hspace=1 vspace=1 src="../img/br.png"> <input type="radio" name="lang" value="/lang/br.php"> Portugues (Brasil)</p>
			</td>

			<td style="text-align: left;">
				<b>'.$pag_name.'</b> <br>
				<input size="37" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="titulo_sitio" value="'.$title.'" required> <br> <br>

				<b>'.$nombre_sitio.'</b> <br>
				<input size="37" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="web" value="' .$url_base .'" required> <br> <br>

				<b>'.$dir_cartera.' </b> <br> 
				<input size="37" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="url_cart" value="'.$wallet_addr .'"required>
			</td>

			<td style="text-align: left;">
					<b>'.$pag_desc.'</b><br>
					<textarea name="sitio_desc" rows="4" cols="35">'.$descripcion.'</textarea><br><br>

					<b>'.$pag_tags.'</b><br>
					<textarea id="noup" name="tags" rows="4" cols="35">'.$tags_site.'</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="background:#F2A138;font-size:20px">Códigos Html de Ads</td>
		</tr>
		<tr>
			<td><textarea name="public1" rows="12" cols="35">'.$html_ads1.'</textarea></td>
			<td><textarea name="public2" rows="12" cols="35">'.$html_ads2.'</textarea></td>
			<td><textarea name="public3" rows="12" cols="35">'.$html_ads3.'</textarea></td>
		</tr>
		<tr>
			<td><textarea name="public4" rows="12" cols="35">'.$html_ads4.'</textarea></td>
			<td><textarea name="public5" rows="12" cols="35">'.$html_ads5.'</textarea></td>     
			<td><img height="266" width="343" border=0 hspace=1 vspace=1 src="../img/esquema_ads.png"></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"></td>
			<td><input class="btn btn-success pull-right" value="'.$guardar_conf.'" type="submit"/></form></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3" style="background:#F2A138;font-size:20px">Imágenes</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="text-align: left;"><br>
			'.$subir_desc.'<br><form action="carga_archivos.php" method="post" enctype="multipart/form-data">
			<input accept="image/png|image/ico" style="border-style:solid; border-color:#FF8000; border-width: 1px;" type="file" name="nombre_archivo_cliente" required/>
			</td>
			<td><br><input class="btn btn-success pull-right" type="submit" name="enviar" value="'.$subir_img.'" /> </form> <br><br></td>
		</tr>
	</tbody>
</table>

</div>

</body>
</html>


';

?>