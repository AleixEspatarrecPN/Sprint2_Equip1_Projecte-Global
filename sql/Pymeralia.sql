CREATE TABLE `Cursos` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Descripcio` varchar(50) NOT NULL,
  `Imatge` varchar(50) NOT NULL
);

CREATE TABLE `Emblemes` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Descripcio` varchar(50) NOT NULL,
  `Imatge` varchar(50) NOT NULL,
  `IdCurs` int NOT NULL
);

CREATE TABLE `RecursosFitxers` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Ubicacio` varchar(50) NOT NULL,
  `IdCurs` int NOT NULL
);

CREATE TABLE `RecursosURL` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Ubicacio` varchar(100) NOT NULL,
  `IdCurs` int NOT NULL
);

CREATE TABLE `RecursosText` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Descripcio` varchar(1000) NOT NULL,
  `IdCurs` int NOT NULL
);

CREATE TABLE `Trameses` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Ubicacio` varchar(50) NOT NULL,
  `Nota` decimal(2,2),
  `IdActivitat` int,
  `IdUsuaris` int
);

CREATE TABLE `Qualificacions` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nota` int NOT NULL,
  `IdUsuaris` int NOT NULL,
  `Descripcio` varchar(50) NOT NULL,
  `Imatge` varchar(50) NOT NULL
);

CREATE TABLE `Valoracions` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Valoracio` varchar(50) NOT NULL,
  `Feedback` varchar(50) NOT NULL,
  `IdCurs` int NOT NULL
);

CREATE TABLE `Usuaris` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `DNI` varchar(50) UNIQUE NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Cognom` varchar(50) NOT NULL,
  `Telefon` int NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Insignies` varchar(50),
  `NomUsuaris` varchar(50) NOT NULL,
  `Contrasenya` varchar(50) NOT NULL,
  `TipusUsuari` ENUM ('Admin', 'Treballador', 'Client') NOT NULL
);

CREATE TABLE `Dispositius` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `MAC` varchar(50) NOT NULL,
  `EstatDispositiu` varchar(50) NOT NULL,
  `NomDispositiu` varchar(100) NOT NULL,
  `Descripcio` varchar(500) NOT NULL,
  `TipusDispositiu` varchar(50) NOT NULL,
  `Ocult` boolean NOT NULL
);

CREATE TABLE `Dispositius_Usuaris` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `IdDispositius` int NOT NULL,
  `IdUsuaris` int NOT NULL
);

CREATE TABLE `Empreses` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefon` int NOT NULL,
  `CIF` varchar(50) NOT NULL
);

CREATE TABLE `Usuari_Curs` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `IdUsuaris` int NOT NULL,
  `IdCurs` int NOT NULL
);

CREATE TABLE `Usuaris_Emblema` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `IdUsuaris` int NOT NULL,
  `IdEmblema` int NOT NULL
);

CREATE TABLE `Informes` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `NivellRisc` varchar(50) NOT NULL,
  `Intervencio` varchar(50) NOT NULL,
  `DataInforme` datetime NOT NULL,
  `Estat` varchar(50) NOT NULL,
  `IdUsuari` int NOT NULL,
  `IdEmpresa` int NOT NULL
);

CREATE TABLE `Resultat` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `NivellRisc` varchar(50) NOT NULL,
  `Intervencio` varchar(50) NOT NULL,
  `IdEstat` int NOT NULL,
  `IdTipusMesura` int NOT NULL,
  `IdInforme` int NOT NULL,
  `IdPregunta` int NOT NULL,
  `IdRespostes` int NOT NULL,
  `IdProbabilitat` int NOT NULL,
  `IdImpacte` int NOT NULL
);

CREATE TABLE `Tasca` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Descripcio` varchar(500) NOT NULL,
  `Aceptat` boolean NOT NULL,
  `Estat` ENUM ('ToDo', 'InProgress', 'Done'),
  `DataInici` datetime,
  `DataFinal` datetime,
  `IdRecomanacio` int NOT NULL,
  `IdUsuari` int NOT NULL,
  `IdEmpresa` int NOT NULL
);

CREATE TABLE `Tasca_Pressupost` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Preu` double NOT NULL,
  `IdTasca` int NOT NULL
);

CREATE TABLE `Estat` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Estat` varchar(50) NOT NULL,
  `Feedback` varchar(50)
);

CREATE TABLE `TipusDeMesura` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `TipusDeMesura` varchar(50) NOT NULL
);

CREATE TABLE `Preguntes` (
  `Id` int PRIMARY KEY NOT NULL,
  `Pregunta` varchar(500) NOT NULL
);

CREATE TABLE `Respostes` (
  `Id` int PRIMARY KEY NOT NULL,
  `Resposta` varchar(500) NOT NULL,
  `IdPregunta` int NOT NULL
);

CREATE TABLE `Recomanacions` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Recomanacions` varchar(500) NOT NULL,
  `IdResposta` int NOT NULL
);

CREATE TABLE `Probabilitat` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Probabilitat` varchar(50) NOT NULL
);

CREATE TABLE `Impacte` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Impacte` varchar(50) NOT NULL
);

CREATE TABLE `Activitats` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Descripcio` varchar(500),
  `DataInici` datetime,
  `DataFinal` datetime,
  `IdCurs` int NOT NULL
);

ALTER TABLE `Emblemes` ADD FOREIGN KEY (`IdCurs`) REFERENCES `Cursos` (`Id`);

ALTER TABLE `RecursosFitxers` ADD FOREIGN KEY (`IdCurs`) REFERENCES `Cursos` (`Id`);

ALTER TABLE `RecursosURL` ADD FOREIGN KEY (`IdCurs`) REFERENCES `Cursos` (`Id`);

ALTER TABLE `RecursosText` ADD FOREIGN KEY (`IdCurs`) REFERENCES `Cursos` (`Id`);

ALTER TABLE `Trameses` ADD FOREIGN KEY (`IdActivitat`) REFERENCES `Activitats` (`Id`);

ALTER TABLE `Trameses` ADD FOREIGN KEY (`IdUsuaris`) REFERENCES `Usuaris` (`Id`);

ALTER TABLE `Qualificacions` ADD FOREIGN KEY (`IdUsuaris`) REFERENCES `Usuaris` (`Id`);

ALTER TABLE `Valoracions` ADD FOREIGN KEY (`IdCurs`) REFERENCES `Cursos` (`Id`);

ALTER TABLE `Dispositius_Usuaris` ADD FOREIGN KEY (`IdDispositius`) REFERENCES `Dispositius` (`Id`);

ALTER TABLE `Dispositius_Usuaris` ADD FOREIGN KEY (`IdUsuaris`) REFERENCES `Usuaris` (`Id`);

ALTER TABLE `Usuari_Curs` ADD FOREIGN KEY (`IdUsuaris`) REFERENCES `Usuaris` (`Id`);

ALTER TABLE `Usuari_Curs` ADD FOREIGN KEY (`IdCurs`) REFERENCES `Cursos` (`Id`);

ALTER TABLE `Usuaris_Emblema` ADD FOREIGN KEY (`IdUsuaris`) REFERENCES `Usuaris` (`Id`);

ALTER TABLE `Usuaris_Emblema` ADD FOREIGN KEY (`IdEmblema`) REFERENCES `Emblemes` (`Id`);

ALTER TABLE `Informes` ADD FOREIGN KEY (`IdUsuari`) REFERENCES `Usuaris` (`Id`);

ALTER TABLE `Informes` ADD FOREIGN KEY (`IdEmpresa`) REFERENCES `Empreses` (`Id`);

ALTER TABLE `Resultat` ADD FOREIGN KEY (`IdEstat`) REFERENCES `Estat` (`Id`);

ALTER TABLE `Resultat` ADD FOREIGN KEY (`IdTipusMesura`) REFERENCES `TipusDeMesura` (`Id`);

ALTER TABLE `Resultat` ADD FOREIGN KEY (`IdInforme`) REFERENCES `Informes` (`Id`);

ALTER TABLE `Resultat` ADD FOREIGN KEY (`IdPregunta`) REFERENCES `Preguntes` (`Id`);

ALTER TABLE `Resultat` ADD FOREIGN KEY (`IdRespostes`) REFERENCES `Respostes` (`Id`);

ALTER TABLE `Resultat` ADD FOREIGN KEY (`IdProbabilitat`) REFERENCES `Probabilitat` (`Id`);

ALTER TABLE `Resultat` ADD FOREIGN KEY (`IdImpacte`) REFERENCES `Impacte` (`Id`);

ALTER TABLE `Tasca` ADD FOREIGN KEY (`IdRecomanacio`) REFERENCES `Recomanacions` (`Id`);

ALTER TABLE `Tasca` ADD FOREIGN KEY (`IdUsuari`) REFERENCES `Usuaris` (`Id`);

ALTER TABLE `Tasca` ADD FOREIGN KEY (`IdEmpresa`) REFERENCES `Empreses` (`Id`);

ALTER TABLE `Tasca_Pressupost` ADD FOREIGN KEY (`IdTasca`) REFERENCES `Tasca` (`Id`);

ALTER TABLE `Respostes` ADD FOREIGN KEY (`IdPregunta`) REFERENCES `Preguntes` (`Id`);

ALTER TABLE `Recomanacions` ADD FOREIGN KEY (`IdResposta`) REFERENCES `Respostes` (`Id`);

ALTER TABLE `Activitats` ADD FOREIGN KEY (`IdCurs`) REFERENCES `Cursos` (`Id`);
