create table employe(empl_ID int not null AUTO_INCREMENT,
empl_matricule varchar(10) not null,
empl_nom varchar(100) not null,
empl_prenom varchar(150)not null,
empl_DDN date,
empl_mail varchar(255),
empl_codePin numeric(4),
empl_password varchar(6),
empl_tel varchar(10),
constraint pk_employer primary key(empl_ID));

create table poste(post_ID int not null AUTO_INCREMENT,
post_libelle varchar(250),
constraint pk_poste primary key(post_ID));

create table service(serv_ID int not null AUTO_INCREMENT,
serv_libelle varchar(250),
constraint pk_service primary key(serv_ID));

create table niveau(niv_ID int not null AUTO_INCREMENT,
niv_libelle Varchar(50),
constraint pk_niveau primary key(niv_ID));

create table acces(acc_ID int not null AUTO_INCREMENT,
acc_dateDebut date,
acc_DateFin date,
constraint pk_acces primary key(acc_ID));

create table porte(port_ID int not null AUTO_INCREMENT,
port_libelle varchar(7),
constraint pk_porte primary key(port_ID));

create table etage(eta_ID int not null AUTO_INCREMENT,
eta_libelle varchar(10),
constraint pk_etage primary key(eta_ID));

create table batiment(bat_ID int not null AUTO_INCREMENT,
bat_libelle varchar(7),
constraint pk_batiment primary key(bat_ID));

 create table role(ro_ID int not null AUTO_increment,
 ro_libelle varchar(10),
 constraint pk_role primary key(ro_Id));