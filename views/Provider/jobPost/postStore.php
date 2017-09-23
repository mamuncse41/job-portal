<?php
include_once("../../../vendor/autoload.php");
use App\Provider\jobPost\jobPost;
$obj = new jobPost();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['job_catagory'])&& !empty($_POST['job_title'])&& !empty($_POST['vacancies'])
            && !empty($_POST['cv_receive'])&& !empty($_POST['application_day'])
            && !empty($_POST['application_month'])&& !empty($_POST['application_year'])&& !empty($_POST['job_type']) 
            && !empty($_POST['edu_qulification'])&& !empty($_POST['subject_name'])&& !empty($_POST['job_level'])
            && !empty($_POST['mini_experience'])&& !empty($_POST['max_experience'])&& !empty($_POST['job_location'])
        ){
     $obj->setData($_POST)->store();
    }else{
        $_SESSION['fail']="Field must not be empty!!";
        header("Location:addPost.php");
    }
}else{
    $_SESSION['fail']="you'r not access this page!!";
    header("Location:index.php");
}

