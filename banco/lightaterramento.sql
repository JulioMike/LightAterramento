-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jan-2020 às 19:37
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lightaterramento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicoes_gerador`
--

CREATE TABLE `medicoes_gerador` (
  `id_medicoes_gerador` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  `id_sinais` int(11) DEFAULT NULL,
  `id_sensores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicoes_sondas`
--

CREATE TABLE `medicoes_sondas` (
  `id_medicoes_sondas` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  `id_sinais` int(11) DEFAULT NULL,
  `id_sensores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sensores`
--

CREATE TABLE `sensores` (
  `id_sensores` int(11) NOT NULL,
  `tipo` char(1) DEFAULT NULL,
  `X` double DEFAULT NULL,
  `y` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinais`
--

CREATE TABLE `sinais` (
  `id_sinais` int(11) NOT NULL,
  `tipo` varchar(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `medicoes_gerador`
--
ALTER TABLE `medicoes_gerador`
  ADD PRIMARY KEY (`id_medicoes_gerador`);

--
-- Índices para tabela `medicoes_sondas`
--
ALTER TABLE `medicoes_sondas`
  ADD PRIMARY KEY (`id_medicoes_sondas`);

--
-- Índices para tabela `sensores`
--
ALTER TABLE `sensores`
  ADD PRIMARY KEY (`id_sensores`);

--
-- Índices para tabela `sinais`
--
ALTER TABLE `sinais`
  ADD PRIMARY KEY (`id_sinais`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `medicoes_gerador`
--
ALTER TABLE `medicoes_gerador`
  MODIFY `id_medicoes_gerador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medicoes_sondas`
--
ALTER TABLE `medicoes_sondas`
  MODIFY `id_medicoes_sondas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sensores`
--
ALTER TABLE `sensores`
  MODIFY `id_sensores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sinais`
--
ALTER TABLE `sinais`
  MODIFY `id_sinais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
