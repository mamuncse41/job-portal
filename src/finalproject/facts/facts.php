<?php
namespace App\finalproject\facts;
use PDO;
class facts
{
    public $id = '';
    public $userid = '';
    public $title = '';
    public $number_of_fatcs = '';
    public $image_name = '';
    public $pdo = '';

    public function __construct()
    {
        session_start();
        $this->pdo = new PDO('mysql: host=localhost; dbname=cvbank', 'root', '');
    }
    public function setFact($data=''){
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('user_id', $data)) {
            $this->userid = $data['user_id'];
        }
        if (array_key_exists('title', $data)) {
            $this->title = $data['title'];
        }
        if (array_key_exists('number_of_fatcs', $data)) {
            $this->number_of_fatcs = $data['number_of_fatcs'];
        }
        if (array_key_exists('image', $data)) {
            $this->image_name = $data['image'];
        }
        return $this;
    }
    public function storeFact(){
        try {
            $query = "INSERT INTO `facts` (`id`, `user_id`, `title`, `no_of_items`,`img`) VALUES (:id,:user_id, :title, :no_of_items,:img)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":no_of_items" => $this->number_of_fatcs,
                    ":img" => $this->image_name
                )
            );
            if ($out) {
                $_SESSION['message'] = "Facts information insert Successfully  !";
                header('location:facts.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }

    }
    public function fact(){
        try{
            $query="SELECT * FROM `facts` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function fact_edit(){
        try{
            $query="SELECT * FROM `facts` WHERE id=".$this->id;
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function update_fact(){
        try {
            $query = 'UPDATE facts SET  title=:title,no_of_items=:no_of_items,img=:img WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out=$stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':no_of_items' => $this->number_of_fatcs,
                    ':img' => $this->image_name
                )
            );
            if ($out) {
                $_SESSION['message'] = "Facts information update Successfully  !";
                header('location:facts.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function fact_delete(){
        try{
            $query="DELETE FROM `facts` WHERE `facts`.`id` = ".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Facts information Delete Successfully  !";
                header('location:facts.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
}