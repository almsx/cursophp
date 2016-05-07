CREATE TABLE imagenes (
  'id_imagen' int(11) NOT NULL auto_increment,
  'nombre' text NOT NULL,
  'fechaPublicacion' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);