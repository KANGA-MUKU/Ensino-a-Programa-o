<?php 
session_start();
include "../conexao.php";
$total_ques=0;
$resl=mysqli_query($link,"select * from questoes where categoria='$_SESSION[categoria_exame]'");
$total_ques=mysqli_num_rows($resl);
echo $total_ques;
?>