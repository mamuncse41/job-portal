-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 04:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bio` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `user_id`, `unique_id`, `title`, `phone`, `bio`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 6, '589ca203c281b', 'aaaaa', '017395603241', 'this is the bio of my project this is the bio of my project this is the bio of my project  this is the bio of my project  vthis is the bio of my project ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 7, '589ca9932cc25', 'Web Application Devloper', '01739560326', 'this is the bio of my project this is the bio of my project this is the bio of my project  this is the bio of my project  vthis is the bio of my project ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `year` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `user_id`, `title`, `organization`, `description`, `location`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '589ca203c281b', 'web application award', 'fsdfgdsgdsgdf', 'dfgdfgdgfd fgdgdf gffdg dfdfg', 'dhaka', '2016-10-12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '589ca9932cc25', 'Web Application Devloper award', 'BITM', 'Web Application Devloper award Web Application Devloper award Web Application Devloper awardWeb Application Devloper awardWeb Application Devloper awardWeb Application Devloper awardWeb Application Devloper award  ', 'dhaka', '2016-02-05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `passing_year` date NOT NULL,
  `main_subject` varchar(255) NOT NULL,
  `education_board` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `title`, `institute`, `result`, `passing_year`, `main_subject`, `education_board`, `course_duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '589ca203c281b', 'bsc', 'khjkhjkh', '4011', '2017-02-12', 'PHP', 'Dhaka', '2 year', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '589ca9932cc25', 'Bsc in engineering', 'Northern institute bangladesh', '3.00', '2017-01-12', 'computer science', 'Dhaka', '4-year', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '589ca9932cc25', 'Diploma in engineering', 'Infra polytechnic institute barisal', '3.61', '2011-08-16', 'computer science', 'Dhaka', '4-year', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `company_location` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `designation`, `company_name`, `start_date`, `end_date`, `company_location`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '589ca203c281b', 'sdfdgdfsg', 'dsfgdsfgdsfg', '2017-12-10', '2018-03-10', 'dhdka', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '589ca9932cc25', 'junior instructor', 'Eskayef Pharmaceutical Company Limited', '2017-11-02', '2017-11-02', 'dhdka', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '589ca9932cc25', 'jr instructor', 'infra polytechnic institute', '2017-12-10', '2017-11-02', 'Barisal', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `no_of_items` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `user_id`, `title`, `no_of_items`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '589ca203c281b', 'fdgdgsdfgd', 241, '589ca6326f1111486661170th (2).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '589ca9932cc25', 'Web Application Devloper', 203, '589cd1934f25d1486672275th.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `user_id`, `title`, `description`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '589ca203c281b', 'dfgdsgsdf', 'dfgdsfgsdfg', '589ca61d3c8b31486661149School logo.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '589ca203c281b', 'sdfsafads', 'sdfgsdfsdfsd', '589ca6bd41dc11486661309codebreakers.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '589ca9932cc25', 'sleeping ', 'sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping sleeping ', '589cd17b1ddb81486672251edge-code-icon.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `title`, `description`, `img`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '589ca203c281b', 'rteterter', 'tertertertert', '589ca741a319e1486661441th (2).jpg', 'ertertertertert', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '589ca9932cc25', 'Web Application Devloper', 'Web Application Devloper Web Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application Devloper', '589ccb00bc5641486670592codebreakers.png', 'php laravel', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '589ca9932cc25', 'C# Desktop Application Development', ' Desktop Application Development Desktop Application DevelopmentDesktop Application Development Desktop Application DevelopmentDesktop Application DevelopmentDesktop Application DevelopmentDesktop Application DevelopmentDesktop Application DevelopmentDesktop Application DevelopmentDesktop Application DevelopmentDesktop Application DevelopmentDesktop Application DevelopmentDesktop Application Development', '589ddc85d9a951486740613edge-code-icon.png', 'php mysql', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `tags`, `categories`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '589ca203c281b', 'reetert', 'erterter', 'tertre', 'tertert', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '589ca9932cc25', 'Web Application Devloper', 'Web Application Devloper Web Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Application DevloperWeb Applicatio', 'Web Application Devloper', 'Web Application', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '589ca9932cc25', 'web devlopment', 'web devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopmentweb devlopment', 'Web Application Devloper', 'web devlopment', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `description`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '589ca203c281b', 'web development', 'asdasda', '589ca3d923b121486660569th.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '589ca9932cc25', 'Web Application Devloper service', 'Web Application Devloper service Web Application Devloper service Web Application Devloper serviceWeb Application Devloper serviceWeb Application Devloper serviceWeb Application Devloper serviceWeb Application Devloper service', '589cc9b513f791486670261th.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '589ca9932cc25', 'new website service', 'new website service new website servicenew website servicenew website servicenew website servicenew website servicenew website servicenew website servicenew website servicenew website servicenew website servicenew website service', '589d7772ae5e7148671473867085331-free-chipmunk-wallpapers.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `unique_id`, `title`, `fullname`, `description`, `address`, `featured_img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 6, '589ca203c281b', 'web trableshooting', 'sdadasd', 'asdasda', 'adsasdasd', '589ca5507d3571486660944edge-code-icon.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 7, '589ca9932cc25', 'web devloper in PHP', 'Mostafizur Rahman', 'this is description this is description this is descriptionthis is descriptionthis is descriptionthis is descriptionthis is descriptionthis is descriptionthis is ', 'this is description this is description this is descriptionthis is descriptionthis is descriptionthis is descriptionthis is descriptionthis is descriptionthis is descriptionthis is description', '589cb5176921d148666498367085331-free-chipmunk-wallpapers.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `level` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `experience_area` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `title`, `description`, `level`, `experience`, `experience_area`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '589ca203c281b', 'web devlopment', 'terterterte', 'tertreter', 'trertert', 'erterterter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '589ca9932cc25', 'web development skill', 'web development skillweb development skillweb development skillweb development skillweb development skillweb development skillweb development skillweb development skillweb development skill', 'web development skill', '4-years', 'development', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '589ca9932cc25', 'C# Desktop Application Development', ' Development desktop Apps Development desktop Apps Development desktop Apps Development desktop Apps Development desktop Apps Development desktop Apps Development desktop Apps Development desktop Apps', 'mid level', '3 years', 'C# Desktop Application Microsoft Sql Server', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE `teaching` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`id`, `user_id`, `title`, `institute`, `description`) VALUES
(3, '589ca203c281b', 'dsafasdf', 'dsafasdfsadf', 'sadfsadfsdafsadf'),
(4, '589ca9932cc25', 'Web devlopment', 'BITM', 'Web devlopment Web devlopment Web devlopment Web devlopment v Web devlopment Web devlopment Web devlopment Web devlopment v Web devlopment Web devlopment Web devlopment Web devlopment vWeb devlopment Web devlopment Web devlopment Web devlopment v'),
(5, '589ca9932cc25', 'C# Desktop Application Development', 'US softwer LTD.', ' THis is teaching DEscription THis is teaching DEscription  THis is teaching DEscription THis is teaching DEscription  THis is teaching DEscription THis is teaching DEscription  THis is teaching DEscription THis is teaching DEscription ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `user_role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `username`, `email`, `password`, `token`, `is_active`, `user_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '589ca203c281b', 'mamun', 'mamun@gmail.com', '123456789', 'f87095637ed82c1e6d131b714674b30174b7e83c', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '589ca9932cc25', 'mostafiz', 'mostafiz128@gmail.com', '123456789', '19d9147f116db9b623b4bfac18b5b28b0e60788a', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teaching`
--
ALTER TABLE `teaching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
