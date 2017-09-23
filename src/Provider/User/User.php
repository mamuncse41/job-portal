<?php
namespace App\Provider\User;
use PDO;
class User
{
    private $id = '';
    private $full_name = '';
    private $user_name = '';
    private $password = '';
    private $company_name = '';
    private $street = '';
    private $country = '';
    private $district = '';
    private $email = '';
    private $phone = '';
    private $contact_person = '';
    private $designation = '';
    private $website = '';
    private $company_business = '';
    private $pdo = ' ';

    public function __construct()
    {
        session_start();
       $this->pdo = new PDO('mysql:host=localhost;dbname=cvbank', 'root', '');
    }
    public function setData($data ='')
    {
      
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
     
        if (array_key_exists('full_name', $data)) {
            $this->full_name = $data['full_name'];
        }
        if (array_key_exists('user_name', $data)) {
            $this->user_name = $data['user_name'];
        }
        if (array_key_exists('password', $data)) {
            $this->password = md5($data['password']);
        }
        if (array_key_exists('company_name', $data)) {
            $this->company_name = $data['company_name'];
        }
        if (array_key_exists('street', $data)) {
            $this->street = $data['street'];
        }
           if (array_key_exists('country', $data)) {
            $this->country = $data['country'];
        }   if (array_key_exists('district', $data)) {
            $this->district = $data['district'];
        }   if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
         if (array_key_exists('phone', $data)) {
            $this->phone = $data['phone'];
        }
         if (array_key_exists('contact_person', $data)) {
            $this->contact_person = $data['contact_person'];
        }
         if (array_key_exists('designation', $data)) {
            $this->designation = $data['designation'];
        }
         if (array_key_exists('website', $data)) {
            $this->website = $data['website'];
        }
         if (array_key_exists('company_business', $data)) {
            $this->company_business = $data['company_business'];
        }

        return $this;
    }
      public function store()
    {
        
//        $token = sha1($this->username);
////    $hasin=md5($this->password);

        try {
            $query = "INSERT INTO `clients_data` (`id`,`unique_id`,`full_name`,`user_name`,`password`,`company_name`,`street`,`country`,`district`,`email`,`phone`,`contact_person`,`designation`,`website`,`company_business`) "
                    . "VALUES (:id, :uid, :full_name, :user_name, :password, :company_name,:street,:country, :district, :email,:phone,:contact_person,:designation,:website,:company_business)";
            $stmt = $this->pdo->prepare($query);
            $stmt2 = $stmt->execute(
                array(
                    ":id" => null,
                    ":uid" => uniqid(),
                    ":full_name" => $this->full_name,
                    ":user_name" => $this->user_name,
                    ":password" => $this->password,
                    ":company_name" => $this->company_name,
                    ":street" => $this->street,
                    ":country" => $this->country,
                    ":district" => $this->district,
                    ":email" => $this->email,
                    ":phone" => $this->phone,
                    ":contact_person" => $this->contact_person,
                    ":designation" => $this->designation,
                    ":website" => $this->website,
                    ":company_business" => $this->company_business
                    
                ));
                 if ($stmt2) {

                $_SESSION['message'] = "<span style='color:green;font-size:20px;'>Registration successfully</span>";
                header("Location:clientsDashboard.php");
            }
        } catch (PDOExecption $e) {
            echo "ERROR:" . $e->getMessage();
        }
        }
       public function login()
    {
        try {
            $query = "SELECT * FROM `clients_data` WHERE user_name='$this->user_name' AND password='$this->password'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            $_SESSION['user_info'] = $data;
            if (!empty($_SESSION['user_info'])) {
                header("Location:clientsDashboard.php");
            } else {
                $_SESSION['fail'] = "Username or Password not match";
                header("location:login.php");
            }
        } catch (PDOExecption $e) {
            echo "ERROR:" . $e->getMessage();
        }
//            if ($data['is_active'] == '0') {
//                $_SESSION['fail'] = "You'r Email not verified yet";
//                header("Location:index.php");
//            } else {
            
//            }
      /*     if($data['user_role']==2){
                $_SESSION['admin']=$data;
                if(!empty($_SESSION['admin'])){
                    header("location:admin_dashboard.php");
                }else{
                    $_SESSION['fail']="Invalid email or password";
                    header("location:login.php");
                }
            }*/
//            else{
//                $_SESSION['user_info']=$data;
//                if(!empty($_SESSION['user_info'])){
//                    header("location:dashboard.php");
//                }else{
//                    $_SESSION['fail']="Invalid email or password";
//                    header("location:login.php");
//                }
//            }


    }
    public function validity()
    {
        try {
            $query = "SELECT  * FROM `clients_data` where email='$this->email' OR user_name='$this->user_name' OR company_name='$this->company_name'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
//    public function show(){
//      
//        try
//        {
//            $query="SELECT * FROM `clients_data`  WHERE user_id ="."'".$_SESSION['user_info']['unique_id']."'";
//            $stmt=$this->pdo->prepare($query);
//            $stmt->execute();
//            $data= $stmt->fetchAll();
//            return $data;
//        }
//        catch (PDOException $e)
//        {
//            echo $e->getMessage();
//
//        }
//
//    }
    

    public function company_info_show(){
        try
        {
//            echo $this->id;
//            die();
            $query="SELECT * FROM `clients_data` WHERE unique_id ='$this->id'";
            $stmt=$this->pdo->prepare($query);
            $stmt->execute();
            $data= $stmt->fetch();
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
            $query="UPDATE `clients_data` SET 
          `company_name` = :company_name,
           `street` = :street,
           `country` = :country,
           `district` = :district,
            `email` = :email,
           `phone` = :phone,
           `contact_person` = :contact_person,
           `designation` = :designation,
           `website` = :website,
           `company_business` = :company_business
           WHERE `id`=:id";
            $stmt= $this->pdo->prepare($query);
            $stmt->execute(
                array(
                    ':id' =>$this->id,
                    ':company_name'  => $this->company_name,
                    ':street' => $this->street,
                    ':country' =>$this->country,
                    ':district' =>$this->district,
                    ':email' =>$this->email,
                    ':phone' =>$this->phone,
                    ':contact_person' =>$this->contact_person,
                    ':designation' =>$this->designation,
                    ':website' =>$this->website,
                    ':company_business' =>$this->company_business
                )
            );
            if ($stmt)
            {
                $_SESSION['message']="Successfully updated";
                header('location:edit.php');
            }
        }

        catch (PDOException $e)
        {
            echo $e->getMessage();

        }
    }
        public function selectPassword()
    {
        try {
            $query = "SELECT  * FROM `clients_data` where password='$this->password'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
        
            return $data;

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function reset_password()
    {

        try
        {
            $query="UPDATE `clients_data` SET 
          `password` = :password,
           WHERE `id`=:id";
            $stmt= $this->pdo->prepare($query);
            $stmt->execute(
                array(
                    ':id' =>$this->id,
                    ':password'  => $this->password,
                )
            );
            if ($stmt)
            {
                $_SESSION['message']="Successfully updated";
                header('location:change_password.php');
            }
        }

        catch (PDOException $e)
        {
            echo $e->getMessage();

        }
    }
}

