-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2018 at 05:14 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ade`
--

CREATE TABLE IF NOT EXISTS `ade` (
  `id_joueur` int(11) NOT NULL,
  `a` int(11) NOT NULL DEFAULT '0',
  `d` int(11) NOT NULL DEFAULT '0',
  `e` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ade`
--

INSERT INTO `ade` (`id_joueur`, `a`, `d`, `e`) VALUES
(1, 475, 220, 17),
(2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mp` int(11) NOT NULL DEFAULT '0',
  `caisse` int(11) NOT NULL DEFAULT '200',
  `pdt` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joueur`
--

INSERT INTO `joueur` (`id`, `pseudo`, `mdp`, `mp`, `caisse`, `pdt`) VALUES
(1, 'haytam', 'haytam', 2, 0, 14),
(2, 'oussama', 'oussama', 0, 200, 0),
(3, 'kasri', 'kasri', 0, 200, 0),
(4, 'h', 'h', 7, 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pj`
--

CREATE TABLE IF NOT EXISTS `pj` (
  `idp` int(11) NOT NULL,
  `idj` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pj`
--

INSERT INTO `pj` (`idp`, `idj`, `quantite`) VALUES
(15, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL,
  `nom` int(11) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `type`) VALUES
(1, NULL, 150, 0),
(2, NULL, 50, 0),
(3, NULL, 300, 0),
(4, NULL, 100, 0),
(5, NULL, 400, 0),
(6, NULL, 250, 0),
(7, NULL, 600, 0),
(8, NULL, 250, 0),
(9, NULL, 1000, 0),
(10, NULL, 20, 0),
(11, NULL, 50, 0),
(12, NULL, 100, 0),
(13, NULL, 200, 0),
(14, NULL, 160, 0),
(15, NULL, 10, 0),
(16, NULL, 150, 0);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `id_joueur1` int(11) DEFAULT NULL,
  `id_joueur2` int(11) DEFAULT NULL,
  `id_joueur3` int(11) DEFAULT NULL,
  `id_jour` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `mdp`, `id_joueur1`, `id_joueur2`, `id_joueur3`, `id_jour`) VALUES
(1, 'session1', 1, NULL, NULL, 2),
(2, 'session2', 1, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
