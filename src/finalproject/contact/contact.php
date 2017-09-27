<?php

namespace App\finalproject\contact;
use PDO;
class contact
{
    private $id='';
    private $name='';
    private $email='';
    private $phone='';
    private $message='';
    private $pdo='';

    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setData($data=''){
      
      if(array_key_exists('name',$data)){
          $this->name=$data['name'];
      }
      if(array_key_exists('phone',$data)){
          $this->phone=$data['phone'];
      }
      if(array_key_exists('email',$data)){
          $this->email=$data['email'];
      }
        if(array_key_exists('message',$data)){
            $this->message=$data['message'];
        }
      return $this;
    }

    public function store(){
        try{
            $query="INSERT INTO `contact` (`id`,`name`, `phone`, `email`, `message`) VALUES(:id,:name,:phone,  :email,:message)";
            $stmt=$this->pdo->prepare($query);
            $output=$stmt->execute(
                array(
                    ":id"=>null,
                    ":name"=> $this->name,
                    ":phone"=>$this->phone,
                    ":email"=>$this->email,
                    ":message"=>$this->message,
  
                )
            );
            
            if($output){
                 $_SESSION['message'] = "<span style='color:green;font-size:20px;'>Message saved successfully!!</span>";
                header("Location:contact.php");
            }
            
        }catch (PDOException $e){
            echo "ERROR :".$e->getMessage();
        }
    }
   
    }


