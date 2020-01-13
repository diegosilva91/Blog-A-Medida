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
        
        if (!empty($_POST['add_comment'])){
            echo "$param";
            echo $_POST['comment_content'];
            
            // $this->models->insertComments($param);
        }
        

        // header("location:".constant('URL').'blog?id='.$_SESSION['user_id']);
    }
}
?>
