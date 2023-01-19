<?php 
session_start();
$questionno=$_GET["questionno"];
$value1=$_GET["value1"];
$_SESSION["resposta"]["$questionno"]=$value1;

?>