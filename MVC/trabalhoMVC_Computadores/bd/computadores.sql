-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2023 às 06:06
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exercicio_mvc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `computadores`
--

CREATE TABLE `computadores` (
  `com_cod` int(11) NOT NULL,
  `com_descricao` varchar(30) NOT NULL,
  `com_fabricante` varchar(15) NOT NULL,
  `com_numeroserie` varchar(30) NOT NULL,
  `com_acessorios` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `computadores`
--

INSERT INTO `computadores` (`com_cod`, `com_descricao`, `com_fabricante`, `com_numeroserie`, `com_acessorios`) VALUES
(1, 'Computador de Mesa Preto Fosco', 'DELL', '2023a001a', 'Teclado e Mouse'),
(3, 'Notebook i7', 'HP', '54x2023-1000', 'Carregador e Capa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`com_cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `computadores`
--
ALTER TABLE `computadores`
  MODIFY `com_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
