<?php slot('pagetitle','Evaluación del Profesor') ?>

<?php foreach($evals as $i => $eval):?>
  <?php include_partial('grafica',array(
    'i' => $i+1,
    'eval' => $eval,
  ))?>
<?php endforeach;?>