<ul>
<?php foreach($materias as $materia ): ?>
  <li>
    <a href="<?php echo url_for('materia',$materia)?>" ><?php echo $materia->getNombre()?></a>
  </li>
<?php endforeach;?>
</ul>