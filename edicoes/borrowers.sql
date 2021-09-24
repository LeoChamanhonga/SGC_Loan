-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Set-2021 às 21:30
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `naturalidade` varchar(50) NOT NULL,
  `filiacao` varchar(255) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `residencia` varchar(255) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `numero_documento` varchar(25) NOT NULL,
  `emissao` date NOT NULL,
  `validade` date NOT NULL,
  `localEmit` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addrs1` text NOT NULL,
  `addrs2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `account` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `borrowers`
--

INSERT INTO `borrowers` (`id`, `fname`, `lname`, `data_nascimento`, `sexo`, `naturalidade`, `filiacao`, `estado_civil`, `residencia`, `documento`, `numero_documento`, `emissao`, `validade`, `localEmit`, `email`, `phone`, `addrs1`, `addrs2`, `city`, `state`, `zip`, `country`, `comment`, `account`, `balance`, `image`, `date_time`, `status`) VALUES
(5, 'Ayodeji', 'Akinade', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 'business2016@gmail.com', '08033527716', 'FCE', 'Abeokuta', 'Ikeja', 'Lagos', '110001', 'US', 'Application for loan', '0034445657', '1451.00', 'img/user3.png', '2018-01-06 18:26:11', 'Pending'),
(6, 'Milagre Lazaro', 'Nicodemos', '1998-02-26', 'Masculino', 'Tete', 'Lazaro Nicodemos e Fernanda da Piedade', 'Solteiro', 'Bairro Chingodzi', 'BI', '050102705028B', '2015-09-14', '2020-09-14', 'Cidade de Tete', 'milagrelazaro1@gmail.com', '878884862', 'Cidade de Tete', 'Bairro CHingodzi', 'Tete', 'Tete', '0002', 'MZ', 'Sem comentarios', '0133211273', '0.0', 'img/IMG_20200804_081909.jpg', '2021-09-24 00:23:42', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
