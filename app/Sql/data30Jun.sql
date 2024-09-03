-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2024 at 05:39 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

use everlasting;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u586962977_everlasting`
--

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `no_telp`, `email`, `username`, `password`, `foto`, `role`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', NULL, NULL, 'u1', '$2y$12$fdbY.ssP55lENmjIfbFNJuSTbsZADNG/1xf7PUq1rcaJRC5A8ZJUC', NULL, 1, NULL, NULL, NULL, NULL),
(2, 'user2', NULL, NULL, 'u2', '$2y$12$x3OFzzVFfljNlVwXR/UHzuJireSAfnnaCQ3vHygmRx9s/NeJ.bN8W', NULL, 0, NULL, NULL, NULL, NULL),
(3, 'user3', NULL, NULL, 'u3', '$2y$12$bB2cNsXpfY4FD8TSOy2Ru.uYduxnjAgTYocRKAoAqEK.6X/NK4QIC', NULL, 0, NULL, NULL, NULL, NULL),
(4, 'user4', NULL, NULL, 'u4', '$2y$12$ZRQP1ihiEgHO4GSlRACDaeHav04mLzwmNVtFt0ffP4s1TWKx6xjQe', NULL, 0, NULL, NULL, NULL, NULL),
(5, 'user5', NULL, NULL, 'u5', '$2y$12$gDozExuWzbjsaZhB0q/jFuyjUZ29RsSYIRQjI.8l3iogkYHLpDeI6', NULL, 0, NULL, NULL, NULL, NULL),
(111, 'Savira Ciliania', '087615243654', 'savirasilla@gmail.com', 'saviraci75', '$2y$12$hOHXLSv9z06RHhkf2nCBwe/HTqk8ASzmw87Dg.gGboNIrYruAsule', '-.png', 1, 'Kab. Kediri', NULL, NULL, NULL),
(999, 'Savira Ciliania', '087605243654', 'satirasilla@gmail.com', 'uu1', '$2y$12$Jat6lTGbIcl/OguoL9fQqOGDpGhNr5YtL7Hvzk0H/gcn7ne9v4Pbm', '-.png', 1, 'Kab. Kediri', NULL, NULL, NULL),
(1000, 'Delia Listiana', '089726354635', 'ella10@gmail.com', 'dell', '$2y$12$c1PcI/hRSvGLbFhAa.YuDeEF4HjP8Aps3CkrfhYDIh1gAUM/LrPWW', NULL, 1, 'kediri', NULL, '2024-06-25 16:08:25', '2024-06-25 16:08:25'),
(1001, 'Putri Amelia Agustin', '098726354632', 'putri02@gmail.com', 'put123', '123', NULL, 1, 'ngadiluwih', NULL, NULL, NULL),
(1002, 'aruna hanin', '089876738292', 'aruna123@gmail.com', 'aruna', '$2y$12$gKyuLullabHBK/Odnygw5OK3bo5oCdv2nEjJz3D3ecW9Knh6PzRIO', NULL, 0, 'kediri', NULL, '2024-06-27 02:31:28', '2024-06-27 02:31:28'),
(1003, 'virnanda', '088718291001', 'virnandaelsa29@gmail.com', 'virnanda', '$2y$12$qoD76IYGIK3hPa9SK5dI.e02ET/OjYgXqOaeHHUM/ecWuy/rb.vxm', NULL, 1, 'kediri', NULL, '2024-06-27 02:35:28', '2024-06-27 02:35:28'),
(1004, 'elsa', '081652445167', 'virnandaelsa@gmail.com', 'elsa', '$2y$12$UP0DeA5oDSWd2U7Coelkwu8pL9tIyREEkSuZkRiJF4egKxFrT1arm', NULL, 0, 'Kediri', NULL, '2024-06-27 02:51:30', '2024-06-27 02:51:30'),
(1005, 'Putri', '086543281911', 'putriamelia@gmail.com', 'putriam', '$2y$12$xdxm5nyGsQz4ieu1sPaYxuq13YgcP7D5ldN.i/94LJtaV3i5ibXA6', NULL, 0, 'Kediri', NULL, '2024-06-27 02:51:55', '2024-06-27 02:51:55'),
(1006, 'Ave Decoration', '082228723425', 'avedecoration@gmail.com', 'AveDecoration', '$2y$12$sh7DOhTAbvObilyqOGOXPuc57t.dzkfLAu2H/KuSEf89FK.9W.fqa', NULL, 1, 'Kediri', NULL, '2024-06-27 02:53:54', '2024-06-27 02:53:54'),
(1007, 'Weralisa MakeUp', '082131420369', 'weralisamakeup@gmail.com', 'weralisamakeup', '$2y$12$tuTc93zYIyJZLqE4RYE9kuk6EIQ9Ht64pmIW.vV5w2emXuJIU1TLy', NULL, 1, 'Kediri', NULL, '2024-06-27 03:22:01', '2024-06-27 03:22:01'),
(1008, 'Novanis Kediri', '085663827119', 'novaniskediri@gmail.com', 'novaniskediri', '$2y$12$ihqFtBXeHklOTVKcVQtqvuydNKtaKD8PLpm2D9/yRvtkeNOmYVve6', NULL, 1, 'Kediri', NULL, '2024-06-27 03:22:49', '2024-06-27 03:22:49'),
(1009, 'Adelia Souvenir', '0865172811671', 'adeliasouvenir@gmail.com', 'adeliasouvenir', '$2y$12$mzg9wWywH8zOYebzTO4lfu8HcmvtAKKDkaQ5epDt.iHXOTphmFj4G', NULL, 1, 'Kediri', NULL, '2024-06-27 03:35:51', '2024-06-27 03:35:51'),
(1010, 'NANAG', '0877367527', 'nanag@mail.com', 'nanang', '$2y$12$JDQEOKKJ3FnL8goiupTFjuqNggZvkFVHxtbOXR/tA5STecqUEVi3O', NULL, 0, 'KEDIRI', NULL, '2024-06-27 16:39:28', '2024-06-27 16:39:28'),
(1011, 'sad', 'sad', 'sad@dsadc.fgd', 'sad', '$2y$12$jvQ1ax9AE7epkT2kEMz3ze3Dn4V8dBSfPApxz0syU0Bip3cpFRiPm', NULL, 0, 'asd', NULL, '2024-06-27 16:40:23', '2024-06-27 16:40:23'),
(1012, 'giniamat', '98364976', 'askdjha@maisl', 'a', '$2y$12$KCmmMPosN5eIaDOi1Uz4EuOyMpdBQiIaa8umZnixFp34rkuVaP3mC', NULL, 0, 'malanggg', NULL, '2024-06-27 16:41:08', '2024-06-27 16:41:08'),
(1013, 'Cahya', '085123456789', 'fandimugiwara93@gmail.com', 'cahya56', '$2y$12$kq2oO0rEmTUSWWYYKkZweeBUU7v./piPO.qhcZDGV9oyVgXDSL3je', NULL, 0, 'Kediri', NULL, '2024-06-28 11:59:11', '2024-06-28 11:59:11'),
(1014, 'bambang', '0823410951005', 'bambang99@gmail.com', 'bambang123', '$2y$12$C42o.ORdJzDEe1E0SZuA1eA/PUgL7cWZ9ymtz6zsqH7YftWCNUu7C', NULL, 1, 'Kediri', NULL, '2024-06-29 16:29:43', '2024-06-29 16:29:43');

--
-- Dumping data for table `detailPJ`
--

INSERT INTO `detailPJ` (`id_detailPJ`, `id_user`, `nama_toko`, `alamat`, `kategori`, `bank`, `no_rek`, `profil_tk`, `sampul_tk`, `created_at`, `updated_at`) VALUES
(1, 1, 'Iyain Wedding', NULL, 'Make Up Artis', 'BRI', '7289108273391721', '-.png', '-.png', NULL, NULL),
(2, 2, 'Okelah Wedding', NULL, 'Dekorasi', 'BRI', '7289108273391722', '-.png', '-.png', NULL, NULL),
(222, 111, 'Savira Wedding', NULL, 'Make Up Artis', 'BRI', '7289108273391726', '-.png', '-.png', NULL, NULL),
(223, 4, 'deliaweding', 'kediri Kediri, Jawa Timur', 'Make Up Artist', 'BRI', NULL, '1719357114.jpeg', '1719357114.jpg', '2024-06-25 16:11:54', '2024-06-25 16:11:54'),
(224, 5, 'putri catering', 'ngadiluwih', 'catering', 'BNI', '123456789', NULL, NULL, NULL, NULL),
(225, 1003, 'virnandatoko', 'banaran Kediri, Jawa Timur', 'Make Up Artist', 'BNI', '0081617897761', '1719455850.png', '1719455850.png', '2024-06-27 02:37:30', '2024-06-27 02:37:30'),
(226, 1006, 'Ave Decoration', 'Jl. Pare-Kandangan N0.71, Dsn. Kwagean, Ds. Krenceng, Kec. Kepung, Kab Kediri, Jawa Timur', 'Dekorasi', 'Mandiri', '12345678', '1719457551.jpg', '1719457551.png', '2024-06-27 03:05:51', '2024-06-27 03:05:51'),
(227, 1007, 'Weralisa Make Up', 'Jl. Letjen Suparto Gg.i JL. Letjend Suprapto No.94,Banjaran, Kec. Kota Kediri, Jawa Timur', 'Make Up Artist', 'BRI', '1234567890', '1719458818.jpg', '1719458818.jpg', '2024-06-27 03:26:58', '2024-06-27 03:26:58'),
(228, 1008, 'Novanis Kediri', 'Banyakan Kediri Kediri, Jawa Timur', 'Fotografi & Vidografi', 'BNI', '098765432111', '1719459468.png', '1719459468.png', '2024-06-27 03:37:48', '2024-06-27 03:37:48'),
(229, 1009, 'Adelia Souvenir', 'Jl. Sakura No.37, Tulongrejo, Kec. Pare, Kab. Kediri, Jawa Timur 64212, Indonesia Kediri, Jawa Timur', 'Sovenir', 'BRI', '0017266172', '1719459632.jpg', '1719459632.jpg', '2024-06-27 03:40:32', '2024-06-27 03:40:32'),
(230, 1, 'ok', 'malang Tulungagung, Jawa Barat', 'Make Up Artist', 'BNI', '77', '1719501954.jpg', '1719501954.jpg', '2024-06-27 15:25:54', '2024-06-27 15:25:54'),
(231, 1014, 'VAnguard', 'Kediri Tulungagung, Jawa Barat', 'Make Up Artist', 'BRI', '11765177891', '1719679417.jpg', '1719679417.jpg', '2024-06-29 16:43:37', '2024-06-29 16:43:37');

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `id_detailPJ`, `judul`, `deskripsi`, `metode_bayar`, `created_at`, `updated_at`) VALUES
(1, 1, 'rias manten jawa', 'anti crack natural ', 12345678, NULL, NULL),
(2, 1, 'solo putri', 'MakeUp Solo Putri', 12345678, NULL, NULL),
(3, 1, 'arabian look', 'moderen', 12345678, NULL, NULL),
(4, 1, 'hijab syari', 'lebih natural dan flowles', 12345678, NULL, NULL),
(5, 2, 'Paket Prasmanan', 'untuk 1000 undangan \r\nset makan inclide', 12345678, NULL, NULL),
(6, 2, 'paket nasi kotak/piringan', 'per porsi include minum dan camilan', 12345678, NULL, NULL),
(336, 225, 'MakeUp Internasional', 'MakeUp Modern', NULL, '2024-06-27 02:44:18', '2024-06-27 02:44:18'),
(338, 226, 'Gold Wedding Decoration', 'Gold Wedding Decoration Lebar 6x6', NULL, '2024-06-27 03:22:41', '2024-06-27 03:22:41'),
(339, 226, 'Gold Wedding Decoration Putih', 'Gold Wedding Decoration Lebar 6x6', NULL, '2024-06-27 03:29:03', '2024-06-27 03:29:03'),
(340, 226, 'Gold Akad Decoration', 'Decoration Akad Bernuansa Emas Lebar 4x6', NULL, '2024-06-27 03:33:15', '2024-06-27 03:33:15'),
(341, 227, 'Rias Solo Puteri', 'Make Up di lengkapi aksesoris dengan paes, Cunduk Mentul dan bunga melati', NULL, '2024-06-27 03:34:34', '2024-06-27 03:34:34'),
(342, 228, 'Foto Preweding Indoor', 'Menyediakan paket foto preweding Indoor. Menjadikan moment preweding Anda berkesan untuk selamanya.', NULL, '2024-06-27 03:41:23', '2024-06-27 03:41:23'),
(343, 228, 'Foto Wedding day', 'Menyediakan layanan fotografi di hari pernikahanmu yang akan memorable', NULL, '2024-06-27 03:43:53', '2024-06-27 03:43:53'),
(344, 229, 'Sovenir Pecah Belah', 'Sovenir Pecah Belah', NULL, '2024-06-27 03:45:20', '2024-06-27 03:45:20'),
(345, 227, 'MakeUp Pengantin Siger Sunda', 'Make Up Pengantin  Adat Sunda, dengan Mahkota Siger dilengkapi kembang tanjung, Hiasan Daun sirih', NULL, '2024-06-27 03:48:36', '2024-06-27 03:48:36'),
(346, 231, 'MUA Wedding', 'Uji coba', NULL, '2024-06-29 16:45:29', '2024-06-29 16:45:29');

--
-- Dumping data for table `dt_katalog`
--

INSERT INTO `dt_katalog` (`id_dt_katalog`, `judul_variasi`, `id_katalog`, `created_at`, `updated_at`, `harga`, `gambar`) VALUES
(1000, 'sanggul jawa', 1, NULL, NULL, 6000000, 'https://asset-2.tstatic.net/tribunnews/foto/bank/images/fira-shehan_20180226_120149.jpg'),
(1001, 'hijab solo putri', 1, NULL, NULL, 7000000, 'https://alexandra.bridestory.com/image/upload/c_scale,dpr_1,f_auto,fl_progressive,pg_1,q_80,w_678/blogs/beblooms-2bAzj2l5k.jpg'),
(1002, 'jawa modern', 1, NULL, NULL, 7500000, 'https://alexandra.bridestory.com/image/upload/c_scale,dpr_1,f_auto,fl_progressive,pg_1,q_80,w_678/blogs/zia-brides-makeup-6L5tzmyR8.jpg'),
(1003, 'jawa tradisional', 2, NULL, NULL, 3000000, 'https://cdn.idntimes.com/content-images/post/20210425/89087748-832623867150206-4820966565789090054-n-894c8edfd7539520e9042e69c6c14fcb.jpg'),
(1004, 'solo basahan', 2, NULL, NULL, 3000000, 'https://images.tempo.co/?id=659874&width=720'),
(1005, 'solo putri', 2, NULL, NULL, 3000000, 'https://cdn.idntimes.com/content-images/community/2021/01/fromandroid-25a92e95b2cb5f7cae96cf553556536f.jpg'),
(1006, 'mata bold dgn eyeliner', 3, NULL, NULL, 5000000, 'https://asset-a.grid.id/crop/0x103:423x350/360x240/photo/2021/07/12/arabic-bridal-party-wear-makeup-20210712123227.jpg'),
(1007, 'shimer putih', 3, NULL, NULL, 5000000, 'https://i.ytimg.com/vi/7S4xegGxwgA/sddefault.jpg?v=60f84470'),
(1008, 'eye shadow emas', 3, NULL, NULL, 5000000, 'https://asset-a.grid.id/crop/0x103:423x350/360x240/photo/2021/07/12/arabic-bridal-party-wear-makeup-20210712123227.jpg'),
(1009, 'natural', 4, NULL, NULL, 3000000, 'https://i.pinimg.com/originals/43/14/f3/4314f375e8ef24d5108c60c02add0b8e.jpg'),
(1010, 'simple', 4, NULL, NULL, 3000000, 'https://cdns.klimg.com/dream.co.id/resources//real/2023/06/21/1107244/gaya-makeup-pengantin.jpg'),
(1011, 'Glam Weding Make up', 4, NULL, NULL, 3000000, 'https://cdns.klimg.com/dream.co.id/resources//real/2023/08/16/1138467/gaya-makeup-pengantin-syari.jpg'),
(1012, 'Paket Premium ', 5, NULL, NULL, 20000000, 'https://img.ws.mms.shopee.co.id/4b3109100dadffc02e4b4d703af55614'),
(1013, 'Paket Medium ', 5, NULL, NULL, 15000000, NULL),
(1014, 'Paket hemat ', 5, NULL, NULL, 10000000, NULL),
(1015, 'Nasi Rawon, Esbuah, Somai', 6, NULL, NULL, 25000000, 'https://cdn.eurekabookhouse.co.id/ebh/product/all/2660669_349b831a-ca9c-4edd-a188-e57a56469b66_493_493.jpg'),
(1016, 'Nasi Ayam Capjay, air putih, puding coklat', 6, NULL, NULL, 30000000, 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/11/18/f51af3db-d79a-4bc6-9991-3f14851a7371.jpg'),
(1017, 'gado-gado, es cincau, roti isi', 6, NULL, NULL, 30000000, 'https://cdn.eurekabookhouse.co.id/ebh/product/all/2660669_349b831a-ca9c-4edd-a188-e57a56469b66_493_493.jpg'),
(1018, 'MakeUp Internasional Modern Flawless', 336, '2024-06-27 02:44:18', '2024-06-27 02:44:18', 2500000, '1719456258.jpg'),
(1020, 'Gold Decoration Gebyok', 338, '2024-06-27 03:22:41', '2024-06-27 03:22:41', 7200000, '1719458561.png'),
(1021, 'Gold Wedding Decoration Putih', 339, '2024-06-27 03:29:03', '2024-06-27 03:29:03', 7200000, '1719458943.png'),
(1022, 'Gold Akad Decoration', 340, '2024-06-27 03:33:15', '2024-06-27 03:33:15', 1900000, '1719459195.png'),
(1023, 'MakeUp 1', 341, '2024-06-27 03:34:34', '2024-06-27 03:34:34', 4000000, '1719459274.jpg'),
(1024, 'Indoor 1', 342, '2024-06-27 03:41:23', '2024-06-27 03:41:23', 1150000, '1719459683.png'),
(1025, 'Wedding Day 1', 343, '2024-06-27 03:43:53', '2024-06-27 03:43:53', 1000000, '1719459833.png'),
(1026, 'Sovenir Gelas', 344, '2024-06-27 03:45:20', '2024-06-27 03:45:20', 5500, '1719459920.png'),
(1027, 'Siger Hijab', 345, '2024-06-27 03:48:36', '2024-06-27 03:48:36', 5000000, '1719460116.jpg'),
(1028, 'Foto1', 346, '2024-06-29 16:45:29', '2024-06-29 16:45:29', 500000, '1719679529.jpg');

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_dt_katalog`, `tanggal`, `status`) VALUES
(555, 111, 1018, '2002-02-02', 1);
COMMIT;

--
-- Dumping data for table `dt_transaksi`
--

INSERT INTO `dt_transaksi` (`id_dt_transaksi`, `id_transaksi`, `ket`, `bukti_tfDP`, `bukti_tfPelunasan`, `status_pembayaran`) VALUES
(666, 555, 'Akad, Resepsi. Paket Lengkap orangtua dan pager ayu', '-.jgp', '-.jgp', 3);

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kategori`, `gambar_kategori`) VALUES
(1, 'Make Up Artist', 'Beautician.png'),
(2, 'Dekorasi', 'Beautiful Wedding Ribbon.png'),
(3, 'Sound Systems', 'Subwoofer.png'),
(4, 'Cathering', 'Buffet Breakfast.png'),
(5, 'Wedding Organizer', 'Tasklist.png'),
(6, 'Photography', 'SLR Camera.png'),
(7, 'Undangan', 'Letter.png'),
(8, 'Souvenir', 'Favorite Package.png');

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_transaksi`, `kualitas`, `ketepatan`, `pelayanan`, `deskripsi_kualitas`, `deskripsi_ketepatan`, `deskripsi_pelayanan`, `ft_review`) VALUES
(444, 555, 5, 3, 4, NULL, NULL, NULL, NULL);

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1Zyu1Wz6kWR4Pp81HK4PTe3X569HVH9nrtYIMkE6', NULL, '43.159.128.68', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGxzUnJib3FnUm5sVmtRVHFTa25mNm5uQnp4RktiWEs1OTd6WHd1YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3LmV2ZXJsYXN0aW5nbW9tZW50Lm5ldCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719673699),
('3Mwp73ftOYYx46e6Mac2ePS8ZSm7RzcDMXyVKEdY', NULL, '66.249.73.132', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; GoogleOther)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiakp2Q0Q4QWlIajhlR2hCeFJnS1VGbnlLWmZnV3c3dnV6eUVMVWk3byI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozOToiaHR0cHM6Ly9ldmVybGFzdGluZ21vbWVudC5uZXQvcGVzYW4vMzM4Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719671968),
('3TmbNIypsBWKTSFSpRsaw3DGnzckZunlFrffVncd', NULL, '2607:5300:60:7e27::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:118.0) Gecko/20100101 Firefox/118.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFN0Z1dvZVNyVFVHZWdsTVFFZWZhdzl5cnJ3bkZSdFA5TEJVSHQ5diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719680107),
('6lsthGxWHWVhVjX7wYly2Cl0nLOCUsIdHIultteQ', NULL, '66.249.73.132', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid3Q5REJvd0NFQk14UFJPZ3V3dDBpMDBOWEdsQWdjMlNtdk5CTzNIUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8zMzciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719672805),
('AKO5T7rDngIZx9dADbf05xWQfBqMeax5kvlG3q7k', 1, '103.3.220.153', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibVhIWUJyUWxOVzJTakRKeWVxcWJySnVlVHdlQlBYdk9SZUlRdGY3ZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1719681633),
('AXbLGlhFmQfeH2Tv59YN9VPyhA4rA9fMTV1QMWir', NULL, '23.111.114.116', 'Mozilla/5.0 (Linux; Android 8.1.0; 16th) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2FuNnE3Qmt0eHFxaGVGS0N6aDV6OG5UVmpwa0pSRTZubFZGR1VvQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719676104),
('dfTvIHGNejZsqgVSoKkfqVhL9a8ftUHwptdnAP17', NULL, '192.178.8.7', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWZDZWJsUkFhcXVnQ0xSMllORkdvYldCYXp1S29zcEYzdXRQWjZpYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L3JlZ2lzdHJhc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719680729),
('EHrkX7mCkDbE2jpwuNWz61OIfgd5K2CoOrp8jLNN', NULL, '114.5.103.49', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU2laa0FRc2wzamdVUkxWV056NU5ocm8zTWF6VmdXMWtzZ3o4RmpocCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L3JlZ2lzdHJhc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM3OiJodHRwczovL2V2ZXJsYXN0aW5nbW9tZW50Lm5ldC9wZXNhbi8yIjt9fQ==', 1719681124),
('g2OM3zSR8sKIXpW1AlWMsoea782LtljmvTMoSGMY', NULL, '64.233.172.5', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFZtb3ZHS3FSZm5QQWhGemN0aEdJcE1zRk5UWTFyQ3YxeWRwbk5ueiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719680779),
('ik2E64jkfxM6CyEYa7etE6iPl9pcM2AU0btSlfdb', NULL, '66.249.73.132', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; GoogleOther)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidjhVRDNDMTVmUHJkdjZxWVd5bmhGOVN4RE5neHp4c3Q2d1hTbXJ5TCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozOToiaHR0cHM6Ly9ldmVybGFzdGluZ21vbWVudC5uZXQvcGVzYW4vMzM3Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719673768),
('JzjuxF1JZmNsjIebM17fb3LtYBiS8YMnUCHXZQxc', NULL, '66.249.73.132', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHl6UnhYVDhkZUdzSzNLdU1iaWQ1Q2dNNjRZR1N6MVllcVFaTnVvWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719676532),
('k1kHBc76UUc209CAPaUml3aoJL8vZ0TGowGKrJ7R', NULL, '66.249.73.132', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmVFRkt6WDc2OVMwMkFQZk5TcnE1anBIV3lERDlmNDBRZHNlSTV4RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS81Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719671304),
('Kxss0cpNb7SAOZXkWhDhTAiVqQzmVk7h5APcdExu', NULL, '66.249.73.132', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRFNxZ2p2TWYxS3Q5Uk9jbDlINFZVTlhMSkJLbFpkaWhrNGNjRzRZdiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozOToiaHR0cHM6Ly9ldmVybGFzdGluZ21vbWVudC5uZXQvcGVzYW4vMzQzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719675990),
('mfDYZUVyVhOcH93BOwezQd9tdie5fDe8WccqXprv', NULL, '64.233.172.7', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2hsblRCYU5helM4bDN4dk10RmJ3WHVPeWZnS3VkUGVWOEpQNTZJdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719680779),
('OcfwccKk3axBCKsUKiVLPuz8JtZqIOgk6D4xAxPc', NULL, '64.233.172.5', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXQya0ZjdEY5c0Vsb3cwR0lyUzZhbzAxVUVWMTNobTYzaDY2Z25EdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L3JlZ2lzdHJhc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719680730),
('r0CchkECWEeiBMo52qOWAxMx4uyQdUVk17ENYbY5', NULL, '66.249.73.193', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1NiV25VUEdLZEZKUzc2V3V0d0lyd001VjZCUDJPUU16cXlsSmdyQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3LmV2ZXJsYXN0aW5nbW9tZW50Lm5ldCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719677426),
('SvwFKKOFSM23JpSQpdNnS5DKz3aXnlRb6gdkxlDm', NULL, '66.249.73.195', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOHBHejRpRWN0NlBRQmFzNXFOUnBBOFpJajlkc1NVRWRsc0UyME5TTSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MzoiaHR0cHM6Ly93d3cuZXZlcmxhc3Rpbmdtb21lbnQubmV0L3Blc2FuLzM0MCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM5OiJodHRwczovL3d3dy5ldmVybGFzdGluZ21vbWVudC5uZXQvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719674188),
('tZoWViR8ukPvd3sl0p5cXzjOHQch28U8l6Jf67JS', NULL, '66.249.73.132', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieTBlRXhDaEFjVVpQc1AwNUVPMFRwUUh1UEJtVTFCMEo0RWpTbWVYeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozOToiaHR0cHM6Ly9ldmVybGFzdGluZ21vbWVudC5uZXQvcGVzYW4vMzM3Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719675929),
('wy4tnGEhrj9BRNTKb5Z1fef9UDypTpFMdeaqUPwU', NULL, '137.184.116.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmtGRnpkOWtBdDhoYVF1WGRvUkpLeTFibDNiVnhoaGdKU0twWjhkWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719682210),
('X8b7sRZqPanLdeVYOGIIxre3TNqeYb0dJcxpllA7', NULL, '2001:4ca0:108:42::15', 'quic-go-HTTP/3', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicDVRM1NQOUxwZ1hHQTVJVDQwWnpHT2pQRlB0MmREb2lHSGNsMFZMQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719677692),
('zbYJ5lC5lyhqllSRdfaoJQshv4eMi8Nj1vUbKmhS', NULL, '66.249.73.194', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaXlGeWZPbnBtRTFwZmZjMUVGWmtuZDBOZ1dNWTA5Z1ZBZFMyUnNKayI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cHM6Ly93d3cuZXZlcmxhc3Rpbmdtb21lbnQubmV0L3Blc2FuLzQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozOToiaHR0cHM6Ly93d3cuZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719676051);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
