-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2020 at 06:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `AuthorID` int(255) NOT NULL AUTO_INCREMENT,
  `AuthorName` varchar(255) NOT NULL,
  `AuthorBio` text NOT NULL,
  PRIMARY KEY (`AuthorID`),
  UNIQUE KEY `AuthorID` (`AuthorID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuthorID`, `AuthorName`, `AuthorBio`) VALUES
(1, 'Elwin Haris', 'Ruth Elwin Harris says that her historic quartet of novels, THE SISTERS OF THE QUANTOCK HILLS, had its beginnings while she was growing up during World War II. To escape the wartime bombing, she and her brother were sent to live with their grandfather in rural Somerset, England. His house and garden became the model for Hillcrest, the Purcell sisters\' family home in the four-part series.'),
(2, 'Jon Musker', 'John Edward Musker is an American animator, animation director, screenwriter and producer. Along with Ron Clements, he makes up the duo of one of the Disney animation studio\'s leading director teams.'),
(4, 'Paulo Coelo', ' born 24 August 1947) is a Brazilian lyricist and novelist, best known for his novel The Alchemist. In 2014, he uploaded his personal papers online to create a virtual Paulo Coelho Foundation.'),
(7, 'Laurent Gounelle', 'Lorem Ipsum'),
(10, 'ahmed el sefrioui', 'l\'auteur de la boite a merveille'),
(11, 'khair eddine', 'l ecrivain de AGADIR'),
(12, 'Charles Perrault', 'ARRRRRRRRRRRRRRRRRRRRRRRRRRRR'),
(13, 'Eckhart tolle', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `BookID` int(11) NOT NULL AUTO_INCREMENT,
  `genreID` int(11) DEFAULT NULL,
  `AuthorID` int(255) NOT NULL,
  `BookDescription` text NOT NULL,
  `BookTitle` varchar(255) NOT NULL,
  PRIMARY KEY (`BookID`),
  KEY `AuthorID` (`AuthorID`),
  KEY `genreID` (`genreID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `genreID`, `AuthorID`, `BookDescription`, `BookTitle`) VALUES
(1, 3, 1, 'this is the first Book', 'julia\'s story'),
(2, 2, 2, 'this is the second book', 'Moana'),
(6, 2, 1, 'Wild', 'Wild Light'),
(13, 5, 1, 'The Alchemist (Portuguese: O Alquimista) is a novel by Brazilian author Paulo Coelho that was first published in 1988. Originally written in Portuguese, it became a widely translated international bestseller.[1][2] An allegorical novel, The Alchemist follows a young Andalusian shepherd in his journey to the pyramids of Egypt, after having a recurring dream of finding a treasure there.', 'The Alchemist'),
(14, 9, 4, 'Eleven Minutes is the story of Maria, a young girl from a Brazilian village, whose first innocent brushes with love leave her heartbroken. At a tender age, she becomes convinced that she will never find true love, instead believing that “love is a terrible thing that will make you suffer. . . .”', 'Eleven Minutes'),
(15, 6, 7, 'Lorem Ipsum', 'L\'homme qui voulait etre heureux'),
(18, 4, 11, 'un livre sur AGADIR', 'AGADIR'),
(20, 13, 7, 'Avec son nouveau roman à suspense, Laurent Gounelle vous entraîne au cœur d’une histoire exaltante dans laquelle vous allez vous perdre… et vous retrouver.', 'je te promet la liberté'),
(30, 15, 2, 'test desc', 'test'),
(31, 15, 1, 'hhh', 'hhh'),
(32, 10, 2, 'fgfg', 'fghf'),
(33, 14, 1, 'sdsd', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event` varchar(255) NOT NULL,
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `eventDate` date NOT NULL,
  `eventDescription` text NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event`, `eventID`, `eventDate`, `eventDescription`) VALUES
('opo', 17, '2020-06-18', 'popo');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `bookID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`bookID`,`UserID`),
  KEY `user` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`bookID`, `UserID`) VALUES
(1, 2),
(2, 2),
(6, 2),
(6, 5),
(14, 2),
(15, 2),
(15, 3),
(18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `genre` varchar(255) NOT NULL,
  `genreID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`genreID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre`, `genreID`) VALUES
('aventure', 2),
('Biographie, mémoires', 3),
('Fantastique, science-fiction', 4),
('Géographie, tourisme', 5),
('Humour', 6),
('Jeunesse', 7),
('Nouvelles,Contes', 8),
('Philosophie', 9),
('Poésie', 10),
('Policier,Mystère', 11),
('Récits', 12),
('Roman', 13),
('Sentimental', 14),
('Théàtre', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(20) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `confirmed` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`, `date_de_naissance`, `quartier`, `genre`, `admin`, `confirmed`) VALUES
(2, 'hhh', 'said', 'test@email.com', '123', '2000-02-07', '4444', 'homme', 0, 1),
(3, 'nomtest', 'prenom', 'test2@email.com', '1234', '1999-03-04', 'ffffffff', 'femme', 0, 0),
(4, 'steve', 'trabajo', 'test3@email.com', 'ff69', '1996-06-09', 'gg', 'homme', 0, 1),
(5, 'elberriri', 'mariem', 'elberriri.mariem@gmail.com', 'azerty', '2020-07-01', 'albahr', 'femme', 1, 1),
(6, 'elberriri', 'mehdi', 'mehdiberriri1@gmail.com', 'dq7mqd01', '1969-05-14', 'lot albahr', 'homme', 0, 1),
(7, 'Nom', 'Prenom', 'nom.pernon@gmail.com', 'azer', '2020-05-13', 'aa', 'homme', 0, 0),
(8, '7amada', 'gga', 'fvlsdlsd@fldsfl.sdl', 'hehe', '2020-06-16', 'klklklk', 'homme', 0, 0),
(9, 'da7mad', '7amid', '7amid@gmail.com', '7amid01', '2020-06-24', 'm\'diq', 'homme', 0, 0),
(10, 'gg', 'gdef', 'ddd@ddd.dd', 'haha', '2020-06-12', 'jj', 'homme', 0, 0),
(15, 'ffff', 'ddd', 'sdmdmd@ddld.dd', 'hello', '2020-07-14', 'mmm', 'homme', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`AuthorID`) REFERENCES `author` (`AuthorID`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`genreID`) REFERENCES `genre` (`genreID`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `book` FOREIGN KEY (`bookID`) REFERENCES `books` (`BookID`),
  ADD CONSTRAINT `user` FOREIGN KEY (`UserID`) REFERENCES `database`.`membres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
