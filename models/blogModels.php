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
    /**
     * Return Comments
     * params IdComments
     */
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
                $item->nicename_comment = $row['user_nicename'];
                $item->comment_post_ID    = $row['comment_post_ID'];
                // echo $row['comment_post_ID'];
                $item->comment_author_email  = $row['comment_author_email'];
                // echo $row['comment_author_email'];
                $item->comment_content  = $row['comment_content'];
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
                $item->ID_post = $row['ID_posts'];    
                // echo $row['ID_posts'];
                $item->post_author    = $row['post_author'];
                //   echo $row['Db'];
                $item->post_date  = $row['post_date'];
                $item->post_content  = $row['post_content'];
                $item->post_title  = $row['post_title'];
                $item->nicename_post=$row['user_nicename'];
                 $item->comments=$this->getComentsByID($row['ID_posts']);    
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
    public function getPostsById($idPosts){
        $items = [];
        $query = $this->db->connect()->prepare("SELECT *
        FROM cb_posts, cb_users 
        where (cb_users.ID=cb_posts.post_author) and (ID_posts = :ID_posts)");
        try{
            $query->execute(['ID_posts' => $idPosts]);
            while($row = $query->fetch()){
                $item = new Posts();
                $item->ID_post = $row['ID_posts'];    
                // echo $row['ID_posts'];
                $item->post_author    = $row['post_author'];
                //   echo $row['Db'];
                $item->post_date  = $row['post_date'];
                $item->post_content  = $row['post_content'];
                $item->post_title  = $row['post_title'];
                $item->nicename_post=$row['user_nicename'];
                 $item->comments=$this->getComentsByID($row['ID_posts']);    
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
    public function SearchInPosts($word){
        $items=[];                                                
        $query = $this->db->connect()->prepare("SELECT * FROM 
        cb_posts WHERE post_content LIKE '%{$word}%';");
        
        /*var_dump($this->db->connect()->query("SELECT * FROM 
        cb_posts WHERE post_content LIKE '%word= :word%';"));*/
        try{
            // $query->execute([':word' => $word]);
            $query->bindParam(1,$word);
            $query->execute();
            // var_dump($query);
            while($row = $query->fetch()){
                $item = new Posts();
                $item->ID_post = $row['ID_posts'];    
                // echo $row['ID_posts'];
                $item->post_author    = $row['post_author'];
                //   echo $row['Db'];
                $item->post_date  = $row['post_date'];
                $item->post_content  = $row['post_content'];
                $item->post_title  = $row['post_title'];
                $item->comments=$this->getComentsByID($row['ID_posts']);    
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
    
    public function AddPost($datos){
        try{  
            $query= $this->db->connect()->prepare('INSERT INTO cb_posts (post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt) VALUES(:post_author,:post_date,:post_date_gmt,:post_content,:post_title,:post_excerpt)');
            $query->execute(['post_author' => $datos->post_author,'post_date' => $datos->post_date,'post_date_gmt'=>$datos->post_date,'post_content'=>$datos->post_content,'post_title'=>$datos->post_title,'post_excerpt'=>$datos->post_excerpt]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
    
    public function AddCategory($datos){
        try{  
            $query= $this->db->connect()->prepare('INSERT INTO cb_categories (post_taxonomy,post_ID) VALUES(:post_taxonomy,:post_ID)');
            $query->execute(['post_taxonomy' => $datos->post_author,'post_date' => $datos->post_date,'post_date_gmt'=>$datos->post_date,'post_content'=>$datos->post_content,'post_title'=>$datos->post_title,'post_excerpt'=>$datos->post_excerpt]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}
?>

