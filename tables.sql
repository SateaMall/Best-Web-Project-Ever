

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `email` varchar(100) NOT NULL DEFAULT '',
  `motDePasse` varchar(20) NOT NULL DEFAULT '',
  `nom` varchar(20) NOT NULL DEFAULT '',
  `prenom` varchar(20) NOT NULL DEFAULT '',
  `ville` varchar(20) NOT NULL DEFAULT '',
  `addresse` varchar(200) NOT NULL DEFAULT '',
  `numTelephone` int(15) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `idCommande` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `etat` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lignescommandes`
--

CREATE TABLE `lignescommandes` (
  `idLigneCommande` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `idCommande` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `idProduit` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `quantite` int(5) UNSIGNED DEFAULT '0',
  `montant` int(5) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `nomProduit` varchar(20) NOT NULL DEFAULT '',
  `marque` varchar(20) NOT NULL DEFAULT '',
  `categorie` varchar(20) NOT NULL DEFAULT '',
  `descriptif` varchar(500) NOT NULL DEFAULT '',
  `photo` text NOT NULL,
  `prix` int(6) UNSIGNED DEFAULT '0',
  `stock` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `Commandes_Client` (`email`);

--
-- Index pour la table `lignescommandes`
--
ALTER TABLE `lignescommandes`
  ADD PRIMARY KEY (`idLigneCommande`),
  ADD KEY `idCommande` (`idCommande`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `Commandes_Client` FOREIGN KEY (`email`) REFERENCES `client` (`email`);

--
-- Contraintes pour la table `lignescommandes`
--
ALTER TABLE `lignescommandes`
  ADD CONSTRAINT `lignescommandes_ibfk_1` FOREIGN KEY (`idCommande`) REFERENCES `commandes` (`idCommande`),
  ADD CONSTRAINT `lignescommandes_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);
COMMIT;
