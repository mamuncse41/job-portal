<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\blog\blog;
$blog_ob=new blog();
$blog_ob->setBlog($_POST)->update_blog();