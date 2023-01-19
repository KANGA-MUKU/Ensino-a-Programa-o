
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
$id1=$_GET["id1"];

$questao="";
$ops1="";
$ops2="";
$ops3="";
$ops4="";
$resposta="";

$res=mysqli_query($link,"select * from questoes where id=$id");
while($row=mysqli_fetch_array($res)){
    $questao=$row["Questao"];
    $ops1=$row["ops1"];
    $ops2=$row["ops2"];
    $ops3=$row["ops3"];
    $ops4=$row["ops4"];
    $resposta=$row["resposta"];
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Editar Questão</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                
                            <div class="col-lg-12">
                                <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="card">
                                <div class="card-header"><strong>Adicionar Nova Questão Textual</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar Questão</label><input type="text" placeholder="Adicionar Questão" class="form-control" value="<?php echo $questao?>" name="questao" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 1º Opção</label><input type="text" placeholder="Adicionar 1º Opção" class="form-control" value="<?php echo $ops1?>" name="ops1" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 2º Opção</label><input type="text" placeholder="Adicionar 2º Opção" class="form-control" value="<?php echo $ops2?>" name="ops2" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 3º Opção</label><input type="text" placeholder="Adicionar 3º Opção" class="form-control" value="<?php echo $ops3?>" name="ops3" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 4º Opção</label><input type="text" placeholder="Adicionar 4º Opção" class="form-control" value="<?php echo $ops4?>" name="ops4" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar Resposta</label><input type="text" placeholder="Adicionar Resposta" class="form-control" value="<?php echo $resposta?>" name="resposta" ></div>
                                    <div class="form-group"><input type="submit" name="submit1" value="Atualizar Questão" Class="btn btn-success"></div>     
                                </div>
                                </div> 
                                </div> 
                                </div>
                                </form>
                            </div>
                            
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->         

                                            
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->

<?php
if(isset($_POST["submit1"])){
    mysqli_query($link,"update questoes set Questao='$_POST[questao]',ops1='$_POST[ops1]',ops2='$_POST[ops2]',ops3='$_POST[ops3]',ops4='$_POST[ops4]',resposta='$_POST[resposta]' where id=$id");
    ?>
    <script type="text/javascript">
        window.location="add_edit_Q.php?id=<?php echo $id1 ?>";
    </script>
    <?php
}
?>

<?php
include "rodape.php";
?>
                               
</body>
</html>
