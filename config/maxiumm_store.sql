-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2019 a las 01:42:42
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maxiumm_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Manga corta'),
(2, 'Tirantes'),
(3, 'Manga larga'),
(4, 'Sudaderas'),
(5, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_pedidos`
--

CREATE TABLE `lineas_pedidos` (
  `id` int(255) NOT NULL,
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `unidades` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineas_pedidos`
--

INSERT INTO `lineas_pedidos` (`id`, `pedido_id`, `producto_id`, `unidades`) VALUES
(1, 1, 6, 1),
(2, 2, 6, 1),
(3, 3, 13, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `coste` float(200,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `provincia`, `localidad`, `direccion`, `coste`, `estado`, `fecha`, `hora`) VALUES
(1, 9, 'Estado de México', 'Teoloyucan', 'Las rosas s/n', 600.00, 'preparation', '2019-05-01', '13:44:03'),
(2, 9, 'Estado de México', 'Teoloyucan', 'Las rosas s/n', 600.00, 'confirm', '2019-05-01', '17:56:06'),
(3, 9, 'Teoloyucan', 'Teoloyucan', 'Calle las rosas sin número colonia Santa Rosa', 300.00, 'confirm', '2019-05-05', '18:22:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
  `precio` float(100,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `oferta` varchar(2) DEFAULT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `oferta`, `fecha`, `imagen`) VALUES
(1, 1, 'PLAYERA OLD SCHOOL', 'NEGRA CON BLANCO\r\nTALLA MEDIANA', 200.00, 10, NULL, '2019-02-08', 'playera.jpg'),
(2, 1, 'POLO VERDE', 'CAMISA MEDIANA COLOR VERDE TIPO POLO', 400.00, 30, NULL, '2019-03-24', 'POLO VERDE.jpg'),
(3, 1, 'PLAYERAS BASICA', 'PLAYERA BASICA\r\nCOLO ROJA  CUELLO EN U', 300.00, 40, NULL, '2019-03-24', 'ROJA.jpg'),
(4, 4, 'SUDADERA PIGGY', 'SUDADERA COLO ROSA CON ESTAMPADO  DE PIGGY', 500.00, 60, NULL, '2019-03-24', 'SUDROSA.jpg'),
(5, 4, 'SUDADERA ADIDAS', 'SUDADERA ADIDAS BASICA COLOR GRIS', 600.00, 23, NULL, '2019-03-24', 'descarga.jpg'),
(6, 4, 'SUDADERA DRAGON BALL', 'SUDADERA GRIS\r\nESTAMPADO DE DRAGON BALL', 600.00, 40, NULL, '2019-03-24', 'sudaderas-dragon-ball-30-disenos-disponibles-envio-incluido-D_NQ_NP_844925-MLM26869392190_022018-F.jpg'),
(7, 3, 'PLAYERA AZUL ML', 'PLAYERA BASICA COLOR AZUL\r\nTIPO MANGA LARGA \r\nSLIM FIT', 700.00, 29, NULL, '2019-03-24', 'MC3.jpg'),
(8, 3, 'PLAYERA BICOLOR', 'PLAYERA TIPO MANGA LARGA\r\nROJO CON BLANCO\r\nSLIM', 400.00, 69, NULL, '2019-03-24', 'BICOLOR.jpg'),
(9, 3, 'PLAYERA FLASH', 'PLAYERA MANGA LARGA \r\nDEPORTIVA\r\nFLASH', 800.00, 9, NULL, '2019-03-24', 'images.jpg'),
(10, 3, 'PLAYER DINOSAURIO', 'PLAYER MANGA LARGA\r\nESTAMPADO DE DINOSAURIO', 699.00, 38, NULL, '2019-03-24', 'DINO.jpg'),
(11, 2, 'CAMISETA DE TIRANTES BASICA', 'CAMISETA DE TIRANTES \r\nCOLOR BLANCA', 200.00, 59, NULL, '2019-03-24', 'descarga (1).jpg'),
(12, 2, 'CAMISETA DE TIRANTES NEGRA', 'CAMISETA DE TIRANTES BASICA COLOR NEGRA\r\nPARA MUJER', 300.00, 90, NULL, '2019-03-24', 'images (1).jpg'),
(13, 5, 'Gorra pumas', 'Gorra tamaño M color negro, etc...', 300.00, 15, NULL, '2019-05-01', 'logo.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `rol`, `imagen`) VALUES
(9, 'Erik', 'Campos', 'admin@admin.com', '$2y$04$ttmwC5TiND3KLa9Ums9k.u1yXvIH8bvzfAYsTWZ/A7g/MzVTx10DO', 'admin', NULL),
(10, 'Test', '1', 'test1@test.com', '$2y$04$UZNFVIoJjOEi.Q2bQswhheyDgYdOFUEZJHjm3yUFCFFVRfJHf8Ohq', 'user', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas_pedidos`
--
ALTER TABLE `lineas_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_linea_pedido` (`pedido_id`),
  ADD KEY `fk_linea_producto` (`producto_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedido_usuario` (`usuario_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto_categoria` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `lineas_pedidos`
--
ALTER TABLE `lineas_pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lineas_pedidos`
--
ALTER TABLE `lineas_pedidos`
  ADD CONSTRAINT `fk_linea_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `fk_linea_producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
