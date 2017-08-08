<?php

namespace App\finalproject\skill;
use PDO;
class skill
{
    public $id = '';
    public $userid = '';
    public $title = '';
    public $description = '';
    public $level = '';
    public $exprience = '';
    public $exprience_areas = '';
    public $pdo='';
    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setSkill($data = '')
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

        if (array_key_exists('level', $data)) {
            $this->level = $data['level'];
        }
        if (array_key_exists('exprience', $data)) {
            $this->exprience = $data['exprience'];
        }
        if (array_key_exists('exprience_area', $data)) {
            $this->exprience_areas = $data['exprience_area'];
        }
        return $this;

    }
    public function skillStore(){
        try {
            $query = "INSERT INTO `skills` (`id`, `user_id`, `title`, `description`, `level`, `experience`, `experience_area`) VALUES (:id, :user_id, :title,:description, :lavel ,:experience,:experience_area);";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":description" => $this->description,
                    ":lavel" => $this->level,
                    ":experience" => $this->exprience,
                    ":experience_area" => $this->exprience_areas
                )
            );
            if ($out) {
                $_SESSION['message'] = "Skill information insert Successfully  !";
                header('location:skill.php');
            }
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }

    }
    public function skill(){
        try{
            $query="SELECT * FROM `skills` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function skill_edit(){
        try{
            $query="SELECT * FROM `skills` WHERE id=".$this->id;
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }

    public function update_skill()
    {
        try {
            $query ='UPDATE skills SET title=:title,description=:description,level= :lavel,experience=:experience,experience_area=:experience_area WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':description' => $this->description,
                    ':lavel' => $this->level,
                    ':experience' => $this->exprience,
                    ':experience_area' => $this->exprience_areas
                )
            );
            if ($out) {
                $_SESSION['message'] = "Skill information Update Successfully  !";
                header('location:skill.php');
            }
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function delet_skill(){
        try{
            $query="DELETE FROM `skills` WHERE `skills`.`id` =".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Skill information Delete Successfully  !";
                header('location:skill.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }

}