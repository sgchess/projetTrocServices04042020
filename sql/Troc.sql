-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 02:55 PM
-- Server version: 5.5.47-0+deb8u1
-- PHP Version: 7.2.22-1+0~20190902.26+debian8~1.gbpd64eb7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hussona`
--

-- --------------------------------------------------------

--
-- Table structure for table `CategorieService`
--

CREATE TABLE `CategorieService` (
  `idCatService` int(11) NOT NULL,
  `Titre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CategorieService`
--

INSERT INTO `CategorieService` (`idCatService`, `Titre`) VALUES
(1, 'Cours'),
(2, 'Dépannage');

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `prenomClient` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `dateInscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`idClient`, `nomClient`, `prenomClient`, `email`, `mdp`, `dateInscription`) VALUES
(11, 'Nemar', 'Jean', 'jeannemar@test.fr', '$2y$10$9biVZzezhVUzP5pELKp5MO01TT883bqgAFiBPkW9JfbL7t9ofiTnO', '2020-02-22 03:50:06'),
(12, 'Jean', 'Paul', 'jean.paul@gmail.com', '$2y$10$NKtxGnW4FrjsEBu0rjGl/er3GyOSRxSRJajRqI5L7t0JH.Fpl/aCm', '2020-02-22 20:40:09'),
(13, 'Gator', 'Ali', 'ali.gator@test.fr', '$2y$10$FNF.jIPEzemoY8O5k9sqtu3S9XTQrnGr0XKx8G/mPRrRB3LmkXqWu', '2020-03-05 13:08:09'),
(14, 'Dupont', 'Jean', 'jeandupont@test.fr', '$2y$10$Hjso2AJHbR5AUeity2zEKuqRcHqKpJ8XS3LVwYkA/rrkCEqZ6Q6Zm', '2020-03-05 14:08:14'),
(15, 'Dupont', 'Jean', 'jeandupont@test.fr', '$2y$10$xE1QNwWo44511oU/R3kJ1.r6rxJ3b.VdWfzVMnIR0Zm8iVQftVP9O', '2020-03-05 14:08:46'),
(16, 'Samy', 'Mokhtar', 'mokhtar@gmail.com', '$2y$10$D9cZJuWBZVaCBrs8RY9FWukTeNMxGPZm10q8aDi2QmkR53KEBhy0i', '2020-03-12 13:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `idServices` int(11) NOT NULL,
  `titre` varchar(40) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  `cout` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idClient` int(11) DEFAULT NULL,
  `idCatService` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`idServices`, `titre`, `description`, `cout`, `email`, `idClient`, `idCatService`) VALUES
(1, 'Cour d\'Anglais', 'Etudiant en LEA je propose des cour d\'Anglais de niveau A1 a B2.', 11, 'exemple@gmail.com', 11, 1),
(2, 'Dépanage informatique', 'Je suis diponible pour u dépanage informatique .', 12, 'email@gmail.com', 12, 2),
(4, 'Titre', 'dsa', 12, 'email2@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CategorieService`
--
ALTER TABLE `CategorieService`
  ADD PRIMARY KEY (`idCatService`);

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`idServices`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idCatService` (`idCatService`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CategorieService`
--
ALTER TABLE `CategorieService`
  MODIFY `idCatService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `idServices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `idClient` FOREIGN KEY (`idClient`) REFERENCES `Clients` (`idClient`),
  ADD CONSTRAINT `Services_ibfk_1` FOREIGN KEY (`idCatService`) REFERENCES `CategorieService` (`idCatService`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
