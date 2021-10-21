--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.25
-- Dumped by pg_dump version 13.3 (Ubuntu 13.3-1.pgdg20.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

--
-- Name: calificacion; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.calificacion (
    id integer NOT NULL,
    id_ronda integer,
    id_candidata integer,
    puntuacion integer,
    id_jurado integer
);


ALTER TABLE public.calificacion OWNER TO programacion;

--
-- Name: calificacion_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.calificacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.calificacion_id_seq OWNER TO programacion;

--
-- Name: calificacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.calificacion_id_seq OWNED BY public.calificacion.id;


--
-- Name: candidatas; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.candidatas (
    id integer NOT NULL,
    id_categoria integer,
    nombres text,
    municipio text,
    edad text,
    cedula integer,
    fecha_nacimiento date,
    direccion text,
    telefono_1 text,
    telefono_2 text,
    instagram text,
    facebook text,
    ocupacion text,
    hobbie text,
    busto numeric(26,2),
    cintura numeric(26,2),
    cadera numeric(26,2),
    experiencia text,
    estatura numeric(26,2),
    photo text,
    photo_dir text,
    estatus boolean DEFAULT true,
    posicion integer DEFAULT 0
);


ALTER TABLE public.candidatas OWNER TO programacion;

--
-- Name: COLUMN candidatas.busto; Type: COMMENT; Schema: public; Owner: programacion
--

COMMENT ON COLUMN public.candidatas.busto IS 'medida';


--
-- Name: COLUMN candidatas.cintura; Type: COMMENT; Schema: public; Owner: programacion
--

COMMENT ON COLUMN public.candidatas.cintura IS 'medida';


--
-- Name: COLUMN candidatas.cadera; Type: COMMENT; Schema: public; Owner: programacion
--

COMMENT ON COLUMN public.candidatas.cadera IS 'medida';


--
-- Name: candidatas_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.candidatas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.candidatas_id_seq OWNER TO programacion;

--
-- Name: candidatas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.candidatas_id_seq OWNED BY public.candidatas.id;


--
-- Name: categorias; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.categorias (
    id integer NOT NULL,
    denominacion text,
    estatus boolean DEFAULT true
);


ALTER TABLE public.categorias OWNER TO programacion;

--
-- Name: categorias_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.categorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categorias_id_seq OWNER TO programacion;

--
-- Name: categorias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.categorias_id_seq OWNED BY public.categorias.id;


--
-- Name: foto_pre_view; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.foto_pre_view (
    id integer NOT NULL,
    photo_dir text,
    photo text,
    municipio text,
    estatus boolean DEFAULT true
);


ALTER TABLE public.foto_pre_view OWNER TO programacion;

--
-- Name: foto_pre_view_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.foto_pre_view_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.foto_pre_view_id_seq OWNER TO programacion;

--
-- Name: foto_pre_view_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.foto_pre_view_id_seq OWNED BY public.foto_pre_view.id;


--
-- Name: foto_pricipal_candidatas; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.foto_pricipal_candidatas (
    id integer NOT NULL,
    id_usuario integer NOT NULL,
    photo_dir text,
    photo text,
    fecha_registro date DEFAULT now(),
    municipio text,
    nombres_candidata text,
    categoria text,
    estatus boolean DEFAULT true
);


ALTER TABLE public.foto_pricipal_candidatas OWNER TO programacion;

--
-- Name: foto_pricipal_candidatas_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.foto_pricipal_candidatas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.foto_pricipal_candidatas_id_seq OWNER TO programacion;

--
-- Name: foto_pricipal_candidatas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.foto_pricipal_candidatas_id_seq OWNED BY public.foto_pricipal_candidatas.id;


--
-- Name: patrocinantes; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.patrocinantes (
    id integer NOT NULL,
    photo_dir text,
    photo text,
    nombre text,
    denominacion text,
    fecha_registro date DEFAULT now(),
    estatus boolean DEFAULT true
);


ALTER TABLE public.patrocinantes OWNER TO programacion;

--
-- Name: patrocinantes_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.patrocinantes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.patrocinantes_id_seq OWNER TO programacion;

--
-- Name: patrocinantes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.patrocinantes_id_seq OWNED BY public.patrocinantes.id;


--
-- Name: privilegios; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.privilegios (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.privilegios OWNER TO programacion;

--
-- Name: privilegios_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.privilegios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.privilegios_id_seq OWNER TO programacion;

--
-- Name: privilegios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.privilegios_id_seq OWNED BY public.privilegios.id;


--
-- Name: rondas; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.rondas (
    id integer NOT NULL,
    denominacion text,
    estatus boolean DEFAULT true,
    apertura boolean DEFAULT false
);


ALTER TABLE public.rondas OWNER TO programacion;

--
-- Name: rondas_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.rondas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rondas_id_seq OWNER TO programacion;

--
-- Name: rondas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.rondas_id_seq OWNED BY public.rondas.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.usuarios (
    id integer NOT NULL,
    nombres_mostrar text,
    cedula integer,
    usuario text,
    password text,
    correo text NOT NULL,
    privilegio integer NOT NULL,
    estatus boolean DEFAULT true,
    fecha_registro date DEFAULT now()
);


ALTER TABLE public.usuarios OWNER TO programacion;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_seq OWNER TO programacion;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;


--
-- Name: view_calificacion; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_calificacion AS
 SELECT a.id,
    a.id_ronda,
    ( SELECT rondas.denominacion
           FROM public.rondas
          WHERE (rondas.id = a.id_ronda)
         LIMIT 1) AS ronda,
    a.id_candidata,
    ( SELECT candidatas.nombres
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS candidata,
    ( SELECT candidatas.municipio
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS candidata_municipio,
    a.id_jurado,
    ( SELECT usuarios.nombres_mostrar
           FROM public.usuarios
          WHERE (usuarios.id = a.id_jurado)
         LIMIT 1) AS nombre_jurado,
    a.puntuacion
   FROM public.calificacion a
  ORDER BY a.id;


ALTER TABLE public.view_calificacion OWNER TO programacion;

--
-- Name: view_calificacion_final; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_calificacion_final AS
 SELECT a.id_ronda,
    a.id_candidata,
    sum(a.puntuacion) AS calificacion,
    ( SELECT candidatas.id_categoria
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS id_categoria
   FROM public.calificacion a
  GROUP BY a.id_ronda, a.id_candidata;


ALTER TABLE public.view_calificacion_final OWNER TO programacion;

--
-- Name: view_calificacion_final_resultados; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_calificacion_final_resultados AS
 SELECT a.id_candidata,
    ( SELECT candidatas.nombres
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS nombres,
    ( SELECT candidatas.municipio
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS municipio,
    sum(a.puntuacion) AS calificacion,
    ( SELECT candidatas.id_categoria
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS id_categoria,
    ( SELECT candidatas.photo
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS photo,
    ( SELECT candidatas.photo_dir
           FROM public.candidatas
          WHERE (candidatas.id = a.id_candidata)
         LIMIT 1) AS photo_dir
   FROM public.calificacion a
  GROUP BY a.id_candidata;


ALTER TABLE public.view_calificacion_final_resultados OWNER TO programacion;

--
-- Name: view_candidatas; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_candidatas AS
 SELECT a.id,
    a.id_categoria,
    ( SELECT categorias.denominacion
           FROM public.categorias
          WHERE (categorias.id = a.id_categoria)
         LIMIT 1) AS denominacio_categorias,
    a.nombres,
    a.municipio,
    a.edad,
    a.cedula,
    a.fecha_nacimiento,
    a.direccion,
    a.telefono_1,
    a.telefono_2,
    a.instagram,
    a.facebook,
    a.ocupacion,
    a.hobbie,
    a.busto,
    a.cintura,
    a.cadera,
    a.experiencia,
    a.estatura,
    a.photo_dir,
    a.photo,
    a.estatus,
    a.posicion
   FROM public.candidatas a
  ORDER BY a.id;


ALTER TABLE public.view_candidatas OWNER TO programacion;

--
-- Name: view_usuarios; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_usuarios AS
 SELECT a.id,
    a.nombres_mostrar,
    a.cedula,
    a.usuario,
    a.password,
    a.correo,
    a.privilegio,
    ( SELECT privilegios.denominacion
           FROM public.privilegios
          WHERE (privilegios.id = a.privilegio)
         LIMIT 1) AS denominacio_privilegio,
    a.estatus,
    a.fecha_registro
   FROM public.usuarios a
  ORDER BY a.id;


ALTER TABLE public.view_usuarios OWNER TO programacion;

--
-- Name: votaciones_gente; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.votaciones_gente (
    id integer NOT NULL,
    id_candidata integer NOT NULL,
    ip text
);


ALTER TABLE public.votaciones_gente OWNER TO programacion;

--
-- Name: view_votaciones_gente; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_votaciones_gente AS
 SELECT a.id_candidata,
    ( SELECT view_candidatas.nombres
           FROM public.view_candidatas
          WHERE (view_candidatas.id = a.id_candidata)
         LIMIT 1) AS nombres,
    ( SELECT view_candidatas.id_categoria
           FROM public.view_candidatas
          WHERE (view_candidatas.id = a.id_candidata)
         LIMIT 1) AS id_categoria,
    ( SELECT view_candidatas.denominacio_categorias
           FROM public.view_candidatas
          WHERE (view_candidatas.id = a.id_candidata)
         LIMIT 1) AS denominacio_categorias,
    ( SELECT view_candidatas.municipio
           FROM public.view_candidatas
          WHERE (view_candidatas.id = a.id_candidata)
         LIMIT 1) AS municipio,
    count(a.id_candidata) AS calificacion,
    ( SELECT count(*) AS count
           FROM public.votaciones_gente) AS total,
    ( SELECT view_candidatas.photo_dir
           FROM public.view_candidatas
          WHERE (view_candidatas.id = a.id_candidata)
         LIMIT 1) AS photo_dir,
    ( SELECT view_candidatas.photo
           FROM public.view_candidatas
          WHERE (view_candidatas.id = a.id_candidata)
         LIMIT 1) AS photo
   FROM public.votaciones_gente a
  GROUP BY a.id_candidata;


ALTER TABLE public.view_votaciones_gente OWNER TO programacion;

--
-- Name: votacion_actividad; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.votacion_actividad (
    id integer NOT NULL,
    denominacion text,
    estatus boolean DEFAULT true
);


ALTER TABLE public.votacion_actividad OWNER TO programacion;

--
-- Name: votacion_actividad_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.votacion_actividad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.votacion_actividad_id_seq OWNER TO programacion;

--
-- Name: votacion_actividad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.votacion_actividad_id_seq OWNED BY public.votacion_actividad.id;


--
-- Name: votaciones_gente_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.votaciones_gente_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.votaciones_gente_id_seq OWNER TO programacion;

--
-- Name: votaciones_gente_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.votaciones_gente_id_seq OWNED BY public.votaciones_gente.id;


--
-- Name: calificacion id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.calificacion ALTER COLUMN id SET DEFAULT nextval('public.calificacion_id_seq'::regclass);


--
-- Name: candidatas id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.candidatas ALTER COLUMN id SET DEFAULT nextval('public.candidatas_id_seq'::regclass);


--
-- Name: categorias id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.categorias ALTER COLUMN id SET DEFAULT nextval('public.categorias_id_seq'::regclass);


--
-- Name: foto_pre_view id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.foto_pre_view ALTER COLUMN id SET DEFAULT nextval('public.foto_pre_view_id_seq'::regclass);


--
-- Name: foto_pricipal_candidatas id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.foto_pricipal_candidatas ALTER COLUMN id SET DEFAULT nextval('public.foto_pricipal_candidatas_id_seq'::regclass);


--
-- Name: patrocinantes id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.patrocinantes ALTER COLUMN id SET DEFAULT nextval('public.patrocinantes_id_seq'::regclass);


--
-- Name: privilegios id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.privilegios ALTER COLUMN id SET DEFAULT nextval('public.privilegios_id_seq'::regclass);


--
-- Name: rondas id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.rondas ALTER COLUMN id SET DEFAULT nextval('public.rondas_id_seq'::regclass);


--
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- Name: votacion_actividad id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.votacion_actividad ALTER COLUMN id SET DEFAULT nextval('public.votacion_actividad_id_seq'::regclass);


--
-- Name: votaciones_gente id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.votaciones_gente ALTER COLUMN id SET DEFAULT nextval('public.votaciones_gente_id_seq'::regclass);


--
-- Name: calificacion calificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.calificacion
    ADD CONSTRAINT calificacion_pkey PRIMARY KEY (id);


--
-- Name: candidatas candidatas_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.candidatas
    ADD CONSTRAINT candidatas_pkey PRIMARY KEY (id);


--
-- Name: categorias categorias_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.categorias
    ADD CONSTRAINT categorias_pkey PRIMARY KEY (id);


--
-- Name: foto_pre_view foto_pre_view_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.foto_pre_view
    ADD CONSTRAINT foto_pre_view_pkey PRIMARY KEY (id);


--
-- Name: foto_pricipal_candidatas foto_pricipal_candidatas_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.foto_pricipal_candidatas
    ADD CONSTRAINT foto_pricipal_candidatas_pkey PRIMARY KEY (id);


--
-- Name: patrocinantes patrocinantes_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.patrocinantes
    ADD CONSTRAINT patrocinantes_pkey PRIMARY KEY (id);


--
-- Name: privilegios privilegios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.privilegios
    ADD CONSTRAINT privilegios_pkey PRIMARY KEY (id);


--
-- Name: rondas rondas_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.rondas
    ADD CONSTRAINT rondas_pkey PRIMARY KEY (id);


--
-- Name: usuarios usuarios_correo_key; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_correo_key UNIQUE (correo);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: usuarios usuarios_usuario_key; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_usuario_key UNIQUE (usuario);


--
-- Name: votacion_actividad votacion_actividad_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.votacion_actividad
    ADD CONSTRAINT votacion_actividad_pkey PRIMARY KEY (id);


--
-- Name: votaciones_gente votaciones_gente_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.votaciones_gente
    ADD CONSTRAINT votaciones_gente_pkey PRIMARY KEY (id);


--
-- Name: calificacion calificacion_id_candidata_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.calificacion
    ADD CONSTRAINT calificacion_id_candidata_fkey FOREIGN KEY (id_candidata) REFERENCES public.candidatas(id);


--
-- Name: calificacion calificacion_id_jurado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.calificacion
    ADD CONSTRAINT calificacion_id_jurado_fkey FOREIGN KEY (id_jurado) REFERENCES public.usuarios(id);


--
-- Name: calificacion calificacion_id_ronda_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.calificacion
    ADD CONSTRAINT calificacion_id_ronda_fkey FOREIGN KEY (id_ronda) REFERENCES public.rondas(id);


--
-- Name: candidatas candidatas_id_categoria_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.candidatas
    ADD CONSTRAINT candidatas_id_categoria_fkey FOREIGN KEY (id_categoria) REFERENCES public.categorias(id);


--
-- Name: foto_pricipal_candidatas foto_pricipal_candidatas_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.foto_pricipal_candidatas
    ADD CONSTRAINT foto_pricipal_candidatas_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id);


--
-- Name: usuarios usuarios_privilegio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_privilegio_fkey FOREIGN KEY (privilegio) REFERENCES public.privilegios(id);


--
-- Name: votaciones_gente votaciones_gente_id_candidata_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.votaciones_gente
    ADD CONSTRAINT votaciones_gente_id_candidata_fkey FOREIGN KEY (id_candidata) REFERENCES public.candidatas(id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

