CREATE TABLE `utilizador` (
  `idutilizador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`idutilizador`)
  UNIQUE KEY `login_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



