-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Nov-2022 às 18:01
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
-- Banco de dados: `todolist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nome`) VALUES
(2, 'Estudo'),
(3, 'Lazer'),
(5, 'Outros'),
(4, 'Saúde'),
(1, 'Trabalho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `idtarefas` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `idusuarioFK` int(11) NOT NULL,
  `idcategoriaFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`idtarefas`, `titulo`, `data`, `hora`, `descricao`, `imagem`, `idusuarioFK`, `idcategoriaFK`) VALUES
(26, 'Entregar trabalho de php', '2022-11-02', '18:00:00', '  Avaliação final', 'arquivos/Logo_IEFP_Horizontal_1_c.jpg', 0, 2),
(29, 'teste', '0000-00-00', '00:00:00', 'testando...', 'arquivos/photo-1629916973474-acdf0519265e.avif', 0, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `idutilizador` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `admin` tinyint(4) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`idutilizador`, `email`, `senha`, `admin`, `nome`) VALUES
(1, 'ana@gmail.com', '12345', 0, NULL),
(2, 'a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, NULL),
(3, 'paula@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 'Ana Paula'),
(4, 'joao@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'joao');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `idcategoria_UNIQUE` (`idcategoria`),
  ADD UNIQUE KEY `nome_UNIQUE` (`nome`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`idtarefas`),
  ADD UNIQUE KEY `idtarefas_UNIQUE` (`idtarefas`),
  ADD KEY `fk_tarefas_categoria1_idx` (`idcategoriaFK`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`idutilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `idtarefas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `idutilizador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD CONSTRAINT `fk_tarefas_categoria1` FOREIGN KEY (`idcategoriaFK`) REFERENCES `categorias` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
