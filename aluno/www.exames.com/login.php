<?php
session_start();
include "conexao.php";
?>


<!doctype html>
<html >

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    
</head>

<body>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3 style="color: white">LOGIN</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm" name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Nome de Usuario</label>
                                <input type="text" name="usuario" placeholder="Nome de Usuario" title="Por favor insira o seu nome de usuario" required="" value="" name="username" id="username" class="form-control" required>

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" name="password" title="Por favor insira a sua password" placeholder="******" required="" value="" name="password" id="password" class="form-control" required>

                            </div>

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="registrar.php">Registrar-se</a>

                            <div class="alert alert-danger" id="falha" style="margin-top: 10px; display: none">
                                <strong>Nome de usuario ou Password errada</strong>
                            </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

<?php
if(isset($_POST["login"]))
{
    $count=0;
    $res=mysqli_query($link,"select * from registro where usuario='$_POST[usuario]' && password='$_POST[password]'");
    $count=mysqli_num_rows($res);
    
    if($count==0)
    {
        ?>
        <script type="text/javascript">
        document.getElementById("falha").style.display="block";
        </script>
        <?php
    }else{
        $_SESSION["usuario"]=$_POST["usuario"];

        ?>
        <script type="text/javascript">
       window.location="select_exam.php";
        </script>
        <?php

    }
}
?>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>