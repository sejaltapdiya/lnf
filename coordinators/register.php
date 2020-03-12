<?php
session_start();

require "../connection.php";


if(isset($_POST["sbtbtn"])){
    $product = $_POST["category"];
    $description = $_POST["description"];
    $date = $_POST["date"];
    $place = $_POST["place"];
    $name = $_POST["name"];
    $pno = $_POST["number"];
    $cord = $_SESSION["user"];
    echo $cord;
    $cpgen = "";

    while(true){
        $cpgen = strval(rand(1000,9999));
        $sql = "SELECT * FROM complaints WHERE cpno='{$cpgen}'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        }
        if(mysqli_num_rows($result) == 0) break;
    }
// 
    $sql = "INSERT INTO complaints(cpno, product, description, date, place, name, pno, coordinator) VALUES('{$cpgen}','{$product}','{$description}','{$date}','{$place}','{$name}','{$pno}','{$cord}');";
    if(mysqli_query($conn,$sql)>=1){
        $_SESSION["cpno"] = $cpgen;
        $_SESSION["product"] = $product;
        $_SESSION["description"] = $description;
        $_SESSION["date"] = $date;
        $_SESSION["place"] = $place;
        $_SESSION["name"] = $name;
        $_SESSION["pno"] = $pno;
        $_SESSION["cord"] = $cord;
        header("Location: confirmation/");

    }
}


?>