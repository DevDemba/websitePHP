CREATE TABLE IF NOT EXIST `user`(
    `id` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `lastname` VARCHAR(30) NOT NULL,
    `firstname` VARCHAR(30) NOT NULL,
    `login` VARCHAR(30) NOT NULL,
    `password` VARCHAR(30) NOT NULL,

    )ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;


COPY ./demba.sql /docker-entry-init.d dans le dockerfile