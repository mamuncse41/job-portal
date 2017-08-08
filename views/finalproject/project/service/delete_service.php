<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\service\service;
$service_obj=new service();
$service_obj->setService($_GET);
$service_obj->delete_service();