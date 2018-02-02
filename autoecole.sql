drop database if exists autoecole;
create database autoecole;

use autoecole;

create table permis
(
	idpermis int(3) not null auto_increment,
	libelle varchar(50),
	primary key(idpermis)
);

create table candidat
(
	idcandidat int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	adresse varchar(50),
	datenaissance date,
	montant float(5.2),
	primary key(idcandidat)
);

create table preparer
(
	idpermis int(3) not null,
	idcandidat int(3) not null,
	annee date,
	primary key (idpermis, idcandidat),
	foreign key (idpermis) references permis (idpermis),
	foreign key (idcandidat) references candidat (idcandidat)
);

create table moniteur
(
	idmoniteur int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	qualification varchar(50),
	primary key (idmoniteur)
);

create table cours
(
	idcours int(3) not null auto_increment,
	idcandidat int(3) not null,
	idmoniteur int(3) not null,
	datedebut date,
	heuredebut time,
	heurefin time,
	rapport text,
	primary key (idcours),
	foreign key (idmoniteur) references moniteur (idmoniteur),
	foreign key (idcandidat) references candidat (idcandidat)
);

insert into permis values 
	(null, "Permis B"),
	(null, "Permis C"), 
	(null, "Permis A");

insert into candidat values 
	(null, "Hossana", "Dupond", "rue de paris", "1999-10-10", 2500),
	(null, "Irving", "Jerome", "rue de lyon", "2000-10-02", 2700),
	(null, "Remy", "Jeremy", "rue de Lille", "2001-02-05", 2800);

insert into preparer values
	(1, 1, "2018-02-02"),
	(2, 1, "2018-02-03"),
	(3, 2, "2017-02-02");

insert into moniteur values
	(null, "Ben", "Oka", "qualifie en permis B"),
	(null, "Chouaky", "Abdel", "qualifie en permis C");

insert into cours values
	(null, 1, 1, "2018-01-15", "9:30", "10:30", "RAS"),
	(null, 1, 2, "2018-01-20", "10:30", "11:00", "retard de 10 min"),
	(null, 1, 2, "2018-01-16", "11:30", "12:00", "des efforts constates");
