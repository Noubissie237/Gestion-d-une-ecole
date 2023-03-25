-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 25 mars 2023 à 15:20
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school`
--

-- --------------------------------------------------------

--
-- Structure de la table `headmaster`
--

CREATE TABLE `headmaster` (
  `Id` int(11) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `headmaster`
--

INSERT INTO `headmaster` (`Id`, `Pseudo`, `Last_Name`, `First_Name`, `Pwd`) VALUES
(1, 'TTRB', 'Tchamba', 'Baurel', '0457b02d2d7b3e2c2dfbf12dceb39925446dbe20');

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE `score` (
  `Id` int(11) NOT NULL,
  `Id_student` int(11) NOT NULL,
  `Id_subject` int(11) NOT NULL,
  `Sequences` int(5) NOT NULL,
  `Mark` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`Id`, `Id_student`, `Id_subject`, `Sequences`, `Mark`) VALUES
(1, 1, 1, 1, 15),
(2, 1, 1, 2, 16),
(3, 1, 1, 3, 14),
(4, 1, 1, 4, 17),
(5, 1, 1, 5, 15),
(6, 1, 1, 6, 18),
(7, 1, 2, 1, 15),
(8, 1, 2, 2, 15),
(9, 1, 2, 3, 15),
(10, 1, 2, 4, 15),
(11, 1, 2, 5, 15),
(12, 1, 2, 6, 15),
(13, 1, 3, 1, 8),
(14, 1, 3, 2, 7),
(15, 1, 3, 3, 5),
(16, 1, 3, 4, 10),
(17, 1, 3, 5, 12),
(18, 1, 3, 6, 7),
(19, 1, 4, 1, 11),
(20, 1, 4, 2, 10),
(21, 1, 4, 3, 11),
(22, 1, 4, 4, 10),
(23, 1, 4, 5, 11),
(24, 1, 4, 6, 12),
(25, 1, 5, 1, 12),
(26, 1, 5, 2, 13),
(27, 1, 5, 3, 14),
(28, 1, 5, 4, 12),
(29, 1, 5, 5, 15),
(30, 1, 5, 6, 16),
(31, 1, 6, 1, 12),
(32, 1, 6, 2, 12),
(33, 1, 6, 3, 12),
(34, 1, 6, 4, 12),
(35, 1, 6, 5, 12),
(36, 1, 6, 6, 12),
(37, 1, 7, 1, 15),
(38, 1, 7, 2, 16),
(39, 1, 7, 3, 17),
(40, 1, 7, 4, 18),
(41, 1, 7, 5, 19),
(42, 1, 7, 6, 11),
(43, 1, 8, 1, 15),
(44, 1, 8, 2, 15),
(45, 1, 8, 3, 15),
(46, 1, 8, 4, 15),
(47, 1, 8, 5, 15),
(48, 1, 8, 6, 15),
(49, 1, 9, 1, 10),
(50, 1, 9, 2, 11),
(51, 1, 9, 3, 12),
(52, 1, 9, 4, 13),
(53, 1, 9, 5, 14),
(54, 1, 9, 6, 15),
(55, 1, 10, 1, 18),
(56, 1, 10, 2, 17),
(57, 1, 10, 3, 16),
(58, 1, 10, 4, 15),
(59, 1, 10, 5, 14),
(60, 1, 10, 6, 13),
(61, 2, 1, 1, 20),
(62, 2, 1, 2, 19.75),
(63, 2, 1, 3, 20),
(64, 2, 1, 4, 19.5),
(65, 2, 1, 5, 18.85),
(66, 2, 1, 6, 20),
(67, 2, 2, 1, 4),
(68, 2, 2, 2, 5),
(69, 2, 2, 3, 6),
(70, 2, 2, 4, 7),
(71, 2, 2, 5, 8),
(72, 2, 2, 6, 15),
(73, 2, 3, 1, 15),
(74, 2, 3, 2, 16),
(75, 2, 3, 3, 14),
(76, 2, 3, 4, 17),
(77, 2, 3, 5, 19),
(78, 2, 3, 6, 18),
(79, 2, 4, 1, 13),
(80, 2, 4, 2, 14),
(81, 2, 4, 3, 13),
(82, 2, 4, 4, 15),
(83, 2, 4, 5, 14),
(84, 2, 4, 6, 14),
(85, 2, 5, 1, 14),
(86, 2, 5, 2, 12),
(87, 2, 5, 3, 13),
(88, 2, 5, 4, 11),
(89, 2, 5, 5, 10),
(90, 2, 5, 6, 15),
(91, 2, 6, 1, 11),
(92, 2, 6, 2, 11),
(93, 2, 6, 3, 11),
(94, 2, 6, 4, 11),
(95, 2, 6, 5, 11),
(96, 2, 6, 6, 11),
(97, 2, 7, 1, 14),
(98, 2, 7, 2, 10),
(99, 2, 7, 3, 12),
(100, 2, 7, 4, 11),
(101, 2, 7, 5, 18.5),
(102, 2, 7, 6, 16),
(103, 2, 8, 1, 10),
(104, 2, 8, 2, 14),
(105, 2, 8, 3, 19),
(106, 2, 8, 4, 15),
(107, 2, 8, 5, 14),
(108, 2, 8, 6, 18),
(109, 2, 9, 1, 15),
(110, 2, 9, 2, 14),
(111, 2, 9, 3, 13),
(112, 2, 9, 4, 12),
(113, 2, 9, 5, 11),
(114, 2, 9, 6, 10),
(115, 2, 10, 1, 13),
(116, 2, 10, 2, 14),
(117, 2, 10, 3, 15),
(118, 2, 10, 4, 16),
(119, 2, 10, 5, 17),
(120, 2, 10, 6, 18),
(121, 3, 1, 1, 10),
(122, 3, 1, 2, 16),
(123, 3, 1, 3, 11),
(124, 3, 1, 4, 8),
(125, 3, 1, 5, 14),
(126, 3, 1, 6, 19),
(127, 3, 2, 1, 10),
(128, 3, 2, 2, 10),
(129, 3, 2, 3, 10),
(130, 3, 2, 4, 10),
(131, 3, 2, 5, 10),
(132, 3, 2, 6, 10),
(133, 3, 3, 1, 0),
(134, 3, 3, 2, 0),
(135, 3, 3, 3, 0),
(136, 3, 3, 4, 0),
(137, 3, 3, 5, 0),
(138, 3, 3, 6, 0),
(139, 3, 4, 1, 0),
(140, 3, 4, 2, 0),
(141, 3, 4, 3, 0),
(142, 3, 4, 4, 0),
(143, 3, 4, 5, 0),
(144, 3, 4, 6, 0),
(145, 3, 5, 1, 0),
(146, 3, 5, 2, 0),
(147, 3, 5, 3, 0),
(148, 3, 5, 4, 0),
(149, 3, 5, 5, 0),
(150, 3, 5, 6, 0),
(151, 3, 6, 1, 0),
(152, 3, 6, 2, 0),
(153, 3, 6, 3, 0),
(154, 3, 6, 4, 0),
(155, 3, 6, 5, 0),
(156, 3, 6, 6, 0),
(157, 3, 7, 1, 0),
(158, 3, 7, 2, 0),
(159, 3, 7, 3, 0),
(160, 3, 7, 4, 0),
(161, 3, 7, 5, 0),
(162, 3, 7, 6, 0),
(163, 3, 8, 1, 0),
(164, 3, 8, 2, 0),
(165, 3, 8, 3, 0),
(166, 3, 8, 4, 0),
(167, 3, 8, 5, 0),
(168, 3, 8, 6, 0),
(169, 3, 9, 1, 0),
(170, 3, 9, 2, 0),
(171, 3, 9, 3, 0),
(172, 3, 9, 4, 0),
(173, 3, 9, 5, 0),
(174, 3, 9, 6, 0),
(175, 3, 10, 1, 0),
(176, 3, 10, 2, 0),
(177, 3, 10, 3, 0),
(178, 3, 10, 4, 0),
(179, 3, 10, 5, 0),
(180, 3, 10, 6, 0),
(181, 4, 1, 1, 10),
(182, 4, 1, 2, 12),
(183, 4, 1, 3, 13),
(184, 4, 1, 4, 14),
(185, 4, 1, 5, 15),
(186, 4, 1, 6, 16),
(187, 4, 2, 1, 11),
(188, 4, 2, 2, 12),
(189, 4, 2, 3, 13),
(190, 4, 2, 4, 10),
(191, 4, 2, 5, 10),
(192, 4, 2, 6, 12),
(193, 4, 3, 1, 0),
(194, 4, 3, 2, 0),
(195, 4, 3, 3, 0),
(196, 4, 3, 4, 0),
(197, 4, 3, 5, 0),
(198, 4, 3, 6, 0),
(199, 4, 4, 1, 0),
(200, 4, 4, 2, 0),
(201, 4, 4, 3, 0),
(202, 4, 4, 4, 0),
(203, 4, 4, 5, 0),
(204, 4, 4, 6, 0),
(205, 4, 5, 1, 0),
(206, 4, 5, 2, 0),
(207, 4, 5, 3, 0),
(208, 4, 5, 4, 0),
(209, 4, 5, 5, 0),
(210, 4, 5, 6, 0),
(211, 4, 6, 1, 0),
(212, 4, 6, 2, 0),
(213, 4, 6, 3, 0),
(214, 4, 6, 4, 0),
(215, 4, 6, 5, 0),
(216, 4, 6, 6, 0),
(217, 4, 7, 1, 0),
(218, 4, 7, 2, 0),
(219, 4, 7, 3, 0),
(220, 4, 7, 4, 0),
(221, 4, 7, 5, 0),
(222, 4, 7, 6, 0),
(223, 4, 8, 1, 0),
(224, 4, 8, 2, 0),
(225, 4, 8, 3, 0),
(226, 4, 8, 4, 0),
(227, 4, 8, 5, 0),
(228, 4, 8, 6, 0),
(229, 4, 9, 1, 0),
(230, 4, 9, 2, 0),
(231, 4, 9, 3, 0),
(232, 4, 9, 4, 0),
(233, 4, 9, 5, 0),
(234, 4, 9, 6, 0),
(235, 4, 10, 1, 0),
(236, 4, 10, 2, 0),
(237, 4, 10, 3, 0),
(238, 4, 10, 4, 0),
(239, 4, 10, 5, 0),
(240, 4, 10, 6, 0),
(241, 5, 1, 1, 0),
(242, 5, 1, 2, 4),
(243, 5, 1, 3, 3),
(244, 5, 1, 4, 10),
(245, 5, 1, 5, 13),
(246, 5, 1, 6, 19.5),
(247, 5, 2, 1, 0),
(248, 5, 2, 2, 0),
(249, 5, 2, 3, 0),
(250, 5, 2, 4, 0),
(251, 5, 2, 5, 0),
(252, 5, 2, 6, 0),
(253, 5, 3, 1, 0),
(254, 5, 3, 2, 0),
(255, 5, 3, 3, 0),
(256, 5, 3, 4, 0),
(257, 5, 3, 5, 0),
(258, 5, 3, 6, 0),
(259, 5, 4, 1, 0),
(260, 5, 4, 2, 0),
(261, 5, 4, 3, 0),
(262, 5, 4, 4, 0),
(263, 5, 4, 5, 0),
(264, 5, 4, 6, 0),
(265, 5, 5, 1, 0),
(266, 5, 5, 2, 0),
(267, 5, 5, 3, 0),
(268, 5, 5, 4, 0),
(269, 5, 5, 5, 0),
(270, 5, 5, 6, 0),
(271, 5, 6, 1, 0),
(272, 5, 6, 2, 0),
(273, 5, 6, 3, 0),
(274, 5, 6, 4, 0),
(275, 5, 6, 5, 0),
(276, 5, 6, 6, 0),
(277, 5, 7, 1, 0),
(278, 5, 7, 2, 0),
(279, 5, 7, 3, 0),
(280, 5, 7, 4, 0),
(281, 5, 7, 5, 0),
(282, 5, 7, 6, 0),
(283, 5, 8, 1, 0),
(284, 5, 8, 2, 0),
(285, 5, 8, 3, 0),
(286, 5, 8, 4, 0),
(287, 5, 8, 5, 0),
(288, 5, 8, 6, 0),
(289, 5, 9, 1, 0),
(290, 5, 9, 2, 0),
(291, 5, 9, 3, 0),
(292, 5, 9, 4, 0),
(293, 5, 9, 5, 0),
(294, 5, 9, 6, 0),
(295, 5, 10, 1, 0),
(296, 5, 10, 2, 0),
(297, 5, 10, 3, 0),
(298, 5, 10, 4, 0),
(299, 5, 10, 5, 0),
(300, 5, 10, 6, 0),
(301, 6, 1, 1, 10),
(302, 6, 1, 2, 11),
(303, 6, 1, 3, 10),
(304, 6, 1, 4, 12),
(305, 6, 1, 5, 9),
(306, 6, 1, 6, 15),
(307, 6, 2, 1, 0),
(308, 6, 2, 2, 0),
(309, 6, 2, 3, 0),
(310, 6, 2, 4, 0),
(311, 6, 2, 5, 0),
(312, 6, 2, 6, 0),
(313, 6, 3, 1, 0),
(314, 6, 3, 2, 0),
(315, 6, 3, 3, 0),
(316, 6, 3, 4, 0),
(317, 6, 3, 5, 0),
(318, 6, 3, 6, 0),
(319, 6, 4, 1, 0),
(320, 6, 4, 2, 0),
(321, 6, 4, 3, 0),
(322, 6, 4, 4, 0),
(323, 6, 4, 5, 0),
(324, 6, 4, 6, 0),
(325, 6, 5, 1, 0),
(326, 6, 5, 2, 0),
(327, 6, 5, 3, 0),
(328, 6, 5, 4, 0),
(329, 6, 5, 5, 0),
(330, 6, 5, 6, 0),
(331, 6, 6, 1, 0),
(332, 6, 6, 2, 0),
(333, 6, 6, 3, 0),
(334, 6, 6, 4, 0),
(335, 6, 6, 5, 0),
(336, 6, 6, 6, 0),
(337, 6, 7, 1, 0),
(338, 6, 7, 2, 0),
(339, 6, 7, 3, 0),
(340, 6, 7, 4, 0),
(341, 6, 7, 5, 0),
(342, 6, 7, 6, 0),
(343, 6, 8, 1, 0),
(344, 6, 8, 2, 0),
(345, 6, 8, 3, 0),
(346, 6, 8, 4, 0),
(347, 6, 8, 5, 0),
(348, 6, 8, 6, 0),
(349, 6, 9, 1, 0),
(350, 6, 9, 2, 0),
(351, 6, 9, 3, 0),
(352, 6, 9, 4, 0),
(353, 6, 9, 5, 0),
(354, 6, 9, 6, 0),
(355, 6, 10, 1, 0),
(356, 6, 10, 2, 0),
(357, 6, 10, 3, 0),
(358, 6, 10, 4, 0),
(359, 6, 10, 5, 0),
(360, 6, 10, 6, 0),
(361, 7, 1, 1, 18),
(362, 7, 1, 2, 11),
(363, 7, 1, 3, 12),
(364, 7, 1, 4, 15),
(365, 7, 1, 5, 16),
(366, 7, 1, 6, 9),
(367, 7, 2, 1, 0),
(368, 7, 2, 2, 0),
(369, 7, 2, 3, 0),
(370, 7, 2, 4, 0),
(371, 7, 2, 5, 0),
(372, 7, 2, 6, 0),
(373, 7, 3, 1, 0),
(374, 7, 3, 2, 0),
(375, 7, 3, 3, 0),
(376, 7, 3, 4, 0),
(377, 7, 3, 5, 0),
(378, 7, 3, 6, 0),
(379, 7, 4, 1, 0),
(380, 7, 4, 2, 0),
(381, 7, 4, 3, 0),
(382, 7, 4, 4, 0),
(383, 7, 4, 5, 0),
(384, 7, 4, 6, 0),
(385, 7, 5, 1, 0),
(386, 7, 5, 2, 0),
(387, 7, 5, 3, 0),
(388, 7, 5, 4, 0),
(389, 7, 5, 5, 0),
(390, 7, 5, 6, 0),
(391, 7, 6, 1, 0),
(392, 7, 6, 2, 0),
(393, 7, 6, 3, 0),
(394, 7, 6, 4, 0),
(395, 7, 6, 5, 0),
(396, 7, 6, 6, 0),
(397, 7, 7, 1, 0),
(398, 7, 7, 2, 0),
(399, 7, 7, 3, 0),
(400, 7, 7, 4, 0),
(401, 7, 7, 5, 0),
(402, 7, 7, 6, 0),
(403, 7, 8, 1, 0),
(404, 7, 8, 2, 0),
(405, 7, 8, 3, 0),
(406, 7, 8, 4, 0),
(407, 7, 8, 5, 0),
(408, 7, 8, 6, 0),
(409, 7, 9, 1, 0),
(410, 7, 9, 2, 0),
(411, 7, 9, 3, 0),
(412, 7, 9, 4, 0),
(413, 7, 9, 5, 0),
(414, 7, 9, 6, 0),
(415, 7, 10, 1, 0),
(416, 7, 10, 2, 0),
(417, 7, 10, 3, 0),
(418, 7, 10, 4, 0),
(419, 7, 10, 5, 0),
(420, 7, 10, 6, 0),
(421, 8, 1, 1, 7),
(422, 8, 1, 2, 8),
(423, 8, 1, 3, 9),
(424, 8, 1, 4, 11),
(425, 8, 1, 5, 13),
(426, 8, 1, 6, 12),
(427, 8, 2, 1, 0),
(428, 8, 2, 2, 0),
(429, 8, 2, 3, 0),
(430, 8, 2, 4, 0),
(431, 8, 2, 5, 0),
(432, 8, 2, 6, 0),
(433, 8, 3, 1, 0),
(434, 8, 3, 2, 0),
(435, 8, 3, 3, 0),
(436, 8, 3, 4, 0),
(437, 8, 3, 5, 0),
(438, 8, 3, 6, 0),
(439, 8, 4, 1, 0),
(440, 8, 4, 2, 0),
(441, 8, 4, 3, 0),
(442, 8, 4, 4, 0),
(443, 8, 4, 5, 0),
(444, 8, 4, 6, 0),
(445, 8, 5, 1, 0),
(446, 8, 5, 2, 0),
(447, 8, 5, 3, 0),
(448, 8, 5, 4, 0),
(449, 8, 5, 5, 0),
(450, 8, 5, 6, 0),
(451, 8, 6, 1, 0),
(452, 8, 6, 2, 0),
(453, 8, 6, 3, 0),
(454, 8, 6, 4, 0),
(455, 8, 6, 5, 0),
(456, 8, 6, 6, 0),
(457, 8, 7, 1, 0),
(458, 8, 7, 2, 0),
(459, 8, 7, 3, 0),
(460, 8, 7, 4, 0),
(461, 8, 7, 5, 0),
(462, 8, 7, 6, 0),
(463, 8, 8, 1, 0),
(464, 8, 8, 2, 0),
(465, 8, 8, 3, 0),
(466, 8, 8, 4, 0),
(467, 8, 8, 5, 0),
(468, 8, 8, 6, 0),
(469, 8, 9, 1, 0),
(470, 8, 9, 2, 0),
(471, 8, 9, 3, 0),
(472, 8, 9, 4, 0),
(473, 8, 9, 5, 0),
(474, 8, 9, 6, 0),
(475, 8, 10, 1, 0),
(476, 8, 10, 2, 0),
(477, 8, 10, 3, 0),
(478, 8, 10, 4, 0),
(479, 8, 10, 5, 0),
(480, 8, 10, 6, 0),
(481, 9, 1, 1, 8.75),
(482, 9, 1, 2, 10),
(483, 9, 1, 3, 7),
(484, 9, 1, 4, 5.25),
(485, 9, 1, 5, 1),
(486, 9, 1, 6, 9.25),
(487, 9, 2, 1, 0),
(488, 9, 2, 2, 0),
(489, 9, 2, 3, 0),
(490, 9, 2, 4, 0),
(491, 9, 2, 5, 0),
(492, 9, 2, 6, 0),
(493, 9, 3, 1, 0),
(494, 9, 3, 2, 0),
(495, 9, 3, 3, 0),
(496, 9, 3, 4, 0),
(497, 9, 3, 5, 0),
(498, 9, 3, 6, 0),
(499, 9, 4, 1, 0),
(500, 9, 4, 2, 0),
(501, 9, 4, 3, 0),
(502, 9, 4, 4, 0),
(503, 9, 4, 5, 0),
(504, 9, 4, 6, 0),
(505, 9, 5, 1, 0),
(506, 9, 5, 2, 0),
(507, 9, 5, 3, 0),
(508, 9, 5, 4, 0),
(509, 9, 5, 5, 0),
(510, 9, 5, 6, 0),
(511, 9, 6, 1, 0),
(512, 9, 6, 2, 0),
(513, 9, 6, 3, 0),
(514, 9, 6, 4, 0),
(515, 9, 6, 5, 0),
(516, 9, 6, 6, 0),
(517, 9, 7, 1, 0),
(518, 9, 7, 2, 0),
(519, 9, 7, 3, 0),
(520, 9, 7, 4, 0),
(521, 9, 7, 5, 0),
(522, 9, 7, 6, 0),
(523, 9, 8, 1, 0),
(524, 9, 8, 2, 0),
(525, 9, 8, 3, 0),
(526, 9, 8, 4, 0),
(527, 9, 8, 5, 0),
(528, 9, 8, 6, 0),
(529, 9, 9, 1, 0),
(530, 9, 9, 2, 0),
(531, 9, 9, 3, 0),
(532, 9, 9, 4, 0),
(533, 9, 9, 5, 0),
(534, 9, 9, 6, 0),
(535, 9, 10, 1, 0),
(536, 9, 10, 2, 0),
(537, 9, 10, 3, 0),
(538, 9, 10, 4, 0),
(539, 9, 10, 5, 0),
(540, 9, 10, 6, 0),
(541, 10, 1, 1, 10),
(542, 10, 1, 2, 11),
(543, 10, 1, 3, 11.5),
(544, 10, 1, 4, 10),
(545, 10, 1, 5, 12),
(546, 10, 1, 6, 11.75),
(547, 10, 2, 1, 0),
(548, 10, 2, 2, 0),
(549, 10, 2, 3, 0),
(550, 10, 2, 4, 0),
(551, 10, 2, 5, 0),
(552, 10, 2, 6, 0),
(553, 10, 3, 1, 0),
(554, 10, 3, 2, 0),
(555, 10, 3, 3, 0),
(556, 10, 3, 4, 0),
(557, 10, 3, 5, 0),
(558, 10, 3, 6, 0),
(559, 10, 4, 1, 0),
(560, 10, 4, 2, 0),
(561, 10, 4, 3, 0),
(562, 10, 4, 4, 0),
(563, 10, 4, 5, 0),
(564, 10, 4, 6, 0),
(565, 10, 5, 1, 0),
(566, 10, 5, 2, 0),
(567, 10, 5, 3, 0),
(568, 10, 5, 4, 0),
(569, 10, 5, 5, 0),
(570, 10, 5, 6, 0),
(571, 10, 6, 1, 0),
(572, 10, 6, 2, 0),
(573, 10, 6, 3, 0),
(574, 10, 6, 4, 0),
(575, 10, 6, 5, 0),
(576, 10, 6, 6, 0),
(577, 10, 7, 1, 0),
(578, 10, 7, 2, 0),
(579, 10, 7, 3, 0),
(580, 10, 7, 4, 0),
(581, 10, 7, 5, 0),
(582, 10, 7, 6, 0),
(583, 10, 8, 1, 0),
(584, 10, 8, 2, 0),
(585, 10, 8, 3, 0),
(586, 10, 8, 4, 0),
(587, 10, 8, 5, 0),
(588, 10, 8, 6, 0),
(589, 10, 9, 1, 0),
(590, 10, 9, 2, 0),
(591, 10, 9, 3, 0),
(592, 10, 9, 4, 0),
(593, 10, 9, 5, 0),
(594, 10, 9, 6, 0),
(595, 10, 10, 1, 0),
(596, 10, 10, 2, 0),
(597, 10, 10, 3, 0),
(598, 10, 10, 4, 0),
(599, 10, 10, 5, 0),
(600, 10, 10, 6, 0),
(601, 11, 1, 1, 18),
(602, 11, 1, 2, 15),
(603, 11, 1, 3, 16),
(604, 11, 1, 4, 11),
(605, 11, 1, 5, 15),
(606, 11, 1, 6, 14),
(607, 11, 2, 1, 0),
(608, 11, 2, 2, 0),
(609, 11, 2, 3, 0),
(610, 11, 2, 4, 0),
(611, 11, 2, 5, 0),
(612, 11, 2, 6, 0),
(613, 11, 3, 1, 0),
(614, 11, 3, 2, 0),
(615, 11, 3, 3, 0),
(616, 11, 3, 4, 0),
(617, 11, 3, 5, 0),
(618, 11, 3, 6, 0),
(619, 11, 4, 1, 0),
(620, 11, 4, 2, 0),
(621, 11, 4, 3, 0),
(622, 11, 4, 4, 0),
(623, 11, 4, 5, 0),
(624, 11, 4, 6, 0),
(625, 11, 5, 1, 0),
(626, 11, 5, 2, 0),
(627, 11, 5, 3, 0),
(628, 11, 5, 4, 0),
(629, 11, 5, 5, 0),
(630, 11, 5, 6, 0),
(631, 11, 6, 1, 0),
(632, 11, 6, 2, 0),
(633, 11, 6, 3, 0),
(634, 11, 6, 4, 0),
(635, 11, 6, 5, 0),
(636, 11, 6, 6, 0),
(637, 11, 7, 1, 0),
(638, 11, 7, 2, 0),
(639, 11, 7, 3, 0),
(640, 11, 7, 4, 0),
(641, 11, 7, 5, 0),
(642, 11, 7, 6, 0),
(643, 11, 8, 1, 0),
(644, 11, 8, 2, 0),
(645, 11, 8, 3, 0),
(646, 11, 8, 4, 0),
(647, 11, 8, 5, 0),
(648, 11, 8, 6, 0),
(649, 11, 9, 1, 0),
(650, 11, 9, 2, 0),
(651, 11, 9, 3, 0),
(652, 11, 9, 4, 0),
(653, 11, 9, 5, 0),
(654, 11, 9, 6, 0),
(655, 11, 10, 1, 0),
(656, 11, 10, 2, 0),
(657, 11, 10, 3, 0),
(658, 11, 10, 4, 0),
(659, 11, 10, 5, 0),
(660, 11, 10, 6, 0),
(661, 12, 1, 1, 14),
(662, 12, 1, 2, 10),
(663, 12, 1, 3, 11),
(664, 12, 1, 4, 16),
(665, 12, 1, 5, 10),
(666, 12, 1, 6, 9),
(667, 12, 2, 1, 0),
(668, 12, 2, 2, 0),
(669, 12, 2, 3, 0),
(670, 12, 2, 4, 0),
(671, 12, 2, 5, 0),
(672, 12, 2, 6, 0),
(673, 12, 3, 1, 0),
(674, 12, 3, 2, 0),
(675, 12, 3, 3, 0),
(676, 12, 3, 4, 0),
(677, 12, 3, 5, 0),
(678, 12, 3, 6, 0),
(679, 12, 4, 1, 0),
(680, 12, 4, 2, 0),
(681, 12, 4, 3, 0),
(682, 12, 4, 4, 0),
(683, 12, 4, 5, 0),
(684, 12, 4, 6, 0),
(685, 12, 5, 1, 0),
(686, 12, 5, 2, 0),
(687, 12, 5, 3, 0),
(688, 12, 5, 4, 0),
(689, 12, 5, 5, 0),
(690, 12, 5, 6, 0),
(691, 12, 6, 1, 0),
(692, 12, 6, 2, 0),
(693, 12, 6, 3, 0),
(694, 12, 6, 4, 0),
(695, 12, 6, 5, 0),
(696, 12, 6, 6, 0),
(697, 12, 7, 1, 0),
(698, 12, 7, 2, 0),
(699, 12, 7, 3, 0),
(700, 12, 7, 4, 0),
(701, 12, 7, 5, 0),
(702, 12, 7, 6, 0),
(703, 12, 8, 1, 0),
(704, 12, 8, 2, 0),
(705, 12, 8, 3, 0),
(706, 12, 8, 4, 0),
(707, 12, 8, 5, 0),
(708, 12, 8, 6, 0),
(709, 12, 9, 1, 0),
(710, 12, 9, 2, 0),
(711, 12, 9, 3, 0),
(712, 12, 9, 4, 0),
(713, 12, 9, 5, 0),
(714, 12, 9, 6, 0),
(715, 12, 10, 1, 0),
(716, 12, 10, 2, 0),
(717, 12, 10, 3, 0),
(718, 12, 10, 4, 0),
(719, 12, 10, 5, 0),
(720, 12, 10, 6, 0),
(721, 13, 1, 1, 10),
(722, 13, 1, 2, 13),
(723, 13, 1, 3, 11),
(724, 13, 1, 4, 12),
(725, 13, 1, 5, 10),
(726, 13, 1, 6, 10),
(727, 13, 2, 1, 0),
(728, 13, 2, 2, 0),
(729, 13, 2, 3, 0),
(730, 13, 2, 4, 0),
(731, 13, 2, 5, 0),
(732, 13, 2, 6, 0),
(733, 13, 3, 1, 0),
(734, 13, 3, 2, 0),
(735, 13, 3, 3, 0),
(736, 13, 3, 4, 0),
(737, 13, 3, 5, 0),
(738, 13, 3, 6, 0),
(739, 13, 4, 1, 0),
(740, 13, 4, 2, 0),
(741, 13, 4, 3, 0),
(742, 13, 4, 4, 0),
(743, 13, 4, 5, 0),
(744, 13, 4, 6, 0),
(745, 13, 5, 1, 0),
(746, 13, 5, 2, 0),
(747, 13, 5, 3, 0),
(748, 13, 5, 4, 0),
(749, 13, 5, 5, 0),
(750, 13, 5, 6, 0),
(751, 13, 6, 1, 0),
(752, 13, 6, 2, 0),
(753, 13, 6, 3, 0),
(754, 13, 6, 4, 0),
(755, 13, 6, 5, 0),
(756, 13, 6, 6, 0),
(757, 13, 7, 1, 0),
(758, 13, 7, 2, 0),
(759, 13, 7, 3, 0),
(760, 13, 7, 4, 0),
(761, 13, 7, 5, 0),
(762, 13, 7, 6, 0),
(763, 13, 8, 1, 0),
(764, 13, 8, 2, 0),
(765, 13, 8, 3, 0),
(766, 13, 8, 4, 0),
(767, 13, 8, 5, 0),
(768, 13, 8, 6, 0),
(769, 13, 9, 1, 0),
(770, 13, 9, 2, 0),
(771, 13, 9, 3, 0),
(772, 13, 9, 4, 0),
(773, 13, 9, 5, 0),
(774, 13, 9, 6, 0),
(775, 13, 10, 1, 0),
(776, 13, 10, 2, 0),
(777, 13, 10, 3, 0),
(778, 13, 10, 4, 0),
(779, 13, 10, 5, 0),
(780, 13, 10, 6, 0),
(781, 14, 1, 1, 9),
(782, 14, 1, 2, 10),
(783, 14, 1, 3, 8),
(784, 14, 1, 4, 13),
(785, 14, 1, 5, 7),
(786, 14, 1, 6, 13.25),
(787, 14, 2, 1, 0),
(788, 14, 2, 2, 0),
(789, 14, 2, 3, 0),
(790, 14, 2, 4, 0),
(791, 14, 2, 5, 0),
(792, 14, 2, 6, 0),
(793, 14, 3, 1, 0),
(794, 14, 3, 2, 0),
(795, 14, 3, 3, 0),
(796, 14, 3, 4, 0),
(797, 14, 3, 5, 0),
(798, 14, 3, 6, 0),
(799, 14, 4, 1, 0),
(800, 14, 4, 2, 0),
(801, 14, 4, 3, 0),
(802, 14, 4, 4, 0),
(803, 14, 4, 5, 0),
(804, 14, 4, 6, 0),
(805, 14, 5, 1, 0),
(806, 14, 5, 2, 0),
(807, 14, 5, 3, 0),
(808, 14, 5, 4, 0),
(809, 14, 5, 5, 0),
(810, 14, 5, 6, 0),
(811, 14, 6, 1, 0),
(812, 14, 6, 2, 0),
(813, 14, 6, 3, 0),
(814, 14, 6, 4, 0),
(815, 14, 6, 5, 0),
(816, 14, 6, 6, 0),
(817, 14, 7, 1, 0),
(818, 14, 7, 2, 0),
(819, 14, 7, 3, 0),
(820, 14, 7, 4, 0),
(821, 14, 7, 5, 0),
(822, 14, 7, 6, 0),
(823, 14, 8, 1, 0),
(824, 14, 8, 2, 0),
(825, 14, 8, 3, 0),
(826, 14, 8, 4, 0),
(827, 14, 8, 5, 0),
(828, 14, 8, 6, 0),
(829, 14, 9, 1, 0),
(830, 14, 9, 2, 0),
(831, 14, 9, 3, 0),
(832, 14, 9, 4, 0),
(833, 14, 9, 5, 0),
(834, 14, 9, 6, 0),
(835, 14, 10, 1, 0),
(836, 14, 10, 2, 0),
(837, 14, 10, 3, 0),
(838, 14, 10, 4, 0),
(839, 14, 10, 5, 0),
(840, 14, 10, 6, 0),
(841, 15, 1, 1, 0.5),
(842, 15, 1, 2, 1),
(843, 15, 1, 3, 0.75),
(844, 15, 1, 4, 5),
(845, 15, 1, 5, 3),
(846, 15, 1, 6, 2.5),
(847, 15, 2, 1, 0),
(848, 15, 2, 2, 0),
(849, 15, 2, 3, 0),
(850, 15, 2, 4, 0),
(851, 15, 2, 5, 0),
(852, 15, 2, 6, 0),
(853, 15, 3, 1, 0),
(854, 15, 3, 2, 0),
(855, 15, 3, 3, 0),
(856, 15, 3, 4, 0),
(857, 15, 3, 5, 0),
(858, 15, 3, 6, 0),
(859, 15, 4, 1, 0),
(860, 15, 4, 2, 0),
(861, 15, 4, 3, 0),
(862, 15, 4, 4, 0),
(863, 15, 4, 5, 0),
(864, 15, 4, 6, 0),
(865, 15, 5, 1, 0),
(866, 15, 5, 2, 0),
(867, 15, 5, 3, 0),
(868, 15, 5, 4, 0),
(869, 15, 5, 5, 0),
(870, 15, 5, 6, 0),
(871, 15, 6, 1, 0),
(872, 15, 6, 2, 0),
(873, 15, 6, 3, 0),
(874, 15, 6, 4, 0),
(875, 15, 6, 5, 0),
(876, 15, 6, 6, 0),
(877, 15, 7, 1, 0),
(878, 15, 7, 2, 0),
(879, 15, 7, 3, 0),
(880, 15, 7, 4, 0),
(881, 15, 7, 5, 0),
(882, 15, 7, 6, 0),
(883, 15, 8, 1, 0),
(884, 15, 8, 2, 0),
(885, 15, 8, 3, 0),
(886, 15, 8, 4, 0),
(887, 15, 8, 5, 0),
(888, 15, 8, 6, 0),
(889, 15, 9, 1, 0),
(890, 15, 9, 2, 0),
(891, 15, 9, 3, 0),
(892, 15, 9, 4, 0),
(893, 15, 9, 5, 0),
(894, 15, 9, 6, 0),
(895, 15, 10, 1, 0),
(896, 15, 10, 2, 0),
(897, 15, 10, 3, 0),
(898, 15, 10, 4, 0),
(899, 15, 10, 5, 0),
(900, 15, 10, 6, 0);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Levels` varchar(20) NOT NULL,
  `Birthday` varchar(11) NOT NULL,
  `Pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`Id`, `Pseudo`, `Last_Name`, `First_Name`, `Gender`, `Levels`, `Birthday`, `Pwd`) VALUES
(1, 'student1', 'Tchamba', 'Baurel', 'Male', 'Uppersixth Science', '20/11/2001', '2439e0457579ab4fd962cbd80b9206aca794cc38'),
(2, 'student2', 'Kamga', 'Willy', 'Male', 'Uppersixth Science', '06/07/2000', 'c241e7b7811ffbe3faba5b193717a46f9643eab1'),
(3, 'student3', 'Kendra', 'Joyce', 'Female', 'From 1', '24/02/2002', '32be4bedbd3a8539503a9bbbe72f9d84956affa1'),
(4, 'student4', 'Faissal', 'Nasser', 'Male', 'From 1', '01/03/2004', '83aa66b2d3293d4173de58b7f2f8d8099ff971f5'),
(5, 'student5', 'Tchickap', 'Cedric', 'Male', 'From 1', '30/05/2000', '949544732c8a0c8e4b4fc9742bfe7be2ecef943b'),
(6, 'student6', 'Djiotsop', 'Xavier', 'Male', 'Lowersixth Science', '29/04/1999', 'a1a5d75fc6ad073a70af60eadfa20c18b8d41c7e'),
(7, 'student7', 'Takoudjou', 'Zozo', 'Male', 'From 2', '03/06/1997', 'b39f910e2c8eaf4a0c8a0cd17642196908a5ae74'),
(8, 'student8', 'Bolda', 'Chantal', 'Female', 'Lowersixth Art', '25/02/2002', '248df15e39ab0e7227e01e3465e1c98a9748074c'),
(9, 'student9', 'Messi', 'Lionel', 'Male', 'Uppersixth Art', '31/12/2000', '119b5b6e7b3a0ad20406bbc3e4abe00df5889d1c'),
(10, 'student10', 'Mbappe', 'Kylian', 'Male', 'From 2', '01/03/1999', 'c99696e37af88b247a291d03e701c95c6346c16a'),
(11, 'student11', 'Cheumani', 'Brice', 'Male', 'From 4', '30/03/2002', 'c6ed93fc4fdb5464b86d29e028282d69a1c04ad3'),
(12, 'student12', 'Mariama', 'Jordan', 'Female', 'From 4', '10/07/2004', '93a52ecb0f5278727b1258391dcaeca10404284f'),
(13, 'student13', 'Nguefack', 'Armel', 'Male', 'From 4', '10/11/2002', '85b9246d1df04cd924d1f99cea161bbea0516a04'),
(14, 'student14', 'Kentseu', 'Bauvie', 'Male', 'From 3', '31/12/2000', '887f81fb27982cab486e1a978eb9ab5b6821e2d3'),
(15, 'student15', 'Women', 'Trash', 'Female', 'From 5', '29/02/2004', '85720b270a2f7290c96770bbf08c9011c53d73ea');

-- --------------------------------------------------------

--
-- Structure de la table `subjects`
--

CREATE TABLE `subjects` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Coefficient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `subjects`
--

INSERT INTO `subjects` (`Id`, `Name`, `Coefficient`) VALUES
(1, 'Mathematics', 5),
(2, 'English', 2),
(3, 'French', 2),
(4, 'History', 2),
(5, 'Literature', 1),
(6, 'Economics', 3),
(7, 'Geography', 2),
(8, 'Commerce', 4),
(9, 'Citizenship', 2),
(10, 'Biology', 4);

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE `teacher` (
  `Id` int(11) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Subjects` varchar(20) NOT NULL,
  `Birthday` varchar(11) NOT NULL,
  `Pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`Id`, `Pseudo`, `Last_Name`, `First_Name`, `Gender`, `Subjects`, `Birthday`, `Pwd`) VALUES
(1, 'teacher1', 'Noubissie', 'Wilfried', 'Male', 'Mathematics', '06/07/2000', '9067bdcd809648626457fc7cc40825bbbf210e9d'),
(2, 'teacher2', 'Ngongang', 'Jordan', 'Male', 'English', '11/11/2002', '444874d5690e41b38be872676c1aa3b7493bf4e7'),
(3, 'teacher3', 'Ulrich', 'Takam', 'Male', 'French', '14/02/1991', 'c26c57711b28ba6dcaf17b7beeb2a7cb0fa3d064'),
(4, 'teacher4', 'Abena', 'Chanceline', 'Female', 'History', '05/01/1995', 'feef6b9e56603dd6cc27b841e73bd1d3bbeca8f6'),
(5, 'teacher5', 'Mbang', 'Fabrice', 'Male', 'Literature', '06/11/1985', '12622d8e8fcffb8b8342d485395d08d411ece138'),
(6, 'teacher6', 'Manessong', 'Elodie', 'Female', 'Economics', '06/03/1996', 'a979f3ae26f503e1a78ab2682f495dfbc68d96f4'),
(7, 'teacher7', 'Bisso', 'Jessica', 'Female', 'Geography', '28/09/1998', '71eaeb8773c98672e005c28abb55890cecb3a5ff'),
(8, 'teacher8', 'Docteur', 'BK', 'Male', 'Commerce', '24/02/1981', '2f3171d4bf523812266ba766e2380f10dc73ca68'),
(9, 'teacher9', 'Azangue', 'Lorene', 'Female', 'Citizenship', '03/09/1998', 'd4b0df3eba0c290b650bcc32e07763e8645ae3d8'),
(10, 'teacher10', 'Mouton', 'Mouton', 'Male', 'Biology', '27/12/1980', '566f6b79bd476ca9a30dcb49e40efe473549e16e');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `headmaster`
--
ALTER TABLE `headmaster`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `headmaster`
--
ALTER TABLE `headmaster`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `score`
--
ALTER TABLE `score`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
