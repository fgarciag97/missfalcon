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

--
-- Data for Name: categorias; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.categorias (id, denominacion, estatus) VALUES (5, 'TEEN', true);
INSERT INTO public.categorias (id, denominacion, estatus) VALUES (6, 'MISS', true);


--
-- Data for Name: candidatas; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (14, 6, 'BIANCA MADRIZ', 'LOS TAQUES ', '19', 30059494, '2002-05-02', 'AV ROMULO GALLEGOS', '04146847502', '04146847502', 'https://www.instagram.com/madrizbianca', 'bianca madriz', 'ASISTENTE DE PRODUCCION AUDIO VISUAL, GUINISTA Y ESTUDIANTE DE HISTOCITOTECNOLOGIA', 'CANTAR, BAILAR Y ENTRENAR EN EL GIMNASIO ', 84.00, 60.00, 90.00, 'NO', 1.65, 'IMG_7202-.jpg', 'fd7e68ff-cf27-48c1-9c50-e873cd0de478', true, 10);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (15, 6, 'YAURIMAR SIBADA', 'MAUROA', '16', 30986626, '2004-09-30', 'CAUJARAO', '04120609300', '04120609300', 'https://www.instagram.com/yaurimarsg', 'yaurimar sibada', 'BACHILLER Y MODELO', 'MODELAR', 78.00, 57.00, 85.00, 'SI', 1.58, 'IMG_7131-.jpg', 'e5de573d-aeda-4905-9632-a4e5e677f42d', true, 11);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (7, 6, 'ANAÍS MORA ', 'ACOSTA', '24', 25371780, '1997-01-01', 'CALLE FEDERACION ENTRE SOL Y DEMOCRACIA', '04127982349', '0', 'https://es-la.facebook.com/AnaísMoraSalas', 'https://es-la.facebook.com/AnaísMoraSalas', 'OESTUDIANTE DE NUTRICIÓN Y DIETÉTICA/ MODELAJE', 'CANTAR, ACTUAR Y KARATE', 77.00, 58.00, 90.00, 'SI', 1.62, 'IMG_7263-.jpg', '59931126-7fb4-469e-ad7d-e1fba6924375', true, 1);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (4, 5, 'ISMAILYS GUANIPA', 'BOLIVAR', '16', 30675022, '2005-01-04', 'CRUZ VERDE', '04126622717', '222', 'ismailys_guanipa', 'ISMAILYS GUANIPA', 'ESTUDIANTE', 'PELUQUERIA', 80.00, 60.00, 86.00, 'NO ', 1.64, 'IMG_7272-(1).jpg', '7810a26b-2edc-4262-a114-7d12b781d8c0', true, 2);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (6, 5, 'VALERIA QUINTERO', 'BUCHIVACOA', '16', 31343512, '2005-02-17', 'BOBARE', '04126820690', '0', 'https://www.instagram.com/Valeriaquintero_1', 'https://facebook.com/ValeriaQuintero', 'OCUPACIÓN ESTUDIANTE DE 5TO AÑO DE BACHILLERATO', 'LEER, ACTUAR', 79.00, 63.00, 89.00, 'NINGUNA', 1.68, 'IMG_7165-(1).jpg', 'db2cbb04-1637-4ff9-8901-a278c862a694', true, 3);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (8, 5, 'MARIAN VERA', 'CARIRUBANA', '15', 31470616, '2005-10-10', 'URB. JUAN CRISOSTOMO FALCON NUCLEO 5 EDIFICIO GUARANAO PB-03', '04126670376', '04126670376', '@MARIANVERAG_', 'MARIAN VERA ', 'ESTUDIANTE DE 5TO AÑO Y SELECCION DEL ESTADO FALCON EN NATACION ', 'COCINAR, ENTRENAMIENTOS EN AGUAS ABIERTAS Y BAILAR ', 84.00, 63.00, 95.00, 'NO ', 1.60, 'IMG_7217-(1).jpg', '7d33306b-c672-4363-a3a6-88060ac0530e', true, 4);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (9, 6, 'EDWUAGELIS AULAR', 'COLINA', '19', 30193534, '2002-07-24', 'LA VELA CALLE TALAVERA SECTOR MANAURE ', '04126918987', '04126918987', 'edwuagelisgav', 'edwuagelis aular', 'ASISTENTE DE PRESIDENCIA CMDNNA', 'BAILAR Y MODELAR', 87.00, 67.00, 91.00, 'NO', 1.60, 'IMG_7039-.jpg', 'd8fe2717-2dcb-4420-84da-edc15a4bc7af', true, 5);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (16, 5, 'JEROMY GONZALEZ', 'MIRANDA', '16', 31875128, '2005-02-23', 'CALLEJON PAUL FLORES', '04126612166', '04126612166', 'https://www.instagram.com/jeromigonzaleez', 'jeromy gonzalez', 'ESTUDIANTE DE 5TO AÑO DE BACHIDERATO', 'BAILAR, APRENDER NUEVAS TECNICAS DE MAQUILLAJE Y MODELAR', 83.00, 61.00, 89.00, 'SI', 1.60, 'IMG_7157-.jpg', 'fb765088-6474-40f3-a808-f5384bd649cf', true, 12);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (10, 6, 'GABRIELA GOMEZ ', 'DABAJURO', '17', 30463052, '2003-09-16', 'AV SUCRE', '04146696403', '04264233256', 'https://www.instagram.com/gabrielayerlin_16/', 'gabriela yerlin gp', 'ESTUDIANTE Y COMERCIANTE ', 'CANTAR Y LEER', 86.00, 66.00, 91.00, 'NO', 1.78, 'IMG_7189-.jpg', 'c457b6c7-7003-4260-a69d-eeeb36b71580', true, 6);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (11, 6, 'KARIOLYS MEDINA ', 'DEMOCRACIA', '18', 29979619, '2003-01-18', 'SAN JOSE CALLE ROMULO GALLEGOS CASA 4', '04126933387', '04126933387', 'https://www.instagram.com/kariolys_medina', 'kariolys medina', 'ESTUDIANTE DE 1ER SEMESTRE DE MEDICINA UNEFM', 'CANTO, MODELAJE Y LECTURA', 79.00, 60.00, 87.00, 'NO', 1.72, 'IMG_6956-.jpg', 'f506d630-4ed3-4675-96c8-0176dcb26afe', true, 7);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (17, 6, 'STEPHANIE GUEDEZ ', 'PALMASOLA', '19', 30462822, '2002-04-30', 'INDEPENDENCIA, URB ARENALES ', '0412682356', '04126823356', 'https://www.instagram.com/STEPHANIE.GUEDEZ', 'STEPHANIE GUEDEZ', 'ESTUDIANTE', 'ESCRITORA DE LIBROS', 75.00, 64.00, 85.00, 'NO', 1.75, 'IMG_7078-.jpg', '50c53247-dc38-4178-88c5-519a43e721be', true, 13);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (12, 6, 'YULIBETH SANCHEZ', 'FALCON', '21', 27543934, '1999-11-29', 'CAUJARAO', '04126468807', '04126468807', 'https://www.instagram.com/yulibethmsb', 'yulibeth sanchez', 'ESTUDIANTE DE FISIOTERAPIA Y MODELO', 'ESCUCHAR MUSICA Y HACERME SESIONES DE FOTO PROFESIONLES', 89.00, 67.00, 92.00, 'SI', 1.72, 'IMG_7043-.jpg', 'd08554f0-002c-4be1-a37d-a01e8de650de', true, 8);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (18, 6, 'MARIA HIDALGO', 'PETIT', '17', 30294836, '2003-08-30', 'URB FRANCISCO DE MIRANDA', '04263653087', '04263653087', 'https://www.instagram.com/hdgmariave', 'maria hidalgo', 'ESTUDIANTE DE 5TO AÑO', 'BAILAR Y LA COMEDIA ', 77.00, 60.00, 88.00, 'NO', 1.66, 'IMG_7172-.jpg', 'f566e3eb-f382-4a81-bb4d-05550efb5460', true, 14);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (13, 6, 'AMANDA MEDINA', 'FEDERACION ', '17', 31149704, '2001-07-15', 'URB PRADOS DEL ESTE ', '04127685024', '04127685024', 'https://www.instagram.com/amandag1507', 'amanda gabriela', 'BACHILLER ', 'MAQUILLAR', 77.00, 58.00, 83.00, 'NO', 1.53, 'IMG_6974-.jpg', '444fabae-5578-48e7-98c3-a066381bbf05', true, 9);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (19, 6, 'LITANI FLORES', 'PIRITU', '17', 31091100, '2004-06-25', 'LA VELA SECTOR MATURI CALLE ZAMORA', '04121678415', '04121678415', 'https://www.instagram.com/litaniflowersoficial', 'litani flores', 'BARBERIA ', 'TAEKWONDO', 77.00, 61.00, 82.00, 'NO', 1.60, 'IMG_7086-.jpg', '41a4b394-c0a0-4dfb-9aa9-7290e6b237e3', true, 15);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (20, 6, 'YIBELYS LUGO', 'SILVA', '20', 30017485, '2000-10-22', 'TARATARA', '04126860238', '04126860238', 'https://www.instagram.com/yibelyslugo_01', 'yibelys lugo', 'ESTUDIANTE DE ENFERMERIA ', 'BAILAR', 87.00, 67.00, 87.00, 'NO', 1.65, 'IMG_7014-.jpg', '35f58c41-6fed-4376-b944-3ca7b0102dc1', true, 16);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (21, 6, 'ALEXANDRA PACILLO', 'SUCRE', '18', 30295105, '2002-11-26', 'URB LAS EUGENIAS CALE PRINCIPAL 3ERA ETAPA CASA N`AB3-2', '04167452040', '04167452040', 'https://www.instagram.com/alepchl', 'alexandra pacillo', 'ESTUDIANTE DEL SEGUNDO SEMESTRES DE MEDICINA  Y MODELO', 'LAS REDES SOCIALES, LA FOTOGRAFIA Y ENSEÑAR A LAS NIÑAS MIS CONOCIMIENTOS EN EL MUNDO DEL MODELAJE', 88.00, 67.00, 88.00, 'SI', 1.65, 'IMG_7139-.jpg', '7d1fa1cc-d0e6-48c7-a5e4-6f5f1ead7253', true, 17);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (22, 6, 'BRITNY BORJAS', 'TOCOPERO', '18', 31801926, '2003-04-23', 'LAS MALVINAS SECTOR CARRIZALITO', '04121253907', '04121253907', 'https://www.instagram.com/britny_borjas', 'paola borjas', 'ESTUDIANTE DE CONTADURIA PUBLICA', 'MODELAR Y BAILAR', 80.00, 65.00, 85.00, 'NO', 1.58, 'IMG_7191-.jpg', '823e8f3c-b922-4fc5-befc-558f81d73318', true, 18);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (23, 5, 'ANDREA MORILLO', 'UNION', '16', 31470364, '2005-07-23', 'CALLE VUELVANCARAS ENTRE 23 DE ENERO Y AYACUCHO', '04146517125', '04146517125', 'https://www.instagram.com/morillo_ca', 'andrea morillo', 'ESTUDIANTE', 'ENTRENAR', 79.00, 66.00, 87.00, 'NO', 1.65, 'IMG_7527-.jpg', 'f3f0e496-0f8f-4fb1-a220-4cb178b4897e', true, 19);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (24, 5, 'ROSA LOPEZ', 'URUMACO', '16', 31470727, '2005-08-15', 'URB LIBERTADORES DE AMERICA', '04246626404', '04246626404', 'https://www.instagram.com/rosa15_lop', 'rosa lopez', 'ESTUDIANTE DE BACHIDERATO', 'COCINAR', 78.00, 60.00, 85.00, 'NO', 1.60, 'IMG_7116-.jpg', '2f7ffef7-7384-4497-89c8-bcdd78ef1a1b', true, 20);
INSERT INTO public.candidatas (id, id_categoria, nombres, municipio, edad, cedula, fecha_nacimiento, direccion, telefono_1, telefono_2, instagram, facebook, ocupacion, hobbie, busto, cintura, cadera, experiencia, estatura, photo, photo_dir, estatus, posicion) VALUES (25, 5, 'JHAISEL MORA', 'ZAMORA', '15', 32631509, '2006-01-03', 'CARRIZAL ', '04146363755', '04146363755', 'https://www.instagram.com/jhaiselmora', 'jhaisel mora', 'ESTUDIANTE DE BACHIDERATO', 'PROGRAMA DE RADIO ', 77.00, 61.00, 80.00, 'NO', 1.60, 'IMG_7059-.jpg', '0f6a787f-3e66-45c0-8cf6-d994b826db25', true, 21);


--
-- Data for Name: privilegios; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.privilegios (id, denominacion) VALUES (0, 'SUPERADMIN');
INSERT INTO public.privilegios (id, denominacion) VALUES (1, 'ADMIN');
INSERT INTO public.privilegios (id, denominacion) VALUES (2, 'JURADO');
INSERT INTO public.privilegios (id, denominacion) VALUES (3, 'APERTURA_RONDA');


--
-- Data for Name: rondas; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.rondas (id, denominacion, estatus, apertura) VALUES (5, 'ENTREVISTA', true, false);
INSERT INTO public.rondas (id, denominacion, estatus, apertura) VALUES (6, 'TRAJE DE BAÑO', true, false);
INSERT INTO public.rondas (id, denominacion, estatus, apertura) VALUES (4, 'AUTOPRESENTACION', true, false);


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (15, 'JURADO5', 5, '5', '$2y$10$FfKpm43JUfHtBCbiWzirAuYsmtBKNddQiHGxsaIwzTaTDEG5IyITi', '5@GMAIL.COM', 2, true, '2021-08-18');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (16, '6', 6, '6', '$2y$10$piyCAYYIzIhIDgnKfqymgON35KKJ/aCqQy5ItG9zQv8EJUReQxNA.', '6@GMAIL.COM', 2, true, '2021-08-18');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (26677875, 'FELY GARCIA', 26677875, 'FGARCIAG97', '$2y$10$uxWGXx11O/lIJjSR/wxG4eKNv.0jHEeCVRTGfpdMSp7TFC83cRBRe', 'FGARCIAG97@GMAIL.COM', 0, true, '2021-08-11');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (25457921, 'Jose Francisco', 25457921, 'JOSEFSANCHEZ2511', '$2y$10$OLdqlyJvRayKA6O9V2Ze3.27CIaQ/DlY6wCY5UcUyvZenbGRqGZqG', 'josefsanchez2511@gmail.com', 0, true, '2021-08-11');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (27503872, 'Luis Edurado', 27503872, 'LUISLEAL98E', '$2y$10$5Hn.0I/JyWvShX6hiHnogur9hkhXZ3.jBBiar8RFhas2EfEjRLYFK', 'luisleal98e@gmail.com', 0, true, '2021-08-10');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (5, 'APERTURA RONDA', 11, 'APERURA', '$2y$10$bEUWFgI6xUtv1yxFDfx/YuN.6LyUex4BBwRN7dCMQDGh/71PHC.Si', 'ASASD@GMAIL.COMD', 3, true, '2021-08-13');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (2, 'ADMIN', 0, 'ADMIN', '$2y$10$Kh8GQ61KkULx4QZQ5/Qn1OdamNbQHNA6z2FjVqJLLX/UemCmh8P1K', '0@0.COM', 1, true, '2021-08-13');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (10, 'HELEM SAMPAYO', 30208832, 'HELEN', '$2y$10$xoZ6nSl48BTZT1IGDPBr4ewC1YAmOcN/mFpJ2Ahe0xe8SEPozJCbm', 'HELEM@GMAIL.COM', 1, true, '2021-08-17');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (11, 'JURADO1', 1, '1', '$2y$10$KF9dNhIiAth5jaixjdD.he95XVrrGl8QjvSokzFlu1AldTsFnhDXy', '1@GMAIL.COM', 2, true, '2021-08-18');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (12, 'JURADO2', 2, '2', '$2y$10$c1XFQ6V.jsmNiNITjUtu7ujibTRGIxvhvgCH.JToP0zv2ky.Cb5He', '2@GMAIL.COM', 2, true, '2021-08-18');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (13, 'JURADO3', 3, '3', '$2y$10$M/6MsmrsczZMR5QgxiAiGeaUEtG7JsYwGpYACEq52Pt.7ZjxcehaW', '3@GMAIL.COM', 2, true, '2021-08-18');
INSERT INTO public.usuarios (id, nombres_mostrar, cedula, usuario, password, correo, privilegio, estatus, fecha_registro) VALUES (14, 'JURADO4', 4, '4', '$2y$10$0b.72dWRRVxz/UFlkxDrGeesaLNXkRfUWXQ0sgumELJUnO7/sBz.i', '4@GMAIL.COM', 2, true, '2021-08-18');


--
-- Data for Name: calificacion; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- Data for Name: foto_pre_view; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (1, '2b00842d-494f-4589-a091-6da277a66b38', 'IMG_7548-.jpg', 'CARIRUBANA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (7, 'c36a49cb-10f8-4f9e-9143-440b529ca784', 'IMG_7272-.jpg', 'COLINA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (8, 'fb372728-8d56-400c-a881-da9efe74a406', 'IMG_7548-.jpg', 'DABAJURO', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (9, 'ca19c0e8-02ab-4a0a-9b6d-1728d2df68df', 'IMG_7165-.jpg', 'DEMOCRACIA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (10, '075d3b6f-133f-4f73-bb85-63a3a795fea0', 'IMG_7217-.jpg', 'FALCON', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (11, '42230d4a-5bbe-4c81-98f6-6a43928b05f7', 'Captura de pantalla de 2021-08-11 16-35-58.png', 'FEDERACION', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (13, 'a6915a74-54c8-46af-a4de-9d52603cf2ab', 'IMG_7272-.jpg', 'LOS TAQUES', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (14, '98ff3e12-ca92-4025-a9b3-b41e700dce73', 'IMG_7217-.jpg', 'MIRANDA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (15, '4ec81a91-03a7-4f0a-af0e-cdd2742b5520', 'IMG_7548-.jpg', 'MAUROA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (17, 'a629a06e-b5f1-46ac-845b-14629162c714', 'IMG_7272-.jpg', 'PALMA SOLA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (18, 'd557d459-af19-4816-bbbb-fd7f2726e003', 'IMG_7217-.jpg', 'PETIT', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (19, '7dba058d-df17-4af4-b45f-fb5817c314bd', 'IMG_7165-.jpg', 'PIRITU', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (21, '03b203ad-5e3d-4530-b9a6-fd103e04fbe2', 'Captura de pantalla de 2021-08-11 16-35-58.png', 'SILVA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (22, '504aec2d-1ba7-43ce-91e4-7af1ce7fdf4c', 'IMG_7217-.jpg', 'SUCRE', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (23, 'f15d7e31-e669-4b1d-af27-8340753e19c7', 'IMG_7272-.jpg', 'Tocopero', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (24, 'fb10d344-22e9-4565-977d-710c440310ac', 'IMG_7165-.jpg', 'UNION', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (25, 'd19afed6-d5fa-48f7-a743-68d5f230b0a8', 'IMG_7165-.jpg', 'URUMACO', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (26, 'dbde58e2-df2b-4cad-a3f4-6a61cc3200a5', 'IMG_7548-.jpg', 'ZAMORA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (6, '63fc33bd-84cb-4cc6-9675-29a4ac038ee3', 'Captura de pantalla de 2021-08-11 16-35-58.png', 'ACOSTA', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (4, '2048f329-5c81-416a-98b9-ba84c645a28e', 'IMG_7272-.jpg', 'BOLIVAR', true);
INSERT INTO public.foto_pre_view (id, photo_dir, photo, municipio, estatus) VALUES (2, 'e0386106-f0aa-4f14-a12e-73e28b339d0a', 'IMG_7165-(1).jpg', 'BUCHIVACOA', true);


--
-- Data for Name: foto_pricipal_candidatas; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- Data for Name: patrocinantes; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.patrocinantes (id, photo_dir, photo, nombre, denominacion, fecha_registro, estatus) VALUES (2, 'd72d6b67-2729-4bed-b41c-9bf34cd5ed43', 'systecsgl.png', 'SYSTECSGL C.A', 'DE LO FÍSICO A LO DIGITAL', '2021-08-11', true);
INSERT INTO public.patrocinantes (id, photo_dir, photo, nombre, denominacion, fecha_registro, estatus) VALUES (3, 'd1559f28-2154-46be-82f1-eba33eff01a5', 'logo2.jpeg', 'MISS FALCÓN', 'BELLESA', '2021-08-11', true);


--
-- Data for Name: votacion_actividad; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.votacion_actividad (id, denominacion, estatus) VALUES (1, 'RONDA INTERACTIVA', false);


--
-- Data for Name: votaciones_gente; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.votaciones_gente (id, id_candidata, ip) VALUES (15, 16, '201.243.89.178, 108.162.210.253');
INSERT INTO public.votaciones_gente (id, id_candidata, ip) VALUES (16, 4, '201.243.89.178, 172.70.82.5');
INSERT INTO public.votaciones_gente (id, id_candidata, ip) VALUES (17, 24, '201.243.89.178, 172.70.54.99');
INSERT INTO public.votaciones_gente (id, id_candidata, ip) VALUES (18, 16, '186.185.226.113, 172.70.51.248');
INSERT INTO public.votaciones_gente (id, id_candidata, ip) VALUES (19, 14, '201.243.89.178, 172.70.51.131');
INSERT INTO public.votaciones_gente (id, id_candidata, ip) VALUES (20, 10, '201.243.89.178, 172.70.51.133');


--
-- Name: calificacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.calificacion_id_seq', 1035, true);


--
-- Name: candidatas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.candidatas_id_seq', 25, true);


--
-- Name: categorias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.categorias_id_seq', 7, true);


--
-- Name: foto_pre_view_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.foto_pre_view_id_seq', 26, true);


--
-- Name: foto_pricipal_candidatas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.foto_pricipal_candidatas_id_seq', 4, true);


--
-- Name: patrocinantes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.patrocinantes_id_seq', 6, true);


--
-- Name: privilegios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.privilegios_id_seq', 1, false);


--
-- Name: rondas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.rondas_id_seq', 6, true);


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 16, true);


--
-- Name: votacion_actividad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.votacion_actividad_id_seq', 1, false);


--
-- Name: votaciones_gente_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.votaciones_gente_id_seq', 20, true);


--
-- PostgreSQL database dump complete
--

