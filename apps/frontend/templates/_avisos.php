<ul>
<?php foreach($avisos = AvisoPeer::doSelect(new Criteria()) as $aviso ): ?>
  <li>
    <a href="<?php echo url_for('aviso',$aviso)?>" ><?php echo $aviso->getTitulo()?></a>
  </li>
<?php endforeach;?>
</ul>