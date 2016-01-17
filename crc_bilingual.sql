CREATE TABLE crc_bilingual.book
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  book ENUM('HOME', 'VANIER', 'GAME', 'ROBOT', 'JOURNALISM', 'TEAM', 'GALLERY', 'TUTORIAL', 'SPONSORS') NOT NULL,
  lang ENUM('EN', 'FR') NOT NULL,
  content VARCHAR(1000),
  subpage ENUM('BUILD', 'KIOSK', 'VIDEO', 'WEB') DEFAULT NULL
);
CREATE UNIQUE INDEX book_id_uindex ON crc_bilingual.book (id);
ALTER TABLE crc_bilingual.book COMMENT = 'stores all text for description pages';