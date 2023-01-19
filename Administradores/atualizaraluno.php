<?php
require_once('conexao.php');
$id= $_POST['codigo'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql_atualizar= mysqli_query($ligar, " UPDATE aluno set  nome='$nome', sobrenome='$sobrenome', email='$email', senha='$senha' WHERE id='$id' ");

if ($sql_atualizar ==true){
       echo" <script> 
       
       alert('Usuario atualizado com sucesso');
       window.location.href='alunos.php';
       
       </script>";
} else{
    echo" <script> 
       
    alert(' Falha ao atualizar ');
    window.location.href='editar.php.';
    
    </script>";
}
?>