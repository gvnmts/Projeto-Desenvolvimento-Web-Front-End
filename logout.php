<?php
session_start();

if(isset($_SESSION['usuario_id'])){
    unset($_SESSION['usuario_id']);
}

header("location: login.html");
?>