-- Active: 1739025144957@@127.0.0.1@5555@sokoworksxdb


CREATE TABLE Role(
    id SERIAL PRIMARY KEY,
    Nom VARCHAR(70)
);


CREATE TABLE users(
    id SERIAL PRIMARY KEY,
    Nom varchar(60),
    Prenom varchar(60),
    Email varchar(60),
    Password varchar(60),
    Photo varchar(60),
    Status VARCHAR(50),
    role_id INTEGER,
    Foreign Key (role_id) REFERENCES Role(id)
)


CREATE TABLE Messages(
    id SERIAL PRIMARY KEY,
    Contenu VARCHAR(250),
    id_receiver INTEGER,
    id_sender INTEGER,
    Status varchar(10),
    Foreign Key (id_receiver) REFERENCES users(id),
    Foreign Key (id_sender) REFERENCES users(id)

);

CREATE TABLE Compétences(
    id SERIAL PRIMARY KEY,
    Nom VARCHAR(50)
);

CREATE TABLE Catégorie(
    id SERIAL PRIMARY KEY,
    Nom VARCHAR(50)
);



CREATE TABLE Publication(
        id SERIAL PRIMARY KEY,
        Title VARCHAR(60),
        Description VARCHAR(60),
        Budget INTEGER,
        Photo VARCHAR(80),
        duréé INTEGER,
        Status VARCHAR(80),
        id_categorie INTEGER,
        id_client INTEGER,
        Foreign Key (id_categorie) REFERENCES Catégorie(id),
        Foreign Key (id_client) REFERENCES users(id)
)

CREATE TABLE Offers(
    id SERIAL PRIMARY KEY,
    MontantDevis INTEGER,
    DuréeEstimeée INTEGER,
    Status VARCHAR(50),
    DateSoumission TIMESTAMP,
    id_publication INTEGER,
    Foreign Key (id_publication) REFERENCES Publication(id)
)

CREATE TABLE Compétences_Freelancer(
    id SERIAL PRIMARY KEY,
    id_freelancer INTEGER,
    id_compétences INTEGER,
    Foreign Key (id_freelancer) REFERENCES users(id),
    Foreign Key (id_compétences) REFERENCES users(id)

);

CREATE TABLE Evaluation(
    id  SERIAL PRIMARY KEY,
    Note FLOAT,
    Commentaire VARCHAR(100),
    DateEvaluation TIMESTAMP,
    id_user INTEGER,
    Foreign Key (id_user) REFERENCES users(id)
)