<?php

namespace App\finalproject\about;
use PDO;
class about
{
    public $id='';
    public $userid='';
    public $title='';
    public $phone='';
    public $bio='';
    public function __construct()
    {
       session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setAbout($data=''){
        if(array_key_exists('id',$data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('user_id',$data)){
            $this->userid=$data['user_id'];
        }
        if(array_key_exists('title',$data)){
            $this->title=$data['title'];
        }
        if(array_key_exists('phone',$data)){
            $this->phone=$data['phone'];
        }
        if(array_key_exists('bio',$data)){
            $this->bio=$data['bio'];
        }
        return $this;

    }

    public function about(){

        try{
            $query="SELECT * FROM `abouts` WHERE user_id ="."'".$_SESSION['user_info']['id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function updateAbout(){
        try{

            $query='UPDATE abouts SET unique_id=:unique_id,title=:title,phone=:phone,bio=:bio WHERE id=:id';
            $stmt=$this->pdo->prepare($query);
            $out=$stmt->execute(
                array(
                    ':id'=>$this->id,
                    ':unique_id'=>$this->userid,
                    ':title'=>$this->title,
                    ':phone'=>$this->phone,
                    ':bio'=>$this->bio
                )
            );
            if($out){
                $_SESSION['message']="About information update Successfully  !";
                header('location:about.php');
            }

        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }

}
