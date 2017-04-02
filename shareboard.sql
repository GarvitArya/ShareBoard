-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Apr 2017 um 20:36
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `shareboard`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(21, 1, 'Berowne in Love''s Labors Lost', 'From women''s eyes this doctrine I derive:\r\nThey sparkle still the right Promethean fire;\r\nThey are the books, the arts, the academes,\r\nThat show, contain, and nourish all the world.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.cldrnMXom#.jb6PmNRgQ', '2017-03-30 22:11:36'),
(22, 10, 'Jaques in As You Like It', 'All the world''s a stage,\r\nAnd all the men and women merely players:\r\nThey have their exits and their entrances;\r\nAnd one man in his time plays many parts.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.cldrnMXom#.jb6PmNRgQ', '2017-03-30 22:13:09'),
(23, 12, 'Polonius in Hamlet', 'This above all: to thine ownself be true.\r\nAnd it must follow, as the night the day,\r\nThou canst not then be false to any man.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.cldrnMXom#.jb6PmNRgQ', '2017-03-30 22:20:00'),
(24, 11, 'Lear in King Lear', 'Come, let''s away to prison;\r\nWe two alone will sing like birds i'' the cage:\r\nWhen thou dost ask me blessing, I''ll kneel down,\r\nAnd ask of thee forgiveness: so we''ll live,\r\nAnd pray, and sing, and tell old tales, and laugh\r\nAt gilded butterflies, and hear poor rogues\r\nTalk of court news.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.cldrnMXom#.jb6PmNRgQ', '2017-03-30 22:21:03'),
(26, 14, 'Rosalind in As You Like It', 'For your brother and my sister no sooner \r\nmet, but they looked; no sooner looked, but they \r\nloved; no sooner loved, but they sighed; no sooner \r\nsighed, but they asked one another the reason; no \r\nsooner knew the reason but they sought the remedy.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.cldrnMXom#.jb6PmNRgQ', '2017-03-30 22:22:13'),
(27, 9, 'Boy in Henry V', 'I would give all my fame for a pot of ale, and safety.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.cldrnMXom#.jb6PmNRgQ', '2017-03-30 22:22:38'),
(28, 1, 'Cassius in Julius Caesar', 'Men at some time are masters of their fates:\r\nThe fault, dear Brutus, is not in our stars,\r\nBut in ourselves, that we are underlings.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.cldrnMXom#.jb6PmNRgQ', '2017-03-30 22:23:12'),
(29, 1, 'the fool', 'Have more than thou showest,\r\nSpeak less than thou knowest,\r\nLend less than thou owest,\r\nRide more than thou goest,\r\nLearn more than thou trowest,\r\nSet less than thou throwest.', 'https://www.buzzfeed.com/sarahgalo/happy-451st-birthday-to-the-bard?utm_term=.edooMae4D#.re54zmKde', '2017-03-31 17:08:01'),
(30, 12, 'Shakespeare', 'A fool thinks himself to be wise, but a wise man knows himself to be a fool.', 'https://www.brainyquote.com/quotes/authors/w/william_shakespeare.html', '2017-04-02 19:55:29'),
(31, 10, 'Read more at: ', 'Doubt thou the stars are fire, Doubt that the sun doth move. Doubt truth to be a liar, But never doubt I love.\r\n', 'https://www.brainyquote.com/quotes/authors/w/william_shakespeare.html', '2017-04-02 19:56:30'),
(32, 14, 'Read more at: ', 'There is a tide in the affairs of men, Which taken at the flood, leads on to fortune. Omitted, all the voyage of their life is bound in shallows and in miseries. On such a full sea are we now afloat. And we must take the current when it serves, or lose our ventures.\r\n', 'https://www.brainyquote.com/quotes/authors/w/william_shakespeare.html', '2017-04-02 19:57:54'),
(34, 18, 'Read more at: ', 'We are such stuff as dreams are made on; and our little life is rounded with a sleep.\r\n', 'https://www.brainyquote.com/quotes/authors/w/william_shakespeare.html', '2017-04-02 20:10:08');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `register_date`) VALUES
(1, 'Jean Grey-Summers', 'summers@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'img/profile_images/summers.jpeg', '2017-03-27 22:22:05'),
(9, 'Kevin Sydney', 'sydney@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'img/profile_images/default.png', '2017-03-30 19:49:48'),
(10, 'Lucas Bishop', 'bishop@googlemail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'img/profile_images/barry.jpeg', '2017-03-30 22:12:09'),
(11, 'Henry Philip McCoy', 'mccoy@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'img/profile_images/pic4.jpg', '2017-03-30 22:15:44'),
(12, 'Lorna Dane', 'dane@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'img/profile_images/lorna.jpg', '2017-03-30 22:16:32'),
(14, 'Greg Lestrade', 'lestrade@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'img/profile_images/pic3.jpeg', '2017-03-30 22:17:46'),
(15, 'Miranda Leevald', 'leevald@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'img/profile_images/pic5.jpeg', '2017-03-30 22:18:06'),
(18, 'suzi', 'suzi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'img/profile_images/suzi.jpg', '2017-04-02 20:08:47');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
