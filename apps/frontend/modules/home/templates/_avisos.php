<ul>
<?php foreach($avisos as $aviso ): ?>
  <li>
    <a href="<?php echo url_for('aviso',$aviso)?>" ><?php echo $aviso->getTitulo()?></a>
  </li>
<?php endforeach;?>
</ul>