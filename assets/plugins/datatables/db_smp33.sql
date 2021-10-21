-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `db_guru`;
CREATE TABLE `db_guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `lulusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `mengajar` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alamat` text,
  `no_hp` varchar(15) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_guru` (`id`, `nama`, `nip`, `lulusan`, `email`, `jabatan`, `mengajar`, `foto`, `alamat`, `no_hp`, `deskripsi`, `password`, `created_at`) VALUES
(9,	'Yogi Prayoga S.Kom',	'12348490238',	'teknik informatika umb',	'yogi@gmail.com',	'GURU',	'web devlopmen',	'person_4.jpg',	'Desa selagan jaya sp3',	'082281735896',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,',	NULL,	'1631942596'),
(10,	'Azan Ansory S.Kom',	'31231234324',	'Teknik informatika umb',	'azan@gmail.com',	'KEPALA SEKOLAH',	'Desai grafis',	'person_1.jpg',	'curup',	'083838384',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,',	NULL,	'1632804034'),
(11,	'Ronal Charles S.Hut',	'234323423423',	'Teknik informatika umb',	'ronal@gmail.com',	'WAKIL KEPALA SEKOLAH',	'photoshop',	'person_41.jpg',	'mukomuko',	'9084023984',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,',	NULL,	'1632804087');

DROP TABLE IF EXISTS `db_informasi`;
CREATE TABLE `db_informasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `ouner_post` varchar(225) NOT NULL,
  `slug_judul` varchar(50) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_informasi` (`id`, `judul`, `isi`, `foto`, `ouner_post`, `slug_judul`, `created_at`) VALUES
(5,	'Ppkm Di Perpanjang Semua  Ds',	'Semua siswa di harapakan belajar di rumah masing-masing dan pembelajaran di lakukan secara daring da',	'-20200430121342.jpg',	'Azan ansory',	'ppkm-di-perpanjang-semua',	'1629125977'),
(6,	'Sekolah Di Liburkan Dan Siswa Belajar Di Rumah',	'Di perhatikan semua pemelajaran di lakukan di rumah dan semua siswa agar selalu update informasi di sistem akademik sekolah',	'-20200430120422.jpeg',	'Azan ansory',	'sekolah-di-liburkan-dan-siswa-belajar-di-rumah',	'1632189385'),
(7,	'Wajip Upacara Hari Senin',	'Diharapkan setiap  hari senin di harapkan semua siswa atau guru, tanpa kecuali di harapkan hadir dalam upacara hari senin',	'mentoring-dengan-profesional-20200430121728.jpg',	'Azan ansory',	'wajip-upacara-hari-senin',	'1632189844'),
(8,	'Sabtu Senam Bersama',	'senam sanggat penting bagi kesehatan tubuh dan dapat menambah vitamin d',	'pentas-seni-tahunan-20200430121831.jpg',	'yogi prayoga',	'sabtu-senam-bersama',	'1632197550');

DROP TABLE IF EXISTS `db_kegiatan`;
CREATE TABLE `db_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_kegiatan` (`id`, `judul`, `photo`, `keterangan`, `slug`, `created_at`) VALUES
(4,	'Upacara',	'lab-pemasaran-20200430115719.jpg',	'<p>upacara <strong><em>merupkan kegaitan </em></strong>yanga sangat wajip dilakukan setiap hari senin pagi</p>\r\n',	'upacara',	'1631774303');

DROP TABLE IF EXISTS `db_profile`;
CREATE TABLE `db_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi_profile` text NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_profile` (`id`, `isi_profile`, `created_at`) VALUES
(3,	'<p><em><strong>Lorem&nbsp;</strong></em>ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Molestiae&nbsp;in&nbsp;facere&nbsp;nisi&nbsp;dicta&nbsp;hic&nbsp;dolor&nbsp;commodi&nbsp;asperiores,&nbsp;vel&nbsp;natus&nbsp;fugit,&nbsp;veniam&nbsp;blanditiis&nbsp;fuga&nbsp;alias&nbsp;neque&nbsp;quae&nbsp;pariatur&nbsp;exercitationem&nbsp;est.<em><strong>&nbsp;Quos.</strong></em></p>\r\n',	1631867364);

DROP TABLE IF EXISTS `db_siswa`;
CREATE TABLE `db_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) DEFAULT NULL,
  `nisn` varchar(15) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_siswa` (`id`, `nis`, `nisn`, `nama`, `gender`, `asal_sekolah`, `tgl_lahir`, `nik`, `alamat`, `no_hp`, `email`, `created_at`) VALUES
(1,	'749872472',	'7498724722',	'Rahmat Hidaya Tulah	',	'LAKI-LAKI	',	'Kepahiang',	'2021-07-27	',	'373774929783928',	'Desa selgan jaya',	'082281735896',	'rahmat@gmail.com',	''),
(2,	'749872472',	'7498724722',	'Cristina Austin	',	'PEREMPUAN',	'Kepahiang',	'2021-07-27	',	'84894848029384',	'Desa agung jaya',	'082281735896',	'cristina@Gmail.com',	''),
(3,	'12342323',	'313432321',	'Diana Harianti	',	'PEREMPUAN',	'Kepahiang',	'2021-07-22	',	'8492384023840289',	'Desa Lubuk pinanag',	'082281735896',	'diana@gmail.com',	''),
(4,	'12394994',	'99393201',	'Sinta Gustina	',	'PEREMPUAN',	'Kepahiang',	'2021-07-15	',	'8290384023984209',	'Desa Air dikit',	'082281735896',	'sinta@gmail.com',	'');

DROP TABLE IF EXISTS `db_siswabaru`;
CREATE TABLE `db_siswabaru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_siswabaru` (`id`, `nama`, `gender`, `asal_sekolah`, `tempat_lahir`, `tgl_lahir`, `nik`, `alamat`, `no_hp`, `email`) VALUES
(1,	'andi',	'LAKI-LAKI',	'sd 03',	'mukomuko',	'2021-09-10',	'32124234',	'fsdfdsfdsf',	'424234',	'andi@gmail.com');

DROP TABLE IF EXISTS `db_sosial_media`;
CREATE TABLE `db_sosial_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) DEFAULT NULL,
  `facebook` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `twitter` varchar(225) DEFAULT NULL,
  `tik-tok` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_sosial_media` (`id`, `email`, `facebook`, `instagram`, `twitter`, `tik-tok`) VALUES
(1,	'smknvkph@gmail.com',	'https://web.facebook.com/azan',	'https://www.instagram.com/',	'https://twitter.com/',	'https://www.tiktok.com/');

DROP TABLE IF EXISTS `db_visimisi`;
CREATE TABLE `db_visimisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_visimisi` (`id`, `isi`, `jenis`) VALUES
(2,	'Mewujudkan pendidikan untuk menghasilkan prestasi dan lulusa berkwalitas tinggi yang peduli dengan lingkungan hidup	',	'MISI'),
(3,	'Mewujudkan sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif	',	'MISI'),
(4,	'Mewujudkan sarana prasarana reprensentatif dan up to date	',	'MISI'),
(5,	'Mewujudkan sarana prasarana reprensentatif dan up to date',	'VISI'),
(6,	'Mewujudkan pendidikan untuk menghasilkan prestasi dan lulusa',	'VISI');

DROP TABLE IF EXISTS `struktur_organisasi`;
CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `struktur` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `struktur_organisasi` (`id`, `struktur`) VALUES
(1,	'struktur_organisai.png');

DROP TABLE IF EXISTS `userapp`;
CREATE TABLE `userapp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto_userapp` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `roles` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `userapp` (`id`, `nama`, `email`, `alamat`, `foto_userapp`, `deskripsi`, `roles`, `password`) VALUES
(1,	'Azan ansory',	'azan@gmail.com',	'Kepahiyang, bengkulu Indonesia',	'person_9.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	1,	'$2y$10$M6mF1.T582QBg3FWY/Mjku3CKpObnvsYN3dL25RAdzdCUt7RcQQxy'),
(2,	'yogi prayoga',	'yogi@gmail.com',	'Desa selgan jaya',	'person_1.jpg',	'Saya merupakan seorang admin yang bertangung jawat atas semua tugas yang di berika oleh saya',	1,	'$2y$10$fV8nzVbjDZVd81RobUtAdOCjRds1jqM8TXPDe0/51pWJ9cDVXj6O2');

-- 2021-10-21 09:14:04
