-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2024 at 04:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MIS_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descrption` text NOT NULL,
  `price` int(11) NOT NULL,
  `descrption_2` text DEFAULT NULL,
  `co_values` text DEFAULT NULL,
  `tools` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `co_level` varchar(255) DEFAULT NULL,
  `time_learn` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `member_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='infromatios of courss';

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `image`, `title`, `descrption`, `price`, `descrption_2`, `co_values`, `tools`, `video`, `co_level`, `time_learn`, `date`, `member_ID`) VALUES
(8, '4074927_home1.jpg', 'كورس الرصاص', 'ستتعرف على الخامات مثل أنواع الاقلام الرصاص المختلفة وما هو أفضل استخدام لكل منها .كيفية استخدام القلم الرصاص', 50, 'يهدف دورة تأسيس الرسم للمبتدئين إلى تزويد الطلاب بالأساسيات التي يحتاجونها لبدء الرسم. سيتعلم الطلاب في هذه الدورة كيفية استخدام الأدوات والمعدات الأساسية للرسم، وكيفية إنشاء خطوط وأشكال بسيطة، وكيفية مزج الألوان\r\n\r\n', ' الأدوات والمعدات الأساسية للرسم: سيتم تقديم الطلاب إلى الأدوات والمعدات الأساسية للرسم، مثل أقلام الرصاص والفحم والألوان المائية\r\n|\r\n إنشاء خطوط وأشكال بسيطة: سيتعلم الطلاب كيفية إنشاء خطوط وأشكال بسيطة، مثل الخطوط المستقيمة والمنحنية والأشكال الهندسية.\r\n|\r\n مزج الألوان: سيتعلم الطلاب كيفية مزج الألوان باستخدام تقنيات مختلفة، مثل المزج المباشر والمزج التقليدي والمزج الرقمي.', ' اسكتش كانسون\r\n|\r\n الالوان زيت\r\n |\r\nفورش الوان\r\n|\r\n جاز', '                <iframe width=\"300\" height=\"195\" src=\"https://www.youtube.com/embed/DpdfVwWlC0k\" title=\"كورس الرصاص\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'مبتدئ', '3 ساعات', '2024-03-11', 1),
(9, '3700110_home4.jpeg', 'كورس تاسيس', 'كيفية رسم الأشكال الهندسية الأساسية والمجسمات بأشكالها مثل: الأسطوانات والمكعبات', 100, 'يهدف دورة تأسيس الرسم للمبتدئين إلى تزويد الطلاب بالأساسيات التي يحتاجونها لبدء الرسم. سيتعلم الطلاب في هذه الدورة كيفية استخدام الأدوات والمعدات الأساسية للرسم، وكيفية إنشاء خطوط وأشكال بسيطة، وكيفية مزج الألوان\r\n\r\n', ' الأدوات والمعدات الأساسية للرسم: سيتم تقديم الطلاب إلى الأدوات والمعدات الأساسية للرسم، مثل أقلام الرصاص والفحم والألوان المائية\r\n|\r\n إنشاء خطوط وأشكال بسيطة: سيتعلم الطلاب كيفية إنشاء خطوط وأشكال بسيطة، مثل الخطوط المستقيمة والمنحنية والأشكال الهندسية.\r\n|\r\n مزج الألوان: سيتعلم الطلاب كيفية مزج الألوان باستخدام تقنيات مختلفة، مثل المزج المباشر والمزج التقليدي والمزج الرقمي.', 'اسكتش كالسون\r\n|\r\n قلم رصاص hp\r\n|\r\n استيكه فبري كاستر\r\n|\r\n برايه حديد', '                <iframe width=\"300\" height=\"195\" src=\"https://www.youtube.com/embed/at_0jvd0yAA?si=D87Yi25rsWuniC6F\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'مبتدئ', '6 ساعات', '2024-03-12', 1),
(10, '10716476_home2.jpeg', 'كورس الفحم', 'الرسم يعتبر فرصة عظيمة للتعبير عن الرأي وتحويل الفكرة غير المرئية لرسمة يراها الجميع تنطق بما لم يتفوه به اللسان.', 100, 'يهدف دورة تأسيس الرسم للمبتدئين إلى تزويد الطلاب بالأساسيات التي يحتاجونها لبدء الرسم. سيتعلم الطلاب في هذه الدورة كيفية استخدام الأدوات والمعدات الأساسية للرسم، وكيفية إنشاء خطوط وأشكال بسيطة، وكيفية مزج الألوان\r\n\r\n', ' الأدوات والمعدات الأساسية للرسم: سيتم تقديم الطلاب إلى الأدوات والمعدات الأساسية للرسم، مثل أقلام الرصاص والفحم والألوان المائية\r\n|\r\n إنشاء خطوط وأشكال بسيطة: سيتعلم الطلاب كيفية إنشاء خطوط وأشكال بسيطة، مثل الخطوط المستقيمة والمنحنية والأشكال الهندسية.\r\n|\r\n مزج الألوان: سيتعلم الطلاب كيفية مزج الألوان باستخدام تقنيات مختلفة، مثل المزج المباشر والمزج التقليدي والمزج الرقمي.\r\n', 'اسكتش كالسون\r\n|\r\n قلم رصاص hp\r\n|\r\n استيكه فبري كاستر\r\n|\r\n برايه حديد', '                <iframe width=\"300\" height=\"195\" src=\"https://www.youtube.com/embed/ZgqPw6Y_t0k\" title=\"كورس الفحم\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'مبتدئ', '6 ساعات', '2024-03-12', 1),
(11, '67190024_home3.jpg', ' كورس الألوان خشب', 'خاللون من أهم عناصر الفن وله تأثير كبير أينما وجد. \r\nاللون لديه القدرة على رفع أو كسر عملك الفني.\r\n', 200, 'يهدف دورة تأسيس الرسم للمبتدئين إلى تزويد الطلاب بالأساسيات التي يحتاجونها لبدء الرسم. سيتعلم الطلاب في هذه الدورة كيفية استخدام الأدوات والمعدات الأساسية للرسم، وكيفية إنشاء خطوط وأشكال بسيطة، وكيفية مزج الألوان\r\n\r\n', ' الأدوات والمعدات الأساسية للرسم: سيتم تقديم الطلاب إلى الأدوات والمعدات الأساسية للرسم، مثل أقلام الرصاص والفحم والألوان المائية |\r\n إنشاء خطوط وأشكال بسيطة: سيتعلم الطلاب كيفية إنشاء خطوط وأشكال بسيطة، مثل الخطوط المستقيمة والمنحنية والأشكال الهندسية.\r\n|\r\n مزج الألوان: سيتعلم الطلاب كيفية مزج الألوان باستخدام تقنيات مختلفة، مثل المزج المباشر والمزج التقليدي والمزج الرقمي.\r\n', ' الوان خشب\r\n|\r\n اقلام بشره فابر كاستر\r\n|\r\n استيكه فبري كاستر\r\n|\r\n برايه حديد', '              <iframe width=\"300\" height=\"195\" src=\"https://www.youtube.com/embed/e7VqEE262iI\" title=\"كورس ألوان الخشب\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'المتوسط', '4ساعات', '2024-03-13', 1),
(12, '72713626_12.jpg', 'كورس الوان شمع', 'الوان شمع تتميز المناظر الطبيعيه مثل (الجبل والاشجار والزرعوالسحاب والغروب)', 150, 'يهدف دورة تأسيس الرسم للمبتدئين إلى تزويد الطلاب بالأساسيات التي يحتاجونها لبدء الرسم. سيتعلم الطلاب في هذه الدورة كيفية استخدام الأدوات والمعدات الأساسية للرسم، وكيفية إنشاء خطوط وأشكال بسيطة، وكيفية مزج الألوان\r\n\r\n', 'الأدوات والمعدات الأساسية للرسم: سيتم تقديم الطلاب إلى الأدوات والمعدات الأساسية للرسم، مثل أقلام الرصاص والفحم والألوان المائية\r\n|\r\n إنشاء خطوط وأشكال بسيطة: سيتعلم الطلاب كيفية إنشاء خطوط وأشكال بسيطة، مثل الخطوط المستقيمة والمنحنية والأشكال الهندسية.\r\n|\r\n مزج الألوان: سيتعلم الطلاب كيفية مزج الألوان باستخدام تقنيات مختلفة، مثل المزج المباشر والمزج التقليدي والمزج الرقمي.', ' اسكتش كالسون\r\n|\r\n قلم رصاص hp\r\n|\r\n استيكه فبري كاستر\r\n|\r\n برايه حديد', '                <iframe width=\"300\" height=\"195\" src=\"https://www.youtube.com/embed/3jqqbsO8UAA\" title=\"كورس ألوان الشمع\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'المتوسط', '4ساعات', '2024-03-15', 1),
(13, '7191287_home5.jpeg', 'مناظر طبيعي', 'رسم منظر طبيعي سهل | رسم منظر طبيعي بالالوان الخشبية | رسم مناظر طبيعيةل', 300, 'iohih', 'iohoihiohioh', 'oihhihih', 'iohiohoih', 'oihoihioh', 'iohoihihih', '2024-03-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `user_id`, `tool_id`, `date`, `status`) VALUES
(2, 10, 4, '2024-05-13 17:47:53', 0),
(4, 10, 11, '2024-05-14 16:08:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`ID`, `user_id`, `course_id`, `date`) VALUES
(1, 1, 8, '0000-00-00'),
(20, 1, 9, '2024-03-13'),
(21, 5, 13, '2024-03-16'),
(23, 6, 9, '2024-03-18'),
(29, 10, 9, '2024-05-13'),
(30, 5, 9, '2024-05-22'),
(31, 5, 8, '2024-05-30'),
(33, 5, 12, '2024-06-11'),
(34, 5, 10, '2024-06-11'),
(35, 5, 11, '2024-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`ID`, `image`, `title`, `price`) VALUES
(3, '56721955_photo_2024-01-18_14-20-09.jpg', 'اقلام الفحم الأسود', 150),
(4, '74591066_photo_2024-01-18_14-18-57.jpg', 'قلم الفحم الأبيض', 150),
(5, '85803160_photo_2024-01-18_14-19-28.jpg', 'اقلام  لإذابة فحم الرصاص أو الفحم الطبيعي .', 60),
(6, '15941186_photo_2024-01-18_14-19-58.jpg', 'فرش المكياج للرسم', 75),
(7, 'photo_2024-01-18_14-20-39.jpg', 'الوان فابري كستر مميزه حجم كبير 24 لون', 70),
(8, '23514708_photo_2024-01-18_14-20-47.jpg', 'اقلام الوان فبري كستر الكبيره المميزه', 1200),
(9, 'photo_2024-01-18_14-42-41.jpg', 'بودرة فحم فنية تستخم في الرسم', 120),
(10, 'photo_2024-01-18_14-56-33.jpg', 'لزق يستخدم في الرسم لمنع الالوان من الخروج داخل المربع', 70),
(11, 'photo_2024-01-18_14-56-44.jpg', 'برايه حديد قويه وجميله ومميزه', 20),
(12, 'photo_2024-01-18_14-56-39.jpg', 'ممحاة فابر كاستل خالية من البي في سي - أزرق', 50),
(16, '12849638_photo_2024-01-18_14-19-14.jpg', 'قلم رصاص B2', 20),
(17, '2809754_photo_2024-01-18_14-26-59.jpg', 'اسكتش كالسون', 85);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT '1.jpg',
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `group_id` tinyint(4) NOT NULL DEFAULT 0,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `image`, `Email`, `Password`, `Phone`, `Address`, `group_id`, `Date`) VALUES
(1, 'ahmed', '1.jpg', 'ahmed@gamil.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', 1, '2024-04-22'),
(3, 'nour', '1.jpg', 'ag1386840@gmail.com', '', '01146049069', 'Egypt_Giza', 0, '2024-04-22'),
(4, 'ahmed ', '1.jpg', 'ahmed@gamil.com', '$2y$10$KUowbVkgiV/LCpqyuoXFl.4Ddr04FLCC7c3Sc5sF9.9DaHZnZDHte', '', '', 0, '2024-04-22'),
(5, 'ahmed gomaa ', '4568814_me187e5.jpeg', 'ag1386840@gmail.com', '$2y$10$enMjF5TJNaVZa77ciyibKuMsvmn1pXFMEQyY4L/4t6BX11c7FE8sS', '01146049069', 'Egypt_Giza', 0, '2024-04-22'),
(6, 'user', '1.jpg', 'user@gamil.com', '$2y$10$.5WQQcaWqh6fULwXAMDJNuC/rseQ2rhLZUUzW6m3QSxPHRuE39eIK', '', '', 0, '2024-04-22'),
(10, 'bbb', '1.jpg', 'bbb@gimal.com', '$2y$10$LBfLHZlM/6GnPBpJTlAt4OCb4xo/Nu/m0fN1/K2ziryMq8LOrTn.u', '0102072481', 'حلوان', 0, '2024-05-12'),
(11, 'yyyy', '67190024_home3.jpg', 'yyy@gmail.com', '$2y$10$TrK7UqYGt6XMFdKNCSvOS.WXnGqAKfkWIZ/D274ugl5iy6mG01GDK', '01026821037', 'October', 0, '2024-05-12'),
(13, 'newuser', '14987940_4k.jpg', 'newuser@gamil.com', '$2y$10$u6hBEBp/NzCXWUcoSENWR.4aUyYUykFLa88ouNQV4huLBjBSZmXjG', '0102072481', 'October', 0, '2024-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `V_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `v_link` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `v_date` date NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`V_ID`, `title`, `v_link`, `status`, `v_date`, `course_id`) VALUES
(11, 'كورس الوان خشب', 'https://www.youtube.com/embed/e7VqEE262iI', 1, '2024-03-15', 11),
(17, 'اول حصة من كورس التاسيس', 'https://www.youtube.com/embed/6yT7AWy8aIE', 1, '2024-05-30', 9),
(18, 'الحصة الثانية من كورس التاسيس', 'https://www.youtube.com/embed/at_0jvd0yAA', 1, '2024-05-30', 9),
(19, 'الحصة الثالثة من كورس التاسيس', 'https://www.youtube.com/embed/0fBB6zNK_YY', 1, '2024-05-30', 9),
(24, 'الحصة الرابعة من كورس التاسيس', 'https://www.youtube.com/embed/PpI6gH6xE7I', 1, '2024-06-11', 9),
(25, 'الحصة الخامسة من كورس التاسيس', 'https://www.youtube.com/embed/icSWQddQoZg', 1, '2024-06-11', 9),
(26, 'كورس مناظر طبيعية', 'https://www.youtube.com/embed/QAnnEqDKYaw', 1, '2024-06-11', 13),
(27, 'كورس الوان شمع', 'https://www.youtube.com/embed/3jqqbsO8UAA', 1, '2024-06-11', 12),
(28, 'كورس الرصاص', 'https://www.youtube.com/embed/DpdfVwWlC0k', 1, '2024-06-11', 8),
(29, 'اول حصة ف كورس الفحم', 'https://www.youtube.com/embed/ZgqPw6Y_t0k', 1, '2024-06-11', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `the teacher of this course` (`member_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tool_id` (`tool_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`V_ID`),
  ADD KEY `to course` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `V_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `the teacher of this course` FOREIGN KEY (`member_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD CONSTRAINT `subscribe_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscribe_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `to course` FOREIGN KEY (`course_id`) REFERENCES `courses` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
