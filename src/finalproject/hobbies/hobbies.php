<?php
namespace App\finalproject\hobbies;
use PDO;
class hobbies
{
    public $id = '';
    public $userid = '';
    public $title = '';
    public $description = '';
    public $image = '';
    public $pdo='';

    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }

    public function setHobbies($data = '')
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
            $this->image = $data['image'];
        }
        return $this;

    }
    public function hobbiesStore(){
        try {

            $query = "INSERT INTO `hobbies` (`id`, `user_id`, `title`, `description`,`img`) VALUES (:id, :user_id, :title,:description,:img);";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":description" => $this->description,
                    ":img" => $this->image,
                )
            );
            if ($out) {
                $_SESSION['message'] = "Hobbies information insert Successfully  !";
                header('location:hobbies.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function hobbies(){
        try{
            $query="SELECT * FROM `hobbies` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function hobbies_edit(){
        try{
            $query="SELECT * FROM `hobbies` WHERE id=".$this->id;
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function update(){
        try {
            $query = 'UPDATE hobbies SET  title=:title,description=:description,img=:img WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out=$stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':description' => $this->description,
                    ':img' => $this->image
                )
            );
            if ($out) {
                $_SESSION['message'] = "Hobbies information update Successfully  !";
                header('location:hobbies.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }

    }
    public function delete(){
        try{
            $query="DELETE FROM `hobbies` WHERE `hobbies`.`id` =".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Hobbies information Delete Successfully  !";
                header('location:hobbies.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
}