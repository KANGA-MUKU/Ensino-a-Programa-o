<?php
session_start();
include "../conexao.php"; 
$categoria_exame=$_GET["categoria_exame"];
$_SESSION["categoria_exame"]=$categoria_exame;
$res=mysqli_query($link,"select * from categoria_exame where categoria='$categoria_exame'");
while($row=mysqli_fetch_array($res)){
    $_SESSION["exam_time"]=$row["tempo"];
}
?> 