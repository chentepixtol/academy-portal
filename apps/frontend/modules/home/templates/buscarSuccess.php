<?php if(!empty($avisos)):?>
Encontrado en Avisos
<?php foreach($avisos as $aviso): ?>
<br /><br />
<div class="titulo">
    <a href="<?php echo url_for('aviso',$aviso)?>">
        <?php echo $aviso->getTitulo()?>
    </a>
</div>
<?php endforeach;?>
<br /><br />
<?php endif;?>


<?php if(!empty($proyectos)):?>
Encontrado en Proyectos
<?php foreach($proyectos as $proyecto): ?>
<br /><br />
<div class="titulo">
    <a href="<?php echo url_for('proyecto',$proyecto)?>">
        <?php echo $proyecto->getTitulo()?>
    </a>
</div>
<?php endforeach;?>
<br /><br />
<?php endif;?>


<?php if(!empty($videos)):?>
Encontrado en Videos
<?php foreach($videos as $video): ?>
<br /><br />
<div class="titulo">
    <a href="<?php echo url_for('video',$video)?>">
        <?php echo $video->getTitulo()?>
    </a>
</div>
<?php endforeach;?>
<br /><br />
<?php endif;?>


<?php if(!empty($sitios)):?>
Encontrado en los sitios de los Profesores
<?php foreach($sitios as $sitio): ?>
<br /><br />
<div class="titulo">
    <a href="<?php echo url_for('sitio',PerfilPeer::retrieveByPK($sitio->getProfesorId()))?>">
        <?php echo $sitio->getTitulo()?>
    </a>
</div>
<?php endforeach;?>
<br /><br />
<?php endif;?>

<?php if(!empty($wikis)):?>
Encontrado en los sitios de las Materias
<?php foreach($wikis as $wiki): ?>
<br /><br />
<div class="titulo">
    <a href="<?php echo url_for('materia',MateriaPeer::retrieveByPK($wiki->getMateriaId()))?>">
        <?php echo $wiki->getTitulo()?>
    </a>
</div>
<?php endforeach;?>
<?php endif;?>