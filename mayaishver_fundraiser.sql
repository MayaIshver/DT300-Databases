-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 10:06 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mayaishver_fundraiser`
--

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE `charities` (
  `charity_id` smallint UNSIGNED NOT NULL COMMENT 'Unique identifier for each charity made ',
  `charity_name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'The name of each charity fundraiser',
  `blurb` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'A paragraph written about the charity and why the fundraiser was started',
  `don_goal` mediumint UNSIGNED NOT NULL COMMENT 'The donation goal for the charity ',
  `account_id` smallint UNSIGNED NOT NULL COMMENT 'The account_id is the foreign key and links the charities table and fundraiser table',
  `donor_id` smallint UNSIGNED NOT NULL COMMENT 'The donor_id is the foreign key and links the charities table and donor table'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`charity_id`, `charity_name`, `blurb`, `don_goal`, `account_id`, `donor_id`) VALUES
(1, 'KidsCan ', 'KidsCan is Aotearoa New Zealand’s leading charity dedicated to helping Kiwi kids affected by poverty. We help tamariki experiencing hardship by providing food, jackets, shoes and health products to schools and early childhood centres across New Zealand.\r\n\r\nWith these essentials, kids can participate in learning and have the opportunity for a better future.', 500000, 1, 1),
(2, 'CanTeen', 'Around 4,200 rangatahi / young people across Aotearoa are impacted by cancer each year, whether it’s their own diagnosis or that of an immediate family member. CanTeen’s mission is to make sure they don’t have to face cancer alone.', 600000, 2, 2),
(3, 'Ronald McDonald House ', 'RMHC New Zealand supports families when their child is in a New Zealand hospital away from home.\r\n\r\nThe Ronald McDonald House® and Ronald McDonald Family Room® programmes take care of the practical things in life so families can focus on their child staying in a hospital away from home.\r\n\r\nThis helps to relieve stresses like paying for a place to sleep near the hospital, organising family meals and needing a friendly ear to listen on tough days.\r\n', 450000, 3, 3),
(4, 'Tearfund', 'We protect the vulnerable from modern slavery. We Restore hope and peace after disaster strikes. We Sponsor children in need, and we Empower the poor to help themselves. This approach empowers communities to help themselves and find local, long term, sustainable solutions to poverty.', 490000, 4, 4),
(5, 'The Asthma Foundation', 'The Foundation\'s vision is to \'be the leaders in respiratory health knowledge to improve respiratory health outcomes for all\' by developing and supporting respiratory health best practice through Research, Education and Advocacy. The Foundation\'s key events, campaigns and publications all support our vision.', 800000, 5, 5),
(6, 'Hospice NZ', 'Hospice is a holistic wrap around service of care.  It’s not just a building and its not just doctors and nurses.\r\n\r\nHospices provide a range of supportive care from music therapy, sharing your life story with a biographer, bereavement counselling, spiritual care, and physiotherapy, plus many other services.  It’s whatever brings the individual and their Whānau peace and joy.', 100000, 6, 6),
(7, 'Heart Foundation', 'The Heart Foundation is New Zealand’s heart charity, leading the fight against our country’s single biggest killer – heart disease.    We rely on the generosity and goodwill of people like you to support our work.', 750000, 7, 7),
(8, 'Starship Foundation', 'Starship Children\'s Health provides a wide range of complex medical, surgical, cardiac and mental health services for children and young people throughout New Zealand and the South Pacific. Starship is a major teaching centre. It aims to lead the nation in paediatric training and research.  Services are provided in inpatient, outpatient, daystay and community settings.', 300000, 8, 8),
(9, 'UNICEF', 'No other organisation has UNICEF\'s experience, expertise and reach.                                       \r\nUNICEF fights for every child\'s right to survive and thrive into adulthood.  UNICEF\'s mission is to create a better world, by advocating for the protection of children\'s rights. To do this, we bring people together: governments, donors, humanitarian agencies, businesses and children themselves.\r\nThis is what UNICEF does, every day, for all children around the world.\r\n', 40000, 9, 9),
(10, 'Youthline', 'Youthline is a \"\"with youth, for youth\"\" organisation that supports young people throughout Aotearoa New Zealand. We have been providing support to Kiwis aged between 12-24 years for more than 50 years.\r\nYouthline offers a free Helpline service (text, phone, webchat & email), free face-to-face counselling services, youth mentoring, and programmes in schools and communities to help people grow and develop.', 900000, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` smallint UNSIGNED NOT NULL COMMENT 'The unique identifier for each donor ',
  `f_name` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'The first name of each donor',
  `l_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'The lasy name of each done',
  `email` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Each donor''s email',
  `pledge` mediumint UNSIGNED NOT NULL COMMENT 'The amount each donor is pledging to the charity'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `f_name`, `l_name`, `email`, `pledge`) VALUES
(1, 'Nancy', 'Torres', 'Nancy.Torres@gmail.com', 10),
(2, 'Camryn', 'Ochoa', 'Camryn.Ochoa@gmail.com', 70),
(3, 'Franco ', 'Williams', 'Franco.Williams@gmail.com', 15),
(4, 'Branson', 'Goodwin', 'Branson.Goodwin@gmail.com', 700),
(5, 'Abigayle', 'Simpson', 'Abigayle.Simpson@gmail.com', 100),
(6, 'Saul', 'Nixon', 'Saul.Nixon@gmail.com', 60),
(7, 'Nancy ', 'Torres', 'Nancy.Torres@gmail.com', 85),
(8, 'Kolten', 'Stein', 'Kolten.Stein@gmail.com', 1000),
(9, 'Jaylen', 'Harris', 'Jaylen.Harris@gmail.com', 40),
(10, 'Ryland', 'Hall', 'Ryland.Hall@gmail.com', 25);

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `account_id` smallint UNSIGNED NOT NULL COMMENT 'Unique identifier for the fundraiser accounts made',
  `f_name` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'First name of the fundraising person',
  `l_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'last name of the fundraising person',
  `birth_date` date NOT NULL COMMENT 'Birth date of the fundraising person',
  `email` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'fundraisers email address',
  `username` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'The fundraiser needs to pick a username to display on the charity pages',
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Password for the fundraiser so they can log into their account.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`account_id`, `f_name`, `l_name`, `birth_date`, `email`, `username`, `password`) VALUES
(1, 'Sadie', 'Macdonald', '2004-08-25', 'Sadie.Macdonald@gmail.com', 'SadieM', 'Youtube21!'),
(20, 'Julia', 'Mooney', '1989-07-01', 'Julia.Mooney@gmail.com', 'JuliaM', '21Youtube!'),
(21, 'Camden', 'Hayden', '2004-06-18', 'Camden.Hayden@gmail.com', 'CamdenH', 'Happydays11!'),
(22, 'Nataly', 'Hodges', '2002-07-04', 'Nataly.Hodges@gmail.com', 'NatalyH', '11Happydays!'),
(23, 'Abigayle', 'Simpson', '1998-10-29', 'Abigayle.Simpson@gmail.com', 'AbigayleS', 'Forgetme04!'),
(24, 'Jimmy', 'Duke', '1983-01-30', 'Jimmy.Duke@gmail.com', 'JimmyD', '04Forgetme'),
(25, 'Kai', 'Watkins', '2003-09-12', 'Kai.Watkins@gmail.com', 'WatkinsK', 'Wingnut01'),
(26, 'Emelia', 'Ellie', '2001-01-01', 'Emelia.Ellie@gmail.com', 'EmeliaE', '01Wingnut'),
(27, 'Rex', 'Gilmore', '1999-02-23', 'Rex.Gilmore@gmail.com', 'GilmoreR', 'Guesswho03'),
(28, 'Zachary', 'Bowman', '2001-12-31', 'Zachary.Bowman@gmail.com', 'ZacharyB', '17Guesswho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charities`
--
ALTER TABLE `charities`
  ADD PRIMARY KEY (`charity_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charities`
--
ALTER TABLE `charities`
  MODIFY `charity_id` smallint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for each charity made ', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` smallint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'The unique identifier for each donor ', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fundraiser`
--
ALTER TABLE `fundraiser`
  MODIFY `account_id` smallint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for the fundraiser accounts made', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
