-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2026 at 09:34 AM
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
-- Database: `crud_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `airQuality`
--

CREATE TABLE `tortoiseRecords` (
  `t_ID` varchar(4) NOT NULL,
  `species` varchar(40) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `healthStatus` varchar(100) NOT NULL,
  `history` varchar(200) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airQuality`
--

INSERT INTO `tortoiseRecords` (`t_ID`, `species`, `age`, `gender`, `healthStatus`, `history`) VALUES
('T1', 'Aldabra Giant', 20, 'Female', 'Minor injury', 'Wound treated'),
('T2', 'Galápagos Giant', 25, 'Female', 'Healthy', 'Regular diet, routine checkup'),
('T3', 'Indian Star', 15, 'Female', 'Recovered dehydration', 'Increased hydration, monitored'),
('T4', 'Leopard', 36, 'Female', 'Overweight', 'Diet controlled'),
('T5', 'Sulcata', 24, 'Female', 'Healthy', 'Balanced diet, UVB exposure')
;

-- --------------------------------------------------------

--
-- Table structure for table `emergencyResponse`
--

CREATE TABLE `enclosures` (
  `EnclosureID` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `HabitatType` varchar(100) NOT NULL,
  `CurrentOccupants` varchar(1000) NOT NULL,
  `MaintenanceShedule` varchar(1000) NOT NULL,
  `EnvironmentalParameters` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergencyResponse`
--

INSERT INTO `enclosures` (`EnclosureID`, `Size`, `HabitatType`, `CurrentOccupants`, `MaintenanceShedule`, `EnvironmentalParameters`) VALUES
('Enclosure A', '10*8 m', 'Dry grassland','2 Sulcata tortoises','Cleaned weekly, inspected daily', 'Temp 30°C, Humidity 40%, UVB lighting'),
('Enclosure B',	'12m * 10m', 'Tropical', '3 Aldabra tortoises','Cleaned twice weekly',	'Temp 30°C, Humidity 60%, shaded areas'),
('Enclosure C',	'6m * 5m',	'Indoor controlled',	'1 Indian Star tortoise',	'Cleaned every 3 days',	'Temp 30°C, Humidity 55%, UVB + heat lamp'),
('Enclosure D',	'9m * 7m' ,	'Woodland','2 Leopard tortoises','Cleaned weekly',	'Temp 31°C, Humidity 60%'),
('Enclosure E',	'11m * 9m',	'Grassland','3 Sulcata tortoises'	,'Cleaned weekly'	,'Temp 29°C, Humidity 45%')
;

-- --------------------------------------------------------

--
-- Table structure for table `energyMonitoring`
--

CREATE TABLE `BreedingProgram` (
  `Program_ID` varchar(10) NOT NULL,
  `MaitingPairs` varchar(10) NOT NULL,
  `NestingDate` Date NOT NULL,
  `EggCount` varchar(10) NOT NULL,
  `IncubationDate` varchar(10) NOT NULL,
  `SuccessRate` varchar(10) NOT NULL,
  `Observations` varchar(50) NOT NULL
); ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `BreedingProgram` (`Program_ID`, `MaitingPairs`, `NestingDate`, `EggCount`, `IncubationDate`, `SuccessRate`, `Observations`) VALUES
('BP001', 'T1,T2', '2026-01-25','5','95', '80%', '1 egg failed to hatch'),
('BP002','T3,T2', '2026-02-25', '12','110',	'70%','Some eggs infertile'),
('BP003','T5,T1', '2026-01-20', '6','85','66.7%','Humidity issue affected eggs')
;
-- --------------------------------------------------------

--
-- Table structure for table `traffic`
--

CREATE TABLE `LogFeedingTimes` (
  `FeedingID` varchar(100) NOT NULL,
  `t_ID` varchar(4) NOT NULL,
  `FoodType` varchar(500) NOT NULL,
  `FeedingTime` Time NOT NULL,
  `Quantity` varchar(1000) NOT NULL,
  `DietNotes` varchar(1000) NOT NULL,
  `Stock` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traffic`
--

INSERT INTO `LogFeedingTimes` (`FeedingID`, `t_ID`, `FoodType`, `Quantity`, `DietNotes`, `Stock`) VALUES
('F001','T1', 'Leafy Green','08:00','20g','High fiber diet','5g'),
('F002','T2', 'Vegetables', '09:30',	'150g'	,'Low protein required' ,'3g'),
('F003', 'T4' ,	'Fruits'	,'08:30',	'100g',	'Occasional Fruit Intake',	'2.5kg'),
('F004', 'T3' ,	'Leafy Greens' , '07:45', '180g' ,'Reduce Quantity','4.8kg');


CREATE TABLE `HealthAssessment` (
  `AssessmentID` varchar(100) NOT NULL,
  `t_ID` varchar(4) NOT NULL,
  `AssessmentDate` DATE NOT NULL,
  `HealthStatus` varchar(100) NOT NULL,
  `Treatment` varchar(1000) NOT NULL,
  `Vaccination` varchar(1000) NOT NULL,
  `Illness_Injury` varchar(1000) NOT NULL,
  `CarePlanning` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `HealthAssessment` (`AssessmentID`, `t_ID`, `AssessmentDate`, `HealthStatus`, `Treatment`, `Vaccination`,`Illness_Injury`,`CarePlanning`) VALUES
('A0001','T1','2026-01-20','Healthy',	'None'	,'Vitamin',	'None',	'Active and normal appetite'),
('A0002',	'T2',	'2026-01-20','Recovering','Antibiotics',	'None',	'Shell infection',	'Improving slowly')
;

CREATE TABLE `EnvironmentalConditions` (
  `RecordID` varchar(100) NOT NULL,
  `EncloserID` varchar(100) NOT NULL,
  `Temperature` varchar(10) NOT NULL,
  `Humidity` varchar(10) NOT NULL,
  `WaterQuality` varchar(10) NOT NULL,
  `Record_Date` Date NOT NULL,
);

INSERT INTO `EnvironmentalConditions`( `RecordID`, `EncloserID`,`Temperature`,`Humidity`,`WaterQuality`,`Record_Date`) VALUES
('Rec1','Encloser A', '30°', '45%','Clear','2026-03-23'),
('Rec2','Encloser B', '32°', '40%','Dirty','2026-03-24'),
('Rec3','Encloser D', '28°', '65%','Clear','2026-03-24'),
('Rec4','Encloser E', '29°', '50%','Dirty','2026-03-22')
;


CREATE TABLE `Staff` (
  `StaffID` varchar(100) NOT NULL,
  `SatffName` varchar(500) NOT NULL,
  `Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Staff` (`StaffID`, `SatffName`, `Role`) VALUES
('S001','Marie','Caretaker'),
('S002','Rosa','Caretaker'),
('S003','Amelia','Veterinarian'),
('S004','Elizabeth','Veterinarian'),
('S005','Rosalind','Caretaker'),
('S006','Jennifer','Caretaker'),
('S001','Anne','Veterinarian') ;

CREATE TABLE `Task` (
  `TaskID` varchar(100) NOT NULL,
  `StaffID` varchar(100) NOT NULL,
  `Task` varchar(1000) NOT NULL,
  `AssignedDate` DATE NOT NULL,
  `TaskStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Task` (`TaskID`, `StaffID`, `Task`, `AssignedDate`, `TaskStatus`) VALUES
('Task1',	'S005',	'Assign enclosures to new tortoises'	,'2026-03-24',	'Completed'),
('Task4',	'S001' ,	'Update new tortoise records',	'2026-03-24', 'Pending'),
('Task6',	'S002',	'Assess new tortoises',	'2026-03-25',	'Completed'),
('Task8',	'S004',	'Update breeding programs',	'2026-03-26'	,'Completed')
;



--
-- Indexes for dumped tables
--

--
-- Indexes for table `airQuality`
--
ALTER TABLE `tortoiseRecords`
  ADD PRIMARY KEY (`t_ID`);

--
-- Indexes for table `emergencyResponse`
--
ALTER TABLE `enclosures`
  ADD PRIMARY KEY (`EnclosureID`);

--
-- Indexes for table `energyMonitoring`
--
ALTER TABLE `BreedingProgram`
  ADD PRIMARY KEY (`Program_ID`);

--
-- Indexes for table `traffic`
--
ALTER TABLE `LogFeedingTimes`
  ADD PRIMARY KEY (`FeedingID`);

ALTER TABLE `HealthAssessment`
  ADD PRIMARY KEY (`AssessmentID`);

ALTER TABLE `EnvironmentalConditions`
  ADD PRIMARY KEY (`RecordID`);

ALTER TABLE `Staff`
  ADD PRIMARY KEY (`StaffID`);

ALTER TABLE `Task`
  ADD PRIMARY KEY (`TaskID`);
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;