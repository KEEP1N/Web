ALTER TABLE deverrouiller
ADD CONSTRAINT fk_deverrouiller_dev_port_ID
FOREIGN KEY(dev_port_ID)
REFERENCES porte(port_ID);

ALTER TABLE deverrouiller
ADD CONSTRAINT fk_deverrouiller_dev_acc_ID
FOREIGN KEY(dev_acc_ID)
REFERENCES acces(acc_ID);

ALTER TABLE deverrouiller
ADD CONSTRAINT fk_deverrouiller_dev_niv_ID
FOREIGN KEY(dev_niv_ID)
REFERENCES niveau(niv_ID);

ALTER TABLE employe
ADD CONSTRAINT fk_employe_empl_ro_ID
FOREIGN KEY(empl_ro_ID)
REFERENCES role(ro_ID);

ALTER TABLE employe
ADD CONSTRAINT fk_employe_empl_post_ID
FOREIGN KEY (empl_post_ID)
REFERENCES poste(post_ID);

ALTER TABLE employe
ADD CONSTRAINT fk_employe_empl_entr_numsiret
FOREIGN KEY(empl_entr_numsiret)
REFERENCES entreprise(entr_numsiret);

ALTER TABLE poste
ADD CONSTRAINT fk_poste_post_serv_ID
FOREIGN KEY(post_serv_ID)
REFERENCES service(serv_ID);

ALTER TABLE  comporter
ADD CONSTRAINT fk_comporter_comp_niv_ID
FOREIGN KEY(comp_niv_ID)
REFERENCES  niveau(niv_ID);

ALTER TABLE  comporter
ADD CONSTRAINT fk_comporter_comp_ser_ID
FOREIGN KEY(comp_serv_ID)
REFERENCES  service(serv_ID);

ALTER TABLE comporter
ADD CONSTRAINT fk_comporter_comp_serv_id
FOREIGN KEY(comp_serv_id)
REFERENCES service(serv_id);


ALTER TABLE accorder
ADD CONSTRAINT fk_accorder_acco_niv_id
FOREIGN KEY (acco_niv_id)
REFERENCES niveau(niv_id);

ALTER TABLE accorder
ADD CONSTRAINT fk_accorder_acco_acc_id
FOREIGN KEY(acco_acc_id)
REFERENCES acces(acc_id);

ALTER TABLE posseder
ADD CONSTRAINT fk_posseder_poss_empl_id
FOREIGN KEY(poss_empl_id)
REFERENCES employe(empl_id);

ALTER TABLE posseder
ADD CONSTRAINT fk_posseder_poss_acc_id
FOREIGN KEY(poss_acc_id)
REFERENCES acces(acc_id);

ALTER TABLE autoriser
ADD CONSTRAINT fk_autoriser_autor_port_id
FOREIGN KEY(autor_port_id)
REFERENCES porte(port_id);

ALTER TABLE autoriser
ADD CONSTRAINT fk_autoriser_autor_acc_id
FOREIGN KEY(autor_acc_id)
REFERENCES acces(acc_id);

ALTER TABLE porte
ADD CONSTRAINT fk_porte_port_eta_ID
FOREIGN KEY(port_eta_ID)
REFERENCES etage(eta_ID);

ALTER TABLE porte
ADD CONSTRAINT fk_porte_port_bat_ID
FOREIGN KEY(port_bat_ID)
REFERENCES batiment(bat_ID);

// Après ajout d\une colonne, si cela ne fonctionne pas, UPDATE la colonne en NULL dans la table concernée
ALTER TABLE niveau
ADD CONSTRAINT fk_niveau_serv_ID
FOREIGN KEY (niv_serv_ID)
REFERENCES service(serv_ID);

ALTER TABLE employe
ADD CONSTRAINT fk_empl_niv_ID
FOREIGN KEY (empl_niv_ID)
REFERENCES niveau(niv_ID);