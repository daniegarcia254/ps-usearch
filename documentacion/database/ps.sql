SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ps`
--

-- --------------------------------------------------------

--
-- Table structure for table `micros`
--

CREATE TABLE IF NOT EXISTS `micros` (
  `ref` varchar(300) NOT NULL,
  `arch` varchar(100) NOT NULL,
  `freq` varchar(100) NOT NULL,
  `flash` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
