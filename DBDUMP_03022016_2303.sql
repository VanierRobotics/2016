-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2016 at 11:08 PM
-- Server version: 5.5.44-MariaDB
-- PHP Version: 5.6.16

SET FOREIGN_KEY_CHECKS = 0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `robotics_2016`
--
CREATE DATABASE IF NOT EXISTS `robotics_2016`
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_general_ci;
USE `robotics_2016`;

-- --------------------------------------------------------

--
-- Table structure for table `bios`
--
-- Creation: Feb 04, 2016 at 03:04 AM
--

CREATE TABLE `bios` (
  `bio_ID`         INT(11)     NOT NULL,
  `bio_Lang`       INT(2)      NOT NULL,
  `bio_FullName`   VARCHAR(50) NOT NULL,
  `bio_GOTName`    VARCHAR(50) NOT NULL,
  `bio_TeamID`     INT(2)      NOT NULL,
  `bio_Challenges` TEXT        NOT NULL,
  `bio_Experience` TEXT        NOT NULL,
  `bio_Image`      VARCHAR(50) DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `bios`
--

INSERT INTO `bios` (`bio_ID`, `bio_Lang`, `bio_FullName`, `bio_GOTName`, `bio_TeamID`, `bio_Challenges`, `bio_Experience`, `bio_Image`)
VALUES
  (2, 0, 'Alex Hayeur', 'Jaddon Bender', 0, 'Finalizing design processes.', 'Electrical design and electrical systems.',
   'AlexHayeur.jpg'),
  (3, 0, 'David Dahan', 'Morryn The Butcher (free folk)', 0, 'Remaining within the rules of the competition.', 'Becoming a part of the robotics team and finding out what can be accomplished when great minds combine.', 'DavidDahan.jpg'),
  (4, 0, 'Alex Stojda', 'Assollo', 1, 'Coordinating each sub-team in order for them to meet their respective deadlines', 'People are very stubborn and need alot of persuasion to change their views once they are set.', 'AlexStojda(Captain).jpg'),
  (5, 0, 'Charlie Cheng-Chang Tang', 'Yraegarys Dorraeiounos', 2, 'Finding out where the missing closing tag was missing.', 'Learning HTML.', 'CharlieTang.jpg'),
  (6, 0, 'Alec Zarow', 'Erock Wendwater', 3, 'To compose in major instead of minor.', 'I learned a lot about composing and different musical techniques.', 'AlecZarow.jpg'),
  (7, 0, 'Natasha Lalonde', 'Natari Sarsfield', 3, 'coordinating each sub-team in order for them to meet their respective deadlines', 'I have learned an incredible amount from coming to Vanier, a new school far away from any of my friends and my community. ', 'NatashaLalonde.jpg'),
  (9, 0, 'Jethro "Jet" Roy', 'Keath Tyrell', 0, 'Actually doing stuff that counts', 'I can actually do stuff that counts if I want', 'JethroRoy.jpg'),
  (10, 0, 'Stoianovici Cristian Andrei', 'Jon Sto', 0, 'Getting things ordered', 'How to be a mad scientist', 'StoCristian.jpg'),
  (11, 0, 'Zixin He', '', 0, 'To not get backstabbed.', 'Babysitting adult kids so they don\'t do anything dangerous and/or stupid.', 'ZixinHe(Captain).jpg'),
  (13, 0, 'Alexander Spinali', 'Torromir Galadhon', 0, 'Deciding on a final concept for the robot was a huge challenge as a team.', 'I learned some digital design as well as some debating skills to make sure that my ideas were seriously considered.', 'AlexanderSpinali.jpg'),
  (14, 0, 'Syeda Nessa', 'Anrea Appleton', 2, 'I\'m a newbie so everything is challenging atm...', 'I learnt how to make a website :0 ', 'SyedaNessa.jpg'),
  (15, 0, 'Yuxin Hu', 'Bancey Hayard', 3, 'Biggest challenge: To not sleep at all at night.', 'Biggest learning experience: Chemistry is what motivates me to study.', 'YuXinHu.jpg'),
  (16, 0, 'Daniel Wiktorczyk', 'Erner Worner', 0, 'Becoming first acquainted with the programming code', 'Learning about electrical work!', 'DanielWiktorczyk.jpg'),
  (17, 0, 'Daniel lee', 'Rhelmar Carson', 1, 'Making up ideas that would be amazing', 'How much time it take to build the kiosk', 'DanielLee.jpg'),
  (18, 0, 'Angela Athanasopoulos', 'Angelys Centyre', 1, 'Deciding whether to challenge my independence and go on a trip to Europe without my for the first time without my family. ', 'Drawing is one of the longest learning experience, since I\'ve done it for a long time and I keep learning more all the time.', 'AngelaAthanasopoulos.jpg'),
  (20, 0, 'Tian Yue Jiao', 'Gween Thorne', 2, 'Coming on time', 'How to screw screws on a very limited surface (I often screw up).', 'TianYueJiao.jpg'),
  (21, 0, 'Jaeeun Lee', 'Sharley Celtigar', 0, 'Working with people whom I don`t know well', 'Gathering various mechanisms to make a robot', 'JaeeunLee.jpg'),
  (22, 0, 'Xin Yu Zhang', 'Sharley Celtigar', 2, 'Start learning to code from scratch.', 'Being able to read basic codes.', 'XinYuZhang.jpg'),
  (23, 0, 'Nicola Grenon Vinci', 'Nykolaï Blackfyr', 0, 'Unscrew the stuck screws.', 'Overcome the parental attachment of the prototypes we created to destroy them.', 'NicolaGrenonVinci.jpg'),
  (24, 0, 'Haritos Kavallos', 'Lord Harryn Ashwood', 4, 'The biggest challenge lies in attempting to balance my involvement as team administrator with the other tasks associated with my job at Fort Vanier.', 'I have learned that plebs certainly enjoy waiting until the last minute to complete their tasks. It seems they enjoy the punishment of working on tight deadlines. ', 'HaritosKavallos.jpg'),
  (25, 0, 'Ian Phillips', 'Frenduk Solarus', 3, 'Winter', 'I learned how to operate a boom mic on a movie production set.', 'IanPhilips.jpg'),
  (27, 0, 'Jashana Baskaran', 'Kyra Orme', 1, 'Showing up on time ', 'Organization and Team Work', 'JashanaBaskara.jpg'),
  (28, 0, 'Paola Petitti', 'Paolari Seaworth', 3, 'The biggest challenge I encountered was deciding what props to use to create foley art.', 'The biggest learning experience would have to be learning how to use the audio recording programs.', 'PaolaPetitti.jpg'),
  (29, 0, 'Vanessa Mastropietro', 'Vanessa Mastropietro', 3, 'The biggest challenge I\'ve encountered so far is figuring out what props I can use for foley art', 'My biggest learning experience is the creativity is a key skill to have when working on a video', 'VanessaMastroPietro.jpg'),
  (30, 0, 'George Mavroeidis', 'Ando Tarlor', 3, 'Filming in the snow was really challenging.', 'Setting up the cameras and green screens was a nice experience to learn.', 'GeorgeMavroeidis.jpg'),
  (31, 0, 'Patrick Walling-Laperriere', 'The Enthusian', 0, 'Coordinating with all the other members and their ideas', 'Measure twice, cut once.', 'PatrickWallingLaperriere.jpg'),
  (32, 0, 'Jonathan Cyga', 'Peata Mallark', 3, 'Figuring out what were the biggest challenges I\'ve encountered.', 'My biggest learning experience was in high school when I got into photography and I had to learn everything about photography.', 'JonathanCyga.jpg'),
  (33, 0, 'Arjun Rajan', 'AJ the Secret Leader Westeros', 0, 'Rulling without anyone finding out.', '', 'ArjunRajan.jpg'),
  (34, 0, 'Massimo Triassi', 'Asneir', 3, 'Learning to manage such a large and enthusiastic team.', 'When we brought the team to a cold forest, it taught me a lot about how hard you can work a team.', 'MassimoTriassi(Captain).jpg'),
  (35, 0, 'Evangelos Dimopoulos', 'Aeron Seral', 2, 'actually having to work on things.', 'attempting to funnel my charisma into work (i failed).', 'EvanDimopolous.jpg'),
  (36, 0, 'Jaxon Lin', 'Jain Æðelwine', 0, 'Taking apart and rebuilding the same piece multiple times because we forgot something/it doesn\'t work.', 'Changing the length of a gear belt.', 'JaxonLin.jpg'),
  (37, 0, 'Alexander Oxorn', 'The Ox', 3, 'Find where I belong.', 'How to work with people', 'AlexOxorn.jpg'),
  (38, 0, 'Chris Iannotti', 'Roran Rykker', 3, 'Winter and the weather.', 'Video Editing and teamwork.', 'ChrisIanotti.jpg'),
  (40, 0, 'Ioana Bruj', 'Ioana "The Immortal" Bruj', 2, 'Keeping track of the big picture', 'Learning how to use Blender', 'IoanaBruj.jpg'),
  (41, 0, 'Sahar Haidary', '"Saharah Targaryen"', 2, 'Time Management', 'Learn how to use Blender', 'SaharHaidary.jpg'),
  (42, 0, 'Serena Tan', 'The Secret-Keeper', 2, 'Getting to school during winter break.', 'Learning how to use Blender.', 'SerenaTan.jpg'),
  (43, 0, 'Melissa Dunn', 'Melisari Frey', 3, 'Finding the right props for foley', 'Using the audio recording device', 'MelissaDunn.jpg'),
  (44, 0, 'Sabreena Mills ', 'Sabreansa Baratheon ', 3, 'I have had a hard time making time to help out. ', 'Time management is very important, balancing school, work, volunteer work and clubs can be quiet difficult. ', 'SabreenaMills.jpg'),
  (45, 0, 'Viveka Anban', 'Ayara Frosher', 3, 'The weather', 'I learnt how to use the reflector.', 'VivekaAnban.jpg'),
  (46, 0, 'Banujan Atputharajah', 'Lord Apu', 2, 'Deciding which technology to use for the website (CSS 3D or WebGL).', 'Working in teams and sharing different ideas.', 'BanujanAtputharajah.jpg'),
  (47, 0, 'Ariana Gagnon', 'Aenerya Galmaereon', 1, 'Getting every detail of kiosk finalized and done properly on time.', 'Everything!! There is always something new to learn from the team.', 'ArianaGagnon(Captain).jpg'),
  (49, 1, 'Alex Stojda', 'Assollo', 1, 'Coordinné toutes les équipes pour qu’elles puissent respecter leur date limite.', 'Les membres sont pas mal têtus et c’est difficile de leur faire changer les idées.', 'AlexStojda(Captain).jpg'),
  (50, 1, 'Alec Zarow', 'Erock Wendwater', 3, 'De composer en majeur au lieu de mineure.', 'J’ai beaucoup appris par rapport à la composition et aux différentes techniques musicales. ', 'AlecZarow.jpg'),
  (51, 1, 'Alexander Spinali', 'Torromir Galadhon', 0, 'C’était un grand défi d’équipe de parvenir à un accord pour le concept final du robot. ', 'J’ai appris comment faire de la conception digitale et j’ai également acquis des compétences de débat afin d’assurer que mes idées soient prises au sérieux. ', 'AlexanderSpinali.jpg'),
  (52, 1, 'Alexander Oxorn', 'The Ox', 3, 'Trouver ma place.', 'Comment travailler avec des gens.', 'AlexOxorn.jpg'),
  (53, 1, 'Alex Hayeur', 'Jaddon Bender', 0, 'Finaliser les processus de conception.', 'Conception électrical et systèmes électricaux. ', 'AlexHayeur.jpg'),
  (54, 1, 'Angela Athanasopoulos', 'Angelys Centyre', 1, 'Décider si je devrais me défier et prendre un voyage en Europe sans ma famille. ', 'Le dessin a longuement été une expérience d’apprentissage pour moi vu que je l’ai faite pour longtemps et que je continue toujours d’apprendre. \r\n', 'AngelaAthanasopoulos.jpg'),
  (55, 1, 'Ariana Gagnon', 'Aenerya Galmaereon', 1, 'Obtenir tous les détails de kiosque finalisé et fait correctement à temps.', '', 'ArianaGagnon(Captain).jpg'),
  (56, 1, 'Arjun Rajan', 'AJ the Secret Leader Westeros', 0, 'Faire les décisions sans que personne ne le sache.', '', 'ArjunRajan.jpg'),
  (57, 1, 'Banujan Atputharajah', 'Lord Apu', 2, 'Décider quelle technologie utiliser pour le site web. (CSS 3D or WebGL).', 'Travailler en équipe et partager des idées.', 'BanujanAtputharajah.jpg'),
  (58, 1, 'Charlie Cheng-Chang Tang', 'Yraegarys Dorraeiounos', 2, 'Apprendre à écrire couleur sans le “u”.', 'Apprendre le HTML.\r\n', 'CharlieTang.jpg'),
  (59, 1, 'Chris Iannotti', 'Roran Rykker', 3, 'L’hiver et la météo.', 'La rédaction d’un vidéo et le travail d’équipe.', 'ChrisIanotti.jpg'),
  (60, 1, 'Daniel lee', 'Rhelmar Carson', 1, 'Être à l’école pour travailler.', 'Travailler avec le site web ainsi que le kiosque.', 'DanielLee.jpg'),
  (61, 1, 'Daniel Wiktorczyk', 'Erner Worner', 0, 'Me familiariser avec le code de programmation.', 'Apprendre par rapport aux travaux électricaux.', 'DanielWiktorczyk.jpg'),
  (62, 1, 'David Dahan', 'Morryn The Butcher (free folk)', 0, 'Respecter les règles de la compétition.', 'Devenir membre de l’équipe robotique et découvrir ce qui peut être accomplit.', 'DavidDahan.jpg'),
  (63, 1, 'Evangelos Dimopoulos', 'Aeron Seral', 2, 'Devoir faire du travail.', 'Essayer d’intégrer mon charisme dans mon travail. (J’ai échoué)\r\n', 'EvanDimopolous.jpg'),
  (64, 1, 'George Mavroeidis', 'Ando Tarlor', 3, 'C’était très difficile de faire le tournage du film dans la neige.', 'J’ai aimé apprendre comment mettre les caméras et écrans verts en place.', 'GeorgeMavroeidis.jpg'),
  (65, 1, 'Haritos Kavallos', 'Lord Harryn Ashwood', 4, 'Le plus grand défi est d’essayer de trouver un équilibre entre mon implication comme administrateur d’équipe et entre les autres tâches que j’ai comme employé du Fort Vanier.', 'J’ai appris que les plebes aiment attendre à la dernière minute pour complèter leurs tâches. Ils semblent aimer le stress de travailler avec peu de temps.', 'HaritosKavallos.jpg'),
  (66, 1, 'Ian Phillips', 'Frenduk Solarus', 3, 'L’hiver.', 'J’ai appris comment opérer un microphone perche sur un site de production de film.', 'IanPhilips.jpg'),
  (67, 1, 'Ioana Bruj', 'Ioana "The Immortal" Bruj', 2, 'Garder l’objectif final en tête.', 'Apprendre à utiliser Blender.', 'IoanaBruj.jpg'),
  (68, 1, 'Jaeeun Lee', 'Sharley Celtigar', 0, 'Travailler avec des gens que je ne connais pas très bien.', 'Cueillir des mechanismes afin de créer un robot. ', 'JaeeunLee.jpg'),
  (69, 1, 'Jashana Baskaran', 'Kyra Orme', 1, 'Être à l’heure.', 'L’organisation et le travail d’équipe.', 'JashanaBaskara.jpg'),
  (70, 1, 'Jaxon Lin', 'Jain Æðelwine', 0, 'Démanteler et reconstruire les mêmes espèces parce que nous avons oublié quelque chose ou parce que quelque chose ne fonctionne pas.', 'Changer la longueur d’une ceinture d’engrenage.', 'JaxonLin.jpg'),
  (71, 1, 'Jethro "Jet" Roy', 'Keath Tyrell', 0, 'Faire de quoi qui aide pour de vrai.', 'Je peux vraiment faire de quoi qui aide pour de vrai.', 'JethroRoy.jpg'),
  (72, 1, 'Jonathan Cyga', 'Peata Mallark', 3, 'Déterminer mes plus grands défis. ', 'Ma plus grande expérience d’apprentissage était au secondaire quand j’ai commencé à faire la photographie et j’ai dû tout apprendre.', 'JonathanCyga.jpg'),
  (73, 1, 'Massimo Triassi', 'Asneir', 3, 'Apprendre à gérer une équipe si large et enthousiaste.', 'Quand j’ai apporté l’équipe dans un forêt froid, j’ai beaucoup appris sur la résistance de notre équipe.', 'MassimoTriassi(Captain).jpg'),
  (74, 1, 'Melissa Dunn', 'Melisari Frey', 3, 'Trouver les bonnes accessoires.', 'Utiliser le dipositif d’enregistrement d’audio.', 'MelissaDunn.jpg'),
  (75, 1, 'Natasha Lalonde', 'Natari Sarsfield', 3, 'Apprendre à travailler à l’extérieur de ma zone de confort avec des gens qui je ne connais pas.\r\n', 'J’ai appris l’importance de la proactivité: si on veut que quelque chose se fasse accomplir, on doit donner le coup d’envoi.', 'NatashaLalonde.jpg'),
  (76, 1, 'Nicola Grenon Vinci', 'Nykolaï Blackfyr', 0, 'Déviser les vis coincés.', 'Surmonter nos attachments parentaux envers les prototypes que nous avons créés afin d’être capable de les détruire.', 'NicolaGrenonVinci.jpg'),
  (77, 1, 'Paola Petitti', 'Paolari Seaworth', 3, 'Le plus grand défi que j’ai eu a été de décider quelles accessoires utilisées pour créer l’art foley. ', 'Ma plus grande expérience d’apprentissage a été d’apprendre à utiliser les programmes d’enregistrement d’audio.', 'PaolaPetitti.jpg'),
  (78, 1, 'Patrick Walling-Laperriere', 'The Enthusian', 0, 'Coordonner avec toutes les autres membres ainsi que leurs idées.', 'Mesurer deux fois, couper une fois.', 'PatrickWallingLaperriere.jpg'),
  (79, 1, 'Sabreena Mills ', 'Sabreansa Baratheon ', 3, 'J’ai de la difficulté à trouver du temps pour aider.', 'La gestion du temps est très difficile losrqu’on a l’école, le travail, le bénévolat et les clubs.', 'SabreenaMills.jpg'),
  (80, 1, 'Sahar Haidary', '"Saharah Targaryen"', 2, 'Gestion du temps', 'Apprendre à utiliser Blender.', 'SaharHaidary.jpg'),
  (81, 1, 'Serena Tan', 'The Secret-Keeper', 2, 'Aller à l’école durant la pause d’hiver.', 'Apprendre à utiliser Blender.', 'SerenaTan.jpg'),
  (82, 1, 'Stoianovici Cristian Andrei', 'Jon Sto', 0, 'Commander des choses.', 'Être un scientifique fou.', 'StoCristian.jpg'),
  (83, 1, 'Syeda Nessa', 'Anrea Appleton', 2, 'Je suis nouvelle, alors tout est difficile pour le moment.', 'J’ai appris comment créer un site web.', 'SyedaNessa.jpg'),
  (84, 1, 'Tian Yue Jiao', 'Gween Thorne', 2, 'Être à l’heure.', 'Comment viser des vis sur une surface limitée. (Je fais souvent des gaffes) ', 'TianYueJiao.jpg'),
  (85, 1, 'Vanessa Mastropietro', 'Vanessa Mastropietro', 3, 'Le plus grand défi que j’ai eu a été de décider quelles accessoires utilisées pour créer l’art foley.', 'Ma plus grande expérience d’apprentissage est parvenu lorsque j’ai réalisé que la créativité est une compétence essentielle à avoir lors de la création d’un vidéo.', 'VanessaMastroPietro.jpg'),
  (86, 1, 'Viveka Anban', 'Ayara Frosher', 3, 'La météo.', 'J’ai appris à utiliser le reflecteur.', 'VivekaAnban.jpg'),
  (87, 1, 'Xin Yu Zhang', 'Sharley Celtigar', 2, 'Commencer à apprendre à faire le code.', 'Être capable de lire des codes de base.', 'XinYuZhang.jpg'),
  (88, 1, 'Yuxin Hu', 'Bancey Hayard', 3, '', '', 'YuXinHu.jpg'),
  (89, 1, 'Zixin He', '', 0, 'De ne pas être trahi.',
   'Garder des adultes enfantines pour être sur qu’ils ne fassent rien de stupide ni de dangereux.',
   'ZixinHe(Captain).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--
-- Creation: Feb 04, 2016 at 12:33 AM
--

CREATE TABLE `book` (
  `id`      INT(11)                                                                                          NOT NULL,
  `book`    ENUM('HOME', 'VANIER', 'GAME', 'ROBOT', 'JOURNALISM', 'TEAM', 'GALLERY', 'TUTORIAL', 'SPONSORS') NOT NULL,
  `lang`    ENUM('EN', 'FR')                                                                                 NOT NULL,
  `content` VARCHAR(1000)                                                                                             DEFAULT NULL,
  `subpage` ENUM('BUILD', 'KIOSK', 'VIDEO', 'WEB')                                                                    DEFAULT NULL,
  `pageid`  INT(11)                                                                                          NOT NULL DEFAULT '0'
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1
  COMMENT = 'stores all text for description pages';

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book`, `lang`, `content`, `subpage`, `pageid`) VALUES
  (1, 'VANIER', 'EN', ' ', '', 1),
  (2, 'VANIER', 'EN', ' ', NULL, 2),
  (3, 'VANIER', 'EN', '<div class="book-content">\r\n<h1>Youth 3</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Being born out of wedlock in the puritan America of the 1950s, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<p>2</p>\r\n', '', 3),
  (4, 'VANIER', 'EN', 'page 4', NULL, 4),
  (5, 'VANIER', 'EN', 'page 5', NULL, 5),
  (6, 'VANIER', 'EN', 'page 6', NULL, 6),
  (7, 'VANIER', 'EN', 'page 7', NULL, 7),
  (8, 'VANIER', 'EN', 'page 8', NULL, 8),
  (10, 'VANIER', 'EN', ' <div class="book-content">\r\n<h1>Youth 10ffs</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Being born out of wedlock in the puritan America of the 1950s, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<p>2</p>\r\n', NULL, 9),
  (11, 'VANIER', 'EN', ' <div class="book-content">\r\n<h1>Youth 11</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Why does the other page not work, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<span class=\'page-number\'>11</span>\r\n', NULL, 10),
  (12, 'VANIER', 'EN', '<div class="book-content">\r\n<h1>Wilderness years</h1>\r\n<h2>Still Useless</h2>\r\n<p> "Becaiuse picture page example" <p>\r\n<p><img class="left-pic zoom-this" src="samples/steve-jobs/pics/21.jpg" width="172" height="213"> pictures n shit. \r\n the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately.</p>\r\n\r\n</div>\r\n<span class=\'page-number\'>12</span>', NULL, 11),
  (13, 'VANIER', 'EN',
   ' <div class="book-content">\r\n<h1>Fucking Book</h1>\r\n\r\n<h2>Jack ass</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Why does the other page not work, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<span class=\'page-number\'>13</span>\r\n',
   NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_desc`
--
-- Creation: Feb 04, 2016 at 12:33 AM
--

CREATE TABLE `gallery_desc` (
  `pic_id` INT(3)              NOT NULL,
  `desc`   VARCHAR(500)
           CHARACTER SET utf16 NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language_lookup`
--
-- Creation: Feb 04, 2016 at 02:06 AM
--

CREATE TABLE `language_lookup` (
  `lang_ID`          INT(11)     NOT NULL,
  `lang_Abreviation` CHAR(2)     NOT NULL,
  `lang_Name`        VARCHAR(10) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `language_lookup`
--

INSERT INTO `language_lookup` (`lang_ID`, `lang_Abreviation`, `lang_Name`) VALUES
  (0, 'EN', 'English'),
  (1, 'FR', 'French');

-- --------------------------------------------------------

--
-- Table structure for table `team_lookup`
--
-- Creation: Feb 04, 2016 at 02:07 AM
--

CREATE TABLE `team_lookup` (
  `team_ID`   INT(2)      NOT NULL,
  `team_Name` VARCHAR(15) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `team_lookup`
--

INSERT INTO `team_lookup` (`team_ID`, `team_Name`) VALUES
  (0, 'Build'),
  (1, 'Kiosk'),
  (2, 'Web'),
  (3, 'Video'),
  (4, 'Mentor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Feb 04, 2016 at 12:33 AM
--

CREATE TABLE `users` (
  `user_id`    INT(11)     NOT NULL,
  `username`   VARCHAR(20) NOT NULL,
  `password`   VARCHAR(64) NOT NULL,
  `first_name` VARCHAR(30) NOT NULL,
  `last_name`  VARCHAR(30) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
  (1, 'u3', 'fa074610667173c1d6e863930c2d2aee82a2323de25692ed36de4f87aeb3666f', 'Andrew', 'Hanichkovsky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bios`
--
ALTER TABLE `bios`
ADD PRIMARY KEY (`bio_ID`),
ADD KEY `bio_Lang` (`bio_Lang`),
ADD KEY `bio_TeamID` (`bio_TeamID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `book_id_uindex` (`id`);

--
-- Indexes for table `gallery_desc`
--
ALTER TABLE `gallery_desc`
ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `language_lookup`
--
ALTER TABLE `language_lookup`
ADD PRIMARY KEY (`lang_ID`);

--
-- Indexes for table `team_lookup`
--
ALTER TABLE `team_lookup`
ADD PRIMARY KEY (`team_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`user_id`),
ADD UNIQUE KEY `users_user_id_uindex` (`user_id`),
ADD UNIQUE KEY `users_username_uindex` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bios`
--
ALTER TABLE `bios`
MODIFY `bio_ID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 90;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 15;
--
-- AUTO_INCREMENT for table `language_lookup`
--
ALTER TABLE `language_lookup`
MODIFY `lang_ID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bios`
--
ALTER TABLE `bios`
ADD CONSTRAINT `bios_team_id` FOREIGN KEY (`bio_TeamID`) REFERENCES `team_lookup` (`team_ID`),
ADD CONSTRAINT `bios_lang_id` FOREIGN KEY (`bio_Lang`) REFERENCES `language_lookup` (`lang_ID`);
SET FOREIGN_KEY_CHECKS = 1;
