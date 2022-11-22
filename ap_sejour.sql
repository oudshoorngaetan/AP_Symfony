-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc36
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 22 nov. 2022 à 14:32
-- Version du serveur : 10.5.16-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `libelle`) VALUES
(1, 'Cadiologie'),
(2, 'Radiologie'),
(3, 'Chirurgie'),
(4, 'Chirurgie esthétique'),
(5, 'Oncologie'),
(6, 'Soins intensifs'),
(7, 'Urologie'),
(8, 'Anesthésiologie');


INSERT INTO `chambre` (`id`, `numero`, `service_id`) VALUES
(1, 101, 1),
(2, 102, 1),
(3, 103, 1),
(4, 201, 2),
(5, 202, 2),
(6, 203, 2),
(7, 801, 8),
(8, 401, 4),
(9, 402, 4),
(10, 403, 4),
(11, 501, 5),
(12, 601, 6),
(13, 701, 7),
(14, 702, 7);
/*
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221108154754', '2022-11-22 13:30:31', 804),
('DoctrineMigrations\\Version20221112135352', '2022-11-22 13:30:32', 399),
('DoctrineMigrations\\Version20221112135657', '2022-11-22 13:30:32', 484),
('DoctrineMigrations\\Version20221112135808', '2022-11-22 13:30:33', 376),
('DoctrineMigrations\\Version20221112143301', '2022-11-22 13:30:33', 125),
('DoctrineMigrations\\Version20221112144603', '2022-11-22 13:30:33', 775),
('DoctrineMigrations\\Version20221115144558', '2022-11-22 13:30:34', 725);
*/
--
-- Déchargement des données de la table `lit`
--

INSERT INTO `lit` (`id`, `chambre_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 6),
(19, 6),
(20, 7),
(21, 8),
(22, 8),
(23, 9),
(24, 9),
(25, 10),
(26, 10),
(27, 11),
(28, 12),
(29, 12),
(30, 13),
(31, 13),
(32, 14),
(33, 14),
(34, 14);

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `telephone`, `adresse`, `ville`, `cp`) VALUES
(1, 'Bossé', 'Adrien', '0678431186', '3 rue de la paix', 'Lille', '59000'),
(2, 'Moreau', 'Aurore', '0645123673', '15 rue charles de gaulle', 'Roubaix', '59100'),
(3, 'Laframboise', 'Emmanuelle', '0644814323', '65 boulevard de lille', 'Roubaix', '59100'),
(4, 'Gaillard', 'George', '0612354523', '5 avenue des anges', 'Leers', '59150');

--
-- Déchargement des données de la table `sejour`
--

INSERT INTO `sejour` (`id`, `date_arr`, `date_sort`, `commentaire`, `patient_id`, `lit_id`) VALUES
(1, '2022-11-22', '2022-11-25', 'Test1', 1, 10),
(2, '2022-11-23', '2022-11-24', 'Test2', 2, 12),
(3, '2022-11-22', '2022-11-27', 'Test3', 3, 18),
(4, '2022-11-22', '2022-11-30', 'Test4', 4, 4);


--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `personnel_id`) VALUES
(1, 'olivia.la28@gmail.com', '[]', '$2y$13$TUCmVaU6XD5qsFrYPeqt6uGZSzILTU2aAlj6eyZYPSB.QqsHLDitq', NULL);

