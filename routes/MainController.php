<?php
class MainController{

    function __construct(){
        // echo "<p>Main Controller</p>";
        $this->view = new View();
    }
    function loadModel($models){
        $url = 'models/'.$models.'Models.php';
        // echo "<br>$url<br>";
        if(file_exists($url)){
            require $url;
            $modelName = $models.'Models';
            // echo "<br>Module call: $modelName<br>";
            $this->models = new $modelName();
        }
    }
}
?>