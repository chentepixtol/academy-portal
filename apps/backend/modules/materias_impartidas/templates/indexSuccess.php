<?php slot('pagetitle',"Materias Impartidas")?>
<ol>
<?php foreach($rel_mat as $mat): ?>
<li>
  <?php echo $mat->getMateria()->getNombre()?>
</li>
<?php endforeach; ?>
</ol>

<br />
<a href="<?php echo url_for('materias_impartidas/editar') ?>" >Editar</a>