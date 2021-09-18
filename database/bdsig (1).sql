-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2021 a las 20:46:11
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsig`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

drop database if exists bdsig   ;
create database bdsig  ;
use bdsig;


CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL,
  `carrera` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `carrera`) VALUES
(1, 'Ingenieria de Sistemas'),
(2, 'Ingenieria Electronico'),
(3, 'Ingenieria de Sistemas e Informatica'),
(4, 'Ingeniero Industrial'),
(5, 'Ingeniero Computación y Sistemas'),
(6, 'Ingeniero Quimica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `idciclo` int(11) NOT NULL,
  `ciclo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciclo`
--

INSERT INTO `ciclo` (`idciclo`, `ciclo`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V'),
(6, 'VI'),
(7, 'VII'),
(8, 'VIII'),
(9, 'IX'),
(10, 'X');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `curso` varchar(70) DEFAULT NULL,
  `idciclo2` int(11) DEFAULT NULL,
  `credito` int(11) DEFAULT NULL,
  `condicion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `curso`, `idciclo2`, `credito`, `condicion`) VALUES
(1, 'Desarrollo de Pensamiento Logico Matematico', 1, 3, 'OBLIGATORIO'),
(2, 'Lectura Critica yRedaccion de Textos Academicos', 1, 3, 'OBLIGATORIO'),
(3, 'Desarrollo Personal', 1, 3, 'OBLIGATORIO'),
(4, 'Introduccion al Analisis Matematico', 1, 4, 'OBLIGATORIO'),
(5, 'Estadistica General', 1, 4, 'OBLIGATORIO'),
(6, 'Introduccion a la Ingenieria de Sistemas', 1, 2, 'OBLIGATORIO'),
(7, 'Introduccion a la Programacion', 1, 3, 'OBLIGATORIO'),
(8, 'Taller de Tecnicas de la Comunicacion Eficaz', 1, 1, 'ELECTIVO'),
(9, 'Taller de Musica', 1, 1, 'ELECTIVO'),
(10, 'Taller de Lderazgo y Trabajo en Equipo', 1, 1, 'ELECTIVO'),
(11, 'Taller de Teatro', 1, 1, 'ELECTIVO'),
(12, 'Ética, Convivencia Humana y Ciudadanía', 2, 3, 'OBLIGATORIO'),
(13, 'Sociedad, Cultura y Ecología', 2, 3, 'OBLIGATORIO'),
(14, 'Cultura Investigativa y Pensamiento Crítico', 2, 3, 'OBLIGATORIO'),
(15, 'Análisis Matemático', 2, 4, 'OBLIGATORIO'),
(16, 'Física General', 2, 4, 'OBLIGATORIO'),
(17, 'Programación Orientada a Objetos I', 2, 4, 'OBLIGATORIO'),
(18, 'Taller de Manejo de TIC (e)', 2, 1, 'ELECTIVO'),
(19, 'Taller de Danzas Folklóricas (e)', 2, 1, 'ELECTIVO'),
(20, 'Taller de Deporte (e)', 2, 1, 'ELECTIVO'),
(21, 'Administracion General', 3, 3, 'OBLIGATORIO'),
(22, 'Sistematica', 3, 3, 'OBLIGATORIO'),
(23, 'Estadistica Aplicada', 3, 3, 'OBLIGATORIO'),
(24, 'Matematica Aplicada', 3, 3, 'OBLIGATORIO'),
(25, 'Fisica Electronica', 3, 3, 'OBLIGATORIO'),
(26, 'Programacion Orientada a Objetos II', 3, 4, 'OBLIGATORIO'),
(27, 'Ingenieria Grafica', 3, 3, 'ELECTIVO'),
(28, 'Psicologia Organizacional', 3, 3, 'ELECTIVO'),
(29, 'Economía General', 4, 3, 'OBLIGATORIO'),
(30, 'Diseño Web', 4, 3, 'OBLIGATORIO'),
(31, 'Pensamiento de Diseño', 4, 3, 'OBLIGATORIO'),
(32, 'Gestión por Procesos', 4, 3, 'OBLIGATORIO'),
(33, 'Sistemas Digitales', 4, 3, 'OBLIGATORIO'),
(34, 'Estructura de Datos Orientado a Objetos', 4, 4, 'OBLIGATORIO'),
(35, 'Computación Gráfica y Visual (e)', 4, 3, 'ELECTIVOOBLIGATORIO'),
(36, 'Plataformas Tecnológicas (e)', 4, 3, 'ELECTIVO'),
(37, 'Contabilidad y Finanzas', 5, 3, 'OBLIGATORIO'),
(38, 'Tecnologias Web ', 5, 3, 'OBLIGATORIO'),
(39, 'Investigacion de Operaciones', 5, 3, 'OBLIGATORIO'),
(40, 'Ingenieria de Datos I', 5, 4, 'OBLIGATORIO'),
(41, 'Arquitectura  y Organizacion de Computadoras', 5, 3, 'OBLIGATORIO'),
(42, 'Sistemas de Infomación', 5, 4, 'OBLIGATORIO'),
(43, 'TeleInformatica', 5, 3, 'ELECTIVO'),
(44, 'Transformacion Digital', 5, 3, 'ELECTIVO'),
(45, 'Finanzas Corporativas', 6, 3, 'OBLIGATORIO'),
(46, 'Sistemas Inteligentes', 6, 3, 'OBLIGATORIO'),
(47, 'Ingeniería Económica', 6, 3, 'OBLIGATORIO'),
(48, 'Ingenieria de Datos II', 6, 3, 'OBLIGATORIO'),
(49, 'Sistemas Operativos', 6, 3, 'OBLIGATORIO'),
(50, 'Ingeniería Ambiental', 6, 3, 'ELECTIVO'),
(51, 'Ingeniería de Requerimientos ', 6, 4, 'OBLIGATORIO'),
(52, 'Ingeniería Ambiental', 6, 3, 'ELECTIVO'),
(53, 'Gestion del Talento Humano', 6, 3, 'ELECTIVO'),
(54, 'Cadena de Suministro', 7, 3, 'OBLIGATORIO'),
(55, 'Gestion de Servicios de TI', 7, 3, 'OBLIGATORIO'),
(56, 'Metodologia de la Investigacion Cientifica', 7, 3, 'OBLIGATORIO'),
(57, 'Planetamiento Estrategico de Sistema de Informacions', 7, 3, 'OBLIGATORIO'),
(58, 'Redes y COmunicaciones I', 7, 3, 'OBLIGATORIO'),
(59, 'Ingenieria de Software', 7, 4, 'OBLIGATORIO'),
(60, 'Administracion de Base de Datos', 7, 3, 'ELECTIVO'),
(61, 'Negocios Electronicos', 7, 3, 'ELECTIVO'),
(62, ' Marketing y Medios Sociales', 8, 3, 'OBLIGATORIO'),
(63, 'Seguridad de la Información', 8, 3, 'OBLIGATORIO'),
(64, 'Internet de las Cosas', 8, 3, 'OBLIGATORIO'),
(65, 'Inteligencia de Negocios', 8, 3, 'OBLIGATORIO'),
(66, 'Redes y Comunicaciones II ', 8, 3, 'OBLIGATORIO'),
(67, 'Ingeniería del Software II', 8, 4, 'OBLIGATORIO'),
(68, 'Deontología y Derecho Informático (e)', 8, 3, 'ELECTIVO'),
(69, 'Arquitectura basada en Microservicios (e)', 8, 3, 'ELECTIVO'),
(70, 'Proyectos de Inversion', 9, 3, 'OBLIGATORIO'),
(71, 'Sistemas Experto', 9, 3, 'OBLIGATORIO'),
(72, 'Elaboracion de Proyectos de Tesis', 9, 4, 'OBLIGATORIO'),
(73, 'Dinamica de Sistemas', 9, 3, 'OBLIGATORIO'),
(74, 'Temas Avanzados Ing. Sistemas I', 9, 3, 'OBLIGATORIO'),
(75, 'Tecnologia Cliente Servidor', 9, 3, 'OBLIGATORIO'),
(76, 'Analisis y Diseño Resdes', 9, 3, 'OBLIGATORIO'),
(77, 'Auditoria de Sistemas', 9, 3, 'OBLIGATORIO'),
(78, 'Elaboracion de Proyectos de Tesis', 9, 3, 'OBLIGATORIO'),
(79, 'Sistemas de Información Empresarial', 10, 3, 'OBLIGATORIO'),
(80, 'Gobierno de TIC', 10, 3, 'OBLIGATORIO'),
(81, 'Tesis II', 10, 4, 'OBLIGATORIO'),
(82, 'Arquitectura Empresarial ', 10, 3, 'OBLIGATORIO'),
(83, 'Responsabilidad Social Corporativa', 10, 3, 'OBLIGATORIO'),
(84, 'Aplicaciones Móviles', 10, 3, 'OBLIGATORIO'),
(87, ' Prácticas Pre Profesionales', 10, 3, 'OBLIGATORIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_docente`
--

CREATE TABLE `curso_docente` (
  `iddocente1` int(11) DEFAULT NULL,
  `idcurso2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `iddocente` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`iddocente`, `nombre`, `apellidos`, `imagen`) VALUES
(2, 'Luis', 'Boy Chavil', '/img/docente.png'),
(3, 'Juan Luis', 'Córdova Otero', '/img/docente.png'),
(4, 'José Alberto', 'Gómez Avila', '/img/docente.png'),
(5, 'Alberto Carlos', 'Mendoza de los Santos', '/img/docente.png'),
(6, 'Ricardo Darío', 'Mendoza Rivera', '/img/docente.png'),
(7, 'Juan Carlos', 'Obando Roldán', '/img/docente.png'),
(8, 'Robert Jerry', 'Sánchez Ticona', '/img/docente.png'),
(9, 'Juan Pedro', 'Santos Fernández', '/img/docente.png'),
(10, 'Julio Luis', 'Tenorio Cabrera', '/img/docente.png'),
(11, 'Marcelino', 'Torres Villanueva', '/img/docente.png'),
(12, 'Zoraida Yanet', 'Vidal Melgarejo', '/img/docente.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia`
--

CREATE TABLE `experiencia` (
  `idexperiencia` int(11) NOT NULL,
  `iddocente` int(11) DEFAULT NULL,
  `experiencia` varchar(100) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `experiencia`
--

INSERT INTO `experiencia` (`idexperiencia`, `iddocente`, `experiencia`, `ano`) VALUES
(2, 2, 'aaaaaaaaaaaa', 1222),
(3, 3, 'Docente en Matemáticas y Estadística en las diversas instituciones donde elaborado.', 2018),
(4, 4, 'Docente en la Escuela de Ingeniería de Sistemas Computacionales.', 2019),
(5, 4, 'Funciones de docente en la Escuela de Ingeniería de Sistemas.', 2019),
(8, 5, 'Universidad Nacional de Trujillo. Docente Tiempo Completo. ', 2013),
(9, 6, 'Experiencia Docente. Doctorado, Maestria, Diplomado, Posgrado, Titulacion, Pregrado /UNT – UNAP', 2013),
(10, 7, 'Desempeña como Docente de la Universidad Nacional de Trujillo', 2012),
(11, 8, 'Universidad Nacional de Trujillo. Profesor Auxiliar  a Tiempo Completo.', 2013),
(12, 9, 'Coordinador de la Maestría en Ingeniería de Sistemas con mención en Administración', 2016),
(13, 10, 'Presidente del Capítulo de Ingeniería de Sistemas, Computación e Informática', 2013),
(14, 11, 'Universidad Alas Peruanas. Docente TP.', 2006),
(15, 12, 'Comité de Educación Virtual de la Facultad de Ingeniería de la Universidad Nacional de Trujillo.', 2020),
(16, 12, 'Profesora Secretaria de la Facultad de Ingeniería de la Universidad Nacional de Trujillo.', 2016),
(17, 8, 'Docente de la Universidad Nacional de Trujillo', 2004);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `idgrado` int(11) NOT NULL,
  `grado` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`idgrado`, `grado`) VALUES
(1, 'Licenciatura'),
(2, 'Bachillerato'),
(3, 'Grado Maestria'),
(4, 'Grado Especialidad'),
(5, 'Grado Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL,
  `idcarrera1` int(11) DEFAULT NULL,
  `idciclo1` int(11) DEFAULT NULL,
  `horarioD` varchar(40) DEFAULT NULL,
  `horarioH` varchar(40) DEFAULT NULL,
  `año` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idhorario`, `idcarrera1`, `idciclo1`, `horarioD`, `horarioH`, `año`) VALUES
(1, 1, 1, 'img/ICP.png', 'img/IC.png', '2021'),
(2, 1, 3, 'img/IIICP.png', 'img/IIIC.png', '2021'),
(3, 1, 5, 'img/VCP.png', 'img/VC.png', '2021'),
(4, 1, 7, 'img/VIICP.png', 'img/VIIC.png', '2021'),
(5, 1, 9, 'img/IXCP.png', 'img/IXC.png', '2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idnoticia` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `contenido` text DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idnoticia`, `titulo`, `contenido`, `imagen`, `fecha`) VALUES
(1, 'UNT IMPULSARÁ CRIANZA DE TILAPIA EN COMUNIDADES DE PATAZ', 'La Universidad Nacional de Trujillo, articulando la investigación y la formación con responsabilidad social universitaria, impulsará el proyecto de crianza en cautiverio de tilapia en valles interandinos de Pataz, con semillas H1 Roja-UNT como una fuente alternativa de proteína animal, el cual tendrá como beneficiarios a los moradores de las comunidades de Urpay, Taurija y Huaylillas.\r\n\r\n \r\n\r\nLa propuesta tiene como responsable principal a la docente e investigadora de la UNT, Dra. Zulita Prieto Lara, quien destacó que la crianza en cautiverio de tilapia en valles interandinos es un reto que nuestra Universidad asume con optimismo, pues ya ha tenido resultados favorables en zonas como Otuzco.\r\n\r\n \r\n\r\n“Estamos seguros que lo mismo pasará en las citadas jurisdicciones y se convertirá en una alternativa de desarrollo económico para muchas familias que podrán mejorar su calidad de vida y oportunidades de progreso”, indicó.\r\n\r\n \r\n\r\nTambién forman parte del equipo de trabajo los biólogos: Miguel Jaime Chamochumbi, Karina Fasanando Lescano, Carlos Quijano Jara y David Salirrosas Fernández, quienes son destacados profesionales de nuestra Casa de Estudios.\r\n\r\n \r\n\r\nEl proyecto fue presentado al Vicerrector de Investigación de la UNT, Dr. Guillermo García Pérez, al consejero regional de Pataz, Luis Rodríguez Ponce, los alcaldes Luis Velezmoro Araujo (Parcoy) y Luis Coronel Valdiviezo (Huaylillas), así como a la gerente regional de Producción, Karoll Campos Gutiérrez.\r\n\r\n \r\n\r\nLa Dra. Zulita sostuvo que las semillas H1 Roja-UNT se han obtenido de manera natural utilizando tecnología genética que consistió en lograr machos homogéneos sin uso de hormonas ni antibióticos, por lo tanto, la respuesta inmunitaria de estos peces es más elevada que otros.\r\n\r\n \r\n\r\nLas tilapias de la UNT (Oreochromis niloticus) crecen de manera rápida, se adaptan al alimento comercial y artesanal, resisten bajas concentraciones de oxígeno, resisten altos niveles de amonio y bajo pH, tolerancia a altas densidades, resisten enfermedades y es de fácil manejo con resistencia a la manipulación en siembra, traslados y cosechas.\r\n\r\n \r\n\r\nOtro de los beneficios que buscan es fomentar el cultivo hidropónico de vegetales, mediante el tratamiento de los residuos que deja la crianza de esa especie en la etapa de engorde, cuya materia orgánica puede ser reutilizada como fuente de nutrientes; favoreciendo especialmente a las comunidades que no cuentan con suficientes áreas de cultivo.\r\n\r\n \r\n\r\nCabe mencionar que en este proyecto se tiene como organizaciones coparticipantes al Gobierno Regional de La Libertad y a la ONG Kallpa Llaqta. \r\n\r\n \r\n\r\nEs así como la UNT, bajo la dirección del actual rector Dr. Carlos Vásquez Boyer, viene impulsando en sus docentes y estudiantes una cultura de promoción de la intelectualidad, de la producción científica y tecnológica con proyección a la comunidad.', '0_Noticia_09092021064745.jpg', '2020-12-12'),
(2, 'UNT RECIBE VISITA DE LA EMBAJADORA DE EE. UU.', 'La Universidad Nacional de Trujillo continúa fortaleciendo sus relaciones con instituciones internacionales pensando siempre en elevar el nivel de formación profesional, investigación científica, proyección social y extensión cultural de los integrantes de nuestra comunidad universitaria.\r\n\r\n \r\n\r\nEn esta ocasión, la máxima autoridad de la UNT el rector Dr. Carlos Alberto Vásquez Boyer recibió a la Embajadora extraordinaria y plenipotenciaria de los Estados Unidos de América en Perú, la excelentísima señora Lisa S. Dougherty Kenna, quien visitó el Laboratorio del Proyecto Arqueológico Huanchaco, ubicado en la Facultad de Ciencias Sociales (Ciudad Universitaria).\r\n\r\n \r\n\r\nEl rector Dr. Carlos Vásquez aprovechó esta oportunidad para agradecer el importante apoyo que realiza el Fondo del Embajador que ganó nuestra Universidad en el 2019 para el rescate y puesta en valor de los importantes hallazgos en las ocupaciones Chimú, los cuales se conservan ahora como colección de objetos prehispánicos y coloniales (textiles, maderas, metales y vasijas de cerámica).\r\n\r\n \r\n\r\nAdemás, presentó a la embajadora la propuesta del proyecto “Centro de simulación clínica y quirúrgica en la Facultad de Medicina de la UNT” que pretende ejecutar nuestra Casa de Estudios en beneficio de la comunidad a través de la formación de los médicos que necesita el país con altos estándares de calidad. De igual manera, planteó la posibilidad de establecer futuras alianzas de cooperación interinstitucional.\r\n\r\n \r\n\r\nPor su parte, la representante estadounidense, Lisa S. Dougherty agradeció la hospitalidad de la autoridad universitaria y mostró interés por dicho proyecto. Además, quedó muy sorprendida con la excelente labor que realiza nuestra Casa de Estudios en la conservación y estudio de los vestigios hallados en Huanchaco.\r\n\r\n \r\n\r\nEn el recibimiento también participaron las autoridades universitarias: el vicerrector Académico, Dr. Juan Villacorta Vásquez; el vicerrector de Investigación, Dr. Arturo García Pérez; el decano de la Facultad de Ciencias Sociales, Dr. Luis Coronado Tello; el jefe de la Oficina de Relaciones Nacionales e Internacionales, Lic. Juan Polo Huacacolqui, entre otros.\r\n\r\n \r\n\r\nLaboratorio de Arqueología UNT\r\n\r\nEs liderado actualmente por el arqueólogo Feren Alexard Castillo Luján, quien junto a un equipo multidisciplinario de profesionales de nuestra Universidad protegen las más de 10 000 piezas arqueológicas halladas por el arqueólogo Gabriel Prieto Burméster e investigadores nacionales y extranjeros.\r\n\r\n \r\n\r\nEste espacio lleno de historia y cultura se ha convertido en una alternativa para el desarrollo de nuevas investigaciones. Fue repotenciado tras ganar el Fondo del Embajador para la Preservación del Patrimonio Cultural 2019, convocado por el citado consulado norteamericano en nuestro país.', '0_Noticia_10092021015016.jpg', '2021-09-10'),
(3, 'RAFAEL NARVÁEZ GANA OLIMPIADA NACIONAL DE MATEMÁTICA', '¡Grandes talentos! Estudiantes del Centro Educativo Experimental Rafael Narváez Cadenillas obtuvieron excelentes resultados al lograr ganar medallas de oro en la 14.a Olimpiada Nacional de Matemática “Villasur”, organizada de manera virtual por la Editorial Agasa el pasado sábado 4 de setiembre del presente año.\r\n\r\nSe trata de Danna Valentina Cotrina Quiñones (3 años) y Zoe Ariadne Rodríguez Abanto (5 años), ambas del nivel inicial; y Anabel Alessandra Mendoza Bernabé, del 2° año del nivel secundario, quienes alcanzaron las máximas distinciones demostrando destreza con los números y gran capacidad para la solución de problemas matemáticos.\r\n\r\nOtro de los rafaelinos que sobresalió con su participación fue Carlos Emilio Rodríguez Abanto, del 5.o grado de primaria, quien obtuvo diploma de honor al mérito. Los estudiantes compitieron con representantes estudiantiles de diferentes colegios del Perú en reñidas jornadas académicas.\r\n\r\nPara lograr estos resultados, los alumnos se prepararon arduamente bajo el atento acompañamiento de su centro educativo Rafael Narváez, siendo esta una institución que impulsa en sus aulas la formación y la competencia en matemáticas y otras ciencias imprescindibles para una formación básica regular de calidad.\r\n\r\nEn ese sentido el director del Narváez, Dr. Cecilio Venegas Piminchumo y la comunidad del plantel educativo, expresaron sus felicitaciones a los alumnos por tan importantes logros que reflejan la calidad de enseñanza que reciben; además, por dejar en alto el nombre del colegio y la región.\r\n\r\n“También saludamos a los docentes por continuar asumiendo el compromiso de formar grandes ciudadanos y futuros profesionales que cambiarán el rumbo de nuestro país. Asimismo, agradecemos a los padres por el apoyo incondicional que brindan a sus hijos y por siempre motivarlos a seguir siendo los mejores”, indicó Venegas.\r\n\r\nEl colegio Rafael Narváez Cadenillas de la Universidad Nacional de Trujillo, se ha consolidado como una institución educativa líder y acreditada en la región y el país, por la cualificación de sus procesos académicos y la aplicación de propuestas educativas innovadoras que establecen las bases para el éxito personal y profesional de sus estudiantes.', '0_Noticia_08092021022424.png', '2021-09-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `idtitulo` int(11) NOT NULL,
  `iddocente1` int(11) DEFAULT NULL,
  `idcarrera` int(11) DEFAULT NULL,
  `idgrado` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `titulo`
--

INSERT INTO `titulo` (`idtitulo`, `iddocente1`, `idcarrera`, `idgrado`, `ano`) VALUES
(3, 2, 1, 2, 2000),
(4, 3, 1, 2, 2010),
(5, 4, 1, 2, 2011),
(6, 5, 1, 2, 2012),
(7, 6, 1, 2, 2008),
(8, 7, 1, 2, 2009),
(9, 8, 1, 2, 2010),
(10, 9, 1, 2, 2012),
(11, 10, 1, 2, 2013),
(12, 11, 1, 2, 2014),
(17, 12, 1, 2, 2000),
(18, 12, 5, 3, 2002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`idciclo`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`),
  ADD KEY `idciclo2` (`idciclo2`);

--
-- Indices de la tabla `curso_docente`
--
ALTER TABLE `curso_docente`
  ADD KEY `iddocente1` (`iddocente1`),
  ADD KEY `idcurso2` (`idcurso2`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`iddocente`);

--
-- Indices de la tabla `experiencia`
--
ALTER TABLE `experiencia`
  ADD PRIMARY KEY (`idexperiencia`),
  ADD KEY `iddocente` (`iddocente`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`idgrado`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idhorario`),
  ADD KEY `idcarrera1` (`idcarrera1`),
  ADD KEY `idciclo1` (`idciclo1`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idnoticia`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`idtitulo`),
  ADD KEY `idcarrera` (`idcarrera`),
  ADD KEY `idgrado` (`idgrado`),
  ADD KEY `iddocente1` (`iddocente1`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idcarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `idciclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `iddocente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `experiencia`
--
ALTER TABLE `experiencia`
  MODIFY `idexperiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `idgrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `idtitulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`idciclo2`) REFERENCES `ciclo` (`idciclo`);

--
-- Filtros para la tabla `curso_docente`
--
ALTER TABLE `curso_docente`
  ADD CONSTRAINT `curso_docente_ibfk_1` FOREIGN KEY (`iddocente1`) REFERENCES `docentes` (`iddocente`),
  ADD CONSTRAINT `curso_docente_ibfk_2` FOREIGN KEY (`idcurso2`) REFERENCES `curso` (`idcurso`);

--
-- Filtros para la tabla `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `experiencia_ibfk_1` FOREIGN KEY (`iddocente`) REFERENCES `docentes` (`iddocente`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`idcarrera1`) REFERENCES `carrera` (`idcarrera`),
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`idciclo1`) REFERENCES `ciclo` (`idciclo`);

--
-- Filtros para la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD CONSTRAINT `titulo_ibfk_1` FOREIGN KEY (`idcarrera`) REFERENCES `carrera` (`idcarrera`),
  ADD CONSTRAINT `titulo_ibfk_2` FOREIGN KEY (`idgrado`) REFERENCES `grado` (`idgrado`),
  ADD CONSTRAINT `titulo_ibfk_3` FOREIGN KEY (`iddocente1`) REFERENCES `docentes` (`iddocente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
