-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 05:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oss_acl`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `no_of_vacan` int(11) DEFAULT NULL,
  `job_edu_req` varchar(200) DEFAULT NULL,
  `dead_line` timestamp NULL DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `publish_date` timestamp NULL DEFAULT NULL,
  `publisher` int(11) DEFAULT NULL,
  `job_location` varchar(200) DEFAULT NULL,
  `age_limit` int(11) DEFAULT NULL,
  `job_level` varchar(200) DEFAULT NULL,
  `job_type` varchar(200) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `experience` varchar(200) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `negotiable` int(11) DEFAULT NULL,
  `no_of_publications` int(11) DEFAULT NULL,
  `other_benefits` text,
  `apply_instructions` text,
  `key_points` varchar(200) DEFAULT NULL,
  `description` text,
  `job_respons` text,
  `add_requirement` text,
  `company_info` text,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_title`, `no_of_vacan`, `job_edu_req`, `dead_line`, `category`, `publish_date`, `publisher`, `job_location`, `age_limit`, `job_level`, `job_type`, `gender`, `experience`, `salary`, `negotiable`, `no_of_publications`, `other_benefits`, `apply_instructions`, `key_points`, `description`, `job_respons`, `add_requirement`, `company_info`, `created_at`) VALUES
(16, 'Virtual Assistant', 3, 'Must be a Graduate from any reputed university.', '2017-07-19 18:00:00', '1,3', '2017-06-14 18:00:00', 3, '1,2', 28, 'Mid', 'Premanent', 'male', '2 Years', 10000, NULL, 0, '<p>\r\n\r\n</p><ul><li>Weekly Two days off.</li><li>Dinner from office.</li><li>Opportunity to work with foreign clients.</li><li>Friendly working environment.</li><li>Good opportunity for career progress</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\nSend your CV to&nbsp;<b>career@oss.com.bd&nbsp;</b><br></p>', '<p>\r\n\r\n</p><ul><li>Applicants with English medium background will get preference.</li><li>Fresher’s are welcome.</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Talk to the foreign clients/customers using our system.</li><li>Support our clients/customers through chatting online and give them proper solution.</li><li>Execute instant queries and finish the task within given timeline by clients/customers.</li><li>Respond to emails and phone calls.</li><li>Manage contact lists and customer spreadsheets.</li><li>Daily report to supervisor.</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Age 18 to 35 year(s)</li><li>Proven experience as a Virtual Assistant or relevant role.</li><li>Familiarity with current technologies, like desktop sharing, cloud services and VoIP.</li><li>Experience with word-processing software and spreadsheets (e.g. MS Office).</li></ul><br><br>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Very good internet browsing skills.</li><li>Very good typing speed (min 25 WPM).</li><li>Excellent phone, email and instant messaging communication skills.</li><li>Excellent time management skills.</li><li>Must be a Quick learner.</li></ul>\r\n\r\n<br><p></p>', '<p>Optimal Solution and Services&nbsp;</p>', '2017-06-15 01:15:23'),
(17, 'Jnr. Software Eng. ', 2, 'Must be graduate in cse from any reputed university', '2017-07-19 18:00:00', '5', '2017-06-14 18:00:00', 3, '3,5', 25, 'Mid', 'Premanent', 'male', '2 Years', 20000, 1, 1, '<p></p><ul><li>Launch<br></li><li>Transport&nbsp;<br></li><li>Festival Bonus&nbsp;<br></li></ul><p></p>', '<p>Send Your CV To career@oss.com.bd</p>', '<p></p><ul><li><b>English Fluency .&nbsp;</b><br></li><li><b>Team Work.</b><br></li></ul><p></p>', '<p>\r\n\r\nKnowledge &amp; experience in marketing, promoting our Online shop\r\n\r\n<br></p>', '<p>Web Applications.<br>ERP. &nbsp;</p>', '<p></p><ul><li><b>Laravel Framework.</b><br></li><li><b>Bootstrap CSS.</b><br></li><li><b>Wordpress.&nbsp;</b><br></li></ul><p></p><p><br></p>', '<p>Optimal Solution And Services.&nbsp;</p>', '2017-06-15 01:46:14'),
(18, 'IT Executive (Digital Marketing)', 6, 'Successfully completed academic degree in IT, Computer Science or related fields.', '2017-07-21 18:00:00', '5,7', '2017-06-14 18:00:00', 3, '1,2', 25, 'Entry', 'Premanent', 'male', '1 year', 10000, NULL, 0, '<p>Launch at office.&nbsp;<br>Transport.&nbsp;<br>Festival Bonus.&nbsp;</p>', '<p>Send Your CV to career@oss.com.bd&nbsp;</p>', '<p>Must be a team worker.&nbsp;</p>', '<p>\r\n\r\n</p><ul><li>To promote our existing website with digital marketing.</li><li>Knowledge &amp; experience in marketing, promoting our Online shop.</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><li>To promote our existing website with digital marketing.</li><li>Knowledge &amp; experience in marketing, promoting our Online shop.</li>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Knowledge in Twitter, Google Plus, Blogs etc. for digital marketing.</li><li>Experience in digital marketing minimum 2-3 years.</li><li>To read and write in English and Bengali.</li></ul>\r\n\r\n<br><p></p>', '<p>Optimal Solution And Services.&nbsp;</p>', '2017-06-15 01:55:02'),
(19, 'Software Engineer (Senior Level)', 3, 'Graduate', '2017-07-24 18:00:00', '5', '2017-06-14 18:00:00', 3, '1', 35, 'High', 'Premanent', 'male', '6 years', 80000, 1, 2, '<p>\r\n\r\n</p><ul><li>Awesome Culture - passionate, driven and fun team</li><li>Two annual festival bonuses</li><li>Flexible vacation policy</li><li>Communal transport facilities</li><li>Catered lunch</li><li>Medical insurance</li></ul>\r\n\r\n<br><p></p>', '<p>Send Your CV To &nbsp;career@oss.com.bd&nbsp;</p>', '<p>Must be a team worker.&nbsp;</p>', '<p>\r\n\r\n</p><ul><li>Provide technical leadership to the development team</li><li>Evangelize great practices across teams</li><li>Work closely with product owners, designers, agile coaches and developers in a dynamic, agile environment innovating on new products and features</li><li>Design and develop software collaboratively in a pair-programming environment</li><li>Continuously deploy high-quality software to customers</li><li>Design and architect solutions focused on performance, scalability and high availability</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Minimum 6 - 10 years as a software engineer in roles in increasing responsibility</li><li>Fluency in many programming languages. Able to code regularly across a full stack using technologies such AngularJS/NodeJS, Python/Django, MongoDB, MySQL, Spark, Cassandra, Kinesis</li><li>Excellent understanding of systems architecture, technical design, data structures, and algorithms. Familiarity with Cloud architectures, tools, and processes</li><li>Exceptional ability to understand what good code is and pass that knowledge on to others</li><li>Experience working in Agile environments</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>thrive in an autonomous, high energy environment</li><li>enjoy pairing with team members to produce innovative solutions</li><li>care about efficient code, beautiful algorithms, fearless refactoring, and iterative development</li><li>love to delight users</li></ul>\r\n\r\n<br><p></p>', '<p>Optimal Solution And Services.&nbsp;</p>', '2017-06-15 02:00:10'),
(20, 'Front End Designer (HTML/CSS)', 2, 'Academic background in Design or substantial relevant experience', '2017-07-24 18:00:00', '5', '2017-06-14 18:00:00', 3, '1', 28, 'Mid', 'Premanent', 'female', '2 Years', 10000, NULL, 0, '<p>\r\n\r\n</p><ul><li>Awesome Culture - passionate, driven and fun team</li><li>Two annual festival bonuses</li><li>Flexible vacation policy</li><li>Communal transport facilities</li><li>Catered Lunch/Dinner</li><li>Medical insurance</li></ul>\r\n\r\n<br><p></p>', '<p>Send your cv to career@oss.com.bd&nbsp;</p>', '<p>Must be a team worker.&nbsp;</p>', '<p>\r\n\r\n</p><ul>N/A</ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Demonstrated experience of front end design (required)</li><li>Excellent knowledge of HTML and CSS</li><li>Excellent communication skills and fluent command of English</li><li>Digital native who believes in change and flexibility</li><li>Comfortable with creating wireframes, polished mockups, and prototypes needed to communicate them (e.g. Sketch, Framer, InVision)</li></ul><p></p>', '<p>\r\n\r\n</p><ul><li>WordPress experience</li><li>Demonstrated experience in responsive website design</li><li>Willingness to learn PHP</li></ul>\r\n\r\n<br><p></p>', '<p>Optimal Solution And Services.&nbsp;</p>', '2017-06-15 02:12:44'),
(21, 'Software QA Engineer', 1, 'B.Sc or M.Sc in Computer Science/ Engineering or equivalent.', '2017-07-17 18:00:00', '5', '2017-06-14 18:00:00', 3, '1', 35, 'High', 'Premanent', 'male', '5 years. ', 60000, NULL, 2, '<p>N/A&nbsp;</p>', '<p>Send Your CV to career@oss.com.bd&nbsp;</p>', '<p>Must be a team worker.&nbsp;</p>', '<p>\r\n\r\n</p><ul><li>Plan and execute test cases for application features</li><li>Develop and document test configurations and test environments</li><li>Review the production code and write down test codes to verify functionality</li><li>Measure application performance and suggest improvements</li><li>Explore application requirements and post relevant queries/suggestions</li><li>Prepare and maintain test documentation suite that includes test scripts, feature workflow diagrams, checklists, test reports, release note and system support documentation</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Provide rapid and constructive notification on any fix/development</li><li>Ensure that testing activities will guide development to meet the business requirements and systems goals</li><li>Collaborate with team members and ensure knowledge transfer</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Provide rapid and constructive notification on any fix/development</li><li>Ensure that testing activities will guide development to meet the business requirements and systems goals</li><li>Collaborate with team members and ensure knowledge transfer</li></ul>\r\n\r\n<br><p></p>', '<p>Optimal Solution And Services.&nbsp;</p>', '2017-06-15 02:17:22'),
(22, 'Web/ Graphics Designer (UI/UX)', 3, 'BA or BS degree in Design or related discipline; advanced degrees appreciated.', '2017-07-19 18:00:00', '5', '2017-06-14 18:00:00', 5, '4', 25, 'Mid', 'Premanent', 'male', '2 Years', 20000, NULL, 0, '<p>\r\n\r\n</p><ul>As per company policy.</ul>\r\n\r\n<br><p></p>', '<p>Send Your CV to career@oss.com.bd&nbsp;</p>', '<p>Must be a team worker.&nbsp;</p>', '<p>\r\n\r\n</p><ul><li>This position includes much more than creating great-looking designs for online and printed materials (although it does that); in this role, you''ll take the lead in defining marketing communications creative direction.</li><li>You will work closely with marketing managers and business development managers to ensure the campaign delivers on objectives and builds upon the elegance of the our brand.</li><li>Our environment is fast-paced, high-pressured, and sometimes unpredictable.</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>If you enjoy teaming up with a team of talented, high-powered, and enthusiastic people to deliver on a large number of diverse projects that further define our brand.</li><li>Include a link to your portfolio as well as a power point sampling of your work.</li></ul><ul><li>Work closely with marketing managers and business development managers</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>This will expedite our review.</li><li>Responsibilities:</li><li>Help to define marketing communications creative direction.</li><li>Create great-looking designs both online and off.</li></ul>\r\n\r\n<br><p></p>', '<p>Optimal Solution And Services.&nbsp;</p>', '2017-06-15 02:21:48'),
(23, 'Web Developer (PHP/ Cakephp/ Laravel)', 2, 'Minimum B.Sc in Computer Science and Engineering from any university/institute. ', '2017-08-09 18:00:00', '5', '2017-06-14 18:00:00', 5, '4', 28, 'High', 'Premanent', 'male', '6 years', 60000, 1, 0, '<p>\r\n\r\n</p><ul>As per company policy.</ul>\r\n\r\n<br><p></p>', '<p>Send Your CV to career@oss.com.bd&nbsp;</p>', '<p>Must Be a Team Worker.&nbsp;</p>', '<p>\r\n\r\n</p><ul><li>MVC framework (cakephp/laravel)</li><li>Quick learner</li><li>Analyzing, designing, coordinating and supervising the development of software systems to form a basis for the solution of information processing problems.</li><li>Identifying, updating, repairing, modifying, expanding and implementing improvements to existing systems.</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>MVC framework (cakephp/laravel)</li><li>Quick learner</li><li>Analyzing, designing, coordinating and supervising the development of software systems to form a basis for the solution of information processing problems.</li><li>Identifying, updating, repairing, modifying, expanding and implementing improvements to existing systems.</li></ul>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Minimum B.Sc in Computer Science and Engineering from any university/institute recognized by UGC with no 3rd division/class or equivalent CGPA in all academic records.</li><li>Candidates having MBA or any other degree/diploma in Finance/Accounts/MIS will be given preference.</li></ul>\r\n\r\n<br><p></p>', '<p>Optimal Solution And Services.&nbsp;</p>', '2017-06-15 02:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `cat_name`) VALUES
(1, 'Data Entry'),
(2, 'Design-Creative'),
(3, 'Education'),
(4, 'Garments'),
(5, 'IT/Software'),
(6, 'Telecomunication'),
(7, 'Marketing/Sales'),
(8, 'Medical/Pharmacy ');

-- --------------------------------------------------------

--
-- Table structure for table `job_edu_requirement`
--

CREATE TABLE `job_edu_requirement` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `exam_name` varchar(200) NOT NULL,
  `min_cgpa` int(11) NOT NULL,
  `max_cgpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_location`
--

CREATE TABLE `job_location` (
  `id` int(11) NOT NULL,
  `location_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_location`
--

INSERT INTO `job_location` (`id`, `location_name`) VALUES
(1, 'Dhaka'),
(2, 'Chittagong'),
(3, 'Motijheel'),
(4, 'DOHS'),
(5, 'Mirpur'),
(6, 'Gulsan'),
(7, 'Dinajpur'),
(8, 'Dohar'),
(9, 'Dhoni'),
(10, 'Dhamrai');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_06_09_193731_create_roles_table', 1),
(8, '2017_06_09_194732_create_user_role_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(1, '2017-06-09 23:37:47', '2017-06-09 23:37:47', 'User', 'A normal User'),
(2, '2017-06-09 23:37:47', '2017-06-09 23:37:47', 'Recruiter', 'A recruiter'),
(3, '2017-06-09 23:37:47', '2017-06-09 23:37:47', 'Admin', 'An Admin'),
(4, '2017-06-10 01:11:08', '2017-06-10 01:11:08', 'Applicant', 'An Applicant'),
(5, '2017-06-10 23:17:06', '2017-06-10 23:29:16', 'Student', 'Student demo '),
(6, '2017-06-10 23:30:02', '2017-06-10 23:30:18', 'Demo edit', 'testing edited');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Victor', 'Visitor', 'visitor@example.com', '$2y$10$xZITvtccQmro0IljN29hBuwWDpIDRGwdMJTewRjOoJWCSWaLhqbfK', NULL, '2017-06-09 23:37:47', '2017-06-09 23:37:47'),
(2, 'Alex', 'Admin', 'admin@example.com', '$2y$10$L6gOGA4vYa/Lf97bpmoF6.EvvfJlQ6iiPpDkdIFMi5j3VOmRgNYyq', 'dz0d9Pu4HzG77Qe6Wg2EiiyFcNuvOhj3BqeDFBuYwpwneDbEipXUA3SFjOTC', '2017-06-09 23:37:47', '2017-06-11 21:25:21'),
(3, 'Andy', 'Recruiter', 'recruiter@example.com', '$2y$10$x0ZPeniy6ErMGqmpxzhVqebticMtHhJniyjOHNPs6AFRW4qBqFJ9W', 'nDogwIttpHDXT3TW3DIL2esURwABBvhIbkmttmEbdBzWHF6LilAB24kUXd6Z', '2017-06-09 23:37:48', '2017-06-15 02:21:04'),
(4, 'abid', 'shiddique', 'abid@gmail.com', '$2y$10$EPVZk3syW1VAJ.taB7V7te8f40AugBgOBL3vqg3IhtVZCCTcgep.S', 'XaGyas6LrNdhB0QgnrTFhApnflzS5P5wy5Mcu0VqIyll3WSrirx9ymbJtXGC', '2017-06-10 01:13:47', '2017-06-10 01:29:59'),
(5, 'Ovaidul', 'Haque', 'ovi@gmail.com', '$2y$10$H0gr9Cmn7XMDhw/6nvs6.u.rTgnZbwfx40D2PUG6n7QHni.WHEit6', 'SjUiV3Ycyj6KOYH1A4Z7Hfajty8J9JW5gELheMBk07Yj370jms8YEC7LMOmI', '2017-06-11 21:19:11', '2017-06-11 21:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 2, 3),
(3, NULL, NULL, 3, 2),
(6, NULL, NULL, 4, 1),
(7, NULL, NULL, 4, 4),
(13, NULL, NULL, 5, 1),
(14, NULL, NULL, 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_edu_requirement`
--
ALTER TABLE `job_edu_requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_location`
--
ALTER TABLE `job_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `job_edu_requirement`
--
ALTER TABLE `job_edu_requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_location`
--
ALTER TABLE `job_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
