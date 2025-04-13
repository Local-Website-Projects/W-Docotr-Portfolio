-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2025 at 12:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors_basic_info`
--

CREATE TABLE `doctors_basic_info` (
  `basic_info_id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `doctors_name` varchar(500) NOT NULL,
  `doctors_age` varchar(500) NOT NULL,
  `doctors_birthplace` varchar(500) NOT NULL,
  `doctors_phone_number` varchar(20) NOT NULL,
  `doctors_email` varchar(255) NOT NULL,
  `doctors_years_of_experience` int(11) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_basic_info`
--

INSERT INTO `doctors_basic_info` (`basic_info_id`, `doctors_id`, `doctors_name`, `doctors_age`, `doctors_birthplace`, `doctors_phone_number`, `doctors_email`, `doctors_years_of_experience`, `inserted_at`, `updated_at`) VALUES
(1, 1, 'Test Doctor', '30', 'Khulna, Bangladesh', '01729277765', 'testdoctor@gmail.com', 10, '2025-04-05 11:48:49', '2025-04-05 16:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_blog`
--

CREATE TABLE `doctors_blog` (
  `blog_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `blog_title` varchar(500) NOT NULL,
  `publish_date` varchar(255) NOT NULL,
  `blog_body` text NOT NULL,
  `blog_image` varchar(500) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_blog`
--

INSERT INTO `doctors_blog` (`blog_id`, `doctor_id`, `blog_title`, `publish_date`, `blog_body`, `blog_image`, `inserted_at`, `updated_at`) VALUES
(7, 1, 'What is the hardest thing about a lawyer?', '04/15/2025', '<p>We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled.</p><p>We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled data struct.</p><blockquote><p><strong>“We can easily manage if we will only take, each day, the burden appointed to it. But the load will be too heavy for us if we carry yesterday’s burden over again today, and then add the burden of the morrow before we are required to bear it factorial non.”</strong></p></blockquote><h2><strong>We denounce with righteous of indigent nation and dislike who working are so beguiled</strong></h2><p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium data structures manages data.</p><ul><li>How will digital activities impact traditional manufacturing.</li><li>All these digital elements and projects aim to enhance</li><li>I monitor my staff with software that takes screen.</li><li>Laoreet dolore magna niacin sodium glutimate.</li><li>Minim veniam quis niacin sodium nostrud exer.</li></ul><p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiore.</p><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>', 'blog_image/38830_blog-details-01.jpg', '2025-04-12 17:02:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_contact`
--

CREATE TABLE `doctors_contact` (
  `contact_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_contact`
--

INSERT INTO `doctors_contact` (`contact_id`, `doctor_id`, `name`, `phone_number`, `email`, `message`, `status`, `inserted_at`, `updated_at`) VALUES
(1, 1, 'Mugdho Saha', '01729277768', 'sahamugdho@gmail.com', 'This is a test message', 1, '2025-04-13 11:00:35', '0000-00-00 00:00:00'),
(2, 1, 'Monoget Saha', '01729277765', 'monoget1@gmail.com', 'This is a test message', 0, '2025-04-13 11:02:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_experience`
--

CREATE TABLE `doctors_experience` (
  `experience_id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `experience_title` varchar(500) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_experience`
--

INSERT INTO `doctors_experience` (`experience_id`, `doctors_id`, `experience_title`, `short_desc`, `duration`, `inserted_at`, `updated_at`) VALUES
(1, 1, 'Test Experience', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2020-2021', '2025-04-06 15:15:16', '2025-04-06 15:51:35'),
(2, 1, 'Test Experience 2', '', '2021-2023', '2025-04-06 15:15:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_expertise`
--

CREATE TABLE `doctors_expertise` (
  `expertise_id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `percentage` int(11) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_expertise`
--

INSERT INTO `doctors_expertise` (`expertise_id`, `doctors_id`, `title`, `description`, `percentage`, `inserted_at`, `updated_at`) VALUES
(1, 1, 'Cardiology', 'This is a test line of description for cardiology.', 90, '2025-04-06 11:52:51', '0000-00-00 00:00:00'),
(2, 1, 'Diabetes', 'This is a test line of description for diabetes.', 95, '2025-04-06 11:54:09', '0000-00-00 00:00:00'),
(3, 1, 'Medicine', 'This is a test line of description for Medicine', 90, '2025-04-06 11:54:44', '2025-04-06 12:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_services`
--

CREATE TABLE `doctors_services` (
  `doctor_service_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `service_title` varchar(500) NOT NULL,
  `short_desc` varchar(5000) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_services`
--

INSERT INTO `doctors_services` (`doctor_service_id`, `doctor_id`, `service_title`, `short_desc`, `inserted_at`, `updated_at`) VALUES
(1, 1, 'Cardiologist', 'We always manage all aspects of the patient journey, from diary management and transcription to phone calls.', '2025-04-10 14:52:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_social_media`
--

CREATE TABLE `doctors_social_media` (
  `social_media_id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_social_media`
--

INSERT INTO `doctors_social_media` (`social_media_id`, `doctors_id`, `whatsapp`, `facebook`, `linkedin`, `instagram`, `inserted_at`, `updated_at`) VALUES
(1, 1, '#', 'https://www.facebook.com/', 'https://www.linkedin.com/login', 'https://www.instagram.com/', '2025-04-05 13:18:36', '2025-04-05 17:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `status`, `inserted_at`, `updated_at`) VALUES
(1, 'Test Admin', 'test@admin.com', '$2y$10$HhEb0SaUdTRyKw3zf00OD.T7hT0tLNW4EJ.fBM6FvCUWcD9xD/SXa', 1, '2025-03-29 17:11:25', '2025-04-13 13:08:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_basic_info`
--
ALTER TABLE `doctors_basic_info`
  ADD PRIMARY KEY (`basic_info_id`);

--
-- Indexes for table `doctors_blog`
--
ALTER TABLE `doctors_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `doctors_contact`
--
ALTER TABLE `doctors_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `doctors_experience`
--
ALTER TABLE `doctors_experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `doctors_expertise`
--
ALTER TABLE `doctors_expertise`
  ADD PRIMARY KEY (`expertise_id`);

--
-- Indexes for table `doctors_services`
--
ALTER TABLE `doctors_services`
  ADD PRIMARY KEY (`doctor_service_id`);

--
-- Indexes for table `doctors_social_media`
--
ALTER TABLE `doctors_social_media`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_basic_info`
--
ALTER TABLE `doctors_basic_info`
  MODIFY `basic_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors_blog`
--
ALTER TABLE `doctors_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors_contact`
--
ALTER TABLE `doctors_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors_experience`
--
ALTER TABLE `doctors_experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors_expertise`
--
ALTER TABLE `doctors_expertise`
  MODIFY `expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors_services`
--
ALTER TABLE `doctors_services`
  MODIFY `doctor_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors_social_media`
--
ALTER TABLE `doctors_social_media`
  MODIFY `social_media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
