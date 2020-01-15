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
        $this->view->render('admin');  
    }
    function posts($param=null){
        // echo "$param"; var_dump($param);        
        $this->view->render('admin');  
    }
    function users($param=null){
        // echo "$param"; var_dump($param);        
        $this->view->render('admin');  
    }
    function categories($param=null){
        // echo "$param"; var_dump($param);        
        $this->view->render('admin');  
    }
    function comments($param=null){
        // echo "$param"; var_dump($param);        
        $this->view->render('admin');  
    }
}
?>
