<?php

namespace App\finalproject\education;
use PDO;
class education
{
    public $id = '';
    public $userid = '';
    public $title = '';
    public $institute = '';
    public $result = '';
    public $passing_year = '';
    public $main_subject = '';
    public $education_board = '';
    public $course_duration = '';

    public function __construct()
    {
        session_start();
        $this->pdo = new PDO('mysql: host=localhost; dbname=cvbank', 'root', '');
    }

    public function setEducation($data = '')
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
        if (array_key_exists('institute', $data)) {
            $this->institute = $data['institute'];
        }
        if (array_key_exists('result', $data)) {
            $this->result = $data['result'];
        }
        if (array_key_exists('passing_year', $data)) {
            $this->passing_year = $data['passing_year'];
        }
        if (array_key_exists('main_subject', $data)) {
            $this->main_subject = $data['main_subject'];
        }
        if (array_key_exists('board', $data)) {
            $this->education_board = $data['board'];
        }
        if (array_key_exists('course_duretion', $data)) {
            $this->course_duration = $data['course_duretion'];
        }

        return $this;

    }

    public function storeEducation()
    {
        try {
            $query = "INSERT INTO `educations` (`id`, `user_id`, `title`, `institute`, `result`, `passing_year`, `main_subject`, `education_board`, `course_duration`)
                    VALUES (:id, :user_id, :title, :institute, :result, :passing_year, :main_subject, :education_board, :cd)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":institute" => $this->institute,
                    ":result" => $this->result,
                    ":passing_year" => $this->passing_year,
                    ":main_subject" => $this->main_subject,
                    ":education_board" => $this->education_board,
                    ":cd" => $this->course_duration

                )
            );
            if ($out) {
                $_SESSION['message'] = "Successfully Store Education !";
                header('location:education.php');
            }

        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }

    public function education()
    {
        try {
            $query = "SELECT * FROM `educations` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function education_edit()
    {
        try {
            $query = "SELECT * FROM `educations` WHERE id=".$this->id;
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }


    public function updateEducation()
    {
        try {

            $query = 'UPDATE educations SET title=:title, institute=:institute, result=:result,passing_year=:passing_year,main_subject=:main_subject, education_board=:education_board,course_duration=:cd WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':institute' => $this->institute,
                    ':result' => $this->result,
                    ':passing_year' => $this->passing_year,
                    ':main_subject' => $this->main_subject,
                    ':education_board' => $this->education_board,
                    ':cd' => $this->course_duration
                )
            );
            if ($out) {
                $_SESSION['message'] = "Education information update Successfully  !";
                header('location:education.php');
            }

        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    public function delete_education(){
        try{
            $query="DELETE FROM `educations` WHERE `educations`.`id` =".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Educations information Delete Successfully  !";
                header('location:education.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }


}

