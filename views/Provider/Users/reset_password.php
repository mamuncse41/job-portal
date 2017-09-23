<?php
include_once("../../../vendor/autoload.php");
use App\Provider\User\User;
$obj = new User();
//$data=$obj->setData($_POST)->selectPassword();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
   if ($_POST['password'] == $_POST['re_password']) {

        $avilable = $obj->setData($_POST)->selectPassword();
        if (empty($avilable)) {
            $obj->setData($_POST)->reset_password();
        } else {
            $_SESSION['fail'] = "You'r username or email not exists!!";
            header("Location:change_password.php");
        }
    }else{
    $_SESSION['fail']="you'r not access this page!!";
    header("Location:index.php");
}
}

