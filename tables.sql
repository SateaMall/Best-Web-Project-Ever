
CREATE TABLE IF NOT EXISTS Client (
    email varchar(20) NOT NULL DEFAULT '',
    motDePasse varchar(20) NOT NULL DEFAULT '',
    nom varchar(20) NOT NULL DEFAULT '',
    prenom varchar(20) NOT NULL DEFAULT '',
    ville varchar(20) NOT NULL DEFAULT '',
    addresse varchar(20) NOT NULL DEFAULT '',
    numTelephone int(15) UNSIGNED DEFAULT '0'
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* creation table produit*/

CREATE TABLE IF NOT EXISTS Produit (
    idProduit tinyint(3) UNSIGNED DEFAULT '0',
    nomProduit varchar(20) NOT NULL DEFAULT '', 
    marque varchar(20) NOT NULL DEFAULT '', 
    categorie varchar(20) NOT NULL DEFAULT '', 
    descriptif varchar(500) NOT NULL DEFAULT '',
    photo TEXT (100) NOT NULL DEFAULT '',
    prix smallmoney (6)  UNSIGNED DEFAULT '0',
    stock varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* creation table Commandes*/

CREATE TABLE IF NOT EXISTS Commandes (
    idCommande int(10) UNSIGNED DEFAULT '0',
    date date NOT NULL DEFAULT '0000-00-00',
    etat varchar(20) NOT NULL DEFAULT ''
   
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* creation table LignesCommandes*/

CREATE TABLE IF NOT EXISTS Lignescommandes (
    idLigneCommande int(10) UNSIGNED DEFAULT '0',
   
    quantite int(5) UNSIGNED DEFAULT '0',
    montant int(5) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* ajout des clés */

ALTER TABLE Client
  ADD PRIMARY KEY ('email');

ALTER TABLE Produit
  ADD PRIMARY KEY ('idProduit');


ALTER TABLE Commandes
  ADD PRIMARY KEY ('idCommande'),
  ADD KEY 'email' ('email');

ALTER TABLE Lignescommandes
    ADD PRIMARY KEY ('idLigneCommande'),
    ADD KEY 'idCommande' ('idCommande'),
    ADD KEY 'idProduit' ('idProduit');


ALTER TABLE Commandes
  ADD CONSTRAINT 'Commandes_Client' FOREIGN KEY ('email') REFERENCES 'Client' ('email');


ALTER TABLE Lignescommandes
  ADD CONSTRAINT 'Lignescommandes_Commandes' FOREIGN KEY ('idCommande') REFERENCES 'Commandes' ('idCommande'),
  ADD CONSTRAINT 'Lignescommandes_Produit' FOREIGN KEY ('idProduit') REFERENCES 'Produit' ('idProduit');

COMMIT;




