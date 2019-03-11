create table Utilisateur (
ID int(11) auto_increment; 
nom varchar(55), 
prenom varchar(55), 
date_de_naissance date, 
pseudo varchar(55), 
password varchar(55), 
isAdmin boolean, 
banni boolean, 
primary key (ID)
); 

create table Message (
ID int(11) auto_increment, 
contenu varchar(55), 
datePublication datetime, 
idUtilisateur int, 
primary key (ID)
); 

create table Fil_de_discussion (
ID int(11) auto_increment, 
nom varchar(55), 
idMessage int,
idCategorie int,  
primary key (ID)
); 

create table Categorie (
ID int(11) auto_increment, 
nom varchar(55), 
primary key (ID)
);  

alter table Message
add constraint Message_idUtilisateur
foreign key (idUtilisateur)
references Utilisateur (ID); 

alter table Fil_de_discussion
add constraint Fil_de_discussion_idMessage
foreign key (idMessage)
references Message (ID); 

alter table Fil_de_discussion
add constraint Fil_de_discussion_idCategorie
foreign key (idCategorie)
references Categorie (ID); 

