<?php
include_once 'db/Posts.php';
include_once 'db/Comments.php';
class blogModels extends Models{

 
    public function __construct(){
        parent::__construct();
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();
        //  echo "<br>Blog model construct<br>";
    }
    public function getComentsByID($idComments){            
        $items=[];                                                
        $query = $this->db->connect()->prepare("SELECT *
        FROM cb_comments, cb_users 
        where (cb_users.ID=cb_comments.user_id) and (comment_post_ID = :comment_post_ID)");
        
        // var_dump($this->db->connect()->query("SELECT * FROM cb_comments where comment_post_ID =: comment_post_ID"));
        try{
            $query->execute(['comment_post_ID' => $idComments]);

            while($row = $query->fetch()){
                $item = new Comments();      
                $item->comment_ID = $row['comment_ID'];    
                // echo $row['comment_ID'];
                $item->user_id  = $row['user_id'];
                // echo $row['user_id'];
                $item->comment_post_ID    = $row['comment_post_ID'];
                // echo $row['comment_post_ID'];
                $item->comment_author_email  = $row['comment_author_email'];
                // echo $row['comment_author_email'];
                $item->comment_author_url  = $row['comment_author_url'];
                // echo $row['comment_author_url'];
                array_push($items, $item);
            }
            // return $query->fetch();
            return $items;
        }catch(PDOException $e){
            return [];
            // return $e;
        }
    }
    public function get(){
        $items = [];
        try{
            // var_dump($this->db->connect()->query("SELECT * FROM db_blog.cb_posts;"));
            $query = $this->db->connect()->query("SELECT *
            FROM cb_posts, cb_users
            where cb_users.ID=cb_posts.post_author;");
        //  var_dump($query->fetch());
        
        while($row = $query->fetch()){
                $item = new Posts();
                $item->ID_post = $row['ID'];    
                //  echo $row['ID'];
                $item->post_author    = $row['post_author'];
                //   echo $row['Db'];
                $item->post_date  = $row['post_date'];
                
                 $item->comments=$this->getComentsByID($row['ID']);    
                // var_dump($item->comments);
                array_push($items, $item);
            }
            // return $query->fetch();
            return $items;
        }catch(PDOException $e){
            return [];
            // return $e;
        }
    }
}
?>
