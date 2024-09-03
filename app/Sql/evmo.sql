-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 01:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

INSERT INTO `pengguna` ( `nama`, `no_telp`, `email`, `username`, `password`, `foto`, `role`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
( 'Delia Listiana', '089726354635', 'ella10@gmail.com', 'dell', '$2y$12$c1PcI/hRSvGLbFhAa.YuDeEF4HjP8Aps3CkrfhYDIh1gAUM/LrPWW', NULL, 1, 'kediri', NULL, '2024-06-25 16:08:25', '2024-06-25 16:08:25'),
( 'Putri Amelia Agustin', '098726354632', 'putri02@gmail.com', 'put123', '123', NULL, 1, 'ngadiluwih', NULL, NULL, NULL);

INSERT INTO `detailPJ` ( `id_user`, `nama_toko`, `alamat`, `kategori`, `bank`, `no_rek`, `profil_tk`, `sampul_tk`, `created_at`, `updated_at`) VALUES
( 4, 'deliaweding', 'kediri Kediri, Jawa Timur', 'Make Up Artist', 'BRI', NULL, '1719357114.jpeg', '1719357114.jpg', '2024-06-25 16:11:54', '2024-06-25 16:11:54'),
( 5, 'putri catering', 'ngadiluwih', 'catering', 'BNI', '123456789', NULL, NULL, NULL, NULL);

INSERT INTO `katalog` ( `id_katalog`,`id_detailPJ`, `judul`, `deskripsi`, `metode_bayar`) VALUES
( 1,1, 'rias manten singer sunda', 'anti crak natural ', 12345678),
( 2,1, ' solo jawa', 'anti crak tradisional', 12345678),
( 3,1, 'arabian look', 'moderen', 12345678),
( 4,1, 'hijab syari', 'lebih natural dan flowles', 12345678),
( 5,2, 'Paket Prasmanan', 'untuk 1000 undangan \r\nset makan inclide', 12345678),
( 6,2, 'paket nasi kotak/piringan', 'per porsi include minum dan camilan', 12345678),
( 334,2, 'paket nasi goreng', 'per porsi include minum dan camilan', 12345678);

INSERT INTO `dt_katalog` ( `judul_variasi`, `id_katalog`, `harga`, `gambar`) VALUES
( 'last lif', 1, 6000000, NULL),
( 'mahkota', 1, 7000000, NULL),
( 'singger jilbab', 1, 7500000, NULL),
( 'jawa tradisional', 2, 3000000, NULL),
( 'solo putri', 2, 3000000, NULL),
( 'yogya paes ageng', 2, 3000000, NULL),
( 'mata bold dgn eyeliner', 3, 5000000, NULL),
( 'shimer putih', 3, 5000000, NULL),
( 'eye shadow emas', 3, 5000000, NULL),
( 'natural', 4, 3000000, NULL),
( 'berbie look', 4, 3000000, NULL),
( 'Glam Weding Make up', 4, 3000000, NULL),
( 'Paket Premium ', 5, 20000000, NULL),
( 'Paket Medium ', 5, 15000000, NULL),
( 'Paket hemat ', 5, 10000000, NULL),
( 'Nasi Rawon, Esbuah, Somai', 6, 25000000, NULL),
( 'Nasi Ayam Capjay, air putih, puding coklat', 6, 30000000, NULL),
( 'gado-gado, es cincau, roti isi', 6, 30000000, NULL);