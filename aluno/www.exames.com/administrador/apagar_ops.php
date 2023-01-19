<?php
session_start();
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
mysqli_query($link, "delete from questoes where id=$id");
?>
<script type="text/javascript">
    window.location="add_edit_Q.php?id=<?php echo $id1 ?>";
</script>