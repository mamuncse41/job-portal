<?php

namespace App\finalproject\search_obj;
use PDO;
class search_obj
{
    private $user='';
    private $keyword='';
    private $option='';
    public function __construct()
    {
        session_start();
        $this->pdo=new PDO('mysql: host=localhost; dbname=cvbank','root','');
    }
    public function setData($data=''){
        if(array_key_exists('keyword',$data)){
                $this->keyword=$data['keyword'];
            }
            if(array_key_exists('option',$data)){
                    $this->option=$data['option'];
                }
        return $this;
    }
    public function find_data($itemPerpage='',$offset=''){
        try{
            $database=$this->option;

            $key="'%".$this->keyword."%'";
            $query="SELECT SQL_CALC_FOUND_ROWS * FROM `$database` WHERE title LIKE $key LIMIT $itemPerpage OFFSET $offset";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            $subQuery="SELECT FOUND_ROWS()";
            $totalRow=$this->pdo->query($subQuery)->fetch(PDO::FETCH_COLUMN);
            $data['totalRow']=$totalRow;
            if($data){
                return $data;
            }else{
                $_SESSION['failed1']="No result Found  !!";
                header('location:index.php');
            }

        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }


}