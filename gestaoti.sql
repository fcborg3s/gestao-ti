-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2021 às 14:54
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestaoti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `custofixo`
--

CREATE TABLE `custofixo` (
  `codCustoFixo` int(11) NOT NULL,
  `nomeServico` varchar(100) NOT NULL,
  `codEmpresa` int(11) NOT NULL,
  `qtLicenca` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `valorMensal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `codDepartamento` int(11) NOT NULL,
  `nomeDepartamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Estrutura da tabela `dvrs`
--

CREATE TABLE `dvrs` (
  `codDvr` int(11) NOT NULL,
  `ipDvr` varchar(100) NOT NULL,
  `codEmpresa` int(11) NOT NULL,
  `local` varchar(100) NOT NULL,
  `nomeDvr` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `porta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `codEmpresa` int(11) NOT NULL,
  `nomeEmpresa` varchar(100) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `estadomaquina`
--

CREATE TABLE `estadomaquina` (
  `codEstadoMaquina` int(11) NOT NULL,
  `estadoMaquina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `garantia`
--

CREATE TABLE `garantia` (
  `codGarantia` int(11) NOT NULL,
  `codMaquina` int(11) NOT NULL,
  `dataInicio` date NOT NULL,
  `notaFiscal` varchar(100) NOT NULL,
  `dataTermino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `licenca`
--

CREATE TABLE `licenca` (
  `codLicenca` int(11) NOT NULL,
  `licenca` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `emUso` int(11) NOT NULL,
  `sobressalente` int(11) NOT NULL,
  `numeroSerie` varchar(100) NOT NULL,
  `vencimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Estrutura da tabela `logmudanca`
--

CREATE TABLE `logmudanca` (
  `codMudanca` int(11) NOT NULL,
  `codMaquina` int(11) NOT NULL,
  `dataMudanca` datetime NOT NULL,
  `tipoMudanca` varchar(100) NOT NULL,
  `codEmpresaAnterior` int(11) NOT NULL,
  `codEmpresaNova` int(11) NOT NULL,
  `codDepartamentoAnterior` int(11) NOT NULL,
  `codDepartamentoNovo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `manutencao`
--

CREATE TABLE `manutencao` (
  `codManutencao` int(11) NOT NULL,
  `codMaquina` int(11) NOT NULL,
  `dataRecebimento` date NOT NULL,
  `descricaoProblema` varchar(255) NOT NULL,
  `dataDevolucao` date NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `descricaoReparo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `maquina`
--

CREATE TABLE `maquina` (
  `codMaquina` int(11) NOT NULL,
  `nomeMaquina` varchar(100) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `codTipoMaquina` int(11) NOT NULL,
  `codEmpresa` int(11) NOT NULL,
  `codDepartamento` int(11) NOT NULL,
  `codMarca` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `disco` varchar(100) NOT NULL,
  `memoria` varchar(100) NOT NULL,
  `sistemaOperacional` varchar(100) NOT NULL,
  `processador` varchar(100) NOT NULL,
  `codSituacao` int(11) NOT NULL,
  `idAnydesk` varchar(100) NOT NULL,
  `senhaAnydesk` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `codEstadoMaquina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `codMarca` int(11) NOT NULL,
  `nomeMarca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `roteadores`
--

CREATE TABLE `roteadores` (
  `codRoteador` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nomeRede` varchar(100) NOT NULL,
  `senhaWifi` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





-- --------------------------------------------------------

--
-- Estrutura da tabela `servidores`
--

CREATE TABLE `servidores` (
  `codServidor` int(11) NOT NULL,
  `ipServidor` varchar(100) NOT NULL,
  `servico` varchar(100) NOT NULL,
  `codEmpresa` int(11) NOT NULL,
  `usuarioServidor` varchar(100) NOT NULL,
  `senhaServidor` varchar(100) NOT NULL,
  `sistemaOperacional` varchar(100) NOT NULL,
  `portaLocal` int(11) NOT NULL,
  `portaExterna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Estrutura da tabela `situacaomaquina`
--

CREATE TABLE `situacaomaquina` (
  `codSituacao` int(11) NOT NULL,
  `situacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





-- --------------------------------------------------------

--
-- Estrutura da tabela `tipomaquina`
--

CREATE TABLE `tipomaquina` (
  `codTipoMaquina` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `custofixo`
--
ALTER TABLE `custofixo`
  ADD PRIMARY KEY (`codCustoFixo`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codDepartamento`);

--
-- Índices para tabela `dvrs`
--
ALTER TABLE `dvrs`
  ADD PRIMARY KEY (`codDvr`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`codEmpresa`);

--
-- Índices para tabela `estadomaquina`
--
ALTER TABLE `estadomaquina`
  ADD PRIMARY KEY (`codEstadoMaquina`);

--
-- Índices para tabela `garantia`
--
ALTER TABLE `garantia`
  ADD PRIMARY KEY (`codGarantia`);

--
-- Índices para tabela `licenca`
--
ALTER TABLE `licenca`
  ADD PRIMARY KEY (`codLicenca`);

--
-- Índices para tabela `logmudanca`
--
ALTER TABLE `logmudanca`
  ADD PRIMARY KEY (`codMudanca`);

--
-- Índices para tabela `manutencao`
--
ALTER TABLE `manutencao`
  ADD PRIMARY KEY (`codManutencao`);

--
-- Índices para tabela `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`codMaquina`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`codMarca`);

--
-- Índices para tabela `roteadores`
--
ALTER TABLE `roteadores`
  ADD PRIMARY KEY (`codRoteador`);

--
-- Índices para tabela `servidores`
--
ALTER TABLE `servidores`
  ADD PRIMARY KEY (`codServidor`);

--
-- Índices para tabela `situacaomaquina`
--
ALTER TABLE `situacaomaquina`
  ADD PRIMARY KEY (`codSituacao`);

--
-- Índices para tabela `tipomaquina`
--
ALTER TABLE `tipomaquina`
  ADD PRIMARY KEY (`codTipoMaquina`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `custofixo`
--
ALTER TABLE `custofixo`
  MODIFY `codCustoFixo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `codDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `dvrs`
--
ALTER TABLE `dvrs`
  MODIFY `codDvr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `codEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `estadomaquina`
--
ALTER TABLE `estadomaquina`
  MODIFY `codEstadoMaquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `garantia`
--
ALTER TABLE `garantia`
  MODIFY `codGarantia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `licenca`
--
ALTER TABLE `licenca`
  MODIFY `codLicenca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `logmudanca`
--
ALTER TABLE `logmudanca`
  MODIFY `codMudanca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `manutencao`
--
ALTER TABLE `manutencao`
  MODIFY `codManutencao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `maquina`
--
ALTER TABLE `maquina`
  MODIFY `codMaquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `codMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `roteadores`
--
ALTER TABLE `roteadores`
  MODIFY `codRoteador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `servidores`
--
ALTER TABLE `servidores`
  MODIFY `codServidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `situacaomaquina`
--
ALTER TABLE `situacaomaquina`
  MODIFY `codSituacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tipomaquina`
--
ALTER TABLE `tipomaquina`
  MODIFY `codTipoMaquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
