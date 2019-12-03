-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 04:56 PM
-- Server version: 5.5.15
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `consorcio`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_o`
--

CREATE TABLE IF NOT EXISTS `a_o` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `id_a_o` varchar(10) NOT NULL,
  `a_o` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `a_o`
--

INSERT INTO `a_o` (`id`, `id_a_o`, `a_o`) VALUES
(1, '2019', '2019'),
(2, '2020', '2020'),
(3, '2021', '2021'),
(4, '2022', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `cobranza`
--

CREATE TABLE IF NOT EXISTS `cobranza` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `numero_recibo` varchar(20) NOT NULL,
  `dni_p` int(20) NOT NULL,
  `codigo_dpto` varchar(20) NOT NULL,
  `meses` int(20) NOT NULL,
  `monto` int(20) NOT NULL,
  `a_o` int(20) NOT NULL,
  `paga` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_recibo` (`numero_recibo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `cobranza`
--

INSERT INTO `cobranza` (`id`, `numero_recibo`, `dni_p`, `codigo_dpto`, `meses`, `monto`, `a_o`, `paga`) VALUES
(101, '157277385512019', 15727738, '55', 1, 220, 2019, 'No'),
(103, '157277385522019', 15727738, '55', 2, 220, 2019, 'No'),
(104, '157277385532019', 15727738, '55', 3, 220, 2019, 'No'),
(105, '157277385542019', 15727738, '55', 4, 220, 2019, 'No'),
(107, '157277385552019', 15727738, '55', 5, 220, 2019, 'No'),
(109, '157277385562019', 15727738, '55', 6, 220, 2019, 'No'),
(112, '1572773855122022', 15727738, '55', 12, 220, 2022, 'Si'),
(113, '', 0, '', 0, 0, 0, ''),
(114, '1572773855112020', 15727738, '55', 11, 220, 2020, 'No'),
(116, '157277385612019', 15727738, '56', 1, 200, 2019, 'No'),
(118, 'null22019', 0, '', 2, 0, 2019, 'No'),
(122, '15727385332021', 1572738, '53', 3, 2000, 2021, 'Si'),
(123, '157277385622019', 15727738, '56', 2, 200, 2019, 'Si'),
(125, '157277385642019', 15727738, '56', 4, 200, 2019, 'Si'),
(127, '157277386312019', 15727738, '63', 1, 200, 2019, ''),
(128, '157277386322019', 15727738, '63', 2, 200, 2019, ''),
(130, '157277386332019', 15727738, '63', 3, 200, 2019, ''),
(131, '1572773863122019', 15727738, '63', 12, 200, 2019, 'No'),
(132, '157277386362019', 15727738, '63', 6, 200, 2019, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `codigo_dpto` varchar(50) NOT NULL,
  `codigo_edificio` varchar(20) NOT NULL,
  `dni_p` varchar(50) NOT NULL,
  `dni_i` varchar(50) NOT NULL,
  `alquilado` varchar(20) NOT NULL,
  `tamano` int(50) NOT NULL,
  `expensa` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`id`, `codigo_dpto`, `codigo_edificio`, `dni_p`, `dni_i`, `alquilado`, `tamano`, `expensa`) VALUES
(61, '100300Las Plamas', '', '12', '12', 'alquilado', 300, '400'),
(62, '100400Las palmeras', '', '', '', 'desocupado', 0, ''),
(63, '200300Las Plamas', '', '15727738', '15727738', 'desocupado', 200, '200');

-- --------------------------------------------------------

--
-- Table structure for table `edificio`
--

CREATE TABLE IF NOT EXISTS `edificio` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `codigo_edificio` varchar(40) NOT NULL,
  `nombre_edificio` varchar(50) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `telefono_edificio` int(50) NOT NULL,
  `cantidad_de_pisos` int(40) NOT NULL,
  `cantidad_de_dpto` int(40) NOT NULL,
  `tipo_de_expensa` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7790 ;

--
-- Dumping data for table `edificio`
--

INSERT INTO `edificio` (`id`, `codigo_edificio`, `nombre_edificio`, `domicilio`, `telefono_edificio`, `cantidad_de_pisos`, `cantidad_de_dpto`, `tipo_de_expensa`) VALUES
(7787, '300', 'Las Plamas', 'El soler', 22336, 30, 30, 'Fija'),
(7788, '400', 'Las palmeras', 'El milagro', 4155666, 3, 3, 'Fija'),
(7789, '100', 'Torre sur', 'Bella Vista entre Av. 4 y 8', 2147483647, 16, 28, 'Fija');

-- --------------------------------------------------------

--
-- Table structure for table `inqulino`
--

CREATE TABLE IF NOT EXISTS `inqulino` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `dni_i` int(50) NOT NULL,
  `nombre_i` varchar(50) NOT NULL,
  `apellido_i` varchar(50) NOT NULL,
  `domicilio_i` varchar(50) NOT NULL,
  `email_i` varchar(50) NOT NULL,
  `telefono_i` int(20) NOT NULL,
  `telefono_m_i` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `inqulino`
--

INSERT INTO `inqulino` (`id`, `dni_i`, `nombre_i`, `apellido_i`, `domicilio_i`, `email_i`, `telefono_i`, `telefono_m_i`) VALUES
(16, 4705820, 'Lizbia', 'Marquez', 'Bella Vista', 'gghghgh@hotmail.com', 444, 444),
(17, 12305747, 'Pedro', 'Perez', 'looo', 'fffff', 555, 5556),
(18, 0, '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meses`
--

CREATE TABLE IF NOT EXISTS `meses` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `codigo_meses` int(10) NOT NULL,
  `meses` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `meses`
--

INSERT INTO `meses` (`id`, `codigo_meses`, `meses`) VALUES
(1, 1, 'Enero'),
(2, 2, 'Febrero'),
(3, 3, 'Marzo'),
(4, 4, 'Abril'),
(5, 5, 'Mayo'),
(6, 6, 'Junio'),
(7, 7, 'Julio'),
(8, 8, 'Agosto'),
(9, 9, 'Septiembre'),
(10, 10, 'Octubre'),
(11, 11, 'Noviembre'),
(12, 12, 'Diciembre');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Gastos` varchar(30) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `subTotal` varchar(30) NOT NULL,
  `gran_total` varchar(30) NOT NULL,
  `fecha_mes` varchar(30) NOT NULL,
  `fecha_a_o` varchar(30) NOT NULL,
  `edificio_gastos` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=384 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `Codigo_Gastos`, `descripcion`, `precio`, `cantidad`, `subTotal`, `gran_total`, `fecha_mes`, `fecha_a_o`, `edificio_gastos`) VALUES
(382, '5d8788b51b2af', 'Gas', '10,000', 1, '10,000', '29,998', 'Septiembre', '2019 ', 'Torre sur'),
(383, '5d8788b51b2af', 'Luz', '3,333', 6, '19,998', '29,998', 'Septiembre', '2019 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `propietario`
--

CREATE TABLE IF NOT EXISTS `propietario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni_p` int(20) NOT NULL,
  `nombre_p` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `domicilio_p` varchar(100) NOT NULL,
  `email_p` varchar(50) NOT NULL,
  `telefono_f_p` int(20) NOT NULL,
  `telefono_m_p` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `propietario`
--

INSERT INTO `propietario` (`id`, `dni_p`, `nombre_p`, `apellido_p`, `domicilio_p`, `email_p`, `telefono_f_p`, `telefono_m_p`) VALUES
(16, 15727738, 'Maria', 'Reyes', 'Las palmas', 'felixrx@hotmail.com', 2000, 2000),
(17, 15727737, 'Maria', 'Reyes', 'Las palmas', 'felixrx@hotmail.com', 2000, 20001),
(18, 0, '', '', '', '', 0, 0),
(20, 20, 'mia', 'perez', 'df', 'dsf', 54, 45);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `nivel` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `id_usuario`, `nivel`) VALUES
(1, 'admin', '123', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
