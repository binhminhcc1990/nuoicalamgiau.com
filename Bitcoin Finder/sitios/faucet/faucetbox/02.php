 
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_02.php");
include_once($_SERVER['DOCUMENT_ROOT'].$lang);
$ant_fau = "";
$ant_faucet = "01";
$fau_number = count(glob($_SERVER['DOCUMENT_ROOT']."/sitios/faucet/xapo/{*.php}",GLOB_BRACE));
$lim = "9";
if ($fau_number <= $lim) {$fau_number = "0".$fau_number;
          if ($fau_number == "010") { $fau_number = "10"; }       
} else { $fau_number = $fau_number;}
          if ($fau_number == "9") { $fau_number = "09"; }
$siguiente_fau = "../faucetbox/03.php";
$total_faucetbox = count(glob("../faucetbox/{*.php}",GLOB_BRACE));
$next = "../faucetbox/03.php";
$siguiente_fau = "../faucetbox/03.php";
if (file_exists($siguiente_fau)) {$next = $next ;} else {$next = $url_base."sitios/faucet/epay/01.php";};

if ($ant_faucet > "00") {
	$ant_faucet = $url_base."sitios/faucet/faucetbox/01";

} else {
	$ant_faucet =  $url_base."sitios/faucet/xapo/".$fau_number;
};

if ($status == "enabled") {

echo'
<html><head><title>'.$site_title.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta name="viewport" content="width-device-width, initial-scale=1">
<meta name="robots" content="index,nofollow">
<meta name="revisit-after" content="2 days">
<link rel="shortcut icon" type="image/ico" href="../favicon.ico">
<link rel="stylesheet" href="' . $url_base .'css/bootstrap.css">
<link rel="stylesheet" href="' . $url_base .'css/default.css">
<link rel="stylesheet" href="'.$url_base.'css/index.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>
</script>
<script type="text/javascript">
myvar = window.parent.location;
myVar2 = document.URL;
$(function(){
      if (myVar2 == myvar) {$("#botonera").show(); $("#ads").hide();} else { $("#botonera").hide(); $("#ads").show();}
 });
</script>

<style>
#ads {position:absolute; top:0px; padding-top:25px; '.$ubic.':0px; width:'.$ancho.'px; height:100%; background:'.$color.'; }
#botonera {position:absolute; margin:auto;color:white; text-align:center;top:0px; padding-top:25px; '.$ubic.':0px; width:'.$ancho2.'px; height:100%; background:'.$color.'; overflow:hide;}
</style>

</head>
</body>
<div class="loader">
  <div id="msj">Loading...</div>
</div>
     <!-- IFRAME DE LA FAUCET  -->
     <iframe src="'.$dir_web.'/?='.$wallet_addr.'" name="faucet" border="0" width="100%" height="100%"></iframe>

<div id="botonera">
				<p> <font size="6px">'.$title.'</font> </p>
				<p> <font size="4px">'.$pago.'sat. / '.$tiempo.' min.</font> </p>
				<p> '.$s_pago.' - Faucet 02/'.$total_faucetbox.'</p>
				
				<a href="'.$ant_faucet.'.php" class="btn btn-primary"><img border=0 height="25" width="25" hspace=1 vspace=1 src="'.$url_base.'img/ant-ico.png"></a> 
				
				<a class="btn btn-warning" href="'.$url_base.'" title="'.$home.'" target="_self">
				<img border=0 height="25" width="25" hspace=1 vspace=1 src="'.$url_base.'img/home-ico.png"></a>
				<a href="'.$next.'" class="btn btn-primary"><img border=0 height="25" width="25" hspace=1 vspace=1 src="'.$url_base.'img/sig-ico.png"></a></p><br>

				'.$ad1.'
				'.$ad2.'
</div>

<div id="ads">
'.$ad1.' <br>
'.$ad2.' <br>
'.$ad3.' <br>
</div>


</body> 
</html> '; } else {header ("Location: /sitios/faucet/faucetbox/03.php");};
?>