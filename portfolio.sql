-- phpMyAdmin SQL Dump
-- version 5.1.0-rc1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 19 mars 2021 à 05:08
-- Version du serveur :  10.4.8-MariaDB-log
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `description` varchar(128) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `nom`, `description`, `ordre`) VALUES
(1, 'PHP', 'Framework Blade Laravel avec Boostrap', 1),
(2, 'Organisé', 'je suis Organisé', 2);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL,
  `date` varchar(9) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `nom`, `description`, `date`, `ordre`) VALUES
(2, 'Technicien en bureau d\'étude', 'CDD Vacances Toussaint', '2018', 2);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `login` varchar(16) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `telephone` int(10) NOT NULL,
  `role` int(11) NOT NULL,
  `token` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `mail`, `login`, `mdp`, `telephone`, `role`, `token`) VALUES
(1, 'Touré', 'Massiré', 'mtoure@condorcet93.fr', 'mtoure', '$2y$10$ZFahOdq8rrkQP6ts2.dbUO.BZKQnZFA6bUQP87a7cFmnm8CwUld92', 768357005, 1, NULL),
(2, 'Mogueh', 'Hodane', 'hodanemogueh@gmail.com', 'hodane', '1234', 752684365, 0, ''),
(3, 'mtoure@condorcet93.fr', 'Massire', 'toure.massire@btsvoillaume.fr', 'toto', '$2y$10$viNf1SaKg1X4Liuz8AEzMO0.14jNO25wz0hCZH44oxlQ3JYg2rfyi', 768357005, 0, ''),
(4, 'test', 'test', 'massire.toure.sio@gmail.com', 'test', '$2y$10$OYecwu/xjgcBaigKVwKtMe5H/AEhReWzyqkozlUqXc0JjPsd7bEQS', 768357005, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `lienGithub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `description`, `photo`, `lienGithub`) VALUES
(1, 'Laravel', 'test laravel', 'https://i.ibb.co/PCw5fnS/Capture-d-cran-2021-01-25-121827.png;https://i.ibb.co/wQ9n7CC/suppression-membre.png', 'https://github.com/Massire9/portfolio'),
(2, 'Java', 'java test', 'java/img1;java/img2;java/img3', 'https://github.com/abenmerad/megaptera/blob/master/vue/v_mesObservations.php'),
(3, 'Java', 'java test', 'java/img1.png;java/img2.png;java/img3.png', 'https://github.com/abenmerad/megaptera/blob/master/vue/v_mesObservations.php'),
(4, 'Massire', 'TOURE', 'https://i.ibb.co/X72TL5t/gtggt.png;https://i.ibb.co/yptsL4L/fe.png', NULL),
(5, 'Megaptera', 'Moi et mon équipe devions réaliser un site web (php, JavaScript, HTML5/CSS3 et SQL) pour l\'association Megaptera. Nous devions faire en sorte que les membres de l\'association puisse y enregistrer leur photos d\'observations de baleines / baleineau. Faire en sorte qu\'un administrateur puisse gérer le site (supprimer ou modifier des observations ou encore gérer les membres (supprimer, promouvoir modérateur...)). Tout cela en 8 semaine avec 2 coéquipiers.', 'https://i.ibb.co/X72TL5t/gtggt.png;https://i.ibb.co/yptsL4L/fe.png', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `libelle` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `libelle`) VALUES
(0, 'membre'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `scolarite`
--

CREATE TABLE `scolarite` (
  `id` int(11) NOT NULL,
  `diplome` varchar(32) NOT NULL,
  `filiere` varchar(64) NOT NULL,
  `ville` varchar(64) NOT NULL,
  `annee` int(4) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scolarite`
--

INSERT INTO `scolarite` (`id`, `diplome`, `filiere`, `ville`, `annee`, `ordre`) VALUES
(1, 'Baccalauréat', 'Lycée Condorcet à Montreuil', 'STI2D option SIN', 2019, 1),
(2, 'BTS', 'SIO :SLAM', 'Aulnay', 2021, 1),
(3, 'Certificat', 'Cuisine', 'Noisy-le-sec (93)', 2016, 2),
(4, 'Hess', 'poieeohjoezjpo', 'Rosny', 2015, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `scolarite`
--
ALTER TABLE `scolarite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `scolarite`
--
ALTER TABLE `scolarite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
