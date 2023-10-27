
DROP DATABASE IF EXISTS formulario;
CREATE DATABASE formulario;

USE formulario;

CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Un identificador único para cada usuario
    nombre VARCHAR(255) NOT NULL,      -- Nombre del usuario (no puede ser nulo)
    numero VARCHAR(20)                -- Número del usuario (puede ser nulo)
);