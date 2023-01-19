<?php
include_once('conexao.php');
$id = $_GET['codigo'];
$sql_eliminar=mysqli_query($ligar, "DELETE FROM cadastrar WHERE nome='$id' ");
if($sql_eliminar==true){


    echo" <script> 
       
       alert('Usuario Eliminado com sucesso');
       window.location.href='listaralunos.php';
       
       </script>";
} else{
    echo" <script> 
       
    alert(' Falha ao Eliminar');
    window.location.href='listaralunos.php';
    
    </script>";
}

?>