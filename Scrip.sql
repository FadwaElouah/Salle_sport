----Créer la base de données :

CREATE  DATABASE Salle_sport;

----Créer une Table pour une Membre :

   CREATE TABLE membre (

    id_membre int(11) PRIMARY KEY, 
    Nom VARCHAR(50) not null,
    Prenom varchar(50) not null,
    Email VARCHAR(50) not null, 
    Téléphone varchar(50) not null 
)


 
----Créer une Table pour les activités :

  CREATE TABLE activités(

  id_activitée int(11) PRIMARY KEY,
  Nom_activitée varchar(50) not null,
  Description text not null,
  capacity int(11) not null,
  date_debut date not null,
  date_fine date not null,
  disponibilité tinynit (4)
);

----Créer une Table pour les réservations :

CREATE TABLE réservation (

  id_réservation int(50) PRIMARY KEY,
  id_membre int(50), 
  id_activitée  int(50),
  date_réservation datetime not null,
  status enum('confirmée','Annulée') DEFAULT 'Confirmée',
  constraint Fk_meb Foreign KEY (id_membre) REFERENCEs membre (id_membre),
  constraint FK_act Foreign KEY (id_activitée) REFERENCEs activités (id_activitée),
);
---------------Membre --------------------

---------Ajouter :
INSERT into membre values 
(1 ,'Amine' , 'Amine' , 'amineamine@gmail.com' , '0712763738'),
(2 ,'moha' , 'moha' , 'mohamoha@gmail.com' , '0637862872'),
(3 , 'oumaima' , 'oumaima' , 'oumaimaoumaima@gmail.com' , '0665249824');


----------Update 
update membre 
set Nom = 'rafik'
where id_membre = 1

--------delete 

delete from membre 
where id_membre = 1 ;


------------- réservation -------------

----------Ajouter
INSERT into réservation values 
(1, 1, 1, '2024-12-10 09:00:00','confirmée'), 
(2, 2, 2, '2024-12-12 14:30:00', 'confirmée'), 
(3, 3, 3, '2024-12-15 10:00:00', 'confirmée'); 

---------update
update réservation 
set status = 'Annuler'
where id_réservation = 1


-------delete 

delete from réservation 
where id_réservation = 1;


---------------- activités------------ :
INSERT into activités values
(1, 'Yoga', 'Séance de relaxation et de renforcement musculaire par des postures douces et des respirations.', 20, '2024-12-10', '2024-12-30', 1),

(2, 'Musculation', 'Entraînement pour la force et la construction musculaire, avec des poids libres et des machines.', 15, '2024-12-12', '2024-12-31', 1),

(3, 'Zumba', 'Cours de danse cardio avec des mouvements rapides et énergétiques sur de la musique latine.', 25, '2024-12-15', '2024-12-25', 1);

---------update
update activités
set  capacity = 14
where id_activitée = 1

--------delete 

delete from activitée 
where id_activitée = 1


  ------------ Jointure simple entre deux tables:
 select *
 from membre
 INNER JOIN Réservation ON membre.id_membre = Réservation.membre_id
 INNER JOIN Activités ON Réservation.activite_id = Activités.id_activités;


