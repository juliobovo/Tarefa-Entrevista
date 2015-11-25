-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Nov-2015 às 19:49
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
`registro` int(11) NOT NULL,
  `tipo` varchar(11) NOT NULL,
  `dormitorios` int(2) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`registro`, `tipo`, `dormitorios`, `bairro`, `cidade`, `estado`) VALUES
(31, 'Casa', 3, 'BoqueirÃ£o', 'Praia Grande', 'SP'),
(14, 'Casa', 2, 'Vila ValenÃ§a', 'SÃ£o Paulo', 'Sp'),
(32, 'Apartamento', 3, 'Vila Mariana', 'SÃ£o Paulo', 'SÃ£o Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE IF NOT EXISTS `imovel` (
`referencia` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `quartos` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`referencia`, `tipo`, `quartos`, `bairro`, `valor`) VALUES
(1, 'apartament', 2, 'boqueirao', 1333111),
(2, 'apartament', 2, 'boqueirao', 1333111),
(3, 'CAbana', 2, 'boqueirao', 100000),
(4, 'partament', 2, 'boqueirao', 1333111),
(5, 'Teste', 2, 'boqueirao', 100000),
(6, 'partament', 2, 'boqueirao', 1333111),
(7, 'CAbana', 2, 'boqueirao', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
 ADD PRIMARY KEY (`registro`);

--
-- Indexes for table `imovel`
--
ALTER TABLE `imovel`
 ADD PRIMARY KEY (`referencia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
MODIFY `registro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
MODIFY `referencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
