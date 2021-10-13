<?php 
require_once 'controllers/error.php';
class App{
    function __construct(){
        // echo "<p>Nueva App</p>";

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url,'/');//El rtrim elimina los caracterees solo alfinal de la cadena    
        $url = explode('/',$url);//Divide un string en varios string
        
        //Cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        
        $archivoController = 'controllers/'.$url[0].'.php';//url[0] es el nombre del controlador
        if(file_exists($archivoController)){
            require_once $archivoController;

            //Inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //Numero de elementos del arreglo
            $nparam = sizeof($url);
            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for ($i=2; $i < $nparam; $i++) { 
                        array_push($param,$url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }           
        }else{
            $controller = new Erro();
        }
}
}
?>