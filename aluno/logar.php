<?php
include_once('conexao.php');

$email=$_POST['email'];
$senha=$_POST['senha'];

$sql_logar=mysqli_query($ligar, " SELECT *FROM aluno WHERE email='$email' and senha='$senha' ");

if(mysqli_num_rows($sql_logar)!=0){
    SESSION_START();
    $aluno=$sql_logar->fetch_array();
 
    $_SESSION['aluno']= (array) $aluno;
    //var_dump($aluno);
    //diel();

    header('location: aluno.php'); 
} else{
    echo" <script> 
       
    alert(' Usuario não regitrado');
    window.location.href='login.html';
    
    </script>";
}



?>