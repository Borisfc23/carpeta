<?php 
class Nuevo extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }
    function render(){
        $this->view->render('nuevo/index');
    }
    function registrarAlumno(){
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $mensaje = "";

        if($this->model->insert(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido])){
            $mensaje = "<p style='color:green'>Nuevo alumno creado Exitosamente!!!</p>";
        }else{
            $mensaje ="<p style='color:red'>El Numero de Matricula ya Existe!!!</p>";
        }  
        $this->view->mensaje = $mensaje; 
        $this->render();
     }
}
?>