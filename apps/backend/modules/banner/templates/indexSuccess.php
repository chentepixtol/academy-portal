<?php slot('pagetitle','Anuncios de Publicidad')?>

<table>
  <thead>
    <tr>
      <th>Titulo</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($banner_list as $banner): ?>
    <tr>
      <td><a href="<?php echo url_for('banner/edit?id='.$banner->getId()) ?>"><?php echo $banner->getTitulo() ?></a></td>
      <td><?php echo $banner->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
