
<?php
include "cabeçalho.php";
include "../conexao.php";
$id=$_GET["id"];
$Disciplina='';
$res=mysqli_query($link,"select * from categoria_exame where id=$id");
while($row=mysqli_fetch_array($res)){
    $Disciplina=$row["categoria"];    
}

?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Adicionar Questão <?php echo "<font color='red'>" .$Disciplina. "</font>"; ?></h1>
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
                        
                            <div class="col-lg-6">
                                <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="card">
                                <div class="card-header"><strong>Adicionar Nova Questão Textual</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar Questão</label><input type="text" placeholder="Adicionar Questão" class="form-control" name="questao" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 1º Opção</label><input type="text" placeholder="Adicionar 1º Opção" class="form-control" name="ops1" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 2º Opção</label><input type="text" placeholder="Adicionar 2º Opção" class="form-control" name="ops2" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 3º Opção</label><input type="text" placeholder="Adicionar 3º Opção" class="form-control" name="ops3" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 4º Opção</label><input type="text" placeholder="Adicionar 4º Opção" class="form-control" name="ops4" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar Resposta</label><input type="text" placeholder="Adicionar Resposta" class="form-control" name="resposta" ></div>
                                        <div class="form-group"><input type="submit" name="submit1" value="Adicionar Questão" Class="btn btn-success"></div>     
                                </div>
                                </div> 

                                         </div>
                   

                                <div class="col-lg-6">
                                
                                <div class="card">
                                <div class="card-header"><strong>Adicionar Nova Questão com Imagens</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar Questão</label><input type="text" placeholder="Adicionar Questão" class="form-control" name="fquestao" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 1º Opção</label><input type="file" class="form-control" name="fops1" style="padding-bottom:38px" ></div>
                                   <div class="form-group"><label for="company" class=" form-control-label">Adicionar 2º Opção</label><input type="file" class="form-control" name="fops2" style="padding-bottom:38px" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 3º Opção</label><input type="file" class="form-control" name="fops3" style="padding-bottom:38px" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 4º Opção</label><input type="file" class="form-control" name="fops4" style="padding-bottom:38px" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Adicionar 5º Opção</label><input type="file" class="form-control" name="fresposta" style="padding-bottom:38px" ></div>
                                        <div class="form-group"><input type="submit" name="submit2" value="Adicionar Questão" Class="btn btn-success"></div>     
                                </div>
                                </div> 

                                         </div>
                            
                                
                            
                                </div>
                                </form>
                                 </div> 
                                 </div>       

                                            
                                            </div>

<d<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<table class="table table-bordered">
<tr>
<td>#</td>
<td>Questões</td>
<td>Ops1</td>
<td>Ops2</td>
<td>Ops3</td>
<td>Ops4</td>
<td>Editar</td>
<td>Apagar</td>
</tr>
 

    <?php
        $res=mysqli_query($link,"select * from questoes where categoria='$Disciplina' order by numQ asc");
        while ($row=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>"; echo $row["numQ"]; echo "</td>";
            echo "<td>"; echo $row["Questao"]; echo "</td>";
            echo "<td>"; 

            if(strpos($row["ops1"],'opsImage/')!==false){
                ?>
                <img src="<?php echo $row["ops1"]; ?>"  height="50" width="50">
                <?php
            }else{
                echo $row["ops1"];
            }
            
            echo "</td>";
            echo "<td>"; 

            if(strpos($row["ops2"],'opsImage/')!==false){
                ?>
                <img src="<?php echo $row["ops2"]; ?>" height="50" width="50">
                <?php
            }else{
                echo $row["ops2"];
            }
            
            echo "</td>";
            echo "<td>"; 

            if(strpos($row["ops3"],'opsImage/')!==false){
                ?>
                <img src="<?php echo $row["ops3"]; ?>" height="50" width="50">
                <?php
            }else{
                echo $row["ops3"];
            }
            
            echo "</td>";
            echo "<td>"; 

            if(strpos($row["ops4"],'opsImage/')!==false){
                ?>
                <img src="<?php echo $row["ops4"]; ?>" height="50" width="50">
                <?php
            }else{
                echo $row["ops4"];
            }
            
            echo "</td>";
            echo "<td>";
            if(strpos($row["ops4"],'opsImage/')!==false){
                ?>
                <a href="editar_ops_img.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Editar</a>
                <?php
            }else{
                ?>
                <a href="editar_ops.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Editar</a>
                <?php
            }
            echo "</td>";

            echo "<td>";
            ?>
            <a href="apagar_ops.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Apagar</a>
            <?php
            echo "</td>";

            echo "</tr>";
        }
     ?>
</table>
</div>
</div>
</div>
</div>


                                        </div>
                                    </div>

<?php

if(isset($_POST["submit1"])){
$loop=0;
$count=0;
$res=mysqli_query($link,"select * from questoes where categoria='$Disciplina' order by id asc") or die(mysqli_error($link));
$count=mysqli_num_rows($res);

if($count==0){

}else{
    while($row=mysqli_fetch_array($res)){
        $loop=$loop+1;
        mysqli_query($link,"update questoes set numQ='$loop' where id=$row[id]");
    }
}

$loop=$loop+1;
mysqli_query($link,"insert into questoes values(NULL,'$loop','$_POST[questao]','$_POST[ops1]','$_POST[ops2]','$_POST[ops3]','$_POST[ops4]','$_POST[resposta]','$Disciplina')") or die(mysqli_error($link));

?>
<script type="text/javascript">
    alert("Questão Adicionada com Sucesso");
    window.location.href=window.location.href;
</script>
<?php
}

?>


<?php

if(isset($_POST["submit2"])){
$loop=0;
$count=0;
$res=mysqli_query($link,"select * from questoes where categoria='$Disciplina' order by id asc") or die(mysqli_error($link));
$count=mysqli_num_rows($res);

if($count==0){

}else{
    while($row=mysqli_fetch_array($res)){
        $loop=$loop+1;
        mysqli_query($link,"update questoes set numQ='$loop' where id=$row[id]");
    }
}

$loop=$loop+1; 
$tm=md5(time());

$fnm1=$_FILES["fops1"]["name"];
$dst1="./opsImage/".$tm.$fnm1;
$dst_db1="opsImage/".$tm.$fnm1;
move_uploaded_file($_FILES["fops1"]["tmp_name"],$dst1);

$fnm2=$_FILES["fops2"]["name"];
$dst2="./opsImage/".$tm.$fnm2;
$dst_db2="opsImage/".$tm.$fnm2;
move_uploaded_file($_FILES["fops2"]["tmp_name"],$dst2);

$fnm3=$_FILES["fops3"]["name"];
$dst3="./opsImage/".$tm.$fnm3;
$dst_db3="opsImage/".$tm.$fnm3;
move_uploaded_file($_FILES["fops3"]["tmp_name"],$dst3);

$fnm4=$_FILES["fops4"]["name"];
$dst4="./opsImage/".$tm.$fnm4;
$dst_db4="opsImage/".$tm.$fnm4;
move_uploaded_file($_FILES["fops4"]["tmp_name"],$dst4);

$fnm5=$_FILES["fresposta"]["name"];
$dst5="./opsImage/".$tm.$fnm5;
$dst_db5="opsImage/".$tm.$fnm5;
move_uploaded_file($_FILES["fresposta"]["tmp_name"],$dst5);


mysqli_query($link,"insert into questoes values(NULL,'$loop','$_POST[fquestao]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$Disciplina')") or die(mysqli_error($link));

?>
<script type="text/javascript">
    alert("Questão Adicionada com Sucesso");
    window.location.href=window.location.href;
</script>
<?php
}

?>



<?php
include "rodape.php";
?>
                               
</body>
</html>
