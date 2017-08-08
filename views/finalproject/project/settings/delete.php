<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\settings\settings;
$setting_obj=new settings();
$setting_obj->setSetting($_GET);
$data=$setting_obj->deleteSetting();