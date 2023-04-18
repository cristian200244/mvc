-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET NAMES utf8 */
;

/*!50503 SET NAMES utf8mb4 */
;

/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */
;

/*!40103 SET TIME_ZONE='+00:00' */
;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */
;

-- Volcando estructura de base de datos para calculadora
DROP DATABASE IF EXISTS `calculadora`;

CREATE DATABASE IF NOT EXISTS `calculadora`
/*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci */
/*!80016 DEFAULT ENCRYPTION='N' */
;

USE `calculadora`;

-- Volcando estructura para tabla calculadora.operaciones
DROP TABLE IF EXISTS `operaciones`;

CREATE TABLE IF NOT EXISTS `operaciones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `num_uno` int NOT NULL,
  `num_dos` int NOT NULL,
  `operacion` int NOT NULL,
  `resultado` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_spanish2_ci;

-- Volcando datos para la tabla calculadora.operaciones: ~0 rows (aproximadamente)
DELETE FROM
  `operaciones`;

-- Volcando estructura para tabla calculadora.operadores
DROP TABLE IF EXISTS `operadores`;

CREATE TABLE IF NOT EXISTS `operadores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 5 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_spanish2_ci;

-- Volcando datos para la tabla calculadora.operadores: ~4 rows (aproximadamente)
DELETE FROM
  `operadores`;

INSERT INTO
  `operadores` (`id`, `nombre`)
VALUES
  (1, 'SUMA'),
  (2, 'RESTA'),
  (3, 'MULTIPLICACIÓN'),
  (4, 'DIVISIÓN');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */
;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */
;

/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */
;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */
;