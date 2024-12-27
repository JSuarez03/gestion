CREATE DATABASE IF NOT EXISTS Gestionv2 CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;

USE Gestionv2;

CREATE TABLE IF NOT EXISTS categorias (
    id_categoria INT NOT NULL AUTO_INCREMENT,
    nombre_categoria VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_categoria)
);

CREATE TABLE IF NOT EXISTS clientes (
    cedula INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(15),
    PRIMARY KEY (cedula)
);
CREATE TABLE IF NOT EXISTS citas (
    id_cita INT NOT NULL AUTO_INCREMENT,
    cedula_cliente INT NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    servicio VARCHAR(100) NOT NULL,
    estado ENUM('confirmado','confirmada','pendiente','cancelada') NOT NULL,
    PRIMARY KEY (id_cita),
    FOREIGN KEY (cedula_cliente) REFERENCES clientes(cedula)
);


CREATE VIEW citas_clientes AS
SELECT cl.nombre,
    cl.apellido,
    c.id_cita,
    c.cedula_cliente,
    c.fecha,
    c.hora,
    c.servicio,
    c.estado
FROM citas c
JOIN clientes cl ON cl.cedula = c.cedula_cliente;

CREATE TABLE IF NOT EXISTS facturas (
    id_factura INT NOT NULL AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    fecha_emision DATE NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (id_factura),
    FOREIGN KEY (id_cliente) REFERENCES clientes(cedula)
);

CREATE TABLE IF NOT EXISTS productos (
    id_producto INT NOT NULL AUTO_INCREMENT,
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion TEXT,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    id_categoria INT NOT NULL,
    PRIMARY KEY (id_producto),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    apellido VARCHAR(50),
    PRIMARY KEY (id_usuario)
);
CREATE TABLE IF NOT EXISTS detalle_factura (
    id_detalle INT NOT NULL AUTO_INCREMENT,
    id_factura INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) GENERATED ALWAYS AS (cantidad * precio_unitario) STORED,
    PRIMARY KEY (id_detalle),
    FOREIGN KEY (id_factura) REFERENCES facturas(id_factura),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);


