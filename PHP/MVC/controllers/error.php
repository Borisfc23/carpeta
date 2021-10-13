<?php 
require_once 'libs/controller.php';
class Erro extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->mensaje = "Pagina no encontrada Erro 404 not found";
        $this->view->render('error/index');
    }
}
?>