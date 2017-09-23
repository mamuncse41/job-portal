<?php
session_start();
if(!empty($_SESSION['user_info'])){
    unset($_SESSION['user_info']);
    $_SESSION['message']="Logout successfully!";
    header('Location:login.php');
}

