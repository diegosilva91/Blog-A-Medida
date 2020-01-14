<?php
class Routes{   
    function __construct(){
       //echo "<p>New Response Route</p>";
    //    echo $_SERVER['REQUEST_URI'];
    
        $url = isset($_GET['url']) ? $_GET['url']: null;//if exist url or null
        $url = rtrim($url, '/');   //delete spaces
        $url = explode('/', $url);//explode a string into a arrays
    //   var_dump($url);
       $Controller = 'controllers/' . $url[0] . '.php';
       //echo "<br>$archivoController<br>";
       if(empty($url[0])){//by default always put Home if empty url
        $Controller = 'controllers/home.php';
        require_once $Controller;
        $Route = new Home();
        $Route->loadModel('home');
        //var_dump($Route);
        $Route->render(); //render view
        return false;
        }
       if(file_exists($Controller)){
           require_once $Controller;
           $Route = new $url[0];
           $Route->loadModel($url[0]);
        //   echo "$ url[0]  $url[0]<br>";
          
            // var_dump($Route);
            
           $nparam = sizeof($url);
            // echo($nparam); # of/.../.../...

           $url2=$_SERVER['REQUEST_URI'];
           $url2=explode('?', $url2);
           $nOptionalParam=sizeof($url2);
           if($nparam > 1){
            
            

               if($nparam > 2){
                    $param = [];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                        //  echo $url[$i];
                    }
                    
                    $Route->{$url[1]}($param);
                    // echo("this");      
                }else{
                    //  echo $url[1];                
                    if ($nOptionalParam>1){
                        $url2[1]=explode('&', $url2[1]);
                        // var_dump ($nOptionalParam);
                        // echo $nOptionalParam;
                        if($nOptionalParam> 2){
                            
                            $paramOptional = [];
                            for($i = 1; $i<$nOptionalParam; $i++){
                        
            
                                
                                array_push($paramOptional, $url2[$i]);
                              
                            }
                            // var_dump ($url2);
                            $Route->{$url[1]}($paramOptional);
                        }
                        else{
                            $url2[1]=str_replace("id=","",$url2[1]);        
                            $Route->{$url[1]}($url2[1]);
                        }

                    }
                    else $Route->{$url[1]}();
                    
                }
            }
            else{
                if ($nOptionalParam>1){
                    $url2[1]=str_replace("id=","",$url2[1]);
                    $Route->render($url2[1]);
                }
                else{
                    // echo $url2[1];
                    $Route->render(null);
                }
            }
        }else{
           echo "Error route Does not exist";
       }
    }
}

?>