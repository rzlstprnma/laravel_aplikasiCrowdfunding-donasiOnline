-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 07:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowdfunding`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Yatim dan Dhuafa', '2019-05-02 13:37:31', '2019-05-02 13:37:31'),
(2, 'Rumah Ibadah', '2019-05-02 13:37:36', '2019-05-02 13:37:36'),
(3, 'Kemanusiaan', '2019-05-02 13:37:42', '2019-05-02 13:37:42'),
(4, 'Pendidikan', '2019-05-02 13:37:50', '2019-05-02 13:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `developments`
--

CREATE TABLE `developments` (
  `id` int(11) UNSIGNED NOT NULL,
  `program_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `developments`
--

INSERT INTO `developments` (`id`, `program_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'Kami sudah memiliki tempat tinggal sekarang', '<div>\r\n<div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta veritatis tempora minima iste eligendi! Magnam sunt veritatis blanditiis error tempora, ex obcaecati quia illo hic! Quod, blanditiis totam est qui fugit, deserunt, recusandae molestias maiores eveniet consequatur expedita? Quibusdam mollitia provident tempore repudiandae minus odit impedit deserunt dicta est facilis quam necessitatibus, natus voluptate fugit? Voluptatum consectetur non at quaerat atque maiores, molestias ut suscipit aut unde qui assumenda saepe ea sed. Itaque perspiciatis repellat fugit possimus cupiditate minus reprehenderit velit, eos numquam perferendis? Laborum necessitatibus fugit corporis accusamus facilis suscipit, nulla, et eos voluptates doloribus iure recusandae porro aspernatur. Totam magnam magni reprehenderit modi molestias placeat, animi ipsum repellendus quas facilis nostrum fuga autem at repellat libero illum nesciunt voluptatem quasi dolores eius alias commodi doloremque! Itaque sit beatae velit vel quisquam, enim corrupti cumque minus illum alias, quibusdam libero nostrum molestias possimus, quia illo iste eum mollitia explicabo dicta! Nemo atque sint architecto dolorem, magni ea consequuntur blanditiis ducimus vitae aut. Enim officiis ullam consequatur dicta dolorem ipsam, omnis ad libero quod cum autem veritatis atque dolores delectus ratione voluptates expedita maiores itaque! Minus cupiditate id quae facere velit totam autem, vel tempora ipsa eligendi alias odio nostrum iste, porro quod? Sapiente quidem doloribus officiis! Illum, beatae! Vero mollitia deleniti soluta hic sit omnis, optio adipisci quaerat dignissimos laborum doloremque maxime at sint qui pariatur, voluptas corporis voluptates incidunt? Iusto odio alias sunt fugiat ab itaque sequi officia dolorum natus. Vero possimus in, fugiat ex distinctio alias quo excepturi sequi consectetur hic quis? Nobis pariatur consequatur, aliquid, laborum eos optio dolorem nostrum delectus quasi amet consequuntur commodi ut sint quaerat sapiente et culpa hic iure. Qui voluptatum sint eius nobis mollitia? Obcaecati, id iusto magnam, deserunt ipsum ut illum voluptatibus culpa eos in voluptatem ipsam aliquam, laborum sapiente fugiat eaque accusamus maxime blanditiis commodi ducimus non repudiandae. Saepe nesciunt accusantium minima nisi voluptates enim alias dolores, adipisci nam similique quidem ullam blanditiis minus, quo temporibus placeat voluptatibus voluptatem iste asperiores. Ipsum saepe illo ipsam nisi veritatis perferendis aspernatur! Molestias perferendis et odit temporibus eaque labore ullam. Molestiae, corporis omnis laudantium eligendi inventore deserunt iusto repudiandae odit, voluptates quod veniam voluptatem voluptatum? Quasi quos sed minima numquam. Ea vitae et necessitatibus eius nostrum architecto perspiciatis, molestias alias excepturi iste sunt delectus nemo consequuntur? Nihil quisquam mollitia consectetur, voluptas quae error, quam nostrum nemo provident accusamus repellendus, enim eveniet in odit officiis perferendis ipsa voluptate qui eos corporis aspernatur asperiores eum laudantium. Natus corrupti ipsa facere. Voluptatibus earum natus vitae est possimus quo accusantium id ab ipsa blanditiis velit, quam explicabo consequuntur quis, dolores ipsum. Libero distinctio neque, atque dicta officiis est blanditiis accusantium! Recusandae expedita earum error, aspernatur cupiditate quis fuga aut delectus animi in pariatur ducimus tempore perferendis asperiores magnam atque sit, ipsam porro ad quos! Perspiciatis quis ab exercitationem id quisquam expedita eos praesentium nemo cum. Numquam quo autem neque, eum nemo quidem exercitationem error labore nulla dolorem sapiente ad voluptatem nostrum unde blanditiis, officia ipsam ipsa?</div>\r\n</div>', '2019-05-02 20:07:46', '2019-05-02 20:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `donation_confirmations`
--

CREATE TABLE `donation_confirmations` (
  `id` int(11) UNSIGNED NOT NULL,
  `program_id` int(11) UNSIGNED NOT NULL,
  `users_id` int(11) UNSIGNED DEFAULT NULL,
  `id_transaksi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_donatur` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nominal_donasi` int(11) NOT NULL,
  `dukungan` text COLLATE utf8_unicode_ci,
  `bukti_pembayaran` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isVerified` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donation_confirmations`
--

INSERT INTO `donation_confirmations` (`id`, `program_id`, `users_id`, `id_transaksi`, `nama_donatur`, `email`, `nominal_donasi`, `dukungan`, `bukti_pembayaran`, `isVerified`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '123001', 'Hamba Allah', 'september@mail.com', 320000, NULL, 'preview16.jpg', 1, '2019-05-02 20:09:31', '2019-05-02 20:10:07'),
(2, 2, NULL, '124002', 'Hamba Allah', 'september@mail.com', 200000, NULL, 'preview16.jpg', 1, '2019-05-02 20:15:30', '2019-05-02 20:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) UNSIGNED NOT NULL,
  `users_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `brief_explanation` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `donation_target` int(11) UNSIGNED NOT NULL,
  `time_is_up` date NOT NULL,
  `shelter_account_number` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `donation_collected` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `isPublished` tinyint(1) NOT NULL DEFAULT '0',
  `isSelected` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `users_id`, `category_id`, `title`, `photo`, `brief_explanation`, `donation_target`, `time_is_up`, `shelter_account_number`, `donation_collected`, `description`, `isPublished`, `isSelected`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Anak yatim di Panti Asuhan Kami sudha menahan lapar salama 7 hari 7 malam', 'closeup-poor-staring-hungry-orphan-450w-1102673204.jpg', 'Ayo berdonasi supaya Anak Yatim disini bisa merasakan makanan lagi', 12000000, '2021-12-17', '999-009-213-234', 320000, '<p>Sudah sekitar 7 hari 7 malam Anak-anak Panti Asuhan kami menahan rasa lapar. disini kehabisan makanan, kami perlu bantuan dari Anda untuk membeli makanan yang banyak untu para Anak yatim disini.</p>\r\n<p><img src=\"/photos/2/closeup-poor-staring-hungry-orphan-450w-1102673204.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Salah satu Anak yatim disini, Irham senang sekali membaca dan menghafal Al-qur\'an, tapi sudah lama ia tidak melakukannya lagi karena mungkin ia sakit karena sudah lama sekali tidak mendapat makanan.</p>\r\n<p>Kami berharap Ada orang yang bisa berbaik hati menyyumbangkan sedikit hartanya untuk kepentingan Anak yatim disini.</p>\r\n<p>&nbsp;</p>', 1, 1, '2019-05-02 14:16:13', '2019-05-02 20:10:07'),
(2, 2, 3, 'Tsunami dahsyat telah memporak-porandakan tempat tinggal Kami', 'reality-tsunami-disaster-outbreak-unprecedented-450w-256600405.jpg', 'Kami sangat senang jika ada yang menyumbangakan sedikit hartanya, supaya orang-orang disini tidak kelaparan', 30000000, '2020-11-27', '1230-2-12124', 200000, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img src=\"/photos/2/broken-old-mosque-450w-1337359349.jpg\" alt=\"\" /></p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by</p>', 1, 1, '2019-05-02 14:19:32', '2019-05-02 20:16:01'),
(3, 1, 2, 'Masjid kami diterjang tsunamai :(', 'broken-old-mosque-450w-1337359349.jpg', 'kami perlu rumah ibadah, masjid kami diterjang tsunami', 23000000, '2021-11-19', '1230-2-124-124', NULL, '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by</p>\r\n<p><img src=\"/photos/1/old-deserted-ruined-house-middle-450w-755000641.jpg\" alt=\"\" /></p>\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by</p>\r\n<p><img src=\"/photos/1/reality-tsunami-disaster-outbreak-unprecedented-450w-256600405.jpg\" alt=\"\" /></p>\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by</p>', 1, 0, '2019-05-02 14:34:33', '2019-05-02 14:37:58'),
(4, 1, 3, 'Pengemis ini membutuhkan uang', 'preview16.jpg', 'sudah sekian lama pengimis ini duduk disana, tapi jarang sekali orang menyumbang', 20000000, '2019-10-25', '123-093-234-124', NULL, '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by</p>\r\n<p><img src=\"/photos/1/preview16.jpg\" alt=\"\" /></p>\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by</p>', 1, 0, '2019-05-02 14:37:12', '2019-05-02 14:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) UNSIGNED NOT NULL,
  `program_id` int(11) UNSIGNED NOT NULL,
  `report` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `program_id`, `report`, `created_at`, `updated_at`) VALUES
(2, 4, 'programnya palsu ?!', '2019-05-02 20:32:48', '2019-05-02 20:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(3) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `no_hp`, `email`, `password`, `role`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Ethos Pardiwinata', '0891289328300', 'those@outlook.com', '$2y$10$RwnCEhm48RNowcAn5repZOi80YYTQ6E5zhxQ9kRpE0kM0049x8diK', 1, NULL, NULL, '2019-05-02 13:35:28', '2019-05-02 13:35:28'),
(2, 'Danny Purwejo', '0891259428320', 'nny@outlook.com', '$2y$10$uGf0kKx3wS6o16TBwAraKeoF6Slog7qTdngEzk1Nvi.sJGy5c3Fia', 0, NULL, NULL, '2019-05-02 13:38:41', '2019-05-02 13:38:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developments`
--
ALTER TABLE `developments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `donation_confirmations`
--
ALTER TABLE `donation_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `users_id_2` (`users_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `developments`
--
ALTER TABLE `developments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation_confirmations`
--
ALTER TABLE `donation_confirmations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `developments`
--
ALTER TABLE `developments`
  ADD CONSTRAINT `developments_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_confirmations`
--
ALTER TABLE `donation_confirmations`
  ADD CONSTRAINT `donation_confirmations_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programs_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
