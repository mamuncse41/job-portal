<?php
namespace App\finalproject\jobs;
use PDO;
class jobs
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
    public function job_view()
    {
        try
        {
            // WHERE user_id = "."'".$_SESSION['user_info']['unique_id']."'"
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
   
}
