<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\teaching\teaching;
$teaching_obj=new teaching();
if($_SERVER['REQUEST_METHOD']=='POST') {
    if(!empty($_POST['title'])&&!empty($_POST['institute'])&&!empty($_POST['description']))
    {
        $teaching_obj->setTeaching($_POST)->storeTeaching();

        header('location:teaching.php');
    }else{
        $_SESSION['failed']="Field Can not be empty !";
        header('location:teaching.php');
    }
}else{
    header('location:index.php');
}

