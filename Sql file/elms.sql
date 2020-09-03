-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2020 pada 15.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2020-05-20 03:24:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `DepartmentShortName`, `DepartmentCode`, `CreationDate`) VALUES
(5, 'Pembuatan Jalan dan gedung BKR', '15 januari 2020', '20 juni 2020', '2020-05-20 01:45:52'),
(6, 'Konstruksi apaaja', '12 Januari 2019', '16 januari 2020', '2020-05-22 15:47:41'),
(7, 'Konstruksi', '21 Mei 2020', '5 Juli 2020', '2020-05-23 08:01:01'),
(8, 'Bangun apaaja', '12 agust 2019', '19 agus 2019', '2020-05-23 08:19:11'),
(9, 'Konstruksi 1', '12 mei 2009', '19 mei 2010', '2020-05-25 12:55:24'),
(10, 'Pembangunan gedung ABc', '12 maret 2020', '20 juni 2020', '2020-05-27 10:08:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Address`, `City`, `Country`, `Phonenumber`, `Status`, `RegDate`) VALUES
(2, 'DEMP2132', 'User', 'tes', 'nisa@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780', 'Female', '19 oktober, 1998', 'Information Technology', 'bandung', 'bandung', 'INA', '9508320163', 1, '2017-11-10 13:40:02'),
(3, 'abc', 'nurhafidz', 'faizal', 'nurhafidzfaizal03@gmail.com', '$2y$10$T05vdwl9zwizK4lvfxmP7evZ8UfuD3CzEOLLRAPdvJyMHtTdi1vh6', 'Male', '2020-06-01', 'Pembuatan Jalan dan gedung BKR', 'jln pesantren VI', 'cimahi', 'Indonesia', '08782271062', 1, '2020-06-02 01:30:46'),
(16, 'abc', 'nurhafidz', 'asd', 'nuasasf@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Male', '2020-06-01', 'Pembuatan Jalan dan gedung BKR', 'sada', 'sada', 'Indonesia', '12421', 1, '2020-06-08 10:26:29'),
(17, 'asd', 'asd', 'asd', 'nuasasf@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Male', '2020-06-01', 'Pembuatan Jalan dan gedung BKR', 'sada', 'sada', 'Indonesia', '12421', 0, '2020-06-08 11:26:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblidentification`
--

CREATE TABLE `tblidentification` (
  `id` int(11) NOT NULL,
  `EmployeesID` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UnitName` varchar(200) NOT NULL,
  `Field` varchar(200) NOT NULL,
  `TypeOfWork` varchar(200) NOT NULL,
  `DocumentNumber` varchar(200) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Revision` varchar(200) NOT NULL,
  `Page` varchar(200) NOT NULL,
  `Activity` varchar(255) NOT NULL,
  `PotentialHazard` varchar(255) NOT NULL,
  `onsequence` varchar(255) NOT NULL,
  `Consequences` varchar(200) NOT NULL,
  `Possibility` varchar(200) NOT NULL,
  `LevelOfRisk` varchar(200) NOT NULL,
  `RiskControl` varchar(200) NOT NULL,
  `Consequences2` varchar(200) NOT NULL,
  `Possibility2` varchar(255) NOT NULL,
  `LevelOfRisk2` varchar(255) NOT NULL,
  `ControlStatus` varchar(255) NOT NULL,
  `PersonInCharge` varchar(200) NOT NULL,
  `Status` int(1) NOT NULL,
  `CreationDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljobinformation`
--

CREATE TABLE `tbljobinformation` (
  `id` int(11) NOT NULL,
  `EmployeesID` int(11) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `TypeOfWork` varchar(100) NOT NULL,
  `JobDetails` varchar(100) NOT NULL,
  `JobLocation` varchar(200) NOT NULL,
  `NameJobSupervisor` varchar(100) NOT NULL,
  `PhoneNumberJobSupervisor` char(15) NOT NULL,
  `NameOhsSupervisor` varchar(100) NOT NULL,
  `PhoneNumberOhsSupervisor` char(15) NOT NULL,
  `StartDate` varchar(20) DEFAULT NULL,
  `EndDate` varchar(20) DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  `JobClassification` varchar(255) NOT NULL,
  `JobProcedure` varchar(255) NOT NULL,
  `HazardIdentificationImage` varchar(255) DEFAULT NULL,
  `JobSafetyImage` varchar(255) DEFAULT NULL,
  `WorkProceduresImage` varchar(255) DEFAULT NULL,
  `CertificateOfCompetenceImage` varchar(255) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `	CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblleaves`
--

CREATE TABLE `tblleaves` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblleaves`
--

INSERT INTO `tblleaves` (`id`, `LeaveType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `empid`) VALUES
(11, 'Restricted Holiday(RH)', '12/05/2020', '20/05/2020', 'gkjhkjkjhkvggjgjhkjhkjh', '2020-05-19 22:56:04', 'OK', '2020-05-20 4:28:53 ', 1, 1, 1),
(14, 'Dokumen pengajuan ', '31/02/2019', '05/05/2020', 'iya', '2020-05-23 07:53:15', 'Yes', '2020-05-23 13:25:41 ', 1, 1, 2),
(15, 'Dokumen pengajuan ', '10/04/2020', '10/05/2020', 'Halooonininsms', '2020-05-25 13:23:39', 'Diterima', '2020-05-27 15:35:02 ', 1, 1, 2),
(16, 'Revisi Dokumen Pengajuan', '21/11/2011', '12/03/2033', '123', '2020-06-03 02:07:17', NULL, NULL, 0, 1, 2),
(17, 'Dokumen pengajuan ', '12/03/2033', '12/12/2012', 'asdas', '2020-06-07 23:49:03', NULL, NULL, 0, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblleavetype`
--

INSERT INTO `tblleavetype` (`id`, `LeaveType`, `Description`, `CreationDate`) VALUES
(4, 'Dokumen pengajuan ', 'Meminta persetujuan verifikasi pengisian formulir dan lampiran registrasi WP google formulir untuk segera ditinjau oleh admin', '2020-05-20 00:30:19'),
(5, 'Revisi Dokumen Pengajuan', 'apabila pengajuan ditolak, maka employee harus me-revisi kembali pengisian google formulir-nya', '2020-05-20 00:32:51'),
(6, 'Perizinan baru', '-', '2020-05-27 10:13:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblworksafetyanalysis`
--

CREATE TABLE `tblworksafetyanalysis` (
  `id` int(11) NOT NULL,
  `EmployeesID` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `TypeOfWork` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `JobImplementingCompany` varchar(200) NOT NULL,
  `JobSupervisor` varchar(200) NOT NULL,
  `JobExecutors` varchar(200) NOT NULL,
  `PersonalProtectiveEquipment` varchar(200) NOT NULL,
  `SafetyEmergencyEquipment` varchar(200) NOT NULL,
  `JobSteps` varchar(200) NOT NULL,
  `PotentialDangersAndRisks` varchar(200) NOT NULL,
  `ControlMeasures` varchar(200) NOT NULL,
  `Status` int(1) NOT NULL,
  `CreationDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblidentification`
--
ALTER TABLE `tblidentification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmployeesID` (`EmployeesID`);

--
-- Indeks untuk tabel `tbljobinformation`
--
ALTER TABLE `tbljobinformation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmployeesID` (`EmployeesID`);

--
-- Indeks untuk tabel `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indeks untuk tabel `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblworksafetyanalysis`
--
ALTER TABLE `tblworksafetyanalysis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmployeesID` (`EmployeesID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tblidentification`
--
ALTER TABLE `tblidentification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbljobinformation`
--
ALTER TABLE `tbljobinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tblworksafetyanalysis`
--
ALTER TABLE `tblworksafetyanalysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tblidentification`
--
ALTER TABLE `tblidentification`
  ADD CONSTRAINT `tblidentification_ibfk_1` FOREIGN KEY (`EmployeesID`) REFERENCES `tblemployees` (`id`) ON DELETE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbljobinformation`
--
ALTER TABLE `tbljobinformation`
  ADD CONSTRAINT `tbljobinformation_ibfk_1` FOREIGN KEY (`EmployeesID`) REFERENCES `tblemployees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tblworksafetyanalysis`
--
ALTER TABLE `tblworksafetyanalysis`
  ADD CONSTRAINT `tblworksafetyanalysis_ibfk_1` FOREIGN KEY (`EmployeesID`) REFERENCES `tblemployees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
