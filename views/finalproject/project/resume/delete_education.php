<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\education\education;
$edu_obj=new education();
$edu_obj->setEducation($_GET);
$data=$edu_obj->delete_education();