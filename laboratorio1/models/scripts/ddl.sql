-- -----------------------------------------------------
-- Table php_mvc.empleado
-- -----------------------------------------------------
DROP TABLE IF EXISTS php_mvc.empleado ;

CREATE TABLE IF NOT EXISTS php_mvc.empleado (
  id INT NOT NULL AUTO_INCREMENT,
  identificacion BIGINT(20) NOT NULL,
  nombres VARCHAR(100) NOT NULL,
  apellidos VARCHAR(100) NOT NULL,
  sueldo DOUBLE NULL,
  direccion VARCHAR(100) NULL,
  correo VARCHAR(50) NULL,
  fechaingreso DATE NULL,
  fechanacimiento DATE NULL,
  estado INT NOT NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;