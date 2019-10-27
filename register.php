<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "connect.php";
    include "common.php";
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn=getConnection();
        $stmt=$conn->prepare("insert into login (username,password,firstname,lastname,email) values(?,?,?,?,?);");
        $stmt->bind_param("sssss",$username,$password,$firstname,$lastname,$email);
        $username=correctInput($_POST["username"]);
        $password=correctInput($_POST["password"]);
        $firstname=correctInput($_POST["firstname"]);
        $lastname=correctInput($_POST["lastname"]);
        $email=correctInput($_POST["email"]);
        if($stmt->execute()){
            
            setError("Registered Successfully");
            
            
            header('location: index.php');

        }
        else
        {
            setError("Error occured while registering");
        }
    }
    
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div>
        <div class="card mx-auto align-middle loginbar bg-light" style="width: 18rem;">
                
                <div class="card-body">
                  <h3 class="card-title " style="text-align: center;">Register</h3>
                  <form action="register.php" method="post" >
    <label for="" class="form-group label-font ">First Name</label>
    <div class="input-group input-group-sm"><input type="text" class="container form-control" name="firstname" required>
    </div>    
    <label for="" class="form-group label-font">Last Name</label>
   
    <div class="input-group input-group-sm"> <input type="text" class="container form-control" name="lastname" required>
    </div>
    <label for="" class="form-group label-font id="reg-uname"">Username</label>
    <div class="input-group input-group-sm"> <input type="text" class="container form-control" name="username" required>
    
    </div>
    <label for="" class="form-group label-font id="reg-pass" ">Password</label>
    <div class="input-group input-group-sm"> <input type="password" class="container form-control" name="password" required>
    </div>
    <label for="" class="form-group label-font"> Email</label>
    <div class="input-group input-group-sm"><input type="email" class="container form-control" name="email" required>
    </div>
    <br>
    <div class="form-group container" style="align: center">
    <button class="btn btn-success">Register</button>
    </div>
    </form>
                </div>
              </div> 
</body>
</html>