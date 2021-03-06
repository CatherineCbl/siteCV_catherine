-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 21 Juillet 2017 à 09:38
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ccabeuil_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_competences`
--

CREATE TABLE `t_competences` (
  `id_competence` int(11) NOT NULL,
  `icone` varchar(50) NOT NULL,
  `competence` varchar(45) NOT NULL,
  `niveau` varchar(5) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY(id_competence)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_competences`
--

INSERT INTO `t_competences` (`id_competence`, `icone`, `competence`, `niveau`, `utilisateur_id`) VALUES
(1, 'html.png', 'HTML5', '80%', 1),
(2, 'css.png', 'CSS3', '60%', 1),
(3, 'bootstrap.png', 'Bootstrap', '75%', 1),
(4, 'javascript.png', 'JavaScript', '15%', 1),
(5, 'jquery.png', 'JQuery', '10%', 1),
(6, 'angular.png', 'Angular', '5%', 1),
(7, 'ajax.png', 'Ajax', '55%', 1),
(8, 'php.png', 'PHP7', '55%', 1),
(9, 'sql.png', 'SQL', '65%', 1),
(10, 'wordpress.png', 'WordPress', '65%', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_experiences`
--

CREATE TABLE `t_experiences` (
  `id_experience` int(11) NOT NULL,
  `titre_e` varchar(45) NOT NULL,
  `sous_titre_e` varchar(45) DEFAULT NULL,
  `dates_e` varchar(45) NOT NULL,
  `description_e` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_experiences`
--

INSERT INTO `t_experiences` (`id_experience`, `titre_e`, `sous_titre_e`, `dates_e`, `description_e`, `utilisateur_id`) VALUES
(40, 'Agent renfort des écoles maternelles', 'Mairie de Paris', '2014-01-08', '<p>Surveillance des enfants / Entretien de leur lieu de vie / Service des repas</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_formations`
--

CREATE TABLE `t_formations` (
  `id_formation` int(11) NOT NULL,
  `titre_f` varchar(45) NOT NULL,
  `sous_titre_f` varchar(45) DEFAULT NULL,
  `dates_f` varchar(45) NOT NULL,
  `description_f` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_formations`
--

INSERT INTO `t_formations` (`id_formation`, `titre_f`, `sous_titre_f`, `dates_f`, `description_f`, `utilisateur_id`) VALUES
(1, 'xcascxas', 'cz', '2017-07-13', '<p>tgrzhyetht</p>\r\n', 1),
(2, 'cwqc', 'qwsc', '2017-07-13', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_intertitres`
--

CREATE TABLE `t_intertitres` (
  `id_intertitre` int(11) NOT NULL,
  `intertitre_1` varchar(45) NOT NULL,
  `intertitre_2` varchar(45) NOT NULL,
  `intertitre_3` varchar(45) NOT NULL,
  `intertitre_4` varchar(45) DEFAULT NULL,
  `intertitre_5` varchar(45) DEFAULT NULL,
  `intertitre_6` varchar(45) DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_loisirs`
--

CREATE TABLE `t_loisirs` (
  `id_loisir` int(11) NOT NULL,
  `loisir` varchar(45) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_loisirs`
--

INSERT INTO `t_loisirs` (`id_loisir`, `loisir`, `utilisateur_id`) VALUES
(1, 'Voyages', 1),
(19, 'voyages2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_realisations`
--

CREATE TABLE `t_realisations` (
  `id_realisation` int(11) NOT NULL,
  `titre_r` varchar(45) NOT NULL,
  `sous_titre_r` varchar(45) DEFAULT NULL,
  `dates_r` varchar(45) NOT NULL,
  `description_r` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_realisations`
--

INSERT INTO `t_realisations` (`id_realisation`, `titre_r`, `sous_titre_r`, `dates_r`, `description_r`, `utilisateur_id`) VALUES
(6, 'faefaé', NULL, '2017-07-13', 'aefraée', 1),
(7, 'dzadé', NULL, '2017-07-17', 'dé"dfée', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_titres_cv`
--

CREATE TABLE `t_titres_cv` (
  `id_titre_cv` int(11) NOT NULL,
  `titre_cv` text NOT NULL,
  `accroche` text NOT NULL,
  `logo` varchar(25) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_titres_cv`
--

INSERT INTO `t_titres_cv` (`id_titre_cv`, `titre_cv`, `accroche`, `logo`, `utilisateur_id`) VALUES
(1, 'Développeuse web fullstack junior', 'Recherche de stage.', 'catherine.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateurs`
--

CREATE TABLE `t_utilisateurs` (
  `id_utilisateur` int(11) NOT NULL COMMENT 'identifiant utilisateur',
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `avatar` varchar(20) NOT NULL,
  `age` smallint(2) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` enum('Femme','Homme','','') NOT NULL,
  `etat_civil` enum('M.','Mme','','') NOT NULL,
  `statut_marital` varchar(13) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `pays` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_utilisateurs`
--

INSERT INTO `t_utilisateurs` (`id_utilisateur`, `prenom`, `nom`, `email`, `telephone`, `mdp`, `pseudo`, `avatar`, `age`, `date_naissance`, `sexe`, `etat_civil`, `statut_marital`, `adresse`, `code_postal`, `ville`, `pays`) VALUES
(1, 'Catherine', 'Cabeuil', 'catherine.cabeuil@gmail.com', '06 59 02 90 61', '12345', 'Catherine', 'catherine.jpg', 23, '1994-04-11', 'Femme', 'Mme', 'célibataire', '72 rue Jules Châtenay', '93380', 'Pierrefitte Sur Seine', 'France'),
(2, 'Annissa', 'Mekiri', 'annissa.mekiri@gmail.com', '06 06 06 06 06', '123456', 'annissam', 'annissa.jpg', 23, '1994-05-25', 'Femme', 'Mme', 'célibataire', 'lorem lorem lorem', '93240', 'Stains', 'France');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_competences`
--
ALTER TABLE `t_competences`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `t_formations`
--
ALTER TABLE `t_formations`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `t_intertitres`
--
ALTER TABLE `t_intertitres`
  ADD PRIMARY KEY (`id_intertitre`);

--
-- Index pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  ADD PRIMARY KEY (`id_loisir`);

--
-- Index pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  ADD PRIMARY KEY (`id_realisation`);

--
-- Index pour la table `t_titres_cv`
--
ALTER TABLE `t_titres_cv`
  ADD PRIMARY KEY (`id_titre_cv`);

--
-- Index pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_competences`
--
ALTER TABLE `t_competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `t_formations`
--
ALTER TABLE `t_formations`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t_intertitres`
--
ALTER TABLE `t_intertitres`
  MODIFY `id_intertitre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `t_titres_cv`
--
ALTER TABLE `t_titres_cv`
  MODIFY `id_titre_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant utilisateur', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
