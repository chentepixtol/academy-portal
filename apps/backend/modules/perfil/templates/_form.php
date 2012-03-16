<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('perfil/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('perfil/index') ?>">Regresar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['apellido_paterno']->renderLabel() ?></th>
        <td>
          <?php echo $form['apellido_paterno']->renderError() ?>
          <?php echo $form['apellido_paterno'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['apellido_materno']->renderLabel() ?></th>
        <td>
          <?php echo $form['apellido_materno']->renderError() ?>
          <?php echo $form['apellido_materno'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['telefono']->renderLabel() ?></th>
        <td>
          <?php echo $form['telefono']->renderError() ?>
          <?php echo $form['telefono'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['extension_1']->renderLabel() ?></th>
        <td>
          <?php echo $form['extension_1']->renderError() ?>
          <?php echo $form['extension_1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['extension_2']->renderLabel() ?></th>
        <td>
          <?php echo $form['extension_2']->renderError() ?>
          <?php echo $form['extension_2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['movil']->renderLabel() ?></th>
        <td>
          <?php echo $form['movil']->renderError() ?>
          <?php echo $form['movil'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estancia']->renderLabel() ?></th>
        <td>
          <?php echo $form['estancia']->renderError() ?>
          <?php echo $form['estancia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['horario']->renderLabel() ?></th>
        <td>
          <?php echo $form['horario']->renderError() ?>
          <?php echo $form['horario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['foto']->renderLabel() ?></th>
        <td>
          <?php echo $form['foto']->renderError() ?>
          <?php echo $form['foto'] ?>
          <input type="button" onclick="return setFile('perfil_foto')" value="Explorador" />
        </td>
      </tr>
      <tr>
        <th><?php echo $form['enlace']->renderLabel() ?></th>
        <td>
          <?php echo $form['enlace']->renderError() ?>
          <?php echo $form['enlace'] ?>
        </td>
      </tr>
        <tr>
        <th></th>
        <td><small>Nota: Para accesar al navegador de archivos del Servidor el Usuario: <strong> user21a </strong> y el Password:<strong> prof_esime91</strong></small></td>
      </tr>
    </tbody>
  </table>
</form>
