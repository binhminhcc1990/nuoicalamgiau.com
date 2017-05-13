<?php
require('_login.php');

// ARCHIVO DE CONFIGURACIONES
include_once('config.php');

// MENU SUPERIOR
include_once('header_panel.php');

$url_web = $_POST['web'];
$idioma = $_POST['lang'];
$nombre_cartera = $_POST['url_cart'];
$site_d = $_POST['sitio_desc'];
$TAG = $_POST['tags'];
$nombre_sitio = $_POST['titulo_sitio'];

$Ads1 = $_POST['public1'];
$Ads2 = $_POST['public2'];
$Ads3 = $_POST['public3'];
$Ads4 = $_POST['public4'];
$Ads5 = $_POST['public5'];


  switch($idioma)
  {
    case '/lang/es.php': 
    $lang_ = "principal.php"; 
    break;

    case '/lang/en.php': 
    $lang_ = "principal-EN.php";
    break;

    case '/lang/it.php': 
    $lang_ = "principal-IT.php";
    break;

    case '/lang/al.php': 
    $lang_ = "principal-AL.php";
    break;

    case '/lang/br.php': 
    $lang_ = "principal-BR.php";
    break;

    case '/lang/fr.php': 
    $lang_ = "principal-FR.php";
    break;
  }

$fp = fopen("../sitios/config.php", "w+") or die ('No se pudo abrir el archivo'); 

fwrite($fp, '<?php

// URL BASE DEL SITIO
//ES MUY IMPORTANTE DEJAR LA BARRA CRUZADA "/" AL FINAL DE LA URL
$url_base = "'.$url_web .'"; 

// DIRECCION DE LA CARTERA PARA LOS REFERERS
$wallet_addr = "'.$nombre_cartera .'";

// IDIOMA DEL SITIO 
$lang = "' .$idioma .'";
$lang_ = "'.$lang_.'";

// DESCRIPCION DEL SITIO
$descripcion = "'.$site_d.'";

// TAGS DEL SITIO
$tags_site = "'.$TAG.'";

// TITULO DEL SITIO
$title = "'.$nombre_sitio.'";

// CODIGO PUBLICIDAD 1
$html_ads1 = \''.$Ads1.'\';

// CODIGO PUBLICIDAD 2
$html_ads2 = \''.$Ads2.'\';

// CODIGO PUBLICIDAD 3
$html_ads3 = \''.$Ads3.'\';

// CODIGO PUBLICIDAD 4
$html_ads4 = \''.$Ads4.'\';

// CODIGO PUBLICIDAD 5
$html_ads5 = \''.$Ads5.'\';

// IMAGENES DE FONDO
$background_img = $url_base . "img/fondo.jpg";
?>');
fclose($fp);

echo 'Las configuraciones se modificaron en forma exitosa - <a href="' .$url_base .'/sitios/config_form.php"> Volver </a> ';

?>
