-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wajahplastik
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `News`
--

DROP TABLE IF EXISTS `News`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `News` (
  `News_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `News_keyword` varchar(100) NOT NULL,
  `News_description` varchar(255) NOT NULL,
  `News_slug` varchar(255) NOT NULL,
  `News_title` varchar(255) NOT NULL,
  `News_date` date NOT NULL,
  `News_writer` varchar(255) NOT NULL,
  `News_editor` varchar(255) NOT NULL,
  `News_image` varchar(255) NOT NULL,
  `News_content` text NOT NULL,
  `News_source` varchar(255) NOT NULL,
  `News_tags` varchar(255) NOT NULL,
  `News_status` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `News_category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`News_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `News`
--

LOCK TABLES `News` WRITE;
/*!40000 ALTER TABLE `News` DISABLE KEYS */;
INSERT INTO `News` VALUES (2,'Workshop Wajah Plastik di Desa Girimas','<p>Dalam rangka menjadi Desa Wisata, Desa Giri Emas tidak hanya bergerak dalam bidang pengembangan daya tarik wisata Virtual tetapi juga bergerak dalam karya seni kreatif, ini dibuktikan dengan workshop Wajah Plastik yang dilaksanakan pada Sabtu 15/08/202','workshop-wajah-plastik-di-desa-girimas','Workshop Wajah Plastik di Desa Girimas','2020-08-17','I Wayan Krisnadhodi Wedartha','I Wayan Krisnadhodi Wedartha','kecil_1597631230WhatsApp Image 2020-08-15 at 15.39.03.jpeg','<p>Dalam rangka menjadi Desa Wisata, Desa Giri Emas tidak hanya bergerak dalam bidang pengembangan daya tarik wisata Virtual tetapi juga bergerak dalam karya seni kreatif, ini dibuktikan dengan workshop Wajah Plastik yang dilaksanakan pada Sabtu 15/08/2020 di Gazebo Wisata Gelung Sari Desa Giri Emas, Dalam Pembuatan karya seni kreatif Wajah Plastik kali ini anak anak Desa Giri Emas sangat antusias melakukan operasi plastik wajahnya Bapak Presiden Kita &quot;Jokowi&quot;..tampak anak - anak dalam kegiatan ini sangat Happy dengan tim mereka dan tidak takut kotor dengan sampah plastik yg mereka bawa dari rumah.</p>\r\n\r\n<p>Adalah Agoes Djanar (Owner Wajah Plastik Bratajana) dan Divabhawana pemuda dengan dengan kreasi seni yang sangat tinggi yang bisa mengolah sampah plastik menjadi wajah plastik.</p>\r\n\r\n<p>Sampah plastik adalah barang yang tidak berguna tetapi kalau diolah dan dikelola dengan baik akan menjadi karya yang luar biasa, seperti Wajah Plastik tersebut di atas.</p>\r\n\r\n<p>Semoga dengan kegiatan seperti ini Desa Giri Emas bisa menjadi Desa Wisata Virtual dan Juga bisa mengembangkan Wisata Ekonomi Kreatif dengan kearifan lokalnya</p>\r\n\r\n<p>Mari kita sayangi bumi dari polusi sampah plastik dengan 6R , Reduce Reuse Recycle Rethink Repair Refuse.</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n','http://giriemas-buleleng.desa.id/index.php/first/artikel/154-Workshop-Wajah-Plastik-di-Desa-Girimas','Workshop Wajah Plastik di Desa Girimas','publish','2021-09-02 21:57:19','2021-09-15 06:21:25','Berita'),(3,'Agus Janardana Sulap Sampah Plastik Jadi Karya Kreatif','<p>Berawal dari menekuni ilmu pengetahuan bidang desain grafis, salah satu pemuda luar biasa asal Desa Bungkulan kini telah mampu mendorong banyak generasi muda untuk lebih peduli akan buruknya dampak sampah, terutama sampah plastik yang memakan banyak wa','agus-janardana-sulap-sampah-plastik-jadi-karya-kreatif','Agus Janardana Sulap Sampah Plastik Jadi Karya Kreatif','2021-03-12','Admin Pemkab Buleleng','Admin Pemkab Buleleng','Agus_Janardana_Sulap_Sampah_Pl18.jpg','<p>Berawal dari menekuni ilmu pengetahuan bidang desain grafis, salah satu pemuda luar biasa asal Desa Bungkulan kini telah mampu mendorong banyak generasi muda untuk lebih peduli akan buruknya dampak sampah, terutama sampah plastik yang memakan banyak waktu agar bisa terurai.</p>\r\n\r\n<p>Desain grafis? Sampah?, tidak nyambung memang. Apa hubungannya desain grafis dengan sampah. Aneh kan? Mari kita simak hasil liputan Tim Peliputan dan Dokumentasi Dinas Kominfosanti Buleleng pada hari Rabu, (10/3)</p>\r\n\r\n<p>Pemuda ini bernama Made Agus Janardana, tempat tinggalnya beralamat di Banjar Dinas Ancak, Desa Bungkulan Kecamatan Sawan. Aktivitas kesehariannya adalah bekerja sebagai guru TIK di SMA Negeri 2 Tejakula. Nah dari profesinya itu lah, ia mencoba mengembangkan ekstrakurikuler multimedia kreatif.</p>\r\n\r\n<p>Sejak tahun 2018 lalu, Agus Janardana mulai mengkombinasikan ilmu desain grafisnya dengan sampah plastik yang dikenal dengan &ldquo;Wajah Plastik&rdquo;. Karya kreatif itu memanfaatkan sampah kemasan plastik. Contohnya, beberapa kemasan snack di potong-potong kecil dengan bentuk tertentu, kemudian ditempelkan ke desain wajah&nbsp; yang sudah dibuat.&nbsp;</p>\r\n\r\n<p>Dari ceritanya, karena banyak yang tahu bahwa ia memiliki kemampuan bagus di desain grafis, salah satu komunitas peduli lingkungan, yaitu Komunitas Sahabat Bumi Bali mengajak Agus Janardana ikut andil dalam mensosialisasikan pengelolaan sampah plastik di masyarakat. &ldquo;Dari situ saya punya ide. Warna warni sampah kemasan saya coba padukan dengan desain grafis. Saya terus mencoba membuat karya kreatif itu dari Agustus tahun 2018, hingga di Tahun 2019 saya memberanikan diri memperkenalkan Wajah Plastik ke publik,&rdquo; terangnya.&nbsp;</p>\r\n\r\n<p>Dalam momen itu juga, Agus Janardana mendaftarkan hak cipta karya seni kreatif wajah plastiknya ke Kementerian Hukum dan HAM pada Januari 2019. Dengan keunikan karyanya, pada saat itu juga wajah plastik viral di masyarakat luas. Hampir setiap hari Agus Janardana bersama Komunitas Sahabat Bumi Bali disibukan dengan kegiatan edukasi pemanfaatan sampah plastik menjadi karya kreatif yang memiliki nilai ekonomis yang terbilang cukup menggiurkan. &ldquo;Saya berkeliling desa, sekolah, perguruan tinggi hingga ke dinas-dinas memberikan edukasi pemanfaatan wajah plastik,&rdquo; ujarnya. Siapa sangka dari sampah plastik kemasan yang tidak memilik nilai ekonomis itu, bisa disulap menjadi sebuah karya yang menghasilkan rupiah.&nbsp; &nbsp;</p>\r\n\r\n<p>Tidak berhenti disitu, Agus Janardana mencoba mengembangkan lagi karyanya pada media topeng yang biasanya kita tahu berwarna kayu asli atau pun menyerupai warna kulit wajah. Inovasinya kini ia namai Made Oplas atau Manusia dengan Operasi Plastik. &ldquo;Dengan topeng unik ini saya mencoba memberikan edukasi secara daring. Dimana saya sendiri yang menjadi karakter made oplas itu. Ya agar biar penonton konten saya terhibur ketika menyimak eduksi pengelolaan sampah menjadi karya kreatif,&rdquo; ujarnya.</p>\r\n\r\n<p>Di tengah wabah Covid-19 dirinya juga tidak pernah berhenti untuk tetap berkarya, berbagai jenis karya unik pun ia pajang di rumahnya sendiri. Memang pemuda satu tidak bisa diam, ada saja yang dibuat. Ia menamai rumahnya &ldquo;House of Creativity&rdquo;, tentu segala jenis karya kreatif ciptaanya ada disana. &ldquo;Ada banyak karya kreatif, salah satunya ada meja dan kursi dari bahan ban bekas, dari bahan gulungan kabel dan ada yang menggunakan kayu bekas tebangan pohon besar,&rdquo; terangnya.</p>\r\n\r\n<p>Agus Janardana berharap para generasi muda Buleleng dapat membangkitkan semangat diri di tengah pandemi Covid-19, jangan berhenti menuangkan ide-ide kreatif. Terkait kelestarian lingkungan, ia mengajak generasi milenial untuk tidak takut kotor. &ldquo;Pungut sampahnya, tangan bisa dicuci. Lebih baik tangan kita kotor dari pada bumi ini yang kotor. Semua untuk kita, jadilah sahabat bumi yang senantiasa menjaga kelestarian lingkungan,&rdquo; pesannya. (Agst).</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n','https://bulelengkab.go.id/informasi/detail/berita/60-agus-janardana-sulap-sampah-plastik-jadi-karya-kreatif','Agus Janardana Sulap Sampah Plastik Jadi Karya Kreatif','publish','2021-09-02 22:19:14','2021-09-15 06:24:11','Berita');
/*!40000 ALTER TABLE `News` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `blog_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) NOT NULL,
  `blog_slug` varchar(100) NOT NULL,
  `blog_description` text DEFAULT NULL,
  `blog_img` varchar(100) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `gallery_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_judul` varchar(100) NOT NULL,
  `gallery_deskripsi` varchar(255) NOT NULL,
  `gallery_harga` int(10) unsigned NOT NULL,
  `gallery_kategori` varchar(255) NOT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gallery_sertifikatid` varchar(50) DEFAULT NULL,
  `gallery_sertilengkap` varchar(50) DEFAULT NULL,
  `gallery_slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (8,'Wajah Plastik Sample','Ini Merupakan Contoh Wajah Plastik Yang Dibuat Secara Personal dengan Orientasi Potrait',350000,'tematik','Hero.jpg','2021-08-20 21:48:58','2021-09-15 13:04:17','245','245/tjtjt/343/aoak/2021','wajah-plastik'),(12,'Wajah Plastik Sample','Ini Merupakan Contoh Wajah Plastik Yang Dibuat Secara Personal dengan Orientasi Potrait>',350000,'tematik','sample-landscape.jpg','2021-08-23 01:09:38','2021-09-06 21:58:50','456','245/tjtjt/343/aoak/2021','wajah-plastik');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021-08-07-165751','App\\Database\\Migrations\\BlogModels','default','App',1629354347,1),(2,'2021-08-19-055736','App\\Database\\Migrations\\Youtube','default','App',1629354347,1),(3,'2021-08-19-064751','App\\Database\\Migrations\\YoutubeModels','default','App',1629357325,2),(4,'2021-08-20-093424','App\\Database\\Migrations\\GalleryModel','default','App',1629455592,3),(5,'2021-09-02-071000','App\\Database\\Migrations\\News','default','App',1630583366,4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test','test@test.com','$2y$10$jvgpkYC64rJTzjX3DtPS.u3iErhBkUtNNmwGWuNMygLhf4RxB04Za','2021-07-31 22:01:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `youtube`
--

DROP TABLE IF EXISTS `youtube`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `youtube` (
  `youtube_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `youtube_link` varchar(100) NOT NULL,
  PRIMARY KEY (`youtube_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `youtube`
--

LOCK TABLES `youtube` WRITE;
/*!40000 ALTER TABLE `youtube` DISABLE KEYS */;
INSERT INTO `youtube` VALUES (1,'TNXHyTdZU8M'),(22,'eZX9qdSO0fA'),(23,'gTO3oe5_Lgw'),(24,'rqBmlscD8Kk');
/*!40000 ALTER TABLE `youtube` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-18 11:44:21
