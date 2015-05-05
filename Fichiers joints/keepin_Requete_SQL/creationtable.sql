CREATE TABLE employe(
empl_ID int NOT NULL AUTO_INCREMENT,
empl_matricule varchar(10) NOT NULL,
empl_nom varchar(100) NOT NULL,
empl_prenom varchar(150)NOT NULL,
empl_DDN date,
empl_mail varchar(255),
empl_codePin numeric(4),
empl_password varchar(100),
empl_tel varchar(10),
empl_ro_ID int NOT NULL,
empl_post_ID int NOT NULL,
empl_entr_numsiret varchar(20)NOT NULL,
CONSTRAINT pk_employer PRIMARY KEY(empl_ID));

CREATE TABLE entreprise(
entr_numsiret varchar(20) NOT NULL,
entr_nom varchar(50),
entr_denomination varchar(4),
entr_tel varchar(10),
CONSTRAINT pk_entreprise PRIMARY KEY (entr_numsiret));

CREATE TABLE poste(
post_ID int NOT NULL AUTO_INCREMENT,
post_libelle varchar(250),
post_serv_ID int NOT NULL,
CONSTRAINT pk_poste PRIMARY KEY(post_ID));

CREATE TABLE service(serv_ID int NOT NULL AUTO_INCREMENT,
serv_libelle varchar(250),
CONSTRAINT pk_service PRIMARY KEY(serv_ID));

CREATE TABLE niveau(
niv_ID int NOT NULL AUTO_INCREMENT,
niv_libelle Varchar(50),
CONSTRAINT pk_niveau PRIMARY KEY(niv_ID));

CREATE TABLE acces(
acc_ID int NOT NULL AUTO_INCREMENT,
acc_dateDebut date,
acc_DateFin date,
CONSTRAINT pk_acces PRIMARY KEY(acc_ID)); 

CREATE TABLE porte(
port_ID int NOT NULL AUTO_INCREMENT,
port_libelle varchar(7),
CONSTRAINT pk_porte PRIMARY KEY(port_ID));

CREATE TABLE etage(
eta_ID int NOT NULL AUTO_INCREMENT,
eta_libelle varchar(10),
CONSTRAINT pk_etage PRIMARY KEY(eta_ID));

CREATE TABLE batiment(
bat_ID int NOT NULL AUTO_INCREMENT,
bat_libelle varchar(7),
CONSTRAINT pk_batiment PRIMARY KEY(bat_ID));

CREATE TABLE role(
ro_ID int NOT NULL AUTO_INCREMENT,
ro_libelle varchar(50),
CONSTRAINT pk_role PRIMARY KEY(ro_Id));

CREATE TABLE deverrouiller(
dev_port_ID int NOT NULL,
dev_acc_ID int NOT NULL,
dev_niv_ID int NOT NULL,
dev_heure time,
dev_dateJour date,
CONSTRAINT pk_deverouiller PRIMARY KEY(dev_port_ID,dev_acc_ID,dev_niv_ID));

CREATE TABLE comporter(
comp_niv_ID int NOT NULL,
comp_serv_ID int NOT NULL,
CONSTRAINT pk_comporter primary  key(comp_niv_ID,comp_serv_ID));

CREATE TABLE accorder(
acco_niv_id int NOT NULL,
acco_acc_id int NOT NULL,
CONSTRAINT pk_accorder PRIMARY KEY(acco_niv_id,acco_acc_id));

CREATE TABLE posseder(
poss_empl_id int NOT NULL, 
poss_acc_id int NOT NULL,
CONSTRAINT pk_posseder PRIMARY KEY(poss_empl_id,poss_acc_id));

CREATE TABLE autoriser(
autor_port_id int NOT NULL,
autor_acc_id int NOT NULL,
CONSTRAINT pk_autoriser PRIMARY KEY(autor_port_id,autor_acc_id));

create table ajouter(
aj_port_id int not null,
aj_niv_id int not null,
constraint pk_ajouter primary key(aj_port_id, aj_niv_id));

ALTER TABLE porte
ADD port_eta_ID int NOT NULL,
ADD port_bat_ID int NOT NULL;

ALTER TABLE niveau
ADD niv_serv_ID int NOT NULL;

ALTER TABLE employe
ADD empl_niv_ID int NOT NULL;

