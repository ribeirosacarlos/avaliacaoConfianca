-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 15:20
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `confianca-clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `email` varchar(85) DEFAULT NULL,
  `phone` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Carlos de Sá', 'ribeirosacarlos@gmail.com', 1234),
(2, 'José', 'jose@gmail.com', 123),
(3, 'Maria', 'maria@gmail.com', 321),
(4, 'Felipe', 'felipe@gmail.com', 4567),
(9, 'Breno', 'breno@gmail.com', 99929927),
(10, 'Tereza Ferreira', 'tereza@gmail.com', 554344554),
(11, 'Laura', 'laura@gmail.com', 4444444),
(12, 'Letícia Dias', 'leticia@gmail.com', 45765655);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;