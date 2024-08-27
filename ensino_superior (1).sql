-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 10:32 PM
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
-- Database: `ensino_superior`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'Edna@gmail.com', 'edna'),
(2, 'rosa@gmail.com', 'rosa');

-- --------------------------------------------------------

--
-- Table structure for table `universidades`
--

CREATE TABLE `universidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `localizacao` varchar(200) NOT NULL,
  `cursos` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `universidades`
--

INSERT INTO `universidades` (`id`, `nome`, `descricao`, `localizacao`, `cursos`, `img`) VALUES
(3, 'UHAD - agora', 'adnbadbmdbmbndna', 'Albazine', 'Gestao Empreendedorisrpo', 'Screenshot_20170517-185800.jpg'),
(4, 'UEM', 'Aulas', 'Albaxzine', 'Gestao Empreendedorisrpo', '5774293_sd.jpg'),
(5, 'UEM', 'Melhor universidade de moz', 'Polana canico', 'Mais de 30', 'UEM.jpg'),
(6, 'UJC', 'Em crecimento', 'Zimpeto', '10', 'UJC.jpg'),
(7, 'Unilurio', 'Petence a up', 'Norte', 'mais de 3', 'Universidade-Lúrio.png'),
(8, 'ustm ', 'Privada ', 'Museu', 'mais de 6', 'U-Sao tomas.jpg'),
(9, 'UP', 'Faculdade de ensino', 'Maputo', 'mais de 10', 'Universidade-Pedagogica-Maputo-980x980.webp'),
(10, 'UNI- ZAMBEZE', 'Faculdade de ensino', 'Maputo', 'mais de 10', 'zambezi-uni.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `universidades`
--
ALTER TABLE `universidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
