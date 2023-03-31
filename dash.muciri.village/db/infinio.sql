-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 02:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(250) NOT NULL,
  `autherName` varchar(250) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `thumbnail` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `autherName`, `date`, `thumbnail`, `image`, `title`, `content`, `status`) VALUES
(4, 'Infinio Admin', '2022-10-17 09:40:05', 'industry-e-governance.jpg', 'blog-dummy.png', 'Enterprise Application Development - The New Frontiers', '<p><strong>EAD or&nbsp;Enterprise Application Development&nbsp;is a buzzword in the IT circles. With the global spend on enterprise application development predicted to reach close to $430 billion by 2022, every enterprise, small and big, is leaving no stone unturned to capture a share of this lucrative business space.</strong></p>\r\n\r\n<p><s>While its use, spreading across a variety of industries is known, lesser known is the positive impact that it could create on organizations and their finances.</s></p>\r\n\r\n<p>While reduced process time, a centralized data system and enhanced collaboration between departments are the major advantages of an Enterprise Application, many other factors also add to the growing demand for Enterprise Applications that can benefit organizations immensely in the long run.</p>\r\n\r\n<p>While an ERP software integrates the various departments within an organization into a single entity, it also improves efficiency and visibility, keeping in mind various business aspects.</p>\r\n\r\n<p>The variants of an enterprise application software can impact Business Intelligence, Supply Chain Management, Human Resource Management and many other vital functions of an organization. In each of these areas, an ideal application can improve processes and outcomes and create tangible results for an organization.</p>\r\n\r\n<p>There is no doubt on the standing that the pros in favour of the enterprise applications outweigh the cons. Still, there is a critical need to conduct a thorough market-based research before developing an application and understanding its deeper implications in the long run, in evolving a fool-proof system. Competitor analysis, user needs, project risks, legislation, security and scalability and many such important facets need to be scrutinized.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Due diligence is a mandatory aspect that any enterprise application development company must follow before embarking on the development process, with the pre development phase that is deeply research oriented. This will help in mitigating risks and in taking corrective action without complicating the development life cycle.</p>\r\n\r\n<p>For an&nbsp;<a href=\"https://www.lanwaresolutions.com/enterprise-application-development-services\">e</a><a href=\"https://www.lanwaresolutions.com/enterprise-application-development-services\">nterprise software development firm</a>, Enterprise mobility is as important a term when we talk of EAD. With mobile being the first point of access, developing bespoke software to improve businesses is, in a way, EAD. Mobile has in a way eclipsed the desktop or laptop and the demand for newer applications on the mobile would only continue to grow.</p>\r\n\r\n<p>An&nbsp;<a href=\"https://www.lanwaresolutions.com/enterprise-application-development-services\">enterprise application development company</a>&nbsp;must employ user focused procedures, be effective in what it does, have enough creativity to highlight the app, must possess outstanding tech skills, must employ an agile development process and also have a sound understanding of cross platform development.</p>\r\n\r\n<p>EAD offers its own set of advantages. There is increased employee engagement, less redundancy, improved efficiency and better coordination which in turn leads to value addition. Tasks no longer look mundane and employees feel that they are working on better things.</p>\r\n\r\n<p>An enterprise application is thus a highly effective tool that busts traditional myths about automation and generates better outcomes.</p>\r\n\r\n<p>Critical among the varied features of an enterprise Application are Automation, cutting edge AI or Machine Learning Technology, Data Management, IoT, Emerging Technologies, App Security and Accessible Education Documentation.</p>\r\n\r\n<p>Irrespective of size, it can be deployed to solve some of the most pressing problems, even on the move.</p>\r\n\r\n<p>We only need to understand it better to make it work better.</p>\r\n', 1),
(5, 'Infinio Admin', '2022-10-17 09:45:50', 'industry-education.jpg', '1658923090MicrosoftTeams-image (77).png', 'Web Application Development:Is Progressive Web Apps the Future?', '<p>Web application development is becoming more and more in demand as brick and mortar organizations continue to optimize their internal departments and operations and as online firms compete to attract more clients, create new revenue streams, or enhance their brand recognition. By using&nbsp;<a href=\"https://lanwaresolutions.com/web-application-development\"><strong>web app development solutions</strong></a>, web-based projects can function and behave just like mobile apps. While still distributing material through a network and the internet, web apps encourage responsive interactions with users.&nbsp;<a href=\"https://lanwaresolutions.com/web-application-development\"><strong>Web app solutions</strong></a>&nbsp;may be compared to the hip younger sibling of web development. Although this entire article was originally created using web apps, you are currently visiting this website because of web development.</p>\r\n\r\n<p><strong>What is the Best Technology for the Development of Web Applications?</strong></p>\r\n\r\n<p>Depending on the needs of the application, a variety of technologies can be used in web application development. There are numerous examples of these, such as AJAX (Asynchronous JavaScript and XML), ASP (Microsoft Web Server (IIS) Scripting language), ASP.NET (Microsoft&#39;s Web Application Framework - successor to ASP), ActionScript, CSS (Cascading Style Sheets), ColdFusion (Adobe&#39;s Web Application Framework), CGI, HTML5 (Hypertext Markup Language), Java, JavaScript, JSP, Node.js, and Node.js are all examples of web application frameworks.</p>\r\n\r\n<p><strong>Progressive Web Apps (PWAs): What Are They?</strong></p>\r\n\r\n<p>In the digital world, progressive web apps (PWAs) are a relatively new type of web app. PWAs are hybrid apps that combine the best features of native and hybrid apps. PWAs, like any other web app, are accessed through a browser. Like any other website, PWAs are accessible to users. PWAs stand out because they defy what a web visitor or smartphone user might anticipate.</p>\r\n\r\n<p>One of the many benefits of investing in progressive web app development is that it is platform-agnostic. Because of this decentralized approach to app development, whether the end-user uses an Android device or an iOS device is no longer relevant to the app developer. As a result, regardless of device or operating system, the end-user can access your app through a simple browser on their phone. As things stand, an increasing number of people will continue to use mobile phone browsers to access the internet. Companies that optimize their websites for browser-independent user experience optimization will gain market share.<br />\r\nFurthermore, because progressive web apps support push notifications, they are likely to play a key role in transforming brands&#39; eCommerce operations. Because PWAs make software distribution more cost-effective and efficient, tech companies may develop them more frequently than native or hybrid apps. Overall, progressive web apps are likely to disrupt the software app industry in the coming years, if they haven&#39;t already.</p>\r\n\r\n<p>To create your own web application? To find expert web developers who are knowledgeable in the principles of web app development, contact Lanware Solutions right away!</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(250) NOT NULL,
  `password` varchar(600) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `id`) VALUES
('admin@infinio', 'Admin2022@', 1),
('jerrysabu', '5f4dcc3b5aa765d61d8327deb882cf99', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
