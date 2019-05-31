-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 31 mai 2019 à 15:19
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nba`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `idEquipe` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `creation` int(100) NOT NULL,
  `resume` text NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `playoffs` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idEquipe`, `nom`, `creation`, `resume`, `logo`, `playoffs`) VALUES
(1, 'Cavaliers1', 1971, 'test1', '', 5),
(2, 'Warriors', 1946, 'Les Warriors de Golden State (en anglais : Golden State Warriors, « Guerriers de l’État doré ») sont une franchise californienne de basket-ball de la NBA basée à Oakland, dans la région de la baie de San Francisco. Elle évolue dans la Conférence Ouest, dans la Division Pacifique, et dispute ses matchs à domicile à l\'Oracle Arena.', '', 4),
(3, 'Boston', 1946, 'Les Celtics de Boston (Boston Celtics en anglais, « les Celtes de Boston ») sont une franchise de basket-ball de la NBA basée à Boston dans l\'État du Massachusetts aux États-Unis.', '', 2),
(4, 'Lakers', 1947, 'Les Lakers de Los Angeles (en anglais : Los Angeles Lakers, « les habitants des lacs de Los Angeles ») sont une franchise de basket-ball évoluant en NBA basée à Los Angeles (Californie).', '', 3),
(5, 'Miami', 1988, 'Le Heat de Miami (en anglais : Miami Heat, « Miami en feu ») est une franchise de la NBA basée à Miami en Floride. Elle évolue au sein de la Conférence Est, dans la Division Sud-Est.', '', 1),
(6, 'Raptors', 2001, 'Les Raptors de Toronto (en anglais : Toronto Raptors) sont une équipe professionnelle de basket-ball de la NBA basée à Toronto (Ontario).', '', 0),
(7, 'bass', 12200, 'test', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `idJoueur` int(11) NOT NULL,
  `idEquipe` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `biographie` longtext NOT NULL,
  `club` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`idJoueur`, `idEquipe`, `nom`, `biographie`, `club`, `photo`) VALUES
(1, 1, 'Lebron James', 'LeBron James est né le 30 décembre 1984 à Akron dans l\'Ohio. Sa mère Gloria James, alors âgée de 16 ans doit l\'élever seule. Elle peine à trouver un emploi stable et déménage souvent. Gloria James autorise LeBron, alors âgé de 9 ans, à habiter chez Frank Walker, un entraîneur de football local pour qu\'il grandisse dans un environnement familial stable. LeBron apprend à jouer au basket-ball et joue dans la Amateur Athletic Assocation (AAU) pour l\'équipe des Northeastern Ohio Shooting Stars. L\'équipe réalise de bonnes performances au niveau local et national grâce à LeBron et ses amis Sian Cotton, Dru Joyce et Willie McGee. Ils se surnomment le \"Fab Four\" et se promettent d\'aller dans le même lycée.\r\n\r\nLeBron James attire l\'attention des médias alors qu\'il n\'est encore qu\'au lycée de Saint Vincent-Saint Mary dans l\'Ohio. Ses performances individuelles qui portent son équipe lui valent d\'être nommé Mr. Basketball de l\'Ohio et sélectionné dans la All-USA First Team par le magazine USA Today pendant trois saisons consécutives. Avant sa dernière année de lycée, il tente de contourner le règlement de la NBA qui oblige un joueur à accomplir ses années de lycée avant de pouvoir se présenter à la draft. Sa demande est rejetée mais sa dernière année de lycée est hyper-médiatisée, certains de ses matches étant retransmis sur des chaînes du câble. Il est alors surnommé the Chosen One par le magazine Sports Illustrated (qui en fait d\'ailleurs sa une) et présenté comme un nouvel « héritier » de Michael Jordan. Son record de points au lycée est de 74.\r\n\r\nJames se déclare éligible pour la draft le 25 avril 2003. Dans la foulée, il signe un contrat de 90 millions de dollars sur sept ans avec Nike. Les Cleveland Cavaliers (que nombre d\'observateurs soupçonnent d\'avoir saboté volontairement leur fin de saison afin d\'obtenir une bonne place à la draft), obtiennent le premier choix de la draft et sélectionnent James.', 'Cavaliers de Cleveland', NULL),
(2, 2, 'Stephen Curry', 'Stephen Curry est né à Akron, dans l\'Ohio, le 14 mars 1988. Il grandit à Charlotte, où son père, Dell Curry, joueur professionnel de basket-ball dans la National Basketball Association, évolue sous les couleurs des Hornets de Charlotte. Étant enfant, Stephen Curry, chaque soir après l\'école, il souhaitait voir les matchs de son père. Cependant, sa mère refusait car il ne serait pas rentré avant 23h ou minuit pour se rendre à l\'école. Alors, il attendait le vendredi et samedi soir. Il pratiquait de nombreux sports : Baseball et Football américain. Finalement, Stephen Curry choisit comme son père, de pratiquer le basket-ball comme discipline sportive. C\'est en classe de quatrième au collège que Stephen Curry a choisi de s\'entraîner régulièrement pour ainsi jouer à la fac.\r\n\r\nPlus tard, il rejoint le lycée de Charlotte Christian avec lequel il a notamment gagné trois titres de conférence. Malgré de bonnes performances individuelles, Curry ne reçoit aucune bourse de la part d\'université réputées, notamment à cause de son physique, jugé trop frêle. Il finira par accepter une offre d\'une université moins renommée, Davidson.', 'Warriors de Golden State', NULL),
(3, 3, 'Kyrie Irving', 'Irving joue à Montclair Kimberley Academy pendant ses deux années de lycée. Il réalise des statistiques de 26,5 points, 10,3 rebonds, 4,8 passes et 3,6 interceptions et devient le deuxième joueur de son lycée à marquer plus de 1 000 points. Il rejoint ensuite le St. Patrick\'s High School dans le New Jersey. Pendant l\'été 2009, il est invité au prestigieux Boost Mobile Elite 24, à Rucker Park. Lors de la saison 2009-2010, sa dernière à St. Patrick, Kyrie Irving est considéré comme l\'un des meilleurs lycéens du pays, terminant deuxième du classement du site Scouts.com et troisième de celui d\'ESPN1.\r\n\r\nLe 20 janvier 2010, Irving est sélectionné pour intégrer la sélection nationale junior. Cette sélection américaine participe au Nike Hoop Summit de 2010, le 10 avril, à Portland, Oregon. Il est aussi invité au McDonald\'s All-American Game 2010 et au Jordan Brand Classic, où il est élu co-MVP avec Harrison Barnes. En juin 2010, Irving participe à la victoire de l\'équipe des États-Unis lors du championnat des Amériques des moins de 18 ans (FIBA Americas U18 Championship) : il est le troisième marqueur de son équipe avec 13,6 points et le meilleur passeur avec 2,6 passes2.', 'Celtics de Boston', NULL),
(4, 5, 'Dwyane Wade', 'Dwyane Tyrone Wade dit Dwyane Wade, né le 17 janvier 1982 à Chicago dans l\'Illinois est un joueur américain de basket-ball mesurant 1,93 m. Il évolue au poste d\'arrière en National Basketball Association (NBA) dans l\'équipe du Heat de Miami. Avec la franchise du Heat de Miami, il remporte le titre de champion NBA en 2006, 2012, et 2013 étant récompensé du titre de meilleur joueur des finales lors des Finales 2006. Il obtient également un titre de champion olympique lors des Jeux olympiques d\'été de 2008 à Beijing.\r\n\r\nIl formait depuis la saison 2010-2011 avec LeBron James (avant son départ) et Chris Bosh l\'un des trios les plus prolifique de la NBA.\r\n\r\nWade devient en mars 2016 l\'un des six joueurs encore en activité en NBA à avoir inscrit plus de 20 000 points en carrière (avec , LeBron James, Dirk Nowitzki, Vince Carter, Paul Pierce et Carmelo Anthony). C\'est un joueur emblématique de la NBA, il a quitté Miami en été 2016 pour les Bulls de Chicago avant de rejoindre les Cavaliers de Cleveland de son ami LeBron James durant l\'été 2017.', 'Heat de Miami', NULL),
(5, 6, 'DeMar DeRozan', 'DeMar DeRozan, né le 7 août 1989 à Compton (Californie), est un joueur américain de basket-ball. Il joue au poste d\'arrière.DeRozan grandit notamment aux côtés de James Harden, joueur des Houston Rockets, durant son enfance, avec qui il joue pendant toute sa jeunesse. Harden est lui aussi originaire de Compton.Le 25 juin 2009 il est drafté en 9e position par les Raptors de Toronto1,2. Il déclare que la principale raison qui l\'a fait quitter l\'université pour la NBA après seulement une année est de pouvoir prendre soin de sa mère, qui souffre de lupus3.\r\n\r\nLe 9 juillet 2009, il signe son contrat rookie avec les Raptors4.\r\n\r\nLe 19 février 2010, il participe au Slam Dunk Contest du NBA All-Star Week-end 20105 où il est finaliste et s\'incline en finale face au triple champion Nate Robinson. Les résultats des votes du public sont de 51 % pour Robinson et 49 % pour DeRozan.\r\n\r\nLe 19 février 2011, il participe à l\'édition 2011 Slam Dunk Contest du NBA All-Star Week-end 2011 en remplacement de Brandon Jennings blessé6 mais il termine troisième du concours7.\r\n\r\nLe 1er novembre 2012, il prolonge aux Raptors pour 40 millions de dollars sur quatre ans8.\r\n\r\nLe 31 décembre 2010, DeRozan établit son record de points en carrière avec 37 unités contre les Rockets de Houston. Il renouvelle cette performance deux fois, contre le Jazz de l\'Utah le 12 novembre 2012 et contre les Bulls de Chicago le 15 novembre 20139', 'Raptors de Toronto', NULL),
(6, 4, 'Kobe Bryant', 'Kobe Bryant, né le 23 août 1978 à Philadelphie en Pennsylvanie, est un joueur de basket-ball américain ayant évolué dans la franchise NBA des Lakers de Los Angeles pendant vingt saisons, entre 1996 et 2016. Quintuple champion NBA, il est l\'un des sept joueurs à avoir inscrit plus de 30 000 points en carrière.\r\n\r\nSélectionné en 13e position lors de la draft 1996 de la NBA par les Hornets de Charlotte, alors qu\'il est lycéen, il est immédiatement transféré aux Lakers de Los Angeles. Après plusieurs saisons d\'apprentissage dans la NBA, il forme avec Shaquille O\'Neal l\'un des duos les plus dominants de l\'histoire de la NBA, réalisant un triplé historique en 2000, 2001 et 2002. Après un échec lors des finales 2004, il devient le leader de son équipe et réalise des performances individuelles, bien qu\'on lui reproche alors son manque d\'altruisme. En 2006, il inscrit notamment 81 points contre les Raptors de Toronto, soit la deuxième performance de l\'histoire de la NBA.\r\n\r\nIl change son numéro 8 pour le numéro 24 avant la saison 2006-2007 qu\'il termine en tant que meilleur marqueur de points. En 2008, il est désigné meilleur joueur de la saison régulière (MVP). Il remporte deux nouveaux titres en 2009 et 2010. Après plusieurs tentatives manquées et trois dernières saisons entachées de blessures, Kobe Bryant met un terme à sa carrière le 13 avril 2016, après un dernier match durant lequel il inscrit 60 points. Après vingt saisons dans le même club, il compile 1 346 matches en NBA et a marqué un total de 33 583 points. Il est désigné joueur de la décennie 2000 par la NBA. Bryant est également double champion olympique 2008 et 2012 avec l\'équipe des États-Unis.\r\n\r\nLe 18 décembre 2017, ses deux maillots (les numéros 8 et 24) ont été retirés par les Lakers de Los Angeles et ont été gravés en haut du Staples Center en compagnie des autres légendes de la franchise. Kobe Bryant est à ce jour le seul joueur de l\'histoire de la NBA à avoir deux numéros gravés au plafond d\'une même franchise', 'Lakers', NULL),
(7, 1, 'bassirou', 'testtest', 'real madrid', NULL),
(8, 2, 'test1', 'testtest1', 'test1', NULL),
(9, 1, 'test', 'test', 'sf', NULL),
(10, 1, 'erer', 'r4t', 'tr5t45', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idEquipe`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`idJoueur`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `idEquipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `idJoueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
