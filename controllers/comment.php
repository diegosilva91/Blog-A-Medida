<?php
    /**
     * @Route("/", name="comments")
     */
class Comment extends MainController{
    function __construct(){
        parent::__construct();
        //echo "<p>New Consult Controller</p>";
    }
    function render($param=null){
    }
    function new($param=null){
        
        $param[0]=str_replace("id=","",$param[0]);
        $param[1]=str_replace("idComment=","",$param[1]);
        // var_dump($param);
        if (!empty($_POST['add_comment'])){
            $new=new Comments();
            // $new->comment_ID=;
            $new->comment_post_ID=$param[1];
            $new->user_id=$param[0];
            // $new->comment_author_pass=;
            // $new->comment_author_email=;
            // $new->comment_author_url=;
            // $new->comment_IP=;
            // $new->comment_date=;
            // $new->comment_date_gmt=;
            $new->comment_content=$_POST['comment_content'];;
            // $this->loadModel('comment');
            // var_dump($this);
            $this->models->insertComments($new);
        }
        if (isset( $_SESSION['user_id'] ) ) {
            echo "sesion iniciada";        
                header("location:".constant('URL').'blog?id='.$_SESSION['user_id']);
            }
            else{
                header("location:".constant('URL').'blog');         
            }
         
    }
}
?>
