<?php session_start();
include "dao.php";  
include "common.php";
invalidAccess();
$err="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(setDetail("firstname",correctInput($_POST["firstname"])) && setDetail("lastname",correctInput($_POST["lastname"])) &&
     setDetail("email",correctInput($_POST["email"]))){
         $err="Records updated";
     }
     else
     {
         $err="Error occured please try again after some other time";
     }

}


$firstname=getDetail("firstname");
$lastname=getDetail("lastname");
$username=getDetail("username");
$email=getDetail("email");
include "templates/dashboard.html";
?>

<html>
<body>
    <br><br>
    <div class="container bg"> 
    <div class="container form-group">
    <h2 class="display-4 whitecolor" > Your Details</h2>
    </div>
    <br>
    <form action="profile.php" method="post">
    <div class="container form-group" id="label1"><label class="h5 whitecolor">Name:&nbsp &nbsp </label><label class="label-font whitecolor"><?php echo $firstname." ".$lastname; ?></label></div>
    <div class="container form-group input-group input-group-sm hide" id="input1"><div><label class="h5 whitecolor">First Name:&nbsp </div> <div class="input-group-prepend"><input type="text" class="form-control" value="<?php echo $firstname?>" name="firstname" required></label> </div> </div>
    <div class="container form-group input-group input-group-sm hide" id="input2"><div><label class="h5 whitecolor">Last Name:&nbsp </div> <div class="input-group-prepend"><input type="text" class="form-control" value="<?php echo $lastname?>" name="lastname" required></label> </div> </div>
    <div class="container form-group" id="label2"><label for="" class="h5 whitecolor">Username:&nbsp &nbsp</label><label class="label-font whitecolor"><?php echo $username; ?></label></div>
   
    <div class="container form-group" id="label3"><label for="" class="h5 whitecolor">Email Id:&nbsp &nbsp</label><label class="label-font whitecolor"><?php echo $email; ?></label></div>
    <div class="container form-group input-group input-group-sm hide" id="input3"><div><label class="h5 whitecolor">Email Id:&nbsp </div> <div class="input-group-prepend"><input type="text" class="form-control" value="<?php echo $email?>" name="email" required></label> </div> </div>
    <div class="container form-group"> <button class="btn btn-info form-group" onclick="updatedetails()" id="update" type="button">Update Details</button> <button class="hide" id="submit">Submit</button></form> <span class="err"><?php echo " ".$err; ?></span></div>
    
    </div>
</body>
</html>