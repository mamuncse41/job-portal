<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\education\education;
$education_obj=new education();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['title'])&&!empty($_POST['institute'])&&!empty($_POST['result'])&&!empty($_POST['passing_year'])&&!empty($_POST['course_duretion'])){
        $education_obj->setEducation($_POST)->storeEducation();
    }else{
        $_SESSION['failed']="Inpute Required !";
        header('location:education.php');
    }

}else{
    header('location:../index.php');
}
