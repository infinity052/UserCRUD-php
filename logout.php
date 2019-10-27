<?php session_start();
include "common.php";
invalidAccess();
if($_SESSION["status"]=="LOGGED_IN"){

logOut();
}
?>