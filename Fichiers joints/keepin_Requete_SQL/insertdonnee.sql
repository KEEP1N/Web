INSERT INTO role (ro_libelle) VALUES
("user"),
("admin");

insert into entreprise(entr_numsiret,entr_nom,entr_denomination)
values
('0000000000001','CorpAccess','SARL');


INSERT INTO employe
(empl_matricule, empl_nom, empl_prenom, empl_DDN, empl_mail, empl_codePin, empl_password, empl_tel, empl_ro_ID,empl_post_ID,empl_entr_numsiret)
VALUES
('01', 'JACQUES', 'Michel', '1967.10.02', 'MichelJacques@corpaccess.com', '1234', 'password', '0600000006', 1,1,'0000000000001');

INSERT INTO service (serv_libelle)
VALUES
('Informatique'),
('Comptabilit�'),
('Direction');

INSERT INTO niveau (niv_libelle)
VALUES
('Basique'),
('Interm�diaire'),
('�lev�');

INSERT INTO poste (post_libelle) VALUES
('Secr�taire'),
('Agent de m�nage'),
('Technicien de surface'),
('Cuisinier'),
('Comptable'),
('Programmeur'),
('D�veloppeur web'),
('Chef de projet');