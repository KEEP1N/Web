INSERT INTO role (ro_libelle) VALUES
("user"),
("admin");

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
('01', 'JACQUES', 'Michel', '1967.10.02', 'MichelJacques@corpaccess.com', '1234', 'password', '0600000006', 1,1,'000000000001');