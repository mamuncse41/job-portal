<?php

//die();
include_once ("vendor/autoload.php");
use App\finalproject\search_obj\search_obj;
$cllass_obj=new search_obj();
$cllass_obj->setData($_POST);
//    $itemperPage='';
//   $item=$_POST['itemperPage'];
    $itemPerpage=10;
    if(!empty($_GET['page'])){
        $pageNumber=$_GET['page'];
    }else{
        $pageNumber=0;
    }
    if(!empty($_GET['page'])){
        $offset=$itemPerpage*$_GET['page'];
    }else{
        $offset=0;
    }
$data_at = $cllass_obj->find_data($itemPerpage,$offset);
//    print_r($data_at);
$totalRows=$data_at['totalRow'];
$numberOfpage=ceil($totalRows/$itemPerpage);
array_pop($data_at);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cvbank:-Homepage</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
   
    <link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
    <script href="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/apple-icon-180x180.png">
</head>

<body>
<!-- Page container -->
<div class="page-container">

    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content">
                <div class="icon-bar">
                    <a class="active" href="http://localhost/cvbank/index.php"><i class="fa fa-home">Cvbank</i></a> 
                    <a href="http://localhost/cvbank/index.php"><i class="fa fa-search">Home</i></a> 
                    <a href="http://localhost/cvbank/views/Provider/Users/login.php"><i class="fa fa-envelope">Job Provider</i></a> 
                    <a href="http://localhost/cvbank/views/finalproject/project/login.php"><i class="fa fa-globe">Job Seeker</i></a>
                    <a href="http://localhost/cvbank/views/finalproject/project/about_us.php"><i class="fa fa-trash">About Us</i></a> 
                    <a href="http://localhost/cvbank/views/finalproject/project/contact.php"><i class="fa fa-trash">Contact</i></a> 
                </div>
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h3 class="panel-title">Profile Search.... </h3>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="index.php" method="post" class="main-search">



                                 <input type="hidden" name="option"value="settings">
                                       <div class="input-group content-group">
                                      <div class="has-feedback has-feedback-left">

                                    <input type="text" name="keyword" class="form-control input-xlg" placeholder="Ex: Web Developer, PHP Developer">
                                    <div class="form-control-feedback">
                                        <i class="icon-search4 text-muted text-size-base"></i>
                                    </div>
                                </div>

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-xlg">Search</button>
                                </div>
                            </div>

                            <h3 align="center" style="color: red;font-family: 'Berlin Sans FB Demi'">

                                <?php
                                if(isset( $_SESSION['failed1'])){
                                    echo  $_SESSION['failed1'];
                                    unset( $_SESSION['failed1']);
                                }?>

                            </h3>
                            <div class="container">
                                <h2>Search Result</h2>
                                <p></p>
                                <table class="table table-bordered" >
                                    <tbody>
                                    <?php
                                    foreach ($data_at as $key=>$value){ ?>
                                        <tr class="success" >
                                            <td width="120px"><a href="view_details/details.php?id=<?php echo $value['unique_id']; ?>" target="_blank">
                                                    <img class="img-circle" src="<?php
                                                    if(array_key_exists('featured_img',$value)) {
                                                        echo "views/finalproject/project/settings/images/" . $value['featured_img'];

                                                    }

                                                    ?>" width="120px"height="150px"/>
                                                </a></td>
                                            <td> <a href="view_details/details.php?id=<?php echo $value['unique_id']; ?>" target="_blank">
                                                    <?php if(array_key_exists('title',$value)){
                                                        echo $value['title'];
                                                         }
                                                    ?></a><br>
                                               <a href="view_details/details.php?id=<?php echo $value['unique_id']; ?>" target="_blank">
                                                    <?php if(array_key_exists('fullname',$value)){
                                                        echo $value['fullname'];
                                                    }
                                                    ?></a><br>
                                               <a href="view_details/details.php?id=<?php echo $value['unique_id']; ?>" target="_blank">
                                                                <?php if(array_key_exists('description',$value)){
                                                                    echo $value['description'];
                                                                }?>

                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table><br>
                                <?php
                                for($i=0; $i < $numberOfpage; $i++){?>
                                    <ul class="pagination">
                                        <li><?php echo"<a  href=index.php?page=$i>".$i ."</a>";?>
                                         </li>
                               <?php } ?>
                                        <br><br>
                                Item Per Page : <select name="itemperPage"  class="pagination">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select></ul>
                            </div>

                            </form>

                    </div>
                </div>
                <!-- /search field -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>

