<?php
namespace App\finalproject\service;
use PDO;
class service
{
    public $id = '';
    public $userid = '';
    public $title = '';
    public $description = '';
    public $image_name = '';
    public $pdo='';
    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setService($data = '')
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('user_id', $data)) {
            $this->userid = $data['user_id'];
        }
        if (array_key_exists('title', $data)) {
            $this->title = $data['title'];
        }
        if (array_key_exists('description', $data)) {
            $this->description = $data['description'];
        }
        if (array_key_exists('image', $data)) {
            $this->image_name = $data['image'];
        }
        return $this;

    }
    public function storeService()
    {
        try {
            $query = "INSERT INTO `services` (`id`, `user_id`, `title`, `description`, `img`)VALUES (:id, :user_id, :title,:description,:img)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":description" => $this->description,
                    ":img" => $this->image_name,
                )
            );
            if ($out) {
                $_SESSION['message'] = "Service information insert Successfully  !";
                header('location:service.php');
            }
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
     public function service(){
        try{
            $query="SELECT * FROM `services` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function service_edit(){
        try{
            $query="SELECT * FROM `services` WHERE id=".$this->id;
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function update_service(){
        try {
            $query = 'UPDATE services SET  title=:title,description=:description,img=:img WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out=$stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':description' => $this->description,
                    ':img' => $this->image_name
                )
            );
            if ($out) {
                $_SESSION['message'] = "Service information update Successfully  !";
                header('location:service.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function delete_service(){
        try{
            $query="DELETE FROM `services` WHERE `services`.`id` =".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Service information Delete Successfully  !";
                header('location:service.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }

}
