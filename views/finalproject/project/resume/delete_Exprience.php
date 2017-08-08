<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\experiences\experiences;
$exp_obj=new experiences();
$exp_obj->setExprience($_GET);
$exp_obj->delete_Exprience();