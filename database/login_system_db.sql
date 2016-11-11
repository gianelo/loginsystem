-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema login_system_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema login_system_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `login_system_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `login_system_db` ;

-- -----------------------------------------------------
-- Table `login_system_db`.`groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `login_system_db`.`groups` (
  `id_group` INT NOT NULL,
  `name_group` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_group`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `login_system_db`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `login_system_db`.`users` (
  `id_user` INT NOT NULL,
  `first_user` VARCHAR(25) NOT NULL,
  `lastname_user` VARCHAR(25) NOT NULL,
  `email_user` VARCHAR(45) NOT NULL,
  `ip_user` VARCHAR(16) NOT NULL,
  `password_user` VARCHAR(16) NOT NULL,
  `groups_id_group` INT NOT NULL,
  PRIMARY KEY (`id_user`, `groups_id_group`),
  INDEX `fk_users_groups1_idx` (`groups_id_group` ASC),
  CONSTRAINT `fk_users_groups1`
    FOREIGN KEY (`groups_id_group`)
    REFERENCES `login_system_db`.`groups` (`id_group`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `login_system_db`.`login_attemps`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `login_system_db`.`login_attemps` (
  `id_login` INT NOT NULL AUTO_INCREMENT,
  `ip_login` VARCHAR(45) NOT NULL,
  `time` VARCHAR(45) NOT NULL,
  `users_id_user` INT NOT NULL,
  PRIMARY KEY (`id_login`, `users_id_user`),
  INDEX `fk_login_attemps_users_idx` (`users_id_user` ASC),
  CONSTRAINT `fk_login_attemps_users`
    FOREIGN KEY (`users_id_user`)
    REFERENCES `login_system_db`.`users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
