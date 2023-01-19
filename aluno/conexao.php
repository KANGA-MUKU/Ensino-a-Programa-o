<?php

$ligar= mysqli_connect('localhost', 'root', 'root', 'Engenharia');


if(!$ligar){
    die("Houve um erro:". mysqli_error());
}
?>
