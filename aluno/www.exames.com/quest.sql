-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2023 às 17:57
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_exame`
--

CREATE TABLE `categoria_exame` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `tempo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categoria_exame`
--

INSERT INTO `categoria_exame` (`id`, `categoria`, `tempo`) VALUES
(1, 'php', 1),
(20, 'matematica 3º ano p1', 32),
(21, 'matematica 5º ano p1', 60);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `tipo_exam` varchar(100) NOT NULL,
  `total_q` varchar(10) NOT NULL,
  `corretas` varchar(10) NOT NULL,
  `erradas` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `exam_results`
--

INSERT INTO `exam_results` (`id`, `usuario`, `tipo_exam`, `total_q`, `corretas`, `erradas`, `exam_time`) VALUES
(1, '', '0', '2', '1', '1', '2023-01-15]'),
(2, '', '0', '2', '1', '1', '2023-01-15]'),
(3, 'sd', '0', '2', '0', '2', '2023-01-15]'),
(4, 'sd', '0', '2', '1', '1', '2023-01-15]'),
(5, 'sd', '', '2', '1', '1', '2023-01-15]'),
(6, 'sd', 'php', '2', '1', '1', '2023-01-15]'),
(7, 'sd', 'php', '2', '0', '2', '2023-01-15]'),
(8, 'sd', 'php', '2', '1', '1', '2023-01-15]'),
(9, 'sd', 'php', '2', '0', '2', '2023-01-16]'),
(10, 'sd', 'php', '2', '0', '2', '2023-01-16]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id` int(5) NOT NULL,
  `numQ` varchar(5) NOT NULL,
  `Questao` varchar(500) NOT NULL,
  `ops1` varchar(100) NOT NULL,
  `ops2` varchar(100) NOT NULL,
  `ops3` varchar(100) NOT NULL,
  `ops4` varchar(100) NOT NULL,
  `resposta` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id`, `numQ`, `Questao`, `ops1`, `ops2`, `ops3`, `ops4`, `resposta`, `categoria`) VALUES
(10, '1', '2+2', '45', '4', '22', '53', '4', 'php'),
(11, '2', 'o que é isso', 'opsImage/cdff295360aefc4fe1a7c3c99c10e6a91.png', 'opsImage/cdff295360aefc4fe1a7c3c99c10e6a92.png', 'opsImage/cdff295360aefc4fe1a7c3c99c10e6a93.png', 'opsImage/cdff295360aefc4fe1a7c3c99c10e6a9c5.png', 'opsImage/cdff295360aefc4fe1a7c3c99c10e6a91.png', 'php'),
(12, '1', '1+1', '2', '3', '4', '9', '2', 'matematica 3º ano p1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `id` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`id`, `nome`, `apelido`, `usuario`, `password`, `email`) VALUES
(12, 'nico', 'er', 'sd', '123', 'cx');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria_exame`
--
ALTER TABLE `categoria_exame`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `categoria_exame`
--
ALTER TABLE `categoria_exame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
