SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `newgames` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table newgames
--

INSERT INTO `newgames` (`item_id`, `item_name`, `item_price`, `item_image`, `item_description`, `item_register`) VALUES
(1,  'Fall Guys: Ultimate Knockout', 19.90, './assets/products/2020games/fallguys.jpg', '-', '2020-08-30 22:28:57'),
(2,  'Fortnite', 0, './assets/products/2020games/fortnite.jpg', 'FALAS!', '2020-08-30 22:28:57'), -- NOW()
(3,  'Call Of Duty: Warzone', 0, './assets/products/2020games/warzone.jpg', 'FALAS!', '2020-08-30 22:28:57'),
(4,  'Among Us', 4.99, './assets/products/2020games/amongus.jpg', 'Bli ne Steam', '2020-08-30 22:28:57'),
(5,  'Valorant', 0, './assets/products/2020games/valorant.jpg', 'FALAS!', '2020-08-30 22:28:57'),
(6,  'PlayerUnknowns Battlegrounds', 29.99, './assets/products/2020games/pubg.jpg', '-', '2020-08-30 22:28:57'),
(7,  'HyperScape', 0, './assets/products/2020games/hyperscape.jpg', 'FALAS!', '2020-08-30 22:28:57'),
(8,  'HITMAN III', 60.00, './assets/products/2020games/hitman3.jpg', '-', '2020-08-30 22:28:57'),
(9,  'The Last Part Of Us II', 30.00, './assets/products/2020games/thelastpartofus.jpeg', '-', '2020-08-30 22:28:57');

ALTER TABLE `newgames`
  ADD PRIMARY KEY (`item_id`);


-- --------------------------------------------------------
ALTER TABLE `newgames`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
