create database ProyectoNotas2023;
use ProyectoNotas2023;
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

CREATE TABLE Estudiante (
    id_estudiante INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Nombrees VARCHAR(60) NOT NULL,
    Apellidoes VARCHAR(60) NOT NULL,
    Documentoes VARCHAR(12) NOT NULL,
    Correoes VARCHAR(60) NOT NULL,
    Materiaes VARCHAR(30) NOT NULL,
    Docente VARCHAR(60) NOT NULL,
    Promedio INT NOT NULL,
    FECHA_REGISTRO DATE NOT NULL);

create table docente(
id_docente int auto_increment not null primary key,
Nombredo varchar (60) not null,
Apellidodo varchar (60) not null,
Documentodo varchar (12) not null,
Materiasdo varchar (40) not null,
NotasMate decimal (10,1) not null);

create table notas(
id int auto_increment not null primary key,
id_estudiante int not null,
id_materia int not null,
id_docente int not null,
puntaje decimal (10,1) not null,
foreign key (id_estudiante) references estudiantes (id_estudiante) on delete cascade on update cascade,
foreign key (id_materia) references materias (id_materia) on delete cascade on update cascade,
foreign key (id_docente) references docentes (id_docente) on delete cascade on update cascade);
