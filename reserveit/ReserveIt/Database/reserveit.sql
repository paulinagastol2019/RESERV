-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lis 2021, 22:54
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `reserveit`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id_film` int(11) NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `data_seansu` date NOT NULL,
  `gatunek_filmu` text COLLATE utf8_polish_ci NOT NULL,
  `rezyser` text COLLATE utf8_polish_ci NOT NULL,
  `produkcja` varchar(250) COLLATE utf8_polish_ci NOT NULL,
  `obrazek` varchar(250) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id_film`, `tytul`, `opis`, `data_seansu`, `gatunek_filmu`, `rezyser`, `produkcja`, `obrazek`) VALUES
(1, 'ROME', 'Gajusz Juliusz Cezar po ośmioletniej wojnie, podczas której dokonał mistrzowskiego podboju Galii, przygotowuje się do powrotu. Kieruje się w stronę Rzymu wraz z tysiącami lojalnych i zaprawionych w boju żołnierzy, dużym łupem w postaci złota i niewolników, oraz radykalnymi planami zmian.', '2022-12-22', 'dramat', 'Jan Kowalski', '2021 PL', './images/filmy/film1dramat.jpg'),
(2, 'The Bulldog II', 'Oparty luźno na autentycznych wydarzeniach film przedstawia historię o chłopcu i jego wiernym psie rasy bulldog, który dzięki swoim walecznym sercu i odwadze nie raz uchroni przed tarapatami swojego przyjaciela.', '2022-08-15', 'animowane', 'Tadeusz Baryka', '2021 PL', './images/filmy/film2animowane.jpg'),
(3, 'Your Squad', 'Perypetie dorosłego mężczyzny i jego przyjaciół, którzy zachowują się beztrosko pomimo upływających lat. Przez swoje zachowanie wpadają w tarapaty.', '2022-08-10', 'komedie', 'Mateusz Mazur', '2021 USA', './images/filmy/film3komedie.jpg'),
(4, 'Mr Darkness', 'Członkowie ekipy badawczej trafiają  na grobowiec, który stopniowo odkrywa przed nimi coraz to bardziej mroczne tajemnice. ', '2022-09-15', 'scifi', 'Paulina Gąstoł', '2022 PL', './images/filmy/film4scifi.jpg'),
(5, 'Memorial Day', 'Dokument ukazuje odzyskanie niepodległości w oparciu o archiwalne, kolorowe, a przede wszystkim autentyczne zdjęcia z tamtego okresu.', '2022-07-14', 'edukacyjne', 'Sebastian Lolek', '2021 USA', './images/filmy/film5edukacyjne.jpg'),
(6, 'GASMASK', 'Grupa młodych ludzi, szukających ekstremalnych wrażeń, wynajmuje przewodnika. Ten, mimo surowych zakazów, zabiera ich do owianego tajemnicą miasta-widmo.', '2022-07-01', 'dramat', 'Jan Nowak', '2021 USA', './images/filmy/film6dramat.jpg'),
(7, 'Indie Week on Rodeo', 'Łowca nagród i jego przyjaciel wyruszają w podróż, aby odbić żonę jednego z boahaterów z rąk bezlitosnego Karla Pompo.', '2022-08-26', 'akcja', 'Jerzy Jeż', '2021 PL', './images/filmy/film7akcja.jpg'),
(8, 'The Black Summer', 'W trakcie ostatnich wakacji przed rozpoczęciem zajęć na uczelni stojąca u progu dorosłości grupa przyjaciół próbuje szczęścia w dotychczasowych i całkiem nowych związkach.', '2022-11-05', 'akcja', 'Jan Kowalski', '2022 USA', './images/filmy/film8akcja.jpg'),
(9, 'Galaktyka 2', 'Grupa zaprzyjaźnionych studentów wyrusza w daleką podróż aby odnaleźć zaginionego wykładowce.', '2022-09-08', 'scifi', 'Jakub Ładyga', '2021 PL', './images/filmy/film9scifi.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `user_id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(65) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(65) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`user_id`, `imie`, `nazwisko`, `email`, `haslo`) VALUES
(1, 'Paulina', 'Gąstoł', 'paulina@gmail.com', '$2y$10$P1yoWAt7wdbqKZamZML.KOCNMYSSZ9EVriohDTjWGHia0GLyoNmJi'),
(4, 'Dominika', 'GÄ…stoÅ‚', 'dominika@gmail.com', '$2y$10$Ds8SV9fYy7nz44iZYAzOQe/cKnQwxCJMKbWTWsWE59MGkACPWCeuK');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
