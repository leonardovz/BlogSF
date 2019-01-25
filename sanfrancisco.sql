-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2019 a las 19:35:46
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanfrancisco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `idTrabajador` int(11) NOT NULL,
  `idPub` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ads`
--

INSERT INTO `ads` (`id`, `idTrabajador`, `idPub`, `fecha`) VALUES
(1, 1, 1, '2018-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresias`
--

CREATE TABLE `membresias` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `cantPagos` int(11) NOT NULL,
  `cobro` int(11) NOT NULL,
  `tipoPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `membresias`
--

INSERT INTO `membresias` (`id`, `idUser`, `fechaInicio`, `fechaFinal`, `cantPagos`, `cobro`, `tipoPago`) VALUES
(1, 1, '2018-11-23', '2018-12-30', 1, 149, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `imagen` varchar(60) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` enum('AC','IN','BAN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `iduser`, `fecha`, `titulo`, `imagen`, `descripcion`, `estado`) VALUES
(1, 1, '2018-11-22', 'Primera publicación', 'us1im1.jpg', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'AC'),
(2, 2, '2018-11-09', '¡Tu sueño hecho realidad!', 'us2im1.jpg', 'Porque sabemos que lo mas importante para ti es tu hogar!\r\nCada construcción para nosotros es importante como para ti lo es hacer tu sueño realidad!!', 'AC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rango`
--

CREATE TABLE `rango` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `imagen` varchar(70) NOT NULL,
  `tag` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rango`
--

INSERT INTO `rango` (`id`, `nombre`, `imagen`, `tag`) VALUES
(1, 'Administrador', 'admin.svg', 'ADMIN'),
(2, 'Privado', 'privado.svg', 'PRIV'),
(3, 'Premium', 'premium.svg', 'PR'),
(4, 'Standart', 'standart.svg', 'ST'),
(5, 'Basico', 'Basico.svg', 'BS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `imagen`) VALUES
(1, 'Ciber', '1.png'),
(2, 'Arquitectura', '2.png'),
(3, 'Estetica', '3.png'),
(4, 'Juegos', '4.png'),
(5, 'Abogados', '5.png'),
(6, 'Veterinaria', '6.png'),
(7, 'Herreria', '7.png'),
(8, 'Construcción', '8.png'),
(9, 'Desarrollador web', '9.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `idUsuario`, `idServicio`, `fechaRegistro`) VALUES
(1, 1, 9, '2018-11-23'),
(2, 2, 8, '2018-11-24'),
(3, 3, 9, '2018-11-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersinfo`
--

CREATE TABLE `usersinfo` (
  `iduser` int(11) NOT NULL,
  `nombreServicio` varchar(80) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `imagenServicio` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `domicilio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usersinfo`
--

INSERT INTO `usersinfo` (`iduser`, `nombreServicio`, `telefono`, `celular`, `imagenServicio`, `descripcion`, `domicilio`) VALUES
(1, 'VDESOFT', '3919317539', '333-652-6525', 'profile11.png', 'Lorem ipsum dolor sit amet consectetur adipiscing elit lacinia, diam facilisi odio felis hac malesuada netus feugiat venenatis, penatibus nisl curabitur primis tincidunt gravida ligula. Rutrum porta tincidunt vel facilisi himenaeos semper mi tellus, nibh dis in nulla feugiat hac fermentum risus commodo, proin felis turpis enim cras viverra auctor est, parturient quam molestie sagittis non at gravida. Erat lectus hac proin rhoncus vulputate fermentum fames, dapibus eu tortor augue mi dictumst massa nisl, senectus platea lacinia faucibus ac sed.\n\n', 'Las torres # 3'),
(2, 'Vazquez Construcción', '3919317539', '333 333 1524', 'profile22.png', 'Ramón Vázquez Carrillo Servicios de construcción, fontanería, electricidad, pintura etc...', 'Las Torres # 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `tipoUser` int(11) NOT NULL,
  `validar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidos`, `correo`, `contraseña`, `tipoUser`, `validar`) VALUES
(1, 'Leonardo', 'Vázquez', 'leonardovazquez81@gmail.com', '$2a$07$usesomesillystringforeKzfoQzUL.mIEfJ.Q', 5, 1),
(3, 'Ramón', 'Vázquez Carrillo', 'leonardovazquez82@gmail.com', '$2a$07$usesomesillystringforeUgOQm9CcRUfX7Q5t', 5, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `membresias`
--
ALTER TABLE `membresias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `rango`
--
ALTER TABLE `rango`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `tag` (`tag`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`iduser`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `membresias`
--
ALTER TABLE `membresias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rango`
--
ALTER TABLE `rango`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
