Taller Books
===========================

Aplicação para teste técnico na empresa Taller.

Configurando Banco de Dados
---------------------------
Primeiramente é necessário criar a tabela abaixo, em seguida escolher uma das versões "Yii Framework" ou "Drupal"
Arquivo: 

```bash
CREATE SCHEMA IF NOT EXISTS `taller_books` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `taller_books` ;

-- -----------------------------------------------------
-- Table `taller_books`.`books`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `taller_books`.`books` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `author` VARCHAR(60) NOT NULL,
  `publish` VARCHAR(45) NOT NULL,
  `edition` VARCHAR(45) NOT NULL,
  `year` INT NOT NULL,
  `isnational` TINYINT(1) NOT NULL DEFAULT true,
  `include_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
```

Versão Yii Framework
---------------------
Pasta Yii Frameworks
