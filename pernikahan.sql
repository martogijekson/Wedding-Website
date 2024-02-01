-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 06.19
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pernikahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2023_12_26_144202_create_penganten_table', 2),
(4, '2023_12_26_164639_create_story_table', 3),
(6, '2023_12_27_032817_create_akad_table', 4),
(7, '2023_12_27_042137_create_resepsi_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_akad`
--

CREATE TABLE `table_akad` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `table_akad`
--

INSERT INTO `table_akad` (`id`, `nama`, `jam1`, `jam2`, `tanggal1`, `tanggal2`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Akad Nikah', '08:00', '11:00', 'Sabtu 02', 'Maret 2023', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2023-12-26 21:12:54', '2023-12-26 23:13:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penganten`
--

CREATE TABLE `tb_penganten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_penganten`
--

INSERT INTO `tb_penganten` (`id`, `salam`, `tanggal`, `title`, `nama1`, `keterangan1`, `gambar1`, `nama2`, `keterangan2`, `gambar2`, `created_at`, `updated_at`) VALUES
(3, 'Hello!', '28 Desember, 2023 Jimbaran', 'Nikah', 'Jhon', 'Seseorang yang terlahir untuk mendampingi hidup Fadly Rifai, baik susah ataupun senang, telah mempercayakan sepenuhnya kepada Fadly Rifai.. dan berjanji akan selalu setia untuk menemani nya..', 'private/storage/penganten/eccbc87e4b5ce2fe28308fd9f2a7baf3_gambar1.jpeg', 'Melati', 'Seseorang yang terlahir untuk mencintai dan menyayangi Shafa Rafida.. berjanji untuk selalu melindungi dan membahagiakan ny.. pokok nya udah sayang banget sama Shafa, gak mau lg cari yg lain.. pokoknya cuma Shafa..', 'private/storage/penganten/eccbc87e4b5ce2fe28308fd9f2a7baf3_gambar2.jpeg', '2023-12-26 09:05:53', '2024-01-30 11:30:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resepsi`
--

CREATE TABLE `tb_resepsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_resepsi`
--

INSERT INTO `tb_resepsi` (`id`, `nama`, `jam1`, `jam2`, `tanggal1`, `tanggal2`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'RESEPSI', '12:00', '21:00', 'Sabtu 02', 'Juni 2024', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2023-12-26 21:40:14', '2023-12-26 23:14:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_story`
--

CREATE TABLE `tb_story` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_story`
--

INSERT INTO `tb_story` (`id`, `judul`, `tanggal`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Pertama Kali', '13 Juni, 2007', 'Pertama kali bertemu di bangku sekolah menengah pertama.. Cinta pertama dan terakhir', 'private/storage/story/c4ca4238a0b923820dcc509a6f75849b.jpeg', '2023-12-26 10:16:09', '2023-12-26 23:03:40'),
(2, 'Pertama Kali Datang Kerumah', '04 April 2018', 'Sang pria dengan modal nekat mencoba untuk memberanikan diri untuk datang kerumah mempelai wanita, berusaha untuk medapatkan cintanya..', 'private/storage/story/c81e728d9d4c2f636f067f89cc14862c.jpeg', '2023-12-26 10:38:05', '2023-12-26 10:38:05'),
(3, 'Melamar', '25 Agustus, 2018', 'Dan akhir nya melamar sang wanita pada tanggal 25 Agustus 2018, hari yang sangat menyenangkan..', 'private/storage/story/eccbc87e4b5ce2fe28308fd9f2a7baf3.jpeg', '2023-12-26 10:50:40', '2023-12-26 10:50:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Martogi Jekson', 'martogisiagian17@gmail.com', NULL, '$2y$10$deXDCOiSwNfG8KMiiWfHG.K56XAWHqL7/7adactOIA/8LRcrVDuCq', NULL, '2023-12-26 05:50:06', '2023-12-26 05:50:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `table_akad`
--
ALTER TABLE `table_akad`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penganten`
--
ALTER TABLE `tb_penganten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_resepsi`
--
ALTER TABLE `tb_resepsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_story`
--
ALTER TABLE `tb_story`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `table_akad`
--
ALTER TABLE `table_akad`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_penganten`
--
ALTER TABLE `tb_penganten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_resepsi`
--
ALTER TABLE `tb_resepsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_story`
--
ALTER TABLE `tb_story`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
