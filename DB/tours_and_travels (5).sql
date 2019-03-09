-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 07:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours_and_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancelation_booking`
--

CREATE TABLE `cancelation_booking` (
  `Cancelation_id` int(5) NOT NULL,
  `Package_booking_id` int(5) DEFAULT NULL,
  `Vehicle_booking_id` int(5) DEFAULT NULL,
  `Daily_booking_id` int(5) DEFAULT NULL,
  `Cancelation_date` date DEFAULT NULL,
  `Cut_of_amount` int(10) DEFAULT NULL,
  `Refund_amount` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_id` int(5) NOT NULL,
  `State_id` int(11) NOT NULL,
  `City_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_id`, `State_id`, `City_name`) VALUES
(13, 8, 'Ahmedabad'),
(19, 8, 'Gandhinagar');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_id` int(5) NOT NULL,
  `Cust_name` varchar(20) NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Cust_address` varchar(50) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `Organization_name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Cust_name`, `Email_id`, `Cust_address`, `Contact_no`, `Organization_name`, `Gender`, `Date_of_birth`, `Password`) VALUES
(23, 'Meshwa Patel', 'meshwapatel24@gmail.com', 'A-1, Pulin Society, Naroda, Ahmedabad', 2147483647, '', 'Female', '1990-04-20', 'meshwa123');

-- --------------------------------------------------------

--
-- Table structure for table `daily_booking`
--

CREATE TABLE `daily_booking` (
  `Daily_booking_id` int(5) NOT NULL,
  `Cust_id` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Daily_route_id` int(5) NOT NULL,
  `No_of_seat` int(10) NOT NULL,
  `Total_amount` int(10) NOT NULL,
  `Payment` int(10) DEFAULT '0',
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daily_route_detail`
--

CREATE TABLE `daily_route_detail` (
  `Daily_route_id` int(5) NOT NULL,
  `From_place` varchar(20) NOT NULL,
  `To_place` varchar(20) NOT NULL,
  `Facility_type_id` int(5) NOT NULL,
  `Seat_type_id` int(5) NOT NULL,
  `Price` float(6,2) NOT NULL,
  `Via_route` varchar(500) NOT NULL,
  `Date` date NOT NULL,
  `De_time` time NOT NULL,
  `Ar_time` time NOT NULL,
  `Vehicle_type_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_route_detail`
--

INSERT INTO `daily_route_detail` (`Daily_route_id`, `From_place`, `To_place`, `Facility_type_id`, `Seat_type_id`, `Price`, `Via_route`, `Date`, `De_time`, `Ar_time`, `Vehicle_type_id`) VALUES
(13, 'Ahmedabad', 'Surat', 1, 2, 330.00, 'Vadodara', '2017-04-20', '10:15:00', '15:30:00', 7),
(14, 'Ahmedabad', 'Pune', 2, 2, 550.00, 'Surat', '2017-04-22', '23:30:00', '13:12:00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `Des_id` int(5) NOT NULL,
  `Des_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Des_id`, `Des_name`) VALUES
(5, 'Driver'),
(6, 'Guide');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_id` int(5) NOT NULL,
  `Emp_name` varchar(40) NOT NULL,
  `Des_id` int(5) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Date_of_join` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Emp_name`, `Des_id`, `Contact_no`, `Date_of_birth`, `Address`, `Gender`, `Date_of_join`) VALUES
(5, 'Dasharathbhai', 6, 740589642, '1975-04-08', 'Bapunagar, Ahmedabad', 'Male', '2014-07-25'),
(6, 'Maheshbhai', 5, 2147483647, '1969-11-05', 'Isanpur, Ahmedabad', 'Male', '2005-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `facility_type`
--

CREATE TABLE `facility_type` (
  `Facility_type_id` int(5) NOT NULL,
  `Facility_type_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility_type`
--

INSERT INTO `facility_type` (`Facility_type_id`, `Facility_type_name`) VALUES
(1, 'A/C'),
(2, 'Non A/C');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_id` int(5) NOT NULL,
  `Cust_id` int(5) NOT NULL,
  `Feedback_content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_id`, `Cust_id`, `Feedback_content`) VALUES
(2, 23, 'Extremely Good');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_id` int(5) NOT NULL,
  `Hotel_name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Charge` int(10) NOT NULL,
  `City_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inq_id` int(5) NOT NULL,
  `Cust_id` int(5) NOT NULL,
  `Vehicle_id` int(5) NOT NULL,
  `Daily_route_id` int(5) NOT NULL,
  `Package_id` int(5) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice_id` int(5) NOT NULL,
  `Cust_id` int(5) NOT NULL,
  `Package_booking_id` int(5) NOT NULL,
  `Vehicle_rent_id` int(5) NOT NULL,
  `Daily_booking_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(5) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Email`, `Password`) VALUES
(2, 'rajshree', '123'),
(3, 'avani133@gmail.com', 'avani123'),
(4, 'avani1303@gmail.com', 'a1303');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `Package_booking_id` int(5) NOT NULL,
  `Cust_id` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Package_id` int(5) NOT NULL,
  `No_of_seat` int(10) NOT NULL,
  `Total_amount` int(10) NOT NULL,
  `Paid_amount` int(10) DEFAULT '0',
  `Remain_amount` int(10) DEFAULT '0',
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_booking`
--

INSERT INTO `package_booking` (`Package_booking_id`, `Cust_id`, `Date`, `Package_id`, `No_of_seat`, `Total_amount`, `Paid_amount`, `Remain_amount`, `status`) VALUES
(2, 23, '2017-04-19', 11, 2, 10800, 0, 0, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `package_detail`
--

CREATE TABLE `package_detail` (
  `Package_detail_id` int(5) NOT NULL,
  `Package_id` int(11) NOT NULL,
  `Vehicle_type_id` int(10) NOT NULL,
  `Facility_type_id` int(10) NOT NULL,
  `Seat_type_id` int(10) NOT NULL,
  `Places` varchar(1000) NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Price` int(10) NOT NULL,
  `Hotel` varchar(250) NOT NULL,
  `Meal` varchar(30) NOT NULL,
  `Overview` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_detail`
--

INSERT INTO `package_detail` (`Package_detail_id`, `Package_id`, `Vehicle_type_id`, `Facility_type_id`, `Seat_type_id`, `Places`, `Start_date`, `End_date`, `Price`, `Hotel`, `Meal`, `Overview`) VALUES
(21, 11, 7, 1, 2, 'Cheeyappara Waterfalls, Photo Point, Top Station, Eravikulam National Park, Echo Point, Mattupetty, Tea Museam, Anamudi Peak, Flower Garden', '2017-05-25', '2017-05-28', 5400, 'Bella Vista Resortor Similar 3 Star', 'As per hotel plan', 'Enjoy the magic of Munnar, a hill station located in the Western Ghats of Kerala. Wreathed with rolling hills and lush green tea plantations, this popular destination attracts tourists from near and far. During this 3-day tour, visit Eravikulam National Park, a home to the endangered mountain goat - Nilgiri Tahr. The panoramic beauty of Echo Point, Anamudi Peak, Mattupetty Dam, and Top Station is indeed a treat to the eyes. Enjoy the refreshing atmosphere that surrounds you and feel rejuvenated as you fall in love with the romantic ambiance of Munnar.'),
(22, 12, 8, 1, 3, 'Jantar Mantar, City Palace, Hawa Mahal, Nahargarh Fort, Jaigarh Fort, Amber Fort, Ganesha Temple, Jungle Safari, Ranthambore Fort', '2017-06-04', '2017-06-08', 10625, 'Hyphen Ujjwal Premieror Similar 3 Star, Hotel Ananta Palaceor Similar 3 Star', 'As per hotel plan', 'Take this 5-day trip and visit the enthralling capital of Rajasthan, Jaipur. India\'s most colourful and flamboyant city, Jaipur is dotted with places of historical and cultural importance. The streets are lined with brightly decorated auto-rickshaws, dawdling camels and vibrant markets. Often termed as the \'Pink City\' because of its distinctly coloured buildings, Jaipur is a leading tourist destination in the world. Also explore the forts and wildlife of Ranthambore while on this tour. When in Jaupur, visit the City Palace, Hawa Mahal, JantarMantar, various museums and local markets. Also revel in the grandeur of the Amber Fort while taking in the sights of the Pink City.');

-- --------------------------------------------------------

--
-- Table structure for table `package_hotel_detail`
--

CREATE TABLE `package_hotel_detail` (
  `Package_hotel_id` int(5) NOT NULL,
  `Package_id` int(5) NOT NULL,
  `City_id` int(5) NOT NULL,
  `Hotel_id` int(5) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_master`
--

CREATE TABLE `package_master` (
  `Package_id` int(5) NOT NULL,
  `Package_name` varchar(35) NOT NULL,
  `Tour_id` int(5) NOT NULL,
  `master_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_master`
--

INSERT INTO `package_master` (`Package_id`, `Package_name`, `Tour_id`, `master_img`) VALUES
(11, 'Kerala Special  Romantic Munnar', 7, 'kerala(2).jpg'),
(12, 'Alluring Jaipur', 8, 'jaipur.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package_place`
--

CREATE TABLE `package_place` (
  `Package_place_id` int(5) NOT NULL,
  `Package_id` int(5) NOT NULL,
  `Places` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_route_detail`
--

CREATE TABLE `package_route_detail` (
  `Package_route_id` int(5) NOT NULL,
  `Package_id` int(5) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_tour`
--

CREATE TABLE `package_tour` (
  `Tour_id` int(5) NOT NULL,
  `Tour_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_tour`
--

INSERT INTO `package_tour` (`Tour_id`, `Tour_name`) VALUES
(7, 'Couple -Tour'),
(8, 'Group-Tour');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(5) NOT NULL,
  `Package_booking_id` int(5) NOT NULL,
  `Vehicle_booking_id` int(5) NOT NULL,
  `Daily_booking_id` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Total_amount` int(10) NOT NULL,
  `Paid_amount` int(10) NOT NULL,
  `Remain_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `Place_id` int(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `City_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`Place_id`, `Name`, `City_id`) VALUES
(1, 'Mahatma Mandir', 19);

-- --------------------------------------------------------

--
-- Table structure for table `rout_via`
--

CREATE TABLE `rout_via` (
  `Daily_route_id` int(11) NOT NULL,
  `City_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seat_detail`
--

CREATE TABLE `seat_detail` (
  `Seat_detail_id` int(10) NOT NULL,
  `Vehicle_type_id` int(10) NOT NULL,
  `Booked_seat` int(10) NOT NULL,
  `Remain_seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seat_type`
--

CREATE TABLE `seat_type` (
  `Seat_type_id` int(11) NOT NULL,
  `Seat_type_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_type`
--

INSERT INTO `seat_type` (`Seat_type_id`, `Seat_type_name`) VALUES
(2, 'Seater'),
(3, 'Sleeper');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_id` int(5) NOT NULL,
  `State_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_id`, `State_name`) VALUES
(8, 'Gujarat'),
(18, 'Rajsthan');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle_id` int(5) NOT NULL,
  `Vehicle_type_id` int(5) NOT NULL,
  `Per_km_charge` int(5) NOT NULL,
  `Minimum_charge` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_booking`
--

CREATE TABLE `vehicle_booking` (
  `Vehicle_booking_id` int(5) NOT NULL,
  `Vehicle_type_id` int(5) NOT NULL,
  `Cust_id` int(5) NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Booking_date` date NOT NULL,
  `Deposit` int(10) DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_booking`
--

INSERT INTO `vehicle_booking` (`Vehicle_booking_id`, `Vehicle_type_id`, `Cust_id`, `Start_date`, `End_date`, `Booking_date`, `Deposit`, `status`) VALUES
(4, 8, 23, '2017-05-19', '2017-05-21', '2017-04-19', NULL, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_rent`
--

CREATE TABLE `vehicle_rent` (
  `Vehicle_rent_id` int(5) NOT NULL,
  `Vehicle_booking_id` int(5) NOT NULL,
  `Travel_km` int(10) NOT NULL,
  `Total_amount` int(10) NOT NULL,
  `Final_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `Vehicle_type_id` int(10) NOT NULL,
  `Vehicle_type_name` varchar(30) NOT NULL,
  `Facility_type_id` int(10) NOT NULL,
  `Seat_type_id` int(10) NOT NULL,
  `Total_no_of_seat` int(20) NOT NULL,
  `Per_km_charge` int(20) NOT NULL,
  `Minimum_charge` int(10) NOT NULL,
  `Seat_mode` varchar(10) NOT NULL,
  `Emp_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`Vehicle_type_id`, `Vehicle_type_name`, `Facility_type_id`, `Seat_type_id`, `Total_no_of_seat`, `Per_km_charge`, `Minimum_charge`, `Seat_mode`, `Emp_id`) VALUES
(7, 'Luxury Bus', 1, 2, 29, 34, 6500, '2/2', 6),
(8, 'Luxury Bus', 1, 2, 29, 34, 6500, '2/2', 6),
(9, 'Luxury Bus', 2, 2, 32, 25, 6000, '3/2', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancelation_booking`
--
ALTER TABLE `cancelation_booking`
  ADD PRIMARY KEY (`Cancelation_id`),
  ADD KEY `Package_booking_id` (`Package_booking_id`),
  ADD KEY `Vehicle_booking_id` (`Vehicle_booking_id`),
  ADD KEY `Daily_booking_id` (`Daily_booking_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_id`),
  ADD KEY `State_id` (`State_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_id`);

--
-- Indexes for table `daily_booking`
--
ALTER TABLE `daily_booking`
  ADD PRIMARY KEY (`Daily_booking_id`),
  ADD KEY `Cust_id` (`Cust_id`),
  ADD KEY `Daily_route_id` (`Daily_route_id`);

--
-- Indexes for table `daily_route_detail`
--
ALTER TABLE `daily_route_detail`
  ADD PRIMARY KEY (`Daily_route_id`),
  ADD KEY `Facility_type_id` (`Facility_type_id`),
  ADD KEY `Seat_type_id` (`Seat_type_id`),
  ADD KEY `Vehicle_type_id` (`Vehicle_type_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`Des_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_id`),
  ADD KEY `Des_id` (`Des_id`);

--
-- Indexes for table `facility_type`
--
ALTER TABLE `facility_type`
  ADD PRIMARY KEY (`Facility_type_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_id`),
  ADD KEY `Cust_id` (`Cust_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_id`),
  ADD KEY `City_id` (`City_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inq_id`),
  ADD KEY `Cust_id` (`Cust_id`),
  ADD KEY `Vehicle_id` (`Vehicle_id`),
  ADD KEY `Daily_route_id` (`Daily_route_id`),
  ADD KEY `Package_id` (`Package_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_id`),
  ADD KEY `Cust_id` (`Cust_id`),
  ADD KEY `Package_booking_id` (`Package_booking_id`),
  ADD KEY `Vehicle_booking_id` (`Vehicle_rent_id`),
  ADD KEY `Daily_booking_id` (`Daily_booking_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD PRIMARY KEY (`Package_booking_id`),
  ADD KEY `Cust_id` (`Cust_id`),
  ADD KEY `Package_detail_id` (`Package_id`),
  ADD KEY `Cust_id_2` (`Cust_id`);

--
-- Indexes for table `package_detail`
--
ALTER TABLE `package_detail`
  ADD PRIMARY KEY (`Package_detail_id`),
  ADD KEY `Vehicle_type_id` (`Vehicle_type_id`),
  ADD KEY `Package_id` (`Package_id`),
  ADD KEY `Facility_type_id` (`Facility_type_id`,`Seat_type_id`),
  ADD KEY `Seat_type_id` (`Seat_type_id`);

--
-- Indexes for table `package_hotel_detail`
--
ALTER TABLE `package_hotel_detail`
  ADD PRIMARY KEY (`Package_hotel_id`),
  ADD KEY `Package_id` (`Package_id`),
  ADD KEY `City_id` (`City_id`),
  ADD KEY `Hotel_id` (`Hotel_id`);

--
-- Indexes for table `package_master`
--
ALTER TABLE `package_master`
  ADD PRIMARY KEY (`Package_id`),
  ADD KEY `Tour_id` (`Tour_id`);

--
-- Indexes for table `package_place`
--
ALTER TABLE `package_place`
  ADD PRIMARY KEY (`Package_place_id`),
  ADD KEY `Package_id` (`Package_id`);

--
-- Indexes for table `package_route_detail`
--
ALTER TABLE `package_route_detail`
  ADD PRIMARY KEY (`Package_route_id`),
  ADD KEY `Package_id` (`Package_id`);

--
-- Indexes for table `package_tour`
--
ALTER TABLE `package_tour`
  ADD PRIMARY KEY (`Tour_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `Package_booking_id` (`Package_booking_id`),
  ADD KEY `Vehicle_booking_id` (`Vehicle_booking_id`),
  ADD KEY `Daily_booking_id` (`Daily_booking_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`Place_id`),
  ADD KEY `City_id` (`City_id`);

--
-- Indexes for table `rout_via`
--
ALTER TABLE `rout_via`
  ADD PRIMARY KEY (`Daily_route_id`,`City_id`),
  ADD KEY `Daily_route_id` (`Daily_route_id`,`City_id`),
  ADD KEY `City_id` (`City_id`);

--
-- Indexes for table `seat_detail`
--
ALTER TABLE `seat_detail`
  ADD PRIMARY KEY (`Seat_detail_id`);

--
-- Indexes for table `seat_type`
--
ALTER TABLE `seat_type`
  ADD PRIMARY KEY (`Seat_type_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`Vehicle_id`),
  ADD KEY `Facility_type_id` (`Vehicle_type_id`);

--
-- Indexes for table `vehicle_booking`
--
ALTER TABLE `vehicle_booking`
  ADD PRIMARY KEY (`Vehicle_booking_id`),
  ADD KEY `Vehicle_id` (`Vehicle_type_id`),
  ADD KEY `Cust_id` (`Cust_id`);

--
-- Indexes for table `vehicle_rent`
--
ALTER TABLE `vehicle_rent`
  ADD PRIMARY KEY (`Vehicle_rent_id`),
  ADD KEY `Vehicle_booking_id` (`Vehicle_booking_id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`Vehicle_type_id`),
  ADD KEY `Facility_type_id` (`Facility_type_id`,`Seat_type_id`),
  ADD KEY `Emp_id` (`Emp_id`),
  ADD KEY `Seat_type_id` (`Seat_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancelation_booking`
--
ALTER TABLE `cancelation_booking`
  MODIFY `Cancelation_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `daily_booking`
--
ALTER TABLE `daily_booking`
  MODIFY `Daily_booking_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daily_route_detail`
--
ALTER TABLE `daily_route_detail`
  MODIFY `Daily_route_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `Des_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `facility_type`
--
ALTER TABLE `facility_type`
  MODIFY `Facility_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hotel_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inq_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Invoice_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `Package_booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `package_detail`
--
ALTER TABLE `package_detail`
  MODIFY `Package_detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `package_hotel_detail`
--
ALTER TABLE `package_hotel_detail`
  MODIFY `Package_hotel_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package_master`
--
ALTER TABLE `package_master`
  MODIFY `Package_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `package_place`
--
ALTER TABLE `package_place`
  MODIFY `Package_place_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package_route_detail`
--
ALTER TABLE `package_route_detail`
  MODIFY `Package_route_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package_tour`
--
ALTER TABLE `package_tour`
  MODIFY `Tour_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `Place_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seat_detail`
--
ALTER TABLE `seat_detail`
  MODIFY `Seat_detail_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seat_type`
--
ALTER TABLE `seat_type`
  MODIFY `Seat_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `State_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `Vehicle_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_booking`
--
ALTER TABLE `vehicle_booking`
  MODIFY `Vehicle_booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vehicle_rent`
--
ALTER TABLE `vehicle_rent`
  MODIFY `Vehicle_rent_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `Vehicle_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cancelation_booking`
--
ALTER TABLE `cancelation_booking`
  ADD CONSTRAINT `cancelation_booking_ibfk_1` FOREIGN KEY (`Package_booking_id`) REFERENCES `package_booking` (`Package_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cancelation_booking_ibfk_2` FOREIGN KEY (`Vehicle_booking_id`) REFERENCES `vehicle_booking` (`Vehicle_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cancelation_booking_ibfk_3` FOREIGN KEY (`Daily_booking_id`) REFERENCES `daily_booking` (`Daily_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`State_id`) REFERENCES `state` (`State_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daily_booking`
--
ALTER TABLE `daily_booking`
  ADD CONSTRAINT `daily_booking_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daily_booking_ibfk_2` FOREIGN KEY (`Daily_route_id`) REFERENCES `daily_route_detail` (`Daily_route_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daily_route_detail`
--
ALTER TABLE `daily_route_detail`
  ADD CONSTRAINT `daily_route_detail_ibfk_1` FOREIGN KEY (`Facility_type_id`) REFERENCES `facility_type` (`Facility_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daily_route_detail_ibfk_2` FOREIGN KEY (`Seat_type_id`) REFERENCES `seat_type` (`Seat_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daily_route_detail_ibfk_3` FOREIGN KEY (`Vehicle_type_id`) REFERENCES `vehicle_type` (`Vehicle_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Des_id`) REFERENCES `designation` (`Des_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`City_id`) REFERENCES `city` (`City_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inquiry_ibfk_2` FOREIGN KEY (`Vehicle_id`) REFERENCES `vehicle` (`Vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inquiry_ibfk_3` FOREIGN KEY (`Daily_route_id`) REFERENCES `daily_route_detail` (`Daily_route_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inquiry_ibfk_4` FOREIGN KEY (`Package_id`) REFERENCES `package_master` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`Package_booking_id`) REFERENCES `package_booking` (`Package_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`Vehicle_rent_id`) REFERENCES `vehicle_rent` (`Vehicle_rent_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_4` FOREIGN KEY (`Daily_booking_id`) REFERENCES `daily_booking` (`Daily_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD CONSTRAINT `package_booking_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_booking_ibfk_2` FOREIGN KEY (`Package_id`) REFERENCES `package_master` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_detail`
--
ALTER TABLE `package_detail`
  ADD CONSTRAINT `package_detail_ibfk_1` FOREIGN KEY (`Vehicle_type_id`) REFERENCES `vehicle_type` (`Vehicle_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_detail_ibfk_2` FOREIGN KEY (`Package_id`) REFERENCES `package_master` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_detail_ibfk_3` FOREIGN KEY (`Facility_type_id`) REFERENCES `facility_type` (`Facility_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_detail_ibfk_4` FOREIGN KEY (`Seat_type_id`) REFERENCES `seat_type` (`Seat_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_hotel_detail`
--
ALTER TABLE `package_hotel_detail`
  ADD CONSTRAINT `package_hotel_detail_ibfk_1` FOREIGN KEY (`Package_id`) REFERENCES `package_master` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_hotel_detail_ibfk_2` FOREIGN KEY (`City_id`) REFERENCES `city` (`City_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_hotel_detail_ibfk_3` FOREIGN KEY (`Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_master`
--
ALTER TABLE `package_master`
  ADD CONSTRAINT `package_master_ibfk_1` FOREIGN KEY (`Tour_id`) REFERENCES `package_tour` (`Tour_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_place`
--
ALTER TABLE `package_place`
  ADD CONSTRAINT `package_place_ibfk_1` FOREIGN KEY (`Package_id`) REFERENCES `package_master` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_route_detail`
--
ALTER TABLE `package_route_detail`
  ADD CONSTRAINT `package_route_detail_ibfk_1` FOREIGN KEY (`Package_id`) REFERENCES `package_master` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Package_booking_id`) REFERENCES `package_booking` (`Package_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`Vehicle_booking_id`) REFERENCES `vehicle_booking` (`Vehicle_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`Daily_booking_id`) REFERENCES `daily_booking` (`Daily_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`City_id`) REFERENCES `city` (`City_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rout_via`
--
ALTER TABLE `rout_via`
  ADD CONSTRAINT `rout_via_ibfk_1` FOREIGN KEY (`Daily_route_id`) REFERENCES `daily_route_detail` (`Daily_route_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rout_via_ibfk_2` FOREIGN KEY (`City_id`) REFERENCES `city` (`City_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle_booking`
--
ALTER TABLE `vehicle_booking`
  ADD CONSTRAINT `vehicle_booking_ibfk_1` FOREIGN KEY (`Vehicle_type_id`) REFERENCES `vehicle_type` (`Vehicle_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicle_booking_ibfk_2` FOREIGN KEY (`Cust_id`) REFERENCES `customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle_rent`
--
ALTER TABLE `vehicle_rent`
  ADD CONSTRAINT `vehicle_rent_ibfk_1` FOREIGN KEY (`Vehicle_booking_id`) REFERENCES `vehicle_booking` (`Vehicle_booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD CONSTRAINT `vehicle_type_ibfk_1` FOREIGN KEY (`Facility_type_id`) REFERENCES `facility_type` (`Facility_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicle_type_ibfk_2` FOREIGN KEY (`Seat_type_id`) REFERENCES `seat_type` (`Seat_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicle_type_ibfk_3` FOREIGN KEY (`Emp_id`) REFERENCES `employee` (`Emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
