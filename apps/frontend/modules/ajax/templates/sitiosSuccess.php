<div id="menuProfesores" class="myMenu">
<?php foreach($profesores as $profesor): ?>
    <p>
        <a onclick="abrirTab('<?php echo url_for('sitio',$profesor)?>','<?php echo $profesor->getApellidoPaterno(). " " . $profesor->getNombre()?>')" href="#"><?php echo $profesor->getApellidoPaterno(). " " . $profesor->getNombre()?></a>
    </p>
<?php endforeach;?>
</div>
