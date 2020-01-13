<?php
include_once 'db/Comments.php';
class commentModels extends Models{

 
    public function __construct(){
        parent::__construct();
        // Enable PHP Session
        if (empty($_SESSION))
            @session_start();
        //  echo "<br>Comment model construct<br>";
    }
    public function insertComments($comments){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO cb_comments (MATRICULA, NOMBRE, APELLIDO) VALUES(:matricula, :nombre, :apellido)');
            $query->execute(['matricula' => $datos['matricula'], 'nombre' => $datos['nombre'], 'apellido' => $datos['apellido']]);
            return true;
        }catch(PDOException $e){
            //echo $e->getMessage();
            //echo "Ya existe esa matrícula";
            return false;
        }
    }
}
?>
