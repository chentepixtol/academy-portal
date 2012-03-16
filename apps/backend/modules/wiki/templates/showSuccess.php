<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $wiki->getId() ?></td>
    </tr>
    <tr>
      <th>Materia:</th>
      <td><?php echo $wiki->getMateria() ?></td>
    </tr>
    <tr>
      <th>Profesor:</th>
      <td><?php echo $wiki->getProfesorId() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $wiki->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Texto:</th>
      <td><?php echo $wiki->getTexto() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $wiki->getFecha() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('wiki/edit?id='.$wiki->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('wiki/index') ?>">Listar</a>
