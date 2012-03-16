
<?php slot('title',"Academia de Computación de Esime - " . $aviso->getTitulo())?>
<?php slot('description',$aviso->getDescription())?>

<div class="post">
    <div class="title">
        <h2>
            <?php echo $aviso->getTitulo()?>
            <small>( publicado <?php echo $aviso->getFecha()?> )</small>
        </h2>
    </div>
    <div class="entry">
        <?php include_partial('global/post',array(
		  'texto' => $aviso->getTexto(),
		))?>
    </div>
</div>
