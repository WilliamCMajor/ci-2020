/*
 Navicat Premium Data Transfer

 Source Server         : 本地链接
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : she8_ci_2020

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 23/04/2021 14:58:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `body` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (1, 6, 'article 1', '                        333333333333333333333333333333333                ', '/uploads/6081b07157683.png', '2021-04-23 01:17:00');
INSERT INTO `article` VALUES (2, 6, 'article 2', '                        333333333333333333333333333333333                ', '/uploads/6081b07157683.png', '2021-04-23 01:20:49');
INSERT INTO `article` VALUES (3, 6, 'article 3', '<p>123123555555555555555</p>', '/uploads/6081b092371ba.png', '2021-04-23 01:21:22');
INSERT INTO `article` VALUES (4, 6, 'article 4', '<p>fffffffffffffffffffffffffffffffffff</p>', '/uploads/60826b7f47cc8.jpg', '2021-04-23 01:56:28');
INSERT INTO `article` VALUES (5, 6, 'article 5', '                                3333333333333333333333333333333333        ', '/uploads/6081b95318454.png', '2021-04-23 01:58:43');
INSERT INTO `article` VALUES (7, 6, 'article 6', '<p>???? <b>wangEditor</b> ??????</p><p>6666666666666</p>', '/uploads/608256e2a2f53.png', '2021-04-23 13:10:58');
INSERT INTO `article` VALUES (8, 5, 'article 7', '<p>Welcome to the <b>wangEditor</b> rich text editor</p><p>1111111</p>', '/uploads/6082578745f78.png', '2021-04-23 13:13:43');
INSERT INTO `article` VALUES (10, 6, 'cat miao miao miao', '<p>&nbsp; &nbsp;Welcome to the <b>wangEditor</b> rich text editor</p><p>&nbsp;i like cat</p>', '/uploads/60826c9173301.jpg', '2021-04-23 14:43:29');

-- ----------------------------
-- Table structure for ci_animals
-- ----------------------------
DROP TABLE IF EXISTS `ci_animals`;
CREATE TABLE `ci_animals`  (
  `animal_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`animal_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ci_animals
-- ----------------------------
INSERT INTO `ci_animals` VALUES ('Facebook to announce new audio products on Monday - Recode', 'Facebook will also launch a product allowing its users to record brief voice messages and post them in their newsfeeds, and a podcast discovery product that will be connected with Spotify, according to the report, which cited sources.\r\n\r\nThe announcement will be made on Monday but some products will not show up for a while, the report added.\r\n\r\nA Facebook spokeswoman declined to comment. Spotify did not immediately respond to a request for comment on Sunday.\r\n\r\nFacebook started public testing of a new application dubbed Hotline earlier this month, where creators can speak and take live questions from an audience.\r\n\r\nThis Q&A product combines audio with text and video elements and comes as social media platforms experiment with a rush of new live audio features.\r\n\r\nThe success of the invite-only, year-old app Clubhouse, which has reported 10 million weekly active users, has demonstrated the potential of audio chat services, particularly during the COVID-19 pandemic.\r\n\r\nTwitter Inc has been testing its audio feature Spaces and Facebook is also dabbling with a live audio room offering within its Messenger Rooms.\r\n\r\n(Reporting by Kanishka Singh in Bengaluru and Elizabeth Culliford in New York; Editing by Karishma Singh)', 2, 2);
INSERT INTO `ci_animals` VALUES ('HACK Amazon Cancels The ', '                        There\'s few massively-multiplayer online (MMO) games that stand a chance of succeeding alongside World of Warcraft and The Elder Scrolls Online, but one carrying The Lord of the Rings name certainly had a chance. However, Amazon just canceled the game after three years of development.\r\n\r\nAs Reuters reports, the LotR MMO has been in development as a joint venture between Amazon Game Studios and Chinese video game holding company Leyou Technologies Holdings. In December last year, Tencent acquired Leyou, and that\'s ultimately what caused development to cease.\r\n\r\nIn a statement, an Amazon spokesperson explained, \"Following Leyou\'s recent acquisition by Tencent, we have been unable to secure terms to proceed with this title at this time.\" All existing Amazon Studio employees who were working on the game are being moved to other projects, confirming this isn\'t a project with any chance of being restarted.\r\n\r\nThe game was first announced by the Leyou-owned published Athlon Games back in 2018. At the time, Athlon had \"signed a long-term licensing agreement with Middle-earth Enterprises to develop and publish a video game based on The Lord of the Rings. Athlon Games is working with a partner developer to create an online game set in the world of Middle-earth at a time long before the events of The Lord of the Rings, exploring lands, people and creatures never seen before by fans of the Tolkien universe.\" That partner turned out to be Amazon.\r\n\r\nThe news is a blow for fans of the books and movies, but it\'s most frustrating for Amazon which is currently spending $465 million on a The Lord of the Rings TV series. An online game to sit alongside the show would have certainly increased the popularity (and revenue generated) for both.                ', 2, 5);
INSERT INTO `ci_animals` VALUES ('A Beginner\'s Guide To Listening To Audiobooks', 'There\'s really nothing like making it through a good book. It can expand your understanding of the world, give you something to do while you wait at the doctor\'s office, and everything in between. But not everyone has the time to sit down and crack open a tome. For those people, audiobooks are the way to go.\r\n\r\nListening to audiobooks during those little free moments of your day is now easier than ever, but the number of ways to do it can be kind of overwhelming. With dozens of apps to choose from and a whole slew of compatible devices, audiobook listeners have tons of options, but also tons of choices to make.\r\n\r\nFirst, get your hardware in order\r\nIf you\'re going to listen to audiobooks, then you need something to listen to audiobooks on. It\'s pretty safe to assume that anyone reading this has at least one device that fits the bill, as you can listen on pretty much any smartphone or tablet, most Kindle readers, and even an Apple Watch. \r\n\r\nA smartphone is probably the most straightforward way to go here, with most of the popular apps being available on both iOS and Android. Aside from that, the only other hardware issue you need to sort out is what sort of audio delivery contraption you\'ll use. Let\'s be real, phone speakers exist for a reason, but that reason is not to annoy everyone around you by blasting an audiobook of The Three-Body Problem. \r\n\r\nYou can use literally any headphones or Bluetooth speaker you own for this. I don\'t care if you use the Marshall Mode II earbuds, the Sonos Roam speaker, or some wired earbuds you picked up for $15 at the gas station. They\'ll all work. There\'s no need to be picky.', 2, 7);
INSERT INTO `ci_animals` VALUES ('Cyber Security Today, April 19, 2021 – 10-year prison term for hacker group manager, watch for these attacks against universities and more', 'An American court has sentenced a Ukrainian man to 10 years in prison for his role in the hacking and credit card theft group called FIN7 by researchers. The man was a manager and systems administrator for the group. He was arrested in Germany in 2018 and extradited to the U.S. In 2019 he pleaded guilty to one count of conspiracy to commit wire fraud and one count of conspiracy to commit computer hacking. FIN7 is also called Carbanak Group or Navigator Group by researchers. According to the Justice Department, FIN7 has more than 70 people who are hackers, malware developers, creators of phishing messages or have other duties. It is alleged the group caused over a billion dollars in losses in the U.S. alone.\r\n\r\nCyber attacks on universities and schools around the world have been increasing. Among the latest victims is the University of Hertfordshire in England, which last week had to cancel online classes, access to email and to critical business systems. But these aren’t the only kinds of attacks the education sector faces. According to a report on the news site The Record, university students and faculty in the U.S. are also getting emails with fake job offers. The offer is for an executive assistant position. It asks recipients to tell the company about bit about themselves and why they should be considered for a job. The goal is to get personal information that can be used in hacking. In one case the crook impersonated being an official from a legitimate company. In other cases the crook impersonated the head of a university department. Always be careful with email messages asking for personal information.\r\n\r\nSoftware developers using a tool called Codecov to help find defects in their code are urged to re-roll any credentials, tokens or keys in their environment that used a Codecov Bash uploader. This comes after the discovery this month that someone had modified the company’s Bash Uploader script. The Bash Uploader sends reports to the application. A threat actor could have exported information in a users’ continuous integration environment as far back as January 31st. Codecov users should check if their Bash Uploader was compromised. There’s a link with more information on how to do that here.\r\n\r\nFinally, a number of vulnerabilities have been found in popular software by researchers at Positive Security. These include the LibreOffice and OpenOffice productivity suites, the VLC media player, the Telegram text message app, the Nextcloud file hosting suite, the Wireshark network protocol analyzer and the Mumble open source voice chat app. Some of these have been patched or will be shortly. Make sure you’re running the latest versions, and look for more security updates soon.', 2, 10);
INSERT INTO `ci_animals` VALUES ('NASA\'s Mars helicopter makes 1st flight on another planet', '                                All systems were a go as NASA made history on the red planet Monday.\r\n\r\nThe agency launched its Ingenuity helicopter into the atmosphere of Mars around 3:30 am ET, marking the first powered, controlled flight of an aircraft on another planet.        ', 3, 11);
INSERT INTO `ci_animals` VALUES ('How a COVID-19 vaccine can (and cannot) affect menstruation, mammograms and more', '                    Can the vaccine affect my period?\r\nThe question of whether a COVID-19 vaccine could impact the menstrual cycle was prompted after an American professor of anthropology tweeted that she\'d experienced an unusually heavy period after being immunized.\r\n\r\nHer tweet prompted hundreds of other women to report that they too had experienced disruptions to their cycles — from missed periods to spotting to lighter or heavier bleeding than usual.\r\n\r\nNeuroscientist Liisa Galea, a professor of psychology at the University of British Columbia and a scientific adviser at the Women\'s Health Research Institute, said that while it\'s possible a vaccine could impact menstruation, it simply hasn\'t been studied enough to know for sure.\r\n\r\nAfter false starts and supply glitches, Canada\'s immunization campaign makes progress\r\n\"One of the receptors through which SARS-CoV-2 enters our bodies is in the uterine lining. I\'m wondering if maybe if you get the vaccine at the certain time in your cycle, you might notice some differences,\" she said.\r\n\r\nGalea has also heard anecdotal reports about women noticing changes in their period, but said it\'s much more likely that the general stress of living through a global pandemic might be responsible for variations in menstruation that women are reporting.\r\n\r\n\"The important thing is it\'s not going to be long lasting. You might see a disruption or some spotting, a little hiccup, but as far as I can tell, there\'s no evidence that your cycle is going to change past that.\"', 3, 12);
INSERT INTO `ci_animals` VALUES ('US, China agree to tackle climate crisis with urgency', '                    “The United States and China are committed to cooperating with each other and with other countries to tackle the climate crisis, which must be addressed with the seriousness and urgency that it demands,” their statement said.\r\n\r\nThe two countries will also continue to discuss “concrete actions in the 2020s to reduce emissions aimed at keeping the Paris Agreement-aligned temperature limit within reach”, it said.\r\n\r\nIn the Paris accord, countries agreed in 2015 to keep rising global temperatures to below 1.5 degrees Celsius (2.7 degrees Fahrenheit).\r\n\r\nChina and the US are the world’s top carbon polluters, pumping out nearly half of the fossil fuel fumes that are warming the planet’s atmosphere. Their cooperation is key to the success of global efforts to curb climate change, but frayed ties over human rights, trade and China’s territorial claims to Taiwan and the South China Sea have been threatening to undermine such efforts.', 3, 13);
INSERT INTO `ci_animals` VALUES ('Bicycle', '                A bicycle, also called a bike or cycle, is a human-powered or motor-powered, pedal-driven, single-track vehicle, having two wheels attached to a frame, one behind the other. A bicycle rider is called a cyclist, or bicyclist.\r\n\r\nBicycles were introduced in the 19th century in Europe, and by the early 21st century, more than 1 billion were in existence at a given time. These numbers far exceed the number of cars, both in total and ranked by the number of individual models produced.They are the principal means of transportation in many regions. They also provide a popular form of recreation, and have been adapted for use as children\'s toys, general fitness, military and police applications, courier services, bicycle racing, and bicycle stunts.    ', 0, 14);
INSERT INTO `ci_animals` VALUES ('Phil test', '                Contagion is a 2011 American thriller film directed by Steven Soderbergh. Its ensemble cast includes Marion Cotillard, Matt Damon, Laurence Fishburne, Jude Law, Gwyneth Paltrow, Kate Winslet, Bryan Cranston, Jennifer Ehle, and Sanaa Lathan. The plot concerns the spread of a virus transmitted by respiratory droplets and fomites, attempts by medical researchers and public health officials to identify and contain the disease, the loss of social order in a pandemic,and the introduction of a vaccine to halt its spread. To follow several interacting plot lines, the film makes use of the multi-narrative \"hyperlink cinema\" style, popularized in several of Soderbergh\'s films.    ', 0, 15);
INSERT INTO `ci_animals` VALUES ('627new test', '                    test test test', 0, 16);

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, 'admin', 'Administrator');
INSERT INTO `groups` VALUES (2, 'members', 'General User');

-- ----------------------------
-- Table structure for login_attempts
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------
INSERT INTO `login_attempts` VALUES (5, '127.0.0.1', 'yaphp', 1619109645);
INSERT INTO `login_attempts` VALUES (6, '127.0.0.1', 'yaphp', 1619113775);
INSERT INTO `login_attempts` VALUES (7, '127.0.0.1', 'yaphp', 1619113787);
INSERT INTO `login_attempts` VALUES (9, '127.0.0.1', 'yaphp', 1619160788);
INSERT INTO `login_attempts` VALUES (10, '127.0.0.1', 'yaphp', 1619160793);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `activation_selector` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `activation_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_selector` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED NULL DEFAULT NULL,
  `remember_selector` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `remember_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED NULL DEFAULT NULL,
  `active` tinyint(1) UNSIGNED NULL DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uc_email`(`email`) USING BTREE,
  UNIQUE INDEX `uc_activation_selector`(`activation_selector`) USING BTREE,
  UNIQUE INDEX `uc_forgotten_password_selector`(`forgotten_password_selector`) USING BTREE,
  UNIQUE INDEX `uc_remember_selector`(`remember_selector`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0');
INSERT INTO `users` VALUES (2, '68.148.179.237', 'will1', '$2y$10$372CF9GJ3AU5uH0XtGRaQeNpXYtCEvdmTDLCUWswwaY1wT8YTJl1a', 'she8@nait.ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1618824625, 1618831317, 1, 'will1', 'he', NULL, NULL);
INSERT INTO `users` VALUES (3, '68.148.179.237', 'philr', '$2y$10$yIP1oZJebhfT.ZwGTSvRLe50WfQqWkcd4rzD4H2yTaEBHioolQ6fm', 'philr@nait.ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1618830582, 1619010248, 1, 'Philp', 'Redmond', NULL, NULL);
INSERT INTO `users` VALUES (4, '68.148.179.237', 'CMajor', '$2y$10$yESqu2H4nII3zj2Nr6Wfr.WvKmFAj43Jbv4nVEtJQZa/6BCrYZkY6', 'siqing1209@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1618830765, NULL, 1, 'William', 'He', NULL, NULL);
INSERT INTO `users` VALUES (5, '68.148.179.237', 'asdasdasd', '$2y$10$5HFZqp.J1SNQKGNYN..rSeX1Sbii5ag2rXy0msUtAeR9NwkaYC0mm', 'test@home.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1618830896, NULL, 1, 'asdasd', 'asdasd', NULL, NULL);
INSERT INTO `users` VALUES (6, '127.0.0.1', 'yaphp', '$2y$10$PmRCbh3EIv9rvp310W11/uj/VOAbpuDIG40kDcXXieMgk4ESMGyOa', '123@qq.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1619109633, 1619160918, 1, 'cao', 'yang', NULL, NULL);

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uc_users_groups`(`user_id`, `group_id`) USING BTREE,
  INDEX `fk_users_groups_users1_idx`(`user_id`) USING BTREE,
  INDEX `fk_users_groups_groups1_idx`(`group_id`) USING BTREE,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES (1, 1, 1);
INSERT INTO `users_groups` VALUES (2, 1, 2);
INSERT INTO `users_groups` VALUES (3, 2, 2);
INSERT INTO `users_groups` VALUES (4, 3, 2);
INSERT INTO `users_groups` VALUES (5, 4, 2);
INSERT INTO `users_groups` VALUES (6, 5, 2);
INSERT INTO `users_groups` VALUES (7, 6, 2);

SET FOREIGN_KEY_CHECKS = 1;
