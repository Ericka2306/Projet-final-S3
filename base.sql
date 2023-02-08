INSERT INTO utilisateur(nom,mail,mdp,isAdmin) VALUES 
('Tojo','tojo@gmail.com','client',0),
('Heja','heja@gmail.com','client',0),
('Fitiavana','fitiavana@gmail.com','client',0),
('Admin','admin@gmail.com','admin',1);

INSERT INTO categorie(nom,etat) VALUES
('sport',0),
('sante',0),
('beaute',0),
('techno',0);

INSERT INTO objet(id_categorie,id_utilisateur,titre,description,image,prix,etat) VALUES
(1,1,'Ball soccer','Soccer Balls Professional Football Balls Cheap Buy Custom Soccer Training ','Ball soccer',2000,0),
(1,2,'Volley ball','Custom logo pu leather volleyball professional training beach game colorful volleyball','Volley ball',2300,0),
(3,3,'Acne remover','Professional Acne Needle Tweezers Blackhead Acne Remover Tweezers','Acne remover',1000,0);

INSERT INTO proposition(id_objet1,id_objet2,etat) VALUES (1,2,10);
INSERT INTO proposition(id_objet1,id_objet2,etat) VALUES (1,3,0);
INSERT INTO proposition(id_objet1,id_objet2,etat) values (3,2,10);
INSERT INTO proposition(id_objet1,id_objet2,etat) values (2,1,0);

INSERT INTO historique (id_objet,id_utilisateur_ancien,id_utilisateur_nouveau,date) VALUES (1,1,2,'23-02-05');
INSERT INTO historique (id_objet,id_utilisateur_ancien,id_utilisateur_nouveau,date) VALUES (2,2,1,'23-02-05');
INSERT INTO historique (id_objet,id_utilisateur_ancien,id_utilisateur_nouveau,date) VALUES (1,2,3,'23-02-08');
INSERT INTO historique (id_objet,id_utilisateur_ancien,id_utilisateur_nouveau,date) VALUES (3,3,2,'23-02-08');



