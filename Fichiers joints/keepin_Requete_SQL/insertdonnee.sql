INSERT INTO role (ro_libelle) VALUES
("Utilisateur"),
("Administrateur");

insert into entreprise(entr_numsiret,entr_nom,entr_denomination)
values
('000000000001','CorpAccess','SARL');


INSERT INTO service (serv_libelle)
VALUES
('Informatique'),
('Comptabilité'),
('Direction'),
('Secrétariat'),
('Entretien');

INSERT INTO niveau (niv_libelle)
VALUES
('Basique'),
('Intermédiaire'),
('Élevé');

INSERT INTO poste (post_libelle, post_serv_ID) VALUES
('Secrétaire', 4),
('Agent de ménage', 5),
('Technicien de surface', 5),
('Cuisinier', 5),
('Comptable', 2),
('Programmeur', 1),
('Développeur web', 1),
('Chef de projet', 1);

INSERT INTO employe
(empl_matricule, empl_nom, empl_prenom, empl_DDN, empl_mail, empl_codePin, empl_password, empl_tel, empl_ro_ID,empl_post_ID,empl_entr_numsiret)
VALUES
('01', 'JACQUES', 'Michel', '1967.10.02', 'MichelJacques@corpaccess.com', '1234', 'password', '0600000006', 1,1,'000000000001'),
('02', 'MARTIN', 'Jeanne', '1992.04.30', 'MARTINJeanne@corpaccess.com', '5678', 'MDP', '0625698001', 2, 6,'000000000001');

INSERT INTO porte (port_libelle)
VALUES ('A008'),
('K207'),
('B509'),
('C301');

INSERT INTO acces (acc_dateDebut, acc_DateFin)
VALUES
('2014.10.23', '2014.11.23');

INSERT INTO deverrouiller (dev_port_ID, dev_acc_ID, dev_niv_ID, dev_heure, dev_dateJour)
VALUES
(1, 1, 1, '17:05:34','2014-09-14'),
(1, 1, 2, '18:59:26','2014-10-22');

INSERT INTO comporter (comp_niv_ID, comp_serv_ID)
VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 3);

