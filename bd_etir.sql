/*
Created		16/11/2015
Modified		16/11/2015
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
	"usuario" Char(15),
	"clave" Char(20) NOT NULL,
 primary key ("clave")
) Without Oids;


Create table "formu"
(
	"id" Serial NOT NULL,
	"cedula" Integer,
	"nombre" Char(20),
	"apellido" Char(20),
	"sexo" Char(20),
	"correo" Char(40),
	"telefono1" Char(20),
	"telefono2" Char(20),
	"direccion" Char(50),
	"departmento" Char(20),
	"cargo" Char(20),
 primary key ("id")
) Without Oids;


Create table "asistencia"
(
	"cedula" Integer NOT NULL,
	"id" Integer NOT NULL,
	"fecha" Date NOT NULL,
	"hora" Time with time zone,
 primary key ("cedula","id","fecha")
) Without Oids;


Create table "reporte"
(
	"cedula" Integer NOT NULL,
	"descrip" Char(60),
	"id" Integer NOT NULL,
 primary key ("id")
) Without Oids;


/* Create Tab 'Others' for Selected Tables */


/* Create Indexes */


/* Create Foreign Keys */

Alter table "asistencia" add  foreign key ("id") references "formu" ("id") on update restrict on delete restrict;

Alter table "reporte" add  foreign key ("id") references "formu" ("id") on update restrict on delete restrict;


/* Create Referential Integrity Triggers */


