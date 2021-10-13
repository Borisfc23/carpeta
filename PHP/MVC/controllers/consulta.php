<?php 
class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->datos = [];
    }
    function render(){
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }
    function verAlumno($param = null){
        // var_dump($param);
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);
        
        session_start();
        $_SESSION['id_verAlumno'] = $alumno->matricula;
        $this->view->alumno = $alumno;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }
    function actualizarAlumno(){
        session_start();
        $matricula = $_SESSION['id_verAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        unset($_SESSION['id_verAlumno']);
        if($this->model->update(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido])){
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->alumno = $alumno;
            $this->view->mensaje = "<p style='color:green'>Actualizado Correctamente a las: ".date("h").":".date("i").":".date("s")." ".date("a")."</p>";
        }else{
            $this->view->mensaje = "<p style='color:red'>No se pudo actualizar el Alumno</p>";
        }
        $this->view->render('consulta/detalle');
    }
    function eliminarAlumno($param = null){
        $matricula = $param[0];
        if($this->model->delete($matricula)){            
            // $this->view->mensaje = "<p style='color:green'>Eliminado Correctamente a las: ".date("h").":".date("i").":".date("s")."-".date("a")."</p>";
            $mensaje = "<p style='color:green'>Eliminado Correctamente a las: ".date("h").":".date("i").":".date("s")."-".date("a")."</p>";
        }else{
            // $this->view->mensaje = "<p style='color:red'>No se pudo Eliminar el Alumno</p>";
            $mensaje = "<p style='color:red'>No se pudo Eliminar el Alumno</p>";
        }
        // $this->render();
        echo $mensaje;
        // echo 'Se elimino '.$matricula;
    }
}
?>