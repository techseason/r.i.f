-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 06:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$i4LMfeFPQpGSNPTaccIkKuwxAkJ4PhBr3JND7FpXwWFjRvchQn17C', 'yatendrakumar@mjpru.ac.in', 1, '2020-03-27 17:51:00', '2023-05-15 17:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(8, 'Events', 'Events', '2023-05-12 19:32:52', NULL, 1),
(9, 'Launch', 'Launch', '2023-05-12 19:33:03', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` char(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`, `status`) VALUES
(1, '12', 'Anuj', 'anuj@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', '2018-11-21 11:06:22', 0),
(2, '12', 'Test user', 'test@gmail.com', 'This is sample text for testing.', '2018-11-21 11:25:56', 1),
(3, '7', 'ABC', 'abc@test.com', 'This is sample text for testing.', '2018-11-21 11:27:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br>', '2018-06-30 18:01:03', '2018-06-30 19:19:51'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>New Delhi India</p><p><b>Phone Number : </b>+91 -01234567890</p><p><b>Email -id : </b>phpgurukulofficial@gmail.com</p>', '2018-06-30 18:01:36', '2018-06-30 19:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`) VALUES
(1, 'MoU Signed between RIF and CRCC TRUST', 1, 1, 'The Rohilkhand Incubation Foundation (RIF) recently signed a Memorandum of Understanding (MoU) with the CRCC Trust, a leading organization in the field of rural development and livelihood promotion. The MoU aims to establish a partnership between the two organizations to support the growth and development of startups and entrepreneurs in the region.\r\n<br><br><br>\r\nThe MoU was signed in a ceremony attended by representatives of both organizations. The agreement outlines several areas of collaboration, including the promotion of entrepreneurship, capacity building for startups, and the provision of support services such as mentoring, funding, and networking opportunities.\r\n<br><br><br>\r\nOne of the key objectives of the partnership is to promote entrepreneurship in rural areas and to support the growth of startups in these regions. The CRCC Trust brings expertise in rural development and livelihood promotion, while RIF has a proven track record of supporting entrepreneurs and startups in the region.\r\n<br><br><br>\r\nThrough the partnership, the two organizations aim to identify promising startups in rural areas and provide them with the support they need to grow and succeed. This will include mentoring and coaching services, access to funding and investment opportunities, and networking events to connect startups with potential partners and customers.\r\n<br><br><br>\r\nThe MoU also includes provisions for joint research and development initiatives, as well as collaboration on training and capacity building programs. These initiatives will aim to provide startups and entrepreneurs with the knowledge and skills they need to succeed in today\'s competitive business environment.\r\n<br><br><br>\r\nOverall, the partnership between the Rohilkhand Incubation Foundation and the CRCC Trust is an essential step in promoting entrepreneurship and supporting the growth of startups in the region. By combining their expertise and resources, the two organizations can provide startups with the support they need to thrive and contribute to the economic development of the region. The MoU is a testament to the commitment of both organizations to promoting entrepreneurship and supporting the growth of startups in rural areas.', '2023-05-12 19:14:17', '2023-05-12 20:02:55', 1, 'MoU-Signed-between-RIF-and-CRCC-TRUST', '30e62fddc14c05988b44e7c02788e187.jpg'),
(2, 'Global business culture and Entrepreneurship program', 2, 2, 'In today\'s globalized economy, businesses must navigate cultural differences and adapt to new environments to succeed. That\'s where the Global Business Culture and Entrepreneurship Program comes in - a comprehensive program designed to prepare entrepreneurs and business leaders for success in an increasingly interconnected world.\r\n<br><br><br>\r\nThe Global Business Culture and Entrepreneurship Program is an intensive training program that provides participants with the tools, knowledge, and skills they need to succeed in a global business environment. The program covers a wide range of topics, including cross-cultural communication, international business law, marketing strategies, and leadership development.\r\n<br><br><br>\r\nParticipants in the program come from all over the world, providing a unique opportunity to network with peers and gain valuable insights into different cultural perspectives. Through a mix of classroom lectures, case studies, and hands-on exercises, participants gain a deep understanding of the complexities of doing business in different parts of the world.\r\n<br><br><br>\r\nOne of the key components of the program is the opportunity for participants to visit different countries and experience firsthand the challenges and opportunities of doing business in different cultural contexts. This provides participants with a deeper understanding of the cultural nuances that can impact business success and helps them develop strategies for adapting to new environments.\r\n<br><br><br>\r\nThe Global Business Culture and Entrepreneurship Program also emphasizes the importance of social responsibility and sustainable business practices. Participants learn about the role of business in society and how they can use their skills and resources to make a positive impact on the world.\r\n<br><br><br>\r\nFor entrepreneurs looking to launch a new venture, the program provides valuable insights into the challenges and opportunities of starting a business in a global context. Participants learn about key success factors such as identifying market opportunities, developing a business plan, and securing funding.\r\n<br><br><br>\r\nOverall, the Global Business Culture and Entrepreneurship Program is an essential program for anyone looking to succeed in today\'s global business environment. With its comprehensive curriculum, international focus, and emphasis on social responsibility, the program prepares participants to be effective leaders in a rapidly changing world.', '2023-05-12 19:54:44', '2023-05-12 19:58:08', 1, 'Global-business-culture-and-Entrepreneurship-program', 'd0096ec6c83575373e3a21d129ff8fef.jpg'),
(16, 'UP Global investor summit Organized by RIF', 8, 10, 'In today\'s globalized economy, businesses must navigate cultural differences and adapt to new environments to succeed. That\'s where the Global Business Culture and Entrepreneurship Program comes in - a comprehensive program designed to prepare entrepreneurs and business leaders for success in an increasingly interconnected world.\r\n<br><br><br>\r\nThe Global Business Culture and Entrepreneurship Program is an intensive training program that provides participants with the tools, knowledge, and skills they need to succeed in a global business environment. The program covers a wide range of topics, including cross-cultural communication, international business law, marketing strategies, and leadership development.\r\n<br><br><br>\r\nParticipants in the program come from all over the world, providing a unique opportunity to network with peers and gain valuable insights into different cultural perspectives. Through a mix of classroom lectures, case studies, and hands-on exercises, participants gain a deep understanding of the complexities of doing business in different parts of the world.\r\n<br><br><br>\r\nOne of the key components of the program is the opportunity for participants to visit different countries and experience firsthand the challenges and opportunities of doing business in different cultural contexts. This provides participants with a deeper understanding of the cultural nuances that can impact business success and helps them develop strategies for adapting to new environments.\r\n<br><br><br>\r\nThe Global Business Culture and Entrepreneurship Program also emphasizes the importance of social responsibility and sustainable business practices. Participants learn about the role of business in society and how they can use their skills and resources to make a positive impact on the world.\r\n<br><br><br>\r\nFor entrepreneurs looking to launch a new venture, the program provides valuable insights into the challenges and opportunities of starting a business in a global context. Participants learn about key success factors such as identifying market opportunities, developing a business plan, and securing funding.\r\n<br><br><br>\r\nOverall, the Global Business Culture and Entrepreneurship Program is an essential program for anyone looking to succeed in today\'s global business environment. With its comprehensive curriculum, international focus, and emphasis on social responsibility, the program prepares participants to be effective leaders in a rapidly changing world.', '2023-05-12 19:59:43', NULL, 1, 'UP-Global-investor-summit-Organized-by-RIF', 'd0096ec6c83575373e3a21d129ff8fef.jpg'),
(17, 'Ideathon-23 presented by RIF', 8, 10, 'The Rohilkhand Incubation Foundation (RIF) is an organization that is committed to promoting innovation and entrepreneurship in the Rohilkhand region of Uttar Pradesh, India. To this end, they have organized an event called Ideathon-23, which is designed to encourage young people to come up with innovative business ideas that can help drive economic growth in the region.\r\n<br><br><br>\r\nIdeathon-23 is a unique event that is open to anyone with an interest in entrepreneurship, innovation, and business. The event will bring together some of the brightest minds in the region, including entrepreneurs, business leaders, investors, and academics, to collaborate, share ideas, and provide guidance to participants.\r\n<br><br><br>\r\nThe event is designed to help participants refine their business ideas, develop new skills, and build valuable connections with others in the startup ecosystem. The RIF team has assembled a panel of judges who will evaluate the business ideas presented during the event, with the goal of selecting the most promising ideas for further development and funding.\r\n<br><br><br>\r\nIdeathon-23 is a great opportunity for young people in Rohilkhand to learn about entrepreneurship and innovation, and to gain valuable experience in developing and pitching their own business ideas. The event is also an opportunity for the RIF to showcase the potential of the Rohilkhand region as a hub for innovation and entrepreneurship.\r\n<br><br><br>\r\nOne of the key goals of the RIF is to create a supportive ecosystem that can help entrepreneurs and innovators in the region overcome the challenges they face when starting and growing a business. Ideathon-23 is just one of the many initiatives that the RIF has launched to help achieve this goal.\r\n<br><br><br>\r\nOverall, Ideathon-23 is an exciting event that has the potential to drive real economic growth in the Rohilkhand region. By bringing together young people with innovative business ideas, experienced business leaders, and investors, the event is creating a platform for collaboration and innovation that could help create new businesses and jobs in the region for years to come.', '2023-05-12 20:01:16', NULL, 1, 'Ideathon-23-presented-by-RIF', '9414a8f5b810972c3c9a0e2860c07532.jpg'),
(26, 'National Women Entrepreneur Summit organised by RIF', 8, 10, '<p>Rohilkhand Incubation Foundation, a non-profit organization that supports startups and entrepreneurs, recently organized a National Women Entrepreneur Summit on 15th may 2023. The summit aimed to provide a platform for women entrepreneurs from across the country to showcase their ideas, connect with investors and mentors, and gain valuable insights into the world of entrepreneurship.<br></p><p><br></p><p>The event was held over two days and featured a series of talks, panel discussions, and networking sessions. The summit brought together women entrepreneurs, investors, and industry experts from various fields such as technology, healthcare, and education.</p><p><br></p><p>The summit opened with an inspiring keynote address by Ms. Shikha Sharma, a well-known business leader and former CEO of Axis Bank. Ms. Sharma spoke about her personal journey as an entrepreneur and shared insights on the challenges and opportunities that women face in the world of business.</p><p><br></p><p>The panel discussions at the summit covered a range of topics, including funding opportunities for women entrepreneurs, scaling up a business, and leveraging technology for growth. The panelists included successful women entrepreneurs, venture capitalists, and experts from various fields.</p><p><br></p><p>One of the highlights of the summit was the startup pitch competition, where ten women-led startups presented their ideas to a panel of judges. The startups covered a range of sectors, including e-commerce, fintech, and healthcare. The winner of the competition received a cash prize and an opportunity to pitch to potential investors.</p><p><br></p><p>The summit also featured a mentorship program, where women entrepreneurs had the opportunity to connect with experienced mentors from various fields. The mentors provided valuable guidance and support to the entrepreneurs, helping them overcome the challenges of starting and growing a business.</p><p><br></p><p>Overall, the National Women Entrepreneur Summit organized by Rohilkhand Incubation Foundation was a great success. It provided a valuable platform for women entrepreneurs to connect with investors, mentors, and experts from various fields. The summit showcased the incredible talent and potential of women entrepreneurs in India and highlighted the need for greater support and opportunities for women in business.</p>', '2023-05-13 08:22:42', NULL, 1, 'National-Women-Entrepreneur-Summit-organised-by-RIF', 'fd23bddb169161cdfac037734a77217c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(10, 8, 'RIF', 'Events in RIF', '2023-05-12 19:33:22', NULL, 0),
(11, 9, 'RIF', 'Launch In RIF', '2023-05-12 19:33:42', NULL, 0),
(12, 8, 'RIF', 'RIF', '2023-05-15 04:08:40', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
