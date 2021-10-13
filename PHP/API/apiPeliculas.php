<?php
include_once 'pelicula.php';
class apiPelicula{

    private $imagen;
    private $error;

    public function getAll(){
        $pelicula = new Pelicula();

        $peliculas = array();
        $peliculas["items"]=array();
        $res = $pelicula->obtenerPelicula();
        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    "id"=>$row['id'],
                    "titulo"=>$row['titulo'],
                    "imagen"=>$row['imagen']
                );
                array_push($peliculas["items"],$item);
            }
            $this->mostrar($peliculas);
        }else{
            // echo "No se encontraron registros";
            $this->error('No hay elementos Registrados');
        }        
    }
    
    public function getByID($id){
        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array();
        $res = $pelicula->obtenerPeliculaUnit($id);
        if($res->rowCount()==1){
            $row = $res->fetch(PDO::FETCH_ASSOC);
            $item = array(
                "id"=>$row['id'],
                "titulo"=>$row['titulo'],
                "imagen"=>$row['imagen']
            );
            array_push($peliculas['items'],$item);
            $this->mostrar($peliculas);
        }else{
            $this->error("No se econtraron registros");
        }
    }
    public function add($item){
        $pelicula = new Pelicula();
        $res = $pelicula->nuevaPelicula($item);
        $this->exito("Nueva Pelicula Agregada");
    }
    public function exito($msj){
        echo '<code>'.json_encode(array('mensaje',$msj)).'</code>';
    }
    public function mostrar($array){
        echo '<code>'.json_encode($array).'</code>';
    }
    public function error($msj){
        echo '<code>'.json_encode(array('mensaje'=>$msj)).'</code>';
    }
    public function subirImagen($file){
        $directorio = "imagenes/";
        $this->imagen = basename($file["name"]);
        $archivo = $directorio.basename($file["name"]);
        $tipoArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
        
        //Validar si es imagen
        $checarSiImagen = getimagesize($file["tmp_name"]);

        if($checarSiImagen!=false){

            //validar tamaño del archivo
            $size = $file["size"];
            if($size > 900000){
                $this->error = "El archivo es muy pesado";
                return false;
            }else{
                //validar el tipo de imagen
                if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){
                    //Se valido el archivo correctamente
                    if(move_uploaded_file($file["tmp_name"],$archivo)){
                        return true;
                    }else{
                        $this->error ="El archivo se subio Correctamente"; 
                        return false;                       
                    }
                }else{
                    $this->error = "Solo se admite archivos JPG o JPEG";                                            
                }return false;
            }
        }else{
            $this->error = "El archivo no es una imagen";                                                        
            return false;
        }
    }
    function getImagen(){
        return $this->imagen;
    }
    function getError(){
        return $this->error;
    }
    
}