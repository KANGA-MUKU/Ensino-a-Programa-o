<?php
require_once('conexao.php');

$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql_cadastro= mysqli_query($ligar, " INSERT INTO Professor (nome, email, senha,telefone,sexo) VALUES ('$nome', '$email', '$senha','$telefone', '$sexo')");

if ($sql_cadastro ==true){
       echo" <script> 
       
       alert('Usuario cadastrado com sucesso');
       window.location.href='addprof.html';
       
       </script>";
} else{
    echo" <script> 
       
    alert(' Falha cadastrado com sucesso');
    window.location.href='cadastro.html';
    
    </script>";
}
?>