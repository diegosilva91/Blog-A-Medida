<?php
    /**
     * @Route("/", name="blog")
     */
class Admin extends MainController{
    function __construct(){
        parent::__construct();
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();
            // var_dump($_SESSION);
        // echo "<p>New Consult Controller</p>";
        //    echo $_SERVER['REQUEST_URI'];
    }
    function render($param=null){
        // echo "$param"; var_dump($param);        
        $this->view->posts=$this->models->get();
        // var_dump($this->models);
        // $this->loadModel('comment');
        // $this->view->comments=$this->models->getComments();
        
        $this->loadModel('consult');
        $params=$this->models->getPassByID($param);
        $this->view->params=$params;
        // $this->view->render('comments');
        

        // var_dump(!empty($_SESSION['user_id']));
        if (isset( $_SESSION['user_id'] ) ) {
            // echo "sesion ok";
            // echo $_SESSION['user_id'];
            // var_dump($_SESSION['user_id']);
            $this->view->render('blog');
            $this->view->session=$_SESSION['user_id'];
            // header("location:".constant('URL').'blog?id='.$_SESSION['user_id']);
            
        } else {    
        // Redirect them to the login page
            $this->view->session=-1;
            $this->view->render('blog');
        }

        // echo "render view";

    }

}
?>
