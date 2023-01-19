<?php 
session_start();
include "../conexao.php";

$numQ="";
$questao="";
$ops1="";
$ops2="";
$ops3="";
$ops4="";
$resposta="";
$count="";
$ans="";

$queno=$_GET["questionno"];

if(isset($_SESSION["resposta"][$queno])){
    $ans=$_SESSION["resposta"][$queno];
}

$res=mysqli_query($link,"select * from questoes where categoria='$_SESSION[categoria_exame]' && numQ=$_GET[questionno]");
$count=mysqli_num_rows($res);

if($count==0){
    echo "over";
}else{
    while($row=mysqli_fetch_array($res)){
        $numQ=$row["numQ"];
        $questao=$row["Questao"];
        $ops1=$row["ops1"];
        $ops2=$row["ops2"];
        $ops3=$row["ops3"];
        $ops4=$row["ops4"];
    }
    ?>

<br>
    <table>
        <tr>
            <td style="font-weight:bold; font-size:18px" colspan="2">
            <?php echo  "( ".$numQ ." ) ". $questao; ?>
        </td>
        </tr>
    </table>
   
    <table style="margin-left:10px">
        <tr>
            <td>
                <input type="radio" name="r1" id="r1" value="<?php echo $ops1; ?>" onclick="radioclick(this.value, <?php echo $numQ ?>)"
                <?php
                if($ans==$ops1){
                    echo "checked";
                }
                ?>>
            </td>
            <td style="padding-left:10px">
                 <?php
                 if(strpos($ops1,'opsImage/') !==false){
                    ?>
                    <img src="administrador/<?php echo $ops1; ?>" height="100" width="100">
                    <?php
                 }else{
                    echo $ops1;
                 }
                 ?>
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="r1" id="r1" value="<?php echo $ops2;?>" onclick="radioclick(this.value,<?php echo $numQ ?>)"
                <?php
                if($ans==$ops2){
                    echo "checked";
                }
                ?>>
            </td>
            <td style="padding-left:10px">
                 <?php
                 if(strpos($ops2,'opsImage/') !==false){
                    ?>
                    <img src="administrador/<?php echo $ops1; ?>" height="100" width="100">
                    <?php
                 }else{
                    echo $ops2;
                 }
                 ?>
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="r1" id="r1" value="<?php echo $ops3;?>" onclick="radioclick(this.value,<?php echo $numQ ?>)"
                <?php
                if($ans==$ops3){
                    echo "checked";
                }
                ?>>
            </td>
            <td style="padding-left:10px">
                 <?php
                 if(strpos($ops3,'opsImage/') !==false){
                    ?>
                    <img src="administrador/<?php echo $ops3; ?>" height="100" width="100">
                    <?php
                 }else{
                    echo $ops3;
                 }
                 ?>
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="r1" id="r1" value="<?php echo $ops4;?>" onclick="radioclick(this.value,<?php echo $numQ ?>)"
                <?php
                if($ans==$ops4){
                    echo "checked";
                }
                ?>>
            </td>
            <td style="padding-left:10px">
                 <?php
                 if(strpos($ops4,'opsImage/') !==false){
                    ?>
                    <img src="administrador/<?php echo $ops1; ?>" height="100" width="100">
                    <?php
                 }else{
                    echo $ops4;
                 }
                 ?>
            </td>
        </tr>
    </table>
<?php     
}
?>