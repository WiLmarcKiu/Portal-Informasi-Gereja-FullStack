-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2022 pada 05.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `tempat_lahir` varchar(300) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `tempat_lahir`, `tgl_lahir`, `email`, `password`) VALUES
(1, 'Elsa Paja', 'Waiwerang', '2022-08-07', 'elsa@gmail.com', 'elsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(300) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `tgl_publikasi` date NOT NULL,
  `isi` text NOT NULL,
  `foto_artikel` varchar(500) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `penulis`, `tgl_publikasi`, `isi`, `foto_artikel`, `status`) VALUES
(1, 'Kerja Dan Spiritualitas', 'Elsa Paja', '2022-07-17', 'Kisah Para Rasul 9:39\r\n\"...sambil menangis mereka menunjukkan kepadanya semua baju dan pakaian, yang dibuat Dorkas waktu ia masih hidup\"\r\n \r\n\r\nSadarkah kita jika ternyata ada hubungan antara kualitas kerja dan kehidupan spiritualitas kita?\r\n\r\n\"Aku melakukan yang terbaik dari yang aku tahu, terbaik dari yang aku bisa, dan aku tetap akan melakukannya sampai akhir. Jika akhirnya ternyata aku benar, apa pun yang dikatakan lawan tentang aku tidak akan berarti apa-apa. Jika akhirnya ternyata aku salah, meskipun sepuluh malaikat bersumpah mengatakan aku benar pun tidak ada artinya,\" ucap Abraham Lincoln.\r\n\r\nKualitas kerja kita mencerminkan kualitas hidup spiritualitas kita. Artinya, pekerjaan yang kacau tidak mempermuliakan Allah. Kredibilitas kita sebagai orang Kristen ditunjukkan oleh bagaimana kita bertingkah laku dalam pekerjaan dan dalam keseharian kita.\r\n\r\nSebagai orang Kristen, kita tidak dipanggil untuk  sekadar menjadi lebih baik dari  orang lain, tetapi memberikan yang terbaik bagi Allah. Itulah yang mendorong kita untuk bekerja giat dan berprestasi. Dengan demikian, ketika kita berprestasi atau sukses, kita tidak menjadi sombong. Kita lebih menghayatinya semata-mata sebagai karunia Allah. Sebaliknya, jika kita tidak menonjol di tempat kerja, kita tetap dapat bersyukur karena telah memberikan yang terbaik.\r\n\r\nMarilah kita menunjukkan kualitas kita yang terbaik agar nama Allah semakin dipermuliakan!', 'artikel1.png', 'Aktif'),
(2, 'Sahabat', 'Elsa Padja', '2022-07-20', 'Sahabat adalah seseorang yang mengerti dirimu dan menerimamu apa adanya.\r\nSahabat adalah seseorang yang mau berkorban untukmu dan mau memberikan apa yang terbaik yang ada padanya.\r\n\r\nMarkus 2:1-12 adalah contoh yang Alkitab katakan tentang persahabatan. Dalam perikop ini dikisahkan ada seorang lumpuh yang digotong oleh keempat sahabatnya yang sehat. Karena keadaan di rumah itu sudah penuh sesak oleh orang-orang, kelima orang itu tidak bisa masuk lewat pintu utama. Lewat pintu belakang juga tidak bisa.\r\nPikir punya pikir akhirnya mereka naik ke atap, membongkar atap dan menurunkan orang lumpuh itu dari atap tepat di hadapan Tuhan Yesus. Akhirnya Yesus menyembuhkan orang yang lumpuh itu.\r\n\r\nBiasanya Yesus selalu menyembuhkan dilihat dari iman orang yang sakit itu apakah ia sungguh-sungguh mempercayai Yesus adalah putra Allah atau tidak. Tapi di kasus ini unik. Mengapa? Karena di ayat 5 dikatakan, Yesus melihat iman mereka. Yap! Yesus melihat iman dari sahabat-sahabat si sakit.\r\n\r\nYesus melihat kesungguhan dan pengorbanan dari para sahabat-sahabat si sakit. Bisa saja saat melihat ramainya orang yang mendatangi Yesus dan mereka tidak masuk, mereka bisa saja langsung pulang. Mereka mungkin saja tidak mau repot-repot hanya untuk kesembuhan si sakit. Mungkin saja atap yang mereka naiki adalah terbuat dari seng di siang hari bolong yang panasnya bisa dipakai menggoreng telur. Mungkin saja rumah itu tinggi sekali sehingga terlalu beresiko untuk naik ke atasnya. Mereka bisa saja malas berkorban dan langsung pulang.\r\n\r\nTapi dikisahkan di Alkitab, mereka tetap melakukannya. Mereka naik ke atas, membongkarnya dan menurunkan si sakit. Mereka kreatif. Dan mereka mau berkorban. Mereka menyayangi sahabat mereka (si sakit) dan benar-benar berharap agar Tuhan Yesus mau menyembuhkannya. Mereka mau memberikan yang terbaik untuk kesembuhan sahabat mereka. Mereka tidak egois.\r\n\r\nOleh karena itu dikatakan Yesus melihat iman mereka dan bukan si sakit. Yesus melihat kesungguhan mereka. Yesus melihat pengorbanan mereka, kekreatifan mereka dan usaha-usaha mereka. Dan Yesus merasakan kasih di antara persahabatan mereka. Oleh karena itulah Yesus mau menyembuhkan si sakit.\r\n\r\nSobat Kristus, jaman sekarang di dunia yang serba sulit ini, nilai-nilai persahabatan sudah memudar. Pertemanan yang ada pun didasari uang atau kebutuhan satu sama lainnya. Kebutuhan bisnis, saling menguntungkan bahkan ada juga jemaat gereja yang melakukan persahabatan palsu hanya untuk menjaring jiwa dan mengajaknya ke gereja. Nilai-nilai persahabatan sudah memudar.\r\n\r\nMaka benarlah ada pepatah yang mengatakan: Mencari seorang sahabat bagaikan mencari permata di sebuah lumbung jerami yang besar. Sulit ditemukan, tapi begitu berharga ketika ditemukan. Seorang sahabat lebih erat daripada keluarga bahkan saudara kandung sekalipun. Ada orang yang mempunyai banyak teman tetapi tidak mempunyai sahabat sama sekali. Teman dan sahabat adalah berbeda. Dengan sahabat kita bisa berbagi tanpa takut rahasia kita terbongkar karena sahabat tidak pernah menusuk dari belakang.\r\n\r\nSobat Kristus, sebelum kita mencari sahabat, ada baiknya kita menjadi sahabat bagi orang lain dulu. Bertemanlah dengan tulus. Jangan mengharapkan apa-apa darinya. Pinjamkanlah telingamu dan pundakmu baginya bila ia sedang bersedih. Turut bergembiralah bersamanya ketika ia sedang gembira. Jangan iri, jangan cemburu, karena persahabatan sejati didasari oleh kasih (1 Korintus 13:13).', 'artikel2.jpg', 'Aktif'),
(3, 'Kebenaran Allah', 'Elsa Padja', '2022-07-22', 'Saudara, jangan ukur dirimu dengan orang lain, tetapi dengan kebenaran Allah. Ukurlah dirimu dengan Kristus. Tetapi ingat, di dalam semangat hidupnya, manusia memang tidak mau mencari Allah. Pencarian manusia hanya untuk memuaskan dirinya, untuk membenarkan dirinya. Padahal tanpa Allah dia bukan apa-apa. Jadi, secara positif manusia tidak mampu berbuat baik. Secara positif tidak ada kekuatan untuk itu. Lalu secara negatif, manusia tidak mampu menolak dosa. Maka seluruh dosa yang datang menyerbu menjadi bagian dari hidupnya. Ketika ia menutupi satu tembok katakanlah dia tidak mencuri tetapi dia tidak bisa menghindar dari sifat iri hati, misalnya. Artinya ia tidak mampu menolak dosa.Jadi, semua kembali diukur pada Allah. Sesuatu yang tidak tepat pada ketetapan Allah, itu sudah menjadi dosa. Nah kalau sudah begini siapa manusia yang tidak berdosa? Seluruh manusia sudah berdosa. Manusia tidak mampu menolak dosa, karena dosa telah menjadi tuan atas manusia. Karena dosa sudah menjadi majikan yang berkuasa atas hidup manusia. Dosa mempermainkan manusia. Jadi, di dalam pemahaman yang seperti inilah kita belajar membangun suatu pemahaman yang utuh, supaya kita sungguh-sungguh hidup dalam terang Tuhan.\r\nManusia berdosa yang tidak mampu berbuat baik, sekaligus tidak mampu menolak dosa, adalah manusia yang rusak total di hadapan Allah. Kerusakan manusia yang tanpa ampun, sangat mengerikan. Kerusakan yang karenanya wujud awal tidak bisa lagi dikenali. Kerusakan yang karenanya model awal tidak lagi bisa dikenali. Kerusakan yang karenanya, model awal tidak lagi bisa dimengerti, tidak lagi memberi ciri-ciri. Begitulah ketika manusia sudah jatuh ke dalam dosa. Ciri-ciri kesucian manusia tidak lagi ada. Ketika Adam dan Hawa jatuh ke dalam dosa, mereka menjadi malu karena telanjang, padahal hanya mereka berdua yang ada di sana. Dosa sudah menggu-gurkan kemuliaan dan kesucian yang hidup pada mereka.\r\n\r\nJadi, keadaan manusia berdosa menjadi sebuah lukisan yang tidak berpengharapan, tepat seperti apa yang dikatakan Roma 3 : 12-13, \"Semua orang sudah me-nyeleweng, tidak ada yang ber-guna. Kerongkongan mereka se-perti kubur yang ternganga, lidah mereka merayu-rayu, bibir mereka mengandung bisa...\" Kalaupun mereka menampilkan pola hidup yang kelihatannya terhormat, tetapi di balik semua itu ada motivasi yang tidak terkendali. Ada keinginan batin yang dalam, yang tidak mampu dikendalikan. Dosa kasar, halus, besar maupun kecil, di mata Allah tetap dosa.\r\n\r\nJadi saudara, manusia berdosa adalah manusia yang tidak memiliki kemampuan untuk memperbaiki diri sendiri. Sehingga ketika pun dia menjadi baik di kemudian hari, itu hanyalah anugerah Allah: solagracia. Sebagai orang Kristen kita harus bersyukur dan mendemonstrasikan kerendahan hati, karena kita telah ditolong oleh-Nya sehingga kita berpindah dari kehidupan yang penuh keberdosaan ke hidup yang penuh kebahagiaan bersama dengan Tuhan.', 'artikel3.jpg', 'Aktif'),
(4, 'Allah Sang Sutradara Utama', 'Septo Sirangatun', '2022-07-21', 'Pada mulanya Allah menciptakan langit dan bumi. Kejadian 1:1 (TB).\r\n\r\nDunia berawal dari Pribadi yang kekal dan Abadi. Allah Sang Sutradara Utama dalam drama kehidupan berinisiatif menciptakan dunia. Allah rindu bersekutu, bersahabat dengan ciptaan-Nya. Itu sebabnya dalam kekekalan Allah Tritunggal sepakat untuk menciptakan dunia dengan seantero isinya.\r\n\r\nKeindahan dan keunikan tatanan yang Allah gambarkan dalam penciptaan mulai dari hari pertama sampai hari ketujuh. Dalam kekekalan Allah Tritunggal, dengan keberadaan-Nya yang maha ada, maha kuasa, maha hadir dan maha tahu. Telah menggariskan tatanan dunia, jagat raya ini dengan pernak-pernik di dalamnya.\r\n\r\nDengan tujuan supaya ciptaan-Nya menikmati dan memuliakan Dia selama-lamanya. Itulah tujuan utama Allah atas segala ciptaan. Hal ini terlukiskan pada ayat 31 pasal 1 ini. Maka Allah melihat segala yang dijadikan-Nya itu, sungguh amat baik. Jadilah petang dan jadilah pagi, itulah hari keenam. Kejadian 1:31 (TB).\r\n\r\nBatapa indahnya jika Allah Sang Sutradara Utama dalam drama kehidupan yang menjadi pemain utama dalam synopsis kehidupan itu. Di manakah engkau, ketika Aku meletakkan dasar bumi? Ceritakanlah, kalau engkau mempunyai pengertian! Ayub 38:4 (TB).\r\n\r\nAllah membuat segala sesuatu sungguh amat baik, karena synopsis itu Dia yang tulis, sekaligus sebagai Sutradara Utama. Semua berjalan indah sekali, baik seharmoni. Indah sekali bukan? Jika kisah manusia hanya sampai di sini, namun kenyataannya tidaklah seindah itu, kisah manusia berlanjut dalam Kejadian pasal 3, dosa datang dan hadir dalam dunia.\r\n\r\nDosa merenggut kisah indah itu, dosa membawa perpisahan, pemberontakan, kematian, dan penghianatan kepada Allah. Dosa membuat kisah indah menjadi kacau. Dosa membuat manusia tidak bisa mengasihi Allah.', 'artikel4.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bacaan`
--

CREATE TABLE `bacaan` (
  `id_bacaan` int(11) NOT NULL,
  `bacaan` varchar(150) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bacaan`
--

INSERT INTO `bacaan` (`id_bacaan`, `bacaan`, `tgl`) VALUES
(1, 'Yeremia 1:1,4-10; Mazmur 71:1-2,3-4a,5-6ab,15ab,17; Injil Matius 13:1-9', '2022-07-20'),
(2, 'Yeremia 2:1-3,7-8,12-13; Mazmur 36:6-7ab,8-9-10-11; Matius 13:10-17', '2022-07-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_prediksi`
--

CREATE TABLE `hasil_prediksi` (
  `id_hasil_prediksi` int(11) NOT NULL,
  `id_prediksi` int(11) NOT NULL,
  `metode_prediksi` varchar(100) NOT NULL,
  `tahun_hasil` year(4) NOT NULL,
  `hasil_prediksi` varchar(500) NOT NULL,
  `MSE` varchar(500) NOT NULL,
  `MAPE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `nama_iklan` varchar(150) NOT NULL,
  `isi_iklan` text NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `nama_iklan`, `isi_iklan`, `gambar`) VALUES
(1, 'Makanan Saji', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae aut animi illo laudantium totam vitae possimus amet consequatur ipsa.', 'iklan1.jpg'),
(2, 'Makanan Saji', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae aut animi illo laudantium totam vitae possimus amet consequatur ipsa.', 'iklan2.jpg'),
(3, 'Makanan Saji', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae aut animi illo laudantium totam vitae possimus amet consequatur ipsa.', 'iklan3.jpg'),
(4, 'Makanan Saji', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae aut animi illo laudantium totam vitae possimus amet consequatur ipsa.', 'iklan1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_umat`
--

CREATE TABLE `jumlah_umat` (
  `id_jumlah_umat` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah_umat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jumlah_umat`
--

INSERT INTO `jumlah_umat` (`id_jumlah_umat`, `tahun`, `jumlah_umat`) VALUES
(1, 2012, 7936),
(2, 2013, 8098),
(3, 2014, 8263),
(4, 2015, 8432),
(5, 2016, 8604),
(6, 2017, 8604),
(7, 2018, 8604),
(8, 2019, 8690),
(9, 2020, 8777),
(10, 2021, 8864);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kub`
--

CREATE TABLE `kub` (
  `id_KUB` int(11) NOT NULL,
  `nama_KUB` varchar(150) NOT NULL,
  `nama_ketuaKUB` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kub`
--

INSERT INTO `kub` (`id_KUB`, `nama_KUB`, `nama_ketuaKUB`) VALUES
(1, 'Teresia Avilla', 'Agung Mussa'),
(2, 'Ifan', 'Ifan Ballety'),
(3, 'Eky', 'Eky Wello'),
(5, 'Bunda Malaikat', 'Karolus Nende');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`, `status`) VALUES
(1, 'Kerja Bakti', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, a? Vitae explicabo minima maxime fugit quod placeat laborum, ducimus corporis expedita mollitia ipsam nesciunt harum culpa asperiores amet corrupti, cupiditate voluptas rerum cum perferendis similique cumque necessitatibus? Quidem, doloribus quia.', 'Aktif'),
(2, 'Pernikahan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, a? Vitae explicabo minima maxime fugit quod placeat laborum, ducimus corporis expedita mollitia ipsam nesciunt harum culpa asperiores amet corrupti, cupiditate voluptas rerum cum perferendis similique cumque necessitatibus? Quidem, doloribus quia.', 'Aktif'),
(3, 'Sambut Baru', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, a? Vitae explicabo minima maxime fugit quod placeat laborum, ducimus corporis expedita mollitia ipsam nesciunt harum culpa asperiores amet corrupti, cupiditate voluptas rerum cum perferendis similique cumque necessitatibus? Quidem, doloribus quia.', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prediksi`
--

CREATE TABLE `prediksi` (
  `id_prediksi` int(11) NOT NULL,
  `id_jumlah_umat` int(11) NOT NULL,
  `kode_prediksi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `foto`, `deskripsi`) VALUES
(1, 'profil.jpg', 'Gereja ini dibangun pada tahun 1988, umat katolik yang dulunya berada di sekitaran Gereja ini harus berjuang selama delapan tahun lamanya yakni dari tahun 1979-1988. Berdasarkan, data tahun 1988 jumlah kelompok umat basis (KUB) berjumlah 30 yang terdiri dari 500 kepala keluarga (KK) dengan jumlah umat 6.000 orang. Awalnya, umat Katolik beribadah di tempat ibadah yang bersifat sementara. Namun, melihat perkembangan umat yang setiap tahun semakin bertambah maka oleh YM Bapak Uskup Agung Dioses Kupang melalui pastor paroki dan Dewan Pastor Paroki mulai merencanakan untuk membangun sebuah Gedung Gereja Paroki Perjuangan pembangunan Gereja untuk pertama kalinya menjadi kenyataan setelah keluarnya SKP.YM Uskup Diosis Kupang Gregorius Monteiro, SVD tanggal 13 Februari 1988 Nomor 1/201/1988. Peletakan batu pertama dimulai pada tanggal 12 Agustus 1988 sekaligus perayaan ulang tahun paroki untuk pertama kalinya. Tanggal 5 oktober 1988 Hari Rabu Bruder SVD bersama karyawannya mulai memasang patok-patok fondasi gereja. Tanggal 10 0ktober 1988 penggalian pondasi dan 38 tiang induk. Hingga selesainya Rumah Tuhan ini dibangun dengan spiritualitas iman yang kuat yakni berdoa dan bekerja, doa bersama Bunda Maria, doa Kepada Bapa di Surga melalui Putera Tunggal-Nya Yesus Kristus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggungan`
--

CREATE TABLE `tanggungan` (
  `id_tanggungan` int(11) NOT NULL,
  `id_KUB` int(11) NOT NULL,
  `nama_tanggungan` varchar(100) NOT NULL,
  `tgl_tanggungan` date NOT NULL,
  `misa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggungan`
--

INSERT INTO `tanggungan` (`id_tanggungan`, `id_KUB`, `nama_tanggungan`, `tgl_tanggungan`, `misa`) VALUES
(1, 1, 'Misa I', '2022-07-31', 'I'),
(2, 2, 'Misa II', '2022-07-31', 'II'),
(3, 3, 'Misa III', '2022-07-31', 'III'),
(4, 5, 'Misa IV', '2022-08-21', 'IV');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `bacaan`
--
ALTER TABLE `bacaan`
  ADD PRIMARY KEY (`id_bacaan`);

--
-- Indeks untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  ADD PRIMARY KEY (`id_hasil_prediksi`);

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indeks untuk tabel `jumlah_umat`
--
ALTER TABLE `jumlah_umat`
  ADD PRIMARY KEY (`id_jumlah_umat`);

--
-- Indeks untuk tabel `kub`
--
ALTER TABLE `kub`
  ADD PRIMARY KEY (`id_KUB`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id_prediksi`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD PRIMARY KEY (`id_tanggungan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bacaan`
--
ALTER TABLE `bacaan`
  MODIFY `id_bacaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  MODIFY `id_hasil_prediksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jumlah_umat`
--
ALTER TABLE `jumlah_umat`
  MODIFY `id_jumlah_umat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kub`
--
ALTER TABLE `kub`
  MODIFY `id_KUB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id_prediksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tanggungan`
--
ALTER TABLE `tanggungan`
  MODIFY `id_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
