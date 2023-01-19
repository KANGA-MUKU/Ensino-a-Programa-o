<?php
session_start();
include "../conexao.php";
?>

<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login de Administrador</title>
    <meta name="description" content="Administrador">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="color:white;">
                    ADMINISTRADOR
                </div>
                <div class="login-form">
                    <form name="form1" action="" method="post">
                        <div class="form-group">
                            <label>Nome de Usuario</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Nome de usuario" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                                <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>
                                <div class="alert alert-danger" id="falha" style="margin-top:10px; display:none;">
                                    <strong>Nome de usuario ou senha invalidos!</strong> 
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

<?php
if(isset($_POST["submit1"])){
    $usuario=mysqli_real_escape_string($link,$_POST["usuario"]);
    $password=mysqli_real_escape_string($link,$_POST["password"]);  

    $res=mysqli_query($link,"select * from admin where usuario='$usuario' && password='$password'");
    $count=mysqli_num_rows($res);

    if($count==0){
        ?>
        <script type="text/javascript">
        document.getElementById("falha").style.display="block";
        </script>
        <?php
    }else{
        $_SESSION["admin"]=$usuario;
        ?>
        <script type="text/javascript">
        window.location="categoria.php";
        </script>
        <?php
    }
}

?>