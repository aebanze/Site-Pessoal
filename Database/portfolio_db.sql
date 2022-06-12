-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 02:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactar`
--

CREATE TABLE `contactar` (
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `assunto` varchar(50) DEFAULT NULL,
  `mensagem` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactar`
--

INSERT INTO `contactar` (`nome`, `email`, `assunto`, `mensagem`) VALUES
('Angel Elias Banze', 'angeleliasbanzehotmail.com', '', 'Ola'),
('Angel Elias Banze', 'angeleliasbanzehotmail.com', '', 'Ola'),
('Angel Elias Banze', 'angeleliasbanzehotmail.com', '', 'Ola'),
('Angel Elias Banze', 'angeleliasbanzehotmail.com', '', 'Ola'),
('Angel Elias Banze', 'angeleliasbanzehotmail.com', '', 'Ola');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id_pessoa` varchar(5) NOT NULL,
  `celular1` int(11) DEFAULT NULL,
  `celular2` int(11) DEFAULT NULL,
  `email1` varchar(50) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id_pessoa`, `celular1`, `celular2`, `email1`, `email2`) VALUES
('a001', 841543733, 865602430, 'angeleliasanjo@gmail.com', 'angelebanze@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contas`
--

CREATE TABLE `contas` (
  `id_pessoa` varchar(5) DEFAULT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `github` varchar(150) DEFAULT NULL,
  `linked_in` varchar(150) DEFAULT NULL,
  `insagram` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contas`
--

INSERT INTO `contas` (`id_pessoa`, `facebook`, `github`, `linked_in`, `insagram`) VALUES
('a001', 'https://www.facebook.com/Angelbanze/', 'https://github.com/aebanze', 'https://www.linkedin.com/in/angel-elias-banze-8273a619a/', 'https://www.instagram.com/nguilaz1/');

-- --------------------------------------------------------

--
-- Table structure for table `escolas`
--

CREATE TABLE `escolas` (
  `id_pessoa` varchar(5) DEFAULT NULL,
  `escola` varchar(100) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `escolas`
--

INSERT INTO `escolas` (`id_pessoa`, `escola`, `descricao`) VALUES
('a001', 'Escola Secundaria Joaquim Alberto Chissano', 'Ensino geral completo'),
('a001', 'Instituto Industrial de Maputo', 'Ensino Tecnico Profissional em Electricidade industrial'),
('a001', 'Universidade Joaquim Chissano', 'Licenciatura em engenharia em Tecnologias e Sistemas de Informação');

-- --------------------------------------------------------

--
-- Table structure for table `pessoa`
--

CREATE TABLE `pessoa` (
  `id` varchar(5) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `genero` enum('F','M') DEFAULT 'M',
  `morada` varchar(50) DEFAULT NULL,
  `profissao` varchar(80) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `resumo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `genero`, `morada`, `profissao`, `img`, `resumo`) VALUES
('a001', 'Angel Elias Banze', 'M', 'Guava', 'Electricista', '../img/Angel.jpg', 'Sou um jovem formado em Eléctricidade Industrial pelo Instituto Industrial De Maputo, actualmente sou estudante de Engenharia em Tecnologias e Sistemas de Informação e estou neste momento disponível para novas experiências profissionais. Após ter terminado o meu curso técnico, realizei um estágio pré-profissional na MEREC INDUSTRIES SA, e agora trabalho como pré-oficial elétricista na SOELEC, estando assim a 2 anos no mercado de emprego');

-- --------------------------------------------------------

--
-- Table structure for table `trabalhos`
--

CREATE TABLE `trabalhos` (
  `id_pessoa` varchar(5) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `img4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Indexes for table `contas`
--
ALTER TABLE `contas`
  ADD KEY `fk_pess` (`id_pessoa`);

--
-- Indexes for table `escolas`
--
ALTER TABLE `escolas`
  ADD KEY `fk_pessoa` (`id_pessoa`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD KEY `fk_id_pessoa` (`id_pessoa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`);

--
-- Constraints for table `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `fk_pess` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`);

--
-- Constraints for table `escolas`
--
ALTER TABLE `escolas`
  ADD CONSTRAINT `fk_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`);

--
-- Constraints for table `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD CONSTRAINT `fk_id_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
