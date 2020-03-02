<?php
session_start();
setcookie("unameForlnf", $_SESSION["uname"], time()+(86400*30));
header("Location: ./");

?>