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

alter table poste
add constraint fk_poste_post_serv_ID
foreign key(post_serv_ID)
references service(serv_ID);

alter table  comporter
add constraint fk_comporter_comp_niv_ID
foreign key(comp_niv_ID)
references  niveau(niv_ID);

alter table  comporter
add constraint fk_comporter_comp_ser_ID
foreign key(comp_serv_ID)
references  service(serv_ID);

alter table comporter
add constraint fk_comporter_compo_serv_id
foreign key(compo_serv_id);
references service(serv_id);

alter table comporter 
add constraint fk_comporter_compo_niv_id
foreign key (compo_niv_id)
references niveau(niv_id);

alter table accorder
add constraint fk_accorder_acco_niv_id
foreign key (acco_niv_id)
references niveau(niv_id);

alter table accorder
add constraint fk_accorder_poss_acco_acc_id
foreign key(poss_acco_acc_id)
references acces(acc_id);

alter table posseder
add constraint fk_posseder_poss_empl_id
foreign key(poss_empl_id)
references employe(empl_id);

alter table posseder
add constraint fk_posseder_poss_acc_id
foreign key(poss_acc_id)
references acces(acc_id);

alter table autoriser
add constraint fk_autoriser_autor_port_id
foreign key(autor_port_id)
references porte(port_id);

alter table autoriser
add constraint fk_autoriser_autor_acc_id
foreign key(autor_acc_id)
references acces(acc_id);
