<?php session_start(); 
include "common.php";

invalidAccess();

include "dao.php";
$err="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
     if($_POST["oldpass"]!=getDetail("password")){
       $err="Incorrect Password";
       
     }
     if($_POST["newpass"]!=$_POST["newpassconf"]){
       $err="The passwords do not match";
     }
     if($err==""){
      if(setDetail("password",$_POST["newpass"])){
        $err="Password has been changed successfully";
      }
      else
      $err="Error occured, Please try again some other time";
     }
  }

include "templates/dashboard.html";


?>
<html>
<body>
<br><br>
<div class="bg container">
<form action="changepassword.php" method="post">
    <div class="container form-group">
        <h4 class="display-4 whitecolor">Change Password</h4>
    </div>
    <br>
  <div class="form-group">
    <label style="color: white;">Old Password</label>
    <input type="password" class="form-control" placeholder="Enter Current Password" name="oldpass" required>
    
  </div>
  <div class="form-group">
    <label style="color: white;">New Password</label>
    <input type="password" class="form-control" placeholder="Enter New Password" name="newpass" required>
  </div>
  <div class="form-group">
    <label style="color: white;">Confirm New Password</label>
    <input type="password" class="form-control" placeholder="Confirm New Password" name="newpassconf" required>
  </div>

  <button type="submit" class="btn btn-primary form-group">Submit</button>
  <span class="err">&nbsp <?php echo $err?></span>
</form>
</div>
</body>
</html>