-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tortoise_conservation_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `breedingprograms`
--

CREATE TABLE `breedingprograms` (
  `p_ID` varchar(100) NOT NULL,
  `maitingPairs` varchar(100) NOT NULL,
  `nestingDate` date NOT NULL,
  `eggCount` varchar(100) NOT NULL,
  `incubationDate` varchar(100) NOT NULL,
  `successRate` varchar(100) NOT NULL,
  `observations` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breedingprograms`
--

INSERT INTO `breedingprograms` (`p_ID`, `maitingPairs`, `nestingDate`, `eggCount`, `incubationDate`, `successRate`, `observations`) VALUES
('BP1', 'T1,T2', '2026-01-25', '5', '95', '80%', '1 egg failed to hatch'),
('BP2', 'T3,T2', '2026-02-25', '12', '110', '70%', 'Some eggs infertile'),
('BP3', 'T5,T1', '2026-01-20', '6', '85', '66.7%', 'Humidity issue affected eggs');

-- --------------------------------------------------------

--
-- Table structure for table `econditions`
--

CREATE TABLE `econditions` (
  `recordID` varchar(100) NOT NULL,
  `enclosureID` varchar(100) NOT NULL,
  `temperature` varchar(100) NOT NULL,
  `humidity` varchar(100) NOT NULL,
  `waterQuality` varchar(100) NOT NULL,
  `record_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `econditions`
--

INSERT INTO `econditions` (`recordID`, `enclosureID`, `temperature`, `humidity`, `waterQuality`, `record_Date`) VALUES
('Rec1', 'E1', '30°', '45%', 'Clear', '2026-03-23'),
('Rec2', 'E2', '32°', '40%', 'Dirty', '2026-03-24'),
('Rec3', 'E3', '28°', '65%', 'Clear', '2026-03-24'),
('Rec4', 'E4', '29°', '50%', 'Dirty', '2026-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `enclosuredetails`
--

CREATE TABLE `enclosuredetails` (
  `enclosureID` varchar(100) NOT NULL,
  `e_size` varchar(100) NOT NULL,
  `habitatType` varchar(100) NOT NULL,
  `currentOccupants` varchar(1000) NOT NULL,
  `maintenanceSchedule` varchar(1000) NOT NULL,
  `environmentalParameters` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enclosuredetails`
--

INSERT INTO `enclosuredetails` (`enclosureID`, `e_size`, `habitatType`, `currentOccupants`, `maintenanceSchedule`, `environmentalParameters`) VALUES
('E1', '10*8 m', 'Dry grassland', '2 Sulcata tortoises', 'Cleaned weekly, inspected daily', 'Temp 30°C, Humidity 40%, UVB lighting'),
('E2', '12m * 10m', 'Tropical', '3 Aldabra tortoises', 'Cleaned twice weekly', 'Temp 30°C, Humidity 60%, shaded areas'),
('E3', '6m * 5m', 'Indoor controlled', '1 Indian Star tortoise', 'Cleaned every 3 days', 'Temp 30°C, Humidity 55%, UVB + heat lamp'),
('E4', '9m * 7m', 'Woodland', '2 Leopard tortoises', 'Cleaned weekly', 'Temp 31°C, Humidity 60%'),
('E5', '11m * 9m', 'Grassland', '3 Sulcata tortoises', 'Cleaned weekly', 'Temp 29°C, Humidity 45%');

-- --------------------------------------------------------

--
-- Table structure for table `feedingtimes`
--

CREATE TABLE `feedingtimes` (
  `f_ID` varchar(100) NOT NULL,
  `t_ID` varchar(4) NOT NULL,
  `foodType` varchar(500) NOT NULL,
  `feedingTime` time NOT NULL,
  `quantity` varchar(1000) NOT NULL,
  `dietNotes` varchar(1000) NOT NULL,
  `stock` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedingtimes`
--

INSERT INTO `feedingtimes` (`f_ID`, `t_ID`, `foodType`, `feedingTime`, `quantity`, `dietNotes`, `stock`) VALUES
('F1', 'T1', 'Leafy Green', '08:00:00', '20g', 'High fiber diet', '5g'),
('F2', 'T2', 'Vegetables', '09:30:00', '150g', 'Low protein required', '3g'),
('F3', 'T4', 'Fruits', '08:30:00', '100g', 'Occasional Fruit Intake', '2.5kg'),
('F4', 'T3', 'Leafy Greens', '07:45:00', '180g', 'Reduce Quantity', '4.8kg');

-- --------------------------------------------------------

--
-- Table structure for table `h_assessment`
--

CREATE TABLE `h_assessment` (
  `assessmentID` varchar(100) NOT NULL,
  `t_ID` varchar(4) NOT NULL,
  `assessmentDate` date NOT NULL,
  `healthStatus` varchar(100) NOT NULL,
  `Ttreatment` varchar(1000) NOT NULL,
  `vaccination` varchar(1000) NOT NULL,
  `illness_Injury` varchar(1000) NOT NULL,
  `carePlanning` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `h_assessment`
--

INSERT INTO `h_assessment` (`assessmentID`, `t_ID`, `assessmentDate`, `healthStatus`, `Ttreatment`, `vaccination`, `illness_Injury`, `carePlanning`) VALUES
('A1', 'T1', '2026-01-20', 'Healthy', 'None', 'Vitamin', 'None', 'Active and normal appetite'),
('A2', 'T2', '2026-01-20', 'Recovering', 'Antibiotics', 'None', 'Shell infection', 'Improving slowly');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(100) NOT NULL,
  `SatffName` varchar(500) NOT NULL,
  `Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `SatffName`, `Role`) VALUES
('S001', 'Marie', 'Caretaker'),
('S002', 'Rosa', 'Caretaker'),
('S003', 'Amelia', 'Veterinarian'),
('S004', 'Elizabeth', 'Veterinarian'),
('S005', 'Rosalind', 'Caretaker'),
('S006', 'Jennifer', 'Caretaker'),
('S007', 'Anne', 'Veterinarian');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TaskID` varchar(100) NOT NULL,
  `StaffID` varchar(100) NOT NULL,
  `Task` varchar(1000) NOT NULL,
  `AssignedDate` date NOT NULL,
  `TaskStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`TaskID`, `StaffID`, `Task`, `AssignedDate`, `TaskStatus`) VALUES
('Task1', 'S005', 'Assign enclosures to new tortoises', '2026-03-24', 'Completed'),
('Task4', 'S001', 'Update new tortoise records', '2026-03-24', 'Pending'),
('Task6', 'S002', 'Assess new tortoises', '2026-03-25', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `tortoiserecords`
--

CREATE TABLE `tortoiserecords` (
  `t_ID` varchar(4) NOT NULL,
  `species` varchar(40) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `healthStatus` varchar(100) NOT NULL,
  `history` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tortoiserecords`
--

INSERT INTO `tortoiserecords` (`t_ID`, `species`, `age`, `gender`, `healthStatus`, `history`) VALUES
('T1', 'Indian', 20, 'Female', 'Healthy', 'None'),
('T2', 'Galápagos Giant', 25, 'Female', 'Healthy', 'Regular diet, routine checkup'),
('T3', 'Indian Star', 15, 'Female', 'Recovered dehydration', 'Increased hydration, monitored'),
('T4', 'Leopard', 36, 'Female', 'Overweight', 'Diet controlled'),
('T5', 'Sulcata', 24, 'Female', 'Healthy', 'Balanced diet, UVB exposure'),
('T6', 'Sulcata', 20, 'Female', 'Healthy', 'Balanced diet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breedingprograms`
--
ALTER TABLE `breedingprograms`
  ADD PRIMARY KEY (`p_ID`);

--
-- Indexes for table `econditions`
--
ALTER TABLE `econditions`
  ADD PRIMARY KEY (`recordID`),
  ADD KEY `econditions_enclosures` (`enclosureID`);

--
-- Indexes for table `enclosuredetails`
--
ALTER TABLE `enclosuredetails`
  ADD PRIMARY KEY (`enclosureID`);

--
-- Indexes for table `feedingtimes`
--
ALTER TABLE `feedingtimes`
  ADD PRIMARY KEY (`f_ID`),
  ADD KEY `feedingtimes_tortoise` (`t_ID`);

--
-- Indexes for table `h_assessment`
--
ALTER TABLE `h_assessment`
  ADD PRIMARY KEY (`assessmentID`),
  ADD KEY `assessment_tortoise` (`t_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TaskID`),
  ADD KEY `staff_task` (`StaffID`);

--
-- Indexes for table `tortoiserecords`
--
ALTER TABLE `tortoiserecords`
  ADD PRIMARY KEY (`t_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `econditions`
--
ALTER TABLE `econditions`
  ADD CONSTRAINT `econditions_enclosures` FOREIGN KEY (`enclosureID`) REFERENCES `enclosuredetails` (`enclosureID`);

--
-- Constraints for table `feedingtimes`
--
ALTER TABLE `feedingtimes`
  ADD CONSTRAINT `feedingtimes_tortoise` FOREIGN KEY (`t_ID`) REFERENCES `tortoiserecords` (`t_ID`);

--
-- Constraints for table `h_assessment`
--
ALTER TABLE `h_assessment`
  ADD CONSTRAINT `assessment_tortoise` FOREIGN KEY (`t_ID`) REFERENCES `tortoiserecords` (`t_ID`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `staff_task` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
