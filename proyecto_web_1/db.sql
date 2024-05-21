-- SE ELIMINAR LA DB SI ESQUE YA EXISTE

drop schema if exists `proyecto_web_1`;

create schema if not exists `proyecto_web_1` default character set utf8 collate utf8_sapanish_ci;

CREATE TABLE `persona`(
    id int not null,
`nombre_usuario` text not null,
`apellido_usuario` text not null,
`mail` varchar(100) not null,
`telefono` varchar(10) not null,
PRIMARY KEY (id)

)engine=Innodb default charset=utf8;