<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\teaching\teaching;
$teachin_obj=new teaching();
$teachin_obj->setTeaching($_POST)->update_tec();

