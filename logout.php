<?php

session_start();
session_abort();
session_destroy();

setcookie("id_user", "", 0, '/');
header("location:index.php");
exit();

?>