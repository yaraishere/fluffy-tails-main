-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 09:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fluffy_tails`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptions_tr`
--

CREATE TABLE `adoptions_tr` (
  `atr_id` char(6) NOT NULL,
  `atr_name` varchar(255) DEFAULT NULL,
  `atr_dob` date DEFAULT NULL,
  `atr_occupation` varchar(100) DEFAULT NULL,
  `atr_earnings` int(20) DEFAULT NULL,
  `atr_address` varchar(100) DEFAULT NULL,
  `atr_phoneNumber` varchar(15) DEFAULT NULL,
  `atr_email` varchar(100) DEFAULT NULL,
  `atr_appoinment` date DEFAULT NULL,
  `atr_pet_id` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoptions_tr`
--

INSERT INTO `adoptions_tr` (`atr_id`, `atr_name`, `atr_dob`, `atr_occupation`, `atr_earnings`, `atr_address`, `atr_phoneNumber`, `atr_email`, `atr_appoinment`, `atr_pet_id`) VALUES
('ATR001', 'Adri Bambang', '1994-05-27', 'Teacher', 8000000, 'Jakarta', '081283728291', 'adrib003@email.com', '2024-05-13', 'PI0012');

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `breed_id` char(6) NOT NULL,
  `breed_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`breed_id`, `breed_name`) VALUES
('BR0001', 'Persian'),
('BR0002', 'Maine Coon'),
('BR0003', 'Siamese'),
('BR0004', 'Ragdoll'),
('BR0005', 'Bengal'),
('BR0006', 'Sphynx'),
('BR0007', 'British Shorthair'),
('BR0008', 'Abyssinian'),
('BR0009', 'Birman'),
('BR0010', 'American Shorthair'),
('BR0011', 'Scottish Fold'),
('BR0012', 'Devon Rex'),
('BR0013', 'Oriental Shorthair'),
('BR0014', 'Siberian'),
('BR0015', 'Norwegian Forest Cat'),
('BR0016', 'Himalayan'),
('BR0017', 'Exotic Shorthair'),
('BR0018', 'Russian Blue'),
('BR0019', 'Savannah'),
('BR0020', 'Tonkinese'),
('BR0021', 'Labrador Retriever'),
('BR0022', 'French Bulldog'),
('BR0023', 'German Shepherd'),
('BR0024', 'Golden Retriever'),
('BR0025', 'Bulldog'),
('BR0026', 'Poodle'),
('BR0027', 'Beagle'),
('BR0028', 'Rottweiler'),
('BR0029', 'Yorkshire Terrier'),
('BR0030', 'Dachshund'),
('BR0031', 'Boxer'),
('BR0032', 'Siberian Husky'),
('BR0033', 'Great Dane'),
('BR0034', 'Pembroke Welsh Corgi'),
('BR0035', 'Doberman Pinscher'),
('BR0036', 'Australian Shepherd'),
('BR0037', 'Cavalier King Charles Spaniel'),
('BR0038', 'Shih Tzu'),
('BR0039', 'Boston Terrier'),
('BR0040', 'Pomeranian');

-- --------------------------------------------------------

--
-- Table structure for table `cares`
--

CREATE TABLE `cares` (
  `care_id` char(6) NOT NULL,
  `care_name` varchar(100) NOT NULL,
  `care_description` varchar(255) DEFAULT NULL,
  `care_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cares`
--

INSERT INTO `cares` (`care_id`, `care_name`, `care_description`, `care_img`) VALUES
('CI0001', 'Paw Pad Care', 'Provides specialized paw pad care services to keep your pet\'s paws healthy and soft', 'paw-pad-care.jpg'),
('CI0002', 'Flea and Tick Treatments', 'Provides comprehensive flea and tick services to protect your furry friend from pests', 'flea-and-tick-treatments.jpg'),
('CI0003', 'Deshedding Treatment', 'Provides expert deshedding services to keep your furry friend\'s coat healthy and clean', 'deshedding.jpg'),
('CI0004', 'Sanitary Trims', 'Provides sanitary trims services to ensure your pet stays clean and comfortable', 'sanitary-trims.jpg'),
('CI0005', 'Grooming', 'Treat your pet to a pampering session in a safe and friendly environment!', 'grooming.jpg'),
('CI0006', 'Hair Trimming', 'Provides professional hair trimming services to keep your furry friend looking their best', 'hair-trimming.jpg'),
('CI0007', 'Ear-cleaning Services', 'Offers professional ear cleaning services to keep your pet\'s ears healthy and free from infections', 'ear-cleaning.jpg'),
('CI0008', 'Teeth Cleaning', 'Provides professional teeth cleaning services to keep your pet\'s smile healthy and bright by using safe and effective techniques', 'teeth-cleaning.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cares_tr`
--

CREATE TABLE `cares_tr` (
  `ct_id` char(6) NOT NULL,
  `ct_pet_name` varchar(100) DEFAULT NULL,
  `ct_pet_age` int(5) DEFAULT NULL,
  `ct_pet_type` varchar(100) DEFAULT NULL,
  `ct_breed` varchar(100) DEFAULT NULL,
  `ct_phone_number` varchar(15) DEFAULT NULL,
  `ct_email` varchar(255) DEFAULT NULL,
  `ct_appoinment` date DEFAULT NULL,
  `ct_time` time DEFAULT NULL,
  `ct_care_id` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cares_tr`
--

INSERT INTO `cares_tr` (`ct_id`, `ct_pet_name`, `ct_pet_age`, `ct_pet_type`, `ct_breed`, `ct_phone_number`, `ct_email`, `ct_appoinment`, `ct_time`, `ct_care_id`) VALUES
('CT0001', 'Bagas Jo', 12, 'Dog', 'Pomerian', '081293023982', 'bagas.jo@gmail.com', '2024-05-15', '13:00:00', 'CI0003');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` char(6) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_quantity` int(10) DEFAULT NULL,
  `item_price` int(10) DEFAULT NULL,
  `item_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_quantity`, `item_price`, `item_img`) VALUES
('II0001', 'Mouse Toy', 10, 30000, 'mouse-toy.jpg'),
('II0002', 'Whiskas Cat Food', 20, 50000, 'whiskas.jpg'),
('II0003', 'Pedigree Dog Food', 30, 100000, 'pedigree.jpg'),
('II0004', 'Pedigree Jerky Treat', 13, 90000, 'pedigree-treats-jerky.jpg'),
('II0005', 'Dog Leash', 0, 40000, 'dog-leash.jpg'),
('II0006', 'Cat Snack', 23, 20000, 'cat-snack-creamy-treat.jpg'),
('II0007', 'Dog Bone', 18, 30000, 'dog-bone.jpg'),
('II0008', 'Toy Ball', 9, 50000, 'toy-ball.jpg'),
('II0009', 'Cat Scratching Post', 4, 300000, 'cat-scratching-post.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pet_id` char(6) NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `pet_age` int(11) NOT NULL,
  `pet_category_id` char(6) NOT NULL,
  `pet_gender` varchar(100) DEFAULT NULL,
  `pet_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`pet_id`, `pet_name`, `pet_age`, `pet_category_id`, `pet_gender`, `pet_image`) VALUES
('PI0001', 'Whiskers', 4, 'PC0001', 'Male', '1'),
('PI0002', 'Gyoza', 24, 'PC0007', 'Female', '2'),
('PI0003', 'Charlie', 8, 'PC0025', 'Male', '3'),
('PI0004', 'Oliver', 25, 'PC0009', 'Male', '4'),
('PI0005', 'Teddy', 10, 'PC0031', 'Male', '5'),
('PI0006', 'Roxy', 23, 'PC0034', 'Female', '6'),
('PI0007', 'Fred', 29, 'PC0014', 'Male', '7'),
('PI0008', 'Luna', 10, 'PC0019', 'Female', '8'),
('PI0009', 'Nala', 14, 'PC0018', 'Female', '9'),
('PI0010', 'Piere', 23, 'PC0026', 'Male', '10'),
('PI0011', 'Caroline', 10, 'PC0030', 'Female', '11'),
('PI0012', 'Abby', 16, 'PC0020', 'Female', '12'),
('PI0013', 'Chloe', 36, 'PC0007', 'Female', '13'),
('PI0014', 'Dennis', 6, 'PC0037', 'Male', '14'),
('PI0015', 'Bian', 4, 'PC0021', 'Male', '15'),
('PI0016', 'Lolitta', 9, 'PC0035', 'Female', '16'),
('PI0017', 'Milo', 30, 'PC0013', 'Female', '17'),
('PI0018', 'Daisy', 21, 'PC0010', 'Female', '18'),
('PI0019', 'Sophie', 5, 'PC0012', 'Female', '19'),
('PI0020', 'Shane', 20, 'PC0030', 'Male', '20'),
('PI0021', 'Harris', 7, 'PC0029', 'Male', '21'),
('PI0022', 'Zoe', 9, 'PC0002', 'Female', '22'),
('PI0023', 'Gizmo', 23, 'PC0004', 'Male', '23'),
('PI0024', 'Jo', 20, 'PC0023', 'Male', '24'),
('PI0025', 'Kaori', 10, 'PC0039', 'Female', '25'),
('PI0026', 'Moly', 42, 'PC0004', 'Female', '26'),
('PI0027', 'Maro', 37, 'PC0037', 'Male', '27'),
('PI0028', 'Hori', 22, 'PC0034', 'Male', '28'),
('PI0029', 'Ash', 10, 'PC0014', 'Female', '29'),
('PI0030', 'Bosque', 4, 'PC0007', 'Male', '30'),
('PI0031', 'Lika', 30, 'PC0016', 'Female', '31'),
('PI0032', 'Leo', 3, 'PC0018', 'Male', '32'),
('PI0033', 'Riri', 5, 'PC0017', 'Female', '33'),
('PI0034', 'Poo', 8, 'PC0034', 'Female', '34'),
('PI0035', 'Harry', 9, 'PC0017', 'Male', '35'),
('PI0036', 'Max', 10, 'PC0008', 'Male', '36'),
('PI0037', 'Lily', 14, 'PC0016', 'Female', '37'),
('PI0038', 'Mund', 20, 'PC0027', 'Male', '38'),
('PI0039', 'Loko', 13, 'PC0023', 'Male', '39'),
('PI0040', 'Koshka', 24, 'PC0030', 'Female', '40'),
('PI0041', 'Jul', 12, 'PC0038', 'Male', '41'),
('PI0042', 'Jack', 16, 'PC0033', 'Male', '42'),
('PI0043', 'Juno', 20, 'PC0002', 'Male', '43'),
('PI0044', 'Kiri', 39, 'PC0019', 'Female', '44'),
('PI0045', 'Bella', 10, 'PC0027', 'Female', '45'),
('PI0046', 'Henry', 26, 'PC0026', 'Male', '46'),
('PI0047', 'Gus', 34, 'PC0034', 'Male', '47'),
('PI0048', 'Hakka', 19, 'PC0018', 'Male', '48'),
('PI0049', 'Salmon', 8, 'PC0040', 'Male', '49'),
('PI0050', 'Lola', 9, 'PC0038', 'Female', '50');

-- --------------------------------------------------------

--
-- Table structure for table `pet_category`
--

CREATE TABLE `pet_category` (
  `pet_category_id` char(6) NOT NULL,
  `pet_category` varchar(100) DEFAULT NULL,
  `breed_id` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_category`
--

INSERT INTO `pet_category` (`pet_category_id`, `pet_category`, `breed_id`) VALUES
('PC0001', 'Cat', 'BR0001'),
('PC0002', 'Cat', 'BR0002'),
('PC0003', 'Cat', 'BR0003'),
('PC0004', 'Cat', 'BR0004'),
('PC0005', 'Cat', 'BR0005'),
('PC0006', 'Cat', 'BR0006'),
('PC0007', 'Cat', 'BR0007'),
('PC0008', 'Cat', 'BR0008'),
('PC0009', 'Cat', 'BR0009'),
('PC0010', 'Cat', 'BR0010'),
('PC0011', 'Cat', 'BR0011'),
('PC0012', 'Cat', 'BR0012'),
('PC0013', 'Cat', 'BR0013'),
('PC0014', 'Cat', 'BR0014'),
('PC0015', 'Cat', 'BR0015'),
('PC0016', 'Cat', 'BR0016'),
('PC0017', 'Cat', 'BR0017'),
('PC0018', 'Cat', 'BR0018'),
('PC0019', 'Cat', 'BR0019'),
('PC0020', 'Cat', 'BR0020'),
('PC0021', 'Dog', 'BR0021'),
('PC0022', 'Dog', 'BR0022'),
('PC0023', 'Dog', 'BR0023'),
('PC0024', 'Dog', 'BR0024'),
('PC0025', 'Dog', 'BR0025'),
('PC0026', 'Dog', 'BR0026'),
('PC0027', 'Dog', 'BR0027'),
('PC0028', 'Dog', 'BR0028'),
('PC0029', 'Dog', 'BR0029'),
('PC0030', 'Dog', 'BR0030'),
('PC0031', 'Dog', 'BR0031'),
('PC0032', 'Dog', 'BR0032'),
('PC0033', 'Dog', 'BR0033'),
('PC0034', 'Dog', 'BR0034'),
('PC0035', 'Dog', 'BR0035'),
('PC0036', 'Dog', 'BR0036'),
('PC0037', 'Dog', 'BR0037'),
('PC0038', 'Dog', 'BR0038'),
('PC0039', 'Dog', 'BR0039'),
('PC0040', 'Dog', 'BR0040');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(6) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_birth_place` varchar(100) NOT NULL,
  `user_dob` date NOT NULL,
  `user_phone_number` varchar(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_gender`, `user_birth_place`, `user_dob`, `user_phone_number`, `user_email`, `user_password`) VALUES
('UID001', 'Admin Admin', 'Male', 'System', '2024-05-01', '000000000000', 'admin@email.com', '$2y$10$7kNvg6agTLcwKrdnFt.2BO41qR864wnJ.HNaWwjO/GAs8qvIFh0uy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptions_tr`
--
ALTER TABLE `adoptions_tr`
  ADD PRIMARY KEY (`atr_id`),
  ADD KEY `atr_pet_id` (`atr_pet_id`);

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`breed_id`);

--
-- Indexes for table `cares`
--
ALTER TABLE `cares`
  ADD PRIMARY KEY (`care_id`);

--
-- Indexes for table `cares_tr`
--
ALTER TABLE `cares_tr`
  ADD PRIMARY KEY (`ct_id`),
  ADD KEY `ct_care_id` (`ct_care_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `pet_category_id` (`pet_category_id`);

--
-- Indexes for table `pet_category`
--
ALTER TABLE `pet_category`
  ADD PRIMARY KEY (`pet_category_id`),
  ADD KEY `breed_id` (`breed_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoptions_tr`
--
ALTER TABLE `adoptions_tr`
  ADD CONSTRAINT `adoptions_tr_ibfk_1` FOREIGN KEY (`atr_pet_id`) REFERENCES `pet` (`pet_id`);

--
-- Constraints for table `cares_tr`
--
ALTER TABLE `cares_tr`
  ADD CONSTRAINT `cares_tr_ibfk_1` FOREIGN KEY (`ct_care_id`) REFERENCES `cares` (`care_id`);

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`pet_category_id`) REFERENCES `pet_category` (`pet_category_id`);

--
-- Constraints for table `pet_category`
--
ALTER TABLE `pet_category`
  ADD CONSTRAINT `pet_category_ibfk_1` FOREIGN KEY (`breed_id`) REFERENCES `breed` (`breed_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
