-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2025 at 01:58 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campusxchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_intern`
--

CREATE TABLE `applied_intern` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Whatsapp_No` varchar(15) NOT NULL,
  `Domain` varchar(40) NOT NULL,
  `Duration` varchar(30) NOT NULL,
  `College` varchar(40) DEFAULT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `applied_intern`
--

INSERT INTO `applied_intern` (`Name`, `Email`, `Whatsapp_No`, `Domain`, `Duration`, `College`, `Address`) VALUES
('PANKAJ KUMAR DAS', 'pankajkumardas8678@outlook.com', '9155726627', 'Full-stack Development', '2 Months', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'pankajkumardas878@outlook.com', '9155726627', 'Full-stack Development', '45 Days', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'usereail55695121@gmail.com', '9155726627', 'Web Development in PHP', '1 Month', 'kikuyu', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'Pd5569121@gmail.com', '9155726625', 'C Programming', '2 Months', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'Pd5569121@gmail.com', '9155726625', 'C Programming', '2 Months', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'Pd5569121@gmail.com', '9155726625', 'C Programming', '2 Months', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'pankajkumardas8678@outlook.com', '9155726627', 'Full-stack Development', '2 Months', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'pankajkumardas8678@outlook.com', '9155726627', 'Full-stack Development', '2 Months', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'pankajkumardas8678@outlook.com', '9155726627', 'SEO', '45 Days', 'CCSIT', 'Kkishanganj'),
('PANKAJ KUMAR DAS', 'pankajkumardas8678@outlook.com', '9155726627', 'Web Development in PHP', '2 Months', 'CCSIT', 'Kkishanganj');

-- --------------------------------------------------------

--
-- Table structure for table `email_list`
--

CREATE TABLE `email_list` (
  `Emails` varchar(30) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `email_list`
--

INSERT INTO `email_list` (`Emails`, `Date`) VALUES
('Pd5569121@gmail.com', '2025-09-19 18:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `content` varchar(270) DEFAULT NULL,
  `noteLink` varchar(82) DEFAULT NULL,
  `created_at` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`, `noteLink`, `created_at`) VALUES
(1, 'DataScience', 'Data Science is an interdisciplinary field that combines statistics, computer science, and domain knowledge to extract meaningful insights from structured and unstructured data. It involves processes like data collection, cleaning, analysis, visualization, and modeling.', 'https://drive.google.com/file/d/1v3VyhLIe01gfFxlqyonpkDtT_DXlDZjz/view?usp=sharing', '09-06-2025 18:19'),
(2, 'Cyber Security', 'Cybersecurity refers to the practice of protecting systems, networks, and data from digital attacks, theft, and damage. It involves using technologies, processes, and best practices to defend against threats like malware, phishing, ransomware, and unauthorized access.', 'https://drive.google.com/file/d/1r-8qF36Kmv4jWFgEyNKVHbdsDO9Atuu0/view?usp=sharing', '09-06-2025 18:19'),
(3, 'Software Engineering', 'Software Engineering is the systematic approach to the development, operation, maintenance, and retirement of software. It applies engineering principles to create reliable, efficient, and scalable software systems.', 'https://drive.google.com/file/d/1mDz8EAcxwxdyWbNHQW4bReTOcwB3SeNy/view?usp=sharing', '09-06-2025 18:22'),
(4, 'Opreating system', 'An Operating System (OS) is system software that manages computer hardware and software resources and provides services for computer programs. It acts as an interface between the user and the hardware.\r\n\r\nKey functions of an operating system include:', 'https://drive.google.com/file/d/1AB51P3ERExu9MntR1ZvuT-P7QaR392OL/view?usp=sharing', '09-06-2025 18:24'),
(5, 'Environmental Scienc', 'Environmental science is a multifaceted, interdisciplinary field that seeks to understand the complex interactions between living organisms and their environment, with the ultimate goal of addressing critical environmental challenges and promoting a sustainable future. ', 'https://drive.google.com/file/d/1oKavyTEplTm-wAohZMauaR_8NdzfVsGm/view?usp=sharing', '09-06-2025 18:24'),
(6, 'Computer Fundamental', 'Computer�is an electronic device that can process information, store data, and carry out tasks. It is derived from the Latin word \"computare\" which means to calculate. It takes row data as an input, processes it, and then gives result as desired.', 'https://drive.google.com/file/d/1mxXgJPYOIHV5pwzYOFsEp3mTrFKrnJK5/view?usp=sharing', '09-06-2025 18:24'),
(7, 'Digital Marketing', 'Digital marketing, also known as online marketing, is the practice of promoting brands, products, or services through digital channels and technologies.', 'https://drive.google.com/file/d/1a8zYHTiU7FWnt77i04RQfmYbWeRk2z5L/view?usp=sharing', '10-06-2025 18:24'),
(8, 'Machine Learning', 'Machine learning is a branch of artificial intelligence that enables algorithms to uncover hidden patterns within datasets. It allows them to predict new, similar data without explicit programming for each task.', 'https://drive.google.com/file/d/18aM0ucw63CVevZ4VTk7EBPUSpnWkfsku/view?usp=sharing', '11-06-2025 18:24');

-- --------------------------------------------------------

--
-- Table structure for table `verified_intern`
--

CREATE TABLE `verified_intern` (
  `Name` varchar(17) DEFAULT NULL,
  `Domain` varchar(25) DEFAULT NULL,
  `Duration` varchar(9) DEFAULT NULL,
  `Intern_ID` varchar(10) DEFAULT NULL,
  `College` varchar(14) DEFAULT NULL,
  `Project_Link` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `verified_intern`
--

INSERT INTO `verified_intern` (`Name`, `Domain`, `Duration`, `Intern_ID`, `College`, `Project_Link`) VALUES
('PANKAJ KUMAR DAS ', 'Web Development in PHP', '45 Days ', 'CXSEP00125', 'TMU', 'https://www.youtube.com/watch?v=piCkEF2O6_s&list=PPSV&t=315s'),
('RAHUL KUMAR', 'Web Development in Python', '45 Days ', 'CXSEP00225', 'TMU ,Moradabad', 'https://www.youtube.com/watch?v=piCkEF2O6_s&list=PPSV&t=314s'),
('DIPUL RAJ', 'Full stack Development', '2 Months', 'CXSEP00325', 'TMU , CCSIT', 'https://www.youtube.com/watch?v=piCkEF2O6_s&list=PPSV&t=316s'),
('RAJNEESH KUMAR', 'Generative AI ', '45 Days ', 'CXSEP00425', 'TMU', 'https://www.youtube.com/watch?v=piCkEF2O6_s&list=PPSV&t=317s'),
('BANTY MISHRA', 'Social Media Marketing', '1 Months ', 'CXSEP00525', 'TMU', 'https://www.youtube.com/watch?v=piCkEF2O6_s&list=PPSV&t=318s'),
('AVINASH RAM', 'Data Analytics', '45 Days ', 'CXSEP00625', 'TMU,CCSIT', 'https://www.youtube.com/watch?v=piCkEF2O6_s&list=PPSV&t=319s'),
('', ' ', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `web_client`
--

CREATE TABLE `web_client` (
  `Name` varchar(30) NOT NULL,
  `Mobile` varchar(12) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Choice` varchar(30) NOT NULL,
  `Plan` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `web_client`
--

INSERT INTO `web_client` (`Name`, `Mobile`, `Email`, `Address`, `Choice`, `Plan`, `Date`) VALUES
('PANKAJ KUMAR DAS', '9155726625', 'Pd5569121@gmail.com', 'Kishanganj Bihar', 'Bussiness Website', 'Standard', '2025-09-19 13:55:45.332805'),
('PANKAJ KUMAR DAS', '9155726625', 'Pd5569121@gmail.com', 'Kishanganj Bihar', 'Landing Page', 'Basice', '2025-09-19 14:05:55.450106'),
('PANKAJ KUMAR DAS', '9155726625', 'Pd5569121@gmail.com', 'Kishanganj Bihar', 'Bussiness Website', 'Standard', '2025-09-19 14:06:16.182116');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
