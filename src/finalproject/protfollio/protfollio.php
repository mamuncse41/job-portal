<?php
namespace App\finalproject\protfollio;
use PDO;
class protfollio
{
    public $id = '';
    public $userid = '';
    public $title = '';
    public $description = '';
    public $catagory = '';
    public $image = '';
    public $pdo='';
    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setPortfollio($data = '')
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
        if (array_key_exists('catagory', $data)) {
            $this->catagory = $data['catagory'];
        }
        if (array_key_exists('image', $data)) {
            $this->image = $data['image'];
        }
        return $this;
    }
    public function portfollioStore(){
        try {

            $query = "INSERT INTO `portfolios` (`id`, `user_id`, `title`, `description`, `img`, `category`) VALUES (:id, :user_id, :title,:description,:img,:category)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":description" => $this->description,
                    ":img" => $this->image,
                    ":category" => $this->catagory
                )
            );
            if ($out) {
                $_SESSION['message'] = "Portfolios information insert Successfully  !";
                header('location:portfollio.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function portfolios(){
        try{
            $query="SELECT * FROM `portfolios` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function portfolios_edit(){
        try{
            $query="SELECT * FROM `portfolios` WHERE id=".$this->id;
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function portfollio_Update(){
        try {
            $query = 'UPDATE portfolios SET  title=:title,description=:description,img=:img,category=:category WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out=$stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':description' => $this->description,
                    ':img' => $this->image,
                    ':category' => $this->catagory
                )
            );
            if ($out) {
                $_SESSION['message'] = "Portfolios information update Successfully  !";
                header('location:portfollio.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function delete_portfollio()
    {
        try {
            $query = "DELETE FROM `portfolios` WHERE `portfolios`.`id` =" . $this->id;
            $stmt = $this->pdo->query($query);
            $data = $stmt->execute();
            if ($data) {
                $_SESSION['message'] = "Portfolios information Delete Successfully  !";
                header('location:portfollio.php');
            }
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
}