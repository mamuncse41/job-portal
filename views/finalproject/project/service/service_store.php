<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\service\service;
$service_obj=new service();
if($_SERVER['REQUEST_METHOD']=='POST') {
    if(!empty($_POST['title'])&&!empty($_POST['description'])) {
        $error=array();
        $image_name = uniqid().time().$_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_tmp_location = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $my_extension =explode('.', $image_name);
        $my_exten=strtolower(end($my_extension));
        $required_format = array('jpg', 'jpeg', 'png', 'gif');
        if(in_array($my_exten, $required_format)){
            //    echo "Ase";
        }else{
            $error[]="Invalied Image Formate !";
        }
        if($image_size>2000000){
            $error[]="Image Size Too Large !";
        }
        if(empty($error)){
            move_uploaded_file($image_tmp_location,"service_img/".$image_name);
            $_POST['image']=$image_name;
            $service_obj->setService($_POST)->storeService();
        }else{
            $_SESSION['failed']="Image Not Currect Format";
            header('location:service.php');
        }
    }else {
        $_SESSION['failed'] = "Inpute Required  !";
        header('location:service.php');
    }
}else{
    header('location:index.php');
}