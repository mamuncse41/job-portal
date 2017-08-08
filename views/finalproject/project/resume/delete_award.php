<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\award\award;
$edu_obj=new award();
$edu_obj->setAwarde($_GET);
$data=$edu_obj->delete_award();