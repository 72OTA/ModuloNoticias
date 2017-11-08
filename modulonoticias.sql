-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla nielsendb.tblnoticias_menu
CREATE TABLE IF NOT EXISTS `tblnoticias_menu` (
  `idopcion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `PosI` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idopcion`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla nielsendb.tblnoticias_menu: 2 rows
/*!40000 ALTER TABLE `tblnoticias_menu` DISABLE KEYS */;
INSERT INTO `tblnoticias_menu` (`idopcion`, `descripcion`, `PosI`) VALUES
	(1, 'DESCARGAS', 1),
	(2, 'EVALUACIONES', 1);
/*!40000 ALTER TABLE `tblnoticias_menu` ENABLE KEYS */;

-- Volcando estructura para tabla nielsendb.tblnoticias_submenu
CREATE TABLE IF NOT EXISTS `tblnoticias_submenu` (
  `idopcion` int(10) unsigned NOT NULL,
  `idsubmenu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PosS` int(10) unsigned NOT NULL,
  `url` varchar(100) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estado` smallint(5) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`idopcion`,`idsubmenu`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla nielsendb.tblnoticias_submenu: 2 rows
/*!40000 ALTER TABLE `tblnoticias_submenu` DISABLE KEYS */;
INSERT INTO `tblnoticias_submenu` (`idopcion`, `idsubmenu`, `PosS`, `url`, `descripcion`, `estado`) VALUES
	(1, 1, 1, 'modulonoticias/?view=DESCARGAS', 'Menu Descargas', 1),
	(3, 3, 1, 'modulonoticias/?view=login', 'Portal', 1);
/*!40000 ALTER TABLE `tblnoticias_submenu` ENABLE KEYS */;

-- Volcando estructura para tabla nielsendb.tbl_noticias_blog
CREATE TABLE IF NOT EXISTS `tbl_noticias_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titulo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dcorta` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dlarga` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estatus` text NOT NULL,
  `ano` text NOT NULL,
  `mes` text NOT NULL,
  `origen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla nielsendb.tbl_noticias_blog: 8 rows
/*!40000 ALTER TABLE `tbl_noticias_blog` DISABLE KEYS */;
INSERT INTO `tbl_noticias_blog` (`id`, `Fecha`, `titulo`, `dcorta`, `dlarga`, `estatus`, `ano`, `mes`, `origen`) VALUES
	(44, '2017-09-11 11:30:47', 'Buscador', 'Esta es una descripcion corta de la noticia', 'En el buscador se buscan rut o nombres de la bd', 'importante3', '2017', '03', 'ADMINISTRA'),
	(60, '2017-09-20 17:17:52', 'Noticia de prueba', 'Esta es una descripcion corta de la noticia', 'Aqui debe ir el cuerpo y la descripcion completa de la noticia la cual sera posteriormente mostrada por los slider si es que llegas a seleccionar alguna.', 'importante1', '2017', '09', ''),
	(61, '2017-09-20 17:18:02', 'Noticia de prueba', 'Esta es una descripcion corta de la noticia', 'Aqui debe ir el cuerpo y la descripcion completa de la noticia la cual sera posteriormente mostrada por los slider si es que llegas a seleccionar alguna.', 'importante1', '2017', '09', ''),
	(63, '2017-09-20 17:24:51', 'Noticia de prueba', 'Esta es una descripcion corta de la noticia', 'Aqui debe ir el cuerpo y la descripcion completa de la noticia la cual sera posteriormente mostrada por los slider si es que llegas a seleccionar alguna.', 'importante1', '2017', '09', ''),
	(64, '2017-09-20 17:25:29', 'Noticia de prueba', 'Esta es una descripcion corta de la noticia', 'Aqui debe ir el cuerpo y la descripcion completa de la noticia la cual sera posteriormente mostrada por los slider si es que llegas a seleccionar alguna.', 'importante1', '2017', '09', ''),
	(65, '2017-09-20 17:32:09', 'Noticia de prueba', 'Esta es una descripcion corta de la noticia', 'Aqui debe ir el cuerpo y la descripcion completa de la noticia la cual sera posteriormente mostrada por los slider si es que llegas a seleccionar alguna.', 'importante1', '2017', '09', ''),
	(71, '2017-09-24 19:03:34', 'Fechas de la derecha', 'Esta es una descripcion corta de la noticia', 'Las fechas indican cuando se publicaron noticias y se pueden visualizar', 'importante2', '2017', '09', 'ADMINISTRA'),
	(75, '2017-10-04 00:39:18', 'Descargas', 'Esta es una descripcion corta de la noticia', 'En la seccion descargas puedes descargar archivos de la empresa.', 'importante1', '2017', '10', 'ADMINISTRA');
/*!40000 ALTER TABLE `tbl_noticias_blog` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
