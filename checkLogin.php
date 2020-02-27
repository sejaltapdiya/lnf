<?php

session_start();

require "connection.php";
if(isset($_POST["submitbtn"]))
{
$sql="select * from users;";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        if($row["uname"]==$_POST["id"])
        {
          
          if($row["passwd"]==md5($_POST["pwd"]))
          {
              $_SESSION["uname"]=$_POST["id"];
              $_SESSION["full_name"]=$row["full_name"];
              header("Location: home.php");

          }
        }
    }
} 
}
