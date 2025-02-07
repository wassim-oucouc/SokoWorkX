-- Active: 1738760277772@@127.0.0.1@5555@mvc

create DATABASE MVC;

use mvc;

create table Utilisateurs(
    id SERIAL PRIMARY KEY,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    age int,
    telephone VARCHAR(10),
    Email varchar(100),
    password VARCHAR(50),
    roleId int ,
    Foreign Key (roleId) REFERENCES Roles(id)
);

create Table Roles(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50),
    description text,
    logo VARCHAR(255)
);

insert into Utilisateurs (firstname,lastname,age,telephone,Email,password,roleId) VALUES ('soulayman','jaafar','20','206651548','soulaymanemail.email.com','soo123',1),('imrane','jaafar','21','06900922','imranemail.email.com','imm123',1);
insert into Roles (name,description,logo) VALUES ('administrateur','Un administrateur dans le développement web est une personne qui gère et maintient les serveurs et les sites web pour assurer leur bon fonctionnement. Voici une description détaillée de ce rôle :

Création et gestion des utilisateurs : Un administrateur de serveur web doit être capable de créer, modifier et supprimer des utilisateurs, tout en mettant en place des niveaux de permissions appropriés pour sécuriser laccès aux ressources système.
Maintenance des serveurs : Il est responsable de linstallation, de la configuration, de la maintenance et de loptimisation des services qui alimentent les sites web. Cela inclut la gestion des systèmes de gestion de bases de données comme MySQL, PostgreSQL ou MongoDB, et linstallation et la configuration de serveurs dapplications comme Apache Tomcat ou JBoss.
Sécurité des serveurs : Ladministrateur doit comprendre et prévenir les attaques comme les DDoS, les injections SQL ou les attaques XSS par scripting cross-site. Il utilise des pare-feu pour inspecter le trafic entrant et sortant, et sécurise les communications entre les utilisateurs et le serveur grâce au chiffrement.
Automatisation des tâches : Pour gagner du temps et améliorer la cohérence des configurations, ladministrateur utilise des outils dautomatisation tels que Ansible, Puppet ou Chef. Il écrit également des scripts pour automatiser des tâches récurrentes comme la gestion des sauvegardes, la surveillance des logs ou la mise à jour de packages.
Optimisation des performances : Il assure la gestion de la bande passante, la minimisation de la latence et la configuration de serveurs DNS pour garantir des temps de chargement rapides et une expérience utilisateur optimale.
Scalabilité de linfrastructure : Ladministrateur met en place des solutions pour gérer une augmentation du trafic sans compromettre les performances, en utilisant des technologies de conteneurisation comme Docker ou des systèmes dorchestration comme Kubernetes.
Collaboration interne : Il travaille en étroite collaboration avec les équipes de développement, de sécurité et dassurance qualité pour assurer le bon fonctionnement de linfrastructure web.','administrateurlogo.img'),('visiteur','Un visiteur dans le contexte du développement web est un internaute qui se rend sur un site web ou une application mobile. Ce terme permet de qualifier un internaute sur une période donnée. En termes de digital analytics, le nombre de visiteurs est inférieur ou égal au nombre de visites sur un site, sauf si lon étudie différents types de visiteurs (cumulés, uniques, avec ou sans cookies, etc..','visiteurlogo.img');



select * from Utilisateurs;
select * from Roles;

drop table Utilisateurs;

drop table Roles;

