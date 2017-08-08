<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\about\about;
$about_obj=new about();
$about_obj->setAbout($_POST);
$about_obj->updateAbout();
