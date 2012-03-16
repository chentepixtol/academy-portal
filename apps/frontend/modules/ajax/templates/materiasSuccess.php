<div id="menuMaterias" class="myMenu">
<?php foreach($materias as $materia): ?>
    <p>
        <a onclick="abrirTab('<?php echo url_for('materia',$materia)?>','<?php echo $materia->getNombre()?>')" href="#"><?php echo $materia->getNombre()?></a>
    </p>
<?php endforeach;?>
</div>
