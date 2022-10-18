DROP TABLE juveniles;
DROP TABLE veteranos;
DROP TABLE socios;
DROP TABLE categorias;

CREATE TABLE categorias(
	id_categoria integer GENERATED BY DEFAULT AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 4 CACHE 1 ) PRIMARY KEY,
	categoria text NOT NULL
);

CREATE TABLE socios(
	id_socio integer GENERATED BY DEFAULT AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 4 CACHE 1 ) PRIMARY KEY,
	nombre_apellido text NOT NULL,
	dni text NOT NULL,
	telefono text NOT NULL,
	direccion text NOT NULL,
	mail text NOT NULL,
	id_categoria integer NOT NULL,
	FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

INSERT INTO categorias(categoria) VALUES ('Infantil');
INSERT INTO categorias(categoria) VALUES ('Juvenil');
INSERT INTO categorias(categoria) VALUES ('Mayor');
INSERT INTO categorias(categoria) VALUES ('Veterano');

CREATE TABLE juveniles(
	id_juvenil integer GENERATED BY DEFAULT AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 4 CACHE 1 ) PRIMARY KEY,
	nombre_tutor text NOT NULL,
	dni_tutor text NOT NULL,
	id_socio integer NOT NULL,
	FOREIGN KEY (id_socio) REFERENCES socios(id_socio)
);

CREATE TABLE veteranos(
	id_veterano integer GENERATED BY DEFAULT AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 4 CACHE 1 ) PRIMARY KEY,
	enfermedad_coronaria bool NOT NULL,
	id_socio integer NOT NULL,
	FOREIGN KEY (id_socio) REFERENCES socios(id_socio)
);

SELECT * FROM categorias;