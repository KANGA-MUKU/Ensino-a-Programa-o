<?php
session_start();

if(!isset($_SESSION["usuario"])){
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php

if(!isset($_SESSION["usuario"])){
    ?>
<script type="text/javascript">
    window.location="login.php"
</script>
    <?php
}

}
?>

<?php
include "conexao.php";
include "cabeçalho.php";
?>


        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">

            <?php
            $res=mysqli_query($link,"select * from categoria_exame");
            while($row=mysqli_fetch_array($res)){
                ?>
                <input type="button" class="btn btn-success form-control" value="<?php echo $row["categoria"]; ?>" style="margin-top: 10px; background-color:brown; color:white; border-radius:200px;" onclick="set_exam_type_session(this.value);">
                <?php
            
            }
            ?>

</div>
        </div>


<?php
include "rodape.php";
$_SESSION["end_time"]=0;
?>

<script type="text/javascript">
    
    function set_exam_type_session(categoria_exame)
    {
        var xmlhttp= new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if(xmlhttp.readyState== 4 && xmlhttp.status== 200) {
                window.location="dashboard.php";
            }
        };
        
        xmlhttp.open("GET","forajax/set_exam_type_session.php?categoria_exame="+ categoria_exame, true);
        xmlhttp.send(null);
    }

    
</script>