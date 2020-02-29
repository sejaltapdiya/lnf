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
             if($row["level"]==1)
             {
                $_SESSION["uname"]=$_POST["id"];
                $_SESSION["full_name"]=$row["full_name"];
                header("Location: admin/");
             }
             if($row["level"]==2)
             {
                $_SESSION["uname"]=$_POST["id"];
                $_SESSION["full_name"]=$row["full_name"];
                header("Location: staff/");
             }
             if($row["level"]==3)
             {
                $_SESSION["uname"]=$_POST["id"];
                $_SESSION["full_name"]=$row["full_name"];
                header("Location: coordinators/");

             }

          }
          else 
          {
              $_SESSION["status"]="pi";
              header("Location: ./");
          }
        }
        else 
        {
            $_SESSION["status"]="wi";
            header("Location: ./");
        }
    }
} 
}
