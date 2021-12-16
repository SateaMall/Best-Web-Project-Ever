

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
  `idCommande` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , PRIMARY KEY (`idCommande`),
  `date` date NOT NULL DEFAULT '0000-00-00',
  `etat` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lignescommandes`
--

CREATE TABLE `lignescommandes` (
  `idLigneCommande` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , PRIMARY KEY (`idLigneCommande`),
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
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nomProduit`, `marque`, `categorie`, `descriptif`, `photo`, `prix`, `stock`) VALUES
(1, 'Salada Niçoise', 'AllFrench', 'Entrée', 'Ingrédients :Tomates, poivrons verts « corne de bœuf », ail, oignons rouges, fèvettes, céleri, petits artichauts violets, œufs, filets d\'anchois, olives noires niçoises, et huile d\'olive.', 'https://assets.afcdn.com/recipe/20190704/94687_w1024h1024c1cx3008cy2008.webp', 7, 9),
(2, 'Escargots de Bourgogne', 'AllFrench', 'Entrée', 'Spécialités bourguignonnes de la gastronomie bourguignonne, et de la gastronomie française.\r\n\r\nIngrédients : Escargots de Bourgogne et beurre d’escargot (beurre, ail, persil).', 'http://www.cuisine-blog.fr/wp-content/uploads/2019/06/escargots-01.jpg', 10, 1),
(3, 'Fondue savoyarde ', 'AllFrench', 'Plat principal', 'La fondue savoyarde est un plat régional de la gastronomie savoyarde à base de fromage fondu et de pain. \r\n\r\nIngrédients : Fromage (Comté, Beaufort, Gruyère de Savoie), vin blanc, ail, pain.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Fondue_p1150668.jpg/280px-Fondue_p1150668.jpg', 17, 11),
(4, 'Boeuf bourguignon', 'AllFrench', 'Plat principal', 'Il tient son nom des deux produits bourguignons qui le composent : le bœuf et le vin rouge. La Bourgogne étant traditionnellement réputée pour ses élevages bovins, et pour les vins de son vignoble.', 'https://odelices.ouest-france.fr/images/recettes/boeuf-bourguignon.jpg', 20,33 ),
(5, 'Profiteroles', 'AllFrench', 'Dessert', ' Selon la légende, le gâteau serait né au XVIIIe siècle, à la table du roi de Pologne, Stanislas Leszczynski. \r\n\r\nIngrédients : Beurre, lait ou eau, farine, sel, œufs, sucre.\r\nAccompagnement : crème pâtissière et chocolat.', 'https://img.cuisineaz.com/660x660/2019/01/11/i145542-profiteroles-au-chocolat.jpeg', 5, 4),
(6, 'îles flottantes', 'AllFrench', 'Dessert', 'Les œufs à la neige sont un entremets ou dessert de la cuisine française composé de blancs d\'œufs sucrés, fouettés, \r\npochés ou cuits au bain-marie, accompagnés d\'une crème anglaise et généralement nappés de caramel.', 'https://assets.afcdn.com/recipe/20181017/82823_w1024h768c1cx1869cy2492.jpg', 5, 16),
(7, 'Hummus', 'AllSyrian', 'Entrée', 'Composée notamment de purée de pois chiches et de tahini. Il s\'agit d\'un plat typique de la cuisine arabe, juive, arménienne et levantine.\r\nIngrédients : Pois chiches, tahiné, jus de citron.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUVod7DEDr97lZgzJCGwHZBaiUsFIPc7Ey5A&usqp=CAU', 6, 4),
(8, 'Pain Pita', 'AllSyrian', 'Entrée', 'Aussi appelé « pain arabe » désigne un pain plat de forme ronde\r\n originaire du Moyen-Orient préhistorique.\r\nIngrédients :  farine, levure,  sel, eau, huile d\'olive.', 'https://img.cuisineaz.com/660x660/2019/03/25/i146161-pain-pita-au-thermomix.jpeg', 5, 2),
(9, 'Shawarma', 'AllSyrian', 'Plat Principal', 'Cette préparation est consommée sous forme de sandwich dans du pain pita.\r\n Ingrédients : Viande d\'agneau, de volaille, ou bovine sel pain pita.', 'https://i.pinimg.com/originals/f8/a4/4a/f8a44a3b9bbecb13aae7698d2b44f349.jpg', 13, 6),
(10, 'Kebbé', 'AllSyrian', 'Plat Principal', '\r\nIl est constitué d\'une pâte formée de viande hachée et de boulghour. On en forme des boulettes qui sont alors fourrées avec une farce de viande.\r\nIngrédients : 	Viande de boeuf, boulghour.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTHMh1NXMOXamAwnLKDwWrW4NiWXxULgdoJg&usqp=CAU', 15,0),
(11, 'Baklava', 'AllSyrian', 'Dessert', 'Constitué de fines feuilles de pâte yufka ou phyllo, beurrées ou huilées une à une, superposées dans un plat rond.\r\nUn mélange de fruits secs finement moulus et concassés est déposé entre les feuilles.', 'https://fac.img.pmdstatic.net/fit/https.3A.2F.2Fi.2Epmdstatic.2Enet.2Ffac.2F2021.2F09.2F13.2F9e16942e-a43d-4353-86a0-0248300822c4.2Ejpeg/850x478/quality/90/crop-from/center/focus-point/1423%2C769/baklawa-aux-amandes.jpeg', 18, 13),
(12, 'Douceur au fromage', 'AllSyrian', 'Dessert', 'Halawet el-jibn (Douceur au fromage) est un dessert syrien composé de la semoule et d’une pâte à fromage, fourrée à la crème. \r\nIngrédients : Semoule, fromage, sucre, crème coagulée.', 'https://cleobuttera.com/wp-content/uploads/2015/06/drizzle1.jpg', 18, 11),
(13, 'La slata méchouia', 'AllTunisian', 'Entrée', 'Une entrée froide tunisienne typique, qui a un goût de jardin et d’épices. \r\nIngrédients : poivrons rouges, poivrons verts, piment vert , tomates, gousses d\'ail, oignon, huile d\'olive, thon, oeuf.', 'https://img-3.journaldesfemmes.fr/BZApxMpngU8dTfFFeu6UImmg7uQ=/800x600/smart/3b8497ca799844f9b6c8812532f4396a/recipe-jdf/336652.jpg', 5, 12),
(14, 'Slatet Omek Houria', 'AllTunisian', 'Entrée', 'Si vous cherchez quelque chose de rafraîchissant, cette salade sera parfaite pour vous.\r\nIngrédients : carottes bouillies, écrasées en purée, ail et harissa, thon, œufs, olives et huile d\'olive.', 'https://dziriya.net/wp-content/uploads/2020/06/Omek-houria.jpg', 5, 7),
(15, 'Lablabi', 'AllTunisian', 'Plat Principal', 'Préparé à base de pois chiches, d\'ail, de cumin ou de carvi, d\'huile d\'olive, de sel, de poivre et de la harissa.\r\nIngrédients : Pois chiches, harissa.', 'https://www.latunisienne.fr/wp-content/uploads/2014/06/lablabi-2-800x1200-1-500x500.jpg', 15,7),
(16, 'Riz Djerbien', 'AllTunisian', 'Plat Principal', '\r\nIngrédients : bœuf, découpés avec des légumes, concentré de tomates, huile d\'olive, épices (cumin, tabil, coriandre, curcuma, paprika, sel et poivre), ail. ', 'https://www.treatshomemade.com/fr/recipes/djerbian-rice/featured_1.jpg', 15, 6),
(17, 'Bjawia', 'AllTunisian', 'Dessert', 'Ce dessert est préparé avec des fruits secs torréfiés qui livrent tous leurs arômes dans un sirop tendre.\r\nIngrédients : Pistache, sucre, amande, eau, sirop de glucose, eau de rose naturelle. ', 'https://www.196flavors.com/wp-content/uploads/2018/03/bjawia-2.jpg', 18, 10),
(18, 'Assidet Zgougou', 'AllTunisian', 'Dessert', 'Il s\'agit d\'une crème préparée à partir de graines de pin d\'Alep. Ces graines sont nettoyées puis broyées avec de l\'eau et passées au tamis très fin. Le jus ainsi obtenu est mélangé avec de la farine de blé. Du sucre en poudre est ajouté au fur et à mesure que le mélange s\'épaissit.', 'http://www.baya.tn/wp-content/uploads/2012/02/cuisine-assida-zgougou.jpg', 20,12);

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
  ADD KEY `Commandes_Client` (`email`);

--
-- Index pour la table `lignescommandes`
--
ALTER TABLE `lignescommandes`
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
