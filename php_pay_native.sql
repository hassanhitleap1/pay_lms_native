-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 04:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_pay_native`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_custum`
--

CREATE TABLE `card_custum` (
  `id` int(11) NOT NULL,
  `number` int(14) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `used` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_custum`
--

INSERT INTO `card_custum` (`id`, `number`, `created_at`, `used`) VALUES
(1, 999999999, '2019-04-29 13:27:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_custum`
--
ALTER TABLE `card_custum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_custum`
--
ALTER TABLE `card_custum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `card_custum` CHANGE `number` `number` VARCHAR(14) NOT NULL;


CREATE TABLE `php_pay_native`.`try_enterd_card` ( `id` INT NOT NULL AUTO_INCREMENT , `date` TIMESTAMP NOT NULL , `user_id` INT NOT NULL , `card_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



ALTER TABLE `try_enterd_card` ADD `success` TINYINT NOT NULL AFTER `card_id`;