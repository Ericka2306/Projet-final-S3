CREATE TABLE utilisateur(
    id_utilisateur int AUTO_INCREMENT,
    nom VARCHAR(20),
    mail VARCHAR(30),
    mdp VARCHAR(20),
    isAdmin int,

    PRIMARY KEY (id_utilisateur)
);

CREATE TABLE categorie(
    id_categorie int AUTO_INCREMENT,
    nom VARCHAR(20),
    etat int,

    PRIMARY KEY (id_categorie)
);

CREATE TABLE objet(
    id_objet int AUTO_INCREMENT,
    id_categorie int,
    id_utilisateur int,
    titre VARCHAR(30),
    description VARCHAR(500),
    image VARCHAR(20),
    prix double,
    etat int,

    PRIMARY KEY (id_objet),
    FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur)

);

CREATE TABLE proposition(
    id_proposition int AUTO_INCREMENT,
    id_objet1 int,
    id_objet2 int,
    etat int,

    PRIMARY KEY (id_proposition),
    FOREIGN KEY (id_objet1) REFERENCES objet(id_objet),
    FOREIGN KEY (id_objet2) REFERENCES objet(id_objet)

);

CREATE TABLE historique(
    id_historique int AUTO_INCREMENT,
    id_objet int,
    id_utilisateur_ancien int,
    id_utilisateur_nouveau int,
    date date,
    PRIMARY KEY (id_historique),
    FOREIGN KEY (id_utilisateur_ancien) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (id_utilisateur_nouveau) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet)
);


