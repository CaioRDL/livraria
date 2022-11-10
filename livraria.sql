-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2022 às 14:29
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
-- Banco de dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

CREATE TABLE `autores` (
  `idautor` int(11) NOT NULL,
  `nome_autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `autores`
--

INSERT INTO `autores` (`idautor`, `nome_autor`) VALUES
(7, 'Luan Diogo Barbosa'),
(8, 'Giuliano Galoppo'),
(9, 'Ernesto Rafael Guevara de la Serna'),
(10, 'Emiliano Zapata'),
(11, 'Nahuel Bustos'),
(12, 'Charles do Bronx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nome_cli` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_cli` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email_ci` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nome_cli`, `cpf`, `telefone_cli`, `email_ci`) VALUES
(1, 'Luan Diogo Barbosa', '301.175.739-90', '2727706064', 'luan-barbosa81@graficajardim.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `ideditora` int(11) NOT NULL,
  `nome_editora` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`ideditora`, `nome_editora`, `cnpj`, `endereco`, `telefone`, `email`) VALUES
(1, 'Verge Editora', '42.311.319/0001-88', 'Rua Daniel Andrade Stragliotto', '1928456105', 'faleconosco@verge.com.br'),
(2, 'BrightSide Editora', '62.103.093/0001-37', 'Rua Diana Ortiz', '12983836078', 'brightside@contato.com.br'),
(3, 'Cruzeiro Editora', '40.351.622/0001-89', 'Recanto das Andorinhas', '1929014336', 'atendimento@cruzeiro.com.br'),
(4, 'Inato Editora', '52.697.991/0001-07', 'Rua Alberto Rangel', '1127047489', 'inato.contato@editora.com'),
(5, 'Inato Editora', '52.697.991/0001-07', 'Rua Alberto Rangel', '1127047489', 'inato.contato@editora.com'),
(6, 'UFC', '42.311.319/0001-88', 'Rua Teste', '41999999999', 'ufc@ufc.com'),
(7, 'Editora Select', '21636783678', 'Rua Select', '4123213213', 'select@select.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `idgenero` int(11) NOT NULL,
  `nomegenero` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`idgenero`, `nomegenero`) VALUES
(2, 'Suspense'),
(3, 'Drama'),
(4, 'Ficção Científica '),
(5, 'Ficção Religiosa'),
(6, 'Aventura'),
(7, 'Romance');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `idlivro` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `autor` int(11) NOT NULL,
  `valor` float NOT NULL,
  `editora` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `edicao` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`idlivro`, `titulo`, `autor`, `valor`, `editora`, `genero`, `edicao`) VALUES
(9, 'Khabib Nurmagomedov', 12, 99, 6, 3, 'Edição World Champion'),
(10, 'Teste JD', 10, 10, 4, 4, 'Teste Com JS'),
(15, 'testao', 7, 13, 3, 3, 'testao'),
(17, 'Select Teste', 9, 45, 7, 6, 'Teste Select'),
(18, 'Homem Aranha', 8, 10, 1, 2, 'Homem Aranha'),
(19, 'Gerador', 8, 25, 2, 3, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`) VALUES
('email@exemplo.com', '$2y$10$uKuPLnr017DC9KDkMcMPt.A0b7dM1I69uMP90rmALj5.71TF5Gd9i'),
('teste@teste.com', '$2y$10$lp6ksBvBF12tccjONyN/LenTtvkGhvlC2qMiupWjAxIpLcMp/cLSO'),
('teste@teste.com', '$2y$10$L2oSfEIra.6C6Mcso940QOFwHciq7v6gFFWmUwhrO81tKxcHd/GGm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idvendas` int(11) NOT NULL,
  `valor` float NOT NULL,
  `cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `idlivro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`idautor`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`ideditora`);

--
-- Índices para tabela `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`idgenero`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`idlivro`),
  ADD KEY `livros_ibfk_generos` (`genero`),
  ADD KEY `livros_ibfk_autores` (`autor`),
  ADD KEY `livros_ibfk_editora` (`editora`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idvendas`),
  ADD KEY `vendas_ibfk_idlivro` (`idlivro`),
  ADD KEY `vendas_ibfk_cliente` (`cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autores`
--
ALTER TABLE `autores`
  MODIFY `idautor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `editora`
--
ALTER TABLE `editora`
  MODIFY `ideditora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `generos`
--
ALTER TABLE `generos`
  MODIFY `idgenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `idlivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idvendas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_autores` FOREIGN KEY (`autor`) REFERENCES `autores` (`idautor`),
  ADD CONSTRAINT `livros_ibfk_editora` FOREIGN KEY (`editora`) REFERENCES `editora` (`ideditora`),
  ADD CONSTRAINT `livros_ibfk_generos` FOREIGN KEY (`genero`) REFERENCES `generos` (`idgenero`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_cliente` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idcliente`),
  ADD CONSTRAINT `vendas_ibfk_idlivro` FOREIGN KEY (`idlivro`) REFERENCES `livros` (`idlivro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
