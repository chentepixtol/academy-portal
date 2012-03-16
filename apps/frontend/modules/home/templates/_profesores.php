<ul>
<?php foreach($profesores  as $profesor ): ?>
  <li>
    <a href="<?php echo url_for('sitio',$profesor)?>" ><?php echo $profesor->getNombre() . " " . $profesor->getApellidoPaterno()?></a>
  </li>
<?php endforeach;?>
</ul>