CREATE TABLE `users`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NULL DEFAULT NULL , `surname` VARCHAR(255) NULL DEFAULT NULL , `date` DATE NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


-- мои запросы
INSERT INTO `user`( `name`, `surname`) VALUES( "Nikolay", "Ivanov" )
SELECT * FROM `user`
UPDATE `user` SET `date` = '2023-02-02' WHERE `user`.`id` = 1;
UPDATE `user` SET `name`="Nikita" WHERE id=1;



-- шаблоны
SELECT * FROM `user` WHERE 1
SELECT `id`, `name`, `surname`, `date` FROM `user` WHERE 1
INSERT INTO `user`(`id`, `name`, `surname`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
UPDATE `user` SET `id`=[value-1],`name`=[value-2],`surname`=[value-3],`date`=[value-4] WHERE 1
DELETE FROM `user` WHERE 0