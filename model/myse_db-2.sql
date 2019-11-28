-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema id6251355_myse
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema id6251355_myse
-- -----------------------------------------------------
-- CREATE SCHEMA IF NOT EXISTS `id6251355_myse` DEFAULT CHARACTER SET utf8 ;
-- USE `id6251355_myse` ;

-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_tipousuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_tipousuario` (
  `tpuid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `tpudescricao` VARCHAR(45) NOT NULL COMMENT 'Descrição',
  PRIMARY KEY (`tpuid`),
  UNIQUE INDEX `tpuid_UNIQUE` (`tpuid` ASC),
  UNIQUE INDEX `tpudescricao_UNIQUE` (`tpudescricao` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_administrador` (
  `admid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admnome` VARCHAR(45) NOT NULL COMMENT 'Nome',
  `admlogin` VARCHAR(20) NOT NULL COMMENT 'Login',
  `admsenha` VARCHAR(10) NOT NULL COMMENT 'Senha',
  `admstatus` INT(11) NOT NULL DEFAULT '0' COMMENT 'Status',
  `admtpuid` INT(11) NOT NULL DEFAULT '0' COMMENT 'Perfil',
  PRIMARY KEY (`admid`),
  UNIQUE INDEX `admid_UNIQUE` (`admid` ASC),
  UNIQUE INDEX `admlogin_UNIQUE` (`admlogin` ASC),
  INDEX `fk_tb_administrador_tb_tipousuario1_idx` (`admtpuid` ASC),
  CONSTRAINT `fk_tb_administrador_tb_tipousuario1`
    FOREIGN KEY (`admtpuid`)
    REFERENCES `id6251355_myse`.`tb_tipousuario` (`tpuid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_autonomo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_autonomo` (
  `autid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `autnome` VARCHAR(120) NOT NULL COMMENT 'Nome Completo',
  `autfone` VARCHAR(15) NOT NULL COMMENT 'Fone',
  `autemail` VARCHAR(80) NOT NULL COMMENT 'E-mail',
  `autcep` VARCHAR(10) NOT NULL COMMENT 'CEP',
  `autrua` VARCHAR(120) NOT NULL COMMENT 'Rua (Logradouro)',
  `autnumero` VARCHAR(15) NOT NULL COMMENT 'Nº',
  `autcomplemento` VARCHAR(80) NULL DEFAULT NULL COMMENT 'Complemento',
  `autlogin` VARCHAR(15) NOT NULL COMMENT 'Login',
  `autsenha` VARCHAR(8) NOT NULL COMMENT 'Senha',
  `auttpuid` INT(11) NOT NULL COMMENT 'Tipo Usuario',
  `autbairro` VARCHAR(45) NOT NULL COMMENT 'Bairro',
  `autcidade` VARCHAR(45) NOT NULL COMMENT 'Cidade',
  `autuf` VARCHAR(2) NOT NULL COMMENT 'UF',
  PRIMARY KEY (`autid`),
  UNIQUE INDEX `usuid_UNIQUE` (`autid` ASC),
  UNIQUE INDEX `usulogin_UNIQUE` (`autlogin` ASC),
  INDEX `fk_tb_usuario_tb_tipousuario1_idx` (`auttpuid` ASC),
  CONSTRAINT `fk_tb_usuario_tb_tipousuario10`
    FOREIGN KEY (`auttpuid`)
    REFERENCES `id6251355_myse`.`tb_tipousuario` (`tpuid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_sindico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_sindico` (
  `sinid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `sinnome` VARCHAR(120) NOT NULL COMMENT 'Nome Completo',
  `sinfone` VARCHAR(15) NOT NULL COMMENT 'Fone',
  `sinemail` VARCHAR(80) NOT NULL COMMENT 'E-mail',
  `sincep` VARCHAR(10) NOT NULL COMMENT 'CEP',
  `sinrua` VARCHAR(120) NOT NULL COMMENT 'Rua (Logradouro)',
  `sinnumero` VARCHAR(15) NOT NULL COMMENT 'Nº',
  `sincomplemento` VARCHAR(80) NULL DEFAULT NULL COMMENT 'Complemento',
  `sinlogin` VARCHAR(15) NOT NULL COMMENT 'Login',
  `sinsenha` VARCHAR(8) NOT NULL COMMENT 'Senha',
  `sintpuid` INT(11) NOT NULL COMMENT 'Tipo Usuario',
  `sinbairro` VARCHAR(50) NOT NULL COMMENT 'Bairro',
  `sincidade` VARCHAR(45) NOT NULL COMMENT 'Cidade',
  `sinuf` VARCHAR(2) NOT NULL COMMENT 'UF',
  PRIMARY KEY (`sinid`),
  UNIQUE INDEX `usuid_UNIQUE` (`sinid` ASC),
  UNIQUE INDEX `usulogin_UNIQUE` (`sinlogin` ASC),
  INDEX `fk_tb_usuario_tb_tipousuario1_idx` (`sintpuid` ASC),
  CONSTRAINT `fk_tb_usuario_tb_tipousuario100`
    FOREIGN KEY (`sintpuid`)
    REFERENCES `id6251355_myse`.`tb_tipousuario` (`tpuid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_condominio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_condominio` (
  `conid` INT(11) NOT NULL,
  `connome` VARCHAR(120) NOT NULL,
  `concep` VARCHAR(10) NOT NULL,
  `conrua` VARCHAR(120) NOT NULL,
  `connumero` VARCHAR(15) NOT NULL,
  `consinid` INT(11) NOT NULL COMMENT 'Síndico',
  `consubsindico` INT(11) NOT NULL COMMENT 'Subsindico',
  `conbairro` VARCHAR(50) NOT NULL COMMENT 'Bairro',
  `concidade` VARCHAR(45) NOT NULL COMMENT 'Cidade',
  `conuf` VARCHAR(2) NOT NULL COMMENT 'UF',
  PRIMARY KEY (`conid`),
  UNIQUE INDEX `conid_UNIQUE` (`conid` ASC),
  UNIQUE INDEX `connome_UNIQUE` (`connome` ASC),
  INDEX `fk_tb_condominio_tb_sindico1_idx` (`consinid` ASC),
  INDEX `fk_tb_condominio_tb_sindico2_idx` (`consubsindico` ASC),
  CONSTRAINT `fk_tb_condominio_tb_sindico1`
    FOREIGN KEY (`consinid`)
    REFERENCES `id6251355_myse`.`tb_sindico` (`sinid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_condominio_tb_sindico2`
    FOREIGN KEY (`consubsindico`)
    REFERENCES `id6251355_myse`.`tb_sindico` (`sinid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_autorizados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_autorizados` (
  `atzid` INT(11) NOT NULL COMMENT 'ID',
  `atzautid` INT(11) NOT NULL COMMENT 'Autônomo',
  `atzconid` INT(11) NOT NULL COMMENT 'Condomínio',
  PRIMARY KEY (`atzid`),
  INDEX `fk_tb_autonomo_has_tb_condominio_tb_condominio1_idx` (`atzconid` ASC),
  INDEX `fk_tb_autonomo_has_tb_condominio_tb_autonomo1_idx` (`atzautid` ASC),
  CONSTRAINT `fk_tb_autonomo_has_tb_condominio_tb_autonomo1`
    FOREIGN KEY (`atzautid`)
    REFERENCES `id6251355_myse`.`tb_autonomo` (`autid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_autonomo_has_tb_condominio_tb_condominio1`
    FOREIGN KEY (`atzconid`)
    REFERENCES `id6251355_myse`.`tb_condominio` (`conid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_categoria` (
  `catid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `catdescricao` VARCHAR(80) NOT NULL COMMENT 'Descricao',
  PRIMARY KEY (`catid`),
  UNIQUE INDEX `catid_UNIQUE` (`catid` ASC),
  UNIQUE INDEX `catdescricao_UNIQUE` (`catdescricao` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_cliente` (
  `cliid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `clinome` VARCHAR(120) NOT NULL COMMENT 'Nome Completo',
  `clifone` VARCHAR(15) NOT NULL COMMENT 'Fone',
  `cliemail` VARCHAR(80) NOT NULL COMMENT 'E-mail',
  `clicep` VARCHAR(10) NOT NULL COMMENT 'CEP',
  `clirua` VARCHAR(120) NOT NULL COMMENT 'Rua (Logradouro)',
  `clinumero` VARCHAR(15) NOT NULL COMMENT 'Nº',
  `clicomplemento` VARCHAR(80) NULL DEFAULT NULL COMMENT 'Complemento',
  `clilogin` VARCHAR(15) NOT NULL COMMENT 'Login',
  `clisenha` VARCHAR(8) NOT NULL COMMENT 'Senha',
  `clitpuid` INT(11) NOT NULL COMMENT 'Tipo Usuario',
  `cliconid` INT(11) NOT NULL COMMENT 'Condomínio',
  `clibairro` VARCHAR(45) NOT NULL COMMENT 'Bairro',
  `clicidade` VARCHAR(45) NOT NULL COMMENT 'Cidade',
  `cliuf` VARCHAR(2) NOT NULL COMMENT 'UF',
  PRIMARY KEY (`cliid`),
  UNIQUE INDEX `usuid_UNIQUE` (`cliid` ASC),
  UNIQUE INDEX `usulogin_UNIQUE` (`clilogin` ASC),
  INDEX `fk_tb_usuario_tb_tipousuario1_idx` (`clitpuid` ASC),
  INDEX `fk_tb_cliente_tb_condominio1_idx` (`cliconid` ASC),
  CONSTRAINT `fk_tb_cliente_tb_condominio1`
    FOREIGN KEY (`cliconid`)
    REFERENCES `id6251355_myse`.`tb_condominio` (`conid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_usuario_tb_tipousuario1`
    FOREIGN KEY (`clitpuid`)
    REFERENCES `id6251355_myse`.`tb_tipousuario` (`tpuid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_servico` (
  `serid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `serdescricao` VARCHAR(100) NOT NULL COMMENT 'Descrição',
  `sercatid` INT(11) NOT NULL COMMENT 'Categoria',
  PRIMARY KEY (`serid`),
  UNIQUE INDEX `serid_UNIQUE` (`serid` ASC),
  UNIQUE INDEX `serdescricao_UNIQUE` (`serdescricao` ASC),
  INDEX `fk_tb_servico_tb_categoria1_idx` (`sercatid` ASC),
  CONSTRAINT `fk_tb_servico_tb_categoria1`
    FOREIGN KEY (`sercatid`)
    REFERENCES `id6251355_myse`.`tb_categoria` (`catid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id6251355_myse`.`tb_solicitacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id6251355_myse`.`tb_solicitacao` (
  `solid` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `soldata` VARCHAR(10) NOT NULL COMMENT 'Data da Solicitação',
  `solhora` VARCHAR(5) NOT NULL COMMENT 'Hora da Solicitação',
  `solvalor` DOUBLE NULL DEFAULT NULL COMMENT 'Valor',
  `solobs` VARCHAR(250) NULL DEFAULT NULL COMMENT 'Observações',
  `soldatafinal` VARCHAR(10) NULL DEFAULT NULL COMMENT 'Data final',
  `solhorafinal` VARCHAR(5) NULL DEFAULT NULL COMMENT 'Hora final',
  `solstatus` VARCHAR(50) NOT NULL COMMENT 'Status',
  `solnota` DOUBLE NULL DEFAULT NULL COMMENT 'Nota',
  `solcliid` INT(11)  NULL DEFAULT NULL COMMENT 'Cliente',
  `solserid` INT(11)  NULL DEFAULT NULL COMMENT 'Serviço',
  `solautid` INT(11)  NULL DEFAULT NULL COMMENT 'Autônomo',
  PRIMARY KEY (`solid`),
  UNIQUE INDEX `solid_UNIQUE` (`solid` ASC),
  INDEX `fk_tb_solicitacao_tb_servico1_idx` (`solserid` ASC),
  INDEX `fk_tb_solicitacao_tb_cliente1_idx` (`solcliid` ASC),
  INDEX `fk_tb_solicitacao_tb_autonomo1_idx` (`solautid` ASC),
  CONSTRAINT `fk_tb_solicitacao_tb_autonomo1`
    FOREIGN KEY (`solautid`)
    REFERENCES `id6251355_myse`.`tb_autonomo` (`autid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_solicitacao_tb_cliente1`
    FOREIGN KEY (`solcliid`)
    REFERENCES `id6251355_myse`.`tb_cliente` (`cliid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_solicitacao_tb_servico1`
    FOREIGN KEY (`solserid`)
    REFERENCES `id6251355_myse`.`tb_servico` (`serid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
