<div class="opcion">
    <?php 
        $witdhBar = $porcentaje*10;
        $estilo = "barra";
        if($survey->getOptionSelected() == $lenguaje['opcion']){
            $estilo = "seleccionado";
        }else{
            $estilo= "noseleccionado";
        }
        echo $lenguaje['opcion'];
    ?>
    <div class="<?php echo $estilo; ?>" style="width: <?php echo $witdhBar.'px'?>">
        <p><?php echo $lenguaje['votos'].'%'?></p>
    </div>
</div>