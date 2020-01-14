<?php
include_once 'db/db.php';
class consultModels extends Models{
    public function __construct(){
        parent::__construct();
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();
        // echo "<br>consult model construct<br>";
    }
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT*FROM cb_users");
          
            while($row = $query->fetch()){
                $item = new DB();
                $item->ID = $row['ID'];    
                // echo $row['ID'];
                $item->db    = $row['user_login'];
                //  echo $row['Db'];
                $item->user  = $row['user_pass'];
                // echo $row['User'];
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
            echo "error";
        }
    }
    public function getPassby($email){
        $item = new DB();

        $query = $this->db->connect()->prepare("SELECT * FROM cb_users WHERE user_email = :user_email LIMIT 1");
        // var_dump($query);
        try{
            $query->execute(['user_email' => $email]);
            // echo "query -> userlogin =$id <br>";
            while($row = $query->fetch()){
                $item->ID = $row['ID'];
                // echo "ID =".$row['ID']." getby id <br>";
                $item->user_login = $row['user_login'];
                // echo "user_login=".$row['user_login']."getby id<br>";
                $item->user_pass = $row['user_pass'];

                $item->user_email = $row['user_email'];
            }

            $_SESSION['user_id'] = $item->ID;
            
            var_dump($_SESSION['user_id']);
            echo "$item->ID<br>";
            // return $item;
            return $item->user_email;

            
        }catch(PDOException $e){
            return null;
            echo "$e";
        }
        
    }

    public function getPassByID($id){
        $item = new DB();

        $query = $this->db->connect()->prepare("SELECT * FROM cb_users WHERE ID = :ID LIMIT 1");
        // var_dump($query);
        try{
            $query->execute(['ID' => $id]);
            // echo "query -> userlogin =$id <br>";
            while($row = $query->fetch()){
                $item->ID = $row['ID'];
                // echo "ID =".$row['ID']." getby id <br>";
                $item->user_login = $row['user_login'];
                // echo "user_login=".$row['user_login']."getby id<br>";
                $item->user_pass = $row['user_pass'];
            }
            
            $_SESSION['user_id'] = $item->ID;
            
            // var_dump($_SESSION['user_id']);
            // echo "$item->ID<br>";
           return $item;       
        }catch(PDOException $e){
            return null;
            echo "$e";
        }
    }
}

?>