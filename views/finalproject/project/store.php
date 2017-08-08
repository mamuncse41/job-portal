<?php
include_once ("../../../vendor/autoload.php");
use App\finalproject\user_log\user_log;
$my_obj = new  user_log();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(!empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['email']))
  {
       if($_POST['email']==$_POST['repeat_email'])
       {
           if (preg_match("/([a-zA-Z0-9])/",$_POST['username']))
           {
               if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
               {
                   if (strlen($_POST['password']) >= '8') {
                       $validity=$my_obj->setData($_POST)->validity();
                       if(empty($validity)){
                           $my_obj->setData($_POST)->store();
                           $my_obj->storeAbout();
                       }else{
                           $_SESSION['failed']=" This Username is already taken !";
                           header('location:registration.php');
                       }
                   }else{
                       $_SESSION['failed']=" Your Password Must Contain At Least 8 Characters !";
                      header('location:registration.php');
                       }
               }else{
                   $_SESSION['failed']="Invalid email format !";
                   header('location:registration.php');
                    }
           }else{
               $_SESSION['failed']="Inpute Invalied !";
               header('location:registration.php');
                }
       }else{
           $_SESSION['failed']="Email address Not Match !";
           header('location:registration.php');
            }
    }else{
        $_SESSION['failed']="Inpute Required !";
        header('location:registration.php');
         }
}else{
    header('location:index.php');
}
