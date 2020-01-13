<?php
include_once 'db/db.php';
class LoginModels extends Models{
    public function __construct(){
        parent::__construct();
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
                $item->user_login    = $row['user_login'];
                //  echo $row['Db'];
                $item->user_pass  = $row['user_pass'];
                // echo $row['User'];
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
            echo "error";
        }
    }
    public function getById($id){
        $item = new DB();

        $query = $this->db->connect()->prepare("SELECT * FROM cb_users WHERE user_login = :user_login LIMIT 1");
        // var_dump($query);
        try{
            $query->execute(['user_login' => $id]);
            // echo "query -> userlogin =$id <br>";
            while($row = $query->fetch()){
                $item->ID = $row['ID'];
                // echo "ID =".$row['ID']." getby id <br>";
                $item->user_login = $row['user_login'];
                // echo "user_login=".$row['user_login']."getby id<br>";
                $item->user_pass = $row['user_pass'];
            }
            session_start();
            $_SESSION['user_id'] = $item->ID;
            
            // var_dump($_SESSION['user_id']);
            // echo "$item->ID<br>";
            // return $item;
            return $item->user_pass;

            
        }catch(PDOException $e){
            return null;
            echo "$e";
        }
    }
}

?>