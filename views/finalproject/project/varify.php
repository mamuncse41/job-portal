<?php
include_once ("../../../vendor/autoload.php");
use App\finalproject\user_log\user_log;
$my_obj = new  user_log();
$my_obj->setData($_GET)->email_varification();