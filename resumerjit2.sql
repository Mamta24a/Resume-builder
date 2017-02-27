-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 11:55 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resumerjit2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE IF NOT EXISTS `bio` (
  `roll` varchar(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ph` varchar(13) NOT NULL,
  `presentadd` varchar(200) NOT NULL,
  `permanentadd` varchar(200) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `yrofcomp` int(4) NOT NULL,
  `bn` varchar(10) NOT NULL,
  `cgpa` float NOT NULL,
  `yoc` int(4) NOT NULL,
  `bn2` varchar(20) NOT NULL,
  `prcnt` float NOT NULL,
  `branch` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `cn` text NOT NULL,
  `sy` int(11) NOT NULL,
  `ey` int(11) NOT NULL,
  `sgpa1` float NOT NULL,
  `sgpa2` float NOT NULL,
  `sgpa3` float NOT NULL,
  `sgpa4` float NOT NULL,
  `sgpa5` float NOT NULL,
  `sgpa6` float NOT NULL,
  `sgpa7` float NOT NULL,
  `sgpa8` float NOT NULL,
  `cgpa3` float NOT NULL,
  `dp` float NOT NULL,
  `spcl` varchar(100) NOT NULL,
  `bl` int(2) NOT NULL,
  `ex` varchar(300) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`roll`, `name`, `email`, `ph`, `presentadd`, `permanentadd`, `fname`, `dob`, `gender`, `yrofcomp`, `bn`, `cgpa`, `yoc`, `bn2`, `prcnt`, `branch`, `degree`, `cn`, `sy`, `ey`, `sgpa1`, `sgpa2`, `sgpa3`, `sgpa4`, `sgpa5`, `sgpa6`, `sgpa7`, `sgpa8`, `cgpa3`, `dp`, `spcl`, `bl`, `ex`, `img`) VALUES
('0902IT131020', 'Mamta ', 'mamta24a@gmail.com', '2147483647', 'RJIT Girls Hostel, BSF Academy Tekanpur , Gwalior , Madhya Pradesh-475005', 'RZ-24a VInoba Enclave Extention CRPF Colony Jharoda Kalan New Delhi-110072', 'Birendra Kumar', '1994-12-27', 'Female', 2011, 'CBSE', 8.8, 2013, 'CBSE', 78, 'Information Technology', 'Bachelor of Engineering', 'Rustamji Institute of Technology', 2013, 2017, 7.07, 6.67, 7.06, 7.56, 7.5, 0, 0, 0, 7.1, 0, 'Web Development', 0, 'Intern at BEL(bharat Electronics Limited)', 'mamta.jpg'),
('0902IT131021', 'Shweta Ruwasiya', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technolo', 'Bachelor of Engineer', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Java, C++, Ruby, Perl', 0, '', 'shwetu.jpg'),
('0902IT131022', 'priyanka Buria', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technolo', 'Bachelor of Engineer', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'HTML, CSS, JS, PHP', 0, '', 'pari.jpg'),
('0902IT131023', 'Tanuja sharma', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technolo', 'Bachelor of Engineer', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'HTML, Leadership, C', 1, '', 'tanu.jpg'),
('0902IT131024', 'Nisha Chauhan', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technolo', 'Bachelor of Engineer', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Networking, C++, Java', 3, '', 'nishu.jpg'),
('0902IT131026', 'Rakhee Rawal', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technology', 'Bachelor of Engineering', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Art and craft, python', 0, '', 'rakhee.jpg'),
('0902IT131030', 'momo', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technology', 'Bachelor of Engineering', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Java, jquery', 0, '', 'momo.jpg'),
('0902IT131050', '', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technology', 'Bachelor of Engineering', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', ''),
('0902IT131060', '', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technology', 'Bachelor of Engineering', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', ''),
('0902IT131090', 'Ankita Yadav', 'nisha@gmail.com', '99999999', 'gandhi nagar', 'mainpuri, UP', 'birendra chauhan', '2016-11-18', 'Female', 2011, 'CBSE', 10, 1023, 'cbse', 90, 'Information Technology', 'Bachelor of Engineering', 'rjit', 0, 0, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 'android', 0, 'cns', '14305425_1088589117920838_563807864634642652_o.jpg'),
('0902IT131096', '', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technology', 'Bachelor of Engineering', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', ''),
('0902IT131130', 'minnie', '', '0', '', '', '', '0000-00-00', 'Female', 0, '', 0, 0, '', 0, 'Information Technology', 'Bachelor of Engineering', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Java, C++, Ruby, Perl', 0, '', 'minnie.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brswcmp`
--

CREATE TABLE IF NOT EXISTS `brswcmp` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cn` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `discc` varchar(500) NOT NULL,
  `phno` varchar(13) NOT NULL,
  `ec` varchar(500) NOT NULL,
  `discj` varchar(500) NOT NULL,
  `sr` varchar(500) NOT NULL,
  `ww` varchar(20) NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brswcmp`
--

INSERT INTO `brswcmp` (`name`, `email`, `cn`, `img`, `discc`, `phno`, `ec`, `discj`, `sr`, `ww`, `dt`) VALUES
('abc', 'abc@gmail.com', 'WIPRO', 'wipro.jpg', 'Wipro Technologies is a trailblazer, training in emerging technologies.\r\nWe empower university student', '12345678', 'no back log', 'The selected intern(s) will work on following during the internship: \r\nâ€¢Posters for online marketi', 'People who are interested in design and are good a', 'http://utltraining.c', '2016-05-19'),
('abcd', 'abcd@gmail.com', 'TATA ', 'tata.png', 'With the help of technology we solving design end to end problem.\r\nDesign dodo is a tech company, bu', '1234567', 'no back log', 'The selected intern(s) will work on following during the internship: \r\nâ€¢Product research  \r\nâ€¢Wir', 'Anyone is welcome with above skills, but make sure', 'http://designdodo.co', '2016-05-04'),
('root', 'pari1234@gmail.com', 'DELL', 'dell.png', 'Only those candidates can apply who:\r\nare available for full time (in-office) internship.\r\ncan start the internship between', '2147483647', 'Only those candidates can apply who:\r\nare available for full time (in-office) internship.\r\ncan start the internship between', 'Only those candidates can apply who:\r\nare available for full time (in-office) internship.\r\ncan start the internship between ', 'Only those candidates can apply who: are available for full time (in-office) internship.', 'http://utltraining.c', '2016-10-07'),
('Tanuj Shrivastva', 'tanuj@gmail.com', 'IBM', 'ibm.jpg', 'We are an IT startup. Working mobile apps and website designs. We have launched few mobile utility apps and an e-commerce.We also work on data mining technologies so that we put the best products for our customers. We have launched a social media platform inkinded.com.\r\n', '2147483647', 'Only those candidates can apply who: can start the', 'The selected intern(s) will work on following during the internship: \r\n1. Creating stories from the bullet points.\r\n2. English Vocabulary should be spot on.\r\n3. Create stories from the images supplied.', 'Skill(s) required: English Proficiency (Written)', 'http://www.cumbretec', '2016-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `fp`
--

CREATE TABLE IF NOT EXISTS `fp` (
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fp`
--

INSERT INTO `fp` (`email`) VALUES
('mamta24a@gmail.com'),
('mamta24a@gmail.com'),
('mamta.naukrixpress@g'),
('bbm@hbh.vuo'),
('cs@vj.vkm'),
('d@s.n'),
('d@g.co'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('xax@vg.gj'),
('s@d.c'),
('bjb@hh.com'),
('hb@nn.c'),
('njmkl@bj.bhj'),
('yh@hj.hbn'),
('yh@hj.hbn'),
('yh@hj.hbn'),
('yh@hj.hbn'),
('ffffffg@fr.gyn'),
('bkbkj@vh.bujj'),
('jmnjk@gh.bhjn'),
('mamta24a@gmail.com'),
('mamta24a@gmail.com'),
('mamta24a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prebuiltresumes`
--

CREATE TABLE IF NOT EXISTS `prebuiltresumes` (
  `resumes` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prebuiltresumes`
--

INSERT INTO `prebuiltresumes` (`resumes`) VALUES
(''),
('');

-- --------------------------------------------------------

--
-- Table structure for table `rsmtbl2`
--

CREATE TABLE IF NOT EXISTS `rsmtbl2` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `phno` varchar(13) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `objc` longblob,
  `sculnm` varchar(100) DEFAULT NULL,
  `yrofcomp` int(11) DEFAULT NULL,
  `bn` varchar(100) DEFAULT NULL,
  `cgpa` float(2,2) DEFAULT NULL,
  `sn` varchar(100) DEFAULT NULL,
  `yoc` int(11) DEFAULT NULL,
  `bn2` varchar(100) DEFAULT NULL,
  `stream` varchar(100) DEFAULT NULL,
  `prcnt` decimal(3,2) DEFAULT NULL,
  `cn` varchar(100) DEFAULT NULL,
  `sy` date DEFAULT NULL,
  `ey` date DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `sgpa` decimal(2,2) DEFAULT NULL,
  `cgpa3` decimal(2,2) DEFAULT NULL,
  `skills` longblob,
  `pn` varchar(20) DEFAULT NULL,
  `frm` date DEFAULT NULL,
  `too` date DEFAULT NULL,
  `disc` longtext,
  `eca` longblob,
  `img` text NOT NULL,
  `backlog` varchar(20) NOT NULL,
  `qualities` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsmtbl2`
--

INSERT INTO `rsmtbl2` (`name`, `email`, `phno`, `address`, `objc`, `sculnm`, `yrofcomp`, `bn`, `cgpa`, `sn`, `yoc`, `bn2`, `stream`, `prcnt`, `cn`, `sy`, `ey`, `branch`, `degree`, `sgpa`, `cgpa3`, `skills`, `pn`, `frm`, `too`, `disc`, `eca`, `img`, `backlog`, `qualities`) VALUES
('Mamta Kumari', 'mamta24a@gmail.com', '2147483647', 'RZ-24 â€˜Aâ€™ Vinoba Enclave Extension CRPF Colony Jharoda Kalan New Delhi â€“ 110072 INDIA ', 0x4920616d2068617264776f726b696e672c20656167657220746f206c6561726e206e657720746563686e6f6c6f676965732c206f7074696d69737420616e6420656e657267657469632e2049206861766520676f6f64206c6f676963616c20616e6420616e616c79746963616c20736b696c6c7320616e642061206465657020696e74657265737420696e20e2809857656220446576656c6f706d656e7420616e642044657369676e696e67e280992e20492068617665206120776f726b696e67206b6e6f776c6564676520696e204a6176612070726f6772616d6d696e6720616e6420432b2b2e204920616c736f206861766520736f6d65206b6e6f776c65646765206f662044424d5320284461746162617365204d616e6167656d656e742053797374656d2920616e64204d7953514c2e20492068617665206265656e20696e746572657374656420696e20746865206669656c64206f662064657369676e2066726f6d206d79206368696c64686f6f642061732049206c696b65206265696e672063726561746976652e204d6f72656f7665722c2049206c6f76652070726f6772616d6d696e672e205765622064657369676e696e6720616e6420646576656c6f706d656e742061726520746865206669656c647320776865726520492063616e2070757273756520626f7468206d7920696e74657265737420696e2070726f6772616d6d696e6720616e64206d7920696e74756974696f6e206f662064657369676e2073696d756c74616e656f75736c792e20492068617665206b6e6f776c6564676520696e2048544d4c2c204353532c204a617661205363726970742c205048502e2049206861766520612067726561742073656e7365206f66206f7267616e697a6174696f6e2c20696e646570656e64656e636520616e6420676f6f64207465616d207370697269742e, 'Kendriya Vidyalaya, C.R.P.F. Campus, Jharoda Kalan, New Delhi', 2011, 'Central Board of Secondary Education', 0.99, 'Kendriya Vidyalaya, C.R.P.F. Campus, Jharoda Kalan, New Delhi', 2013, 'Central Board of Secondary Education', 'Science( Physics, Chemistry, Maths, Computer Science)', '9.99', 'Rustamji Institute of Technology', '2013-08-01', '2017-07-30', 'Information Technology', 'Bachelor of Engineer', '0.99', '0.99', 0x50726f6772616d6d696e67204c616e67756167657320200d0a4f666669636520546f6f6c73202020202020202020202020202020202020202020202020202020202020202020202020202020200d0a4f7065726174696e672053797374656d7320200d0a432f432b2b2c204a6176612c2053514c2c2048544d4c2c204353532c204a6176615363726970742c2050687020200d0a4d6963726f736f667420576f72642c20506f776572506f696e742c20457863656c2c204f7261636c652c204d6963726f736f6674204163636573732c204d6963726f736f66742056697375616c2053747564696f2042617369637320282e4e455429206574632e204d6963726f736f66742057696e646f77732058502c2056697374612c20372c20382c2031302c205562756e74752c204c696e7578202852656468617429, 'Bel Intranet Website', '2016-07-13', '2016-08-13', '"Bel Intranet Website" at Bharat Electronics Limited (BEL), Bangalore during July-August 2016:- The goal of this project was to redesign the intranet website of Naval System Department of BEL and also added some new features according to the latest needs of department. Further description is present in link given below:     https://drive.google.com/open?id=0B6lUs5uvlF94eTFmX1RaLUo5Y00  \r\nFeatures of this website: 1. Redesigned the old Naval System(NS-1) website of Bharat Electronics Limited(BEL). 2. Main contents:           a). Welcome page of NS.           b). Described Mission, Vision, and Values of NS1 and NS2.           c). Latest updates or news flash of BEL. 3. Newly added features:           a). Department structure in the form of tree, visible to all visitors of website.           b). Separate login/logout systems for employees and admin, which will authenticate user or admin to the user or admin      login page otherwise it will show an error message accordingly.', 0xe280a22050617274696369706174656420696e204861636b657265617274682c20436f6465636865662c20436f6465737072696e742070726f6772616d6d696e672c204d6963726f736f667420496d6167696e652043757020636f6d7065746974696f6e732e200d0ae280a22050617274696369706174656420696e20524a4954204765656b20636f6d6d756e697479206576656e74732e200d0ae280a22050617274696369706174656420696e204b656e64726979612056696479616c6179612053616e67617468616e20284b56532920526567696f6e616c206c6576656c20536f6369616c20536369656e63652045786869626974696f6e20616674657220636c656172696e6720746865207363686f6f6c206c6576656c20636f6d7065746974696f6e2e200d0ae280a22043756c747572616c204361707461696e206f66207363686f6f6c2e200d0ae280a220576f6e20766172696f75732061776172647320696e204172747320616e642043726166747320696e207363686f6f6c20616e6420636f6c6c6567652e200d0ae280a22052756e6e657220757020666f722074686520746167206f6620e2809c4d6973732046726573686572e2809d2061742046726573686572e280997320706172747920696e206f757220636f6c6c6567652e200d0ae280a220436f6f7264696e61746f7220666f72204d61732046726573636f20284672657368657220706172747929206576656e74206f7267616e697a656420617420524a49542e200d0ae280a220566f6c756e7465657220666f7220496e7465726e6174696f6e616c20495420616e6420435320636f6e666572656e63652068656c6420617420524a49542e200d0ae280a220417474656e6465642048522053756d6d697420617420494949544d20636f6c6c6567652c204777616c696f722e20, 'mamta.jpg', 'no backlog', 'HTML, Java, CSS, JS , PHP, C++, MySql'),
('Nisha Chauhan', 'nisha24@gmail.com', '2147483647', 'UP', '', '', 0, '', 0.00, '', 0, '', '', '0.00', '', '0000-00-00', '0000-00-00', 'Information Technology', 'Bachelor of Engineer', '0.00', '0.00', '', '', '0000-00-00', '0000-00-00', '', '', 'nishu.jpg', '1 backlog', 'Netwroking, CCNA, Academics'),
('Priyanka Buria', 'priyankaburia22ps@gm', '2147483647', 'rjit girls hostel,stc,tekanpur,gwalior', 0x73656c6620636f6e666964656e742c2070756e637475616c2c206861726420776f726b696e6767, 'mpm sr. school', 2010, 'rajasthan board', 0.99, 'mgg sr. school', 2012, 'rajasthan board', 'science', '9.99', 'rjit', '2013-08-01', '0000-00-00', 'ec', 'be', '0.99', '0.99', 0x6861726420776f726b696e672c206d616e6167656d656e7420736b696c6c732c2073656c6620636f6e666964656e6365, '', '0000-00-00', '0000-00-00', '', 0x62726f7773696e67207468696e6773206f66206d7920696e7465727374, 'pari.jpg', ' backlog', 'Apttitude, Reasoning, Yoga, Maths'),
('Rakhee Rawal', 'rakheerw90@gmail.com', '2147483647', 'qtr no.-390 , sector-5 , pushp vihar ,new delhi-11', 0x6920616d20766572792068617264776f726b696e67202c636f6f7065726174697665202c70756e637475616c2c667269656e646c79206e61747572652c696e746572616374697665207175616c6974792e0d0a69206c696b6520746f20646f20776f726b20696e207465616d2c73686172696e67206e6577206964656173, 'kendriya vidyalaya p', 2011, 'cbse', 0.99, 'kendriya vidyalaya p', 2013, 'cbse', 'computer science', '9.99', 'Rustam ji institute ', '2013-08-01', '0000-00-00', 'ec', 'be', '0.99', '0.99', 0x6c616e6775616765732d632c632b2b20616e64206a6176610d0a6b6e6f776c656467652061626f7574204d41544c414220616e642058494c494e580d0a, '', '0000-00-00', '0000-00-00', '', 0x74776f2074696d657320326e64207072697a6520696e2072616e676f6c692c2070617274696369706174656420696e20616e6e75616c2066756e6374696f6e206f66206d7920636f6c6c6167652c317374207072697a6520696e20736b6174696e6720636f6d7065746974696f6e2e0d0a73706f7274732d326e64207072697a6520696e206261646d696e746f6e2e, 'rakhee.jpg', 'no backlog', 'HTML, Java, CSS, Art & Craft'),
('Shweta Ruvasiya', 'sruvasiya@gmail.com', '2147483647', '240/9 B.M Colony Indore', 0x706f7369746976652061747469747564650d0a70756e637475616c0d0a6861726420776f726b696e670d0a, 'Kendriya Vidyalaya N', 2011, 'CBSE', 0.99, 'Kendriya Vidyalaya N', 2013, 'CBSE', 'Science', '9.99', 'Rustamji Institute o', '2013-08-01', '0000-00-00', 'it', 'be', '0.99', '0.99', 0x70726f6772616d6d696e67206c616e67756167653a2d2063202c20632b2b0d0a, '', '0000-00-00', '0000-00-00', '', 0x73696e67696e670d0a64616e63696e670d0a776f6e20666972737420707269636520696e20686f7572206f6620636f646520636f646520636865636620726a6974206765656b, 'shwetu.jpg', 'no backlog', ' JS , PHP, C++, Modelling'),
('Tanuja sharma', 'tanuja32sharma@gmail', '2147483647', 'rjit girls hostel,tekanpur gwalior.', '', 'kendriya vidyalaya n', 2011, '', 0.99, 'kendriya vidyalaya n', 2013, 'cbse', 'PCM', '9.99', 'Rustam ji institute ', '2013-08-01', '0000-00-00', 'ec', 'be', '0.99', '0.99', 0x6b65656e206c6561726e65722c6d61696e74656e616e636520616e64206c6561646572736869702c636f6e666964656e742c7465616d20776f726b, 'tracking of high spe', '2016-05-01', '2017-04-02', 'it will help for a traffic police,for finding out the high speedy vehcile.', 0x776f726b20666f7220616e204e474f2c617474656e7465642073656d696e6172206f766572206469736173746572206d616e6167656d656e74, 'tanu.jpg', '2 backlogs', 'Leadership, Robotics, Bank, SSC'),
('Ankita Yadav', 'yankita@gmail.com', '2147483647', 'Gwalior', '', '', 0, '', 0.00, '', 0, '', '', '0.00', '', '0000-00-00', '0000-00-00', 'Information Technology', 'Bachelor of Engineer', '0.00', '0.00', '', '', '0000-00-00', '0000-00-00', '', '', '14305425_1088589117920838_563807864634642652_o.jpg', 'No backlogs', 'Android, Academics, C++');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE IF NOT EXISTS `signin` (
  `FN` varchar(50) DEFAULT NULL,
  `email` varchar(20) NOT NULL DEFAULT '',
  `PW` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`FN`, `email`, `PW`) VALUES
('Mamta Kuma', 'mamta24a@gmail.com', '11111'),
('Priyanka B', 'pari1234@gmail.com', '11111'),
('priya kohl', 'priya@gmail.com', '11111'),
('Priyanka B', 'priyankaburia22ps@gm', '12345'),
('Shweta Ruw', 'shwetaruwasiya@gmail', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `signinemp`
--

CREATE TABLE IF NOT EXISTS `signinemp` (
  `FN` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `PW` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signinemp`
--

INSERT INTO `signinemp` (`FN`, `email`, `PW`) VALUES
('Mamta Kumari', 'mamta24a@gmail.com', '11111'),
('priya kohli', 'priya@gmail.com', '11111'),
('Tanuj Shrivastava', 'tanuj@gmail.com', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `upload_resume`
--

CREATE TABLE IF NOT EXISTS `upload_resume` (
`id` int(11) NOT NULL,
  `resm` text NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_resume`
--

INSERT INTO `upload_resume` (`id`, `resm`, `name`) VALUES
(1, 'elitmus_test_paper7.pdf', ''),
(2, 'MCATPrep_Practice_MCAT_Test_2-Mcat2.pdf', 'Mamta Kumari'),
(3, 'elitmus_test_paper5.pdf', ' Momo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
 ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `brswcmp`
--
ALTER TABLE `brswcmp`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `rsmtbl2`
--
ALTER TABLE `rsmtbl2`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signinemp`
--
ALTER TABLE `signinemp`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `upload_resume`
--
ALTER TABLE `upload_resume`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_resume`
--
ALTER TABLE `upload_resume`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
