<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
Title      : Embouteillage
Version    : 1.0
Released   : 200800204
Description: Three-column blog design with the third column allocated for ads. Features Web 2.0 design ideal for 1024x768 resolutions.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php if(has_slot('description')): ?>
        <meta name="description" content="<?php include_slot('description')?>" />
        <?php endif; ?>
        <?php if(has_slot('title')): ?>
        <title>
            <?php include_slot('title')?>
        </title>
        <?php else: ?>
        <?php include_title() ?>
        <?php endif; ?>
        <link rel="shortcut icon" href="/images/favicon.ico" />
    </head>
    <body>
        <!-- start header -->
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="<?php echo url_for(@homepage)?>"><img src="/images/Academia_Principal2.png" alt="logo"/></a></h1>
                </div>
                <div id="rss">
                  <!--  <a href="#">RSS Feed</a> -->
                </div>
                <div id="search">
                    <form id="searchform" method="get" action="<?php echo url_for('home/buscar')?>">
                        <fieldset>
                            <input type="text" name="query" id="search_text" size="16" value="" /><input type="submit" id="button_submit" value="Buscar" />
                        </fieldset>
                    </form>
                </div>
            </div><!-- end header --><!-- star menu -->
            <div id="menu">
                <ul>
                    <li>
                        <a href="<?php echo url_for('aviso/index')?>">Avisos</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('perfil/index')?>">Profesores</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('proyecto/index')?>">Proyectos</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('video/index')?>">Videos</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('alumno/inicio')?>">Alumnos</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('ajax/index')?>">Ajax</a>
                    </li>
                </ul>
            </div>
            <!-- end menu --><!-- start page -->
            <div id="page">
                <!-- start content -->
                <div id="content">
                    <?php echo $sf_content ?>
                </div>
                <!-- end content --><!-- start sidebar -->
                <div id="sidebar">
                    <ul>
                        <li id="menu_avisos">
                            <h2>Avisos</h2>
                            <?php include_component('home','avisos')?>
                        </li>
                        <li id="menu_materias">
                            <h2>Materias</h2>
                            <?php include_component('home','materias') ?>
                        </li>
                        <li id="menu_profesores">
                            <h2>Profesores</h2>
                            <?php include_component('home','profesores') ?>
                        </li>
                    </ul>
                </div>
                <!-- end sidebar -->
            </div>
            <!-- end page --><!-- start footer -->
            <div id="footer">
                <p class="legal">
                    Intituto Politécnico Nacional | <a href="<?php echo url_for('home/about') ?>">Desarrolladores</a>
                </p>
                <p class="links">
                    <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
					<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="¡CSS Válido!" /></a>
                </p>
            </div>
        </div><!-- end footer -->
    </body>
</html>