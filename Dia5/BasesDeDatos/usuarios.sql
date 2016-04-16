CREATE TABLE usuarios(
    idUsuario int(11) not null PRIMARY key AUTO_INCREMENT,
    usuario varchar(30) not null,
    password varchar(30) not null,
    nombrecompleto text not null  
);