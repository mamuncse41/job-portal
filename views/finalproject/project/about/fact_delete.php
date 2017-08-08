<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\facts\facts;
$fact_obj=new facts();
$fact_obj->setFact($_GET);
$data=$fact_obj->fact_delete();