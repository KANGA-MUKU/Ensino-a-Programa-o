<?php
include "conexao.php";

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <link rel="stylesheet" href="css1/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="css1/responsive.css">

</head>

<body>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3 style="color: white">Registra-se</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="form1" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Apelido</label>
                                    <input type="text" name="apelido" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Nome de Usuario</label>
                                    <input type="text" name="usuario"class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="email" name="email"class="form-control" required>
                                </div>
                                
                              </div>
                            <div class="text-center">
                                <button type="submit" name="enviar1" class="btn btn-success loginbtn">Registrar</button>
                            </div>

                            <div class="alert alert-success" id="sucesso" style="margin-top: 10px; display: none">
                                <strong>Conta Registrada com sucesso!</strong>
                            </div>

                            <div class="alert alert-danger" id="falha" style="margin-top: 10px; display: none">
                                <strong>Conta Ja existente!</strong>
                            </div>
                            

                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

<?php
if(isset($_POST["enviar1"]))
{
    $count=0;
    $res=mysqli_query($link,"select * from registro where usuario='$_POST[usuario]'") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);
    
    if($count > 0) {
        ?>
        <script type="text/javascript">
                document.getElementById("sucesso").style.display="none";
                document.getElementById("falha").style.display="block";
        </script>
        <?php 
    } else {
        mysqli_query($link,"insert into registro values(NULL,'$_POST[nome]','$_POST[apelido]','$_POST[usuario]','$_POST[password]','$_POST[email]')")or die(mysqli_error($link));
        ?>
        <script type="text/javascript">
                document.getElementById("sucesso").style.display="block";
                document.getElementById("falha").style.display="none";
        </script>
        <?php 
    }
}

?>

    <script src="js/bootstrap.min.js"></script>


</body>

</html>