-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.13 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para cinema
DROP DATABASE IF EXISTS `cinema`;
CREATE DATABASE IF NOT EXISTS `cinema` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `cinema`;

-- Copiando estrutura para tabela cinema.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cinema.ci_sessions: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('1pscl79btpcnelpf5kafj23fa0l357fa', '127.0.0.1', 1561675748, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313637353734383B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('92ag58931vlvlh3jl9q7b04q402gbqk9', '127.0.0.1', 1561678975, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313637383937353B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('lmjflp84vv4jcjch0kg0parvcd0ep4l7', '127.0.0.1', 1561680630, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638303633303B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('e9sg3mhhl814stmtgi72i4v2fr43beum', '127.0.0.1', 1561681434, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638313433343B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('j52lheli0v4n89t52ocit2mhqr7idqg5', '127.0.0.1', 1561680944, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638303934333B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('0aoa19t5ontn5ielqn4l2re4ci4t2mjg', '127.0.0.1', 1561681747, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638313734373B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('12oglrhf1oruam1bu06j84fkuuq7eqcl', '127.0.0.1', 1561682362, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638323336323B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('bc0hs568cuc90gqpb3f5ficl9uvkfmvh', '127.0.0.1', 1561682665, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638323636353B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('kfb19e59et2324epdoedeo6aobahjd9j', '127.0.0.1', 1561683001, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638333030313B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B6D656E736167656D7C733A34333A223C703E596F7520646964206E6F742073656C65637420612066696C6520746F2075706C6F61642E3C2F703E223B5F5F63695F766172737C613A313A7B733A383A226D656E736167656D223B733A333A226F6C64223B7D),
	('dat9rnd2kpfdedsdjtr7gsmo5iihvula', '127.0.0.1', 1561683317, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638333331373B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B),
	('qf1fj5319likcen0dduf7kn16oj59u43', '127.0.0.1', 1561683318, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536313638333331373B69645573756172696F7C733A323A223137223B656D61696C7C733A32323A2272616661656C5F736D6F406F75746C6F6F6B2E636F6D223B6C6F6761646F7C623A313B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela cinema.tb_cliente
DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `sexo` varchar(25) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cinema.tb_cliente: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` (`id_cliente`, `nome`, `sobrenome`, `CPF`, `sexo`, `endereco`, `estado`, `cidade`, `telefone`, `email`, `nascimento`) VALUES
	(14, 'rafael', 'Pelé', '111.111.111-12', 'Masculino', 'Bairro Andretta,Rua Goias, n° 336', 'Santa Catarina', 'São Miguel do Oeste', '(049) 9941-6700', 'admin@senac.br', '2019-06-21');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela cinema.tb_filme
DROP TABLE IF EXISTS `tb_filme`;
CREATE TABLE IF NOT EXISTS `tb_filme` (
  `id_filme` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nome` varchar(50) DEFAULT NULL,
  `sp_sinopse` varchar(200) DEFAULT NULL,
  `tx_duracao` text,
  `tx_companhia` varchar(70) DEFAULT NULL,
  `tx_genero` varchar(100) DEFAULT NULL,
  `tx_status` varchar(70) DEFAULT NULL,
  `tx_diretor` varchar(70) DEFAULT NULL,
  `atores` varchar(150) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `classificacao` varchar(50) DEFAULT NULL,
  `trailer` varchar(150) NOT NULL,
  PRIMARY KEY (`id_filme`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cinema.tb_filme: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_filme` DISABLE KEYS */;
INSERT INTO `tb_filme` (`id_filme`, `tx_nome`, `sp_sinopse`, `tx_duracao`, `tx_companhia`, `tx_genero`, `tx_status`, `tx_diretor`, `atores`, `imagem`, `classificacao`, `trailer`) VALUES
	(10, 'Peixonauta', 'A série fala de Peixonauta, um peixe dentro de um traje similar ao de um astronauta que o permite voar e respirar fora d\'água. Ele é um detetive profissional que junto aos seus amigos (Marina e Zico),', '120min', 'Discovery Kids América Latina', ' Ciência Infantil Ecologia', 'Em Breve', 'Fábio Lucindo  Fernanda Bullara  Celso Alves  Renato Márcio  Rogério V', '', '9e6c2322eafa239a3d9f65365e8fe9d0.png', '12 anos', 'https://www.youtube.com/watch?v=cSGRMT2KsOo');
/*!40000 ALTER TABLE `tb_filme` ENABLE KEYS */;

-- Copiando estrutura para tabela cinema.tb_funcionario
DROP TABLE IF EXISTS `tb_funcionario`;
CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nome` varchar(60) DEFAULT NULL,
  `sr_salario` varchar(50) DEFAULT NULL,
  `tx_periodo` varchar(60) NOT NULL DEFAULT '0',
  `tx_horario` time NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cinema.tb_funcionario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_funcionario` DISABLE KEYS */;
INSERT INTO `tb_funcionario` (`id_funcionario`, `tx_nome`, `sr_salario`, `tx_periodo`, `tx_horario`) VALUES
	(15, 'Rafael', '1.200', 'Vespertino', '05:00:00'),
	(16, 'Jerson', '1.200', 'Vespertino', '04:00:00');
/*!40000 ALTER TABLE `tb_funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela cinema.tb_ingresso
DROP TABLE IF EXISTS `tb_ingresso`;
CREATE TABLE IF NOT EXISTS `tb_ingresso` (
  `id_ingresso` int(11) NOT NULL AUTO_INCREMENT,
  `tx_status` varchar(50) DEFAULT NULL,
  `vl_ingresso` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_ingresso`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cinema.tb_ingresso: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_ingresso` DISABLE KEYS */;
INSERT INTO `tb_ingresso` (`id_ingresso`, `tx_status`, `vl_ingresso`) VALUES
	(26, 'Meia Entrada - 2D', '12 reais');
/*!40000 ALTER TABLE `tb_ingresso` ENABLE KEYS */;

-- Copiando estrutura para tabela cinema.tb_ingressocliente
DROP TABLE IF EXISTS `tb_ingressocliente`;
CREATE TABLE IF NOT EXISTS `tb_ingressocliente` (
  `id_ingressocliente` int(11) NOT NULL AUTO_INCREMENT,
  `cd_filme` int(11) NOT NULL DEFAULT '0',
  `cd_cliente` int(11) DEFAULT '0',
  `cd_status` int(11) NOT NULL DEFAULT '0',
  `cd_ingresso` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_ingressocliente`),
  KEY `CodigoFilme` (`cd_filme`),
  KEY `CodigoCliente` (`cd_cliente`),
  KEY `CodigoStatus` (`cd_status`),
  KEY `CodigoIngresso` (`cd_ingresso`),
  CONSTRAINT `CodigoCliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`id_cliente`),
  CONSTRAINT `CodigoFilme` FOREIGN KEY (`cd_filme`) REFERENCES `tb_filme` (`id_filme`),
  CONSTRAINT `CodigoIngresso` FOREIGN KEY (`cd_ingresso`) REFERENCES `tb_ingresso` (`id_ingresso`),
  CONSTRAINT `CodigoStatus` FOREIGN KEY (`cd_status`) REFERENCES `tb_status` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cinema.tb_ingressocliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_ingressocliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ingressocliente` ENABLE KEYS */;

-- Copiando estrutura para tabela cinema.tb_promocao
DROP TABLE IF EXISTS `tb_promocao`;
CREATE TABLE IF NOT EXISTS `tb_promocao` (
  `id_promocao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(250) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_promocao`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cinema.tb_promocao: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_promocao` DISABLE KEYS */;
INSERT INTO `tb_promocao` (`id_promocao`, `descricao`, `imagem`) VALUES
	(7, NULL, '0281bef5b2e248ae16ba30623471e35b.jpg');
/*!40000 ALTER TABLE `tb_promocao` ENABLE KEYS */;

-- Copiando estrutura para tabela cinema.tb_usuario
DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela cinema.tb_usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`id_usuario`, `nome`, `email`, `senha`) VALUES
	(16, 'Chi Deus Dos Deuses', 'admin@senac.br', '09b4f30bf784d1d9bbbe33a0a829901f4671f2d8'),
	(17, 'Chi Deus Dos Deuses', 'rafael_smo@outlook.com', '09b4f30bf784d1d9bbbe33a0a829901f4671f2d8');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
