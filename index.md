<!DOCTYPE html>
<html lang="en">
<head>
<?php include "index.php"; ?>
<script src="js/ctrl.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/design.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
  
    <div>
        <div class="card mx-auto align-middle loginbar bg-light" style="width: 18rem;">
                
                <div class="card-body">
                  <h3 class="card-title " style="text-align: center;">Login</h3>
                 <form action="index.php" method="post" onsubmit=" return validation();">
                <Label class="form-group">Username </Label>
                
                <input type="text" class="container form-control" name="uname" id="uname">
                
                <Label class="form-group">Password </Label>
                <input type="password" class="container form-control" name="password" id="pwd">
                    <br id="hideme">
                <div class="hide" id="hideshow"><span id="unameerr" class="err">*No fields should be left empty</span><br></div>
                <button type="submit" class="btn btn-primary btn-group"> Login</button> 
                <button class="btn btn-success btn-group" onclick="register()">Register</button>
                
            </form>
            <span class="err"> <?php echo $_SESSION["error"]["message"] ?></span>
                </div>
              </div> 
</div>    
</body>
</html>
