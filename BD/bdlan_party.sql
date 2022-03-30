-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Mar-2022 às 15:41
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
-- Banco de dados: `bdlan_party`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipa/resultado`
--

CREATE TABLE `equipa/resultado` (
  `ID_equipa_resultado` int(11) NOT NULL,
  `ID_equipa` int(11) NOT NULL,
  `ID_resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipas`
--

CREATE TABLE `equipas` (
  `ID_Equipa` int(11) NOT NULL,
  `Nome_Equipa` text NOT NULL,
  `Estado_equipa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estadojogo`
--

CREATE TABLE `estadojogo` (
  `ID_EstadoJogo` int(11) NOT NULL,
  `EstadoJogo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_equipa`
--

CREATE TABLE `estado_equipa` (
  `ID_estado` int(11) NOT NULL,
  `Estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_jogador`
--

CREATE TABLE `estado_jogador` (
  `ID_EstadoJogador` int(11) NOT NULL,
  `estado` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estapas`
--

CREATE TABLE `estapas` (
  `ID_estapas` int(11) NOT NULL,
  `Estapas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id_jogadores` int(11) NOT NULL,
  `Nome_jogadores` varchar(100) NOT NULL,
  `NumESCO` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Steam_ID` text NOT NULL,
  `ID_equipa` int(11) NOT NULL,
  `ID_estadoJogador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `ID_jogos` int(11) NOT NULL,
  `Hora_inicio` date NOT NULL,
  `Hora_Fim` date NOT NULL,
  `ID_equipa1` int(11) NOT NULL,
  `ID_equipa2` int(11) NOT NULL,
  `ID_etapas` int(11) NOT NULL,
  `Estado_jogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE `resultados` (
  `ID_Resultados` int(11) NOT NULL,
  `Resultado` text NOT NULL,
  `ID_equipa_vencedora` int(11) NOT NULL,
  `ID_jogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipa/resultado`
--
ALTER TABLE `equipa/resultado`
  ADD PRIMARY KEY (`ID_equipa_resultado`);

--
-- Índices para tabela `equipas`
--
ALTER TABLE `equipas`
  ADD PRIMARY KEY (`ID_Equipa`);

--
-- Índices para tabela `estadojogo`
--
ALTER TABLE `estadojogo`
  ADD PRIMARY KEY (`ID_EstadoJogo`);

--
-- Índices para tabela `estado_equipa`
--
ALTER TABLE `estado_equipa`
  ADD PRIMARY KEY (`ID_estado`);

--
-- Índices para tabela `estado_jogador`
--
ALTER TABLE `estado_jogador`
  ADD PRIMARY KEY (`ID_EstadoJogador`);

--
-- Índices para tabela `estapas`
--
ALTER TABLE `estapas`
  ADD PRIMARY KEY (`ID_estapas`);

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id_jogadores`);

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`ID_jogos`);

--
-- Índices para tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`ID_Resultados`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equipa/resultado`
--
ALTER TABLE `equipa/resultado`
  MODIFY `ID_equipa_resultado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipas`
--
ALTER TABLE `equipas`
  MODIFY `ID_Equipa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estadojogo`
--
ALTER TABLE `estadojogo`
  MODIFY `ID_EstadoJogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado_equipa`
--
ALTER TABLE `estado_equipa`
  MODIFY `ID_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado_jogador`
--
ALTER TABLE `estado_jogador`
  MODIFY `ID_EstadoJogador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estapas`
--
ALTER TABLE `estapas`
  MODIFY `ID_estapas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id_jogadores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `ID_jogos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados`
--
ALTER TABLE `resultados`
  MODIFY `ID_Resultados` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
