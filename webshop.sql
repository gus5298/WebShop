-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 04:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Jack Daniels', 'Jack Daniel\'s is a brand of Tennessee whiskey and the top-selling American whiskey in the world. It is produced in Lynchburg, Tennessee, by the Jack Daniel Distillery, which has been owned by the Brown–Forman Corporation since 1956. ', '12.00', 'img/jackie.png'),
(2, 'Hennesy', 'Jas Hennessy & Co., or more simply Hennessy, is a cognac house with headquarters in Cognac, France. Jas Hennessy & Co. sells about 50 million bottles a year worldwide, or more than 40 percent of the world\'s cognac, making it the world\'s largest cognac producer.', '15.00', 'img/henny.jpg'),
(3, 'Bombay Sapphire', 'Bombay Sapphire is a brand of gin that was first launched in 1987 by IDV. In 1997 Diageo sold the brand to Bacardi. Its name originates from the popularity of gin in India during the British Raj and \"Sapphire\" refers to the violet-blue Star of Bombay on display at the Smithsonian Institution.', '17.00', 'img/bombay.jpg'),
(4, 'Marques de Caceres', 'In 1970, Enrique Forner founded Marqués de Cáceres, Unión Vitivinícola, S.A., a historic Alliance between a region (Cenicero, La Rioja Alta), an enterprising family that has been devoted to the wine trade for five generations, the best vine growers and vineyards in La Rioja and a Bordeaux concept which revolutionised the production and business model with a single objective: the quality to obtain the best wines, an obsession that today continues to be the leitmotiv of Cristina Forner, the fourth generation of this wine family.', '8.00', 'img/marques.jpg'),
(5, 'Vinas del Rey', 'Cultivating Albariño Grapes in Spain\'s rainy Rias Baixas requires dedication and patience. Grapes are hand harvested, resulting in this elegant wine, with aromas of apricot, honeysuckle and notes of fresh grapefruit and mandarin.', '5.00', 'img/vinas.jpg'),
(6, 'Heineken', 'Heineken® and the vast majority of our beers around the world are made from three natural ingredients – water, malted barley, and hops. Together with yeast these ingredients are used in a centuries-old brewing process, to create high-quality beers enjoyed by our consumers around the world.', '2.00', 'img/heine.jpeg'),
(7, 'Budweiser', 'Budweiser is an American-style pale lager produced by Anheuser-Busch, currently part of the transnational corporation Anheuser-Busch InBev.[1] Introduced in 1876 by Carl Conrad & Co. of St. Louis, Missouri,[2] it has grown to become one of the largest selling beers in the United States, and is available in over 80 markets worldwide—though, due to a trademark dispute, not necessarily under the Budweiser name.', '1.00', 'img/bud.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `totalPrice` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `express` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
