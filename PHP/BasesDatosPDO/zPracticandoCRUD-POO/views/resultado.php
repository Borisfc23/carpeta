<div>
    <?php 
        $ancho = $porcentaje * 35;
        $estilo = "";
        if($encuesta->getOpcionSeleccionada() == $lenguaje['opcion'] ){
            $estilo = "seleccionado";
        }else{
            $estilo = "noseleccionado";
        }
    ?>
    <div class="<?php echo $estilo?>" style="width: <?php echo $ancho.'px'?>;">
        <p><?php echo strtoupper($lenguaje['opcion']).' '.$porcentaje."%"?></p>
    </div>
</div>