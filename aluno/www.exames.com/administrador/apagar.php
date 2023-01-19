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
mysqli_query($link,"delete from categoria_exame where id=$id");
?>
 <script type="text/javascript">
      window.location="categoria.php";
    </script>