-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2018 às 09:12
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gassx`
--



--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id`, `activo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, 'Masculino', '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(2, 1, 'Feminino', '2018-10-17 21:02:00', '2018-10-17 21:02:00');


--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` 
(`id`, `activo`, `numero`, `created_at`, `updated_at`) 
VALUES
(1, 1, '849993280', '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(2, 1, '857482730', '2018-10-17 21:02:00', '2018-10-17 21:02:00');


--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `activo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, 'Maputo', '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(2, 1, 'Beira', '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(3, 1, 'Gaza', '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(4, 1, 'Inhambane', '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(5, 1, 'Tete', '2018-10-17 21:02:00', '2018-10-17 21:02:00');


--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` 
(`id`, `activo`, `descricao`, `created_at`, `updated_at`) 
VALUES
(1, 1, 'categoria01', '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(2, 1, 'teatro', '2018-10-17 21:02:00', '2018-10-17 21:02:00');


--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `activo`, `descricao`, `objectivo`, `valorAContribuir`, `dataInicio`, `dataFim`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'churasco no Sitoe', 'Dar força a familia Sitoe pelo o acidente', 200, '2018-10-17', '2018-10-18', 1, '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(2, 1, 'evento 03', 'hmmmm, complicado. nem sei exatamente', 780, '2018-10-30', '2018-10-24', 1, '2018-10-17 21:02:00', '2018-10-17 21:02:00');


--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` 
(`id`, `activo`, `mensagem`, `likes`, `evento_id`, `created_at`, `updated_at`) 
VALUES
(1, 1, 'Posso participar para pagar mais tarde?', 0, 2, '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(2, 1, 'Gostei da iniciativa', 0, 1, '2018-10-18 12:00:00', '2018-10-17 21:02:00');


--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` 
(`id`, `activo`, `codigo`, `name`, `email`, `status`, `foto`, `saldo`, `username`, `email_verified_at`, `password`, `remember_token`, `contacto_id`, `genero_id`, `endereco_id`, `created_at`, `updated_at`) 
VALUES
(1, 1, '20189832', 'Lucilia Manjate', 'lucilia@gmail.com', 'ATIVO', NULL, 0, 'lucilia', '2018-10-17 12:00:00', '$2y$10$DZgaitAyCFNq3KxyytpQ6uhtbIaAeyukppgMqWa8elhOM4/CMliou', NULL, 2, 2, 4, '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(2, 1, '20189076', 'Alfredo sumbane', 'sumbane@gmail.com', 'ATIVO', NULL, 60533, 'sumbane', '2018-10-17 21:02:00', '$2y$10$DZgaitAyCFNq3KxyytpQ6uhtbIaAeyukppgMqWa8elhOM4/CMliou', NULL, 2, 1, 3, '2018-10-17 21:02:00', '2018-10-17 21:02:00'),
(3, 1, '20180975', NULL, 'lucilia1@gmail.com', 'ATIVO', NULL, 0, 'lucilia', NULL, '$2y$10$DZgaitAyCFNq3KxyytpQ6uhtbIaAeyukppgMqWa8elhOM4/CMliou', NULL, NULL, NULL, NULL, '2018-10-18 14:33:50', '2018-10-18 14:33:50');


--
-- Extraindo dados da tabela `evento_users`
--

INSERT INTO `evento_users` (`id`, `activo`, `user_id`, `evento_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2018-10-17 12:00:00', '2018-10-17 17:04:04'),
(2, 1, 3, 1, '2018-10-17 17:04:04', '2018-10-17 17:04:04');



--
-- Extraindo dados da tabela `acessos`
--
INSERT INTO `acessos` 
(`id`, `activo`, `dataEntrada`, `dataSaida`, `user_id`, `created_at`, `updated_at`) 
VALUES
(1, 1, '2018-10-04', '2018-10-24', 2, '2018-10-17 17:04:04', '2018-10-17 17:04:04');


--
-- Extraindo dados da tabela `recargas`
--

INSERT INTO `recargas` (`id`, `activo`, `valor`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5000, 3, '2018-10-17 12:00:00', '2018-10-24 12:00:00'),
(2, 1, 120, 1, '2018-10-23 12:00:00', '2018-10-24 12:00:00');



--
-- Extraindo dados da tabela `privilegios`
--

INSERT INTO `privilegios` (`id`, `activo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '2018-10-17 12:00:00', '2018-10-17 12:00:00'),
(2, 1, 'normal', '2018-10-17 17:04:04', '2018-10-17 17:04:04');



--
-- Extraindo dados da tabela `privilegio_users`
--

INSERT INTO `privilegio_users` 
(`id`, `activo`, `user_id`, `privilegio_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2018-10-17 17:04:04', NULL),
(2, 1, 1, 2, '2018-10-17 17:04:04', NULL),
(default, 1, 1, 1, '2018-10-17 17:04:04', NULL);

--
-- Extraindo dados da tabela `gasto_users`
--

INSERT INTO `gasto_users` (`id`, `ativo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(2, 1, 1, '2018-10-17 17:04:04', '2018-10-17 17:04:04');


--
-- Extraindo dados da tabela `dinheiros`
--

INSERT INTO `dinheiros` (`id`, `activo`, `valor`, `created_at`, `updated_at`) VALUES
(1, 1, 490, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(2, 1, 65, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(3, 1, 5843, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(4, 1, 987, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(5, 1, 78, '2018-10-17 17:04:04', '2018-10-17 17:04:04');


--
-- Extraindo dados da tabela `saidas`
--

INSERT INTO `saidas` (`id`, `activo`, `valor`, `dinheiro_id`, `created_at`, `updated_at`) VALUES
(3, 1, 953, 2, '2018-10-17 12:00:00', '2018-10-16 12:00:00'),
(4, 1, 3554, 4, '2018-10-11 12:00:00', '2018-10-18 12:00:00');


--
-- Extraindo dados da tabela `entradas`
--

INSERT INTO `entradas` (`id`, `activo`, `valor`, `dinheiro_id`, `created_at`, `updated_at`) VALUES
(1, 1, 734, 1, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(2, 1, 0, 5, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(3, 1, 7547, 1, '2018-10-17 17:04:04', NULL),
(4, 1, 874, 5, '2018-10-17 17:04:04', '2018-10-17 17:04:04');



--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id`, `activo`, `descricao`, `saida_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'xtique - recebimento', 3, '2018-10-23 12:00:00', NULL),
(2, 0, 'despesa02', 4, '2018-10-30 12:00:00', NULL),
(3, 1, 'despesa01', 3, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(4, 1, 'despesa02', 4, '2018-10-17 17:04:04', NULL);


--
-- Extraindo dados da tabela `despesa_users`
--

INSERT INTO `despesa_users` (`id`, `activo`, `user_id`, `despesa_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2018-10-17 12:00:00', NULL),
(2, 1, 1, 1, '2018-10-17 17:04:04', '2018-10-17 17:04:04');



--
-- Extraindo dados da tabela `contribuicaos`
--

INSERT INTO `contribuicaos` 
(`id`, `ativo`, `entrada_id`, `created_at`, `updated_at`)
 VALUES
(1, 1, 2, '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(2, 1, 3, '2018-10-17 17:04:04', NULL);




--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id`, `ativo`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-10-17 12:00:00', NULL),
(2, 1, '2018-10-17 17:04:04', NULL);


--
-- Extraindo dados da tabela `parceiro_contribuicaos`
--

INSERT INTO `parceiro_contribuicaos` (`id`, `activo`, `parceiro_id`, `contribuicao_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2018-10-17 17:04:04', NULL),
(2, 1, 2, 2, '2018-10-17 17:04:04', NULL),
(3, 1, 1, 1, '2018-10-17 12:00:00', NULL),
(4, 1, 1, 2, '2018-10-10 17:04:04', NULL);


--
-- Extraindo dados da tabela `contribuicao_eventos`
--

INSERT INTO `contribuicao_eventos` 
(`id`, `activo`, `evento_id`, `entrada_id`, `created_at`, `updated_at`) 
VALUES
(3, 1, 1, 4, '2018-10-17 12:00:00', NULL),
(4, 1, 2, 3, '2018-10-17 17:04:04', NULL);


--
-- Extraindo dados da tabela `parceiro_contribuicao_eventos`
--

INSERT INTO `parceiro_contribuicao_eventos` 
(`id`, `activo`, `parceito_id`, `contribuicao_evento_id`, `created_at`, `updated_at`) 
VALUES 
(NULL, '1', '2', '3', '2018-10-17 00:00:00', '2018-10-23 00:00:00'), 
(NULL, '1', '1', '3', '2018-10-17 00:00:00', NULL);


--
-- Extraindo dados da tabela `user_contribuicaos`
--

INSERT INTO `user_contribuicaos` 
(`id`, `activo`, `gasto_user_id`, `contribuicao_id`, `created_at`, `updated_at`) 
VALUES 
(NULL, '1', '1', '1', '2018-10-17 00:00:00', NULL), 
(NULL, '1', '2', '1', '2018-10-17 00:00:00', NULL);


--
-- Extraindo dados da tabela `user_contribuicao_eventos`
--

INSERT INTO `user_contribuicao_eventos` 
(`id`, `activo`, `gasto_user_id`, `contribuicao_evento_id`, `created_at`, `updated_at`) 
VALUES 
(NULL, '1', '2', '3', '2018-10-17 00:00:00', NULL), 
(NULL, '1', '1', '4', '2018-10-17 00:00:00', NULL);


--
-- Extraindo dados da tabela `despesa_eventos`
--

INSERT INTO `despesa_eventos` (`id`, `activo`, `contribuicao_evento_id`, `despesa_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 2, '2018-10-17 12:00:00', NULL),
(2, 1, 3, 1, '2018-10-18 12:00:00', '2018-10-31 12:00:00');


--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `activo`, `gasto_user_id`, `entrada_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2018-10-17 12:00:00', NULL),
(2, 1, 2, 3, '2018-10-17 17:04:04', NULL);


--
-- Extraindo dados da tabela `anos`
--

INSERT INTO `anos` 
(`id`, `ativo`, `ano`, `created_at`, `updated_at`) 
VALUES
(1, 1, 2010, '2018-10-17 12:00:00', '2018-10-18 12:00:00'),
(2, 1, 2011, '2018-10-17 21:02:00', '2018-10-25 12:00:00'),
(3, 1, 2010, '2018-10-17 17:04:04', NULL),
(4, 1, 2011, '2018-10-17 17:04:04', NULL),
(5, 1, 2012, '2018-10-17 17:04:04', NULL),
(6, 1, 2013, '2018-10-17 17:04:04', NULL),
(7, 1, 2014, '2018-10-17 17:04:04', NULL),
(8, 1, 2015, '2018-10-17 17:04:04', NULL),
(9, 1, 2016, '2018-10-17 17:04:04', NULL),
(10, 1, 2017, '2018-10-17 17:04:04', NULL),
(11, 1, 2018, '2018-10-17 17:04:04', NULL),
(12, 1, 2019, '2018-10-17 17:04:04', NULL);



--
-- Extraindo dados da tabela `mes`
--

INSERT INTO `mes` (`id`, `ativo`, `mes`, `created_at`, `updated_at`) VALUES
(1, 1, '', NULL, NULL),
(2, 1, 'Janeiro', '2018-10-17 17:04:04', NULL),
(3, 1, 'Fevereiro', '2018-10-17 17:04:04', NULL),
(4, 1, 'Março', '2018-10-17 17:04:04', NULL),
(5, 1, 'Abril', '2018-10-17 17:04:04', NULL),
(6, 1, 'Maio', '2018-10-17 17:04:04', NULL),
(7, 1, 'Abril', '2018-10-17 17:04:04', NULL),
(8, 1, 'Junho', '2018-10-17 17:04:04', NULL),
(9, 1, 'Julho', '2018-10-17 17:04:04', NULL),
(10, 1, 'Agosto', '2018-10-17 17:04:04', NULL),
(11, 1, 'Setembro', '2018-10-17 17:04:04', NULL),
(12, 1, 'Outubro', '2018-10-17 17:04:04', NULL),
(13, 1, 'Novembro', '2018-10-17 17:04:04', NULL),
(14, 1, 'Dezembro', NULL, NULL);



--
-- Extraindo dados da tabela `multas`
--

INSERT INTO `multas` (`id`, `ativo`, `dias`, `percentagem`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 0.1, '2018-10-17 12:00:00', NULL),
(default, 1, 0, 0, '2018-10-17 12:00:00', NULL),
(2, 1, 10, 0.2, '2018-10-17 17:04:04', NULL);



--
-- Extraindo dados da tabela `valor_quotas`
--

INSERT INTO `valor_quotas` (`id`, `ativo`, `valor`, `dataInicio`, `dataFim`, `created_at`, `updated_at`) VALUES
(1, 1, 250, '2018-10-17', '2019-03-20', '2018-10-17 17:04:04', '2018-10-17 17:04:04'),
(2, 1, 300, '2018-10-17', '2018-10-18', '2018-10-17 17:04:04', '2018-10-17 17:04:04');


--
-- Extraindo dados da tabela `quotas`
--

INSERT INTO `quotas` (`id`, `activo`, `mes_id`, `ano_id`, `multa_id`, `valor_quota_id`, `created_at`, `updated_at`) VALUES
(3, 1, 12, 1, 1, 1, '2018-10-17 12:00:00', NULL),
(4, 1, 10, 6, 2, 2, '2018-10-17 17:04:04', NULL);



--
-- Extraindo dados da tabela `quota_pagamentos`
--

INSERT INTO `quota_pagamentos` (`id`, `activo`, `pagamento_id`, `quota_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, '2018-10-17 17:04:04', NULL),
(2, 1, 2, 3, '2018-10-17 17:04:04', NULL);


--
-- Extraindo dados da tabela `utils`
--

INSERT INTO `utils` (`id`, `dataLimitePagamento`, `created_at`, `updated_at`) VALUES
(1, '2018-10-05', '2018-10-17 12:00:00', NULL);









COMMIT;
























/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
