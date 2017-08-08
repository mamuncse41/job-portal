<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\skill\skill;
$skill_obj=new skill();
$skill_obj->setSkill($_POST)->update_skill();
