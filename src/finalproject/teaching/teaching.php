<?php
namespace App\finalproject\teaching;
use PDO;
class teaching
{
    public $id = '';
    public $user_id = '';
    public $title = '';
    public $institute='';
    public $description = '';
    public $pdo='';
    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setTeaching($data = '')
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('user_id', $data)) {
            $this->user_id = $data['user_id'];
        }
        if (array_key_exists('title', $data)) {
            $this->title = $data['title'];
        }
        if (array_key_exists('institute', $data)) {
            $this->institute = $data['institute'];
        }
        if (array_key_exists('description', $data)) {
            $this->description = $data['description'];
        }
        return $this;

    }
    public function storeTeaching()
    {
        try {
            $query = "INSERT INTO `teaching` (`id`, `user_id`, `title`, `institute`, `description`) VALUES(:id, :user_id, :title, :institute, :description)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->user_id,
                    ":title" => $this->title,
                    ":institute" => $this->institute,
                    ":description" => $this->description
                )
            );
            if ($out) {
                $_SESSION['message'] = "Teaching information insert Successfully  !";
                header('location:teaching.php');
            }
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
     public function teaching(){
        try{
            $query="SELECT * FROM `teaching` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function teaching_edit(){
        try{
            $query="SELECT * FROM `teaching` WHERE id=".$this->id;
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function update_tec(){
        try {
            $query = 'UPDATE teaching SET title=:title,institute=:institute, description=:description WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':institute' => $this->institute,
                    ':description' => $this->description
                )
            );
            if ($out) {
                $_SESSION['message'] = "Teaching information Update Successfully  !";
                header('location:teaching.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function delete_teaching(){
        try{
            $query="DELETE FROM `teaching` WHERE `teaching`.`id` =".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "teaching information Delete Successfully  !";
                header('location:teaching.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }

}
