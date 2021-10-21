

CREATE TABLE privilegios(
       id SERIAL PRIMARY KEY NOT NULL,
       denominacion TEXT NOT NULL
);


CREATE TABLE usuarios(
       id SERIAL NOT NULL PRIMARY KEY,
       nombres_mostrar TEXT ,
       cedula INTEGER,
       usuario  TEXT UNIQUE,
       password TEXT,
       correo TEXT UNIQUE NOT NULL,
       privilegio INTEGER NOT NULL REFERENCES privilegios(id),
       estatus BOOLEAN DEFAULT 'true',
       fecha_registro DATE default now() 
              
);

CREATE TABLE patrocinantes(
       id SERIAL NOT NULL PRIMARY KEY,
       photo_dir TEXT,
       photo TEXT,
       nombre TEXT,
       denominacion TEXT,
       fecha_registro DATE default now(),
       estatus BOOLEAN DEFAULT 'true'

);



CREATE TABLE foto_pricipal_candidatas(
       id SERIAL NOT NULL PRIMARY KEY,
       id_usuario INTEGER NOT NULL REFERENCES usuarios(id),
       photo_dir TEXT,
       photo TEXT,
       fecha_registro DATE default now() ,
       municipio TEXT,
       nombres_candidata TEXT,
       categoria TEXT
       estatus BOOLEAN DEFAULT 'true'
);


CREATE TABLE rondas (
       id SERIAL NOT NULL PRIMARY KEY,
       denominacion TEXT,
       estatus BOOLEAN DEFAULT 'true'
);


CREATE TABLE foto_pre_view (
       id SERIAL NOT NULL PRIMARY KEY,
       photo_dir TEXT,
       photo TEXT,
       municipio TEXT,
       estatus BOOLEAN DEFAULT 'true'


);

CREATE TABLE categorias(
id SERIAL PRIMARY KEY NOT NULL,
denominacion TEXT
estatus BOOLEAN DEFAULT 'true'

);

CREATE TABLE candidatas(
id SERIAL PRIMARY KEY NOT NULL,
id_categoria INTEGER REFERENCES categorias(id),
nombres TEXT,
municipio TEXT,
edad TEXT,
cedula INTEGER,
fecha_nacimiento date, 
direccion TEXT,
telefono_1 TEXT,
telefono_2 TEXT,
instagram text,
facebook text,
ocupacion text,
hobbie text,
busto numeric(26,2),
cintura numeric(26,2),
cadera numeric(26,2),
experiencia text,
estatura numeric(26,2),
photo_dir TEXT,
photo TEXT



);



CREATE TABLE calificacion (
id SERIAL PRIMARY KEY NOT NULL,
id_candidata INTEGER REFERENCES candidatas(id),
id_ronda INTEGER REFERENCES rondas(id),
puntuacion numeric(2,1) 


);



CREATE OR REPLACE VIEW view_usuarios AS 
 SELECT 
a.id,
a.nombres_mostrar, 
a.cedula, 
a.usuario, 
a.password,
a.correo,
a.privilegio,
( SELECT privilegios.denominacion
           FROM privilegios
          WHERE privilegios.id = a.privilegio
         LIMIT 1) AS denominacio_privilegio,

a.estatus,
a.fecha_registro 

FROM usuarios a ORDER BY a.id ASC;


CREATE OR REPLACE VIEW view_candidatas AS 


SELECT

a.id ,
a.id_categoria,
( SELECT categorias.denominacion
           FROM categorias
          WHERE categorias.id = a.id_categoria
         LIMIT 1) AS denominacio_categorias,
a.nombres, 
a.municipio, 
a.edad ,
a.cedula, 
a.fecha_nacimiento,
a.direccion ,
a.telefono_1, 
a.telefono_2 ,
a.instagram ,
a.facebook ,
a.ocupacion ,
a.hobbie ,
a.busto ,
a.cintura, 
a.cadera ,
a.experiencia ,
a.estatura ,
a.photo_dir ,
a.photo 
FROM candidatas a ORDER BY a.id ASC;

CREATE OR REPLACE VIEW view_calificacion AS 
 SELECT 
a.id,
a.id_ronda, 
( SELECT denominacion FROM rondas WHERE id = a.id_ronda LIMIT 1) AS ronda,
a.id_candidata, 
( SELECT nombres FROM candidatas WHERE id = a.id_candidata LIMIT 1) AS candidata,
( SELECT municipio FROM candidatas WHERE id = a.id_candidata LIMIT 1) AS candidata_municipio,
a.id_jurado,
( SELECT nombres_mostrar FROM usuarios WHERE id = a.id_jurado LIMIT 1) AS nombre_jurado,
a.puntuacion
FROM calificacion a ORDER BY a.id ASC;