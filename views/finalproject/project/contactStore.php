<?php
include_once('../../../vendor/autoload.php');
use App\finalproject\contact\contact;
$contact=new contact();
$contact->setData($_POST)->store();

