<?php

namespace App\finalproject\user_log;
use PDO;
class user_log
{
    private $id='';
    private $username='';
    private $password='';
    private $email='';
    private $token='';
    private $pdo='';

    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setData($data=''){

      if(array_key_exists('username',$data)){
          $this->username=$data['username'];
      }
      if(array_key_exists('password',$data)){
          $this->password=md5($data['password']);
      }
      if(array_key_exists('email',$data)){
          $this->email=$data['email'];
      }
        if(array_key_exists('token',$data)){
            $this->token=$data['token'];
        }
      return $this;
    }

    public function store(){
        $token=sha1($this->username);
        try{
            $query="INSERT INTO `users` (`id`, `unique_id`, `username`, `email`, `password`, `token`, `is_active`) VALUES(:id,:unique_id,:user_name,  :email_address,:password, :token, :is_active)";
            $stmt=$this->pdo->prepare($query);
            $output=$stmt->execute(
                array(
                    ":id"=>null,
                    ":unique_id"=>uniqid(),
                    ":user_name"=>$this->username,
                    ":email_address"=>$this->email,
                    ":password"=>$this->password,
                    ":token"=>$token,
                    ":is_active"=>0,
                )
            );
            $last_id = $this->pdo->lastInsertId();

            $sql_for_at = "INSERT INTO `abouts` (`user_id`) VALUES (:user_id)";
            $stmt=$this->pdo->prepare($sql_for_at);
            $stmt->execute(
                array( ":user_id"=>$last_id ));
            $sql_for_at = "INSERT INTO `settings` (`user_id`) VALUES (:user_id)";
            $stmt=$this->pdo->prepare($sql_for_at);
            $stmt->execute(
                array( ":user_id"=>$last_id ));

//            $txt="http://localhost/cvbank/views/finalproject/project/varify.php?token=$token";
//            echo $txt;
//            die();
             $txt = "Click here for email verify.http://mamunbd.com/verify.php?token=$token";
            $subject="Email Varification..";
            mail($this->email,$subject,$txt);
            if($output){
                 $_SESSION['message'] = "<span style='color:green;font-size:20px;'>Data inserted successfully and you'r email verify!!</span>";
                header("Location:registration.php");

            }
        }catch (PDOException $e){
            echo "ERROR :".$e->getMessage();
        }
    }
    public function validity(){
        try{
            $query="SELECT * FROM `users` WHERE username='$this->username' OR email='$this->email' ";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data=$stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERRRor:".$e->getMessage();
        }
    }
    public function email_varification(){
        try{
            $query="SELECT * FROM `users` WHERE token='$this->token' ";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data=$stmt->fetch();
            if(!empty($data)){
                $query='UPDATE users SET is_active = 1 WHERE token=:tk';
                $stmt=$this->pdo->prepare($query);
                $stmt->execute(
                    array(
                        ':tk'=>$this->token
                    )
                );
                $_SESSION['message']="Email varified. You can login now !!";
                header('location:index.php');

            }
        }catch (PDOException $e){
            echo "ERRRor:".$e->getMessage();
        }
    }
    public function login_user(){
        try{

            $query="SELECT * FROM `users` WHERE username='$this->username' AND password='$this->password' ";

            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data=$stmt->fetch();
             if ($data['is_active'] == '0') {
                $_SESSION['failed'] = "You'r Email not verified yet!!";
                header("Location:index.php");
            } else {
                $_SESSION['user_info'] = $data;
                if (!empty($_SESSION['user_info'])) {
                    header("Location:dashboard.php");
                } else {
                    $_SESSION['failed'] = "Username or Password not match";
                    header("location:index.php");
                }
//               $_SESSION['user_info']=$data;
//               if(!empty($_SESSION['user_info'])){
//                   header('location:dashboard.php');
//
//               }else{
//                   header('location:index.php');
//                   $_SESSION['failed']="Opps ! Invalied UserName or Password  !!";
//               }


        }}catch (PDOException $e){
            echo "ERRRor:".$e->getMessage();
        }
    }}
