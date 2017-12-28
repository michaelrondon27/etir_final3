/*
Created		24/11/2015
Modified		24/11/2015
Project		
Model			
Company		
Author		
Version		
Database		PostgreSQL 8.1 
*/


/* Create Domains */


/* Create Tables */


Create table "login_admin"
(
	"usuario" Varchar(20) NOT NULL,
	"contrase_a" Varchar(50),
 primary key ("usuario")
) Without Oids;


Create table "area1"
(
	"cod_area1" Smallint NOT NULL,
	"descrip" Integer,
 primary key ("cod_area1")
) Without Oids;


Create table "area2"
(
	"cod_area2" Smallint NOT NULL,
	"descrip" Integer,
 primary key ("cod_area2")
) Without Oids;


Create table "sexo"
(
	"cod_sexo" Smallint NOT NULL,
	"descrip" Char(20),
 primary key ("cod_sexo")
) Without Oids;


Create table "departamento"
(
	"cod_depar" Smallint NOT NULL,
	"descrip" Char(20),
 primary key ("cod_depar")
) Without Oids;


Create table "formu"
(
	"codigo" Char(10) NOT NULL,
	"cod_depar" Smallint NOT NULL,
	"cod_sexo" Smallint NOT NULL,
	"cod_area1" Smallint NOT NULL,
	"cod_area2" Smallint NOT NULL,
	"cedula" Integer UNIQUE,
	"nombre" Char(40),
	"apellido" Char(40),
	"correo" Char(100),
	"telefono1" Char(7),
	"telefono2" Char(7),
	"direccion" Char(200),
	"cargo" Char(50),
	"id" Serial,
 primary key ("codigo")
) Without Oids;

Alter Table "formu" add UNIQUE ("codigo");

Create table "asistencia"
(
	"fecha" Date NOT NULL,
	"hora" Time NOT NULL,
	"codigo" Char(10) NOT NULL,
 primary key ("fecha","hora","codigo")
) Without Oids;


/* Create Tab 'Others' for Selected Tables */


/* Create Alternate Keys */


/* Create Indexes */


/* Create Foreign Keys */

Alter table "formu" add  foreign key ("cod_area1") references "area1" ("cod_area1") on update restrict on delete restrict;

Alter table "formu" add  foreign key ("cod_area2") references "area2" ("cod_area2") on update restrict on delete restrict;

Alter table "formu" add  foreign key ("cod_sexo") references "sexo" ("cod_sexo") on update restrict on delete restrict;

Alter table "formu" add  foreign key ("cod_depar") references "departamento" ("cod_depar") on update restrict on delete restrict;

Alter table "asistencia" add  foreign key ("codigo") references "formu" ("codigo") on update restrict on delete restrict;


/* Create Procedures */


/* Create Views */


/* Create Referential Integrity Triggers */


/* Create User-Defined Triggers */


/* Create Roles */


/* Create Role Permissions */
/* Role permissions on tables */

/* Role permissions on views */

/* Role permissions on procedures */


