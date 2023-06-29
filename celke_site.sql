-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 29/06/2023 às 12:32
-- Versão do servidor: 5.7.26
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke_site`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_abouts_companies`
--

CREATE TABLE `sts_abouts_companies` (
  `id` int(11) NOT NULL,
  `title` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts_situation_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_abouts_companies`
--

INSERT INTO `sts_abouts_companies` (`id`, `title`, `description`, `image`, `sts_situation_id`, `created`, `modified`) VALUES
(1, 'Sobre Empresa titulo 1', 'Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1', 'premium_v5.jpg', 1, '2023-06-28 08:57:37', NULL),
(2, 'What is Lorem Ipsum? 2\r\n ', 'm has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets ', 'premium_v5.jpg', 3, '2023-06-28 08:59:08', NULL),
(3, 'What is Lorem Ipsum? 3', 'ere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem I', 'premium_v5.jpg', 2, '2023-06-28 08:59:08', NULL),
(4, 'Sobre Empresa titulo 4', 'Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1Sobre Empresa titulo 1', 'premium_v5.jpg', 1, '2023-06-28 08:57:37', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_contact_msgs`
--

CREATE TABLE `sts_contact_msgs` (
  `id` int(11) NOT NULL,
  `name` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_contact_msgs`
--

INSERT INTO `sts_contact_msgs` (`id`, `name`, `email`, `subject`, `content`, `created`, `modified`) VALUES
(1, '', '', '', '                        ', '2023-06-29 07:44:45', NULL),
(2, '', '', '', '                        ', '2023-06-29 07:45:22', NULL),
(3, '', '', '', '                        ', '2023-06-29 07:45:26', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_contents_contacts`
--

CREATE TABLE `sts_contents_contacts` (
  `id` int(11) NOT NULL,
  `title_contact` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_company` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_company` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_company` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_address` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_address` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_form` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_contents_contacts`
--

INSERT INTO `sts_contents_contacts` (`id`, `title_contact`, `desc_contact`, `icon_company`, `title_company`, `desc_company`, `icon_address`, `title_address`, `desc_address`, `icon_email`, `title_email`, `desc_email`, `title_form`, `created`, `modified`) VALUES
(1, 'Contato', 'Mauris volutpat arcu eu mi volutpat fermentum. Aenean vel dignissim orci. Vestibulum mollis elit vel tellus viverra dictum.', 'fa-solid fa-user', 'Empresa\nTI', 'Leandro\nCompany', 'fa-solid fa-location-dot', 'Endereço\nda Empresa', '                                Avenida Wilson tavares 900\n', 'fa-solid fa-envelope', 'E-mail para contato', '                                leandrocontac@leandro.com.br\n', 'Mensagem para Contato\n', '2023-06-29 10:50:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_footers`
--

CREATE TABLE `sts_footers` (
  `id` int(11) NOT NULL,
  `footer_desc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_text_link` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_link` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_footers`
--

INSERT INTO `sts_footers` (`id`, `footer_desc`, `footer_text_link`, `footer_link`, `created`, `modified`) VALUES
(1, 'Created By', 'Leandro', 'http://localhost/site/', '2023-06-28 16:38:45', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_homes_premiums`
--

CREATE TABLE `sts_homes_premiums` (
  `id` int(11) NOT NULL,
  `prem_title` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prem_subtitle` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prem_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prem_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prem_btn_text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prem_btn_link` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_homes_premiums`
--

INSERT INTO `sts_homes_premiums` (`id`, `prem_title`, `prem_subtitle`, `prem_desc`, `prem_image`, `prem_btn_text`, `prem_btn_link`, `created`, `modified`) VALUES
(1, 'Servico Premium', 'Desenvolvido para você atingir seus melhores índices de produtividade, criatividade e bem-estar.', 'Ut tempus dui in fringilla consequat. Donec accumsan feugiat venenatis. Vestibulum blandit lectus nec lacus tincidunt tempus. Praesent porta erat non ligula egestas, eget imperdiet justo egestas. Pellentesque cursus risus nec leo tincidunt fringilla. Suspendisse faucibus aliquam vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris volutpat arcu eu mi volutpat fermentum. Aenean vel dignissim orci. Vestibulum mollis elit vel tellus viverra dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus a mattis sem. Cras aliquam fermentum viverra.', 'premium_v5.jpg', 'Contato', 'http://localhost/site/contato', '2023-06-28 16:21:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_homes_services`
--

CREATE TABLE `sts_homes_services` (
  `id` int(11) NOT NULL,
  `serv_title` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_icon_one` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_title_one` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_desc_one` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_icon_two` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_title_two` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_desc_two` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_icon_three` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_title_three` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_desc_three` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_homes_services`
--

INSERT INTO `sts_homes_services` (`id`, `serv_title`, `serv_icon_one`, `serv_title_one`, `serv_desc_one`, `serv_icon_two`, `serv_title_two`, `serv_desc_two`, `serv_icon_three`, `serv_title_three`, `serv_desc_three`, `created`, `modified`) VALUES
(1, 'Servico', 'fa-solid fa-wifi', 'Wifi veloz', 'Sed et dui in ipsum sollicitudin efficitur quis sed elit volutpat wifi', 'fa-solid fa-rocket', 'Espaco inspirador', 'Sed et dui in ipsum sollicitudin efficitur quis sed elit volutpat espaço', 'fa-solid fa-handshake', 'Reuniões', 'Sed et dui in ipsum sollicitudin efficitur quis sed elit volutpat reunioes', '2023-06-28 10:33:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_homes_tops`
--

CREATE TABLE `sts_homes_tops` (
  `id` int(11) NOT NULL,
  `title_one_top` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two_top` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_three_top` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_btn_top` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_btn_top` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_top` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_homes_tops`
--

INSERT INTO `sts_homes_tops` (`id`, `title_one_top`, `title_two_top`, `title_three_top`, `link_btn_top`, `txt_btn_top`, `image_top`, `created`, `modified`) VALUES
(1, 'Temos a solucao', 'que sua empresa precisa', 'Podemos ajudar a sua empresa!', 'http:://localhost/site/contato', 'Entre em Contato', 'banner_top_v5.jpg', '2023-06-24 18:25:34', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sts_situations`
--

CREATE TABLE `sts_situations` (
  `id` int(11) NOT NULL,
  `name` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sts_situations`
--

INSERT INTO `sts_situations` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Ativo', '2023-06-28 08:55:12', NULL),
(2, 'Inativo', '2023-06-28 08:55:12', NULL),
(3, 'Analise', '2023-06-28 08:55:12', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sts_abouts_companies`
--
ALTER TABLE `sts_abouts_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sts_situation_id` (`sts_situation_id`);

--
-- Índices de tabela `sts_contact_msgs`
--
ALTER TABLE `sts_contact_msgs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sts_contents_contacts`
--
ALTER TABLE `sts_contents_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sts_footers`
--
ALTER TABLE `sts_footers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sts_homes_premiums`
--
ALTER TABLE `sts_homes_premiums`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sts_homes_services`
--
ALTER TABLE `sts_homes_services`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sts_homes_tops`
--
ALTER TABLE `sts_homes_tops`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sts_situations`
--
ALTER TABLE `sts_situations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sts_abouts_companies`
--
ALTER TABLE `sts_abouts_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `sts_contact_msgs`
--
ALTER TABLE `sts_contact_msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sts_contents_contacts`
--
ALTER TABLE `sts_contents_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sts_footers`
--
ALTER TABLE `sts_footers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sts_homes_premiums`
--
ALTER TABLE `sts_homes_premiums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sts_homes_services`
--
ALTER TABLE `sts_homes_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sts_homes_tops`
--
ALTER TABLE `sts_homes_tops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sts_situations`
--
ALTER TABLE `sts_situations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `sts_abouts_companies`
--
ALTER TABLE `sts_abouts_companies`
  ADD CONSTRAINT `sts_abouts_companies_ibfk_1` FOREIGN KEY (`sts_situation_id`) REFERENCES `sts_situations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
