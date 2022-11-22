-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc36
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 15 nov. 2022 à 15:39
-- Version du serveur : 10.5.16-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221108154754', '2022-11-15 12:47:43', 879),
('DoctrineMigrations\\Version20221112135352', '2022-11-15 12:47:44', 419),
('DoctrineMigrations\\Version20221112135657', '2022-11-15 12:47:45', 488),
('DoctrineMigrations\\Version20221112135808', '2022-11-15 12:47:45', 454),
('DoctrineMigrations\\Version20221112143301', '2022-11-15 12:47:46', 108),
('DoctrineMigrations\\Version20221112144603', '2022-11-15 12:47:46', 914),
('DoctrineMigrations\\Version20221115144558', '2022-11-15 14:46:48', 729);
*/

INSERT INTO `patient` (`id`, `nom`, `prenom`, `telephone`, `adresse`, `ville`, `cp`) VALUES
(1, 'Bossé', 'Adrien', '0678431186', '3 rue de la paix', 'Lille', '59000'),
(2, 'Moreau', 'Aurore', '0645123673', '15 rue charles de gaulle', 'Roubaix', '59100'),
(3, 'Laframboise', 'Emmanuelle', '0644814323', '65 boulevard de lille', 'Roubaix', '59100'),
(4, 'Gaillard', 'George', '0612354523', '5 avenue des anges', 'Leers', '59150');


INSERT INTO `service` (`id`, `libelle`) VALUES
(1, 'Cadiologie'),
(2, 'Radiologie'),
(3, 'Chirurgie'),
(4, 'Chirurgie esthétique'),
(5, 'Oncologie'),
(6, 'Soins intensifs'),
(7, 'Urologie'),
(8, 'Anesthésiologie');

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `personnel_id`) VALUES
(1, 'olivia.la28@gmail.com', '[]', '$2y$13$TUCmVaU6XD5qsFrYPeqt6uGZSzILTU2aAlj6eyZYPSB.QqsHLDitq', NULL);

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
(14, 701, 7);
