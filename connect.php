<?php 

function getConnection(){
    $server="remotemysql.com:3306"; 
$uid="chYpl2ermQ";
$pwd="nn1HYNjlr7";
$db="chYpl2ermQ";
    return new mysqli($server,$uid,$pwd,$db);
}

?>
