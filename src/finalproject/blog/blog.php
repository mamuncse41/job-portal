<?php
namespace App\finalproject\blog;
use PDO;
class blog
{
    public $id='';
    public $userid='';
    public $title='';
    public $description='';
    public $tags='';
    public $catagory='';
    public $pdo='';
    public function __construct()
    {
        session_start();
        $this->pdo = new PDO('mysql: host=localhost; dbname=cvbank', 'root', '');
    }
    public function setBlog($data=''){
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
        if (array_key_exists('tags', $data)) {
            $this->tags = $data['tags'];
        }
        if (array_key_exists('catagory', $data)) {
            $this->catagory = $data['catagory'];
        }
        return $this;
    }
    public function storeBlog(){
        try {
            $query = "INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `tags`, `categories`) VALUES (:id, :user_id, :title, :description,:tags, :categories)";
            $stmt = $this->pdo->prepare($query);
            $out = $stmt->execute(
                array(
                    ":id" => null,
                    ":user_id" => $this->userid,
                    ":title" => $this->title,
                    ":description" => $this->description,
                    ":tags" => $this->tags,
                    ":categories" => $this->catagory
                )
            );
            if ($out) {
                $_SESSION['message'] = "Blog information insert Successfully  !";
                header('location:blog.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }

    }
    public function blog(){
        try{
            $query="SELECT * FROM `posts` WHERE user_id="."'".$_SESSION['user_info']['unique_id']."'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetchAll();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function blog_edit(){
        try{
            $query="SELECT * FROM `posts` WHERE id=".$this->id;
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
            return $data;
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function update_blog(){
        try {
            $query = 'UPDATE posts SET  title=:title,description=:description,tags=:tags,categories=:categories WHERE id=:id';
            $stmt = $this->pdo->prepare($query);
            $out=$stmt->execute(
                array(
                    ':id' => $this->id,
                    ':title' => $this->title,
                    ':description' => $this->description,
                    ':tags' => $this->tags,
                    ':categories' => $this->catagory
                )
            );
            if ($out) {
                $_SESSION['message'] = "Blog information update Successfully  !";
                header('location:blog.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
    public function blog_delete(){
        try{
            $query="DELETE FROM `posts` WHERE `posts`.`id` = ".$this->id;
            $stmt=$this->pdo->query($query);
            $data=$stmt->execute();
            if($data){
                $_SESSION['message'] = "Blog information Delete Successfully  !";
                header('location:blog.php');
            }
        }catch (PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }
}