<?php echo $notice ?>
<form action="<?php echo url_for('alumno/verifica')?>" method="post">

<?php echo $form?>

<input type="submit" value="Iniciar" />
</form>

<p><a href="<?php echo url_for('registro/index')?>">Registrarse</a></p>