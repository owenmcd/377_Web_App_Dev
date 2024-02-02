CREATE DATABASE `uhhdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
CREATE TABLE `songs` (
  `song_id` int NOT NULL AUTO_INCREMENT,
  `song_title` varchar(200) NOT NULL,
  `song_artist` varchar(100) DEFAULT NULL,
  `song_year` int DEFAULT NULL,
  `song_link` varchar(200) DEFAULT NULL,
  `song_int_album` varchar(100) DEFAULT NULL,
  `song_featured_artist` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
