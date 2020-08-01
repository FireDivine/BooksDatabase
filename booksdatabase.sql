-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2020 at 02:03 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AuthorID` int(11) NOT NULL,
  `AuthorName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AURL` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ALocation` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ADetails` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuthorID`, `AuthorName`, `AURL`, `ALocation`, `ADetails`) VALUES
(0, 'Charlotte McConaghy', 'https://www.charlottemcconaghy.com/', 'Australia', 'Charlotte is an Australian author living in Sydney. She has a Masters Degree in Screenwriting from the Australian Film Television and Radio School, and eight books published in Australia.'),
(1, 'Kristen Painter', 'https://kristenpainter.com/about/ ', 'Florida ', 'My forays into writing have been as varied as the jobs I’ve held. I’ve written poetry, articles for magazines, short stories, paranormal romance (my current genre of choice along with cozy mystery),  fantasy romance, contemporary romance, steampunk romance, and urban fantasy.'),
(2, 'Barbie', 'www.barbie.com', 'america', 'tis barbie');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BTitle` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `BSubtitle` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `BAuthor` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ISBN` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `BFORMAT` int(11) NOT NULL,
  `Bgenre` int(11) DEFAULT NULL,
  `BDESCRIPTION` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `BTOTAL_PAGES` int(11) DEFAULT NULL,
  `bSeries` int(11) DEFAULT NULL,
  `Number_in_Series` int(11) DEFAULT NULL,
  `PublishingYear` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BTitle`, `BSubtitle`, `BAuthor`, `ISBN`, `BFORMAT`, `Bgenre`, `BDESCRIPTION`, `BTOTAL_PAGES`, `bSeries`, `Number_in_Series`, `PublishingYear`) VALUES
('ReactJs example by Ryan Vice - www.ViceSoftware.com', NULL, 'test', '111115555', 0, 9, 'jugfuv', 56, 0, 1, '999'),
('asd', NULL, 'dfd', '546464', 0, 0, 'sdfwd', 656, 1, 1, '222'),
('Blood Rights', NULL, 'Kristen Painter', '9780748121298', 1, 3, 'rebellion has a price...', 416, 3, 1, '2011'),
('Flesh and Blood', NULL, 'Kristen Painter', '9781841499703', 1, 3, 'Sacrifice is a choice…', 389, 3, 2, '2011');

-- --------------------------------------------------------

--
-- Table structure for table `book_format`
--

CREATE TABLE `book_format` (
  `FormatID` int(11) NOT NULL,
  `FormatName` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_format`
--

INSERT INTO `book_format` (`FormatID`, `FormatName`) VALUES
(0, 'Ebook'),
(1, 'PaperBack'),
(2, 'AudioBook');

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `GenreID` int(11) NOT NULL,
  `GenreName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`GenreID`, `GenreName`) VALUES
(0, 'Romance'),
(1, 'Western'),
(2, 'Science-Fiction'),
(3, 'Fantasy'),
(4, 'Horror'),
(5, 'Thriller'),
(6, 'Mystery'),
(7, 'Young Adult Fiction'),
(8, 'Non-Fiction'),
(9, 'Childrens'),
(10, 'Poetry'),
(11, 'Comic'),
(12, 'Biography'),
(13, 'Adult-Fiction'),
(14, 'Educational'),
(15, 'Journal'),
(16, 'History'),
(17, 'Action and adventure'),
(19, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PublisherID` int(11) NOT NULL,
  `PName` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Pyear` char(4) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Planguage` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `muitple` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PublisherID`, `PName`, `Pyear`, `Planguage`, `muitple`) VALUES
(0, 'Random House Australia', '2013', 'English', NULL),
(1, 'CrazyTest', NULL, 'English', NULL),
(2, 'MadCat', NULL, 'Latin', NULL),
(3, 'Jillian Eccles', NULL, 'bob', NULL),
(5, 'Little London', NULL, 'English', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `SeriesID` int(11) NOT NULL,
  `SeriesName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Stotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`SeriesID`, `SeriesName`, `Stotal`) VALUES
(0, 'The Chronicles of Kaya', 3),
(1, 'The Guild Hunter Series', 13),
(2, 'Halo Triogy', 3),
(3, 'House of Comarre', 4),
(4, 'Boodlines', 10),
(6, 'Jillian Eccles', 152),
(7, 'testSeries2', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `fk_Bgenre` (`Bgenre`),
  ADD KEY `fk_BFORMAT` (`BFORMAT`),
  ADD KEY `fk_bSeries` (`bSeries`);

--
-- Indexes for table `book_format`
--
ALTER TABLE `book_format`
  ADD PRIMARY KEY (`FormatID`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD PRIMARY KEY (`GenreID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PublisherID`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`SeriesID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`Bgenre`) REFERENCES `book_genre` (`GenreID`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`BFORMAT`) REFERENCES `book_format` (`FormatID`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`bSeries`) REFERENCES `series` (`SeriesID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
