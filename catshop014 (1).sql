-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 03:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catshop014`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories014`
--

CREATE TABLE `categories014` (
  `id_categories_014` int(11) NOT NULL,
  `cate_name_014` varchar(15) NOT NULL,
  `description_014` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories014`
--

INSERT INTO `categories014` (`id_categories_014`, `cate_name_014`, `description_014`) VALUES
(1, 'persia', 'Kucing persia adalah ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek.'),
(3, 'domestic', 'Kucing disebut juga kucing domestik atau kucing rumah adalah sejenis mamalia karnivora dari keluarga Felidae. Kata \"kucing\" biasanya merujuk kepada \"kucing\" yang telah dijinakkan, tetapi bisa juga bisa merujuk kepada \"kucing besar\" seperti singa dan harim'),
(5, 'Angora', 'Anggora adalah ras kucing alami yang sangat tua dan salah satu ras yang tertua di dunia. Berabad-abad lamanya kucing anggora mengalami seleksi alam di daerah pegunungan Ankara. Iklimnya yang sedemikian rupa membuat tubuhnya kuat dan bulunya berkembang men'),
(8, 'siamse', 'Kucing Siam sangat sensitif terhadap temperatur di sekelilingnya dan tidak cocok berada di iklim yang dingin karena mantel bulu mereka yang pendek. Meskipun mereka lebih suka di lingkungan hangat, tetapi ras yang sangat cantik ini juga tidak begitu menyuk'),
(9, 'ragdol', 'Pemberian nama Ragdoll pada jenis kucing yang cantik ini sangat tepat karena mereka adalah jenis kucing yang akan dengan senang hati duduk di pangkuan Anda untuk waktu yang cukup lama. Kucing Ragdoll tidak hanya sangat ramah, tetapi mereka juga memiliki w'),
(10, 'abisinia', 'Binatang bertubuh mini ini mirip dengan cougar berukuran kecil. Jenisnya yang mempunyai corak kemerah-merahan memiliki bulu yang mempesona.  Jika kamu mencari kucing yang terlihat mewah, kamu dapat mempertimbangkan jenis kucing abyssianian ini yang termas');

-- --------------------------------------------------------

--
-- Table structure for table `cats014`
--

CREATE TABLE `cats014` (
  `id_014` int(11) NOT NULL,
  `name_014` varchar(100) NOT NULL,
  `type_014` varchar(100) NOT NULL,
  `gender_014` varchar(10) NOT NULL,
  `age_014` int(11) NOT NULL,
  `price_014` int(11) NOT NULL,
  `sold_014` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cats014`
--

INSERT INTO `cats014` (`id_014`, `name_014`, `type_014`, `gender_014`, `age_014`, `price_014`, `sold_014`) VALUES
(1, 'lina', 'persia', 'Female', 6, 100, 1),
(2, 'cutie', 'domestic', 'Male', 2, 200, 0),
(19, 'juan', 'domestic', 'Female', 2, 200, 0),
(20, 'kirby', 'persia', 'Female', 1, 150, 1),
(21, 'lina', 'persia', 'Male', 4, 200, 0),
(22, 'albert', 'siamse', 'Female', 5, 300, 1),
(23, 'hutao', 'ragdol', 'Female', 3, 300, 0),
(24, 'yujin', 'ragdol', 'Male', 3, 300, 0),
(25, 'juhan', 'domestic', 'Female', 2, 330, 0),
(26, 'kenny', 'domestic', 'Male', 3, 200, 0),
(27, 'shin', 'persia', 'Female', 5, 130, 0),
(28, 'elsa', 'ragdol', 'Female', 5, 350, 0),
(29, 'rini', 'persia', 'Female', 3, 240, 0),
(30, 'feks', 'domestic', 'Female', 1, 130, 0),
(31, 'lamb', 'Angora', 'Male', 3, 220, 0),
(32, 'gius', 'siamse', 'Male', 3, 140, 0),
(33, 'fauks', 'persia', 'Male', 3, 210, 0),
(34, 'simsa', 'domestic', 'Male', 5, 200, 0),
(35, 'wenay', 'persia', 'Female', 32, 300, 0),
(36, 'butter', 'ragdol', 'Female', 3, 300, 0),
(37, 'gingger', 'siamse', 'Male', 1, 400, 0),
(38, 'chunky', 'Angora', 'Female', 2, 340, 0),
(39, 'uyen', 'persia', 'Female', 3, 200, 0),
(40, 'genos', 'siamse', 'Male', 3, 200, 0),
(41, 'saitama', 'domestic', 'Male', 5, 300, 0),
(42, 'junior', 'Angora', 'Male', 3, 200, 0),
(43, 'dixsi', 'siamse', 'Male', 23, 150, 0),
(44, 'fubu', 'siamse', 'Male', 5, 300, 0),
(45, 'anna', 'siamse', 'Female', 3, 300, 0),
(46, 'besty', 'abisinia', 'Male', 4, 300, 0),
(47, 'howdy', 'Angora', 'Male', 7, 300, 0),
(48, 'suep', 'domestic', 'Male', 6, 100, 0),
(49, 'berk', 'ragdol', 'Male', 4, 300, 0),
(50, 'rusi', 'domestic', 'Male', 1, 200, 0),
(51, 'kena', 'persia', 'Female', 3, 200, 0),
(52, 'oister', 'siamse', 'Male', 4, 320, 0),
(53, 'fanny', 'persia', 'Female', 5, 200, 0),
(54, 'era', 'ragdol', 'Male', 3, 300, 0),
(55, 'ken', 'persia', 'Male', 5, 210, 0),
(56, 'stump', 'Angora', 'Male', 5, 300, 0),
(57, 'yuan', 'siamse', 'Female', 3, 300, 0),
(58, 'restor', 'ragdol', 'Male', 2, 400, 0),
(59, 'feast', 'persia', 'Female', 5, 300, 0),
(60, 'luyu', 'abisinia', 'Male', 3, 400, 0),
(61, 'juns', 'abisinia', 'Female', 3, 300, 0),
(62, 'cook', 'ragdol', 'Male', 5, 300, 0),
(63, 'lolie', 'persia', 'Female', 3, 300, 0),
(64, 'juhan', 'persia', 'Male', 5, 300, 1),
(65, 'kenny', 'domestic', 'Female', 4, 250, 0),
(66, 'jihan', 'ragdol', 'Male', 5, 320, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catsale014`
--

CREATE TABLE `catsale014` (
  `sale_id_014` int(11) NOT NULL,
  `sale_date_014` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_id_014` int(11) NOT NULL,
  `customer_name_014` varchar(100) NOT NULL,
  `customer_address_014` varchar(200) NOT NULL,
  `customer_phone_014` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catsale014`
--

INSERT INTO `catsale014` (`sale_id_014`, `sale_date_014`, `cat_id_014`, `customer_name_014`, `customer_address_014`, `customer_phone_014`) VALUES
(9, '2023-05-07 06:36:08', 64, 'bagas', 'JAKARTA BARAT', '08932145612'),
(10, '2023-05-07 06:36:29', 66, 'ajang', 'BANDUNG TIMUR', '089732145123'),
(11, '2023-05-07 06:36:51', 22, 'hamjah', 'BANDUNG BARAT', '08392141234'),
(12, '2023-05-07 06:37:20', 1, 'daple', 'BANDUNG TIMUR', '08973626531'),
(13, '2023-05-07 06:37:41', 20, 'alex', 'SUMEDANG ', '08739293712');

-- --------------------------------------------------------

--
-- Table structure for table `user014`
--

CREATE TABLE `user014` (
  `userid_014` int(11) NOT NULL,
  `username_014` varchar(100) NOT NULL,
  `password_014` varchar(100) NOT NULL,
  `usertype_014` varchar(10) NOT NULL,
  `fullname_014` varchar(100) NOT NULL,
  `photo_014` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user014`
--

INSERT INTO `user014` (`userid_014`, `username_014`, `password_014`, `usertype_014`, `fullname_014`, `photo_014`) VALUES
(13, 'daple', '$2y$10$5JD0/pzl/x8.Dws94NiGG.kIW6myfPimENxII7svQuFyvRiN6tRva', 'Manager', '123', '107141135-1666800758493-OrlandoAshfordHeadshot.jpg'),
(24, 'test', '$2y$10$snPdg4OJImBt4aq/zfgjgu3oQub87yW1/H3C7KN.Oq209hdR9c8L6', 'Cashier', 'test', 'file-20191107-10961-opbm8v.jpg'),
(25, 'test1', '$2y$10$FGTae9q27Kngh7ZlyRZ6HuW07XXvY0vqnhFBzdh7LuJeqnNHkOP.G', 'Cashier', 'test1', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories014`
--
ALTER TABLE `categories014`
  ADD PRIMARY KEY (`id_categories_014`);

--
-- Indexes for table `cats014`
--
ALTER TABLE `cats014`
  ADD PRIMARY KEY (`id_014`);

--
-- Indexes for table `catsale014`
--
ALTER TABLE `catsale014`
  ADD PRIMARY KEY (`sale_id_014`);

--
-- Indexes for table `user014`
--
ALTER TABLE `user014`
  ADD PRIMARY KEY (`userid_014`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories014`
--
ALTER TABLE `categories014`
  MODIFY `id_categories_014` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cats014`
--
ALTER TABLE `cats014`
  MODIFY `id_014` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `catsale014`
--
ALTER TABLE `catsale014`
  MODIFY `sale_id_014` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user014`
--
ALTER TABLE `user014`
  MODIFY `userid_014` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
