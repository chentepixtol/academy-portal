<?php slot('pagetitle','Lista de Videos') ?>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Titulo</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($video_list as $video): ?>
    <tr>
      <td><a href="<?php echo url_for('video/edit?id='.$video->getId()) ?>"><?php echo $video->getId() ?></a></td>
      <td><?php echo $video->getTitulo() ?></td>
      <td><?php echo $video->getFecha() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('video/new') ?>">Nuevo</a>
