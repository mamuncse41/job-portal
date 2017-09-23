<?php
namespace App\Provider\jobPost;
use PDO;
class jobPost
{
    public $id='';
    public $user_id='';
    public $job_catagory='';
    public $job_title ='';
    public $vacancies='';
    public $cv_receive='';
    public $application_day='';
    public $application_month='';
    public $application_year='';
    public $mini_age='';
    public $max_age='';
    public $gender='';
    public $job_type='';
    public $edu_qulification='';
    public $subject_name='';
    public $pro_qualification='';
    public $job_level='';
    public $mini_experience='';
    public $max_experience='';
    public $additional_job='';
    public $responsibility_job='';
    public $facility_job='';
    public $job_location='';
    public $Salary='';
   

    public function __construct()
    {
        session_start();
        $this->pdo = new PDO('mysql:host=localhost;dbname=cvbank','root','');
    }
    public function setData($data='')
    {
        if (array_key_exists('id',$data))
        {
            $this->id= $data['id'];
        }
        if (array_key_exists('user_id',$data))
        {
            $this->user_id= $data['user_id'];
        }

        if (array_key_exists('job_catagory',$data))
        {
            $this->job_catagory= $data['job_catagory'];
        }
        if (array_key_exists('job_title',$data))
        {
            $this->job_title= $data['job_title'];
        }
        if (array_key_exists('vacancies',$data)){
            $this->vacancies=$data['vacancies'];
        }
        if (array_key_exists('cv_receive',$data)){
            $this->cv_receive =$data['cv_receive'];
        }
        if (array_key_exists('application_day',$data)){
            $this->application_day =$data['application_day'];
        }
        if (array_key_exists('application_month',$data)){
            $this->application_month =$data['application_month'];
        }
        if (array_key_exists('application_year',$data)){
            $this->application_year =$data['application_year'];
        }
          if (array_key_exists('mini_age',$data)){
            $this->mini_age =$data['mini_age'];
        }
          if (array_key_exists('max_age',$data)){
            $this->max_age =$data['max_age'];
        }
          if (array_key_exists('gender',$data)){
            $this->gender =$data['gender'];
        }
          if (array_key_exists('job_type',$data)){
            $this->job_type =$data['job_type'];
        }
          if (array_key_exists('edu_qulification',$data)){
            $this->edu_qulification =$data['edu_qulification'];
        }
          if (array_key_exists('subject_name',$data)){
            $this->subject_name =$data['subject_name'];
        }
           if (array_key_exists('pro_qualification',$data)){
            $this->pro_qualification =$data['pro_qualification'];
        }
         if (array_key_exists('job_level',$data)){
            $this->job_level =$data['job_level'];
        }
         if (array_key_exists('mini_experience',$data)){
            $this->mini_experience =$data['mini_experience'];
        }
         if (array_key_exists('max_experience',$data)){
            $this->max_experience =$data['max_experience'];
        }
         if (array_key_exists('additional_job',$data)){
            $this->additional_job =$data['additional_job'];
        }
         if (array_key_exists('responsibility_job',$data)){
            $this->responsibility_job =$data['responsibility_job'];
        }
          if (array_key_exists('facility_job',$data)){
            $this->facility_job =$data['facility_job'];
        }
        
          if (array_key_exists('job_location',$data)){
            $this->job_location =$data['job_location'];
        }
             if (array_key_exists('Salary',$data)){
            $this->Salary =$data['Salary'];
        }
        return $this;
    }
    public function store()
    {
      
        try {
            $query = "INSERT INTO `clients_post` (`id`,`user_id`,`job_catagory`,`job_title`,`vacancies`,`cv_receive`,`application_day`,
                `application_month`,`application_year`,`mini_age`,`max_age`,`gender`,`job_type`,`edu_qulification`
                ,`subject_name`,`pro_qualification`,`job_level`,`mini_experience`,`max_experience`
                ,`additional_job`,`responsibility_job`,`facility_job`,`job_location`,`Salary`)VALUES 
                (:id,:user_id,:job_catagory,:job_title,:vacancies,:cv_receive,:application_day,:application_month, 
                :application_year,:mini_age,:max_age,:gender,:job_type,:edu_qulification,:subject_name,:pro_qualification,
                :job_level,:mini_experience,:max_experience,:additional_job,:responsibility_job
                ,:facility_job,:job_location,:Salary)";
          
            $stmt = $this->pdo->prepare($query);
            $stmt->execute(
                array(
                    ':id' => null,
                    ':user_id' => $this->user_id,
                    ':job_catagory' => $this->job_catagory,
                    ':job_title' => $this->job_title,
                    ':vacancies' =>$this->vacancies,
                    ':cv_receive' =>$this->cv_receive,
                    ':application_day' =>$this->application_day,
                    ':application_month' =>$this->application_month,
                    ':application_year' =>$this->application_year,
                    ':mini_age' =>$this->mini_age,
                    ':max_age' =>$this->max_age,
                    ':gender' =>$this->gender,
                    ':job_type' =>$this->job_type,
                    ':edu_qulification' =>$this->edu_qulification,
                    ':subject_name' =>$this->subject_name,
                    ':pro_qualification' =>$this->pro_qualification,
                    ':job_level' =>$this->job_level,
                    ':mini_experience' =>$this->mini_experience,
                    ':max_experience' =>$this->max_experience,
                    ':additional_job' =>$this->additional_job,
                    ':responsibility_job' =>$this->responsibility_job,
                    ':facility_job' =>$this->facility_job,
                    ':job_location' =>$this->job_location,
                    ':Salary' =>$this->Salary

                )
            );
      
            if ($stmt) {
                $_SESSION['message'] = "Post info Successfully added";
                header('location:addPost.php');
            }
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }

    }
    public function show()
    {
        try
        {
            $query="SELECT * FROM `clients_post` WHERE user_id = "."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
  
            return $data;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();

        }

    }
    public function show_post()
    {
        try
        {
            $query="SELECT * FROM `clients_post` WHERE id=".$this->id;
            $stmt= $this->pdo->prepare($query);
            $stmt->execute();
            $data=$stmt->fetch();

            return $data;
        }

        catch (PDOException $e)
        {
            echo $e->getMessage();

        }
    }
    public function update()
    {

        try
        {
            $query="UPDATE `clients_post` SET 
          `job_catagory` = :job_catagory,
           `job_title` = :job_title,
           `vacancies` = :vacancies,
           `cv_receive` = :cv_receive,
            `application_day` = :application_day,
           `application_month` = :application_month,
           `application_year` = :application_year,
           `mini_age` = :mini_age,
           `max_age` = :max_age,
           `gender` = :gender,
           `job_type` = :job_type,
           `edu_qulification` = :edu_qulification,
           `subject_name` = :subject_name,
           `pro_qualification` = :pro_qualification,
           `job_level`= :job_level,
           `mini_experience` = :mini_experience,
           `max_experience` = :max_experience,
           `additional_job` = :additional_job,
           `responsibility_job` = :responsibility_job,
           `facility_job` = :facility_job,
           `job_location` = :job_location,
           `Salary` = :Salary
           WHERE `id`=:id";
            $stmt= $this->pdo->prepare($query);
            $stmt->execute(
                array(
                    ':id' =>$this->id,
                    ':job_catagory'  => $this->job_catagory,
                    ':job_title' => $this->job_title,
                    ':vacancies' =>$this->vacancies,
                    ':cv_receive' =>$this->cv_receive,
                    ':application_day' =>$this->application_day,
                    ':application_month' =>$this->application_month,
                    ':application_year' =>$this->application_year,
                    ':mini_age' =>$this->mini_age,
                    ':max_age' =>$this->max_age,
                    ':gender' =>$this->gender,
                    ':job_type' =>$this->job_type,
                    ':edu_qulification' =>$this->edu_qulification,
                    ':subject_name' =>$this->subject_name,
                    ':pro_qualification' =>$this->pro_qualification,
                    ':job_level' =>$this->job_level,
                    ':mini_experience' =>$this->mini_experience,
                    ':max_experience' =>$this->max_experience,
                    ':additional_job' =>$this->additional_job,
                    ':responsibility_job' =>$this->responsibility_job,
                    ':facility_job' =>$this->facility_job,
                    ':job_location' =>$this->job_location,
                    ':Salary' =>$this->Salary
                )
            );
            if ($stmt)
            {
                $_SESSION['message']="Successfully updated";
                header('location:edit_post.php');
            }
        }

        catch (PDOException $e)
        {
            echo $e->getMessage();

        }
    }
    public function delete(){
        try{
            $query="DELETE FROM `clients_post` WHERE `clients_post`.`id` =".$this->id;
            $stmt= $this->pdo->prepare($query);
            $stmt->execute();
            if($stmt){
                $_SESSION['message'] = "Data Deleted Successfully  !";
                header('location:managePost.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
}