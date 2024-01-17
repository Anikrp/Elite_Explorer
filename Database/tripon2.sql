-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 07:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripon2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `email`, `password`) VALUES
(1, 'anik@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `p_id`, `qty`, `price`) VALUES
(87, 'hasan@gmail.com', 26, 1, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`c_id`, `c_name`, `c_active`) VALUES
(66, 'Familly Trip', 2),
(74, 'Upcoming Trip', 2),
(76, 'Couple Trip', 1),
(77, 'Student Trip', 1),
(78, 'Budget-Friendly Trip', 1),
(79, 'Foreign Trip', 2),
(80, 'Deal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `B_first_name` varchar(50) DEFAULT NULL,
  `B_Last_name` varchar(50) DEFAULT NULL,
  `b_email` varchar(50) DEFAULT NULL,
  `b_phone` varchar(50) DEFAULT NULL,
  `b_add` varchar(100) DEFAULT NULL,
  `b_postal_code` int(11) DEFAULT NULL,
  `payment_transaction` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `msg` varchar(555) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `user_email`, `msg`, `rating`) VALUES
(1, 'anik003@gmail.com', 'great', 5),
(2, 'anik003@gmail.com', 'Great', 4),
(3, 'anik003@gmail.com', 'nice', 5),
(4, 'anik003@gmail.com', 'h', 1),
(5, 'anik003@gmail.com', 'h', 5),
(6, 'anik003@gmail.com', 'Nice', 1),
(7, 'anik003@gmail.com', 'It was really Nice Trip I enjoyed too much', 3),
(8, 'l23@gmail.com', 'It was a great day', 5),
(9, 's@gmail.com', 'Satisfied', 4),
(10, 'imam@gmail.com', 'It was a great experience with elite explore Thank you!', 5),
(11, 'hasan@gmail.com', 'Worst experience. Food quality was not so good.', 1),
(12, 'sadman@gmail.com', 'Enjoyed', 5),
(13, 'imam@gmail.com', 'Great experience', 3);

-- --------------------------------------------------------

--
-- Table structure for table `trip_package`
--

CREATE TABLE `trip_package` (
  `id` int(100) NOT NULL,
  `catagory` int(100) NOT NULL,
  `Trip_Name` varchar(550) NOT NULL,
  `Tlocation` varchar(500) NOT NULL,
  `Vacancy` int(100) NOT NULL,
  `Starting_Date` date NOT NULL,
  `Ending_Date` date NOT NULL,
  `Duration` int(100) NOT NULL,
  `Details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `discount` int(100) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip_package`
--

INSERT INTO `trip_package` (`id`, `catagory`, `Trip_Name`, `Tlocation`, `Vacancy`, `Starting_Date`, `Ending_Date`, `Duration`, `Details`, `price`, `discount`, `image`) VALUES
(10, 66, 'Sylhet Trip', 'Sylhet', 20, '2021-12-29', '2022-01-06', 2, 'Transport And food Included', 2000, 4, 'https://cdn.pixabay.com/photo/2018/07/13/06/06/bangladesh-3535023__340.jpg'),
(12, 66, 'Bandarban Trip', 'Bangladaesh,BandarBan', 5, '2022-01-06', '2022-01-20', 24, ' Transport And food included', 4800, 5, 'https://i.imgur.com/t40G7ku.jpeg'),
(13, 66, 'Rangamati Trip', 'Rangamati,Bangladesh', 10, '2022-01-11', '2022-01-13', 2, 'Transport & food included', 4000, 5, 'https://i.imgur.com/hhfQ10O.jpeg'),
(18, 76, 'Coxs Bazar', 'Coxs Bazar, Bangladesh', 7, '2022-01-06', '2022-01-08', 2, 'Transport & food included', 5000, 4, 'https://i.imgur.com/aEzed3B.jpeg'),
(19, 77, 'Sreemongol Trip', 'Sreemongol,Sylhet', 5, '2022-01-12', '2022-01-13', 1, 'Transport & food included', 1500, 2, 'https://i.imgur.com/2xax8JS.jpeg'),
(23, 78, 'Panchagar Trip', 'Panchagar,Bangladesh', 10, '2022-01-20', '2022-01-22', 2, 'Transport & food included', 2000, 8, 'https://i.imgur.com/HC5bhWQ.jpeg'),
(24, 78, 'Khulna Trip', 'Khulna,Bangladesh', 7, '2022-01-13', '2022-01-16', 3, 'Transport & food included', 5000, 5, 'https://i.imgur.com/Zi2P8b3.jpeg'),
(25, 78, 'Rajshahi Trip', 'Rajshahi, Bangladesh', 9, '2022-01-16', '2022-01-18', 2, 'Transport & food included', 2000, 2, 'https://i.imgur.com/R47BzJk.jpeg'),
(26, 77, 'Tanguar Haor Trip', 'Sylhet, Bangladesh', 13, '2022-01-19', '2022-01-21', 2, 'Transport & food included', 4000, 6, 'https://i.imgur.com/oktbeun.jpeg'),
(29, 66, 'Kuakata', 'Kuakata,Bangladesh', 30, '2022-01-06', '2022-01-06', 50, 'Next weekened we are going to arraing this trip within low budget. Stay with us', 3000, 1500, 'https://cdn.pixabay.com/photo/2018/07/13/06/06/bangladesh-3535023__340.jpg'),
(40, 80, 'Royal Tulip', 'CoxBazar', 50, '2022-08-11', '2022-08-12', 30, 'Royal tulip coxs bazar', 50000, 1000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/99/54/30/swimming-pool.jpg?w=1200&h=-1&s=1'),
(41, 80, 'Hotel Seagul', 'Soghundha Point Road Sea Beach, Hotel Motel Zone', 5, '2022-08-12', '2022-08-10', 10, 'Included Everything', 15000, 400, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0b/7f/0c/c8/seagull-hotel.jpg?w=1200&h=-1&s=1'),
(42, 76, 'Himchori', ' Himchori', 30, '2022-08-10', '2022-08-11', 30, 'All included', 3000, 400, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/9a/3d/f1/the-bay-of-bengle-from.jpg?w=1200&h=-1&s=1'),
(43, 76, 'Sayeman Beach Resort', 'Sayeman Beach Resort', 49, '2022-08-24', '2022-08-25', 50, 'All included', 10000, 1000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/21/e1/17/83/the-infinity-pool-on.jpg?w=1200&h=-1&s=1'),
(44, 80, 'Sea Pearl Beach Resort', 'Sea Pearl Beach Resort', 39, '2022-08-08', '2022-08-10', 40, 'Included Everything', 14000, 400, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/99/54/30/swimming-pool.jpg?w=1200&h=-1&s=1'),
(45, 80, 'Panam City', 'Sonarga', 20, '2022-08-18', '2022-08-19', 24, 'Included Everything', 1000, 20, 'https://nijhoom.b-cdn.net/wp-content/uploads/2021/03/panam-nagar-sonargaon-lady-burka-768-o.jpg'),
(47, 80, 'Semester Break', 'Tanguar Haur', 50, '2022-08-27', '2022-08-30', 45, 'Included Everything', 3500, 500, 'https://upload.wikimedia.org/wikipedia/commons/9/96/Tanguar_Haor_o_jadukata_nodi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_Name`, `email`, `phone_number`, `address`, `nid`, `gender`, `blood_group`, `password`, `dp`) VALUES
(11, 'Imam Hossain', 'imam@gmail.com', '01700000000', 'Bogura,Mohastan', '12345678', 'Male', 'O+', '0000', ' IMG-62f372de04c851.09823000.jpg'),
(12, 'Hasan', 'hasan@gmail.com', '01728029876', 'Lalmonirhat Sadar', '12345678', 'Male', 'B+', '12345', ' IMG-62f375d6cb8083.85980333.jpg'),
(13, 'Adib Sadman', 'sadman@gmail.com', '01728029876', 'Lalmonirhat Sadar, S', '23234343', 'Male', 'B+', '9090', ' IMG-62f3c0be7f2cb8.01844366.jpg'),
(14, 'Adnan Sami', 'adnan@gmail.com', '01779787069', 'Dhaka', '12345678', 'Male', 'B+', '00000000000', ' IMG-6308af47f093f5.57793415.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK` (`p_id`) USING BTREE;

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `trip_package`
--
ALTER TABLE `trip_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catagory` (`catagory`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trip_package`
--
ALTER TABLE `trip_package`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`p_id`) REFERENCES `trip_package` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`p_id`) REFERENCES `trip_package` (`id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`p_id`) REFERENCES `trip_package` (`id`);

--
-- Constraints for table `trip_package`
--
ALTER TABLE `trip_package`
  ADD CONSTRAINT `trip_package_ibfk_1` FOREIGN KEY (`catagory`) REFERENCES `catagory` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
