-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2026 at 05:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjsk_bit23`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `char_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `height` int(3) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`char_id`, `name`, `dob`, `height`, `hobby`, `unit`) VALUES
(1, 'ichika hoshino', '2027-08-11', 162, 'listening to miku songs, admiring her cacti', 'leo/need'),
(2, 'saki tenma', '2026-05-09', 160, 'fashion & make-up videos', 'leo/need'),
(3, 'honami mochizuki', '2026-10-27', 166, 'walking her dog , gardening', 'leo/need'),
(4, 'shiho hinomori', '2026-01-08', 159, 'going to girl band gigs , playing bass guitar', 'leo/need'),
(5, 'minori hanasato', '2026-04-14', 159, 'dance covers , writing in her diary , looking after animals', 'moremore jump'),
(6, 'haruka kiritani', '2026-10-05', 163, 'collecting penguin-themed merch', 'moremore jump'),
(7, 'airi momoi', '2026-03-19', 156, 'researching idols , shopping', 'moremore jump'),
(8, 'shizuku hinomori', '2026-12-06', 168, 'reading , taking walks', 'moremore jump'),
(9, 'kohane azusawa', '2026-03-02', 156, 'looking after her dad\'s pet snake', 'vivid bad squad'),
(10, 'an shiraishi', '2026-07-26', 160, 'growing mint', 'vivid bad squad'),
(11, 'akito shinonome ', '2026-11-12', 176, 'fashion styling', 'vivid bad squad'),
(12, 'toya aoyagi', '2026-05-25', 179, 'reading', 'vivid bad squad'),
(13, 'tsukasa tenma', '2026-05-17', 173, 'musicals, making costumes', 'wonderlandsxshowtime'),
(14, 'emu otori', '2026-09-09', 152, 'exploring the neighborhood', 'wonderlandsxshowtime'),
(15, 'nene kusanagi', '2026-07-20', 156, 'fighting games , musicals , movies', 'wonderlandsxshowtime'),
(16, 'rui kamishiro', '2026-06-24', 182, 'planning shows , balloon art', 'wonderlandsxshowtime'),
(17, 'kanade yoisaki', '2026-02-10', 154, 'finding new music to listen to , movies , manga , anime , art', 'nightcord at 25:00'),
(18, 'asahina mafuyu', '2026-01-27', 162, 'aquarium', 'nightcord at 25:00'),
(19, 'ena shinonome', '2026-04-30', 158, 'drawing , taking selfies , social media , egosufing', 'nightcord at 25:00'),
(20, 'mizuki akiyama', '2026-08-27', 165, 'making videos , collages', 'nightcord at 25:00');

-- --------------------------------------------------------

--
-- Table structure for table `key_story`
--

CREATE TABLE `key_story` (
  `id` int(11) NOT NULL,
  `story_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `banner_unit` varchar(50) NOT NULL,
  `key_song` varchar(100) NOT NULL,
  `char_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `key_story`
--

INSERT INTO `key_story` (`id`, `story_id`, `event_name`, `event_type`, `banner_unit`, `key_song`, `char_id`) VALUES
(1, 1, 'first star after the rain (stella)', 'key story', 'leo/need', 'stella', 2),
(2, 2, 'don\'t let doubts hold you back ', 'key story', 'leo/need', 'awaiting clear skies', 3),
(3, 3, 'resonating with you', 'key story', 'leo/need', '1', 4),
(4, 4, 'unnamed harmony', 'key story', 'leo/need', 'from tokyo', 4),
(5, 5, 'a bright future!!', 'key story', 'leo/need', 'pulse of the moteor', 1),
(6, 6, 'putting feelings into words', 'key story', 'leo/need', 'stage of sekai', 3),
(7, 7, 'that day the sky was far away', 'key story', 'leo/need', 'peaky peaky', 4),
(8, 8, 'live with memories', 'key story', 'leo/need', 'made to order', 1),
(9, 9, 'no seek no find', 'key story', 'leo/need', 'show off', 2),
(10, 10, 'don\'t lose faith', 'key story', 'leo/need', 'voices', 4),
(11, 11, 'echo my melody', 'key story', 'leo/need', 'the wall', 1),
(12, 12, 'little bravers!', 'key story', 'leo/need', 'flyway', 3),
(13, 13, 'get over it.', 'key story', 'leo/need', 'aioi', 2),
(14, 14, 'our constellation of song', 'key story', 'leo/need', 'hoshi wo tsunagu', 1),
(15, 15, 'stick to your faith', 'key story', 'leo/need', 'purpose', 4),
(16, 16, 'lead with courage and kindness', 'key story', 'leo/need', 'regulus', 3),
(17, 17, 'parallel harmonies', 'key story', 'leo/need', 'suresure', 2),
(18, 18, 'this moment with you', 'key story', 'leo/need', 'still, we never stop singing', 1),
(19, 19, 'happy enjoy music', 'key story', 'leo/need', 'sono oto ga narunara', 2),
(20, 20, 'find the dream view', 'key story', 'leo/need', 'sympathy', 4),
(21, 21, 'unsteady still steady step', 'key story', 'leo/need', 'transparent palette', 3),
(22, 22, 'time to re:start!', 'key story', 'moremore jump', 'more! jump! more!', 7),
(23, 23, 'my color!', 'key story', 'moremore jump', 'color of drops', 8),
(24, 24, 'hear me! hopeful show', 'key story', 'moremore jump', 'angel\'s clover', 5),
(25, 25, 'you deserve it! breaktime!', 'key story', 'moremore jump', 'love material', 6),
(26, 26, 'happy lovely everyday!', 'key story', 'moremore jump', 'icedrop', 7),
(27, 27, 'moremore making christmas', 'key story', 'moremore jump', 'worldwide wander', 5),
(28, 28, 'cast a spell on you!', 'key story', 'moremore jump', 'metamo re:born', 8),
(29, 29, 'tied by painful hope', 'key story', 'moremore jump', 'if', 6),
(30, 30, 'chasing the sparkle beyond the blue sky', 'key story', 'moremore jump', 'parasol cider', 7),
(31, 31, 'dear me, from back then', 'key story', 'moremore jump', 'dream place', 5),
(32, 32, 'beyond the dream of that day', 'key story', 'moremore jump', 'float planner', 6),
(33, 33, 'at the end of the unraveled thread', 'key story', 'moremore jump', 'we are', 8),
(34, 34, 'friendship rebuilt', 'key story', 'moremore jump', 'the peachy key', 7),
(35, 35, 'step by step', 'key story', 'moremore jump', 'teammates', 5),
(36, 36, 'the warmth of a guiding hand', 'key story', 'moremore jump', 'hug', 8),
(37, 37, 'from the mark left behind', 'key story', 'moremore jump', 'jumpin\' over !', 5),
(38, 38, 'lead to shine more', 'key story', 'moremore jump', 'supernova', 6),
(39, 39, 'chase my ideal idol!', 'key story', 'moremore jump', 'killer', 7),
(40, 40, 'grow glorious glow', 'key story', 'moremore jump', 'hashiru! tooku! todoku!', 8),
(41, 41, 'rise and strive', 'key story', 'moremore jump', 'anti you', 6),
(42, 42, 'cheer with my heart!', 'key story', 'moremore jump', 'eleventh', 7),
(43, 43, 'start rolling! stars crossing', 'key story', 'moremore jump', 'our true story', 5),
(44, 44, 'singing in sync', 'key story', 'vivid bad squad', 'forward', 10),
(45, 45, 'nocturne interlude', 'key story', 'vivid bad squad', 'rad dogs', 12),
(46, 46, 'stray badboy', 'key story', 'vivid bad squad', 'cinema', 11),
(47, 47, 'awakening beat', 'key story', 'vivid bad squad', 'beat eater', 9),
(48, 48, 'bout for beside you', 'key story', 'vivid bad squad', 'awake now', 10),
(51, 5, '', '', '', '', 1),
(52, 1, '', '', '', '', 2),
(65, 1, '', '', '', '', 2),
(66, 5, '', '', '', '', 1),
(67, 11, '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 't7', '156', 'night', 'kahua'),
(2, 'nu', '67', 'nuto', 'nangdak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`char_id`);

--
-- Indexes for table `key_story`
--
ALTER TABLE `key_story`
  ADD PRIMARY KEY (`id`),
  ADD KEY `char_id` (`char_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `key_story`
--
ALTER TABLE `key_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
