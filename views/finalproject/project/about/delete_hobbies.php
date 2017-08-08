<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\hobbies\hobbies;
$hobbies_obj=new hobbies();
$hobbies_obj->setHobbies($_GET);
$hobbies_obj->delete();