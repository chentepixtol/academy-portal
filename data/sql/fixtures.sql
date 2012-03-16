INSERT INTO banner (id, titulo, descripcion, texto, fecha) VALUES
(1, 'Banner Lado Derecho', 'tamaño XxY', NULL, '2009-02-13'),
(2, 'Banner Lado Izquierdo', 'tamaño XxY', NULL, '2009-02-13'),
(3, 'Banner Central', 'tamaño XxY', NULL, '2009-02-13');

--
-- Volcar la base de datos para la tabla 'materia'
--

INSERT INTO materia (id, nombre, slug) VALUES
(1, 'Fundamentos de Programación', 'fundamentos-de-programacion'),
(2, 'Ingenieria de Software', 'ingenieria-de-software'),
(3, 'Programación Orientada a Objetos', 'programacion-orientada-a-objetos'),
(4, 'Estructuras y Bases de Datos', 'estructuras-y-bases-de-datos'),
(5, 'Análisis Numérico', 'analisis-numerico'),
(6, 'Circuitos Digitales', 'circuitos-digitales'),
(7, 'Microprocesadores', 'microprocesadores'),
(8, 'Arquitectura de Computadoras', 'arquitectura-de-computadoras'),
(9, 'Desarrollo Prospectivo de Proyectos', 'desarrollo-prospectivo-de-proyectos'),
(10, 'Lenguajes de Internet', 'lenguajes-de-internet'),
(11, 'Redes Lan', 'redes-lan'),
(12, 'Sistemas en Tiempo Real', 'sistemas-en-tiempo-real'),
(13, 'Agentes Inteligentes Expertos', 'agentes-inteligentes-expertos'),
(14, 'Aplicaciones de Redes de Computadoras', 'aplicaciones-de-redes-de-computadoras'),
(15, 'Visión por Computadora', 'vision-por-computadora');


--
-- Volcar la base de datos para la tabla 'pregunta'
--

INSERT INTO pregunta (id, pregunta, respuesta_1, respuesta_2, respuesta_3, respuesta_4, respuesta_5) VALUES
(1, '¿ El profesor falto a clases ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(2, '¿ El profesor fue puntual ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(3, ' ¿ El profesor fue ordenado al dar su clase ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(4, '¿ El profesor fue explícito al dar su clase ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(5, '¿ El profesor mostró dominio en su materia ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(6, '¿ El profesor aclaro dudas y preguntas en su clase ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(7, ' ¿ El profesor dio asesoría de teoría (y laboratorio) ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(8, '¿ El profesor dio al inicio del curso el temario o programa del estudio oficial ?', 'Todo', 'Muchos', 'Regular', 'Pocos', 'Nunca'),
(9, '¿ El profesor repartió los temas del curso para que los expusieran los alumnos ?', 'Todos', 'Muchos', 'Regular', 'Pocos', 'Nunca'),
(10, '¿ El profesor fue justo en la evaluación de exámenes ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(11, '¿ El profesor cubrió el programa de estudio oficial ?', 'Todo', 'Mucho', 'Regular', 'Poco', 'Nada'),
(12, '¿ El profesor cubrió los objetivos de los temas del programa de estudio ?', 'Todos', 'Muchos', 'Regular', 'Pocos', 'Nunca'),
(13, '¿ El profesor dio el nivel de profundidad que exige el programa de estudio ?', 'Alto', 'Propio', 'Regular', 'Bajo', 'Nunca'),
(14, '¿ Cuánto cree que aprendió de la materia ?', 'Todo', 'Mucho', 'Regular', 'Poco', 'Nada'),
(15, ' ¿ El profesor le hizo interesarse por la materia ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(16, '¿ Le gustaría cursar otra materia con el profesor ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(17, ' ¿ Cree que la calificación le fue regalada por ineficiencia del profesor ?', 'No', 'Fue justa', 'Medio', 'Poco', 'Si'),
(18, '¿ El profesor actuó honestamente en el curso ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'No'),
(19, '¿ El curso del profesor le fue tedioso ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(20, ' ¿ Le agrado el contenido de la materia ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca'),
(21, '¿ El profesor consultaba continuamente el libro o notas mostrando no haber preparado la clase ?', 'Siempre', 'Mucho', 'Regular', 'Poco', 'Nunca');


--
-- Volcar la base de datos para la tabla 'sf_guard_user'
--

INSERT INTO sf_guard_user (id, username, algorithm, salt, password, created_at, last_login, is_active, is_super_admin) VALUES
(1, 'chentepixtol', 'sha1', '883fc0b55c09fd346e9c62f9dd6414a3', 'fd1d7eb4d1cbd4149017d207f622f1b9fe485338', '2009-02-13 22:03:05', '2009-02-13 22:15:01', 1, 0),
(2, 'administrator', 'sha1', '8962d5cf5147120c7058cf79acac3aa8', '294eb3fe22a7e6c8f166c4a6863635fdf68a9dcb', '2009-02-13 22:03:05', NULL, 1, 0);

--
-- Volcar la base de datos para la tabla 'sf_guard_user_profile'
--

INSERT INTO sf_guard_user_profile (id, user_id, nombre, apellido_paterno, apellido_materno, email, telefono, extension_1, extension_2, movil, estancia, horario, foto, enlace) VALUES
(1, 1, 'Vicente', 'Mendoza', 'Moreno', NULL, 58775580, 12344, 21222, 767676676, 'cubiculo 5', 'lunes a viernes', '', 'vicentemendoza'),
(2, 2, 'Administrador', 'Admin', 'Admin', NULL, 57, 12344, 21222, 767676676, 'laboratorio 5', 'lunes a viernes 7am a 1pm', '', 'administrador');


