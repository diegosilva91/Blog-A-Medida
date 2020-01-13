<?php
include_once 'db/Comments.php';
class commentModels extends Models{

 
    public function __construct(){
        parent::__construct();
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();
        //  echo "<br>Comment model construct<br>";
    }
    public function insertComments($comments){
        // var_dump($comments);
        try{
            $query = $this->db->connect()->prepare("INSERT INTO cb_comments (comment_post_ID, user_id, comment_content) VALUES(:comment_post_ID, :user_id, :comment_content)");
            $query->execute(['comment_post_ID' => $comments->comment_post_ID, 'user_id' => $comments->user_id, 'comment_content' => $comments->comment_content]);
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            //echo "Ya existe esa matrícula";
            return $e;
            // return false;
        }
    }
}
?>
