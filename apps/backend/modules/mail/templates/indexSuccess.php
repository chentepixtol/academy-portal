<?php slot('pagetitle','Enviar Correo Electronico Masivo')?>

<form action="<?php echo url_for('mail/procesa')?>" method="post">
<table>

    <?php echo $form ?>
    <tr>
        <th></th>
        <td><small>Nota: Para accesar al navegador de archivos del Servidor el Usuario: <strong> user21a </strong> y el Password:<strong> prof_esime91</strong></small></td>
    </tr>
	<tr>
		<td><input type="submit" value="enviar" /></td>
	</tr>
</table>
</form>
