<?php

include_once("../../../vendor/autoload.php");
use App\Provider\User\User;
$obj = new User();
//  $obj->setData($_POST)->store();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['full_name']) OR !empty($_POST['user_name']) OR !empty($_POST['password ']) OR !empty($_POST['company_name']) OR !empty($_POST['street']) OR !empty($_POST['email'])&& !empty($_POST['phone']) OR !empty($_POST['contact_person']) 
    
          OR !empty($_POST['company_business'])){
         if(preg_match("/([a-zA-Z0-9])/",$_POST['user_name'])) {
            if ($_POST['password'] == $_POST['re_password']) {
                if ($_POST['password'] >= 6) {
                    $available = $obj->setData($_POST)->validity();
                    if (empty($available)) {
                        $obj->setData($_POST)->store();
                    } else {
                        $_SESSION['fail'] = "You'r username or email not exists!!";
                        header("Location:registration.php");
                    }
                } else {
                    $_SESSION['fail'] = "You'r password length 6 equal character and number!!";
                    header("Location:registration.php");
                }

            } else {
                $_SESSION['fail'] = "You'r password doesn't match! plz correct password!!";
                header("Location:registration.php");
           }
        }else{
            $_SESSION['fail'] = "You'r username input character & number!";
            header("Location:registration.php");
        }
    }else {
        $_SESSION['fail']="Field must not be empty!!";
        header("Location:registration.php");
    }
}else{
    $_SESSION['fail']="you'r not access this page!!";
    header("Location:index.php");
}


