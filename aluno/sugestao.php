<?php
include_once('conexao.php');
SESSION_START();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="../ico/icone.ico" type="image/x-icon">
    <title>Programmê</title>
</head>
<body>

<!-- Barra de menu -->
<section class="header">

        

    <nav class="navbar navbar-expand-lg navbar" style="background-color: black;">
        <div class="container-fluid">
          <a style="margin-left:5rem ;" class="navbar-brand " href="../index.html">
          
          
          <img src="img/1465612.png" alt="" class="logo">   <span style="color: white; ">Programming Support </span> </a>
          <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        

          <div class="dropdown" style="margin-right: 20px;">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>ALUNO</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" >
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Editar</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="logout.php">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    
</section>
<!-- Escrever aqui -->


    <!-- <h3 class="sugestao">SUGESTÕES</h3> -->
<!-- fim da escrita -->
    
<!--aluno-->

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 715px">
    <a href="#" class=" text-decoration-none " >
        <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2" style="margin-left: 100px;">
        
      </a>
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"> <?php echo $_SESSION['aluno']['Nome']; ?> </span>
    </a>
    <hr>
       <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item b">
        <a href="perfil.html" class="nav-link  text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          PERFIL
        </a>
        
      </li>
      
      <li class="b">
        <a href="conteudos.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          CONTEÚDOS
        </a> 
      </li>
      <li class="b">
        <a href="avaliacoes.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          DESAFIOS
        </a>
      </li>

      <!-- NOTA -->
      <li class="b">
        <a href="avaliacoes.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          NOTAS
        </a>
      </li>
      <li class="b">
        <a href="ranking.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          RANKING
        </a>
      </li>

      <li class="b">
        <a href="sugestao.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          SUGESTÕES
        </a>
      </li>

      <li class="b">
        <a href="ranking.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          NOTÍCIAS 
          <span class="badge bg-primary rounded-pill">14</span>
        </a>
      </li>

      <li class="b">
        <a href="../index.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          SAIR
        </a>
      </li>
    </ul>
    <hr>
  </div>
      

   <!--/aluno-->
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>