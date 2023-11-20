-- MySQL Workbench Synchronization
-- Generated: 2023-10-09 19:20
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: alyson_vinicius

DROP DATABASE mydb;



SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;


CREATE TABLE IF NOT EXISTS `mydb`.`Cliente` (
  `idCliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_cliente` VARCHAR(45) NOT NULL,
  `ds_telefone` VARCHAR(12) NOT NULL,
  `ds_endereco` VARCHAR(45) NOT NULL,
  `ds_email` VARCHAR(45) NOT NULL,
  `ds_password` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Produtos` (
  `idProdutos` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_produto` VARCHAR(45) NOT NULL,
  `ds_qntd` INT(11) NOT NULL,
  `ds_valor` INT(11) NOT NULL,
  `ds_descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProdutos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Vendedor` (
  `idVendedor` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_vendedor` VARCHAR(45) NOT NULL,
  `ds_usuario` VARCHAR(30) NOT NULL,
  `ds_senha` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idVendedor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `mydb`.`Pedido` (
  `idPedido` INT(11) NOT NULL AUTO_INCREMENT,
  `Cliente_idCliente` INT(11) NOT NULL,
  `Vendedor_idVendedor` INT(11) NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_Pedido_Cliente1_idx` (`Cliente_idCliente` ASC) VISIBLE,
  INDEX `fk_Pedido_Vendedor1_idx` (`Vendedor_idVendedor` ASC) VISIBLE,
  CONSTRAINT `fk_Pedido_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `mydb`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Vendedor1`
    FOREIGN KEY (`Vendedor_idVendedor`)
    REFERENCES `mydb`.`Vendedor` (`idVendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `mydb`.`Pedido_has_Produtos` (
  `idPedido_has_Produtos` INT(11) NOT NULL AUTO_INCREMENT,
  `Pedido_idPedido` INT(11) NOT NULL,
  `Produtos_idProdutos` INT(11) NOT NULL,
  `ds_qntd` INT(11) NOT NULL,
  `ds_valor_f` INT(11) NOT NULL,
  `ds_valor_t` INT(11) NOT NULL,
  INDEX `fk_Pedido_has_Produtos_Produtos1_idx` (`Produtos_idProdutos` ASC) VISIBLE,
  INDEX `fk_Pedido_has_Produtos_Pedido1_idx` (`Pedido_idPedido` ASC) VISIBLE,
  PRIMARY KEY (`idPedido_has_Produtos`),
  CONSTRAINT `fk_Pedido_has_Produtos_Pedido1`
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `mydb`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_has_Produtos_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `mydb`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Tamanho` (
  `idTamanho` INT(11) NOT NULL,
  `t_GG` VARCHAR(45) NOT NULL,
  `t_G` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTamanho`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Tamanho_has_Produtos` (
  `Tamanho_idTamanho` INT(11) NOT NULL,
  `Produtos_idProdutos` INT(11) NOT NULL,
  `idTamanho_has_Produtos` INT(11) NOT NULL,
  INDEX `fk_Tamanho_has_Produtos_Produtos1_idx` (`Produtos_idProdutos` ASC) VISIBLE,
  INDEX `fk_Tamanho_has_Produtos_Tamanho1_idx` (`Tamanho_idTamanho` ASC) VISIBLE,
  PRIMARY KEY (`idTamanho_has_Produtos`),
  CONSTRAINT `fk_Tamanho_has_Produtos_Tamanho1`
    FOREIGN KEY (`Tamanho_idTamanho`)
    REFERENCES `mydb`.`Tamanho` (`idTamanho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tamanho_has_Produtos_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `mydb`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
