-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Fev-2022 às 18:34
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_digitro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `digitro`
--

CREATE TABLE `digitro` (
  `id_digitro` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `estadocivil` enum('Solteiro','Solteira','Casado','Casada','Divorciado','Divorciada','Viúvo','Viúva') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `digitro`
--

INSERT INTO `digitro` (`id_digitro`, `nome`, `datanascimento`, `cpf`, `email`, `estadocivil`) VALUES
(2, '[Thomas]', '2000-02-01', '42355656431', '[thomas@eu]', 'Viúvo'),
(11, 'Pedrinho', '1993-01-01', '45356890121', 'pedro@hotmail', 'Solteiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `digitro`
--
ALTER TABLE `digitro`
  ADD PRIMARY KEY (`id_digitro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `digitro`
--
ALTER TABLE `digitro`
  MODIFY `id_digitro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
