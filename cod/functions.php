<?php

function retornaDados(){
include "conecta.php";
$sql = "SELECT * FROM pizzas";
$query = $mysqli->query($sql);

   
return $query;

}


?>