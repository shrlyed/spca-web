-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 10:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spca_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `id_adoption` int(4) NOT NULL,
  `name` text NOT NULL,
  `nric` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_num` int(255) NOT NULL,
  `animal_name` text NOT NULL,
  `animal_id` int(4) NOT NULL,
  `vax_neuter` text NOT NULL,
  `surrender` text NOT NULL,
  `inspectoration` text NOT NULL,
  `adopt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id_adoption`, `name`, `nric`, `address`, `email`, `phone_num`, `animal_name`, `animal_id`, `vax_neuter`, `surrender`, `inspectoration`, `adopt_date`) VALUES
(12, 'Sarah', 2147483647, 'Sandakan, Sabah', 'sarah@gmail.com', 197886721, 'Perry', 1, 'yes', 'yes', 'yes', '2022-06-12'),
(13, 'Syazzwa Natasya', 2147483647, 'Taman Permata, Sandakan', 'syazzwa@gmail.com', 127878262, 'Tiger', 19, 'yes', 'yes', 'yes', '2022-06-16'),
(15, 'Ain Nadiatul Alwani binti Rehimin', 990715, 'Kampung Tamalang, 89300 Ranau, Sabah', 'ain@gmail.com', 198887656, 'Puyen', 23, 'yes', 'yes', 'yes', '2022-06-16'),
(16, 'AINUL AKMAL MUKMIN HAKIM', 2147483647, 'KOLEJ SAKURA UNIMAS', 'nel@gmail.com', 138930645, 'Puyen', 23, 'no', 'yes', 'yes', '2022-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id_cat` int(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id_cat`, `image`, `name`, `age`, `gender`, `description`) VALUES
(21, 'cat3.jpg', 'Max', '2 years', 'Male', 'Love to eat and cuddle with the SPCA workers.'),
(23, 'cat10.jpg', 'Puyen', '6 months', 'Male', 'Spoiled cat, just give him some love and he will cuddle with you forever.'),
(24, 'cat16.jpg', 'Gugu', '4 months', 'Female', 'Will follow you everywhere if you treat it right.'),
(25, 'cat5.jpg', 'Mari', '2 years', 'Male', 'Mari is very handsome but very fierce cat');

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `id_dog` int(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog`
--

INSERT INTO `dog` (`id_dog`, `image`, `name`, `age`, `gender`, `description`) VALUES
(8, 'dog12.jpg', 'Bailey', '4 months', 'Male', 'Sweet blind puppy. He is friendly with other dogs and cats. '),
(9, 'dog2.jpg', 'Blacky', '2 years', 'Female', 'She was found at the road when she was small. Luckily, good man come to rescue and bring her to SPCA Sandakan Animal Adoption centre.'),
(11, 'dog11.jpg', 'Brown', '1 year', 'Female', 'Shy dog and once you warms him up, he will be your best companion ever!');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id_enquiry` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id_enquiry`, `name`, `email`, `subject`, `message`) VALUES
(10, 'John', 'john@gmail.com', 'Animal adoption ', 'Hi, I would like to ask what is the requirement to adopt an animal?'),
(11, 'Ainnadiatul', 'ainnadiatul@gmail.com', 'Adoption process', 'How long will the adoption process take?'),
(12, 'Khaziqah', 'khaz@gmail.com', 'Adoption fee', 'Is there any adoption fees?'),
(14, 'nel', 'nel@gmail.com', 'animals availability', 'do you only have cats and dogs for adoption? what about rabbits?'),
(17, 'Rahdika Nadarajan', 'rahde145love@gmail.com', 'Dog Adoption', 'I would like what are the rules and regulations regarding dog adoption.'),
(19, 'Aishah', 'aishahrafiq9@gmail.com', 'Cats Adoption', 'How do I proceed with the adoption process? (testing)');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_admin` int(4) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_admin`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id_adoption`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id_dog`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id_enquiry`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id_adoption` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id_cat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `id_dog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id_enquiry` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
