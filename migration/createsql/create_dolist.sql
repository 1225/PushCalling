CREATE TABLE IF NOT EXISTS `dolist` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(50) NOT NULL,
  `starttime` DATETIME,
  `month` INT NOT NULL,
  `date` INT NOT NULL,
  `time` INT NOT NULL,
  PRIMARY KEY(`id`))
ENGINE = InnoDB;
