-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 08:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptba_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_finger`
--

CREATE TABLE `t_finger` (
  `ID_FINGER` int(11) NOT NULL,
  `ID_PEKERJA` char(5) NOT NULL,
  `DTIME_ABSEN` datetime NOT NULL,
  `DATE_ABSEN` date NOT NULL,
  `STATUS` int(11) NOT NULL,
  `SHIFT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_main_power_plan`
--

CREATE TABLE `t_main_power_plan` (
  `ID` varchar(11) NOT NULL,
  `DATE` date NOT NULL,
  `SHIFT` int(11) NOT NULL,
  `OPT_BELAZ_2` int(11) NOT NULL,
  `OPT_BELAZ_3` int(11) NOT NULL,
  `OPT_SHOVEL_2` int(11) NOT NULL,
  `OPT_SHOVEL_3` int(11) NOT NULL,
  `OPT_DZ_2` int(11) NOT NULL,
  `OPT_DZ_3` int(11) NOT NULL,
  `OPT_GD_2` int(11) NOT NULL,
  `OPT_GD_3` int(11) NOT NULL,
  `PM_BELAZ_2` int(11) NOT NULL,
  `PM_BELAZ_3` int(11) NOT NULL,
  `PM_SHOVEL_2` int(11) NOT NULL,
  `PM_SHOVEL_3` int(11) NOT NULL,
  `FOREMAN_2` int(11) NOT NULL,
  `FOREMAN_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pekerja`
--

CREATE TABLE `t_pekerja` (
  `ID` char(5) NOT NULL,
  `NIP` varchar(40) NOT NULL,
  `NAMA` varchar(40) NOT NULL,
  `JABATAN` varchar(40) NOT NULL,
  `DEPT` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_finger`
--
ALTER TABLE `t_finger`
  ADD PRIMARY KEY (`ID_FINGER`);

--
-- Indexes for table `t_main_power_plan`
--
ALTER TABLE `t_main_power_plan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_pekerja`
--
ALTER TABLE `t_pekerja`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
