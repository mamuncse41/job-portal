<?php
namespace App\finalproject\award;
use PDO;
class award
{
    public $id='';
    public $userid='';
    public $title='';
    public $organization='';
    public $description='';
    public $location='';
    public $year='';
    public $pdo='';
    public function __construct()
    {
        session_start();
        $this->pdo = new PDO('mysql: host=localhost; dbname=cvbank', 'root', '');
    }
    public function setAwarde($data = '')
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
        if (array_key_exists('organization', $data)) {
            $this->organization = $data['organization'];
        }

        if (array_key_exists('description', $data)) {
            $this->description = $data['description'];
        }
        if (array_key_exists('location', $data)) {
            $this->location = $data['location'];
        }
        if (array_key_exists('year', $data)) {
            $this->year = $data['year'];
        }
        return $this;

    }
    public function storeAward(){
        try {

            $query = " INSERT INTO `awards` (`id`, `user_id`, `title`, `organization`, `description`, `location`, `year`) VALUES (:id,:user_id,:title,:organization,:description,:location,:year)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":organization" => $this->organization,
                    ":description" => $this->description,
                    ":location" => $this->location,
                    ":year" => $this->year
                )
            );
            if ($out) {
                $_SESSION['message'] = "Successfully Store Awards !";
                header('location:award.php');
            }

        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }

    }
    public function Award()
    {
        try {
            $query="SELECT * FROM `awards` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function Award_edit()
    {
        try {
            $query="SELECT * FROM `awards` WHERE id=".$this->id;

            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function updateAward(){
        try {

            $query = 'UPDATE awards SET title=:title, organization=:organization,description=:description,location=:location,year=:year WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':organization' => $this->organization,
                    ':description'=> $this->description,
                    ':location'=> $this->location,
                    ':year'=> $this->year

                )
            );
            if ($out) {
                $_SESSION['message'] = "Award information update Successfully  !";
                header('location:award.php');
            }

        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function delete_award(){
        try{
            $query="DELETE FROM `awards` WHERE `awards`.`id` =".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Awards information Delete Successfully  !";
                header('location:award.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
}