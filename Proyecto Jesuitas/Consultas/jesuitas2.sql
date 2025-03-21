CREATE TABLE jesuita(
	idJesuita tinyint unsigned  NOT NULL PRIMARY KEY AUTO_INCREMENT,
	codigo char(5) NULL, 
	nombre varchar(50) NOT NULL UNIQUE,
	nombreAlumno varchar(100) NOT NULL UNIQUE,
	firma varchar(300) NOT NULL,
	firmaIngles varchar(300) NOT NULL
);

CREATE TABLE lugar(
	ip char(15) NOT NULL PRIMARY KEY,
	nombre_maquina char(12) NOT NULL,
	lugar varchar(30) NOT NULL
);

CREATE TABLE visita(
    idVisita  smallint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
	idJesuita tinyint unsigned NOT NULL,
	ip char(15) NOT NULL,
	fechaHora datetime NOT NULL default NOW(),
	CONSTRAINT Lugar_Visita FOREIGN KEY (ip) REFERENCES lugar(ip),
	CONSTRAINT Jesuita_Visita FOREIGN KEY (idJesuita) REFERENCES jesuita(idJesuita)
);

INSERT INTO jesuita (codigo, nombre, nombreAlumno, firma, firmaIngles)
VALUES
    ('ABC01', 'San Ignacio de Loyola', 'Eduardo', 'Me hice jesuita porque me gusta servir al prójimo', 'I became a Jesuit because I like to serve others'),
    ('ABC02', 'San Francisco Javier','Carlos', 'Llevar la fe a todos los rincones del mundo', 'Bring faith to every corner of the world'),
    ('ABC03', 'Matteo Ricci', 'Francisco', 'El conocimiento y la fe pueden ir de la mano', 'Knowledge and faith can go hand in hand'),
    ('ABC04', 'Pedro Arrupe', 'Adrián', 'Ser hombres para los demás', 'Be men for others'),
    ('ABC05', 'Baltasar Gracián', 'Fernando José', 'La prudencia es la guía de la vida', 'Prudence is the guide of life');
	
INSERT INTO lugar
VALUES
    ('10.3.13.101', 'WIN-AI43-001', 'Badajoz'),
    ('10.3.13.102', 'WIN-AI43-002', 'Badajoz'),
    ('10.3.13.103', 'WIN-AI43-003', 'Cordoba'),
    ('10.3.13.104', 'WIN-AI43-004', 'Cordoba'),
    ('10.3.13.105', 'WIN-AI43-005', 'Cordoba'),
    ('10.3.13.106', 'WIN-AI43-006', 'Granada'),
    ('10.3.13.107', 'WIN-AI43-007', 'Granada'),

    ('10.2.8.201', 'LNX-UB12-001', 'Granada'),
    ('10.2.8.202', 'LNX-UB12-002', 'Cáceres'),
    ('10.2.8.203', 'LNX-UB12-003', 'Cáceres'),
    ('10.2.8.204', 'LNX-UB12-004', 'Cáceres'),
    ('10.2.8.205', 'LNX-UB12-005', 'Cáceres'),

    ('25.2.8.301', 'WIN-XP35-001', 'Jaén'),
    ('25.2.8.302', 'WIN-XP35-002', 'Jaén'),
    ('25.2.8.303', 'WIN-XP35-003', 'Jaén'),
    ('25.2.8.304', 'WIN-XP35-004', 'Mérida'),
    ('25.2.8.305', 'WIN-XP35-005', 'Mérida');