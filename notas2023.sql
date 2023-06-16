create database ProyectoNotas2023;
create table usuarios(
id_usuario int auto_increment not null primary key,
Nombreu varchar (60) not null,
Apellidou varchar (60) not null,
Usuario varchar (40) not null,
Passwordu varchar (80) not null,
Perfilu varchar (30) not null,
Estadou varchar (20) not null);

create table materias(
id_materia int auto_increment not null primary key,
NombreMa varchar (30) not null);

create table Estudiante(
id_estudiante int auto_increment not null primary key,
Nombrees varchar (60) not null,
Apellidoes varchar (60) not null,
Documentoes varchar (12) not null,
Correoes varchar (60) not null,
Materiaes varchar (30) not null,
Docente varchar (60) not null,
Promedio int not null,
FECHA_REGISTRO date not null);


