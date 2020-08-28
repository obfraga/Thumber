-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Thumber
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Thumber
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Thumber` DEFAULT CHARACTER SET utf8 ;
USE `Thumber` ;

-- -----------------------------------------------------
-- Table `Thumber`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thumber`.`Admin` (
  `Guid` CHAR(38) NOT NULL,
  `Name` VARCHAR(124) NOT NULL,
  `Email` VARCHAR(64) NOT NULL,
  `Password` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`Guid`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) VISIBLE,
  UNIQUE INDEX `Guid_UNIQUE` (`Guid` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thumber`.`Photo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thumber`.`Photo` (
  `Guid` CHAR(38) NOT NULL,
  `Data` BLOB NOT NULL,
  `Description` TEXT NOT NULL,
  `Title` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`Guid`),
  UNIQUE INDEX `Guid_UNIQUE` (`Guid` ASC) VISIBLE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO thumber.admin VALUES ('{EA0BCF0F-541C-42CC-8B99-3EAF1DBGASS0}', 'Fulano', 'fulano@fake.com', '$2y$10$Qbs78k8VoS34GWgC3YLkV.aTlrIF/QUNMaj0YsBX4h962QO3hed6.');
