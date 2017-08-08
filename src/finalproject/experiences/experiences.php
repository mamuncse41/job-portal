<?php

namespace App\finalproject\experiences;
use PDO;
class experiences
{
    public $id = '';
    public $userid = '';
    public $designation = '';
    public $company_name = '';
    public $start_date = '';
    public $end_date= '';
    public $company_location = '';


    public function __construct()
    {
        session_start();
        $this->pdo = new PDO('mysql: host=localhost; dbname=cvbank', 'root', '');
    }

    public function setExprience($data = '')
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('user_id', $data)) {
            $this->userid = $data['user_id'];
        }
        if (array_key_exists('designation', $data)) {
            $this->designation = $data['designation'];
        }
        if (array_key_exists('company_name', $data)) {
            $this->company_name = $data['company_name'];
        }

        if (array_key_exists('start_date', $data)) {
            $this->start_date = $data['start_date'];
        }
        if (array_key_exists('end_date', $data)) {
            $this->end_date = $data['end_date'];
        }
        if (array_key_exists('company_location', $data)) {
            $this->company_location = $data['company_location'];
        }
        return $this;

    }

    public function experience()
    {
        try {
            $query="SELECT * FROM `experiences` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }

    public function storeExperience()
    {
        try {

            $query = "INSERT INTO `experiences` (`id`, `user_id`, `designation`, `company_name`, `start_date`, `end_date`, `company_location` ) VALUES (:id, :user_id, :designation, :company_name, :start_date, :end_date, :company_location)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":designation" => $this->designation,
                    ":company_name" => $this->company_name,
                    ":start_date" => $this->start_date,
                    ":end_date" => $this->end_date,
                    ":company_location" => $this->company_location
                )
            );
            if ($out) {
                $_SESSION['message'] = "Successfully Store Experiences !";
                header('location:exprience.php');
            }

        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }

    public function experience_edit()
    {
        try {
            $query="SELECT * FROM `experiences` WHERE id=".$this->id;
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }



        public function updateExperience()
        {
            try {

                $query = 'UPDATE experiences SET designation=:designation, company_name=:company_name, start_date=:start_date, end_date=:end_date, company_location=:company_location WHERE id=:id';
                $stmt = $this->pdo->prepare($query);
                $out = $stmt->execute(
                    array(
                        ':id' => $this->id,
                        ':designation' => $this->designation,
                        ':company_name' => $this->company_name,
                        ':start_date'=> $this->start_date,
                        ':end_date'=> $this->end_date,
                        ':company_location'=> $this->company_location

                    )
                );
                if ($out) {
                    $_SESSION['message'] = "Experience information update Successfully  !";
                    header('location:exprience.php');
                }

            } catch (PDOException $e) {
                echo "ERROR:" . $e->getMessage();
            }
        }
        public  function delete_Exprience(){
            try{
                $query="DELETE FROM `experiences` WHERE `experiences`.`id` =".$this->id;
                $stmt=$this->pdo->query($query);
                $data=$stmt->execute();
                if($data){
                    $_SESSION['message'] = "Experience information Delete Successfully  !";
                    header('location:exprience.php');
                }
            }catch (PDOException $e){
                echo "ERROR:".$e->getMessage();
            }
        }

}

