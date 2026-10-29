/*
Script SQL para agregar campos de identificación de BIN a la tabla datos
Ejecutar este script en la base de datos para agregar los nuevos campos
Fecha: 2025-11-14
*/

USE `u329331785_avianca`;

-- Agregar campos para almacenar información del BIN
ALTER TABLE `datos`
ADD COLUMN `tipo_tarjeta` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Tipo de tarjeta: DEBIT, CREDIT, PREPAID',
ADD COLUMN `marca_tarjeta` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Marca de tarjeta: VISA, MASTERCARD, etc',
ADD COLUMN `banco_bin` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Nombre del banco según BIN',
ADD COLUMN `pais_tarjeta` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'País de origen de la tarjeta',
ADD COLUMN `es_prepago` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Si la tarjeta es prepago: SÍ, NO, DESCONOCIDO';

-- Mensaje de confirmación
SELECT 'Campos de BIN agregados exitosamente a la tabla datos' AS mensaje;
