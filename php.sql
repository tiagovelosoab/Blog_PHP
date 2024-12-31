-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31/12/2024 às 16:55
-- Versão do servidor: 8.0.37
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `php`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `apresentacao`
--

DROP TABLE IF EXISTS `apresentacao`;
CREATE TABLE IF NOT EXISTS `apresentacao` (
  `autor` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  `alt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `apresentacao`
--

INSERT INTO `apresentacao` (`autor`, `descricao`, `img`, `alt`) VALUES
('Tiago Veloso', 'Apenas eu, eu e eu mesmo, explorando o universo do conhecimento. Tenho interesse em todo tipo de coisa, e quero compartilhar minhas ideias.', 'selfie.jpg', 'Foto do autor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`codigo`, `categoria`) VALUES
(1, 'Todas'),
(2, 'Viagens'),
(3, 'Esportes'),
(4, 'Política'),
(5, 'Família'),
(6, 'Games');

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `texto` varchar(3000) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `comentarios` int NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `postagem`
--

INSERT INTO `postagem` (`codigo`, `titulo`, `subtitulo`, `img`, `data`, `texto`, `alt`, `comentarios`) VALUES
(1, 'Games', 'O mundo virtual está cada vez mais real!', 'https://www.w3schools.com/w3images/woods.jpg', '2024-08-08', 'Cada vez mais novas tecnologias estão a melhorar a capacidade dos games. Estão a se transformar em verdadeiras obras de arte. Muitas vezes fica difícil distinguir o real do virtual. Os últimos lançamentos de...', 'Natureza', 0),
(2, 'Guartelá', 'Um passeio inesquecível', 'https://www.w3schools.com/w3images/bridge.jpg', '2024-08-08', 'Cânion Guartelá é um cânion brasileiro situado no planalto dos Campos Gerais, entre os municípios de Castro e Tibagi, no Paraná. É considerado o sexto maior cânion do mundo em extensão e o mais longo do Brasil. O Cânion do Guartelá é uma garganta retilínea com cerca de 30 km de extensão e desnível máximo de 450 metros. Foi escavado pelo Rio Iapó, que...', 'Natureza', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `top5`
--

DROP TABLE IF EXISTS `top5`;
CREATE TABLE IF NOT EXISTS `top5` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `comentarios` int NOT NULL,
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `top5`
--

INSERT INTO `top5` (`codigo`, `titulo`, `comentarios`, `img`) VALUES
(1, '10 motivos para aprender html+w3.css', 142, 'https://www.w3schools.com/w3images/workshop.jpg'),
(2, 'Experiência em gravidade zero', 10, 'https://www.w3schools.com/w3images/workshop.jpg'),
(3, 'Como morar sozinho', 7, 'https://www.w3schools.com/w3images/gondol.jpg'),
(4, 'Melhores músicas anos 90', 3, 'https://www.w3schools.com/w3images/skies.jpg'),
(5, 'O que fazer num sábado chuvoso', 2, 'https://www.w3schools.com/w3images/rock.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
