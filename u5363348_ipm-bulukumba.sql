-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2023 at 09:39 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5363348_ipm-bulukumba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `idAdmin` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `tanggalLahir` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `idAdmin`, `nama`, `kategori`, `noHp`, `tanggalLahir`, `foto`, `password`) VALUES
(3, 'muhammadkhaerilzaid@gmail.com', 'Khaeril Maswal Zaid', 'IPMers Work', '085343652494', '1999-03-07', 'Khaeril Maswal Zaid60994dce08283.jpg', 'KMZ739165'),
(12, 'ipm-bulukumba.or.id', 'PD IPM Bulukumba', 'IPMers Work', '001', '1961-07-18', 'PD IPM Bulukumba64aad8a2937fd.png', '18071961');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `time` varchar(100) NOT NULL,
  `oleh` varchar(75) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `kategori` varchar(35) NOT NULL,
  `artikel` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `waktu`, `time`, `oleh`, `judul`, `link`, `kategori`, `artikel`, `foto`) VALUES
(17, '2021-06-05', '18:45', '1620211550', 'El-Media Nuun Panrita Lopi', 'Gelar PKD TM-1, PR IPM SMKM Bulukumba usung tema \"Meregulasi Kader, Teguhkan Spirit di Masa Pandemi\"', 'gelar-pkd-tm-1,-pr-ipm-smkm-bulukumba-usung-tema-meregulasi-keder,-teguhkan-spirit-di-masa-pandemi-93', '1', '<p><strong>Bulukumba,- </strong>Pimpinan Ranting Ikatan Pelajar Muhammadiyah (PR. IPM) SMK Muhammadiyah Bulukumba gelar Pelatihan Kader Dasar Taruna Melati I (PKD TM 1). Yang bertempat di SMK Muhammadiyah Bulukumba. Kegiatan tersebut dihadiri oleh Pimpinan Daerah Ikatan Pelajar Muhammadiyah (PD IPM) Bulukumba, Kepala Sekolah SMK Muhammadiyah Bulukumba, dan Peserta Pelatihan Kader Dasar Taruna Melati I (PKD TM I). (05/05).</p><p>Kegiatan tersebut akan berlangsung selama 3 hari 2 malam yang dimana dimulai pada hari ini tanggal 5 Mei dan berakhir pada tanggal 8 Mei 2021.<br>Dengan mengusung tema \"Meregulasi Kader, Teguhkan Spirit di Masa Pandemi\" para peserta PKD TM I diharapkan nantinya mampu menyesuaikan hidup di manapun ia berada dan tetap semangat&nbsp;<br>dalam menjalani kehidupan meski pandemi melanda.</p><p>Untuk mengenali dan mencintai ipm, maka terlebih dahulu mesti mengikuti perkaderan PKD TM.1 IPM ungkap Herman, S.Pd. M. Pd selaku Kepala Sekolah SMk Muhammadiyah Bulukumba.</p><p>Mesti pandemi yang menjadi salah satu kendala, &nbsp;tidak menyurutkan semangat PR. IPM SMK Muhammadiyah Bulukumba untuk tetap melaksanakan PKD TM 1. Tentunya hal ini dengan tetap mematuhi protokol kesehatan.</p><p>Melalui PKD TM 1 ini, diharapkan mampu merefresh kembali apa yang seharusnya dipahami. Dan para peserta dapat mengikuti dan mengutip segala hal yang ia dapatkan dalam PKD TM 1. Serta, bisa lahir kembali kader-kader militan yang dapat meneruskan giroh perjuangan dalam ber-IPM.</p>', '16092770ac8068.jpg'),
(18, '2021-06-05', '22:23', '1620311029', 'IPMawati Lely', 'Puisi : Ragam Syukur', 'ragam-syukur-17', '3', '<p>Mata terus memandang,&nbsp;<br>Pada petua yang begitu hebat.<br>Hati begitu iri, tersentil.&nbsp;<br>Bahkan kaki bergetar, malu dengan diri sendiri</p><p>Pada dia yang berdiri dengan satu kaki,&nbsp;<br>Membuat hatiku merintih dengan keadaanku.<br>Aku terdiam di sebuah sudut ruang<br>Merenung, dan menyesal dgn apa yang tak kusyukuri</p><p>Jiwa yang selalu alpa dan lupa<br>Meringkih, dengan berharap&nbsp;<br>Aku mendapat kesempatan tuk mngucap syukur kembali.</p><p>&nbsp;</p><p>&nbsp;</p><p>Penulis: Ipmawati Lely (Kabid KDI PR IPM MAM Palampang Priode 2015-2016)</p>', '36093fbf2d2127.jpg'),
(19, '2021-06-06', '22:48', '1620312502', 'El-Media Nuun Panrita Lopi', 'Terapkan protokol kesehatan, PR IPM MA Muhammadiyah Palampang Priode 2021-2022 Resmi Dilantik', 'terapkan-protokol-kesehatan-pr-ipm-ma-muhammadiyah-palampang-priode-2021-2022-resmi-dilantik-23', '1', '<p>Pimpinan Ranting Ikatan Pelajar Muhammadiyah MA Muhammadiyah Palampang gelar pelantikan pengurus baru priode 2021-2022 dengan mengusung tema \"Menghidupkan Kepemimpinan yang Kreatif, Progresif, Kritis dan Berintegritas Tinggi\"&nbsp; bertempat di MA Muhammadiyah Palampang yang dihadiri oleh Kepala Madrasah dalam hal ini diwakili oleh WAKAMAD Kesiswaan, PD IPM Bulukumba, PC Muhammadiyah Kec.Rilau Ale, Pembina IPM, Dewan Guru, dan Kakanda Alumni serta pengurus priode sebelumnya.</p><p>Berkat rahmat Allah _<i>Subhana Wataala</i>_ dan Semangat Pimpinan Ranting terpilih priode 2021-2022 menjadi faktor pendorong suksesnya prosesi Pelantikan tersebut.</p><p>Dengan tetap mematuhi protokol kesehatan kegiatan tersebut berlangsung selama 2 hari 1 malam yang dimulai pada kamis, 6 mei 2021 dan berakhir pada jumat 7 mei 2021.</p><p>\"Tugas sebagai Pimpinan Ranting tidak hanya berkiprah pada rana IPM saja, namun mampu berperan aktif dalam memberikan kontribusi pada madrasah disegala bidang baik akademik maupun non akademik\" ungkap WAKAMAD Kesiswaan.</p><p>Usai pelantikan dilanjutkan&nbsp; penataran pimpinan dengan memberikan pembekalan kepada pimpinan ranting yang telah dilantik seputar Kepemimpinan dan pemaparan struktur pimpinan ranting tentang tugas dan arah program yang ingin di realisasikan kedepannya , dibawakan oleh pembina IPM ( Kakanda Andi munir suardi) kemudian diakhiri pembekalan sistem administrasi IPM ,dibawakan oleh PD.IPM.Bulukumba.</p>', '1609401b50cf82.jpg'),
(21, '2021-06-07', '17:07', '1620637642', 'El-Media Nuun Panrita Lopi', 'Puisi : Tak Sebaik Itu', 'puisi-:-tak-sebaik-itu-47', '3', '<p>Pada jilbab yang kerap kukenakan,&nbsp;<br>atau pakaianku yang longgar&nbsp;<br>menyapu jalan..</p><p>pakaian ini,<br>Jilbab ini,&nbsp;<br>Itu bukan pertanda bahwa aku malaikat&nbsp;<br>yang bersih dari dosa.</p><p>aku tak sebaik itu.&nbsp;<br>Tidak pula seburuk itu.</p><p>Aku hanya seorang hamba,&nbsp;<br>Yang Allah tutupi aib-aibnya..&nbsp;<br>Aku adalah si pendosa,&nbsp;<br>yang Allah tampakkan kebaikan ku saja.</p><p>Maka tolong jangan hakimi aku<br>Apalagi menyalahkan pakaian ku.&nbsp;<br>Doakan saja aku Istiqomah,&nbsp;<br>Pada jalanku menuju sang Pencipta..</p><p>Penulis: IPMawati Lely (Kabid KDI PR IPM MAM Palampang Priode 2015-2016</p>', '36098f7b4a8353.jpg'),
(22, '2021-05-12', '21:17', '1620825433', 'IPMawati Lely', 'Puisi : Aku Pamit', 'puisi-:-aku-pamit-91', '3', '<p>Tak pernah lagi ku lukis rasa<br>Setelah sebulan kau menjadikan kami betul2 merasakan nikmat iman,<br>Kau datang mengetuk pintu hati yang lama membeku<br>Disitulah kami sangat dekat denganmu.<br>Namun tak cukup beberapa saat, kau kembali pamit pada tuanmu yang masih merindu</p><p>Belum sempurna ibadah dihari kemarin,&nbsp;<br>Solat yang kadang belum khusyuk<br>Tilawah yang kadang masih bolong-bolong<br>Dan dzikir yang belum pernah sempurna tuk selalu memuji-Mu</p><p>Rasa-rasanya baru kemarin.<br>Dan kini kau kan pamit tuk sebelas bulan?&nbsp;<br>Terlampau lama..&nbsp;<br>Tapi jika demikian, akan kucoba pantaskan diri untuk istiqomah dengan amalan yang tersisa</p><p>Beberapa jam lagi kau kan berkemas, lalu pergi.<br>Entah di kehidupan berikutnya &nbsp;kita masih dipertemukan,&nbsp;<br>Ataukah jangan-jangan nafas telah menyatu dengan tanah?</p><p>Duhai jiwa, setiap amalan telah pergi&nbsp;<br>Bersama angin yang begitu sejuk malam ini.<br>Semoga saja tidak diterpa oleh riuhnya angin &nbsp;yang mengamuk diluar sana<br>Sebab dia juga tak rela jika kau pergi meninggalkan</p><p><br>@ramadhan</p><p>___ melukisrasa, nmt.2021</p>Penulis: Ipmawati Lely (Kabid KDI PR IPM MAM Palampang Priode 2015-2016)</p>', 'El-Media Nuun Panrita Lopi609bd5570ec67.jpg'),
(23, '2021-05-18', '14:25', '1621319146', 'Ipmawati Nurlaely', 'Puisi : Duka Palestina, Duka kita', 'puisi-:-duka-palestina,-duka-kita-61', '3', '<p>Kembali terulang..&nbsp;<br>Belum lagi kering air mata kemarin.<br>Menyisakan luka yang begitu dalam<br>Mereka menjerit, kesakitan.<br>Berharap pembebasan segera menghampiri,<br>Agar senyum kembali merekah<br><br>Sadarlah..&nbsp;<br>Mereka seakan hidup di atas bom<br>Kapan saja bisa meledak, memusnahkan segala yang dicinta.<br>Atas pembantaian kaum zionis yang terkutuk&nbsp;<br>Membuat mereka ketakutan, tak tahu mau kemana</p><p>Tinggallah diri berpangku tangan<br>Tak bisa berbuat apa-apa<br>Tapi masih ada daya dan kekuatan untuk kita tengadahkan<br>Masih ada kening untuk menampung segala pinta</p><p>Yaa Rabb..&nbsp;<br>Kami mohon pembebasan untuk saudara muslim kami di palestina&nbsp;<br>Kami mohon keadilan segera, dan berikanlah azab yang pedih untuk kaum kafir</p><p>Hati merasa terpanggil dengan jeritan saudara kami disana<br>Namun tak ada yang bisa kami lakukan<br>Hanya doa yang bisa kami panjatkan,&nbsp;<br>Tolong lindungilah mereka semua.&nbsp;<br>Demi Islam yang sejahtera.</p><p>#free palestina</p><p>__ melukisrasa, nmt.2021<br>__ nurlaely.MT</p><p>Penulis: Ipmawati Nurlaely (Kabid KDI PR IPM MAM Palampang Priode 2015-2016)</p>', 'Ipmawati Nurlaely60a35de76d1e6.jpg'),
(24, '2021-05-18', '19:58', '1621339111', 'El-Media Nuun Panrita Lopi', 'Bentuk 2 PC IPM baru, Ketum PD IPM Bulukumba: \"Tetaplah jaga ciri khas kader IPM Bulukumpa dan Rilau Ale\"', 'bentuk-2-pc-ipm-baru,-ketum-pd-ipm-bulukumba:-tetaplah-jaga-ciri-khas-kader-ipm-bulukumpa-dan-rilau-ale-3', '1', '<p>Pimpinan Daerah Ikatan Pelajar Muhammadiyah (PD IPM) Kabupaten Bulukumba kembali membentuk 2 Cabang Ikatan Pelajar Muhammadiyah (IPM) sekaligus, yakni Cabang Rilau Ale dan Cabang Bulukumpa yang ditetapkan di Masjid Nurul Ihsan Samaenre Desa Bulo-Bulo. (05/21)</p><p>Pada penetapan tersebut dihadiri langsung oleh Ketua Umum PD IPM Kabupaten Bulukumba beserta Alumni IRM/IPM.<br>Yang dimana hasil dari musyawarah ini menetapkan Muh. Ishak sebagai Ketua Umum Pimpinan Cabang IPM &nbsp;Rilau Ale dan A. Adlu Rahman sebagai Pimpinan Cabang IPM Bulukumpa.</p><p>Pembentukan kedua cabang ini tak terlepas dari program kerja PD IPM Kabupaten Bulukumba, terkhusus dari Bidang Organisasi. Tak lepas juga, instruksi dari Lembaga Pengembangan Cabang dan Ranting (LPCR) Pimpinan Daerah Muhammadiyah Bulukumba yang meminta agar tiap ortom tingkat daerah segera membentuk cabang ortom di setiap kecamatan khususnya Ortom Ikatan Pelajar Muhammadiyah (IPM) sebagai ujung tombak kaderisasi di persyarikatan Muhammadiyah.</p><p>\"IPM Rilau Ale kita kenal dengan ciri khas kadernya yang mengarah ke kader keummatan namun juga siap terjun kerana kebangsaan serta kefanatikannya yang tinggi terhadap Ideologi Muhammadiyah, sehingga salah satu tugas selaku ketua terpilih untuk tetap menjaga ciri khas kader tersebut\" Ungkap Khaeril Maswal Zaid selaku Ketua Umum PD IPM Kabupaten Bulukumba dan juga merupakan kader IPM&nbsp;yang lahir dari Rilau Ale . â€œInsyaAllah dengan terbentuknya 2 Cabang baru IPM ini akan menjadi pemantik awal terbentuknya Cabang IPM di kecamatan lainnyaâ€ Lanjut Khaeril.</p><p>Dengan dibentuknya 2 Cabang IPM tersebut, diharapkan pemimpin yang terpilih dapat menjaga amanahnya dengan baik sampai masa kepemimpinan usai. Dan mampu melahirkan kader-kader yang dapat melanjutkan estafet kepemimpinan.</p>', 'El-Media Nuun Panrita Lopi60a3abe3094ab.jpg'),
(27, '2021-05-20', '12:02', '1621483348', 'El-Media Nuun Panrita Lopi', 'Tak biarkan ditelan zaman, Personil PD IPM Bulukumba Telusuri sejarah IPM di Bulukumba', 'tak-biarkan-ditelan-zaman,-personil-pd-ipm-bulukumba-telusuri-sejarah-ipm-di-bulukumba-35', '1', '<p>BULUKUMBA - Menilik sejarah Ikatan Pelajar Muhammadiyah (IPM) di Bulukumba, Pimpinan Daerah Ikatan Pelajar Muhammadiyah (PD IPM) Kabupaten Bulukumba melakukan kunjungan kerumah Alumni IRM/IPM. Yang dimana dalam kunjungan tersebut dihadiri oleh Ketua Umum, Sekretaris Umum, dan Ketua Bidang Perkaderan. (20/05).</p><p>Kunjungan yang dilakukan, tak lain untuk mencari tahu sejarah awal terbentuknya IPM di Kabupaten Bulukumba. Selain itu, juga merupakan realisasi dari salah satu program kerja PD IPM Kabupaten Bulukumba.</p><p>Dalam kegiatan tersebut, PD IPM Kabupaten Bulukumba mengunjungi rumah Ketua Umum PD IPM periode 1994-1996 yaitu A.Muh. Safwan dan Ketua Umum PD IPM Periode 1996-1998 yaitu Ambo Sakka Yunus. Dan sangat diapresiasi oleh keduanya.</p><p>\"Mencari tahu sejarah IPM di Kabupaten Bulukumba sangat bagus, agar kader juga bisa tahu bagaimana sejarah sehingga IPM di Bulukumba dapat terbentuk\", ujar Ambo Sakka Yunus.</p><p>Terbentuknya IPM di Bulukumba melewati banyak hal dan tantangan yang tidak mudah. Ada banyak lika-liku yang dihadapi sehingga IPM di Bulukumba akhirnya bisa hadir dan terbentuk.</p><p>\"IPM di Kabupaten Bulukumba tidak terbentuk begitu saja ada banyak lika-liku yang harus dilewati\" tutur A.Muh. Safwan</p><p>Walaupun tahun awal mula IPM di Kabupaten Bulukumba belum terkuak, tak menyurutkan personil PD IPM Kabupaten Bulukumba untuk mencari tahu lebih dalam sejarah awal IPM di Bulukumba.<br>Kunjungan ke rumah alumni IRM/IPM akan terus berlanjut hingga sejarah awal IPM di Bulukumba bisa diketahui seutuhnya.</p>', 'El-Media Nuun Panrita Lopi60a5dda5c3714.jpg'),
(30, '2021-05-22', '12:15', '1621656927', 'Ipmawati Nurlaely', 'Puisi : Sejuta Cinta untuk Palestina', 'sejuta-cinta-untuk-palestina-42', '3', '<p>&nbsp;</p><p>Teruntuk jiwa dan atas nama kemanusiaan..&nbsp;<br>Sejuta cinta dan panggilan dari saudara kita</p><p>Kini tragedi kemarin kembali terulang..&nbsp;<br>Belum lagi kering air mata kemarin.<br>Menyisakan luka yang begitu dalam<br>Mereka menjerit, kesakitan.<br>Berharap pembebasan segera menghampiri,<br>Agar senyum kembali merekah</p><p>Sadarlah..&nbsp;<br>Mereka seakan hidup di atas bom<br>Kapan saja bisa meledak, memusnahkan segala yang dicinta.<br>Atas pembantaian kaum zionis yang terkutuk&nbsp;<br>Membuat mereka ketakutan, tak tahu mau kemana.</p><p>Tinggallah diri berpangku tangan.<br>Tak bisa berbuat apa-apa<br>Hanya bisa berkaca-kacaðŸ’§</p><p>Tapi,<br>Masih ada daya dan kekuatan untuk kita tengadahkan.<br>Masih ada kening untuk menampung segala pinta.<br>Dan masih ada tempat tuk bersujud, memohon kepadaNya,<br>Pemilik jagad raya</p><p>Yaa Rabb..&nbsp;<br>Kami mohon pembebasan untuk saudara muslim kami di palestina&nbsp;<br>Kami mohon keadilan segera, dan berikanlah azab yang pedih untuk kaum kafir</p><p>Yaa Rabb.. Penguasa hari pembalasan, pemilik segala jiwa, pemegang segenap raga.&nbsp;<br>Kami memohon ampun, kami memohon maaf yang berhimpunâ€” kami bertaubat sebelum datangnya kiamat, kami meneskan air mata sebelum kisah kami tamat.</p><p>Kami memohon pertolongan, tak ada yang hendak Engkau beri kecuali pastilah ada hikmah dan ketentuannya teramat baik.&nbsp;<br>Tak ada sesuatu yang hendak terjadi, kecuali pastilah ada kebahagiaan yang apik.</p><p>Yaa Rabb, atas kelemahan hati kami<br>Kami merasa terpanggil dengan jeritan saudara kami disana<br>Namun tak ada yang bisa kami lakukan<br>Hanya doa yang bisa kami panjatkan,&nbsp;<br>Tolong lindungilah mereka semua.</p><p>#free palestina</p><p>__ Dariku, sahabat virtualmu<br>__ Nurlaely M Thamrin.nmt</p><p>Penulis: Ipmawati Nurlaely (Kabid KDI PR IPM MAM Palampang Priode 2015-2016)</p>', 'Ipmawati Nurlaely60a883db53b63.jpg'),
(38, '2021-05-28', '00:57', '1622134654', 'El-Media Nuun Panrita Lopi', 'PR IPM MAM Palampang laksanakan rakerpim di pantai limbua', 'pr-ipm-mam-palampang-laksanakan-rakerpim-di-pantai-limbua-13', '1', '<p>&nbsp;</p><p>Pimpinan ranting ikatan Pelajar Muhammadiyah MA.Muhammadiyah Palampang priode 2021-2022 gelar RAKERPIM (rapat kerja Pimpinan) merupakan salah satu bentuk kerja nyata untuk Kesuksesan kepengurusan 1 tahun kedepan sesuai cita-cita yang telah di usung pada tema pelantikan sebelumnya, yakni _\"menghidupkan Kepemimpinan yang kreatif, progresif, kritis dan berintegritas tinggi\"_</p><p>Dengan tetap menjaga kebersihan dan kesehatan &nbsp;atas berkat Rahmat ALLAH _subhana waa taala_ kegiatan tersebut berlangsung selama kurang lebih 5 jam , dimulai pada jam 11.25 dan berakhir &nbsp;jam 15.00 di pantai permandian limbua pada hari Rabu tanggal 26 Mei 2021 M bertepatan pada 14 Syawal 1442 H.</p><p>Kegiatan ini menunjukkan pergerakan yang progresif Dengan prosesi yang terstruktur yang dihadiri dan didukung langsung oleh kepala madrasah dan WAKAMAD Kesiswaan yang dipandu oleh Pembina IPM itu sendiri.</p><p>Tentunya dalam kegiatan tersebut banyak arahan dan amanat yang di sampaikan oleh kepala madrasah dan WAKAMAD Kesiswaan dalam membuat konsep program kerja untuk 1 tahun kedepan, sehingga kegiatan tersebut berlangsung dengan baik dan telah ditetapkan beberapa program kerja yang perlu direalisasian kedepannya.</p><p>Dari kegiatan tersebut Pimpinan ranting ikatan Pelajar Muhammadiyah MA. Muhammadiyah Palampang priode 2021-2022 diharapkan mampu merealisasikan setiap program yang telah diusung dengan baik sesuai yang telah ditargetkan, tentunya tetap dengan semangat dan partisipasi pengurus itu sendiri.</p>', 'El-Media Nuun Panrita Lopi60afcf7de7d6f.jpg'),
(40, '2021-05-28', '11:57', '1622174276', 'El-Media Nuun Panrita Lopi', 'Kembali perkuat silaturahim pasca LDK, Kepala Sekolah SMPN 31 Bulukumba berharap Kegiatan LDK ala IPM terus Berkelanjutan', 'kembali-perkuat-silaturahim-pasca-ldk,-kepala-sekolah-smpn-31-bulukumba-berharap-kegiatan-ldk-ala-ipm-terus-berkelanjutan-21', '1', '<p>&nbsp;</p><p>BULUKUMBA - Pimpinan Daerah Ikatan Pelajar Muhammadiyah (PD IPM) Kabupaten Bulukumba kembali mengunjungi Sekolah Menengah Pertama Negeri (SMPN) 31 Bulukumba yang berlokasi di Bontotiro. Dalam kunjungan tersebut, dihadiri oleh Sekretaris Bidang Perkaderan (SekBider) dan Ketua Bidang Pengkajian Ilmu Pengetahuan (Kabid PIP). (27/05).</p><p>Kunjungan tersebut, tak lain untuk bersilaturahim serta menyerahkan Sertifikat peserta Latihan Dasar Kepemimpinan (LDK) yang telah dilaksanakan oleh SMPN 31 Bulukumba 2019 lalu. Dalam kegiatan LDK tersebut, PD IPM Kabupaten Bulukumba diberikan kepercayaan untuk mengelolanya.</p><p>PD IPM Kabupaten Bulukumba disambut hangat oleh Kepala Sekolah SMPN 31 Bulukumba, dan beliau juga berharap bahwa kegiatan LDK ini akan terus berlanjut dan mempercayakan PD IPM Kabupaten Bulukumba untuk kembali mengelolanya.</p><p>\"Kegiatan LDK ini harapannya akan terus berlanjut, karna perlu adanya LDK rasa perkaderan IPM supaya mampu lahir pelajar yang punya semangat dalam belajar\" Ungkap Aminuddin, S.Pd. I selaku Kepala Sekolah SMPN 31 Bulukumba.</p><p>Hal tersebut pun direspon dengan baik, PD IPM Bulukumba berterima kasih karna telah dipercayakan untuk mengelola kegiatan LDK. Dan berharap kegiatan LDK berikutnya bisa dikelola lagi dan lebih baik dari sebelumnya.</p>', 'El-Media Nuun Panrita Lopi60b06a42373a8.jpg'),
(43, '2021-06-13', '23:45', '1623599155', 'Muh. Syainal Nur', 'MLB -IPM LIMITED EDITION 60th ANNIVERSARY-', 'mlb-ipm-limited-edition-hut-to-60-47', '2', 'Mohon maaf lahir dan batin, biarpun lebaran telah usai. Harapannya pintu maaf selalu terbuka dan kesadaran untuk meminta maaf selalu memenuhi hati kita sekalian. Permohonan maaf ini tulus kepada semua yang menyempatkan membaca kalimat-kalimat yang barangkali akan menjengkelkan, memang itulah yang diharapkan. Tulisan ini ditulis memang bertujuan menyinggung pihak yang \"mau\" tersinggung. Jika pun ada yang memilih sama dengan keresahan yang saya rasakan, saya tidak ingin mewakili siapapun.</p><p>PP Muhammadiyah secara resmi menerbitkan surat keputusan bernomor 1292/KEP/I.0/B/2021 pada penghujung ramadhan, ada 3 poin yang ditetapkan dalam SK tersebut salah satunya adalah penyelenggaraan Muktamar Luar Biasa (MLB). Tentu saja SK tersebut dimaksudkan untuk menetralkan kegaduhan yang terjadi dalam penyelenggaraan Muktamar XXII IPM. Untuk informasi selengkapnya soal kegaduhan tersebut bisa menghubungi pihak-pihak dibalik pintu, saya tidak cukup baik untuk menceritakannya lagian kita semua tahu meski tak banyak setidaknya tahu. Saya hanya ingin mengomentari kegaduhan tersebut sebagai sesuatu yang memang disengaja dan celakanya berhasil.</p><p>Meski SK PP Muhammadiyah telah menjawab semua pertanyaan yang tersisa pasca Muktamar XXII IPM dan website beserta akun-akun PP IPM mulai aktif kembali menandai roda organisasi mulai berjalan, namun beberapa pertanyaan kembali diajukan, anggap saja ini sikap tidak setuju dengan keputusan PP Muhammadiyah sebagaimana dalam surat sakti yang baru saja diterbitkan. Ini adalah keresahan pribadi yang coba saya sampaikan dengan baik, saya berharap ada respon untuk menjawab keresahan dan meyakinkan saya bahwa ini \"lebih\" baik. Saya juga menunggu meme dari teman-teman, hehehe.</p><p>Sebelum lanjut, saya ingin memberi sedikit pencerahan atau sekedar cocoklogi soal keputusan PP Muhammadiyah. Biarpun judul SK tersebut adalah Penyelenggaraan Muktamar Luar Biasa Ikatan Pelajar Muhammadiyah, ada 3 poin keputusan (saya persilahkan untuk membacanya). Singkatnya, dalam keputusan tersebut mengatakan seperti ini \"PP Muhammadiyah memerintahkan kepada PP IPM 2018-2020 untuk menyelenggarakan MLB dengan agenda pemilihan formatur, mengingat formatur sebelumnya telah dicabut hak dan kewajibannya. Artinya PP Muhammadiyah hanya membatalkan hasil pemilihan formatur &nbsp;tidak membatalkan keseluruhan hasil MUKTAMAR XXII. Kesimpulannya PEMBAHASAN AD/ART, LAPORAN PERTANGGUNG JAWABAN PP IPM 2018-2020 DAN PENETAPAN KETUA UMUM DAN SEKRETARIS JENDERAL PP IPM SAH, menurut SK PP Muhammadiyah bernomor 1292/KEP/I.0/B/2021. Wallahu alam.</p><p>Dalam AD/ART IPM pasal 28 dituliskan bahwa Muktamar Luar Biasa (MLB) adalah Muktamar yang diselenggarakan apabila keberadaan ikatan dalam bahaya dan atau terancam dibubarkan, yang Tanwir tidak berwenang untuk memutuskan dan tidak dapat ditangguhkan sampai Muktamar berikutnya. Apakah kondisi IPM saat ini &nbsp;berbahaya dan atau terancam dibubarkan? Saya kira tidak kedua-duanya. Kedua syarat yang dibutuhkan untuk melaksanakan MLB tidak terpenuhi seperti yang disebutkan pada AD/ART. Kalau diizinkan menilai tahun 1990-1992 IPM berada dalam kondisi berbahaya, tapi tidak ada MLB (kalau saya salah, tolong diluruskan) dan juga sejak 60 tahun lalu tidak ada yang berniat membubarkan IPM.</p><p>Jika MLB IPM benar-benar terselenggara sungguh sangat disayangkan, ini akan jadi sejarah kelam IPM dan tentu saja Muhammadiyah juga, kita akan sama-sama menjadi saksi titik terendah IPM dalam 60 tahun terakhir, dan akan menjadi awal dari keterpurukannya. Bagaimana tidak, jika ini terjadi kader-kader akan menganggap remeh temeh hasil Muktamar, keputusan Muktamar hilang wibawanya di mata kader sebagai permusyawaratan tertinggi dalam ikatan yang keputusannya final. Paling fatal jika besok hal semacam itu menjadi teladan di daerah, tdk ada lagi manfaatnya musyawarah. Kalau kita ortom lalu sedikit-sedikit Muhammadiyah, apa gunanya ikut perkaderan sampai jenjang TMU jika sekedar berjalan saja tangan harus dipegang dan dituntun. Celakanya euforia Milad IPM ke 60 tahun bulan depan akan diisi hal yang asing bagi kita dan belum pernah kita laksanakan sejak tahun 1961, yaps MLB menjadi kado terburuk sepanjang 60 tahun IPM, boleh dikata MLB Limited Edition IPM 60 TH.</p><p>Saya menilai PP Muhammadiyah sudah tepat untuk mengambil langkah untuk menyelesaikan kegaduhan yang terjadi di internal IPM melalui SK yang diterbitkan. Namun, menurut hemat saya keputusan mengenai perintah untuk menyelenggarakan Muktamar Luar Biasa adalah fatal. Sebab akan berdampak kurang etis bagi internal IPM, dengan segala kerendahan hati saya tidak bermaksud untuk melangkahi kewenangan ayahanda ataupun menunjukkan sikap tidak hormat, saya sekedar menyampaikan keresahan dan sikap tidak setuju jika MLB dilaksanakan dengan sedikit pengetahuan yang dititipkan.</p><p>Perintah menyelenggarakan MLB yang diputuskan oleh PP Muhammadiyah, tadinya diharapkan untuk menyelesaikan kegaduhan dengan tujuan win-win solution. Tapi menurut hemat saya MLB tidak sesederhana itu, untuk saat ini memang benar kegaduhannya berhenti hanya tinggal menunggu waktu saja kegaduhan yang lebih besar akan diciptakan lagi tepat saat MLB berlangsung bisa juga sebelum bahkan sesudah. Keputusan tersebut memberi kesempatan pihak yang punya kepentingan &nbsp;sekali lagi untuk berperang, bisa dipastikan semua amunisi dan siasat digunakan untuk menang dan mengalahkan saudara sendiri. Tanpa kita sadari justru PP Muhammadiyah melakukan pembiaran dengan keputusan MLB tersebut, sungguh sangat disayangkan. Alih-alih selesai justru malah semakin besar dan tidak bisa dipungkiri menjadi contoh di struktural wilayah dan daerah. MLB akan menciptakan polarisasi dalam pelaksanaannya tentu kita tahu apa motifnya, jelas ini merusak keharmonisan ikatan dan wajah seperti itu akan kita dapati pada musyawarah-musyawarah selanjutnya.</p><p>Satu lagi, keresahan umum yang dirasakan oleh siapapun. Ego yang terbawa di setiap perhelatan nasional dilaksanakan yaitu ego kedaerahan. Saya tidak menuduh tapi saya memang harus curiga, diksi-diksi kotor itu digunakan untuk menghimpun kekuatan, tidak ada yang membenarkan hal itu kita juga tidak boleh naif beberapa orang mengucapkan diksinya. Kita berharap tentu hal menjijikkan seperti itu tidak terjadi di IPM dan Muhammadiyah khususnya di pusat. Tapi apa mau dikata, keadaan IPM sekarang ini mengisyaratkan demikian apalagi setelah terbitnya SK PP Muhammadiyah semakin mempertebal keyakinan bagi mereka yang mengimami dogma tersebut. Saya mau menjawab dan membantah bahwa tidak begitu kebenarannya tapi saya tidak punya bukti dan fakta, satu-satunya bukti yang baru saja dimiliki kini berusaha dan sengaja dihilangkan, kini dogma haram itu semakin besar pasca Muktamar dan menjelang MLB.</p><p>Kisruh dualisme semacam ini bukan cuman sekali ini saja terjadi, IMM juga mengalami hal serupa yakni dualisme tuan rumah Muktamar beberapa tahun silam. Bedanya kisruh IMM segera bisa diselesaikan dengan keputusan PP Muhammadiyah yang menunjuk Malang sebagai tuan rumah Muktamar IMM. Berbeda dengan keputusan PP Muhammadiyah yang diterbitkn untuk menyelesaikan konflik IPM, saya menilai keputusan tersebut tidak efektif menyelesaikan konflik tapi justru membuka ruang dan berpotensi menciptakan konflik yang lebih besar. Menurut hemat saya keputusan PP Muhammdiyah akan lebih efektif jika mengesahkan hasil Muktamar XXII IPM, saya benar-benar tidak bermaksud untuk tidak hormat, saya sekedar hanya menyampaikan sedikit pengetahuan yang terlanjur dititipkan.</p><p>Pertimbangan pribadi saya jika PP Muhammadiyah mengesahkan hasil Muktamar XXII ialah keputusan PP Muhammadiyah adalah sifatnya final yang harus ditaati oleh seluruh elemen dalam tubuh Organisasi Muhammadiyah termasuk IPM, sehingga keputusan ini akan menyelesaikan dan menghentikan kisruh yang terjadi dalam internal IPM, tentu ini sangat berbeda dengan keputusan yang sudah ditetapkan yakni MLB. Pengesahan hasil Muktamar XXII IPM oleh PP Muhammadiyah juga telah di amanatkan dalam Qaida Ortom pasal 11 Permusyawaratan dan Rapat.</p><p>Terakhir, sebagai penutup saya kembali mengingatkan bahwa MLB ini bukanlah sebuah keputusan yang dikeluarkn begitu saja oleh PP Muhammadiayah, ada konflik besar yang terjadi sehingga MLB itu diputuskan meskipun juga keputusan MLB adalah FATAL bagi IPM jika harus diselenggarakan sebab kedua syarat MLB tidak terpenuhi. Dua indikator ini yakni konflik yang sengaja dibesar-besarkan dan keputusan MLB meskipun kondisi ikatan tidak berbahaya dan tidak pula terancam dibubarkan, hal ini menjadi dasar saya menyimpulkan bahwa \"ini sekedar analisa dari seorang kader yang berada di grassgroot yang mencoba memahami masalah ikatan dari kacamatanya sendiri\" MLB ini adalah produk yang sedari awal memang menjadi tujuan dari konflik yang sengaja kalian ciptakan. Apa manfaatnya? Tentu saja menurunkan popularitas lawan, menurunkan tingkat kepercayaan pimpinan wilayah dan daerah terhadap beberapa formatur terpilih khususnya mereka yang ditetapkan sebagai pimpinan pada Muktamar, inilah yang diharapkan. Memang ada upaya untuk mematikan gerak personal, dan ini tidak baik. Kalian tidak perlu tersinggung, hal semacam ini umum terjadi. Karna keserakahan dan tidak memiliki kebesaran hati menerima keputusan mufakat maka dihimpunlah kekuatan untuk membuat konflik lalu ketika konflik semakin besar, kemudian datang sebagai manusia suci seolah-olah memberikan solusi alternatif terbaik namun kenyataannya itulah tujuannya sebenarnya. Saya tidak menunjuk siapapun, ini jelas ditujukan kepada formatur (maaf saja kalo kalian tersinggung). Umumnya dalang konflik semacam ini adalah pihak yang kalah dan sebagian besar munafik. Jangan sampai ini terjadi, jangan rusak euforia milad 60 tahun IPM dengan hal memalukan semacam itu.</p><p>Sekali lagi saya sekedar menyampaikan, benar dan salah tentu tergantung pada siapa yang kita bela. Wallahu Alam.</p><p>Hormat saya,</p><p>Muh. Syainal Nur&nbsp;<br>Ketua PD. IPM Kota Palopo<br>&nbsp;</p>', 'El-Media Nuun Panrita Lopi60c628324871f.jpg'),
(44, '2021-06-14', '10:45', '1623638728', 'El-Media Nuun Panrita Lopi', 'PC IPM Rilau Ale dan PC IPM Bulukumpa Resmi Dilantik', 'pc-ipm-rilau-ale-dan-pc-ipm-bulukumpa-resmi-dilantik-50', '1', '<p>&nbsp;</p><p>Pimpinan Cabang Ikatan Pelajar Muhammadiyah (PC IPM) kec. Bulukumpa periode 2021-2023 dan kec. Rilau Ale periode 2020-2022 resmi dilantik oleh Pimpinan Daerah (PD) &nbsp;IPM kab. Bulukumba bertempat di Gedung sarana olahraga desa bulo-bulo. Kegiatan ini juga dihadiri oleh Pimpinan Cabang (PC) Muhammadiyah kec. Bulukumpa, PC Muhammadiyah kec. Rilau Ale, serta kakanda Alumni. Pada kegiatan ini panitia mengusung tema \"Membangun Semangat Baru Demi Mewujudkan Kepemimpinan yang Profesional\". (13/06)</p><p>Pada kegiatan ini membuat Ayahanda PC Muhammadiyah kec. Bulukumpa dan Rilau Ale sangat mengapresiasi terbentuknya PC IPM ini, dan mampu menjadi motivasi bagi para kader (pemuda pemudi) yang ada di kec. Bulukumpa dan Rilau Ale.</p><p>\"Saya harap dengan terbentuknya PC IPM ini bisa membimbing para kader sehingga terus berkarya dan saling menjaga kekompakan sampai akhir periode agar tidak dipandang abu-abu di mata masyarakat\" ucap pesan Ayahanda PC Muhammadiyah.</p><p>Semoga amanah yang diberikan kepada PC IPM ini dapat di laksanakan dan bertanggungjawab dengan sebaik-baiknya hingga akhir periodenya, terus berkarya dan tetap semangat.</p>', 'El-Media Nuun Panrita Lopi60c6c2c62c11e.jpg'),
(46, '2021-06-18', '11:08', '1623985685', 'Syifa Azzahra', 'Apresiasi Diri Sendiri', 'apresiasi-diri-sendiri-38', '2', '<p>&nbsp;</p><p>Tentu kita semua pernah melakukan perjalanan dimana kita bertemu dengan orang-orang cerdik dan berprestasi, orang-orang yang loyal dalam bertindak dan sopan santun dalam berperilaku. Umunya orang ini bertugas sebagai pemateri entah itu saat mengikuti kegiatan Diskusi Senja, Bedah Buku, Seminar Literasi atau kegiatan Training lainya yang jelas dalam sebuah kegiatan pasti ada orang hebatnya. Lalu mata yang melihat dan telinga yang mendengar hal-hal luar biasa dari diri seseorang tersebut kemudian menimbulkan rasa kagum bahkan keinginan itu bisa menjadi seperti itu juga. Iya, memang positif dan memberikan apresiasi pada mereka itu adalah hal yang sangat baik.</p><p>Pertanyaannya kemudian adalah, Sudahkah kita mengapresiasi diri sendiri? Apa lebih keraskah tepukan tangan untuk orang lain dibanding untuk diri sendiri? Suatu hal yang telah dia raih mungkin hanya belum kita raih, tetapi sesuatu yang telah kita raih mungkin tidak akan pernah bisa dia raih. Baik itu karena tidak memiliki kesempatan atau memang tidak punya jalanya.</p><p>Mengapresiasi berarti kita memberikan pengakuan bukan, lalu tidakkah kita mengakui sesuatu yang diperoleh oleh diri sendiri? Diri yang tanpa lelah membuka setiap lembaran, menelusuri banyak jalan, melewati hari-hari yang melelahkan dan masih mau berusaha meski kadang sempat beberapa kali berhenti ditengah jalan.</p><p>Kita juga hebat bukan, coba fikirkan dan sadari faktanya beberapa hal yang kita miliki ternyata tidak dimiliki oleh orang lain, beberapa pengalaman yang telah kita lalui tidak dirasakan oleh orang lain dan seterusnya. Sungguh baik perilaku merendah akan tetapi tulisan ini tentang mengapresiasi diri sendiri dan bukan untuk angkuh, tapi bersyukur bahwa kita juga hebat berdasarkan versi kita.</p><p>Banyak hal yang bisa kita lakukan sebagai bentuk mengapresiasi diri sendiri teman-teman, seperti jika punya uang lebih maka kita boleh membeli barang yang sudah lama kita inginkan, beli makanan kesukaan, main game, nonton film, kalau saya pribadi lebih sering libur akhir pekan/semester saya gunakan untuk liburan bersama teman-teman saya dan itu sangat menyenangkan, serta masih banyak lagi yang tentunya ini berarti kita self love(mencintai diri sendiri) dan itu penting.</p><p>Semangat menyuarakan mimpi dalam hati lalu mengikhtiarkan lewat tindakan! Belajar banyak dari orang-orang hebat untuk pembentukan dan konsisten pada acuan untuk mencapai tujuan.</p><p>Kita adalah orang-orang yg punya garisan takdir sama dalam hal ini, yah menjadi seorang penuntut ilmu(pelajar), maka bersemangat lah! Apresiasi diri untuk setiap peningkatan dan evaluasi untuk hal-hal yang terlewatkan. Terakhir jangan lupa tersenyum untuk diri sendiri : ).</p><p>Oleh: Sekbid Kajian Dakwah Islam (KDI) PD IPM Bulukumba, IPMawati Syifa Azzahra</p>', 'Syifa Azzahra60cc0e138bdd4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kaderTM1`
--

CREATE TABLE `kaderTM1` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pr` varchar(200) NOT NULL,
  `cita` varchar(75) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `followup` varchar(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `syahadah` varchar(150) NOT NULL,
  `doa` varchar(30) NOT NULL,
  `arti` varchar(30) NOT NULL,
  `tgl_pembukaan` varchar(30) NOT NULL,
  `tgl_penutupan` varchar(30) NOT NULL,
  `angkatan` varchar(15) NOT NULL,
  `tema` varchar(500) NOT NULL,
  `added` varchar(250) NOT NULL,
  `edited` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kaderTM1`
--

INSERT INTO `kaderTM1` (`id`, `nama`, `nisn`, `tanggal`, `alamat`, `pr`, `cita`, `ayah`, `followup`, `foto`, `syahadah`, `doa`, `arti`, `tgl_pembukaan`, `tgl_penutupan`, `angkatan`, `tema`, `added`, `edited`) VALUES
(12, 'Maharani', '0040833214', '2004-03-06', 'Bajiminasa', 'Ma Muhammadiyah Palampang', 'Pegawai', 'Abdullah Ali', '4', 'Maharani60b3369e8c733.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(11, 'Nurfaizah', '0042510348', '2004-10-22', 'Palipi', 'Ma Muhammadiyah Palampang', 'Pengusaha', 'Jamaluddin', '4', 'Nurfaizah60b33526bb4aa.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-05-07', '2019-05-10', 'XII', '\"spirit kolaborasi mencetak kader militan dalam membangun semangat pendidikan Islam prosfetik\"', '', 'PR IPM MAM Palampang'),
(9, 'Sri Wahyuni', '0042293186', '2004-09-04', 'Longi', 'Ma Muhammadiyah Palampang', 'Pengacara', 'Muhammad Akil', '4', 'Sri Wahyuni60b33955a78b2.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(13, 'Anisa Bahar ', '0042991692', '2004-04-02', 'Batu Tompo', 'Ma Muhammadiyah Palampang', 'Dokter', 'Baharuddin', '4', 'Anisa Bahar 60b3379f22e48.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(14, 'Julianti', '0035170150', '2003-04-14', 'Bajiminasa', 'Ma Muhammadiyah Palampang', 'Pegawai', 'Jamaluddin', '4', 'Julianti60b33b314c266.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(15, 'Nur Aiting', '0043556128', '2004-05-15', 'Barana', 'Ma Muhammadiyah Palampang', 'Polwan', 'Tubo', '4', 'Nur Aiting60b33e792156b.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2018-05-12', '2018-05-15', 'X', '\"Terwujudnya generasi cerdas, kreatif, inovatif, dan kompetitif\"', '', 'PR IPM MAM Palampang'),
(16, 'Rabiah Al Adawiyah', '009391105', '2004-07-13', 'Bonto Bangun', 'Ma Muhammadiyah Palampang', 'Dokter', 'Arifuddin', '4', 'Rabiah Al Adawiyah60b35bb9a7ad1.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(17, 'Uswatul Khasanah', '0046230184', '2004-06-29', 'Marana', 'Ma Muhammadiyah Palampang', 'Dokter', 'Suardi', '4', 'Uswatul Khasanah60b8af014b237.jpg', '-', 'Tuntas', 'Belum Tuntas', '2018-05-12', '2018-05-15', 'X', '\"Terwujudnya generasi cerdas, kreatif, inovatif, dan kompetitif\"', '', 'PR IPM MAM Palampang'),
(18, 'A.Ikram Mukarram', '0036355119', '2003-11-10', 'Samaenre', 'Ma Muhammadiyah Palampang', 'Ilmuwan', 'A.Hasbi A.B', '4', 'A.Ikram Mukarram60b41bb5da2c9.jpg', '-', 'Tuntas', 'Tuntas', '2016-06-23', '2016-06-25', 'VI', '\"Melahirkan pelajar Islam yang cerdas spiritual, intelektual dan humanitas\"', '', 'PR IPM MAM Palampang'),
(19, 'Ikhfa', '0042093550', '2004-03-04', 'Barana', 'Ma Muhammadiyah Palampang', 'Koki', 'Samad', '4', 'Ikhfa60b4b2e002629.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(20, 'Andi Rahmat Dani', '0044392219', '2004-01-06', 'Sampeang', 'Ma Muhammadiyah Palampang', 'Tidak adapi', 'Andi Alimuddin', '4', 'Andi Rahmat Dani60b4b407eb018.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(21, 'Radhiah Mardhiah', '0042652937', '2004-09-01', 'Sampeang', 'Ma Muhammadiyah Palampang', 'Dosen Bhs.Inggiris', 'Abdul Latif S.P.di', '4', 'Radhiah Mardhiah60b4b51a3b95f.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(22, 'Sri aulia', '0043556123', '2003-05-16', 'Barana', 'Ma Muhammadiyah Palampang', 'Desainer', 'Burhan', '4', 'Sri aulia60b57f01462ce.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2018-12-22', '2018-12-25', 'XI', '\"Mencetak kader dengan semangat integritas, iman, ilmu, dan amal sehingga terwujudnya kader yang berkualitas\"', '', 'PR IPM MAM Palampang'),
(23, 'Hardiyan', '0020122198', '2002-09-06', 'Marana', 'Ma Muhammadiyah Palampang', 'Hakim', 'Herul', '4', 'Hardiyan60b8a564478cc.jpg', '-', 'Tuntas', 'Tuntas', '2018-01-04', '2018-01-07', 'IX', '\"Melahirkan pelajar Islam yang cerdas spiritual, intelektual dan humanitas\"', '', 'PR IPM MAM Palampang'),
(24, 'Jusda Ramadhani', '0042093556', '2004-09-10', 'Barana', 'Ma Muhammadiyah Palampang', 'Tidak ada', 'Syahruddin', '4', 'Jusda Ramadani60b8a9c37777c.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(25, 'Nur Asmita Sari', '0028801964', '2002-10-24', 'Barana', 'Ma Muhammadiyah Palampang', 'Guru', 'Herman', '4', 'Nur Asmita Sari60b8aecd54d07.jpg', '-', 'Tuntas', 'Tuntas', '2019-05-07', '2019-05-10', 'XII', '\"spirit kolaborasi mencetak kader militan dalam membangun semangat pendidikan Islam prosfetik\"', '', 'PR IPM MAM Palampang'),
(26, 'Fitra Ramadhani', '0043556127', '2004-11-10', 'Barana', 'Ma Muhammadiyah Palampang', 'Pemadam Kebakaran', 'Abd Hakim', '4', 'Fitra Ramadhani60b8afd76eecc.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2018-05-12', '2018-05-15', 'X', '\"Terwujudnya generasi cerdas, kreatif, inovatif, dan kompetitif\"', '', 'PR IPM MAM Palampang'),
(27, 'Syahrul Ramadhan', '0047212355', '2004-10-30', 'Balleangin', 'Ma Muhammadiyah Palampang', 'Tidak Ada', 'Dr.Supriadi M.hum', '4', 'Syahrul Ramadhan60b8b0adf408a.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2018-05-12', '2018-05-15', 'X', '\"Terwujudnya generasi cerdas, kreatif, inovatif, dan kompetitif\"', '', 'PR IPM MAM Palampang'),
(28, 'Winda Lestari', '0043556121', '2004-03-30', 'Marana', 'Ma Muhammadiyah Palampang', 'Ilmuwan', 'Haerul', '4', 'Winda Lestari60b8b37440c5e.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2018-05-12', '2018-05-15', 'X', '\"Terwujudnya generasi cerdas, kreatif, inovatif, dan kompetitif\"', '', 'PR IPM MAM Palampang'),
(29, 'Nirmalasari', '00141011', '2004-09-05', 'Samaenre', 'Ma Muhammadiyah Palampang', 'Polwan', 'Enre', '4', 'Nirmalasari60babd228983f.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-05-07', '2019-05-10', 'XII', '\"spirit kolaborasi mencetak kader militan dalam membangun semangat pendidikan Islam prosfetik\"', '', 'PR IPM MAM Palampang'),
(30, 'Rahmat', '0044625510', '2004-06-03', 'Balimbing', 'Ma Muhammadiyah Palampang', 'Tidak ada', 'Matti', '4', 'Rahmat60bd8b2576014.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', '', 'PR IPM MAM Palampang'),
(37, 'Irham azis', '0036355116', '2003-06-06', 'Bulo-Bulo', 'Ma Muhammadiyah palampng', '-', 'Azis', '4', 'Irham azis60e304d5dae1e.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2018-01-04', '2018-01-07', 'IX', '\"Melahirkan pelajar Islam yang cerdas spiritual, intelektual dan humanitas\"', 'PR IPM MAM Palampang', 'PR IPM MAM Palampang'),
(35, 'Nur wana', '0050430724', '2005-04-04', 'Longi', 'Ma Muhammadiyah palampng', 'Kowad', 'Wahid', '4', 'Nur wana60debd39d9c23.jpg', '-', 'Belum Tuntas', 'Belum Tuntas', '2019-09-25', '2019-09-29', 'XIII', '\"Rekonstruksi ideologi dalam membentuk kader militan yang Istiqomah\"', 'PR IPM MAM Palampang', 'PR IPM MAM Palampang'),
(36, 'Muhammad ishak', '208-17-129', '1999-02-01', 'Desa anrang', '2017 lalu', 'Pejabat', 'Hamsa', '0', 'Muhammad ishak60df220d88571.png', '--', 'Tuntas', 'Tuntas', '2017-04-11', '2017-03-17', '-', '--', 'PC IPM Rilau Ale', 'PC IPM Rilau Ale');

-- --------------------------------------------------------

--
-- Table structure for table `ketums`
--

CREATE TABLE `ketums` (
  `id` int(11) NOT NULL,
  `prd` varchar(15) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `tempat` varchar(75) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `pekerjaan` varchar(75) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `tahuntamat` varchar(4) NOT NULL,
  `tm1a` varchar(100) NOT NULL,
  `tm1b` varchar(4) NOT NULL,
  `tm2a` varchar(100) NOT NULL,
  `tm2b` varchar(4) NOT NULL,
  `pfp1a` varchar(100) NOT NULL,
  `pfp1b` varchar(4) NOT NULL,
  `tm3a` varchar(100) NOT NULL,
  `tm3b` varchar(4) NOT NULL,
  `pfp2a` varchar(100) NOT NULL,
  `pfp2b` varchar(4) NOT NULL,
  `tmua` varchar(100) NOT NULL,
  `tmub` varchar(4) NOT NULL,
  `pesan` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ketums`
--

INSERT INTO `ketums` (`id`, `prd`, `nama`, `tempat`, `tanggal`, `pekerjaan`, `alamat`, `pendidikan`, `tahuntamat`, `tm1a`, `tm1b`, `tm2a`, `tm2b`, `pfp1a`, `pfp1b`, `tm3a`, `tm3b`, `pfp2a`, `pfp2b`, `tmua`, `tmub`, `pesan`, `foto`) VALUES
(21, '1994 - 1996', 'A. Muh. Safwan', 'Bulukumba', '1966-10-26', 'Pns', 'Jl. Menara', 'Bicpsdm', '1995', 'Bulukumba', '1982', '-', '-', 'Gowa', '1994', '-', '-', '-', '-', '-', '-', '            Jangan Berhenti Beripm', 'A. Muh. Safwan60b1b17f224cb.jpeg'),
(22, '1996 - 1998', 'Ambo Sakka Yunus', 'Bulukumba', '1970-03-05', 'Pns', 'Kalamassang Kec. Kindang', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '            Jaga Idealisme Dan Identitas Diri Sebagai Seorang Kader. Yang Kelak Akan Mewarisi Kepemimpinan Persyarikatan Muhammadiyah Di Masa Yang Akan Datang.', 'Ambo Sakka Yunus60b1b2df8b617.jpeg'),
(23, '2004 - 2006', 'Herman', 'Bulukumba', '1984-03-01', 'Gty Muhammadiyah', 'Borong Jatie Kel. Jalanjang', '-', '2013', 'Kompleks Perguruan Muhammadiyah Teko', '2000', 'Tk Aisyiyah Bone', '2001', '-', '-', '-', '-q-', '-', '-', '-', '-', '            Teruslah Berbuat Supaya Dikenang Dimasa Yang Akan Datang', 'Herman60b73cb809043.jpeg'),
(24, '2016 - 2018', 'Amirzan', 'Bulukumba', '1999-07-01', 'Mahasiswa', 'Jalan Perintis Kemerdekaan Km. 10 No 36 Makassar', 'Smk Muhammadiyah Bulukumba', '-', 'Smk Muhammadiyah Bulukumba', '2015', 'Bulukumba ', '2016', 'Bantaeng ', '2018', '-', '-', '-', '-', '-', '-', '            Baca Surah Muhammad Ayat 7', 'Amirzan60b742ef09e85.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(75) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `pekerjaan` varchar(75) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenjangPengkaderan` varchar(10) NOT NULL,
  `tempatJp` varchar(100) NOT NULL,
  `tahunJp` varchar(15) NOT NULL,
  `sda` varchar(100) NOT NULL,
  `sdb` varchar(15) NOT NULL,
  `sltpa` varchar(100) NOT NULL,
  `sltpb` varchar(15) NOT NULL,
  `sltaa` varchar(100) NOT NULL,
  `sltab` varchar(15) NOT NULL,
  `sta` varchar(100) NOT NULL,
  `stb` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `amanah` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `nama`, `tempat`, `tanggal`, `pekerjaan`, `alamat`, `jenjangPengkaderan`, `tempatJp`, `tahunJp`, `sda`, `sdb`, `sltpa`, `sltpb`, `sltaa`, `sltab`, `sta`, `stb`, `pesan`, `amanah`, `hp`, `foto`) VALUES
(9, 'Fathur Rahman Nur', 'Bulukumba', '2002-10-19', 'Pelajar', 'Dusun Sapaya Kec. Kindang', 'TM. 2', 'PC IPM Sambungjawa', '2018', 'SDN 208 Kindang', '2015', 'SMP Unismuh Makassar', '2018', 'SMAN 12 Bulukumba', '2021', '-', '-', '            Harta, Tahta, IPM', 'Sekretaris Umum', '+6282238382679', 'Fathur Rahman Nur609a9cc406eb9.jpg'),
(24, 'Fitri Ramadhani Syam ', 'Bulukumba', '2001-12-13', 'Mahasiswi', 'Lingk. Marana, Kel. Palampang, Kec. Rilau Ale ', 'TM. 2', 'Mts. Muhammadiyah Palampang ', '2019', 'Sdn 306 Marana ', '2013', 'Smpn 39 Bulukumba ', '2016', 'Ma. Muhammadiyah Palampang ', '2019', 'Universitas Muhammadiyah Bulukumba ', '-', 'Jangan Mudah Menjudge Sesama Pimpinan Yang Kurang Tampak', 'Ketua Bidang Organisasi', '085244436991', 'Fitri Ramadhani Syam 609be98ba4e4c.jpg'),
(26, 'Saiful Akbar', 'Sapobonto', '2002-12-12', 'Mahasiswa', 'Desa Bulo-bulo Kec.bulukumpa', 'TM. 1', 'Ma Muhammadiyah Palampang', '2015', 'Sd 70 Bulo-bulo', '2014', 'Mts Muhammadiyah Palampang', '2017', 'Ma Muhammadiyah Palampang', '2020', '-', '-', '            \"pemimpin Sejati Tidak Butuh Memimpin, Ia Lebih Senang Menunjukkan Arah\"', 'Anggota Bidang PIP', '085746759706', 'Saiful Akbar609bff4ca9cc9.jpg'),
(27, 'Rahmawati', 'Mattoangin', '2002-02-14', '-', 'Desa Anrang Kec.rilau Ale', 'TM. 2', 'Mts Muhammadiyah Palampang', '2019', 'Mis Mattoangin', '2014', 'Smp Negri 40 Bulukumba', '2017', 'Ma. Muhammadiyah Palampang', '2020', '-', '-', 'Semangatnya Dijaga Yah!', 'Sekretaris Bidang IPMawati', '081356605692', 'Rahmawati609c87fa680f8.jpg'),
(29, 'Nirwana Ayu Mustika', 'Bulukumba', '2002-10-29', 'Mahasiswa', 'Bululohe, Kec. Rilau Ale', 'TM. 2', 'Mts Muhammadiyah Palampang', '2019', 'Sd 246 Bontomanai', '2014', 'Smp 40 Bulukumba', '2017', 'Ma Muhammadiyah Palampang', '2020', 'Universitas Muhammadiyah Bulukumba', 'Belum', '         Ikhlaslah Dalam Ber-ipm', 'Sekretaris Bidang Perkaderan', '082349906842', 'Nirwana Ayu Mustika609dda610dfb8.jpg'),
(30, 'Sri Asmi', 'Bulukumba', '2001-07-17', 'Mahasiswa', 'Desa Balong Kec. Ujung Loe', 'PFP. 1', 'Bantaeng', '2018-2019', 'Sdn 295 Balong', '2013', 'Smpn 10 Bulukumba', '2016', 'Smk Muhammadiyah Bulukumba', '2019', 'Universitas Muhammadiyah Makassar', 'Belum', '            \"no Khalwat After Akad\"', 'Ketua Bidang PIP', '0895803644117/0', 'Sri Asmi60a2626f27d43.jpg'),
(31, 'A.saddang Mahesa', 'Bulukkumba', '2002-04-24', 'Mahasiswa', 'Bulukkumba', 'TM. 2', 'Bulukkumba', '2016', 'Sd Pesantren Darul Istiqomah', '2013', 'Smp Muhammadiyah Bulukkumba', '2016', 'Smk Pepabri Bulukkumba', '2020', 'Universitas Muhammadiyah Bulukkumba', 'Belum tamat', 'Semangat Dan Tetap Optimis', 'Ketua Bidang Perkaderan', '089637439160', 'saddang.jpg'),
(32, 'Nurul Wisyah Husnul', 'Bulukumba', '2003-06-21', '-', 'Bontoharu - Rilau Ale', 'TM. 1', 'Ma.muhammadiyah Palampang', '2017', 'Sdn 81 Palampang', '2015', 'Mts.muhammadiyah Palampang', '2018', 'Ma.muhammadiyah Palampang', '2021', 'Universitas Muhammadiyah Bulukumba', '-', '            ', 'Anggota Bidang Advokasi', '082348350552', 'Nurul Wisyah Husnul60a668d9aa764.jpg'),
(34, 'Nur Ismi Ahmad', 'Bulukumba', '2000-10-15', 'Mahasiswa', 'Ling. Marana Kel. Palampang Kec. Rilau Ale', 'TM. 2', 'Mts Muhammadiyah Palampang', '2019', 'Sdn 306 Marana', '2013', 'Mts Muhammadiyah Palampang', '2016', 'Ma Muhammadiyah Palampang', ' 2019', 'Universitas Muhammadiyah Bulukumba', '-', '            Perubahan Zaman Apapun Tak Boleh Meluluhkan Karakter Pelajar Ipm Yang Berakhlakul Karimah, Jujur, Terpercaya,rendah Hati', 'Ketua Bidang KDI', '+62 853-4362-39', 'Nur Ismi Ahmad60a6ee8107998.jpg'),
(36, 'Syifa Azzahra', 'Bulukumba', '2003-01-05', 'Mahasiswa', 'Desa Swatani, Kec.rilau Ale', 'TM. 2', 'Mts Muhammadiyah Palampang', '2019', 'Sdn 97 Pangi-pangi', '2014', 'Smpn 41 Bulukumba', '2017', 'Ma Muhammadiyah Palampang', '2020', 'Universitas Negeri Makassar', '-', '            Karna Semangat Ber-ipm Sama Dengan Semangat Menebar Manfaat, Mari Mengambil Bagian!', 'Sekretaris Bidang KDI', '+62 852-4060-32', 'Syifa Azzahra60a71ced67478.jpg'),
(37, 'Nuzul Hidayat', 'Bulukumba', '2002-10-03', 'Mahasiswa', 'Bulo-bulo, Kec. Bulukumba', 'TM. 2', 'Mts Muhammadiyah Palampang', '2019', 'Sdn 70 Bulo-bulo', '2014', 'Mts Muhammadiyah Palampang', '2017', 'Ma Muhammadiyah Palampang', '2020', 'Polbangtan Gowa', '-', 'Tetaplah Sebagai Media Dakwah Untuk Pelajar          ', 'Sekretaris Bidang Advokasi', '082394417164', 'Nuzul Hidayat60a921f58d2e8.jpg'),
(38, 'Asratih Ananda Efendi', 'Bulukumba', '2002-11-02', 'Mahasiswa', 'Jl. Sungai Jeneberang', 'TM. 1', 'Smk Muhammadiyah Bulukumba', '2017', 'Sdn 05 Appasarenge', '2014', 'Ponpes Abu Bakar Ash-shiddiq Wahdah Islamiyah Bulukumba', '2017', 'Smk Muhammadiyah Bulukumba', '2020', 'Stikes Panrita Husada Bulukumba', '-', '            Semoga Kedepannya Bisa Menemukan Kader Yang Benar-benar Ingin Menghidupi Ipm Bukan Hanya Ingin Hidup Di Ipm', 'Ketua Bidang IPMawati', '082393334820 ', 'Asratih Ananda Efendi60aae26641f91.jpg'),
(39, 'St. Nurul Haerung Muhlisa', 'Bulukumba', '2002-08-25', 'Mahasiswa', 'Jl.kusuma Bangsa Caile', 'TM. 1', 'Smk Muhammadiyah Bulukumba', '2017', 'Sdn 05 Appasarenge Bulukumba', '2014', 'Smp Negeri 03 Bulukumba', '2017', 'Smk Muhammadiyah Bulukumba', '2020', 'Stikes Panrita Husada Bulukumba', '-', '            Semoga Organisasi Pelajar Ini Maju Terus', 'Ketua Bidang PKK', '085399972933 ', 'ST. Nurul Haerung Muhlisa60aae3963a154.jpg'),
(40, 'Tharisa Fausia Nasir', 'Bulukumba', '2004-02-01', 'Pelajar', 'Jl. Nangka No. 9 Kec.ujung Bulu', 'TM. 2', 'Smk Muhammadiyah Bulukumba', '2018', 'Sdn 4 Bentenge', '2016', 'Smp Muhammadiyah Bulukumba', '2019', 'Smk Muhammadiyah Bulukumba', '-', '-', '-', '            -', 'Bendahara 1', '085145497050', 'Tharisa Fausia Nasir60ab99e50a5bf.jpg'),
(41, 'Awalia Zahra Yanti', 'Bulukumba', '2004-09-21', 'Pelajar', 'Jl. Sam Ratulangi', 'TM. 2', 'Mts. Muhammadiyah Palampang', '2019', 'Sdn 37 Kampung Baru', '2016', 'Pps Wahdah Islamiyah Bulukumba', '2019', 'Smk Muhammadiyah Bulukumba', '-', '-', '-', '            Terus Berkarya Dan Susunlah Rencana Sekarang Juga Dan Mulailah Secepatnya. Ipm Jaya', 'Sekretaris Bidang PIP', '+62 858-2378-90', 'Awalia Zahra Yanti60ab9bb6c732a.jpg'),
(42, 'Rahmi Surahman', 'Bulukumba', '2002-07-05', '-', 'Bonto Masunggu', 'TM. 1', 'Ma Muhammadiyah Palampang', '2018', 'Sdn 276 Campulea', '2014', 'Smpn 40 Bulukumba', '2017', 'Ma Muhammadiyah Palampang', '2020', '-', '-', '            -', 'Sekretaris Bidang Organisasi', '082359517495 ', 'Rhami Surahman60ac7a948403d.jpg'),
(44, 'Ahmad Fajrin', '-', '1961-07-18', '-', '-', 'TM. 2', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-\r\n            ', 'Ketua Bidang Advokasi', '-', 'Ahmad Fajrin60af35fdd3436.jpg'),
(45, 'Nirwana Ayu Mustika', 'Bulukumba', '2002-10-29', 'Mahasiswa', 'Bululohe Kec. Rilau Ale', 'PFP. 1', 'Pangkep', '2022', 'Sdn 246 Bontomanai', '2014', 'Smpn 40 Bulukumba', '2017', 'Mam Palampang', '2020', 'Universitas Muhammadiyah Bulukumba', 'Belum ', '            \"ikhlas Dalam Ber-ipm\"', 'Ketua Umum', '+62 813-4049-61', 'Nirwana Ayu Mustika62822eeee7218.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link` (`link`);

--
-- Indexes for table `kaderTM1`
--
ALTER TABLE `kaderTM1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `ketums`
--
ALTER TABLE `ketums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `kaderTM1`
--
ALTER TABLE `kaderTM1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ketums`
--
ALTER TABLE `ketums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
