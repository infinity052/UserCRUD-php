<?php 

function getConnection(){
    $server=//database server; 
$uid=//username;
$pwd=//password;
$db=//db name;
    return new mysqli($server,$uid,$pwd,$db);
}

?>
