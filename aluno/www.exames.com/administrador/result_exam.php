
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
                        <h1>Resultados Dos Exames</h1>
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
                            <?php
            $res=mysqli_query($link,"select * from 	exam_results order by id desc");
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
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->         

                                            
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->

<?php
include "rodape.php";
?>
                               
</body>
</html>
