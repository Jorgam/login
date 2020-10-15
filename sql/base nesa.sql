create database NESAGAVIRIA;
use NESAGAVIRIA;


create table UsuariosNesa(
IDUser int not null auto_increment,
NombreUser int(20) not null,
EstadoUser int,
ContrasenaUser varchar(100),
primary key (IDUser,NombreUser)
);

insert into UsuariosNesa(EstadoUser,ContrasenaUser)
values ('1','123456');

select * from UsuariosNesa;

alter table UsuariosNesa
add FOREIGN KEY (NombreUser) REFERENCES empleado_nesa(Document_empledado);

create table empleado_nesa(
Id_empleado int not null auto_increment,
Document_empledado int(20) not null,
nombres_empleado varchar(100),
apellidos_empleados varchar(100),
PRimary key(Id_empleado,Document_empledado)
);

insert into UsuariosNesa (EstadoUser, ContrasenaUser)values (1,'123456');

select * from UsuariosNesa;

select * from UsuariosNesa where nombreuser= 'jorge' and ContrasenaUser = 123456;

insert into empleado_nesa (Document_empledado,nombres_empleado,apellidos_empleados)
values("1020813174","Jorge Andres","Mendez Quintero");

select * from empleado_nesa;


select Document_empledado from empleado_nesa where Document_empledado = '1020813174';

		