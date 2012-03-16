<?php slot('pagetitle','Información Personal')?>

<table>
  <thead>
    <tr>
      <th>Usuario</th>
      <th>Nombre</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Telefono</th>
      <th>E-mail</th>
      <th>Movil</th>
      <th>Estancia</th>
      <th>Horario</th>
      <th>Enlace</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($perfil_list as $perfil): ?>
    <tr>
      <td><a href="<?php echo url_for('perfil/edit?id='.$perfil->getId()) ?>"><?php echo $sf_user->getAttribute('username'); ?></a></td>
      <td><?php echo $perfil->getNombre() ?></td>
      <td><?php echo $perfil->getApellidoPaterno() ?></td>
      <td><?php echo $perfil->getApellidoMaterno() ?></td>
      <td><?php echo $perfil->getTelefono() ?></td>
      <td><?php echo $perfil->getEmail() ?></td>
      <td><?php echo $perfil->getMovil() ?></td>
      <td><?php echo $perfil->getEstancia() ?></td>
      <td><?php echo $perfil->getHorario() ?></td>
      <td><?php echo $perfil->getEnlace() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
