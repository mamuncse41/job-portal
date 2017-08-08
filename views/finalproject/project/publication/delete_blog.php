<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\blog\blog;
$skill_obj=new blog();
$skill_obj->setBlog($_GET);
$data=$skill_obj->blog_delete();