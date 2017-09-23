
<?php
include_once("../../../vendor/autoload.php");
use App\Provider\User\User;
$obj = new User();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(!empty($_POST['user_name'])&& !empty($_POST['password']))
    {
      $obj->setData($_POST)->login();
    }else{
        $_SESSION['fail']="Input Required !!";
        header('Location:login.php');
    }
}else{
    header('Location:login.php');
}