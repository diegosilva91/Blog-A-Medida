<?php
    /**
     * @Route("/", name="consult")
     */
class Consult extends MainController{
    function __construct(){
        parent::__construct();
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();
        //echo "<p>New Consult Controller</p>";
    }
    function render($param=null){
        
        $db=$this->models->get();
        // var_dump($db);
        $this->view->db=$db;
        $this->view->render('consult');
        // echo "render view";

    }
    function login($param=null){
        if (isset( $_SESSION['user_id'] ) ) {
        echo "sesion iniciada";        
            header("location:".constant('URL').'blog?id='.$_SESSION['user_id']);
        }
        else{
            //  print_r($param[0]);
            // echo $_SESSION['user_id'];
            $this->view->render('login');
            // !empty($_POST['add_comment'])more controls
            if(isset($_POST['email']) && isset($_POST['password'])){
                // echo $_REQUEST['email'];
                // echo "<br> ".$_POST['email'];
                $password = $this->models->getPassBy($_POST['email']);
                // var_dump($password);
                // var_dump($_POST['password']!=NULL);
                if($_POST['password']!=NULL && $_POST['password']==$password){
                    // echo "ok";
                    $this->view=[];        
                    header("location:".constant('URL').'blog?id='.$_SESSION['user_id']);
                }
                else{

                }
            }
        }
    }
    public function logout()
    {
        session_start();
        // var_dump(isset( $_SESSION['user_id'] ));
        // var_dump($_SESSION['user_id'] );
        if ( isset( $_SESSION['user_id'] ) ) {
            $_SESSION = array();
            session_unset();
            session_destroy();   
        }
        header('Location: ' . constant('URL').'home');
        exit;
    }
    function consult(){
        // $db=$this->models->get();
        // var_dump($db);
    }
}
?>