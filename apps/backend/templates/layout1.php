<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <!--  Version: Multiflex-3.12 / Layout-1                    --><!--  Date:    January 20, 2008                             --><!--  Design:  www.1234.info                                --><!--  License: Fully open source without restrictions.      --><!--           Please keep footer credits with the words    --><!--           "Design by 1234.info" Thank you!             -->
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    </head>
    <!-- Global IE fix to avoid layout crash when single word size wider than column width --><!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->
    <body>
        <!-- Main Page Container -->
        <div class="page-container">
            <!-- For alternative headers START PASTE here --><!-- A. HEADER -->
            <div class="header">
                <!-- A.1 HEADER TOP -->
                <div class="header-top">
                    <!-- Sitelogo and sitename --><a class="sitelogo" href="#" title="Go to Start page"></a>
                    <div class="sitename">
                    </div>
                    <!-- Navigation Level 0 -->
                    <div class="nav0">
                    <!-- Menu de Idiomas <ul><li>Español</li></ul> --> 
					</div>
					<!-- Navigation Level 1 -->
                    <div class="nav1">
                        <ul>
                            <li>
                                <a href="<?php echo url_for('@homepage')?>" title="principal">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo url_for('home/salir')?>" title="salir">Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- A.2 HEADER MIDDLE -->
                <div class="header-middle">
                    <!-- Site message -->
                    <div class="sitemessage">
                    </div>
                </div>
                <?php
	if($sf_user->hasCredential('administrator'))
	{ 
	  include_partial('global/administrator');
	} 
	else if($sf_user->hasCredential('profesor'))
	{
	  include_partial('global/profesor');
	}
	?>
            </div>
            <!-- For alternative headers END PASTE here --><!-- B. MAIN -->
            <div class="main">
                <!-- B.1 MAIN CONTENT -->
                <div class="main-content">
                	<br />
                    <!-- Pagetitle -->
					
					<?php if(has_slot('pagetitle')): ?>
					  <h1 class="pagetitle"><?php include_slot('pagetitle') ?></h1>
                    <?php endif; ?>
					
					<div class="column1-unit">
                        <?php echo $sf_content ?>
                    </div>
                </div>
            </div>
            <!-- C. FOOTER AREA -->
            <div class="footer">
                <p>
                    Instituto Politécnico Nacional | Escuela Superior de Ingeniería Mecánica y Eléctrica
                </p>
                <p class="credits">
                	Creado por Vicente, Ares y Ricardo
                    | Powered by <a href="http://www.symfony-project.org" title="framework">Symfony</a>
                </p>
            </div>
        </div>
    </body>
</html>
