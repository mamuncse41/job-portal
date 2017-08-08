<?php
session_start();
include_once ("../../../vendor/autoload.php");
use App\finalproject\user_log\user_log;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(!empty($_POST['username'])&& !empty($_POST['password']))
    {
        $my_obj = new  user_log();
        $my_obj->setData($_POST)->login_user();

    }else{
        $_SESSION['failed']="Input Required !!";
        header('location:index.php');
    }
}else{
    header('location:index.php');
}
