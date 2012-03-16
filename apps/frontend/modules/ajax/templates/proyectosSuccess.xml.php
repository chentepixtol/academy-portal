<Items>
	<?php foreach($proyectos as $proyecto): ?>
	<Item>
		<AsesorTitular>
			<?php echo $proyecto->getsfGuardUser()?>
		</AsesorTitular>
		<Tema>
			<?php echo $proyecto->getTitulo()?>
		</Tema>
		<Summary>
			<?php echo $proyecto->getDescripcion()?>
		</Summary>
	</Item>
	<?php endforeach; ?>
</Items>
