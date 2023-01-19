<?php

include("conexao.php");

//if (isset($_FILES) && count ($_FILES)>0){
  //  var_dump($_FILES);
  //  die();
//}

if (isset($_GET['deletar'])){
    $id_java= intval($_GET['deletar']);
    $sql_query = $ligar->query("SELECT * FROM Java WHERE id_java='$id_java'") or die ($ligar->error);
    $arquivos= $sql_query-> fetch_assoc();


 if (unlink($arquivos['Pasta'])){
    $deu_certo = $ligar->query("DELETE FROM Java WHERE id_java='$id_java'") or die ($ligar->error);
    if($deu_certo)
    echo" <script> 
       
    alert('arquivo apagado com sucesso');
    window.location.href='categoriajava.php';
    </script>";
 }
    

      die();
  }

function enviararquivo($error, $size, $name,$tmp_name){

    include("conexao.php");
    if($error)
    die("<script> 
       
    alert('Falha ao enviar ao arquivo');
    window.location.href='categoriajava.php';
    </script>");
    if($size > 2097152)
    die(" <script> 
       
    alert('Arquivo muito grande !! Max 3MB');
    window.location.href='categoriajava.php';
    </script>");
 $pasta ="arquivos/";

$nomedoarquivo=$name;
$novonomedoarquivo= uniqid();
$extensao= strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));


if($extensao != "jpg" && $extensao != 'png' && $extensao != 'pdf')
die(" <script> 
       
alert('tipo de arquivo nao aceito');
window.location.href='categoriajava.php';
</script> ");
$Pasta= $pasta . $novonomedoarquivo . "." . $extensao;
$deu_certo= move_uploaded_file($tmp_name, $Pasta);
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
  window.location.href='categoriajava.php';
  </script>";
 else 
 echo" <script> 
       
 alert('Falha ao enviar ao arquivo');
 window.location.href='categoriajava.php';
 </script>";
}

$sql_query = $ligar->query("SELECT * FROM Java") or die ($ligar->error);

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Programmê</title>
</head>
<body>

<!-- Barra de menu -->
<section class="header">

        

    <nav class="navbar navbar-expand-lg navbar" style="background-color: black;">
        <div class="container-fluid">
          <a style="margin-left:5rem ;" class="navbar-brand " href="/index.html">
          
          
            <img src="img/1465612.png" alt="" class="logo" width="50px">   <span style="color: white; ">Programming Support </span> </a>
          <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        

          <div class="dropdown" style="margin-right: 20px;">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Professor</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" >
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Editar</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    
</section>
    
<!--prof-->

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="#" class=" text-decoration-none " >
        <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2" style="margin-left: 100px;">
        
      </a>
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Professor</span>
    </a>
    <hr>
   
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item b">
        <a href="perfil.html" class="nav-link  text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Perfil
        </a>
      </li>
      
      <li class="b">
        <a href="conteudos.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Conteúdos
        </a>
      </li>
      <li class="b">
        <a href="avaliacoes.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Avaliações
        </a>
      </li>
      <li class="b">
        <a href="ranking.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Ranking
        </a>
      </li>
      <li class="b">
        <a href="sair.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Sair
        </a>
      </li>
    </ul>
    <hr>
   
  </div>
<form enctype="multipart/form-data" action="" method="POST"  style="    width: 500px; margin-left: 40%; margin-top: -350px">
  <div class="conteudo">
    <h2>Contéudo de JavaScript</h2>
    <div class="input-group mb-3">
      <input  multiple name="arquivo[]" type="file" class="form-control" id="inputGroupFile02">
      <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>
    <div class="" style="margin-left: -0px;">
      <button class="btn btn-primary" type="submit" >Submeter</button>
    </div>
    
  </div>
</form>



<table border="1" cellpadding="10"  style="    width: 700px; margin-left: 40%;  margin-top: 10px;">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de envio</th>
            
        </thead>

        <tbody>
        <?php
    while($arquivo= $sql_query->fetch_assoc()){
    ?>
            <tr>
                <td><img height="50" src="<?php echo $arquivo['path'];?>" alt=""></td>
                <td><a target=_blank href="<?php echo $arquivo['path'];?>"><?php echo $arquivo['nome'];?></a></td>
                <td><?php echo date("d/m/Y H:i ", strtotime ($arquivo['data_upload'])) ;?></td>
                <th><a href="conteudos.php?deletar=<?php echo $arquivo['id_arquivo'];?>">Apagar</a></th>
            </tr>

  <?php    
    }
    ?>
        </tbody>
    </table>

   <!--/prof-->



<!--footer-->
    
    

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>