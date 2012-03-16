<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('registro/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;
          <input type="submit" value="Enviar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['username']->renderLabel() ?></th>
        <td>
          <?php echo $form['username']->renderError() ?>
          <?php echo $form['username'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['password']->renderLabel() ?></th>
        <td>
          <?php echo $form['password']->renderError() ?>
          <?php echo $form['password'] ?>
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
        <th><?php echo $form['boleta']->renderLabel() ?></th>
        <td>
          <?php echo $form['boleta']->renderError() ?>
          <?php echo $form['boleta'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
