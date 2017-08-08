<?php
namespace App\finalproject\details;
use PDO;
class details
{
    private $id = '';
    private $user_id = '';
    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setData($data = '')
    {
        if (array_key_exists('id', $data)) {
            $this->user_id = $data['id'];
        }
        return $this;
    }
    public function user_log()
    {
        try {
            $query = "SELECT * FROM `users` WHERE unique_id=" . "'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function profile_setting()
    {
        try {
            $query = "SELECT * FROM `settings` WHERE unique_id=" . "'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            $_SESSION['user_setting']=$data;
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function user_table()
    {
        try {

            $query = "SELECT * FROM `users` WHERE user_id=" . "'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function about(){

        try{

            $query="SELECT * FROM `abouts` WHERE unique_id =". "'".$this->user_id."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function hobbies(){
        try{
            $query="SELECT * FROM `hobbies` WHERE user_id ="."'".$this->user_id."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
//            print_r($data);
//            die();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function facts(){
        try{
            $query="SELECT * FROM `facts` WHERE user_id ="."'".$this->user_id."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function education()
    {
        try {
            $query = "SELECT * FROM `educations` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function experience()
    {
        try {
            $query = "SELECT * FROM `experiences` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function awards()
    {
        try {
            $query = "SELECT * FROM `awards` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function publication()
    {
        try {
            $query = "SELECT * FROM `posts` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function services()
    {
        try {
            $query = "SELECT * FROM `services` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function teaching()
    {
        try {
            $query = "SELECT * FROM `teaching` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function skills()
    {
        try {
            $query = "SELECT * FROM `skills` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function portfolios()
    {
        try {
            $query = "SELECT * FROM `portfolios` WHERE user_id="."'".$this->user_id."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }




}