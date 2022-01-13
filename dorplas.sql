-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2022 at 10:46 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
AUTOCOMMIT = 0;
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorplas`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank`
(
    `id_blood_bank`          char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
    `id_institutions`        char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
    `a_positive_blood_bank`  int                                 NOT NULL,
    `a_negative_blood_bank`  int                                 NOT NULL,
    `b_positive_blood_bank`  int                                 NOT NULL,
    `b_negative_blood_bank`  int                                 NOT NULL,
    `ab_positive_blood_bank` int                                 NOT NULL,
    `ab_negative_blood_bank` int                                 NOT NULL,
    `o_positive_blood_bank`  int                                 NOT NULL,
    `o_negative_blood_bank`  int                                 NOT NULL,
    `modified_by`            varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`             timestamp NULL DEFAULT NULL,
    `updated_at`             timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`id_blood_bank`, `id_institutions`, `a_positive_blood_bank`, `a_negative_blood_bank`,
                          `b_positive_blood_bank`, `b_negative_blood_bank`, `ab_positive_blood_bank`,
                          `ab_negative_blood_bank`, `o_positive_blood_bank`, `o_negative_blood_bank`, `modified_by`,
                          `created_at`, `updated_at`)
VALUES ('02e12985-4610-3648-a77c-4cfd2af7c86e', '07f00675-121a-3c22-9f77-97e21324aeeb', 39, 15, 44, 48, 22, 6, 18, 21,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('13f64413-3801-39f0-8148-86d48f53381a', '04c10453-6762-3a69-9cd4-fdfc043164bd', 30, 35, 19, 33, 15, 47, 33, 37,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('23a5d940-af2f-3afb-9a86-07b3698f8ceb', '0264db2d-0f84-32ef-b732-d56d7b3d0493', 31, 21, 1, 35, 33, 43, 8, 46,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('2da267ae-5f24-35da-b2cf-01888018a377', '272f8cd3-f856-37f0-ac40-94c3b36d52da', 23, 10, 9, 19, 17, 33, 31, 42,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('2eeb645d-d8b9-35e0-9a28-393ed2c892fe', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5', 30, 10, 37, 35, 27, 3, 35, 39,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('4e08605e-a844-3b63-b370-0bdef8a41b76', '731ef6df-6171-33fd-bd05-93cd76db2cdd', 24, 36, 29, 22, 8, 1, 39, 3,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('5ea9db51-005f-341a-b8bc-fd9ef339300a', '2217c28f-d59c-3ab1-860c-d2cce27b2a9f', 36, 5, 0, 22, 36, 13, 11, 29,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('68af7885-278a-3f3c-811b-384bce677b39', '05993934-409e-3c74-9559-150c4cee359b', 39, 32, 39, 28, 39, 30, 27, 28,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('a06e286a-9642-30bd-bf0e-0ad611ff900b', '537b0937-ddf0-3143-afb9-5511d880d50c', 50, 30, 48, 7, 16, 46, 18, 44,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('aaf27dd0-843e-350a-96b7-36e00227efd3', '05fae751-7d73-3b41-a567-44843869588f', 33, 44, 38, 26, 49, 45, 27, 15,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('b3d849e8-2937-36eb-8a0b-78e9ed6fb179', '9e33b53c-d6e2-3b2b-9335-0c6b626981d3', 15, 48, 16, 21, 18, 0, 40, 43,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('cc8d9690-2eda-32a2-b628-b44bac0463c4', 'f1b7740b-30c6-38ae-98f6-a994afbf55e6', 16, 0, 21, 36, 34, 41, 38, 45,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('e050aeef-52cd-38fb-8349-011ca51bba8f', '9d25e4f1-fbaf-359e-9e45-890677a67c0d', 0, 44, 44, 1, 27, 18, 0, 11,
        NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('e8dd936f-8b58-39d1-b695-0621b200dc98', '9ed81d0a-e58a-3d0b-9dd3-91eafab5266f', 46, 45, 45, 9, 37, 8, 33, 18,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('ff79e673-2fa6-3ffd-9226-661350c72989', '9aa2e5e7-3186-3d65-9b53-75f74c42b1eb', 5, 7, 47, 23, 28, 11, 44, 49,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `donators`
--

CREATE TABLE `donators`
(
    `id_donators`             char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `name_donators`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_donators`          varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `password_donators`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `gender_donators`         varchar(255) COLLATE utf8mb4_unicode_ci          DEFAULT NULL,
    `blood_type_donators`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `rhesus_type_donators`    varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `contact_donators`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `address_donators`        text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `point_donators`          int                                     NOT NULL DEFAULT '0',
    `profile_images_donators` varchar(255) COLLATE utf8mb4_unicode_ci          DEFAULT NULL,
    `created_at`              timestamp NULL DEFAULT NULL,
    `updated_at`              timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donators`
--

INSERT INTO `donators` (`id_donators`, `name_donators`, `email_donators`, `password_donators`, `gender_donators`,
                        `blood_type_donators`, `rhesus_type_donators`, `contact_donators`, `address_donators`,
                        `point_donators`, `profile_images_donators`, `created_at`, `updated_at`)
VALUES ('40ae4f94-560d-4a69-8cdb-28722d7329f6', 'Alif Yanuar Aditya Subagyo', 'michelyanuar@gmail.com',
        '$2y$10$dotlzleIN89A8o3XKhBy7Ogvg/FG3HX70Sc7LnDdWa1IM3OqfLsZC', 'male', 'A', 'negative', '087772934259',
        'Jln. Isekai, mantep mantep aselole jos jos jos', 80, NULL, '2022-01-13 03:45:17', '2022-01-13 03:45:17'),
       ('47dff59b-cb5d-4433-b97d-b7395bc73be5', 'Muhammad Rezki Ananda', 'muhammad.rezki.ananda@gmail.com',
        '$2y$10$CUiOX37Tu351K3jHejVK6O5vjg9qOXI3X7Og72tTN0q58VgVke/hi', 'male', 'O', 'positive', '085608845319',
        'Jl.Kediri Raya Weeh, Jawa Timur', 75, NULL, '2022-01-13 03:45:17', '2022-01-13 03:45:17'),
       ('54110e15-bade-47c6-b000-5513f97931df', 'Muhammad Ihsan Izzulhaq', 'mi.izzulhaq@gmail.com',
        '$2y$10$QNSqKYJwL6TkmbpwXS1XM.9k.LR.1DeCDA8bN9S7nqGO/73czOzrq', 'male', 'B', 'negative', '081286226512',
        'Jl. Aster, Kab. Tokyo - Japan', 60, NULL, '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('7c275a0c-ceda-3e34-9535-c572f77f7f25', 'Galuh Marbun', 'teguh15@example.com',
        '$2y$10$XK6fSpXUMnWifEXJ.9IjzuaWEMSg/4tLKjoJck.syLX6KpQ12E2Py', 'female', 'O', 'negative', '0891 8085 4476',
        'Ki. Villa No. 358, Palu 17795, Banten', 76, NULL, '2022-01-13 03:45:17', '2022-01-13 03:45:17'),
       ('80647a55-38d9-3d7d-aabe-3c0bcb2b035e', 'Paulin Usada S.H.', 'zelda51@example.net',
        '$2y$10$WlLvLElTmAFQBkvn1xuihOw8qoWYMb/TnqUipjzcHpNb5U0jg5tpO', 'female', 'B', 'positive', '0987 4093 8452',
        'Ds. Suprapto No. 559, Administrasi Jakarta Selatan 77345, Kalteng', 1, NULL, '2022-01-13 03:45:17',
        '2022-01-13 03:45:17'),
       ('975919e4-69cc-3a03-856b-8668c006ab42', 'Nyoman Bakti Irawan', 'narpati.maimunah@example.org',
        '$2y$10$RuuZbWlCs7O0FZt/J0QJY.i8nG2lnYJqZ3NMHINuP6oKGQTGRekqC', 'female', 'O', 'positive', '0292 3796 4829',
        'Psr. Bakaru No. 752, Padangpanjang 77745, Banten', 79, NULL, '2022-01-13 03:45:17', '2022-01-13 03:45:17'),
       ('b0fe3c4a-75e5-46bc-b8fb-aaf09a111ec0', 'Bagus Tri Atmaja', 'bagustri734@gmail.com',
        '$2y$10$EvGW6CwvAbjwscutvns3P.Dc7/m0ih5aabM4GVsI0GxIr2FP1T9Hy', 'male', 'A', 'negative', '082145198847',
        'Jl bukan jokowi no 69 kyoto, jepang', 70, NULL, '2022-01-13 03:45:17', '2022-01-13 03:45:17'),
       ('ee99087c-de80-36ea-8c76-8f7bc5e6e80e', 'Jaswadi Yoga Sihombing S.T.', 'namaga.dagel@example.org',
        '$2y$10$nLwrbOVonrvSH7BPM1nHJe1ff0B2ePt8e3xNYG0ZowuPxByOWCdbG', 'female', 'B', 'negative', '(+62) 665 2416 448',
        'Dk. Basudewo No. 583, Cilegon 72456, Sulut', 53, NULL, '2022-01-13 03:45:17', '2022-01-13 03:45:17'),
       ('f8bb43ff-24a0-3a02-9b9c-be3d08028432', 'Vera Elisa Permata', 'rahman81@example.com',
        '$2y$10$n2uy6sLwnKAI1HhdNxbU3OCiNkX0LwAs6npYqydmmUtF19EHiBhW2', 'male', 'B', 'negative', '0976 6340 892',
        'Jr. Eka No. 226, Balikpapan 43696, Kaltara', 31, NULL, '2022-01-13 03:45:17', '2022-01-13 03:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `donor_events`
--

CREATE TABLE `donor_events`
(
    `id_donor_events`         char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `id_institutions`         char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `name_donor_events`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `start_date_donor_events` date                                    NOT NULL,
    `end_date_donor_events`   date                                    NOT NULL,
    `start_time_donor_events` time                                    NOT NULL,
    `end_time_donor_events`   time                                    NOT NULL,
    `desc_donor_events`       text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `thumbnail_donor_events`  varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `point_donor_events`      int                                     NOT NULL,
    `modified_by`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`              timestamp NULL DEFAULT NULL,
    `updated_at`              timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donor_events`
--

INSERT INTO `donor_events` (`id_donor_events`, `id_institutions`, `name_donor_events`, `start_date_donor_events`,
                            `end_date_donor_events`, `start_time_donor_events`, `end_time_donor_events`,
                            `desc_donor_events`, `thumbnail_donor_events`, `point_donor_events`, `modified_by`,
                            `created_at`, `updated_at`)
VALUES ('0cad7bce-5b8c-4578-b26d-50a85007f28a', '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
        'Donor Darah bersama PMI Kota Surakarta', '2022-02-05', '2022-04-01', '08:00:00', '17:00:00',
        'Pemerintah kota Surakarta bekerjasama dengan PMI untuk menggelar donor darah', NULL, 20, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('104489d6-ac2e-4dbc-84dc-f72a38b41f31', '272f8cd3-f856-37f0-ac40-94c3b36d52da',
        'Kegiatan Donor Darah Pemuda Pasar Jaya bersama PMI', '2022-06-07', '2022-06-25', '08:00:00', '17:00:00',
        'Donor darah untuk mengingatkan kepada pemuda tentang pentingnya donor darah', NULL, 54, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('1c92c1e4-9033-4f53-88ca-19979cc2429a', '9d25e4f1-fbaf-359e-9e45-890677a67c0d',
        'Donor Darah dan Donor Plasma Konvalesen Pertamina RJBT', '2022-07-03', '2022-07-05', '08:00:00', '17:00:00',
        'Kegiatan donor darah kerjasama Pertamina dengan PMI', NULL, 15, NULL, '2022-01-13 03:45:19',
        '2022-01-13 03:45:19'),
       ('20749598-9db5-49b4-85d2-f1a278e66c3b', '0264db2d-0f84-32ef-b732-d56d7b3d0493',
        'Setetes darah anda sangat berharga', '2022-03-03', '2022-06-05', '08:00:00', '17:00:00',
        'Donor darah yang meriah terdapat beberapa tamu undangan top level kota bandung', NULL, 64, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('21bb43cf-4625-41e8-a1cb-fa365835cc45', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
        'Donor darah satu tetes darah yang berarti bagi mereka', '2022-01-01', '2022-12-12', '08:00:00', '17:00:00',
        'Donor darah sebagai penggalangan darah untuk membatu pasien covid', NULL, 86, NULL, '2022-01-13 03:45:19',
        '2022-01-13 03:45:19'),
       ('24931440-f9c1-4c8c-8638-da297c909d71', '05993934-409e-3c74-9559-150c4cee359b', 'We Share We Can', '2022-02-03',
        '2022-12-11', '08:00:00', '17:00:00',
        'Acara donor darah di awal tahun dengan harapan agar keadaan segera membaik', NULL, 65, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('3d19df60-6dc5-4772-b459-4931e82d8412', '05993934-409e-3c74-9559-150c4cee359b', 'Baksos Donor Darah',
        '2022-06-03', '2022-06-05', '08:00:00', '17:00:00',
        'Diadakanya bakti sosial serta donor darah secara sukarela oleh masyarakat', NULL, 35, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('567fc1e6-dbc6-4a08-9d55-fec68e6fa51e', '07f00675-121a-3c22-9f77-97e21324aeeb',
        'Donor Darah Peringatan Hari Anti Narkotika Internasional 2022', '2022-02-15', '2022-04-29', '08:00:00',
        '17:00:00', 'Donor darah untuk memperingati hari narkotika nasional 2022', NULL, 35, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('5c793a51-7526-4a12-9a89-ab1890d4a31e', '9d25e4f1-fbaf-359e-9e45-890677a67c0d', 'Yuk... Donor Darah',
        '2022-03-20', '2022-08-15', '08:00:00', '17:00:00',
        'Diadakan Donor Darah pada setiap sekolah negeri di SMA Se-kota surakarta', NULL, 22, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('62dc8665-21cd-49f6-953b-2d46790d0d24', '0264db2d-0f84-32ef-b732-d56d7b3d0493', 'Donor Darah DWP Jawa Barat',
        '2022-05-14', '2022-11-17', '08:00:00', '17:00:00', 'Acara Donor Darah pada DWP Jawa Barat', NULL, 14, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('715f113b-8f7a-4a3e-a3d4-3952b88e97d4', '272f8cd3-f856-37f0-ac40-94c3b36d52da',
        'BERDERMA, Pemuda Siaga Pandemi Bersama Donor Plasma', '2022-07-20', '2022-08-15', '08:00:00', '17:00:00',
        'Gandeng PMI, Garda Pemuda NasDem Jabar Gelar Donor Darah dan Plasma', NULL, 21, NULL, '2022-01-13 03:45:19',
        '2022-01-13 03:45:19'),
       ('7ef4066c-9698-4976-bc1c-1b8c634042c3', '05fae751-7d73-3b41-a567-44843869588f',
        'PMI day, the day for giving a life with blood donation', '2022-02-03', '2022-06-05', '08:00:00', '17:00:00',
        'Donor darah oleh pelajar provinsi jawa timur', NULL, 54, NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('863f7a9c-4a47-4e06-bae7-c6cea8bea2d6', '04c10453-6762-3a69-9cd4-fdfc043164bd', 'Setitik Darah Sejuta Rasa',
        '2022-03-01', '2022-06-01', '08:00:00', '17:00:00', '', NULL, 23, NULL, '2022-01-13 03:45:19',
        '2022-01-13 03:45:19'),
       ('88afbe28-5829-4041-b195-4974b156c515', '07f00675-121a-3c22-9f77-97e21324aeeb', 'MAP Fashion Blood Donation',
        '2022-07-20', '2022-10-15', '08:00:00', '17:00:00',
        'Divisi Fashion MAP bekerja sama dengan PMI Karawang mengadakan kegiatan Donor Darah untuk seluruh karyawan MAP',
        NULL, 23, NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('8e57a7f4-aa54-4840-838e-5dd815e75f4b', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
        'Give Blood and Keep The World Beating', '2022-04-24', '2022-05-01', '08:00:00', '17:00:00',
        'Universitas telkom dan PMI Kota bandung bekerjasama mengadakan acara donor darah', NULL, 76, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('8ffcd37f-1f71-4010-8984-f1e1f5293355', '04c10453-6762-3a69-9cd4-fdfc043164bd', 'Charity Day - Blood Donor',
        '2022-01-20', '2022-02-15', '08:00:00', '17:00:00', 'Event Donor Darah bersama BluPlaza', NULL, 21, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('951f6e42-0437-4c3c-a18f-763baedd1455', '04c10453-6762-3a69-9cd4-fdfc043164bd',
        'Donor massal menyambut HUT Kota Bandung', '2022-03-29', '2022-06-01', '08:00:00', '17:00:00',
        'Acara donor darah yang diadakan untuk memperingati hari jadi kota bandung', NULL, 10, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('9748a146-663f-4acc-aae0-31453a0ab1f3', '04c10453-6762-3a69-9cd4-fdfc043164bd',
        'Donor Darah Serentak Seluruh Indonesia', '2022-09-23', '2022-10-03', '08:00:00', '17:00:00',
        'Acara Donor darah yang dilaksanakan oleh PMI Indonesia', NULL, 5, NULL, '2022-01-13 03:45:19',
        '2022-01-13 03:45:19'),
       ('a1c51e11-d099-461d-91b6-e0d3be16a4be', '537b0937-ddf0-3143-afb9-5511d880d50c', 'Aksi Donor Darah',
        '2022-02-22', '2022-05-15', '08:00:00', '17:00:00',
        'Aksi donor darah dan seminar nasional tentang pentingnya donor', NULL, 42, NULL, '2022-01-13 03:45:19',
        '2022-01-13 03:45:19'),
       ('b335d38b-953f-4d16-9755-dc13b13b8ea8', '0264db2d-0f84-32ef-b732-d56d7b3d0493', '#darurat donor darah 2.0',
        '2022-02-03', '2022-10-15', '08:00:00', '17:00:00',
        'Penyuluhan tentang pentingnya manusia sehat untuk mendonorkan darahnya', NULL, 98, NULL, '2022-01-13 03:45:19',
        '2022-01-13 03:45:19'),
       ('ca728bce-a5c1-46b1-919d-be265da2a435', '9aa2e5e7-3186-3d65-9b53-75f74c42b1eb',
        'Donor Darah Polwan Polres Banyumas', '2022-03-02', '2022-03-05', '08:00:00', '17:00:00',
        'Polres kota banyumas menggandeng PMI Kota Banyumas menggelar aksi donor darah', NULL, 22, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('cde44109-581a-4e03-b9e8-22dd2c353cd2', '272f8cd3-f856-37f0-ac40-94c3b36d52da', 'Donor Darah dan Cek Kesehatan',
        '2022-08-10', '2022-08-15', '08:00:00', '17:00:00',
        'PMI Kota Bekasi mengadakan acara donor darah dan cek kesehatan gratis bagi masyarakat', NULL, 31, NULL,
        '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('cfdd4633-6e5b-4c24-a80b-2cac34409496', '05fae751-7d73-3b41-a567-44843869588f',
        'Donor darah, share your blood save their life', '2022-03-03', '2022-07-25', '08:00:00', '17:00:00',
        'PMI seluruh sekolah di kota Surabaya bekerja sama mengadakan donor darah sebanding dengan kebutuhan darah yang meningkat',
        NULL, 43, NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('e01df373-1f20-42b9-936a-f86540425701', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5', 'A Drop for Hopes',
        '2022-07-20', '2022-08-15', '08:00:00', '17:00:00',
        'Secara keseluruhan Tupperware Indonesia berhasil mengumpulkan ribuan kantong darah dari penyelenggaraan acara Donor Darah nasional ',
        NULL, 18, NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19'),
       ('e37d565b-ca9a-41e4-9589-a562e562e1bb', '07f00675-121a-3c22-9f77-97e21324aeeb', 'DONOR DARAH LPPM KE-35',
        '2022-06-20', '2022-06-25', '08:00:00', '17:00:00', 'Kegiatan Donor Darah dalam Rangka LPPM ke-35', NULL, 25,
        NULL, '2022-01-13 03:45:19', '2022-01-13 03:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `donor_notes`
--

CREATE TABLE `donor_notes`
(
    `id_donor_notes`       char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
    `id_donators`          char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
    `id_institutions`      char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
    `id_donor_events`      char(36) COLLATE utf8mb4_unicode_ci     DEFAULT NULL,
    `status_donor_notes`   tinyint                             NOT NULL,
    `schedule_donor_notes` date                                NOT NULL,
    `modified_by`          varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`           timestamp NULL DEFAULT NULL,
    `updated_at`           timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_submissions`
--

CREATE TABLE `donor_submissions`
(
    `id_donor_submissions`          char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `id_donators`                   char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `id_institutions`               char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `recipient_donor_submissions`   varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `applicant_donor_submissions`   varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `blood_type_donor_submissions`  varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `rhesus_type_donor_submissions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `quantity_donor_submissions`    int                                     NOT NULL,
    `time_used_donor_submissions`   datetime                                DEFAULT NULL,
    `ktp_donor_submissions`         varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `letter_donor_submissions`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status_donor_submissions`      tinyint                                 NOT NULL,
    `modified_by`                   varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`                    timestamp NULL DEFAULT NULL,
    `updated_at`                    timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees`
(
    `id_employees`       char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `id_institutions`    char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `name_employees`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_employees`    varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `password_employees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `contact_employees`  varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `address_employees`  text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `created_at`         timestamp NULL DEFAULT NULL,
    `updated_at`         timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_employees`, `id_institutions`, `name_employees`, `email_employees`, `password_employees`,
                         `contact_employees`, `address_employees`, `created_at`, `updated_at`)
VALUES ('15ed7fc0-102b-4d04-89de-189c82d2d71f', '731ef6df-6171-33fd-bd05-93cd76db2cdd', '(Admin) Muhammad Rezki Ananda',
        'muhammad.rezki.ananda@pmi.co.id', '$2y$10$6wRVkvxFAAiySTGfjVZb8O3bMvFVQ.cEbkCnrLGQPx/AFnkHvmoWq',
        '085608845319', 'Jl.Kediri Raya Weeh, Jawa Timur', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('1c39ec20-0491-4434-a3c1-3c14c9fede63', '9d25e4f1-fbaf-359e-9e45-890677a67c0d', '(Admin) Bagus Tri Atmaja',
        'bagustri734@pmi.co.id', '$2y$10$LpBdhnjDw1dlv3yYrPp2leff2QHf70g3UZHumFNJFHBPzXFqswDtS', '082145198847',
        'Jl bukan jokowi no 69 kyoto, jepang', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('2d6b5abb-e847-4f12-aa16-e6a723f8f75e', '272f8cd3-f856-37f0-ac40-94c3b36d52da',
        '(Admin) Alif Yanuar Aditya Subagyo', 'michelyanuar@pmi.co.id',
        '$2y$10$Hb9s0H0TQjTi2STQw2DWR.B75kWLvuw7o42Syi.hwiUN8Fzd6u6G6', '087772934259',
        'Jln. Isekai, mantep mantep aselole jos jos jos', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('2e3bfd65-ed27-33ef-8e00-b66680ceb470', '05fae751-7d73-3b41-a567-44843869588f', 'Rizki Setiawan',
        'rajata.purwa@example.com', '$2y$10$a24equA2avFkKPQB4zN81OyxsYBrg1g.XnmC//devHgtUf9E/eBKm', '0863 3850 6064',
        'Jr. Laswi No. 103, Surakarta 41250, Kepri', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('7142a84c-92ff-348e-ba7a-2f49c88e847d', '04c10453-6762-3a69-9cd4-fdfc043164bd', 'Salimah Utami',
        'suwarno.banawa@example.org', '$2y$10$2CIqqoIQPUFmz1C9X1KpxeEPJHxjp7K.eZGHpIgzWCt3uXxLCIH4i', '0579 0947 438',
        'Psr. Baranangsiang No. 560, Mojokerto 53114, Jambi', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('7d59df10-cfcc-310b-bfaf-ef89d501d4c7', '05fae751-7d73-3b41-a567-44843869588f', 'Titi Hassanah',
        'prasetya.embuh@example.net', '$2y$10$VtPa6WnYsntAtHxSlOAG3.f6G.9tU8SddPBmTmjSaDtIHlCk1irEC', '0454 3080 0354',
        'Gg. Bahagia  No. 427, Medan 56102, Sumbar', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('81330616-ac1b-4b30-93be-ba0b08e1ae0c', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5',
        '(Admin) Muhammad Ihsan Izzulhaq', 'mi.izzulhaq@pmi.co.id',
        '$2y$10$Bzi3R1CJIbz9rfvb8vc3meY6HwfM8m0GIbIJ8eC/dpMA/xk/.0HDe', '081286226512', 'Jl. Aster, Kab. Tokyo - Japan',
        '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('b5c170f1-a9a9-3a34-bbb4-815fcc421392', '0a2fdb17-2d3e-3949-9f36-68cf14b941e5', 'Cemeti Permadi',
        'salahudin.perkasa@example.net', '$2y$10$7UGTS3WW0mrEeyE0a8h9PuxFQwKWEDn002rUPKklyCrqbkqcwrVle', '0869 382 481',
        'Dk. Pasir Koja No. 160, Tarakan 25158, DKI', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('c2c784e9-9fd4-48dc-826b-e4381f192af0', '0264db2d-0f84-32ef-b732-d56d7b3d0493', '(Admin) Yanuar Taruna Lutfi',
        'hanstarunal@pmi.co.id', '$2y$10$KxHrRBBkMaW2HQJeVkWCheCLalI7lbqdXcbOmmoteeX/Aum1O7to6', '082318968902',
        'Jl. Bandung Garut Km. 27 Sumedang', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('fe44a7b8-7615-319d-b72c-33024e19f30e', '05993934-409e-3c74-9559-150c4cee359b', 'Luis Lazuardi S.T.',
        'daliman95@example.com', '$2y$10$kvwNGHGct/jklnAvEHLGDupaayToagoo0qkYeo4BeStwwBU1lphGG', '0766 1629 233',
        'Psr. Aceh No. 650, Bekasi 37048, Maluku', '2022-01-13 03:45:18', '2022-01-13 03:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs`
(
    `id`         bigint UNSIGNED NOT NULL,
    `uuid`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `connection` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `queue`      text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `payload`    longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `exception`  longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `failed_at`  timestamp                               NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions`
(
    `id_institutions`        char(36) COLLATE utf8mb4_unicode_ci     NOT NULL,
    `name_institutions`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `contact_institutions`   varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_institutions`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `address_institutions`   text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `longitude_institutions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `latitude_institutions`  varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at`             timestamp NULL DEFAULT NULL,
    `updated_at`             timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`id_institutions`, `name_institutions`, `contact_institutions`, `email_institutions`,
                            `address_institutions`, `longitude_institutions`, `latitude_institutions`, `created_at`,
                            `updated_at`)
VALUES ('0264db2d-0f84-32ef-b732-d56d7b3d0493', 'PMI Jawa Barat Pusat', '(022) 2500095', 'halo@pmijabar.or.id',
        'Jl. Ir. H. Juanda No.426A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135', '-6.86324723578973',
        '107.62146541259783', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('04c10453-6762-3a69-9cd4-fdfc043164bd', 'PMI Jawa Timur Pusat', '(031) 5055173', ' jawa_timur@pmi.or.id',
        'Jl. Karang Menjangan 22 Surabaya', '-7.263475929872024', '112.76294054132508', '2022-01-13 03:45:18',
        '2022-01-13 03:45:18'),
       ('05993934-409e-3c74-9559-150c4cee359b', 'PMI Surabaya', '(031) 99443899', 'pmisurabaya@pmi.or.id',
        'Jl. Sumatera No.71, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281', '-7.270122660967294',
        '112.7485233269915', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('05fae751-7d73-3b41-a567-44843869588f', 'Unit Tranfusi Darah Palang Merah Indonesia Kota Surabaya',
        '(031) 531328', 'contact.pmi@gmail.com',
        'Jl. Embong Ploso No.7-15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271', '-7.267914199486669',
        '112.74577088043364', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('07f00675-121a-3c22-9f77-97e21324aeeb', 'Palang Merah Indonesia Kabupaten Karawang', '(0267) 405190',
        'karang.pmi@yahoo.com',
        'Jl. Jend.Ahmad Yani No.68, By Pass, Nagasari, Kec. Karawang Bar., Kabupaten Karawang, Jawa Barat 41314',
        '-6.299290', '107.299850', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('0a2fdb17-2d3e-3949-9f36-68cf14b941e5', 'PMI Kota Bandung', '(022) 4207052', 'pmi.bandung@pmijabar.or.id',
        'Jl. Aceh No.79, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114', '-6.90850812347344',
        '107.61962559763123', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('2217c28f-d59c-3ab1-860c-d2cce27b2a9f', 'PMI Bogor', '(0251) 832 4080', 'sekretariat@rspmibogor.or.id',
        'Jl. Rumah Sakit I, RT.01/RW.08, Tegallega, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16129', '-6.614890',
        '106.812890', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('272f8cd3-f856-37f0-ac40-94c3b36d52da', 'PMI (Palang Merah Indonesia) Kota Bekasi', '(021) 88960247',
        'markas@pmikotabekasi.or.id',
        'Jl. Pramuka No.1, RT.006/RW.006, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141', '-6.240870',
        '107.000640', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('537b0937-ddf0-3143-afb9-5511d880d50c', 'Unit Donor Darah PMI Kota Semarang', '(024) 3515050',
        'kota_semarang@pmi.or.id',
        'Jl. Mgr Sugiyopranoto No.31, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131',
        '-6.984000', '110.408450', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('731ef6df-6171-33fd-bd05-93cd76db2cdd', 'PMI Cabang Kota Kediri', '(0354) 689072', 'pmikediri@pmi.co.id',
        'Jl. Mayor Bismo No.15, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64121', '-7.795520', '112.009530',
        '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('9aa2e5e7-3186-3d65-9b53-75f74c42b1eb', 'Klinik PMI Sokaraja / UDD PMI Kab Banyumas', '(0281) 6441014',
        'pmisokaraja@gmail.com',
        'Jl. Pekaja No.37, Dusun II Sokaraja Tengah, Sokaraja Tengah, Kec. Sokaraja, Kabupaten Banyumas, Jawa Tengah 53181',
        '-7.461380', '109.286360', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('9d25e4f1-fbaf-359e-9e45-890677a67c0d', 'PMI Kota Surakarta', '(0271) 646505', 'kota_surakarta@pmi.or.id',
        'Jl. Kolonel Sutarto No.58, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', '-7.559450', '110.842530',
        '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('9e33b53c-d6e2-3b2b-9335-0c6b626981d3', 'PMI Palang Merah Indonesia', '6285755538777', 'malang@pmi.co.id',
        'Jl. Raya Sidorahayu, Losari, Sidorahayu, Kec. Wagir, Kabupaten Malang, Jawa Timur 65158', '-8.012460',
        '112.594800', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('9ed81d0a-e58a-3d0b-9dd3-91eafab5266f', 'Palang Merah Indonesia Banyuwangi', '(0332) 421868',
        'cspmibanyuwangi@pmi.co.id',
        'Jl. R. A. Kartini, Kepatihan, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68411', '-8.211760',
        '114.377610', '2022-01-13 03:45:18', '2022-01-13 03:45:18'),
       ('f1b7740b-30c6-38ae-98f6-a994afbf55e6', 'Palang Merah Indonesia Kabupaten Sukabumi', '(0266) 236447',
        'info@pmisukabumikab.org', 'Jl. Raya Sukabumi, Sukaresmi, Kec. Cisaat, Kabupaten Sukabumi, Jawa Barat 43152',
        '-6.912208', '106.904933', '2022-01-13 03:45:18', '2022-01-13 03:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations`
(
    `id`        int UNSIGNED NOT NULL,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch`     int                                     NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES (1, '2014_10_12_000000_create_users_table', 1),
       (2, '2014_10_12_100000_create_password_resets_table', 1),
       (3, '2019_08_19_000000_create_failed_jobs_table', 1),
       (4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
       (5, '2022_01_03_072915_create_donators_table', 1),
       (6, '2022_01_03_073540_create_institutions_table', 1),
       (7, '2022_01_03_073932_create_status_donors_table', 1),
       (8, '2022_01_03_074537_create_employees_table', 1),
       (9, '2022_01_03_074647_create_blood_bank_table', 1),
       (10, '2022_01_03_074814_create_donor_submissions_table', 1),
       (11, '2022_01_03_074929_create_donor_events_table', 1),
       (12, '2022_01_03_075110_create_donor_notes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets`
(
    `email`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens`
(
    `id`             bigint UNSIGNED NOT NULL,
    `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `tokenable_id`   bigint UNSIGNED NOT NULL,
    `name`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`          varchar(64) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `abilities`      text COLLATE utf8mb4_unicode_ci,
    `last_used_at`   timestamp NULL DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_donor`
--

CREATE TABLE `status_donor`
(
    `id_status_donor`   tinyint UNSIGNED NOT NULL,
    `name_status_donor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_donor`
--

INSERT INTO `status_donor` (`id_status_donor`, `name_status_donor`)
VALUES (1, 'Menunggu Persetujuan'),
       (2, 'Dijadwalkan'),
       (3, 'Diterima'),
       (4, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
    `id`                bigint UNSIGNED NOT NULL,
    `name`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password`          varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `remember_token`    varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`        timestamp NULL DEFAULT NULL,
    `updated_at`        timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
    ADD PRIMARY KEY (`id_blood_bank`);

--
-- Indexes for table `donators`
--
ALTER TABLE `donators`
    ADD PRIMARY KEY (`id_donators`),
  ADD UNIQUE KEY `donators_email_donators_unique` (`email_donators`);

--
-- Indexes for table `donor_events`
--
ALTER TABLE `donor_events`
    ADD PRIMARY KEY (`id_donor_events`);

--
-- Indexes for table `donor_notes`
--
ALTER TABLE `donor_notes`
    ADD PRIMARY KEY (`id_donor_notes`);

--
-- Indexes for table `donor_submissions`
--
ALTER TABLE `donor_submissions`
    ADD PRIMARY KEY (`id_donor_submissions`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
    ADD PRIMARY KEY (`id_employees`),
  ADD UNIQUE KEY `employees_email_employees_unique` (`email_employees`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
    ADD PRIMARY KEY (`id_institutions`),
  ADD UNIQUE KEY `institutions_email_institutions_unique` (`email_institutions`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status_donor`
--
ALTER TABLE `status_donor`
    ADD PRIMARY KEY (`id_status_donor`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_donor`
--
ALTER TABLE `status_donor`
    MODIFY `id_status_donor` tinyint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
