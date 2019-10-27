<?php
session_start();

include "common.php";
invalidAccess();

include "dao.php";
if(deleteAccount()){
     $_SESSION["username"]="";
    
    $_SESSION["status"]="LOGGED_OUT";
    setError("Account was successfully deleted");
     header('location: index.php');
}
else
{   
   die('Some error occured while deleting');
}
?>