<?php
include_once('conexao.php');

$id= $_GET['codigo'];

$sql_consulta =mysqli_query($ligar, " SELECT *FROM aluno WHERE id='$id' ");
$dados= mysqli_fetch_array($sql_consulta);


?>




<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Programmê</title>
</head>
<body>

<!-- Barra de menu -->
<section class="header">

        

    <nav class="navbar navbar-expand-lg navbar" style="background-color: black;">
        <div class="container-fluid">
          <a style="margin-left:5rem ;" class="navbar-brand " href="index.html">
          
          
          <img src="img/1465612.png" alt="" class="logo">   <span style="color: white; ">Programming Support </span> </a>
          <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a style="color: white;" class="nav-link active hover" aria-current="page" href="index.html">Inicio</a>
              </li>

              <li class="nav-item">
                <a style="color: white;" class="nav-link hover" href="#">Sobre</a>
            </li>

                <li class="nav-item">
                    <a style="color: white;" class="nav-link hover" href="cadastro.html">Cadastrar</a>
                  </li>

                  <li class="nav-item">
                    <a style="margin-right:5rem ; color: white;" class="nav-link hover" href="login.html">Entrar</a>
                  </li>
              
              
             
            </ul>
            
          </div>
        </div>
      </nav>
    
</section>
    
<!--LOGIN-->

<form action="atualizaraluno.php" method="post"> 


<div class="cadastro">

    <h4 class="mb-3">Edição</h4>

    <input type="hidden"  name="codigo"  value='<?= $dados[0]?>' >

    
    <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">Primeiro nome</label>
          <input name="nome" type="text" class="form-control" id="firstName" placeholder="" value='<?= $dados[1]?>' required="">
          <div class="invalid-feedback">
          </div>
        </div>

        <div class="col-sm-6">
          <label for="lastName" class="form-label">Ultimo nome</label>
          <input name="sobrenome" type="text" class="form-control" id="lastName" placeholder="" value='<?= $dados[2]?>' required="">
          <div class="invalid-feedback">
          
          </div>
        </div>


        <div class="col-12">
          <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
          <input value='<?= $dados[3]?>' name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
           
          </div>
        </div>

        <div class="col-12">
          <label for="address" class="form-label">Senha</label>
          <input name="senha" type="password" class="form-control" id="address" placeholder="Password" value='<?= $dados[4]?>' required="">
          <div class="invalid-feedback">
            
          </div>
        </div>

       

        <button class="w-100 btn btn-primary btn-lg" style="margin-left: -0%;" type="submit">Atualizar</button>
      </div>
      </div>
    </form>


   <!--cadastro-->



<!--footer-->
  <div style=" width: auto; margin-top: 100px;">
    <footer>
      <div class="b-example-divider" style="background-color: white; width: 100%;">
        <div class="container" >
          <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Company, Inc</p>
          </footer>
        </div>
      </div>
    </footer>
  </div> <!--FIM footer-->
    
     


    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>

