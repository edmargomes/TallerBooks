Taller Books
===========================

Aplica��o para teste t�cnico na empresa Taller.

Configurando Banco de Dados
---------------------------
Primeiramente � necess�rio criar a tabela abaixo, em seguida escolher uma das vers�es "Yii Framework" ou "Drupal"
Arquivo: database/taller_books

```bash

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
  `year` INT(4) NOT NULL,
  `origin` VARCHAR(13) NOT NULL DEFAULT 'Nacional',
  `include_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
```

Vers�o Yii Framework
---------------------
Necess�rio ter o Yii Framework 1.1.14 http://www.yiiframework.com/download/
Coloque a pasta "yii-1.1.14" um n�vel acima dos arquivos contidos em yii/public_html
Exemplo: c:\xampp\htdocs\yii-1.1.14 e c:\xampp\htdocs\tallerbooks

Acesse o arquivo yii/public_html/protected/config/mail.php e configure o acesso ao banco de dados com as suas informa��es

```bash
'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=taller_books',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
```

