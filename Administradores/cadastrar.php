<?php
require_once('conexao.php');

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql_cadastro= mysqli_query($ligar, " INSERT INTO adm (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')");

if ($sql_cadastro ==true){
       echo" <script> 
       
       alert('Usuario cadastrado com sucesso');
       window.location.href='login.html';
       
       </script>";
} else{
    echo" <script> 
       
    alert(' Falha cadastrado com sucesso');
    window.location.href='cadastro.html';
    
    </script>";
}
?>