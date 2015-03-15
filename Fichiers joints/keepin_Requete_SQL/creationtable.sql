create table employe(
empl_ID int not null AUTO_INCREMENT,
empl_matricule varchar(10) not null,
empl_nom varchar(100) not null,
empl_prenom varchar(150)not null,
empl_DDN date,
empl_mail varchar(255),
empl_codePin numeric(4),
empl_password varchar(100),
empl_tel varchar(10),
empl_ro_ID int not null,
empl_post_ID int not null,
empl_entr_numsiret varchar(20)not null,
constraint pk_employer primary key(empl_ID));

create table entreprise(
entr_numsiret varchar(20) not null,
entr_nom varchar(50),
entr_denomination char(4),
entr_tel varchar(10),
constraint pk_entreprise primary key (entr_numsiret));

create table poste(
post_ID int not null AUTO_INCREMENT,
post_libelle varchar(250),
post_serv_ID int not null,
constraint pk_poste primary key(post_ID));

create table service(serv_ID int not null AUTO_INCREMENT,
serv_libelle varchar(250),
constraint pk_service primary key(serv_ID));

create table niveau(
niv_ID int not null AUTO_INCREMENT,
niv_libelle Varchar(50),
constraint pk_niveau primary key(niv_ID));

create table acces(
acc_ID int not null AUTO_INCREMENT,
acc_dateDebut date,
acc_DateFin date,
constraint pk_acces primary key(acc_ID)); 

create table porte(
port_ID int not null AUTO_INCREMENT,
port_libelle varchar(7),
constraint pk_porte primary key(port_ID));

create table etage(
eta_ID int not null AUTO_INCREMENT,
eta_libelle varchar(10),
constraint pk_etage primary key(eta_ID));

create table batiment(
bat_ID int not null AUTO_INCREMENT,
bat_libelle varchar(7),
constraint pk_batiment primary key(bat_ID));

create table role(
ro_ID int not null AUTO_increment,
ro_libelle varchar(10),
constraint pk_role primary key(ro_Id));

create table deverrouiller(
dev_port_ID int not null,
dev_acc_ID int not null,
dev_niv_ID int not null,
dev_heure time,
dev_dateJour date,
constraint pk_deverouiller primary key(dev_port_ID,dev_acc_ID,dev_niv_ID));

create table comporter(
comp_niv_ID int not null,
comp_serv_ID int not null,
constraint pk_comporter primary  key(comp_niv_ID,comp_serv_ID));

create table accorder(
acco_niv_id int not null,
acco_acc_id int not null,
constraint pk_accorder primary key(acco_niv_id,acco_acc_id));

create table posseder(
poss_empl_id int not null, 
poss_acc_id int not null,
constraint pk_posseder primary key(poss_emp_id,poss_acc_id));

create table autoriser(
autor_port_id int not null,
autor_acc_id int not null,
constraint pk_autoriser primary key(autor_port_id,autor_acc_id));





