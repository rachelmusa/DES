-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema desdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema desdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `desdb` DEFAULT CHARACTER SET utf8 ;
USE `desdb` ;

-- -----------------------------------------------------
-- Table `desdb`.`patients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`patients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(45) NULL,
  `lname` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `mobile` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `issuedate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`patientdetails`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`patientdetails` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `height` VARCHAR(45) NULL,
  `weight` VARCHAR(45) NULL,
  `bmi` VARCHAR(45) NULL,
  `issuedate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `patientsid` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_patientdetails_patients1_idx` (`patientsid` ASC) ,
  CONSTRAINT `fk_patientdetails_patients1`
    FOREIGN KEY (`patientsid`)
    REFERENCES `desdb`.`patients` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`hosptials`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`hosptials` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `tel` VARCHAR(45) NULL,
  `mobile` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `issuedate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`jobtype`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`jobtype` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(45) NULL,
  `lname` VARCHAR(45) NULL,
  `mobile` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `issuedate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `password` VARCHAR(50) NULL,
  `hosptialsid` INT NOT NULL,
  `jobtypeid` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_doctors_hosptials_idx` (`hosptialsid` ASC) ,
  INDEX `fk_users_jobtype1_idx` (`jobtypeid` ASC) ,
  CONSTRAINT `fk_doctors_hosptials`
    FOREIGN KEY (`hosptialsid`)
    REFERENCES `desdb`.`hosptials` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_jobtype1`
    FOREIGN KEY (`jobtypeid`)
    REFERENCES `desdb`.`jobtype` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`drugs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`drugs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `doc` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL DEFAULT 'active',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`patientfiles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`patientfiles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `issuedate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `patientsid` INT NOT NULL,
  `hosptialsid` INT NOT NULL,
  `issuedby` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_patienttreatments_patients1_idx` (`patientsid` ASC) ,
  INDEX `fk_patienttreatments_hosptials1_idx` (`hosptialsid` ASC) ,
  CONSTRAINT `fk_patienttreatments_patients1`
    FOREIGN KEY (`patientsid`)
    REFERENCES `desdb`.`patients` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patienttreatments_hosptials1`
    FOREIGN KEY (`hosptialsid`)
    REFERENCES `desdb`.`hosptials` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`patientsymptoms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`patientsymptoms` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `doc` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `patientfileno` INT NOT NULL,
  `usersid` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_patientsymptoms_patientfiles1_idx` (`patientfileno` ASC) ,
  INDEX `fk_patientsymptoms_users1_idx` (`usersid` ASC) ,
  CONSTRAINT `fk_patientsymptoms_patientfiles1`
    FOREIGN KEY (`patientfileno`)
    REFERENCES `desdb`.`patientfiles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patientsymptoms_users1`
    FOREIGN KEY (`usersid`)
    REFERENCES `desdb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`drugstatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`drugstatus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desdb`.`patientdrug`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desdb`.`patientdrug` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `doc` VARCHAR(45) NULL,
  `issuedby` INT NULL,
  `drugsid` INT NOT NULL,
  `patientsymptomsid` INT NOT NULL,
  `drugstatusid` INT NOT NULL,
  `issuedate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `fk_patientdrug_drugs1_idx` (`drugsid` ASC) ,
  INDEX `fk_patientdrug_patientsymptoms1_idx` (`patientsymptomsid` ASC) ,
  INDEX `fk_patientdrug_drugstatus1_idx` (`drugstatusid` ASC) ,
  CONSTRAINT `fk_patientdrug_drugs1`
    FOREIGN KEY (`drugsid`)
    REFERENCES `desdb`.`drugs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patientdrug_patientsymptoms1`
    FOREIGN KEY (`patientsymptomsid`)
    REFERENCES `desdb`.`patientsymptoms` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patientdrug_drugstatus1`
    FOREIGN KEY (`drugstatusid`)
    REFERENCES `desdb`.`drugstatus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
