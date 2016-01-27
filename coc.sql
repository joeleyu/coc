-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2016 at 06:39 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coc`
--

-- --------------------------------------------------------

--
-- Table structure for table `asses_level`
--

CREATE TABLE IF NOT EXISTS `asses_level` (
`id` int(11) NOT NULL,
  `level_val` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `asses_level`
--

INSERT INTO `asses_level` (`id`, `level_val`) VALUES
(1, 'Level 1'),
(2, 'Level 2');

-- --------------------------------------------------------

--
-- Table structure for table `asses_result`
--

CREATE TABLE IF NOT EXISTS `asses_result` (
`id` int(11) NOT NULL,
  `res_val` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `asses_result`
--

INSERT INTO `asses_result` (`id`, `res_val`) VALUES
(1, 'Satisfactory'),
(2, 'Non Satisfactory'),
(3, 'Competent'),
(4, 'Non Yet Competent');

-- --------------------------------------------------------

--
-- Table structure for table `asses_type`
--

CREATE TABLE IF NOT EXISTS `asses_type` (
`id` int(11) NOT NULL,
  `type_val` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `asses_type`
--

INSERT INTO `asses_type` (`id`, `type_val`) VALUES
(1, 'Practical'),
(2, 'Knowledge');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0d032600d143699050bb9a8829afed7972fb4772', '::1', 1451359815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313335393539383b),
('6836f294017d215f2c2f5cdfec8e0c18f9e69a2b', '::1', 1451360037, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313335393933373b),
('0e8e5239c1b79d68a049465aa8e7ee10a57e0db3', '::1', 1451360566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336303337353b),
('bbc0bf4388a377da5ed06092a8c8f837b583f2c9', '::1', 1451361101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336303836373b),
('b0ad06d60cb7b94059bdd0fc0283c7cfbd7eaa5a', '::1', 1451366026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336353835353b),
('33d9cf06e6f1bc5a1258fbbfdcf0ef387a1144c4', '::1', 1451366401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336363136373b),
('727cefe978b09d6ed96231b01cee0cfe75e896c2', '::1', 1451366675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336363531383b),
('de0dfe7adf44b6abcbbc067481ed34ce0baf2183', '::1', 1451367302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336373031313b),
('5af3f430bd46fe853e5ea49bace469dee7b38507', '::1', 1451367651, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336373335343b),
('03b9bd2369e1de2eb90de77c9a4bf405c157f3c6', '::1', 1451367941, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336373635373b),
('0e0f88330860fd6a0f3602004becd03df77c3c75', '::1', 1451368242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336383030383b),
('34311ffff7d0e338a0f44408777c06c1df54134e', '::1', 1451369425, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336393133313b),
('7ad343a6b9546844e7fc54a3482fa6148f268336', '::1', 1451369775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336393437383b),
('6214abcd99d7d26be9e317656305443441e0c3f9', '::1', 1451369978, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313336393833373b),
('3110c11f91eb7c615172b6fab08b457bd29fb857', '::1', 1451371020, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313337303737303b),
('505d6b106ce1a2cbd6aa7df8057ee8f6e9ef3f13', '::1', 1451371139, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313337313131353b),
('71c564e3af117d63e424a4fc385e0d0de88df6e0', '::1', 1451396558, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313339363237363b),
('61343857170cd0fa3241d06c7f121f7ca552b527', '::1', 1451395631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313339363832343b),
('92f7ed062f583e95841e0f6249246ee440ec5270', '::1', 1451456312, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313435363134313b),
('a18512c9ac4d90174a73a9b662bb8badb0b7ee49', '::1', 1451456739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313435363535323b),
('225176ce9fbdeef63225400bd49b588d06e95037', '::1', 1451457972, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313435373738393b),
('44bc1e818457b8e073287650a5f4e3b14eeefcd3', '::1', 1451458883, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313435383838333b),
('c20532383f8c5ce09836030dbc1347f56949877b', '::1', 1451460131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313435393833343b),
('ccf83ee2eee895ede81df895192e2f19782083b4', '::1', 1451460464, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436303137373b),
('54e45a5b496cd7eb9884d575ff7718d2fea7375a', '::1', 1451460778, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436303530363b),
('d43d0822f2ffa16de6a390dc033876cc2f595f5e', '::1', 1451461103, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436303833353b617574685f6d6573736167657c733a32323a223c703e496e636f7272656374204c6f67696e3c2f703e223b5f5f63695f766172737c613a313a7b733a31323a22617574685f6d657373616765223b733a333a226f6c64223b7d),
('eaab7a4b7bf011bb5e76d44cc3de08077d5e3300', '::1', 1451462150, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436313933343b),
('e89894d27aebb0bf94e9359db4ba6be57d79b9e3', '::1', 1451462493, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436323235353b),
('e2439546a0a119985885f5e1119b4970f3d5e033', '::1', 1451462777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436323733373b),
('4a0559496a8e7b94997b0a5f5cbf0a68c0e68ce8', '::1', 1451463311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436333034373b),
('a636b2d8eb9bd9e7114f0f3ade7231fc7250e236', '::1', 1451463484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436333437373b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343531343633343330223b67726176617461727c733a33323a223634653162386433346634323564313965316565326561373233366433303238223b),
('6d0fda5b7f1539bf3d0a6ce85944a96ac8c18ba8', '::1', 1451464359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436343335393b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343531343633343330223b67726176617461727c733a33323a223634653162386433346634323564313965316565326561373233366433303238223b),
('4a4df70a9404884fc07ef288a9852082e2793c79', '::1', 1451465112, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435313436353130303b6964656e746974797c733a31333a2261646d696e6973747261746f72223b757365726e616d657c733a31333a2261646d696e6973747261746f72223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343531343633343330223b67726176617461727c733a33323a223634653162386433346634323564313965316565326561373233366433303238223b),
('76c117323d6b882d5fd68cefbabf38247676c85b', '::1', 1452857352, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323835373138393b);

-- --------------------------------------------------------

--
-- Table structure for table `competent_result`
--

CREATE TABLE IF NOT EXISTS `competent_result` (
`id` int(11) NOT NULL,
  `reg_no` varchar(32) NOT NULL,
  `level` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `result` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `exp_date` date NOT NULL,
  `officer_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `competent_result`
--

INSERT INTO `competent_result` (`id`, `reg_no`, `level`, `type`, `occupation`, `result`, `date`, `exp_date`, `officer_id`) VALUES
(1, '123', '2', '2', '', '4', '0000-00-00', '0000-00-00', 0),
(2, '123', '2', '1', '', '2', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'data-encoder', 'Data Encoder'),
(3, 'data-expert', 'Data Expert User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
`id` int(11) unsigned NOT NULL,
  `reg_no` varchar(32) NOT NULL,
  `reg_date` date NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `officer_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `reg_no`, `reg_date`, `firstName`, `lastName`, `gender`, `address`, `dob`, `officer_id`) VALUES
(2, '123', '0000-00-00', 'Garrett', 'Winters', 'male', 'Tokyo', '1988-09-02', 0),
(3, '2', '0000-00-00', 'John', 'Doe', 'male', 'Kansas', '1972-11-02', 0),
(4, '3', '0000-00-00', 'Tatyana', 'Fitzpatrick', 'male', 'London', '1989-01-01', 0),
(5, '4', '0000-00-00', 'Quinn', 'Flynn', 'male', 'Edinburgh', '1977-03-24', 0),
(6, '5', '0000-00-00', 'asd', 'efg', 'male', 'addis ababa', '1234-12-12', 0),
(7, '6', '0000-00-00', 'nati', 'getachew', 'male', 'addis Ababa', '1991-01-09', 0),
(8, 'xxx-yyy-zzz', '2014-12-13', 'Engda', 'G', 'male', 'Arada', '2014-12-13', 0),
(9, 'yyy-zzz', '2014-12-13', 'AAA', 'BBB', 'male', 'Bulcha', '2014-12-13', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `company`, `phone`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `ip_address`, `active`) VALUES
(1, 'Admin', 'istrator', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', 'ADMIN', '0', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1453743439, '127.0.0.1', 1),
(4, '', 'kasa', 'kahsay', '$2y$08$AE0g3M4dHrkNCguFrviyYe9rT8y4vePv5jOVDHYF9gPym8pkM3v4u', '', '', NULL, 'kasa@h.n', NULL, NULL, NULL, NULL, 1453049425, 1453049440, '::1', 1),
(5, 'dani', 'dan', 'dani', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', '', NULL, 'dani@dani.dani', NULL, NULL, NULL, NULL, 1453186565, 1453735921, '::1', 1),
(6, 'nati', 'nati', 'nati', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', '', NULL, 'nati@nati.com', NULL, NULL, NULL, NULL, 1453560756, 1453736351, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 4, 3),
(7, 5, 2),
(8, 6, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asses_level`
--
ALTER TABLE `asses_level`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asses_result`
--
ALTER TABLE `asses_result`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asses_type`
--
ALTER TABLE `asses_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `competent_result`
--
ALTER TABLE `competent_result`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asses_level`
--
ALTER TABLE `asses_level`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `asses_result`
--
ALTER TABLE `asses_result`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `asses_type`
--
ALTER TABLE `asses_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `competent_result`
--
ALTER TABLE `competent_result`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
