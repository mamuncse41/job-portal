<?php

namespace App\finalproject\settings;
use PDO;
class settings
{
    private $id='';
    private $title='';
    private $fullname='';
    private $address='';
    private $description='';
    private $image_name='';
    private $user_id='';
    private $pdo='';
    public function __construct()
    {
        session_start();
          $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setSetting($data=''){

        if(array_key_exists('id',$data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('user_id',$data)){
            $this->user_id=$data['user_id'];
        }
          if(array_key_exists('title',$data)){
              $this->title=$data['title'];
          }
        if(array_key_exists('fullname',$data)){
            $this->fullname=$data['fullname'];
        }

        if(array_key_exists('description',$data)){
            $this->description=$data['description'];
        }
        if(array_key_exists('address',$data)){
            $this->address=$data['address'];
        }
        if(array_key_exists('image',$data)){
            $this->image_name=$data['image'];
        }

        return $this;
    }

    public function setting()
    {
        try {
            $query = "SELECT * FROM `settings` WHERE user_id=" . "'" . $_SESSION['user_info']['id'] . "'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            $_SESSION['user_setting']=$data;
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function setting_view()
    {
        try {
            $query = "SELECT * FROM `settings` WHERE id=".$this->id;
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function updateSetting(){
        try {
            $query = 'UPDATE settings SET  unique_id=:unique_id,title=:title,fullname=:fullname,description=:description,address=:address,featured_img=:featured_img WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out=$stmt->execute(
                array(
                    ':id' => $this->id,
                    ':unique_id' => $this->user_id,
                    ':title' => $this->title,
                    ':fullname'=>$this->fullname,
                    ':description' => $this->description,
                    ':address'=>$this->address,
                    ':featured_img'=>$this->image_name
                )
            );
            if ($out) {
                $_SESSION['message'] = "Settings Information Update Successfully  !";
                header('location:settings.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function deleteSetting(){
        try{
            $query="DELETE FROM `settings` WHERE `settings`.`id` =".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Settings information Delete Successfully  !";
                header('location:settings.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
}