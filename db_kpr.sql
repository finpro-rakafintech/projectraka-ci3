-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2023 pada 13.19
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `nm_article` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `nm_city` varchar(50) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `city`
--

INSERT INTO `city` (`city_id`, `nm_city`, `region_id`) VALUES
(1, 'Jakarta Selatan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `nasabah_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `no_kredit` varchar(10) NOT NULL,
  `npwp` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `income` bigint(18) NOT NULL,
  `outcome` bigint(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `nm_product` varchar(50) NOT NULL,
  `luas_bangunan` varchar(10) NOT NULL,
  `luas_tanah` varchar(10) NOT NULL,
  `jum_kamartidur` varchar(2) NOT NULL,
  `jum_kamarmandi` varchar(2) NOT NULL,
  `jum_garasi` varchar(1) NOT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'Rumah',
  `region_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `nm_product`, `luas_bangunan`, `luas_tanah`, `jum_kamartidur`, `jum_kamarmandi`, `jum_garasi`, `description`, `price`, `type`, `region_id`) VALUES
(1, 'Rumah Murah Hook Tebet Timur, Tebet, Jakarta Selat', '220', '220', '3', '3', '0', NULL, 2147483647, 'Rumah', 1),
(2, 'Rumah Modern di Tebet dekat Stasiun, Tebet, Jakart', '180', '137', '4', '3', '2', NULL, 2147483647, 'Rumah', 1),
(3, 'Rumah Mewah 2 Lantai Hanya 3 Menit Ke Tebet, Tebet', '267', '250', '4', '4', '4', NULL, 2147483647, 'Rumah', 1),
(4, 'Rumah Baru Tebet, Tebet, Jakarta Selatan', '40', '25', '2', '2', '0', NULL, 430000000, 'Rumah', 1),
(5, 'Rumah Bagus Tebet komp Gudang Peluru lt 350m, Tebe', '400', '355', '6', '5', '3', NULL, 2147483647, 'Rumah', 1),
(6, 'Rumah Mewah Modern Murah 3 lantai di Tebet Jakarta', '300', '154', '5', '3', '3', NULL, 2147483647, 'Rumah', 1),
(7, 'Rumah lama di Tebet, dekat MT Haryono dan tol dala', '120', '150', '3', '2', '1', NULL, 2147483647, 'Rumah', 1),
(8, 'RUMAH BAGUS KEREN JALAN LEBAR DI AREA & KAWASAN TE', '350', '247', '4', '4', '0', NULL, 2147483647, 'Rumah', 1),
(9, 'Minimalis Baru Jalan 1 Mobil Akses Mudah Dekat ke ', '125', '90', '3', '3', '0', NULL, 2147483647, 'Rumah', 1),
(10, 'Minimalis Baru Jalan 2 Mobil Tebet Timur, Tebet, J', '250', '96', '5', '4', '1', NULL, 2147483647, 'Rumah', 1),
(11, 'Brand New house di Tebet Barat, Tebet, Jakarta Sel', '154', '110', '3', '3', '3', NULL, 2147483647, 'Rumah', 1),
(12, 'Rumah Mewah di TEBET, Tebet, Jakarta Selatan', '450', '240', '4', '4', '1', NULL, 2147483647, 'Rumah', 1),
(13, 'Rumah bagus di tebet, jakarta selatan, Tebet, Jaka', '218', '118', '3', '3', '2', NULL, 2147483647, 'Rumah', 1),
(14, '#BAWAHNJOP#MURAH#CASHONLY#LELANG# RUMAH ASEM BARIS', '200', '979', '4', '2', '6', NULL, 2147483647, 'Rumah', 1),
(15, 'Rukan Baru Siap Pakai di Tebet Jakarta Selatan, Te', '180', '137', '5', '4', '2', NULL, 2147483647, 'Rumah', 1),
(16, 'Rumah bebas banjir di kebon baru tebet, Tebet, Jak', '126', '144', '4', '2', '2', NULL, 2147483647, 'Rumah', 1),
(17, 'Rumah jalan 2 mobil, Tebet, Jakarta Selatan', '400', '150', '5', '4', '1', NULL, 2147483647, 'Rumah', 1),
(18, 'Rumah standard hitung tanah di tebet dalam jakarta', '150', '253', '5', '2', '2', NULL, 2147483647, 'Rumah', 1),
(19, 'RUMAH MEWAH CANTIK DI MENTENG DALAM TEBET JAKARTA ', '200', '251', '5', '3', '3', NULL, 2147483647, 'Rumah', 1),
(20, 'BRAND NEW 3 LANTAI DENGAN FASILITAS KOLAM RENANG D', '450', '248', '5', '5', '4', NULL, 2147483647, 'Rumah', 1),
(21, 'Rumah mewah 2 Lantai Murah full furnished bebas ba', '300', '700', '8', '5', '2', NULL, 2147483647, 'Rumah', 1),
(22, 'Rumah di Tebet timur, Tebet, Jakarta Selatan', '315', '218', '7', '3', '2', NULL, 2147483647, 'Rumah', 1),
(23, 'Rumah di Tebet, kebon baru, Tebet, Jakarta Selatan', '75', '75', '2', '3', '0', NULL, 700000000, 'Rumah', 1),
(24, 'Rumah di Tebet , kebon baru , jakarta selatan, Teb', '350', '230', '5', '5', '3', NULL, 2147483647, 'Rumah', 1),
(25, 'Rumah 1.5 Lt Di Asem Baris Tebet Jakarta Selatan', '650', '695', '9', '6', '2', NULL, 2147483647, 'Rumah', 1),
(26, 'Rumah siap huni, Tebet, Jakarta Selatan', '250', '199', '8', '2', '2', NULL, 2147483647, 'Rumah', 1),
(27, 'Rumah Baru, Bagus, di tebet Barat, Jajarta Selatan', '210', '130', '3', '4', '2', NULL, 2147483647, 'Rumah', 1),
(28, 'Rumah Minimalis Plus Mini Swimming Pool , Tebet, T', '300', '200', '5', '5', '4', NULL, 2147483647, 'Rumah', 1),
(29, 'Rumah Bagus Siap Huni, Tebet, Jakarta Selatan', '175', '200', '6', '4', '2', NULL, 2147483647, 'Rumah', 1),
(30, 'Rumah Brand New Minimalis Elegan 2 Lantai Lokasi S', '140', '110', '3', '3', '2', NULL, 2147483647, 'Rumah', 1),
(31, 'Rumah Daerah Tebet, Tebet, Jakarta Selatan', '400', '230', '5', '5', '2', NULL, 2147483647, 'Rumah', 1),
(32, 'Rumah Mewah Furnished Tebet Barat Swimming Poll Ak', '900', '600', '7', '7', '1', NULL, 2147483647, 'Rumah', 1),
(33, 'Rumah pinggir jalan daerah tebet masuk mobil, Tebe', '102', '102', '2', '1', '0', NULL, 1100000000, 'Rumah', 1),
(34, 'Rumah mewah hook siap huni dan terawat di gudang p', '646', '428', '5', '5', '2', NULL, 2147483647, 'Rumah', 1),
(35, 'Rumah tebet, Tebet, Jakarta Selatan', '145', '200', '8', '8', '1', NULL, 2147483647, 'Rumah', 1),
(36, 'Rumah baru Minimalis, Tebet, Jakarta Selatan', '220', '120', '4', '4', '3', NULL, 2147483647, 'Rumah', 1),
(37, 'Rumah mewah murah dalam komplek di tebet, Tebet, J', '325', '222', '6', '5', '0', NULL, 2147483647, 'Rumah', 1),
(38, 'Rumah Minimalis 3 Lantai lokasi strategis bebas ba', '300', '200', '5', '5', '1', NULL, 2147483647, 'Rumah', 1),
(39, 'Rumah Siap Huni Hadap Timur di Tebet, Tebet, Jakar', '250', '154', '6', '3', '1', NULL, 2147483647, 'Rumah', 1),
(40, 'Rumah Minimalis di Tebet Jakarta Selatan', '247', '105', '5', '5', '1', NULL, 2147483647, 'Rumah', 1),
(41, 'rumah 2 lantai , jalan depan 1 mobil , SHM , Tebet', '200', '140', '4', '4', '2', NULL, 2147483647, 'Rumah', 1),
(42, 'FATHUR TEBET RUMAH BAGUS lt 90m2 LOKASI BAGUS. HUB', '150', '90', '3', '2', '2', NULL, 2147483647, 'Rumah', 1),
(43, 'Rumah tua layak huni, HITUNG TANAH di Tebet Barat,', '210', '239', '8', '5', '1', NULL, 2147483647, 'Rumah', 1),
(44, 'Di Juaal Cepat Rumah Mewah Di Menteng Dalam Fully ', '339', '643', '7', '5', '5', NULL, 2147483647, 'Rumah', 1),
(45, 'Rumah 2 Lt bagus dan TERMURAH Akses Jalan 2 Mobil ', '190', '100', '5', '4', '2', NULL, 2147483647, 'Rumah', 1),
(46, 'Rumah tebet jakarta selatan', '450', '240', '9', '9', '0', NULL, 2147483647, 'Rumah', 1),
(47, 'RUMAH MURAH DI JAKARTA SELATAN', '300', '232', '6', '5', '0', NULL, 2147483647, 'Rumah', 1),
(48, 'Rumah Layak Huni, Tebet, Jakarta Selatan', '352', '305', '4', '3', '0', NULL, 2147483647, 'Rumah', 1),
(49, 'Rumah Modern Minimalis 3 Lantai Full Furnished di ', '135', '146', '6', '6', '1', NULL, 2147483647, 'Rumah', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase`
--

CREATE TABLE `purchase` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(15) NOT NULL,
  `date_ordered` date NOT NULL,
  `date_received` date NOT NULL,
  `total_price` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `nasabah_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `region`
--

CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `nm_region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `region`
--

INSERT INTO `region` (`region_id`, `nm_region`) VALUES
(1, 'Tebet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `fullname`, `birthdate`, `level`) VALUES
(1, 'admin@admin.com', '$2y$10$lt6KZHHHDkIhZWdV8gJTd.e.XYfJQcshCOI9i5SCj7g8QZkMcU1lG', 'admin', '2023-10-21', 'admin'),
(2, 'user@gmail.com', '$2y$10$ll481Us/uOcW2q.GuTBFi.KjP4OsxZRCgNUIcpWLwtBDIot1kKuwS', 'User', '2000-10-01', 'user'),
(3, 'johndoe@gmail.com', '$2y$10$.z74g6k1K4Sw807byK9aq.VC42Ng3z.ZvLLR0PerXmQ.9mT/Hj6le', 'John Doe', '2000-01-01', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indeks untuk tabel `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `FK_Region` (`region_id`);

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`nasabah_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indeks untuk tabel `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `nasabah_id` (`nasabah_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `purchase`
--
ALTER TABLE `purchase`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `FK_Region` FOREIGN KEY (`region_id`) REFERENCES `region` (`region_id`);

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`region_id`);

--
-- Ketidakleluasaan untuk tabel `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `region` (`region_id`),
  ADD CONSTRAINT `purchase_ibfk_3` FOREIGN KEY (`nasabah_id`) REFERENCES `nasabah` (`nasabah_id`),
  ADD CONSTRAINT `purchase_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
