create table employe(empl_ID int not null AUTO_INCREMENT,
empl_matricule varchar(10) not null,
empl_nom varchar(100) not null,
empl_prenom varchar(150)not null,
empl_DDN date,
empl_mail varchar(255),
empl_codePin numeric(4),
empl_password varchar(20),
empl_tel varchar(10),
empl_ro_ID int not null,
empl_post_ID int not null,
empl_entr_numsiret varchar(14)not null,
constraint pk_employer primary key(empl_ID));

create table entreprise(entr_numsiret varchar(14) not null,
entr_nom varchar(50),
entr_denomination char(4),
entr_tel varchar(10),
constraint pk_entreprise primary key (entr_numsiret));

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

create table deverrouiller(dev_port_ID int not null,
dev_acc_ID int not null,
dev_niv_ID int not null,
dev_heure time,
dev_dateJour date,
constraint pk_deverouiller primary key(dev_port_ID,dev_acc_ID,dev_niv_ID));

create table comporter(comp_niv_ID int not null,
comp_serv_ID int not null,
constraint pk_comporter primary  key(comp_niv_ID,comp_serv_ID));


alter table deverrouiller
add constraint fk_deverrouiller_dev_port_ID
foreign key(dev_port_ID)
references porte(port_ID);

alter table deverrouiller
add constraint fk_deverrouiller_dev_acc_ID
foreign key(dev_acc_ID)
references acces(acc_ID);

alter table deverrouiller
add constraint fk_deverrouiller_dev_niv_ID
foreign key(dev_niv_ID)
references niveau(niv_ID);

alter table employe
add constraint fk_employe_empl_ro_ID
foreign key(empl_ro_ID)
references role(ro_ID);

alter table employe
add constraint fk_employe_empl_post_ID
foreign key (empl_post_ID)
references poste(post_ID);

alter table employe
add constraint fk_employe_empl_entr_numsiret
foreign key(empl_entr_numsiret)
references entreprise(entr_numsiret);


alter table  comporter
add constraint fk_comporter_comp_niv_ID
foreign key(comp_niv_ID)
references  niveau(niv_ID);

alter table  comporter
add constraint fk_comporter_comp_ser_ID
foreign key(comp_serv_ID)
references  service(serv_ID);