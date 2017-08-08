<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\experiences\experiences;
$exprience_obj=new experiences();
$exprience_obj->setExprience($_POST)->storeExperience();