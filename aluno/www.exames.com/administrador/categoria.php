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
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Editar Exame</h1>
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
                                <div class="form-group"><label for="company" class=" form-control-label">Nome do Exame</label><input type="text" placeholder="Insira o Nome do Exame" class="form-control" name="disciplina" required></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Duração</label><input type="text" placeholder="tempo em minutos" class="form-control" name="tempo" required></div>
                                    <div class="form-group"><input type="submit" name="submit1" value="Adicionar" Class="btn btn-success"></div>     
                            </div>
                            </div> 

                            </div>
                   
                            <div class="col-lg-6">
                            <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lista de Exames</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Exames</th>
                                            <th scope="col">Duração</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Apagar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $count=0;
                                         $res=mysqli_query($link,"select * from categoria_exame") or die(mysqli_error($link));
                                         while($row=mysqli_fetch_array($res)){
                                            $count=$count+1;
                                            ?>
                                             <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row["categoria"]; ?></td>
                                            <td><?php echo $row["tempo"]; ?></td>
                                            <td><a href="editar.php?id=<?php echo $row ["id"]; ?>">Editar</td>
                                            <td><a href="apagar.php?id=<?php echo $row ["id"]; ?>">Apagar</a></td>
                                        </tr>
                                            <?php

                                         }
                                        ?>

                                       
                                           
                                    </tbody>
                                </table>
                            </div>
                          
                             </div>
                            </div>
                                            
                                            </div>

                                        </div>
                                
                                    </div>
                                    </from>

<?php
if(isset($_POST["submit1"])){
 mysqli_query($link,"insert into categoria_exame values(NULL,'$_POST[disciplina]','$_POST[tempo]')")or die(mysqli_error($link));
  ?>
  <script type="text/javascript">
      alert("disciplina adicionada com sucesso");
      window.location.href=window.location.href;
    </script>
  <?php
}


include "rodape.php";
?>
                               
</body>
</html>
