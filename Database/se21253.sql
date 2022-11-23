--
-- Database: `se21253`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `friend_email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile_name` varchar(30) NOT NULL,
  `date_started` date NOT NULL,
  `num_of_friends` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friend_id`, `friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES
(95, 'nimal@gmail.com', 'nimal123', 'nimal', '2022-11-20', NULL),
(96, 'kamani@gmail.com', 'kamani123', 'kamani', '2022-11-20', NULL),
(97, 'vinu@gmail.com', 'vinu123', 'vinu', '2022-11-20', NULL),
(98, 'namal@gmail.com', 'namal123', 'namal', '2022-11-20', NULL),
(99, 'kasun@gmail.com', 'kasun123', 'kasun', '2022-11-20', NULL),
(100, 'hiruni@gmail.com', 'hiruni123', 'hiruni', '2022-11-20', NULL),
(101, 'gihan@gmail.com', 'gihan123', 'gihan', '2022-11-20', NULL),
(102, 'pasan@gmail.com', 'pasan123', 'pasan', '2022-11-20', NULL),
(103, 'ruwan@gmail.com', 'ruwan123', 'ruwan', '2022-11-20', NULL),
(104, 'pumidu@gmail.com', 'pumidu123', 'pumidu', '2022-11-20', NULL),
(105, 'yohani@gmail.com', 'yohani123', 'yohani', '2022-11-20', NULL),
(106, 'nisal@gmail.com', 'nisal123', 'nisal', '2022-11-20', NULL),
(107, 'tilini@gmail.com', 'tilini123', 'tilini', '2022-11-20', NULL),
(108, 'palitha@gmail.com', 'palitha123', 'palitha', '2022-11-20', NULL),
(109, 'dilini@gmail.com', 'dilini123', 'dilini', '2022-11-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `myfriends`
--

DROP TABLE IF EXISTS `myfriends`;
CREATE TABLE IF NOT EXISTS `myfriends` (
  `friend_id1` int(11) NOT NULL,
  `friend_id2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myfriends`
--

INSERT INTO `myfriends` (`friend_id1`, `friend_id2`) VALUES
(97, 95),
(97, 98),
(97, 100),
(97, 102),
(97, 104),
(97, 105),
(97, 106),
(97, 109),
(104, 97),
(104, 96),
(104, 95),
(104, 102),
(104, 103),
(95, 96),
(95, 98),
(96, 105),
(96, 100),
(96, 99),
(96, 98),
(98, 109),
(98, 99),
(98, 97),
(98, 107),
(98, 100),
(98, 96),
(98, 104);

