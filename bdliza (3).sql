-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Dez-2022 às 13:42
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdliza`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Vestidos'),
(2, 'Acessórios'),
(3, 'Infantil'),
(4, 'Calçados'),
(5, 'Parte de Cima'),
(6, 'Parte Debaixo'),
(5, 'oo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcriarlogin`
--

CREATE TABLE `tbcriarlogin` (
  `nomeLogin` varchar(100) NOT NULL,
  `emailLogin` varchar(100) NOT NULL,
  `senhaLogin` varchar(100) NOT NULL,
  `confirmasenhaLogin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcriarlogin`
--

INSERT INTO `tbcriarlogin` (`nomeLogin`, `emailLogin`, `senhaLogin`, `confirmasenhaLogin`) VALUES
('Maria', 'maria@gmail.com', '123', '123'),
('Maria', 'maria@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `emailLogin` varchar(100) NOT NULL,
  `senhaLogin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`emailLogin`, `senhaLogin`) VALUES
('maria@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `nomeProduto` varchar(45) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `nomeCategoria` varchar(45) NOT NULL,
  `precoProduto` varchar(45) NOT NULL,
  `qtdeProduto` int(11) NOT NULL,
  `imgProduto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`nomeProduto`, `idProduto`, `nomeCategoria`, `precoProduto`, `qtdeProduto`, `imgProduto`) VALUES
('Vestido Listrado', 8, 'Vestidos', 'R$30,00', 1, ''),
('teste', 0, 'Acessorios', 'R$30,00', 1, ''),
('teste', 0, 'Acessorios', 'R$30,00', 1, ''),
('teste', 0, 'Acessorios', 'R$30,00', 1, ''),
('teste', 0, 'Acessorios', 'R$30,00', 1, ''),
('teste', 0, 'Acessorios', 'R$30,00', 1, ''),
('teste', 0, 'Acessorios', 'R$30,00', 1, ''),
('teste', 0, 'Acessorios', 'R$30,00', 1, ''),
('Moletom', 8, '', 'R$30,00', 1, ''),
('Moletom', 8, '5', 'R$30,00', 1, ''),
('Moletom', 8, '5', 'R$30,00', 1, ''),
('teste22', 2, 'Infantil', 'R$30,00', 1, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
