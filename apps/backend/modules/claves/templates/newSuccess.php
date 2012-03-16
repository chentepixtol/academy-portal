<?php slot('pagetitle','Generar nuevas claves')?>

<form action="<?php echo url_for("claves/procesa")?>" method="post">

<?php echo $form ?>

<input type="submit" value="Generar" />
</form>