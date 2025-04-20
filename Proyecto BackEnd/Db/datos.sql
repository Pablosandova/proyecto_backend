-- Insertar datos en la tabla `Servicios`
INSERT INTO `Servicios` (`Nombre`, `Costo`, `Duracion`, `Descripcion`, `Tipo`, `Min integrantes`, `Max integrantes`)
VALUES
('Desarrollo Web', 5000, 30, 'Creación de sitios web modernos y responsivos', 'Desarrollo', 1, 5),
('Consultoría en Telecomunicaciones', 3000, 15, 'Asesoramiento en infraestructura de telecomunicaciones', 'Consultoría', 1, 3),
('Mantenimiento de Redes', 4000, 20, 'Soporte y mantenimiento de redes empresariales', 'Soporte', 2, 10),
('Desarrollo de Apps', 7000, 40, 'Creación de aplicaciones móviles', 'Desarrollo', 1, 5),
('Auditoría de Seguridad', 6000, 25, 'Evaluación de seguridad en sistemas', 'Consultoría', 1, 4),
('Instalación de Redes', 4500, 18, 'Configuración de redes empresariales', 'Soporte', 2, 8),
('Migración a la Nube', 8000, 35, 'Migración de sistemas a la nube', 'Consultoría', 1, 6),
('Optimización de Bases de Datos', 5500, 22, 'Mejora del rendimiento de bases de datos', 'Desarrollo', 1, 4),
('Soporte Técnico', 2000, 10, 'Resolución de problemas técnicos', 'Soporte', 1, 3),
('Capacitación en TI', 3000, 12, 'Entrenamiento en tecnologías de la información', 'Consultoría', 1, 10),
('Diseño UX/UI', 4000, 15, 'Diseño de interfaces de usuario', 'Desarrollo', 1, 3),
('Análisis de Datos', 6500, 28, 'Procesamiento y análisis de datos empresariales', 'Consultoría', 1, 5),
('Automatización de Procesos', 7500, 30, 'Automatización de tareas repetitivas', 'Desarrollo', 1, 6),
('Monitoreo de Infraestructura', 5000, 20, 'Supervisión de sistemas y redes', 'Soporte', 2, 8),
('Consultoría en DevOps', 7000, 25, 'Implementación de prácticas DevOps', 'Consultoría', 1, 4);

-- Insertar datos en la tabla `Nosotros`
INSERT INTO `Nosotros` (`Mision`, `Vision`, `Equipo`, `Jerarquia`)
VALUES
('Proveer soluciones tecnológicas innovadoras', 'Ser líderes en desarrollo y telecomunicaciones', 'Equipo multidisciplinario', 'Gerente > Líder > Técnico'),
('Ofrecer servicios de calidad en TI', 'Ser reconocidos por nuestra excelencia', 'Equipo especializado', 'Director > Coordinador > Ingeniero'),
('Impulsar la transformación digital', 'Ser pioneros en innovación tecnológica', 'Equipo creativo', 'CEO > CTO > Desarrollador'),
('Brindar soporte técnico confiable', 'Ser la primera opción en soporte', 'Equipo técnico', 'Supervisor > Técnico > Asistente'),
('Fomentar la capacitación en TI', 'Ser referentes en formación tecnológica', 'Equipo docente', 'Instructor > Asistente > Estudiante'),
('Garantizar la seguridad informática', 'Ser líderes en ciberseguridad', 'Equipo de seguridad', 'Gerente > Analista > Técnico'),
('Optimizar procesos empresariales', 'Ser expertos en automatización', 'Equipo de procesos', 'Consultor > Ingeniero > Técnico'),
('Diseñar experiencias digitales únicas', 'Ser referentes en diseño UX/UI', 'Equipo de diseño', 'Director > Diseñador > Asistente'),
('Proveer soluciones en la nube', 'Ser líderes en servicios cloud', 'Equipo cloud', 'Gerente > Ingeniero > Técnico'),
('Ofrecer análisis de datos precisos', 'Ser expertos en Big Data', 'Equipo de datos', 'Analista > Ingeniero > Técnico'),
('Implementar prácticas DevOps', 'Ser referentes en DevOps', 'Equipo DevOps', 'Líder > Ingeniero > Técnico'),
('Brindar soporte en telecomunicaciones', 'Ser la mejor opción en telecomunicaciones', 'Equipo de telecomunicaciones', 'Supervisor > Técnico > Asistente'),
('Desarrollar software a medida', 'Ser líderes en desarrollo personalizado', 'Equipo de desarrollo', 'Gerente > Desarrollador > Tester'),
('Capacitar en tecnologías emergentes', 'Ser referentes en formación tecnológica', 'Equipo docente', 'Instructor > Asistente > Estudiante'),
('Garantizar la calidad del servicio', 'Ser reconocidos por nuestra excelencia', 'Equipo de calidad', 'Gerente > Analista > Técnico');

-- Insertar datos en la tabla `Ciudades`
INSERT INTO `Ciudades` (`Nombre`)
VALUES
('Ciudad de México'),
('Monterrey'),
('Guadalajara'),
('Puebla'),
('Tijuana'),
('León'),
('Mérida'),
('Querétaro'),
('Cancún'),
('Toluca'),
('Chihuahua'),
('San Luis Potosí'),
('Aguascalientes'),
('Hermosillo'),
('Culiacán');

-- Insertar datos en la tabla `ServiciosCiudades`
INSERT INTO `ServiciosCiudades` (`idServicio`, `idCiudad`)
VALUES
(1, 1), (2, 2), (3, 3), (4, 4), (5, 5),
(6, 6), (7, 7), (8, 8), (9, 9), (10, 10),
(11, 11), (12, 12), (13, 13), (14, 14), (15, 15),
(1, 2), (2, 3), (3, 4), (4, 5), (5, 6),
(6, 7), (7, 8), (8, 9), (9, 10), (10, 11);