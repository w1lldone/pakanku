<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['tingkat']);

header('location:index.php');
?>