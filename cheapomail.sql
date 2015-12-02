CREATE TABLE `cheapomail`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `firstname` VARCHAR(50) NOT NULL,
	`lastname` VARCHAR(50) NOT NULL, 
    `password` CHAR(80) NOT NULL  
) ENGINE = InnoDB;

CREATE TABLE `cheapomail`.`message` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `body` VARCHAR(128) NOT NULL,
    `subject` VARCHAR(80) NOT NULL,
	`user_id` INT NOT NULL, 
    `recipient_ids` INT NOT NULL  
) ENGINE = InnoDB;

CREATE TABLE `cheapomail`.`message_read` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `message_id` INT NOT NULL,
    `reader_id` INT NOT NULL,
	`date` TEXT NOT NULL
) ENGINE = InnoDB;