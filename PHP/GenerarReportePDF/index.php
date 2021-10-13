<?php 
    require_once __DIR__.'/vendor/autoload.php';
    require_once 'model.php';

    $alumno = new Model();
    
    $lista = $alumno->getAll();
    $html = '<h1>Tabla de Alumnos</h1>
            <img src="logoJPG.PNG"/>
            <table border="1">
                <tr>
                    <td>Id</td>
                    <td>Codigo</td>
                    <td>Producto</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                </tr>
            ';
    foreach ($lista['items'] as $item) {
        $html .= '
                <tr>
                    <td>'.$item['id'].'</td>
                    <td>'.$item['codigo'].'</td>
                    <td>'.$item['producto'].'</td>
                    <td>'.$item['precio'].'</td>
                    <td>'.$item['cantidad'].'</td>
                </tr>';
        // echo $item['producto'];
    }
    $html .='</table>';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $mpdf->Output();
?>