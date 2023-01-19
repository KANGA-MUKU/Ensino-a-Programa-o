<?php
session_start();
include "cabeçalho.php";
include "conexao.php";
if(!isset($_SESSION["usuario"])){
    ?>
<script type="text/javascript">
    window.location="login.php"
</script>
    <?php
}
?>


        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
            <center>
                <h1>Resultados Anteriores</h1>
            </center>
            <?php
            $res=mysqli_query($link,"select * from 	exam_results where usuario='$_SESSION[usuario]' order by id desc");
            $count=mysqli_num_rows($res);

            if($count==0){
                ?>
                
            <center>
                <h1>Sem Resultados Encontrados</h1>
            </center>
                <?php
            }else{
                echo "<table class='table table-bordered'>";
                echo "<tr style='background-color: #006df0; color:white'>";
                echo "<th>"; echo "Usuario"; echo "</th>";
                echo "<th>"; echo "Exame"; echo "</th>";
                echo "<th>"; echo "Nº de Perguntas"; echo "</th>";
                echo "<th>"; echo "Corretas"; echo "</th>";
                echo "<th>"; echo "Erradas"; echo "</th>";
                echo "<th>"; echo "Data"; echo "</th>";
                echo "</tr>";
                

                while($row=mysqli_fetch_array($res)){
                echo "<tr>"; 
                echo "<td>"; echo $row["usuario"]; echo "</td>";
                echo "<td>"; echo $row["tipo_exam"]; echo "</td>";
                echo "<td>"; echo $row["total_q"]; echo "</td>";
                echo "<td>"; echo $row["corretas"]; echo "</td>";
                echo "<td>"; echo $row["erradas"]; echo "</td>";
                echo "<td>"; echo $row["exam_time"]; echo "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }

            ?>

            </div>

        </div>


<?php
include "rodape.php";
?>