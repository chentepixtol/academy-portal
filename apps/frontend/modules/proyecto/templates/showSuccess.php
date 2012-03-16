<?php slot('title',"Academia de Computación de Esime - " . $proyecto->getTitulo())?>
<?php slot('description', $proyecto->getDescription())?>

<div class="post">
    <div class="title">
        <h2>
            <?php echo $proyecto->getTitulo() ?>
            <small> Publicado el ( <?php echo $proyecto->getFecha()?> ) </small>
        </h2>
    </div>
    <div class="entry">
        <?php include_partial('global/post',array(
          'titulo' => "Profesor: " . $proyecto->getSfGuardUser(),
		  'texto' => $proyecto->getDescripcion(),
		))?>
    </div>
</div>
