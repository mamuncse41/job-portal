<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\teaching\teaching;
$teaching_obj=new teaching();
$teaching_obj->setTeaching($_GET);
$teaching_obj->delete_teaching();