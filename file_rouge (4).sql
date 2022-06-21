-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 04:11
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `file_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `ID_agence` char(4) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `id_manag` char(4) DEFAULT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`ID_agence`, `link`, `id_manag`, `address`) VALUES
('A001', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947.4255017824!2d-5.803710343565256!3d35.778904231186075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f5e8ddd6977%3A0xaae734f33a6125af!2sPlage%20municipale!5e0!3m2!1sfr!2sma!4v1655317379053!5m2!1sfr!2sma\n', 'M134', 'playa'),
('A002', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25892.26067649718!2d-5.780917998444721!3d35.78685647460898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f85162e48f3%3A0xade1c626e23a92dc!2sPlage%20Ghandouri!5e0!3m2!1sfr!2sma!4v1655317569900!5m2!1sfr!2sma\n', 'M135', 'Ghandouti'),
('A003', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103611.24496091413!2d-6.0012314567902365!3d35.75445689986195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c78612dcec9b7%3A0xa122b9838f6035b6!2sParc%20Rmilat!5e0!3m2!1sfr!2sma!4v1655317280664!5m2!1sfr!2sma\n', 'M136', 'Rmilat'),
('A004', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25902.804188814098!2d-5.948485137335161!3d35.75447856244576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b882d963c25b3%3A0x37ad611146ff6e58!2sAchakar%2C%20Tanger!5e0!3m2!1sfr!2sma!4v1655316994220!5m2!1sfr!2sma\n', 'M137', 'Achakar');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `ID_Category` char(4) NOT NULL,
  `type` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`ID_Category`, `type`) VALUES
('C001', 'Scooter'),
('C002', 'Bicycle');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID_Client` int(4) NOT NULL,
  `Fname` varchar(60) DEFAULT NULL,
  `Lname` varchar(60) DEFAULT NULL,
  `Phone` varchar(13) DEFAULT NULL,
  `Adresse` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `CIN` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID_Client`, `Fname`, `Lname`, `Phone`, `Adresse`, `Email`, `CIN`) VALUES
(102, 'zayd', 'louly', '0787459877', 'tanger', 'bouyahya56@gmail.com', 'k15479'),
(103, 'nabil', 'zouaoui', '0698723344', 'rabat', 'khloqi@gmail.com', 'k51236'),
(104, 'samir', 'aliane', '0698765479', 'tetouan', 'soodi@gmail.com', 'k12364'),
(105, 'salwa', 'abbassi', '0615467547', 'fes', 'salwa45@gmail.com', 'L14598'),
(106, 'sara', 'bakkali', '0765984432', 'assilah', 'soukayna67@gmail.com', 'L47569'),
(107, 'saad', 'yemlahi', '0787776544', 'agadir', 'bouzine232@gmail.com', 'K41298'),
(109, 'asmae', 'ahraou', '0774533258', 'oujda', 'fatimrboh@gmail.com', 'P12789'),
(110, 'layla', 'laawfi', '0665468540', 'Meknes', 'ayoubhiko@gmail.com', 'J54798'),
(111, 'mohamed', 'hakimi', '0619776565', 'tetouan', 'hakimi79gh@gmail.com', 'R14598'),
(201, 'karime', 'haji', '0606568798', ' Mrchan_tanger', 'karimo20@gmail.com', 'P14589'),
(202, 'nada', 'bouyahya', '0787459876', 'tanger', 'bouyahya56@gmail.com', 'L1589'),
(203, 'zakaria', 'khaloqi', '0698723344', 'rabat', 'khloqi@gmail.com', 'P4589'),
(204, 'zoubir', 'soodi', '0698765479', ' titwan', 'soodi@gmail.com', 'Q14289'),
(205, 'loubna', 'lkhaldi', '0615467547', 'fes', 'loubna34@gmail.com', 'P14589'),
(206, 'soukayna', 'merabet', '0765984432', 'assilah', 'soukayna67@gmail.com', 'P14515'),
(207, 'aicha', 'bouzine', '0787776544', 'agadir', 'bouzine232@gmail.com', 'M14589'),
(208, 'mariam', 'lkhaldi', '06543221349', 'rabat', 'lkhldi45@gmail.com', 'N14589'),
(209, 'fatima', 'mrboh', '0774533258', 'oujda', 'fatimrboh@gmail.com', 'T25179'),
(210, 'ayoub', 'laawfi', '0665468540', 'Meknes', 'ayoubhiko@gmail.com', 'P36583'),
(211, 'aicha', 'mrzok', '0619357565', 'asilah', 'airzok79gh@gmail.com', 'K14569'),
(215, ' Sloane Moss', 'Kendall Weber', '07231587452', 'Aut amet modi molli', 'tevumyrar@mailinator.com', 'Volupt'),
(216, ' Sloane Moss', 'Kendall Weber', '+1 (972) 988-', 'Aut amet modi molli', 'tevumyrar@mailinator.com', 'Volupt'),
(217, ' Sloane Moss', 'Kendall Weber', '+1 (972) 988-', 'Aut amet modi molli', 'tevumyrar@mailinator.com', 'Volupt'),
(218, ' khalid', 'morsli', '06060606', 'oujda', 'khalid12@gmail.ma', 'K0612');

-- --------------------------------------------------------

--
-- Structure de la table `manger`
--

CREATE TABLE `manger` (
  `ID_manger` char(4) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fullName` varchar(60) NOT NULL,
  `ID_agence` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `manger`
--

INSERT INTO `manger` (`ID_manger`, `email`, `password`, `fullName`, `ID_agence`) VALUES
('M134', 'aicha111@gmail.com', 'aicha01', 'Aicha_Bouzine', 'A001'),
('M135', 'sara222@gmail.com', 'sara01', 'Sara_Bouebid', 'A002'),
('M136', 'Imade333@gmail.com', 'imade01', 'Imade_Bouhna', 'A003'),
('M137', 'laila565@gmail.com', 'laila01', 'Laila Margani', 'A004');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `ID_reservation` int(4) NOT NULL,
  `Start_time` varchar(60) DEFAULT NULL,
  `end_time` varchar(60) DEFAULT NULL,
  `vehicle_id` int(4) NOT NULL,
  `id_agence` char(4) NOT NULL,
  `id_agence2` char(4) NOT NULL,
  `Cli_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`ID_reservation`, `Start_time`, `end_time`, `vehicle_id`, `id_agence`, `id_agence2`, `Cli_id`) VALUES
(4, '13:42', '13:43', 20, 'A002', 'A003', 111),
(5, '2:30', '22:01', 11, 'A001', 'A002', 109),
(6, '2:30', '21:24', 4, 'A002', 'A001', 218),
(8, '2:30', '21:27', 4, 'A003', 'A001', 218),
(10, '02:32', '03:32', 2, 'A003', 'A002', 218),
(11, '22:17', '04:13', 14, 'A004', 'A002', 111),
(13, '15:09', '19:06', 17, 'A003', 'A004', 210),
(14, '15:10', '15:11', 6, 'A003', 'A004', 215),
(15, '19:08', '19:08', 4, 'A003', 'A003', 216);

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

CREATE TABLE `size` (
  `size_ID` char(4) NOT NULL,
  `size_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `size`
--

INSERT INTO `size` (`size_ID`, `size_name`) VALUES
('S001', 'Large'),
('S002', 'Medium'),
('S003', 'Small');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `ID_type` char(4) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`ID_type`, `name`) VALUES
('t001', 'CLASSIC'),
('t002', 'TANDEM'),
('t003', 'ELECTRIC'),
('t004', 'SELF BLANCING');

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `ID_Vehicle` int(4) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `daily_hour_Rate` decimal(10,0) DEFAULT NULL,
  `quantity_stock` int(11) DEFAULT NULL,
  `availablity` tinyint(1) DEFAULT NULL,
  `img` text NOT NULL,
  `size_id` char(4) NOT NULL,
  `cat_id` char(4) NOT NULL,
  `type_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicle`
--

INSERT INTO `vehicle` (`ID_Vehicle`, `Name`, `description`, `daily_hour_Rate`, `quantity_stock`, `availablity`, `img`, `size_id`, `cat_id`, `type_id`) VALUES
(2, 'tokyobike bisou', ' Lightweight 7-speed city bike on 26” wheels with a comfortable, upright ride. Fixings for mounting mudguards, luggage racks or baskets. The most relaxed model in the Tokyobike collection. It has an “upgradable” frame that makes it easy and quick to get on and off the bike. The upright riding position is comfortable around town and provides good visibility in city traffic. A simple and light transmission allows effortless pedaling, even on the steepest slopes. The bisou is the ideal bike for Paris.', '20', 4, 1, 'bisou-1.png', 'S001', 'C002', 't001'),
(3, 'tokyobike CS26', ' The Tokyobike Classic Sport (CS) is a simple and light city bike with 8 speeds. The chromoly steel frame is light and solid while the 26 \"smaller wheels allow faster start-ups, more agile driving and a more compact bike. The bike offers a good balance between comfort and speed, while the semi-mate finish gives an aesthetic between classic and contemporary. The semi-raised handlebars are suitable for the city bike and the frame is provided with eyelets allowing to fix mudguards, baskets or luggage doors.', '18', 9, 0, 'velo-cs-tokyobike.png', 'S002', 'C002', 't001'),
(4, 'VTT Talon 29 2 Giant 2021', '  Built on a brand new semi-rigid ALUXX aluminum frame, with the possibility of opting for 27.5 inches or 29 inches, the Talon is the ideal bike for the XC or low-accident terrain. The geometry of the frame is developed specifically to adapt to the size of the wheels and therefore to a suspension of 80mm or 100mm (depending on the size of the frame). The result is a bicycle bringing confidence and balance to the veterans wishing to pass a course technically.\r\n\r\nThe ALUXX aluminum frame is built by hand in our factories by the world leader in aluminum construction.\r\n\r\nThe geometry of the framework has been developed to optimize the balance and the crossing capacities (for the 29 inch) \r\n\r\nThe front fork of 80mm or 100mm brings a fluid travel for an excellent control on the trails.', '20', 11, 1, 'VTT.png', 'S001', 'C002', 't001'),
(5, 'Draisienne Pre Push Giant', ' With its light and ultra-resistant aluminum frame, it is the perfect bike for your child to allow him to have fun safely. Mounted with 12 \"wheels and an adjustable saddle is the ideal solution for your daughter or boy to start his bicycle adventures..', '10', 7, 0, 'PREt.JPG', 'S003', 'C002', 't001'),
(6, 'Draisienne Paddle Tokyobike', 'My first bike. The Paddle tokyobike is a balancing bike and the ideal way to introduce children to cycling. It has the same attention to detail as the adult version, but it is reduced to perfection. A carefully studied color palette ensures that your favorite little being will be the envy of his friends. Generally suitable for children from 2 to 4 years.', '20', 5, 1, 'draisienne-paddle-tokyobike.png', 'S003', 'C002', 't001'),
(7, ' Brompton Superlight M6L Eclairage Batterie\r\n', '  Designed for speed, the Brompton Superlight includes a front fork, a rear frame and other light titanium components, which makes this range up to 1 kg lighter than Brompton all steel. With the Superlight range, it is easier than ever to get on and off trains and take the stairs with your Brompton. All this, while keeping our promise to provide a bicycle which, when folded, can be easily stored at home, under an office or in the corner of your local cafe.', '30', 4, 1, 'brompton.jpg', 'S001', 'C002', 't003'),
(8, 'GIANT TOUGHROAD SLR EX 2020', 'With its light Aluxx SLR frame, its comfortable composite fork, the ToughRoad SLR is ready to venture on all terrain. Its 700c tubeless wheels lower the air pressure in the tires to offer more comfort and motor skills while its D-Fuse saddle rod filters vibrations to reduce fatigue on long outings. The ToughRoad SLR also has strong disc brakes, binding for luggage rack and mudguard, as well as specific protection for the diagonal tube called X-Defender.', '25', 6, 1, 'giant-toughroad.jpg', 'S001', 'C002', 't001'),
(9, 'Anytour E+2 LDS Giant 2021', ' Equipped with a Giant SyncDrive Sport sports engine with customizable assistance, a suspended fork, powerful disc brakes, mudguards, luggage rack and front / rear lighting system, the E + Anytour is adapted to your daily urban trips as well as to your trekking outings on carriage tracks.', '30', 3, 1, 'velo-anytour-e2-lds-giant-2021.jpg', 'S002', 'C002', 't001'),
(10, 'Super Light ALUTECH Alloy Tandem Frameu', ' There are few better ways to share the enjoyment of cycling than with a Tandem. Tandem bikes are designed to be ridden with a captain in the front, and a stoker or passenger in the rear. The rider in the front controls the bike, leaving the rider in the rear, with nothing more to do than to assist with pedaling and enjoy the ride, in fact, the rear rider needs hardly any balancing skills at all..', '35', 2, 0, 'tndo.png', 'S001', 'C002', 't002'),
(11, 'polygon imression AX Tandem Bike with Disc Brakes', ' There are few better ways to share the enjoyment of cycling than with a Tandem. Tandem bikes are designed to be ridden with a captain in the front, and a stoker or passenger in the rear. The rider in the front controls the bike, leaving the rider in the rear, with nothing more to do than to assist with pedaling and enjoy the ride, in fact, the rear rider needs hardly any balancing skills at all.', '30', 2, 1, 'polyg.jpg', 'S001', 'C002', 't002'),
(12, 'Schwinn Twinn', 'Twinn Tandem Medium has a 20-inch frame (Front) with a 16-inch frame Stoker (Rear) Schwinn aluminum tandem frame features an extra low step-thru rear bar to comfortably fit smaller riders with 26-inch wheels 21-speed trigger shifters and rear derailleur provide an extended gear range and smooth shifting on every ride Second set of handlebars and Schwinn suspension fork put you in complete control when you ride Ergonomic grips and plush fitness saddles create a comfortable and enjoyable riding experience while mechanical disc brakes offer superior all-condition stopping power.', '20', 2, 1, 'Schwinn Twinn.png', 'S001', 'C002', 't002'),
(13, 'BIKE FRIDAY TANDEM TWO’SDAY ', 'This incredible tandem is not only a high performance ride, built to your exact measurements, that packs in two airline travel cases – it also folds to fit in a car trunk! You don’t need a rack to carry this tandem safely in your personal vehicle. There is nothing else like it in the world.', '35', 3, 1, 'twosday.png', 'S001', 'C002', 't002'),
(14, 'Gotrax GKS Electric Scooter', 'Introducing a whole new style of Electric scooters for kids! The GKS features 6″ Solid rubber tires that absorb vibrations making a glide effortlessly on cement or paved roads. The speed of the GKS kids scooter is locked at a safe but fun 10mph. The Compact 25.2V Battery and 150 Watt electric motor powers the GKS for up to 7.5 miles per charge. Now the whole family can have fun, and remember to always wear a helmet', '18', 7, 1, 'Gotrax-GKS.png', 'S002', 'C001', 't003'),
(15, 'Swagtron SG-8 Swagger 8 ', 'Make sure this fitsby entering your model number. Powerful, quiet, solid — a whisper-quiet motor powers this motorized scooter up to 15 mph for 10 miles on a single 3-hour charge. And its ultra-durable frame, made from aerospace-grade aluminum, supports young riders up to 150 lb. Smooth riding experience — Say goodbye to flats. This e-scooter rolls on maintenance-free 5. 5” rubber tires that can handle rougher pavement like a boss. The spring-coil suspension delivers a liquid-smooth ride you’ll have to feel to believe.', '26', 9, 1, 'Swagtron.png', 'S002', 'C001', 't003'),
(16, 'Hiboy Titan Electric Scooter', 'Make sure this fitsby entering your model number. 800W Brushless Motor – Features powerful 800W motor, and 12.5AH battery, the electric scooters can reach 25 mph and 20% hill grade, travel up to 28miles (max load of 220 lbs), 3 ride modes to choose from. Wider 10in Off-road Air Tires – Titan adult eletric scooter with wider 10in pneumatic tires, And deeper lines provide perfect anti-seismic and anti-slip performance, it can keep a good riding experience in bad road conditions. More Comfortable & Safe – Dual disc brakes & shock absorption make Titan more comfortable and safe when riding. And with a wider deck to make you stay balanced on a wide and stable platform.', '25', 3, 0, 'Hiboy.png', 'S002', 'C001', 't003'),
(17, 'Gotrax GKS LUMIOS Electric Scooter', 'SAFETY WARNING: Always remember to wear helmet and knee pads before riding the scooter. Make sure this fitsby entering your model number. Kids Kick Scooter – The GKS LUMIOS is the brilliant e scooter for kids. Attracted by the vibrant color and LED wheel it’s sure to be their favorite toys. The light weight frame is made from Aircraft-Grade Aluminum, and features a fire retardant deck. FANTASTIC LED WHEEL – Your kids will be thrilled when they see their new glowing electric scooter. The front wheel now has a built in neon led that shines bright and stands out. Upgraded Battery and Motor – More time to play means more fun. Ride up to 4.8 miles per charge using the new 20% larger battery. The GKS LUMIOS features a 150W motor that reaches a safe max speed of 7.5mph.', '15', 12, 1, 'Gotrax.png', 'S003', 'C001', 't003'),
(18, 'Albott Pro Scooters Trick Scooter ', 'Make sure this fitsby entering your model number.\r\n110MM 6061-T6 ALUMINIUM CORE WHEELS – 6061-T6 aircraft grade aluminium core and 88A cast PU surface pro scooters wheels will provide you greater wear-resistance and durability, don’t need to worry about broken. ALUMINIUM CORE lifetime will be 3 times longer than the PC wheel core.\r\nSTABLE RIDING – 6061-T6 aircraft grade aluminum box-shape deck(19.9″Lx4.4″W) and high tensile steel bar with 4.9″(125mm) TPE grips will give you a safe and comfortable riding experience. Pro Mn steel flex brake has greater strength and faster braking speed.', '10', 20, 1, 'Albott.png', 'S002', 'C001', 't001'),
(20, ' Hover-1 Chrome 2.0 Electric Hoverboard', 'Make sure this fitsby entering your model number.\r\nBuilt-In Bluetooth Speaker – Speaker: 2R5W- Built-In Rechargeable Battery- Battery Capacity: 36V, 2.0 Ah with overcharge and discharge protection.\r\nUltra Bright LED Headlights – Battery Life Indicator – UN 38.3 Certified Battery – UL Certified Power Cord.\r\n2 X 150W Motor- Max Distance: 6 Miles – Max Speed: 7 MPH – Max Weight: 220 lb – Max Incline Climb: 5 °\r\nIPX4 Water Resistance- Tire Size: 6.5 inches -Charge Time: Up to 4 hours – Battery Type: Built-In Rechargeable Lithium-Ion.\r\nHover-1 the most trusted Hoverboard.\r\nBrake style: Sensor; MSDS & UN 38.3 Tested', '15', 1, 0, 'Hover.png', 'S002', 'C001', 't004'),
(21, 'Segway Ninebot S And S-Max Smart Self-Balancing', 'Make sure this fitsby entering your model number.\r\nSafety Priority : UL 2272 certification ensures Ninebot S meets high standards for fire and electrical safety. The Smart Battery Management System provides reliable battery performance. IP54 waterproof protection ensures operation in various weathers.\r\nSturdy & Powerful : Ninebot S is compact, weighting just 28 lbs with a max load of 220 lbs. Thanks to the dual 400W motors, it can easily reach a max speed of 10 mph. A single fully charged battery can run up to 13. 7 miles, climbing a max slope of 15°\r\nRoad Adaptive Design : 10. 5″ pneumatic tires provide a comfortable and smoother ride on bumpy roads. Knee control bar allows for precise steering and easy lifting. Applicable Age 16 – 50 years. Applicable Height – 3. 11 – 6. 6 Inch.', '30', 2, 0, 'Segway.png', 'S002', 'C001', 't004'),
(22, 'Brookstone BluGlide Elite 10 Folding', 'Make sure this fitsby entering your model number.\r\nPOWERFUL MOTOR – With its massive battery powered 500W motor, the Brookstone BluGlide 10 E-Scooter can reach speeds of up to 16 MPH and travel up to 18 miles with a max load of 250 lbs. on a full charge.\r\nLARGE DISPLAY – Boasting a big, bright center LCD display that keeps you informed of speed, battery level, selected gear and front and rear light statuses. Change gears, turn the lights on or off, or power the scooter, all with one convenient screen.', '10', 10, 1, 'Brookstone.png', 'S001', 'C001', 't001'),
(23, 'Ducati Scrambler Cross-E', 'The Scrambler Cross-E Scooter by Ducati is an impressive bit of kit!\r\n\r\nThe so-called “fat” anti-puncture tubeless tyres are suitable for road or stretches of dirt trails.\r\n\r\nThe brushless motor provides a continuous power output of 500W and guarantees excellent pick-up both at the start and on uphill sections, without undergoing any slowdown in pace.\r\n\r\nThe sturdiness of the frame gives maximum stability and riding comfort. The double front headlight allows the use of the vehicle at night with excellent visibility and the management of all the functions, including the three riding modes, takes place through the large 3.5” LCD display.', '13', 3, 0, 'cross.png', 'S001', 'C001', 't001'),
(24, 'Razor E100 Classic Electric', 'The best selling electric scooter in the UK.\r\n\r\nSince old Ben Franklin discovered electricity, it was bound to happen.  Suddenly, you don’t get a kick out of your old scooter anymore.  It’s OK, you’re growing up and it’s time to tell Mum – you’re old enough for electric.\r\n\r\nRenowned for its strong performance, comfort and reliability, this is the perfect e-scooter for children aged 8 years and up. A superb mixture of cool design and tough build, the E100 has a large pneumatic front tyre for a comfortable ride. Boasting a powerful chain-driven, high-torque motor, the E100 can reach speeds of 10mph. And thanks to the rechargeable battery, riders can cruise for at least 40 minutes at a stretch. The E100 measures 90.7 cm tall and will support a rider up to a weight of 54kg.', '8', 14, 1, 'pambi.png', 'S002', 'C001', 't003'),
(30, 'Mono Tokyobike', 'The new single speed tokyobike model. Lightweight chromoly steel frame on 26-inch wheels with a classic aesthetic. Perfect for everyday life in the city, comfortable and easily customizable, the versatile frame is equipped with eyelets for mounting mudguards, racks and baskets as well as spacing for a wide variety of tire options.\r\n\r\nThe Mono perfectly represents the tokyobike concept, a light, simple and accessible bike. It almost lets you forget about the bike and just enjoy the ride.', '15', 7, 0, 'mono-1.png\r\n', 'S002', 'C002', 't001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`ID_agence`),
  ADD KEY `id_manag` (`id_manag`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_Client`);

--
-- Index pour la table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`ID_manger`),
  ADD KEY `ID_agence` (`ID_agence`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID_reservation`),
  ADD KEY `id_agence` (`id_agence`),
  ADD KEY `id_agence2` (`id_agence2`),
  ADD KEY `vehicle_id` (`vehicle_id`),
  ADD KEY `reservation_ibfk_1` (`Cli_id`);

--
-- Index pour la table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_ID`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID_type`);

--
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`ID_Vehicle`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID_Client` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID_reservation` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agence`
--
ALTER TABLE `agence`
  ADD CONSTRAINT `agence_ibfk_1` FOREIGN KEY (`id_manag`) REFERENCES `manger` (`ID_manger`),
  ADD CONSTRAINT `agence_ibfk_2` FOREIGN KEY (`id_manag`) REFERENCES `manger` (`ID_manger`);

--
-- Contraintes pour la table `manger`
--
ALTER TABLE `manger`
  ADD CONSTRAINT `manger_ibfk_1` FOREIGN KEY (`ID_agence`) REFERENCES `agence` (`ID_agence`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Cli_id`) REFERENCES `client` (`ID_Client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_agence`) REFERENCES `agence` (`ID_agence`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`id_agence2`) REFERENCES `agence` (`ID_agence`),
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`ID_Vehicle`);

--
-- Contraintes pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_ID`),
  ADD CONSTRAINT `vehicle_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`ID_type`),
  ADD CONSTRAINT `vehicle_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `category` (`ID_Category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
