<?php 
include "connect.php";
$username=$_SESSION["username"];

function getDetail($detail){ 
    
    $conn=getConnection();
    $detail=$conn->query("select ".$detail." from login where username='".$GLOBALS["username"]."';")->fetch_assoc()[$detail];
    $conn->close();
    return $detail;
    

}
function setDetail($detail,$value){
    $conn=getConnection();
    if($conn->query("update login set ".$detail."='".$value."' where username='".$GLOBALS["username"]."';")){
        $conn->close();
        return true;
    }    
    else 
    $conn->close();    
    return false;
}
function checkDB(){
    $conn=getConnection();
    $username = $_POST["uname"];
    $password = $_POST["password"];
    $query="select username and password from login where username='".$username."' and 
    password='".$password."';";
    $result=$conn->query($query);
    if($result->num_rows >0){
        $conn->close();
        $_SESSION["username"]="$username";
       return true;
    }
    else
    $conn->close();
    return false;
    
    }

function deleteAccount(){
    
    $conn=getConnection();
    $query="delete from login where username='".$GLOBALS["username"]."';";
    if($conn->query($query)){
        $conn->close();
        return true;
    }
    else 
    $conn->close();
    return false;
}

?>