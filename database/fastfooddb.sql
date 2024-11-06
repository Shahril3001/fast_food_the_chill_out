-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 08:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(100) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminemail` varchar(50) NOT NULL,
  `adminphone` varchar(11) NOT NULL,
  `adminpassword` varchar(8) NOT NULL,
  `role` varchar(5) NOT NULL,
  `lastLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminname`, `adminemail`, `adminphone`, `adminpassword`, `role`, `lastLogin`) VALUES
(1, 'Shahril', 'Shahril3001.SR@gmail.com', '1234567', '1234', 'admin', '2019-04-19 08:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(100) NOT NULL,
  `productID` int(100) NOT NULL,
  `cartQuantity` int(100) NOT NULL,
  `cartPrice` decimal(5,2) NOT NULL,
  `memberIC` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `username`, `subject`, `email`, `comment`, `date`) VALUES
(1, 'Shahril', 'Hello World', 'Shahril@gmail.com', '<p>Hello World</p>\r\n', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(100) NOT NULL,
  `membername` varchar(50) NOT NULL,
  `memberIC` varchar(11) NOT NULL,
  `memberemail` varchar(50) NOT NULL,
  `memberphone` varchar(11) NOT NULL,
  `memberaddress` varchar(100) NOT NULL,
  `memberpassword` varchar(8) NOT NULL,
  `role` varchar(6) NOT NULL,
  `memberStatus` varchar(13) NOT NULL,
  `serialkey` varchar(10) NOT NULL,
  `lastLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `membername`, `memberIC`, `memberemail`, `memberphone`, `memberaddress`, `memberpassword`, `role`, `memberStatus`, `serialkey`, `lastLogin`) VALUES
(1, 'Shahril Radziman', '01-082691', 'Shahril3001.SR@gmail.com', '1234567', 'Kiudang, Tutong, TE1743 Negara Brunei Darussalam', '1234', 'member', 'Activated', 'FD7DJRBQU0', '2019-04-19 07:34:03'),
(2, 'Ali', '01-081111', 'Ali.Cafe@com', '12345', 'Kampong Mabohai', '1234', 'member', 'Not Activated', 'TLK61KLRIF', '2019-04-19 08:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderID` int(100) NOT NULL,
  `memberIC` varchar(11) NOT NULL,
  `memberStatus` varchar(13) NOT NULL,
  `orderkeyID` varchar(20) NOT NULL,
  `orderMethod` varchar(12) NOT NULL,
  `orderDate` date NOT NULL,
  `orderTime` time NOT NULL,
  `orderAddress` varchar(100) NOT NULL,
  `orderStatus` varchar(11) NOT NULL,
  `orderOverall` decimal(5,2) NOT NULL,
  `orderRecord` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderitemID` int(100) NOT NULL,
  `productID` int(100) NOT NULL,
  `orderQuantity` int(100) NOT NULL,
  `orderPrice` decimal(5,2) NOT NULL,
  `memberIC` varchar(9) NOT NULL,
  `orderkeyID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(100) NOT NULL,
  `productImage` varchar(1000) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productIngredient` varchar(100) NOT NULL,
  `productCategory` varchar(11) NOT NULL,
  `productPrice` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productImage`, `productName`, `productIngredient`, `productCategory`, `productPrice`) VALUES
(1, 'data/img/product/d1.jpg', 'Dessert1', '', 'Dessert', '2.00'),
(2, 'data/img/product/d2.jpg', 'Dessert2', '', 'Dessert', '2.00'),
(3, 'data/img/product/d3.jpg', 'Dessert3', '', 'Dessert', '2.00'),
(4, 'data/img/product/Dinner1.jpg', 'Dinner1', '', 'Dinner', '9.00'),
(5, 'data/img/product/dinner2.jpg', 'Dinner2', '', 'Dinner', '15.00'),
(6, 'data/img/product/drink1.jpg', 'Pepsi', '', 'Drink', '1.00'),
(7, 'data/img/product/drink2.jpg', 'Coca Cola', '', 'Drink', '1.00'),
(8, 'data/img/product/happy1jpg.jpg', 'Happy1', '', 'HappyHour', '15.00'),
(9, 'data/img/product/happy2.jpg', 'Happy2', '', 'HappyHour', '12.00'),
(10, 'data/img/product/happy3.jpg', 'Happy3', '', 'HappyHour', '12.00'),
(11, 'data/img/product/happy4.jpg', 'Happy4', '<p>Pizza</p>\r\n', 'HappyHour', '13.50'),
(12, 'data/img/product/happy5.jpg', 'Double Happy5', '<p>Cheese</p>\r\n', 'Lunch', '20.00'),
(13, 'data/img/product/lunch1.jpg', 'Lunch1', '<p>Lunch1</p>\r\n', 'Lunch', '14.50'),
(14, 'data/img/product/lunch2.png', 'Lunch2', '<p>Lunch2</p>\r\n', 'Lunch', '14.50'),
(15, 'data/img/product/lunch3.jpg', 'Lunch3', '<p>Lunch3</p>\r\n', 'Lunch', '15.00'),
(16, 'data/img/product/lunch4.jpg', 'Lunch4', '<p>Lunch4</p>\r\n', 'Lunch', '15.00'),
(17, 'data/img/product/lunch5.jpg', 'Burger1', '<p>Burger1</p>\r\n', 'Lunch', '4.50'),
(18, 'data/img/product/lunch6.jpg', 'Burger2', '<p>Burger2</p>\r\n', 'Lunch', '4.99'),
(19, 'data/img/product/lunch7.jpg', 'Burger3', '<p>Burger3</p>\r\n', 'Lunch', '4.50'),
(20, 'data/img/product/lunch8.jpg', 'Special Set', '<p>Special Set</p>\r\n', 'Lunch', '8.00'),
(21, 'data/img/product/sides1.jpg', 'Chicken meat', '<p>Chicken nugget</p>\r\n', 'Sides', '3.00'),
(22, 'data/img/product/sides1.png', 'Chip cup', '<p>Chip cup</p>\r\n', 'Sides', '1.50'),
(23, 'data/img/product/sides2.jpg', 'Chip ball', '<p>Chip ball</p>\r\n', 'Sides', '2.90'),
(24, 'data/img/product/sides3.jpg', 'Chip mayonise pot', '<p>Chip pot</p>\r\n', 'Sides', '2.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderitemID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderitemID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
