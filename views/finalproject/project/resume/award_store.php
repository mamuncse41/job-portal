<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\award\award;
$award_obj=new award();
$award_obj->setAwarde($_POST)->storeAward();