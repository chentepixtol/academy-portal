<div id="menuCurricula" class="myMenu">
    <p>
        <a onclick="openWindow('/xhtml/mapa.html')" href="#">Mapa Curricular</a>
    </p>
    <p>
        <a onclick="abrirVentana('/xhtml/horarios.php',this)" href="#" id="btn0" title="Horarios">Horarios</a>
    </p>
</div>
<div id="menuProyectos" class="myMenu">
    <p>
        <a onclick="abrirTab('/ajax/proyectos','Proyectos')" href="#">Proyecto Terminal</a>
    </p>
</div>
<div class="myMenu" id="menuMaterial">
    <p>
        <a href="#videos" onclick="openWindow('/ajax/video')">Videos</a>
    </p>
</div>
<div class="myMenu" id="menuLinks">
    <p>
        <a href="http://www.ipn.mx" class="external">IPN</a>
    </p>
    <p>
        <a href="http://www.esimez.ipn.mx" class="external">ESIMEZ</a>
    </p>
    <p>
        <a href="http://www.sigue.esimez.ipn.mx" class="external">SIGUE</a>
    </p>
    <p>
        <a href="http://www.virtual.esimez.ipn.mx/virtual/" class="external">Esime Virtual</a>
    </p>
    <p>
        <a href="http://www.ce.esimez.ipn.mx/" class="external">Control Escolar</a>
    </p>
</div>
<div id="menuDesarrolladores" class="myMenu">
    <p>
        <a href="#" onclick="abrirTab('<?php echo url_for('home/vicente')?>','Vicente Mendoza')">Vicente Mendoza Moreno</a>
    </p>
    <p>
        <a href="#" onclick="abrirTab('<?php echo url_for('home/ares')?>','Ares Herrera')">Ares Roberto Herrera Urbina</a>
    </p>
    <p>
        <a href="#" onclick="abrirTab('<?php echo url_for('home/ricardo')?>','Ricardo Ortiz')">Richardo Ortiz Cervantes</a>
    </p>
</div>
<div id="centro">
    <img src="/images/centro.png" alt="Academia de Esime" />
    <br/>
    <p>
        Profesor inicie sesión <a href="profesor.php" class="external">aqui</a>. Registro de Profesores <a href="admin/registro/registra.php" class="external">aqui</a>
    </p>
    <br/>
    <?php echo $banner_central ?>
</div>
<div style="position: absolute; top:115px; left:1px">
    <?php echo $banner_izquierdo ?>
</div>
<div style="position: absolute; top:170px; right:1px">
    <?php echo $banner_derecho ?>
</div>
