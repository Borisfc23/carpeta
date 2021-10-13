<?php
include_once 'db.php';
class Peliculas extends DB{
    
    private $paginaActual;
    private $totalPaginas;
    private $nResultados;
    private $resultadosPorPagina;
    private $indice;
    private $error = false;
    public function __construct($nPorPagina){
        parent::__construct();//Esto es para k se ejecute primero el constructor de la BD
        
        $this->resultadosPorPagina = $nPorPagina;
        $this->indice = 0;
        $this->paginaActual = 1;

        $this->calcularPagina();
    }

    public function calcularPagina(){
        $query = $this->connect()->query('SELECT COUNT(*) AS total FROM articulos');
        $this->nResultados = $query->fetch(PDO::FETCH_OBJ)->total;
        $this->totalPaginas = ceil($this->nResultados / $this->resultadosPorPagina);

        if(isset($_GET['pagina'])){
            //validar que pagina sea un numero
            if(is_numeric($_GET['pagina'])){
                //validar que pagina sea mayor o igual a 1 y menor o igual a total pagina
                if($_GET['pagina'] >= 1 && $_GET['pagina'] <= $this->totalPaginas){
                    $this->paginaActual = $_GET['pagina'];
                    $this->indice = ($this->paginaActual - 1) * $this->resultadosPorPagina;
                }else{
                    header("location: ?pagina=1");
                    $this->error = true;
                }
            }else{
                // validar error y redirigir a pgina 1
                header("location: ?pagina=1");
            }                        
        }
    }

    public function mostrarPeliculas(){
        if(!$this->error){
            $query = $this->connect()->prepare('SELECT * FROM articulos LIMIT :pos,:n');
            $query->execute(['pos'=>$this->indice,'n'=>$this->resultadosPorPagina]);
            foreach ($query as $articulo) {
                include 'vista-Pelicula.php';
            }
        }else{
            echo "error";
        }
    }
    
    public function mostrarPaginas(){        
      
        echo '';
            for ($i=0; $i < $this->totalPaginas; $i++) { 
                if(($i+1)==$this->paginaActual){
                    $actualPag = "bg-primary text-white";
                }else{
                    $actualPag = "";
                }            
                echo '<li class="page-item "><a class="page-link '.$actualPag.'" href="?pagina='.($i+1).'">'.($i+1).'</a></li>';
            }
        echo '';
    }
}
// <?php echo $_GET['pagina']<= 1 ? 'disabled':''?>