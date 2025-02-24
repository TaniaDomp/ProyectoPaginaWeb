-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 10:12:52
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inicio_sis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas_bolo`
--

CREATE TABLE `entregas_bolo` (
  `id_entregbolo` int(4) NOT NULL,
  `id_prodbol` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total_bolo` int(10) NOT NULL,
  `fecha_bolo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entregas_bolo`
--

INSERT INTO `entregas_bolo` (`id_entregbolo`, `id_prodbol`, `cantidad`, `total_bolo`, `fecha_bolo`, `Usuario`) VALUES
(1, 3, 2, 80, '2021-05-20 14:05:14', 'Usuario1'),
(2, 1, 1, 40, '2021-05-21 11:05:27', 'Usuario1'),
(3, 4, 1, 40, '2021-05-21 14:05:43', 'Usuario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas_cafo`
--

CREATE TABLE `entregas_cafo` (
  `id_entregcafo` int(4) NOT NULL,
  `id_productocafo` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total_cafo` int(10) NOT NULL,
  `fecha_cafo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entregas_cafo`
--

INSERT INTO `entregas_cafo` (`id_entregcafo`, `id_productocafo`, `cantidad`, `total_cafo`, `fecha_cafo`, `Usuario`) VALUES
(1, 3, 1, 55, '2021-05-19 06:05:24', 'Usuario1'),
(2, 6, 1, 25, '2021-05-20 17:05:32', 'Usuario1'),
(3, 8, 1, 45, '2021-05-21 11:05:13', 'Usuario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas_diso`
--

CREATE TABLE `entregas_diso` (
  `id_entregdiso` int(4) NOT NULL,
  `id_produdis` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total_diso` int(10) NOT NULL,
  `fecha_diso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entregas_diso`
--

INSERT INTO `entregas_diso` (`id_entregdiso`, `id_produdis`, `cantidad`, `total_diso`, `fecha_diso`, `Usuario`) VALUES
(1, 3, 1, 90, '2021-05-20 13:05:35', 'Usuario3'),
(2, 2, 2, 1154, '2021-05-21 11:05:56', 'Usuario1'),
(3, 5, 1, 153, '2021-05-21 14:05:19', 'Usuario3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas_libo`
--

CREATE TABLE `entregas_libo` (
  `id_entreglibo` int(4) NOT NULL,
  `id_prodlib` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total_libo` int(11) NOT NULL,
  `fecha_libo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entregas_libo`
--

INSERT INTO `entregas_libo` (`id_entreglibo`, `id_prodlib`, `cantidad`, `total_libo`, `fecha_libo`, `Usuario`) VALUES
(1, 3, 1, 400, '2021-05-20 12:05:51', 'Usuario1'),
(2, 3, 1, 400, '2021-05-20 12:05:34', 'Usuario1'),
(3, 5, 1, 353, '2021-05-20 12:05:32', 'Usuario1'),
(4, 2, 1, 99, '2021-05-20 08:05:06', 'Usuario1'),
(5, 2, 1, 99, '2021-05-21 11:05:47', 'Usuario1'),
(6, 3, 1, 400, '2021-05-21 11:05:28', 'Usuario1'),
(7, 3, 1, 400, '2021-05-21 13:05:49', 'Usuario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ventbolo`
--

CREATE TABLE `productos_ventbolo` (
  `id_pvbolo` int(4) NOT NULL,
  `id_vbolo` int(4) NOT NULL,
  `id_prodbol` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_pbolo` int(15) NOT NULL,
  `subtotal_bolo` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_ventbolo`
--

INSERT INTO `productos_ventbolo` (`id_pvbolo`, `id_vbolo`, `id_prodbol`, `cantidad`, `precio_pbolo`, `subtotal_bolo`) VALUES
(1, 1, 3, 2, 40, 80),
(2, 2, 1, 1, 40, 40),
(3, 3, 4, 1, 40, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ventcafo`
--

CREATE TABLE `productos_ventcafo` (
  `id_pvcafo` int(4) NOT NULL,
  `id_vcafo` int(4) NOT NULL,
  `id_producafo` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_pcafo` int(15) NOT NULL,
  `subtotal_cafo` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_ventcafo`
--

INSERT INTO `productos_ventcafo` (`id_pvcafo`, `id_vcafo`, `id_producafo`, `cantidad`, `precio_pcafo`, `subtotal_cafo`) VALUES
(1, 1, 3, 1, 55, 55),
(2, 2, 6, 1, 25, 25),
(3, 3, 8, 1, 45, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ventdiso`
--

CREATE TABLE `productos_ventdiso` (
  `id_pvdiso` int(4) NOT NULL,
  `id_vdiso` int(4) NOT NULL,
  `id_produdis` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_pdiso` int(15) NOT NULL,
  `subtotal_diso` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_ventdiso`
--

INSERT INTO `productos_ventdiso` (`id_pvdiso`, `id_vdiso`, `id_produdis`, `cantidad`, `precio_pdiso`, `subtotal_diso`) VALUES
(1, 1, 3, 1, 90, 90),
(2, 2, 2, 2, 577, 1154),
(3, 3, 5, 1, 153, 153);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ventlibo`
--

CREATE TABLE `productos_ventlibo` (
  `id_pvlibo` int(4) NOT NULL,
  `id_vlibo` int(4) NOT NULL,
  `id_prodlib` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_plib` int(15) NOT NULL,
  `subtotal_lib` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_ventlibo`
--

INSERT INTO `productos_ventlibo` (`id_pvlibo`, `id_vlibo`, `id_prodlib`, `cantidad`, `precio_plib`, `subtotal_lib`) VALUES
(1, 1, 3, 1, 400, 400),
(2, 2, 3, 1, 400, 400),
(3, 3, 5, 1, 353, 353),
(4, 4, 2, 1, 99, 99),
(5, 5, 2, 1, 99, 99),
(6, 6, 3, 1, 400, 400),
(7, 7, 3, 1, 400, 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_bol`
--

CREATE TABLE `producto_bol` (
  `id_prodbol` int(4) NOT NULL,
  `nombre_pbol` varchar(25) NOT NULL,
  `precio_pbol` double NOT NULL,
  `imagen_pbol` varchar(200) NOT NULL,
  `inventario_pbol` int(15) NOT NULL,
  `descripcion_pbol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_bol`
--

INSERT INTO `producto_bol` (`id_prodbol`, `nombre_pbol`, `precio_pbol`, `imagen_pbol`, `inventario_pbol`, `descripcion_pbol`) VALUES
(1, 'Valiente', 40, 'Tea1-Proyserv.jpg', 28, 'Merida, es una hábil arquera quien desea labrar su propio camino en la vida.'),
(2, 'Ciclo de cabaret', 40, 'Tea2-Proyserv.jpg', 29, 'Es un relato de tres cómicos que aparecen en la actualidad para hablar sobre las historias '),
(3, 'Juan y la muerte', 40, 'Tea3-Proyserv.jpg', 28, 'Basada en un cuento tradicional, en el cual la madre de Juan está cada día más enferma '),
(4, 'Blindness', 40, 'Tea4-Proyserv.jpg', 29, 'Es una obra que permite revivir esas emociones '),
(5, 'Como una pintura', 40, 'Tea5-Proyserv.jpg', 29, 'Es una película dramática estadounidense de 2004 dirigida y escrita por Mick Davis'),
(6, 'El cielo dividido', 40, 'Tea6-Proyserv.jpg', 29, 'Cuenta la historia de amor y desamor de Gerardo y Jonás'),
(7, 'Güeros', 40, 'Tea7-Proyserv.jpg', 29, 'Narra el encuentro entre Sombra y su hermano menor, Tomás, quien lo visita en la Ciudad de México'),
(8, 'Los adioses', 40, 'Tea8-Proyserv.jpg', 29, 'La película aborda la relación de la escritora Rosario Castellanos  y el filósofo Ricardo Guerra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_cafo`
--

CREATE TABLE `producto_cafo` (
  `id_producafo` int(4) NOT NULL,
  `nombre_pcafo` varchar(25) NOT NULL,
  `precio_pcafo` double NOT NULL,
  `imagen_pcafo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `inventario_pcafo` int(15) NOT NULL,
  `Descripcion-pcafo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_cafo`
--

INSERT INTO `producto_cafo` (`id_producafo`, `nombre_pcafo`, `precio_pcafo`, `imagen_pcafo`, `inventario_pcafo`, `Descripcion-pcafo`) VALUES
(1, 'Hot cakes', 50, 'Caf1-Prodyserv.jpg', 46, 'Un plato con 4 hot cakes, puedes agregarle miel de maple, mermelada o fruta'),
(2, 'Crepa dulce', 45, 'Caf2-Prodyserv.jpg', 43, 'Puedes combinar 2 toppings diferentes de entre: zarzamora, fresa, nutella, philadelphia y lechera'),
(3, 'Crepa salada', 55, 'Caf3-Prodyserv.jpg', 43, 'Combina tu crepa con diferentes toppings de entre: jamón, queso, pepperoni y hongos'),
(4, 'Café americano', 35, 'Caf4-Prodyserv.jpg', 49, 'Disfruta de la mezcla de café expreso en una taza de aproximadamente 450ml'),
(5, 'Café frappé', 60, 'Caf5-Prodyserv.jpg', 48, 'Un café con hielo cubierto de espuma elaborado a partir de café instantáneo en un vaso de 600 ml'),
(6, 'Café expreso', 25, 'Caf6-Prodyserv.jpg', 47, 'Compra el café que obtiene su término a la obtención de esta bebida a través de una cafetera expreso'),
(7, 'Galletas con chispas', 15, 'Caf7-Prodyserv.jpg', 48, 'Pide un paquete de tres galletas con pepitas de chocolate, pide una bebida '),
(8, 'Donas', 45, 'DesProd8-prodyserv.jpg', 48, 'Pide un paquete de tres roscas de pan dulce que tradicionalmente está frito.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_dis`
--

CREATE TABLE `producto_dis` (
  `id_produdis` int(4) NOT NULL,
  `nombre_pdis` varchar(25) NOT NULL,
  `precio_pdis` double NOT NULL,
  `imagen_pdis` varchar(200) NOT NULL,
  `inventario_pdis` int(15) NOT NULL,
  `descripcion_pdis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_dis`
--

INSERT INTO `producto_dis` (`id_produdis`, `nombre_pdis`, `precio_pdis`, `imagen_pdis`, `inventario_pdis`, `descripcion_pdis`) VALUES
(1, 'Hu Hu Hu', 174, 'Dis1-Prodyserv.jpg', 50, 'Hu Hu Hu es el nombre del tercer álbum de estudio de la cantante y compositora Natalia Lafourcade'),
(2, 'Animals ', 577, 'Dis2-Prodyserv.jpg', 48, 'Es un álbum conceptual que critica de forma mordaz las condiciones sociopolíticas de Inglaterra'),
(3, 'Dynamo', 90, 'Dis3-Prodyserv.jpg', 49, 'A lo largo de sus 12 canciones, muestra el interés de la banda por explorar nuevos sonidos'),
(4, 'Queen Forever', 419, 'Dis4-Prodyserv.jpg', 50, 'El contenido del álbum consta de canciones con la voz de Freddie Mercury '),
(5, 'Dark Side of the Moon', 153, 'Dis5-Prodyserv.jpg', 49, 'La temática incluye temas como la avaricia, los conflictos, el envejecimiento, entre otros temas'),
(6, 'Pink Floyd Meddle', 179, 'Dis6-Prodyserv.jpg', 50, 'Es el sexto álbum de estudio de la banda británica de rock progresivo Pink Floyd'),
(7, 'Louis Tomlinson-Walls', 189, 'Dis7-Prodyserv.jpg', 50, 'Habla sobre diversos temas en la vida de Louis'),
(8, 'J Balvin - Colores', 199, 'Dis8-Prodyserv.jpg', 49, 'El tema verde es prosperidad, rojo está llena de mucha pasión y sentimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_lib`
--

CREATE TABLE `producto_lib` (
  `id_prodlib` int(4) NOT NULL,
  `nombre_plib` varchar(25) NOT NULL,
  `precio_plib` double NOT NULL,
  `imagen_plib` varchar(200) NOT NULL,
  `inventario_plib` int(15) NOT NULL,
  `descripcion_plib` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_lib`
--

INSERT INTO `producto_lib` (`id_prodlib`, `nombre_plib`, `precio_plib`, `imagen_plib`, `inventario_plib`, `descripcion_plib`) VALUES
(1, '¿Quieres ser mi amigo?', 202, 'Libro1-Prodyserv.jpg', 49, 'Es un libro repleto de consejos prácticos para ayudar a los niños a entender qué es hacer amigos'),
(2, 'Laura y Dino', 99, 'Libro2-Prodyserv.jpg', 47, 'Dino -un dinosaurio- y su pequeña hija Laura -una humana- conversan sobre diversos temas'),
(3, 'Bajo un cielo escarlata', 400, 'Libro3-Prodyserv.jpg', 47, 'El chico que se convirtió en espía por amor en uno de los momentos más oscuros de la historia. '),
(4, 'De vuelta a casa', 226, 'Libro4-Prodyserv.jpg', 49, 'Es una historia divertida, tierna y apasionante, como es habitual en este autor que nos gusta tanto'),
(5, 'Hacia a las estrellas', 353, 'Libro5-Prodyserv.jpg', 48, '¿Alguna vez has levantado la vista al cielo en una noche estrellada?'),
(6, 'El pequeño zoológico', 536, 'Libro6-Prodyserv.jpg', 49, 'Ve las sorprendentes historias de animales recopiladas en este personalísimo bestiario'),
(7, 'Un puente a la realidad', 251, 'Libro7-Prodyserv.jpg', 50, 'El mensaje de Sergi Torres es sencillo: el mundo que percibimos no existe como tal.'),
(8, 'Nada es suficiente', 516, 'Libro8-Prodyserv.jpg', 49, 'Esta historia tiene tres protagonistas. Daniela, una chica que está terminando el secundario.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(4) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `password`) VALUES
(1, 'Gerencia', 'Gerencia'),
(2, 'Sistemas', 'Sistemas'),
(3, 'RecursosHum', 'RecursosHum'),
(4, 'Ventas', 'Ventas'),
(5, 'Usuario1', 'Usuario1'),
(7, 'Usuario3', 'Usuario3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasfis_bol`
--

CREATE TABLE `ventasfis_bol` (
  `id_vbol` int(4) NOT NULL,
  `total_bol` int(25) NOT NULL,
  `fecha_bol` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventasfis_bol`
--

INSERT INTO `ventasfis_bol` (`id_vbol`, `total_bol`, `fecha_bol`, `Usuario`) VALUES
(1, 40, '2021-05-21 13:05:50', 'Gerencia'),
(2, 40, '2021-05-21 13:05:06', 'Gerencia'),
(3, 40, '2021-05-21 13:05:03', 'Ventas'),
(4, 40, '2021-05-21 13:05:16', 'Ventas'),
(5, 40, '2021-05-21 14:05:26', 'Sistemas'),
(6, 40, '2021-05-21 14:05:47', 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasfis_caf`
--

CREATE TABLE `ventasfis_caf` (
  `id_vcaf` int(4) NOT NULL,
  `total_caf` int(25) NOT NULL,
  `fecha_caf` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventasfis_caf`
--

INSERT INTO `ventasfis_caf` (`id_vcaf`, `total_caf`, `fecha_caf`, `Usuario`) VALUES
(1, 60, '2021-05-21 17:05:24', 'Sistemas'),
(2, 25, '2021-05-21 06:05:19', 'Ventas'),
(3, 55, '2021-05-21 11:05:50', 'Gerencia'),
(4, 55, '2021-05-21 13:05:39', 'Sistemas'),
(5, 55, '2021-05-21 13:05:16', 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasfis_dis`
--

CREATE TABLE `ventasfis_dis` (
  `id_vdis` int(4) NOT NULL,
  `total_dis` int(25) NOT NULL,
  `fecha_dis` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventasfis_dis`
--

INSERT INTO `ventasfis_dis` (`id_vdis`, `total_dis`, `fecha_dis`, `Usuario`) VALUES
(1, 90, '2021-05-21 12:05:28', 'Gerencia'),
(2, 174, '2021-05-21 12:05:42', 'Gerencia'),
(3, 419, '2021-05-21 12:05:09', 'Ventas'),
(4, 153, '2021-05-21 12:05:19', 'Ventas'),
(5, 90, '2021-05-21 13:05:34', 'Sistemas'),
(6, 199, '2021-05-21 14:05:00', 'RecursosHum'),
(7, 174, '2021-05-21 15:05:02', 'Gerencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasfis_lib`
--

CREATE TABLE `ventasfis_lib` (
  `id_vlib` int(4) NOT NULL,
  `total_lib` int(25) NOT NULL,
  `fecha_lib` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventasfis_lib`
--

INSERT INTO `ventasfis_lib` (`id_vlib`, `total_lib`, `fecha_lib`, `Usuario`) VALUES
(1, 202, '2021-05-21 11:05:33', 'Gerencia'),
(2, 99, '2021-05-21 11:05:14', 'Gerencia'),
(3, 536, '2021-05-21 12:05:07', 'RecursosHum'),
(4, 516, '2021-05-21 12:05:29', 'RecursosHum'),
(5, 353, '2021-05-21 13:05:41', 'Gerencia'),
(6, 226, '2021-05-21 13:05:33', 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaspr_fisbol`
--

CREATE TABLE `ventaspr_fisbol` (
  `id_pvbol` int(4) NOT NULL,
  `id_vbol` int(4) NOT NULL,
  `id_prodbol` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_pbol` int(15) NOT NULL,
  `subtotal_bol` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventaspr_fisbol`
--

INSERT INTO `ventaspr_fisbol` (`id_pvbol`, `id_vbol`, `id_prodbol`, `cantidad`, `precio_pbol`, `subtotal_bol`) VALUES
(1, 1, 1, 1, 40, 40),
(2, 2, 2, 1, 40, 40),
(3, 3, 6, 1, 40, 40),
(4, 4, 5, 1, 40, 40),
(5, 5, 8, 1, 40, 40),
(6, 6, 7, 1, 40, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaspr_fiscaf`
--

CREATE TABLE `ventaspr_fiscaf` (
  `id_pvcaf` int(4) NOT NULL,
  `id_vcaf` int(4) NOT NULL,
  `id_producaf` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_caf` int(15) NOT NULL,
  `subtotal_caf` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventaspr_fiscaf`
--

INSERT INTO `ventaspr_fiscaf` (`id_pvcaf`, `id_vcaf`, `id_producaf`, `cantidad`, `precio_caf`, `subtotal_caf`) VALUES
(1, 1, 5, 1, 60, 60),
(2, 2, 6, 1, 25, 25),
(3, 3, 3, 1, 55, 55),
(4, 4, 3, 1, 55, 55),
(5, 5, 3, 1, 55, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaspr_fisdis`
--

CREATE TABLE `ventaspr_fisdis` (
  `id_pvdis` int(4) NOT NULL,
  `id_vdis` int(4) NOT NULL,
  `id_produdis` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_pdis` int(15) NOT NULL,
  `subtotal_dis` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventaspr_fisdis`
--

INSERT INTO `ventaspr_fisdis` (`id_pvdis`, `id_vdis`, `id_produdis`, `cantidad`, `precio_pdis`, `subtotal_dis`) VALUES
(1, 1, 3, 1, 90, 90),
(2, 2, 1, 1, 174, 174),
(3, 3, 4, 1, 419, 419),
(4, 4, 5, 1, 153, 153),
(5, 5, 3, 1, 90, 90),
(6, 6, 8, 1, 199, 199),
(7, 7, 1, 1, 174, 174);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaspr_fislib`
--

CREATE TABLE `ventaspr_fislib` (
  `id_pvlib` int(4) NOT NULL,
  `id_vlib` int(4) NOT NULL,
  `id_prodlib` int(4) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_plib` int(15) NOT NULL,
  `subtotal_lib` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventaspr_fislib`
--

INSERT INTO `ventaspr_fislib` (`id_pvlib`, `id_vlib`, `id_prodlib`, `cantidad`, `precio_plib`, `subtotal_lib`) VALUES
(1, 1, 1, 1, 202, 202),
(2, 2, 2, 1, 99, 99),
(3, 3, 6, 1, 536, 536),
(4, 4, 8, 1, 516, 516),
(5, 5, 5, 1, 353, 353),
(6, 6, 4, 1, 226, 226);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_bolo`
--

CREATE TABLE `ventas_bolo` (
  `id_vbolo` int(4) NOT NULL,
  `total_bolo` int(25) NOT NULL,
  `fecha_bolo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_bolo`
--

INSERT INTO `ventas_bolo` (`id_vbolo`, `total_bolo`, `fecha_bolo`, `Usuario`) VALUES
(1, 80, '2021-05-20 14:05:14', 'Usuario1'),
(2, 40, '2021-05-21 11:05:27', 'Usuario1'),
(3, 40, '2021-05-21 14:05:43', 'Usuario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cafo`
--

CREATE TABLE `ventas_cafo` (
  `id_vcafo` int(4) NOT NULL,
  `total_cafo` int(25) NOT NULL,
  `fecha_cafo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_cafo`
--

INSERT INTO `ventas_cafo` (`id_vcafo`, `total_cafo`, `fecha_cafo`, `Usuario`) VALUES
(1, 55, '2021-05-19 06:05:24', 'Usuario1'),
(2, 25, '2021-05-20 17:05:32', 'Usuario1'),
(3, 45, '2021-05-21 11:05:13', 'Usuario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_diso`
--

CREATE TABLE `ventas_diso` (
  `id_vdiso` int(4) NOT NULL,
  `total_diso` int(25) NOT NULL,
  `fecha_diso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_diso`
--

INSERT INTO `ventas_diso` (`id_vdiso`, `total_diso`, `fecha_diso`, `Usuario`) VALUES
(1, 90, '2021-05-20 13:05:35', 'Usuario3'),
(2, 1154, '2021-05-21 11:05:56', 'Usuario1'),
(3, 153, '2021-05-21 14:05:19', 'Usuario3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_libo`
--

CREATE TABLE `ventas_libo` (
  `id_vlibo` int(4) NOT NULL,
  `total_libo` int(25) NOT NULL,
  `fecha_libo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_libo`
--

INSERT INTO `ventas_libo` (`id_vlibo`, `total_libo`, `fecha_libo`, `Usuario`) VALUES
(1, 400, '2021-05-20 12:05:51', 'Usuario1'),
(2, 400, '2021-05-20 12:05:34', 'Usuario1'),
(3, 353, '2021-05-20 12:05:32', 'Usuario1'),
(4, 99, '2021-05-20 08:05:06', 'Usuario1'),
(5, 99, '2021-05-21 11:05:47', 'Usuario1'),
(6, 400, '2021-05-21 11:05:28', 'Usuario1'),
(7, 400, '2021-05-21 13:05:49', 'Usuario1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entregas_bolo`
--
ALTER TABLE `entregas_bolo`
  ADD PRIMARY KEY (`id_entregbolo`);

--
-- Indices de la tabla `entregas_cafo`
--
ALTER TABLE `entregas_cafo`
  ADD PRIMARY KEY (`id_entregcafo`);

--
-- Indices de la tabla `entregas_diso`
--
ALTER TABLE `entregas_diso`
  ADD PRIMARY KEY (`id_entregdiso`);

--
-- Indices de la tabla `entregas_libo`
--
ALTER TABLE `entregas_libo`
  ADD PRIMARY KEY (`id_entreglibo`);

--
-- Indices de la tabla `productos_ventbolo`
--
ALTER TABLE `productos_ventbolo`
  ADD PRIMARY KEY (`id_pvbolo`);

--
-- Indices de la tabla `productos_ventcafo`
--
ALTER TABLE `productos_ventcafo`
  ADD PRIMARY KEY (`id_pvcafo`);

--
-- Indices de la tabla `productos_ventdiso`
--
ALTER TABLE `productos_ventdiso`
  ADD PRIMARY KEY (`id_pvdiso`);

--
-- Indices de la tabla `productos_ventlibo`
--
ALTER TABLE `productos_ventlibo`
  ADD PRIMARY KEY (`id_pvlibo`);

--
-- Indices de la tabla `producto_bol`
--
ALTER TABLE `producto_bol`
  ADD PRIMARY KEY (`id_prodbol`);

--
-- Indices de la tabla `producto_cafo`
--
ALTER TABLE `producto_cafo`
  ADD PRIMARY KEY (`id_producafo`);

--
-- Indices de la tabla `producto_dis`
--
ALTER TABLE `producto_dis`
  ADD PRIMARY KEY (`id_produdis`);

--
-- Indices de la tabla `producto_lib`
--
ALTER TABLE `producto_lib`
  ADD PRIMARY KEY (`id_prodlib`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventasfis_bol`
--
ALTER TABLE `ventasfis_bol`
  ADD PRIMARY KEY (`id_vbol`);

--
-- Indices de la tabla `ventasfis_caf`
--
ALTER TABLE `ventasfis_caf`
  ADD PRIMARY KEY (`id_vcaf`);

--
-- Indices de la tabla `ventasfis_dis`
--
ALTER TABLE `ventasfis_dis`
  ADD PRIMARY KEY (`id_vdis`);

--
-- Indices de la tabla `ventasfis_lib`
--
ALTER TABLE `ventasfis_lib`
  ADD PRIMARY KEY (`id_vlib`);

--
-- Indices de la tabla `ventaspr_fisbol`
--
ALTER TABLE `ventaspr_fisbol`
  ADD PRIMARY KEY (`id_pvbol`);

--
-- Indices de la tabla `ventaspr_fiscaf`
--
ALTER TABLE `ventaspr_fiscaf`
  ADD PRIMARY KEY (`id_pvcaf`);

--
-- Indices de la tabla `ventaspr_fisdis`
--
ALTER TABLE `ventaspr_fisdis`
  ADD PRIMARY KEY (`id_pvdis`);

--
-- Indices de la tabla `ventaspr_fislib`
--
ALTER TABLE `ventaspr_fislib`
  ADD PRIMARY KEY (`id_pvlib`);

--
-- Indices de la tabla `ventas_bolo`
--
ALTER TABLE `ventas_bolo`
  ADD PRIMARY KEY (`id_vbolo`);

--
-- Indices de la tabla `ventas_cafo`
--
ALTER TABLE `ventas_cafo`
  ADD PRIMARY KEY (`id_vcafo`);

--
-- Indices de la tabla `ventas_diso`
--
ALTER TABLE `ventas_diso`
  ADD PRIMARY KEY (`id_vdiso`);

--
-- Indices de la tabla `ventas_libo`
--
ALTER TABLE `ventas_libo`
  ADD PRIMARY KEY (`id_vlibo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entregas_bolo`
--
ALTER TABLE `entregas_bolo`
  MODIFY `id_entregbolo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entregas_cafo`
--
ALTER TABLE `entregas_cafo`
  MODIFY `id_entregcafo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entregas_diso`
--
ALTER TABLE `entregas_diso`
  MODIFY `id_entregdiso` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entregas_libo`
--
ALTER TABLE `entregas_libo`
  MODIFY `id_entreglibo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos_ventbolo`
--
ALTER TABLE `productos_ventbolo`
  MODIFY `id_pvbolo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos_ventcafo`
--
ALTER TABLE `productos_ventcafo`
  MODIFY `id_pvcafo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos_ventdiso`
--
ALTER TABLE `productos_ventdiso`
  MODIFY `id_pvdiso` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos_ventlibo`
--
ALTER TABLE `productos_ventlibo`
  MODIFY `id_pvlibo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `producto_bol`
--
ALTER TABLE `producto_bol`
  MODIFY `id_prodbol` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto_cafo`
--
ALTER TABLE `producto_cafo`
  MODIFY `id_producafo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto_dis`
--
ALTER TABLE `producto_dis`
  MODIFY `id_produdis` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto_lib`
--
ALTER TABLE `producto_lib`
  MODIFY `id_prodlib` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventasfis_bol`
--
ALTER TABLE `ventasfis_bol`
  MODIFY `id_vbol` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventasfis_caf`
--
ALTER TABLE `ventasfis_caf`
  MODIFY `id_vcaf` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventasfis_dis`
--
ALTER TABLE `ventasfis_dis`
  MODIFY `id_vdis` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventasfis_lib`
--
ALTER TABLE `ventasfis_lib`
  MODIFY `id_vlib` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventaspr_fisbol`
--
ALTER TABLE `ventaspr_fisbol`
  MODIFY `id_pvbol` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventaspr_fiscaf`
--
ALTER TABLE `ventaspr_fiscaf`
  MODIFY `id_pvcaf` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventaspr_fisdis`
--
ALTER TABLE `ventaspr_fisdis`
  MODIFY `id_pvdis` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventaspr_fislib`
--
ALTER TABLE `ventaspr_fislib`
  MODIFY `id_pvlib` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas_bolo`
--
ALTER TABLE `ventas_bolo`
  MODIFY `id_vbolo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas_cafo`
--
ALTER TABLE `ventas_cafo`
  MODIFY `id_vcafo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas_diso`
--
ALTER TABLE `ventas_diso`
  MODIFY `id_vdiso` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas_libo`
--
ALTER TABLE `ventas_libo`
  MODIFY `id_vlibo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
