

<?php
include_once('sitios/config.php');
include_once($_SERVER['DOCUMENT_ROOT'].$lang);
$cant_f_faucetbox = count(glob("sitios/faucet/faucetbox/{*.php}",GLOB_BRACE));
$cant_f_epay = count(glob("sitios/faucet/epay/{*.php}",GLOB_BRACE));
$cant_f_xapo = count(glob("sitios/faucet/xapo/{*.php}",GLOB_BRACE));

echo'
<html>
<head>
      <link rel="stylesheet" href="'.$url_base.'css/bootstrap.css">
      <link rel="stylesheet" href="'.$url_base.'css/default.css">
      <link rel="stylesheet" href="'.$url_base.'css/index.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>
<style>#deplFau2 {height:831px;}#up-down {display:inline;}</style>
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0"  style="overflow:hidden">

<div class="loader">
  <div id="msj"><br><br>verificando el estado de las Faucets.<br> Por favor espere...</div>
</div>



<script type="text/javascript">

function divLogin(){
  document.getElementById("deplFau").style.height = "831px"; 
    document.getElementById("deplFau2").style.height = "0px"; 
    document.getElementById("deplFau3").style.height = "0px"; 
    document.getElementById("up-down").style.display = "none";} 

 function divLogin2(){
  document.getElementById("deplFau2").style.height = "831px"; 
    document.getElementById("deplFau").style.height = "0px"; 
    document.getElementById("deplFau3").style.height = "0px"; 
    document.getElementById("up-down").style.display = "inline"; } 
    
function divLogin3(){
  document.getElementById("deplFau3").style.height = "831px";
    document.getElementById("deplFau").style.height = "0px";
    document.getElementById("deplFau2").style.height = "0px"; 
    document.getElementById("up-down").style.display = "none";}  

</script>

<!--
<a href="principal.html" target="main_frame"><span class="label label-primary navbar-element pull-left">FAQ</span></a>
<a href="principal.html" target="main_frame"><span class="label label-primary navbar-element pull-left">'.$contact.'</span></a>
<a href="principal.html" target="main_frame"><span class="label label-primary navbar-element pull-left">'.$about.'</span></a>
-->


<div id="idiomas" style="width: 380; background:#F3F4F5" align="right">

</div>

<table border="0"  width="250">
    <td id="td1" align="center"> <br>

<div class="social">

    <span class="red1">'.$cant_f_xapo .'</span>
<label> <a class="icon-lang" href="#" onclick="divLogin()"><font size="2">Xapo</font></a> </label>

    <span class="red2">'.$cant_f_faucetbox .'</span>
<label> <a class="icon-lang" href="#" onclick="divLogin2()"><font size="2">Faucetbox</font></a> </label>

    <span class="red3">'.$cant_f_epay .'</span>
<label> <a class="icon-lang" href="#" onclick="divLogin3()"><font size="2">ePay</font></a> </label>

</div>
</td>
</table>

<div id="deplFau">
<iframe  src="xapo_list.php" frameborder="0" width="393px" height="90%" scrolling="yes"></iframe>
</div>

<div id="deplFau2">

<iframe id="datamain" src="fauc_list.php" frameborder="0" width="393px" height="79%" scrolling="yes"></iframe>

  <div id="up-down"> 
    <a href="#" onMouseover="scrollspeed=-25" onMouseout="scrollspeed=0"> <img height="30" width="128" border=0 hspace=0 vspace=0 src="'.$url_base.'img/btn-up.png"></a>
    <a href="#" onMouseover="scrollspeed=2"   onMouseout="scrollspeed=0">  <img height="30" width="128" border=0 hspace=0 vspace=0 src="'.$url_base.'img/btn-dwn.png"></a>
  </div>

</div>

<div id="deplFau3">
<iframe src="epay_list.php" frameborder="0" width="393px" height="70%" scrolling="yes"></iframe>


</div>

</body>
</html>
';

?>

