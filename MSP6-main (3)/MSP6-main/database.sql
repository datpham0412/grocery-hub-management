-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/

-- Host: 127.0.0.1:4000
-- Generation Time: May 10, 2022 at 05:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Database: `gtg`

-- --------------------------------------------------------


-- Table structure for table `members`

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `MemberID` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `JoinDate` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNum` int(10) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table `members`


INSERT INTO `members` (`MemberID`, `FirstName`, `LastName`, `JoinDate`, `Email`, `Address`, `PhoneNum`, `Active`) VALUES
(0, 'FirstName', 'LastName', '0000-00-00', 'Email', 'Address', 0, 1),
(1, 'Edith', 'Tifft', '2022-04-07', 'hayden_gleason@hotmail.com', '94 Kopkes Road', 412312310, 1),
(4, 'Finn', 'Gurkin', '2022-05-05', 'abby.hane@gmail.com', '53 Testers street', 412312313, 1),
(5, 'Jerald', 'Presley', '2022-04-07', 'imogen.howell@hotmail.com', '7 Nandewar Street', 412312314, 0),
(6, 'Lora', 'Presley', '2022-04-08', 'jessica_james64@hotmail.com', '67 Testers street', 412312315, 0),
(7, 'Jerrold', 'Sharman', '2022-03-05', 'ava60@yahoo.com', '22 Hargrave Road', 412312316, 1),
(8, 'Erma', 'Keen', '2022-05-05', 'ali54@gmail.com', '49 Martens Place', 412312317, 1),
(9, 'Lamar', 'Newman', '2022-04-07', 'jonathan.howe87@hotmail.com', '74 Hillsdale Road', 412312318, 1),
(11, 'Dewey', 'Tracy', '2022-03-05', 'max_greenfelder41@hotmail.com', '70 Barker Street', 412312320, 1),
(12, 'Margery', 'Thorpe', '2022-05-05', 'lillian_thomson53@gmail.com', '95 Kopkes Road', 412312321, 1),
(13, 'Edna', 'Swift', '2022-04-07', 'mikayla.west@hotmail.com', '87 Goebels Road', 412312322, 1),
(14, 'Leonard', 'Attaway', '2022-04-08', 'isabella_hartmann@hotmail.com', '82 Seaview Court', 412312323, 1),
(15, 'Major', 'Austin', '2022-03-05', 'christian_smith@hotmail.com', '84 Mackie Street', 412312324, 1),
(16, 'Darrel', 'Frost', '2022-05-05', 'lucy_erdman@hotmail.com', '8 Nandewar Street', 412312325, 1),
(17, 'Elaine', 'Elder', '2022-04-07', 'mikayla62@hotmail.com', '72 Chatsworth Drive', 412312326, 1),
(18, 'Ophelia', 'Tyson', '2022-04-08', 'sebastian.thomas34@hotmail.com', '23 Hargrave Road', 412312327, 1),
(19, 'Rosalind', 'Anthonyson', '2022-03-05', 'olivia57@gmail.com', '50 Martens Place', 412312328, 1),
(20, 'Dianne', 'Breckenridge', '2022-05-05', 'grace.grady@hotmail.com', '75 Hillsdale Road', 412312329, 1),
(21, 'Mariah', 'Alexander', '2022-04-07', 'caleb21@gmail.com', '88 Halsey Road', 412312330, 1),
(22, 'Scot', 'Giffard', '2022-04-08', 'finn36@hotmail.com', '71 Barker Street', 412312331, 1),
(23, 'Shirley', 'Attwater', '2022-03-05', 'chloe.cassin96@hotmail.com', '96 Kopkes Road', 412312332, 1),
(24, 'Christine', 'Kynaston', '2022-05-05', 'abbey.casper@hotmail.com', '88 Goebels Road', 412312333, 1),
(25, 'Bryce', 'Gabrielson', '2022-04-07', 'benjamin_paterson90@yahoo.com', '83 Seaview Court', 412312334, 1),
(26, 'Hale', 'Cason', '2022-04-08', 'zachary94@yahoo.com', '85 Mackie Street', 412312335, 1),
(27, 'Hazel', 'Parks', '2022-03-05', 'ethan_cruickshank@hotmail.com', '9 Nandewar Street', 412312336, 1),
(28, 'Geoffrey', 'Tobias', '2022-05-05', 'leo.oreilly84@hotmail.com', '73 Chatsworth Drive', 412312337, 1),
(29, 'Constance', 'Jekyll', '2022-04-07', 'zara30@hotmail.com', '24 Hargrave Road', 412312338, 1),
(30, 'Russell', 'Fleming', '2022-04-08', 'georgia.turner1@hotmail.com', '51 Martens Place', 412312339, 1),
(31, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(32, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(33, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(34, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(35, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(36, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(37, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(38, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(39, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(40, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(41, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(42, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(43, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(44, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(45, 'Penny', 'Pickles', '2018-07-22', 'P.Moron@gmail.com', '15 Nickle street', 41231231, 1),
(46, 'Penny', 'Pickle', '2018-07-22', 'tiffany@co.com', '8 diamonds road', 2147483647, 1);

-- --------------------------------------------------------


-- Table structure for table `orderitems`

DROP TABLE IF EXISTS `orderitems`;
CREATE TABLE `orderitems` (
  `OrderID` int(6) NOT NULL,
  `ProductID` int(6) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `SubTotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orderitems` (`OrderID`, `ProductID`, `ProductName`, `Unit`, `Price`, `Quantity`, `SubTotal`) VALUES
(3, 1003, 'Almond Milk', '1 Litre', 4, 2, 8),
(5, 1013, 'Mangoes', '1 Kilogram', 6, 1, 6),
(6, 1009, 'Butter', '500 Grams', 4, 3, 12),
(7, 1027, 'Chicken Thigh', '500 Grams', 10, 4, 40),
(8, 1026, 'Chicken Breast', '500 Grams', 10, 5, 50),
(9, 1010, 'Apples', '1 Kilogram', 2, 3, 6),
(15, 1017, 'Potatoes','1 Kilogram', 5, 2, 10),
(20, 1018, 'Onions', '1 Kilogram', 4, 3, 12),
(21, 1014, 'Bananas ', '1 Kilogram', 2, 1, 2),
(21, 1021, 'Broccoli', '1 Kilogram', 3, 5, 15);

-- --------------------------------------------------------


-- Table structure for table `invoice`

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `OrderID` int(6) NOT NULL,
  `MemberID` int(10) NOT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Total` int(10) NOT NULL,
  `Paid` tinyint(1) NOT NULL,
  `Active` tinyint(1) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `invoice` (`OrderID`, `MemberID`, `OrderTime`, `Total`, `Paid`, `Active`) VALUES
(3, 13, '2022-05-11 02:38:02', 8, 1, 1),
(4, 29, '2022-05-09 23:38:02', 13, 1, 1),
(5, 20, '2022-05-12 03:04:07', 6, 0, 1),
(6, 16, '2022-05-12 02:38:02', 12, 1, 1),
(7, 27, '2022-05-12 03:04:07', 40, 0, 1),
(8, 28, '2022-05-17 02:38:02', 50, 1, 1),
(9, 14, '2022-05-07 21:38:02', 6, 1, 1),
(10, 11, '2022-05-11 02:38:02', 7, 1, 1),
(11, 4, '2022-05-12 02:38:02', 17, 1, 1),
(12, 1, '2022-05-11 02:37:35', 20, 1, 1),
(13, 13, '2022-05-11 02:38:02', 23, 1, 1),
(14, 29, '2022-05-09 23:38:02', 21, 1, 1),
(15, 20, '2022-05-12 03:04:12', 10, 0, 1),
(16, 16, '2022-05-12 02:38:02', 11, 1, 1),
(17, 27, '2022-05-12 03:04:12', 12, 0, 1),
(18, 28, '2022-05-17 02:38:02', 13, 1, 1),
(19, 14, '2022-05-07 21:38:02', 34, 1, 1),
(20, 11, '2022-05-11 02:38:02', 12, 1, 1),
(21, 4, '2022-05-12 02:38:02', 17, 1, 1);


-- --------------------------------------------------------


-- Table structure for table `products`

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `ProductID` int(6) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `ExpiryDate` date NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table `products`


INSERT INTO `products` (`ProductID`, `ProductName`, `Category`, `Unit`, `Price`, `Stock`, `ExpiryDate`, `Active`) VALUES
(1, 'Beef', 'Meat', 'Kg', 15, 50, '2022-05-15', 1),
(2, 'Chicken', 'Meat', 'Kg', 25, 30, '2022-05-15', 0),
(3, 'Cheese', 'Vegetable', 'each', 10, 15, '2022-05-29', 1),
(4, 'WerkQueen', 'Fruit', 'Head', 5, 15, '2022-06-24', 0),
(1001, 'Milk', 'Dairy', '1 Litre', 4, 30, '2022-04-30', 0),
(1002, 'Milk', 'Dairy', '2 Litre', 4, 30, '2022-04-30', 0),
(1003, 'Almond Milk', 'Dairy', '1 Litre', 4, 40, '2022-04-30', 0),
(1004, 'Tasty Cheese Slices', 'Dairy', '500 Grams', 7, 25, '2022-05-04', 0),
(1005, 'Shredded Mozarella', 'Dairy', '500 Grams', 6, 35, '2022-05-06', 0),
(1006, 'Vanilla Yoghurt', 'Dairy', '1 Kilogram', 6, 35, '2022-05-11', 0),
(1007, 'Strawberry Yoghurt', 'Dairy', '1 Kilogram', 8, 20, '2022-05-12', 0),
(1008, 'Blueberry Yoghurt', 'Dairy', '1 Kilogram', 8, 20, '2022-05-05', 0),
(1009, 'Butter', 'Dairy', '500 Grams', 4, 50, '2022-07-07', 0),
(1010, 'Apples', 'Fruit', '1 Kilogram', 2, 100, '2022-05-05', 0),
(1011, 'Oranges', 'Fruit', '1 Kilogram', 3, 90, '2022-05-05', 0),
(1012, 'Lemons', 'Fruit', '1 Kilogram', 2, 50, '2022-05-05', 0),
(1013, 'Mangoes', 'Fruit', '1 Kilogram', 6, 80, '2022-05-05', 0),
(1014, 'Bananas ', 'Fruit', '1 Kilogram', 2, 200, '2022-05-06', 0),
(1015, 'Tomatoes ', 'Fruit', '1 Kilogram', 4, 200, '2022-05-05', 0),
(1016, 'Spinach', 'Vegetables', '500 Grams', 3, 50, '0000-00-00', 0),
(1017, 'Potatoes', 'Vegetables', '1 Kilogram', 5, 60, '0000-00-00', 0),
(1018, 'Onions', 'Vegetables', '1 Kilogram', 4, 80, '0000-00-00', 0),
(1019, 'Carrots', 'Vegetables', '1 Kilogram', 3, 100, '0000-00-00', 0),
(1020, 'Celery', 'Vegetables', '1 Kilogram', 4, 90, '0000-00-00', 0),
(1021, 'Broccoli', 'Vegetables', '1 Kilogram', 3, 70, '0000-00-00', 0),
(1022, 'Mushrooms', 'Vegetables', '1 Kilogram', 7, 200, '0000-00-00', 0),
(1023, 'Lettuce', 'Vegetables', '1 Kilogram', 6, 100, '0000-00-00', 0),
(1024, 'Beef Mince', 'Meat', '500 Grams', 9, 30, '0000-00-00', 0),
(1025, 'Pork Mince', 'Meat', '500 Grams', 9, 30, '0000-00-00', 0),
(1026, 'Chicken Breast', 'Meat', '500 Grams', 10, 20, '0000-00-00', 0),
(1027, 'Chicken Thigh', 'Meat', '500 Grams', 10, 20, '0000-00-00', 0),
(1028, 'Penne Pasta', 'Pantry', '500 Grams', 4, 30, '0000-00-00', 0),
(1029, 'White Rice', 'Pantry', '500 Grams', 5, 30, '0000-00-00', 0),
(1030, 'Brown Rice', 'Pantry', '500 Grams', 6, 30, '0000-00-00', 0);


-- Indexes for dumped tables



-- Indexes for table `members`

ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`);


-- Indexes for table `orderitems`

ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);


-- Indexes for table `invoice`

ALTER TABLE `invoice`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `MemberID` (`MemberID`);


-- Indexes for table `products`

ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);


-- AUTO_INCREMENT for dumped tables




-- AUTO_INCREMENT for table `members`

ALTER TABLE `members`
  MODIFY `MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;


-- AUTO_INCREMENT for table `invoice`

ALTER TABLE `invoice`
  MODIFY `OrderID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


-- AUTO_INCREMENT for table `products`

ALTER TABLE `products`
  MODIFY `ProductID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;


-- Constraints for dumped tables




-- Constraints for table `orderitems`

ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `invoice` (`OrderID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);


-- Constraints for table `invoice`

ALTER TABLE `invoice`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
