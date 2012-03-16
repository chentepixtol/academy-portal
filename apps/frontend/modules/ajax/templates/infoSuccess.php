<div id="menuInfoProfesores" class="myMenu">
<?php foreach($profesores as $profesor): ?>
    <p>
        <a onclick="abrirTab('<?php echo url_for('perfil',$profesor)?>','Info <?php echo $profesor->getNombre()?>')" href="#"><?php echo $profesor->getApellidoPaterno(). " " . $profesor->getNombre()?></a>
    </p>
<?php endforeach;?>
</div>
