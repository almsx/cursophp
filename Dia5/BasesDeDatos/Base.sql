CREATE TABLE Alumnos(
    idAlumno INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombreAlumno VARCHAR(30) NOT NULL,
    apellidoPaterno VARCHAR(30) NOT NULL,
    apellidoMaterno VARCHAR(30) NOT NULL,
    fecha DATE NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    matricula VARCHAR(10) NOT NULL
);