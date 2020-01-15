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
    function searchContent($param=null){
        
        if (!empty($_POST['searchPostByWord'])){
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
    function searchPost($param=null){
        //  var_dump($param[0]);
        $idSearch=$param[0];
        // var_dump($idSearch);
        $this->view->posts=$this->models->getPostsById($idSearch);
        var_dump($this->models->getPostsById($idSearch));
        
        
        
        // echo "render view";
    }
    function new($param=null){
        $param[0]=str_replace("id=","",$param[0]);
        $this->view->render('InforPost');
        // var_dump($param);
        // var_dump(!empty($_POST['submitPost']));
        if( isset($_POST['titlePostInput']) && isset($_POST['ContentPostInput']) 
        && isset($_POST['TagPostInput']) && isset ( $_POST['KeywordPostInput'])){
            // echo"okd<br>";
            // var_dump(!empty($_POST['submitPost']));
            $new=new Posts();
            $new->post_author=(int)$param[0];
            $now = new DateTime('NOW');
            // var_dump($now);
            $new->post_date=date_format($now,'Y-m-d H:i:s');
            $new->post_content=$_POST['ContentPostInput'];
            $excerpt=explode(".",$new->post_content);
            $new->post_excerpt=$excerpt[0];
            $new->post_title=$_POST['titlePostInput'];
            $new->categories=$_POST['TagPostInput'];
            // var_dump($new);
            if($this->models->AddPost($new)){
                echo "si";
            }else{
                echo "no";      
            }
            // var_dump($this->models->AddPost($new));
            //var_dump($this->models->AddPost($new));
        }
        else{
            // echo "no";  
        }        
    }

}
?>
