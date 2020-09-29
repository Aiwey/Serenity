-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Wrz 2020, 05:35
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mydb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `album`
--

CREATE TABLE `album` (
  `idAlbum` int(11) NOT NULL,
  `AlbumName` varchar(45) NOT NULL,
  `AlbumGenre` varchar(45) NOT NULL,
  `AlbumDescription` varchar(45) DEFAULT NULL,
  `AlbumReleaseDate` date NOT NULL,
  `Label_idLabel` int(11) DEFAULT NULL,
  `Band_idBand` int(11) NOT NULL,
  `AlbumCoverPath` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artist`
--

CREATE TABLE `artist` (
  `idArtist` int(11) NOT NULL,
  `ArtistFName` varchar(45) NOT NULL,
  `ArtistSName` varchar(45) NOT NULL,
  `ArtistNickname` varchar(45) DEFAULT NULL,
  `ArtistBirth` date NOT NULL,
  `ArtistDeath` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `band`
--

CREATE TABLE `band` (
  `idBand` int(11) NOT NULL,
  `BandName` varchar(45) NOT NULL,
  `DateCreated` date NOT NULL,
  `DateEnded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `band_has_artist`
--

CREATE TABLE `band_has_artist` (
  `Band_idBand` int(11) NOT NULL,
  `Artist_idArtist` int(11) NOT NULL,
  `BandHasArtistID` varchar(45) NOT NULL,
  `DateJoined` date NOT NULL,
  `DateLeft` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `CommentContent` varchar(45) NOT NULL,
  `Album_idAlbum` int(11) NOT NULL,
  `User_idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `label`
--

CREATE TABLE `label` (
  `idLabel` int(11) NOT NULL,
  `LabelName` varchar(45) NOT NULL,
  `LabelCountry` varchar(45) NOT NULL,
  `LabelCity` varchar(45) NOT NULL,
  `LabelStreet` varchar(45) NOT NULL,
  `LabelPropertyNumber` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `track`
--

CREATE TABLE `track` (
  `idTrack` int(11) NOT NULL,
  `TrackName` varchar(45) NOT NULL,
  `Album_idAlbum` int(11) NOT NULL,
  `AlbumCover` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `UserLogin` varchar(45) NOT NULL,
  `UserPassword` varchar(45) NOT NULL,
  `UserRole` varchar(45) NOT NULL,
  `UserAvatarPath` varchar(45) DEFAULT NULL,
  `UserDescription` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`idUser`, `UserLogin`, `UserPassword`, `UserRole`, `UserAvatarPath`, `UserDescription`) VALUES
(1, 'admin', 'admin', 'admin', '', 'admin'),
(2, 'kanapka', 'kanapka', '', NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idAlbum`),
  ADD UNIQUE KEY `idAlbum_UNIQUE` (`idAlbum`),
  ADD KEY `fk_Album_Label_idx` (`Label_idLabel`),
  ADD KEY `fk_Album_Band1_idx` (`Band_idBand`);

--
-- Indeksy dla tabeli `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`idArtist`),
  ADD UNIQUE KEY `idArtist_UNIQUE` (`idArtist`);

--
-- Indeksy dla tabeli `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`idBand`),
  ADD UNIQUE KEY `idBand_UNIQUE` (`idBand`);

--
-- Indeksy dla tabeli `band_has_artist`
--
ALTER TABLE `band_has_artist`
  ADD PRIMARY KEY (`BandHasArtistID`),
  ADD UNIQUE KEY `BandHasArtistID_UNIQUE` (`BandHasArtistID`),
  ADD KEY `fk_Band_has_Artist_Artist1_idx` (`Artist_idArtist`),
  ADD KEY `fk_Band_has_Artist_Band1_idx` (`Band_idBand`);

--
-- Indeksy dla tabeli `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `fk_Comment_Album1_idx` (`Album_idAlbum`),
  ADD KEY `fk_Comment_User1_idx` (`User_idUser`);

--
-- Indeksy dla tabeli `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`idLabel`),
  ADD UNIQUE KEY `idLabel_UNIQUE` (`idLabel`);

--
-- Indeksy dla tabeli `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`idTrack`),
  ADD UNIQUE KEY `idTrack_UNIQUE` (`idTrack`),
  ADD KEY `fk_Track_Album1_idx` (`Album_idAlbum`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUser_UNIQUE` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `album`
--
ALTER TABLE `album`
  MODIFY `idAlbum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `artist`
--
ALTER TABLE `artist`
  MODIFY `idArtist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `band`
--
ALTER TABLE `band`
  MODIFY `idBand` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `label`
--
ALTER TABLE `label`
  MODIFY `idLabel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `track`
--
ALTER TABLE `track`
  MODIFY `idTrack` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_Album_Band1` FOREIGN KEY (`Band_idBand`) REFERENCES `band` (`idBand`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Album_Label` FOREIGN KEY (`Label_idLabel`) REFERENCES `label` (`idLabel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `band_has_artist`
--
ALTER TABLE `band_has_artist`
  ADD CONSTRAINT `fk_Band_has_Artist_Artist1` FOREIGN KEY (`Artist_idArtist`) REFERENCES `artist` (`idArtist`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Band_has_Artist_Band1` FOREIGN KEY (`Band_idBand`) REFERENCES `band` (`idBand`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_Comment_Album1` FOREIGN KEY (`Album_idAlbum`) REFERENCES `album` (`idAlbum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comment_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `fk_Track_Album1` FOREIGN KEY (`Album_idAlbum`) REFERENCES `album` (`idAlbum`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
