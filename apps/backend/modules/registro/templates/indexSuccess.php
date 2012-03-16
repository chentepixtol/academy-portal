<?php slot('pagetitle','Introduza la clave de registro proporcionada por el administrador') ?>

<form action="<?php echo url_for('registro/verifica')?>" method="post">
	<?php echo $clave_form ?>
	<input type="submit" value="Enviar" /> 
</form>