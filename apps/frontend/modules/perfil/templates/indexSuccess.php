<h1>Perfiles de Profesores</h1>

<ul>
  <?php foreach ($perfil_list as $perfil): ?>
    <li>
      <a href="<?php echo url_for('perfil',$perfil) ?>"> <?php echo $perfil->getApellidoPaterno() ?>  <?php echo $perfil->getNombre() ?></a>
    </li>
  <?php endforeach; ?>
</ul>