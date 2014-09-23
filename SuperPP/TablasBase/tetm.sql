-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-03:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `distribuidores`;
CREATE TABLE `distribuidores` (
  `id_distribuidor` int(11) NOT NULL AUTO_INCREMENT,
  `distribuidor` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_distribuidor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `distribuidores` (`id_distribuidor`, `distribuidor`) VALUES
(1,	'Butterfly'),
(2,	'DHS'),
(3,	'Donic');

DROP TABLE IF EXISTS `gomas`;
CREATE TABLE `gomas` (
  `id_goma` int(11) NOT NULL AUTO_INCREMENT,
  `id_distribuidor` int(11) NOT NULL,
  `nombre` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `esponja` decimal(10,0) NOT NULL,
  `dureza` int(11) NOT NULL,
  `tipo_juego` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `velocidad` int(11) NOT NULL,
  `efecto` int(11) NOT NULL,
  PRIMARY KEY (`id_goma`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `gomas` (`id_goma`, `id_distribuidor`, `nombre`, `esponja`, `dureza`, `tipo_juego`, `velocidad`, `efecto`) VALUES
(1,	1,	'Bryce Speed',	2,	33,	'OFF+	',	10,	0),
(2,	1,	'Sriver G3',	2,	34,	'OFF-	',	14,	3),
(3,	1,	'Tenergy 64',	2,	30,	'OFF-	',	14,	5),
(4,	1,	'Tenergy 05',	2,	45,	'OFF+	',	15,	6),
(5,	1,	'Catapult',	2,	33,	'OFF',	20,	9),
(6,	1,	'Sriver-L',	2,	33,	'OFF+	',	12,	5),
(7,	1,	'Flextra',	2,	23,	'OFF+	',	40,	5),
(8,	1,	'Flarestorm',	2,	42,	'OFF-	',	22,	2),
(11,	2,	'Hurricane 3 NEO',	2,	33,	'OFF+	',	12,	10),
(12,	2,	'651',	2,	0,	'cortos',	11,	12),
(13,	2,	'653',	2,	38,	'cortos',	9,	6),
(14,	2,	'C7',	1,	40,	'largos',	5,	4),
(15,	2,	'C8 OX',	0,	0,	'largos',	4,	5),
(16,	2,	'Cloud & Fog 3',	1,	40,	'largos',	5,	4),
(17,	1,	'Barracuda XS',	2,	33,	'OFF+',	10,	2),
(18,	2,	'Waldner Classic',	2,	30,	'OFF',	15,	5),
(19,	2,	'Hurricane NEO	',	2,	33,	'OFF+',	8,	2),
(20,	2,	'Hurricane FLEX	',	2,	30,	'OFF-',	10,	3);

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `id_jugador` int(11) NOT NULL,
  `ruta` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_imagen`),
  KEY `id_gral` (`id_jugador`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `imagenes` (`id_imagen`, `id_jugador`, `ruta`) VALUES
(1,	1,	'images/jugadores_mundiales/1-MaLong/MaLong.jpg'),
(3,	2,	'images/jugadores_mundiales/2-WangHao/WangHao.jpg'),
(4,	3,	'images/jugadores_mundiales/3-MaLin/MaLin.jpg'),
(5,	4,	'images/jugadores_mundiales/4-TimoBoll/TimoBoll.jpg'),
(6,	5,	'images/jugadores_mundiales/5-LiquinWang/LiquinWang.jpg '),
(7,	6,	'images/jugadores_mundiales/6-VladimirSamsonov/VladimirSamsonov.jpg'),
(8,	7,	'images/jugadores_mundiales/7-HaoShuai/HaoShuai.jpg '),
(9,	8,	'images/jugadores_mundiales/8-MazeMichael/MazeMichael.jpg '),
(10,	9,	'images/jugadores_mundiales/9-ChenQi/ChenQi.jpg '),
(11,	10,	'images/jugadores_nacionales/DiegoMartínTemperley.jpg'),
(12,	11,	'images/jugadores_nacionales/SebastiánMoavro.jpg'),
(13,	12,	'images/jugadores_nacionales/LucasBayona.jpg'),
(14,	13,	'images/jugadores_nacionales/ArielTeplitzky.jpg'),
(15,	14,	'images/jugadores_nacionales/JuanPabloRemon.jpg'),
(16,	15,	'images/jugadores_nacionales/JuanPabloGarcíaSalgado.jpg'),
(17,	16,	'images/jugadores_nacionales/PabloSaragovi.jpg'),
(18,	17,	'images/jugadores_nacionales/GonzaloBarak.jpg'),
(19,	18,	'images/jugadores_nacionales/DiegoAlejandroTeplitzky.jpg');

DROP TABLE IF EXISTS `informacion_personal`;
CREATE TABLE `informacion_personal` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `id_jugador` int(11) NOT NULL,
  `tipo_jugador` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `altura` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `peso` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `agarre` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `equipamiento` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `ranking` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `inicios` int(11) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `informacion_personal` (`id_info`, `id_jugador`, `tipo_jugador`, `nacionalidad`, `fecha_nacimiento`, `altura`, `peso`, `agarre`, `equipamiento`, `ranking`, `inicios`) VALUES
(1,	1,	'Mundial',	'China',	'1988-08-03',	'176',	'70 ',	'Clásico',	'DHS',	'1',	2002),
(2,	2,	'Mundial',	'China',	'1983-12-15',	'170',	'68 ',	'Lapicero',	'DHS',	'2',	1994),
(3,	3,	'Mundial',	'China',	'1980-02-19',	'174',	'73',	'Lapicero',	'DHS',	'3',	1991),
(4,	4,	'Mundial',	'Alemana',	'1981-03-08',	'181',	'73',	'Clásico',	'Butterfly',	'4',	1997),
(5,	5,	'Mundial',	'China',	'1978-10-18',	'185',	'75',	'Clásico',	'DHS',	'5',	1994),
(6,	6,	'Mundial',	'Bielorruso',	'1976-04-08',	'190',	'82',	'Clásico',	'Tibhar',	'6',	1993),
(7,	7,	'Mundial',	'China',	'1983-03-10',	'174',	'69',	'Clásico',	'Butterfly',	'7',	1994),
(8,	8,	'Mundial',	'Dinamarca',	'1981-01-09',	'176',	'70',	'Clásico',	'DHS',	'8',	1998),
(9,	9,	'Mundial',	'China',	'1994-04-10',	'172',	'69',	'Clásico',	'DHS',	'9',	1990),
(10,	10,	'Nacional',	'Argentina',	'1982-02-19',	'176',	'74',	'Clásico',	'DHS',	'1',	1996),
(11,	11,	'Nacional',	'Argentina',	'1986-08-03',	'183',	'75',	'Clásico',	'Butterfly',	'2',	2000),
(12,	12,	'Nacional',	'Argentina',	'1995-07-04',	'176',	'70',	'Clásico',	'DHS',	'3',	2006),
(13,	13,	'Nacional',	'Argentina',	'1993-10-15',	'180',	'70',	'Clásico',	'Butterfly',	'4',	2004),
(14,	14,	'Nacional',	'Argentina',	'1986-08-13',	'181',	'75',	'Lapicero',	'DHS',	'5',	2001),
(15,	15,	'Nacional',	'Argentina',	'1992-01-15',	'187',	'78',	'Clásico',	'Butterfly',	'6',	2002),
(16,	16,	'Nacional',	'Argentina',	'1995-04-19',	'165',	'53',	'Clásico',	'DHS',	'7',	2004),
(17,	17,	'Nacional',	'Argentina',	'1988-11-24',	'180',	'70',	'Clásico',	'Butterfly',	'8',	1999),
(18,	18,	'Nacional',	'Argentina',	'1996-05-13',	'178',	'69',	'Clásico',	'Butterfly',	'9',	2005);

DROP TABLE IF EXISTS `jugadores`;
CREATE TABLE `jugadores` (
  `id_jugador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_jugador`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `jugadores` (`id_jugador`, `nombre`) VALUES
(1,	'Ma Long'),
(2,	'Wang Hao'),
(3,	'Ma Lin'),
(4,	'Timo Boll'),
(5,	'Liquin Wang'),
(6,	'Samsonov Vladimir'),
(7,	'Hao Shuai'),
(8,	'Maze Michael'),
(9,	'Chen Qi'),
(10,	'Diego Martín Temperley'),
(11,	' Sebastián Moavro'),
(12,	' Lucas Bayona'),
(13,	'Ariel Teplitzky'),
(14,	' Juan Pablo Remón'),
(15,	'Juan Pablo García Salgado'),
(16,	'Pablo Saragovi'),
(17,	'Gonzalo Barak'),
(18,	'Diego Alejandro Teplitzky');

DROP TABLE IF EXISTS `maderas`;
CREATE TABLE `maderas` (
  `id_madera` int(11) NOT NULL AUTO_INCREMENT,
  `id_distribuidor` int(11) NOT NULL,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `mango` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `peso` int(11) NOT NULL,
  `tipo_juego` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_madera`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `maderas` (`id_madera`, `id_distribuidor`, `nombre`, `mango`, `peso`, `tipo_juego`) VALUES
(1,	1,	'Amultart(ZL Car)',	'FL',	90,	'OFF+'),
(2,	1,	'Mizutani Jun (ZL Carbon)',	'AN',	84,	'OFF+'),
(3,	1,	'Timo Boll ZLC (ZL Carbon)',	'FL',	87,	'OFF-'),
(4,	1,	'Primorac',	'AN',	90,	'OFF+'),
(5,	1,	'A. Mazunov',	'FL',	77,	'OFF'),
(6,	1,	'Senkoh-Max',	'FL',	85,	'OFF+'),
(7,	1,	'Maze Performance',	'FL',	70,	'OFF+'),
(8,	1,	'Petr Korbel',	'AN',	71,	'OFF-'),
(9,	3,	'Waldner Legend Carbon	',	'FL',	77,	'OFF+'),
(10,	3,	'Baum Esprit',	'AN',	81,	'OFF-'),
(11,	3,	'Persson 7',	'FL',	82,	'OFF-'),
(12,	3,	'Waldner Exclusive',	'AN',	91,	'OFF+'),
(13,	3,	'Andro Temper',	'FL',	74,	'OFF'),
(14,	3,	'Andro Kinetic',	'FL',	80,	'OFF+'),
(15,	3,	'Madera Andro Blax',	'AN',	74,	'OFF+'),
(16,	3,	'Andro Super Core',	'AN',	71,	'OFF-');

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `id_jugador` int(11) NOT NULL,
  `ruta` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `videos` (`id_video`, `id_jugador`, `ruta`) VALUES
(1,	1,	'videos/MaLong/MaLongVsTimoBoll.mp4'),
(2,	1,	'videos/MaLong/TheDuelTimoBollvsKUKARobot.mp4'),
(3,	1,	'videos/MaLong/MaLongVsRobertGardos.mp4'),
(4,	2,	'videos/WangHao/WangLiquinvsWangHao.mp4'),
(5,	2,	'videos/WangHao/WangLiquinvsWangHao2.mp4'),
(6,	2,	'videos/WangHao/ZhangJikevsHaoSuai2.mp4'),
(7,	3,	'videos/MaLin/Ma LinvsKalinikosKreanga.mp4'),
(8,	3,	'videos/MaLin/MaLinvsKongLinhui.mp4'),
(9,	3,	'videos/MaLin/ZhangJikevsHaoSuai2.mp4'),
(10,	4,	'videos/TimoBoll/Best Of Timo Boll_(720p).mp4'),
(11,	4,	'videos/TimoBoll/The Duel  Timo Boll vs  KUKA Robot_(720p).mp4'),
(12,	4,	'videos/TimoBoll/ZhangJikevsHaoSuai2.mp4'),
(13,	5,	'videos/LiquinWang/WangLiquinvsWangHao.mp4'),
(14,	5,	'videos/LiquinWang/WangLiquinvsWangHao2.mp4'),
(15,	5,	'videos/LiquinWang/ZhangJikevsHaoSuai2.mp4'),
(16,	6,	'videos/VladimirSamsonov/MaLongVladimirSamsonov.mp4'),
(17,	6,	'videos/VladimirSamsonov/WangLiquinvsWangHao.mp4'),
(18,	6,	'videos/VladimirSamsonov/ZhangJikevsHaoSuai2.mp4'),
(19,	7,	'videos/HaoShuai/WangLiquinvsWangHao.mp4'),
(20,	7,	'videos/HaoShuai/ZhangJikevsHaoShuai.mp4'),
(21,	7,	'videos/HaoShuai/ZhangJikevsHaoSuai2.mp4'),
(22,	8,	'videos/MazeMichael/LiPingMichaelMaze.mp4'),
(23,	8,	'videos/MazeMichael/LiPingMichaelMaze.mp4'),
(24,	8,	'videos/MazeMichael/WangLiquinvsWangHao.mp4'),
(25,	8,	'videos/MazeMichael/ZhangJikevsHaoSuai2.mp4'),
(26,	9,	'videos/ChenQi/WangHaovsChenQi.mp4'),
(27,	9,	'videos/ChenQi/WangLiquinvsWangHao.mp4'),
(28,	9,	'videos/ChenQi/ZhangJikevsHaoSuai2.mp4');

-- 2014-06-25 17:16:48
