-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2016 at 11:14 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jibas`
--
CREATE DATABASE `jibas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jibas`;

-- --------------------------------------------------------

--
-- Table structure for table `msmenuaccess`
--

CREATE TABLE IF NOT EXISTS `msmenuaccess` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `iGroupAccess` int(11) DEFAULT NULL,
  `iMenuDetail` int(11) DEFAULT NULL,
  `cStatus` varchar(2) DEFAULT NULL,
  `cCreated` varchar(50) DEFAULT NULL,
  `dCreated` datetime DEFAULT NULL,
  `cLastUpdated` varchar(50) DEFAULT NULL,
  `dLastUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `msmenuaccess`
--


-- --------------------------------------------------------

--
-- Table structure for table `msmenudetail`
--

CREATE TABLE IF NOT EXISTS `msmenudetail` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `iMenuHeader` int(11) DEFAULT NULL,
  `cSubMenu` varchar(50) DEFAULT NULL,
  `cUrl` text,
  `cStatus` varchar(2) DEFAULT NULL,
  `cCreated` varchar(50) DEFAULT NULL,
  `dCreated` datetime DEFAULT NULL,
  `cLastUpdated` varchar(50) DEFAULT NULL,
  `dLastUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `msmenudetail`
--


-- --------------------------------------------------------

--
-- Table structure for table `msmenuheader`
--

CREATE TABLE IF NOT EXISTS `msmenuheader` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `cMenuHeader` varchar(50) DEFAULT NULL,
  `cStatus` varchar(2) DEFAULT NULL,
  `cCreated` varchar(50) DEFAULT NULL,
  `dCreated` datetime DEFAULT NULL,
  `cLastUpdated` varchar(50) DEFAULT NULL,
  `dLastUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `msmenuheader`
--


-- --------------------------------------------------------

--
-- Table structure for table `mstekniknilai`
--

CREATE TABLE IF NOT EXISTS `mstekniknilai` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `cTahunAjaran` varchar(20) DEFAULT NULL,
  `iTingkat` int(11) DEFAULT NULL,
  `cTeknik` varchar(50) DEFAULT NULL,
  `cKeterangan` text,
  `cStatus` varchar(2) DEFAULT NULL,
  `cCreated` varchar(50) DEFAULT NULL,
  `dCreated` datetime DEFAULT NULL,
  `cLastUpdated` varchar(50) DEFAULT NULL,
  `dLastUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mstekniknilai`
--


-- --------------------------------------------------------

--
-- Table structure for table `mstema`
--

CREATE TABLE IF NOT EXISTS `mstema` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `cTahunAjaran` varchar(20) DEFAULT NULL,
  `iTingkat` int(11) DEFAULT NULL,
  `cSemester` varchar(5) DEFAULT NULL,
  `iMinggu` int(11) DEFAULT NULL,
  `dMulaiTanggal` date DEFAULT NULL,
  `dSampaiTanggal` date DEFAULT NULL,
  `cTema` varchar(50) DEFAULT NULL,
  `cKeterangan` text,
  `cStatus` varchar(2) DEFAULT NULL,
  `cCreated` varchar(50) DEFAULT NULL,
  `dCreated` datetime DEFAULT NULL,
  `cLastUpdated` varchar(50) DEFAULT NULL,
  `dLastUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mstema`
--


-- --------------------------------------------------------

--
-- Table structure for table `trskhdt`
--

CREATE TABLE IF NOT EXISTS `trskhdt` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `iSKHHd` int(11) DEFAULT NULL,
  `cHasilBelajar` text,
  `cIndikator` text,
  `cBidangPengembangan` text,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trskhdt`
--


-- --------------------------------------------------------

--
-- Table structure for table `trskhhd`
--

CREATE TABLE IF NOT EXISTS `trskhhd` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `iTema` int(11) DEFAULT NULL,
  `iMataPelajaran` int(11) DEFAULT NULL,
  `cKeterangan` text,
  `cStatusApprove` varchar(2) DEFAULT NULL,
  `cCreated` varchar(50) DEFAULT NULL,
  `dCreated` datetime DEFAULT NULL,
  `cLastUpdated` varchar(50) DEFAULT NULL,
  `dLastUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trskhhd`
--


-- --------------------------------------------------------

--
-- Table structure for table `trskhtekniknilai`
--

CREATE TABLE IF NOT EXISTS `trskhtekniknilai` (
  `iRec` int(11) NOT NULL AUTO_INCREMENT,
  `iSKHDt` int(11) DEFAULT NULL,
  `iTeknikNilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`iRec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trskhtekniknilai`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
