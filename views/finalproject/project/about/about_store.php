<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\about\about;
$about_obj=new about();
if($_SERVER['REQUEST_METHOD']=='POST') {
    if(!empty($_POST['title'])&&!empty($_POST['phone'])&&!empty($_POST['bio'])){
        if (preg_match("/([0-9])/",$_POST['phone'])){
            $about_obj->setAbout($_POST)->about();
        }else {
            $_SESSION['failed'] = "Invalied Inpute Phone no  !";
            header('location:about.php');
        }
    }else{
        $_SESSION['failed']="Inpute Required !";
        header('location:about.php');
    }
}else{
    header('location:index.php');
}

