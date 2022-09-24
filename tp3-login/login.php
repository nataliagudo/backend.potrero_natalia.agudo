<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser = "adm";
$ckpass = "5555";

if ($usuario == $ckuser and $contrasenia == $ckpass) {
  header ("location:https://www.potrerodigital.org/");
}
else {
  header ("location:error.html");
}


 ?>
