<?php slot('pagetitle','Sitios de las Materias')?>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Materia</th>
      <th>Titulo</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($wiki_list as $wiki): ?>
    <tr>
      <td><a href="<?php echo url_for('wiki/show?id='.$wiki->getId()) ?>"><?php echo $wiki->getId() ?></a></td>
      <td><?php echo $wiki->getMateria()->getNombre() ?></td>
      <td><?php echo $wiki->getTitulo() ?></td>
      <td><?php echo $wiki->getFecha() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br />
  <a href="<?php echo url_for('wiki/new') ?>">Nuevo</a>
