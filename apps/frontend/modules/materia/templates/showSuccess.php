<?php slot('title', "Academia de Computación de Esime - " . $materia->getNombre()) ?>
<?php slot('description', "Sito de la materia " . $materia->getNombre() . "de la Academia de Esime Zacatenco del IPN.")?>

<div class="post">
    <div class="title">
        <h2>
            <?php echo $materia->getNombre()?>
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
