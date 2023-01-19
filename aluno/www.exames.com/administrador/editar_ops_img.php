
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
                        <h1>Editar Questão com Imagens</h1>
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
                                
                                <div class="card">
                                    <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="card-header"><strong>Adicionar Nova Questão com Imagens</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar Questão</label><input type="text" placeholder="Adicionar Questão" class="form-control" value="<?php echo $questao; ?>" name="fquestao" ></div>
                                    <div class="form-group"><img src="<?php echo $ops1; ?>" height="50" width="50"><br><label for="company" class=" form-control-label">Adicionar 1º Opção</label><input type="file" class="form-control" name="fops1" style="padding-bottom:38px" ></div>
                                   <div class="form-group"><img src="<?php echo $ops2; ?>" height="50" width="50"><br><label for="company" class=" form-control-label">Adicionar 2º Opção</label><input type="file" class="form-control" name="fops2" style="padding-bottom:38px" ></div>
                                    <div class="form-group"><img src="<?php echo $ops3; ?>" height="50" width="50"><br><label for="company" class=" form-control-label">Adicionar 3º Opção</label><input type="file" class="form-control" name="fops3" style="padding-bottom:38px" ></div>
                                    <div class="form-group"><img src="<?php echo $ops4; ?>" height="50" width="50"><br><label for="company" class=" form-control-label">Adicionar 4º Opção</label><input type="file" class="form-control" name="fops4" style="padding-bottom:38px" ></div>
                                    <div class="form-group"><img src="<?php echo $resposta; ?>" height="50" width="50"><br><label for="company" class=" form-control-label">Resposta</label><input type="file" class="form-control" name="fresposta" style="padding-bottom:38px" ></div>
                                        <div class="form-group"><input type="submit" name="submit2" value="Atualizar Questão" Class="btn btn-success"></div>     
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
if(isset($_POST["submit2"])){
    
$ops1=$_FILES["fops1"]["name"];
$ops2=$_FILES["fops2"]["name"];
$ops3=$_FILES["fops3"]["name"];
$ops4=$_FILES["fops4"]["name"];
$resposta=$_FILES["fresposta"]["name"];

$tm=md5(time());

if($ops1!=""){
    $dst1="./opsImage/".$tm.$ops1;
    $dst_db1="opsImage/".$tm.$ops1;
    move_uploaded_file($_FILES["fops1"]["tmp_name"],$dst1);
    mysqli_query($link,"update questoes set Questao='$_POST[fquestao]',ops1='$dst_db1' where id=$id") or die(mysqli_error($link));
}

if($ops2!=""){
    $dst2="./opsImage/".$tm.$ops2;
    $dst_db2="opsImage/".$tm.$ops2;
    move_uploaded_file($_FILES["fops2"]["tmp_name"],$dst2);
    mysqli_query($link,"update questoes set Questao='$_POST[fquestao]',ops2='$dst_db2' where id=$id") or die(mysqli_error($link));
}

if($ops3!=""){
    $dst3="./opsImage/".$tm.$ops3;
    $dst_db3="opsImage/".$tm.$ops3;
    move_uploaded_file($_FILES["fops3"]["tmp_name"],$dst3);
    mysqli_query($link,"update questoes set Questao='$_POST[fquestao]',ops3='$dst_db3' where id=$id") or die(mysqli_error($link));
}

if($ops4!=""){
    $dst4="./opsImage/".$tm.$ops4;
    $dst_db4="opsImage/".$tm.$ops4;
    move_uploaded_file($_FILES["fops4"]["tmp_name"],$dst4);
    mysqli_query($link,"update questoes set Questao='$_POST[fquestao]',ops4='$dst_db4' where id=$id") or die(mysqli_error($link));
}

if($resposta!=""){
    $dst5="./opsImage/".$tm.$resposta;
    $dst_db5="opsImage/".$tm.$resposta;
    move_uploaded_file($_FILES["fresposta"]["tmp_name"],$dst5);
    mysqli_query($link,"update questoes set Questao='$_POST[fquestao]',resposta='$dst_db5' where id=$id") or die(mysqli_error($link));
}

mysqli_query($link,"update questoes set Questao='$_POST[fquestao]' where id=$id") or die(mysqli_error($link));

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
