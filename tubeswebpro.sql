-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2021 pada 10.29
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeswebpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'adhityayudhatamaaaa', 'aditya75@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'dfwwwedw', 'ahendrawan76@gmail.commmm', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'adhityayudhatama', 'ahendrawan66@gmail.com', '`1234'),
(8, 'adhityayudhatama', 'ahendrawan66@gmail.com', '`1234'),
(9, 'adhityayudhatamaaaa', 'ahendrawan76@gmail.commm', '12345678'),
(10, 'adhityayudhatamaaaaaa', 'ahendrawan766@gmail.com', '12345678999888888888'),
(12, 'adhityayudhatama', 'ahendrawan76@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'mamat', 'mamat76@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(14, 'mamaattttt', 'mamatttttt@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'admin', 'd2w3d3wd', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
