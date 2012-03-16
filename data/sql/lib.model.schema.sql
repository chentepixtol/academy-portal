
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- sf_guard_user_profile
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_user_profile`;


CREATE TABLE `sf_guard_user_profile`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`nombre` VARCHAR(30),
	`apellido_paterno` VARCHAR(30),
	`apellido_materno` VARCHAR(30),
	`email` VARCHAR(100),
	`telefono` INTEGER,
	`extension_1` INTEGER,
	`extension_2` INTEGER,
	`movil` BIGINT,
	`estancia` VARCHAR(30),
	`horario` VARCHAR(30),
	`foto` VARCHAR(150),
	`enlace` VARCHAR(50),
	PRIMARY KEY (`id`),
	INDEX `sf_guard_user_profile_FI_1` (`user_id`),
	CONSTRAINT `sf_guard_user_profile_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- aviso
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `aviso`;


CREATE TABLE `aviso`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(150),
	`texto` TEXT,
	`activo` TINYINT,
	`fecha` DATE,
	`slug` VARCHAR(150),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- banner
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `banner`;


CREATE TABLE `banner`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(50),
	`descripcion` VARCHAR(255),
	`texto` TEXT,
	`fecha` DATE,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- clave
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `clave`;


CREATE TABLE `clave`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`clave` VARCHAR(20)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- materia
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `materia`;


CREATE TABLE `materia`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`slug` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- materia_profesor
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `materia_profesor`;


CREATE TABLE `materia_profesor`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`profesor_id` INTEGER  NOT NULL,
	`materia_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `materia_profesor_FI_1` (`profesor_id`),
	CONSTRAINT `materia_profesor_FK_1`
		FOREIGN KEY (`profesor_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE,
	INDEX `materia_profesor_FI_2` (`materia_id`),
	CONSTRAINT `materia_profesor_FK_2`
		FOREIGN KEY (`materia_id`)
		REFERENCES `materia` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- proyecto
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `proyecto`;


CREATE TABLE `proyecto`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`profesor_id` INTEGER  NOT NULL,
	`titulo` VARCHAR(100)  NOT NULL,
	`descripcion` TEXT,
	`fecha` DATE,
	`slug` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `proyecto_FI_1` (`profesor_id`),
	CONSTRAINT `proyecto_FK_1`
		FOREIGN KEY (`profesor_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pregunta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pregunta`;


CREATE TABLE `pregunta`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`pregunta` VARCHAR(255),
	`respuesta_1` VARCHAR(50),
	`respuesta_2` VARCHAR(50),
	`respuesta_3` VARCHAR(50),
	`respuesta_4` VARCHAR(50),
	`respuesta_5` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sitio
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sitio`;


CREATE TABLE `sitio`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`profesor_id` INTEGER  NOT NULL,
	`titulo` VARCHAR(50),
	`texto` TEXT,
	`orden` INTEGER,
	`fecha` DATE,
	PRIMARY KEY (`id`),
	INDEX `sitio_FI_1` (`profesor_id`),
	CONSTRAINT `sitio_FK_1`
		FOREIGN KEY (`profesor_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- video
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `video`;


CREATE TABLE `video`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`profesor_id` INTEGER  NOT NULL,
	`titulo` VARCHAR(100),
	`url` VARCHAR(255),
	`fecha` DATE,
	`slug` VARCHAR(100),
	PRIMARY KEY (`id`),
	INDEX `video_FI_1` (`profesor_id`),
	CONSTRAINT `video_FK_1`
		FOREIGN KEY (`profesor_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- wiki
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `wiki`;


CREATE TABLE `wiki`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`materia_id` INTEGER  NOT NULL,
	`profesor_id` INTEGER  NOT NULL,
	`titulo` VARCHAR(150),
	`texto` TEXT,
	`fecha` DATE,
	PRIMARY KEY (`id`),
	INDEX `wiki_FI_1` (`materia_id`),
	CONSTRAINT `wiki_FK_1`
		FOREIGN KEY (`materia_id`)
		REFERENCES `materia` (`id`)
		ON DELETE CASCADE,
	INDEX `wiki_FI_2` (`profesor_id`),
	CONSTRAINT `wiki_FK_2`
		FOREIGN KEY (`profesor_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- evaluacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `evaluacion`;


CREATE TABLE `evaluacion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`profesor_id` INTEGER  NOT NULL,
	`pregunta_id` INTEGER  NOT NULL,
	`num_resp_1` INTEGER,
	`num_resp_2` INTEGER,
	`num_resp_3` INTEGER,
	`num_resp_4` INTEGER,
	`num_resp_5` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `evaluacion_FI_1` (`profesor_id`),
	CONSTRAINT `evaluacion_FK_1`
		FOREIGN KEY (`profesor_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE,
	INDEX `evaluacion_FI_2` (`pregunta_id`),
	CONSTRAINT `evaluacion_FK_2`
		FOREIGN KEY (`pregunta_id`)
		REFERENCES `pregunta` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- alumno
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `alumno`;


CREATE TABLE `alumno`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(40)  NOT NULL,
	`password` VARCHAR(40)  NOT NULL,
	`email` VARCHAR(150)  NOT NULL,
	`nombre` VARCHAR(50),
	`apellido_paterno` VARCHAR(50),
	`apellido_materno` VARCHAR(50),
	`boleta` VARCHAR(10),
	PRIMARY KEY (`id`),
	UNIQUE KEY `alumno_U_1` (`username`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
