<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="robots" content="noindex, nofollow" />
        <title>Academia de Computacion</title>
        <link rel="shortcut icon" href="/images/favicon.ico" />
        <!--  	   Hojas de Estilo    -->
        <link rel="stylesheet" type="text/css" href="/js/ext/resources/css/ext-all.css"/>
        <link rel="stylesheet" type="text/css" href="/js/ext/resources/css/xtheme-gray.css" id="theme"/>
        <link rel="stylesheet" type="text/css" href="/css/ajax.css"/>
    </head>
    <body>
        <!--   Loading     -->
        <div id="loading-mask2">
        </div>
        <div id="loading2">
            <div class="loading-indicator2">
                <img src="/images/loading2.gif" alt="Cargando" />
                <p>
                    Academia de Computaci&oacute;n.
                </p>
            </div>
        </div>
        <!--   Archivos Externos Javascript  -->
        <!--[if lt IE 7.]>
            <script defer type="text/javascript" src="/js/pngfix.js"></script>
        <![endif]-->
        <script type="text/javascript" src="/js/ext/adapter/ext/ext-base.js">
        </script>
        <script type="text/javascript" src="/js/ext/ext-all.js">
        </script>
        <script type="text/javascript" src="/js/ajax.js">
        </script>
        <script type="text/javascript" src="/js/functions.js">
        </script>
        <!--  Imagen en Top  -->
        <div id="top">
            <img src="/images/Academia_Principal2.png" alt="Academia de computacion" />
            <p>
                <a onclick="cambiaTheme()" href="#">Bienvenido</a>
                <span id="barraNombre"></span>
            </p>
        </div>
        
		<!-- -->
        <?php echo $sf_content ?>
        <!-- -->
        
		<div id="tabs">
        </div>
        <!--     Imangenes Flotantes   -->
        <map name="avisos" id="avisos">
            <area shape="circle" coords="100,60,32" href="#" onclick="abrirTab('/ajax/avisos','Avisos')" alt="Avisos">
            </area>
        </map>
        <img src="/images/avisos.png" usemap="#avisos" style="position: absolute; top: 0px; right: 0px;" alt="avisos" />
        <div style="position: absolute; top: 230px; right: 105px; index: 444; z-index:100;">
            <img src="/images/enlaces.png" alt="enlaces" />
        </div>
    </body>
</html>