-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 21/11/2018 às 15:16
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agendinha`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno_turma`
--

CREATE TABLE `aluno_turma` (
  `id_turma` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `data_saida` date DEFAULT NULL,
  `data_entrada` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `area_formacao`
--

CREATE TABLE `area_formacao` (
  `id_area` int(11) NOT NULL,
  `descricao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividade`
--

CREATE TABLE `atividade` (
  `id_atividade` int(11) NOT NULL,
  `nome_atividade` varchar(80) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `data_previsao` date DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL,
  `id_disciplina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atividade`
--

INSERT INTO `atividade` (`id_atividade`, `nome_atividade`, `data_cadastro`, `data_previsao`, `id_turma`, `id_disciplina`) VALUES
(1, 'pppppp', NULL, '2018-08-04', 1, NULL),
(2, 'pppp', NULL, '2018-10-04', 1, NULL),
(3, 'b nkkk', NULL, '2018-10-24', 0, NULL),
(4, 'b nkkk', NULL, '2018-10-24', 0, NULL),
(5, 'aaaaaaa', NULL, '2018-09-18', 0, NULL),
(6, 'rtrtr', NULL, '2018-11-07', 0, NULL),
(7, 'pegar diamante', NULL, '2018-11-14', 2, NULL),
(8, 'comer nahnahn', NULL, '2018-11-14', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `data_hora` date DEFAULT NULL,
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(80) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_atividade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `nome` varchar(50) DEFAULT NULL,
  `id_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `disciplina`
--

INSERT INTO `disciplina` (`nome`, `id_disciplina`) VALUES
('Química', 1),
('Física', 2),
('Matemática', 3),
('Português', 4),
('Produção Textual', 5),
('Historia ', 6),
('Geografia ', 7),
('Inglês ', 8),
('Espanhol ', 9),
('Sociologia ', 10),
('Filosofia ', 11),
('Educação Física ', 12),
('Artes ', 13),
('Biologia ', 14),
('Programação ', 15),
('Redes ', 16),
('Engenharia de Software', 17),
('Projeto Integrador ', 18),
('Logica de Programação  ', 19),
('Desenvolvimento Web ', 20),
('Banco de Dados ', 21),
('Multimídia ', 22),
('Fundamentos da Informatica ', 23),
('Hardware ', 24),
('Agroecologia ', 25),
('Pratica Profissional ', 26),
('Desenho téc. Const. Rurais ', 27),
('Zootecnia I', 28),
('Agricultura I', 29),
('Mecanização Agricola', 30),
('Zootecnia II', 31),
('Agricultura II', 32),
('Topografia ', 33),
('Defesa Fitossanitária ', 34),
('Irrigação e Drenagem ', 35),
('Produtos Agroindustriais ', 36),
('Agricultura III', 37),
('Zootecnia III', 38),
('Administração Rural ', 39),
('Química Geral ', 40),
('Química Inorgânica ', 41),
('Química Orgânica ', 42),
('Físico-Química ', 43),
('Química Inorgânica II ', 44),
('Operações Unitárias ', 45),
('Química Ambiental ', 46),
('Química Ambiental ', 47),
('Química Orgânica II', 48),
('Química Analítica Quantitativa ', 49),
('Físico-Química II', 50),
('Química Analítica Instrumental ', 51),
('Corrosão e Tratamento de Superfícies ', 52),
('Química Tecnologia ', 53),
('Gestão e Empreendedorismo ', 54),
('Tratamento de águas e afluentes ', 55);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas_curso`
--

CREATE TABLE `disciplinas_curso` (
  `id_disciplina` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `docentes_turma`
--

CREATE TABLE `docentes_turma` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `desc_usuario` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE `turma` (
  `ano` varchar(7) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `id_turma` int(11) NOT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `turma`
--

INSERT INTO `turma` (`ano`, `nome`, `id_turma`, `id_curso`) VALUES
('2016', '3info3', 1, NULL),
('2016', '3info2', 2, NULL),
('2016', '3info1', 3, NULL),
('2017', '2info1', 4, NULL),
('2017', '2info2', 5, NULL),
('2017', '2info3', 6, NULL),
('2018', '1info1', 7, NULL),
('2018', '1info2', 8, NULL),
('2018', '1info3', 9, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `num_matricula` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_tipo_usuario` int(11) DEFAULT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`username`, `nome`, `senha`, `id_usuario`, `num_matricula`, `email`, `id_area`, `id_tipo_usuario`, `id_turma`) VALUES
('heitor', 'heitor', 'heitor', 4, NULL, 'heitor@heior', NULL, NULL, 1),
('pedro', 'pedro', 'pedro', 5, NULL, 'pedro@pedro', NULL, NULL, 1),
('crizu', 'crizu', 'crizu', 6, NULL, 'crizu@rages', NULL, NULL, 2),
('mendes', 'mendes', 'mendes', 7, NULL, 'mendes@mendes', NULL, NULL, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD KEY `id_turma` (`id_turma`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `area_formacao`
--
ALTER TABLE `area_formacao`
  ADD PRIMARY KEY (`id_area`);

--
-- Índices de tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id_atividade`);

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_atividade` (`id_atividade`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Índices de tabela `disciplinas_curso`
--
ALTER TABLE `disciplinas_curso`
  ADD KEY `id_disciplina` (`id_disciplina`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices de tabela `docentes_turma`
--
ALTER TABLE `docentes_turma`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Índices de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`),
  ADD KEY `turma` (`id_turma`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `area_formacao`
--
ALTER TABLE `area_formacao`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id_atividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD CONSTRAINT `aluno_turma_ibfk_1` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `aluno_turma_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_atividade`) REFERENCES `atividade` (`id_atividade`);

--
-- Restrições para tabelas `disciplinas_curso`
--
ALTER TABLE `disciplinas_curso`
  ADD CONSTRAINT `disciplinas_curso_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`),
  ADD CONSTRAINT `disciplinas_curso_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Restrições para tabelas `docentes_turma`
--
ALTER TABLE `docentes_turma`
  ADD CONSTRAINT `docentes_turma_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `docentes_turma_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id_turma`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area_formacao` (`id_area`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
