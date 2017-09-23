<?php
include_once("../../../vendor/autoload.php");
use App\Provider\jobPost\jobPost;
$obj = new jobPost();
$obj->setData($_GET);
 $del_post=$obj->delete();
