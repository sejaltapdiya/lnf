<?php
session_start();
session_destroy();

setcookie("unameForlnf","null", time() - 3600);
header("Location: ./");

?>