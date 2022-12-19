CREATE TABLE `jugadores` (
  `idJugador` int(11) NOT NULL AUTO_INCREMENT,
  `idPartida` int(11) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apodo` varchar(45) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idJugador`),
  UNIQUE KEY `idJugador_UNIQUE` (`idJugador`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `partidas` (
  `idPartida` int(11) NOT NULL AUTO_INCREMENT,
  `idJugador1` int(11) DEFAULT NULL,
  `idJugador2` int(11) DEFAULT NULL,
  `idJugador3` int(11) DEFAULT NULL,
  `idJugador4` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `cubierta` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPartida`),
  KEY `fk_jugadores_idx` (`idJugador1`),
  KEY `fk_jugadores2_idx` (`idJugador2`),
  KEY `kf_jugador3_idx` (`idJugador3`),
  KEY `fk_jugadores4_idx` (`idJugador4`),
  CONSTRAINT `fk_jugadores` FOREIGN KEY (`idJugador1`) REFERENCES `jugadores` (`idJugador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_jugadores2` FOREIGN KEY (`idJugador2`) REFERENCES `jugadores` (`idJugador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_jugadores3` FOREIGN KEY (`idJugador3`) REFERENCES `jugadores` (`idJugador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_jugadores4` FOREIGN KEY (`idJugador4`) REFERENCES `jugadores` (`idJugador`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;