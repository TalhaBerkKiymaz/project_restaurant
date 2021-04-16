-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema project_restaurant
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `project_restaurant` ;

-- -----------------------------------------------------
-- Schema project_restaurant
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `project_restaurant` DEFAULT CHARACTER SET latin1 ;
USE `project_restaurant` ;

-- -----------------------------------------------------
-- Table `project_restaurant`.`Catalogus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `project_restaurant`.`Catalogus` ;

CREATE TABLE IF NOT EXISTS `project_restaurant`.`Catalogus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(255) NOT NULL,
  `omschrijving` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `project_restaurant`.`Product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `project_restaurant`.`Product` ;

CREATE TABLE IF NOT EXISTS `project_restaurant`.`Product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(255) NOT NULL,
  `omschrijving` VARCHAR(255),
  `prijs` FLOAT NOT NULL,
  `catalogus` INT NOT NULL,
  PRIMARY KEY (`id`, `catalogus`),
  INDEX `fk_Product_catalogus_idx` (`catalogus` ASC),
  CONSTRAINT `fk_Product_catalogus`
    FOREIGN KEY (`catalogus`)
    REFERENCES `project_restaurant`.`Catalogus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Data for table `project_restaurant`.`Catalogus`
-- -----------------------------------------------------
START TRANSACTION;
USE `project_restaurant`;
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (1, 'borekci', 'borekciom');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (2, 'tatlici', 'tatliciiom');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (3, 'orospu', 'orospuom');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (4, 'asd', 'asd');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (5, 'dsa', 'dsa');


COMMIT;


-- -----------------------------------------------------
-- Data for table `project_restaurant`.`Product`
-- -----------------------------------------------------
START TRANSACTION;
USE `project_restaurant`;
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (1, 'tarigin borekleri', 'amcik tarik', 31, 1);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (2, 'salak cuneytin amcik yanaklari', 'sikik cuneyt', 17, 2);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (3, 'talha the sisko', 'sisko borekci', 14, 3);

COMMIT;
select product.id, product.naam, product.omschrijving, product.catalogus from catalogus inner join product on product.catalogus=catalogus.id;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

