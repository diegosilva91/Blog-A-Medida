<?php
    /**
     * @Route("/", name="home")
     */
class Home extends MainController{
    function __construct(){
        parent::__construct();
        // echo "<p>New Home Controller</p>";
    }
    function render($param=null){
        $this->view->render('home');
    }
    function custom(){
        // echo "<p>custom</p>";
    }
}
?>