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
        // var_dump($this);
        $db=$this->models->get();
        //var_dump($db);
        $this->view->db=$db;
        $this->view->render('login');
        // echo "render view";
        session_start();
        if (isset( $_SESSION['user_id'] ) ) {
            echo "sesion iniciada";        }
        else{
                if(isset($_POST['email']) && isset($_POST['password'])){
                    // echo $_REQUEST['email'];
                    // echo "<br> ".$_POST['email'];
                    $password = $this->models->getById($_POST['email']);
                    // var_dump($password);
                    // var_dump($_POST['password']!=NULL);
                    if($_POST['password']!=NULL && $_POST['password']==$password){
                        // echo "ok";
                        $this->view=[];        
                        header("location:".constant('URL').'blog');
                    }
                    else{

                    }
                }
            }

    }
  
}
?>
