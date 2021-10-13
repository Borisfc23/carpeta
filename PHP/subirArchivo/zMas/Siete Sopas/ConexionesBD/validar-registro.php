 <?php 
if(isset($_POST['submit'])){
    if(!empty($correo) || !empty($usuario) || !empty($contraseña)){
        $host = 'localhost';
        $BDusername = 'root';
        $BDpassword = "";
        $BDname = "SieteSopasPeru";        
        $conectar = new mysqli($host,$BDusername,$BDpassword,$BDname);
        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }else{
            $SELECT = "SELECT correo from usuarios where correo=? limit 10";
            $INSERT = "INSERT INTO usuarios (correo,usuario,contraseña) values(?,?,?)"; 

                $stmt = $conectar ->prepare($SELECT);                
                $stmt ->bind_param("s",$correo);
                $stmt ->execute();
                $stmt ->bind_result($correo);
                $stmt ->store_result();
                $rnum =$stmt->num_rows;
                if($rnum == 0){
                    $stmt -> close();
                    $stmt =$conectar->prepare($INSERT);
                    $stmt -> bind_param("sss",$correo,$usuario,$contraseña);
                    $stmt ->execute();                                                    
                    header("Location: ../Siete Sopas/Login.php"); 
                }else{                    
                    echo "<p style='color:red;font-size:12px'>Correo Repetido</p>";                        
                }
                $stmt->close();
                $conectar->close();
        }
    }else{        
        echo "<p style='color:red'>*Llena los campos</p>";         
    }
}        
?> 