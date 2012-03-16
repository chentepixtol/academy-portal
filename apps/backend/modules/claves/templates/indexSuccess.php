<?php slot('pagetitle','Claves para el registro de profesores')?>

<table>
  <thead>
    <tr>
      <th>Clave</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clave_list as $clave): ?>
    <tr>
      <td><?php echo $clave->getClave() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br />  <a href="<?php echo url_for('claves/new') ?>">Generar</a>
