<h2>Proyectos</h2>
<ul>
<?php foreach($proyectos as $proyecto):?>
<li>
<a href="<?php echo url_for('proyecto',$proyecto)?>"><?php echo $proyecto->getTitulo()?></a>
</li>
<?php endforeach;?>
</ul>

<br />
<p><a href="<?php echo url_for('proyecto/pdf')?>">Descargar PDF</a></p>