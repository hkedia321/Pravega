<?php
session_start();
$_SESSION['user_auth']=null;
session_destroy();
header("Location:admin.php");
?>