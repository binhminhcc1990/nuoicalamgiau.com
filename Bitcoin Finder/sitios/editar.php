<?php
//require('_login.php');

// RECEPCION DE DATOS DEL FORMULARIO Y VARIABLES ------------------------------------------------------------

$IDfaucet = $_POST['IDedit'];

$nombre_ = $_POST['nombre'];
$URL = $_POST['url'];
$Descrip1 = $_POST['t_espera'];
$Descrip2 = $_POST['pago'];
$Descrip3 = $_POST['wallet'];
$d_color = $_POST['div_color'];
$d_width = $_POST['div_width'];
$pub01 = $_POST['pub1'];
$pub02 = $_POST['pub2'];
$pub03 = $_POST['pub3'];
$refer = $_POST['url_ref'];
$ubicacion = $_POST['ubicacion_'];
$active = "";

$reco = "";
$ruta_dest = $Descrip3;


include_once('header_panel.php');
include_once('config.php');
include_once('variables.php');
include_once($_SERVER['DOCUMENT_ROOT'].$lang);


// DETERMINA SI LA FAUCET VA A ESTAR HABILITADA
if (isset($_POST['estado'])) {
    $active = "enabled";
      } else {
        $active = "disabled";
    };


// DESHABILITAR COLUMMNA DE AD'S EN LA FAUCET
if (isset($_POST['no_ads'])) {$disable_ads = "yes"; $pub01 = ""; $pub02 = ""; $pub03 = ""; $d_width = "0";} else {$disable_ads = "no"; $pub01 = $pub01; $pub02 = $pub02; $pub03 = $pub03; $d_width = $d_width;};

// DETERMINA SI ES UNA FAUCET RECOMENDADA
if (isset($_POST['reco'])) {
    $reco = '<img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/reco_ico.png">';
      } else {
       $reco ="";
    };

// DETERMINA SI ES UNA DE LAS PRIMERAS 9 FAUCET, DE SER ASI LE ASIGNA UN "0" ADELANTE
$archivos = $cant_archivos;
$limite = "9";

if ($limite >= $IDfaucet) {

$sig_ = $IDfaucet + 1; 
        $sig_faucet = "0".$sig_;
          if ($sig_faucet == "010") { $sig_faucet = "10"; }

    $ant_ = $IDfaucet- 1; 
      $ant_faucet = "0".$ant_;

} else {

    $sig_faucet = $IDfaucet + 1;
    $ant_faucet = $IDfaucet - 1;
    if ($ant_faucet == "9") { $ant_faucet = "09"; }
  }


// ESCRIBE EL CODIGO DE FUENTE DENTRO DE LA PLANTILLA DE LA FAUCET -------------------------------------------
$fp = fopen("../sitios/faucet/" .$ruta_dest . "/" .$IDfaucet .".php", "w+") or die ('No se pudo abrir el archivo'); 

include('plantilla_faucet.php');

// ESCRIBE EL CODIGO DE FUENTE DENTRO DE LA PLANTILLA DEL LISTADO DE FAUCET ----------------------------------
$fp = fopen("../sitios/pg/" .$ruta_dest . "/" .$IDfaucet .".php", "w+") or die ('No se pudo abrir el archivo'); 

include('plantilla_listado.php');


// CREA EL ARCHIVO "CONF_" DE LA FAUCET -------------------------------------------------------------------
$fp = fopen("../sitios/pg/" .$ruta_dest . "/conf_" . $IDfaucet .".php", "w+") or die ('No se pudo abrir el archivo'); 

include('plantilla_conf.php');
    
// CREA EL ARCHIVO "ADMIN_" DE LA FAUCET -------------------------------------------------------------------
$fp = fopen("../sitios/list/" .$ruta_dest . "/admin_" . $IDfaucet .".php", "w+") or die ('No se pudo abrir el archivo'); 

include('plantilla_adminList.php');


// MUESTRA LA PAGINA DE CONFIRMACION -------------------------------------------------------------------------
echo '
        <table class="table table-bordered table-striped">
        <tr>
        <div class="container">';
   
echo '<h1>La edición de la faucet: '.$ruta_dest .' N°: '.$IDfaucet .' se realizó con correctamente </h1> <br>';
echo '</h3><br><br><br>
      <a class="btn btn-success navbar-element pull-right" href="../sitios/faucet/' .$ruta_dest . "/" .$IDfaucet .'.php" target="_blank">Visitar faucet</a>
      </table> </td></tr></div>';

?>

