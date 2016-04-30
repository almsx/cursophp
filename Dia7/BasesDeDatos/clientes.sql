CREATE TABLE Clientes(
    idCliente INT(11) NOT NULL AUTO_INCREMENT PRIMARY key,
    nombre VARCHAR(25) NOT NULL,
    apellidoPaterno VARCHAR(25) NOT NULL,
    apellidoMaterno VARCHAR(25) NOT NULL,
    direccion TEXT NOT NULL,
    correo VARCHAR(200) NOT NULL,
    codigoPostal VARCHAR(5) NOT NULL,
    fechaNacimiento DATE NOT NULL
);