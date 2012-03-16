<style type="text/css">
    #tabla {
        float: left;
    } #show_elemento {
        padding: 20px;
        margin: 20px;
        margin-left: 300px;
        background-color: #f9fab7;
        opacity: 0.8;
    } #foot {
        clear: both;
    } #mensaje {
        text-align: center;
        padding: 2px;
        background-color: #eee;
        font-size: 1.2em;
        color: #001f6e;
        font-weight: bold;
        font-family: "Bookman Old Style";
    }
</style>
<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
    
        buttons_ver = $('a.ajax');
        $.each(buttons_ver, function(){
            $(this).bind("click", function(){
                $('div#cargar').load(this.href);
                return false;
            });
        });
        
        buttons_borrar = $('a.borrar');
        $.each(buttons_borrar, function(){
            $(this).bind("click", function(){
                $.ajax({
                    url: this.href,
					success: function(res)
					{
						Mensaje(res);
					}
                });
                $('tr#' + this.id).remove();
                return false;
            });
        });
        
    });
    
    Mensaje = function(msg){
        $('#mensaje').slideDown().html(msg);
    }
</script>
<?php slot('pagetitle','Sitio Personal')?>
<div id="mensaje">
	<?php if($sf_user->hasFlash('Mensaje')): ?>
	  <?php echo $sf_user->getFlash('Mensaje')?>
	<?php endif; ?>
</div>
<br/>
<div id="tabla">
    <table>
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Orden
                </th>
                <th>
                    Fecha
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sitio_list as $i => $sitio): ?>
            <tr id="<?php echo $sitio->getId()?>">
                <td>
                    <a class="ajax" href="<?php echo url_for('sitio/show?id='.$sitio->getId()) ?>">
                        <?php echo $sitio->getTitulo() ?>
                    </a>
                </td>
                <td>
                    <?php echo $sitio->getOrden() ?>
                </td>
                <td>
                    <?php echo $sitio->getFecha() ?>
                </td>
                <td>
                    <a href="<?php echo url_for('sitio/edit?id=' . $sitio->getId())?>">Editar</a>
                </td>
                <td>
                    <a href="<?php echo url_for('sitio/delete?id=' . $sitio->getId())?>" class="borrar" id="<?php echo $sitio->getId()?>">Borrar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo url_for('sitio/new') ?>">Nuevo</a>
</div>
<div id='show_elemento'>
    <div id='cargar'>
    </div>
</div>
<div id="foot">
</div>
