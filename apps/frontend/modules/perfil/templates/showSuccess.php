<?php slot('title', "Academia de Computación de Esime - " . $perfil->getFullName())?>
<?php slot('description', $perfil->getDescription()) ?>

<div class="info">
    <img src="/images/ipn-trans.png" align="left" height="130">
	<span class="campos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Nombre:</span>
    <span class="campos3">
        <?php echo $perfil->getNombre() ?>
    </span>
    <br>
    <br>
    <span class="campos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Apellido Paterno:</span>
    <span class="campos3">
        <?php echo $perfil->getApellidoPaterno() ?>
    </span>
    <br>
    <br>
    <span class="campos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Apellido Materno:</span>
    <span class="campos3">
        <?php echo $perfil->getApellidoMaterno() ?>
    </span>
    <br>
    <br>
    <span class="campos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span class="campos3">
       <img src="<?php echo $perfil->getFoto() ?>" alt="imagen" width="130" />
    </span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <br>
    <span class="campos2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Tel&eacute;fono:</span>
    <span class="campos3">
        <?php echo $perfil->getTelefono() ?>
    </span>
    <br>
    <br>
    <span class="campos2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Extensi&oacute;n 1:</span>
    <span class="campos3">
        <?php echo $perfil->getExtension1() ?>
    </span>
    <br>
    <br>
    <span class="campos2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Extensi&oacute;n 2:</span>
    <span class="campos3">
        <?php echo $perfil->getExtension2() ?>
    </span>
    <br>
    <br>
    <span class="campos2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Lugar donde encontrarlo:</span>
    <span class="campos3">
        <?php echo $perfil->getEstancia() ?>
    </span>
    <br>
    <br>
    <span class="campos2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Horario:</span>
    <span class="campos3">
        <?php echo $perfil->getHorario() ?>
    </span>
    <br>
    <br>
    <span class="campos2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        E-mail:</span>
    <span class="campos3">
        <?php echo $perfil->getEmail()?>
    </span>
    <br>
    <br>
    <span class="campos2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Sitio Personal</span>
    <a class="campos3" href="<?php echo url_for('sitio',$perfil)?>">
        <?php echo $perfil->getEnlace() ?>
    </a>
    <div id="closebutton" class="highslide-overlay closebutton" onclick="return hs.close(this)" title="Close">
    </div>

</div>
