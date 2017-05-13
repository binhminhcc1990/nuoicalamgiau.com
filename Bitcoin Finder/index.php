
<?php 

include_once('sitios/config.php');
include_once($_SERVER['DOCUMENT_ROOT'].$lang);


echo' 
<!DOCTYPE html>
<html>
<head>
      <title>'.$title.'</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="Description" content="'.$descripcion.'">
      <meta name="Keywords" content="'.$tags_site.'">
      <link rel="shortcut icon" type="image/ico" href="'.$url_base.'img/favicon.ico">
      <link rel="stylesheet" href="'.$url_base.'css/bootstrap.css">
      <link rel="stylesheet" href="'.$url_base.'css/default.css">
      <link rel="stylesheet" href="'.$url_base.'css/index.css">
      
<script type="text/javascript">function hide() {marco.style.bottom=\'-55px\';}</script>
<script type="text/javascript">
  CreateAsyncProcess(\'http://connect.facebook.net/es_ES/all.js#xfbml=1\');
   CreateAsyncProcess(\'http://platform.twitter.com/widgets.js\');
    CreateAsyncProcess(\'https://apis.google.com/js/plusone.js\'); 
</script>

      <style>
        body {background:linear-gradient(186deg,#000,#fff,#fff);background-size:400% 400%}
      </style>

</head>
<body >

<div id="top-fijo">
<div id="top">
  <div id="top-left" style="width:69%; float:left;">
   <b:section id="top-l">
<font size="6" color="#fff">'.$title.'</font>
</b:section>
    </div>

<div id="top-r" style="width:29%; float:right;">
    <b:section id="top-2">
    <div class="social pull-right">
<label><a class="icon-lang pull-right" href="../lang/principal.php" target="main_frame"> <img src="../img/es.png" title="español" border="0" height="20" hspace="1" vspace="1" width="20"> </a> </label>
<label><a class="icon-lang pull-right" href="../lang/principal-FR.php" target="main_frame"> <img src="../img/fr.png" title="frances" border="0" height="20" hspace="1" vspace="1" width="20"> </a> </label>
<label><a class="icon-lang pull-right" href="../lang/principal-AL.php" target="main_frame"> <img src="../img/al.png" title="alemán" border="0" height="20" hspace="1" vspace="1" width="20"> </a> </label>
<label><a class="icon-lang pull-right" href="../lang/principal-EN.php" target="main_frame"> <img src="../img/en.png" title="ingles" border="0" height="20" hspace="1" vspace="1" width="20"> </a> </label>
<label><a class="icon-lang pull-right" href="../lang/principal-IT.php" target="main_frame"> <img src="../img/it.png" title="italiano" border="0" height="20" hspace="1" vspace="1" width="20"> </a> </label>
<label><a class="icon-lang pull-right" href="../lang/principal-BR.php" target="main_frame"> <img src="../img/br.png" title="portugues" border="0" height="20" hspace="1" vspace="1" width="20"> </a> </label>
     </div> 
</b:section>
 </div><div style="clear: both">

</div>
   </div>


</div>
</div>
<br>
<div class="cont"> 
<br>
<table border="0" cellpadding="1" cellspacing="1">
  <tbody>
    <tr>
      <td rowspan="2" style="height:70px;"><iframe frameborder="0" name="side_frame" src="faucets.php" style="scrolling:yes; height:770px; width:260px;vertical-align: baseline;"></iframe></td>
      
    </tr>
    <tr>
      <td colspan="2" rowspan="1" style="vertical-align: center;"><iframe name="main_frame" src="../lang/'.$lang_.'" style="height:770px; width:1017px;border:0;"></iframe></td>
    </tr>
    <tr>
      <td colspan="3" style="height:70px">

        <table align="center" border="0" cellpadding="1" cellspacing="1" dir="ltr" style="height:100px;">
          <tbody>
            <tr>
              <td style="vertical-align: middle;"> <div class="social"> 
                <label><a class="icon-googleplus pull-right" href="'.$url_base.'sitios/faucet/xapo/01.php" target="_self">'.$modo.'</a> </label></div></td>
              <td width="509px;">'.$html_ads1.'</td>
              <td width="509px;">'.$html_ads2.'</td>
            </tr>
          </tbody>
        </table>

</td>
    </tr>
  </tbody>
</table>

</div>

<div class="cookiesms" id="marco">
<div id="cerrar"><button style="border:0; color:black; font-size:12" onclick="hide()">[X]</button> </div>

<div class="social">

<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:70%">
      <tbody>
            <tr>
                  <td align="left">

<!-- boton google+ -->
<label> <a href="javascript:void();" class="icon-googleplus pull-right"  onclick="window.open(\'http://plus.google.com/share?url=http://btcf4.eshost.com.ar&amp;title=BTCF4 Rotador de faucets\',\'\',\'width=500,height=500\');"><img height="30" width="30" border=0 hspace=1 vspace=1 src="../img/google-ico.png"> Google+ </a> </label>
<!-- boton facebook -->
<label> <a href="javascript:void();" class="icon-facebook pull-right" onclick="window.open(\'http://www.facebook.com/sharer.php?s=100&amp;p[title]=BTFC4 rotador de faucets&amp;p[summary]=Bitcoin Finder en un robusto pero potente Rotador/Listado de faucet bitcoins. ...&amp;p[url]=http://bitcoin-finder.esy.es\',\'\',\'width=650,height=450\');">
<img height="30" width="30" border=0 hspace=1 vspace=1 src="../img/facebook-ico.png"> Facebook</a> </label>
<!-- boton tweeter -->
<label> <a href="javascript:void();"  class="icon-twitter pull-right" onclick="window.open(\'http://twitter.com/home?status=BTFC4 rotador de faucets http://btcf4.eshost.com.ar Vía:@0NechuZ\',\'\',\'width=500,height=500\');"><img height="30" width="30" border=0 hspace=1 vspace=1 src="../img/tweeter-ico.png"> Twitter</a></label>

                  </td>

                  <td>© 2015 BTCF4 faucet list - by <a href="http://taringa.net/NechuZ">@NechuZ</a></td>
            </tr>
      </tbody>
</table>

</div>
<div class="cookies2" onclick="document.getElementById(\'marco\').style.bottom = \'0px\';">Share / Comparte +</div>
<script type="text/javascript"> if (localStorage.controlcookie>0){ document.getElementById(\'marco\').style.bottom = \'-55px\';} </script>
</div>

</body>
</html>';?>

