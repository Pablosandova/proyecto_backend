CREATE TABLE `Servicios`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Nombre` VARCHAR(255) NOT NULL,
    `Costo` BIGINT NOT NULL,
    `Duracion` BIGINT NOT NULL,
    `Descripcion` BIGINT NOT NULL,
    `Tipo` VARCHAR(255) NOT NULL,
    `Min integrantes` BIGINT NOT NULL,
    `Max integrantes` BIGINT NOT NULL
);
CREATE TABLE `Nosotros`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Mision` VARCHAR(255) NOT NULL,
    `Vision` VARCHAR(255) NOT NULL,
    `Equipo` VARCHAR(255) NOT NULL,
    `Jerarquia` VARCHAR(255) NOT NULL
);
CREATE TABLE `Ciudades`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Nombre` VARCHAR(255) NOT NULL
);
CREATE TABLE `ServiciosCiudades`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `idServicio` BIGINT UNSIGNED NULL,
    `idCiudad` BIGINT UNSIGNED NOT NULL
);
ALTER TABLE
    `ServiciosCiudades` ADD CONSTRAINT `serviciosciudades_idciudad_foreign` FOREIGN KEY(`idCiudad`) REFERENCES `Ciudades`(`id`);
ALTER TABLE
    `ServiciosCiudades` ADD CONSTRAINT `serviciosciudades_idservicio_foreign` FOREIGN KEY(`idServicio`) REFERENCES `Servicios`(`id`);