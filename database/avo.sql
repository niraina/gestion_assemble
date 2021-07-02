-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 27 fév. 2019 à 10:30
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `avo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `mail`, `motdepasse`, `avatar`) VALUES
(1, 'avo', 'avo@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '1.jpg'),
(2, 'niraina', 'andriamiarintsoaniraina@gmail.com', '7c0e6737eab59401108090140c99b6c0be0d1d97', ''),
(3, 'nira', 'nira@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '');

-- --------------------------------------------------------

--
-- Structure de la table `avacement`
--

CREATE TABLE `avacement` (
  `id_av` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `classeD` text NOT NULL,
  `classU` text NOT NULL,
  `classP` text NOT NULL,
  `classE` text NOT NULL,
  `echelU` text NOT NULL,
  `echelD` text NOT NULL,
  `echelT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avancement`
--

CREATE TABLE `avancement` (
  `id_av` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `DcEchelonU` text NOT NULL,
  `dateDcEchelonU` date NOT NULL,
  `DcEchelonD` text NOT NULL,
  `dateDcEchelonD` date NOT NULL,
  `DcEchelonT` text NOT NULL,
  `dateDcEchelonT` date NOT NULL,
  `PcEchelonU` text NOT NULL,
  `datePcEchelonU` date NOT NULL,
  `PcEchelonD` text NOT NULL,
  `datePcEchelonD` date NOT NULL,
  `PcEchelonT` text NOT NULL,
  `datePcEchelonT` date NOT NULL,
  `CpEchelonU` text NOT NULL,
  `dateCpEchelonU` date NOT NULL,
  `CpEchelonD` text NOT NULL,
  `dateCpEchelonD` date NOT NULL,
  `CpEchelonT` text NOT NULL,
  `dateCpEchelonT` date NOT NULL,
  `CeEchelonU` text NOT NULL,
  `dateCeEchelonU` date NOT NULL,
  `CeEchelonD` text NOT NULL,
  `dateCeEchelonD` date NOT NULL,
  `dateDc` date NOT NULL,
  `datePc` date NOT NULL,
  `dateCp` date NOT NULL,
  `dateCe` date NOT NULL,
  `classeD` text NOT NULL,
  `classeU` text NOT NULL,
  `classeP` text NOT NULL,
  `classeE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avancement`
--

INSERT INTO `avancement` (`id_av`, `nom`, `prenom`, `DcEchelonU`, `dateDcEchelonU`, `DcEchelonD`, `dateDcEchelonD`, `DcEchelonT`, `dateDcEchelonT`, `PcEchelonU`, `datePcEchelonU`, `PcEchelonD`, `datePcEchelonD`, `PcEchelonT`, `datePcEchelonT`, `CpEchelonU`, `dateCpEchelonU`, `CpEchelonD`, `dateCpEchelonD`, `CpEchelonT`, `dateCpEchelonT`, `CeEchelonU`, `dateCeEchelonU`, `CeEchelonD`, `dateCeEchelonD`, `dateDc`, `datePc`, `dateCp`, `dateCe`, `classeD`, `classeU`, `classeP`, `classeE`) VALUES
(14, 'Tanjona', 'florent pagny', '1 ere echelon', '0000-00-00', '', '2019-02-18', '3 eme echelon ', '2019-02-18', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '1 ere echelon', '2019-02-18', '', '0000-00-00', '', '0000-00-00', '1 ere echelon', '2019-02-18', '', '0000-00-00', '2019-02-17', '0000-00-00', '2019-02-18', '2019-02-18', '2 eme classe', '', 'Classe principale', 'Classe exceptionnelle'),
(15, 'andriamiarintsoa', 'Mirana', '1 ere echelon', '2019-02-18', '1 ere echelon', '2019-02-13', '3 eme echelon ', '2019-02-18', '1 ere echelon', '2019-02-18', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '2019-02-13', '2019-02-18', '0000-00-00', '0000-00-00', '2 eme classe', '1 ere classe', '', ''),
(16, 'rakotomamonjy', 'niraina', '1 ere echelon', '2019-02-16', '2 eme echelon', '2019-02-25', '3 eme echelon ', '2019-02-25', '1 ere echelon', '2019-02-18', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '2019-02-16', '2019-02-18', '0000-00-00', '0000-00-00', '2 eme classe', '1 ere classe', '', ''),
(17, 'nioraina', 'ntsoa', '1 ere echelon', '2019-02-19', '2 eme echelon', '2019-02-19', '3 eme echelon ', '2019-02-19', '1 ere echelon', '2019-02-11', '2 eme echelon', '2019-02-11', '3 eme echelon', '2019-02-11', '1 ere echelon', '2019-02-11', '2eme echelon', '2019-02-11', '3 eme echelon', '2019-02-11', '1 ere echelon', '2019-02-18', '2 eme cechelon', '2019-02-18', '2019-02-19', '2019-02-11', '2019-02-11', '2019-02-18', '2 eme classe', '1 ere classe', 'Classe principale', 'Classe exceptionnelle'),
(18, 'Randrianarivo', 'zayan', '1 ere echelon', '2019-02-27', '2 eme echelon', '2019-02-27', '3 eme echelon ', '2019-02-27', '1 ere echelon', '2019-02-27', '2 eme echelon', '2019-02-27', '3 eme echelon', '2019-02-27', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '2019-02-27', '2019-02-27', '0000-00-00', '0000-00-00', '2 eme classe', '1 ere classe', '', ''),
(19, 'Razafy', 'Koto', '1 ere echelon', '1989-01-14', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '1989-10-19', '0000-00-00', '0000-00-00', '0000-00-00', '2 eme classe', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE `conge` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateS` date NOT NULL,
  `dateR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`id`, `nom`, `prenom`, `dateS`, `dateR`) VALUES
(2, 'Tanjona', 'florent pagny', '2019-01-20', '2019-01-31'),
(3, 'rakotomamonjy', 'niraina', '2019-02-08', '2019-02-16');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `avatar`) VALUES
(2, 'niraina', 'andriamiarintsoaniraina@gmail.com', '7c0e6737eab59401108090140c99b6c0be0d1d97', ''),
(3, 'martin', 'martin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '');

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `id_personnel` int(11) NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `prenomE` varchar(255) NOT NULL,
  `dateN` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `nb_ef_vivant` int(11) NOT NULL,
  `nb_ef_charger` int(11) NOT NULL,
  `corps` varchar(255) NOT NULL,
  `dateE` date NOT NULL,
  `classe` text NOT NULL,
  `dateClasse` date NOT NULL,
  `echelon` text NOT NULL,
  `dateEchelon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `person`
--

INSERT INTO `person` (`id_personnel`, `nomP`, `prenomE`, `dateN`, `lieu`, `situation`, `nb_ef_vivant`, `nb_ef_charger`, `corps`, `dateE`, `classe`, `dateClasse`, `echelon`, `dateEchelon`) VALUES
(10, 'andriamiarintsoa', 'Mirana', '1999-01-02', 'fianarantsoa', 'CÃ©libataire', 0, 0, 'Fonction public', '2019-02-15', '2 eme classe', '2019-02-16', '1 ere echelon', '2019-02-27'),
(11, 'rakotomamonjy', 'niraina', '1999-02-01', 'fianarantsoa', 'DivorcÃ©(e)', 1, 0, 'AssemblÃ©e nationale', '0000-00-00', '2 eme classe', '2019-02-16', '1 ere echelon', '2019-02-16'),
(12, 'andriamiarintsoa', 'ntsoa', '1222-12-12', 'fianarantsoa', 'CÃ©libataire', 14, 0, 'AssemblÃ©e nationale', '0000-00-00', '2 eme classe', '0000-00-00', '1 ere echelon', '2019-02-15'),
(13, 'Tanjona', 'florent pagny', '1996-02-05', 'akofafa', 'CÃ©libataire', 0, 1, 'Fonction public', '2019-02-17', '2 eme classe', '2019-02-17', '1 ere echelon', '2019-02-17'),
(14, 'ramananjatovo', 'miarry', '1199-01-01', 'fianarantsoa', 'CÃ©libataire', 0, 0, 'AssemblÃ©e nationale', '2019-02-18', '2 eme classe', '2019-02-18', '1 ere echelon', '2019-02-18'),
(15, 'nioraina', 'ntsoa', '1999-02-01', 'fianarantsoa', 'DivorcÃ©(e)', 0, 0, 'AssemblÃ©e nationale', '2019-02-19', '2 eme classe', '2019-02-19', '1 ere echelon', '2019-02-19'),
(16, 'Randrianarivo', 'zayan', '1996-01-01', 'akofafa', 'CÃ©libataire', 0, 0, 'Fonction public', '2019-02-27', '2 eme classe', '2019-02-27', '1 ere echelon', '2019-02-27'),
(17, 'Razafy', 'Koto', '1196-12-31', 'ambositra', 'MariÃ©(e)', 5, 5, 'AssemblÃ©e nationale', '1989-03-03', '2 eme classe', '1989-10-19', '1 ere echelon', '1989-01-14');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE `responsable` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `retraite`
--

CREATE TABLE `retraite` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `dateN` date NOT NULL,
  `retraite` text NOT NULL,
  `dateR` date NOT NULL,
  `age` int(11) NOT NULL,
  `avancement` text NOT NULL,
  `echelon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `retraite`
--

INSERT INTO `retraite` (`id`, `nom`, `dateN`, `retraite`, `dateR`, `age`, `avancement`, `echelon`) VALUES
(5, 'Tanjona florent pagny', '2019-02-18', 'Retraite anticiper', '2019-02-08', 40, '2 eme classe ', '2 eme echelon'),
(6, 'andriamiarintsoa Mirana', '1999-01-02', 'Demande de maintient', '2019-02-19', 60, '2 eme classe Classe principale Classe exceptionnelle', '3 eme echelon'),
(7, 'Tanjona florent pagny', '1999-01-02', 'Retraite anticiper', '2019-02-09', 60, '2 eme classe', '1 ere echelon'),
(8, 'Randrianarivo zayan', '1996-01-01', 'Retraite normale', '2019-02-27', 60, 'Classe exceptionnelle', '2 eme echelon');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mail`, `motdepasse`, `avatar`) VALUES
(1, 'martin', 'martin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avacement`
--
ALTER TABLE `avacement`
  ADD PRIMARY KEY (`id_av`);

--
-- Index pour la table `avancement`
--
ALTER TABLE `avancement`
  ADD PRIMARY KEY (`id_av`);

--
-- Index pour la table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_personnel`);

--
-- Index pour la table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `retraite`
--
ALTER TABLE `retraite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `avacement`
--
ALTER TABLE `avacement`
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avancement`
--
ALTER TABLE `avancement`
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `conge`
--
ALTER TABLE `conge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `id_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `retraite`
--
ALTER TABLE `retraite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
