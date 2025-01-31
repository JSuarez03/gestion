--
-- PostgreSQL database dump
--

-- Dumped from database version 16.3
-- Dumped by pg_dump version 16.3

-- Started on 2025-01-31 12:31:47

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

--
-- TOC entry 4 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: pg_database_owner
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO pg_database_owner;

--
-- TOC entry 4859 (class 0 OID 0)
-- Dependencies: 4
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: pg_database_owner
--

COMMENT ON SCHEMA public IS 'standard public schema';


--
-- TOC entry 854 (class 1247 OID 82073)
-- Name: validez; Type: TYPE; Schema: public; Owner: postgres
--

CREATE TYPE public.validez AS ENUM (
    'confirmada',
    'pendiente',
    'cancelada',
    'confirmado'
);


ALTER TYPE public.validez OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 229 (class 1259 OID 114759)
-- Name: movimientos_productos; Type: TABLE; Schema: public; Owner: root
--

CREATE TABLE public.movimientos_productos (
    id_movimiento bigint NOT NULL,
    id_cliente integer NOT NULL,
    id_producto integer NOT NULL,
    hora_movimiento time with time zone NOT NULL,
    fecha_movimiento date NOT NULL,
    cantidad integer NOT NULL,
    precio double precision NOT NULL,
    id_usuario integer
);


ALTER TABLE public.movimientos_productos OWNER TO root;

--
-- TOC entry 228 (class 1259 OID 114758)
-- Name: Movimientos_Productos_id_movimiento_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE public."Movimientos_Productos_id_movimiento_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public."Movimientos_Productos_id_movimiento_seq" OWNER TO root;

--
-- TOC entry 4860 (class 0 OID 0)
-- Dependencies: 228
-- Name: Movimientos_Productos_id_movimiento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE public."Movimientos_Productos_id_movimiento_seq" OWNED BY public.movimientos_productos.id_movimiento;


--
-- TOC entry 222 (class 1259 OID 82120)
-- Name: categorias; Type: TABLE; Schema: public; Owner: root
--

CREATE TABLE public.categorias (
    id_categoria integer NOT NULL,
    nombre_categoria character varying(50) NOT NULL,
    status integer DEFAULT 0,
    id_usuario integer,
    CONSTRAINT categorias_status_check CHECK (((status = 1) OR (status = 0)))
);


ALTER TABLE public.categorias OWNER TO root;

--
-- TOC entry 221 (class 1259 OID 82119)
-- Name: categorias_id_categoria_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE public.categorias_id_categoria_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.categorias_id_categoria_seq OWNER TO root;

--
-- TOC entry 4861 (class 0 OID 0)
-- Dependencies: 221
-- Name: categorias_id_categoria_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE public.categorias_id_categoria_seq OWNED BY public.categorias.id_categoria;


--
-- TOC entry 220 (class 1259 OID 82096)
-- Name: citas; Type: TABLE; Schema: public; Owner: root
--

CREATE TABLE public.citas (
    id_cita integer NOT NULL,
    cedula_cliente integer NOT NULL,
    fecha date NOT NULL,
    hora time without time zone NOT NULL,
    servicio character varying(100) NOT NULL,
    estado public.validez NOT NULL,
    status integer DEFAULT 0,
    id_usuario integer,
    CONSTRAINT ch_status_citas CHECK (((status = 0) OR (status = 1))),
    CONSTRAINT citas_status_check CHECK (((status = 1) OR (status = 0)))
);


ALTER TABLE public.citas OWNER TO root;

--
-- TOC entry 218 (class 1259 OID 82089)
-- Name: clientes; Type: TABLE; Schema: public; Owner: root
--

CREATE TABLE public.clientes (
    cedula integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    direccion character varying(255),
    telefono character varying(15),
    id_usuario integer
);


ALTER TABLE public.clientes OWNER TO root;

--
-- TOC entry 225 (class 1259 OID 114737)
-- Name: citas_clientes; Type: VIEW; Schema: public; Owner: root
--

CREATE VIEW public.citas_clientes AS
 SELECT cl.nombre,
    cl.apellido,
    c.id_cita,
    c.cedula_cliente,
    c.fecha,
    c.hora,
    c.status,
    c.servicio,
    c.estado
   FROM (public.citas c
     JOIN public.clientes cl ON ((cl.cedula = c.cedula_cliente)))
  WHERE ((now() < (c.hora + c.fecha)) AND (c.status = 0));


ALTER VIEW public.citas_clientes OWNER TO root;

--
-- TOC entry 226 (class 1259 OID 114742)
-- Name: citas_historicas; Type: VIEW; Schema: public; Owner: root
--

CREATE VIEW public.citas_historicas AS
 SELECT cl.nombre,
    cl.apellido,
    c.id_cita,
    c.cedula_cliente,
    c.fecha,
    c.hora,
    c.status,
    c.servicio,
    c.estado
   FROM (public.citas c
     JOIN public.clientes cl ON ((cl.cedula = c.cedula_cliente)))
  WHERE ((now() > (c.hora + c.fecha)) AND (c.status = 0));


ALTER VIEW public.citas_historicas OWNER TO root;

--
-- TOC entry 219 (class 1259 OID 82095)
-- Name: citas_id_cita_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE public.citas_id_cita_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.citas_id_cita_seq OWNER TO root;

--
-- TOC entry 4862 (class 0 OID 0)
-- Dependencies: 219
-- Name: citas_id_cita_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE public.citas_id_cita_seq OWNED BY public.citas.id_cita;


--
-- TOC entry 217 (class 1259 OID 82088)
-- Name: clientes_id_cliente_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE public.clientes_id_cliente_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.clientes_id_cliente_seq OWNER TO root;

--
-- TOC entry 4863 (class 0 OID 0)
-- Dependencies: 217
-- Name: clientes_id_cliente_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE public.clientes_id_cliente_seq OWNED BY public.clientes.cedula;


--
-- TOC entry 224 (class 1259 OID 82127)
-- Name: productos; Type: TABLE; Schema: public; Owner: root
--

CREATE TABLE public.productos (
    id_producto integer NOT NULL,
    nombre_producto character varying(100) NOT NULL,
    descripcion text,
    cantidad integer NOT NULL,
    precio_unitario numeric(10,2) NOT NULL,
    id_categoria integer NOT NULL
);


ALTER TABLE public.productos OWNER TO root;

--
-- TOC entry 227 (class 1259 OID 114751)
-- Name: low_stock; Type: VIEW; Schema: public; Owner: root
--

CREATE VIEW public.low_stock AS
 SELECT id_producto,
    nombre_producto,
    descripcion,
    cantidad,
    precio_unitario,
    id_categoria
   FROM public.productos
  WHERE (cantidad <= 5);


ALTER VIEW public.low_stock OWNER TO root;

--
-- TOC entry 223 (class 1259 OID 82126)
-- Name: productos_id_producto_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE public.productos_id_producto_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.productos_id_producto_seq OWNER TO root;

--
-- TOC entry 4864 (class 0 OID 0)
-- Dependencies: 223
-- Name: productos_id_producto_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE public.productos_id_producto_seq OWNED BY public.productos.id_producto;


--
-- TOC entry 216 (class 1259 OID 82080)
-- Name: usuarios; Type: TABLE; Schema: public; Owner: root
--

CREATE TABLE public.usuarios (
    id_usuario integer NOT NULL,
    nombre character varying(50) NOT NULL,
    email character varying(100) NOT NULL,
    contrasena character varying(255) NOT NULL,
    apellido character varying(50) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO root;

--
-- TOC entry 215 (class 1259 OID 82079)
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE public.usuarios_id_usuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuarios_id_usuario_seq OWNER TO root;

--
-- TOC entry 4865 (class 0 OID 0)
-- Dependencies: 215
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE public.usuarios_id_usuario_seq OWNED BY public.usuarios.id_usuario;


--
-- TOC entry 4677 (class 2604 OID 82123)
-- Name: categorias id_categoria; Type: DEFAULT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.categorias ALTER COLUMN id_categoria SET DEFAULT nextval('public.categorias_id_categoria_seq'::regclass);


--
-- TOC entry 4675 (class 2604 OID 82099)
-- Name: citas id_cita; Type: DEFAULT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.citas ALTER COLUMN id_cita SET DEFAULT nextval('public.citas_id_cita_seq'::regclass);


--
-- TOC entry 4680 (class 2604 OID 114762)
-- Name: movimientos_productos id_movimiento; Type: DEFAULT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.movimientos_productos ALTER COLUMN id_movimiento SET DEFAULT nextval('public."Movimientos_Productos_id_movimiento_seq"'::regclass);


--
-- TOC entry 4679 (class 2604 OID 82130)
-- Name: productos id_producto; Type: DEFAULT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.productos ALTER COLUMN id_producto SET DEFAULT nextval('public.productos_id_producto_seq'::regclass);


--
-- TOC entry 4674 (class 2604 OID 82083)
-- Name: usuarios id_usuario; Type: DEFAULT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuarios_id_usuario_seq'::regclass);


--
-- TOC entry 4699 (class 2606 OID 114764)
-- Name: movimientos_productos Movimientos_Productos_pkey; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.movimientos_productos
    ADD CONSTRAINT "Movimientos_Productos_pkey" PRIMARY KEY (id_movimiento);


--
-- TOC entry 4695 (class 2606 OID 82125)
-- Name: categorias categorias_pkey; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.categorias
    ADD CONSTRAINT categorias_pkey PRIMARY KEY (id_categoria);


--
-- TOC entry 4693 (class 2606 OID 82101)
-- Name: citas citas_pkey; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.citas
    ADD CONSTRAINT citas_pkey PRIMARY KEY (id_cita);


--
-- TOC entry 4689 (class 2606 OID 82094)
-- Name: clientes clientes_pkey; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_pkey PRIMARY KEY (cedula);


--
-- TOC entry 4697 (class 2606 OID 82134)
-- Name: productos productos_pkey; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (id_producto);


--
-- TOC entry 4691 (class 2606 OID 106532)
-- Name: clientes uq_client; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT uq_client UNIQUE (telefono);


--
-- TOC entry 4685 (class 2606 OID 82087)
-- Name: usuarios usuarios_email_key; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_email_key UNIQUE (email);


--
-- TOC entry 4687 (class 2606 OID 82085)
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id_usuario);


--
-- TOC entry 4703 (class 2606 OID 122920)
-- Name: categorias categorias_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.categorias
    ADD CONSTRAINT categorias_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario);


--
-- TOC entry 4701 (class 2606 OID 82102)
-- Name: citas citas_id_cliente_fkey; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.citas
    ADD CONSTRAINT citas_id_cliente_fkey FOREIGN KEY (cedula_cliente) REFERENCES public.clientes(cedula);


--
-- TOC entry 4702 (class 2606 OID 122925)
-- Name: citas citas_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.citas
    ADD CONSTRAINT citas_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario);


--
-- TOC entry 4700 (class 2606 OID 122911)
-- Name: clientes clientes_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario);


--
-- TOC entry 4705 (class 2606 OID 114770)
-- Name: movimientos_productos fk_cliente_mov; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.movimientos_productos
    ADD CONSTRAINT fk_cliente_mov FOREIGN KEY (id_cliente) REFERENCES public.clientes(cedula) NOT VALID;


--
-- TOC entry 4706 (class 2606 OID 114765)
-- Name: movimientos_productos fk_producto_mov; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.movimientos_productos
    ADD CONSTRAINT fk_producto_mov FOREIGN KEY (id_producto) REFERENCES public.productos(id_producto) ON UPDATE RESTRICT ON DELETE RESTRICT NOT VALID;


--
-- TOC entry 4707 (class 2606 OID 122930)
-- Name: movimientos_productos movimientos_productos_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.movimientos_productos
    ADD CONSTRAINT movimientos_productos_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario);


--
-- TOC entry 4704 (class 2606 OID 82135)
-- Name: productos productos_id_categoria_fkey; Type: FK CONSTRAINT; Schema: public; Owner: root
--

ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_id_categoria_fkey FOREIGN KEY (id_categoria) REFERENCES public.categorias(id_categoria);


-- Completed on 2025-01-31 12:31:47

--
-- PostgreSQL database dump complete
--

