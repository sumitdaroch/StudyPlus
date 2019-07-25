-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 09:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pswd` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pswd`, `time`) VALUES
(1, 'navneet kaur', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2017-04-13 09:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `time`) VALUES
(1, 'HTML', '2017-04-13 09:42:09'),
(2, 'CSS', '2017-04-13 09:42:09'),
(3, 'PHP', '2017-05-22 18:19:49'),
(4, 'Android', '2017-05-22 18:20:08'),
(6, 'C', '2017-05-23 03:15:34'),
(7, 'JS', '2017-05-23 05:06:49'),
(8, 'Java', '2017-05-23 06:23:42'),
(9, 'Asp.Net', '2017-05-23 06:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `expert_id` int(11) NOT NULL,
  `expert_name` varchar(100) NOT NULL,
  `expert_email` varchar(100) NOT NULL,
  `expert_pswd` varchar(200) NOT NULL,
  `expert_designation` varchar(200) NOT NULL,
  `expert_company` varchar(200) NOT NULL,
  `expert_location` varchar(200) NOT NULL,
  `expert_phone` varchar(20) NOT NULL,
  `expert_qualification` varchar(200) NOT NULL,
  `expert_skills` varchar(200) NOT NULL,
  `expert_work_experience` varchar(100) NOT NULL,
  `expert_resume` varchar(100) NOT NULL,
  `expert_image` varchar(100) NOT NULL,
  `expert_status` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`expert_id`, `expert_name`, `expert_email`, `expert_pswd`, `expert_designation`, `expert_company`, `expert_location`, `expert_phone`, `expert_qualification`, `expert_skills`, `expert_work_experience`, `expert_resume`, `expert_image`, `expert_status`, `time`) VALUES
(1, 'john doe', 'john@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', 'developer', 'Sach Tech Pvt Ltd', 'Chandigarh', '9815777715', 'M.tech', 'PHP & C', '2 year', 'RESUME.doc', 'client_4.jpg', 'active', '2017-05-23 06:42:54'),
(6, 'Ram Sharma', 'ram@gmail.com', '4641999a7679fcaef2df0e26d11e3c72', 'asd', 'A2it', 'mohali', '987654321', 'csc', 'csc', '3', 'asd', 'asd', 'inactive', '2017-03-21 13:55:16'),
(7, 'Doe', 'doe@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', 'asd', 'asd', 'asd', '7654321890', 'mca', 'bca', '4', 'zxc', 'zxc', 'inactive', '2017-03-21 13:57:08'),
(17, 'Meeta sharma', 'meeta@gmail.com', '3b610c80ba75987d12bd50b2b3543d09', 'professor', 'G.P.G.C', 'Una', '98665543322', 'P.hd.', 'HTML , Asp.Net & Java', '4 Year', 'RESUME.docx', '3.jpg', 'active', '2017-05-23 06:41:38'),
(18, 'Rajni Kaushal', 'rajni@gmail.com', '7948cafb7cba212ff55b83a1206826c8', 'professor', 'web pvt. Ltd.', 'Una', '0987765544', 'M.C.A.', 'Android & Java Script', '4 year', 'RESUME.docx', '1.jpg', 'active', '2017-05-23 05:34:12'),
(19, 'Upasna', 'upasna@gmail.com', 'c7178efa2a27de98339180c8802b04c2', 'professor', 'web tech pvt. ltd.', 'Una', '09876544334', 'M.Tech.', 'Fundamentals of computer', '3 year', 'RESUME.docx', 't2.jpg', 'inactive', '2017-05-23 05:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `expert_rating`
--

CREATE TABLE `expert_rating` (
  `rating_id` int(100) NOT NULL,
  `expert_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert_rating`
--

INSERT INTO `expert_rating` (`rating_id`, `expert_id`, `user_id`, `status`) VALUES
(1, 13, 1, 'like'),
(2, 1, 1, 'like'),
(3, 1, 3, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `screenshot`
--

CREATE TABLE `screenshot` (
  `screenshot_id` int(100) NOT NULL,
  `screenshot_title` varchar(50) NOT NULL,
  `screenshot_uploadcover` varchar(50) NOT NULL,
  `screenshot_category` varchar(50) NOT NULL,
  `screenshot_uploaded_by` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screenshot`
--

INSERT INTO `screenshot` (`screenshot_id`, `screenshot_title`, `screenshot_uploadcover`, `screenshot_category`, `screenshot_uploaded_by`, `time`) VALUES
(1, 'html introduction', '6c91737b-715e-4c59-aad0-b947bb097907.png', 'HTML', 'admin', '2017-04-13 09:45:51'),
(2, 'html tags', 'html-tags-01.png', 'HTML', 'admin', '2017-04-13 09:46:01'),
(3, 'js', 'TS1Big.png', '', '18', '2017-05-23 05:54:19'),
(4, 'android', 'Android App screenshot.png', '', '18', '2017-05-23 05:55:05'),
(5, 'php string', 'php-tutorial-20-638.jpg', '', '1', '2017-05-23 05:56:01'),
(6, 'Add two number', 'hqdefault.jpg', '', '1', '2017-05-23 06:08:05'),
(7, 'dd12', 'hqdefault.jpg', '', '1', '2017-05-23 06:10:43'),
(8, 'html form', 'new_html.png', '', '1', '2017-05-23 06:16:08'),
(9, 'java', 'Screen Shot 2012-10-30 at 4.59.11 PM.png', '', '17', '2017-05-23 06:31:55'),
(10, 'form validation', 'validation.jpg', '', '17', '2017-05-23 06:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `screenshot_download`
--

CREATE TABLE `screenshot_download` (
  `download_id` int(100) NOT NULL,
  `screenshot_id` int(100) NOT NULL,
  `download` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screenshot_download`
--

INSERT INTO `screenshot_download` (`download_id`, `screenshot_id`, `download`) VALUES
(1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `sreenshot_rating`
--

CREATE TABLE `sreenshot_rating` (
  `rating_id` int(100) NOT NULL,
  `screenshot_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sreenshot_rating`
--

INSERT INTO `sreenshot_rating` (`rating_id`, `screenshot_id`, `user_id`, `status`) VALUES
(1, 9, 1, 'dislike');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(100) NOT NULL,
  `expert_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `enrolling_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `expert_id`, `user_id`, `status`, `enrolling_date`) VALUES
(5, '1', '3', 'subscribe', '13-04-2017'),
(6, '13', '1', 'subscribe', ''),
(7, '13', '3', 'subscribe', '02-05-2017'),
(8, '2', '3', 'subscribe', '02-05-2017'),
(9, '17', '3', 'subscribe', '23-05-2017');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `tutorial_id` int(100) NOT NULL,
  `tutorial_title` varchar(20) NOT NULL,
  `tutorial_uploadcover` varchar(50) NOT NULL,
  `tutorial_uploadtutorial` varchar(50) NOT NULL,
  `tutorial_category` varchar(50) NOT NULL,
  `tutorial_uploaded_by` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`tutorial_id`, `tutorial_title`, `tutorial_uploadcover`, `tutorial_uploadtutorial`, `tutorial_category`, `tutorial_uploaded_by`, `time`) VALUES
(3, 'introduction to HTML', 'd4.jpg', 'synoposis.doc', 'HTML', 'admin', '2017-04-17 09:51:14'),
(6, 'introduction to c', 'edu2.jpg', 'Practical File UML (6).doc', 'ddd', '1', '2017-03-19 07:02:39'),
(8, 'introduction to html', 'asd', 'asd', 'asd', 'asd', '2017-03-27 15:58:33'),
(9, 'introduction to andr', 'w1.jpg', 'AOS FRONT PAGES.docx', 'ddd', 'admin', '2017-03-27 16:06:14'),
(10, 'introduction to c++', 'abo1.jpg', 'Bhai Gurdas Institute of Management.docx', 'ddd', 'admin', '2017-03-27 16:12:06'),
(12, 'html introduction', '6c91737b-715e-4c59-aad0-b947bb097907.png', 'Day1.docx', 'HTML', 'admin', '2017-04-13 09:50:26'),
(13, 'Introduction of php', 'php.jpg', 'php_tutorial.pdf', 'PHP', '1', '2017-05-22 18:21:05'),
(14, 'Introduction to CSS', '5.png', 'css_tutorial.pdf', 'CSS', '16', '2017-05-22 19:07:54'),
(15, 'Introduction to Andr', 'android.jpg', 'android_tutorial.pdf', 'Android', '18', '2017-05-23 03:38:42'),
(16, 'Introduction to Java', 'js.png', 'javascript_tutorial.pdf', 'Java Script', '18', '2017-05-23 05:15:48'),
(17, 'Fundamental of compu', 'images.jpg', 'computer_fundamentals_tutorial.pdf', 'Fundamentals of Comp', '19', '2017-05-23 03:47:40'),
(18, 'C programming', 'images.jpg', 'cprogramming_tutorial.pdf', 'C', '1', '2017-05-23 05:14:05'),
(19, 'java Script tutorial', 'js.png', 'javascript_tutorial.pdf', 'JS', '18', '2017-05-23 05:22:22'),
(20, 'Html form', '14570828119302_illu-cours_html5-css3.png', 'html_forms.pdf', 'HTML', '17', '2017-05-23 05:45:17'),
(21, 'Introduction to Asp.', 'aspnet_3.png', 'asp.net_tutorial.pdf', 'Asp.Net', '17', '2017-05-23 06:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_download`
--

CREATE TABLE `tutorial_download` (
  `download_id` int(100) NOT NULL,
  `tutorial_id` int(100) NOT NULL,
  `download` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial_download`
--

INSERT INTO `tutorial_download` (`download_id`, `tutorial_id`, `download`) VALUES
(1, 11, '5'),
(2, 6, '3'),
(3, 13, '3'),
(4, 17, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_rating`
--

CREATE TABLE `tutorial_rating` (
  `rating_id` int(100) NOT NULL,
  `tutorial_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial_rating`
--

INSERT INTO `tutorial_rating` (`rating_id`, `tutorial_id`, `user_id`, `status`) VALUES
(1, 11, 1, 'like'),
(2, 6, 1, 'like'),
(3, 6, 3, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_pswd` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_email`, `user_pswd`, `time`) VALUES
(1, 'navneet', 'kaur', 'nav@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-05-22 17:39:52'),
(2, 'amanmanju', 'kaursingla', 'sing@gmail.com', '202cb962ac59075b964b07152d234b70', '2017-03-22 17:03:46'),
(3, 'annu', 'rana', 'annu@gmail.com', 'a03da782025a0f53973537ecc0308d54', '2017-05-22 17:38:19'),
(4, 'jatinder', 'kumar', 'jatinder@gmail.com', '4cdf29939e36963e78e1319d2b0d9a82', '2017-05-22 18:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `contact_id` int(100) NOT NULL,
  `name` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`contact_id`, `name`, `email`, `subject`, `contact`, `message`) VALUES
(11, 'navneet', 'navneetkaurjagait@gmail.com', 'navneetkaurjagait@gmail.com', '', 'Hi, admin .. i also want to donate. can u explain me the procedure on my mail id.'),
(12, 'navneet', 'navneetkaurjagait@gmail.com', 'my donation', '', 'Hi, admin .. i also want to donate. can u explain me the procedure on my mail id.'),
(13, 'abc', 'java.programming4016@gmail.com', 'my data', '9876543210', 'iyoui');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(100) NOT NULL,
  `video_title` varchar(50) NOT NULL,
  `video_uploadcover` varchar(50) NOT NULL,
  `video_list` varchar(100) NOT NULL,
  `video_category` varchar(50) NOT NULL,
  `video_uploaded_by` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_uploadcover`, `video_list`, `video_category`, `video_uploaded_by`, `time`) VALUES
(1, 'html introduction', '6c91737b-715e-4c59-aad0-b947bb097907.png', 'v4oN4DuR7YU', 'HTML', '13', '2017-04-17 05:13:33'),
(2, 'html tags', 'html-tags-01.png', 'npWZLmejedk', 'HTML', 'admin', '2017-04-13 09:49:28'),
(4, 'Introduction of php', 'php.jpg', 'DG0C3Tntl1M', 'PHP', 'admin', '2017-05-22 18:37:51'),
(8, 'Introduction to CSS', '5.png', 'CUxH_rWSI1k', 'CSS', '16', '2017-05-22 19:28:47'),
(9, 'Introduction to Android App Development For Beginn', 'android.jpg', 'qqzy1EEid0E ', 'Android', '18', '2017-05-23 03:49:16'),
(10, 'java Script tutorial.', '7.png', 'vZBCTc9zHtI', 'Java Script', '18', '2017-05-23 05:25:19'),
(11, 'Fundamental of computers (Number system)', 'android.jpg', 'B80efipymtc', 'Fundamentals of Comp', '19', '2017-05-23 03:53:58'),
(12, 'c programing', 'images.jpg', '-CpG3oATGIs   ', 'C', '1', '2017-05-23 05:20:37'),
(13, 'html form', '14570828119302_illu-cours_html5-css3.png', 'iGTYHPaGA8c', 'HTML', '17', '2017-05-23 05:46:57'),
(14, 'Java programming', 'java-mini-logo.png', 'WPvGqX-TXP0', 'Java', '17', '2017-05-23 06:34:06'),
(15, 'Basic of Asp.Net', 'aspnet_3.png', '7xlLSB5PZEM', 'Asp.Net', '17', '2017-05-23 06:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `video_download`
--

CREATE TABLE `video_download` (
  `download_id` int(100) NOT NULL,
  `video_id` int(100) NOT NULL,
  `download` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_download`
--

INSERT INTO `video_download` (`download_id`, `video_id`, `download`) VALUES
(1, 1, '7'),
(2, 2, '2'),
(3, 3, '2'),
(4, 5, '1'),
(5, 6, '1'),
(6, 7, '2'),
(7, 8, '1'),
(8, 11, '2'),
(9, 9, '1'),
(10, 10, '1');

-- --------------------------------------------------------

--
-- Table structure for table `video_rating`
--

CREATE TABLE `video_rating` (
  `rating_id` int(100) NOT NULL,
  `video_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_rating`
--

INSERT INTO `video_rating` (`rating_id`, `video_id`, `user_id`, `status`) VALUES
(1, 3, 3, 'like'),
(2, 6, 3, 'like');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`expert_id`);

--
-- Indexes for table `expert_rating`
--
ALTER TABLE `expert_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `screenshot`
--
ALTER TABLE `screenshot`
  ADD PRIMARY KEY (`screenshot_id`);

--
-- Indexes for table `screenshot_download`
--
ALTER TABLE `screenshot_download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `sreenshot_rating`
--
ALTER TABLE `sreenshot_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`tutorial_id`);

--
-- Indexes for table `tutorial_download`
--
ALTER TABLE `tutorial_download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `tutorial_rating`
--
ALTER TABLE `tutorial_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `video_download`
--
ALTER TABLE `video_download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `video_rating`
--
ALTER TABLE `video_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `expert_rating`
--
ALTER TABLE `expert_rating`
  MODIFY `rating_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `screenshot`
--
ALTER TABLE `screenshot`
  MODIFY `screenshot_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `screenshot_download`
--
ALTER TABLE `screenshot_download`
  MODIFY `download_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sreenshot_rating`
--
ALTER TABLE `sreenshot_rating`
  MODIFY `rating_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `tutorial_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tutorial_download`
--
ALTER TABLE `tutorial_download`
  MODIFY `download_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tutorial_rating`
--
ALTER TABLE `tutorial_rating`
  MODIFY `rating_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `video_download`
--
ALTER TABLE `video_download`
  MODIFY `download_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `video_rating`
--
ALTER TABLE `video_rating`
  MODIFY `rating_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
