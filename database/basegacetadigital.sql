-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 09:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basegacetadigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id_Comentario` int(11) NOT NULL,
  `Nombre_Usuario` int(11) DEFAULT NULL,
  `Comentario` text NOT NULL,
  `Reply` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id_Comentario`, `Nombre_Usuario`, `Comentario`, `Reply`) VALUES
(15, 123456789, ' holaaa', 0),
(16, 987654321, ' otro comentario', 0),
(17, 987654321, '@Luis como estas?', 15);

-- --------------------------------------------------------

--
-- Table structure for table `medios`
--

CREATE TABLE `medios` (
  `Nombre_Autor` varchar(20) NOT NULL,
  `Contrasena` varchar(25) NOT NULL,
  `Correo` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medios`
--

INSERT INTO `medios` (`Nombre_Autor`, `Contrasena`, `Correo`, `Tipo`) VALUES
('May', 'qwertyuiop', 'may@gmail.com', 'medios');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `Nombre_Autor` varchar(20) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `Contenido` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `institucion` varchar(40) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `Nombre_Autor`, `title`, `image`, `Contenido`, `created_at`, `institucion`, `URL`) VALUES
(1, NULL, 'Inicia ESIME Culhuacán paro de 48 horas; demandan mejora ...', 0x696d6167656e65732f747265732e504e47, '17 feb. 2020 - La Escuela Superior de Ingeniería Mecánica y Eléctrica (ESIME), unidad Culhuacán, del Instituto Politécnico Nacional (IPN) inició este lunes, ...', '2020-05-16 11:02:36', 'ESIME', 'https://www.jornada.com.mx/ultimas/sociedad/2020/02/17/inicia-esime-culhuacan-paro-de-48-horas-demandan-mejora-academica-5608.html'),
(2, NULL, 'Científico del IPN diseñan nueva vacuna contra el Virus del...', 0x696d6167656e65732f646f732e504e47, 'Por: Lucía Vázquez | Once Noticias | 2018-11-23 22:01:00 ...Al respecto, Juan Sebastián Herrera, investigador de la UPIBI del Instituto Politécnico Nacional...', '2020-05-16 11:03:38', 'UPIBI', 'https://oncenoticias.tv/nota/cientificos-del-ipn-disenan-nueva-vacuna-contra-el-virus-del-papiloma-humano'),
(4, NULL, 'Aplica IPN medidas preventivas por coronavirus COVID-19', 0x696d6167656e65732f756e6f2e504e47, 'Aplica IPN medidas preventivas por coronavirus COVID-19. El Instituto Politécnico Nacional (IPN) instaló la Comisión Especial para la Prevención y Atención ...', '2020-05-18 20:34:04', 'ESCOM', 'https://www.ipn.mx/CCS/comunicados/ver-comunicado.html?y=2020&n=39');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `No_Boleta` int(11) NOT NULL,
  `Nombre_Usuario` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contrasena` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`No_Boleta`, `Nombre_Usuario`, `Correo`, `Contrasena`, `Apellido`, `Tipo`) VALUES
(123456789, 'Luis', 'luisitho_betoo@outlook.com', 'contrasena', 'Bautista', 'alumnos'),
(987654321, 'johanes', 'jo.98@outlook.com', 'mnbvcxz', 'nogales', 'alumnos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_Comentario`),
  ADD KEY `No_Boleta` (`Nombre_Usuario`) USING BTREE;

--
-- Indexes for table `medios`
--
ALTER TABLE `medios`
  ADD PRIMARY KEY (`Nombre_Autor`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `Nombre_Autor` (`Nombre_Autor`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`No_Boleta`,`Nombre_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_Comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`Nombre_Autor`) REFERENCES `medios` (`Nombre_Autor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
