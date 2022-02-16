<?php
session_start();

unset( $_SESSION['username']);

unset($_SESSION['usermobile']);

unset($_SESSION['address']);

unset($_SESSION["email"]);

unset($_SESSION["usertype"]);

session_destroy();

header("Location:../../index.php");
?>