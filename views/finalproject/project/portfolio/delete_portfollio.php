<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\protfollio\protfollio;
$portfollio_obj=new protfollio();
$portfollio_obj->setPortfollio($_GET);
$data=$portfollio_obj->delete_portfollio();