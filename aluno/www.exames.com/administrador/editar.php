<?php
session_start();
include "cabeçalho.php";
include "../conexao.php";

if(!isset($_SESSION["admin"])){
    ?>
    <script text="text/javascript">
        window.location="index.php";
    </script>
    <?php
}

$id=$_GET["id"];
$res=mysqli_query($link,"select * from categoria_exame where id=$id");
while ($row=mysqli_fetch_array($res)){
    $Disciplina=$row["categoria"];
    $tempo=$row["tempo"];
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Adicionar Exame</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                    <form name="form1" action="" method="post">
                        <div class="card">
                           
                         <div class="card-body">
                            <div class="col-lg-6">
                            <div class="card">
                            <div class="card-header"><strong>Adicionar Exame</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Disciplina</label><input type="text" placeholder="Insira o Nome da disciplina" class="form-control" name="disciplina" value="<?php echo $Disciplina; ?>" required></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Duração</label><input type="text" placeholder="tempo em minutos" class="form-control" name="tempo" value="<?php echo $tempo; ?>" required></div>
                                    <div class="form-group"><input type="submit" name="submit1" value="Atualizar" Class="btn btn-success"></div>     
                            </div>
                            </div> 

                            </div>
                   
                            
                                
                                    </div>
                                    </from>

<?php
if(isset($_POST["submit1"])){
 mysqli_query($link,"update categoria_exame set categoria='$_POST[disciplina]',tempo='$_POST[tempo]' where id=$id")or die(mysqli_error($link));
  ?>
  <script type="text/javascript">
   
      window.location="categoria.php";
    </script>
  <?php
}


include "rodape.php";
?>
                               
</body>
</html>
