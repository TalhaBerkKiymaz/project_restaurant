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
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (1, 'Sushi', '(8pcs)');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (2, 'Sashimi', 'served w/ ginger & wasabi');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (3, 'Eggs & Sandwiches', 'served till 16');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (4, 'Marina Plateaus', 'selection of seafood, sushi & oysters to share served w/ ponzu/red wine vinaigrette & mayonnaise');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (5, 'Kids', ' ');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (6, 'Salads', ' ');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (7, 'White Wine', '(Glass / Bottle)');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (8, 'Red Wine', '(Glass / Bottle)');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (9, 'Rose Wine', '(Glass / Bottle)');
INSERT INTO `project_restaurant`.`Catalogus` (`id`, `naam`, `omschrijving`) VALUES (10, 'Sparkling Wines', '(Glass / Bottle)');


COMMIT;


-- -----------------------------------------------------
-- Data for table `project_restaurant`.`Product`
-- -----------------------------------------------------
START TRANSACTION;
USE `project_restaurant`;
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (1, 'Crispy asparagus roll', 'w/ tempura, cucumber & avocado', 16, 1);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (2, 'Salmon tune roll', 'w/ flame torched salmon & wasabi sesame', 18, 1);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (3, 'Rainbow roll', 'w/ avocado, salmon & bass topped with colored tobiko', 19, 1);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (4, 'Sashimi', 'salmon/tuna or bass (6pcs)', 17, 2);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (5, 'Sashimi selection', 'w/ salmon, tuna & bass (9pcs)', 20, 2);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (6, 'XL Sashimi selection', 'salmon, tuna, bass, w/ ginger & wasabi (18 pcs)', 39, 2);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (7, 'Avocado toast', 'w/ crispy bacon, poached eggs, fresh herbs & mayonnaise', 12, 3);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (8, 'Steak Sandwich', 'w/ crispy salad, spicy mayonnaise & red onion pickles', 14, 3);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (9, 'Eggs Benedict', 'w/Hollandaise sauce/brioche bun & farmhouse ham', 14, 3);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (10, 'Plateau royale', '16 pcs of sushi & 16 pcs of sashimi, selection of 8 oysters, Dutch shrimp & Nordic pink shrimps. 1/4 cooked lobster & fresh red crab salad', 99, 4);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (11, 'Plateau royale XL', '24 pcs of sushi & 16 pcs of sashimi, selection of 18 oysters, Dutch shrimp & Nordic pink shrimps. 1/4 cooked lobster & fresh red crab salad', 175, 4);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (12, 'Plateau Goerge', 'selection of oysters, Dutch shrimp & Nordic pink shrimps. 1/4 cooked lobster & fresh red crab salad', 58, 4);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (13, 'Mini burger', 'w/french fries & salad', 9, 5);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (14, 'Pasta bambino', ' ', 8, 5);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (15, 'Nicoise salad', 'w/ fresh tuna & green herbs vinaigrette', 22, 6);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (16, 'Caesar salad w/ grilled chicken', 'Parmesan cheese, a perfect egg & anchovy', 16.50 , 6);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (17, 'Caesar salad w/ grilled lobster tail', 'Parmesan cheese, a perfect egg & anchovy', 29, 6);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (18, 'Marina salad', 'w/ buffalo Mozzarella, heirloom tomato & basil', 15, 6);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (19, 'Verdejo', 'Caballero de Olmedo, Rueda-Spain', 5.50, 7);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (20, 'Pinot Grigio', 'Saccheto doc LElfo, Veneto-Italy', 6, 7);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (21, 'Chardonnay Reserve', 'Dumanet, Languedoc-France', 7, 7);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (22, 'Merlot', 'Luck & Jack, Languedoc-France', 4.75, 8);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (23, 'Malbec Appellations La Consulta', 'Catena Zapata, Mendoza-Argentina', 9, 8);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (24, 'Pinot Noir', 'Francis Ford Coppola, California-USA', 9.50, 8);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (25, 'George loves rose 2019', 'Produit de France, Languedoc, Roussillon', 5.50, 9);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (26, 'Aix Rosé', 'Coteaux DAix en Provence, France', 8, 9);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (27, 'Aix Rosé Magnum', 'Coteaux DAix en Provence, France', 80, 9);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (28, 'Prosecco', 'Belstar, Veneto-Italy', 7, 10);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (29, 'Brut, Blanc des Blancs & Grand Cru', 'Champagne Conversation J.L. Vergnon-France', 13.50, 10);
INSERT INTO `project_restaurant`.`Product` (`id`, `naam`, `omschrijving`, `prijs`, `catalogus`) VALUES (30, 'Dom Perignon', 'Champ Champagne-France', 220, 10);

COMMIT;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

