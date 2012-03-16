<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('video/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('video/index') ?>">Regresar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'video/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Esta seguro?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      
      <tr>
        <th><?php echo $form['titulo']->renderLabel() ?></th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>
      
      <tr>
        <th><?php echo $form['url']->renderLabel() ?></th>
        <td>
          <?php echo $form['url']->renderError() ?>
          <?php echo $form['url'] ?>
          <input type="button" onclick="return setFile('video_url')" value="Explorador" />
        </td>
      </tr>
      
      <tr>
        <th></th>
        <td><small>Nota: Para accesar al navegador de archivos del Servidor el Usuario: <strong> user21a </strong> y el Password:<strong> prof_esime91</strong></small></td>
      </tr>
      
    </tbody>
  </table>
</form>
 