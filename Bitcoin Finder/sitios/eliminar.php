<?php
require('_login.php');

// MENU SUPERIOR
include_once('header_panel.php');
include_once('config.php');
include_once($_SERVER['DOCUMENT_ROOT'].$lang);

$dir = "reportes"; // CARPETA CON LOS REPORTES
foreach (scandir($dir) as $item) {
if ($item == '.' || $item == '..') continue;
unlink($dir.DIRECTORY_SEPARATOR.$item);
}

     echo'
<html>
<div class="container">
<h1>'.$reg_borrados.'</h1>
</body>
</html> ';
?>
