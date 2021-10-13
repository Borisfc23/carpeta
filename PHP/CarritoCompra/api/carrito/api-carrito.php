<?php 
include_once 'carrito.php';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $carrito = new Carrito();

        switch ($action) {
            case 'mostrar':
                mostrar($carrito);
                break;
            case 'add':
                add($carrito);
                break;
            case 'remove':
                remove($carrito);
                break;
            
            default:
                # code...
                break;
        }
    }else{
        echo json_encode(['statuscode'=>404,'response'=>'No se pudo procesar la solicitud']);
    }

    function mostrar($carrito){
        //Cargar arreglo en la sesion

        //Consultar DB para actualizar vvalores de los productos
        $itemsCarrito = json_decode($carrito->load(),1);
        $fullItems = [];
        $total = 0;
        $totalItems = 0;

        foreach($itemsCarrito as $itemCarrito) {
            $httRequest = file_get_contents('http://localhost/PHP/CarritoCompra/api/productos/api-productos.php?get-item='.$itemCarrito['id']);
            $itemProducto = json_decode($httRequest, 1)['item'];
            $itemProducto['cantidad'] = $itemCarrito['cantidad'];
            $itemProducto['subtotal'] = $itemProducto['cantidad'] * $itemProducto['precio'];

            $total += $itemProducto['subtotal'];
            $totalItems +=$itemProducto['cantidad'];

            array_push($fullItems,$itemProducto);
        }
        $resArray = array('info'=>['count'=>$totalItems,'total'=>$total], 'items'=>$fullItems);
        
        echo json_encode($resArray);
    }

    function add($carrito){
        if(isset($_GET['id'])){
            $res = $carrito->add($_GET['id']);
            echo $res;
        }else{
            echo json_encode(['statuscode'=> 404, 'response'=>'No se puede procesar']);
        }
    }

    function remove($carrito){  
        if(isset($_GET['id'])){
            $res = $carrito->remove($_GET['id']);
            if($res){
                echo json_encode(['statuscode'=>200]);
            }else{
                echo json_encode(['statuscode'=>400]);
            }
        }else{
            echo json_encode(['statuscode'=>404,'response'=>'No se pud o procesar la solicitud']);
        }
    }
?>