-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 11:23 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant`
--

CREATE TABLE `tbl_applicant` (
  `listId` int(11) NOT NULL,
  `applicant_name` varchar(30) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `school` varchar(51) DEFAULT NULL,
  `course` varchar(73) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `applied_position` varchar(10) DEFAULT NULL,
  `TOEIC_result` varchar(3) DEFAULT NULL,
  `aptitude_result` varchar(2) DEFAULT NULL,
  `p1` varchar(2) DEFAULT NULL,
  `p2` varchar(2) DEFAULT NULL,
  `p3` varchar(2) DEFAULT NULL,
  `assessment_result` varchar(1) DEFAULT NULL,
  `date_applied` varchar(10) DEFAULT NULL,
  `plan` varchar(10) DEFAULT NULL,
  `actual` varchar(10) DEFAULT NULL,
  `no_of_days` varchar(10) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `status` varchar(38) DEFAULT NULL,
  `date_of_orientation` varchar(10) DEFAULT NULL,
  `remarks` varchar(42) DEFAULT NULL,
  `initial_interviewer` varchar(50) NOT NULL,
  `initial_result` varchar(10) NOT NULL,
  `initial_date` date NOT NULL,
  `final_interviewer` varchar(50) NOT NULL,
  `final_result` varchar(10) NOT NULL,
  `final_date` date NOT NULL,
  `jo_interviewer` varchar(50) NOT NULL,
  `jo_result` varchar(15) NOT NULL,
  `jo_date` date NOT NULL,
  `interview_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_applicant`
--

INSERT INTO `tbl_applicant` (`listId`, `applicant_name`, `contact_no`, `school`, `course`, `department`, `applied_position`, `TOEIC_result`, `aptitude_result`, `p1`, `p2`, `p3`, `assessment_result`, `date_applied`, `plan`, `actual`, `no_of_days`, `rating`, `status`, `date_of_orientation`, `remarks`, `initial_interviewer`, `initial_result`, `initial_date`, `final_interviewer`, `final_result`, `final_date`, `jo_interviewer`, `jo_result`, `jo_date`, `interview_remarks`) VALUES
(1, 'Banog, Myca P. ', '9503235835', 'BSU-Rosario', 'BS Education', 'QA-FGI', 'Associate', '', '15', '4', '5', '6', 'P', '2019-03-01', '', '', '', '', 'For Requirements', '', 'B248 / Jan 16, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(2, 'Casio, Kenneth D. ', '9055721728', 'BSU-Main', 'BS Mechatronics Engineering', 'PE', 'Staff', '785', '25', '9', '9', '7', 'F', '04/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(3, 'Arcallana, Neil Jophet P.', '9477720808', 'Western Institute of technology', 'BS Electrical Engineering', 'PE', 'Staff', '805', '25', '8', '13', '4', 'P', '04/01/2019', '', '', '', '', 'For JO', '', ' B249 /January 23 ', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(4, 'Caraig, John Cristian M.', '9206318592', 'BSU-Main', 'BS in Industrial Technology', 'PE', 'Associate', '', '18', '7', '6', '5', 'F', '04/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(5, 'Sanchez, Christrian Paul D.', '9094884312', 'BSU- Rosario', 'BS in Industrial Technology', 'PE', 'Associate', '', '10', '4', '4', '2', 'F', '04/01/2019', '', '', '', '', 'Failed Departmental Interview', '', 'B250/ Jan.30, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(6, 'Venus, Elvin Moises', '9959865074', 'Southern Luzon State University', 'BS in Industrial Technology', 'PE', 'Associate', '', '21', '6', '9', '6', 'F', '04/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(7, 'Magnaye, Ma. Crishelle A.', '9109115143', 'UB- Main', 'BS  Industrial Engineering', 'PE', 'Staff', '710', '16', '9', '6', '1', 'F', '04/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(8, 'Hortal, John Paul I.', '9555944523', 'BSU- San Juan', 'BS in Industrial Engineering', 'PE', 'Associate', '', '16', '6', '5', '5', 'F', '05/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(9, 'Morcilla, Charlene T. ', '9096191568', 'AMA Computer College-Lipa', 'BS Electronics Engineering ', 'QA-CAG', 'Staff', '665', '19', '7', '7', '5', 'F', '05/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(10, 'De Leus, John Leo A. ', '9293332050', 'Polytechnic University of the Philippines ', 'BS Electrical Engineering', 'PE', 'Staff', '900', '24', '9', '10', '5', 'F', '05/01/2019', '', '', '', '', 'Did not Attend On JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(11, 'Mendoza, Jairo D. ', '9974362809', 'UB-Lipa', 'BS Industrial Engineering', 'PE', 'Staff', '680', '12', '7', '3', '2', 'F', '05/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(12, 'Ro?a, Ma. Rochelle M. ', '9568042943', 'UB-Main', 'BS Computer Engineering ', 'QA-CAG', 'Staff', '855', '27', '12', '9', '6', 'F', '05/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(13, 'De Luna, Lorenz April B. ', '9754322023', 'LPU-Laguna', 'BS Industrial Engineering ', 'PE', 'Staff', '710', '16', '4', '8', '4', 'F', '05/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(14, 'Vidal, MenchieB.', '9359501676', 'BSU- Lipa', 'BS in Industrial Technology', 'PE', 'Associate', '', '19', '4', '9', '6', 'F', '08/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(15, 'Corpuz, Meljohn I.', '9219858883', 'BSU- Lipa', 'BS in Industrial Technology', 'PE', 'Associate', '', '23', '6', '9', '8', 'F', '08/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(16, 'Manongsong, Sheryl C.', '9266454278', 'Golden Gate Colleges', 'Industrial Plan Engineering', 'Production', 'Staff', '700', '18', '8', '7', '3', 'F', '08/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(17, 'Antonio, Celiza F.', '9056769942', 'Mariano Marcos State University', 'BS Computer Engineering ', 'PE', 'Staff', '650', '19', '8', '9', '2', 'F', '08/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(18, 'Bucud, Jeanelyn M.', '9497339294', 'Faith-Tanauan', 'BS Computer Engineering ', 'PE', 'Staff', '810', '21', '11', '7', '3', 'P', '08/01/2019', '', '', '', '', 'For JO', '', 'B249/ Jan.23, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(19, 'Cruz, Jean Krizza L.', '9951634475', 'De La Salle Lipa', 'BS Electronics Engineering ', 'PE', 'Staff', '880', '29', '9', '10', '4', 'F', '08/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(20, 'Gamboa, Nolyjean S.', '9463873510', 'University of Souther Mindanao(USM)', 'BS Electronics Engineering ', 'Production', 'Staff', '775', '16', '7', '7', '2', 'P', '08/01/2019', '', '', '', '', 'For JO (For B.G. Checking)', '', 'B249/ Jan.23, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(21, 'Villalobos, Jacquilyn R.', '9195887855', 'BSU-Main', 'BS Computer Engineering ', '', 'Staff', '685', '20', '8', '9', '3', 'F', '08/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(22, 'Bonaobra, Maricel B.', '9985313561', 'AMA Computer College-Lipa', 'BS Electronics & Communications Engineering', 'QA-CAG', 'Supervisor', '735', '0', '-', '-', '-', 'P', '08/01/2019', '', '', '', '', 'For JO', '', 'For Negotiation', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(23, 'Delen, Michelle ', '9291682350', 'UB-Main', 'BS Electrical Engineering', 'QA-CAG', 'Staff', '570', '18', '7', '8', '3', 'P', '08/01/2019', '', '', '', '', 'For JO', '', 'B250/ Jan.30, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(24, 'Lumbres, Boyet V.', '9977055915', 'PUP-Sto. Tomas', 'BS Electrical Engineering', 'PE', 'Staff', '670', '19', '5', '9', '5', 'F', '09/01/2018', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(25, 'Galla, Julie Fe C.', '9261687817', 'Occidental Mindoro State College', 'BSBA', '', 'Associate', '', '13', '4', '6', '3', 'F', '09/01/2018', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(26, 'Carreon, Mark Anthony', '9051671865', 'BSU- Lipa', 'BS Industrial Engineering', 'PE', 'Staff', '765', '28', '12', '11', '5', 'P', '10/01/2019', '', '', '', '', 'For JO', '', 'B249/ Jan.23, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(27, 'Magmanlac, Glenn Mar', '9758242134', 'BSU- Lipa', 'BS Industrial Engineering', 'PE', 'Staff', '680', '18', '', '', '', 'P', '10/01/2019', '', '', '', '', 'For JO', '', 'B249/ Jan.23, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(28, 'Pasia,  Mark Joven', '9366963275', 'BSU- Main', 'BS Industrial Technolgy', 'PE', 'Associate', '', '17', '4', '6', '7', 'F', '10/01/2019', '', '', '', '', 'Failed in Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(29, 'Masilungan, Chona', '9051781163', 'BSU-Lipa', ' Industrial Technology (Computer Engineering Technology)', 'PE', 'Associate', '505', '0', '', '', '', 'F', '10/01/2019', '', '', '', '', 'Failed in Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(30, 'Geroleo, Archie', '9108288893', 'LCC- Lipa', 'Computer Engineering', 'PE', 'Associate', '720', '20', '11', '6', '3', 'F', '11/01/2019', '', '', '', '', 'Failed in Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(31, 'Manalo, Kenny Jo', '9661434935', 'BSU-Main', 'BS Mechatronics Engineering', 'PE', 'Staff', '405', '20', '7', '9', '4', 'F', '11/01/2019', '', '', '', '', 'Failed In Exam', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(32, 'Fortus, John Martin', '99781814', 'BSU-Main', 'BS Information technology', 'PE', 'Associate', '', '16', '5', '5', '6', 'F', '11/01/2019', '', '', '', '', 'Failed In Departmental interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(33, 'Estolano, Denver', '9501743458', 'BSU- Lipa', 'BS Industrial Technolgy', 'PE', 'Associate', '', '17', '7', '7', '3', 'F', '11/01/2019', '', '', '', '', 'Failed In Departmental interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(34, 'Laraya, Mark Ace D.', '9265372469', 'BSU-Main', 'BS Industrial Technolgy', 'PE', 'Associate', '', '17', '3', '6', '8', 'F', '11/01/2019', '', '', '', '', 'Failed In Departmental interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(35, 'Mercado, Floribeth', '9261372370', 'Lemery Colleges', 'BSCS', 'QA-FGI', 'Associate', '', '10', '3', '3', '4', 'F', '11/01/2019', '', '', '', '', 'Failed in Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(36, 'Patoc, Cherrie Jean', '9506631933', 'Alaminos National High School', 'Highscholl Graduate', 'QA-FGI', 'Associate', '', '8', '3', '1', '4', 'P', '11/01/2019', '', '', '', '', 'For Requirements', '', 'B250/ Jan.30, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(37, 'Sumi-Og, Mary Glor', '9482596600', 'J.H Cerilles State College', 'BS Education', 'QA-FGI', 'Associate', '', '11', '3', '6', '2', 'P', '12/01/2019', '', '', '', '', 'For Requirements', '', 'B250/ Jan.30, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(38, 'Reyes, John Archee', '9752108541', 'Wesleyan Universities', 'BS Computer Engineering ', '', 'Staff', '775', '19', '8', '7', '2', 'F', '14/01/2019', '', '', '', '', 'Failed in Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(39, 'Austria, Kathlene J.', '9158232884', 'STI - Calamba', 'BS Computer Engineering ', 'QA- CAG', 'Staff', '850', '24', '10', '9', '5', 'P', '15/01/2019', '', '', '', '', 'FOR JO', '', 'B250/ Jan.30, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(40, 'Mercado, Marjorie P.', '9067202784', 'BSU- Malvar', 'BS in Industrial Technology', 'PE', 'Associate', '', '21', '6', '8', '7', 'F', '15/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(41, 'Dianay, Berlin', '9303272716', 'PUP-San Pablo', 'BS Electrical Engineering', 'QA- CAG', 'Staff', '755', '17', '7', '7', '3', 'F', '15/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(42, 'Las, Ma. Ni?a M.', '9061486457', 'BSU-Malvar', 'BS in Industrial Engineering', 'QA', 'Staff', '615', '17', '5', '11', '1', 'F', '16/01/2019', '', '', '', '', 'Failed In Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(43, 'De Arroz, Art Bryan Emil', '9369751565', 'BSU-Alangilan', 'BS in Industrial Technology', 'PE', 'Associate', '', '8', '4', '0', '4', 'F', '16/01/2019', '', '', '', '', 'Failed In Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(44, 'Tobeo, Vanessa A.', '9558229708', 'BSU- Rosario', 'BS in Industrial Technology', 'PE', 'Associate', '', '8', '4', '4', '0', 'P', '16/01/2019', '', '', '', '', 'FOR JO (Did Not Attend On JO)', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(45, 'Padua, Roschille', '9353320806', 'BSU- Rosario', 'BS in Industrial Technology', 'PE', 'Associate', '', '14', '4', '5', '5', 'F', '16/01/2019', '', '', '', '', 'Failed In Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(46, 'Gratil, Shobie', '9121022412', 'Bulan National Highschool', 'Highschool Graduate', 'QA- FGI', 'Associate', '', '7', '3', '3', '1', 'P', '16/01/2019', '', '', '', '', 'FOR JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(47, 'Sanchez, Christrian Paul D.', '9094884312', 'BSU- Rosario', 'BS in Industrial Technology', 'QA- FGI', 'Associate', '', '10', '4', '4', '2', 'P', '16/01/2019', '', '', '', '', 'FOR JO', '', 'B250/ Jan.30, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(48, 'De Leus, Ericka Mae M.', '9094458608', 'Cristian College Of Tanauan', 'BS In Customs Administration', 'QA-PPG', 'Associate', '', '15', '5', '5', '5', 'P', '17/01/2019', '', '', '', '', 'For JO', '', 'B250/ Jan.30, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(49, 'Jaro, Marivie F.', '9072297891', 'Manuel S. Enverga University Foundation', 'BS In Computer Engineering ', ' Production ', 'Staff', '730', '25', '7', '12', '6', 'P', '17/01/2019', '', '', '', '', 'For Requirements', '', 'B252/ February 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(50, 'Magsumbol, Grace Joy G.', '9057080215', 'UB- Main', 'BS Industrial Engineerinng', 'PE', 'Staff', '735', '18', '8', '6', '4', 'F', '18/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(51, 'Pe?a, Carmela M.', '9158028104', 'UB', 'BS in Electronics Engineering', 'PE', 'Staff', '820', '18', '7', '8', '3', 'F', '18/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(52, 'Ulep, Bianca Joy B.', '9656174445', 'Batangas National Highschool', 'High School Graduate', 'QA-FGI/ PPG', 'Associate', '', '10', '4', '5', '1', 'F', '18/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(53, 'Rayos, Ruby Anne C.', '9754168584', 'Gov. Pablo Borbon Main Campus II', 'BS in Industrial Technology', 'PE', 'Associate', '', '19', '6', '8', '5', 'F', '18/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(54, 'Ramirez, Eleriza Mae C.', '9955122239', 'BSU- Alangilan', 'BS in Industrial Technology', 'PE', 'Associate', '', '14', '4', '8', '2', 'F', '18/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(55, 'Ramos, Hanna Faye', '9553428709', 'BSU', 'BS in Industrial Technology', 'QA - FGI', 'Associate', '', '12', '5', '3', '4', 'P', '18/01/2019', '', '', '', '', 'For JO', '', 'B252/ February 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(56, 'Magbanua, Mayona L.', '9286329084', 'Hilltop Batangas City', 'Associate In Computer Secretarial', 'QA - FGI', 'Associate', '', '14', '4', '5', '5', 'F', '22/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(57, 'De Leus, Julie Ann', '9071404178', 'ALS Graduate', 'Alternative Learning System', 'QA - FGI', 'Associate', '', '12', '4', '4', '4', 'P', '22/01/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(58, 'Caluyo, Rose Ann Joy', '9179306947', 'BSU- Maraouy', 'BS Industrial Engineering', 'PE', 'Staff', '760', '20', '8', '6', '6', 'F', '22/01/2019', '', '', '', '', 'Did not Attend On Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(59, 'Austria, Damiela Costa S.', '9273422191', 'Tanauan Institute', 'Associate In Computer Secretarial', 'PE - Initial', 'Associate', '', '9', '2', '5', '2', 'P', '22/01/2019', '', '', '', '', 'For JO', '', 'B252/ February 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(60, 'Roxas, Karra Kathrina', '9276316496', 'BSU- Main', 'BS Tourism management', 'QA- FGI', 'Associate', '', '17', '5', '6', '6', 'P', '22/01/2019', '', '', '', '', 'For Requirements', '', 'B253/ February 13, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(61, 'Capuno, Khenny Lyn', '9154280217', 'UB- MAin', 'BS Computer Engineering ', 'PE', 'Staff', '615', '24', '9', '13', '2', 'F', '22/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(62, 'Royo, Gerlie Jane E.', '9328553647', 'Laguna College -San Pablo', 'BS Industrial Engineering', 'PE', 'Staff', '535', '13', '7', '3', '3', 'F', '22/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(63, 'Garcia, Jean Lyneth D.', '9273806929', 'PUP- Batangas', 'BS Electrical Engineering', 'PE', 'Staff', '795', '23', '8', '10', '5', 'F', '22/01/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(64, 'Dinglasan, Reyna S.', '9168631297', 'BSU- Main', 'BS Computer Engineering ', 'PE', 'Staff', '780', '18', '6', '7', '5', 'F', '22/01/2019', '', '', '', '', 'Did not Attend On Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(65, 'Leyesa, Agelica Girlie', '9268904355', 'BSU- Malvar', 'BSBA(Financial Management)', 'MM', 'Staff', '560', '11', '6', '4', '1', 'F', '22/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(66, 'Perez, Marife M.', '9368326035', 'PUP-Quezon', 'BSBA (Marketing Management)', 'MM', 'Staff', '700', '12', '7', '5', '0', 'F', '22/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(67, 'Maderazo, Mary Rose A.', '9352004618', 'Teodoro M. Luansing College Of Rosario', 'BSBA(Financial Management)', 'MM', 'Staff', '610', '3', '3', '8', '1', 'F', '22/01/2019', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(68, 'Pareja, Jemima P.', '9368764726', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA (Operation Management)', 'MM', 'Staff', '710', '20', '7', '10', '3', 'F', '23/01/2018', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(69, 'Custodio, Kathlyn M.', '9674286405', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA (Marketing Management)', 'MM', 'Staff', '450', '11', '4', '5', '2', 'F', '23/01/2019', '', '', '', '', 'Failed in Exam', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(70, 'Aguila, Kimberly M.', '9309825922', 'Arellano University', 'BSBA(Financial Management)', 'MM', 'Staff', '470', '15', '', '', '', 'F', '23/01/2019', '', '', '', '', 'Failed in Exam', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(71, 'Manalo, Ryan W.', '9486635024', 'Jose P.Laurel Polythenic College', 'Highschool Graduate', '-', 'Associate', '', '7', '3', '2', '2', 'F', '23/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(72, 'Ingco, Judy Ann B.', '9352021326', 'BSU-Lemery', 'BSBA(Financial Management)', 'MM', 'Staff', '500', '14', '5', '5', '4', 'F', '24/01/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(73, 'Mercado, John Paulo', '9357197974', 'Lyceum of the Philippine University', 'BS Industrial Engineering', 'Production', 'Staff', '300', '13', '3', '5', '5', 'F', '24/01/2018', '', '', '', '', 'Failed in Exam', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(74, 'Rodelas, Abbygael P.', '9485486396', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA(Financial Management)', 'MM', 'Staff', '850', '19', '8', '10', '1', 'P', '24/01/2019', '', '', '', '', 'For jo', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(75, 'Telan, Jhoan S.', '9770922656', 'STI-Tanauan', 'BSBA (Operation Management)', 'MM', 'Staff', '550', '16', '5', '7', '4', 'F', '24/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(76, 'Luansing, Kevin A.', '9776200570', 'BSU', 'BSBA (Marketing Management)', 'MM', 'Staff', '680', '14', '5', '6', '3', 'F', '24/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(77, 'Canosa, Maria Teresa C.', '9554720569', 'Daniel B, Pe?a Memorial College Foundation', 'BSBA', 'MM', 'Staff', '460', '15', '4', '8', '3', 'F', '25/01/2019', '', '', '', '', 'Faile In Exam', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(78, 'Garcia, Jammil Arvin G.', '9391318816', 'BSU- Alangilan', 'BS Electrical Engineering', 'Production', 'Staff', '850', '29', '10', '13', '6', 'F', '25/01/2019', '', '', '', '', 'Faile Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(79, 'Landicho, Rizzie Kate ', '9667465458', 'BSU- Alangilan', 'BS Industrial Engineering', 'PE', 'Staff', '750', '20', '8', '8', '4', 'P', '25/01/2019', '', '', '', '', 'Did attend on JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(80, 'Gonzales, Joeny N.', '9105132742', 'University Of Nueva Caceres', 'BS Electronics Engineering ', 'Production', 'Staff', '865', '24', '10', '10', '4', 'P', '25/01/2019', '', '', '', '', 'For JO', '', 'B252/ February 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(81, 'Recinto, Neil Arrol B.', '9759080487', 'BSU- Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '675', '19', '7', '9', '3', 'F', '25/01/2019', '', '', '', '', 'Faile Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(82, 'Aulida, Celso M.', '9092697994', 'BSU', 'BSBA (Marketing Management)', 'MM', 'Staff', '770', '20', '7', '11', '2', 'P', '25/01/2019', '', '', '', '', 'For JO', '', 'B252/ February 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(83, 'Lopez, Mikee D.', '9272594688', 'BSU- Main', 'BS Industrial Engineering', 'PE', 'Staff', '725', '22', '8', '9', '5', '', '29/01/2019', '', '', '', '', 'For Department Interview', '', 'Cancelled / Dishonesty ', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(84, 'Camacho, Princess T.', '9062449886', 'BSU', 'BS Custom Admistration', 'MM', 'Staff', '655', '16', '4', '9', '3', 'F', '29/01/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(85, 'Tapia, Noemi M.', '9261562180', 'BSU- Lipa', 'BSBA ( Human Resource Mngt.)', 'MM', 'Staff', '', '0', '', '', '', 'F', '29/01/2019', '', '', '', '', 'Failed In Exam ', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(86, 'Mangubat, Carol M.', '9751996929', 'BSU- Lemery', 'BS Computer Science', 'MM', 'Staff', '685', '19', '8', '10', '1', 'P', '29/01/2019', '', '', '', '', 'For Requirements', '', 'B253/ February 13, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(87, 'Leynes, Judith', '9505059325', 'Kolehiyo ng Lungsod ng Lipa ', 'Bachelor of arts in Communication', 'MM', 'Staff', '460', '20', '8', '9', '3', 'F', '30/01/2019', '', '', '', '', 'Failed In Exam ', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(88, 'Mangubat, Karla Eunice', '9167004131', 'Don Bosco College Calunbang', 'Automotive Technology', 'MM', 'Staff', '740', '17', '6', '7', '4', 'F', '30/01/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(89, 'Amor, Ivy', '9484020069', 'BSU-Malvar', 'BS Industrial Technolgy', 'PE', 'Staff', '690', '24', '7', '11', '6', 'P', '30/01/2019', '', '', '', '', 'For Requirements', '', 'B258/ March 19, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(90, 'Gardiola, Christel Mae P.', '9557839476', 'BSU', 'BSBS(Marketing Management)', 'MM', 'Staff', '655', '18', '7', '6', '5', 'F', '30/01/2018', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(91, 'Marquez, Herossa G.', '9124602386', 'BSU', 'BS Industrial Engineering', 'PE', 'Staff', '650', '22', '7', '10', '5', 'F', '30/01/2018', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(92, 'Calalo, Mark Ian R.', '9070537929', 'BSU- Malvar', 'BSBA(Human Resources Development)', 'MM', 'Staff', '550', '13', '5', '6', '2', 'P', '31/01/2019', '', '', '', '', 'For Requirements', '', 'B253/ February 13, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(93, 'Magbojos, Jennifer C.', '9179294741', 'BSU- Malvar', 'BSBA(Human Resources Development)', 'MM', 'Staff', '615', '15', '5', '6', '4', 'P', '31/01/2019', '', '', '', '', 'For JO / Backed Out', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(94, 'Magpantay, Jomell', '9212213662', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA(Marketing Management)', 'MM', 'Staff', '750', '18', '6', '9', '3', 'F', '31/01/2019', '', '', '', '', 'Failed Deparmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(95, 'Laqui, Andrei Michelle D.', '9067201005', 'BSU- Malvar', 'BS Information Technology', 'MM', 'Staff', '700', '13', '7', '3', '3', 'P', '01/02/2019', '', '', '', '', 'For Requirements', '', 'B253/ February 13, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(96, 'Malijan, Emely ', '94555448028', 'BSU', 'BS Industrial Technolgy', 'PC', 'Associate', '', '16', '4', '7', '5', 'F', '01/02/2019', '', '', '', '', 'Failed Departamental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(97, 'A?onuevo, Pamela M.', '9354440657', 'BSU- Main', 'BSBS(Operation Management)', 'PC', 'Associate', '', '15', '5', '7', '3', 'F', '02/02/2019', '', '', '', '', 'Failed Departamental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(98, 'Lucero, Kathrin S.', '9087857137', 'UB-Lipa', 'BS Information Technology', 'PC', 'Associate', '', '18', '4', '7', '7', '', '02/02/2019', '', '', '', '', 'Undecided', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(99, 'Vivas, Irene S.', '9193991245', 'Lipa City Public College', 'Office Management with Computer application', 'PC', 'Associate', '', '13', '2', '7', '3', 'F', '02/02/2019', '', '', '', '', 'Failed in Exam', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(100, 'Aranas, Julie ann B.', '9178876517', 'Faith-Tanauan', 'BS Information Technology', 'PE', 'Associate', '', '19', '7', '3', '9', 'F', '06/02/2019', '', '', '', '', 'Failed Departamental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(101, 'Go, Sadamma C.', '9084783276', 'UB- Lipa', 'BSBA( Business Mangement)', 'MM', 'Staff', '', '14', '5', '6', '3', 'F', '06/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(102, 'Caddauan, James Carlo', '9557101207', 'BSU- Main', 'BS Industrial Technology', 'PE ', 'Associate', '', '14', '1', '5', '7', 'F', '06/02/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(103, 'Porto, Mariela D.', '9358365893', 'PUP- Sto. Tomas', 'BS Entrepreneurship', 'MM', 'Staff', '670', '25', '10', '11', '4', 'P', '06/02/2019', '', '', '', '', 'For Requirements', '', 'Batch 254/ Feb.20, 2019 ', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(104, 'De guzman, Jenny Rose', '9184172713', 'BSU-Alangilan', 'BS Electrical Engineering', 'PE', 'Staff', '685', '19', '7', '10', '2', 'F', '06/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(105, 'Breva, Rosemarie', '9465467038', 'BSU-JPLPC', 'Computer Engineering Technology', 'PE', 'Associate', '', '18', '6', '6', '6', 'F', '06/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(106, 'Silva, Maria Josefa', '9551128573', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA (Marketing Management)', 'PC', 'Associate', '', '17', '3', '6', '8', 'F', '06/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(107, 'Clanor, Riza G.', '9352214026', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA(Financial Management)', 'Accounting', 'Staff', '705', '18', '8', '8', '2', 'F', '06/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(108, 'Mayo, Danica A.', '9954560673', 'Lipa City Colleges', 'BSBA(Financial Management)', 'Accounting', 'Staff', '725', '16', '6', '8', '2', 'F', '06/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(109, 'Garcia, Dulce D.', '9750590111', 'Immaculate Concepcion College', 'BSBA( Management)', 'MM', 'Staff', '', '0', '', '', '', 'F', '07/02/2019', '', '', '', '', 'Failed Departmet Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(110, 'Baral, Leah Nolasco', '9059610198', 'Immaculate Concepcion College', 'BSBA( Management)', 'MM', 'Staff', '', '0', '', '', '', 'F', '07/02/2019', '', '', '', '', 'Not Willing', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(111, 'Reyes, Crystal', '9157548274', 'La Consolacion College Tanauan', 'BSBA(Marketing Management)', 'MM', 'Staff', '', '0', '', '', '', 'F', '07/02/2019', '', '', '', '', 'For Requirements', '', 'Feb.20, 2019 / Batch 254', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(112, 'Jaurigue, Juns Marvin', '9084583239', 'Lyceum of the Philippine University', 'BS(Electronics Engineering)', 'Equipment', ' Staff', '860', '22', '7', '12', '3', 'F', '07/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(113, 'Najira, Alvin', '9994862996', 'Pantay  National Highschool', 'Highschool Graduate', 'QA-FGI', 'Associate', '', '11', '7', '1', '3', 'P', '07/02/2019', '', '', '', '', 'Undecided', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(114, 'De Torres, Roselle V.', '9486371163', 'Westmead International School', 'BSBA(Accounting Management)', 'Accounting', 'Staff', '670', '19', '7', '7', '5', 'F', '08/02/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(115, 'Melo, Melissa C.', '9352008285', 'University of Batangas', 'BSBA( Business Mangement)', 'Accounting', 'Staff', '615', '21', '9', '9', '3', 'F', '08/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(116, 'Pe?aloza, Lorelyn M.', '9561821385', 'Tanauan Institute', 'BS(Accountancy)', 'Accounting', 'Staff', '590', '19', '8', '8', '3', 'F', '08/02/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(117, 'Laurel, Princess Arlene', '9128674384', 'La Consolacion College Tanauan', 'BS(Accountancy)', 'Accounting', 'Staff', '845', '20', '9', '10', '1', 'F', '08/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(118, 'Villanueva, Myra D.', '9465247501', 'BSU-JPLPC', 'BS(Accounting Mangement)', 'Accounting', 'Staff', '580', '17', '5', '9', '3', 'F', '08/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(119, 'Millarez, Glydel E.', '9480583661', 'Faith-Tanauan', 'BSBA(Accounting Management)', 'Accounting', 'Staff', '745', '19', '8', '7', '4', 'P', '08/02/2019', '', '', '', '', 'For JO', '', 'B255/ February 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(120, 'Gonda, Stephanie', '9482509848', 'Westmead International School', 'BS Information Technology', 'PE', 'Associate', '', '19', '5', '9', '5', 'P', '08/02/2019', '', '', '', '', 'For JO', '', 'B254/ February 20, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(121, 'Pronto, Shiela Mae', '9770178152', 'Palawan State University', 'BS Information Technology', 'PE', 'Associate', '', '18', '4', '7', '7', 'P', '08/02/2019', '', '', '', '', 'For JO', '', 'B254/ February 20, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(122, 'Tumambing, Hazel Grace', '9991893305', 'BSU- Alangilan', 'BS Information Technology', 'PE', 'Associate', '', '19', '4', '7', '7', 'P', '08/02/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(123, 'Maullon, Eduard', '9460275615', 'BSU- Alangilan', 'BS Information Technology', 'PE', 'Associate', '', '15', '2', '8', '5', 'F', '08/02/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(124, 'Ramos, Babylyn M.', '9127928056', 'BSU-Malvar', 'BS Information Technology (Computer technology)', 'PE', 'Associate', '', '17', '5', '7', '5', 'P', '08/02/2019', '', '', '', '', 'Did not accept JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(125, 'Fajarit, Niel Mark', '9486558004', 'Manuel S. Enverga University Foundation', 'BS Electronics and Communication Engineering ', 'Equipment', 'Staff', '710', '23', '8', '11', '4', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', 'B255/ February 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(126, 'Belo, Honeylyn', '9154293012', 'Lipa City Colleges', 'Associate In Computer Technology', 'QA-FGI', 'Associate', '', '17', '3', '9', '5', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(127, 'Perez, Michelle Abby M.', '9672837819', 'BSU-Alangilan', 'BS Information Technology', 'PE ', 'Associate', '', '19', '7', '7', '2', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(128, 'Chavez. Shireena Faye M.', '9053654891', 'BSU-Malvar', 'BS Information Technology', 'PE ', 'Associate', '', '19', '7', '7', '5', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(129, 'Ramos, Julliane Louise', '9103763844', 'BSU- Main', 'BS Information Technology', 'PE ', 'Associate', '', '17', '6', '7', '4', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(130, 'Marasigan, Krischelle', '9656812900', 'BSU', 'BS Information Technology', 'PE ', 'Associate', '', '25', '9', '9', '7', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(131, 'Miranda, Jelli S', '9382838258', 'BSU-Malvar', 'BS Industrial Technology(Civil Technology)', 'PE ', 'Associate', '', '13', '4', '6', '4', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(132, 'Chavez, Shireena Faye M.', '9053654891', 'BSU-Malvar', 'BS Information Technology( Business Analytics)', 'PE ', 'Associate', '', '19', '5', '7', '7', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(133, 'Capacete, Mary Jane', '9238758636', 'Tanauan Institute', 'BS Education', 'QA-FGI', 'Associate', '', '18', '3', '9', '6', 'F', '12/02/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(134, ' Asuncion, Benamhir T.', '9560674623', 'De La Salle Lipa', 'BS in Industrial Engineering', 'QA-CSG', 'Staff', '885', '20', '5', '5', '10', 'P', '13/02/2019', '', '', '', '', 'For requirements', '', 'B255/ February 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(135, 'Aquino, Sherwin', '9124038060', 'BSU- Malvar', 'Bachelor of Industrial Technoogy( Computer Technology)', 'PE', 'Associate', '', '20', '3', '7', '10', 'P', '14/02/2019', '', '', '', '', 'For requirements', '', 'B255/ February 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(136, 'Capila, Nikko P.', '959863852', 'BSU- ROsario', 'BS in Industrial Technology', 'QA_FGI', 'Associate', '', '15', '6', '6', '3', 'P', '14/02/2019', '', '', '', '', 'For requirements', '', 'B256/ March 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(137, 'Pesigan, Christian Willie R.', '9196850093', 'BSU- Rosario', 'BS in Industrial Technology', 'PE', 'Associate', '', '17', '2', '10', '5', 'F', '14/02/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(138, 'Capila, Evander M.', '9097963300', 'BSU- ROsario', 'BS in Industrial Technology', 'PE', 'Associate', '', '15', '5', '7', '3', 'F', '14/02/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(139, 'Peras, Roxan', '9293218255', 'Lipa City Public College', 'Bachelor of Elementary Education', 'NF-Kaizen', 'Jr. Staff', '500', '21', '13', '9', '1', 'P', '14/02/2019', '', '', '', '', 'For JO', '', 'Internal Hiring (Transfer : 03/26/19)', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(140, 'Dacara, Adriana G.', '9650855094', 'Innovative College of Science and Technology', 'Bachelor of Elementary Education', 'NF-Kaizen', 'Jr. Staff', '740', '21', '14', '3', '4', 'P', '14/02/2019', '', '', '', '', 'For JO', '', 'Internal Hiring (Transfer : 04/16/19)', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(141, 'Gutierrez, Rachel Anne V.', '9178116827', 'University of Batangas', 'BS Electrical Engineering', 'QA-CSG', 'Staff', '', '0', '', '', '', 'P', '15/02/2019', '', '', '', '', 'For Requirements', '', 'B255/ February 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(142, 'Gutierrez, John M ichael Z.', '9156635694', 'BSU- Alangilan', 'Bachelor of Industrial Technology (Intrumentation and control technology)', 'QA-FGI', 'Associate', '', '17', '3', '7', '7', 'P', '15/02/2019', '', '', '', '', 'For Requirements', '', 'B255/ February 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(143, 'Umali, Kylee Gwen M.', '9270844623', 'BSU- Lipa', 'BS Industrial Engineering', 'QA-CSG', 'Staff', '930', '21', '9', '10', '2', 'F', '15/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(144, 'Mendoza, Zarah Jean', '9162230721', 'Lyceum of the Philippine University', 'BS Cpomputer Engineering', 'PE', 'Staff', '', '0', '', '', '', 'F', '19/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(145, 'Fabrero, Louise MarielP.', '9484965217', 'BSU- Malvar', 'BS Mechatronics Engineering', 'PE', 'Staff', '835', '23', '8', '10', '5', 'P', '19/02/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(146, 'Mapolon, Allysa Mae', '9505572357', 'BSU- Lipa', 'BS Industrial Technolgy (Electrical)', 'PE', 'Associate', '', '21', '7', '9', '5', 'F', '19/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(147, 'Torres, Mycah N.', '9778073573', 'BSU- Malvar', 'BS Information Technology (Service Management System)', 'PE', 'Associate', '', '20', '7', '7', '6', 'P', '19/02/2019', '', '', '', '', 'For JO', '', 'B256/ March 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(148, 'Del Rosario, Regine C.', '9309686173', 'BSU- Main ', 'BS Elecronics Engineering', 'PE', 'Staff', '690', '17', '5', '8', '4', 'P', '20/02/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(149, 'Parale, Christine Joy U.', '9214107739', 'Southern Luzon State University', 'BS Electronic and Communication Engineering', 'PE', 'Staff', '820', '27', '9', '14', '5', 'F', '20/02/2019', '', '', '', '', 'Failed Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(150, 'Domingo, Milma V.', '9304971370', 'University of Baguio', 'BS Electronics Engineering', 'PE', 'Staff', '855', '20', '7', '8', '5', 'P', '20/02/2019', '', '', '', '', 'For JO', '', 'B256/ March 6, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(151, 'Perez, May M.', '9292171164', 'PUP - Sto. Tomas', 'BS Enterpreneurial', 'MM', 'Staff', '810', '25', '10', '8', '7', 'P', '22/02/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(152, 'Ciabal, Christine Joy L.', '9954772562', 'STI College -San Pablo', 'BS Computer Engineering ', 'PE', 'Staff', '825', '21', '7', '9', '5', 'F', '22/02/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(153, 'Hernandez, Jackielou J.', '9085798554', 'BSU - Malvar', 'BS Indutrial Engineering', 'PE', 'Staff', '780', '28', '11', '11', '6', 'P', '22/02/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(154, 'Querubin, Ermilyn R.', '9059197073', 'BSU - Malvar', 'BS Industrial Engineering ', 'PE', 'Staff', '820', '26', '9', '12', '5', 'P', '22/02/2019', '', '', '', '', 'For JO', '', 'B258/March 19, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(155, 'Quinitcho, Mhe-Faith', '9059197073', 'BSU - Malvar', 'BS Industrial Engineering ', 'PE', 'Staff', '600', '25', '6', '11', '8', 'P', '22/02/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(156, 'Nadua, Julie Ann', '9285686261', 'BSU - Malvar', 'BS Industrial Engineering ', 'PE', 'Staff', '780', '21', '8', '10', '3', 'P', '22/02/2019', '', '', '', '', 'For JO', '', 'B258/March 19, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(157, 'LegaspiI, Cinderrela', '9094855157', 'BSU-Malvar', 'BS Industrial Engineering ', 'PE', 'Staff', '780', '25', '9', '11', '5', 'P', '27/02/2019', '', '', '', '', 'For JO', '', 'B258/March 19, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(158, 'Francisco, Jailene A.', '9975849066', 'BSU', 'BSBA(Marketing Management)', 'MM', 'Staff', '500', '14', '7', '2', '5', 'F', '27/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(159, 'Berba, Jessa', '9951983681', 'BSU-Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '705', '22', '9', '11', '2', 'F', '27/02/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(160, 'Matres, Jorelie D.', '9774697233', 'De La Salle Lipa', 'Information Technology', 'PC', 'Associate', '', '15', '6', '4', '5', 'F', '27/02/2019', '', '', '', '', 'Failed Departmet Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(161, 'Isaga, Von Christopher', '9350559113', 'UB- Lipa', 'BS Industrial Engineering', 'QA-FGI', 'Staff', '675', '22', '11', '9', '2', 'P', '28/02/2019', '', '', '', '', 'For JO', '', 'B258/ March 20, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(162, 'Bautista, Lucille M.', '9155983150', 'Occidental Mindoro State College', 'BSBA (Accounting Management)', 'PC ', 'Staff', '820', '22', '11', '9', '2', 'F', '28/02/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(163, 'Maramot, Princess Nhescie C.', '9277106514', 'BSU- Alangilan', 'PE', 'PE', 'Staff', '785', '21', '7', '10', '4', 'F', '01/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(164, 'Dela Paz, Alma D.', '9954553490', 'STI', 'Computer Studies', ' PC', 'Associate', '', '17', '8', '5', '4', 'F', '01/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(165, 'Landicho, Maricel M.', '9366852624', 'BSU - Lipa', 'BS in Accountancy (Accounting Management)', ' PC/ IMPEX', 'Staff', '700', '18', '7', '8', '3', 'F', '01/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(166, 'Dogelio, Vanessa Irah M.', '9066075464', 'Tanauan Institute', 'BS in Accountancy (Accounting Management)', ' PC/ IMPEX', 'Staff', '695', '20', '7', '8', '5', 'F', '01/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(167, 'Yedra, Dessa Mae', '9488128589', 'BSU- MaLvar', 'Associate in Industrial Technology(Computer Technology)', 'PE', 'Associate', '', '17', '4', '7', '6', 'P', '05/03/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(168, 'Garcia, Marigold', '9350467241', 'BSU - Malvar', 'BS Industrial Technology (Computer Technology)', 'PC', 'Associate', '', '18', '8', '4', '6', 'F', '05/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(169, 'Rea?o, Elaiza', '9994427530', 'BSU- Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '', '23', '8', '10', '5', 'F', '05/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(170, 'Abanilla, Razzel Jane', '9309978694', 'BSU- Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '750', '20', '8', '8', '4', 'F', '05/03/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(171, 'Pasno, Chelsea P.', '9066069813', 'BSU- Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '730', '22', '7', '9', '6', 'P', '05/03/2019', '', '', '', '', 'For requirements', '', 'B259/ March 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(172, 'Alvarez, Judy Ann F.', '9485276443', 'Kolehiyo ng Lungsod ng Lipa ', 'Associate In Computer Technology', 'PC', 'Associate', '', '18', '5', '8', '5', 'F', '05/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(173, 'Basilan, Rose Ann', '9203209125', 'BSU- Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '', '21', '7', '8', '6', 'F', '05/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(174, 'De Roxas, Charmaine', '9358139149', 'AMA Computer College-Lipa', 'BSBA (Marketing Management)', 'Procurement', 'Staff', '700', '19', '7', '9', '3', 'P', '06/03/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(175, 'Morcilla, Noriel ', '9088606588', 'BSU- Lipa', 'Industrial Technology (Electromnis Engineering Technology)', 'QA', 'Supervisor', '810', '0', '', '', '', '', '06/03/2019', '', '', '', '', 'For Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(176, 'Gaquit, Ramie J.', '9553689941', 'Technological Foundation Institute Bago City', 'Industrial Technology (Electromnis Engineering Technology)', 'QA-FGI', 'Associate', '', '9', '2', '3', '4', 'F', '06/03/2019', '', '', '', '', 'For Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '');
INSERT INTO `tbl_applicant` (`listId`, `applicant_name`, `contact_no`, `school`, `course`, `department`, `applied_position`, `TOEIC_result`, `aptitude_result`, `p1`, `p2`, `p3`, `assessment_result`, `date_applied`, `plan`, `actual`, `no_of_days`, `rating`, `status`, `date_of_orientation`, `remarks`, `initial_interviewer`, `initial_result`, `initial_date`, `final_interviewer`, `final_result`, `final_date`, `jo_interviewer`, `jo_result`, `jo_date`, `interview_remarks`) VALUES
(177, 'Mara?a, Reynalyn Joy B.', '92931733530', 'Southern Luzon State University', 'Bachelor Elementary Education', 'RECRUITMENT(TDP)', 'STAFF', '640', '20', '5', '11', '4', 'F', '06/03/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(178, 'Aala, Allyza Jewel  A.', '9567357468', 'La Consolacion College Tanauan', 'Bachelor Of Science in Tourism Management', 'PC/ IMPEX', 'Staff', '825', '22', '10', '7', '5', 'P', '07/03/2019', '', '', '', '', 'For Ma\'am Eden Interview', '', 'B259/ March 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(179, 'Marasigan, Jhunel A.', '9061492440', 'BSU-Malvar', 'BS Industrial Technology (Mechenical Technolgy)', 'Equipment', 'Staff', '', '13', '4', '5', '4', 'F', '07/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(180, 'Pabularcon, Melissa Joy', '9457156299', 'PUP- Sto. Tomas', 'BS Electronics Engineering', 'PE', 'Staff', '850', '26', '9', '11', '6', 'F', '07/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(181, 'Abad, Mark Joshua R.', '9338215069', 'BSU- Malvar', 'Industrial Engineering (Mechanical Engineering)', 'Equipment', 'Staff', '450', '11', '2', '5', '4', 'F', '07/03/2019', '', '', '', '', 'Failed in Exam ', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(182, 'Tolentino, Rey Patrick D.', '9157539959', 'Golden Gate Colleges', 'Mechanical Engineering', 'Safety', 'Staff', '675', '21', '9', '9', '3', 'P', '07/03/2019', '', '', '', '', 'For Requirements', '', 'B259/ March 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(183, 'Carandang, Maricon A.', '9058535134', 'Westmead International School', 'BS Information Technology and computer Science', 'Equipment', 'Staff', '530', '25', '8', '12', '5', 'P', '08/03/2019', '', '', '', '', 'For Requirements', '', 'B261/ April 10, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(184, 'Velasco, Yanilyn C.', '9498338673', 'Lipa City Colleges', 'Associate In Computer Technolgy', 'PC', 'Associate', '', '16', '3', '8', '5', 'P', '08/03/2019', '', '', '', '', 'For Requirements', '', 'B260/ April 03, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(185, 'Enriquez, Alexandra Nicoles U.', '9455810119', 'Lyceum of the Philippine University', 'BS Industrial Engineering', 'PE', 'Staff', '660', '16', '7', '6', '3', 'P', '08/03/2019', '', '', '', '', 'Didn?t Accept Job Offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(186, 'Hepolio, Ferdinand', '9201324226', 'BSU', 'BS Industrial Technology', 'QA-FGI', 'Associate', '', '13', '3', '5', '5', 'F', '08/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(187, 'Alegria, Alvin D.', '9058369196', 'UB- MAin', 'BS Industrial Engineering (Undergrad.)', 'QA-FGI', 'Associate', '', '9', '4', '2', '3', 'P', '08/03/2019', '', '', '', '', 'For Requirements', '', 'B259/ March 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(188, 'Bundalian, Shannice M.', '9668004170', 'De La Salle Lipa', 'Information Technology', 'PC', 'Associate', '', '17', '4', '4', '9', 'F', '11/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(189, 'Rogando, May M.', '9355726076', 'Mindoro State College Agriculture and technology', 'BS Information Technology', 'IT', 'Jr. Staff', '780', '25', '15', '6', '4', 'F', '11/03/2019', '', '', '', '', 'Failed Department Interview', '', 'B260/ April 03, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(190, 'Genobia, Jack Renald ', '9967349313', 'Labuyo Tangub city', 'BS Industrial Technology(Electrical Technology)', 'Equipment', 'Staff', '395', '14', '6', '6', '2', 'F', '11/03/2019', '', '', '', '', 'Failed in Exam ', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(191, 'Marquez, Maribelle', '9124998165', 'Poblacion 1 , Naujan Oriental Mindoro', 'Electronics Products Assembly And Servicing NCII', 'QA-FGI', 'Associate', '', '20', '3', '9', '8', 'P', '12/03/2019', '', '', '', '', 'For Requirements', '', 'B259/ March 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(192, 'Furto, Girlie May', '9129533544', 'BSU- Rosario', 'Industrial Technoloy(Computer Technology)', 'PE', 'Associate', '', '16', '4', '7', '5', 'F', '12/03/2019', '', '', '', '', 'Didn?t Attend Job Offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(193, 'Barcelona, Babylyn', '9675504393', 'BSU- Rosario', 'Industrial Technoloy(Computer Technology)', 'PE', 'Associate', '', '19', '4', '7', '8', 'F', '12/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(194, 'Carasucho, Maureen A.', '9558114668', 'Lemery Colleges', 'BSBA(Financial Management)', 'PC', 'Staff', '345', '14', '8', '5', '1', 'F', '12/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(195, 'Dimalibot, Zenith P.', '9773842564', 'Sta. Teresa College', 'BS Information Technology', 'PC', 'Associate', '', '16', '5', '4', '7', 'F', '12/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(196, 'Castillo, Janessa', '9752360286', 'Tanauan Institute', 'BSBA(Marketing Management)', 'PC', 'Associate', '', '20', '4', '7', '9', 'P', '13/03/2019', '', '', '', '', 'HOLD', '', 'For Future Vacancy', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(197, 'Tolentino, Reymart', '9550759362', 'BSU- MaLvar', 'Bachelor of Industrial Technology(Mechanical technology)', 'Equipment', 'Staff', '', '0', '', '', '', 'F', '13/03/2019', '', '', '', '', 'Failed initial Interview', '', 'Not willing to sched. In NS', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(198, 'Mendoza, Kimberly Ann', '9171799640', 'BSU- Main', 'Bachelor of Industrial Technology(Electonics technology)', 'PE', 'Associate', '', '21', '5', '7', '9', 'P', '13/03/2019', '', '', '', '', 'For requirements', '', 'B259/ March 27, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(199, 'Faytaren, Lanevhel G', '9479686702', 'BSU- Main', 'Bachelor of Industrial Technology(Electonics technology)', 'PE', 'Associate', '', '0', '', '', '', '', '14/03/2019', '', '', '', '', 'Failed initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(200, 'Razon, Christzea D.', '9359105564', 'BSU- San Juan', 'Bachelor of Secondary Education', 'HRD-RTS', 'Associate', '', '16', '3', '4', '9', 'F', '16/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(201, 'Angeles, Jane Rose', '9491166599', 'Kolehiyo ng Lungsod ng Lipa ', 'BSCS', 'HRD-RTS', 'Associate', '', '13', '4', '3', '6', 'F', '16/03/2019', '', '', '', '', 'Failed in Exam', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(202, 'Meer, Mary Grace', '9179317995', 'Kolehiyo ng Lungsod ng Lipa ', 'Associate In Computer Tchnology', 'HRD-RTS', 'Associate', '', '15', '3', '6', '6', 'F', '16/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(203, 'Lanto, Twinkle Krizia Cabral', '9066105107', 'BSU- Main', 'BS Industrial Technology( Service Management)', 'PE', 'Associate', '', '14', '3', '5', '6', 'F', '16/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(204, 'Panaligan, Lovely Joy', '982551880', 'BSU', 'Bachelor Industrial Education', 'HRD-RTS', 'Associate', '', '18', '3', '7', '8', 'F', '16/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(205, 'Faner, Rhea F.', '9238360883', 'De La Salle Lipa', 'BS Computer Engineering', 'PE', 'Staff', '860', '20', '8', '10', '2', 'F', '16/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(206, 'Almendral, Richard Vic', '9263875785', 'BSU- Malvar', 'BS Industrial Enginnering', 'Production', 'Staff', '725', '20', '6', '10', '4', 'F', '16/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(207, 'De Silva, Glen Cliford D.', '9957316640', 'BSU- Lipa', 'BS Industrial Enginnering', 'Production', 'Staff', '700', '19', '5', '10', '4', 'F', '16/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(208, 'Leyesa, Gener C.', '9752206637', 'BSU- Lipa', 'BS Industrial Enginnering', 'Production', 'Staff', '720', '26', '10', '10', '6', 'F', '16/03/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(209, 'Virrey, Alfred Nikko D.', '9353577041', 'De La Salle Lipa', 'BS Electrical Engineering', 'Equipment', 'Staff', '790', '18', '7', '8', '3', 'P', '19/03/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(210, 'Aquino, Beverly A.', '9123412993', 'UB- Lipa', 'BS Industrial Enginering', 'PE', 'Staff', '710', '17', '4', '5', '8', 'F', '19/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(211, 'Parto, Alyssa Megaera', '9958547794', 'UB-Main', 'BS Mechanical Engineering', 'QA-CAG ', 'Jr. Staff', '', '0', '', '', '', 'P', '20/03/2019', '', '', '', '', 'Waiting for PRF', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(212, 'Reyes, Maria Ariza', '9472706248', 'BSU-Maraouy', 'BS Industrial Engineering', 'PE', 'Staff', '550', '19', '5', '10', '4', 'F', '21/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(213, 'Marundan, Frenz Anne', '9984044146', 'UB- Main', 'BS Mechanial Engineering', 'PE', 'Staff', '700', '22', '6', '9', '7', 'F', '22/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(214, 'Irasusta, Mark Lowell M.', '9284708626', 'Southern Luzon State University', 'BS Industrial Engineering', 'Production', 'Staff', '755', '22', '9', '9', '4', 'F', '22/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(215, 'Manuel, Renz Aldrin M', '9975411289', 'BSU- Rosario', 'BS Industrial Techology (Automotive Technology)', 'PE', 'Associate', '', '15', '3', '4', '8', 'F', '22/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(216, 'Pitargue, Jeremie A.', '9067295402', 'BSU- Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '735', '19', '10', '4', '5', 'F', '26/03/2019', '', '', '', '', 'For Requirements', '', 'B261/ April 10, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(217, 'Mendoza, Anna Carmela M.', '9067368374', 'BSU- Lipa', 'BS IT(Electrical)', 'PE', 'Associate', '', '17', '3', '6', '8', 'P', '26/03/2019', '', '', '', '', 'Didn?t Accept Job Offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(218, 'Bauson, Cecile C.', '9465029512', 'BSU- Alangilan', 'BS Industrial Engineering', 'PE', 'Staff', '', '0', '', '', '', 'P', '26/03/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(219, 'Roxas, Dan Marvin', '096539239*79', 'UB- Lipa', 'Bachelor of Science Information Technology', 'PE', 'Associate', '', '16', '4', '4', '8', 'F', '26/03/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(220, 'Frane, Maebelyn F.', '9308449116', 'BSU- Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '', '0', '', '', '', 'P', '26/03/2019', '', '', '', '', 'For JO', '', 'B261/ April 10, 2019', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(221, 'Jaen, Joan', '9508506523', 'Asia technological School of Science and arts', 'BSBS (Marketing Management)', 'PE', 'Associate', '', '15', '3', '3', '9', 'P', '26/03/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(222, 'Javier, Myka Ella A.', '9189655717', 'BSU- Malvar', 'BS Industrial Engineering', 'Production', 'Staff', '', '0', '', '', '', 'F', '02/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(223, 'Cailao, Mark Joseph', '9067501575', 'BSU- Malvar', 'BS Information Technology', 'IT', ' JR. Staff', '', '0', '', '', '', 'F', '02/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(224, 'Escamillas, Monica E.', '9157810574', 'BSU', 'BS Industrial Technology', 'QA- FGI', 'Associate', '', '19', '4', '7', '8', 'F', '03/04/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(225, 'Gonzales, Richelle E.', '9274328060', 'Phil Normal University', 'BS Education', 'QA- FGI', 'Associate', '', '19', '3', '7', '9', 'P', '03/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(226, 'Malata, Carmelo D.', '9777404918', 'BSU', 'BS Industrial Technology', 'QA- FGI', 'Associate', '', '15', '4', '4', '7', 'P', '03/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(227, 'Hernandez, Richsan P.', '9152022370', 'BSU- Malvar', 'BS Information technology', 'IT', 'Jr. Staff', '', '22', '7', '8', '7', 'F', '03/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(228, 'Antojado,  Marjorie', '9215028651', 'De La Salle Lipa', 'BS Computer Engineering', 'Production', 'Staff', '840', '24', '10', '10', '4', 'P', '03/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(229, 'Parati, Angel L.', '9106330031', 'BSU - Malvar', 'BS Industrial Engineering', 'Production', 'Staff', '710', '22', '10', '9', '3', 'P', '03/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(230, 'Evangelista, Mitz', '9462571323', 'UB- Main', 'BS Inndustrial technolgy', 'QA- FGI', 'Staff', '', '0', '', '', '', 'F', '06/04/2019', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(231, 'Elfante, Christian Jay', '9171667153', 'BSU - Lipa', 'BS Computer Science', 'IT', 'Jr. Staff', '710', '28', '16', '7', '5', 'F', '06/04/2019', '', '', '', '', 'Didn?t attend Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(232, 'Mangarine, Renzson L.', '9669777242', 'BSU - Lipa', 'BS Computer Science', 'IT', 'Jr. Staff', '680', '23', '12', '7', '4', 'P', '06/04/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(233, 'Mistas, Julius D.', '9165414247', 'BSU- MaLvar', 'BS Industrial Engineering', 'Production', 'Staff', '680', '23', '10', '11', '2', 'F', '09/04/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(234, 'Panganiban, John Khleo', '9455310698', 'UB- MAin', 'BS Industrial Engineering', 'Production', 'Staff', '720', '21', '11', '8', '2', 'F', '09/04/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(235, 'Malabanan, Pamela Andrea', '9651231046', 'LPU- Laguna', 'BS Industrial Engineering', 'QA- CAG', 'Staff', '', '19', '5', '8', '6', 'F', '09/04/2019', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(236, 'Manalo, Mary Margareth', '9651234393', 'BSU- Lipa', 'BSBA(Marketing Management)', 'PC', 'Associate', '', '15', '5', '3', '7', 'P', '10/04/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(237, 'Mesinas, Jamela', '9482723869', 'Laguna State Polythenic University', 'BS Information Technology', 'PC', 'Associate', '615', '20', '4', '8', '8', 'F', '10/04/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(238, 'Romero, Rene Jude', '9486814514', 'BSU- MaLvar', 'BS Industrial Engineering', 'Production', 'Staff', '', '0', '', '', '', 'P', '10/04/2019', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(239, 'De Leon, Ejoson', '9061760908', 'BSU', 'BS Industrila Engineering', 'Production', 'Staff', '', '29', '9', '13', '7', 'P', '10/04/2019', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(240, 'Layson, Princess Lovely', '9502709491', 'Laguna University', 'BS Accountancy', 'Accounting', 'Staff', '', '0', '', '', '', 'F', '11/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(241, 'Hernandez, Rachelle A.', '9064819438', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA(Financial management)', 'Accounting', 'Staff', '695', '20', '6', '9', '5', 'F', '11/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(242, 'Mantuano, Diane A.', '9169234070', 'BSU', 'BS Accounting Management', 'Accounting', 'Staff', '', '13', '6', '6', '1', 'F', '11/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(243, 'De Guzman, Maria Camille', '9269443491', 'BSU - Lipa', 'Accounting management ', 'Accounting', 'Staff', '', '0', '', '', '', 'F', '13/04/2019', '', '', '', '', 'Failed In Departmental Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(244, 'De Torres, Maricel S.', '9984076199', 'BSU', 'Accounting management ', 'Accounting', 'Staff', '515', '19', '7', '10', '2', 'P', '13/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(245, 'Rosales, Baby Joy M.', '973522245', 'BSU- Rosario', 'BIT (Electronics technology)', 'PE', 'Associate', '', '17', '2', '6', '9', 'P', '15/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(246, 'Alinao, Ana Mariz V.', '9474001559', 'San Sebastian College - Recoletos Calumbang  Campus', 'BS In Accountancy', 'Accounting', 'Staff', '', '18', '7', '6', '5', 'P', '16/04/2019', '', '', '', '', 'hold for consideration', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(247, 'Balbuena, Kristine Joy G.', '9556476510', 'BSU', 'BSBA (Financial Management)', 'Accounting', 'Staff', '', '25', '7', '12', '6', 'P', '16/04/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(248, 'Panganiban, Rachel', '9667521323', 'Lyceum of the Philippine University', 'Mechanical Engineering', 'Production', 'Staff', '795', '25', '7', '12', '6', 'P', '16/04/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(249, 'Montealto, Loise Kyle G.', '9367765241', 'BSU- Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '', '0', '', '', '', 'P', '16/04/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(250, 'Pate?a, Pearl Irish R.', '9771183290', 'BSU- Alangilan', 'BS Information Technology', 'IT', 'Jr. Staff', '840', '25', '16', '7', '2', '', '23/04/2019', '', '', '', '', 'For Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(251, 'Maiquiz, Kim Bryan P.', '9669476269', 'Technological Instistute of the Philippines', 'BS Electrical Engineering', 'Production', 'Staff', '640', '19', '7', '9', '3', 'P', '23/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(252, 'Anlacan, Jasper B.', '9289134216', 'Paseo de Escudero st. San pablo Laguna ', 'BS Industrial Engineering', 'Production', 'Staff', '650', '21', '8', '10', '3', 'P', '23/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(253, 'Llarenas, Michelle', '9364144763', 'University of Batangas', 'BSBA (Accounting Management)', 'Accounting', 'Staff', '845', '25', '10', '11', '4', 'F', '24/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(254, 'Fortus, John Martin', '9109781814', 'BSU', 'BS Information Technology', 'IT', 'Jr. Staff', '', '0', '', '', '', 'F', '24/04/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(255, 'Estorias, Joyce Anne', '9656400487', 'PUP- Sto. Tomas', 'BS Industrial Engineering', 'Production', 'Staff', '825', '24', '9', '11', '4', 'P', '24/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(256, 'Maloles, Sharina Mae ', '9474417201', 'PUP- Sto. Tomas', 'BS Industrial Engineering', 'QA-CAG', 'Staff', '', '0', '', '', '', 'F', '24/04/2019', '', '', '', '', 'Failed In Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(257, 'De Guzman, Mary Joy', '9750938594', 'PUP- Sto. Tomas', 'BS Industrial Engineering', 'Production', 'Staff', '865', '27', '10', '12', '5', 'F', '25/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(258, 'De Villa, Marife O.', '9421967891', 'PUP- Sto. Tomas', 'BS Accountancy', 'Accounting', 'Staff', '', '0', '', '', '', 'P', '25/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(259, 'Tolentino, Roselyn G.', '9069458182', 'BSU-Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '770', '22', '9', '10', '3', 'P', '25/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(260, 'Lique, Lhea D.', '9480288189', 'STI-Lipa', 'Associate in Computer technology', 'PC', 'Associate', '', '16', '3', '5', '8', 'F', '25/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(261, 'Mendoza, Lyzel L.', '99971597013', 'BSU- Malvar', 'BS Computer Science', 'PE', 'Associate', '', '15', '4', '5', '6', 'F', '25/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(262, 'Rocafort, Angel Mae P.', '9358660853', 'PUP- Sto. Tomas', 'BS Industrial Engineering', 'PE', 'Staff', '865', '24', '9', '11', '4', 'F', '25/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(263, 'Hernandez, Jenalyn M.', '9079385149', 'PUP- Sto. Tomas', 'BS Industrial Engineering', 'PE', 'Staff', '', '21', '8', '7', '6', 'F', '25/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(264, 'Manglo, Dexter B.', '9663286906', 'Faith-Tanauan', 'BS  in Electronics and Communication Engineering ', 'Production', 'Staff', '795', '23', '9', '8', '6', '', '27/04/2019', '', '', '', '', 'For Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(265, 'Carandang, Marjorie Ann C.', '9952359420', 'Faith-Tanauan', 'BS  in Electronics and Communication Engineering ', 'PE', 'Staff', '860', '26', '11', '10', '5', 'F', '27/04/2019', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(266, 'Narvacan, Nikko M.', '9264241570', 'De La Salle Lipa', 'BS in Industrial Engineering', 'Production', 'Staff', '620', '15', '4', '9', '2', '', '27/04/2019', '', '', '', '', 'For Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(267, 'Rubico, Krisel M.', '9752165053', 'BSU - Lipa', 'BS Industrial Engineering', 'PE', 'Staff', '770', '20', '6', '6', '8', 'P', '27/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(268, 'Gonzales, Rechelle P.', '9076359497', 'Teodoro M. Luansing College Of Rosario', 'Bachelor of Elementary Education', 'PE', 'Associate', '', '15', '2', '4', '9', 'P', '27/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(269, 'Maranan, Judy Ann S.', '9182655057', 'University of Batangas', 'BS Industrial Technology (Instrumentation Technology)', 'PE', 'Associate', '', '17', '3', '5', '9', 'F', '27/04/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(270, 'Latoza, Mary Joy V.', '9179319053', 'Kolehiyo ng Lungsod ng Lipa ', 'Bachelor of Elementary Education', 'PC', 'Associate', '', '15', '4', '3', '8', 'F', '27/04/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(271, 'Geolin Jr. , Marlon', '9353325094', 'Technological Philippines Institute', 'BS Electronics and Communication Engineering ', 'Production', 'Staff', '615', '17', '2', '5', '10', 'F', '30/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(272, 'Manalo, Jennelyn ', '9062329790', 'Christian College Of Tanauan', 'BS Industrial Engineering', 'QM-CAG', 'Staff', '420', '15', '2', '9', '4', 'F', '30/04/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(273, 'Panganiban, Elaine L.', '9068303959', 'BSU', 'BA Tourism Management', 'MM (Clerk)', 'Associate', '710', '20', '9', '5', '6', 'P', '30/04/2019', '', '', '', '', 'Waiting PRF before JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(274, 'Sabaybay, Katherine C.', '9052756500', 'PUP-Sto. Tomas', 'BS Industrial Engineering', 'QM-CAG', 'Staff', '645', '-', '-', '-', '-', 'F', '30/04/2019', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(275, 'Magsino, Mariane E.', '9175246744', 'BSU- Alangilan', 'BS ECE', 'QM-CAG', 'Supervisor', '835', '-', '-', '-', '-', 'P', '30/04/2019', '', '', '', '', 'Didn?t Accept Job Offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(276, 'Manguiat, Lindsay', '9755455975', 'Kolehiyo ng Lungsod ng Lipa ', 'BS Secondary Education (English)', 'PC', 'Associate', '', '19', '7', '6', '6', 'P', '30/04/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(277, 'Agustino, Ruffa', '9091247547', 'University of Batangas', 'BS Indutrial Engineering (undergraduate 3rd y.)', 'PE', 'Associate', '', '17', '5', '5', '7', 'F', '02/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(278, 'Narito, Aldrien C.', '9466100062', 'BSU- Malvar', 'BS Industrial Engineering', 'Production', 'Staff', '445', '0', '', '', '', 'F', '03/05/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(279, 'Alkonga, Donna J.', '9488267670', 'PUP-Sto. Tomas', 'BS Industrial Engineering', 'PE', 'Staff', '895', '22', '9', '10', '3', 'P', '03/05/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(280, 'Umali, Rocel L.', '9555161815', 'BSU - Lipa', 'BSBA (Marketing Management)', 'MM', 'Staff', '400', '0', '', '', '', 'F', '03/05/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(281, 'Martin, Ma. Bernadeth', '9950575534', 'Christian College Of Tanauan', 'BS Industrial engineering', 'Production', 'Staff', '765', '18', '6', '9', '3', 'P', '04/05/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(282, 'Vergara, Antoinette S.', '9277961254', 'De La Salle Lipa', 'BSBA (Marketing Management)', 'MM', 'Staff', '650', '20', '7', '9', '4', 'P', '07/05/2019', '', '', '', '', 'For Decision of JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(283, 'Rolando, Tigranes Jr.', '9975096769', 'University of Batangas', 'BS Information Technology', 'IT', 'Jr. Staff', '', '0', '', '', '', 'F', '07/05/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(284, 'Dimaano, Ellen May', '9566880206', 'Lyceum of the Philippine University', 'BS Communication and electronic Engineering', 'Production', 'Staff', '655', '19', '7', '10', '2', 'P', '07/05/2019', '', '', '', '', 'For Medical and Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(285, 'Delos Reyes, Kessiah', '9395626559', 'Teodoro M. Luansing College Of Rosario', 'BSBA (Marketing Management)', 'MM', 'Staff', '470', '12', '6', '3', '3', 'F', '07/05/2019', '', '', '', '', 'Failed in TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(286, 'Garcia, Baby Jean P.', '9301148688', 'Dalubhasa ng lungsod ng  San Pablo', 'BS Computer Engineering', 'Production', 'Staff', '', '19', '7', '5', '7', 'F', '08/05/2019', '', '', '', '', 'Didn?t attend on Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(287, 'Caringal, Arriane Princess M.', '9176256319', 'UB-Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '445', '14', '7', '5', '2', 'F', '08/05/2019', '', '', '', '', 'Failed in TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(288, 'Lat, Paul Jed Bert R.', '9152818266', 'Adamson University, Manila', 'BS Information Technology', 'IT', 'Jr. Staff', '705', '26', '15', '6', '5', 'P', '09/05/2018', '', '', '', '', 'Didn?t pursue application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(289, 'Manalo, Emelyn M.', '9672099917', 'University of Batangas', 'BS Industrial Engineering', 'Production', 'Staff', '705', '20', '8', '8', '4', 'F', '09/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(290, 'Quiatchon, Paula Blaire G.', '9756526397', 'BSU- Malvar', 'BS Mechatronics Engineering', 'Production', 'Staff', '', '22', '8', '8', '6', 'F', '09/05/2019', '', '', '', '', 'Waiting For Graduation', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(291, 'Bautista, Joan M.', '9264194823', 'STI College -Tanauan', 'BSBA(Operation Management)', 'Production', 'Staff', '855', '23', '11', '9', '3', 'F', '09/05/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(292, 'Guerero, Ma. Joanne V.', '9067365890', 'STI College -Tanauan', 'BSBA(Operation Management)', 'MM', 'Staff', '780', '22', '10', '7', '5', 'P', '09/05/2019', '', '', '', '', 'Didn?t Accept Job Offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(293, 'Catapang, Maricel M.', '9129717430', 'BSU- Malvar', 'BS Information Technology', 'PE', 'Associate', '', '21', '7', '6', '8', 'P', '15/05/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(294, 'Alcances, Michael S.', '9455012828', 'BSU -Lemery', 'BS Industrial Technology (Computer Technology)', 'PE', 'Associate', '', '16', '3', '6', '7', 'P', '05/015/19', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(295, 'Sandoval, Morris R.', '9063956213', 'UB- MAin', 'BS Industrial Engineering', 'Production', 'Staff', '480', '9', '5', '2', '2', 'F', '15/05/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(296, 'Landicho, Rea L.', '9267867915', 'BSU- Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '485', '20', '8', '9', '3', 'F', '15/05/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(297, 'Reyes, alexander Juluis M.', '9056969216', 'BSU- Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '530', '14', '6', '6', '2', 'F', '15/05/2019', '', '', '', '', 'Failed initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(298, 'Olan, Wendell', '9367189662', 'UB-Lipa', 'BS Information Technology', 'IT', 'Jr. Staff', '645', '30', '16', '7', '7', 'F', '16/05/2019', '', '', '', '', 'Failed initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(299, 'Comia, Jayvee', '9368422327', 'UB-Lipa', 'BS Information Technology', 'IT', 'Jr. Staff', '685', '24', '14', '5', '5', 'F', '16/05/2019', '', '', '', '', 'Failed Departmet Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(300, 'Abrenica, Marc Matthew', '9158038625', 'Lyceum of the Philippine University', 'BS Industrial Engineering', 'Production', 'Staff', '', '0', '', '', '', 'F', '18/05/2019', '', '', '', '', 'Failed Departmet Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(301, 'Sanchez, Syrene A.', '9106459018', 'Christian College Of Tanauan', 'BS Industrial Engineering', 'Production', 'Staff', '', '0', '', '', '', 'P', '18/05/2019', '', '', '', '', 'For JO ', '', '(Back out the day of Deployment)', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(302, 'Romion, Micah May ', '9352621220', 'Romblon State University', 'BSBA (Financial Management)', 'MM', 'Staff', '', '0', '', '', '', 'F', '18/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(303, 'Salandanan, Sheena Marie', '99575828336', 'Lyceum of the Philippine University', 'BS Industrial Engineering', 'Production', 'Staff', '', '14', '6', '7', '1', 'P', '21/05/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(304, 'Simara, Catherine C.', '9267981822', 'Rizal College of Taal ', 'BSBA( Financial Management)', 'MM', 'Staff', '', '15', '6', '6', '3', 'F', '21/05/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(305, 'Perante, Sharizz F.', '9262409067', 'Dalubhasa ng lungsod ng  San Pablo', 'BSBA( Financial Management)', 'MM', 'Staff', '545', '13', '5', '4', '4', 'F', '21/05/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(306, 'Calleja, Miguel Sandino', '9053117428', 'BSU', 'BS Information Technology', 'IT', 'Jr. Staff', '770', '31', '20', '6', '5', '', '22/05/2019', '', '', '', '', 'Fo Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(307, 'Melitante, Kristofer', '997477264', 'PUP-Sto. Tomas', 'BS Industrial Engineering', 'Production', 'Staff', '785', '17', '7', '5', '5', 'P', '22/05/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(308, 'Montero, Via P.', '9361391698', 'UB-Main', 'BSBA(Human Resources Development)', 'MM', 'Staff', '545', '13', '4', '8', '1', 'F', '22/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(309, 'Alfonso, Romnick ', '9753554819', 'BSU-Malvar', 'BS Information Technology', 'IT', 'Staff', '735', '30', '18', '5', '7', 'P', '2019-05-24', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(310, 'Libuit, Jenell M.', '9951481684', 'BSU-Malvar', 'BS Computer Science', 'IT', 'Jr. Staff', '595', '20', '12', '5', '3', 'F', '24/05/2019', '', '', '', '', 'Didn?t pursue Application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(311, 'Abanilla, Razzel Jane', '9309978694', 'BSU-Malvar', 'BS Industrial Engineering', 'QA-CAG', 'Staff', '820', '20', '9', '9', '2', 'F', '24/05/2019', '', '', '', '', 'Failed Department Interview ', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(312, 'Hsu, Min F.', '9506019911', 'PUP-Sto. Tomas', 'BS Industrial Engineering', 'QA-CAG', 'Staff', '930', '27', '18', '5', '4', 'F', '24/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(313, 'Gatcion, Aileen Reyes', '9759157233', 'Laguna College -San Pablo', 'BS Industrial Engineering', 'QA-CAG', 'Staff', '825', '20', '7', '10', '3', 'F', '25/05/2019', '', '', '', '', 'Failed Department Interview ', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(314, 'Delos Reyes, Paul Christian', '9566982443', 'BSU-  Malvar', 'BS Information Technology', 'IT', 'Jr.Staff', '', '0', '', '', '', 'F', '28/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(315, 'Mortel, Emcie V.', '9063611989', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA', 'MM', 'Staff', '', '0', '', '', '', 'P', '28/05/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(316, 'Gonzales, Sheryl M.', '9274008230', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA( Marketing Management)', 'MM', 'Staff', '', '19', '6', '9', '4', 'F', '30/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(317, 'Ceria, Bryan S.', '9489935251', 'PUP-Sto. Tomas', 'BS Industrial Technology', 'Production', 'Staff', '', '27', '10', '12', '5', 'F', '30/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(318, 'Dela Cruz, Jay B.', '9461725308', 'PUP-Sto. Tomas', 'BS Electronics and communication Engineering', 'QA-FGI', 'Associate', '', '17', '4', '6', '7', 'F', '30/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(319, 'Bermas, Sydney B.', '9497276346', 'BSU - Malvar', 'BS Information Technology', 'IT', 'Jr. Staff', '600', '20', '6', '11', '3', 'P', '30/05/2019', '', '', '', '', 'For Requirements', '', 'Back out (Better opportunity', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(320, 'Hernandez, Jazmin M.', '9279904127', 'BSU- Malvar', 'BS Information Technology', 'IT', 'Jr. Staff', '810', '27', '15', '5', '7', 'F', '31/05/2019', '', '', '', '', 'Didn?t attend Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(321, 'Raymundo, Pamela M.', '9057506802', 'BSU-Malvar', 'BS Information Technology', 'IT', 'Jr. Staff', '550', '23', '14', '5', '4', 'F', '31/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(322, 'Jimeno, Bjel Camille L.', '9276758066', 'STI College Tanauan', 'BS Travel Management', 'PC', 'Associate', '', '22', '6', '7', '9', 'F', '31/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(323, 'Manahan, Ma. Winnie M.', '9062130716', 'BSU - Lipa', 'Industrial Engineering', 'Production', 'Staff', '', '23', '10', '10', '3', 'F', '31/05/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(324, 'Pari?as, Khey Ann C.', '9269422553', 'BSU- Lipa', 'BS Industrial Engineering', 'Production', 'Associate', '670', '16', '6', '7', '3', 'F', '31/05/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(325, 'Magtibay, Ruel F.', '9058372061', 'Kolehiyo ng Lungsod ng Lipa ', 'BS Computer Science', 'IT', 'Jr. Staff', '', '21', '12', '6', '3', 'F', '31/05/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(326, 'Manalo, Zhaira G.', '9351215706', 'BSU - Alangilan', 'BS Industrial Technology (Computer Technology)', 'PC', 'Associate', '', '16', '3', '4', '9', 'F', '05/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(327, 'Miraflor, Lester James', '9218846074', 'BSU - Alangilan', 'BS Industrial Technology (Computer Technology)', 'QA-FGI', 'Associate', '', '16', '4', '6', '6', 'F', '05/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(328, 'Mauhay, Melanie A.', '9065493975', 'BSU- Alangilan', 'BS Industrial Technology (Computer Technology)', 'QA-FGI', 'Associate', '', '19', '6', '4', '9', 'F', '05/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(329, 'Tagle, Margie C.', '9285686915', 'Kolehiyo ng Lungsod ng Lipa ', 'BS Computer Science', 'PC', 'Associate', '', '19', '3', '7', '9', 'F', '05/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(330, 'Dimayuga, Shania Lane', '9491327547', 'BSU- Malvar', 'BS Information Technology', 'IT', 'Jr. Staff', '', '23', '15', '3', '5', 'P', '05/06/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(331, 'Barredo, Julious M.', '9667022826', 'BSU- Alangilan', 'BS Industrial Engineering', 'Production', 'Staff', '', '18', '10', '7', '1', 'P', '05/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(332, 'Arcega, Wendy G.', '9165684524', 'Lyceum of the Philippine University', 'BS Industrial Engineering', 'Production', 'Staff', '570', '15', '5', '8', '2', '', '05/06/2019', '', '', '', '', 'For Schedule of nect Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(333, 'Malibiran, Jasmin V.', '9551590331', 'Weastmead International School', 'BS Industrial Engineering', 'QA- CAG ', 'Staff', '570', '17', '6', '7', '4', 'P', '06/06/2019', '', '', '', '', 'Undecided until Tomorrow', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(334, 'Carandang, Eunice A.', '906724281', 'De La Salle Lipa', 'BS Electronics Engineering', 'QA- CAG ', 'Staff', '845', '24', '9', '9', '6', 'P', '06/06/2019', '', '', '', '', 'Didn?t Accept Job Offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(335, 'Palo, Lorenz Joshwa D.', '9654513283', 'Lyceum of the Philippine University', 'BS Industrial Engineering', 'PE', 'Staff', '630', '20', '7', '9', '4', 'P', '07/06/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(336, 'Villanueva, Marisol A.', '9285667055', 'Weastmead International School', 'BS Electronics Engineering', 'Production', 'Staff', '475', '15', '6', '7', '2', 'F', '06/07/109', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(337, 'Fajanilan, Maria Lyn F.', '9066241194', 'University of Batangas', 'BS Electrical Engineering', 'QA- CAG', 'Staff', '470', '13', '4', '5', '4', 'F', '11/06/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(338, 'Maala, Marvin H.', '9560677194', 'Rizal College of Taal ', 'Computer Hardware Servicing', 'QA-FGI', 'Associate', '', '12', '1', '3', '8', 'F', '11/06/2019', '', '', '', '', 'Failed in Aptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(339, 'Manalo, Princes Nicole R.', '9993398978', 'Faith-Tanauan', 'BS Industrial Engineering', 'PE', 'Staff', '775', '23', '10', '10', '3', 'P', '11/06/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(340, 'Reyes, Gemmalyn M.', '9174377595', 'UB- Batangas', 'BS Computer Engineering', 'QA- CAG', 'Staff', '705', '19', '10', '6', '3', 'P', '12/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(341, 'Tenorio, Mark John H. ', '9215926989', 'ICT-ED Institute of Science and technology', 'BS Information Technology', 'IT ', 'Jr. Staff', '550', '22', '14', '4', '4', 'P', '12/06/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(342, 'Cepeda, Edison C.', '9165296377', 'University of Batangas', 'Mechanical Engineering', 'Equipment - Facility', 'Staff', '620', '18', '6', '9', '3', 'F', '12/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(343, 'Silva, Bless Marie M.', '9971267951', 'University of Batangas', 'Bachelor of science In Education major in English', 'PC', 'Associate', '', '15', '5', '4', '6', 'F', '13/06/2019', '', '', '', '', 'Failed initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(344, 'Umali, Annabel D.', '9508884041', 'BSU - Malvar', 'BS Industrial Engineering', 'Production', 'Staff', '690', '19', '9', '7', '3', 'P', '13/06/2019', '', '', '', '', 'FOR JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(345, 'Tolentino, Cindy', '9272940686', 'University of Batangas', 'BS Industrial Engineering', 'QM- CAG', 'Staff', '', '23', '10', '11', '2', 'P', '13/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(346, 'Yaco, Mary Darlene B.', '9174675615', 'Faith-Tanauan', 'BS Electronics Engineering', 'QM- CAG', 'Staff', '', '26', '9', '11', '6', 'P', '13/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(347, 'Katigbak, Patricia Gyweneth G.', '9773942918', 'Batangas College of Arts and Sciences, Inc.', 'BS Information Technology', 'IT / PDC', 'Jr. Staff', '775', '24', '17', '5', '2', 'P', '13/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(348, 'Coronel, Joan V.', '9127245124', 'Teodoro M. Luansing College Of Rosario', 'BS Computer Science', 'PDC', 'Jr. Staff', '', '28', '15', '7', '6', 'F', '13/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(349, 'Gloria, Rachel Patricia Alexis', '96568423636', 'AMA Computer College-Lipa', 'BS Information technology', 'IT / PDC', 'Jr.Staff', '865', '34', '20', '7', '7', 'P', '13/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(350, 'Arnoza, Lovely May', '9262659833', 'Teodoro M. Luansing College Of Rosario', 'BS Computer Science', 'PDC', 'Jr. Staff', '795', '29', '14', '9', '6', 'P', '13/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(351, 'Molar, Mary Shyssa P.', '9979662614', 'Kolehiyo ng Lungsod ng Lipa ', 'BS Computer Science', 'PDC', 'Jr. Staff', '610', '24', '14', '7', '3', 'P', '14/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '');
INSERT INTO `tbl_applicant` (`listId`, `applicant_name`, `contact_no`, `school`, `course`, `department`, `applied_position`, `TOEIC_result`, `aptitude_result`, `p1`, `p2`, `p3`, `assessment_result`, `date_applied`, `plan`, `actual`, `no_of_days`, `rating`, `status`, `date_of_orientation`, `remarks`, `initial_interviewer`, `initial_result`, `initial_date`, `final_interviewer`, `final_result`, `final_date`, `jo_interviewer`, `jo_result`, `jo_date`, `interview_remarks`) VALUES
(352, 'Maliglig, Jessica C.', '9064092976', 'Kolehiyo ng Lungsod ng Lipa ', 'Associate In Computer technology', 'PC', 'Associate', '455', '13', '2', '4', '7', 'F', '14/06/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(353, 'Terrible, Jhelen P. ', '9456955100', 'Faith-Tanauan', 'BS Industrial Engineering', 'QA-PPG', 'Staff', '760', '24', '11', '10', '3', 'P', '14/06/2019', '', '', '', '', 'For Schedule of JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(354, 'Guerero, Renz Ivan R.', '9166525737', 'Faith-Tanauan', 'BS Industrial Engineering', 'QA-PPG', 'Staff', '800', '24', '9', '11', '4', 'P', '14/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(355, 'Medrano, Jessabelle G.', '9268517099', 'Lemery Colleges', 'BS Information Technology', 'PDC', 'Jr. Staff', '440', '26', '9', '8', '9', 'F', '14/06/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(356, 'Alcazar, Mary Joy T.', '9268519288', 'Lemery Colleges', 'BS Information Technology', 'PDC', 'Jr. Staff', '530', '31', '15', '8', '8', 'F', '14/06/2019', '', '', '', '', 'Didn?t Pursue Application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(357, 'Uri, Vanessa R.', '9089670250', 'ICT-ED Institute of Science and technology', 'BS Entrepreneurship ', 'PDC', 'Jr. Staff', '650', '24', '17', '6', '1', 'P', '14/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(358, 'Lorenzo, Melody', '9503868812', 'Lemery Colleges', 'BS Information Technology', 'PDC', 'Jr. Staff', '525', '18', '13', '3', '2', 'F', '14/06/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(359, 'Esguerra, Angel M.', '9051176235', 'Daraga Community College', 'BS Elementary Education', 'PDC', 'Jr. Staff', '445', '20', '13', '4', '3', 'F', '18/06/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(360, 'Manalo, Pamela May M.', '9168626007', 'Kolehiyo ng Lungsod ng Lipa ', 'BS Computer Science', 'PDC', 'Jr. Staff', '', '29', '18', '6', '5', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(361, 'Catapat, Pamela S.', '9397175563', 'Lemery Colleges', 'BS Information Technology', 'PDC', 'Jr. Staff', '675', '27', '18', '7', '2', 'F', '18/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(362, 'Melanio, Sherilyn G.', '91045594807', 'BSU - Lipa', 'BS Information Technology', 'PDC', 'Jr. Staff', '', '27', '14', '8', '5', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(363, 'Awayan, Ruby Ann', '9759298160', 'Sta. Teresa College', 'BSBS ( Financial Management)', 'PDC', 'Jr. Staff', '', '20', '12', '4', '4', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(364, 'Senyahan, Laarnhe Shine A.', '9753071491', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBS ( Financial Management)', 'PDC', 'Jr. Staff', '615', '20', '12', '5', '3', 'F', '18/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(365, 'Magpantay, Angela Marie L.', '9309979796', 'Faith-Tanauan', 'BS Industrial Engineering', 'QA- CSG', 'Staff', '840', '26', '9', '11', '6', 'F', '18/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(366, 'Malabanan, Kimberly T.', '9294711002', 'Faith-Tanauan', 'BS Industrial Engineering', 'PE', 'Staff', '', '23', '8', '12', '3', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(367, 'Magcawas, Crisia Loraine L.', '9362378517', 'Faith-Tanauan', 'BS Industrial Engineering', 'QA-CSG', 'Staff', '750', '24', '10', '10', '4', 'F', '18/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(368, 'Axalan, Nancy M.', '9106138340', 'UB - Main', 'BS Industrial Engineering', 'PE', 'Staff', '', '25', '12', '12', '1', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(369, 'Dayo, Jhon Carlo P.', '9498355933', 'Faith-Tanauan', 'BS Industrial Engineering', 'PE', 'Staff', '', '20', '6', '10', '4', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(370, 'Cabio, Joshua P.', '9266767526', 'BSU - Alangilan', 'BS Industrial Technology', 'PE - AME', 'Staff', '780', '20', '7', '10', '3', 'F', '18/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(371, 'Mendoza, Runel A. ', '9277120018', 'BSU - Alangilan', 'BS Industrial Technology', 'PE - AME', 'Associate', '', '22', '11', '8', '3', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(372, 'Padernal, Aejonel C.', '9363473783', 'Faith-Tanauan', 'BS Industrial Engineering', 'PE - AME', 'Staff', '', '25', '8', '12', '5', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(373, 'Dimaano, John Meneses M.', '9554490515', 'BSU ', 'BS Industrial Tecjnology (Instrumentation Technology)', 'PE - AME', 'Staff', '775', '22', '11', '8', '3', 'F', '18/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(374, 'Mistas, Julius D.', '9165414247', 'BSU- MaLvar', 'BS Industrial Engineering', 'QA - PPG', 'Staff', '680', '23', '10', '11', '2', 'P', '18/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(375, 'De Castro, LenielynS.', '9265345251', 'Lemery Colleges', 'BS Information Technology', 'PDC', 'Jr. Staff', '645', '21', '15', '3', '3', 'F', '19/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(376, 'Valencia, Karen Joy R.', '9777068352', 'BSU - Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '765', '20', '7', '10', '3', 'P', '19/06/2019', '', '', '', '', 'FOR JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(377, 'Malabanan, Donna A.', '90737721274', 'Faith-Tanauan', 'Bs Industrial Engineering', 'Production', 'Staff', '620', '22', '6', '11', '5', 'P', '19/06/2019', '', '', '', '', 'FOR JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(378, 'Alday, Lady April R.', '9557235945', 'STI - Balayan', 'Bachelor of Science in Computer Science', 'PDC', 'Jr. Staff', '820', '29', '13', '9', '7', 'P', '19/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(379, 'Bantay, Maricel M.', '9050933717', 'Kolehiyo ng Lungsod ng Lipa ', 'BS Education (values)', 'PDC', 'Jr. Staff', '590', '20', '14', '4', '2', 'F', '19/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(380, 'Rianzares, Annie Joyce S.', '9361020443', 'PUP-Sto. Tomas', 'BS Information Technology', 'PDC', 'Jr. Staff', '800', '31', '16', '9', '6', 'F', '19/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(381, 'Aningalan, Natalie', '9122822288', 'Faith-Tanauan', 'BS Industrial Engineer', 'Production', 'Staff', '695', '22', '7', '10', '5', 'F', '20/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(382, 'Mamangun, Chenie S.', '9480848790', 'Faith-Tanauan', 'BS Industrial Engineer', 'Production', 'Staff', '700', '20', '8', '10', '2', 'P', '20/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(383, 'Villegas, Chereena M.', '9176376070', 'De La Salle Lipa', 'BS Industrial Engineer', 'PE', 'Staff', '790', '20', '9', '8', '3', 'F', '20/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(384, 'Abawag, Jennifer B.', '9663129037', 'BSU - Malvar', 'BS Accounting Management', 'Accounting', 'Staff', '720', '21', '6', '8', '7', 'P', '20/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(385, 'Ebora, Sharamy C.', '9057511581', 'BSU - Main', 'BSBA( Financial Management)', 'Accounting', 'Staff', '620', '20', '8', '7', '5', 'F', '20/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(386, 'Umandap, Judith C.', '9350460990', 'BSU - Malvar', 'BS Industrial Technology (Computer Technology)', 'PDC/ QA', 'Jr. Staff', '535', '20', '10', '5', '5', 'P', '20/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(387, 'Gamitin, Marck Rowhen A.', '9653921255', 'BSU - Malvar', 'BS Industrial Engineering', 'PE', 'Staff', '680', '24', '8', '12', '4', 'P', '20/06/2019', '', '', '', '', 'Didn?t Attend Job Offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(388, 'Mercado, Ara Gia M.', '9067326016', 'BSU - Malvar', 'BS Industrial Engineering', 'Production', 'Staff', '735', '20', '8', '7', '5', 'F', '20/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(389, 'Oredo, Joshua J.', '9301989477', 'BSU - Malvar', 'BS Industrial Technology', 'PE', 'Associate', '', '15', '4', '5', '6', 'F', '20/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(390, 'Teologo, Mary Claire V.', '9206788525', 'BSU - Malvar', 'BS Industrial Technology (Computer Technology)', 'PE', 'Associate', '', '15', '4', '3', '8', 'P', '20/06/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(391, 'Magsino, Crystal P.', '9503403789', 'Sta. Teresa College', 'BS Information Technology', 'PDC', 'Jr. Staff', '', '22', '14', '4', '4', 'F', '21/06/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(392, 'De Ocampo, Gemma L.', '9267623487', 'Colegio ng Lungsod ng Batangas', 'BSBA( Operation Management)', 'PDC', 'Jr. Staff', '', '25', '15', '5', '5', 'P', '21/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(393, 'Rosales, Kathleen H.', '9385579946', 'Kolehiyo ng Lungsod ng Lipa ', 'BA Communication', 'PDC', 'Jr. Staff', '', '20', '12', '5', '3', 'F', '21/06/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(394, 'Tabale, Edralyn  L.', '9186796761', 'Faith-Tanauan', 'BS Industrial Engineering', 'PE', 'Staff', '', '20', '7', '7', '6', '', '21/06/2019', '', '', '', '', 'For Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(395, 'Reyes, Giselle M.', '9186280603', 'Faith-Tanauan', 'BS Industrial Engineering', 'PE', 'Staff', '', '20', '8', '9', '3', 'F', '21/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(396, 'Ruliog, Leanne Paula G.', '9173155924', 'De La Salle Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '650', '18', '7', '7', '4', 'F', '25/06/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(397, 'Faltado, Katherine Mae', '9568429185', 'UB - Main', 'BS Industrial Engineering', 'Production', 'Staff', '', '17', '7', '7', '3', 'F', '25/06/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(398, 'Tolentino, Aira Antoneth', '9486514874', 'Faith-Tanauan', 'BS Industrial Engineering', 'Production', 'Staff', '', '0', '', '', '', 'F', '25/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(399, 'Lumayag, Kristina Andrea D.', '9173393616', 'DMMC Institute of Health Sciences', 'BS Phsychology', 'PC', 'Associate', '', '16', '5', '4', '7', 'F', '25/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(400, 'Oliverio, Bryan Heji', '9752364574', 'BSU - Rosario', 'BS Industrial technology ( Computer technology)', 'QA-FGI', 'Associate', '', '17', '5', '5', '7', 'P', '25/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(401, 'Magnaye, Princess Lyka D.', '9162219261', 'BSU - Rosario', 'BS Industrial technology ( Computer technology)', 'PC', 'Associate', '', '15', '4', '4', '7', 'P', '25/06/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(402, 'Del Rosario, Jessyl B. ', '9108929785', 'BSU - Malvar', 'BS Infoprmation Technology', 'PDC', 'Jr. Staff', '', '0', '', '', '', 'P', '25/06/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(403, 'De Guzman, Melvin Jay', '9498968443', 'BSU', 'BS Mechanical Engineering', 'Equipment - Facility', 'Staff', '', '0', '', '', '', 'F', '25/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(404, 'De Ocampo, Jerome B.', '9100012274', 'Southern Luzon State University', 'BSIT (Computer Technology)', 'QA-FGI', 'Associate', '', '16', '5', '4', '7', 'F', '26/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(405, 'Nabatilan, Mark Nathaniel ', '9151348742', 'Colegio de San Juan De Letran', 'BS Mechanical Engineering', 'Equipment - Facility', 'Staff', '800', '24', '9', '11', '4', 'F', '26/06/2019', '', '', '', '', 'Didn?t Pursue Application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(406, 'Mendoza, Kaira M.', '9071574258', 'Faith-Tanauan', 'BS Industrial engineering', 'Production', 'Staff', '710', '21', '7', '8', '6', 'F', '26/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(407, 'Linatoc, Cecille M.', '9389006070', 'Kolehiyo ng Lungsod ng Lipa ', 'BS Computer Science', 'PDC', 'Jr. Staff', '570', '21', '10', '6', '5', 'F', '26/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(408, 'Gonzales, Natali Lianne', '9567193077', 'STI', 'BS Information Technology', 'PDC', 'Jr. Staff', '660', '21', '16', '2', '3', 'F', '26/06/2019', '', '', '', '', 'Didn?t Pursue Application', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(409, 'Vasquez, Kimberly M.', '9388435147', 'Faith-Tanauan', 'BS Industrial engineering', 'Production', 'Staff', '645', '14', '6', '8', '0', 'F', '26/06/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(410, 'Vito, Aldrich J.', '9777039465', 'Southern Luzon State University', 'BS Industrial Technology', 'QA-FGI', 'Associate', '', '15', '4', '6', '5', 'F', '26/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(411, 'Di?a, Francis C.', '9186511323', 'BSU - Rosario', 'BS Industrial Technology', 'PE- AME', 'Associate', '', '12', '1', '6', '5', 'F', '26/06/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(412, 'Latayan, Arlene S.', '9064524266', 'PUP-Sto. Tomas', 'BS Information Technology', 'PDC', 'Jr. Staff', '', '31', '17', '7', '7', 'F', '27/06/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(413, 'Bagsic, Morena B.', '9072992605', 'BSU - Rosario', 'BS Industrial Technology (Computer Technology)', 'QA- FGI', 'Associate', '', '0', '', '', '', 'F', '28/06/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(414, 'Di?a, April Lyn C.', '9073036384', 'BSU- Rosario', 'BS Industrial Technology (Computer Technology)', 'PE', 'Associate', '', '20', '5', '7', '8', 'F', '03/07/2019', '', '', '', '', 'Failed Initial Initerview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(415, 'Hernandez, Christian James', '9122711811', 'BSU - Lipa', 'BSBA(Marketing Management)', 'MM', 'Staff', '730', '23', '10', '11', '2', 'F', '03/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(416, 'Miral, Francis John C.', '9350462615', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA ( Operatio Management )', 'MM', 'Staff', '445', '15', '3', '10', '2', 'F', '03/07/2019', '', '', '', '', 'Failed APPTITUDE & TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(417, 'Barba, Judith Ann M.', '9166546828', 'Tanauan Institute', 'BS Computer Science', 'PDC', 'Jr.Staff', '625', '21', '13', '2', '6', 'F', '03/07/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(418, 'Ebora, Benjamin', '9971739099', 'BSU ', 'BS IT (Mechanical)', 'PE', 'Associate', '', '22', '5', '10', '7', 'P', '13/07/2019', '', '', '', '', 'For requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(419, 'Ebora, Jimboy C.', '9554384555', 'BSU', 'BS IT (Mechanical)', 'PE', 'Associate', '', '23', '6', '10', '7', 'F', '03/07/2019', '', '', '', '', 'Failed department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(420, 'Sena, Jay Francis D.', '9975843890', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBA (Operation Management)', 'MM', 'Staff', '', '20', '6', '10', '4', 'F', '03/07/2019', '', '', '', '', 'Failed department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(421, 'Sultan, Princess Norhaina C.', '9065347958', 'BSU', 'BS IT (Computer Technology)', 'PE', 'Associate', '', '17', '2', '7', '8', 'F', '04/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(422, 'Navarro, Jessica G.', '9264430455', 'BSU', 'BS IT ( Computer technology)', 'PE', 'Associate', '', '0', '', '', '', 'P', '04/07/2019', '', '', '', '', 'didn?t Accept job offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(423, 'Miranda, Bryan Joseph M.', '9217514542', 'BSU - Malvar', 'BS IT (Mechanical Engineering Technology)', 'PE', 'Associate', '', '0', '', '', '', 'P', '04/07/2019', '', '', '', '', 'didn?t Accept job offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(424, 'Ferrer, Christine Joy B.', '9466393173', 'BSU - Alangilan', 'BS IT ( Computer technology)', 'PE', 'Associate', '', '8', '2', '3', '3', 'F', '04/07/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(425, 'Dela Cruz, Arthur M.', '9486368148', 'BSU- Malvar', 'BS IT (Mechanical Engineering Technology)', 'PE', 'Associate', '', '0', '', '', '', 'P', '04/07/2019', '', '', '', '', 'didn?t Accept job offer', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(426, 'Pesigan, Kristoffer Willy R.', '9466605411', 'BSU ', 'BS IT ( Computer technology)', 'PE', 'Associate', '', '23', '7', '7', '9', 'F', '04/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(427, 'Santos, Mark Danniel M.', '9.09367E+11', 'BSU ', 'BS IT ( Computer technology)', 'PE', 'Associate', '', '25', '8', '8', '9', 'F', '04/07/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(428, 'Lumanglas, Jemuel D.', '9755261792', 'BSU- Main', 'BS IT (Drafting Technology)', 'PE', 'Associate', '', '17', '4', '6', '7', 'F', '04/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(429, 'Guevarra, Rica Mae F.', '9195434845', 'PUP-Sto. Tomas', 'BS Information Technology', 'PDC', 'Jr. Staff', '680', '30', '16', '8', '6', 'P', '04/07/2019', '', '', '', '', 'For Requirements', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(430, 'Jusayan, Ana Maica D.', '975535570', 'PUP-Sto. Tomas', 'BS Information Technology', 'PDC', 'Jr. Staff', '755', '31', '17', '8', '6', 'F', '04/07/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(431, 'Banaag, Jayzel K.', '9957380465', 'BSU- Alangilan', 'BS Information Technology', 'PDC', 'Jr. Staff', '640', '24', '16', '2', '6', 'F', '04/07/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(432, 'Maranan, Jovit O.', '9384141915', 'UB ', 'BS Information Technology', 'MM', 'Staff', '660', '19', '8', '10', '1', 'F', '04/07/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(433, 'Bere?a, Christine B.', '9182653284', 'BSU - Lemery', 'BSBS (Marketing Management)', 'MM', 'Staff', '520', '14', '6', '7', '1', 'F', '04/07/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(434, 'Cueto, Princess M.', '9122908181', 'Colegio ng Lungsod ng Batangas', 'BSBA (operation Management)', 'MM', 'Staff', '525', '16', '4', '8', '4', 'F', '04/07/2019', '', '', '', '', 'Failed Apptitude Test', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(435, 'Arellano, Jason Joie T.', '9482259492', 'BSU - Alangilan', 'BS Industrial Engineering', 'QA-PPG', 'Staff', '795', '20', '8', '6', '6', 'F', '04/07/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(436, 'Sabalburo, Trina C.', '9758631806', 'BSU- Rosario', 'BS Industrial Engineering', 'QA- CSG', 'Staff', '775', '23', '9', '10', '4', 'F', '04/07/2019', '', '', '', '', 'Failed Initial Interview', '', '* Conflict of Schedule (Review every Sat.)', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(437, 'Manacop. Mikaela M.', '9388230861', 'BSU - Malvar', 'BS Information Technology', 'PDC', 'Jr. Staff', '605', '23', '16', '2', '5', 'F', '04/07/2019', '', '', '', '', 'Failed Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(438, 'Camtan, Jiubilyn K.', '9266475975', 'BSU- Rosario', 'BSBA(Development Management)', 'MM', 'Staff', '610', '24', '12', '10', '2', 'F', '04/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(439, 'Castillo, Lorrielyn E.', '9267494212', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBS( Marketing Management)', 'MM', 'Staff', '655', '22', '6', '9', '7', 'F', '04/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(440, 'Mendoza, Reigine A.', '9051743400', 'BSU', 'BIT (Instrumentation and contro', 'QA-FGI', 'Staff', '', '17', '3', '7', '7', 'F', '04/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(441, 'Sorilla, Joyce', '9156345314', 'De La Salle Lipa', 'BS Industrial Engineering', 'QA - PPG', 'Staff', '', '23', '10', '10', '3', 'P', '06/07/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(442, 'Vapor, Jessa Mae L.', '9355244256', 'Kolehiyo ng Lungsod ng Lipa ', 'BSBS (Operation Management)', 'MM', 'Staff', '', '12', '3', '7', '2', 'F', '06/07/2019', '', '', '', '', 'Failed TOEIC EXAM', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(443, 'Campang, Andrew L.', '9279194962', 'BSU - Malvar', 'BS Industrial Engineering', 'NF Kaizen', 'Staff', '', '23', '10', '9', '4', '', '06/07/2019', '', '', '', '', 'For Department Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(444, 'Maderazo, Mark Arvin E.', '9457139646', 'Lyceum of the Philippine University', 'BS Industrial Engineering', 'Production', 'Staff', '', '21', '6', '11', '4', 'P', '06/07/2019', '', '', '', '', 'For JO', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(445, 'Barte, Roi Albert D.', '9154966524', 'De La Salle Lipa', 'BS Industrial Engineering', 'Production', 'Staff', '', '24', '10', '9', '5', 'F', '06/07/2019', '', '', '', '', 'Failed Initial Interview', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(450, 'try', '0909099', 'bsu', 'it', 'it', 'it', '100', '6', '2', '2', '2', 'P', '2019-07-16', '2019-07-16', '2019-07-16', '', '', 'For Requirements', '2019-07-16', 'B248 / Jan 16, 2019', 'Divine', 'p', '2019-07-16', 'Gem', 'p', '2019-07-16', 'Rose', 'p', '2019-07-16', 'orientation'),
(451, 'try', '9503235835', 'BSU-Malvar', 'BS Education', 'Human Resources', 'Associate', '500', '26', '12', '12', '2', 'P', '2019-07-01', '', '', '', '', 'For Requirements', '', 'ewan ko sau', 'Divine', 'p', '2019-07-20', 'Gem', 'f', '2019-07-19', 'Rose', 'Accepted', '2019-07-19', ''),
(452, 'trymu', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '0000-00-00', '', ' ', '0000-00-00', '', ' ', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `DepartmentCode` int(11) NOT NULL,
  `Department` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`DepartmentCode`, `Department`) VALUES
(1, 'Human Resources'),
(2, 'Production'),
(3, 'Production Management'),
(4, 'Material Procurement'),
(5, 'Production Engineering'),
(6, 'Equipment'),
(7, 'Production Design Center'),
(8, 'Information Technology'),
(9, 'Quality Assurance'),
(10, 'NF/Kaizen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deployedlist`
--

CREATE TABLE `tbl_deployedlist` (
  `list_id` int(1) NOT NULL,
  `control_number` varchar(15) DEFAULT NULL,
  `department_section` varchar(25) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `names` varchar(100) DEFAULT NULL,
  `date_deployed` date DEFAULT NULL,
  `batch_no` varchar(15) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_deployedlist`
--

INSERT INTO `tbl_deployedlist` (`list_id`, `control_number`, `department_section`, `position`, `status`, `names`, `date_deployed`, `batch_no`, `remarks`) VALUES
(1, '19-001', 'Equipment - Initial', 'Associate', 'Contractual', 'Olarte, Jaime L.', '2019-03-13', 'B257', ''),
(2, '19-001', 'Equipment - Initial', 'Associate', 'Contractual', 'Sinapilo, Neil Kevin', '2019-03-13', 'B257', ''),
(3, '19-001', 'Equipment - Initial', 'Associate', 'Contractual', 'Madlangbayan, Jerick', '2019-03-13', 'B257', ''),
(4, '19-001', 'Equipment - Initial', 'Associate', 'Contractual', 'Aranda, Adrian M.', '2019-03-27', 'B259', ''),
(5, '19-001', 'Equipment - Initial', 'Associate', 'Contractual', 'Valles, Ricky', '2019-03-27', 'B259', ''),
(6, '19-001', 'Equipment - Initial', 'Associate', 'Contractual', 'Vinas, Raffy D.', '2019-04-03', 'B260', ''),
(7, '19-007', 'Production', 'Staff', 'Probationary', 'romnick', '2019-07-18', 'B169', ''),
(8, '19-005', 'Production', 'Associate', 'Contractual', 'cardo dalisay', '2019-07-22', 'B169', ''),
(9, '19-005', 'Production', 'Associate', 'Contractual', 'cardo dalisay', '2019-07-22', 'B169', ''),
(10, '19-005', 'Production', 'Associate', 'Contractual', 'Alfonso, Romnick ', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interviewresult`
--

CREATE TABLE `tbl_interviewresult` (
  `listId` int(11) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `applied_position` varchar(55) NOT NULL,
  `initial_interviewer` varchar(55) NOT NULL,
  `initial_result` varchar(25) NOT NULL,
  `final_Department` varchar(50) NOT NULL,
  `final_interviewer` varchar(55) NOT NULL,
  `final_result` varchar(10) NOT NULL,
  `jobOffer_interviewer` varchar(55) NOT NULL,
  `jobOffer_accept` varchar(25) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `initial_date` date NOT NULL,
  `final_date` date NOT NULL,
  `jobOffer_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_interviewresult`
--

INSERT INTO `tbl_interviewresult` (`listId`, `applicant_name`, `applied_position`, `initial_interviewer`, `initial_result`, `final_Department`, `final_interviewer`, `final_result`, `jobOffer_interviewer`, `jobOffer_accept`, `remarks`, `initial_date`, `final_date`, `jobOffer_date`) VALUES
(1, 'Alfonso, Romnick', 'Jr. Staff', 'Divine', 'p', 'IT', 'Gem', 'p', 'Rose', 'p', 'for requirements', '2019-05-24', '2019-05-25', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manpowerrequest`
--

CREATE TABLE `tbl_manpowerrequest` (
  `list_Id` int(2) NOT NULL,
  `control_number` varchar(10) DEFAULT NULL,
  `date_request` date DEFAULT NULL,
  `date_received_by_recruitment` date DEFAULT NULL,
  `requesting_department` varchar(19) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `contract_status` varchar(25) DEFAULT NULL,
  `request_date_of_deployment` date DEFAULT NULL,
  `No_of_manpower_request` int(3) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manpowerrequest`
--

INSERT INTO `tbl_manpowerrequest` (`list_Id`, `control_number`, `date_request`, `date_received_by_recruitment`, `requesting_department`, `position`, `contract_status`, `request_date_of_deployment`, `No_of_manpower_request`, `remarks`) VALUES
(1, '19-001', '2019-01-18', '2001-04-19', 'Equipment - Initial', 'Associate', 'Contractual', '2002-01-19', 6, ''),
(4, '19-005', '2019-01-18', '2019-01-19', 'Production', 'Associate', 'Contractual', '2001-09-19', 300, ''),
(5, '19-006', '2019-01-19', '2019-01-19', 'Production', 'Associate', 'Contractual', '0000-00-00', 300, ''),
(6, '19-007', '2019-01-19', '2019-01-19', 'Production', 'Staff', 'Probationary', '0000-00-00', 1, ''),
(7, '19-011', '2019-01-19', '2019-01-19', 'MPD - MM', 'Associate', 'Contractual', '2002-11-19', 26, ''),
(8, '19-012', '2019-07-26', '2019-07-20', 'NF/Kaizen', 'Associate', 'Probationary', '2019-07-09', 1, 'B248 / Jan 16, 2019'),
(9, '19-013', '2019-07-19', '2019-07-19', 'Production', 'Jr Staff', 'Contractual', '2019-07-19', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `list_id` int(11) NOT NULL,
  `id_number` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`list_id`, `id_number`, `name`, `position`, `department`, `username`, `password`) VALUES
(1, '19-05073', 'Admin', 'Admin', 'IT', 'admin', 'admin'),
(2, '00-00-00', 'user1', 'user', 'IT', 'user', 'user'),
(6, '19-05072', 'Romnick Alfonso', 'Staff', 'Information technology', 'creator', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  ADD PRIMARY KEY (`listId`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`DepartmentCode`);

--
-- Indexes for table `tbl_deployedlist`
--
ALTER TABLE `tbl_deployedlist`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `tbl_interviewresult`
--
ALTER TABLE `tbl_interviewresult`
  ADD PRIMARY KEY (`listId`);

--
-- Indexes for table `tbl_manpowerrequest`
--
ALTER TABLE `tbl_manpowerrequest`
  ADD PRIMARY KEY (`list_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`list_id`),
  ADD UNIQUE KEY `id` (`id_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  MODIFY `listId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `DepartmentCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_deployedlist`
--
ALTER TABLE `tbl_deployedlist`
  MODIFY `list_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_interviewresult`
--
ALTER TABLE `tbl_interviewresult`
  MODIFY `listId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_manpowerrequest`
--
ALTER TABLE `tbl_manpowerrequest`
  MODIFY `list_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
