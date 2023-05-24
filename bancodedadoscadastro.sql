-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/05/2023 às 19:09
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `complemento` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `data_nascimento`, `cpf`, `sexo`, `cidade`, `bairro`, `rua`, `numero`, `complemento`) VALUES
(1, 'Luciana Dias Silva', '1990-11-21', '20622907901', 'feminino', 'São Leopoldo', 'Vicentina', 'Rua Affonso Linck', '354', 'Luciana Dias Si'),
(2, 'Luciana Dias Silva', '1990-03-21', '02067229079', 'feminino', 'São Leopoldo', 'Vicentina', 'Rua Affonso Linck', '354', 'a'),
(3, 'Luciana Dias Silva', '1999-03-21', '01121155577', 'feminino', 'São Leopoldo', 'Vicentina', 'Rua Affonso Linck', '354', '1'),
(4, 'Tiago', '1988-12-12', '01123325512', 'masculino', 'São Leopoldo', 'Vicentina', 'Rua Affonso Linck', '354', 'a'),
(5, 'Luciana Dias Silva', '1988-12-21', '11111111122', 'masculino', 'São Leopoldo', '', 'Rua Affonso Linck', '354', 'm'),
(6, 'Luciana Dias Silva', '1990-11-21', '20622907901', 'feminino', 'São Leopoldo', 'Vicentina', 'Rua José Bonifácio', '26', 'Luciana Dias Si'),
(7, 'Luciana Dias ', '1990-11-21', '20622907901', 'feminino', 'São Leopoldo', 'Vicentina', 'Rua Affonso Linck', '354', 'Luciana Dias Si');

-- --------------------------------------------------------

--
-- Estrutura para tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `numero` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `data` date NOT NULL,
  `prazo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
