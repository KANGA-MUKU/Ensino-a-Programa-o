<?php

include_once('conexao.php'); 
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql_logar=mysqli_query($ligar, " SELECT *FROM professor WHERE email='$email' and senha='$senha' ");

if(mysqli_num_rows($sql_logar)!=0){
  
    header('location:prof.html'); 
} else{
    echo" <script> 
       
    alert(' Usuario não regitrado');
    window.location.href='login.html';
    
    </script>";
}



?>