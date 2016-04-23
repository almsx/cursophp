CREATE TABLE usuariosBlog(
    idUsuario int(11) not null PRIMARY key AUTO_INCREMENT,
    usuario varchar(30) not null,
    password varchar(30) not null,
    nombrecompleto text not null,
    pais text not null
);

CREATE TABLE categoriasBlog(
	idCategoria INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombreCategoria VARCHAR(100) NOT NULL
);

CREATE TABLE noticiasBlog(
	idNoticia INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fechaPublicacion DATE NOT NULL,
	tituloPublicacion VARCHAR(150) NOT NULL,
	resumenPublicacion VARCHAR (200) NOT NULL,
	publicacionCompleta TEXT NOT NULL,
	usuarioPublica INT(11) NOT NULL,
	categoriaPublica INT(11) NOT NULL,
	FOREIGN KEY (usuarioPublica) REFERENCES usuariosBlog(idUsuario),
	FOREIGN KEY (categoriaPublica) REFERENCES categoriasBlog(idCategoria)    
);