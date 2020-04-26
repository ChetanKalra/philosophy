-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2020 at 01:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `philosophy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Lifestyle', '2020-04-26'),
(2, 'Health', '2020-04-26'),
(3, 'Family', '2020-04-26'),
(4, 'Management', '2020-04-26'),
(5, 'Travel', '2020-04-26'),
(6, 'Work', '2020-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `created_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 2, 1, '2020-04-16'),
(2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 1, 1, '2020-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `content` text,
  `image` varchar(191) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `views` bigint(20) NOT NULL DEFAULT '0',
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `user_id`, `category_id`, `views`, `created_at`) VALUES
(1, 'Just a Standard Format Post.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'images/thumbs/masonry/beetle-400.jpg', 1, 1, 0, '2020-04-26'),
(2, 'No Sugar Oatmeal Cookies.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a nisl in lacus posuere varius eu vel libero. In vel consequat urna, ut efficitur mauris. Nam id velit molestie, porta magna consequat, aliquam lorem. In aliquet dolor non leo tempus fermentum. Curabitur vehicula egestas ligula, eget maximus urna ornare a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce laoreet velit sapien, dapibus tempor felis mollis eu. Sed porttitor libero eu posuere consequat. Ut velit diam, gravida ac fermentum sollicitudin, semper ut elit. Nunc nec pharetra leo, ut faucibus velit. Duis vel dictum nibh. Mauris ac tortor velit. Aliquam consectetur nibh ut augue luctus, eu laoreet neque blandit. Donec maximus facilisis ligula, in lobortis tellus. Quisque nec sapien eu dui convallis varius. Nunc blandit nulla vitae nibh feugiat vestibulum.\r\n\r\nAenean venenatis accumsan urna. Etiam sed condimentum ligula. Aliquam erat volutpat. Integer dictum nec purus eget feugiat. Aenean non diam urna. Aliquam iaculis eu ligula non imperdiet. Fusce consectetur ligula sit amet odio molestie accumsan.\r\n\r\nFusce facilisis ultrices magna, et consectetur lacus hendrerit at. In semper placerat lacus eget imperdiet. Phasellus lacinia tempus consequat. Ut fermentum ultrices eros a imperdiet. Vestibulum convallis nibh sit amet nisi facilisis, et pulvinar dolor varius. Ut venenatis ex et libero tempor vestibulum. Nunc at diam est. Sed volutpat, lectus ac egestas consequat, arcu risus imperdiet libero, et hendrerit nibh tellus id tellus. Suspendisse vitae felis quis justo congue dapibus. Sed non sodales augue, vel commodo dolor. In eu posuere turpis, vel volutpat velit.\r\n\r\nSed aliquet sed elit in hendrerit. Donec consectetur dignissim ligula aliquam lobortis. Sed lacinia dapibus arcu sed tempor. Curabitur feugiat condimentum euismod. Donec at viverra turpis. Vivamus non metus id mi aliquam pellentesque. Morbi ipsum felis, commodo in odio sit amet, porttitor vulputate sapien. Praesent fringilla ullamcorper pretium. Cras pellentesque justo ac ornare semper. Ut imperdiet ante in pharetra facilisis. Vestibulum pulvinar accumsan mauris, eget porttitor ante efficitur nec. Nulla vehicula elit vel tortor posuere, in tristique lorem efficitur. Aenean gravida congue tincidunt.\r\n\r\nProin sit amet ipsum vitae odio iaculis vestibulum nec tincidunt tellus. Donec risus ligula, cursus at odio et, viverra cursus nisl. Morbi vitae cursus ipsum. Sed non enim mauris. Suspendisse potenti. Vivamus sed dictum turpis, id sagittis felis. Proin non risus mi. Morbi magna turpis, malesuada sed pulvinar in, imperdiet non odio. Etiam eget elit ut enim posuere rhoncus sit amet nec sem. Donec facilisis maximus orci at interdum. Mauris ac velit leo. Curabitur quis ante vehicula lorem iaculis scelerisque. Quisque in ultrices lectus.', 'images/thumbs/masonry/fuji-400.jpg', 2, 1, 0, '2020-04-26'),
(3, 'What Your Music Preference Says About You and Your Personality.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'images/thumbs/featured/featured-guitarman.jpg', 1, 6, 0, '2020-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `profile_image` varchar(191) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile_image`, `created_at`) VALUES
(1, 'John', 'images/avatars/user-01.jpg', '2020-04-26'),
(2, 'Jane', 'images/avatars/user-02.jpg', '2020-04-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
