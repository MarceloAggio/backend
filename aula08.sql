-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Mar-2023 às 01:31
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
-- Banco de dados: `aula08`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `titulo` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `genero` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`titulo`, `genero`, `ano`) VALUES
('Harry Potter 7 - Part 2', 'Aventura', 2011),
('Velozes e Furiosos 5', 'Ação', 2011),
('James Bond - 007 - Skyfall', 'Ação', 2012),
('As Crônicas de Nárnia', 'Aventura', 2010),
('Carros 2', 'Animação', 2011),
('UP', 'Animação', 2009),
('Vingadores', 'Ação', 2012),
('Gato de Botas 2', 'Animação', 2023),
('Avatar', 'Aventura', 2009),
('Coração de Tinta', 'Aventura', 2008),
('Lágoa Azul', 'Romance', 1991);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acessos`
--

CREATE TABLE `tbl_acessos` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `tipo_usuario` varchar(45) COLLATE utf8mb4_bin DEFAULT NULL,
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_acessos`
--

INSERT INTO `tbl_acessos` (`id`, `hash_usuario`, `usuario`, `senha`, `id_situacao`, `tipo_usuario`, `hash`) VALUES
(1, '0', 'marceloaggio10@gmail', NULL, 1, NULL, '$2b$06$188478fe3922b818cf007unYEtlUkL5d7V3RfDCdLvB4q2cN9c73K'),
(2, '0', 'marceloaggio10@gmail', NULL, 1, NULL, '$2b$06$188478fe3922b818cf007unYEtlUkL5d7V3RfDCdLvB4q2cN9c73K'),
(3, '0', 'marceloaggio10@gmail', NULL, 1, NULL, '$2b$06$188478fe3922b818cf007unYEtlUkL5d7V3RfDCdLvB4q2cN9c73K'),
(4, '0', 'diego@diego.com', NULL, 1, NULL, '$2b$06$dae14ca055e88ce175ac4e9lmYj4ozAdbbl8bt70o5BQbU4gjJj8S'),
(5, '0', 'diego1@diego.com', NULL, 1, NULL, '$2b$06$a570734bd9369b69d5bccevDSHqyJQ0tYXZoJfJmletjGMlJZRJd6'),
(6, '', 'm141241arc4121414el1', NULL, 1, NULL, '$2b$06$cb413ad3bf528dad83ca5uRSEOd59BM/I2aKb8QFOUz5HHgNtZI1.'),
(7, '<br />\r\n<b>Warning</b>:  Undefined array key \"parceiro\" in <b>C:xampphtdocsackendaula08completar-cadastro-parceiro.php<', 'marcaelin@marcelo.bo', NULL, 1, NULL, '$2b$06$6ccb1bbf2c30264fbec11uTkqnMiRNOgfKr.27r919BTahUCQ2lgm'),
(8, '<br />\r\n<b>Warning</b>:  Undefined array key \"id_parceiro\" in <b>C:xampphtdocsackendaula08completar-cadastro-parceiro.p', 'marceloaggio10@gmail', NULL, 1, NULL, '$2b$06$188478fe3922b818cf007unYEtlUkL5d7V3RfDCdLvB4q2cN9c73K'),
(9, '49c32bb53af1da5367f0c90c43a865260c41199e', 'marceloaggio10@gmail', NULL, 1, NULL, '$2b$06$188478fe3922b818cf007unYEtlUkL5d7V3RfDCdLvB4q2cN9c73K'),
(10, '9aa575c86635b5a1e02a39b32ff64dac23435d4d', 'marceloag2142141gio1', NULL, 1, NULL, '$2b$06$5c81130b73f9e9b626909enSAx.6ZknnUpOEJ0NVV7fcHjDAsUzXC'),
(11, '16161e6647ce25353faf06e8a1edad5617016c03', 'marceloaggiotasgasga', NULL, 1, NULL, '$2b$06$f1a9cb100a1760098cfc9ufvt76XG/Zon4zOW8df8ycu8226Pd8ey');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `visibilidade` char(1) COLLATE utf8mb4_bin NOT NULL,
  `id_situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`id`, `nome`, `img`, `slug`, `visibilidade`, `id_situacao`) VALUES
(1, 'padaria', 'https://img.freepik.com/fotos-gratis/diferentes-tipos-de-pao-feitos-de-farinha-de-trigo_140725-5648.jpg?w=996&t=st=1675899303~exp=1675899903~hmac=58e2ceb14406a22245e66bffa8ffe0d702914ba4e42dbcad0c3674b890d0ce76', 'Padocaaa', '', 1),
(2, 'Açougue', 'https://img.freepik.com/fotos-gratis/close-up-de-pedacos-de-bife-cru-guarnecido-com-sal-e-ervas_140725-4990.jpg?w=900&t=st=1676068027~exp=1676068627~hmac=4a924637c34da1b5e7abdc88779aed8668009bda7cc5763c9ca515d5269657eb', 'acougue', '', 1),
(9, 'farmacia', 'https://img.freepik.com/fotos-gratis/resumo-borrao-e-defocused-farmacia-e-farmacia_1203-9459.jpg?w=900&t=st=1675899241~exp=1675899841~hmac=e1ef61052974276e4fe48963602f9859faccc94e67f150473588dc598fae44f1', 'Farmacia', '', 1),
(10, 'Petshop', 'https://img.freepik.com/fotos-gratis/lindo-retrato-de-cachorro_23-2149218454.jpg?w=900&t=st=1676068462~exp=1676069062~hmac=1a5f8ac83bd5472aed38075122c507290e35d304063f77566a1ee7f676339f20', 'Petshop', '', 1),
(11, 'HortiFruit', 'https://img.freepik.com/fotos-gratis/barracas-de-frutas-frescas-no-mercado-de-san-miguel_53876-146829.jpg?w=900&t=st=1676068500~exp=1676069100~hmac=b10486faa08c6482dd46dfa6a4ba7c91794dc94f413d02dd0a6f8f84f40d8504', 'HortiFruit', '', 1),
(12, 'Peixes', 'https://img.freepik.com/fotos-gratis/peixe-cru-no-mercado_1398-2421.jpg?w=900&t=st=1676076758~exp=1676077358~hmac=60466d11c10558419f245e4378b1aa89ab6c6a06cb05461dae40b26eb19c90fc', 'Peixaria', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `sobrenome` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `newsletter` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `hashh` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `renda` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `nome`, `sobrenome`, `data_nasc`, `id_genero`, `newsletter`, `id_situacao`, `hashh`, `renda`) VALUES
(1, 'marcelo', 'AGGIO', '2113-02-01', 0, '1', 1, 'a4bfd34d3b6026dc77c8cd9a2cd9088e68d55c99', 1533),
(2, 'marcelo', 'AGGIO', '2222-02-01', 0, '1', 1, 'a4bfd34d3b6026dc77c8cd9a2cd9088e68d55c99', 1212),
(3, 'marcelo', 'AGGIO', '2222-02-01', 0, '1', 1, 'a4bfd34d3b6026dc77c8cd9a2cd9088e68d55c99', 5252),
(4, 'Diego', 'R', '1332-10-25', 0, '0', 1, '93d979c02d39e5c54f43149934c433863caaf53e', 5517),
(5, 'Diego1', 'R1', '1332-10-25', 0, '0', 1, '17c4bf92cbe58c5c82aca2f2e725572acd7884eb', 4538),
(6, 'pet', 'petshop Claudinho', '0000-00-00', 0, '1', 1, '17c4bf92cbe58c5c82aca2f2e725572acd7884eb', 5837);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos`
--

CREATE TABLE `tbl_contatos` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_contatos`
--

INSERT INTO `tbl_contatos` (`id`, `hash_usuario`, `numero`, `id_situacao`) VALUES
(1, '0', 2147483647, NULL),
(2, '0', 2147483647, NULL),
(3, '0', 2147483647, NULL),
(4, '0', 2147483647, NULL),
(5, '0', 2147483647, NULL),
(6, '', 2147483647, NULL),
(7, '<br />\r\n<b>Warning</b>:  Undefined array key \"parceiro\" in <b>C:xampphtdocsackendaula08completar-cadastro-parceiro.php<', 2147483647, NULL),
(8, '<br />\r\n<b>Warning</b>:  Undefined array key \"id_parceiro\" in <b>C:xampphtdocsackendaula08completar-cadastro-parceiro.p', 2147483647, NULL),
(9, '49c32bb53af1da5367f0c90c43a865260c41199e', 2147483647, NULL),
(10, '9aa575c86635b5a1e02a39b32ff64dac23435d4d', 2147483647, NULL),
(11, '16161e6647ce25353faf06e8a1edad5617016c03', 2147483647, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos_emails`
--

CREATE TABLE `tbl_contatos_emails` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_contatos_emails`
--

INSERT INTO `tbl_contatos_emails` (`id`, `hash_usuario`, `email`, `id_situacao`) VALUES
(1, '16161e6647ce25353faf06e8a1edad5617016c03', 'marceloaggiotasgasga10@gmail.c', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_docs`
--

CREATE TABLE `tbl_docs` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_tipo_documento` int(11) DEFAULT NULL,
  `documento` char(14) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_docs`
--

INSERT INTO `tbl_docs` (`id`, `hash_usuario`, `id_tipo_documento`, `documento`, `id_situacao`) VALUES
(1, '', 1, '14224124124', 1),
(2, '', 1, '14224124124', 1),
(3, '<br />\r\n<b>Warning</b>:  Undefined array key \"parceiro\" in <b>C:xampphtdocsackendaula08completar-cadastro-parceiro.php<', 1, '123456789', 1),
(4, '<br />\r\n<b>Warning</b>:  Undefined array key \"id_parceiro\" in <b>C:xampphtdocsackendaula08completar-cadastro-parceiro.p', 1, '142151251', 1),
(5, '49c32bb53af1da5367f0c90c43a865260c41199e', 1, '14224124124', 1),
(6, '9aa575c86635b5a1e02a39b32ff64dac23435d4d', 1, '21313231', 1),
(7, '16161e6647ce25353faf06e8a1edad5617016c03', 1, '14224124124', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_generos`
--

CREATE TABLE `tbl_generos` (
  `id` int(11) NOT NULL,
  `genero` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_generos`
--

INSERT INTO `tbl_generos` (`id`, `genero`) VALUES
(1, 'masculino'),
(2, 'feminino'),
(3, 'Alfa'),
(4, 'Alfa'),
(5, 'Alfa'),
(6, 'Teste'),
(9, 'Pedro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_parceiros`
--

CREATE TABLE `tbl_parceiros` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `nome_fantasia` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `ie` int(11) DEFAULT NULL,
  `im` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `hash` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_parceiros`
--

INSERT INTO `tbl_parceiros` (`id`, `razao_social`, `nome_fantasia`, `ie`, `im`, `id_situacao`, `hash`) VALUES
(1, 'Vendas', 'Vendinha do Marcelin', 123456789, 252624, 1, '16161e6647ce25353faf06e8a1edad5617016c03'),
(2, 'pet', 'petshop Claudinho', 1234, 4321, 1, '16161e6647ce25353faf06e8a1edad5617016c03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_situacao`
--

CREATE TABLE `tbl_situacao` (
  `id` int(11) NOT NULL,
  `situacao` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_situacao`
--

INSERT INTO `tbl_situacao` (`id`, `situacao`) VALUES
(1, 'ativo'),
(2, 'inativo'),
(3, 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_docs`
--

CREATE TABLE `tbl_tipo_docs` (
  `id` int(11) NOT NULL,
  `tipo_doc` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_tipo_docs`
--

INSERT INTO `tbl_tipo_docs` (`id`, `tipo_doc`) VALUES
(1, 'cpf'),
(2, 'rg'),
(3, 'cnpj');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_acessos`
--
ALTER TABLE `tbl_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_contatos_emails`
--
ALTER TABLE `tbl_contatos_emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_docs`
--
ALTER TABLE `tbl_docs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_generos`
--
ALTER TABLE `tbl_generos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_parceiros`
--
ALTER TABLE `tbl_parceiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_situacao`
--
ALTER TABLE `tbl_situacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_tipo_docs`
--
ALTER TABLE `tbl_tipo_docs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_acessos`
--
ALTER TABLE `tbl_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbl_contatos_emails`
--
ALTER TABLE `tbl_contatos_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_docs`
--
ALTER TABLE `tbl_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbl_generos`
--
ALTER TABLE `tbl_generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbl_parceiros`
--
ALTER TABLE `tbl_parceiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbl_situacao`
--
ALTER TABLE `tbl_situacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbl_tipo_docs`
--
ALTER TABLE `tbl_tipo_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
