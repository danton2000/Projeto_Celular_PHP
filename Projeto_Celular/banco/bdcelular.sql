-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2020 às 16:57
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcelular`
--
CREATE DATABASE IF NOT EXISTS `bdcelular` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdcelular`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_adm` int(11) NOT NULL,
  `nome_adm` varchar(150) NOT NULL,
  `login_adm` varchar(80) NOT NULL,
  `senha_adm` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbadmin`
--

INSERT INTO `tbadmin` (`id_adm`, `nome_adm`, `login_adm`, `senha_adm`) VALUES
(1, 'danton', 'danton', '1'),
(2, 'Fabio', 'fabio', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcelular`
--

CREATE TABLE `tbcelular` (
  `id_cel` int(11) NOT NULL,
  `nome_cel` varchar(80) DEFAULT NULL,
  `memoria_cel` varchar(80) DEFAULT NULL,
  `armazenamento_cel` varchar(80) DEFAULT NULL,
  `preco_cel` decimal(6,2) DEFAULT NULL,
  `tela_cel` varchar(80) DEFAULT NULL,
  `sistema_cel` varchar(80) DEFAULT NULL,
  `camera_cel` varchar(80) DEFAULT NULL,
  `fk_id_adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcelular`
--

INSERT INTO `tbcelular` (`id_cel`, `nome_cel`, `memoria_cel`, `armazenamento_cel`, `preco_cel`, `tela_cel`, `sistema_cel`, `camera_cel`, `fk_id_adm`) VALUES
(1, 'Xiaomi Redmi Go', '1 GB', '16 GB', '400.00', '5 Pol', 'Android', '8 MP', NULL),
(2, 'Samsung Galaxy J6', '2 GB', '32 GB', '860.00', '5 Pol', 'Android ', '13 MP', NULL),
(3, 'Moto G7 Play', '2 GB', '32 GB', '650.00', '6 Pol ', 'Android ', '13 MP', NULL),
(4, 'LG K12 Plus', '3 GB', '32 GB', '700.00', '6 Pol', 'Android ', '16 MP', NULL),
(5, 'Moto G7 Power', '3 GB', '32 GB', '900.00', '6 Pol', 'Android ', '8 MP', NULL),
(6, 'Galaxy A30', '4 GB', '64 GB', '1100.00', '6 Pol', 'Android ', '16 MP', NULL),
(7, 'Zenfone Max Shot', '3 GB', '32 GB', '1000.00', '6 Pol', 'Android ', '8 MP', NULL),
(8, 'Galaxy M30', '4 GB', '64 GB', '1100.00', '6 Pol', 'Android ', '13 MP', NULL),
(9, 'Moto Z3 Play', '4 GB', '64 GB', '1400.00', '6 Pol ', 'Android ', '12 MP', NULL),
(10, 'Moto G7 Plus', '4 GB', '64 GB', '1300.00', '6 Pol', 'Android ', '16 MP ', NULL),
(11, 'Zenfone 5', '4 GB', '64 GB', '1600.00', '6 Pol', 'Android ', '12 MP', NULL),
(12, 'Xiaomi Mi 8 Lite', '4 GB ', '64 GB', '1000.00', '6 Pol', 'Android ', '12 MP', NULL),
(13, 'Motorola One Vision', '4 GB ', '128 GB', '1500.00', '6 Pol', 'Android ', '25 MP ', NULL),
(14, 'Redmi Note 7 ', '3 GB ', '32 GB', '1000.00', '6 Pol', 'Android ', '13 MP ', NULL),
(15, 'Galaxy A70', '6 GB', '128 GB', '1800.00', '7 Pol', 'Android ', '32 MP ', NULL),
(16, 'iPhone 8 Plus', '8 GB', '64 GB', '4600.00', '5 Pol', 'iOS', '12 MP', NULL),
(17, 'Galaxy S9 Plus', '6 GB', '128 GB', '2600.00', '6 Pol', 'Android ', '12 MP ', NULL),
(18, 'Huawei P30 Pro', '8 GB ', '256 GB', '5000.00', '6 Pol', 'Android ', '40 MP ', NULL),
(19, 'iPhone XR', '3 GB', '64 GB', '3900.00', '6 Pol', 'iOS', '12 MP ', NULL),
(20, 'Xiaomi Mi 9', '6 GB', '128 GB', '2400.00', '6 Pol', 'Android ', '48 MP', NULL),
(21, 'Galaxy S10e', '6 GB', '128 GB', '2800.00', '6 Pol', 'Android ', '12 MP', NULL),
(22, 'iPhone XS Max', '4 GB', '64 GB', '6200.00', '6 Pol', 'iOS', '12 MP ', NULL),
(23, 'Galaxy S10 Plus', '8 GB', '128 GB', '3500.00', '6 Pol', 'Android ', '12 MP', NULL),
(26, 'Galaxy A50', '4 GB', '64 GB', '1600.00', '6 Pol', 'Android', '25 MP', NULL),
(27, 'Multilaser MS50L', '1 GB', '8 GB', '350.00', '5 Pol', 'Android', '8 MP', NULL),
(28, 'Mirage 62S ', '1 GB', '8 GB', '370.00', '5 Pol', 'Android', '8 MP', NULL),
(29, 'Samsung Galaxy M10', '3 GB', '32 GB', '750.00', '6 Pol', 'Android ', '13 MP', NULL),
(31, 'Samsung Galaxy Note 7', '6 GB ', '128 GB', '3000.00', '6 Pol', 'Android ', '12 MP ', NULL),
(32, 'Multilaser ms60X', '2 GB', '16 GB', '800.00', '5 Pol', 'Android', '13 MP', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontatos`
--

CREATE TABLE `tbcontatos` (
  `id_contato` int(11) NOT NULL,
  `nome_contato` varchar(100) NOT NULL,
  `email_contato` varchar(100) NOT NULL,
  `senha_contato` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `tbcelular`
--
ALTER TABLE `tbcelular`
  ADD PRIMARY KEY (`id_cel`);

--
-- Índices para tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  ADD PRIMARY KEY (`id_contato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbcelular`
--
ALTER TABLE `tbcelular`
  MODIFY `id_cel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbcelular`
--
ALTER TABLE `tbcelular`
  ADD CONSTRAINT `fk_id_adm` FOREIGN KEY (`fk_id_adm`) REFERENCES `tbadmin` (`id_adm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
