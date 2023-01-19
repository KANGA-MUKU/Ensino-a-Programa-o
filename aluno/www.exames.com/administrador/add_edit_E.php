
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
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Selecione o Exame</h1>
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
                            <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Exame</th>
                                            <th scope="col">Duração</th>
                                            <th scope="col">Selecionar</th>
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
                                            <td><a href="add_edit_Q.php?id=<?php echo $row ["id"]; ?>">Selecionar</td>
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

<?php
include "rodape.php";
?>
                               
</body>
</html>
