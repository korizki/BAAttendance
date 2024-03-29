-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2023 at 12:15 PM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukitasa_apotek`
--

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

--
-- Dumping data for table `t_main_power_plan`
--

INSERT INTO `t_main_power_plan` (`ID`, `DATE`, `SHIFT`, `OPT_BELAZ_2`, `OPT_BELAZ_3`, `OPT_SHOVEL_2`, `OPT_SHOVEL_3`, `OPT_DZ_2`, `OPT_DZ_3`, `OPT_GD_2`, `OPT_GD_3`, `PM_BELAZ_2`, `PM_BELAZ_3`, `PM_SHOVEL_2`, `PM_SHOVEL_3`, `FOREMAN_2`, `FOREMAN_3`) VALUES
('1', '2022-06-01', 1, 22, 26, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 3, 2),
('10', '2022-06-05', 1, 23, 22, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('100', '2022-07-20', 2, 19, 30, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 3, 2),
('101', '2022-07-21', 1, 18, 34, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('102', '2022-07-21', 2, 17, 36, 4, 5, 1, 4, 2, 1, 2, 2, 3, 4, 2, 2),
('103', '2022-07-22', 1, 18, 34, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('104', '2022-07-22', 2, 18, 36, 4, 5, 1, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('105', '2022-07-23', 1, 20, 30, 3, 6, 2, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('106', '2022-07-23', 2, 18, 32, 4, 4, 0, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('107', '2022-07-24', 1, 22, 27, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('108', '2022-07-24', 2, 18, 34, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('109', '2022-07-25', 1, 19, 30, 3, 5, 1, 4, 1, 2, 2, 2, 3, 4, 3, 2),
('11', '2022-06-06', 1, 22, 19, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('110', '2022-07-25', 2, 18, 34, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('111', '2022-07-26', 1, 17, 37, 4, 5, 1, 5, 2, 1, 2, 2, 3, 4, 3, 2),
('112', '2022-07-26', 2, 20, 29, 3, 6, 2, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('113', '2022-07-27', 1, 18, 36, 4, 5, 0, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('114', '2022-07-27', 2, 22, 27, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('115', '2022-07-28', 1, 18, 32, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('116', '2022-07-28', 2, 19, 31, 3, 5, 1, 4, 1, 2, 2, 2, 3, 4, 3, 2),
('117', '2022-08-01', 1, 22, 26, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 3, 2),
('118', '2022-08-01', 2, 23, 20, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('119', '2022-08-02', 1, 25, 29, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('12', '2022-06-06', 2, 23, 25, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('120', '2022-08-02', 2, 21, 23, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('121', '2022-08-03', 1, 23, 27, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('122', '2022-08-03', 2, 22, 26, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('123', '2022-08-04', 1, 23, 25, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('124', '2022-08-04', 2, 23, 29, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 3, 2),
('125', '2022-08-05', 2, 25, 27, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('126', '2022-08-05', 1, 23, 22, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('127', '2022-08-06', 1, 22, 19, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('128', '2022-08-06', 2, 23, 25, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('129', '2022-08-07', 1, 21, 25, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('13', '2022-06-07', 1, 21, 25, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('130', '2022-08-07', 2, 23, 25, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('131', '2022-08-08', 1, 23, 29, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('132', '2022-08-08', 2, 22, 21, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('133', '2022-08-09', 1, 23, 27, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('134', '2022-08-09', 2, 22, 21, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('135', '2022-08-10', 1, 25, 25, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('136', '2022-08-10', 2, 22, 28, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('137', '2022-08-11', 1, 23, 25, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('138', '2022-08-11', 2, 23, 27, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('139', '2022-08-12', 1, 22, 24, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('14', '2022-06-07', 2, 23, 25, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('140', '2022-08-12', 2, 23, 25, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('141', '2022-08-13', 1, 22, 23, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('142', '2022-08-13', 2, 25, 25, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('143', '2022-08-14', 1, 23, 24, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('144', '2022-08-14', 2, 22, 24, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('145', '2022-08-15', 1, 22, 26, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('146', '2022-08-15', 2, 22, 26, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('147', '2022-08-16', 1, 23, 25, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('148', '2022-08-16', 2, 23, 26, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('149', '2022-08-17', 1, 23, 25, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('15', '2022-06-08', 1, 23, 29, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('150', '2022-08-17', 2, 23, 22, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('151', '2022-08-18', 1, 24, 24, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('152', '2022-08-18', 2, 22, 24, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('153', '2022-08-19', 1, 22, 26, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('154', '2022-08-19', 2, 23, 25, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('155', '2022-08-20', 1, 23, 29, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('156', '2022-08-20', 2, 22, 24, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('157', '2022-08-21', 1, 23, 24, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('158', '2022-08-21', 2, 24, 26, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('159', '2022-08-22', 1, 23, 20, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('16', '2022-06-08', 2, 22, 21, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('160', '2022-08-22', 2, 23, 29, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('161', '2022-08-23', 1, 22, 24, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('162', '2022-08-23', 2, 23, 27, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('163', '2022-08-24', 1, 22, 24, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('164', '2022-08-24', 2, 23, 22, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('165', '2022-08-25', 1, 22, 26, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('166', '2022-08-25', 2, 23, 20, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('167', '2022-08-26', 1, 25, 29, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('168', '2022-08-26', 2, 21, 23, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('169', '2022-08-27', 1, 23, 27, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('17', '2022-06-09', 1, 23, 27, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('170', '2022-08-27', 2, 22, 26, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('171', '2022-08-28', 1, 23, 25, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('172', '2022-08-28', 2, 23, 29, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('173', '2022-08-29', 1, 23, 22, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('174', '2022-08-29', 2, 25, 27, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('175', '2022-08-30', 1, 22, 19, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('176', '2022-08-30', 2, 23, 25, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('18', '2022-06-09', 2, 22, 21, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('19', '2022-06-10', 1, 25, 25, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('2', '2022-06-01', 2, 23, 20, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('20', '2022-06-10', 2, 22, 28, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('21', '2022-06-11', 1, 23, 25, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('22', '2022-06-11', 2, 23, 27, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('23', '2022-06-12', 1, 22, 24, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('24', '2022-06-12', 2, 23, 25, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('25', '2022-06-13', 1, 22, 23, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('26', '2022-06-13', 2, 25, 25, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('27', '2022-06-14', 1, 23, 24, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('28', '2022-06-14', 2, 22, 24, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('29', '2022-06-15', 1, 22, 26, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('3', '2022-06-02', 1, 25, 29, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('30', '2022-06-15', 2, 22, 26, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('31', '2022-06-16', 1, 23, 25, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('32', '2022-06-16', 2, 23, 26, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('33', '2022-06-17', 1, 23, 25, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('34', '2022-06-17', 2, 23, 22, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('35', '2022-06-18', 1, 24, 24, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('36', '2022-06-18', 2, 22, 24, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('37', '2022-06-19', 1, 22, 26, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('38', '2022-06-19', 2, 23, 25, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('39', '2022-06-20', 1, 23, 29, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('4', '2022-06-02', 2, 21, 23, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('40', '2022-06-20', 2, 22, 24, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('41', '2022-06-21', 1, 23, 24, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('42', '2022-06-21', 2, 24, 26, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('43', '2022-06-22', 1, 23, 20, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('44', '2022-06-22', 2, 23, 29, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('45', '2022-06-23', 1, 22, 24, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('46', '2022-06-23', 2, 23, 27, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('47', '2022-06-24', 1, 22, 24, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('48', '2022-06-24', 2, 23, 22, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('49', '2022-06-25', 1, 22, 26, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('5', '2022-06-03', 1, 23, 27, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('50', '2022-06-25', 2, 23, 20, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('51', '2022-06-26', 1, 25, 29, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('52', '2022-06-26', 2, 21, 23, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('53', '2022-06-27', 1, 23, 27, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('54', '2022-06-27', 2, 22, 26, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('55', '2022-06-28', 1, 23, 25, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('56', '2022-06-28', 2, 23, 29, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('57', '2022-06-29', 1, 23, 22, 4, 5, 1, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('58', '2022-06-29', 2, 25, 27, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('59', '2022-06-30', 1, 22, 19, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('6', '2022-06-03', 2, 22, 26, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('60', '2022-06-30', 2, 23, 25, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('61', '2022-07-01', 1, 18, 30, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('62', '2022-07-01', 2, 18, 34, 4, 5, 1, 3, 1, 1, 2, 2, 3, 3, 3, 2),
('63', '2022-07-02', 1, 16, 37, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('64', '2022-07-02', 2, 20, 29, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('65', '2022-07-03', 1, 18, 36, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('66', '2022-07-03', 2, 22, 27, 4, 5, 1, 3, 1, 1, 2, 2, 3, 5, 2, 2),
('67', '2022-07-04', 1, 18, 32, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('68', '2022-07-04', 2, 19, 31, 3, 5, 2, 2, 1, 2, 2, 2, 3, 4, 2, 2),
('69', '2022-07-05', 1, 18, 34, 4, 4, 1, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('7', '2022-06-04', 1, 23, 25, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('70', '2022-07-05', 2, 17, 37, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('71', '2022-07-06', 1, 18, 33, 4, 5, 0, 5, 1, 1, 2, 2, 3, 4, 3, 2),
('72', '2022-07-06', 2, 18, 36, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 2, 2),
('73', '2022-07-07', 1, 20, 29, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('74', '2022-07-07', 2, 18, 32, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('75', '2022-07-08', 1, 22, 28, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('76', '2022-07-08', 2, 18, 33, 4, 4, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('77', '2022-07-09', 1, 19, 31, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('78', '2022-07-09', 2, 18, 33, 4, 5, 0, 5, 1, 1, 2, 2, 3, 4, 3, 2),
('79', '2022-07-10', 1, 17, 37, 4, 5, 2, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('8', '2022-06-04', 2, 23, 29, 4, 5, 1, 3, 2, 1, 2, 2, 3, 4, 3, 2),
('80', '2022-07-10', 2, 20, 30, 3, 6, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('81', '2022-07-11', 1, 18, 36, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('82', '2022-07-11', 2, 22, 28, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('83', '2022-07-12', 1, 18, 31, 4, 4, 1, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('84', '2022-07-12', 2, 19, 31, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 2, 2),
('85', '2022-07-13', 1, 18, 33, 4, 4, 0, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('86', '2022-07-13', 2, 17, 37, 4, 5, 2, 3, 2, 1, 2, 2, 3, 4, 2, 2),
('87', '2022-07-14', 1, 18, 34, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('88', '2022-07-14', 2, 18, 35, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('89', '2022-07-15', 1, 20, 30, 3, 6, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('9', '2022-06-05', 2, 25, 27, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 3, 2),
('90', '2022-07-15', 2, 18, 31, 4, 4, 1, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('91', '2022-07-16', 1, 22, 28, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('92', '2022-07-16', 2, 18, 34, 4, 4, 0, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('93', '2022-07-17', 1, 19, 31, 3, 5, 2, 3, 1, 2, 2, 2, 3, 4, 3, 2),
('94', '2022-07-17', 2, 18, 34, 4, 5, 1, 4, 1, 1, 2, 2, 3, 4, 2, 2),
('95', '2022-07-18', 1, 17, 36, 4, 5, 1, 4, 2, 1, 2, 2, 3, 4, 2, 2),
('96', '2022-07-18', 2, 20, 30, 3, 6, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('97', '2022-07-19', 2, 22, 28, 4, 5, 2, 3, 1, 1, 2, 2, 3, 4, 3, 2),
('98', '2022-07-19', 1, 18, 35, 4, 5, 1, 5, 1, 1, 2, 2, 3, 4, 2, 2),
('99', '2022-07-20', 1, 18, 32, 4, 4, 0, 5, 1, 1, 2, 2, 3, 4, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_main_power_plan`
--
ALTER TABLE `t_main_power_plan`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
