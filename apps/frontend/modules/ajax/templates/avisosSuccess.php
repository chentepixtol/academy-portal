<?php foreach($avisos as $aviso): ?>
<div class="elemento">
    <p class="titulo">
        <?php echo $aviso->getTitulo() ?>
    </p>
    <div class="texto">
        <?php echo $aviso->getTexto() ?>
    </div>
</div>
<?php endforeach; ?>
