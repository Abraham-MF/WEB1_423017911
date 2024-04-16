--asistencia 
drop SCHEMA is Exists `asistencia`
CREATE SCHEMA IF NOT Exists `asistencia` default character set utf8 collate utf8_spanish2_ci; 
use `asistencia`;

CREATE TABLE `usuarios`(
    `nombre` text not null,
    `direccion` text not null,
    `telefono` varchar,
    `correo` text not null,
    `nombre_usuario` text not null,
    `password` varchar(30) not null,
    `fecha de registro` datetime not null default current_timestamp on update current_timestamp,
    `permisos` int (11) NOT null default '1' 

) ENGINE=InnoDB;