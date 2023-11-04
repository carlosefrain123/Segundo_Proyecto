-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 06:07:45
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `precio` decimal(7,0) NOT NULL,
  `stock` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `precio`, `stock`, `created`) VALUES
(1, 'A1', 'Limpiatodo Aromatizado', '12', 5, '2023-10-30 15:52:50'),
(2, 'A2', 'Lejía', '20', 2, '2023-10-30 16:03:04'),
(3, 'A3', 'Alcohol Puro', '24', 10, '2023-10-30 16:06:30'),
(4, 'A4', 'Jabón Líquido', '12', 2, '2023-10-31 15:36:06'),
(5, 'A5', 'Silicona', '5', 12, '2023-11-04 04:44:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `created`) VALUES
(1, 'Carlos Efrain', 'Chafloque Llontop', 'efra2@gmail.com', '$2y$10$fABU4swyCo.6xw7goMBJqecoOhol/sNN5e.JeOK6Q5ED1eWYDfeky', '2023-10-30 15:52:23'),
(2, 'Laura', 'Fernández Peralta', 'laura2@gmail.com', '$2y$10$wqbDX7bGMJnfCYhmH5p3K.lc6NlfNb4TfVB.8T2IIiouu0VBsXXhC', '2023-10-31 19:59:00'),
(3, 'Isaac', 'Fernández Villalta', 'isaac1@gmail.com', '$2y$10$z4F9PqU0h3lUtTI14WTWx.qxUJGZeuORAlMFKkr4T6r32avoJDZDu', '2023-11-03 16:30:58'),
(4, 'Raul Armando', 'Renteria', 'yopi1@gmail.com', '$2y$10$ckv/vYL.5oGRZsn2mmBhnezSvjy3dwOYK/z3FPhsZEdxMxu/tSdSy', '2023-11-04 04:31:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
