<?php
session_start();
if(!empty( $_SESSION['user_info'])){
    unset( $_SESSION['user_info']);
    $_SESSION['message']="Thanks !";
    header('location:index.php');
}