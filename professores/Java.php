<?php

include("conexao.php");
SESSION_START();

//if (isset($_FILES) && count ($_FILES)>0){
  //  var_dump($_FILES);
  //  die();
//}

if (isset($_GET['deletar'])){
    $id= intval($_GET['deletar']);
    $sql_query = $ligar->query("SELECT * FROM Java WHERE id_java='$id'") or die ($ligar->error);
    $arquivos= $sql_query-> fetch_assoc();


 if (unlink($arquivos['Pasta'])){
    $deu_certo = $ligar->query("DELETE FROM Java WHERE id_java='$id'") or die ($ligar->error);
    if($deu_certo)
    echo" <script> 
       
    alert('arquivo apagado com sucesso');
    window.location.href='Java.php';
    </script>";
 }
    

      die();
  }

function enviararquivo($error, $size, $name,$tmp_name){

    include("conexao.php");
    if($error)
    die("<script> 
       
    alert('Falha ao enviar ao arquivo');
    window.location.href='Java.php';
    </script>");
    if($size > 2097152)
    die(" <script> 
       
    alert('Arquivo muito grande !! Max 3MB');
    window.location.href='Java.php';
    </script>");
 $Pasta ="arquivos/";
 $pasta2 ="../aluno/arquivos/";
$nomedoarquivo=$name;
$novonomedoarquivo= uniqid();
$extensao= strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));


if($extensao != "jpg" && $extensao != 'png' && $extensao != 'pdf')
die(" <script> 
       
alert('tipo de arquivo nao aceito');
window.location.href='Java.php';
</script> ");
$Pasta= $Pasta . $novonomedoarquivo . "." . $extensao;
$deu_certo= move_uploaded_file($tmp_name, $Pasta,$pasta2);
if($deu_certo){
    $ligar->query("INSERT INTO Java (nome, Pasta) VALUES('$nomedoarquivo','$Pasta')") or die ($ligar->error);
return true;
}else
  return false;
}


if (isset($_FILES['arquivo'])) {
    $arquivo =$_FILES['arquivo'];
    $tudo_certo= true;

  foreach($arquivo['name'] as $index=>$arq){
   $deu_certo= enviararquivo($arquivo['error'] [$index], $arquivo['size'] [$index], $arquivo['name'][$index],$arquivo["tmp_name"] [$index]);
         if(!$deu_certo)
         $tudo_certo = false;
  } 

  if($tudo_certo)
  echo" <script> 
       
  alert('arquivo enviado com sucesso');
  window.location.href='Java.php';
  </script>";
 else 
 echo" <script> 
       
 alert('Falha ao enviar ao arquivo');
 window.location.href='Java.php';
 </script>";
}

$sql_query = $ligar->query("SELECT * FROM Java") or die ($ligar->error);

?>


<?php
include_once('conexao.php ');
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ico/icone.ico" type="image/x-icon">
    <title>JAVASCRIPT</title>
</head>
<body>

<!-- Barra de menu -->
<section class="header">

        

    <nav class="navbar navbar-expand-lg navbar" style="background-color: black;">
        <div class="container-fluid">
          <a style="margin-left:5rem ;" class="navbar-brand " href="#">
          
          
          <img src="img/1465612.png" alt="" class="logo">   <span style="color: white; ">Programming Support </span> </a>
          <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        

          <div class="dropdown" style="margin-right: 20px;">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
              <h6> Olá, <?php echo $_SESSION['aluno']['Nome']; ?> </h6>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" >
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Editar</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../index.html">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    
</section>
      <!-- fim barra de menu -->


      <!--CARROSSEL-->
     
      <!--fIM CARROSSEL-->
<!--aluno-->
      

   <!--aluno-->


  
<!--fIM Cursos-->
<!--fIM Cursos-->      
    
      <!--fIM CARD-->

      <!--Cursos-->

      <div style=" width: 400px; margin-left: 40%; margin-top: 150px" >
      <br>
      <br>
      <br>
   <h1>Conteudos JAVASCRIPT</h1>
   <hr>
    <center>
   <table class="table  table-striped" style="width: 500px;">
   <thead>
    <tr>
     
      <th class="bg-primary" scope="col">Conteudo</th>
      <th class="bg-primary" scope="col">Data de Envio</th>
      
    </tr>
      
    <tbody>

   <?php
    
    $sql_consulta=mysqli_query($ligar, "SELECT *from Java" );
    $TOTAL= mysqli_num_rows($sql_consulta);

    while($dados=mysqli_fetch_array($sql_consulta)){

        ?>
        <tr>
        
        <td><a target="_blank" href="<?php echo $dados['Pasta'];?>"><?php echo $dados['nome']?></a></td>

        
        <td><?= $dados[3] ?></td>

        
        </tr>

        <?php } ?>

        <tr><td colspan="6">Total: <?= $TOTAL ?></td></tr>


    </tbody>

  </thead>
   </table>


   <hr>

 
   </center>
    </div>

      

      <!--fIM Cursos-->



<!--footer-->


    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>

