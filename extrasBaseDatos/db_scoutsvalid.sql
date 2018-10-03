/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     8/29/2018 3:46:01 PM                         */
/*==============================================================*/


drop table if exists DIRIGENTE;

drop table if exists GRUPO;

drop table if exists JEFE_GRUPO;

drop table if exists TRABAJADOR;

drop table if exists USUARIO;

/*==============================================================*/
/* Table: DIRIGENTE                                             */
/*==============================================================*/
create table DIRIGENTE
(
   CEDULA_TRA           varchar(10) not null,
   ID_GRUPO_SCOUT       int not null,
   UNIDAD               varchar(20) not null,
   CARGO                varchar(20) not null,
   primary key (CEDULA_TRA)
);

/*==============================================================*/
/* Table: GRUPO                                                 */
/*==============================================================*/
create table GRUPO
(
   ID_GRUPO_SCOUT       int not null auto_increment,
   NOMBRE_GRUPO         varchar(200),
   NUMERO_INTEGRANTES   int,
   primary key (ID_GRUPO_SCOUT)
);

/*==============================================================*/
/* Table: JEFE_GRUPO                                            */
/*==============================================================*/
create table JEFE_GRUPO
(
   CEDULA_TRA           varchar(10) not null,
   FECHA_ELECCION       date not null,
   INFORMACION          varchar(300) not null,
   primary key (CEDULA_TRA)
);

/*==============================================================*/
/* Table: TRABAJADOR                                            */
/*==============================================================*/
create table TRABAJADOR
(
   CEDULA_TRA           varchar(10) not null,
   NOMBRE_TRA           varchar(100) not null,
   APELLIDO_TRA         varchar(100) not null,
   TELEFONO             varchar(10) not null,
   FECH_NAC_TRA         date not null,
   EDAD_TRA             int not null,
   GENERO_TRA           char(50) not null,
   EMAIL_TRA            varchar(100) not null,
   ESTADO_TRA           int not null,
   CONTRASENA_TRA       char(100) not null,
   DIRECCION            varchar(100) not null,
   primary key (CEDULA_TRA)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   CEDULA               varchar(10) not null,
   ID_GRUPO_SCOUT       int not null,
   NOMBRE               varchar(50) not null,
   APELLIDO             varchar(50) not null,
   FECHA_NAC            date not null,
   DIRECCION            varchar(100) not null,
   TELEFONO             varchar(10) not null,
   EDAD                 int not null,
   EMAIL                varchar(50) not null,
   UNIDAD               varchar(20) not null,
   CED_REPRE            varchar(10) not null,
   NOMBRE_REPRE         varchar(50) not null,
   DIRECCION_REPRE      varchar(100) not null,
   TELEFONO_REPRE       varchar(10) not null,
   ESTADO               int not null,
   CONTRASENA           varchar(100) not null,
   primary key (CEDULA)
);

alter table DIRIGENTE add constraint FK_GRUPO_DIRIGENTE foreign key (ID_GRUPO_SCOUT)
      references GRUPO (ID_GRUPO_SCOUT) on delete restrict on update restrict;

alter table DIRIGENTE add constraint FK_TRABAJADOR_DIRIGENTE2 foreign key (CEDULA_TRA)
      references TRABAJADOR (CEDULA_TRA) on delete restrict on update restrict;

alter table JEFE_GRUPO add constraint FK_TRABAJADOR_JEFE2 foreign key (CEDULA_TRA)
      references TRABAJADOR (CEDULA_TRA) on delete restrict on update restrict;

alter table USUARIO add constraint FK_GRUPO_USUARIO foreign key (ID_GRUPO_SCOUT)
      references GRUPO (ID_GRUPO_SCOUT) on delete restrict on update restrict;

