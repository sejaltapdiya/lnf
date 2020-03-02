<?php 
//  session_start();
//  if(isset($_SESSION["status"])) echo $_SESSION["status"]."<br>";else echo "not found <br>";
//  if(isset($_SESSION["status"]))
//  {
//      if($_SESSION["status"] == "check"){
//          if($_SESSION["level"] == "1"){
//             header("Location: admin/");
//          }
//          else if($_SESSION["level"] == "2"){
//             header("Location: staff/");
//          }
//          else if($_SESSION["level"] == "3"){
//             header("Location: coordinators/");
//          }
         
//      }
//      if($_SESSION["status"]=="wi")
//      {
//         echo "<script> alert('User Not found')</script>";
//      }
//      if($_SESSION["status"]=="pi")
//      {
//         echo "<script> alert('ID password mismatch')</script>";
//      }
//      session_destroy();
//  }
// ?>



<?php

session_start();

if(isset($_COOKIE["unameForlnf"])){
   require "connection.php";
   $sql = "SELECT level FROM users WHERE uname=\"".$_COOKIE["unameForlnf"]."\"";
   $result = mysqli_query($conn,$sql);
   $level = mysqli_fetch_assoc($result)["level"];
   if($level == 1){
      header("Location: ./admin/");
   }
   else if($level == 2){
      header("Location: ./staff/");
   }
   else if($level == 3){
      header("Location: ./coordinators/");
   }
}


if(isset($_SESSION["status"])){
   echo $_SESSION["status"]."<br>";
   if($_SESSION["status"]=="wi")
     {
        echo "<script> alert('User Not found')</script>";
     }
     if($_SESSION["status"]=="pi")
     {
        echo "<script> alert('ID password mismatch')</script>";
     }
     session_destroy();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<br>
<br>
<br>
    <form action="checkLogin.php" method="POST">
    <div class="form-group">
        <label for="name" class="col">ID: </label>
        <input type="text" class="form-control col" placeholder="Enter ID" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd"> 
          </div>
          <div>
         <button type="submit" class="btn btn-primary" name="submitbtn" value="submit">Submit</button>
          </div>
        </form>
     </div>
    </body>
</html>
