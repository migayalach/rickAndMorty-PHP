create database rickAndMorty;

use rickAndMorty

create table users(
  idUser int not null auto_increment,
  name varchar(250) not null,
  email varchar(250) unique not null,
  password varchar(250) not null,
  primary key(idUser)
);

create table gender(
  idGender int not null auto_increment,
  nameGender varchar(250) unique not null,
  primary key(idGerder)
);

create table species(
  idSpecies int not null auto_increment,
  nameSpecie varchar(250) unique not null,
  primary key(idSpecies)
);

create table status(
  idStatus int not null auto_increment,
  nameStatus varchar(250) unique not null,
  primary key(idStatus)
);

create table characters(
  idCharacter int not null auto_increment,
  idStatus int not null,
  idSpecies int not null,
  idGender int not null,
  nameCharacter varchar(250) not null,
  image varchar(1024),
  primary key(idCharacter),
  foreign key (idStatus) references status(idStatus),
  foreign key (idSpecies) references species(idSpecies),
  foreign key (idGender) references gender(idGender)
);
