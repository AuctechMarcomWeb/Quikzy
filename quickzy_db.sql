-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2026 at 01:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickzy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `name`, `email`, `password`, `confirm_password`) VALUES
(1, 'Quickzy', 'quickzycabs@gmail.com', '$2y$10$mwob9oUY/jl6GWyVSh7if.5vrH.CynoYWcssi7pe0QwujUbR9dLfS', '$2y$10$mwob9oUY/jl6GWyVSh7if.5vrH.CynoYWcssi7pe0QwujUbR9dLfS');

-- --------------------------------------------------------

--
-- Table structure for table `cab_bookings`
--

CREATE TABLE `cab_bookings` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `start_destination` varchar(255) NOT NULL,
  `end_destination` varchar(255) NOT NULL,
  `pickup_time` varchar(20) NOT NULL,
  `return_time` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiries`
--

CREATE TABLE `contact_inquiries` (
  `sno` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `occupation` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `added_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `added_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `review`, `designation`, `image_path`, `added_date`) VALUES
(2, 'Aman Akhtar', 'Quikzy Cabs ne mera daily office travel ka tension almost khatam kar diya hai. Pickup always on time hota hai aur ride comfortable rehti hai. Very reliable service.', 'Software Engineer', 'testimonial_uploads/testimonial_69a562dd2c018.png', '2026-03-02'),
(3, 'Neha Verma', 'I use their shared cab service daily and honestly it’s very well managed. Drivers polite hote hain aur timing proper follow hoti hai. Good experience so far.', 'HR Executive', 'testimonial_uploads/testimonial_69a562fcc8676.png', '2026-03-02'),
(4, 'Rahul Mehta', 'Monthly package liya hai and it’s totally worth it. Cost bhi reasonable hai aur daily booking ka headache nahi rehta. Smooth and hassle-free service.', 'IT Professional', 'testimonial_uploads/testimonial_69a563156380d.png', '2026-03-02'),
(5, 'Pooja Malhotra', 'Weekly ride package try kiya tha and it worked perfectly for my shift timings. Hassle-free travel solution for office goers.', 'Marketing Manager', 'testimonial_uploads/testimonial_69a5634c892b2.png', '2026-03-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `cab_bookings`
--
ALTER TABLE `cab_bookings`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cab_bookings`
--
ALTER TABLE `cab_bookings`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
