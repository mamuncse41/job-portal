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
            // SELECT tbl_contacts.*
//FROM tbl_groups
//INNER JOIN tbl_groupcontact ON tbl_groupcontact.group_id = tbl_groups.id 
//INNER JOIN tbl_contacts ON tbl_contacts.id = tbl_groupcontact.contact_id
//WHERE tbl_groups.unitid = ?
            //$query="SELECT * FROM clients_post.* FROM clients_post JOIN `clients_data` ON clients_data.id 
                // = clients_post.id WHERE clients_data.company_name";
            $query="SELECT * FROM clients_post LEFT JOIN clients_data ON clients_post.id = clients_data.id";

             $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
//            echo '<pre>';
//            print_r($data);
//            die();
            return $data;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();

        }

    }
     public function show_job()
    {
        try
        {
            // SELECT tbl_contacts.*
//FROM tbl_groups
//INNER JOIN tbl_groupcontact ON tbl_groupcontact.group_id = tbl_groups.id 
//INNER JOIN tbl_contacts ON tbl_contacts.id = tbl_groupcontact.contact_id
//WHERE tbl_groups.unitid = ?
            //$query="SELECT * FROM clients_post.* FROM clients_post JOIN `clients_data` ON clients_data.id 
                // = clients_post.id WHERE clients_data.company_name";
            $query="SELECT * FROM clients_post LEFT JOIN clients_data ON clients_post.id = clients_data.id";

             $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
//            echo '<pre>';
//            print_r($data);
//            die();
            return $data;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();

        }

    }
   
}
