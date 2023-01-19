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
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ico/icone.ico" type="image/x-icon">
    <title>Professor</title>
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
              <h6> Olá, <?php echo $_SESSION['aluno']['Nome']; ?> </h6>
            </a>
          </div>
        </div>
      </nav>
    
</section>
    
<!--aluno-->

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 290px; height: 718px">
    <a href="#" class=" text-decoration-none ">
    <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2" style="margin-left: 100px;">
      </a>
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"> Professor </span>
    </a>
    <hr>
       <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item b">
        <a href="perfil.html" class="nav-link  text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          <i class="fa-solid fa-user-pen"> PERFIL</i>  
        </a>
        
      </li>

      <!-- NOTA -->
      <li class="b">
        <a href="avaliacoes.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          <i class="fa-solid fa-percent"> NOTAS</i>
        </a>
      </li>
      <li class="b">
        <a href="ranking.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          <i class="fa-solid fa-ranking-star"> RANKING</i>
        </a>
      </li>

      <li class="b">
        <a href="sugestao.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          <i class="fa-solid fa-comment"> SUGESTÕES</i>  
        </a>
      </li>

      <li class="b">
        <a href="../index.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          <i class="fa-solid fa-door-open"> SAIR</i>
        </a>
      </li>
    </ul>
    <hr>
   
  </div>
  <div></div>
      

   <!--aluno-->


   <!--Cursos-->
   <div class=" lng" style="  width: 80%; margin-left: 20%; margin-top: -720px;">
        <div class="container py-5 ">
    
            <div class="row py-5 ">
                <div class="col-lg-5 m-auto text-center ">
                <i class="fa-solid fa-book-open" style="color: white;font-size: 38px;"> CONTEÚDOS</i>
                </div>
    
            </div>
    
            <div class="row">

              
    
              <div class="card mb-3" style="max-width: 18rem;" style="width: 18rem;">
               
                <div class="card-body">
                  <h5 class="card-title">Logica de Programação</h5>
                  <p class="card-text">Aprenda os Principais Pontos para Começar a Programar Computadores, Exemplos Reais e Aplicados em Diversas Linguagens.</p>
                  <a href="../professores/logica.php"><button type="button" class="btn btn-outline-dark">Adicionar</button></a>
                </div>
              </div> 
                  
              <div class="card text-bg-primary mb-3" style="max-width: 18rem;" style="width: 18rem;">
              
                <div class="card-body">
                  <h5 class="card-title">C++</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="../professores/c++.php"><button type="button" class="btn btn-outline-dark">Adicionar</button></a>
                </div>
              </div> 
    
    
              <div class="card text-bg mb-3" style="max-width: 18rem; background-color: #993399; color: white;" style="width: 18rem;" >
              
                <div class="card-body">
                  <h5 class="card-title">C#</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="../professores/c#.php"><button type="button" class="btn btn-outline-dark">Adicionar</button></a>
                </div>
              </div> 
    
              <div class="card  mb-3 " style="max-width: 18rem; background-color: orange; color: white;" style="width: 18rem;">
               
                <div class="card-body">
                  <h5 class="card-title">HTML & CSS</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="../professores/html.php"><button type="button" class="btn btn-outline-dark">Adicionar</button></a>
                </div>
              </div> 
    
              <div class="card text-bg-warning mb-3" style="max-width: 18rem; color: white !important;" style="width: 18rem;">
               
                <div class="card-body">
                  <h5 class="card-title">JAVASCRIPT</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="categoriajava.php"><button type="button" class="btn btn-outline-dark">Adicionar</button></a>
                </div>
              </div> 

              <div class="card text-bg-light mb-3" style="max-width: 18rem;" style="width: 18rem;">
               
                <div class="card-body">
                  <h5 class="card-title">PHP</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="conteudos.php"><button type="button" class="btn btn-outline-dark">Adicionar</button></a>
                </div>
              </div> 

  </div>  
</div>  
</div> 
<!--fIM Cursos-->



    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>