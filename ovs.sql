-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2016 at 06:43 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `CandidateID` int(11) NOT NULL AUTO_INCREMENT,
  `abc` varchar(100) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `Party` varchar(100) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`CandidateID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateID`, `abc`, `Position`, `Party`, `FirstName`, `LastName`, `MiddleName`, `Gender`, `Year`, `Photo`, `status`) VALUES
(211, 'a', 'Spiritual Affairs', 'WIBER', 'BERNARD', 'KIRUI', 'kibet', 'Male', '2nd year', 'upload/2.jpg', 0),
(213, 'a', 'Spiritual Affairs', 'JESUS', 'SARAH', 'KARARAN', 'MUTAI', 'FeMale', '2nd year', 'upload/4.jpg', 1),
(214, 'b', 'Sports and Asociation', 'BALL', 'RAMSEY', 'MAKANGA', 'KITOI', 'Male', '3rd year', 'upload/basket.jpg', 0),
(215, 'b', 'Sports and Asociation', 'CORK', 'JOSHUA', 'OLUOCH', 'OTIENO', 'Male', '2nd year', 'upload/FOOTBALL.jpg', 1),
(216, 'b', 'Sports and Asociation', 'DIVE', 'SWIMMER', 'KOECH', 'KIPROTICH', 'Male', '2nd year', 'upload/SWIMMER.jpg', 1),
(217, 'b', 'Sports and Asociation', 'WRESTLE', 'JOHN', 'CENA', 'MUTURA', 'Male', '3rd year', 'upload/JOHNCENA.jpg', 0),
(218, 'c', 'Social Affairs', 'OLGILGE', 'NATHAN', 'KOECH', 'KIPKORIR', 'Male', '3rd year', 'upload/IMG_0252.JPG', 0),
(219, 'c', 'Social Affairs', 'SDA', 'LILIAN', 'NYAKUNDI', '', 'FeMale', '2nd year', 'upload/IMG_0292.JPG', 1),
(220, 'c', 'Social Affairs', 'TAON', 'GEDION', 'MALA', 'NYASUKUTA', 'Male', '2nd year', 'upload/GIDI.jpg', 1),
(221, 'c', 'Social Affairs', 'MATUMAINI', 'SHARLYNE', 'KIRUI', 'MOSOP', 'FeMale', '2nd year', 'upload/IMG_0047.JPG', 0),
(222, 'd', 'Cathering', 'UGALI', 'MARGRET', 'CHAHACHA', 'KITU', 'FeMale', '3rd year', 'upload/chef2.jpg', 0),
(223, 'd', 'Cathering', 'SNACK', 'STEPHEN ', 'OMONDI', 'ACHELL', 'Male', '3rd year', 'upload/chef3.jpg', 0),
(224, 'd', 'Cathering', 'people', 'SAMMY', 'LANGAT', 'KITUR', 'Male', '2nd year', 'upload/chef4.jpg', 1),
(225, 'e', 'Hostel and Campus Security', 'KILA', 'LEONARD', 'MAKOTI', 'WETO', 'Male', '2nd year', 'upload/jed.jpg', 1),
(239, 'a', 'Spiritual Affairs', '', 'nathan', 'kop', '', 'Male', '1st year', 'upload/', 0),
(236, 'e', 'Hostel and Campus Security', 'kalamu', 'joseph', 'KIRUI', 'm', 'Male', '1st year', 'upload/GERI.jpg', 0),
(238, 'a', 'Spiritual Affairs', '', 'yyyy', '', '', 'Male', '1st year', 'upload/', 0),
(237, 'e', 'Hostel and Campus Security', 'kalamu', 'joseph', 'kalleli', 'm', 'Male', '2nd year', 'upload/GERI.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1016 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `data`, `action`, `date`, `user`) VALUES
(957, 'nathan koech', 'Login', '2016-04-07 16:14:10', 'Admin'),
(955, 'nathan koech', 'Login', '2016-04-07 16:10:53', 'Admin'),
(956, 'nathan koech', 'Logout', '2016-04-07 16:10:55', 'Admin'),
(953, 'nathan koech', 'Login', '2016-04-07 16:09:55', 'Admin'),
(954, 'nathan koech', 'Logout', '2016-04-07 16:09:59', 'Admin'),
(952, 'nathan koech', 'Logout', '2016-04-07 16:06:17', 'Admin'),
(951, 'nathan koech', 'Login', '2016-04-07 16:06:16', 'Admin'),
(950, 'nathan koech', 'Logout', '2016-04-07 16:01:06', 'Admin'),
(949, 'nathan koech', 'Login', '2016-04-07 16:01:04', 'Admin'),
(948, 'nathan koech', 'Login', '2016-04-07 15:58:41', 'Admin'),
(947, 'nathan koech', 'Logout', '2016-04-07 15:58:31', 'Admin'),
(946, 'nathan koech', 'Login', '2016-04-07 15:56:10', 'Admin'),
(945, 'nathan koech', 'Logout', '2016-04-07 15:55:52', 'Admin'),
(944, 'nathan koech', 'Login', '2016-04-07 15:53:17', 'Admin'),
(943, 'nathan koech', 'Logout', '2016-04-07 15:52:40', 'Admin'),
(942, 'nathan koech', 'Login', '2016-04-07 15:52:36', 'Admin'),
(941, 'nathan koech', 'Logout', '2016-04-07 15:50:59', 'Admin'),
(940, 'nathan koech', 'Login', '2016-04-07 15:50:33', 'Admin'),
(939, 'nathan koech', 'Logout', '2016-04-07 15:49:54', 'Admin'),
(938, 'nathan koech', 'Login', '2016-04-07 15:48:54', 'Admin'),
(937, 'nathan koech', 'Logout', '2016-04-07 15:47:00', 'Admin'),
(936, 'nathan koech', 'Login', '2016-04-07 15:46:37', 'Admin'),
(935, 'nathan koech', 'Logout', '2016-04-07 15:44:39', 'Admin'),
(934, 'nathan koech', 'Login', '2016-04-07 15:44:34', 'Admin'),
(933, 'nathan koech', 'Logout', '2016-04-07 15:40:21', 'Admin'),
(932, 'nathan koech', 'Login', '2016-04-07 15:40:12', 'Admin'),
(922, 'alfred mutiso', 'Edit Voter', '2016-04-07 14:46:59', ''),
(921, 'nathan koech', 'Login', '2016-04-07 14:41:21', 'Admin'),
(840, 'SARAH KARARAN', 'Edit Candidate', '2016-03-20 23:23:11', 'Admin'),
(839, 'PRISCAH CHEPKOECH', 'Deleted Candidate', '3/20/2016 23:20:42', 'Admin'),
(838, 'PRISCAH CHEPKOECH', 'Edit Candidate', '2016-03-20 23:16:35', 'Admin'),
(837, 'DANIEL  WESONGA', 'Deleted Candidate', '3/20/2016 23:15:48', 'Admin'),
(836, 'mutula kilonzo', 'Deleted Candidate', '3/20/2016 23:3:41', 'Admin'),
(835, 'nathan koech', 'Login', '2016-03-20 22:49:49', 'Admin'),
(834, 'nathan koech', 'Login', '2016-03-20 22:35:44', 'Admin'),
(833, 'nathan koech', 'Login', '2016-03-20 21:28:02', 'Admin'),
(832, 'mutula kilonzo', 'Added Candidate', '2016-03-20 20:16:39', 'Admin'),
(831, 'nathan koech', 'Login', '2016-03-20 20:14:48', 'Admin'),
(830, 'nathan koech', 'Login', '2016-03-20 19:43:13', 'Admin'),
(829, 'nathan koech', 'Login', '2016-03-20 18:56:54', 'Admin'),
(828, 'nathan koech', 'Login', '2016-03-20 18:52:15', 'Admin'),
(827, ' ', 'Deleted Candidate', '3/20/2016 18:42:53', 'Admin'),
(826, ' ', 'Added Candidate', '2016-03-20 18:42:52', 'Admin'),
(825, ' ', 'Deleted Candidate', '3/20/2016 18:37:54', 'Admin'),
(824, ' ', 'Added Candidate', '2016-03-20 18:37:53', 'Admin'),
(823, ' ', 'Deleted Candidate', '3/20/2016 18:35:12', 'Admin'),
(822, ' ', 'Deleted Candidate', '3/20/2016 18:35:12', 'Admin'),
(821, ' ', 'Added Candidate', '2016-03-20 18:35:11', 'Admin'),
(820, ' ', 'Added Candidate', '2016-03-20 18:34:53', 'Admin'),
(819, ' ', 'Deleted Candidate', '3/20/2016 18:29:27', 'Admin'),
(818, ' ', 'Deleted Candidate', '3/20/2016 18:29:27', 'Admin'),
(920, 'nathan koech', 'Logout', '2016-04-07 14:41:02', 'Admin'),
(919, 'nathan koech', 'Login', '2016-04-07 14:29:18', 'Admin'),
(918, 'nathan koech', 'Logout', '2016-04-07 08:59:37', 'Admin'),
(917, 'dick Korir', 'Deleted Presiding', '4/7/2016 8:57:32', 'Admin'),
(916, 'Dick Korir', 'Deleted Presiding', '4/7/2016 8:57:32', 'Admin'),
(915, 'nathan koech', 'Login', '2016-04-07 08:56:48', 'Admin'),
(914, ' ', 'Logout', '2016-04-07 08:56:25', ''),
(913, 'nathan koech', 'Login', '2016-04-05 21:04:01', 'Admin'),
(912, 'kevin nyangau', 'Added Voter', '4/5/2016 21:2:22', ''),
(911, ' ', 'Logout', '2016-04-05 20:54:20', ''),
(910, ' ', 'Logout', '2016-04-05 20:44:01', ''),
(909, ' ', 'Logout', '2016-04-05 20:43:28', ''),
(908, 'nathan koech', 'Login', '2016-04-01 06:09:44', 'Admin'),
(907, 'nathan koech', 'Logout', '2016-03-31 08:30:09', 'Admin'),
(906, 'nathan koech', 'Login', '2016-03-31 08:29:27', 'Admin'),
(905, 'nathan koech', 'Logout', '2016-03-31 08:28:21', 'Admin'),
(904, 'nathan koech', 'Login', '2016-03-31 08:28:10', 'Admin'),
(903, 'nathan koech', 'Logout', '2016-03-31 08:25:19', 'Admin'),
(902, 'nathan koech', 'Login', '2016-03-31 08:25:14', 'Admin'),
(901, ' ', 'Logout', '2016-03-31 08:24:56', ''),
(900, ' ', 'Logout', '2016-03-31 08:24:53', ''),
(899, 'nathan koech', 'Logout', '2016-03-31 08:24:50', 'Admin'),
(898, 'nathan koech', 'Login', '2016-03-31 08:23:59', 'Admin'),
(897, ' ', 'Logout', '2016-03-31 08:19:10', ''),
(896, 'dancan kibet', 'Added Voter', '3/31/2016 6:20:21', ''),
(661, 'nathan koech', 'Deleted Candidate', '2/2/2016 23:42:57', 'Admin'),
(662, 'YULE MSEEMBAYA', 'Added Candidate', '2016-02-02 23:44:14', 'admin'),
(663, 'SARAH KARARAN', 'Added Candidate', '2016-02-02 23:47:38', 'admin'),
(664, 'RAMSEY MAKANGA', 'Added Candidate', '2016-02-02 23:48:59', 'admin'),
(665, 'JOSHUA OLUOCH', 'Added Candidate', '2016-02-02 23:50:28', 'admin'),
(666, 'SWIMMER KOECH', 'Added Candidate', '2016-02-02 23:51:33', 'admin'),
(667, 'JOHN CENA', 'Added Candidate', '2016-02-02 23:52:33', 'admin'),
(668, 'NATHAN KOECH', 'Added Candidate', '2016-02-02 23:53:42', 'admin'),
(669, 'LILIAN NYAKUNDI', 'Added Candidate', '2016-02-02 23:54:25', 'admin'),
(670, 'GEDION MALA', 'Added Candidate', '2016-02-02 23:55:14', 'admin'),
(671, 'SHARLYNE KIRUI', 'Added Candidate', '2016-02-02 23:56:02', 'admin'),
(672, 'MARGRET CHAHACHA', 'Added Candidate', '2016-02-02 23:57:36', 'admin'),
(673, 'STEPHEN  OMONDI', 'Added Candidate', '2016-02-02 23:58:22', 'admin'),
(674, 'SAMMY LANGAT', 'Added Candidate', '2016-02-02 23:59:12', 'admin'),
(675, 'LEONARD MAKOTI', 'Added Candidate', '2016-02-03 00:02:47', 'admin'),
(676, 'PRISCAH CHEPKOECH', 'Added Candidate', '2016-02-03 00:03:47', 'admin'),
(814, 'nathan koech', 'Login', '2016-03-14 08:45:11', 'Admin'),
(813, 'nathan koech', 'Login', '2016-03-08 09:52:18', 'Admin'),
(812, 'nathan koech', 'Login', '2016-03-08 09:47:20', 'Admin'),
(811, 'nathan koech', 'Login', '2016-03-07 12:21:20', 'Admin'),
(810, 'nathan koech', 'Logout', '2016-03-07 12:00:57', 'Admin'),
(809, 'AMOS KIRUI', 'Deleted Candidate', '3/7/2016 11:59:37', 'Admin'),
(808, 'nathan koech', 'Login', '2016-03-07 11:38:28', 'Admin'),
(807, 'nathan koech', 'Login', '2016-03-07 11:31:53', 'Admin'),
(806, 'nathan koech', 'Login', '2016-03-04 18:59:45', 'Admin'),
(805, 'nathan koech', 'Login', '2016-03-04 18:13:35', 'Admin'),
(804, 'nathan koech', 'Login', '2016-03-04 18:06:32', 'Admin'),
(803, 'nathan koech', 'Login', '2016-03-04 18:03:28', 'Admin'),
(797, 'nathan koech', 'Login', '2016-02-29 12:46:10', 'Admin'),
(798, 'nathan koech', 'Login', '2016-03-04 15:46:30', 'Admin'),
(799, 'nathan koech', 'Login', '2016-03-04 15:50:41', 'Admin'),
(800, 'nathan koech', 'Login', '2016-03-04 16:10:29', 'Admin'),
(801, ' ', 'Logout', '2016-03-04 17:32:53', ''),
(802, 'nathan koech', 'Login', '2016-03-04 17:33:56', 'Admin'),
(895, 'joel kirui', 'Added Voter', '3/31/2016 6:11:36', 'Admin'),
(894, 'nathan koech', 'Login', '2016-03-31 05:48:12', 'Admin'),
(893, 'EVAH chepkirui', 'Added Voter', '3/25/2016 23:29:31', ''),
(892, 'joash omera', 'Added Voter', '3/24/2016 23:54:41', ''),
(891, 'dennis kamau', 'Added Voter', '3/24/2016 23:52:16', ''),
(890, 'alfred mutiso', 'Added Voter', '3/24/2016 23:50:22', ''),
(889, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(888, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(887, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(886, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(885, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(884, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(883, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(882, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(881, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(880, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(879, ' ', 'Deleted Voter', '3/24/2016 23:41:48', 'Admin'),
(878, 'nathan koech', 'Login', '2016-03-24 23:41:44', 'Admin'),
(856, 'Dick Korir', 'Deleted Voter', '3/21/2016 17:2:41', 'Admin'),
(855, 'dick Korir', 'Added Voter', '3/21/2016 17:1:53', 'Admin'),
(854, 'Dick Korir', 'Added Voter', '3/21/2016 17:1:24', 'Admin'),
(853, 'nathan koech', 'Login', '2016-03-21 16:31:16', 'Admin'),
(852, 'nathan kop', 'Added Candidate', '2016-03-21 12:51:45', 'Admin'),
(851, 'yyyy ', 'Added Candidate', '2016-03-21 12:50:57', 'Admin'),
(850, 'nathan koech', 'Login', '2016-03-21 12:28:08', 'Admin'),
(849, 'nathan koech', 'Login', '2016-03-21 11:45:01', 'Admin'),
(848, 'kibet josphat', 'Deleted Candidate', '3/21/2016 10:57:7', 'Admin'),
(847, 'nathan koech', 'Login', '2016-03-21 10:56:40', 'Admin'),
(846, 'joseph kalleli', 'Added Candidate', '2016-03-21 10:51:18', 'Admin'),
(845, 'nathan koech', 'Login', '2016-03-21 10:50:34', 'Admin'),
(844, 'joseph KIRUI', 'Added Candidate', '2016-03-21 10:24:36', 'Admin'),
(843, 'nathan koech', 'Login', '2016-03-21 10:21:57', 'Admin'),
(842, 'kibet josphat', 'Added Candidate', '2016-03-20 23:24:44', 'Admin'),
(841, 'SARAH KARARAN', 'Edit Candidate', '2016-03-20 23:23:36', 'Admin'),
(877, 'jenifer mutiso', 'Added Voter', '3/24/2016 23:37:53', ''),
(876, 'joseph mondis', 'Added Voter', '3/24/2016 23:30:57', ''),
(875, 'dennis kamau', 'Added Voter', '3/24/2016 23:27:17', ''),
(923, 'nathan koech', 'Logout', '2016-04-07 14:59:56', 'Admin'),
(924, 'Alice bett', 'voter registers', 'now()', ''),
(925, 'nathan koech', 'Login', '2016-04-07 15:02:44', 'Admin'),
(926, 'nathan koech', 'Logout', '2016-04-07 15:07:41', 'Admin'),
(927, 'elias ripko', 'voter registers', '4/7/2016 15:10:59', ''),
(928, 'nathan koech', 'Login', '2016-04-07 15:12:22', 'Admin'),
(929, 'nathan koech', 'Logout', '2016-04-07 15:18:25', 'Admin'),
(930, 'nathan koech', 'Login', '2016-04-07 15:31:35', 'Admin'),
(931, 'nathan koech', 'Logout', '2016-04-07 15:36:54', 'Admin'),
(863, 'nathan koech', 'Logout', '2016-03-24 22:38:57', 'Admin'),
(862, 'nathan koech', 'Login', '2016-03-24 22:09:35', 'Admin'),
(861, 'nathan koech', 'Login', '2016-03-22 09:45:29', 'Admin'),
(860, 'gerard kanda', 'Deleted Voter', '3/21/2016 17:38:27', 'Admin'),
(859, 'Dick chepkirui', 'Added Voter', '3/21/2016 17:37:20', 'Admin'),
(858, 'Dick Korir', 'Added Voter', '3/21/2016 17:3:30', 'Admin'),
(857, 'dick Korir', 'Deleted Voter', '3/21/2016 17:2:41', 'Admin'),
(817, ' ', 'Added Candidate', '2016-03-20 18:29:27', 'Admin'),
(816, ' ', 'Added Candidate', '2016-03-20 18:29:01', 'Admin'),
(815, 'nathan koech', 'Login', '2016-03-20 18:28:47', 'Admin'),
(958, 'nathan koech', 'Logout', '2016-04-07 16:14:17', 'Admin'),
(959, 'nathan koech', 'Login', '2016-04-07 16:14:30', 'Admin'),
(960, 'nathan koech', 'Logout', '2016-04-07 16:14:32', 'Admin'),
(961, 'nathan koech', 'Login', '2016-04-07 16:16:41', 'Admin'),
(962, 'nathan koech', 'Logout', '2016-04-07 16:16:43', 'Admin'),
(963, 'nathan koech', 'Login', '2016-04-07 16:17:12', 'Admin'),
(964, 'nathan koech', 'Logout', '2016-04-07 16:17:14', 'Admin'),
(965, 'nathan koech', 'Login', '2016-04-07 16:22:11', 'Admin'),
(966, ' ', 'Logout', '2016-04-07 16:28:25', ''),
(967, 'nathan koech', 'Login', '2016-04-07 16:28:51', 'Admin'),
(968, 'nathan koech', 'Logout', '2016-04-07 16:28:57', 'Admin'),
(969, 'nathan koech', 'Login', '2016-04-07 16:29:17', 'Admin'),
(970, 'nathan koech', 'Logout', '2016-04-07 16:29:28', 'Admin'),
(971, ' ', 'Logout', '2016-04-07 16:30:09', ''),
(972, 'nathan koech', 'Login', '2016-04-07 16:30:47', 'Admin'),
(973, 'nathan koech', 'Logout', '2016-04-07 16:31:18', 'Admin'),
(974, 'nathan koech', 'Login', '2016-04-07 16:37:47', 'Admin'),
(975, 'nathan koech', 'Logout', '2016-04-07 16:37:55', 'Admin'),
(976, 'dennis kamau', 'voter registers', '4/7/2016 16:47:49', ''),
(977, ' ', 'Logout', '2016-04-07 17:53:45', ''),
(978, ' ', 'Logout', '2016-04-07 17:58:39', ''),
(979, ' ', 'Logout', '2016-04-07 17:59:04', ''),
(980, ' ', 'Logout', '2016-04-07 18:10:35', ''),
(981, ' ', 'Logout', '2016-04-07 18:11:01', ''),
(982, ' ', 'Logout', '2016-04-07 18:11:42', ''),
(983, 'nathan koech', 'Login', '2016-04-07 19:48:25', 'Admin'),
(984, 'nathan koech', 'Logout', '2016-04-07 19:48:46', 'Admin'),
(985, 'nathan koech', 'Login', '2016-04-07 19:49:15', 'Admin'),
(986, 'nathan koech', 'Logout', '2016-04-07 19:50:19', 'Admin'),
(987, 'nathan koech', 'Login', '2016-04-07 19:54:05', 'Admin'),
(988, 'nathan koech', 'Logout', '2016-04-07 19:54:11', 'Admin'),
(989, 'nathan koech', 'Login', '2016-04-07 19:55:27', 'Admin'),
(990, 'nathan koech', 'Logout', '2016-04-07 19:55:35', 'Admin'),
(991, 'nathan koech', 'Login', '2016-04-07 19:57:32', 'Admin'),
(992, 'nathan koech', 'Logout', '2016-04-07 19:57:36', 'Admin'),
(993, 'nathan koech', 'Login', '2016-04-07 19:59:41', 'Admin'),
(994, 'nathan koech', 'Logout', '2016-04-07 19:59:48', 'Admin'),
(995, 'nathan koech', 'Login', '2016-04-07 20:09:38', 'Admin'),
(996, 'nathan koech', 'Logout', '2016-04-07 20:09:42', 'Admin'),
(997, 'nathan koech', 'Login', '2016-04-07 20:10:47', 'Admin'),
(998, 'nathan koech', 'Logout', '2016-04-07 20:10:52', 'Admin'),
(999, ' ', 'Logout', '2016-04-07 20:15:03', ''),
(1000, 'natty tasha', 'voter registered', '4/7/2016 20:51:48', ''),
(1001, 'nathan koech', 'Login', '2016-04-07 20:58:43', 'Admin'),
(1002, 'nathan koech', 'Logout', '2016-04-07 21:00:41', 'Admin'),
(1003, ' ', 'Logout', '2016-04-07 21:05:35', ''),
(1004, ' ', 'Logout', '2016-04-07 21:06:25', ''),
(1005, ' ', 'Logout', '2016-04-07 21:21:15', ''),
(1006, 'YULE MSEEMBAYA', 'Deleted Candidate', '4/7/2016 21:22:18', 'Admin'),
(1007, ' ', 'Logout', '2016-04-07 21:23:37', ''),
(1008, 'nathan koech', 'Login', '2016-04-07 22:50:10', 'Admin'),
(1009, 'nathan koech', 'Logout', '2016-04-07 22:50:15', 'Admin'),
(1010, 'nathan koech', 'Login', '2016-04-07 22:51:06', 'Admin'),
(1011, 'nathan koech', 'Logout', '2016-04-07 22:53:28', 'Admin'),
(1012, ' ', 'Logout', '2016-04-07 22:59:57', ''),
(1013, ' ', 'Logout', '2016-04-07 23:04:23', ''),
(1014, 'nathan koech', 'Login', '2016-04-08 09:35:46', 'Admin'),
(1015, 'nathan koech', 'Logout', '2016-04-08 09:35:50', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `presiding`
--

CREATE TABLE IF NOT EXISTS `presiding` (
  `VoterID` int(255) NOT NULL AUTO_INCREMENT,
  `PayrollNo` int(255) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  `usertype` int(10) NOT NULL,
  PRIMARY KEY (`VoterID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `presiding`
--

INSERT INTO `presiding` (`VoterID`, `PayrollNo`, `FirstName`, `LastName`, `MiddleName`, `UserName`, `Password`, `status`, `usertype`) VALUES
(17, 2, 'kibet', 'nyakundi', 'kimeli', 'kibet123', '1234', 'active', 1),
(19, 4, 'kibet', 'kimeli', 'korir', '20100381', '1234', 'active', 3),
(20, 8, 'annah', 'chepkirui', 'bii', '20100123', 'annah', 'active', 0),
(23, 4444, 'Dick', 'Korir', 'kipngeno', '201001', 'nathan', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `FirstName`, `LastName`, `UserName`, `Password`, `User_Type`) VALUES
(6, 'nathan', 'koech', 'admin', 'admin', 'Admin'),
(5, 'Nathan ', 'Koech', 'nato', 'nato', 'Admin'),
(4, 'Stephnanie', 'Villanueva', 'teph', 'teph', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `VoterID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(30) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `session` int(10) NOT NULL,
  PRIMARY KEY (`VoterID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`VoterID`, `regno`, `FirstName`, `LastName`, `MiddleName`, `Username`, `Password`, `Year`, `Status`, `session`) VALUES
(60, 'cs/m/08720/05/13', 'patrick', 'kibet', 'kirui', '20191381', 'kirui', '3rd year', 'Voted', 0),
(82, 'cm/m/056o/06/13', 'alfred', 'mutiso', 'morkomen', 'alfred123', 'mutiso', '2nd year', 'Voted', 1),
(56, 'cs/m/0250/05/13', 'moses', 'shiro', 'wanaina', '20100324', 'mose', '2nd year', 'Voted', 1),
(58, 'cm/m/0352/05/13', 'nathan', 'madam', 'kipkirui', '20100321', 'koech', '3rd year', 'Voted', 1),
(57, 'cs/m/0150/05/13', 'nelson', 'masese', 'mukumu', '20100328', 'masese', '3rd year', 'Voted', 1),
(54, 'cs/m/0354/05/13', 'dick', 'manu', 'kipgeno', '20100445', 'dick', '2nd year', 'Voted', 1),
(55, 'cs/m/0352/05/13', 'sally', 'kitur', 'chebet', '20100442', 'sally', '2nd year', 'Voted', 1),
(53, 'cs/m/0358/05/13', 'kibet', 'emmanuel', 'kiprono', '20100380', 'emmanuel', '3rd year', 'Voted', 1),
(61, 'cs/m/0358/05/13', 'onesmas', 'marenge', 'keton', '20100376', 'keton', '2nd year', 'Voted', 1),
(62, 'cs/m/0125/05/13', 'millicent', 'mukumo', 'm', '20100341', 'mukumo', '2nd year', 'Voted', 1),
(63, 'cs/m/034/05/13', 'sammy', 'mutai', 'miter', '20100743', 'nathan', '3rd year', 'Voted', 1),
(64, 'cs/m/047/05/13', 'edwin', 'kirui', 'madam', '20100271', 'madam', '3rd year', 'Voted', 0),
(65, 'cs/m/0341/05/13', 'kitala', 'josphat', 'moraa', '201002781', 'moraa', '2nd year', 'Voted', 1),
(88, 'cs/m/0358/05/13', 'kevin', 'nyangau', 'mungau', 'kevin123', 'kevin123', '2nd year', 'Voted', 1),
(67, 'cs/m/0358/05/13', 'Dick', 'chepkirui', 'madam', '2010012', 'nat', '3rd year', 'Unvoted', 0),
(86, 'cs/m/0358/05/13', 'joel', 'kirui', 'matai', 'joel123', 'joel123', '2nd year', 'Unvoted', 1),
(83, 'cs/m/0358/05/13', 'dennis', 'kamau', 'kiprono', '20100370', 'NATHAN', '2nd year', 'Unvoted', 0),
(84, 'cs/m/034805/13', 'joash', 'omera', 'itinade', 'joash123', 'mutiso', '3rd year', 'Unvoted', 1),
(79, 'cs/m/0858/05/13', 'dennis', 'kamau', 'munyau', '2010016', 'munyau', '2nd year', 'Unvoted', 0),
(80, 'cs/m/0267/05/13', 'joseph', 'mondis', 'akelo', 'madam2', 'mondis', '2nd year', 'Unvoted', 1),
(81, 'cm/m/0345/06/13', 'jenifer', 'mutiso', 'morkomen', 'mutiso123', 'mutiso', '2nd year', 'Unvoted', 1),
(85, 'cm/m/0345/06/13', 'EVAH', 'chepkirui', 'koech', 'evah123', 'koech', '1st year', 'Unvoted', 1),
(87, 'cs/m/0245/05/13', 'dancan', 'kibet', 'segero', 'dancan123', 'dancan123', '4th year', 'Voted', 1),
(89, 'cm/m/0340/06/13', 'Alice', 'bett', 'chepkorir', 'alice123', 'alice123', '2nd year', 'Unvoted', 0),
(90, 'cs/m/0368/05/13', 'elias', 'ripko', 'kipkorir', 'elias123', 'elias123', '1st year', 'Unvoted', 0),
(91, 'cs/m/01358/05/13', 'dennis', 'kamau', 'munyau', 'dennis123', 'dennis123', '3rd year', 'Unvoted', 0),
(92, 'bmit/n/1234/09/15', 'natty', 'tasha', 'nthambi', 'nattyruess', '50473957219', '4th year', 'Unvoted', 1);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CandidateID` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=556 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`ID`, `CandidateID`, `votes`) VALUES
(203, 153, 0),
(202, 129, 0),
(201, 95, 0),
(206, 95, 0),
(207, 129, 0),
(208, 131, 0),
(209, 136, 0),
(210, 138, 0),
(211, 95, 0),
(212, 128, 0),
(213, 138, 0),
(214, 133, 0),
(215, 137, 0),
(271, 211, 0),
(291, 210, 0),
(292, 214, 0),
(293, 219, 0),
(294, 222, 0),
(295, 225, 0),
(296, 210, 0),
(297, 215, 0),
(298, 218, 0),
(299, 224, 0),
(300, 226, 0),
(301, 210, 0),
(302, 215, 0),
(303, 218, 0),
(304, 223, 0),
(305, 227, 0),
(311, 211, 0),
(312, 215, 0),
(313, 219, 0),
(314, 222, 0),
(315, 227, 0),
(316, 210, 0),
(317, 216, 0),
(318, 220, 0),
(319, 223, 0),
(320, 226, 0),
(321, 210, 0),
(326, 211, 0),
(331, 210, 0),
(336, 212, 0),
(337, 217, 0),
(338, 221, 0),
(339, 224, 0),
(340, 227, 0),
(341, 212, 0),
(342, 216, 0),
(343, 221, 0),
(344, 224, 0),
(345, 225, 0),
(346, 212, 0),
(555, 237, 0),
(554, 224, 0),
(351, 211, 0),
(553, 220, 0),
(552, 216, 0),
(503, 0, 0),
(504, 0, 0),
(356, 210, 0),
(507, 0, 0),
(491, 0, 0),
(477, 210, 0),
(551, 213, 0),
(550, 225, 0),
(362, 210, 0),
(549, 224, 0),
(548, 219, 0),
(547, 216, 0),
(366, 214, 0),
(367, 210, 0),
(368, 218, 0),
(369, 224, 0),
(370, 227, 0),
(546, 213, 0),
(372, 210, 0),
(545, 225, 0),
(544, 224, 0),
(543, 220, 0),
(542, 216, 0),
(377, 210, 0),
(541, 213, 0),
(540, 226, 0),
(539, 222, 0),
(538, 218, 0),
(382, 210, 0),
(537, 215, 0),
(536, 211, 0),
(535, 226, 0),
(386, 212, 0),
(534, 224, 0),
(533, 218, 0),
(532, 215, 0),
(531, 211, 0),
(530, 225, 0),
(529, 222, 0),
(528, 221, 0),
(527, 217, 0),
(526, 213, 0),
(525, 225, 0),
(397, 212, 0),
(524, 222, 0),
(523, 220, 0),
(522, 215, 0),
(401, 213, 0),
(521, 212, 0),
(520, 0, 0),
(519, 0, 0),
(518, 0, 0),
(406, 212, 0),
(517, 216, 0),
(516, 213, 0),
(515, 0, 0),
(514, 0, 0),
(513, 0, 0),
(412, 211, 0),
(512, 216, 0),
(511, 213, 0),
(510, 0, 0),
(509, 0, 0),
(417, 211, 0),
(502, 0, 0),
(500, 0, 0),
(501, 213, 0),
(499, 0, 0),
(498, 0, 0),
(496, 0, 0),
(508, 0, 0),
(493, 0, 0),
(494, 0, 0),
(427, 211, 0),
(495, 0, 0),
(475, 225, 0),
(474, 222, 0),
(431, 217, 0),
(432, 212, 0),
(433, 221, 0),
(434, 224, 0),
(435, 226, 0),
(436, 217, 0),
(437, 212, 0),
(438, 221, 0),
(439, 224, 0),
(440, 226, 0),
(441, 214, 0),
(442, 210, 0),
(443, 218, 0),
(444, 223, 0),
(445, 225, 0),
(473, 218, 0),
(447, 211, 0),
(472, 210, 0),
(471, 214, 0),
(497, 211, 0),
(505, 0, 0),
(452, 213, 0),
(506, 213, 0),
(492, 0, 0),
(466, 210, 0),
(456, 216, 0),
(457, 213, 0),
(458, 221, 0),
(459, 223, 0),
(460, 226, 0),
(461, 217, 0),
(462, 213, 0),
(463, 218, 0),
(464, 224, 0),
(465, 226, 0);
