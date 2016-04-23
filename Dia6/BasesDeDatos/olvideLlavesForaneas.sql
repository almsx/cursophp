/*Olvide agregar llaves foraneas*/

ALTER TABLE noticiasBlogErick ADD FOREIGN KEY (usuarioPublica) REFERENCES usuariosBlog(idUsuario);

ALTER TABLE noticiasBlogErick ADD FOREIGN KEY(categoriaPublica) REFERENCES categoriasBlog(idCategoria);

ALTER TABLE usuariosBlog ADD COLUMN apPaterno VARCHAR(50) NOT NULL;
ALTER TABLE usuariosBlog ADD COLUMN apMaterno VARCHAR(50) NOT NULL;
