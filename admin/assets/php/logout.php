<?php
session_start();

unset($_SESSION['name']);

unset($_SESSION['email']);
unset($_SESSION['phone']);

header("Location:../../login.php");
?>