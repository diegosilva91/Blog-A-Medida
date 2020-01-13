<?php
    /**
     * @Route("/", name="comments")
     */
class Comments extends MainController{
    function __construct(){
        parent::__construct();
        //echo "<p>New Consult Controller</p>";
    }
    function render($param=null){
    }
    function new($param=null){
        var_dump($param);
        if (!empty($_POST['add_comment'])){
            // echo sizeof($param);
            // echo "$param[0]";
            // echo "$param[1]";
            // echo $_POST['comment_content'];
            $new=new Comments();
            // $new->comment_ID=;
            $new->comment_post_ID=$param[1];
            /*$new->user_id=;
            $new->comment_author_pass=;
            $new->comment_author_email=;
            $new->comment_author_url=;
            // $new->comment_IP=;
            $new->comment_date=;
            $new->comment_date_gmt=;
            $new->comment_content=;
            $this->models->insertComments($param);*/
        }
        

        // header("location:".constant('URL').'blog?id='.$_SESSION['user_id']);
    }
}
?>
