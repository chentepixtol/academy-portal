<!-- A.3 HEADER BOTTOM -->
<div class="header-bottom">
    <!-- Navigation Level 2 (Drop-down menus) -->
    <div class="nav2">
        <!-- Navigation item -->
        <ul>
            <li>
                <a href="<?php echo url_for('perfil/index')?>">Información Personal</a>
            </li>
        </ul>
        <!-- Navigation item -->
        <ul>
            <li>
                <a href="<?php echo url_for('sitio/index') ?>">Sitio Personal
                    <!--[if IE 7]><!--></a>
                <!--<![endif]--><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                    <li>
                        <a href="<?php echo url_for('sitio/index')?>">Listar</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('sitio/new') ?>">Agregar</a>
                    </li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
        </ul>
        <!-- Navigation item -->
  <!-- Navigation item -->
        <ul>
            <li>
                <a href="<?php echo url_for('wiki/index') ?>">Sitios de Materias
                    <!--[if IE 7]><!--></a>
                <!--<![endif]--><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                    <li>
                        <a href="<?php echo url_for('wiki/index')?>">Listar</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('wiki/new') ?>">Agregar</a>
                    </li>
					<li>
						<a href="<?php echo url_for('materias_impartidas/index') ?>">Materias Impartidas</a>
					</li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
        </ul>
        <!-- Navigation item -->
        <ul>
            <li>
                <a href="<?php echo url_for('video/index') ?>">Videos
                    <!--[if IE 7]><!--></a>
                <!--<![endif]--><!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                    <li>
                        <a href="<?php echo url_for('video/index') ?>">Listar</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('video/new') ?>">Nuevo</a>
                    </li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
        </ul>
		<!-- Navigation item -->
        <ul>
            <li>
                <a href="<?php echo url_for('evaluacion/index')?>">Evaluación</a>
            </li>
        </ul>
		
    </div>
</div>
