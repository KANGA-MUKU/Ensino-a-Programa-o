<?php
include_once('conexao.php');

SESSION_START();
$l = isset($_SESSION["Nome"])?$_SESSION["Nome"]:"";
$s = isset($_SESSION["senha"])?$_SESSION["senha"]:"";

if($l != "" && $s != ""){

    $dados = mysqli_query($ligar,"SELECT * FROM aluno WHERE email='$l'");

    while($d = mysqli_fetch_array($dados)){
       $nome = $d['Nome'];
    }

}else {
    header('location: ../index.php');
}
echo "<br>";
echo "Nome: $l<br>"
echo "senha: $s<br>"
?>