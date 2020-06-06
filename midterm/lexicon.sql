-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 08:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lexicon`
--
CREATE DATABASE IF NOT EXISTS `lexicon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lexicon`;

-- --------------------------------------------------------

--
-- Table structure for table `my_lexicon`
--

CREATE TABLE `my_lexicon` (
  `english` varchar(50) NOT NULL,
  `portuguese` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_lexicon`
--

INSERT INTO `my_lexicon` (`english`, `portuguese`) VALUES
('Peace', 'Paz'),
('Swing', 'Nadar'),
('Change', 'Trocar'),
('Light', 'Luz'),
('Wardrobe', 'ArmÃ¡rio'),
('Bull', 'Touro'),
('Beach', 'Praia'),
('Book', 'Livro'),
('Chains', 'Correntes'),
('Bed', 'Cama'),
('Table', 'Mesa'),
('Song', 'MÃºsica'),
('Sleep', 'Dormir');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
