<?php 
// if(isset($_POST)){
    $codigo = $_POST['codigo'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    require('conexion.php');
    if(empty($_POST['idp'])){
        if(!empty(trim($_POST['codigo'])) || !empty(trim($_POST['producto'])) || !empty(trim($_POST['precio'])) || !empty(trim($_POST['cantidad']))){
            
            $query = $pdo->prepare('INSERT INTO productos (codigo,producto,precio,cantidad) VALUES (:cod,:pro,:pre,:cant)');
            $query->bindParam(":cod",$codigo);
            $query->bindParam(":pro",$producto);
            $query->bindParam(":pre",$precio);
            $query->bindParam(":cant",$cantidad);
            $query->execute();
            $pdo = null; //Cerrando la conexion    
            echo'ok';
        }
    }else{
        $id = $_POST['idp'];
        if( !empty(trim($id))|| !empty(trim($_POST['codigo'])) || !empty(trim($_POST['producto'])) || !empty(trim($_POST['precio'])) || !empty(trim($_POST['cantidad']))){
            $query = $pdo->prepare('UPDATE productos SET codigo=:cod,producto=:pro,precio=:pre,cantidad=:cant WHERE id=:id');
            $query->bindParam(":cod",$codigo);
            $query->bindParam(":pro",$producto);
            $query->bindParam(":pre",$precio);
            $query->bindParam(":cant",$cantidad);
            $query->bindParam(":id",$id);
            $query->execute();
            $pdo = null; //Cerrando la conexion    
            echo'modificado';
        }
    }
// }
?>