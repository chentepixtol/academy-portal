<?php slot('pagetitle',"Seleccione las Materias que imparte en ESIME Zac.")?>

<form action="<?php echo url_for('materias_impartidas/verifica')?>" method="post" >
  
  <?php echo $form?>

  <br />
  <input type="submit" value="Guardar" />
  
</form>