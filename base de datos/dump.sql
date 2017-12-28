--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: area1; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE area1 (
    cod_area1 smallint NOT NULL,
    descrip integer
);


ALTER TABLE area1 OWNER TO postgres;

--
-- Name: area2; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE area2 (
    cod_area2 smallint NOT NULL,
    descrip integer
);


ALTER TABLE area2 OWNER TO postgres;

--
-- Name: asistencia; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE asistencia (
    fecha date NOT NULL,
    hora time without time zone NOT NULL,
    codigo character(10) NOT NULL
);


ALTER TABLE asistencia OWNER TO postgres;

--
-- Name: departamento; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE departamento (
    cod_depar smallint NOT NULL,
    descrip character(20)
);


ALTER TABLE departamento OWNER TO postgres;

--
-- Name: formu; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE formu (
    codigo character(7) NOT NULL,
    cod_depar smallint NOT NULL,
    cod_sexo smallint NOT NULL,
    cod_area1 smallint NOT NULL,
    cod_area2 smallint NOT NULL,
    cedula integer,
    nombre character(40),
    apellido character(40),
    correo character(100),
    telefono1 character(7),
    telefono2 character(7),
    direccion character(200),
    cargo character(50),
    id integer NOT NULL
);


ALTER TABLE formu OWNER TO postgres;

--
-- Name: formu_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE formu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE formu_id_seq OWNER TO postgres;

--
-- Name: formu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE formu_id_seq OWNED BY formu.id;


--
-- Name: login_admin; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE login_admin (
    usuario character varying(20) NOT NULL,
    "contraseña" character varying(50)
);


ALTER TABLE login_admin OWNER TO postgres;

--
-- Name: sexo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE sexo (
    cod_sexo smallint NOT NULL,
    descrip character(20)
);


ALTER TABLE sexo OWNER TO postgres;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY formu ALTER COLUMN id SET DEFAULT nextval('formu_id_seq'::regclass);


--
-- Data for Name: area1; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO area1 VALUES (1, 212);
INSERT INTO area1 VALUES (2, 239);


--
-- Data for Name: area2; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO area2 VALUES (1, 412);
INSERT INTO area2 VALUES (2, 414);
INSERT INTO area2 VALUES (3, 416);
INSERT INTO area2 VALUES (4, 424);
INSERT INTO area2 VALUES (5, 426);


--
-- Data for Name: asistencia; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO asistencia VALUES ('2015-11-29', '15:18:09', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:18:56', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:19:22', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:20:27', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:21:35', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:22:22', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:23:05', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:23:16', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:25:12', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:25:24', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:26:56', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:30:39', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:32:45', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '15:33:12', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '16:58:45', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '16:59:20', 'etir001   ');
INSERT INTO asistencia VALUES ('2015-11-29', '17:16:51', 'etir002   ');
INSERT INTO asistencia VALUES ('2015-11-29', '20:07:45', 'etir003   ');


--
-- Data for Name: departamento; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO departamento VALUES (1, 'Administrativo      ');
INSERT INTO departamento VALUES (2, 'Directivo           ');
INSERT INTO departamento VALUES (3, 'Docente             ');
INSERT INTO departamento VALUES (4, 'Obrero              ');


--
-- Data for Name: formu; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO formu VALUES ('etir004', 2, 1, 1, 4, 21377726, 'Brandon                                 ', 'Velasquez                               ', 'signup_otura@hotmail.com                                                                            ', '8607273', '1874426', 'la pastora                                                                                                                                                                                              ', 'Supervisor de informatica                         ', 7);
INSERT INTO formu VALUES ('etir001', 2, 1, 1, 4, 20914008, 'Michael Daniel                          ', 'Rondon Pereira                          ', 'mrondon72@gmil.com                                                                                  ', '8634792', '1781403', 'Caracas                                                                                                                                                                                                 ', 'Docente                                           ', 4);
INSERT INTO formu VALUES ('etir002', 1, 1, 1, 1, 20978759, 'Yoismer                                 ', 'Perez                                   ', 'xfxrickjames@gmail.com                                                                              ', '8937552', '4368733', 'Boqueron                                                                                                                                                                                                ', 'TDC                                               ', 5);
INSERT INTO formu VALUES ('etir003', 2, 1, 1, 2, 24207057, 'Anderson                                ', 'Aular                                   ', 'aular@hotmail.com                                                                                   ', '5468545', '6658537', 'La Trilla                                                                                                                                                                                               ', 'Miyagi                                            ', 6);


--
-- Name: formu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('formu_id_seq', 7, true);


--
-- Data for Name: login_admin; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO login_admin VALUES ('michael', 'leones93');
INSERT INTO login_admin VALUES ('brandon', 'arabe');
INSERT INTO login_admin VALUES ('daniel', 'holamd5');
INSERT INTO login_admin VALUES ('anderson', 'princeso');
INSERT INTO login_admin VALUES ('david', 'magallanes');


--
-- Data for Name: sexo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO sexo VALUES (1, 'Masculino           ');
INSERT INTO sexo VALUES (2, 'Femenino            ');


--
-- Name: area1_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY area1
    ADD CONSTRAINT area1_pkey PRIMARY KEY (cod_area1);


--
-- Name: area2_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY area2
    ADD CONSTRAINT area2_pkey PRIMARY KEY (cod_area2);


--
-- Name: asistencia_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY asistencia
    ADD CONSTRAINT asistencia_pkey PRIMARY KEY (fecha, hora, codigo);


--
-- Name: departamento_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY departamento
    ADD CONSTRAINT departamento_pkey PRIMARY KEY (cod_depar);


--
-- Name: formu_cedula_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY formu
    ADD CONSTRAINT formu_cedula_key UNIQUE (cedula);


--
-- Name: formu_codigo_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY formu
    ADD CONSTRAINT formu_codigo_key UNIQUE (codigo);


--
-- Name: formu_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY formu
    ADD CONSTRAINT formu_pkey PRIMARY KEY (codigo);


--
-- Name: login_admin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY login_admin
    ADD CONSTRAINT login_admin_pkey PRIMARY KEY (usuario);


--
-- Name: sexo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY sexo
    ADD CONSTRAINT sexo_pkey PRIMARY KEY (cod_sexo);


--
-- Name: asistencia_codigo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY asistencia
    ADD CONSTRAINT asistencia_codigo_fkey FOREIGN KEY (codigo) REFERENCES formu(codigo) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: formu_cod_area1_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY formu
    ADD CONSTRAINT formu_cod_area1_fkey FOREIGN KEY (cod_area1) REFERENCES area1(cod_area1) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: formu_cod_area2_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY formu
    ADD CONSTRAINT formu_cod_area2_fkey FOREIGN KEY (cod_area2) REFERENCES area2(cod_area2) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: formu_cod_depar_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY formu
    ADD CONSTRAINT formu_cod_depar_fkey FOREIGN KEY (cod_depar) REFERENCES departamento(cod_depar) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: formu_cod_sexo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY formu
    ADD CONSTRAINT formu_cod_sexo_fkey FOREIGN KEY (cod_sexo) REFERENCES sexo(cod_sexo) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

