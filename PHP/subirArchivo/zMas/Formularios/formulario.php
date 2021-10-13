<?php 
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];
    $genero=$_POST['genero'];
    $email=$_POST['email'];
    $materia=$_POST['materia'];
    $telefono=$_POST['telefono'];
    
    if(!empty($nombre) || !empty($password) || !empty($genero) || !empty($email) 
    || !empty($telefono) || !empty($materia)){
        $host='localhost';
        $dbusername='root';
        $dbpassord="";
        $dbname="estudiante";

        //Conexion a Base de Datos
        $conn=new mysqli($host,$dbusername,$dbpassord,$dbname);
        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }else{
            $SELECT = "SELECT telefono from usuario where telefono=? limit 1";//SENTENCIA PREPARADA
            $INSERT = "INSERT INTO usuario (nombre,password,genero,email,materia,telefono) values(?,?,?,?,?,?)";

            //IDENTIFICADOR    LE DA INICIO A LA SENTENCIA PREPARADA     
                $stmt = $conn->prepare($SELECT);
                $stmt ->bind_param("i",$telefono);
                $stmt ->execute();//Se ejecuta la sentencia en la bd
                $stmt ->bind_result($telefono);//ver los resultados
                $stmt ->store_result();//transdiere los resultado de la ultima consulta

                $rnum =$stmt->num_rows;//regresa el numero de  fila
                if($rnum == 0){
                    $stmt -> close();
                    $stmt = $conn->prepare($INSERT);
                    $stmt ->bind_param("sssssi",$nombre,$password,$genero,$email,$materia,$telefono);
                    $stmt ->execute();
                    echo"REGISTRO COMPLETADO!!!";
                }else{
                    echo"TELEFONO REPETIDO";
                }
                $stmt->close();
                $conn->close();
        }                    
    }else{
        echo 'LLene todos los datos Plss';
        die();//SALIDA
    }
?>