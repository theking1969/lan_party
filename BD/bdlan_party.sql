-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Abr-2022 às 10:52
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
  `Estado_equipa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipas`
--

INSERT INTO `equipas` (`ID_Equipa`, `Nome_Equipa`, `Estado_equipa`) VALUES
(1, 'teste', 1);

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
  `ID_estado_equipa` int(11) NOT NULL,
  `Estado_equipa` text NOT NULL
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
  `ID_etapas` int(11) NOT NULL,
  `Etapas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id_jogadores` int(11) NOT NULL,
  `Nome_jogadores` text NOT NULL,
  `NumESCO` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Steam_ID` text NOT NULL,
  `ID_equipa` int(11) NOT NULL,
  `ID_estadoJogador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`id_jogadores`, `Nome_jogadores`, `NumESCO`, `Email`, `Steam_ID`, `ID_equipa`, `ID_estadoJogador`) VALUES
(1, 'dsfbg', 234, 'sdfgbh', '21ews', 1, 1);

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
  ADD PRIMARY KEY (`ID_equipa_resultado`),
  ADD KEY `ID_equipa` (`ID_equipa`),
  ADD KEY `ID_resultado` (`ID_resultado`);

--
-- Índices para tabela `equipas`
--
ALTER TABLE `equipas`
  ADD PRIMARY KEY (`ID_Equipa`),
  ADD KEY `Estado_equipa` (`Estado_equipa`);

--
-- Índices para tabela `estadojogo`
--
ALTER TABLE `estadojogo`
  ADD PRIMARY KEY (`ID_EstadoJogo`);

--
-- Índices para tabela `estado_equipa`
--
ALTER TABLE `estado_equipa`
  ADD PRIMARY KEY (`ID_estado_equipa`);

--
-- Índices para tabela `estado_jogador`
--
ALTER TABLE `estado_jogador`
  ADD PRIMARY KEY (`ID_EstadoJogador`);

--
-- Índices para tabela `estapas`
--
ALTER TABLE `estapas`
  ADD PRIMARY KEY (`ID_etapas`);

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id_jogadores`),
  ADD KEY `ID_estadoJogador` (`ID_estadoJogador`),
  ADD KEY `ID_equipa` (`ID_equipa`);

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`ID_jogos`),
  ADD KEY `ID_equipa1` (`ID_equipa1`),
  ADD KEY `ID_equipa2` (`ID_equipa2`),
  ADD KEY `ID_etapas` (`ID_etapas`),
  ADD KEY `Estado_jogo` (`Estado_jogo`);

--
-- Índices para tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`ID_Resultados`),
  ADD KEY `ID_jogo` (`ID_jogo`),
  ADD KEY `ID_equipa_vencedora` (`ID_equipa_vencedora`);

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
  MODIFY `ID_Equipa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estadojogo`
--
ALTER TABLE `estadojogo`
  MODIFY `ID_EstadoJogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado_equipa`
--
ALTER TABLE `estado_equipa`
  MODIFY `ID_estado_equipa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado_jogador`
--
ALTER TABLE `estado_jogador`
  MODIFY `ID_EstadoJogador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estapas`
--
ALTER TABLE `estapas`
  MODIFY `ID_etapas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id_jogadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `equipa/resultado`
--
ALTER TABLE `equipa/resultado`
  ADD CONSTRAINT `equipa/resultado_ibfk_1` FOREIGN KEY (`ID_equipa`) REFERENCES `equipas` (`ID_Equipa`),
  ADD CONSTRAINT `equipa/resultado_ibfk_2` FOREIGN KEY (`ID_resultado`) REFERENCES `resultados` (`ID_Resultados`);

--
-- Limitadores para a tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD CONSTRAINT `jogadores_ibfk_1` FOREIGN KEY (`ID_equipa`) REFERENCES `equipas` (`ID_Equipa`),
  ADD CONSTRAINT `estado_jogador_ibfk_1` FOREIGN KEY (`ID_EstadoJogador`) REFERENCES `jogadores` (`ID_estadoJogador`);

--
-- Limitadores para a tabela `jogos`
--
ALTER TABLE `jogos`
  ADD CONSTRAINT `jogos_ibfk_1` FOREIGN KEY (`ID_etapas`) REFERENCES `estapas` (`ID_etapas`),
  ADD CONSTRAINT `jogos_ibfk_2` FOREIGN KEY (`Estado_jogo`) REFERENCES `estadojogo` (`ID_EstadoJogo`),
  ADD CONSTRAINT `jogos_ibfk_3` FOREIGN KEY (`ID_equipa1`) REFERENCES `equipas` (`ID_Equipa`),
  ADD CONSTRAINT `jogos_ibfk_4` FOREIGN KEY (`ID_equipa2`) REFERENCES `equipas` (`ID_Equipa`);

--
-- Limitadores para a tabela `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`ID_jogo`) REFERENCES `jogos` (`ID_jogos`);
  
  --
  --
  --
  
  ALTER TABLE `estado_equipa`
  ADD CONSTRAINT `estado_equipa_ibfk_1` FOREIGN KEY (`ID_estado_equipa`) REFERENCES `equipas` (`Estado_equipa`);
  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
