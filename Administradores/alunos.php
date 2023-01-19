<?php
include('conexao.php');
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
          <a style="margin-left:5rem ;" class="navbar-brand " href="../index.html">
          
          
          <img src="img/1465612.png" alt="" class="logo" width="50px">   <span style="color: white; ">Programming Support </span> </a>
          <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        

          <div class="dropdown" style="margin-right: 20px;">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Administrador</strong>
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
    
<!--ADMIN-->

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="#" class=" text-decoration-none " >
        <img src="img/WhatsApp Image 2021-08-25 at 14.02.07.jpeg" alt="" width="32" height="32" class="rounded-circle me-2" style="margin-left: 100px;">
        
      </a>
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Administrador</span>
    </a>
    <hr>
   
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item b">
        <a href="professores.php" class="nav-link  text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Professores
        </a>
        <li class="nav-item b">
          <a href="addprof.html" class="nav-link  text-white" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
           Adicionar Professores
          </a>
         
        </li>
      </li>
      
      <li class="b">
        <a href="alunos.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Alunos
        </a>
      </li>
      <li class="b">
        <a href="ranking.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Ranking
        </a>
      </li>
    </ul>
    <hr>
   
  </div>

  
   <div style="    width: 400px; margin-left: 40%; margin-top: -350px ">
  <h1>Lista de Alunos</h1>
   <hr>
    <center >
   <table class="table  table-striped">
   <thead >
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Telefone</th>
      <th scope="col">Sexo</th>
    </tr>
      
    <tbody>

   <?php
    
    $sql_consulta=mysqli_query($ligar, "SELECT *FROM Aluno " );
    $TOTAL= mysqli_num_rows($sql_consulta);

    while($dados=mysqli_fetch_array($sql_consulta)){

        ?>
        <tr>
        <td><?= $dados[1] ?></td>
        <td><?= $dados[2] ?></td>
        <td><?= $dados[3] ?></td>
        <td><?= $dados[4] ?></td>
        <td><?= $dados[5] ?></td>

        <td><a href="eliminaraluno.php?codigo=<?= $dados[0] ?> ">Eliminar</a></td>
        <td><a href="editaraluno.php?codigo=<?= $dados[0] ?>">Editar</a></td>
        </tr>

        <?php } ?>

        <tr><td colspan="7">Total: <?= $TOTAL ?></td></tr>

    </tbody>

  </thead>
   </table>


   <hr>

   </center>
    
   </div>

   <!--ADMIN-->

    
     


    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>

