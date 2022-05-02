-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 08:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara7ck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'admin@gmail.com', NULL, '$2y$10$CbixNmJz6BXK8iYTH.YiI.HPkPrEQuB1.QTmXUiuz4I3vKcvZZUHi', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor1s`
--

CREATE TABLE `doctor1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor1s`
--

INSERT INTO `doctor1s` (`id`, `patient_name`, `age`, `date`, `doctor_name`, `created_at`, `updated_at`) VALUES
(17, 'Aysha Siddika', 35, '04/26/2022', 'Dr. Farzana Ferdous Munmun', NULL, NULL),
(18, 'Abdul Kuddus', 48, '04/26/2022', 'Dr. Khandakar Nurul Arefin', NULL, NULL),
(19, 'Sumaiya Sama', 28, '04/26/2022', 'Dr. Nurjahan Begum', NULL, NULL),
(20, 'Adnan Sami', 4, '04/26/2022', 'Dr. Md. Safikul Islam', NULL, NULL),
(21, 'Arif Ikramm', 50, '04/26/2022', 'Dr. Asit Baran Adhikary', NULL, NULL),
(22, 'Farhana Hamid', 42, '04/26/2022', 'Dr. Fahima Jahan', NULL, NULL),
(23, 'Sami', 22, '04/26/2022', 'Dr. M.A.K Saifullah', NULL, NULL),
(24, 'Azim Ul Karim', 52, '04/26/2022', 'Dr. K.M. Murshed', NULL, NULL),
(25, 'Ahsanul Karim', 48, '04/26/2022', 'Dr. Jagodish Chandro Ghosh', NULL, NULL),
(26, 'Faizul Islam', 32, '04/26/2022', 'Dr. Md. Rafiqul Islam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `qualification`, `designation`, `institution`, `remember_token`, `created_at`, `updated_at`) VALUES
(50, 'Dr. Farzana Ferdous Munmun', 'MBBS (DU), BCS (Health), DGO (BSMMU), FCPS (Obs. & Gynae) Obstetrician And Gynaecologist & Laparoscopic Surgeon', 'N/A', 'Sher-E-Bangla Medical College, Barisal', NULL, NULL, NULL),
(52, 'Dr. Jagodish Chandro Ghosh', 'MBBS, MS (Ortho- Surgery), Felospine Surgery (ISIC), New Delhi', 'Professor,  Department of Orthopedic Surgery & Traumatology', 'N/A', NULL, NULL, NULL),
(54, 'Dr. Khandakar Nurul Arefin', 'MBBS (Dhaka), MS (Orthopedics)  Specialist in Orthopedics & Trauma Surgeon', 'Associate Professor & Unit Head,  Department of Orthopedic Surgery & Traumatology', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(55, 'Dr. Md. Monirujjaman Monir', 'MBBS, BCS (Health), MS (Orthopedics Surgery)  BSMMU (PG Hospital) Highly Trained AO Basic Trauma (India), AO Advanced Trauma (Bangladesh) APSS Operative Spine Course (Indonesia)  Consultant', 'N/A', 'National Institute of Traumatology & Orthopedic Rehabilitation (NITOR) (Pongu Hospital, Dhaka)', NULL, NULL, NULL),
(56, 'Dr. Sabbir Ahmed', 'MBBS, BCS (Health), D-Ortho NITOR (Pongu Hospital), Dhaka  Specialist in Orthopedics & Trauma Surgeon', 'N/A', 'N/A', NULL, NULL, NULL),
(57, 'Dr. Nahid Yasmin', 'MBBS, FCPS (Obs. & Gynae), FICS (USA) Laparoscopic Surgeon Trained from India, Singapur and Koria', 'Professor and Department Head (Ex),  Department of Obstetrics & Gynaecology', 'Labaid Specialized Hospital', NULL, NULL, NULL),
(58, 'Dr. Nurjahan Begum', 'MBBS, FCPS (Obs. & Gynae) Specialist in Obstetrics & Gynaecology, Laparoscopic Surgeon & Colposcopy', 'Associate Professor (Sex Hormone and Infertility), Department of Obstetrics & Gynaecology', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(59, 'Dr. Sharmin Siddika Rumki', 'MBBS, FCPS Specialist in Obstetrics & Gynaecology, Laparoscopic Surgeon', 'Assistant Professor,   Department of Obstetrics & Gynaecology', 'Anawer Khan Modern Medical College & Hospital', NULL, NULL, NULL),
(60, 'Dr. Umme Salma Chowdhury (Shanta)', 'MBBS, FCPS (Obs. & Gynae) Highly Trained in Infertility form Singapur  Specialist in Infertility & Laparoscopy', 'Assistant Professor,  Department of Obstetrics & Gynaecology', 'Shaheed Suhrawardy Medical College & Hospital, Dhaka', NULL, NULL, NULL),
(61, 'Dr. Sanjida Rahman', 'MBBS, CCD (Bardem), FCPS (Obs. & Gynae) Specialist and Surgeon in Obstetrics & Gynaecology', 'Assistant Professor,    Department of Obstetrics & Gynaecology', 'Universal Medical College & Hospital', NULL, NULL, NULL),
(62, 'Dr. Md. Sahadat Hossain', 'MBBS, DDV, FCPS, FRCP (UK), MACP (USA) Specialist in Skin &Venereal (Sex), Allergy & Leprosy  Leser, Dermato & Cosmetic Surgeon', 'Professor and Department Head,   Department of Skin & VD', 'Shaheed Suhrawardy Medical College & Hospital, Dhaka', NULL, NULL, NULL),
(63, 'Dr. Israt Buiyan', 'MBBS (DMC), DDV, FCPS (Skin & VD), FRCP (Gasgo), MACP (USA) Specialist in Skin, Venereal, Leprosy & Allergy  Leser & Dermato Surgeon', 'Associate Professor Department of Skin & VD', 'Shaheed Suhrawardy Medical College & Hospital, Dhaka', NULL, NULL, NULL),
(64, 'Dr. Md. Golam Kibriya Khan', 'MBBS (DMC), DDV (DU), DD (Thiland & Japan)  Specialist in Skin &Venereal (Sex), Allergy & Leprosy', 'Assistant Professor (Ex),  Department of Skin & VD', 'Sir Salimullah Medical College & Hospital (Midford Hospital)', NULL, NULL, NULL),
(65, 'Dr. Md. Mostafizur Rahman', 'MBBS, BCS (Health), DMEU, DDV (Derma & DD) Bangabandhu Sheikh Mujib Medical University Specialist in Skin, Allergy, Venereal (Sex) & Cosmetic', 'N/A', 'Mugda Medical College, Dhaka', NULL, NULL, NULL),
(66, 'Dr. Rana Jahangir Alam', 'MBBS, FCPS (Surgery), MRCS (UK) Specialist Surgeon in General Laparoscopic Breast Colorectal & Anus', 'Assistant Professor,   Department of Surgery', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(67, 'Dr. Sayem Al Monsur Foyeji', 'MBBS, FCPS (Surgery) General Laparoscopic & Colorectal Surgeon  Specialist in Breast, Anus, Hepatobiliary & Pancreatic', 'Assistant Professor (Ex BMC),  Department of Surgery', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(68, 'Dr. Ronojit Roy', 'MBBS, MD, FCPS (Child), FRCP (UK)', 'Professor & Chairman', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(69, 'Dr. Ahasanulla Al Baki', 'MBBS, DCH, MRCP (London)', 'Professor (Child Health), Consultant, Newborn Baby & Child', 'N/A', NULL, NULL, NULL),
(70, 'Dr. Md. Safikul Islam', 'MBBS, FCPS (Child), DCH (DU), MD (Child)  Specialist in Child Diseases', 'Assistant Professor,  Department of Child', 'Mymensingh Medical College & Hospital', NULL, NULL, NULL),
(71, 'Dr. Md. Nizam Uddin', 'MBBS, FCPS (Medicine), MPhil, MD (SAEK)', 'Professor & Department Head,   Department of Nerve & Mental Disorder', 'Comilla Medical College & Hospital', NULL, NULL, NULL),
(72, 'Dr. M M Yasir Arafat', 'MBBS (DMC), MBA, MPH, MD (Psychiatry) Bangabandhu Sheikh Mujib Medical University (BSMMU)  Specialist in Mental Disorder, Brain, Headache, Nerve, Drug Addiction and Sex', 'Assistant Professor', 'Enam Medical College & Hospital, Dhaka', NULL, NULL, NULL),
(73, 'Dr. Md. Kazim Uddin', 'MBBS, DCP, MCPS (Hematology)', 'Professor,   Department of Hematology', 'Nordern International Medical College, Dhaka', NULL, NULL, NULL),
(74, 'Dr. Fahima Jahan', 'MBBS, FCPS, MS (Obs. & Gynae) Trained in Laparoscopic & Hysteroscopy', 'Associate Professor,   Department of Obstetrics & Gynaecology', 'Rangamati Medical College, Rangamati', NULL, NULL, NULL),
(75, 'Dr. Md. Rafiqul Islam', 'MBBS, BCS (Health), MD (Gastroenterology) Gastroenterology & Medicine Specialist', 'Assistant Professor,   Department of Gastroenterology', 'Rajshahi Medical College, Rajshahi', NULL, NULL, NULL),
(76, 'Dr. M.A.K Saifullah', 'MBBS, BCS (Health), FCPS (Medicine), FCPS (Pulmonology)(Thesis)', 'N/A', 'RMO, National Institute of Diseases of the Chest and Hospital  (NIDCH)  Mohakhali, Dhaka', NULL, NULL, NULL),
(77, 'Dr. M. Saidul Haq', 'MBBS, BCS (Health), MD (Gastroenterology) Liver, Gastroenterology & Medicine Specialist', 'Chief Consultant', 'Dhaka Gastro-liver Center', NULL, NULL, NULL),
(78, 'Dr. K.M. Murshed', 'MBBS (MMC), FCPS (Medicine), FRCP (London)  Certified Course On Diabetics, Heart Diseases, Gastro-liver, Chest Diseases, Kidney Diseases, Azma, Paralaisis, Skin and Venereal (Sex)', 'Consultant Medicine', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(79, 'Dr. Wasif Chisti', 'MBBS (Dhaka), BCS (Health), CCD (Berdem), PGT (Medicine), MD Fage-A (Pulmonology)  Specialist in Medicine and Chest Diseases', 'N/A', 'National Institute of Diseases of the Chest and Hospital  (NIDCH)  Mohakhali, Dhaka', NULL, NULL, NULL),
(80, 'Dr. Tamanna Akter Toma', 'MBBS (Dhaka), CCD (Berdem)  D.M.U', 'Sonologist & Specialist in Women Diseases,   Medical Officer', 'Sohitunnesa Layans Eye Hospital, Narayanganj', NULL, NULL, NULL),
(81, 'Dr. S.M. Mamun Iqbal', 'MBBS (DMC), MD (Cardiology), MRCP (UK) Trained in Clinical and Interventional Cardiology', 'Professor & Department Head,   Department of Cardiology', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(82, 'Dr. Md. Shakhawat Hossain', 'MBBS (Dhaka), BCS (Health), FCPS-Preli (Medicine), FCPS-Chest (Chest Diseases) Specialist in Medicine, Azma and Chest Diseases, Allergy, Diabetics Hormone, Kidney Diseases', 'N/A', 'National Institute of Diseases of the Chest and Hospital  (NIDCH)  Mohakhali, Dhaka', NULL, NULL, NULL),
(83, 'Dr. Md. Rokibul Islam Rakib', 'MBBS (DMC), MS (Neurosurgery) Highly Trained in Neurosurgery (India, Turosko, Japan)', 'Assistant Professor,   Department of Neurosurgery', 'Bangabandhu Sheikh Mujib Medical University, Dhaka', NULL, NULL, NULL),
(84, 'Dr. Saqib Salah Aufi', 'MBBS, CCD (Berdem) Advanced Training in Diabetes (Berdem)  Member of American College of Physicians  Diabetologist', 'N/A', 'Rajshahi Diabetic Hospital', NULL, NULL, NULL),
(85, 'Dr. Asit Baran Adhikary', 'MBBS (DMC), MS (Cardiology), Ph.D, FRCS (England) Cardiac, Vascular & Thoracic Surgeon', 'Professor,   Department of Cardiology', 'Chittagong Medical University, Chittagong', NULL, NULL, NULL),
(86, 'Dr. Md. Anisur Rahman', 'MBBS, MD, FIPM (India)  Folo Interventional Pain Management (Chaina) Folo Neuropathic Pain Management (Malaysia) Highly Trained in Florscopic & Altrasonograpic Guided Pain Procedure (America)', 'Consultant, Pain Medicine', 'Dhaka Pain & Spain Center', NULL, NULL, NULL),
(87, 'Dr. Shuli Begum', 'MBBS, FCPS, MS (Obs. & Gynae) Specialist in Obstetrics & Gynaecology, Infertility Trained in Laparoscopic & Hysteroscopy', 'Professor and Department Head,   Department of Obstetrics & Gynaecology', 'Enam Medical College Hospital', NULL, NULL, NULL),
(88, 'Dr. Indoo Ammbulkar', 'MBBS, FCPS, MD  (Medical Oncology)', 'Senior Consultant', 'Retired From Bangabandhu Sheikh Mujib Medical University, Dhaka (PG Hospital)', NULL, NULL, NULL),
(89, 'Dr. Sharmin Jahan', 'MBBS, FCPS (General Surgery) Consultant General and Breast Surgery   Specialist & Experienced in Breast, Colorectal and All General Surgery', 'N/A', 'Sir Salimulla Medical College, Dhaka', NULL, NULL, NULL),
(90, 'Dr. Md. Kamrul Hasan', 'MBBS (DU), BCS (Health), PGT (Medicine) Experienced in Medicine', 'N/A', 'N/A', NULL, NULL, NULL),
(91, 'Dr. Asrafun Nahar Suity', 'MBBS (RMC), FCPS (Obs. & Gynae) Experienced in Obstetrician And Gynaecologist & Laparoscopic Surgeon', 'Assistant Professor,   Department of Obstetrics & Gynaecology', 'Rajshahi Medical College, Rajshahi', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `address`, `message`, `created_at`, `updated_at`) VALUES
(14, 'Sami', 'sami@gmail.com', 1838777393, 'Rajshahi', 'Your service is well but your staff\'s behaviour is not so good. Some staffs behave rough with me yesterday.', NULL, NULL),
(15, 'Adnan Sami', 'adnan@gmail.com', 192555958, 'Khulna', 'You have not enough sit for patient. When patient is more many patients are standing for doctor.', NULL, NULL),
(16, 'Abdul Baten', 'abaten60@gamil.com', 1648781032, 'Dhaka', 'Your staffs behavior is rough. They are not helpful.', NULL, NULL),
(17, 'Mst. Anika Tabassum', 'atabussum90@gmail.com', 1926669877, 'Dhaka', 'Your toilet is not so clean. Please clean it and make useable for the patient.', NULL, NULL),
(18, 'Atiq Iqubal', 'iqubalatik5@gamil.com', 1738889078, 'Narayanganj', 'Increase chair for patient.', NULL, NULL),
(19, 'Md. Mamun', 'mamun456@gmail.com', 1365679980, 'Rajshahi', 'Your staffs are not good. Their behavior is not well.', NULL, NULL),
(20, 'Tasnim Tabassum Auditi', 'ttauditi2019@gamil.com', 1823336678, 'Dhaka', 'Please fire some staffs because their behavior is rough and boring.', NULL, NULL),
(21, 'Asif Karim', 'akarim98@gamil.com', 1516061367, 'Khulna', 'Clean your toilet daily.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_03_10_143548_create_user_profiles_table', 2),
(5, '2022_03_12_091711_create_admins_table', 3),
(6, '2022_03_12_104312_create_admins_table', 4),
(7, '2022_03_12_131153_create_all_doctors_table', 5),
(8, '2022_03_12_155509_create_appteachers_table', 6),
(9, '2022_03_12_162038_create_doctors_table', 7),
(10, '2022_03_12_171226_create_doctors_table', 8),
(11, '2022_03_14_090442_create_doctor1s_table', 9),
(12, '2022_03_14_105447_create_dr__md__mostafizur__rahmen_table', 10),
(13, '2022_03_14_134502_create_dr__rana__jahangir__alams_table', 11),
(14, '2022_03_14_141805_create_dr__rana__jahangir__alams_table', 12),
(15, '2022_03_14_143518_create_dr__k_m__mursheds_table', 13),
(16, '2022_04_16_131808_create_feedback_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bdadu69@gmail.com', '$2y$10$3ejPOyYcY7jogvBYezJHvOMviSeJGtoccoY0XEh926S4kaS6QvDFa', '2022-04-28 14:14:59'),
('user1@gmail.com', '$2y$10$sOvUDucNsk5jfM.lOopaXuGG6iopZ1.yoR1aSZ8K1/hdRxEzlwPQu', '2022-05-01 08:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `country`, `city`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(42, 'Adnan Sami', 'user1@gmail.com', '2022-03-09 13:36:10', 'Canadas', 'Rajshahi', 1820000088, '$2y$10$rQ8W/lHmdkKUOzewKTF/hOgRparwfknll2USaQuiL6A.mdYBekPlW', 'JkDzZUolGwUHXZMXGiMbSHi8t2pwrts86pyqL7gqutuJHKO2stom99xxbC2w', '2022-03-09 13:35:35', '2022-04-26 12:28:51'),
(43, 'user2', 'user2@gmail.com', '2022-03-10 03:21:36', 'BD', 'Rajshahi', 1648187304, '$2y$10$Sr0tDSM5KmGLSGKP0mkiTeBmTWBvaDRczj0dpEhfEdTARZ6FsIjCO', NULL, '2022-03-10 03:21:24', '2022-04-25 12:52:23'),
(45, 'Adnan Sami', 'bdadu69@gmail.com', '2022-03-10 03:34:00', 'BD', 'Dhaka', 1648187304, '$2y$10$6vyqqPcyB6Q.HKbcZNt7fOtLKVBuV8YwwTIogrCF7EbZF2FIhvH3G', NULL, '2022-03-10 03:33:49', '2022-04-25 12:53:10'),
(46, 'Sami', 'sami@gmail.com', '2022-04-05 08:42:34', 'Bangladesh', 'Dhaka', 1838777393, '$2y$10$AVW7uXj.Jp3i9hnubMSZP.nKcCA2ACVTIFxkCr18FX8EEw9qC1Yta', NULL, '2022-04-05 08:27:52', '2022-04-25 12:53:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `doctor1s`
--
ALTER TABLE `doctor1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor1s`
--
ALTER TABLE `doctor1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
