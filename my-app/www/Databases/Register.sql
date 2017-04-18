-- Database: `register`

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Table structure for table `register`
--

CREATE TABLE `Register` (
`ID`INT(25) NOT NULL, PRIMARY KEY,
UserName VARCHAR(225) NOT NULL,
`Email` VARCHAR(225) NOT NULL, 
`Password` VARCHAR(50) NOT NULL, 
`password2` VARCHAR(50) NOT NULL
)
ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `register` 
(`id`, `UserName`, `Email`, `email`, `password`, `password2`) 

VALUES
(1, 'Charlie2', 'charlesbanda@gmail.com', 'Charles2', 'Charles2'),
(2, 'Sana2', 'sanadiwa@gmail.com', 'Sanadiwa2', 'Sanadiwa2'),
(3, 'Danny2', 'danny@gmail.com', 'Dan2', 'Dan2'),
(4, 'Shane2', 'shanemcDonald@yahoo.co.uk', 'Shan2', 'Shan2'),
(5, 'April2', 'april2@yahoo.co.uk', 'April1234', 'April1234'),




-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`registerName`),
  ADD UNIQUE KEY `email` (`registerEmail`,`registerPassword`);

--AUTO_INCREMENT for table `register`

ALTER TABLE `register`
MODIFY `ID` INT(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;




