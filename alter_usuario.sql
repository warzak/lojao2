ALTER TABLE `lojao`.`usuarios` 
CHANGE COLUMN `email` `email` VARCHAR(255) NOT NULL ,
ADD UNIQUE INDEX `email_UNIQUE` (`email` ASC);

INSERT INTO `lojao`.`usuarios` (`nome`, `email`, `senha`, `nivel_acesso`, `status`, `criadoEm`) VALUES ('Mestre Yoda', 'yoda@gmail.com', '$2y$10$5BqnXWySepPWnGNSfu50aeGxXVu8FyOeGnB1YulYGbntnxTJ0CAsu', 'adm', '1', '2018-09-12 19:59:48');

INSERT INTO `lojao`.`usuarios` (`nome`, `email`, `senha`, `nivel_acesso`, `status`, `criadoEm`) VALUES ('Juca Bala', 'juca@gmail.com', '$2y$10$5BqnXWySepPWnGNSfu50aeGxXVu8FyOeGnB1YulYGbntnxTJ0CAsu', 'ope', '1', '2018-09-12 19:59:48');

