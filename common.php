<?php

function setSession(){
    if(!isset($_SESSION["username"])){
        $_SESSION["username"]="";
    }
    if(!isset($_SESSION["error"])){
        $_SESSION["error"]=array("message"=>"","displayedOnce"=>false);
    }
    if(!isset($_SESSION["status"])){
        $_SESSION["status"]="LOGGED_OUT";
    }
}
function resetError(){
    if($_SESSION["error"]["displayed"]>=2){
        $_SESSION["error"]["message"]="";
        $_SESSION["error"]["displayed"]=0;
    }
    else{
        $_SESSION["error"]["displayed"]++;
    }
}
function logOut(){
    $_SESSION["username"]="";
    $_SESSION["status"]="LOGGED_OUT";
    setError("You have been successfully logged out");
    header('location: index.php');
    
}

function setError($message){
    $_SESSION["error"]["displayed"]=0;
    $_SESSION["error"]["message"]=$message;
    $_SESSION["error"]["displayed"]++;
}

function invalidAccess(){
    if ($_SESSION["status"]!="LOGGED_IN"){
        setError("Please login first");
        header('location: index.php');
    }
}
function correctInput($data){
    $data=stripslashes($data);
    return trim($data);
}
?>