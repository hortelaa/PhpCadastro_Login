-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2022 às 01:26
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dec9teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `ID` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`ID`, `nome`, `email`, `usuario`, `senha`, `data`) VALUES
(10, 'Lucas', 'lucascardoso5263@gmail.com', 'Lucas22', '$2y$10$Oaf7DTrTJGKzaqkh0JURVOqrbgGCrg/yP5rel4oKXL5O9nFoLkG3y', '2022-03-15'),
(11, 'Ronaldo', 'rodolfo32@gmail.com', 'Ronaldin', '123456', '2022-03-15'),
(12, 'ghjghjgh', 'acardosovr@hotmail.com', 'jghjhgj', 'ghjghjj', '2022-03-15'),
(13, 'UEPA RATIHO', 'lucascardoso5263@gmail.com', 'Lucas22', 'hfghfghg', '2022-03-15'),
(14, 'TesteFinal', 'testefinal@gmail.com', 'Lucas22', '123456', '2022-03-16'),
(15, 'Teste2', 'glaubersilva600@gmail.com', 'Lucas22', 'hfghfghfgh', '2022-03-16');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
