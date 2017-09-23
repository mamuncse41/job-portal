<?php
include_once("../../../vendor/autoload.php");
use App\Provider\User\User;
$obj = new User();
$obj->setData($_POST)->update();
