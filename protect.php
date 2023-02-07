<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION["emailLogin"])){
header("Location: tblogin.php");
}
?>