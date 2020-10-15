create database somosnesa;

use somosnesa;

create table Usuarios(
id int primary key not null auto_increment,
nombre_user varchar(150),
pass_user varchar(150),
estado_user int,
fecha_create_user date
);

insert into usuarios(nombre_user,pass_user,estado_user)
values ("admin","123456","1");

select * from usuarios;

select id, nombre_user, pass_user, estado_user from usuarios where nombre_user="admin" and pass_user="123456" and estado_user="1";