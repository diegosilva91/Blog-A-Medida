<?php
class View{
    function __construct(){
        // echo "<p>View</p>";
    }
    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}
?>