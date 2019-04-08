CREATE DATABASE IF NOT EXISTS baseSite;
USE baseSite;

CREATE TABLE IF NOT EXISTS Compte(

	idCompte INT(11) AUTO_INCREMENT NOT NULL,
	username VARCHAR(64),
	password VARCHAR(64),
	prenom VARCHAR(64),
	nom VARCHAR(64),
	admin BOOLEAN,
	banned BOOLEAN,
	imgFileLink TEXT,
	email VARCHAR(64),
	
	PRIMARY KEY(idCompte)

)ENGINE = innodb;

CREATE TABLE IF NOT EXISTS Categorie
(
	
	idCategorie INT(11) AUTO_INCREMENT NOT NULL,
	nomCategorie VARCHAR(64),
	theme VARCHAR(64),
	
	PRIMARY KEY(idCategorie)
	
)ENGINE = innodb;

CREATE TABLE IF NOT EXISTS Sujet
(

	idSujet INT(11) AUTO_INCREMENT NOT NULL,
	titre VARCHAR(64),
	datePublication DATE,
	
	idCategorie INT(11),
	idAuteur INT(11),
	
	PRIMARY KEY(idSujet)
	
)ENGINE = innodb;

CREATE TABLE IF NOT EXISTS SujetSuivi
(
	
	idSujetSuivi INT(11) AUTO_INCREMENT NOT NULL,
	
	idCompte INT(11),
	idSujet INT(11),
	
	PRIMARY KEY(idSujetSuivi)

)ENGINE = innodb;

CREATE TABLE IF NOT EXISTS Post
(

	idPost INT(11) AUTO_INCREMENT NOT NULL,
	contenuPost TEXT,
	nbLike INT(11),
	datePublication DATE,
	
	idSujet INT(11),
	idAuteur INT(11),
	
	PRIMARY KEY(idPost)
	
)ENGINE = innodb;

CREATE TABLE IF NOT EXISTS Message
(
	idMessage INT(11) AUTO_INCREMENT NOT NULL,
	objet VARCHAR(64),
	contenuMessage TEXT,
	lu BOOLEAN,
	dateReception DATE,
	
	idDestinataire INT(11),
	idEnvoyeur INT(11),
	
	PRIMARY KEY(idMessage)
	
)ENGINE = innodb;

CREATE TABLE IF NOT EXISTS Theme
(
	idTheme INT(11) AUTO_INCREMENT NOT NULL,
	nomTheme VARCHAR(64),
	
	PRIMARY KEY(idTheme)
	
)ENGINE = innodb;


ALTER TABLE Sujet
ADD CONSTRAINT sujet_idcategorie
FOREIGN KEY(idCategorie)
REFERENCES Categorie(idCategorie);

ALTER TABLE Sujet
ADD CONSTRAINT sujet_idauteur
FOREIGN KEY(idAuteur)
REFERENCES Compte(idCompte);

ALTER TABLE Post
ADD CONSTRAINT post_idsujet
FOREIGN KEY(idSujet)
REFERENCES Sujet(idSujet);

ALTER TABLE Post
ADD CONSTRAINT post_idauteur
FOREIGN KEY(idAuteur)
REFERENCES Compte(idCompte);

ALTER TABLE SujetSuivi
ADD CONSTRAINT sujetsuivi_idcompte
FOREIGN KEY(idCompte)
REFERENCES Compte(idCompte);

ALTER TABLE SujetSuivi
ADD CONSTRAINT sujetsuivi_idsujet
FOREIGN KEY(idSujet)
REFERENCES Sujet(idSujet);

ALTER TABLE Message
ADD CONSTRAINT message_iddestinataire
FOREIGN KEY(idDestinataire)
REFERENCES Compte(idCompte);

ALTER TABLE Message
ADD CONSTRAINT message_idenvoyeur
FOREIGN KEY(idEnvoyeur)
REFERENCES Compte(idCompte);


INSERT INTO Theme (nomTheme)
values('Jeu Video'),
('Musique'),
('Films'),
('Développement');

INSERT INTO Compte (username, password, nom, prenom, admin, banned)
values ('bdufour', 'btssio', 'Dufour', 'Bastien', 1, 0),
('thelligar', 'btssio', 'Helligar', 'Thomas', 0, 0),
('acoursolle', 'btssio', 'Coursolle', 'Arthur', 0, 0);

INSERT INTO Categorie (nomCategorie, theme)
values('C++', 'Développement'),
('Java', 'Développement'),
('SQL', 'Développement'),
('PHP', 'Développement'),
('HTML/CSS', 'Développement'),
('JavaScript' , 'Développement'),
('Python', 'Développement'),

('Action', 'Films'),
('Comédie', 'Films'),
('Dramatique', 'Films'),
('Animé', 'Films'),
('Porno', 'Films'),

('Hip-Hop', 'Musique'),
('Rock', 'Musique'),
('Electro', 'Musique'),
('Variété', 'Musique'),
('Autre', 'Musique'),

('PC', 'Jeu Vidéo'),
('PS4', 'Jeu Vidéo'),
('ONE', 'Jeu Vidéo'),
('Switch', 'Jeu Vidéo'),
('Rétro', 'Jeu Vidéo');


