<?php

session_start();

require "connection.php";
if (isset($_POST["submitbtn"])) {
    $sql = "select * from users WHERE uname='" . $_POST['id'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row["uname"] == $_POST["id"]) {
            echo "match<br>";
            if ($row["passwd"] == md5($_POST["pwd"])) {
                $_SESSION["status"] = "check";
                $_SESSION["uname"] = $_POST["id"];
                header("Location: setcookie.php");
            } else {
                $_SESSION["status"] = "pi";
                header("Location: ./");
            }
        }
    } else {
        $_SESSION["status"] = "wi";
        header("Location: ./");
    }
}
