<?php
require('_login.php');

// ARCHIVO DE CONFIGURACIONES
include_once('config.php');


// MENU SUPERIOR
include_once('header_panel.php');

if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name']))
{
 $nombreDirectorio = $_SERVER['DOCUMENT_ROOT']. "/img/";
 $nombreFichero = $_FILES['nombre_archivo_cliente']['name'];
 
$nombreCompleto = $nombreDirectorio . $nombreFichero;
 if (is_file($nombreCompleto))
 {

 }
 
move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio.$nombreFichero);
echo 'Archivo subido con exito - <a href="' .$url_base .'/sitios/config_form.php"> Volver </a> ';
}
 
else{
 print ("No se ha podido subir el fichero"); }

 ?>


