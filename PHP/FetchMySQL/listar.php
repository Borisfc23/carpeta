<?php 
    require 'conexion.php';
    $data = file_get_contents("php://input");
    // print_r($data);
    $query = $pdo->prepare("SELECT *FROM productos ORDER BY id DESC");
    $query->execute();
    if($data != ""){
        $query = $pdo->prepare("SELECT *FROM productos WHERE id LIKE '%".$data."%' OR producto LIKE '%".$data."%'  ");
        $query->execute();
    }
    if($query->rowCount()){
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $data) {
            echo "<tr>
                    <td>".$data['id']."</td>
                    <td>".$data['producto']."</td> 
                    <td>".$data['precio']."</td> 
                    <td>".$data['cantidad']."</td> 
                    <td>S/. ".$data['cantidad']*$data['precio']."</td> 
                    <td>
                        <button type='button' class='btn btn-success' onClick='Editar(".$data['id'].")'>Editar</button>
                        <button type='button' class='btn btn-danger' onClick='Eliminar(".$data['id'].")'>Eliminar</button>
                    </td>
                </tr>";
        }
    }else{
        echo "<tr >
                <td colspan='5'>Lo sentimos, no se encontraron registros</td>
            </tr>";
    }
?>