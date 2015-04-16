-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 16 Kwi 2015, 22:28
-- Wersja serwera: 5.5.28-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `virt103174_pokaz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `comment` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=62 ;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `year`, `publisher`, `comment`) VALUES
(37, 'PHP Objects, Patterns, and Practice, Fourth Edition', 'Matt Zandstra', 2013, 'Apress', 'Jest to Ĺ›wietna ksiÄ…ĹĽka do podszlifowania swoich umiejÄ™tnoĹ›ci programowania obiektowego.'),
(38, 'PrzykĹ‚ad', 'PrzykĹ‚ad', 123, 'PrzykĹ‚ad', 'PrzykĹ‚adowa wartoĹ›Ä‡ '),
(39, 'Antygona', 'Sofokles', -442, '---', ''),
(42, 'KrzyĹĽacy', 'Henryk Sienkiewicz', 1900, 'Wydawnictwo Greg', 'Jest to powieĹ›Ä‡ historyczna. Autor otrzymaĹ‚ LiterackÄ… NagrodÄ™ Nobla.'),
(43, 'P<"''/Ăł()*!$@^rzykĹ‚ad', 'P<"''/Ăł()*!$@^rzykĹ‚ad', -7531, 'P<"''/Ăł()*!$@^rzykĹ‚ad', 'P<"''/Ăł()*!$@^rzykĹ‚ado\\[]./?'';~!#@#%$#^%$*^&( tekst, udowadniajÄ…cy <b>odpowiednie uĹĽycie funkcji w PHP</b>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
