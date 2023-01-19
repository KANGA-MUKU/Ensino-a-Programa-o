<?php
session_start();
include "conexao.php";
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date."+ $_SESSION[exam_time] mminute"));
include "cabeçalho.php";
if(!isset($_SESSION["usuario"])){
    ?>
<script type="text/javascript">
    window.location="login.php"
</script>
    <?php
}
?>


        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">
        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: ;">
        
        <div class="col-lg-6 col-lg-push-3" style="min-height: 300px; background-color: white;">
        <br>
       <h3><strong><center>Resultados</center></strong></h3> 
        
        <br>
        <br>
        <br>
        <?php
            $certo="0";
            $errado="0";

            if(isset($_SESSION["resposta"])){
                for($i=1;$i<=sizeof($_SESSION["resposta"]);$i++){
                    $resposta="";
                    $res=mysqli_query($link,"select * from questoes where categoria='$_SESSION[categoria_exame]' && numQ=$i");
                    while($row=mysqli_fetch_array($res)){
                        $resposta=$row["resposta"];
                    }

                    if(isset($_SESSION["resposta"][$i])){
                        if($resposta==$_SESSION["resposta"][$i]){
                         
                            $certo=$certo+1;
                        
                        }else{
                            $errado=$errado+1;
                        }
                    }else{
                        $errado=$errado+1;
                    }
                    }
                }
            

            $count=0;
            $res=mysqli_query($link,"select * from questoes where categoria='$_SESSION[categoria_exame]'");
            $count=mysqli_num_rows($res);
            $errado=$count-$certo;
            
            echo "<br";echo "<br>";
            echo "<center>";
            echo "Total de Questões:".$count;
            echo "<br>";
            echo "Questões Certas:".$certo;
            echo "<br>";
            echo "Questões Erradas:".$errado;
            echo "</center";
    
    ?>
        </div></div>
        </div>
<?php 
if(isset($_SESSION["exam_start"])){
    $date=date("Y-m-d");
    mysqli_query($link, "insert into exam_results(id,usuario,tipo_exam,total_q,corretas,erradas,exam_time)values(Null,'$_SESSION[usuario]','$_SESSION[categoria_exame]','$count','$certo','$errado','$date')") or die(mysqli_error($link));
}

if(isset($_SESSION["exam_start"])){

    unset($_SESSION["exam_start"]);
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}

?>
        </div>
        </div>

<?php
include "rodape.php";
?>