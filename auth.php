<?php

session_start();
if(!isset($_SESSION['usuario']) || (trim($_SESSION['usuario']) == ''))
{
    header('location: index.php');
    exit();
}

?>
