<?php slot('title',"Academia de Computación de Esime - " .  $usuario->getFullName())?>
<?php slot('description', "Sitio Personal del Profesor " . $usuario->getFullName())?>

<div class="post">
    <div class="title">
        <h2>
            <?php echo $usuario->getApellidoPaterno() . " " . $usuario->getNombre() ?>
        </h2>
    </div>
    <div class="entry">
        <?php foreach($bloques as $bloque): ?>
        <?php include_partial('global/post',array(
		  'titulo' => $bloque->getTitulo(),
		  'texto' => $bloque->getTexto(),
          'fecha' => $bloque->getFecha(),
		))?>
        <?php endforeach;?>
    </div>
</div>
