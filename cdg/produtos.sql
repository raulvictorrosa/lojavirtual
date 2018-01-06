-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 18/11/2013 às 12:33
-- Versão do servidor: 5.5.32
-- Versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `produtos`
--
CREATE DATABASE IF NOT EXISTS `produtos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `produtos`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(11, 'Audio'),
(13, 'Componentes e Placas'),
(14, 'Conectividade'),
(15, 'Disco Rigido'),
(16, 'Energia'),
(17, 'Gabinetes'),
(18, 'Monitores'),
(19, 'Impressao'),
(20, 'Perifericos e Acessorios');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `nome` varchar(45) NOT NULL,
  `codigo` int(10) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(45) NOT NULL,
  `componentes` text NOT NULL,
  `categoria` int(10) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `codigo`, `preco`, `descricao`, `foto`, `componentes`, `categoria`, `id`) VALUES
('Seagate Barracuda 7200.14 ST1000DM003 1024 GB', 1, '239.40', 'Armazenamento: HDD\r\nEquipamento Compatível: PC', '1382318689802.jpg', '', 15, 2),
('Home Theater Sony BDV-E2100', 2, '999.00', '', '1382318681611.jpg', '', 11, 3),
('Kingston KVR1333D3N9 8192 MB PC DDR3 1333 MHz', 3, '252.28', 'Número de Pinos: 240', '1382318881404.jpg', '', 13, 4),
('Placa PCI Wireless-N 300Mbps - Encore ENLWI N', 4, '299.00', 'Conecte facilmente seu computador com a placa PCI Card Wireless-N, sem o custo e problemas dos cabos de rede e com a velocidade de ate 300 Mbps, compatível com os padrões 802.11b e IEEE 802.11g. Uma vez conectado, você pode acessar a internet, usar mensagens instantaneas para conversar com seus amigos, compartilhar arquivos com outros computadores da sua rede, e outros recursos, como impressoras.', '1382319047810.jpg', '', 14, 5),
('FONTE ATX 20/24 PINOS', 5, '34.71', '', '138231945433.jpg', '', 16, 6),
('GABINETE COOLER MASTER HAF 912 PLUS - RC-912P', 6, '294.45', '', '138231958464.jpg', '', 17, 7),
('LG 29MN33D LED 29 Polegadas', 7, '791.21', 'Tipo de Conexão: D-Sub, HDMI, USB, Vídeo Componente, Vídeo Composto', '1382319703256.jpg', '', 18, 8),
('Multifuncional Epson L355 Jato de Tinta', 8, '675.00', 'Funções: Cópia, Digitalização, Impressão\r\nTipo de Impressão: Colorida\r\nCapacidade de Folhas: 100 folhas', '1382319817434.jpg', '', 19, 9),
('Microsoft 200 JUD Óptico', 9, '27.96', 'Tipo: Fio\r\nDispositivo: Padrão\r\nConexão: USB', '1382319899477.jpg', '', 20, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
