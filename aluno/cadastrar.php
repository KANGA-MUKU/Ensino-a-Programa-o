<?php
require_once('conexao.php');

$Nome=$_POST['Nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sexo=$_POST['sexo'];

$sql_cadastro= mysqli_query($ligar, " INSERT INTO Aluno (Nome, email, senha, sexo) VALUES ('$Nome', '$email', '$senha', '$sexo')");

if ($sql_cadastro ==true){
       echo" <script> 
       
       alert('Aluno cadastrado com sucesso');
       window.location.href='login.html';
       
       </script>";
} else{
    echo" <script> 
       
    alert(' Falha no cadastro');
    window.location.href='cadastro.html';
    
    </script>";
}
?>