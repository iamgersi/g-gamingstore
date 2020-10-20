SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 
--

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_firstprice` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL, 
  `item_description` text(1024) NOT NULL, 
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_type`, `item_price`, `item_firstprice`, `item_image`, `item_description`, `item_register`) VALUES
(1, 'Razer', 'Razer-Mamba Mouse', 'mouse', 99.99, 120.00, './assets/products/mouse/razer_mamba_mouse.png', '10x7cm, 75 gr. 50 ore bateri ne pune. Lidhje Wireless plus USB per karikues.3 butona per funksione shtese. Teknologji Optike 5G. ', '2020-08-30 22:28:57'), -- NOW()
(2, 'LogiTECH', 'LogiTECH Mousepad', 'mouse', 19.00, 25.00, './assets/products/mouse/logitech_mousepad.jpg', '50x50cm. Praktik dhe i rehatshem. I disponueshem ne tri madhesi.', '2020-08-30 22:28:57'),
(3, 'Alienware', 'AlienWare Gaming Mouse', 'mouse', 69.00, 74.50, './assets/products/mouse/alienware_mouse.jpg', '10x7cm, 85 gr. 30 ore bateri ne pune. Lidhje Wireless plus USB per karikues. 2 butona per funksione shtese. Teknologji Optike 5G. ', '2020-08-30 22:28:57'),
(4, 'Mechanical', 'Half-Gaming Keyboard', 'keyboard', 64.90, 79.90, './assets/products/keyboard/small_keyboard.jpg', '20x20cm. I rehatshem ne perdorim. Madhesi te ndryshme, specifikisht deri te tasti \'T\'. Disponon dhe shume funksione shtese. ', '2020-08-30 22:28:57'),
(5, 'Mechanical', 'White-Mech Keyboard', 'keyboard', 75.00, 89.50, './assets/products/keyboard/mech_keyboard.png', '20x40cm. Mbi 50 ore pune bateri ne wireless. Dipsono disa funksione shtese. Permban nje buton ku mund t\'i ndryshohet vazhdimisht ngjyra.', '2020-08-30 22:28:57'),
(6, 'Mechanical', 'LED Gaming Keyboard', 'keyboard', 64.90, 87.49, './assets/products/keyboard/led_gamingkeyboard.jpg', '20x35cm. Mbi 50 ore pune bateri ne wireless. Dipsono disa funksione shtese. Permban nje buton ku mund t\'i ndryshohet vazhdimisht ngjyra.', '2020-08-30 22:28:57'),
(7, 'Razer', 'Razer Headset', 'headset', 59.90, 75.50, './assets/products/headset/razer_headset.jpg', 'Shume te rehatshme. Te pajisura me mikrofone cilesor. Mbi 20 ore pune bateri. USB cable per karikim', '2020-08-30 22:28:57'),
(8, 'Claw', 'Claw Model Earphones', 'headset', 35.00, 42.90, './assets/products/headset/claw_earphones.jpg', 'Shume te rehatshme. Te pajisura me mikrofone. Nuk disponon lidhje Wireless. ', '2020-08-30 22:28:57'),
(9, 'Switch', 'Switch NeonBlue Headset', 'headset', 59.90, 70.00, './assets/products/headset/neonblue_headset.jpg', 'Shume te rehatshme. Te pajisura me mikrofone cilesor. Mbi 20 ore pune bateri. USB cable per karikim', '2020-08-30 22:28:57'),
(10, 'HyperX', 'HyperX Microphone', 'mic', 40.00, 49.90, './assets/products/mic/hyperx_mic.jpg', '8x8x25cm. Shume cilesore. Qartesi trasmetimi shume e larte. E pajisur me nje software perkates ku mund te modifikohet. Lidhje me USB cable.', '2020-08-30 22:28:57'),
(11, 'Tonor', 'Tonor Microphone', 'mic', 45.00, 52.50, './assets/products/mic/tonor_mic.jpg', '8x8x25cm. Shume cilesore. Qartesi trasmetimi shume e larte. E pajisur me nje software perkates ku mund te modifikohet. Lidhje me USB cable.', '2020-08-30 22:28:57'),
(12, 'Razer', 'Razer Microphone', 'mic', 45.00, 52.50, './assets/products/mic/razer_mic.jpg', '8x8x25cm. Shume cilesore. Qartesi trasmetimi shume e larte. E pajisur me nje software perkates ku mund te modifikohet. Lidhje me USB cable.', '2020-08-30 22:28:57'),
(13, 'LogiTECH', 'LogiTECH Webcamera', 'webcam', 54.90, 65.90, './assets/products/webcam/logitech_webcam.jpg', 'Teknologji e fjales se fundit, persa i takon Gaming Webcams. Qartesi maksimale ne video. Lidhje me USB dhe HDMI cable. I disponueshem ne rezolucione te ndryshme. ', '2020-08-30 22:28:57'),
(14, 'Razer', 'Razer Webcamera', 'webcam', 70.00, 85.90, './assets/products/webcam/razer_webcam.jpg', 'Teknologji e fjales se fundit, persa i takon Gaming Webcams. Qartesi maksimale ne video. Lidhje me USB dhe HDMI cable. I disponueshem ne rezolucione te ndryshme.', '2020-08-30 22:28:57'),
(15, 'Angetube', 'Angetube Webcamera', 'webcam', 54.90, 69.90, './assets/products/webcam/angetube_webcam.jpg', 'Teknologji e fjales se fundit, persa i takon Gaming Webcams. Qartesi maksimale ne video. Lidhje me USB dhe HDMI cable. I disponueshem ne rezolucione te ndryshme.', '2020-08-30 22:28:57'),
(16, 'PS', 'PS DualShock4', 'controller', 49.90, 54.90, './assets/products/controller/dualshock4_controller.jpg', '12 ore pune bateri. I disponueshem ne disa ngjyra. Lidhje Wireless dhe USB cable per karikim. Perfitoni kufje me vlere $10 falas. ',  '2020-08-30 22:28:57'),
(17, 'Apple', 'Mobile Games Controller', 'controller', 19.90, 25.50, './assets/products/controller/mobile_controller.png', '4 ore pune bateri. Lidhje Wireless ne smartphone-in tuaj. Mjaft e rehatshme ne perdorim. ', '2020-08-30 22:28:57'),
(18, 'Switch', 'Switch Controller', 'controller', 49.90, 62.50, './assets/products/controller/switch.jpg', '12 ore pune bateri. Lidhje Wireless dhe USB cable per karikim. Perfitoni kufje me vlere $10 falas.', '2020-08-30 22:28:57'),
(19, 'Sharks', 'Sharks Gaming Chair', 'chair', 120.00, 142.50, './assets/products/chair/sharks_chair.jpg', 'Porosia vjen ne nje paketim kompakt. Liber udhezimi per montim. Mjaft i thjeshte per t\'u montuar. Shume i rehatshem per trupin tuaj. ', '2020-08-30 22:28:57'),
(20, 'Razer', 'Razer Gaming Chair', 'chair', 135.00, 155.90, './assets/products/chair/razer_chair.jpg', 'Porosia vjen ne nje paketim kompakt. Liber udhezimi per montim. Mjaft i thjeshte per t\'u montuar. Shume i rehatshem per trupin tuaj.', '2020-08-30 22:28:57'),
(21, 'TT', 'TT Gaming Chair', 'chair', 120.00, 149.90, './assets/products/chair/ttblack_chair.jpg', 'Porosia vjen ne nje paketim kompakt. Liber udhezimi per montim. Mjaft i thjeshte per t\'u montuar. Shume i rehatshem per trupin tuaj.', '2020-08-30 22:28:57'),
(22, 'Xiaomi', 'Xiaomi (curved) Monitor', 'monitor', 159.00, 180.00, './assets/products/monitor/xiaomi_monitor.jpg', 'Ekran i lakuar. FULL HD 1080p, 240Hz. Arrin deri ne 360 fps. I disponueshem ne madhesi te ndryshme.', '2020-08-30 22:28:57'),
(23, 'Acer', 'Acer Monitor', 'monitor', 124.90, 140.00, './assets/products/monitor/predator_monitor.jpg', 'Ekran i rrafshet. FULL HD 1080p, 240Hz. Arrin deri ne 360 fps. I disponueshem ne madhesi te ndryshme.', '2020-08-30 22:28:57'),
(24, 'Samsung', 'Samsung (curved) Monitor', 'monitor', 124.90, 154.90, './assets/products/monitor/samsung_monitor.jpg', 'Ekran i lakuar. FULL HD 1080p, 240Hz. Arrin deri ne 360 fps. I disponueshem ne madhesi te ndryshme.', '2020-08-30 22:28:57'),
(25, 'Raider', 'GameMax Raider Gaming PC', 'pc', 799.90, 849.90, './assets/products/pc/gaming_pc4.jpg', 'wdq', '2020-08-30 22:28:57'),
(26, 'Getworth', 'Getworth-R5 Gaming PC', 'pc', 949.90, 1149.90, './assets/products/pc/gaming_pc3.jpg', 'wdqdq', '2020-08-30 22:28:57'), -- NOW()
(27, 'Asus', 'Asus ROG Strix-Scar II Laptop', 'laptop', 3949.90, 4190.90, './assets/products/laptop/asus_laptop.jpg', 'wdqqwd', '2020-08-30 22:28:57'),
(28, 'Razer', 'Razer Blade Gaming Laptop', 'laptop', 4249.90, 4350.00, './assets/products/laptop/razerblade_laptop.jpg', 'wdqqwd', '2020-08-30 22:28:57'),
(29, 'Alienware', 'AlienWare Gaming Mouse 16k dpi', 'mouse', 69.00, 74.90, './assets/products/mouse/alienware_mouse.jpg', 'qwdqwd', '2020-08-30 22:28:57'),
(30, 'Mechanical', 'Mechanical Gaming Keyboard', 'keyboard', 64.90, 79.90, './assets/products/keyboard/mechanical_keyboard.jpg', 'wqdqwdq', '2020-08-30 22:28:57'),
(31, 'XBox', 'XBox Model Controller (white)', 55.00, 65.00, 'controller', './assets/products/controller/xbox_controller.jpg', 'qwdqwdq', '2020-08-30 22:28:57'),
(32, 'Devolver Digital', 'Fall Guys: Ultimate Knockout','videogame', 19.90, 24.90, './assets/products/2020games/fallguys.jpg', 'Fall Guys eshte nje Battle Royale game me deri ne 60 lojtare ne nje lufte free for all ,ku raund pas raundi lojetaret eleminohen si pasoje e nje kaosi pershkallezues derisa te mbetet nje fitimtar!', '2020-08-30 22:28:57'),
(33, 'Epic Games', 'Fortnite', 'videogame', 0, 15.00, './assets/products/2020games/fortnite.jpg', 'FALAS!', '2020-08-30 22:28:57'), -- NOW()
(34, 'Activision','Call Of Duty: Warzone', 'videogame', 0, 59.90, './assets/products/2020games/warzone.jpg', 'FALAS!', '2020-08-30 22:28:57'),
(35,  'InnerSloth','Among Us', 'videogame', 3.99, 4.99, './assets/products/2020games/amongus.jpg', 'Among Us eshte nje multiplayer online game e cila zhvillohet ne nje mjedis me teme hapesinore, ku secili lojtar merr nje nga dy rolet, shumica duke qene Crewmates dhe nje numer i paracaktuar jane Impostors.KUJDES! THERE IS AN IMPOSTOR AMONG US!', '2020-08-30 22:28:57'),
(36,  '‎Riot Games','Valorant', 'videogame', 0, 0,'./assets/products/2020games/valorant.jpg', 'FALAS!', '2020-08-30 22:28:57'),
(37,  'PUBG CORPORATION', 'PlayerUnknowns Battlegrounds', 'videogame',  29.99, 59.99, './assets/products/2020games/pubg.jpg', 'PUBG eshte nje online multiplayer game, Battle Royal me nje lobby prej 100 lojtaresh.Eshte mjaft e thjeshte,vrit ke te mundesh dhe mundohu te jesh i mbijetuari i fundit per te fituar!', '2020-08-30 22:28:57'),
(38,  'Ubisoft', 'HyperScape', 'videogame',  0, 0,'./assets/products/2020games/hyperscape.jpg', 'FALAS!', '2020-08-30 22:28:57'),
(39,  'IO Interactive', 'HITMAN III', 'videogame', 60.00, 60.00, './assets/products/2020games/hitman3.jpg', 'Hitman 3 eshte nje loje e luajtur nga nje perspektive e nje personi te trete dhe lojtaret marrin kontrollin e vrasesit Agjenti 47. Ne loje, 47 do te udhetoje ne vende të ndryshme dhe do te kryeje vrasje te kontraktuara te caqeve kriminale ne te gjithe globin.', '2020-08-30 22:28:57'),
(40,  'Sony Interactive Entertainment', 'The Last Part Of Us II', 'videogame', 30.00, 49.90, './assets/products/2020games/thelastpartofus.jpeg', 'The Last of Us Part II eshte nje loje aksion-aventure 2020 e zhvilluar nga Naughty Dog dhe lancuar nga Sony Interactive Entertainment.Loja luhet nga perspektiva e personit të trete. Lojtaret mund te perdorin arme zjarri, arme te improvizuara dhe vjedhje per te luftuar armiqte njerezore dhe krijesat kanibaliste.', '2020-08-30 22:28:57');
-- --------------------------------------------------------




--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

COMMIT;

