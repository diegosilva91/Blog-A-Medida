<?php
    /**
     * @Route("/", name="blog")
     */
class Blog extends MainController{
    function __construct(){
        parent::__construct();
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();
        //echo "<p>New Consult Controller</p>";
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
            $this->view->session=$_SESSION['user_id'];
            $this->view->render('blog');
        } else {    
        // Redirect them to the login page
            $this->view->session=-1;
            $this->view->render('blog');
        }

        // echo "render view";

    }
    function searchContent($param=null){
        if (!empty($_POST['Input_SearchInPosts'])){
            // echo($_POST['searchPostByWord']);
            $search=$this->models->SearchInPosts($_POST['searchPostByWord']);
            // var_dump($search);
            

                $this->view->posts=$search;

        }
        $this->loadModel('consult');
        $params=$this->models->getPassByID($param);
        $this->view->params=$params;
        // $this->view->render('comments');
        

        // var_dump(!empty($_SESSION['user_id']));
        if (isset( $_SESSION['user_id'] ) ) {
            // echo "sesion ok";
            $this->view->session=$_SESSION['user_id'];
            $this->view->render('blog');
        } else {    
        // Redirect them to the login page
            $this->view->session=-1;
            $this->view->render('blog');
        }

        // echo "render view";
    }
    function new($param=null){

    }
    /*function user($param=null){
        $userlogin = $param[0];
        if (isset( $_SESSION['user_id'] ) ) {
            // echo "sesion ok";
            $this->view->session=$_SESSION['user_id'];
            $this->view->render('blog');
        } else {    
        // Redirect them to the login page
            $this->view->session=0;
            $this->view->render('blog');
        }
    }*/
}
?>
