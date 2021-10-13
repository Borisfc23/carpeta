<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id'] ?>">
    <div class="imagen"><img src="<?php echo $item['imagen'] ?>" alt="<?php echo $item['nombre'];?>"></div>
    <div class="titulo"><?php echo $item['nombre'] ?></div>
    <div class="precio">S/. <?php echo $item['precio'] ?></div>
    <div class="botones">
        <button class="btn-add">Agregar</button>
    </div>
</div>