<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT'].$lang);

$faucet = "";
$mail = "";
$Faucet_url = "";

$faucet = $_POST['nombre'];
$mail = $_POST['mail'];
$Faucet_url = $_POST['url']; 
$fecha = strftime( "%d-%m-%Y %H:%M:%S", time() ); //Determina la fecha y hora del envio

$cant_archivos = count(glob("reportes/{*.html}",GLOB_BRACE))+1;
$sig_faucet = $cant_archivos+1;
$fp = fopen("plantilla.html", "w+") or die ('No se pudo abrir el archivo'); 

fwrite($fp, '
    <html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/default.css">

    <div class="container"> 
    <table class="table table-bordered table-striped"> <td>'.$fecha .'<br>
    	<font size="5"><font color="red">Solicitud recibida</font>  <br>
		<font size="4"><font color="000000"><b>'.$nom_fau.'</b> ' .$faucet.' <br>
		<b>URL: </b>' .$Faucet_url. '<br> <b> Enviado por: </b>' .$mail . ' &nbsp; &nbsp; 
    <a href="'.$Faucet_url .'" target="_blank">Visitar</a> </font> 
    </td></table></div></br>');

    	$nombreActual= "plantilla.html";
  		$nombreNuevo = "reportes/" . $cant_archivos .".html";

if (file_exists($nombreActual))
    {
     rename($nombreActual, $nombreNuevo);

     echo  '<html><head>
            <title>'.$site_title.'</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            </head>
            <body>
            <div class="container"> 
            <h1>'.$envio_ok_.'</h1>
            </div>
            </body>
            </html>
            ';
}
   else
    {
     echo $envio_fail;
    }




?>